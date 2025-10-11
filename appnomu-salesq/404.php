<?php
// Load configuration
require_once __DIR__ . '/config.php';

// Set HTTP 404 status
header("HTTP/1.0 404 Not Found");

// Set the current page for navigation highlighting
$current_page = '404';

// Set page metadata
$page_title = '404 Page Not Found - AppNomu SalesQ';
$page_description = 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.';

// Additional CSS for 404 page styling
$additional_css = [];

// Custom CSS for 404 page
$custom_css = '
<style>
    .error-container {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 2rem;
    }
    .error-code {
        font-size: 8rem;
        font-weight: 700;
        color: #dc3545;
        line-height: 1;
    }
    .error-message {
        font-size: 1.5rem;
        margin: 1rem 0 2rem;
    }
</style>';

// Start output buffering
ob_start();
?>

<div class="error-container">
    <div class="container">
        <div class="error-code">404</div>
        <h1 class="error-message">Page Not Found</h1>
        <p class="lead mb-4">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        <a href="<?= url('/') ?>" class="btn btn-success btn-lg">Go to Homepage</a>
    </div>
</div>

<?php echo $custom_css; ?>

<?php
// Get the content
$content = ob_get_clean();

// Include the layout
include 'includes/layout.php';
?>
