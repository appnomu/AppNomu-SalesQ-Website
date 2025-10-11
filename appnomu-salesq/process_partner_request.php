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
    header('Location: partners.php?partner_request=error&message=' . urlencode('Invalid request method.'));
    exit;
}

// Verify CSRF token
if (empty($_POST['csrf_token']) || empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    header('Location: partners.php?partner_request=error&message=' . urlencode('Invalid security token. Please refresh the page and try again.'));
    exit;
}

// Regenerate CSRF token for the next form submission
unset($_SESSION['csrf_token']);

// Get and sanitize form data
$companyName = filter_input(INPUT_POST, 'companyName', FILTER_SANITIZE_STRING);
$firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$partnerType = filter_input(INPUT_POST, 'partnerType', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

// Validate required fields
$requiredFields = [
    'companyName' => 'Company Name',
    'firstName' => 'First Name',
    'lastName' => 'Last Name',
    'email' => 'Email Address',
    'partnerType' => 'Partner Type'
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
    header('Location: partners.php?partner_request=error&message=' . urlencode('CAPTCHA verification failed. Please try again.'));
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
    header('Location: partners.php?partner_request=error&message=' . urlencode('CAPTCHA verification failed. Please try again.'));
    exit;
}

if (!empty($missingFields)) {
    $errorMessage = 'Please fill in all required fields: ' . implode(', ', $missingFields);
    header('Location: partners.php?partner_request=error&message=' . urlencode($errorMessage));
    exit;
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: partners.php?partner_request=error&message=' . urlencode('Please enter a valid email address.'));
    exit;
}

// Prepare email recipient
$to = 'partner@appnomu.com';
$subject = 'New Partner Request: ' . $companyName;

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
            <h2>New Partner Request</h2>
        </div>
        <div class='content'>
            <div class='field'><strong>Company Name:</strong> " . htmlspecialchars($companyName) . "</div>
            <div class='field'><strong>Contact Person:</strong> " . htmlspecialchars($firstName . ' ' . $lastName) . "</div>
            <div class='field'><strong>Email:</strong> " . htmlspecialchars($email) . "</div>
            <div class='field'><strong>Phone:</strong> " . ($phone ? htmlspecialchars($phone) : 'Not provided') . "</div>
            <div class='field'><strong>Partner Type:</strong> " . ucfirst(htmlspecialchars($partnerType)) . "</div>
            <div class='field'><strong>Message:</strong></div>
            <div>" . nl2br(htmlspecialchars($message ?: 'No message provided')) . "</div>
        </div>
        <div class='footer'>
            <p>This email was sent from the AppNomu SalesQ Partner Request Form</p>
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
    'Reply-To: ' . $firstName . ' ' . $lastName . ' <' . $email . '>',
    'X-Mailer: PHP/' . phpversion()
];

// Log the partner request
$logFile = 'partner_requests.log';
$logEntry = date('Y-m-d H:i:s') . ' | ' . 
            $companyName . ' | ' . 
            $firstName . ' ' . $lastName . ' | ' . 
            $email . ' | ' . 
            $phone . ' | ' . 
            $partnerType . "\n";

// Try to write to log file
$logSuccess = file_put_contents($logFile, $logEntry, FILE_APPEND);

// Try to send email
$mailSuccess = mail($to, $subject, $emailBody, implode("\r\n", $headers));

// Clean output buffer
ob_end_clean();

// Redirect based on success/failure
if ($mailSuccess) {
    header('Location: partners.php?partner_request=success&name=' . urlencode($firstName));
    exit;
} else {
    header('Location: partners.php?partner_request=error&message=' . urlencode('Unable to send your request. Please try again later or contact us directly.'));
    exit;
}
?>
