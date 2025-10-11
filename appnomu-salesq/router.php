<?php
/**
 * Simple PHP Router for LiteSpeed
 */

// Define the base path
$base_path = __DIR__;

// Get the request URI and remove query string
$request_uri = strtok($_SERVER['REQUEST_URI'], '?');

// Remove the base path from the request URI
$base_dir = str_replace('\', '/', dirname($_SERVER['SCRIPT_NAME']));
if ($base_dir === '/') {
    $base_dir = '';
}

// Remove base directory from request URI
if (strpos($request_uri, $base_dir) === 0) {
    $request_uri = substr($request_uri, strlen($base_dir));
}

// Remove trailing slash
$request_uri = rtrim($request_uri, '/');

// Default to index if empty
if (empty($request_uri)) {
    $request_uri = 'index';
}

// Define the path to the requested file
$file_path = $base_path . $request_uri . '.php';
$dir_path = $base_path . $request_uri . '/index.php';

// Check if the file exists
if (file_exists($file_path) && is_file($file_path)) {
    // Include the file
    require $file_path;
} elseif (file_exists($dir_path) && is_file($dir_path)) {
    // Include the directory index
    require $dir_path;
} else {
    // Handle 404
    header("HTTP/1.0 404 Not Found");
    if (file_exists($base_path . '/404.php')) {
        require $base_path . '/404.php';
    } else {
        echo '404 Not Found';
    }
    exit;
}
