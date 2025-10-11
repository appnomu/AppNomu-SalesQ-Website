<?php
// Start output buffering
ob_start();

// Ensure session is started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Cloudflare Turnstile secret key
$turnstile_secret_key = '0x4AAAAAABky2Y4-5aCVubQqtGAsX2zviEY';

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php?contact_status=error&message=' . urlencode('Invalid request method.'));
    exit;
}

// Verify CSRF token if it exists
if (isset($_POST['csrf_token']) && isset($_SESSION['csrf_token'])) {
    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        header('Location: contact.php?contact_status=error&message=' . urlencode('Invalid security token. Please refresh and try again.'));
        exit;
    }
    // Regenerate CSRF token for next form submission
    unset($_SESSION['csrf_token']);
}

// Get and sanitize form data
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

// Validate required fields
$requiredFields = [
    'name' => 'Name',
    'email' => 'Email',
    'message' => 'Message'
];

$missingFields = [];
foreach ($requiredFields as $field => $label) {
    if (empty($$field)) {
        $missingFields[] = $label;
    }
}

// Validate Cloudflare Turnstile response
$turnstile_response = isset($_POST['cf-turnstile-response']) ? $_POST['cf-turnstile-response'] : '';

if (empty($turnstile_response)) {
    header('Location: contact.php?contact_status=error&message=' . urlencode('CAPTCHA verification failed. Please try again.'));
    exit;
}

// Verify Cloudflare Turnstile response
$data = [
    'secret' => $turnstile_secret_key,
    'response' => $turnstile_response,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];

$ch = curl_init('https://challenges.cloudflare.com/turnstile/v0/siteverify');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
curl_close($ch);

$outcome = json_decode($result, true);

// If Turnstile verification failed
if (!$outcome['success']) {
    header('Location: contact.php?contact_status=error&message=' . urlencode('CAPTCHA verification failed. Please try again.'));
    exit;
}

if (!empty($missingFields)) {
    $errorMessage = 'Please fill in all required fields: ' . implode(', ', $missingFields);
    header('Location: contact.php?contact_status=error&message=' . urlencode($errorMessage));
    exit;
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: contact.php?contact_status=error&message=' . urlencode('Please enter a valid email address.'));
    exit;
}

// Set default subject if not provided
if (empty($subject)) {
    $subject = "New Contact Form Submission";
} else {
    $subject = "Contact Form: " . $subject;
}

// Prepare email recipients
$to = 'support@appnomu.com, help@appnomu.com';

// Format the email body
$emailBody = "
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #1a2980; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background-color: #f9f9f9; }
        .footer { margin-top: 20px; padding: 10px; text-align: center; font-size: 12px; color: #777; }
        .field { margin-bottom: 10px; }
        .field strong { display: inline-block; width: 150px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>New Contact Submission</h2>
        </div>
        <div class='content'>
            <div class='field'><strong>Name:</strong> " . htmlspecialchars($name) . "</div>
            <div class='field'><strong>Email:</strong> " . htmlspecialchars($email) . "</div>
            <div class='field'><strong>Subject:</strong> " . htmlspecialchars($subject) . "</div>
            <div class='field'><strong>Message:</strong></div>
            <div>" . nl2br(htmlspecialchars($message)) . "</div>
        </div>
        <div class='footer'>
            <p>This email was sent from the AppNomu SalesQ Contact Form</p>
        </div>
    </div>
</body>
</html>
";

// Set email headers
$headers = [
    'MIME-Version: 1.0',
    'Content-type: text/html; charset=utf-8',
    'From: AppNomu SalesQ <noreply@appnomu.com>',
    'Reply-To: ' . $name . ' <' . $email . '>',
    'X-Mailer: PHP/' . phpversion()
];

// Log the contact request
$logFile = 'contact_submissions.log';
$logEntry = date('Y-m-d H:i:s') . ' | ' . 
            $name . ' | ' . 
            $email . ' | ' . 
            $subject . "\n";

// Try to write to log file
$logSuccess = file_put_contents($logFile, $logEntry, FILE_APPEND);

// Try to send email
$mailSuccess = mail($to, $subject, $emailBody, implode("\r\n", $headers));

// Clean output buffer
ob_end_clean();

// Redirect based on success/failure
if ($mailSuccess) {
    header('Location: contact.php?contact_status=success&name=' . urlencode($name));
    exit;
} else {
    header('Location: contact.php?contact_status=error&message=' . urlencode('Unable to send your message. Please try again later or email us directly.'));
    exit;
}
?>
