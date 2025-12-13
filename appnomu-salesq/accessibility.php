<?php
// Set current page for active navigation
$current_page = 'accessibility';
$page_title = 'Accessibility Statement | AppNomu SalesQ';
$page_description = 'Our commitment to making AppNomu SalesQ accessible to all users, regardless of ability.';

// Set page-specific keywords for SEO
$page_keywords = 'Web Accessibility Uganda, Inclusive Design Africa, WCAG Compliance, Accessible Business Software, Disability Access Technology, Screen Reader Compatible, Accessible CRM Uganda, Inclusive Business Tools';

// Additional CSS for this page
$additional_css = [
    'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;600;700&display=swap',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
    '/assets/css/legal-pages-modern.css'
];

// No additional JS needed since accessibility.js is already loaded in layout.php

// Start output buffering
ob_start();
?>

<style>
    /* Accessibility styles */
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }
    
    /* High contrast mode styles */
    body.high-contrast {
        background-color: #000 !important;
        color: #fff !important;
    }
    
    body.high-contrast a,
    body.high-contrast h1,
    body.high-contrast h2,
    body.high-contrast h3,
    body.high-contrast h4,
    body.high-contrast h5,
    body.high-contrast h6 {
        color: #ffff00 !important;
    }
    
    body.high-contrast .btn-outline-light {
        background-color: #000 !important;
        color: #fff !important;
        border: 2px solid #fff !important;
    }
    
    body.high-contrast .btn-outline-light.active {
        background-color: #fff !important;
        color: #000 !important;
    }
    
    body.high-contrast .accessibility-card {
        background: #000 !important;
        border: 2px solid #fff !important;
    }
    
    body.high-contrast .accessibility-card h2,
    body.high-contrast .accessibility-card h3 {
        color: #ffff00 !important;
    }
    
    body.high-contrast .hero-section {
        background: #000 !important;
    }
    
    body.high-contrast .contact-section {
        background-color: #000 !important;
        border: 2px solid #fff !important;
    }
    
    body.high-contrast .wcag-badge {
        background-color: #ffff00 !important;
        color: #000 !important;
    }
    
    /* Reduced motion mode styles */
    body.reduced-motion * {
        animation-duration: 0.001s !important;
        transition-duration: 0.001s !important;
        scroll-behavior: auto !important;
    }
    
    /* Active state for accessibility buttons */
    .btn-outline-light.active {
        background-color: #ffffff;
        color: #198754;
    }
    
    .hero-section {
        background: linear-gradient(135deg, #198754 0%, #146c43 100%);
        padding: 120px 0 80px;
        margin-top: 0;
        position: relative;
        overflow: hidden;
        color: #fff;
    }
    
    .hero-section h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }
    
    .hero-section p {
        font-size: 1.25rem;
        opacity: 0.9;
        max-width: 600px;
        margin: 0 auto;
        text-shadow: 0 1px 2px rgba(0,0,0,0.15);
    }
    
    .content-section {
        padding: 60px 0;
    }
    
    .accessibility-card {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        padding: 40px;
        margin-bottom: 30px;
        position: relative;
    }
    
    .accessibility-card h2 {
        color: #ffffff;
        font-weight: 600;
        margin-bottom: 25px;
        padding-bottom: 15px;
        position: relative;
    }
    
    .accessibility-card h2:after {
        content: "";
        position: absolute;
        width: 70px;
        height: 3px;
        background-color: #198754;
        bottom: 0;
        left: 0;
    }
    
    .accessibility-card h3 {
        font-size: 1.5rem;
        margin-top: 30px;
        margin-bottom: 15px;
        color: #ffffff;
    }
    
    .accessibility-card p,
    .accessibility-card li {
        color: rgba(255, 255, 255, 0.7);
    }
    
    .feature-item {
        margin-bottom: 20px;
        padding-left: 30px;
        position: relative;
    }
    
    .feature-item i {
        color: #198754;
        position: absolute;
        left: 0;
        top: 3px;
    }
    
    .contact-section {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 10px;
        padding: 30px;
        margin-top: 40px;
        border-left: 4px solid #198754;
    }
    
    .wcag-badge {
        background-color: #198754;
        color: white;
        border-radius: 5px;
        padding: 4px 10px;
        margin-right: 10px;
        font-weight: 600;
        font-size: 0.8rem;
        display: inline-block;
        margin-bottom: 5px;
    }
</style>

<!-- Clean Header Section (Matching About Page Pattern) -->
<header class="page-header position-relative overflow-hidden py-5">
    <!-- Subtle pattern overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNMCwwaDEwMHYxMDBoLTEwMHoiIGZpbGw9Im5vbmUiLz48cGF0aCBkPSJNMCwwbDEwMCwxMDAiIHN0cm9rZT0icmdiYSgwLDAsMCwwLjAzKSIgc3Ryb2tlLXdpZHRoPSIwLjUiLz48L3N2Zz4='); opacity: 0.4;"></div>
    
    <div class="container position-relative">
        <div class="row align-items-center py-3">
            <div class="col-lg-8 mx-auto text-center">
                <!-- Accessibility Badge -->
                <div class="mb-3">
                    <div class="bg-white bg-opacity-75 rounded-pill px-4 py-2 shadow-sm d-inline-flex align-items-center">
                        <span class="badge rounded-pill bg-success text-white me-2">WCAG 2.1</span>
                        <div class="small text-dark d-flex align-items-center">
                            <i class="fas fa-universal-access me-2 text-success"></i>
                            <span class="fw-semibold">AA Compliant</span>
                        </div>
                    </div>
                </div>
                
                <h1 class="fw-bold mb-3 text-dark" style="font-size: 2.5rem;">Accessibility Statement</h1>
                <p class="lead text-dark opacity-75 mb-4">Our commitment to digital inclusion and web accessibility for all users</p>
                
                <!-- Accessibility Controls -->
                <div class="d-flex justify-content-center gap-3 mt-4" role="toolbar" aria-label="Accessibility controls">
                    <button id="toggle-high-contrast" class="btn btn-outline-success" aria-pressed="false">
                        <i class="fas fa-adjust me-2" aria-hidden="true"></i>High Contrast
                    </button>
                    <button id="toggle-reduced-motion" class="btn btn-outline-success" aria-pressed="false">
                        <i class="fas fa-running me-2" aria-hidden="true"></i>Reduce Motion
                    </button>
                </div>
                
                <!-- Quick Stats -->
                <div class="d-flex flex-wrap justify-content-center mt-4 gap-4">
                    <div class="text-center">
                        <div class="fw-bold fs-5 text-success">WCAG 2.1</div>
                        <div class="small text-dark opacity-75">AA Standard</div>
                    </div>
                    <div class="text-center">
                        <div class="fw-bold fs-5 text-success">100%</div>
                        <div class="small text-dark opacity-75">Keyboard Accessible</div>
                    </div>
                    <div class="text-center">
                        <div class="fw-bold fs-5 text-success">Screen Reader</div>
                        <div class="small text-dark opacity-75">Compatible</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Subtle decorative elements -->
    <div class="position-absolute top-0 end-0 d-none d-lg-block" style="opacity: 0.05; z-index: 1;">
        <svg width="200" height="200" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#198754" d="M47.5,-57C59.2,-45.2,65.1,-27.6,67.2,-9.8C69.4,8,67.7,26,58.7,39.4C49.7,52.8,33.3,61.5,14.6,67.6C-4.2,73.7,-25.2,77.2,-40.6,69.4C-56,61.7,-65.8,42.7,-71.1,22.3C-76.3,1.9,-77.1,-19.9,-68.7,-36.1C-60.2,-52.2,-42.6,-62.7,-25.5,-66C-8.3,-69.3,8.5,-65.3,23.8,-62C39.1,-58.6,53,-68.7,47.5,-57Z" transform="translate(100 100)" />
        </svg>
    </div>
</header>

<!-- Main Content -->
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accessibility-card">
                    <h2>Our Commitment to Accessibility</h2>
                    <p>AppNomu SalesQ is committed to ensuring digital accessibility for people of all abilities. We are continually improving the user experience for everyone and applying the relevant accessibility standards.</p>
                    
                    <h3>Conformance Status</h3>
                    <p>We strive to conform to the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA. These guidelines explain how to make web content more accessible to people with a wide array of disabilities, including:</p>
                    
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="fas fa-low-vision" aria-hidden="true"></i>
                                <strong>Visual impairments</strong> - Including blindness, low vision, and color blindness
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="fas fa-deaf" aria-hidden="true"></i>
                                <strong>Hearing impairments</strong> - Including deafness and hard of hearing
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="fas fa-hands" aria-hidden="true"></i>
                                <strong>Motor limitations</strong> - Including limited fine motor control
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="fas fa-brain" aria-hidden="true"></i>
                                <strong>Cognitive limitations</strong> - Including learning disabilities
                            </div>
                        </div>
                    </div>
                    
                    <h3>Accessibility Features</h3>
                    <p>AppNomu SalesQ includes the following accessibility features:</p>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="fas fa-keyboard" aria-hidden="true"></i>
                                <strong>Keyboard Navigation</strong> - All features are accessible using only a keyboard
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                <strong>Skip to Content</strong> - Allows keyboard users to bypass navigation menus
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="fas fa-heading" aria-hidden="true"></i>
                                <strong>Semantic Structure</strong> - Proper headings and landmarks for screen readers
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="fas fa-text-height" aria-hidden="true"></i>
                                <strong>Text Resizing</strong> - Content remains readable when zoomed up to 200%
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="fas fa-adjust" aria-hidden="true"></i>
                                <strong>Color Contrast</strong> - Sufficient contrast between text and background
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="fas fa-image" aria-hidden="true"></i>
                                <strong>Alt Text for Images</strong> - Text alternatives for non-decorative images
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="fas fa-laptop" aria-hidden="true"></i>
                                <strong>Responsive Design</strong> - Site works on various devices and screen sizes
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="fas fa-file-alt" aria-hidden="true"></i>
                                <strong>ARIA Attributes</strong> - Enhanced semantics for assistive technologies
                            </div>
                        </div>
                    </div>
                    
                    <h3>Keyboard Shortcuts</h3>
                    <p>The following keyboard shortcuts are available throughout our website:</p>
                    <ul>
                        <li><strong>Alt + A</strong>: Open accessibility menu</li>
                        <li><strong>Tab</strong>: Navigate between focusable elements</li>
                        <li><strong>Enter</strong>: Activate the focused element</li>
                        <li><strong>Escape</strong>: Close dialogs and dropdowns</li>
                    </ul>
                    
                    <h3>WCAG 2.1 Compliance</h3>
                    <p>Our website aims to comply with WCAG 2.1 Level AA success criteria. Here are some of the specific guidelines we address:</p>
                    
                    <div class="mt-3">
                        <span class="wcag-badge">1.1.1</span> <span>Non-text Content</span><br>
                        <span class="wcag-badge">1.3.1</span> <span>Info and Relationships</span><br>
                        <span class="wcag-badge">1.4.3</span> <span>Contrast (Minimum)</span><br>
                        <span class="wcag-badge">2.1.1</span> <span>Keyboard</span><br>
                        <span class="wcag-badge">2.4.3</span> <span>Focus Order</span><br>
                        <span class="wcag-badge">2.4.7</span> <span>Focus Visible</span><br>
                        <span class="wcag-badge">3.3.1</span> <span>Error Identification</span><br>
                        <span class="wcag-badge">4.1.2</span> <span>Name, Role, Value</span>
                    </div>
                    
                    <div class="contact-section mt-5">
                        <h3 class="mb-4">Feedback and Support</h3>
                        <p>We welcome your feedback on the accessibility of AppNomu SalesQ. Please let us know if you encounter any accessibility barriers:</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-envelope me-2 text-success" aria-hidden="true"></i> Email: <a href="mailto:support@appnomu.com">support@appnomu.com</a></li>
                            <li><i class="fas fa-phone me-2 mt-2 text-success" aria-hidden="true"></i> Phone: <a href="tel:+256200948420">+256 200 948 420</a></li>
                            <li><i class="fas fa-comment me-2 mt-2 text-success" aria-hidden="true"></i> <a href="#" onclick="window.openLiveChat(); return false;">Live Chat</a></li>
                        </ul>
                        <p class="mt-3 mb-0">We try to respond to feedback within 2 business days.</p>
                    </div>
                    
                    <div class="mt-5">
                        <p><small>This statement was created on July 15, 2025, using the <a href="https://www.w3.org/WAI/planning/statements/" target="_blank" rel="noopener noreferrer">W3C Accessibility Statement Generator</a>.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Debug Script for Accessibility Functions -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Accessibility debug: DOMContentLoaded fired');
    
    // Check if accessibility buttons exist
    const highContrastBtn = document.getElementById('toggle-high-contrast');
    const reducedMotionBtn = document.getElementById('toggle-reduced-motion');
    
    console.log('Accessibility debug: High Contrast button exists:', !!highContrastBtn);
    console.log('Accessibility debug: Reduced Motion button exists:', !!reducedMotionBtn);
    
    // Add direct event listeners to verify functionality
    if(highContrastBtn) {
        console.log('Accessibility debug: Adding test click handler to High Contrast button');
        highContrastBtn.addEventListener('click', function() {
            console.log('Accessibility debug: High Contrast button clicked');
        });
    }
    
    if(reducedMotionBtn) {
        console.log('Accessibility debug: Adding test click handler to Reduced Motion button');
        reducedMotionBtn.addEventListener('click', function() {
            console.log('Accessibility debug: Reduced Motion button clicked');
        });
    }
    
    // Check if keyboard shortcut handler is working
    document.addEventListener('keydown', function(e) {
        // Log any Alt+A press
        if(e.altKey && e.key === 'a') {
            console.log('Accessibility debug: Alt+A keyboard shortcut detected');
        }
    });
    
    console.log('Accessibility debug: Script initialization complete');
});
</script>

<?php
// Get the buffered content
$content = ob_get_clean();

// Include the layout file
include 'includes/layout.php';
?>
