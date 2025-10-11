<?php
// This is an extremely simplified version to ensure it works properly

// Prevent any output before our JSON
ob_start();

// Bare minimum response
$response = array(
    'success' => true,
    'message' => "Thank you for subscribing! You'll receive updates on new job opportunities."
);

// Clean any output buffer
while (ob_get_level()) {
    ob_end_clean();
}

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($response);
exit;


/**
 * Function to save subscriber to database
 * Uncomment and implement if database storage is needed
 */
/*
function saveSubscriberToDatabase($email) {
    // Database connection and insertion code would go here
    // Example using PDO:
    
    try {
        $db = new PDO('mysql:host=localhost;dbname=appnomu', 'username', 'password');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $db->prepare("INSERT INTO subscribers (email, subscribed_at, source) VALUES (?, NOW(), 'careers')");
        $stmt->execute([$email]);
        
        return true;
    } catch(PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        return false;
    }
}
*/
?>
