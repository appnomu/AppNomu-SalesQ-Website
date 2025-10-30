<?php
/**
 * AppNomu SalesQ Configuration Example
 * 
 * Copy this file to config.php and update with your actual credentials
 * NEVER commit config.php to version control
 */

// Base URL Configuration
define('BASE_URL', 'https://yourdomain.com');
define('SITE_NAME', 'AppNomu SalesQ');

// Database Configuration (if applicable)
define('DB_HOST', 'localhost');
define('DB_NAME', 'your_database_name');
define('DB_USER', 'your_database_user');
define('DB_PASS', 'your_database_password');

// API Keys (Replace with your actual keys)
define('GOOGLE_ANALYTICS_ID', 'UA-XXXXXXXXX-X');
define('FACEBOOK_PIXEL_ID', 'XXXXXXXXXXXXXXXX');

// Email Configuration
define('SMTP_HOST', 'smtp.example.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'your_email@example.com');
define('SMTP_PASS', 'your_email_password');
define('SMTP_FROM', 'noreply@yourdomain.com');
define('SMTP_FROM_NAME', 'AppNomu SalesQ');

// Payment Gateway Configuration (if applicable)
define('FLUTTERWAVE_PUBLIC_KEY', 'FLWPUBK-xxxxxxxxxxxxxxxx');
define('FLUTTERWAVE_SECRET_KEY', 'FLWSECK-xxxxxxxxxxxxxxxx');
define('STRIPE_PUBLIC_KEY', 'pk_test_xxxxxxxxxxxxxxxx');
define('STRIPE_SECRET_KEY', 'sk_test_xxxxxxxxxxxxxxxx');

// Third-party Integrations
define('HUBSPOT_API_KEY', 'your_hubspot_api_key');
define('MAILCHIMP_API_KEY', 'your_mailchimp_api_key');

// Security Settings
define('ENCRYPTION_KEY', 'your_random_32_character_key_here');
define('SESSION_LIFETIME', 3600); // 1 hour in seconds

// Environment
define('ENVIRONMENT', 'production'); // development, staging, or production
define('DEBUG_MODE', false); // Set to false in production

// Helper Functions
function url($path = '') {
    return rtrim(BASE_URL, '/') . '/' . ltrim($path, '/');
}

function asset($path) {
    return url($path);
}

// Error Reporting (based on environment)
if (ENVIRONMENT === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}
