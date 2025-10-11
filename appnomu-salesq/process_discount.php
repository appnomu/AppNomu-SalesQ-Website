<?php
// Enable basic error reporting and make errors visible during testing
error_reporting(E_ALL);
ini_set('display_errors', 1); // Show errors during development
ini_set('log_errors', 1);
ini_set('error_log', dirname(__DIR__) . '/logs/php_errors.log');

// Create error log directory if it doesn't exist
$errorLogDir = dirname(__DIR__) . '/logs';
if (!file_exists($errorLogDir)) {
    mkdir($errorLogDir, 0755, true);
}

// Start session
session_start();

// Cloudflare Turnstile secret key
$turnstile_secret_key = '0x4AAAAAABky2Y4-5aCVubQqtGAsX2zviEY';

// Debug info - log the form submission
error_log("Discount form processing started at " . date('Y-m-d H:i:s'));
error_log("POST data: " . print_r($_POST, true));

// Define APP_ROOT
if (!defined('APP_ROOT')) {
    define('APP_ROOT', dirname(__DIR__));
}

// Include necessary files - db_config.php FIRST (per memory)
require_once APP_ROOT . '/config/db_config.php'; // Database must be first
require_once APP_ROOT . '/config/email_config.php'; 

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

// Function to validate business email manually
function validate_business_email($email) {
    // Basic email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['valid' => false, 'message' => 'Invalid email format'];
    }
    
    // Get domain from email
    $parts = explode('@', $email);
    $domain = strtolower(end($parts));
    
    // List of common free email domains
    $nonBusinessDomains = [
        'gmail.com', 'yahoo.com', 'hotmail.com', 'outlook.com', 
        'aol.com', 'icloud.com', 'mail.com', 'proton.me',
        'protonmail.com', 'zoho.com', 'yandex.com', 'live.com',
        'msn.com', 'me.com', 'inbox.com', 'gmx.com'
    ];
    
    // Check if domain is in the non-business domains list
    if (in_array($domain, $nonBusinessDomains)) {
        return [
            'valid' => false,
            'message' => 'Please use a company email address, not a personal email service'
        ];
    }
    
    return ['valid' => true, 'message' => 'Valid business email'];
}

// Simple function to send email fallback
function send_simple_email($to, $subject, $message) {
    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/html; charset=UTF-8',
        'From: AppNomu SalesQ <web@appnomu.com>',
        'Reply-To: web@appnomu.com',
        'X-Mailer: PHP/' . phpversion()
    ];
    
    return mail($to, $subject, $message, implode("\r\n", $headers));
}

try {
    // Check if this is a POST request
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        throw new Exception("Invalid request method - expected POST, got " . $_SERVER["REQUEST_METHOD"]);
    }
    
    // Log the form submission
    error_log("Discount application form submitted");
    
    // Validate Cloudflare Turnstile response
    $turnstile_response = isset($_POST['cf-turnstile-response']) ? $_POST['cf-turnstile-response'] : '';
    if (empty($turnstile_response)) {
        error_log("Turnstile response is missing");
        throw new Exception("CAPTCHA verification failed. Please try again.");
    }
    
    // Verify Turnstile token via API
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
    
    if (!$outcome['success']) {
        error_log("Turnstile verification failed: " . print_r($outcome, true));
        throw new Exception("CAPTCHA verification failed. Please try again.");
    }
    
    error_log("Turnstile verification successful");
    
    // Gather data from form - new field mappings
    $phone = sanitize_input($_POST['phone'] ?? '');
    $full_name = sanitize_input($_POST['full_name'] ?? '');
    $job_title = sanitize_input($_POST['job_title'] ?? '');
    $organization_name = sanitize_input($_POST['organization_name'] ?? '');
    $business_type = sanitize_input($_POST['business_type'] ?? '');
    $country = sanitize_input($_POST['country'] ?? '');
    $organization_size = sanitize_input($_POST['organization_size'] ?? '');
    $registration_number = sanitize_input($_POST['registration_number'] ?? '');
    $business_email = filter_var($_POST['business_email'] ?? '', FILTER_SANITIZE_EMAIL);
    $website = filter_var($_POST['website'] ?? '', FILTER_SANITIZE_URL);
    $needs = sanitize_input($_POST['needs'] ?? '');
    $service_plan = sanitize_input($_POST['service_plan'] ?? '');
    $users = sanitize_input($_POST['users'] ?? '');
    
    // Log collected data for debugging
    error_log("Form data processed - Name: $full_name, Email: $business_email, Service: $service_plan");
    
    // Debug check - identify missing required fields
    $missing_fields = [];
    if (empty($phone)) $missing_fields[] = 'phone';
    if (empty($full_name)) $missing_fields[] = 'full_name';
    if (empty($organization_name)) $missing_fields[] = 'organization_name';
    if (empty($business_email)) $missing_fields[] = 'business_email';
    if (empty($needs)) $missing_fields[] = 'needs';
    if (empty($service_plan)) $missing_fields[] = 'service_plan';
    
    if (!empty($missing_fields)) {
        error_log("Missing required fields: " . implode(', ', $missing_fields));
    }
    
    // Validate all required fields
    if (empty($phone) || empty($full_name) || empty($organization_name) || empty($business_email) || 
        empty($needs) || empty($service_plan)) {
        throw new Exception("All required fields must be completed. Missing: " . implode(', ', $missing_fields));
    }
    
    // Validate business email
    $emailValidation = validate_business_email($business_email);
    if (!$emailValidation['valid']) {
        throw new Exception($emailValidation['message']);
    }
    
    // Add submission timestamp
    $submission_date = date('Y-m-d H:i:s');
    
    // Check if database connection exists
    if (!isset($conn) || !$conn) {
        error_log("Database connection variable is not set or invalid");
        throw new Exception("Database connection failed. Please try again later.");
    }
    
    // Check the actual structure of the discount_applications table
    $table_exists = $conn->query("SHOW TABLES LIKE 'discount_applications'")->num_rows > 0;
    
    if (!$table_exists) {
        error_log("Creating new discount_applications table with updated schema");
        
        // Create new table with new schema
        $create_table_sql = "CREATE TABLE IF NOT EXISTS discount_applications (
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            phone_number VARCHAR(20) NOT NULL,
            contact_name VARCHAR(100) NOT NULL,
            organization_name VARCHAR(100) NOT NULL,
            business_email VARCHAR(100) NOT NULL,
            website VARCHAR(255) NOT NULL,
            organization_about TEXT NOT NULL,
            start_date DATE DEFAULT CURRENT_DATE,
            operation_areas TEXT,
            service_requested VARCHAR(50) NOT NULL,
            submission_date DATETIME NOT NULL,
            status VARCHAR(20) DEFAULT 'pending',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        
        if (!$conn->query($create_table_sql)) {
            error_log("Failed to create discount_applications table: " . $conn->error);
            throw new Exception("Database setup failed. Please contact the administrator.");
        }
    }
    
    // Get table structure to determine which fields to use
    error_log("Checking existing table structure");
    $result = $conn->query("DESCRIBE discount_applications");
    $existing_columns = [];
    while ($row = $result->fetch_assoc()) {
        $existing_columns[] = $row['Field'];
    }
    error_log("Existing columns: " . implode(', ', $existing_columns));
    
    // Prepare SQL with appropriate column names based on existing structure
    $sql = "INSERT INTO discount_applications (
        phone_number,
        " . (in_array('contact_name', $existing_columns) ? "contact_name" : "full_name") . ", 
        organization_name,
        business_email,
        website,
        " . (in_array('organization_about', $existing_columns) ? "organization_about" : "needs") . ",
        " . (in_array('start_date', $existing_columns) ? "start_date" : "created_at") . ", 
        " . (in_array('operation_areas', $existing_columns) ? "operation_areas" : "organization_size") . ",
        " . (in_array('service_requested', $existing_columns) ? "service_requested" : "service_plan") . ",
        submission_date,
        status,
        created_at
    ) VALUES (?, ?, ?, ?, ?, ?, CURRENT_DATE, ?, ?, ?, 'pending', NOW())";
    
    error_log("SQL Query: $sql");
    
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        error_log("Database preparation failed: " . $conn->error);
        throw new Exception("Database preparation failed: " . $conn->error);
    }
    
    // Mapping the fields based on what exists
    error_log("Binding parameters to prepared statement");
    $stmt->bind_param("sssssssss", 
        $phone, 
        $full_name, // will be mapped to contact_name in old schema
        $organization_name,
        $business_email,
        $website,
        $needs, // will be mapped to organization_about in old schema
        $organization_size, // will be mapped to operation_areas in old schema
        $service_plan, // will be mapped to service_requested in old schema
        $submission_date
    );
    
    // Execute the statement
    error_log("Executing SQL statement");
    if (!$stmt->execute()) {
        error_log("Database execution failed: " . $stmt->error);
        throw new Exception("Database execution failed: " . $stmt->error);
    }
    
    error_log("Application data saved to database successfully");
    
    // Close statement
    $stmt->close();

    // Prepare email sending - with fallback to simple mail() function
    try {
        // Get customer email template
        $customerTemplatePath = APP_ROOT . '/templates/discount_application_email.html';
        $adminTemplatePath = APP_ROOT . '/templates/discount_application_admin_notification.html';
        
        if (!file_exists($customerTemplatePath) || !file_exists($adminTemplatePath)) {
            error_log("Email template not found at: " . $customerTemplatePath);
            throw new Exception("Email template not found");
        }
        
        // 1. Send confirmation email to applicant
        $template = file_get_contents($customerTemplatePath);
        
        $customerReplacements = [
            '{{full_name}}' => $full_name,
            '{{organization}}' => $organization_name,
            '{{service}}' => $service_plan,
            '{{current_year}}' => date('Y'),
            '{{email}}' => $business_email
        ];
        
        $customerEmailBody = str_replace(
            array_keys($customerReplacements),
            array_values($customerReplacements),
            $template
        );
        
        // Try to send email using EmailSender class if it exists
        $emailSenderSuccess = false;
        
        if (file_exists(APP_ROOT . '/includes/EmailSender.php')) {
            try {
                require_once APP_ROOT . '/includes/EmailSender.php';
                $emailSender = new EmailSender();
                
                $emailSender->sendEmail(
                    $business_email,
                    'Thank You for Your AppNomu Discount Application',
                    $customerEmailBody,
                    true
                );
                
                $emailSenderSuccess = true;
                error_log("Customer email sent successfully via EmailSender");
            } catch (Exception $e) {
                error_log("EmailSender error: " . $e->getMessage());
                // Will fall back to simple mail below
            }
        }
        
        // Fallback to simple mail function if EmailSender failed
        if (!$emailSenderSuccess) {
            send_simple_email(
                $business_email,
                'Thank You for Your AppNomu Discount Application',
                $customerEmailBody
            );
            error_log("Customer email sent using fallback method");
        }
        
        // 2. Send notification to admin using simple mail (always)
        $adminTemplate = file_get_contents($adminTemplatePath);
        
        // Prepare replacement values for admin email
        $adminReplacements = [
            '{{full_name}}' => $full_name,
            '{{job_title}}' => $job_title,
            '{{organization}}' => $organization_name,
            '{{business_type}}' => $business_type,
            '{{country}}' => $country,
            '{{organization_size}}' => $organization_size,
            '{{registration_number}}' => $registration_number,
            '{{email}}' => $business_email,
            '{{phone}}' => $phone,
            '{{service}}' => $service_plan,
            '{{users}}' => $users,
            '{{needs}}' => $needs,
            '{{current_year}}' => date('Y')
        ];
        
        $adminEmailBody = str_replace(
            array_keys($adminReplacements),
            array_values($adminReplacements),
            $adminTemplate
        );
        
        send_simple_email(
            'web@appnomu.com',
            'New Discount Application Received',
            $adminEmailBody
        );
        
        error_log("Admin notification email sent");
            
    } catch (Exception $e) {
        // Log email error but don't stop the process
        error_log("Email sending failed: " . $e->getMessage());
        // We don't throw here because we still want to show success to the user
    }
    
    // Set success message in session
    $_SESSION['success_message'] = "Thank you! Your discount application has been submitted successfully. We will review your application and contact you soon. Please check your email for confirmation.";
    
    // Debug - check redirection
    error_log("Processing complete - redirecting to discount-application.php?status=success");
    
    // Redirect back to form with success message
    header("Location: discount-application.php?status=success");
    exit();
    
} catch (Exception $e) {
    // Log the error for debugging
    error_log("Discount Application Error: " . $e->getMessage());
    error_log("Error details: " . print_r($e, true));
    
    // Set error message in session
    $_SESSION['error_message'] = "An error occurred: " . $e->getMessage();
    
    // Redirect back to form with error
    error_log("Redirecting to discount-application.php?status=error after error");
    header("Location: discount-application.php?status=error");
    exit();
}
?>
