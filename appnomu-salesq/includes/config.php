<?php
// Load environment variables from .env file
$envFile = __DIR__ . '/../.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);
        
        if (!array_key_exists($name, $_ENV)) {
            putenv("$name=$value");
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }
}

// Set default timezone
date_default_timezone_set('Africa/Kampala');

// Determine the environment
$env = getenv('APP_ENV') ?: 'production';

// Base URL configuration
$base_url = rtrim(getenv('APP_URL') ?: '/landing', '/');
$asset_url = rtrim(getenv('ASSET_URL') ?: $base_url . '/assets', '/');

// Cloudflare Turnstile configuration - Production Keys
$turnstile_site_key = getenv('TURNSTILE_SITE_KEY') ?: '0x4AAAAAABky2ZVjyQirVHsh'; // Production site key
$turnstile_secret_key = getenv('TURNSTILE_SECRET_KEY') ?: '0x4AAAAAAAkQWOiVdK_OqynbQXMd8E_ZtAa'; // Production secret key

// Ensure the base URL starts with a slash
if (strpos($base_url, '/') !== 0) {
    $base_url = '/' . $base_url;
}

// Ensure the asset URL is properly formatted
if (strpos($asset_url, 'http') !== 0 && strpos($asset_url, '/') !== 0) {
    $asset_url = $base_url . '/' . ltrim($asset_url, '/');
}

// Get the current protocol (http or https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
$domain = $_SERVER['HTTP_HOST'];

// Function to generate absolute URLs
function url($path = '') {
    global $base_url;
    $path = ltrim($path, '/');
    
    // Handle full URLs
    if (strpos($path, 'http') === 0 || strpos($path, '//') === 0) {
        return $path;
    }
    
    // Handle anchor links
    if (strpos($path, '#') === 0) {
        return $path;
    }
    
    return $base_url . ($path ? '/' . $path : '');
}

// Function to generate asset URLs
function asset($path) {
    global $asset_url;
    
    // Return as is if already a full URL
    if (strpos($path, 'http') === 0 || strpos($path, '//') === 0) {
        return $path;
    }
    
    // Remove leading slash if present
    $path = ltrim($path, '/');
    
    // Ensure the asset URL ends with a slash
    $base = rtrim($asset_url, '/');
    
    return $base . '/' . $path;
}

// Function to get the current URL
function current_url() {
    global $protocol, $domain;
    return $protocol . $domain . $_SERVER['REQUEST_URI'];
}

// Function to detect user's country
function get_user_country() {
    // Check for manual country selection first
    if (isset($_GET['country']) && in_array($_GET['country'], ['KE', 'NG', 'ZA', 'TZ', 'RW', 'GLOBAL'])) {
        $_SESSION['user_country'] = $_GET['country'];
        // Remove the country parameter from the URL
        $url = strtok($_SERVER['REQUEST_URI'], '?');
        $params = [];
        parse_str(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY) ?? '', $params);
        unset($params['country']);
        if (!empty($params)) {
            $url .= '?' . http_build_query($params);
        }
        // Redirect to clean URL
        if (headers_sent() === false) {
            header('Location: ' . $url, true, 302);
            exit();
        }
    }
    
    // Return from session if already set
    if (isset($_SESSION['user_country'])) {
        return $_SESSION['user_country'];
    }
    
    $country = null;
    
    // Try to get country from Cloudflare (if using Cloudflare)
    if (isset($_SERVER['HTTP_CF_IPCOUNTRY'])) {
        $country = strtoupper($_SERVER['HTTP_CF_IPCOUNTRY']);
    } 
    // Fallback to IP geolocation API (using ip-api.com)
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
            $response = @file_get_contents("http://ip-api.com/json/{$ip}?fields=countryCode");
            if ($response) {
                $data = json_decode($response, true);
                $country = strtoupper($data['countryCode'] ?? 'GLOBAL');
            }
        }
        $country = $country ?? 'GLOBAL';
    }
    
    // Map to your supported countries
    $supportedCountries = ['KE', 'NG', 'ZA', 'TZ', 'RW'];
    if (!in_array($country, $supportedCountries)) {
        $country = 'GLOBAL';
    }
    
    $_SESSION['user_country'] = $country;
    return $country;
}

// Function to get environment variable
function env($key, $default = null) {
    $value = getenv($key);
    
    if ($value === false) {
        return $default;
    }
    
    switch (strtolower($value)) {
        case 'true':
        case '(true)':
            return true;
        case 'false':
        case '(false)':
            return false;
        case 'null':
        case '(null)':
            return null;
        case 'empty':
        case '(empty)':
            return '';
    }
    
    return $value;
}
?>
