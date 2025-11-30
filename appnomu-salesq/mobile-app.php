<?php
// Load configuration first
require_once __DIR__ . '/config.php';

// Start session only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Initialize error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start output buffering for layout system
ob_start();

// Set the current page for active navigation highlighting
$current_page = 'mobile-app';

// Set page metadata
$page_title = 'SalesQ Mobile App | Manage Your Business On-The-Go | AppNomu SalesQ';
$page_description = 'Download the SalesQ Mobile App for iOS and Android. Manage sales, track inventory, send SMS campaigns, access business funding, and grow your business from anywhere. Available on Google Play and App Store.';

// Set page-specific keywords for SEO
$page_keywords = 'SalesQ Mobile App, Business App Uganda, CRM Mobile App Africa, Sales Management App, Inventory App, Business Funding App, Mobile Money Integration, SMS Marketing App, Android Business App, iOS Business App, Small Business App Africa';
?>

<style>
    /* Mobile App Page Styles */
    .app-hero {
        background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 50%, #0d1b2a 100%);
        position: relative;
        overflow: hidden;
        min-height: 90vh;
        display: flex;
        align-items: center;
    }
    
    .app-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 20% 80%, rgba(25, 135, 84, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(32, 201, 151, 0.1) 0%, transparent 50%);
        pointer-events: none;
    }
    
    .phone-mockup {
        position: relative;
        max-width: 300px;
        margin: 0 auto;
    }
    
    .phone-frame {
        background: linear-gradient(145deg, #1a1a2e 0%, #16213e 100%);
        border-radius: 40px;
        padding: 12px;
        box-shadow: 
            0 50px 100px rgba(0, 0, 0, 0.5),
            0 0 0 1px rgba(255, 255, 255, 0.1),
            inset 0 0 20px rgba(255, 255, 255, 0.05);
    }
    
    .phone-screen {
        background: linear-gradient(180deg, #198754 0%, #20c997 100%);
        border-radius: 32px;
        overflow: hidden;
        aspect-ratio: 9/19;
        display: flex;
        flex-direction: column;
    }
    
    .phone-notch {
        background: #1a1a2e;
        width: 120px;
        height: 28px;
        border-radius: 0 0 20px 20px;
        margin: 0 auto;
    }
    
    .phone-content {
        flex: 1;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    
    .phone-content i {
        font-size: 4rem;
        color: white;
        margin-bottom: 1rem;
    }
    
    .phone-content h4 {
        color: white;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }
    
    .phone-content p {
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
    }
    
    .app-badge {
        display: inline-flex;
        align-items: center;
        background: #000;
        color: white;
        padding: 12px 24px;
        border-radius: 12px;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .app-badge:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        color: white;
    }
    
    .app-badge img {
        height: 24px;
        margin-right: 12px;
    }
    
    .app-badge .badge-text {
        text-align: left;
    }
    
    .app-badge .badge-text small {
        display: block;
        font-size: 0.7rem;
        opacity: 0.8;
    }
    
    .app-badge .badge-text span {
        font-size: 1.1rem;
        font-weight: 600;
    }
    
    .feature-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        height: 100%;
        transition: all 0.3s ease;
        border: 1px solid rgba(25, 135, 84, 0.1);
    }
    
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(25, 135, 84, 0.15);
    }
    
    .feature-icon {
        width: 70px;
        height: 70px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        font-size: 1.75rem;
    }
    
    .step-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        text-align: center;
        position: relative;
        transition: all 0.3s ease;
    }
    
    .step-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }
    
    .step-number {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #198754 0%, #20c997 100%);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0 auto 1.5rem;
    }
    
    .screenshot-carousel {
        position: relative;
        padding: 2rem 0;
    }
    
    .screenshot-item {
        background: linear-gradient(145deg, #1a1a2e 0%, #16213e 100%);
        border-radius: 30px;
        padding: 10px;
        margin: 0 10px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
    }
    
    .screenshot-item img {
        border-radius: 24px;
        width: 100%;
    }
    
    .screenshot-placeholder {
        background: linear-gradient(180deg, #198754 0%, #20c997 100%);
        border-radius: 24px;
        aspect-ratio: 9/16;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: white;
        padding: 2rem;
        text-align: center;
    }
    
    .funding-section {
        background: linear-gradient(135deg, #198754 0%, #20c997 100%);
        position: relative;
        overflow: hidden;
    }
    
    .funding-section::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
        pointer-events: none;
    }
    
    .wallet-card {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 2rem;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .testimonial-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }
    
    .testimonial-card .stars {
        color: #ffc107;
        margin-bottom: 1rem;
    }
    
    .faq-item {
        background: white;
        border-radius: 15px;
        margin-bottom: 1rem;
        overflow: hidden;
        border: 1px solid #e9ecef;
    }
    
    .faq-item .faq-question {
        padding: 1.25rem 1.5rem;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .faq-item .faq-question:hover {
        background: #f8f9fa;
    }
    
    .faq-item .faq-answer {
        padding: 0 1.5rem 1.25rem;
        color: #6c757d;
        display: none;
    }
    
    .faq-item.active .faq-answer {
        display: block;
    }
    
    .faq-item.active .faq-question i {
        transform: rotate(180deg);
    }
    
    /* Mobile Responsive */
    @media (max-width: 991.98px) {
        .app-hero {
            min-height: auto;
            padding: 4rem 0;
        }
        
        .phone-mockup {
            max-width: 220px;
            margin-bottom: 2rem;
        }
    }
    
    @media (max-width: 767.98px) {
        .app-hero {
            padding: 3rem 0;
            text-align: center;
        }
        
        .phone-mockup {
            max-width: 200px;
        }
        
        .app-badge {
            width: 100%;
            justify-content: center;
            margin-bottom: 1rem;
        }
        
        .feature-card,
        .step-card {
            padding: 1.5rem;
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="app-hero">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="text-white">
                    <span class="badge bg-success bg-opacity-25 text-white px-3 py-2 rounded-pill mb-3">
                        <i class="bi bi-phone me-2"></i>NOW AVAILABLE
                    </span>
                    <h1 class="display-4 fw-bold mb-4">
                        Your Business in Your <span class="text-success">Pocket</span>
                    </h1>
                    <p class="lead mb-4 opacity-75">
                        Manage sales, track inventory, send SMS campaigns, and access business funding - all from your smartphone. The SalesQ Mobile App puts the power of a complete business suite in your hands.
                    </p>
                    
                    <!-- Key Stats -->
                    <div class="row g-3 mb-4">
                        <div class="col-4">
                            <div class="text-center">
                                <h3 class="text-success fw-bold mb-0">10K+</h3>
                                <small class="opacity-75">Downloads</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center">
                                <h3 class="text-success fw-bold mb-0">4.8</h3>
                                <small class="opacity-75">App Rating</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center">
                                <h3 class="text-success fw-bold mb-0">v1.0.2</h3>
                                <small class="opacity-75">Latest Version</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Download Buttons -->
                    <div class="d-flex flex-column flex-sm-row gap-3 mb-4">
                        <a href="#" class="app-badge">
                            <i class="bi bi-google-play fs-4 me-3"></i>
                            <div class="badge-text">
                                <small>GET IT ON</small>
                                <span>Google Play</span>
                            </div>
                        </a>
                        <a href="#" class="app-badge">
                            <i class="bi bi-apple fs-4 me-3"></i>
                            <div class="badge-text">
                                <small>DOWNLOAD ON</small>
                                <span>App Store</span>
                            </div>
                        </a>
                    </div>
                    
                    <p class="small opacity-50">
                        <i class="bi bi-shield-check me-1"></i> Free to download • No credit card required
                    </p>
                </div>
            </div>
            
            <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                <div class="phone-mockup">
                    <div class="phone-frame">
                        <div class="phone-screen">
                            <div class="phone-notch"></div>
                            <div class="phone-content">
                                <i class="bi bi-graph-up-arrow"></i>
                                <h4>SalesQ</h4>
                                <p>Your Business Dashboard</p>
                                <div class="mt-3">
                                    <span class="badge bg-white bg-opacity-25 px-3 py-2 rounded-pill">
                                        <i class="bi bi-lightning-charge me-1"></i> Live Sync
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Mobile App Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill mb-3">WHY MOBILE?</span>
            <h2 class="display-5 fw-bold mb-3">Business Management, Reimagined</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                In today's fast-paced world, you need to manage your business from anywhere. The SalesQ Mobile App gives you complete control, whether you're at the shop, meeting clients, or on the go.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon bg-success bg-opacity-10">
                        <i class="bi bi-clock-history text-success"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Real-Time Access</h4>
                    <p class="text-muted mb-0">
                        Check your sales, inventory levels, and customer data instantly. No more waiting until you're back at the office - your business data is always at your fingertips.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon bg-primary bg-opacity-10">
                        <i class="bi bi-wifi-off text-primary"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Works Offline</h4>
                    <p class="text-muted mb-0">
                        No internet? No problem. Record sales and manage inventory offline. Everything syncs automatically when you're back online - perfect for areas with unstable connectivity.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon bg-warning bg-opacity-10">
                        <i class="bi bi-bell text-warning"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Instant Notifications</h4>
                    <p class="text-muted mb-0">
                        Get alerts for low stock, new sales, customer inquiries, and funding updates. Stay informed about what matters most to your business in real-time.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon bg-info bg-opacity-10">
                        <i class="bi bi-phone-vibrate text-info"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Mobile Money Integration</h4>
                    <p class="text-muted mb-0">
                        Accept payments via MTN Mobile Money and Airtel Money directly from the app. Seamless transactions for you and your customers.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon bg-danger bg-opacity-10">
                        <i class="bi bi-shield-lock text-danger"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Secure & Private</h4>
                    <p class="text-muted mb-0">
                        Your data is protected with AES-256 encryption and secure local storage. Biometric login keeps your business information safe from unauthorized access.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon bg-success bg-opacity-10">
                        <i class="bi bi-lightning-charge text-success"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Fast & Lightweight</h4>
                    <p class="text-muted mb-0">
                        Optimized for African networks and devices. The app is lightweight, fast-loading, and doesn't drain your battery or data.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- App Features Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill mb-3">FEATURES</span>
            <h2 class="display-5 fw-bold mb-3">Everything You Need, One App</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                From sales tracking to business funding, the SalesQ Mobile App is packed with features designed for African entrepreneurs.
            </p>
        </div>
        
        <div class="row g-4 align-items-center mb-5">
            <div class="col-lg-6">
                <div class="pe-lg-4">
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-success bg-opacity-10 rounded-3 p-3">
                                <i class="bi bi-cart-check text-success fs-4"></i>
                            </div>
                        </div>
                        <div class="ms-4">
                            <h5 class="fw-bold">Sales Management</h5>
                            <p class="text-muted mb-0">Record sales, generate receipts, and track daily revenue. View sales history and analytics to understand your business performance.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                <i class="bi bi-box-seam text-primary fs-4"></i>
                            </div>
                        </div>
                        <div class="ms-4">
                            <h5 class="fw-bold">Inventory Control</h5>
                            <p class="text-muted mb-0">Add products, update stock levels, and get low-stock alerts. Scan barcodes for quick product lookup and management.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-warning bg-opacity-10 rounded-3 p-3">
                                <i class="bi bi-people text-warning fs-4"></i>
                            </div>
                        </div>
                        <div class="ms-4">
                            <h5 class="fw-bold">Customer Management</h5>
                            <p class="text-muted mb-0">Store customer details, track purchase history, and build lasting relationships. Send personalized messages to keep customers engaged.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="bg-info bg-opacity-10 rounded-3 p-3">
                                <i class="bi bi-chat-dots text-info fs-4"></i>
                            </div>
                        </div>
                        <div class="ms-4">
                            <h5 class="fw-bold">SMS Campaigns</h5>
                            <p class="text-muted mb-0">Send bulk SMS to customers directly from the app. Promote offers, send reminders, and keep your customers informed.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="screenshot-item">
                            <div class="screenshot-placeholder">
                                <i class="bi bi-graph-up fs-1 mb-2"></i>
                                <span class="fw-bold">Dashboard</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="screenshot-item" style="margin-top: 2rem;">
                            <div class="screenshot-placeholder">
                                <i class="bi bi-receipt fs-1 mb-2"></i>
                                <span class="fw-bold">Sales</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Funding Section -->
<section class="funding-section py-5 text-white">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <span class="badge bg-white bg-opacity-25 px-3 py-2 rounded-pill mb-3">
                    <i class="bi bi-cash-stack me-2"></i>EXCLUSIVE FEATURE
                </span>
                <h2 class="display-5 fw-bold mb-4">Access Business Funding</h2>
                <p class="lead opacity-90 mb-4">
                    Need capital to grow your business? Apply for business funding directly from the app. Our credit assessment uses your sales data to provide quick decisions.
                </p>
                
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <div class="wallet-card">
                            <i class="bi bi-lightning-charge fs-3 mb-2 d-block"></i>
                            <h6 class="fw-bold mb-1">Quick Application</h6>
                            <small class="opacity-75">Apply in under 5 minutes</small>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wallet-card">
                            <i class="bi bi-graph-up-arrow fs-3 mb-2 d-block"></i>
                            <h6 class="fw-bold mb-1">Data-Driven</h6>
                            <small class="opacity-75">Based on your sales history</small>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wallet-card">
                            <i class="bi bi-phone fs-3 mb-2 d-block"></i>
                            <h6 class="fw-bold mb-1">Mobile Money</h6>
                            <small class="opacity-75">Receive funds via MoMo</small>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wallet-card">
                            <i class="bi bi-shield-check fs-3 mb-2 d-block"></i>
                            <h6 class="fw-bold mb-1">Transparent Terms</h6>
                            <small class="opacity-75">No hidden fees</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="bg-white bg-opacity-10 rounded-4 p-4 backdrop-blur">
                    <h5 class="fw-bold mb-4"><i class="bi bi-wallet2 me-2"></i>In-App Wallet</h5>
                    <p class="opacity-90 mb-4">
                        Your SalesQ wallet lets you manage funds, pay for services, and track all transactions in one place.
                    </p>
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-center mb-3">
                            <i class="bi bi-check-circle-fill text-white me-3"></i>
                            <span>Top up via Mobile Money (MTN, Airtel)</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="bi bi-check-circle-fill text-white me-3"></i>
                            <span>Pay for SMS credits and subscriptions</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="bi bi-check-circle-fill text-white me-3"></i>
                            <span>Buy airtime for yourself or customers</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="bi bi-check-circle-fill text-white me-3"></i>
                            <span>Transfer funds to bank accounts</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-white me-3"></i>
                            <span>View complete transaction history</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How to Get Started Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill mb-3">GET STARTED</span>
            <h2 class="display-5 fw-bold mb-3">Start Using SalesQ in 3 Steps</h2>
            <p class="lead text-muted mx-auto" style="max-width: 600px;">
                Getting started with the SalesQ Mobile App is quick and easy.
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="step-card h-100">
                    <div class="step-number">1</div>
                    <h4 class="fw-bold mb-3">Download the App</h4>
                    <p class="text-muted mb-0">
                        Get the SalesQ app from Google Play Store or Apple App Store. It's free to download and takes less than a minute.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="step-card h-100">
                    <div class="step-number">2</div>
                    <h4 class="fw-bold mb-3">Create Your Account</h4>
                    <p class="text-muted mb-0">
                        Sign up with your phone number or email. Add your business details and you're ready to go. Already have a web account? Just log in!
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="step-card h-100">
                    <div class="step-number">3</div>
                    <h4 class="fw-bold mb-3">Start Managing</h4>
                    <p class="text-muted mb-0">
                        Add your products, record your first sale, and explore all the features. Your data syncs automatically with the web platform.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill mb-3">TESTIMONIALS</span>
            <h2 class="display-5 fw-bold mb-3">Loved by Business Owners</h2>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card h-100">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="mb-4">"The mobile app has changed how I run my shop. I can check my sales even when I'm at home with my family. The offline mode is a lifesaver!"</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-success rounded-circle p-2 me-3">
                            <i class="bi bi-person text-white"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Sarah Nakamya</h6>
                            <small class="text-muted">Retail Shop Owner, Kampala</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card h-100">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="mb-4">"I applied for funding through the app and got approved in 2 days. The money helped me stock up for the holiday season. Amazing service!"</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-success rounded-circle p-2 me-3">
                            <i class="bi bi-person text-white"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">James Ochieng</h6>
                            <small class="text-muted">Electronics Dealer, Nairobi</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card h-100">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                    <p class="mb-4">"Sending SMS to my customers is so easy now. I just select them from the app and send. My repeat customers have increased by 30%!"</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-success rounded-circle p-2 me-3">
                            <i class="bi bi-person text-white"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0">Grace Akinyi</h6>
                            <small class="text-muted">Salon Owner, Dar es Salaam</small>
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
        <div class="text-center mb-5">
            <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill mb-3">FAQ</span>
            <h2 class="display-5 fw-bold mb-3">Frequently Asked Questions</h2>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="faq-item active">
                    <div class="faq-question">
                        <span>Is the SalesQ Mobile App free?</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes! The app is free to download and use. You only pay for premium features like SMS credits, advanced reports, or business funding services.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Does the app work offline?</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes, you can record sales and manage inventory without internet. All data syncs automatically when you're back online.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can I use the same account on web and mobile?</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Absolutely! Your SalesQ account works across all platforms. Data syncs in real-time between the web dashboard and mobile app.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How do I apply for business funding?</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Go to the Funding section in the app, fill out the application form with your business details, and submit. Our team reviews applications within 24-48 hours.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Is my data secure?</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes, we use bank-level AES-256 encryption for all data. Your information is stored securely and never shared with third parties without your consent.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Which payment methods are supported?</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        We support MTN Mobile Money, Airtel Money, Flutterwave, and bank transfers. You can top up your wallet or pay for services using any of these methods.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="display-5 fw-bold mb-3">Ready to Transform Your Business?</h2>
                <p class="lead opacity-75 mb-0">
                    Join thousands of African entrepreneurs who are growing their businesses with SalesQ Mobile App.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-lg-end">
                    <a href="#" class="app-badge">
                        <i class="bi bi-google-play fs-4 me-3"></i>
                        <div class="badge-text">
                            <small>GET IT ON</small>
                            <span>Google Play</span>
                        </div>
                    </a>
                    <a href="#" class="app-badge">
                        <i class="bi bi-apple fs-4 me-3"></i>
                        <div class="badge-text">
                            <small>DOWNLOAD ON</small>
                            <span>App Store</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Close other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
        });
    });
});
</script>

<?php
// Store the buffered content into $content variable
$content = ob_get_clean();

// Include the layout file which will use the $content variable
include 'includes/layout.php';
?>
