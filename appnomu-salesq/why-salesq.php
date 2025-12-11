<?php
// Load configuration
require_once __DIR__ . '/config.php';

// Set the current page for navigation highlighting
$current_page = 'why-salesq';
$page_title = 'Why Choose AppNomu SalesQ | Your Complete Sales Solution';
$page_description = 'Discover why AppNomu SalesQ is trusted by 25,000+ customers across Africa, USA, and Asia for sales automation, inventory management, and business growth.';

// Set page-specific keywords for SEO
$page_keywords = 'Best Sales Software Uganda, Business Automation Africa, Small Business CRM Uganda, Inventory Management Software, Sales Tracking App, Free Business Demo Uganda, Sales Solution Africa, Business Growth Tools Uganda';

// Set Cloudflare Turnstile site key
$turnstile_site_key = '0x4AAAAAABky2ZVjyQirVHsh';

// Additional CSS for this page
$additional_css = [];

// Additional JS for this page
$additional_js = [];

// Generate CSRF token for forms
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];

// Start output buffering
ob_start();
?>
<style>
/* Custom styles for why-salesq page */
.pulse-animation {
    animation: pulse-green 2s infinite;
}

@keyframes pulse-green {
    0% { box-shadow: 0 0 0 0 rgba(25, 135, 84, 0.4); }
    70% { box-shadow: 0 0 0 10px rgba(25, 135, 84, 0); }
    100% { box-shadow: 0 0 0 0 rgba(25, 135, 84, 0); }
}

.card-hover {
    transition: all 0.3s ease;
}

.card-hover:hover {
    transform: translateY(-5px);
}

.hero-wave {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 0;
}

.fade-in {
    animation: fadeIn 0.5s ease-in-out forwards;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.stagger-1 { animation-delay: 0.1s; }
.stagger-2 { animation-delay: 0.2s; }
.stagger-3 { animation-delay: 0.3s; }
.stagger-4 { animation-delay: 0.4s; }

.no-monthly-fees {
    position: absolute;
    top: -10px;
    right: -10px;
    background: #198754;
    color: white;
    font-size: 0.75rem;
    font-weight: 600;
    padding: 0.25rem 0.75rem;
    border-radius: 1rem;
    transform: rotate(10deg);
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.counter-card {
    transition: all 0.3s ease;
}

.counter-card:hover {
    transform: translateY(-5px);
}

/* Modern Form Styling */
.form-control-modern,
.form-control-modern:focus {
    box-shadow: none;
    border-color: #dee2e6;
    transition: all 0.3s ease;
}

.form-control-modern:focus {
    border-color: #198754;
}

.input-group-custom {
    border-radius: 0.375rem;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 2px 5px rgba(0,0,0,0.02);
}

.input-group-custom:focus-within {
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.1);
}

.input-group-custom .input-group-text {
    border-color: #dee2e6;
    color: #6c757d;
    transition: all 0.3s ease;
}

.input-group-custom:focus-within .input-group-text {
    border-color: #198754;
    color: #198754;
}

/* Additional card effects */
.hover-shadow-lg {
    transition: all 0.3s ease-in-out;
}

.hover-shadow-lg:hover {
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    transform: translateY(-3px);
}

.transition-300 {
    transition: all 0.3s ease;
}

/* Subtle gradient background */
.bg-gradient-success-subtle {
    background: linear-gradient(135deg, rgba(25, 135, 84, 0.08) 0%, rgba(25, 135, 84, 0.03) 100%);
}

/* Pulse animation for CTA button */
.pulse-animation {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(25, 135, 84, 0.3);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(25, 135, 84, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(25, 135, 84, 0);
    }
}
</style>

<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); padding-top: 120px; padding-bottom: 80px;">
    <!-- Wave Pattern Background with Green Accents -->
    <div class="hero-wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; opacity: 0.1;">
            <path fill="#198754" fill-opacity="0.2" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,250.7C960,235,1056,181,1152,165.3C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; top: 50px; opacity: 0.07;">
            <path fill="#198754" fill-opacity="0.15" d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,112C672,128,768,192,864,192C960,192,1056,128,1152,117.3C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
    
    <!-- Floating Particles for Visual Interest -->
    <div class="position-absolute" style="top: 15%; left: 10%; width: 12px; height: 12px; background-color: #198754; opacity: 0.2; border-radius: 50%;"></div>
    <div class="position-absolute" style="top: 25%; left: 25%; width: 8px; height: 8px; background-color: #198754; opacity: 0.1; border-radius: 50%;"></div>
    <div class="position-absolute" style="top: 60%; left: 75%; width: 15px; height: 15px; background-color: #198754; opacity: 0.15; border-radius: 50%;"></div>
    <div class="position-absolute" style="top: 75%; left: 85%; width: 10px; height: 10px; background-color: #198754; opacity: 0.1; border-radius: 50%;"></div>
    
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-7 text-center text-lg-start mb-5 mb-lg-0">
                <h1 class="display-4 fw-bold mb-4 fade-in text-dark" style="text-shadow: 0px 1px 2px rgba(255,255,255,0.7);">The Complete <span class="text-success fw-bolder" style="text-shadow: 0px 1px 1px rgba(255,255,255,0.3);">Business Solution</span> You Can Trust</h1>
                <p class="lead mb-4 fade-in stagger-1 text-dark" style="font-size: 1.2rem; font-weight: 500; text-shadow: 0px 1px 1px rgba(255,255,255,0.5);">The all-in-one sales and inventory management platform helping businesses across Africa, USA, and Asia drive growth and efficiency.</p>
                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3 fade-in stagger-2">
                    <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=cta&utm_campaign=salesq" class="btn btn-success btn-lg rounded-pill px-5 shadow-lg pulse-animation" target="_blank" rel="noopener noreferrer" style="position: relative; font-weight: 600;">
                        Start Free Trial
                    </a>
                    <a href="#request-demo" class="btn btn-outline-dark btn-lg rounded-pill px-4 shadow-sm">Request Demo</a>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <img src="https://cdn.prod.website-files.com/63486c21d277ad4376c6c75c/63905342c9e53540eb0dbc6a_ewallets-3.jpg" alt="AppNomu SalesQ E-Wallets Solution" class="img-fluid fade-in stagger-3 rounded-4" style="max-height: 400px; filter: drop-shadow(0px 10px 15px rgba(0, 0, 0, 0.1)); width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Stats Counter Section -->
<section class="py-5 bg-light">
    <div class="container py-3">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-3">Trusted by Businesses <span class="text-success">Worldwide</span></h2>
                <p class="lead">AppNomu SalesQ is the preferred choice for businesses looking to streamline their operations and drive growth.</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Counter 1 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 counter-card">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <div class="icon-box me-3 rounded-circle bg-success bg-opacity-10 p-2">
                                <i class="bi bi-people text-success fs-4"></i>
                            </div>
                            <h2 class="display-6 fw-bold text-success mb-0">25,000+</h2>
                        </div>
                        <h5 class="card-title">Happy Customers</h5>
                        <p class="card-text text-muted">Across Africa, USA, and Asia</p>
                    </div>
                </div>
            </div>
            <!-- Counter 2 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 counter-card">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <div class="icon-box me-3 rounded-circle bg-success bg-opacity-10 p-2">
                                <i class="bi bi-graph-up-arrow text-success fs-4"></i>
                            </div>
                            <h2 class="display-6 fw-bold text-success mb-0">45%</h2>
                        </div>
                        <h5 class="card-title">Average Growth</h5>
                        <p class="card-text text-muted">In business revenue after using SalesQ</p>
                    </div>
                </div>
            </div>
            <!-- Counter 3 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 counter-card">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <div class="icon-box me-3 rounded-circle bg-success bg-opacity-10 p-2">
                                <i class="bi bi-stars text-success fs-4"></i>
                            </div>
                            <h2 class="display-6 fw-bold text-success mb-0">4.8/5</h2>
                        </div>
                        <h5 class="card-title">Customer Rating</h5>
                        <p class="card-text text-muted">Based on 1,200+ verified reviews</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill mb-3 fade-in">WHY CHOOSE US</span>
                <h2 class="display-5 fw-bold mb-3 fade-in">Why Businesses <span class="text-success">Love SalesQ</span></h2>
                <p class="lead text-muted mb-0 fade-in">One platform for web and mobile, built for real businesses in Africa with offline reliability and human support in the languages you speak.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-md-6 col-lg-4 fade-in stagger-1">
                <div class="card h-100 border-0 rounded-4 shadow-sm hover-shadow-lg transition-300">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="icon-box bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 60px; height: 60px;">
                            <i class="bi bi-send-check-fill text-success fs-4"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-3">Web + Mobile App, One Experience</h3>
                        <p class="text-muted mb-0">Run your business from anywhere. The SalesQ mobile app brings <strong>over 85% of the core web features</strong> to your phone, plus extra personal tools and productivity helpers for everyday use.</p>
                    </div>
                </div>
            </div>
            
            <!-- Feature 2 -->
            <div class="col-md-6 col-lg-4 fade-in stagger-2">
                <div class="card h-100 border-0 rounded-4 shadow-sm hover-shadow-lg transition-300">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="icon-box bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 60px; height: 60px;">
                            <i class="bi bi-phone-fill text-success fs-4"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-3">Works Offline, Syncs When Online</h3>
                        <p class="text-muted mb-0">Record <strong>sales, customers and products</strong> even when you dont have internet. SalesQ safely keeps everything on your device and <strong>automatically syncs</strong> when you reconnect.</p>
                    </div>
                </div>
            </div>
            
            <!-- Feature 3 -->
            <div class="col-md-6 col-lg-4 fade-in stagger-3">
                <div class="card h-100 border-0 rounded-4 shadow-sm hover-shadow-lg transition-300">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="icon-box bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 60px; height: 60px;">
                            <i class="bi bi-wallet2 text-success fs-4"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-3">One Wallet for Sales, SMS & Airtime</h3>
                        <p class="text-muted mb-0">Top up once and use a single wallet for <strong>sales tools, SMS, voice and airtime</strong> across supported networks, keeping your costs and reconciliations simple.</p>
                    </div>
                </div>
            </div>
            
            <!-- Feature 4 -->
            <div class="col-md-6 col-lg-4 fade-in stagger-4">
                <div class="card h-100 border-0 rounded-4 shadow-sm hover-shadow-lg transition-300">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="icon-box bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 60px; height: 60px;">
                            <i class="bi bi-code-square text-success fs-4"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-3">Developer-Friendly API</h3>
                        <p class="text-muted mb-0">Integrate our services into your existing systems with our well-documented, easy-to-implement API that developers love.</p>
                    </div>
                </div>
            </div>
            
            <!-- Feature 5 -->
            <div class="col-md-6 col-lg-4 fade-in stagger-5">
                <div class="card h-100 border-0 rounded-4 shadow-sm hover-shadow-lg transition-300">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="icon-box bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 60px; height: 60px;">
                            <i class="bi bi-shield-check text-success fs-4"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-3">Secure & Scalable Architecture</h3>
                        <p class="text-muted mb-0">Built on enterprise-grade infrastructure that grows with your business while keeping your data secure with industry-standard protections.</p>
                    </div>
                </div>
            </div>
            
            <!-- Feature 6 -->
            <div class="col-md-6 col-lg-4 fade-in stagger-6">
                <div class="card h-100 border-0 rounded-4 shadow-sm hover-shadow-lg transition-300">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="icon-box bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 60px; height: 60px;">
                            <i class="bi bi-headset text-success fs-4"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-3">Human Support in Your Language</h3>
                        <p class="text-muted mb-0">Get real help from real people in <strong>English, Luganda and Swahili</strong> via <strong>voice calls, live chat, email and remote assist</strong> so your team is never stuck.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="display-5 fw-bold mb-4">Flexible <span class="text-success">Subscription Plans</span></h2>
                <p class="lead mb-4">Choose from our Free, Premium ($15/month), or Enterprise (UGX 95,000/month) plans. All plans include our wallet system for additional services.</p>
                
                <ul class="list-unstyled mb-4">
                    <li class="mb-3 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <span>Discounts for Annual subscriptions - Save 2 months</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <span>Professional onboarding team support</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <span>Multilingual support (English, Swahili, Luganda, Lusoga & all East African languages)</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <span>Proven guides and strategies for business growth</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <span>Scale up or down as your business needs change</span>
                    </li>
                </ul>
                
                <a href="https://appnomu.com/landing/pricing" class="btn btn-outline-success rounded-pill px-4 shadow-sm" target="_blank" rel="noopener noreferrer">View All Pricing Details</a>
            </div>
            <div class="col-lg-6">
                <!-- Pricing Cards Visual -->
                <div class="price-comparison position-relative">
                    <div class="price-cards shadow-lg bg-white rounded-4 p-4" style="max-width: 500px;">
                        <!-- Saving Badge -->
                        <div class="no-monthly-fees">Annual: Save 2 Months</div>
                        
                        <!-- Subscription Plans Card -->
                        <div class="p-3">
                            <h4 class="fw-bold mb-3">Subscription Plans</h4>
                            
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                                    <h5 class="h6 mb-0"><i class="bi bi-gift text-success me-2"></i> Free Plan</h5>
                                    <span class="fw-bold text-success">Free</span>
                                </div>
                                
                                <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                                    <h5 class="h6 mb-0"><i class="bi bi-gem text-primary me-2"></i> Premium Plan</h5>
                                    <span class="fw-bold text-primary">$15/month</span>
                                </div>
                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="h6 mb-0"><i class="bi bi-star-fill text-warning me-2"></i> Enterprise Plan</h5>
                                    <span class="fw-bold text-warning">UGX 95,000/month</span>
                                </div>
                            </div>
                            
                            <div class="d-grid">
                                <a href="https://www.appnomu.com/register.php" class="btn btn-success rounded-pill pulse-animation shadow" target="_blank" rel="noopener noreferrer">Start Free Trial</a>
                            </div>
                            <hr class="my-4">
                            <p class="text-center text-muted mb-3 small">Annual subscriptions get 2 months free • Professional support included</p>
                            <div class="d-flex justify-content-center gap-3">
                                <i class="bi bi-credit-card text-muted"></i>
                                <i class="bi bi-paypal text-muted"></i>
                                <i class="bi bi-phone text-muted"></i>
                                <i class="bi bi-bank text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section with Modern Design -->
<section id="request-demo" class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <!-- Subtle pattern overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNMCwwbDUwLDUwbDUwLC01MHYxMDBoLTEwMHoiIGZpbGw9InJnYmEoMjUsMTM1LDg0LDAuMDMpIi8+PC9zdmc+'); opacity: 0.25;"></div>
    
    <!-- Decorative Elements -->
    <div class="position-absolute" style="top: 15%; right: 10%; width: 25px; height: 25px; background-color: #198754; opacity: 0.07; border-radius: 50%;"></div>
    <div class="position-absolute" style="top: 45%; right: 20%; width: 15px; height: 15px; background-color: #198754; opacity: 0.05; border-radius: 50%;"></div>
    <div class="position-absolute" style="bottom: 20%; left: 15%; width: 20px; height: 20px; background-color: #198754; opacity: 0.06; border-radius: 50%;"></div>
    
    <div class="container py-5 position-relative">
        <!-- Award Badges -->
        <div class="row justify-content-center mb-4">
            <div class="col-auto d-flex flex-wrap justify-content-center gap-2 mb-3">
                <div class="bg-white bg-opacity-75 rounded-pill px-3 py-2 shadow-sm d-flex align-items-center">
                    <span class="badge rounded-pill bg-success text-white me-1">RATED</span>
                    <div class="small text-dark d-flex align-items-center">
                        <i class="bi bi-star-fill text-warning me-1"></i>
                        <span>Top Rated 2025</span>
                    </div>
                </div>
                <div class="bg-white bg-opacity-75 rounded-pill px-3 py-2 shadow-sm d-flex align-items-center">
                    <span class="badge rounded-pill bg-success text-white me-1">TRUSTED</span>
                    <div class="small text-dark d-flex align-items-center">
                        <i class="bi bi-shield-check me-1"></i>
                        <span>25K+ Happy Clients</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-3 fade-in">Ready to <span class="text-success">Get Started?</span></h2>
                <p class="lead fade-in stagger-1">Join thousands of businesses that are already enjoying the benefits of AppNomu SalesQ.</p>
            </div>
        </div>
        <div class="row align-items-center g-4">
            <div class="col-lg-6 mb-5 mb-lg-0 text-lg-start text-center fade-in stagger-2">
                <h2 class="display-4 fw-bold mb-4">Ready to <span class="text-success">Transform</span><br>Your Business?</h2>
                <p class="lead mb-4">Join thousands of businesses across Africa that have already boosted their sales and streamlined their operations with AppNomu SalesQ.</p>
                
                <!-- Completely Rebuilt Testimonial Card -->
                <div class="card border-0 shadow rounded-4 mb-4 hover-shadow-lg transition-300" style="background: linear-gradient(to right, rgba(255,255,255,0.95), rgba(255,255,255,0.85));">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-12">
                                <!-- Star Rating -->
                                <div class="text-end mb-3">
                                    <span class="d-inline-flex">
                                        <i class="bi bi-star-fill text-warning mx-1"></i>
                                        <i class="bi bi-star-fill text-warning mx-1"></i>
                                        <i class="bi bi-star-fill text-warning mx-1"></i>
                                        <i class="bi bi-star-fill text-warning mx-1"></i>
                                        <i class="bi bi-star-fill text-warning mx-1"></i>
                                    </span>
                                </div>
                                
                                <!-- Review Text -->
                                <div class="my-3">
                                    <p class="fst-italic">"AppNomu SalesQ has the bulk airtime purchase and sending from one dashboard to any other country at the same good rate which makes it a good tool for sending bulk airtime and SMS. It simply saves more time."</p>
                                </div>
                                
                                <!-- Reviewer Info -->
                                <div class="text-end mt-3">
                                    <h6 class="mb-0 fw-bold">Talya B.</h6>
                                    <small class="text-muted">verified review on <a href="https://softwarereviews.com" target="_blank" rel="noopener noreferrer" class="text-decoration-none">softwarereviews.com</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 fade-in stagger-3">
                <div class="card border-0 shadow rounded-4 overflow-hidden bg-white hover-shadow-lg transition-300">
                    <div class="card-header bg-gradient-success-subtle p-4 border-0">
                        <h3 class="text-success fw-bold mb-0">Request a Free Demo</h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="process_demo_request.php" method="post" class="needs-validation" novalidate>
                            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                            <input type="hidden" name="redirect_page" value="why-salesq.php">
                            <div class="mb-3">
                                <label for="name" class="form-label small fw-medium">Full Name</label>
                                <div class="input-group input-group-custom">
                                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-person text-success"></i></span>
                                    <input type="text" class="form-control form-control-modern border-start-0 ps-0" id="name" name="name" required>
                                </div>
                                <div class="invalid-feedback">Please enter your name</div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label small fw-medium">Email Address</label>
                                <div class="input-group input-group-custom">
                                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope text-success"></i></span>
                                    <input type="email" class="form-control form-control-modern border-start-0 ps-0" id="email" name="email" required>
                                </div>
                                <div class="invalid-feedback">Please enter a valid email</div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label small fw-medium">Phone Number</label>
                                <div class="input-group input-group-custom">
                                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-telephone text-success"></i></span>
                                    <input type="tel" class="form-control form-control-modern border-start-0 ps-0" id="phone" name="phone" required>
                                </div>
                                <div class="invalid-feedback">Please enter your phone number</div>
                            </div>
                            <div class="mb-3">
                                <label for="company" class="form-label small fw-medium">Company Name</label>
                                <div class="input-group input-group-custom">
                                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-building text-success"></i></span>
                                    <input type="text" class="form-control form-control-modern border-start-0 ps-0" id="company" name="company" required>
                                </div>
                                <div class="invalid-feedback">Please enter your company name</div>
                            </div>
                            <div class="mb-3">
                                <label for="business_type" class="form-label small fw-medium">Business Type</label>
                                <div class="input-group input-group-custom">
                                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-briefcase text-success"></i></span>
                                    <select class="form-select form-control-modern border-start-0 ps-0" id="business_type" name="business_type" required>
                                        <option value="" selected disabled>Select your business type</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Wholesale">Wholesale</option>
                                        <option value="Manufacturing">Manufacturing</option>
                                        <option value="Services">Services</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="invalid-feedback">Please select your business type</div>
                            </div>
                            <div class="mb-3">
                                <label for="team_size" class="form-label small fw-medium">Team Size</label>
                                <div class="input-group input-group-custom">
                                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-people text-success"></i></span>
                                    <select class="form-select form-control-modern border-start-0 ps-0" id="team_size" name="team_size" required>
                                        <option value="" selected disabled>Select your team size</option>
                                        <option value="1-10">1-10 employees</option>
                                        <option value="11-50">11-50 employees</option>
                                        <option value="51-200">51-200 employees</option>
                                        <option value="201-500">201-500 employees</option>
                                        <option value="501+">501+ employees</option>
                                    </select>
                                </div>
                                <div class="invalid-feedback">Please select your team size</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="preferred_date" class="form-label small fw-medium">Preferred Date</label>
                                    <div class="input-group input-group-custom">
                                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-calendar-date text-success"></i></span>
                                        <input type="date" class="form-control form-control-modern border-start-0 ps-0" id="preferred_date" name="preferred_date" required>
                                    </div>
                                    <div class="invalid-feedback">Please select a date</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="preferred_time" class="form-label small fw-medium">Preferred Time</label>
                                    <div class="input-group input-group-custom">
                                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-clock text-success"></i></span>
                                        <select class="form-select form-control-modern border-start-0 ps-0" id="preferred_time" name="preferred_time" required>
                                            <option value="" selected disabled>Select time</option>
                                            <option value="Morning">Morning (9AM-12PM)</option>
                                            <option value="Afternoon">Afternoon (12PM-4PM)</option>
                                            <option value="Evening">Evening (4PM-7PM)</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">Please select a time</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label small fw-medium">Additional Requirements (Optional)</label>
                                <div class="input-group input-group-custom">
                                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-chat-left-text text-success"></i></span>
                                    <textarea class="form-control form-control-modern border-start-0 ps-0" id="message" name="message" rows="2"></textarea>
                                </div>
                            </div>
                            <!-- Cloudflare Turnstile CAPTCHA -->
                            <div class="mb-4">
                                <label class="form-label small fw-medium mb-2"><i class="bi bi-shield-check text-success me-1"></i> Security Verification</label>
                                <div class="cf-turnstile" data-sitekey="<?php echo $turnstile_site_key; ?>" data-theme="light"></div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg rounded-pill pulse-animation shadow-sm">
                                    <i class="bi bi-send me-2"></i>Request Demo
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Fix Script - Forces content visibility -->
<script>
    // Immediate execution to ensure content visibility
    document.addEventListener('DOMContentLoaded', function() {
        // Target all elements that might have AOS attributes
        const allElements = document.querySelectorAll('[data-aos]');
        
        // Force visibility and remove transforms
        allElements.forEach(function(element) {
            // Remove AOS attributes
            element.removeAttribute('data-aos');
            element.removeAttribute('data-aos-delay');
            element.removeAttribute('data-aos-duration');
            
            // Force visibility
            element.style.opacity = '1';
            element.style.visibility = 'visible';
            
            // Remove any transforms that might flip or hide content
            element.style.transform = 'none';
        });
        
        // Add fallback animation classes if needed
        document.querySelectorAll('.fade-in').forEach(function(element, index) {
            element.style.opacity = '1';
        });
    });
</script>

<!-- Cloudflare Turnstile Script -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<!-- Form validation script -->
<script>
    // Enable form validation
    document.addEventListener('DOMContentLoaded', function() {
        // Fetch all forms with the 'needs-validation' class
        const forms = document.querySelectorAll('.needs-validation');
        
        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    });
</script>

<?php
// Get the output buffer contents and clean the buffer
$content = ob_get_clean();

// Include the layout template
require_once 'includes/layout.php';
?>
