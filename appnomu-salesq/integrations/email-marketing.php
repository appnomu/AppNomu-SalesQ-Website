<?php
// Load configuration
require_once __DIR__ . '/../config.php';

// Set the current page for navigation highlighting
$current_page = 'integrations';

// Set page metadata
$page_title = 'Email Marketing Integration | AppNomu SalesQ - Mailchimp & ConvertKit';
$page_description = 'Integrate AppNomu SalesQ with Mailchimp and ConvertKit for powerful email marketing campaigns, automation, and customer segmentation. Perfect for African businesses.';

// Set page-specific keywords for SEO
$page_keywords = 'Mailchimp Integration Uganda, ConvertKit Integration Africa, Email Marketing Uganda, Email Automation East Africa, Newsletter Marketing Uganda, Email Campaigns Africa';

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
                    <img src="https://appnomu.com/landing/assets/images/Mailchimp-Logo.png" alt="Mailchimp" style="height: 40px;" class="me-2">
                    <img src="https://appnomu.com/landing/assets/images/convertkit.png" alt="ConvertKit" style="height: 35px;" class="me-3">
                    <span class="text-dark fs-4">+</span>
                    <img src="https://appnomu.com/assets/images/AppNomu%20SalesQ%20logo.png" alt="AppNomu SalesQ" style="height: 35px;" class="ms-3">
                </div>
                <h1 class="display-4 fw-bold mb-3 text-dark">Email Marketing <span class="text-success">Integration</span></h1>
                <p class="lead mb-4 text-dark" style="font-size: 1.2rem; font-weight: 300;">
                    Connect AppNomu SalesQ with Mailchimp and ConvertKit to create powerful email campaigns, 
                    automate customer journeys, and boost engagement across Africa.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 mb-4">
                    <a href="https://www.appnomu.com/register.php?utm_source=email_integration&utm_medium=hero&utm_campaign=salesq" 
                       class="btn btn-success btn-lg rounded-pill px-4 py-3 shadow" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-envelope-heart me-2"></i> Start Integration
                    </a>
                    <a href="<?= url('/demo') ?>" class="btn btn-outline-success btn-lg rounded-pill px-4 py-3">
                        <i class="bi bi-play-circle me-2"></i> Watch Demo
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                <div class="position-relative" data-aos="fade-left">
                    <img src="https://appnomu.com/landing/assets/images/SaaS-Email-Marketing.webp" alt="Email Marketing Integration" class="img-fluid rounded-4 shadow-lg" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Supported Platforms -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Supported Email Marketing Platforms</h2>
            <p class="text-muted">Connect with the world's leading email marketing tools</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://appnomu.com/landing/assets/images/Mailchimp-Logo.png" alt="Mailchimp" style="height: 50px;" class="me-3">
                            <div>
                                <h5 class="fw-bold mb-0">Mailchimp</h5>
                                <small class="text-muted">World's #1 Email Marketing Platform</small>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Advanced segmentation</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Automation workflows</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> A/B testing</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Detailed analytics</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://appnomu.com/landing/assets/images/convertkit.png" alt="ConvertKit" style="height: 50px;" class="me-3">
                            <div>
                                <h5 class="fw-bold mb-0">ConvertKit</h5>
                                <small class="text-muted">Email Marketing for Creators</small>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Visual automation builder</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Subscriber tagging</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Landing pages</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Creator-focused features</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Powerful Email Marketing Features</h2>
            <p class="text-muted">Everything you need to create successful email campaigns</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-people text-primary fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Contact Synchronization</h5>
                        <p class="text-muted">Automatically sync your AppNomu SalesQ contacts with your email marketing platform.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-success-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-funnel text-success fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Smart Segmentation</h5>
                        <p class="text-muted">Create targeted segments based on customer behavior, purchase history, and engagement.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-warning-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-robot text-warning fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Automated Campaigns</h5>
                        <p class="text-muted">Set up welcome series, abandoned cart emails, and follow-up sequences automatically.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-info-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-graph-up text-info fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Performance Analytics</h5>
                        <p class="text-muted">Track open rates, click rates, conversions, and ROI across all your email campaigns.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-danger-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-palette text-danger fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Template Library</h5>
                        <p class="text-muted">Access hundreds of professional email templates optimized for African markets.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-secondary-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-shield-check text-secondary fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Compliance & Deliverability</h5>
                        <p class="text-muted">Ensure high deliverability rates with built-in compliance and reputation management.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Perfect for African Businesses</h2>
            <p class="text-muted">Real-world use cases for email marketing integration</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-shop text-white fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">E-commerce Stores</h5>
                        <p class="text-muted">Send abandoned cart reminders, product recommendations, and promotional campaigns to boost sales.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-success rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-mortarboard text-white fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Educational Institutions</h5>
                        <p class="text-muted">Keep students and parents informed with course updates, announcements, and newsletters.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-warning rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-heart text-white fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Healthcare Providers</h5>
                        <p class="text-muted">Send appointment reminders, health tips, and important medical updates to patients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Transparent Pricing</h2>
            <p class="text-muted">Choose the plan that fits your business needs</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4 text-center">
                                <div class="bg-primary-soft rounded-circle p-3 mb-3 d-inline-block">
                                    <i class="bi bi-envelope text-primary fs-2"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Basic Integration</h4>
                                <div class="mb-4">
                                    <span class="display-4 fw-bold text-primary">Free</span>
                                    <span class="text-muted">/month</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Contact synchronization</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Basic segmentation</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Campaign tracking</li>
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
                                    <span class="display-4 fw-bold text-primary">$19</span>
                                    <span class="text-muted">/month</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Everything in Basic</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Advanced automation</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> A/B testing</li>
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
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Multi-platform sync</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Custom workflows</li>
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
                <h2 class="fw-bold mb-3 text-dark">Ready to Boost Your Email Marketing?</h2>
                <p class="lead text-muted mb-4">
                    Connect AppNomu SalesQ with your favorite email marketing platform and start creating powerful campaigns today.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="https://www.appnomu.com/register.php?utm_source=email_cta&utm_medium=bottom&utm_campaign=salesq" 
                       class="btn btn-success btn-lg rounded-pill px-4 py-3 shadow" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-envelope-heart me-2"></i> Start Integration
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
