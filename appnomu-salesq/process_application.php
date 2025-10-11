<?php
// Start session for CSRF validation
if (!isset($_SESSION)) {
    session_start();
}

// Set JSON response header for AJAX requests
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    header('Content-Type: application/json');
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data with new field names
    $job_title = isset($_POST['job_title']) ? htmlspecialchars($_POST['job_title']) : 'General Application';
    $first_name = isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : '';
    $last_name = isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : '';
    $name = trim($first_name . ' ' . $last_name);
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $linkedin = isset($_POST['linkedin']) ? htmlspecialchars($_POST['linkedin']) : '';
    $portfolio = isset($_POST['portfolio']) ? htmlspecialchars($_POST['portfolio']) : '';
    $cover_letter = isset($_POST['cover_letter']) ? htmlspecialchars($_POST['cover_letter']) : '';
    $referral_source = isset($_POST['referral_source']) ? htmlspecialchars($_POST['referral_source']) : '';
    
    // Function to return JSON response for AJAX requests
    function returnResponse($success, $message) {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            echo json_encode(['success' => $success, 'message' => $message]);
            exit;
        } else {
            $status = $success ? 'success' : 'error';
            header("Location: careers.php?application=$status&message=" . urlencode($message));
            exit;
        }
    }
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($phone)) {
        returnResponse(false, "Please fill in all required fields.");
    }
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        returnResponse(false, "Invalid email format.");
    }
    
    // Handle resume upload
    $resume_path = '';
    $upload_error = '';
    
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        // Define allowed file types
        $allowed_types = array('application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $max_size = 5 * 1024 * 1024; // 5MB in bytes
        
        // Validate file type and size
        if (in_array($_FILES['resume']['type'], $allowed_types) && $_FILES['resume']['size'] <= $max_size) {
            // Create upload directory if it doesn't exist
            $upload_dir = __DIR__ . '/uploads/resumes/';
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }
            
            // Generate unique filename
            $filename = time() . '_' . preg_replace("/[^a-zA-Z0-9]/", "_", $name) . '_' . basename($_FILES['resume']['name']);
            $resume_path = $upload_dir . $filename;
            
            // Attempt to move the uploaded file
            if (!move_uploaded_file($_FILES['resume']['tmp_name'], $resume_path)) {
                $upload_error = "Failed to upload resume. Please try again.";
            }
        } else {
            $upload_error = "Invalid file format or size. Please upload a PDF, DOC, or DOCX file under 5MB.";
        }
    } else {
        $upload_error = "Resume is required. Please upload your resume.";
    }
    
    // If there was an upload error, return error response
    if (!empty($upload_error)) {
        returnResponse(false, $upload_error);
    }
    
    // Email recipient
    $to = "career@appnomu.com";
    
    // Email subject
    $subject = "Job Application: $job_title from $name";
    
    // Create email with attachment
    $boundary = md5(time());
    
    // Email headers with attachment support
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
    
    // HTML email body
    $html_message = "
    <html>
    <head>
        <title>Job Application from AppNomu SalesQ Website</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            h2 { color: #198754; }
            .details { background-color: #f8f9fa; padding: 15px; border-radius: 8px; border-left: 4px solid #198754; }
            .details p { margin: 8px 0; }
            .footer { margin-top: 20px; font-size: 12px; color: #666; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>New Job Application: $job_title</h2>
            <p>A new job application has been submitted through the AppNomu SalesQ website.</p>
            
            <div class='details'>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>LinkedIn:</strong> $linkedin</p>
                <p><strong>Portfolio:</strong> $portfolio</p>
                <p><strong>How they heard about us:</strong> $referral_source</p>
                <p><strong>Cover Letter:</strong> $cover_letter</p>
                <p><strong>Resume:</strong> See attached file</p>
                <p><strong>Date Submitted:</strong> " . date('Y-m-d H:i:s') . "</p>
            </div>
            
            <div class='footer'>
                <p>This is an automated message from the AppNomu SalesQ website.</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Build the email message with attachment
    $message = "--$boundary\r\n";
    $message .= "Content-Type: text/html; charset=UTF-8\r\n";
    $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $message .= $html_message . "\r\n";
    
    // Add attachment if file exists
    if (file_exists($resume_path)) {
        $file_content = file_get_contents($resume_path);
        $file_content = chunk_split(base64_encode($file_content));
        $file_name = basename($resume_path);
        
        $message .= "--$boundary\r\n";
        $message .= "Content-Type: application/octet-stream; name=\"$file_name\"\r\n";
        $message .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $message .= $file_content . "\r\n";
    }
    
    $message .= "--$boundary--\r\n";
    
    // Log the application to a file as a backup
    $logFile = __DIR__ . '/job_applications.log';
    $logEntry = date('Y-m-d H:i:s') . " | $job_title | $name | $email | $phone | $linkedin | $portfolio | $referral_source | $resume_path\n";
    file_put_contents($logFile, $logEntry, FILE_APPEND);
    
    // Send email with attachment
    $mailSuccess = mail($to, $subject, $message, $headers);
    
    // Return appropriate response
    if ($mailSuccess) {
        returnResponse(true, "Application submitted successfully! We will contact you within 48 hours.");
    } else {
        returnResponse(false, "Failed to send application. Please try again later or email us directly at career@appnomu.com");
    }
} else {
    // If not a POST request, redirect to the careers page
    header("Location: careers.php");
    exit;
}
?>
