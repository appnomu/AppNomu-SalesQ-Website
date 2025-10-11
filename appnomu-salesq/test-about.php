<?php
// Simple test page for about functionality
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>About Page Test</title>";
echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>";
echo "</head>";
echo "<body>";

echo "<div class='container mt-5'>";
echo "<div class='row justify-content-center'>";
echo "<div class='col-md-8'>";

echo "<div class='card'>";
echo "<div class='card-header bg-primary text-white'>";
echo "<h1 class='card-title mb-0'>🧪 About Page Test</h1>";
echo "</div>";
echo "<div class='card-body'>";

// Test 1: Config loading
try {
    require_once __DIR__ . '/config.php';
    echo "<div class='alert alert-success'>";
    echo "<strong>✅ Config loaded successfully</strong>";
    echo "</div>";
} catch (Exception $e) {
    echo "<div class='alert alert-danger'>";
    echo "<strong>❌ Config loading failed:</strong> " . $e->getMessage();
    echo "</div>";
}

// Test 2: Country content loading
try {
    require_once __DIR__ . '/includes/country_content.php';
    echo "<div class='alert alert-success'>";
    echo "<strong>✅ Country content loaded successfully</strong>";
    echo "</div>";
} catch (Exception $e) {
    echo "<div class='alert alert-danger'>";
    echo "<strong>❌ Country content loading failed:</strong> " . $e->getMessage();
    echo "</div>";
}

// Test 3: Translation function
echo "<div class='alert " . (function_exists('__') ? 'alert-success' : 'alert-warning') . "'>";
echo "<strong>Translation Function:</strong> " . (function_exists('__') ? '✅ Available' : '⚠️ Not Available');
echo "</div>";

// Test 4: Layout file
echo "<div class='alert " . (file_exists('includes/layout.php') ? 'alert-success' : 'alert-danger') . "'>";
echo "<strong>Layout File:</strong> " . (file_exists('includes/layout.php') ? '✅ Found' : '❌ Missing');
echo "</div>";

// Test 5: About JS file
echo "<div class='alert " . (file_exists('assets/js/about.js') ? 'alert-success' : 'alert-warning') . "'>";
echo "<strong>About JS File:</strong> " . (file_exists('assets/js/about.js') ? '✅ Found' : '⚠️ Missing');
echo "</div>";

echo "</div>";
echo "</div>";

echo "<div class='mt-3 text-center'>";
echo "<a href='about.php' class='btn btn-primary'>Test About Page</a> ";
echo "<a href='index.php' class='btn btn-success'>Back to Home</a>";
echo "</div>";

echo "</div>";
echo "</div>";
echo "</div>";

echo "</body>";
echo "</html>";
?>
