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
$page_title = 'Bulk SMS Marketing Solutions | $0.02 per SMS | AppNomu SalesQ';
$page_description = 'Send bulk SMS across all African networks for just $0.02 per message. Reliable SMS marketing platform with instant delivery, pay-as-you-go pricing, and 99.9% delivery rate for businesses.';

// Set page-specific keywords for SEO
$page_keywords = 'Bulk SMS Africa, SMS Marketing $0.02, Cheap SMS Uganda, Business Text Messages Africa, SMS Gateway All Networks, Pay as You Go SMS, Bulk SMS Marketing, SMS Campaigns Africa, Affordable SMS Services, SMS API Africa, Marketing Messages Uganda, Bulk SMS Kenya Nigeria';
?>

<style>
    /* Custom styles for feature page */
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
    
    .feature-card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        height: 100%;
    }
    
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(25, 135, 84, 0.15);
        border-color: #198754;
    }
    
    .feature-icon-sm {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
    }
    
    .hover-lift {
        transition: all 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(25, 135, 84, 0.15);
        border-left: 3px solid #198754;
    }
    /* Pulse animation for buttons */
    .pulse-animation {
        animation: pulse-green 1.5s infinite;
    }
    
    @keyframes pulse-green {
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
    
    <div class="position-absolute start-0 top-50 d-none d-xl-block" style="opacity: 0.3; z-index: 0;">
        <svg width="120" height="240" viewBox="0 0 120 240" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="20" fill="#198754" fill-opacity="0.2"/>
            <circle cx="20" cy="120" r="20" fill="#198754" fill-opacity="0.2"/>
            <circle cx="20" cy="220" r="20" fill="#198754" fill-opacity="0.2"/>
            <circle cx="100" cy="70" r="20" fill="#198754" fill-opacity="0.2"/>
            <circle cx="100" cy="170" r="20" fill="#198754" fill-opacity="0.2"/>
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
                <div class="mb-3">
                    <span class="badge bg-success text-white px-3 py-1 rounded-pill">
                        <i class="bi bi-lightning-fill me-1"></i> Bulk SMS Marketing
                    </span>
                </div>
                <h1 class="display-5 fw-bold mb-3">Powerful SMS Marketing Solutions for African Businesses</h1>
                <p class="lead mb-3">Reach thousands of customers instantly with our reliable bulk SMS platform. Send marketing campaigns, notifications, and alerts across all networks in Africa with guaranteed delivery.</p>
                
                <!-- Key Features -->
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="bi bi-cash-coin text-success me-2"></i> $0.02 per SMS
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="bi bi-globe text-primary me-2"></i> All Networks
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="bi bi-credit-card text-info me-2"></i> Pay as You Go
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="bi bi-check-circle text-success me-2"></i> Instant Delivery
                    </div>
                </div>
                
                <!-- Pricing Highlight -->
                <div class="bg-success bg-opacity-10 border border-success rounded-4 p-3 mb-4">
                    <div class="d-flex align-items-center">
                        <div class="bg-success rounded-circle p-2 me-3">
                            <i class="bi bi-tag-fill text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-bold text-success">Affordable SMS Pricing</h6>
                            <p class="mb-0 small">Only <strong>$0.02 per SMS</strong> across all networks • Pay as you go • No monthly fees</p>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=sms_feature&utm_campaign=hero_section" class="btn btn-success btn-lg rounded-pill px-4 shadow-lg pulse-animation">
                        <i class="bi bi-rocket-takeoff me-2"></i>Start Sending SMS
                    </a>
                    <a href="https://appnomu.com/landing/pricing" class="btn btn-outline-success btn-lg rounded-pill px-4">
                        <i class="bi bi-calculator me-2"></i>View Pricing
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <!-- Rating Badge - Moved above the image -->
                <div class="d-flex justify-content-center gap-3 mb-3">
                    <div class="bg-warning text-dark fw-bold px-3 py-2 rounded-pill shadow-sm d-flex align-items-center">
                        <i class="bi bi-star-fill me-1"></i> 4.8/5 Rating
                    </div>
                    <div class="bg-white text-dark fw-bold px-3 py-2 rounded-pill shadow-sm d-flex align-items-center">
                        <i class="bi bi-people-fill me-1 text-success"></i> 10,000+ Businesses
                    </div>
                </div>
                
                <div class="position-relative">
                    <!-- SMS Hero Image -->
                    <div class="position-relative mx-auto" style="max-width: 100%;">
                        <img 
                            src="https://appnomu.com/landing/assets/images/SMS_Hero_AppNomu.jpg" 
                            alt="AppNomu SalesQ SMS Marketing Solutions" 
                            class="img-fluid rounded-4 shadow-lg"
                            style="max-height: 500px; width: auto;"
                            data-aos="fade-left"
                            data-aos-delay="200"
                        >
                    </div>
                    
                    <div class="position-absolute" style="bottom: 5%; left: 0;">
                        <div class="bg-white text-dark fw-bold px-3 py-2 rounded-pill shadow-sm">
                            <i class="bi bi-lightning-charge-fill text-success me-1"></i> 99.9% Delivery Rate
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
                <h2 class="mb-4">SMS Messaging Features <span class="text-success">for Your Business</span></h2>
                <p class="lead">Powerful tools to enhance your customer communication and marketing campaigns</p>
                <!-- Visual Feature Icons -->
                <div class="d-flex flex-wrap justify-content-center gap-4 mt-4">
                    <div class="text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2 mx-auto" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-graph-up text-success" style="font-size: 2rem;"></i>
                        </div>
                        <div class="small fw-bold">Analytics</div>
                    </div>
                    <div class="text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2 mx-auto" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-people text-success" style="font-size: 2rem;"></i>
                        </div>
                        <div class="small fw-bold">Bulk Sending</div>
                    </div>
                    <div class="text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2 mx-auto" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-calendar-check text-success" style="font-size: 2rem;"></i>
                        </div>
                        <div class="small fw-bold">Scheduling</div>
                    </div>
                    <div class="text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2 mx-auto" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-shield-check text-success" style="font-size: 2rem;"></i>
                        </div>
                        <div class="small fw-bold">Security</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Core SMS Features Section -->
        <div class="row mb-5 align-items-center" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://appnomu.com/landing/assets/images/Hero_engage.jpg" alt="SMS Customer Engagement Solutions" class="img-fluid rounded-4 shadow-lg" style="max-height: 400px;">
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">Core SMS Features</h3>
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm bg-success text-white rounded p-3 me-3">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div>
                            <h5>Bulk SMS</h5>
                            <p>Send personalized messages to thousands of recipients simultaneously. Perfect for marketing campaigns, announcements, and customer engagement initiatives.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm bg-success text-white rounded p-3 me-3">
                            <i class="bi bi-person-lines-fill"></i>
                        </div>
                        <div>
                            <h5>Single SMS</h5>
                            <p>Send targeted individual messages to specific customers. Ideal for personalized communications, order updates, or one-on-one customer support.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm bg-danger text-white rounded p-3 me-3">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <div>
                            <h5>Flash SMS</h5>
                            <p>Send high-priority messages that appear immediately on recipients' screens. Perfect for urgent notifications, alerts, and time-sensitive communications.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=sms_feature&utm_campaign=core_features" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">Start Messaging Today</a>
                </div>
            </div>
        </div>
        
        <!-- Why Our SMS Section -->
        <div class="row mt-5 py-5 bg-light rounded-3" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">Why Choose Our <span class="text-success">SMS Solutions</span>?</h2>
                <p class="lead">Experience the AppNomu SalesQ difference with our premium messaging service</p>
            </div>
            
            <!-- Visual Dashboard Mockup -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="text-center">
                    <img 
                        src="https://appnomu.com/landing/assets/images/SMS_Sales.png" 
                        alt="AppNomu SalesQ SMS Solutions" 
                        class="img-fluid rounded-4 shadow-lg"
                        data-aos="fade-right"
                        data-aos-delay="100"
                        style="max-height: 500px; width: auto;"
                    >
                </div>
            </div>
            
            <!-- Feature Cards -->
            <div class="col-lg-6">
                <div class="row g-4 h-100">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-lift">
                            <div class="card-body p-4">
                                <div class="feature-icon-sm bg-success bg-opacity-10 text-success rounded-circle mb-3">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <h5 class="card-title">Fast Delivery</h5>
                                <p class="card-text">Our SMS messages are delivered instantly with high priority routing through multiple telecom partners.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-lift">
                            <div class="card-body p-4">
                                <div class="feature-icon-sm bg-success bg-opacity-10 text-success rounded-circle mb-3">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h5 class="card-title">Reliable & Secure</h5>
                                <p class="card-text">Enterprise-grade infrastructure ensures your messages are delivered securely and reliably every time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card h-100 border-0 shadow-sm hover-lift">
                            <div class="card-body p-4">
                                <div class="feature-icon-sm bg-success bg-opacity-10 text-success rounded-circle mb-3">
                                    <i class="bi bi-graph-up"></i>
                                </div>
                                <h5 class="card-title">Detailed Analytics</h5>
                                <p class="card-text">Track delivery rates, open rates, and engagement metrics to optimize your messaging campaigns.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Your Brand, Your Voice Section -->
        <div class="row my-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                <div class="position-relative text-center">
                    <!-- From Your Brand Text -->
                    <div class="mb-3">
                        <span class="badge bg-success text-white px-4 py-2 rounded-pill fs-6 fw-bold">
                            <i class="bi bi-building me-2"></i>From Your Brand
                        </span>
                    </div>
                    <!-- Brand Identity Image -->
                    <div class="position-relative d-inline-block">
                        <img src="https://appnomu.com/landing/assets/images/SMS_Brand.png" alt="SMS Brand Identity Solutions" class="img-fluid rounded-4 shadow-lg" style="max-height: 400px;">
                        <div class="position-absolute" style="top: -15px; right: -15px; background: linear-gradient(135deg, #198754 0%, #20c997 100%); padding: 12px; border-radius: 50%; box-shadow: 0 4px 12px rgba(25, 135, 84, 0.3);">
                            <i class="bi bi-patch-check-fill text-white" style="font-size: 1.2rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="pe-lg-4">
                    <h3 class="mb-4">Your Brand, Your Voice</h3>
                    <p class="lead mb-4">Strengthen your brand identity by sending SMS messages with your own custom sender ID.</p>
                    
                    <div class="mb-4">
                        <h5><i class="bi bi-check-circle-fill text-success me-2"></i> Easy Registration</h5>
                        <p>Register your unique sender ID through our simple application process with just a few clicks.</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5><i class="bi bi-check-circle-fill text-success me-2"></i> Brand Recognition</h5>
                        <p>Increase open rates and brand trust when recipients instantly recognize your messages.</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5><i class="bi bi-check-circle-fill text-success me-2"></i> Professional Image</h5>
                        <p>Present a consistent and professional image across all your SMS communications.</p>
                    </div>
                    
                    <div class="mt-4">
                        <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=sms_feature&utm_campaign=sender_id" class="btn btn-outline-success rounded-pill px-4 me-2">Register Sender ID</a>
                        <a href="#features" class="btn btn-link text-success text-decoration-none">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- SMS Management Features Section -->
        <div class="row mt-5 pt-5 border-top" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">Advanced SMS Management Features</h2>
                <p class="lead">Powerful tools to organize, track, and optimize your SMS campaigns</p>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-md-2 g-4 mb-5" data-aos="fade-up" data-aos-delay="200">
            <!-- SMS Outbox Feature -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-inbox-fill text-success"></i>
                            </div>
                            <h4 class="mb-0">SMS Outbox</h4>
                        </div>
                        <p>Track all your outgoing messages with our comprehensive SMS outbox. View message statuses, delivery reports, and recipient information in one organized dashboard.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Complete message history</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Delivery status tracking</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Recipient filters and search</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- SMS Scheduling Feature -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-calendar-check-fill text-success"></i>
                            </div>
                            <h4 class="mb-0">SMS Scheduling</h4>
                        </div>
                        <p>Plan your SMS campaigns in advance with our flexible scheduling system. Set specific dates and times for message delivery to optimize engagement with your audience.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Schedule single or recurring messages</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Time zone optimization</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Edit or cancel scheduled messages</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- SMS API Feature -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-code-slash text-success"></i>
                            </div>
                            <h4 class="mb-0">SMS API</h4>
                        </div>
                        <p>Integrate our powerful SMS capabilities directly into your applications with our robust API. Send messages programmatically from your own systems with just a few lines of code.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> RESTful API architecture</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Comprehensive documentation</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Sample code in multiple languages</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- SMS Export Feature -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-file-earmark-arrow-down-fill text-success"></i>
                            </div>
                            <h4 class="mb-0">Export SMS Data</h4>
                        </div>
                        <p>Download your SMS outbox data for offline analysis, record-keeping, or integration with other business intelligence tools. Export in various formats to suit your needs.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Multiple export formats (CSV, Excel, PDF)</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Customizable data fields</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Automated report generation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- SMS Preview Feature -->
        <div class="row align-items-center my-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="position-relative text-center">
                    <!-- Reliable & Affordable Badges -->
                    <div class="d-flex justify-content-center gap-2 mb-3">
                        <span class="badge bg-primary text-white px-3 py-2 rounded-pill">
                            <i class="bi bi-shield-check me-1"></i>Reliable
                        </span>
                        <span class="badge bg-success text-white px-3 py-2 rounded-pill">
                            <i class="bi bi-cash-coin me-1"></i>Affordable
                        </span>
                    </div>
                    <!-- Message Preview Image -->
                    <div class="position-relative d-inline-block">
                        <img src="https://appnomu.com/landing/assets/images/Message_preview_AppNomu.png" alt="SMS Message Preview Interface" class="img-fluid rounded-4 shadow-lg" style="max-height: 400px;">
                        <!-- Enhanced Preview Icon -->
                        <div class="position-absolute bottom-0 end-0 d-flex align-items-center justify-content-center" style="transform: translate(20%, 20%); width: 70px; height: 70px; background: linear-gradient(135deg, #198754 0%, #20c997 100%); border-radius: 50%; box-shadow: 0 4px 15px rgba(25, 135, 84, 0.4);">
                            <i class="bi bi-eye-fill text-white" style="font-size: 1.5rem;"></i>
                        </div>
                    </div>
                    <!-- Reliability Highlight -->
                    <div class="mt-3">
                        <div class="bg-light border border-success rounded-pill px-4 py-2 d-inline-flex align-items-center">
                            <i class="bi bi-graph-up text-success me-2"></i>
                            <small class="fw-bold text-success">99.9% Delivery Success Rate</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ps-lg-4">
                    <div class="mb-3">
                        <span class="badge bg-success bg-opacity-10 text-success px-3 py-1 rounded-pill">
                            <i class="bi bi-eye me-1"></i>Message Preview
                        </span>
                    </div>
                    <h3 class="mb-4">Reliable & Affordable SMS Preview</h3>
                    <p class="lead mb-4">See exactly how your messages will appear to recipients before sending them. Our reliable SMS preview feature helps ensure your communications are professional and cost-effective, with affordable rates starting at just $0.02 per message.</p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0 text-success me-3">
                                    <i class="bi bi-phone"></i>
                                </div>
                                <div>
                                    <h5>Real Device Simulation</h5>
                                    <p>Preview how your message will look on different device types and screen sizes.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0 text-success me-3">
                                    <i class="bi bi-rulers"></i>
                                </div>
                                <div>
                                    <h5>Character Count</h5>
                                    <p>Monitor message length and segment count to optimize costs and delivery.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0 text-success me-3">
                                    <i class="bi bi-translate"></i>
                                </div>
                                <div>
                                    <h5>Unicode Support</h5>
                                    <p>Preview messages in any language with full Unicode character support.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0 text-success me-3">
                                    <i class="bi bi-link-45deg"></i>
                                </div>
                                <div>
                                    <h5>URL Preview</h5>
                                    <p>See how links will appear in your message and test URL shortening.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=sms_feature&utm_campaign=preview_section" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">Start Using SMS Today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Get the buffered content
$content = ob_get_clean();

// Add Font Awesome to the head section
$fontAwesomeLink = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />';

// Include the content in the template
if(file_exists('../includes/layout.php')) {
    include '../includes/layout.php';
} else {
    // Fallback for relative path issues
    include dirname(__FILE__) . '/../includes/layout.php';
}
?>

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
