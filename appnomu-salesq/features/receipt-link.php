<?php
// Load configuration first
require_once __DIR__ . '/../config.php';

// Start session only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Initialize error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include Font Awesome for icons
$fontAwesomeLink = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />';

// Start output buffering for layout system
ob_start();

// Set the current page for active navigation highlighting
$current_page = 'features';

// Set page metadata
$page_title = 'Go Paperless Digital Receipts | Email SMS WhatsApp | AppNomu SalesQ';
$page_description = 'Go paperless with digital receipt links via Email, SMS, and WhatsApp. Premium and Enterprise plans include automated receipt delivery for African businesses. View, download, and share receipts instantly.';

// Set page-specific keywords for SEO
$page_keywords = 'Go Paperless Receipts, Digital Receipt Email, WhatsApp Receipt Links, SMS Receipt Delivery, Paperless Business Africa, Digital Receipt System, Electronic Receipts Uganda, Premium Receipt Features, Enterprise Receipt Management, Paperless Office Solutions Africa';
?>

<style>
    /* Custom styles for feature page */
    .hero-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%), url('https://appnomu.com/landing/assets/img/patterns/pattern-dots-sm.png');
        background-blend-mode: overlay;
        padding: 60px 0 40px;
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
    
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    
    .badge-floating {
        position: absolute;
        z-index: 2;
        transform: rotate(-15deg);
        box-shadow: 0 3px 6px rgba(0,0,0,0.1);
    }
</style>

<!-- Hero Section -->
<section class="hero-section">
    <!-- Decorative Elements -->
    <div class="position-absolute top-0 end-0 d-none d-lg-block" style="opacity: 0.4; transform: rotate(15deg); z-index: 0;">
        <svg width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M38 0L76 38L38 76L0 38L38 0Z" fill="#198754" fill-opacity="0.2"/>
            <path d="M38 76L76 114L38 152L0 114L38 76Z" fill="#198754" fill-opacity="0.1"/>
            <path d="M114 0L152 38L114 76L76 38L114 0Z" fill="#198754" fill-opacity="0.3"/>
            <path d="M114 76L152 114L114 152L76 114L114 76Z" fill="#198754" fill-opacity="0.2"/>
        </svg>
    </div>
    
    <div class="position-absolute bottom-0 start-0 d-none d-lg-block" style="opacity: 0.3; z-index: 0;">
        <svg width="300" height="300" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="150" cy="150" r="100" fill="#198754" fill-opacity="0.1"/>
            <circle cx="150" cy="150" r="150" stroke="#198754" stroke-opacity="0.1" stroke-width="2" stroke-dasharray="10 10"/>
        </svg>
    </div>
    
    <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="mb-2">
                    <span class="badge bg-success text-white px-3 py-1 rounded-pill">
                        <i class="fas fa-leaf me-1"></i> Go Paperless
                    </span>
                </div>
                <h1 class="display-5 fw-bold mb-3">Go Paperless Digital Receipt Links</h1>
                <p class="lead mb-3">Issue digital receipts via Email, SMS, and WhatsApp. Clients view or download receipts instantly. Available on Premium and Enterprise plans for African businesses going paperless.</p>
                
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fas fa-envelope text-success me-2"></i> Email Receipts
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fas fa-sms text-primary me-2"></i> SMS Delivery
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fab fa-whatsapp text-success me-2"></i> WhatsApp Links
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fas fa-download text-info me-2"></i> Download & View
                    </div>
                </div>
                
                <!-- Premium Plan Highlight -->
                <div class="bg-success bg-opacity-10 border border-success rounded-4 p-3 mb-3">
                    <div class="d-flex align-items-center">
                        <div class="bg-success rounded-circle p-2 me-3">
                            <i class="fas fa-crown text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-bold text-success">Premium & Enterprise Feature</h6>
                            <p class="mb-0 small">Automated receipt delivery • Multi-channel sharing • Go paperless today</p>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=receipt_feature&utm_campaign=go_paperless" class="btn btn-success btn-lg rounded-pill shadow-lg">
                        <i class="fas fa-leaf me-2"></i>Go Paperless Now
                    </a>
                    <a href="/pricing" class="btn btn-outline-success btn-lg rounded-pill">
                        <i class="fas fa-crown me-2"></i>View Plans
                    </a>
                </div>
            </div>
            
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <!-- Receipt Image -->
                    <div class="position-relative mx-auto">
                        <img src="https://appnomu.com/landing/assets/images/Reciept.png" alt="AppNomu SalesQ Digital Receipt" class="img-fluid rounded shadow-lg" style="max-width: 100%;">
                        
                        <!-- Floating Badges -->
                        <div class="position-absolute" style="top: 10%; right: 0;">
                            <div class="bg-warning text-dark fw-bold px-3 py-2 rounded-pill shadow-sm mb-2">
                                <small><i class="fas fa-bolt me-1"></i> Instant Access</small>
                            </div>
                        </div>
                        
                        <div class="position-absolute" style="bottom: 15%; left: 0;">
                            <div class="bg-success text-white fw-bold px-3 py-2 rounded-pill shadow-sm">
                                <small><i class="fas fa-shield-alt me-1"></i> Secure Link</small>
                            </div>
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
                <h2 class="mb-4">Receipt Link <span class="text-success">Features</span></h2>
                <p class="lead">Powerful tools to enhance your customer experience and streamline receipt management</p>
            </div>
        </div>
        
        <!-- Feature Cards -->
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5" data-aos="fade-up">
            <!-- Multi-Channel Sharing -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 p-3 rounded-circle mb-3">
                            <i class="fas fa-share-alt"></i>
                        </div>
                        <h4 class="card-title mb-3">Multi-Channel Sharing</h4>
                        <p class="card-text">Send receipt links instantly via SMS, WhatsApp, or Email.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> One-click sharing</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Custom templates</li>
                            <li><i class="fas fa-check text-success me-2"></i> Bulk sending</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Secure Access -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 p-3 rounded-circle mb-3">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="card-title mb-3">Secure Access</h4>
                        <p class="card-text">Secure, time-limited links for receipt access without login.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Encrypted data</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Timed expiration</li>
                            <li><i class="fas fa-check text-success me-2"></i> No login needed</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Download & Print -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 p-3 rounded-circle mb-3">
                            <i class="fas fa-file-download"></i>
                        </div>
                        <h4 class="card-title mb-3">Download & Print</h4>
                        <p class="card-text">Download PDF receipts or print directly from any device.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Multiple formats</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Mobile-friendly</li>
                            <li><i class="fas fa-check text-success me-2"></i> Easy archiving</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- How It Works Section -->
        <div class="row mt-5 pt-3" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">How Receipt Links <span class="text-success">Work</span></h2>
                <p class="lead mb-4">Share digital receipts in three simple steps</p>
            </div>
        </div>
        
        <div class="row g-4 mb-5" data-aos="fade-up" data-aos-delay="100">
            <!-- Step 1 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <span class="h3 fw-bold text-success mb-0">1</span>
                        </div>
                        <h4 class="mb-3">Generate Receipt</h4>
                        <p class="text-muted">After completing a sale, the system automatically generates a digital receipt with all transaction details.</p>
                    </div>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <span class="h3 fw-bold text-success mb-0">2</span>
                        </div>
                        <h4 class="mb-3">Share Link</h4>
                        <p class="text-muted">Choose your preferred sharing method (SMS, WhatsApp, or Email) and send the secure receipt link to your customer.</p>
                    </div>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <span class="h3 fw-bold text-success mb-0">3</span>
                        </div>
                        <h4 class="mb-3">Customer Access</h4>
                        <p class="text-muted">Customer clicks the link to view, download, or print their receipt from any device without needing to create an account.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Benefits Section -->
        <div class="row align-items-center my-5" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://appnomu.com/landing/assets/images/Receipt_benefit.png" alt="Digital Receipt Benefits" class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">Benefits of <span class="text-success">Receipt Links</span></h2>
                <p class="lead mb-4">Enhance customer experience with digital receipts</p>
                
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0">
                        <div class="bg-success bg-opacity-10 p-2 rounded-circle">
                            <i class="fas fa-leaf text-success"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="mt-0">Eco-Friendly Solution</h5>
                        <p class="mb-0">Reduce paper waste and contribute to environmental sustainability with paperless receipts.</p>
                    </div>
                </div>
                
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0">
                        <div class="bg-success bg-opacity-10 p-2 rounded-circle">
                            <i class="fas fa-money-bill-wave text-success"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="mt-0">Cost Savings</h5>
                        <p class="mb-0">Eliminate costs associated with thermal paper, ink, and printer maintenance.</p>
                    </div>
                </div>
                
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0">
                        <div class="bg-success bg-opacity-10 p-2 rounded-circle">
                            <i class="fas fa-chart-line text-success"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="mt-0">Enhanced Customer Experience</h5>
                        <p class="mb-0">Provide modern, convenient receipt access that reflects positively on your brand.</p>
                    </div>
                </div>
                
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <div class="bg-success bg-opacity-10 p-2 rounded-circle">
                            <i class="fas fa-database text-success"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="mt-0">Digital Record Keeping</h5>
                        <p class="mb-0">Maintain a digital archive of all receipts for easy access and reference.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">Perfect for <span class="text-success">All Businesses</span></h2>
                <p class="lead">Receipt links adapt to various business types and customer needs</p>
            </div>
        </div>
        
        <div class="row g-4" data-aos="fade-up">
            <!-- Retail -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 hover-lift">
                    <div class="card-body p-4 text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-shopping-bag text-success fs-4"></i>
                        </div>
                        <h4 class="mb-3">Retail</h4>
                        <p class="text-muted">Provide digital receipts for in-store purchases, enabling easy returns and warranty claims.</p>
                    </div>
                </div>
            </div>
            
            <!-- Restaurants -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 hover-lift">
                    <div class="card-body p-4 text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-utensils text-success fs-4"></i>
                        </div>
                        <h4 class="mb-3">Restaurants</h4>
                        <p class="text-muted">Send digital receipts for dine-in or takeout orders, perfect for expense reporting.</p>
                    </div>
                </div>
            </div>
            
            <!-- Service Providers -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 hover-lift">
                    <div class="card-body p-4 text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-tools text-success fs-4"></i>
                        </div>
                        <h4 class="mb-3">Service Providers</h4>
                        <p class="text-muted">Deliver detailed service receipts with itemized costs for transparency and record-keeping.</p>
                    </div>
                </div>
            </div>
            
            <!-- E-commerce -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 hover-lift">
                    <div class="card-body p-4 text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-laptop text-success fs-4"></i>
                        </div>
                        <h4 class="mb-3">E-commerce</h4>
                        <p class="text-muted">Complement online orders with accessible digital receipts for seamless customer experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5">
    <div class="container">
        <div class="row mt-5 py-5 bg-success bg-opacity-10 rounded-4 text-center" data-aos="fade-up">
            <div class="col-lg-8 mx-auto">
                <h2 class="mb-4">Ready to Go Paperless?</h2>
                <p class="lead mb-4">Integrate Receipt Links with AppNomu SalesQ today</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=cta&utm_campaign=salesq" class="btn btn-success btn-lg rounded-pill px-4 shadow pulse-animation">Get Started Now</a>
                    <a href="https://api.whatsapp.com/send/?phone=256709712129" target="_blank" class="btn btn-outline-success btn-lg rounded-pill px-4">Contact Support <i class="bi bi-whatsapp ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    // Initialize AOS with fallback for content visibility
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-out',
                once: true,
                offset: 100
            });
            // Refresh AOS to recalculate positions if needed
            setTimeout(function() {
                AOS.refresh();
            }, 500);
        } else {
            // Fallback if AOS is not loaded - show all elements that would be animated
            document.querySelectorAll('[data-aos]').forEach(el => {
                el.style.opacity = '1';
                el.style.transform = 'none';
                el.removeAttribute('data-aos');
            });
        }
    });
</script>

<?php
// Get content with error suppression for zlib compatibility
$content = @ob_get_clean() ?: '';

// Include the layout template
require_once __DIR__ . '/../includes/layout.php';
?>
