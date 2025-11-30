<?php
// Start the session
session_start();

// Start output buffering
ob_start();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set the current page for active navigation highlighting
$current_page = 'mobile-app';

// Set page metadata
$page_title = 'SalesQ Mobile App | Manage Your Business On-The-Go | AppNomu SalesQ';
$page_description = 'Download the SalesQ Mobile App for iOS and Android. Manage sales, track inventory, send SMS campaigns, access business funding, and grow your business from anywhere. Available on Google Play and App Store.';

// Set page-specific keywords for SEO
$page_keywords = 'SalesQ Mobile App, Business App Uganda, CRM Mobile App Africa, Sales Management App, Inventory App, Business Funding App, Mobile Money Integration, SMS Marketing App, Android Business App, iOS Business App, Small Business App Africa';
?>

<style>
    /* Custom styles for Mobile App page - matching site design pattern */
    .hero-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 120px 0 80px;
        position: relative;
        overflow: hidden;
    }
    
    .hero-section h1 {
        font-size: 2.8rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        color: #212529;
    }
    
    .hero-section p {
        color: #212529;
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
    
    .app-store-btn {
        display: inline-flex;
        align-items: center;
        background: #212529;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .app-store-btn:hover {
        background: #198754;
        color: white;
        transform: translateY(-2px);
    }
    
    .app-store-btn i {
        font-size: 1.5rem;
        margin-right: 10px;
    }
    
    .app-store-btn .btn-text small {
        display: block;
        font-size: 0.7rem;
        opacity: 0.8;
    }
    
    .app-store-btn .btn-text span {
        font-size: 1rem;
        font-weight: 600;
    }
    
    .phone-mockup-simple {
        background: #fff;
        border-radius: 30px;
        padding: 10px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        max-width: 280px;
        margin: 0 auto;
    }
    
    .phone-screen-simple {
        background: linear-gradient(135deg, #198754 0%, #20c997 100%);
        border-radius: 24px;
        padding: 30px 20px;
        min-height: 400px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
    }
    
    .step-number {
        width: 60px;
        height: 60px;
        background: linear-gradient(45deg, #198754, #20c997);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0 auto 1rem;
        box-shadow: 0 4px 15px rgba(25, 135, 84, 0.3);
    }
    
    .testimonial-card {
        background: white;
        border-radius: 10px;
        padding: 1.5rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        height: 100%;
        transition: all 0.3s ease;
    }
    
    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(25, 135, 84, 0.15);
    }
    
    .testimonial-card .stars {
        color: #ffc107;
        margin-bottom: 1rem;
    }
    
    .faq-accordion .accordion-button:not(.collapsed) {
        background-color: rgba(25, 135, 84, 0.1);
        color: #198754;
    }
    
    .faq-accordion .accordion-button:focus {
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
    }
</style>

<!-- Hero Section -->
<section class="hero-section">
    <!-- SVG Wave Pattern for Hero Background -->
    <div class="position-absolute bottom-0 left-0 w-100 overflow-hidden" style="height: 60px; transform: rotate(180deg);">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="height: 60px; width: 100%;">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="#ffffff"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="#ffffff"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="#ffffff"></path>
        </svg>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h1>SalesQ <span class="text-success">Mobile App</span></h1>
                <p class="lead mb-4">Your complete business management solution, now in your pocket. Manage sales, inventory, customers, and more - anytime, anywhere.</p>
                <div class="mb-4">
                    <span class="badge bg-success text-white me-2 mb-2 py-2 px-3"><i class="fas fa-check-circle me-2"></i> Free Download</span>
                    <span class="badge bg-success text-white me-2 mb-2 py-2 px-3"><i class="fas fa-shield-alt me-2"></i> Secure & Private</span>
                    <span class="badge bg-success text-white mb-2 py-2 px-3"><i class="fas fa-sync me-2"></i> Real-time Sync</span>
                </div>
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="#" class="app-store-btn">
                        <i class="bi bi-google-play"></i>
                        <div class="btn-text">
                            <small>GET IT ON</small>
                            <span>Google Play</span>
                        </div>
                    </a>
                    <a href="#" class="app-store-btn">
                        <i class="bi bi-apple"></i>
                        <div class="btn-text">
                            <small>DOWNLOAD ON</small>
                            <span>App Store</span>
                        </div>
                    </a>
                </div>
                <div class="d-flex align-items-center gap-4 text-muted">
                    <div><i class="fas fa-download text-success me-2"></i><strong>10K+</strong> Downloads</div>
                    <div><i class="fas fa-star text-warning me-2"></i><strong>4.8</strong> Rating</div>
                    <div><i class="fas fa-code-branch text-success me-2"></i><strong>v1.0.2</strong></div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="phone-mockup-simple" data-aos="fade-left" data-aos-delay="200">
                    <div class="phone-screen-simple">
                        <i class="fas fa-chart-line fa-4x mb-3"></i>
                        <h3 class="fw-bold mb-2">SalesQ</h3>
                        <p class="mb-3">Your Business Dashboard</p>
                        <span class="badge bg-white bg-opacity-25 px-3 py-2 rounded-pill">
                            <i class="fas fa-bolt me-1"></i> Live Sync Enabled
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Mobile App Section -->
<section class="py-5" id="features">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">Why Use the <span class="text-success">Mobile App</span>?</h2>
                <p class="lead">Manage your business from anywhere with powerful mobile features</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-clock text-success" style="font-size: 1.75rem; margin: auto;"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Real-Time Access</h5>
                        <p class="text-muted mb-0">Check your sales, inventory levels, and customer data instantly. Your business data is always at your fingertips.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-wifi text-success" style="font-size: 1.75rem; margin: auto;"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Works Offline</h5>
                        <p class="text-muted mb-0">No internet? No problem. Record sales and manage inventory offline. Everything syncs automatically when you're back online.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-bell text-success" style="font-size: 1.75rem; margin: auto;"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Instant Notifications</h5>
                        <p class="text-muted mb-0">Get alerts for low stock, new sales, customer inquiries, and funding updates. Stay informed in real-time.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-mobile-alt text-success" style="font-size: 1.75rem; margin: auto;"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Mobile Money Integration</h5>
                        <p class="text-muted mb-0">Accept payments via MTN Mobile Money and Airtel Money directly from the app. Seamless transactions for you and your customers.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-shield-alt text-success" style="font-size: 1.75rem; margin: auto;"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Secure & Private</h5>
                        <p class="text-muted mb-0">Your data is protected with AES-256 encryption. Biometric login keeps your business information safe.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 70px; height: 70px;">
                            <i class="fas fa-bolt text-success" style="font-size: 1.75rem; margin: auto;"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Fast & Lightweight</h5>
                        <p class="text-muted mb-0">Optimized for African networks and devices. Lightweight, fast-loading, and doesn't drain your battery or data.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- App Features Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">App <span class="text-success">Features</span></h2>
                <p class="lead">Everything you need to manage your business, all in one app</p>
            </div>
        </div>
        
        <div class="row g-4 align-items-center mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <h3 class="mb-4"><i class="fas fa-star text-warning me-2"></i>Core App Features</h3>
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-shopping-cart text-white"></i>
                        </div>
                        <div>
                            <h5><i class="fas fa-receipt text-success me-2"></i>Sales Management</h5>
                            <p>Record sales, generate receipts, and track daily revenue. View sales history and analytics to understand your business performance.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-boxes text-white"></i>
                        </div>
                        <div>
                            <h5><i class="fas fa-box text-success me-2"></i>Inventory Control</h5>
                            <p>Add products, update stock levels, and get low-stock alerts. Scan barcodes for quick product lookup and management.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-users text-white"></i>
                        </div>
                        <div>
                            <h5><i class="fas fa-user-friends text-success me-2"></i>Customer Management</h5>
                            <p>Store customer details, track purchase history, and build lasting relationships with personalized engagement.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-sms text-white"></i>
                        </div>
                        <div>
                            <h5><i class="fas fa-comment-dots text-success me-2"></i>SMS Campaigns</h5>
                            <p>Send bulk SMS to customers directly from the app. Promote offers, send reminders, and keep your customers informed.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=mobile_app&utm_campaign=features" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">Get Started Free</a>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="bg-white rounded-3 shadow-lg p-4">
                    <div class="d-flex align-items-center mb-3 border-bottom pb-3">
                        <div class="bg-success rounded-circle p-3 me-3">
                            <i class="fas fa-mobile-alt text-white fa-2x"></i>
                        </div>
                        <h4 class="mb-0">App Dashboard Preview</h4>
                    </div>
                    <div class="row text-center">
                        <div class="col-6 mb-3">
                            <div class="p-3 border rounded hover-lift">
                                <i class="fas fa-chart-line text-success fa-2x mb-2"></i>
                                <h6 class="mb-0">Sales Analytics</h6>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="p-3 border rounded hover-lift">
                                <i class="fas fa-box-open text-success fa-2x mb-2"></i>
                                <h6 class="mb-0">Inventory</h6>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="p-3 border rounded hover-lift">
                                <i class="fas fa-users text-success fa-2x mb-2"></i>
                                <h6 class="mb-0">Customers</h6>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="p-3 border rounded hover-lift">
                                <i class="fas fa-wallet text-success fa-2x mb-2"></i>
                                <h6 class="mb-0">Wallet</h6>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <span class="badge bg-success py-2 px-3"><i class="fas fa-sync me-1"></i> Real-time Sync with Web</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Funding & Wallet Section -->
<section class="py-5" data-aos="fade-up">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">Wallet & <span class="text-success">Business Funding</span></h2>
                <p class="lead">Access capital and manage your finances directly from the app</p>
            </div>
        </div>
        
        <div class="row g-4 align-items-center">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                <div class="position-relative bg-white p-4 rounded shadow-lg">
                    <div class="position-absolute" style="top: -15px; right: -15px; background-color: #198754; padding: 10px 15px; border-radius: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                        <span class="fw-bold text-white small">In-App Wallet</span>
                    </div>
                    
                    <h5 class="mb-4"><i class="fas fa-wallet text-success me-2"></i>Wallet Features</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-center mb-3 p-2 border rounded hover-lift">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <span>Top up via Mobile Money (MTN, Airtel)</span>
                        </li>
                        <li class="d-flex align-items-center mb-3 p-2 border rounded hover-lift">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <span>Pay for SMS credits and subscriptions</span>
                        </li>
                        <li class="d-flex align-items-center mb-3 p-2 border rounded hover-lift">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <span>Buy airtime for yourself or customers</span>
                        </li>
                        <li class="d-flex align-items-center mb-3 p-2 border rounded hover-lift">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <span>Transfer funds to bank accounts</span>
                        </li>
                        <li class="d-flex align-items-center p-2 border rounded hover-lift">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <span>View complete transaction history</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="pe-lg-4">
                    <h3 class="mb-4"><i class="fas fa-hand-holding-usd text-warning me-2"></i>Access Business Funding</h3>
                    <p class="lead mb-4">Need capital to grow your business? Apply for business funding directly from the app.</p>
                    
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-bolt text-success fa-2x mb-2"></i>
                                    <h6 class="fw-bold mb-1">Quick Application</h6>
                                    <small class="text-muted">Apply in under 5 minutes</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-chart-line text-success fa-2x mb-2"></i>
                                    <h6 class="fw-bold mb-1">Data-Driven</h6>
                                    <small class="text-muted">Based on your sales history</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-mobile-alt text-success fa-2x mb-2"></i>
                                    <h6 class="fw-bold mb-1">Mobile Money</h6>
                                    <small class="text-muted">Receive funds via MoMo</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-shield-alt text-success fa-2x mb-2"></i>
                                    <h6 class="fw-bold mb-1">Transparent Terms</h6>
                                    <small class="text-muted">No hidden fees</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=mobile_app&utm_campaign=funding" class="btn btn-outline-success rounded-pill px-4">Learn More About Funding</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How to Get Started Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">How to <span class="text-success">Get Started</span></h2>
                <p class="lead">Getting started with the SalesQ Mobile App is quick and easy</p>
            </div>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm text-center feature-card">
                    <div class="card-body p-4">
                        <div class="step-number">1</div>
                        <h5 class="fw-bold mb-3">Download the App</h5>
                        <p class="text-muted mb-0">Get the SalesQ app from Google Play Store or Apple App Store. It's free to download and takes less than a minute.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm text-center feature-card">
                    <div class="card-body p-4">
                        <div class="step-number">2</div>
                        <h5 class="fw-bold mb-3">Create Your Account</h5>
                        <p class="text-muted mb-0">Sign up with your phone number or email. Add your business details and you're ready to go. Already have a web account? Just log in!</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm text-center feature-card">
                    <div class="card-body p-4">
                        <div class="step-number">3</div>
                        <h5 class="fw-bold mb-3">Start Managing</h5>
                        <p class="text-muted mb-0">Add your products, record your first sale, and explore all the features. Your data syncs automatically with the web platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">What Our <span class="text-success">Users Say</span></h2>
                <p class="lead">Trusted by business owners across Uganda and Africa</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card h-100">
                    <div class="stars mb-3">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </div>
                    <p class="mb-4">"The SalesQ mobile app has transformed how I manage my hobby business. I can track sales, manage inventory, and even send SMS to customers - all from my phone. The offline mode is perfect for when I'm at markets without good network coverage!"</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-success rounded-circle p-2 me-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Isiko Stiwart</h6>
                            <small class="text-muted">HOBBIST</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card h-100">
                    <div class="stars mb-3">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </div>
                    <p class="mb-4">"As a tech company owner, I needed a solution that could keep up with our fast-paced operations. SalesQ mobile app delivers exactly that. The real-time sync between web and mobile means I'm always up to date, whether I'm in the office or meeting clients."</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-success rounded-circle p-2 me-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Ivan Masete Kutosi</h6>
                            <small class="text-muted">Owner, Chamix Tech</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card h-100">
                    <div class="stars mb-3">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </div>
                    <p class="mb-4">"Running an agribusiness means I'm often in the field with limited connectivity. The SalesQ app's offline capability has been a game-changer. I can record transactions anywhere and everything syncs when I'm back online. Highly recommended for agricultural businesses!"</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-success rounded-circle p-2 me-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Andama James</h6>
                            <small class="text-muted">Owner, Moli Agro Youth Solutions Limited</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">Frequently Asked <span class="text-success">Questions</span></h2>
                <p class="lead">Everything you need to know about the SalesQ Mobile App</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion faq-accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                <i class="fas fa-question-circle text-success me-2"></i> Is the SalesQ Mobile App free?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! The app is free to download and use. You only pay for premium features like SMS credits, advanced reports, or business funding services.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                <i class="fas fa-question-circle text-success me-2"></i> Does the app work offline?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, you can record sales and manage inventory without internet. All data syncs automatically when you're back online.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                <i class="fas fa-question-circle text-success me-2"></i> Can I use the same account on web and mobile?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely! Your SalesQ account works across all platforms. Data syncs in real-time between the web dashboard and mobile app.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                <i class="fas fa-question-circle text-success me-2"></i> How do I apply for business funding?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Go to the Funding section in the app, fill out the application form with your business details, and submit. Our team reviews applications within 24-48 hours.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                <i class="fas fa-question-circle text-success me-2"></i> Is my data secure?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we use bank-level AES-256 encryption for all data. Your information is stored securely and never shared with third parties without your consent.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                <i class="fas fa-question-circle text-success me-2"></i> Which payment methods are supported?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We support MTN Mobile Money, Airtel Money, Flutterwave, and bank transfers. You can top up your wallet or pay for services using any of these methods.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="py-5 bg-success text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-3">Ready to Transform Your Business?</h2>
                <p class="lead opacity-90 mb-0">
                    Join thousands of African entrepreneurs who are growing their businesses with SalesQ Mobile App.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-lg-end">
                    <a href="#" class="btn btn-light btn-lg rounded-pill px-4">
                        <i class="bi bi-google-play me-2"></i> Google Play
                    </a>
                    <a href="#" class="btn btn-outline-light btn-lg rounded-pill px-4">
                        <i class="bi bi-apple me-2"></i> App Store
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Store the buffered content into $content variable
$content = ob_get_clean();

// Include the layout file which will use the $content variable
include 'includes/layout.php';
?>
