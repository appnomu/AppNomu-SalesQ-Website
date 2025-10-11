<?php
// Load configuration
require_once __DIR__ . '/../config.php';

// Set the current page for navigation highlighting
$current_page = 'integrations';

// Set page metadata
$page_title = 'Integrations | AppNomu SalesQ - Connect Your Business Tools';
$page_description = 'Seamlessly integrate AppNomu SalesQ with HubSpot CRM, Mailchimp, Google Analytics, Slack, Zoom, and more. Streamline your business operations with powerful integrations.';

// Set page-specific keywords for SEO
$page_keywords = 'AppNomu SalesQ Integrations, HubSpot CRM Uganda, Mailchimp Integration Africa, Google Analytics Uganda, Slack Integration East Africa, Zoom Integration Uganda, Business Tool Integrations, CRM Integrations Uganda';

// Additional CSS for this page
$additional_css = [
    "https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
];

// Additional JS for this page
$additional_js = [
    "https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"
];

// Start output buffering
ob_start();
?>

<!-- Hero Section -->
<section class="hero-section position-relative" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); padding: 80px 0 60px;">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <span class="badge bg-warning-soft text-warning fw-bold px-3 py-2 rounded-pill mb-3 d-inline-block">
                    <i class="bi bi-puzzle-fill me-1"></i> Powerful Integrations
                </span>
                <h1 class="display-4 fw-bold mb-3 text-dark">Connect Your <span class="text-success">Favorite Tools</span></h1>
                <p class="lead mb-4 text-dark" style="font-size: 1.2rem; font-weight: 300;">
                    Seamlessly integrate AppNomu SalesQ with the business tools you already use. 
                    Streamline workflows and boost productivity with our comprehensive integration suite.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 mb-4">
                    <a href="https://www.appnomu.com/register.php?utm_source=integrations_page&utm_medium=hero&utm_campaign=salesq" 
                       class="btn btn-success btn-lg rounded-pill px-4 py-3 shadow" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-lightning-charge me-2"></i> Start Integrating
                    </a>
                    <a href="<?= url('/demo') ?>" class="btn btn-outline-success btn-lg rounded-pill px-4 py-3">
                        <i class="bi bi-play-circle me-2"></i> Watch Demo
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                <div class="position-relative" data-aos="fade-left">
                    <div class="integration-grid">
                        <div class="integration-card bg-white shadow-sm rounded-3 p-3 mb-3" style="transform: rotate(-2deg);">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded-circle p-2 me-3">
                                    <i class="bi bi-diagram-3 text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">HubSpot CRM</h6>
                                    <small class="text-muted">Lead Management</small>
                                </div>
                            </div>
                        </div>
                        <div class="integration-card bg-white shadow-sm rounded-3 p-3 mb-3" style="transform: rotate(1deg);">
                            <div class="d-flex align-items-center">
                                <div class="bg-warning rounded-circle p-2 me-3">
                                    <i class="bi bi-envelope text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Email Marketing</h6>
                                    <small class="text-muted">Mailchimp & ConvertKit</small>
                                </div>
                            </div>
                        </div>
                        <div class="integration-card bg-white shadow-sm rounded-3 p-3" style="transform: rotate(-1deg);">
                            <div class="d-flex align-items-center">
                                <div class="bg-info rounded-circle p-2 me-3">
                                    <i class="bi bi-graph-up text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Google Analytics</h6>
                                    <small class="text-muted">Business Intelligence</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Integration Categories -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Choose Your Integration Category</h2>
            <p class="text-muted">Connect AppNomu SalesQ with the tools that power your business</p>
        </div>
        
        <div class="row g-4">
            <!-- CRM Integration -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="bg-primary-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-diagram-3-fill text-primary fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">CRM Integration</h5>
                        <p class="text-muted mb-4">Connect with HubSpot CRM to manage leads, deals, and customer relationships seamlessly.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Lead synchronization</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Deal tracking</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Contact management</li>
                        </ul>
                        <a href="<?= url('/integrations/hubspot-crm') ?>" class="btn btn-outline-primary">
                            Explore HubSpot <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Email Marketing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="bg-warning-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-envelope-fill text-warning fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Email Marketing</h5>
                        <p class="text-muted mb-4">Integrate with Mailchimp and ConvertKit for advanced email campaigns and automation.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Automated campaigns</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Customer segmentation</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Performance tracking</li>
                        </ul>
                        <a href="<?= url('/integrations/email-marketing') ?>" class="btn btn-outline-warning">
                            Explore Email Tools <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Analytics -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="bg-info-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-graph-up text-info fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Business Analytics</h5>
                        <p class="text-muted mb-4">Connect Google Analytics for enhanced tracking and business intelligence insights.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Enhanced tracking</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Conversion optimization</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Custom reports</li>
                        </ul>
                        <a href="<?= url('/integrations/google-analytics') ?>" class="btn btn-outline-info">
                            Explore Analytics <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Communication -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="bg-success-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-chat-dots-fill text-success fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Team Communication</h5>
                        <p class="text-muted mb-4">Integrate with Slack and Microsoft Teams for real-time notifications and collaboration.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Real-time alerts</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Team notifications</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Workflow automation</li>
                        </ul>
                        <a href="<?= url('/integrations/slack-teams') ?>" class="btn btn-outline-success">
                            Explore Communication <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Video & Scheduling -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="bg-danger-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-camera-video-fill text-danger fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Video & Scheduling</h5>
                        <p class="text-muted mb-4">Connect Zoom and Calendly for seamless meeting scheduling and video consultations.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Automated booking</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Video meetings</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Calendar sync</li>
                        </ul>
                        <a href="<?= url('/integrations/zoom-calendly') ?>" class="btn btn-outline-danger">
                            Explore Scheduling <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Coming Soon -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="bg-secondary-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-plus-circle text-secondary fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">More Coming Soon</h5>
                        <p class="text-muted mb-4">We're constantly adding new integrations based on your feedback and business needs.</p>
                        <div class="mb-4">
                            <span class="badge bg-light text-dark me-2 mb-2">Shopify</span>
                            <span class="badge bg-light text-dark me-2 mb-2">QuickBooks</span>
                            <span class="badge bg-light text-dark me-2 mb-2">Stripe</span>
                            <span class="badge bg-light text-dark me-2 mb-2">PayPal</span>
                        </div>
                        <a href="<?= url('/contact') ?>" class="btn btn-outline-secondary">
                            Request Integration <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">How Integrations Work</h2>
            <p class="text-muted">Get up and running with your favorite tools in minutes</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-success rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-1-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Connect Your Account</h5>
                <p class="text-muted">Securely connect your third-party service accounts through our integration settings.</p>
            </div>
            
            <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-success rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-2-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Configure Settings</h5>
                <p class="text-muted">Customize integration settings to match your business workflow and preferences.</p>
            </div>
            
            <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-success rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-3-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Start Automating</h5>
                <p class="text-muted">Enjoy seamless data flow and automated workflows between your connected tools.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-3">Ready to Connect Your Tools?</h2>
                <p class="lead text-muted mb-4">
                    Start integrating AppNomu SalesQ with your favorite business tools today and streamline your operations.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="https://www.appnomu.com/register.php?utm_source=integrations_page&utm_medium=cta&utm_campaign=salesq" 
                       class="btn btn-success btn-lg rounded-pill px-4 py-3" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-lightning-charge me-2"></i> Start Free Trial
                    </a>
                    <a href="<?= url('/contact') ?>" class="btn btn-outline-success btn-lg rounded-pill px-4 py-3">
                        <i class="bi bi-chat-dots me-2"></i> Contact Sales
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }
    
    .bg-primary-soft { background-color: rgba(13, 110, 253, 0.1); }
    .bg-warning-soft { background-color: rgba(255, 193, 7, 0.1); }
    .bg-info-soft { background-color: rgba(13, 202, 240, 0.1); }
    .bg-success-soft { background-color: rgba(25, 135, 84, 0.1); }
    .bg-danger-soft { background-color: rgba(220, 53, 69, 0.1); }
    .bg-secondary-soft { background-color: rgba(108, 117, 125, 0.1); }
    
    .integration-grid {
        max-width: 300px;
        margin: 0 auto;
    }
    
    .integration-card {
        transition: transform 0.3s ease;
    }
    
    .integration-card:hover {
        transform: rotate(0deg) !important;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100
        });
    }
});
</script>

<?php
$content = ob_get_clean();
require_once __DIR__ . '/../includes/layout.php';
?>
