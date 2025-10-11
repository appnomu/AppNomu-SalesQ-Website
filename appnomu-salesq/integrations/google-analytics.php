<?php
// Load configuration
require_once __DIR__ . '/../config.php';

// Set the current page for navigation highlighting
$current_page = 'integrations';

// Set page metadata
$page_title = 'Google Analytics Integration | AppNomu SalesQ - Business Intelligence';
$page_description = 'Integrate AppNomu SalesQ with Google Analytics for enhanced tracking, conversion optimization, and comprehensive business intelligence insights for African businesses.';

// Set page-specific keywords for SEO
$page_keywords = 'Google Analytics Uganda, Business Intelligence Africa, Website Analytics Uganda, Conversion Tracking East Africa, E-commerce Analytics Uganda, Data Analytics Africa';

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
                    <img src="https://appnomu.com/landing/assets/images/Google-Analytics-Logo.png" alt="Google Analytics" style="height: 40px;" class="me-3">
                    <span class="text-dark fs-4">+</span>
                    <img src="https://appnomu.com/landing/assets/images/AppNomu%20SalesQ%20blue%20logo.png" alt="AppNomu SalesQ" style="height: 35px;" class="ms-3">
                </div>
                <h1 class="display-4 fw-bold mb-3 text-dark">Google Analytics <span class="text-success">Integration</span></h1>
                <p class="lead mb-4 text-dark" style="font-size: 1.2rem; font-weight: 300;">
                    Connect AppNomu SalesQ with Google Analytics to unlock powerful business insights, 
                    track customer behavior, and optimize your sales funnel with data-driven decisions.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 mb-4">
                    <a href="https://www.appnomu.com/register.php?utm_source=analytics_integration&utm_medium=hero&utm_campaign=salesq" 
                       class="btn btn-success btn-lg rounded-pill px-4 py-3 shadow" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-graph-up me-2"></i> Start Integration
                    </a>
                    <a href="<?= url('/demo') ?>" class="btn btn-outline-success btn-lg rounded-pill px-4 py-3">
                        <i class="bi bi-play-circle me-2"></i> Watch Demo
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                <div class="position-relative" data-aos="fade-left">
                    <img src="https://appnomu.com/landing/assets/images/SalesQ_GA.png" alt="Google Analytics Integration" class="img-fluid rounded-4 shadow-lg" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Powerful Analytics Features</h2>
            <p class="text-muted">Get deep insights into your business performance</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-graph-up text-primary fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Enhanced E-commerce Tracking</h5>
                        <p class="text-muted">Track sales, revenue, and product performance with detailed e-commerce analytics.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-success-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-funnel text-success fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Conversion Funnel Analysis</h5>
                        <p class="text-muted">Identify where customers drop off and optimize your sales funnel for better conversions.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-warning-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-geo-alt text-warning fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Geographic Insights</h5>
                        <p class="text-muted">Understand where your customers are located across Uganda and Africa.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-info-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-clock text-info fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Real-time Reporting</h5>
                        <p class="text-muted">Monitor your business performance in real-time with live data updates.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-danger-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-bullseye text-danger fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Goal Tracking</h5>
                        <p class="text-muted">Set and track business goals like sales targets, lead generation, and customer acquisition.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-secondary-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-phone text-secondary fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Mobile Analytics</h5>
                        <p class="text-muted">Track mobile user behavior and optimize for mobile-first African markets.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="fw-bold mb-4">Why Google Analytics Integration?</h2>
                <div class="mb-4">
                    <div class="d-flex mb-3">
                        <div class="bg-success rounded-circle p-2 me-3 flex-shrink-0">
                            <i class="bi bi-check text-white"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Data-Driven Decisions</h6>
                            <p class="text-muted mb-0">Make informed business decisions based on real customer data and behavior patterns.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-3">
                        <div class="bg-success rounded-circle p-2 me-3 flex-shrink-0">
                            <i class="bi bi-check text-white"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Improved ROI</h6>
                            <p class="text-muted mb-0">Optimize marketing spend and improve return on investment with detailed attribution.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-3">
                        <div class="bg-success rounded-circle p-2 me-3 flex-shrink-0">
                            <i class="bi bi-check text-white"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Customer Journey Insights</h6>
                            <p class="text-muted mb-0">Understand how customers interact with your business across all touchpoints.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <div class="bg-success rounded-circle p-2 me-3 flex-shrink-0">
                            <i class="bi bi-check text-white"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Market Intelligence</h6>
                            <p class="text-muted mb-0">Gain insights into African market trends and customer preferences.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="bg-white rounded-4 p-4 shadow-sm border">
                    <h4 class="fw-bold mb-4 text-dark">Analytics Impact</h4>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="fw-bold mb-1 text-primary">73%</h3>
                                <small class="text-muted">Better Decision Making</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="fw-bold mb-1 text-success">45%</h3>
                                <small class="text-muted">Increase in Conversions</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="fw-bold mb-1 text-warning">60%</h3>
                                <small class="text-muted">Improved ROI</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <h3 class="fw-bold mb-1 text-info">35%</h3>
                                <small class="text-muted">Cost Reduction</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Perfect for African Businesses</h2>
            <p class="text-muted">Real-world analytics use cases</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-shop text-white fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">E-commerce Stores</h5>
                        <p class="text-muted">Track product performance, cart abandonment, and customer lifetime value to optimize sales.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-success rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-building text-white fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Service Businesses</h5>
                        <p class="text-muted">Monitor lead generation, service bookings, and customer engagement across digital channels.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-warning rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-megaphone text-white fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Marketing Agencies</h5>
                        <p class="text-muted">Provide detailed campaign performance reports and ROI analysis to clients.</p>
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
            <h2 class="fw-bold mb-3">Simple Analytics Pricing</h2>
            <p class="text-muted">Get powerful insights without breaking the bank</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4 text-center">
                                <div class="bg-primary-soft rounded-circle p-3 mb-3 d-inline-block">
                                    <i class="bi bi-graph-up text-primary fs-2"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Basic Analytics</h4>
                                <div class="mb-4">
                                    <span class="display-4 fw-bold text-primary">Free</span>
                                    <span class="text-muted">/month</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Basic tracking setup</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Standard reports</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Real-time data</li>
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
                                <h4 class="fw-bold mb-3">Advanced Analytics</h4>
                                <div class="mb-4">
                                    <span class="display-4 fw-bold text-primary">$25</span>
                                    <span class="text-muted">/month</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Everything in Basic</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Custom goals & events</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> E-commerce tracking</li>
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
                                <h4 class="fw-bold mb-3">Enterprise Analytics</h4>
                                <div class="mb-4">
                                    <span class="display-4 fw-bold text-warning">$45</span>
                                    <span class="text-muted">/month</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Everything in Advanced</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Custom dashboards</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Advanced attribution</li>
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
                <h2 class="fw-bold mb-3 text-dark">Ready to Unlock Business Insights?</h2>
                <p class="lead text-muted mb-4">
                    Connect AppNomu SalesQ with Google Analytics and start making data-driven decisions today.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="https://www.appnomu.com/register.php?utm_source=analytics_cta&utm_medium=bottom&utm_campaign=salesq" 
                       class="btn btn-success btn-lg rounded-pill px-4 py-3 shadow" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-graph-up me-2"></i> Start Integration
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
        background: linear-gradient(135deg, #4285f4 0%, #34a853 100%);
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
