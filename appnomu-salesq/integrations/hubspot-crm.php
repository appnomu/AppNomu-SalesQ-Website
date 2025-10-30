<?php
// Load configuration
require_once __DIR__ . '/../config.php';

// Set the current page for navigation highlighting
$current_page = 'integrations';

// Set page metadata
$page_title = 'HubSpot CRM Integration | AppNomu SalesQ - Powerful Lead Management';
$page_description = 'Integrate AppNomu SalesQ with HubSpot CRM for seamless lead management, deal tracking, and customer relationship automation. Perfect for Ugandan businesses.';

// Set page-specific keywords for SEO
$page_keywords = 'HubSpot CRM Uganda, CRM Integration Africa, Lead Management Uganda, Sales Pipeline Uganda, HubSpot Integration East Africa, Customer Relationship Management Uganda';

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
                <div class="d-flex align-items-center mb-3">
                    <img src="https://www.hubspot.com/hubfs/HubSpot_Logos/HubSpot-Inversed-Favicon.png" alt="HubSpot" style="height: 40px;" class="me-3">
                    <span class="text-dark fs-4">+</span>
                    <img src="https://appnomu.com/landing/assets/images/AppNomu%20SalesQ%20blue%20logo.png" alt="AppNomu SalesQ" style="height: 35px;" class="ms-3">
                </div>
                <h1 class="display-4 fw-bold mb-3 text-dark">HubSpot CRM <span class="text-success">Integration</span></h1>
                <p class="lead mb-4 text-dark" style="font-size: 1.2rem; font-weight: 300;">
                    Connect your AppNomu SalesQ with HubSpot CRM to create a powerful sales ecosystem. 
                    Manage leads, track deals, and nurture customer relationships seamlessly.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 mb-4">
                    <a href="https://www.appnomu.com/register.php?utm_source=hubspot_integration&utm_medium=hero&utm_campaign=salesq" 
                       class="btn btn-success btn-lg rounded-pill px-4 py-3 shadow" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-lightning-charge me-2"></i> Start Integration
                    </a>
                    <a href="<?= url('/demo') ?>" class="btn btn-outline-success btn-lg rounded-pill px-4 py-3">
                        <i class="bi bi-play-circle me-2"></i> Watch Demo
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                <div class="position-relative d-flex align-items-center" data-aos="fade-left" style="height: 100%;">
                    <img src="https://appnomu.com/landing/assets/images/client-training-img3.webp" alt="HubSpot CRM Integration" class="img-fluid rounded-4 shadow-lg" style="width: 100%; height: auto; max-height: 400px; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Powerful HubSpot Integration Features</h2>
            <p class="text-muted">Streamline your sales process with seamless data synchronization</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-arrow-left-right text-primary fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Bi-Directional Sync</h5>
                        <p class="text-muted">Automatically sync contacts, leads, and deals between AppNomu SalesQ and HubSpot CRM in real-time.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-success-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-funnel text-success fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Sales Pipeline</h5>
                        <p class="text-muted">Track your sales pipeline from lead generation to deal closure with comprehensive deal management.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-warning-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-robot text-warning fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Workflow Automation</h5>
                        <p class="text-muted">Automate lead nurturing, follow-ups, and customer communications based on HubSpot workflows.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-info-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-graph-up text-info fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Advanced Analytics</h5>
                        <p class="text-muted">Get detailed insights into your sales performance with HubSpot's powerful reporting tools.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-danger-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-person-check text-danger fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Lead Scoring</h5>
                        <p class="text-muted">Automatically score and prioritize leads based on their engagement and behavior patterns.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-secondary-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-envelope-heart text-secondary fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Email Sequences</h5>
                        <p class="text-muted">Create and manage automated email sequences to nurture leads through your sales funnel.</p>
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
            <h2 class="fw-bold mb-3">How HubSpot Integration Works</h2>
            <p class="text-muted">Get started with HubSpot CRM integration in just a few steps</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-primary rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-1-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Connect HubSpot</h5>
                <p class="text-muted">Enter your HubSpot API key and portal ID in AppNomu SalesQ integration settings.</p>
            </div>
            
            <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-primary rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-2-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Configure Sync</h5>
                <p class="text-muted">Choose which data to sync and set up your preferred synchronization frequency.</p>
            </div>
            
            <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-primary rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-3-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Test Connection</h5>
                <p class="text-muted">Verify the integration is working correctly with our built-in connection testing.</p>
            </div>
            
            <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="bg-primary rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-4-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Start Syncing</h5>
                <p class="text-muted">Enjoy seamless data flow between AppNomu SalesQ and your HubSpot CRM.</p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="fw-bold mb-4">Why Choose HubSpot Integration?</h2>
                <div class="mb-4">
                    <div class="d-flex mb-3">
                        <div class="bg-success rounded-circle p-2 me-3 flex-shrink-0">
                            <i class="bi bi-check text-white"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Unified Customer View</h6>
                            <p class="text-muted mb-0">Get a complete 360-degree view of your customers across both platforms.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-3">
                        <div class="bg-success rounded-circle p-2 me-3 flex-shrink-0">
                            <i class="bi bi-check text-white"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Increased Sales Efficiency</h6>
                            <p class="text-muted mb-0">Reduce manual data entry and focus on what matters - closing deals.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-3">
                        <div class="bg-success rounded-circle p-2 me-3 flex-shrink-0">
                            <i class="bi bi-check text-white"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Better Lead Nurturing</h6>
                            <p class="text-muted mb-0">Leverage HubSpot's powerful marketing automation tools.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <div class="bg-success rounded-circle p-2 me-3 flex-shrink-0">
                            <i class="bi bi-check text-white"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Enhanced Reporting</h6>
                            <p class="text-muted mb-0">Access comprehensive sales reports and analytics from HubSpot.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="bg-white rounded-4 p-4 shadow-sm border">
                    <h4 class="fw-bold mb-4 text-dark">Integration Stats</h4>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="fw-bold mb-1 text-primary">85%</h3>
                                <small class="text-muted">Faster Lead Processing</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="fw-bold mb-1 text-success">60%</h3>
                                <small class="text-muted">Reduction in Data Entry</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="fw-bold mb-1 text-warning">40%</h3>
                                <small class="text-muted">Increase in Sales</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="fw-bold mb-1 text-info">99.9%</h3>
                                <small class="text-muted">Data Accuracy</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Simple, Transparent Pricing</h2>
            <p class="text-muted">No hidden fees, pay only for what you use</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4 text-center">
                                <div class="bg-primary-soft rounded-circle p-3 mb-3 d-inline-block">
                                    <i class="bi bi-diagram-3-fill text-primary fs-2"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Basic Integration</h4>
                                <div class="mb-4">
                                    <span class="display-4 fw-bold text-primary">Free</span>
                                    <span class="text-muted">/month</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Contact synchronization</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Basic deal tracking</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Real-time sync</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Email support</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 shadow-lg border-primary">
                            <div class="card-body p-4 text-center">
                                <div class="bg-primary rounded-circle p-3 mb-3 d-inline-block">
                                    <i class="bi bi-star text-white fs-2"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Advanced Integration</h4>
                                <div class="mb-4">
                                    <span class="display-4 fw-bold text-primary">$25</span>
                                    <span class="text-muted">/month</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Everything in Basic</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Advanced workflows</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Custom properties</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Priority support</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4 text-center">
                                <div class="bg-warning-soft rounded-circle p-3 mb-3 d-inline-block">
                                    <i class="bi bi-building text-warning fs-2"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Enterprise Integration</h4>
                                <div class="mb-4">
                                    <span class="display-4 fw-bold text-warning">$45</span>
                                    <span class="text-muted">/month</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Everything in Advanced</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Multi-team access</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Custom integrations</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Dedicated support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-3 text-dark">Ready to Supercharge Your CRM?</h2>
                <p class="lead text-muted mb-4">
                    Connect AppNomu SalesQ with HubSpot CRM today and transform your sales process.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="https://www.appnomu.com/register.php?utm_source=hubspot_cta&utm_medium=bottom&utm_campaign=salesq" 
                       class="btn btn-success btn-lg rounded-pill px-4 py-3 shadow" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-lightning-charge me-2"></i> Start Integration
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
    .bg-primary-soft { background-color: rgba(13, 110, 253, 0.1); }
    .bg-success-soft { background-color: rgba(25, 135, 84, 0.1); }
    .bg-warning-soft { background-color: rgba(255, 193, 7, 0.1); }
    .bg-info-soft { background-color: rgba(13, 202, 240, 0.1); }
    .bg-danger-soft { background-color: rgba(220, 53, 69, 0.1); }
    .bg-secondary-soft { background-color: rgba(108, 117, 125, 0.1); }
    
    .bg-gradient-primary {
        background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
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
