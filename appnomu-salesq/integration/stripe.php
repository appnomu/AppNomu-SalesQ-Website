<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include Font Awesome for icons
$fontAwesomeLink = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />';

// Start output buffering
ob_start();

// Set the current page for active navigation highlighting
$current_page = 'integrations';

// Set page metadata
$page_title = 'Stripe Integration | AppNomu SalesQ';
$page_description = 'Integrate Stripe payment gateway with AppNomu SalesQ for secure and seamless online payments worldwide.';
$page_keywords = 'Stripe Integration, Online Payments, Payment Gateway, Credit Card Processing, E-commerce Solutions, AppNomu SalesQ Integration';

// Initialize AOS with fallback to ensure content visibility
$aosInitScript = "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Fallback to ensure content visibility if AOS fails
        setTimeout(function() {
            document.querySelectorAll('[data-aos]').forEach(function(el) {
                el.style.opacity = 1;
                el.style.transform = 'none';
                el.style.transition = 'none';
            });
        }, 2000);
    });
</script>
";
?>

<style>
    /* Custom styles for integration page */
    .hero-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%), url('https://appnomu.com/landing/assets/img/patterns/pattern-dots-sm.png');
        background-blend-mode: overlay;
        padding: 100px 0 60px;
        position: relative;
        overflow: hidden;
    }
    
    .hero-section h1 {
        font-size: 2.8rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        color: #212529;
    }
    
    .hero-section p {
        color: #212529;
    }
    
    .feature-icon {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        color: #198754;
    }
    
    .feature-icon-sm {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .feature-icon-sm i {
        font-size: 1.5rem;
    }
    
    .hover-lift {
        transition: transform 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
    }
    
    .pulse-animation {
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(25, 135, 84, 0.7);
        }
        70% {
            box-shadow: 0 0 0 10px rgba(25, 135, 84, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(25, 135, 84, 0);
        }
    }
    
    /* Stripe brand color accents */
    .text-stripe {
        color: #635BFF;
    }
    
    .bg-stripe {
        background-color: #635BFF;
    }
    
    .bg-stripe-light {
        background-color: rgba(99, 91, 255, 0.1);
    }
    
    .border-stripe {
        border-color: #635BFF;
    }
</style>

<!-- Hero Section -->
<section class="hero-section">
    <!-- Decorative Elements -->
    <div class="position-absolute top-0 end-0 d-none d-lg-block" style="opacity: 0.4; transform: rotate(15deg); z-index: 0;">
        <svg width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M38 0L76 38L38 76L0 38L38 0Z" fill="#198754" fill-opacity="0.2"/>
            <path d="M162 0L200 38L162 76L124 38L162 0Z" fill="#198754" fill-opacity="0.2"/>
            <path d="M38 124L76 162L38 200L0 162L38 124Z" fill="#198754" fill-opacity="0.2"/>
            <path d="M162 124L200 162L162 200L124 162L162 124Z" fill="#198754" fill-opacity="0.2"/>
            <path d="M100 62L138 100L100 138L62 100L100 62Z" fill="#198754" fill-opacity="0.4"/>
        </svg>
    </div>
    
    <!-- SVG Wave Pattern for Hero Background -->
    <div class="position-absolute bottom-0 left-0 w-100 overflow-hidden" style="height: 60px; transform: rotate(180deg);">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="height: 60px; width: 100%;">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="#ffffff"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="#ffffff"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="#ffffff"></path>
        </svg>
    </div>
    <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h1>Stripe Integration</h1>
                <p class="lead mb-4">Accept payments globally with our seamless Stripe integration for secure and reliable online transactions</p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=stripe_integration&utm_campaign=hero_section" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">Get Started</a>
                    <a href="https://appnomu.com/landing/pricing" class="btn btn-outline-success rounded-pill px-4">View Pricing</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <!-- Stripe Integration Image -->
                    <img src="https://appnomu.com/landing/assets/images/stripe.png" alt="Stripe Integration" class="img-fluid rounded-4 shadow-lg">
                    
                    <!-- Floating Badge -->
                    <div class="position-absolute" style="top: -15px; right: -15px; background: #635BFF; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                        <div class="text-center">
                            <i class="bi bi-shield-check text-white" style="font-size: 1.5rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="py-5" id="features">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">Stripe Integration <span class="text-success">Features</span></h2>
                <p class="lead">Powerful tools to enhance your online payment experience</p>
            </div>
        </div>
        
        <!-- Key Features Section -->
        <div class="row mb-5 align-items-center" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative">
                    <img src="https://asset.sticpay.com/main/img/personal/main/instant-currency-transfer.webp" alt="Stripe Dashboard" class="img-fluid rounded-4 shadow-lg">
                    <div class="position-absolute top-0 end-0 bg-white rounded-pill shadow-sm m-3 px-3 py-1">
                        <span class="small fw-bold text-success">Instant Collection</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">Global Payment <span class="text-success">Processing</span></h3>
                <p class="mb-4">With Stripe integration, your business can accept payments from customers around the world with support for multiple payment methods and currencies.</p>
                
                <div class="d-flex mb-3">
                    <div class="feature-icon-sm bg-success bg-opacity-10 text-success rounded-circle me-3">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div>
                        <h5>Multiple Payment Methods</h5>
                        <p>Accept credit cards, debit cards, digital wallets, and local payment methods.</p>
                    </div>
                </div>
                
                <div class="d-flex mb-3">
                    <div class="feature-icon-sm bg-success bg-opacity-10 text-success rounded-circle me-3">
                        <i class="bi bi-currency-exchange"></i>
                    </div>
                    <div>
                        <h5>Multi-Currency Support</h5>
                        <p>Accept payments in 135+ currencies with automatic conversion to your preferred currency.</p>
                    </div>
                </div>
                
                <div class="d-flex">
                    <div class="feature-icon-sm bg-success bg-opacity-10 text-success rounded-circle me-3">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <div>
                        <h5>Advanced Security</h5>
                        <p>PCI-compliant infrastructure with built-in fraud prevention and 3D Secure authentication.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Integration Steps -->
        <div class="row mt-5 py-5 bg-light rounded-3" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">How to <span class="text-success">Integrate Stripe</span></h2>
                <p class="lead">Follow these simple steps to connect Stripe with your AppNomu SalesQ account</p>
            </div>
            
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-1-circle-fill text-success" style="font-size: 2rem; margin: auto;"></i>
                        </div>
                        <h4>Create Stripe Account</h4>
                        <p>Sign up for a Stripe account if you don't already have one at stripe.com.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-2-circle-fill text-success" style="font-size: 2rem; margin: auto;"></i>
                        </div>
                        <h4>Connect to AppNomu</h4>
                        <p>Enter your Stripe API keys in your AppNomu SalesQ dashboard settings.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-3-circle-fill text-success" style="font-size: 2rem; margin: auto;"></i>
                        </div>
                        <h4>Start Accepting Payments</h4>
                        <p>Begin receiving payments through Stripe on your online store immediately.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Advanced Features -->
        <div class="row my-5" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">Advanced <span class="text-success">Features</span></h2>
                <p class="lead">Stripe integration offers powerful tools beyond basic payment processing</p>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 d-inline-flex" style="width: 70px; height: 70px;">
                                <i class="bi bi-arrow-repeat text-success" style="font-size: 2rem; margin: auto;"></i>
                            </div>
                        </div>
                        <h5 class="text-center">Recurring Billing</h5>
                        <p class="small text-center">Create subscription plans and manage recurring payments automatically.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 d-inline-flex" style="width: 70px; height: 70px;">
                                <i class="bi bi-graph-up text-success" style="font-size: 2rem; margin: auto;"></i>
                            </div>
                        </div>
                        <h5 class="text-center">Detailed Analytics</h5>
                        <p class="small text-center">Track payment trends, customer behavior, and business performance.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 d-inline-flex" style="width: 70px; height: 70px;">
                                <i class="bi bi-shield-check text-success" style="font-size: 2rem; margin: auto;"></i>
                            </div>
                        </div>
                        <h5 class="text-center">Fraud Prevention</h5>
                        <p class="small text-center">Advanced fraud detection and prevention tools to protect your business.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 d-inline-flex" style="width: 70px; height: 70px;">
                                <i class="bi bi-code-slash text-success" style="font-size: 2rem; margin: auto;"></i>
                            </div>
                        </div>
                        <h5 class="text-center">Developer Tools</h5>
                        <p class="small text-center">Comprehensive API and webhooks for custom payment experiences.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Testimonial -->
        <div class="row my-5 py-4 bg-success bg-opacity-10 rounded-4" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h3 class="mb-3">Why Businesses Choose <span class="text-success">Stripe</span></h3>
            </div>
            
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <div class="d-flex mb-3">
                            <div class="text-warning me-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <div class="small text-muted">5.0 / 5.0</div>
                        </div>
                        <p class="lead fst-italic mb-4">"AppNomu SalesQ consolidates different payment methods and processors like Stripe, PayPal, Flutterwave which makes it easier to process payments from walk-in clients and the SalesQ AI feature provides actionable insights on how to improve sales and product stock levels which other tools do not provide."</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="bg-light rounded-circle p-2 me-3">
                                    <i class="bi bi-person-circle text-secondary" style="font-size: 2rem;"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Daniel O</h6>
                                    <div class="small text-muted">Verified Customer</div>
                                </div>
                            </div>
                            <a href="https://www.softwarereviews.com/products/appnomu-salesq#reviews" target="_blank" class="btn btn-sm btn-outline-success rounded-pill px-3">View on Softwarereviews.com <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Why Stripe Integration Section -->
        <div class="row mt-5 pt-5" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">Why <span class="text-success">Stripe Integration</span> for Your Business</h2>
                <p class="lead">Discover how Stripe integration with AppNomu SalesQ transforms your payment capabilities</p>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                                <i class="bi bi-cash-stack text-success" style="font-size: 1.5rem;"></i>
                            </div>
                            <h4 class="mb-0">Increased Revenue</h4>
                        </div>
                        <p class="text-muted">Boost your sales by offering customers their preferred payment methods. Stripe's optimized checkout flow increases conversion rates by up to 7%, directly impacting your bottom line.</p>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Optimized checkout experience</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Multiple payment methods</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Higher conversion rates</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                                <i class="bi bi-graph-up-arrow text-success" style="font-size: 1.5rem;"></i>
                            </div>
                            <h4 class="mb-0">Seamless Scaling</h4>
                        </div>
                        <p class="text-muted">As your business grows, Stripe grows with you. Handle increasing transaction volumes without technical headaches, and expand into new markets with localized payment methods and currencies.</p>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Handles high transaction volumes</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Global market expansion</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Localized payment methods</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                                <i class="bi bi-clock-history text-success" style="font-size: 1.5rem;"></i>
                            </div>
                            <h4 class="mb-0">Time Efficiency</h4>
                        </div>
                        <p class="text-muted">Save valuable time with automated payment processing, reconciliation, and reporting. Focus on growing your business while Stripe handles the payment infrastructure.</p>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Automated reconciliation</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Detailed reporting</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Reduced manual work</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                                <i class="bi bi-shield-lock text-success" style="font-size: 1.5rem;"></i>
                            </div>
                            <h4 class="mb-0">Risk Management</h4>
                        </div>
                        <p class="text-muted">Protect your business with Stripe's advanced fraud detection and prevention tools. Reduce chargebacks and disputes with machine learning algorithms that identify suspicious transactions.</p>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Fraud detection algorithms</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Chargeback protection</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Dispute management</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Security Promise Section -->
        <div class="row mt-5 py-5 bg-light rounded-4" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">Our <span class="text-success">Security Promise</span></h2>
                <p class="lead">Your data security is our top priority with enterprise-grade protection</p>
            </div>
            
            <div class="col-lg-10 mx-auto">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="rounded-circle p-2 bg-success bg-opacity-10 me-3">
                                        <i class="bi bi-shield-lock-fill text-success" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <h4 class="mb-0">End-to-End Encryption</h4>
                                </div>
                                <p class="text-muted">All sensitive data, including API keys and payment information, is protected with AES-256 encryption, the same standard used by banks and military organizations. Your data is encrypted in transit and at rest, ensuring maximum security.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="rounded-circle p-2 bg-success bg-opacity-10 me-3">
                                        <i class="bi bi-patch-check-fill text-success" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <h4 class="mb-0">PCI DSS Compliance</h4>
                                </div>
                                <p class="text-muted">Our integration maintains strict adherence to Payment Card Industry Data Security Standards (PCI DSS), ensuring that all credit card information is handled according to the highest industry standards for data protection.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="rounded-circle p-2 bg-success bg-opacity-10 me-3">
                                        <i class="bi bi-eye-slash-fill text-success" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <h4 class="mb-0">No Plain Text Storage</h4>
                                </div>
                                <p class="text-muted">We never store API keys or sensitive credentials in plain text. All credentials are securely encrypted and only decrypted when needed for processing transactions, minimizing exposure and risk.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="rounded-circle p-2 bg-success bg-opacity-10 me-3">
                                        <i class="bi bi-people-fill text-success" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <h4 class="mb-0">Limited Access Controls</h4>
                                </div>
                                <p class="text-muted">Access to encryption systems and sensitive data is strictly limited to authorized personnel only. We implement role-based access control and regular security audits to ensure your data remains protected.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- FAQ Section -->
        <div class="row mt-5 py-5" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">Frequently Asked <span class="text-success">Questions</span></h2>
                <p class="lead">Everything you need to know about our Stripe integration</p>
            </div>
            
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="stripeFAQ">
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What are the fees for using Stripe with AppNomu SalesQ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#stripeFAQ">
                            <div class="accordion-body">
                                AppNomu SalesQ does not charge any additional fees for using the Stripe integration. However, Stripe's standard transaction fees will apply to your payments. These typically include 2.9% + 30¢ for online transactions and 2.7% for in-person payments. Volume discounts may be available for businesses processing over $1 million annually. For detailed fee information, please refer to Stripe's official fee structure.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How do I set up Stripe with my AppNomu SalesQ account?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#stripeFAQ">
                            <div class="accordion-body">
                                Setting up Stripe with your AppNomu SalesQ account is simple. First, create a Stripe account if you don't already have one. Then, navigate to Settings > Integrations > Payment Gateways in your AppNomu SalesQ dashboard. Click on "Connect Stripe" and follow the guided setup process. You'll need to provide your Stripe API keys, which our system will securely encrypt. Once connected, you can immediately begin accepting payments through your AppNomu SalesQ platform.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Which payment methods are supported through Stripe?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#stripeFAQ">
                            <div class="accordion-body">
                                Our Stripe integration supports a wide range of payment methods, including all major credit and debit cards (Visa, Mastercard, American Express, Discover, JCB), digital wallets (Apple Pay, Google Pay), ACH direct debits, and local payment methods specific to different countries. This comprehensive support allows you to accept payments from customers worldwide, regardless of their preferred payment method.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How does Stripe help prevent fraud?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#stripeFAQ">
                            <div class="accordion-body">
                                Stripe Radar, which is included in our integration, uses machine learning algorithms to identify and block fraudulent transactions in real-time. The system analyzes hundreds of signals for each transaction, including device fingerprinting, IP address analysis, and purchase patterns. You can also set custom rules based on your business needs. This comprehensive approach helps reduce chargebacks and protects your business from fraudulent activities without adding friction to legitimate customer transactions.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How quickly will I receive funds from Stripe payments?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#stripeFAQ">
                            <div class="accordion-body">
                                For most businesses in the United States, Stripe transfers funds to your bank account on a 2-day rolling basis. This means payments processed today will typically be available in your bank account within 2 business days. International payout schedules may vary by country. You can also customize your payout schedule in your Stripe dashboard to daily, weekly, or monthly, depending on your business needs and cash flow requirements.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="row mt-5 py-5 bg-success bg-opacity-10 rounded-4 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="mb-4">Ready to Accept Payments Globally?</h2>
                <p class="lead mb-4">Integrate Stripe with AppNomu SalesQ today and expand your business reach</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=stripe_integration&utm_campaign=bottom_cta" class="btn btn-success btn-lg rounded-pill px-4 shadow pulse-animation">Get Started Now</a>
                    <a href="https://api.whatsapp.com/send/?phone=256709712129" target="_blank" class="btn btn-outline-success btn-lg rounded-pill px-4">Contact Support <i class="bi bi-whatsapp ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Get the buffered content
$content = ob_get_clean();

// Include the layout directly
include_once '../includes/layout.php';
?>
