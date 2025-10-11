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
$page_title = 'PayPal Integration | AppNomu SalesQ';
$page_description = 'Integrate PayPal payment gateway with AppNomu SalesQ for secure and seamless online payments.';
$page_keywords = 'PayPal Integration, Online Payments, Payment Gateway, E-commerce Solutions, AppNomu SalesQ Integration';
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
</style>

<!-- Hero Section -->
<section class="hero-section">
    <!-- Enhanced Decorative Elements -->
    <div class="position-absolute top-0 end-0 d-none d-lg-block" style="opacity: 0.4; z-index: 0;" data-aos="fade-left" data-aos-duration="1500">
        <svg width="300" height="300" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M38 0L76 38L38 76L0 38L38 0Z" fill="#198754" fill-opacity="0.2">
                <animate attributeName="fill-opacity" values="0.2;0.4;0.2" dur="4s" repeatCount="indefinite" />
            </path>
            <path d="M38 76L76 114L38 152L0 114L38 76Z" fill="#198754" fill-opacity="0.2">
                <animate attributeName="fill-opacity" values="0.2;0.5;0.2" dur="5s" repeatCount="indefinite" />
            </path>
            <path d="M114 0L152 38L114 76L76 38L114 0Z" fill="#198754" fill-opacity="0.3">
                <animate attributeName="fill-opacity" values="0.3;0.6;0.3" dur="4.5s" repeatCount="indefinite" />
            </path>
            <path d="M114 76L152 114L114 152L76 114L114 76Z" fill="#198754" fill-opacity="0.2">
                <animate attributeName="fill-opacity" values="0.2;0.4;0.2" dur="5.5s" repeatCount="indefinite" />
            </path>
            <path d="M190 0L228 38L190 76L152 38L190 0Z" fill="#198754" fill-opacity="0.2">
                <animate attributeName="fill-opacity" values="0.2;0.5;0.2" dur="6s" repeatCount="indefinite" />
            </path>
            <path d="M190 76L228 114L190 152L152 114L190 76Z" fill="#198754" fill-opacity="0.3">
                <animate attributeName="fill-opacity" values="0.3;0.6;0.3" dur="5s" repeatCount="indefinite" />
            </path>
        </svg>
    </div>
    
    <!-- Additional PayPal-themed decorative elements -->
    <div class="position-absolute bottom-0 start-0 d-none d-lg-block" style="opacity: 0.2; z-index: 0;" data-aos="fade-right" data-aos-duration="1500">
        <svg width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="100" cy="100" r="80" fill="#0070ba" fill-opacity="0.2">
                <animate attributeName="r" values="80;90;80" dur="6s" repeatCount="indefinite" />
            </circle>
            <circle cx="100" cy="100" r="40" fill="#0070ba" fill-opacity="0.3">
                <animate attributeName="r" values="40;50;40" dur="4s" repeatCount="indefinite" />
            </circle>
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
                <h1>PayPal Integration</h1>
                <p class="lead mb-4">Seamlessly accept payments from customers worldwide with our secure PayPal integration</p>
                
                <!-- Enterprise Plan Notice -->
                <div class="alert alert-success d-inline-flex align-items-center px-4 py-3 mb-4" role="alert">
                    <i class="bi bi-star-fill me-2"></i>
                    <strong>Enterprise Feature:</strong> <span class="ms-2">This integration is available exclusively for Enterprise plan subscribers.</span>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=paypal_integration&utm_campaign=hero_section" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">Get Started</a>
                    <a href="https://appnomu.com/landing/pricing" class="btn btn-outline-success rounded-pill px-4">View Pricing</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <!-- PayPal Integration Illustration -->
                    <div class="bg-white rounded-4 shadow-lg p-4 mx-auto" style="max-width: 400px; border: 1px solid rgba(0,112,186,0.1); transform: perspective(1000px) rotateY(2deg);" data-aos="fade-up" data-aos-delay="200">
                        <!-- PayPal Logo -->
                        <div class="mb-4 text-center">
                            <img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_111x69.jpg" alt="PayPal Logo" class="img-fluid" style="height: 80px;">
                        </div>
                        
                        <!-- Integration Visualization -->
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="text-center">
                                <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2 mx-auto" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-shop text-success" style="font-size: 1.5rem;"></i>
                                </div>
                                <div class="small text-dark">Your Store</div>
                            </div>
                            
                            <div class="flex-grow-1 px-3">
                                <div class="progress" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                </div>
                                <div class="text-center small text-muted mt-1">Secure Connection</div>
                            </div>
                            
                            <div class="text-center">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-3 mb-2 mx-auto" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fab fa-paypal text-primary" style="font-size: 1.5rem;"></i>
                                </div>
                                <div class="small text-dark">PayPal</div>
                            </div>
                        </div>
                        
                        <!-- Integration Features -->
                        <div class="bg-light rounded p-3 mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span class="small text-dark">Secure Transactions</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span class="small text-dark">Global Payments</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span class="small text-dark">Easy Setup</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Badge -->
                    <div class="position-absolute" style="top: -15px; right: -15px; background: #0070ba; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
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
                <h2 class="mb-4">PayPal Integration <span class="text-success">Features</span></h2>
                <p class="lead">Powerful tools to enhance your online payment experience</p>
            </div>
        </div>
        
        <!-- Key Features Section -->
        <div class="row mb-5 align-items-center" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://appnomu.com/landing/assets/images/1111Paypal.webp" alt="PayPal Integration" class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">Accept Payments <span class="text-success">Globally</span></h3>
                <p class="mb-4">With PayPal integration, your business can accept payments from customers around the world in multiple currencies.</p>
                
                <div class="d-flex mb-3">
                    <div class="feature-icon-sm bg-success bg-opacity-10 text-success rounded-circle me-3">
                        <i class="bi bi-globe"></i>
                    </div>
                    <div>
                        <h5>Global Reach</h5>
                        <p>Accept payments from over 200 countries and markets in 25 currencies.</p>
                    </div>
                </div>
                
                <div class="d-flex mb-3">
                    <div class="feature-icon-sm bg-success bg-opacity-10 text-success rounded-circle me-3">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <div>
                        <h5>Enhanced Security</h5>
                        <p>Industry-leading fraud prevention and buyer protection for peace of mind.</p>
                    </div>
                </div>
                
                <div class="d-flex">
                    <div class="feature-icon-sm bg-success bg-opacity-10 text-success rounded-circle me-3">
                        <i class="bi bi-lightning-charge"></i>
                    </div>
                    <div>
                        <h5>Quick Setup</h5>
                        <p>Integrate PayPal into your AppNomu SalesQ store in minutes with our guided setup.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Integration Steps -->
        <div class="row mt-5 py-5 bg-light rounded-3" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">How to <span class="text-success">Integrate PayPal</span></h2>
                <p class="lead">Follow these simple steps to connect PayPal with your AppNomu SalesQ account</p>
            </div>
            
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-1-circle-fill text-success" style="font-size: 2rem; margin: auto;"></i>
                        </div>
                        <h4>Create PayPal Account</h4>
                        <p>Sign up for a PayPal Business account if you don't already have one.</p>
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
                        <p>Enter your PayPal API credentials in your AppNomu SalesQ dashboard.</p>
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
                        <p>Begin receiving payments through PayPal on your online store immediately.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Business Benefits Section -->
        <div class="row mt-5 py-5" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">Business <span class="text-success">Benefits</span></h2>
                <p class="lead">How PayPal integration helps AppNomu SalesQ users grow their business</p>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-shop text-success" style="font-size: 1.5rem;"></i>
                            </div>
                            <h4 class="mb-0">Charge Walk-in Clients</h4>
                        </div>
                        <p>Accept payments directly from customers in your physical store using PayPal QR codes. Simply generate a QR code for the purchase amount, and your customer can scan and pay instantly with their PayPal account or linked cards.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> No additional hardware required</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Automatic inventory updates</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Instant payment confirmation</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-laptop text-success" style="font-size: 1.5rem;"></i>
                            </div>
                            <h4 class="mb-0">Online Client Payments</h4>
                        </div>
                        <p>Send professional invoices with embedded payment links directly to your clients' email. Clients can pay instantly online using PayPal, credit cards, or debit cards without needing to create an account.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Customizable invoice templates</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Automated payment reminders</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Real-time payment notifications</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Security Section -->
        <div class="row mt-5 py-5 bg-light rounded-3" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">Enterprise-Grade <span class="text-success">Security</span></h2>
                <p class="lead">Your data security is our top priority</p>
            </div>
            
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-success p-3 rounded-circle me-3">
                                <i class="bi bi-shield-lock-fill text-white" style="font-size: 1.5rem;"></i>
                            </div>
                            <h4 class="mb-0">Advanced API Key Protection</h4>
                        </div>
                        
                        <p class="mb-4">At AppNomu SalesQ, we take your security seriously. When you connect your PayPal account, we implement multiple layers of protection:</p>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <i class="bi bi-lock-fill text-success me-3 fs-4"></i>
                                    <div>
                                        <h5>End-to-End Encryption</h5>
                                        <p>Your API keys are encrypted using AES-256 encryption before being stored in our secure database.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <i class="bi bi-key-fill text-success me-3 fs-4"></i>
                                    <div>
                                        <h5>No Plain Text Storage</h5>
                                        <p>We never store your API keys in plain text. Keys are always encrypted and decrypted only when needed for transactions.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <i class="bi bi-shield-check text-success me-3 fs-4"></i>
                                    <div>
                                        <h5>Regular Security Audits</h5>
                                        <p>Our systems undergo regular security audits and penetration testing to ensure your data remains protected.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <i class="bi bi-person-badge text-success me-3 fs-4"></i>
                                    <div>
                                        <h5>Limited Access</h5>
                                        <p>Only authorized personnel with strict access controls can access the encryption systems.</p>
                                    </div>
                                </div>
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
                <p class="lead">Everything you need to know about our PayPal integration</p>
            </div>
            
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="paypalFAQ">
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What are the fees for using PayPal with AppNomu SalesQ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#paypalFAQ">
                            <div class="accordion-body">
                                AppNomu SalesQ does not charge any additional fees for using the PayPal integration. However, PayPal's standard transaction fees will apply to your payments. These typically range from 2.9% + $0.30 per transaction for domestic payments to 4.4% + fixed fee for international transactions. For detailed fee information, please refer to PayPal's official fee structure.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Why is PayPal integration only available on Enterprise plans?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#paypalFAQ">
                            <div class="accordion-body">
                                PayPal integration is offered exclusively to our Enterprise customers due to the advanced security infrastructure required to maintain secure API connections, the dedicated support needed for payment processing issues, and the enhanced features like detailed transaction reporting and reconciliation tools. Enterprise plans include priority support for any payment-related questions or technical issues that may arise.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How do I set up PayPal with my AppNomu SalesQ account?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#paypalFAQ">
                            <div class="accordion-body">
                                Setting up PayPal with your AppNomu SalesQ account is simple. First, ensure you have an Enterprise subscription. Then, navigate to Settings > Integrations > Payment Gateways in your dashboard. Click on "Connect PayPal" and follow the guided setup process. You'll need to provide your PayPal Business account credentials and authorize the connection. Our system will securely encrypt your API keys, and you'll be ready to accept payments within minutes.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can I accept payments in multiple currencies?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#paypalFAQ">
                            <div class="accordion-body">
                                Yes, with PayPal integration, you can accept payments in over 25 currencies from customers worldwide. The system automatically handles currency conversion based on current exchange rates. You can choose to keep your funds in different currencies or have them automatically converted to your primary currency. This makes it easy to do business globally while managing your finances in your preferred currency.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How secure is the PayPal integration?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#paypalFAQ">
                            <div class="accordion-body">
                                Our PayPal integration employs enterprise-grade security measures. Your API keys are encrypted using AES-256 encryption and are never stored in plain text. We maintain PCI DSS compliance for handling payment information and implement multiple layers of security, including regular security audits and strict access controls. Additionally, PayPal's own security protocols provide an extra layer of protection for all transactions processed through their system.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="row mt-5 py-5 bg-success bg-opacity-10 rounded-4 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="mb-4">Ready to Accept Global Payments?</h2>
                <p class="lead mb-4">Integrate PayPal with AppNomu SalesQ today and expand your business reach</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=paypal_integration&utm_campaign=bottom_cta" class="btn btn-success btn-lg rounded-pill px-4 shadow pulse-animation">Get Started Now</a>
                    <a href="https://api.whatsapp.com/send/?phone=256709712129" target="_blank" class="btn btn-outline-success btn-lg rounded-pill px-4">Contact Support <i class="bi bi-whatsapp ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Get the buffered content
$content = ob_get_clean();

// Set the current page for navigation highlighting
$current_page = 'integrations';

// Set page metadata
$page_title = 'PayPal Integration | AppNomu SalesQ';
$page_description = 'Integrate PayPal payment gateway with AppNomu SalesQ for secure and seamless online payments worldwide.';

// Include the layout directly
include_once '../includes/layout.php';
?>
