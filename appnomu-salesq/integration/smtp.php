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
$page_title = 'SMTP Integration | AppNomu SalesQ';
$page_description = 'Integrate SMTP email services with AppNomu SalesQ for reliable email delivery and marketing campaigns.';
$page_keywords = 'SMTP Integration, Email Marketing, Transactional Emails, Email Delivery, Email API, AppNomu SalesQ Integration';

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
    
    <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h1>SMTP Integration</h1>
                <p class="lead mb-4">Send reliable transactional and marketing emails with our seamless SMTP integration</p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=smtp_integration&utm_campaign=hero_section" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">Get Started</a>
                    <a href="https://appnomu.com/landing/pricing" class="btn btn-outline-success rounded-pill px-4">View Pricing</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <!-- SMTP Integration Image -->
                    <img src="https://appnomu.com/landing/assets/images/SMTP_Config.png" alt="SMTP Configuration" class="img-fluid rounded-4 shadow-lg">
                    
                    <!-- Floating Badge -->
                    <div class="position-absolute" style="top: -15px; right: -15px; background: #198754; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                        <div class="text-center">
                            <i class="bi bi-envelope-fill text-white" style="font-size: 1.5rem;"></i>
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
                <h2 class="mb-4">SMTP Integration <span class="text-success">Features</span></h2>
                <p class="lead">Powerful email delivery tools for your business</p>
            </div>
        </div>
        
        <!-- Integration Steps -->
        <div class="row mt-5 py-5 bg-light rounded-3" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">How to <span class="text-success">Configure SMTP</span></h2>
                <p class="lead">Follow these simple steps to set up SMTP with your AppNomu SalesQ account</p>
            </div>
            
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-1-circle-fill text-success" style="font-size: 2rem; margin: auto;"></i>
                        </div>
                        <h4>Choose SMTP Provider</h4>
                        <p>Select your preferred SMTP provider or use your existing email service.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-2-circle-fill text-success" style="font-size: 2rem; margin: auto;"></i>
                        </div>
                        <h4>Configure Settings</h4>
                        <p>Enter your SMTP server details, port, username, and password in AppNomu.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-3-circle-fill text-success" style="font-size: 2rem; margin: auto;"></i>
                        </div>
                        <h4>Start Sending Emails</h4>
                        <p>Begin sending transactional emails and marketing campaigns immediately.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Email Types -->
        <div class="row g-4 mt-5" data-aos="fade-up">
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="mb-3"><i class="bi bi-envelope-check text-success me-2"></i> Transactional Emails</h5>
                        <p>Send order confirmations, receipts, password resets, and account notifications with high deliverability.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="mb-3"><i class="bi bi-megaphone text-success me-2"></i> Marketing Campaigns</h5>
                        <p>Create and send newsletters, promotional offers, and product announcements to your customer base.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pricing Section -->
        <div class="row mt-5 py-5" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">SMTP <span class="text-success">Pricing</span></h2>
                <p class="lead">Affordable email solutions for businesses of all sizes</p>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-header bg-light py-3">
                        <h4 class="mb-0">Free Plan</h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <span class="h3 fw-bold">UGX 56,000</span>
                            <span class="text-muted"> one-time setup</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> 100 free email sends per month</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Limited to 1,000 total emails</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> UGX 25 per email after 1,000 limit</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Basic email templates</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Standard delivery reports</li>
                        </ul>
                        <div class="text-center">
                            <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=smtp_integration&utm_campaign=free_plan" class="btn btn-outline-success rounded-pill px-4">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-header bg-success text-white py-3">
                        <h4 class="mb-0">Enterprise Plan</h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <span class="h3 fw-bold">Contact Sales</span>
                            <span class="text-muted"> for custom pricing</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Unlimited email sends</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Unlimited email contacts</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Advanced email templates</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Detailed analytics dashboard</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Priority support</li>
                        </ul>
                        <div class="text-center">
                            <a href="https://appnomu.com/landing/contact" class="btn btn-success rounded-pill px-4">Contact Sales</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- FAQ Section -->
        <div class="row mt-5 py-5 bg-light rounded-3" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">Frequently Asked <span class="text-success">Questions</span></h2>
                <p class="lead">Everything you need to know about our SMTP integration</p>
            </div>
            
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="smtpFAQ">
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is included in the one-time setup fee?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#smtpFAQ">
                            <div class="accordion-body">
                                The UGX 56,000 one-time setup fee includes configuration of your SMTP server with AppNomu SalesQ, initial testing to ensure proper delivery, and basic email template setup. Our team will assist you with the entire process to ensure your emails are delivered reliably.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How does the pricing work after I exceed 1,000 emails?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#smtpFAQ">
                            <div class="accordion-body">
                                Free accounts receive 100 free email sends per month and are limited to a total of 1,000 emails. After reaching the 1,000 email limit, each additional email will cost UGX 25. This pay-as-you-go model ensures you only pay for what you use. The cost is deducted directly from your AppNomu wallet balance immediately when emails are sent, not at the end of the month.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What types of emails can I send with the SMTP integration?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#smtpFAQ">
                            <div class="accordion-body">
                                Our SMTP integration supports both transactional emails (receipts, order confirmations, password resets) and marketing emails (newsletters, promotions). All emails are sent through your configured SMTP server, ensuring high deliverability and maintaining your brand identity.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can I upgrade from the Free plan to the Enterprise plan?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#smtpFAQ">
                            <div class="accordion-body">
                                Yes, you can upgrade from the Free plan to the Enterprise plan at any time. When you upgrade, you'll gain access to unlimited email sends, unlimited contacts, and advanced features. Contact our sales team to discuss your specific needs and get a custom quote for the Enterprise plan.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Do you provide email templates?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#smtpFAQ">
                            <div class="accordion-body">
                                Yes, we provide a selection of responsive email templates for both transactional and marketing emails. Free plan users have access to basic templates, while Enterprise plan users get access to our full library of advanced, customizable templates. All templates are mobile-friendly and can be customized with your branding.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="row mt-5 py-5 bg-success bg-opacity-10 rounded-4 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="mb-4">Ready to Enhance Your Email Communications?</h2>
                <p class="lead mb-4">Integrate SMTP with AppNomu SalesQ today and streamline your business communications</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=smtp_integration&utm_campaign=bottom_cta" class="btn btn-success btn-lg rounded-pill px-4 shadow pulse-animation">Get Started Now</a>
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
