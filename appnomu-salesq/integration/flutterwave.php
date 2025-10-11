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
$page_title = 'Flutterwave Integration | AppNomu SalesQ';
$page_description = 'Integrate Flutterwave payment gateway with AppNomu SalesQ for secure and seamless online payments across Africa.';
$page_keywords = 'Flutterwave Integration, African Payment Gateway, Mobile Money Uganda, Online Payments Africa, E-commerce Solutions, AppNomu SalesQ Integration';

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
    
    /* Flutterwave brand color accents */
    .text-flutterwave {
        color: #FB6011;
    }
    
    .bg-flutterwave {
        background-color: #FB6011;
    }
    
    .bg-flutterwave-light {
        background-color: rgba(251, 96, 17, 0.1);
    }
    
    .border-flutterwave {
        border-color: #FB6011;
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
                <h1><span style="color: #FB6011;">Flutterwave</span> Integration</h1>
                <p class="lead mb-4">Accept payments across Africa with our seamless Flutterwave integration for mobile money and card payments</p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=flutterwave_integration&utm_campaign=hero_section" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">Get Started</a>
                    <a href="https://appnomu.com/landing/pricing" class="btn btn-outline-success rounded-pill px-4">View Pricing</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <!-- Flutterwave Integration Illustration -->
                    <div class="bg-white rounded-4 shadow p-4 mx-auto" style="max-width: 400px;">
                        <!-- Flutterwave Logo -->
                        <div class="mb-4 text-center">
                            <div class="d-inline-block p-3 rounded-3 bg-flutterwave-light">
                                <span class="fw-bold" style="color: #FB6011; font-size: 1.8rem;">flutter<span class="text-dark">wave</span></span>
                            </div>
                        </div>
                        
                        <!-- Payment Methods -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-center gap-4 mb-4">
                                <div class="text-center">
                                    <div class="bg-white rounded-circle p-3 mb-2 shadow-sm">
                                        <i class="bi bi-credit-card text-dark" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <span class="text-dark">Card</span>
                                </div>
                                <div class="text-center">
                                    <div class="bg-white rounded-circle p-3 mb-2 shadow-sm">
                                        <i class="bi bi-phone text-dark" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <span class="text-dark">Mobile Money</span>
                                </div>
                                <div class="text-center">
                                    <div class="bg-white rounded-circle p-3 mb-2 shadow-sm">
                                        <i class="bi bi-bank text-dark" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <span class="text-dark">Bank</span>
                                </div>
                                <div class="text-center">
                                    <div class="bg-white rounded-circle p-3 mb-2 shadow-sm">
                                        <i class="bi bi-globe text-dark" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <span class="text-dark">USSD</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- African Countries -->
                        <div class="bg-light rounded p-3 mb-3">
                            <div class="small fw-bold mb-2">Available in:</div>
                            <div class="d-flex flex-wrap gap-1">
                                <span class="badge bg-success">Uganda</span>
                                <span class="badge bg-success">Kenya</span>
                                <span class="badge bg-success">Nigeria</span>
                                <span class="badge bg-success">Ghana</span>
                                <span class="badge bg-success">Tanzania</span>
                                <span class="badge bg-success">Rwanda</span>
                                <span class="badge bg-success">South Africa</span>
                                <span class="badge bg-success">+30 more</span>
                            </div>
                        </div>
                        
                        <!-- Integration Features -->
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span class="small text-dark">Mobile Money Integration</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span class="small text-dark">Multi-Currency Support</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span class="small text-dark">Secure Transactions</span>
                        </div>
                    </div>
                    
                    <!-- Floating Badge -->
                    <div class="position-absolute" style="top: -15px; right: -15px; background: #FB6011; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                        <div class="text-center">
                            <i class="bi bi-phone-fill text-white" style="font-size: 1.5rem;"></i>
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
                <h2 class="mb-4">Flutterwave Integration <span class="text-success">Features</span></h2>
                <p class="lead">Powerful tools to enhance your payment experience across Africa</p>
            </div>
        </div>
        
        <!-- Key Features Section -->
        <div class="row mb-5 align-items-center" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative">
                    <img src="https://appnomu.com/landing/assets/images/11111benefits-3.webp" alt="Mobile Money Payments" class="img-fluid rounded-4 shadow-lg">
                    <div class="position-absolute top-0 end-0 bg-white rounded-pill shadow-sm m-3 px-3 py-1">
                        <span class="small fw-bold text-success">Mobile Money</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">Accept Mobile Money <span class="text-success">Payments</span></h3>
                <p class="mb-4">With Flutterwave integration, your business can accept mobile money payments from customers across Africa, including MTN Mobile Money, Airtel Money, and more.</p>
                
                <div class="d-flex mb-3">
                    <div class="feature-icon-sm bg-success bg-opacity-10 text-success rounded-circle me-3">
                        <i class="bi bi-phone"></i>
                    </div>
                    <div>
                        <h5>Mobile Money Support</h5>
                        <p>Accept payments from all major mobile money providers across Africa.</p>
                    </div>
                </div>
                
                <div class="d-flex mb-3">
                    <div class="feature-icon-sm bg-success bg-opacity-10 text-success rounded-circle me-3">
                        <i class="bi bi-currency-exchange"></i>
                    </div>
                    <div>
                        <h5>Multi-Currency Support</h5>
                        <p>Accept payments in multiple African currencies with automatic conversion.</p>
                    </div>
                </div>
                
                <div class="d-flex">
                    <div class="feature-icon-sm bg-success bg-opacity-10 text-success rounded-circle me-3">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div>
                        <h5>Secure Transactions</h5>
                        <p>Advanced security features to protect your business and customers.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Integration Steps -->
        <div class="row mt-5 py-5 bg-light rounded-3" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">How to <span class="text-success">Integrate Flutterwave</span></h2>
                <p class="lead">Follow these simple steps to connect Flutterwave with your AppNomu SalesQ account</p>
            </div>
            
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-1-circle-fill text-success" style="font-size: 2rem; margin: auto;"></i>
                        </div>
                        <h4>Create Flutterwave Account</h4>
                        <p>Sign up for a Flutterwave business account if you don't already have one.</p>
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
                        <p>Enter your Flutterwave API keys in your AppNomu SalesQ dashboard.</p>
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
                        <p>Begin receiving mobile money and card payments immediately.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Payment Methods -->
        <div class="row my-5" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">Supported <span class="text-success">Payment Methods</span></h2>
                <p class="lead">Flutterwave integration supports a wide range of payment options</p>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 d-inline-flex" style="width: 70px; height: 70px;">
                                <i class="bi bi-phone-fill text-success" style="font-size: 2rem; margin: auto;"></i>
                            </div>
                        </div>
                        <h5 class="text-center">Mobile Money</h5>
                        <ul class="list-unstyled small">
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>MTN Mobile Money</li>
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Airtel Money</li>
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Vodafone Cash</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Other Providers</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 d-inline-flex" style="width: 70px; height: 70px;">
                                <i class="bi bi-credit-card-fill text-success" style="font-size: 2rem; margin: auto;"></i>
                            </div>
                        </div>
                        <h5 class="text-center">Card Payments</h5>
                        <ul class="list-unstyled small">
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Visa</li>
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Mastercard</li>
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Verve</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>American Express</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 d-inline-flex" style="width: 70px; height: 70px;">
                                <i class="bi bi-bank2 text-success" style="font-size: 2rem; margin: auto;"></i>
                            </div>
                        </div>
                        <h5 class="text-center">Bank Transfers</h5>
                        <ul class="list-unstyled small">
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Direct Bank Transfer</li>
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Bank Account Payments</li>
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>USSD Payments</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>QR Code Payments</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 d-inline-flex" style="width: 70px; height: 70px;">
                                <i class="bi bi-globe text-success" style="font-size: 2rem; margin: auto;"></i>
                            </div>
                        </div>
                        <h5 class="text-center">International</h5>
                        <ul class="list-unstyled small">
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Multi-Currency</li>
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Auto Currency Conversion</li>
                            <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Cross-Border Payments</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>International Cards</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Security Measures Section -->
        <div class="row mt-5 py-5 bg-light rounded-4" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">Our <span class="text-success">Security Promise</span></h2>
                <p class="lead">Your business and customer data security is our top priority</p>
            </div>
            
            <div class="col-lg-10 mx-auto">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3">
                                        <i class="bi bi-shield-lock text-success" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <h4 class="mb-0">Encrypted API Keys</h4>
                                </div>
                                <p class="text-dark">All Flutterwave API keys are encrypted using industry-standard AES-256 encryption. Your keys are never stored in plain text and are only decrypted when needed for transaction processing.</p>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        <span class="text-dark">End-to-end encryption</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        <span class="text-dark">Secure key management</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        <span class="text-dark">Regular security audits</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3">
                                        <i class="bi bi-patch-check text-success" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <h4 class="mb-0">Compliance & Standards</h4>
                                </div>
                                <p class="text-dark">Our Flutterwave integration adheres to PCI DSS standards and follows best practices for secure payment processing across Africa. We maintain compliance with local financial regulations in all supported countries.</p>
                                <ul class="list-unstyled mt-3">
                                    <li class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        <span class="text-dark">PCI DSS compliant</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        <span class="text-dark">GDPR compliant data handling</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        <span class="text-dark">Local regulatory compliance</span>
                                    </li>
                                </ul>
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
                <p class="lead">Get answers to common questions about our Flutterwave integration</p>
            </div>
            
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="flutterwaveFAQ">
                    <!-- Question 1 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                <span class="text-dark">What payment methods are supported with Flutterwave integration?</span>
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#flutterwaveFAQ">
                            <div class="accordion-body bg-light">
                                <p class="text-dark mb-0">Our Flutterwave integration supports a wide range of payment methods including mobile money (MTN Mobile Money, Airtel Money, etc.), card payments (Visa, Mastercard), bank transfers, USSD, and more. This allows your business to accept payments from customers across Africa using their preferred payment methods.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 2 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                <span class="text-dark">Is Flutterwave integration available on all AppNomu SalesQ plans?</span>
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#flutterwaveFAQ">
                            <div class="accordion-body bg-light">
                                <p class="text-dark mb-0">Flutterwave integration is available on our Enterprise plan. This ensures businesses have access to our full suite of features along with dedicated support for payment processing. If you're on a different plan and need Flutterwave integration, please contact our sales team to discuss upgrading options.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 3 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                <span class="text-dark">How secure is the Flutterwave integration?</span>
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#flutterwaveFAQ">
                            <div class="accordion-body bg-light">
                                <p class="text-dark mb-0">Our Flutterwave integration implements industry-standard security measures. All API keys are encrypted using AES-256 encryption and are never stored in plain text. The integration is PCI DSS compliant and follows strict security protocols to protect your business and customer data. We also conduct regular security audits to ensure the highest level of protection.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 4 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                <span class="text-dark">What currencies are supported with Flutterwave?</span>
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#flutterwaveFAQ">
                            <div class="accordion-body bg-light">
                                <p class="text-dark mb-0">Flutterwave supports multiple African currencies including UGX (Ugandan Shilling), KES (Kenyan Shilling), NGN (Nigerian Naira), GHS (Ghanaian Cedi), TZS (Tanzanian Shilling), RWF (Rwandan Franc), ZAR (South African Rand), and more. The integration also supports USD for international transactions with automatic currency conversion.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 5 -->
                    <div class="accordion-item border-0 shadow-sm rounded-3 overflow-hidden">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                <span class="text-dark">How do I set up Flutterwave with my AppNomu SalesQ account?</span>
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#flutterwaveFAQ">
                            <div class="accordion-body bg-light">
                                <p class="text-dark">Setting up Flutterwave with AppNomu SalesQ is simple:</p>
                                <ol class="text-dark mb-0">
                                    <li>Sign up for a Flutterwave account if you don't already have one</li>
                                    <li>Obtain your API keys from your Flutterwave dashboard</li>
                                    <li>Log in to your AppNomu SalesQ Enterprise account</li>
                                    <li>Navigate to Settings > Integrations > Flutterwave</li>
                                    <li>Enter your API keys and configure your preferences</li>
                                    <li>Test the integration with a sample transaction</li>
                                </ol>
                                <p class="text-dark mt-3 mb-0">Our support team is available to assist you throughout the setup process if needed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="row mt-5 py-5 bg-success bg-opacity-10 rounded-4 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="mb-4">Ready to Accept Payments Across Africa?</h2>
                <p class="lead mb-4">Integrate Flutterwave with AppNomu SalesQ today and expand your business reach</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=flutterwave_integration&utm_campaign=bottom_cta" class="btn btn-success btn-lg rounded-pill px-4 shadow pulse-animation">Get Started Now</a>
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
