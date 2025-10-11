<?php
// Simple test page to verify server functionality
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>AppNomu SalesQ - Server Test</title>";
echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>";
echo "</head>";
echo "<body>";

echo "<div class='container mt-5'>";
echo "<div class='row justify-content-center'>";
echo "<div class='col-md-8'>";

echo "<div class='card'>";
echo "<div class='card-header bg-success text-white'>";
echo "<h1 class='card-title mb-0'>🟢 Server Status Check</h1>";
echo "</div>";
echo "<div class='card-body'>";

// Test 1: PHP Version
echo "<div class='alert alert-info'>";
echo "<strong>PHP Version:</strong> " . phpversion();
echo "</div>";

// Test 2: Config file
echo "<div class='alert " . (file_exists('config.php') ? 'alert-success' : 'alert-danger') . "'>";
echo "<strong>Config File:</strong> " . (file_exists('config.php') ? '✅ Found' : '❌ Missing');
echo "</div>";

// Test 3: Layout file
echo "<div class='alert " . (file_exists('includes/layout.php') ? 'alert-success' : 'alert-danger') . "'>";
echo "<strong>Layout File:</strong> " . (file_exists('includes/layout.php') ? '✅ Found' : '❌ Missing');
echo "</div>";

// Test 4: Assets directory
echo "<div class='alert " . (is_dir('assets') ? 'alert-success' : 'alert-danger') . "'>";
echo "<strong>Assets Directory:</strong> " . (is_dir('assets') ? '✅ Found' : '❌ Missing');
echo "</div>";

// Test 5: Country content
echo "<div class='alert " . (file_exists('includes/country_content.php') ? 'alert-success' : 'alert-danger') . "'>";
echo "<strong>Country Content:</strong> " . (file_exists('includes/country_content.php') ? '✅ Found' : '❌ Missing');
echo "</div>";

// Test 6: Session functionality
session_start();
$_SESSION['test'] = 'working';
echo "<div class='alert " . (isset($_SESSION['test']) ? 'alert-success' : 'alert-danger') . "'>";
echo "<strong>Session Support:</strong> " . (isset($_SESSION['test']) ? '✅ Working' : '❌ Not Working');
echo "</div>";

echo "</div>";
echo "</div>";

echo "<div class='mt-3 text-center'>";
echo "<a href='index.php' class='btn btn-success'>Test Main Page</a> ";
echo "<a href='careers.php' class='btn btn-primary'>Test Careers Page</a>";
echo "</div>";

echo "</div>";
echo "</div>";
echo "</div>";

echo "</body>";
echo "</html>";
?>
