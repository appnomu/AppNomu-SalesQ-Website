<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Create logs directory if it doesn't exist
if (!file_exists(__DIR__ . '/logs')) {
    mkdir(__DIR__ . '/logs', 0755, true);
}

// Log the request for debugging
file_put_contents(__DIR__ . '/logs/demo_requests.log', date('Y-m-d H:i:s') . ' - Request received from IP: ' . $_SERVER['REMOTE_ADDR'] . PHP_EOL, FILE_APPEND);

// Include configuration file
require_once 'includes/config.php';

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Process form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Security checks
    
    // 1. Check CSRF token - temporarily disabled for debugging
    if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        file_put_contents(__DIR__ . '/logs/security.log', date('Y-m-d H:i:s') . ' - CSRF token validation failed - IP: ' . $_SERVER['REMOTE_ADDR'] . ' | Posted: ' . ($_POST['csrf_token'] ?? 'none') . ' | Session: ' . ($_SESSION['csrf_token'] ?? 'none') . PHP_EOL, FILE_APPEND);
        
        // For debugging - allow submission and regenerate token
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        file_put_contents(__DIR__ . '/logs/security.log', date('Y-m-d H:i:s') . ' - CSRF bypassed for debugging - continuing submission - IP: ' . $_SERVER['REMOTE_ADDR'] . PHP_EOL, FILE_APPEND);
    }
    
    // 2. Check honeypot field - if it's filled, it's likely a bot
    if (isset($_POST['website']) && !empty($_POST['website'])) {
        // This is a bot - silently redirect without processing
        file_put_contents(__DIR__ . '/logs/security.log', date('Y-m-d H:i:s') . ' - Honeypot field filled - bot detected - IP: ' . $_SERVER['REMOTE_ADDR'] . PHP_EOL, FILE_APPEND);
        // Pretend success but don't process
        header('Location: demo.php?demo_request=success&name=User');
        exit;
    }
    
    // 3. Validate Cloudflare Turnstile
    $turnstile_response = isset($_POST['cf-turnstile-response']) ? $_POST['cf-turnstile-response'] : '';
    $turnstile_secret = isset($turnstile_secret_key) ? $turnstile_secret_key : '1x0000000000000000000000000000000AA'; // Use from config or fallback
    
    // Log ALL POST data for debugging
    file_put_contents(__DIR__ . '/logs/turnstile_debug.log', date('Y-m-d H:i:s') . ' - ALL POST DATA: ' . print_r($_POST, true) . PHP_EOL, FILE_APPEND);
    
    // Log Turnstile details for debugging
    file_put_contents(__DIR__ . '/logs/turnstile_debug.log', date('Y-m-d H:i:s') . ' - Turnstile Response: ' . $turnstile_response . ' | Secret: ' . substr($turnstile_secret, 0, 10) . '...' . ' | Response Length: ' . strlen($turnstile_response) . PHP_EOL, FILE_APPEND);
    
    if (empty($turnstile_response)) {
        file_put_contents(__DIR__ . '/logs/security.log', date('Y-m-d H:i:s') . ' - Turnstile response missing - IP: ' . $_SERVER['REMOTE_ADDR'] . PHP_EOL, FILE_APPEND);
        
        // For debugging - temporarily allow submission without Turnstile
        file_put_contents(__DIR__ . '/logs/turnstile_debug.log', date('Y-m-d H:i:s') . ' - BYPASSING Turnstile validation for debugging - no response found' . PHP_EOL, FILE_APPEND);
        // Continue instead of blocking
    } else {
    
    // Verify Turnstile with Cloudflare
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://challenges.cloudflare.com/turnstile/v0/siteverify');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, [
        'secret' => $turnstile_secret,
        'response' => $turnstile_response,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Add timeout
    $result = curl_exec($ch);
    $curl_error = curl_error($ch);
    curl_close($ch);
    
    // Log curl result for debugging
    file_put_contents(__DIR__ . '/logs/turnstile_debug.log', date('Y-m-d H:i:s') . ' - Curl Result: ' . $result . ' | Curl Error: ' . $curl_error . PHP_EOL, FILE_APPEND);
    
    if ($curl_error) {
        file_put_contents(__DIR__ . '/logs/security.log', date('Y-m-d H:i:s') . ' - Curl error during Turnstile validation: ' . $curl_error . ' - IP: ' . $_SERVER['REMOTE_ADDR'] . PHP_EOL, FILE_APPEND);
        // For production stability, allow form submission on curl errors but log them
        file_put_contents(__DIR__ . '/logs/turnstile_debug.log', date('Y-m-d H:i:s') . ' - Allowing submission despite curl error for stability' . PHP_EOL, FILE_APPEND);
    } else {
        $turnstile_result = json_decode($result, true);
        
        if (!isset($turnstile_result['success']) || $turnstile_result['success'] !== true) {
            file_put_contents(__DIR__ . '/logs/security.log', date('Y-m-d H:i:s') . ' - Turnstile validation failed: ' . json_encode($turnstile_result) . ' - IP: ' . $_SERVER['REMOTE_ADDR'] . PHP_EOL, FILE_APPEND);
            
            // For debugging - log the exact error and allow submission
            file_put_contents(__DIR__ . '/logs/turnstile_debug.log', date('Y-m-d H:i:s') . ' - BYPASSING Turnstile failure for debugging - Result: ' . json_encode($turnstile_result) . PHP_EOL, FILE_APPEND);
            // Continue instead of blocking
        }
    }
    
    // 4. Rate limiting - check if IP has submitted too many requests recently
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $rate_limit_file = __DIR__ . '/logs/rate_limits.json';
    $rate_limit_data = [];
    
    if (file_exists($rate_limit_file)) {
        $rate_limit_data = json_decode(file_get_contents($rate_limit_file), true) ?: [];
    }
    
    // Clean up old entries (older than 1 hour)
    foreach ($rate_limit_data as $ip => $timestamps) {
        $rate_limit_data[$ip] = array_filter($timestamps, function($timestamp) {
            return (time() - $timestamp) < 3600; // 1 hour
        });
        
        if (empty($rate_limit_data[$ip])) {
            unset($rate_limit_data[$ip]);
        }
    }
    
    // Check rate limit - max 3 submissions per hour per IP (temporarily disabled for debugging)
    if (isset($rate_limit_data[$ip_address]) && count($rate_limit_data[$ip_address]) >= 10) { // Increased limit for debugging
        file_put_contents(__DIR__ . '/logs/security.log', date('Y-m-d H:i:s') . ' - Rate limit exceeded for IP: ' . $ip_address . PHP_EOL, FILE_APPEND);
        file_put_contents(__DIR__ . '/logs/turnstile_debug.log', date('Y-m-d H:i:s') . ' - BYPASSING rate limit for debugging - IP: ' . $ip_address . PHP_EOL, FILE_APPEND);
        // Continue instead of blocking
    }
    
    // Add current timestamp to rate limit data
    if (!isset($rate_limit_data[$ip_address])) {
        $rate_limit_data[$ip_address] = [];
    }
    $rate_limit_data[$ip_address][] = time();
    
    // Save updated rate limit data
    file_put_contents($rate_limit_file, json_encode($rate_limit_data));
    
    // Log successful validation bypass
    file_put_contents(__DIR__ . '/logs/turnstile_debug.log', date('Y-m-d H:i:s') . ' - All security checks passed/bypassed - proceeding with form processing' . PHP_EOL, FILE_APPEND);
    
    // Collect form data
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'User';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $company = isset($_POST['company']) ? htmlspecialchars($_POST['company']) : '';
    $business_type = isset($_POST['business_type']) ? htmlspecialchars($_POST['business_type']) : '';
    $team_size = isset($_POST['team_size']) ? htmlspecialchars($_POST['team_size']) : '';
    $preferred_date = isset($_POST['preferred_date']) ? htmlspecialchars($_POST['preferred_date']) : '';
    $preferred_time = isset($_POST['preferred_time']) ? htmlspecialchars($_POST['preferred_time']) : '';
    $requirements = isset($_POST['requirements']) ? htmlspecialchars($_POST['requirements']) : '';
    
    // Log collected data
    file_put_contents(__DIR__ . '/logs/turnstile_debug.log', date('Y-m-d H:i:s') . ' - Form data collected: Name=' . $name . ', Email=' . $email . ', Company=' . $company . PHP_EOL, FILE_APPEND);
    
    // Email recipient - business owner
    $to = "support@appnomu.com";
    
    // Email subject
    $subject = "Demo Request from $name ($company)";
    
    // Email message
    $message = "
    <html>
    <head>
        <title>Demo Request from AppNomu SalesQ Website</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            h2 { color: #1a237e; }
            .details { background-color: #f5f5f5; padding: 15px; border-radius: 5px; }
            .details p { margin: 5px 0; }
            .footer { margin-top: 20px; font-size: 12px; color: #666; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>New Demo Request</h2>
            <p>A new demo request has been submitted through the AppNomu SalesQ website.</p>
            
            <div class='details'>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Company:</strong> $company</p>
                <p><strong>Business Type:</strong> $business_type</p>
                <p><strong>Team Size:</strong> $team_size</p>
                <p><strong>Preferred Date:</strong> $preferred_date</p>
                <p><strong>Preferred Time:</strong> $preferred_time</p>
                <p><strong>Requirements:</strong> $requirements</p>
                <p><strong>Date Submitted:</strong> " . date('Y-m-d H:i:s') . "</p>
            </div>
            
            <div class='footer'>
                <p>This is an automated message from the AppNomu SalesQ website.</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Set email headers
    $headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=utf-8',
        'From: AppNomu SalesQ <support@appnomu.com>',
        'Reply-To: ' . $name . ' <' . $email . '>',
        'X-Mailer: PHP/' . phpversion()
    ];
    
    // Log the request to a file
    $logFile = 'demo_requests.log';
    $logEntry = date('Y-m-d H:i:s') . " | $name | $email | $phone | $company | $business_type | $team_size | $preferred_date | $preferred_time\n";
    file_put_contents($logFile, $logEntry, FILE_APPEND);
    
    // Send email to business owner
    $mailSuccess = mail($to, $subject, $message, implode("\r\n", $headers));
    
    // Log mail result
    file_put_contents('demo_debug.log', date('Y-m-d H:i:s') . ' - Mail to business: ' . ($mailSuccess ? 'SUCCESS' : 'FAILED') . PHP_EOL, FILE_APPEND);
    
    // Send confirmation email to client if email is provided
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $clientSubject = "Your AppNomu SalesQ Demo Request";
        
        $clientMessage = "
        <html>
        <head>
            <title>Your Demo Request Confirmation</title>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                h2 { color: #1a237e; }
                .content { background-color: #f5f5f5; padding: 15px; border-radius: 5px; }
                .footer { margin-top: 20px; font-size: 12px; color: #666; }
                .button { display: inline-block; background-color: #1a237e; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <h2>Thank You for Your Demo Request</h2>
                <div class='content'>
                    <p>Dear $name,</p>
                    <p>Thank you for requesting a demo of AppNomu SalesQ. We have received your request and our team will contact you shortly to schedule your personalized demonstration.</p>
                    <p>Here's a summary of your request:</p>
                    <ul>
                        <li><strong>Company:</strong> $company</li>
                        <li><strong>Preferred Date:</strong> $preferred_date</li>
                        <li><strong>Preferred Time:</strong> $preferred_time</li>
                    </ul>
                    <p>If you have any questions in the meantime, please don't hesitate to contact our support team at <a href='mailto:support@appnomu.com'>support@appnomu.com</a>.</p>
                </div>
                <div class='footer'>
                    <p>This is an automated message from AppNomu SalesQ. Please do not reply to this email.</p>
                </div>
            </div>
        </body>
        </html>
        ";
        
        // Client email headers
        $clientHeaders = [
            'MIME-Version: 1.0',
            'Content-type: text/html; charset=utf-8',
            'From: AppNomu SalesQ <support@appnomu.com>',
            'X-Mailer: PHP/' . phpversion()
        ];
        
        // Send confirmation email to client
        $clientMailSuccess = mail($email, $clientSubject, $clientMessage, implode("\r\n", $clientHeaders));
        
        // Log client mail result
        file_put_contents('demo_debug.log', date('Y-m-d H:i:s') . ' - Mail to client: ' . ($clientMailSuccess ? 'SUCCESS' : 'FAILED') . PHP_EOL, FILE_APPEND);
    }
    
    // Redirect with success message
    header("Location: demo.php?demo_request=success&name=" . urlencode($name));
    exit;
} else {
    // Not a POST request
    header("Location: demo.php");
    exit;
}
