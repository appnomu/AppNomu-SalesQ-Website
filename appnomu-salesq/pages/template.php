<?php
// Set the current page for navigation highlighting
$current_page = 'page_name'; // Change this for each page
$page_title = 'Page Title | AppNomu SalesQ';
$page_description = 'Page description for SEO';

// Start output buffering
ob_start();
?>
<!-- Page-specific content goes here -->

<?php
// Get the buffered content
$content = ob_get_clean();

// Include the main layout
include '../includes/layout.php';
?>
