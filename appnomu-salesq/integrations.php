<?php
// Set the current page for navigation highlighting
$current_page = 'integrations';
$page_title = 'Integrations | AppNomu SalesQ';
$page_description = 'Connect AppNomu SalesQ with your favorite business tools and platforms.';

// Redirect to integrations hub with 301 (permanent) status code
header('HTTP/1.1 301 Moved Permanently');
header('Location: /integrations/');
exit;
?>
