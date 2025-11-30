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
$page_title = 'AppNomu SalesQ Mobile App | Manage Your Business On-The-Go';
$page_description = 'Download the AppNomu SalesQ App for iOS and Android. Manage sales, track inventory, access business funding, and grow your business from anywhere. Available on Google Play and App Store.';

// Set page-specific keywords for SEO
$page_keywords = 'AppNomu SalesQ App, Business App Uganda, CRM Mobile App Africa, Sales Management App, Inventory App, Business Funding App, Mobile Money Integration, Android Business App, iOS Business App, Small Business App Africa';
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
    
    /* 3D Feature Cards */
    .feature-card-3d {
        border-radius: 15px;
        padding: 1.5rem;
        background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
        box-shadow: 
            0 10px 30px rgba(0, 0, 0, 0.1),
            0 1px 8px rgba(0, 0, 0, 0.06),
            inset 0 1px 0 rgba(255, 255, 255, 0.8);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        transform-style: preserve-3d;
        position: relative;
        overflow: hidden;
        height: 100%;
        text-align: left;
    }
    
    .feature-card-3d::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(25, 135, 84, 0.05) 0%, transparent 50%);
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
    }
    
    .feature-card-3d:hover {
        transform: perspective(1000px) rotateX(5deg) rotateY(-5deg) translateY(-10px) scale(1.02);
        box-shadow: 
            0 20px 40px rgba(25, 135, 84, 0.15),
            0 5px 15px rgba(0, 0, 0, 0.08),
            inset 0 1px 0 rgba(255, 255, 255, 0.9);
    }
    
    .feature-card-3d:hover::before {
        opacity: 1;
    }
    
    .feature-card-3d .card-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #198754 0%, #20c997 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
        box-shadow: 0 8px 20px rgba(25, 135, 84, 0.3);
        transition: all 0.3s ease;
        transform: translateZ(20px);
    }
    
    .feature-card-3d:hover .card-icon {
        transform: translateZ(40px) scale(1.1) rotate(5deg);
        box-shadow: 0 12px 25px rgba(25, 135, 84, 0.4);
    }
    
    .feature-card-3d .card-icon i {
        font-size: 1.5rem;
        color: white;
    }
    
    .feature-card-3d h5 {
        font-weight: 700;
        margin-bottom: 0.75rem;
        color: #212529;
        transform: translateZ(10px);
        transition: all 0.3s ease;
    }
    
    .feature-card-3d:hover h5 {
        transform: translateZ(20px);
        color: #198754;
    }
    
    .feature-card-3d p {
        color: #6c757d;
        margin-bottom: 0;
        font-size: 0.95rem;
        line-height: 1.6;
        transform: translateZ(5px);
        transition: all 0.3s ease;
    }
    
    .feature-card-3d:hover p {
        transform: translateZ(15px);
    }
    
    /* Shine effect */
    .feature-card-3d::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            45deg,
            transparent 40%,
            rgba(255, 255, 255, 0.3) 50%,
            transparent 60%
        );
        transform: translateX(-100%) translateY(-100%) rotate(45deg);
        transition: transform 0.6s ease;
        pointer-events: none;
    }
    
    .feature-card-3d:hover::after {
        transform: translateX(100%) translateY(100%) rotate(45deg);
    }
    
    /* Mobile adjustments for 3D cards */
    @media (max-width: 768px) {
        .feature-card-3d:hover {
            transform: perspective(1000px) rotateX(3deg) rotateY(-3deg) translateY(-5px) scale(1.01);
        }
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
        padding: 12px 24px;
        border-radius: 10px;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid #212529;
    }
    
    .app-store-btn:hover {
        background: #000;
        border-color: #000;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
    
    .app-store-btn .app-store-icon {
        margin-right: 12px;
        flex-shrink: 0;
    }
    
    .app-store-btn .btn-text {
        text-align: left;
    }
    
    .app-store-btn .btn-text small {
        display: block;
        font-size: 0.65rem;
        opacity: 0.8;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .app-store-btn .btn-text span {
        font-size: 1.1rem;
        font-weight: 600;
        line-height: 1.2;
    }
    
    /* CTA section app download buttons */
    .app-download-btn {
        display: inline-flex;
        align-items: center;
        background: white;
        color: #212529;
        padding: 12px 24px;
        border-radius: 10px;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid white;
    }
    
    .app-download-btn:hover {
        background: rgba(255,255,255,0.9);
        color: #198754;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    
    .app-download-btn .app-store-icon {
        margin-right: 12px;
        flex-shrink: 0;
    }
    
    .app-download-btn .btn-text {
        text-align: left;
    }
    
    .app-download-btn .btn-text small {
        display: block;
        font-size: 0.65rem;
        opacity: 0.7;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .app-download-btn .btn-text span {
        font-size: 1.1rem;
        font-weight: 600;
        line-height: 1.2;
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
                <h1>AppNomu SalesQ <span class="text-success">Mobile App</span></h1>
                <p class="lead mb-4">Your complete business management solution, now in your pocket. Manage sales, inventory, customers, and more - anytime, anywhere.</p>
                <div class="mb-4">
                    <span class="badge bg-success text-white me-2 mb-2 py-2 px-3"><i class="fas fa-check-circle me-2"></i> Free Download</span>
                    <span class="badge bg-success text-white me-2 mb-2 py-2 px-3"><i class="fas fa-shield-alt me-2"></i> Secure & Private</span>
                    <span class="badge bg-success text-white mb-2 py-2 px-3"><i class="fas fa-sync me-2"></i> Real-time Sync</span>
                </div>
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="#" class="app-store-btn">
                        <svg class="app-store-icon" viewBox="0 0 24 24" fill="currentColor" width="28" height="28">
                            <path d="M3.609 1.814L13.792 12 3.61 22.186a.996.996 0 0 1-.61-.92V2.734a1 1 0 0 1 .609-.92zm10.89 10.893l2.302 2.302-10.937 6.333 8.635-8.635zm3.199-3.198l2.807 1.626a1 1 0 0 1 0 1.73l-2.808 1.626L15.206 12l2.492-2.491zM5.864 2.658L16.802 8.99l-2.303 2.303-8.635-8.635z"/>
                        </svg>
                        <div class="btn-text">
                            <small>GET IT ON</small>
                            <span>Google Play</span>
                        </div>
                    </a>
                    <a href="#" class="app-store-btn">
                        <svg class="app-store-icon" viewBox="0 0 24 24" fill="currentColor" width="28" height="28">
                            <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                        </svg>
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
                        <h3 class="fw-bold mb-2">AppNomu SalesQ</h3>
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
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h5>Real-Time Access</h5>
                    <p>Check your sales, inventory levels, and customer data instantly. Your business data is always at your fingertips.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h5>Works Offline</h5>
                    <p>No internet? No problem. Record sales and manage inventory offline. Everything syncs automatically when you're back online.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-bell"></i>
                    </div>
                    <h5>Instant Notifications</h5>
                    <p>Get alerts for low stock, new sales, customer inquiries, and funding updates. Stay informed in real-time.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h5>Mobile Money Integration</h5>
                    <p>Accept payments via MTN Mobile Money and Airtel Money directly from the app. Seamless transactions for you and your customers.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5>Secure & Private</h5>
                    <p>Your data is protected with AES-256 encryption. Biometric login keeps your business information safe.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h5>Fast & Lightweight</h5>
                    <p>Optimized for African networks and devices. Lightweight, fast-loading, and doesn't drain your battery or data.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core App Features Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">Core App <span class="text-success">Features</span></h2>
                <p class="lead">Everything you need to manage your business, all in one app</p>
            </div>
        </div>
        
        <div class="row g-4" data-aos="fade-up">
            <!-- Service Sales -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <h5>Service Sales</h5>
                    <p>Add services, track service revenue, and record service sales. Perfect for service-based businesses to manage their offerings.</p>
                </div>
            </div>
            
            <!-- Inventory Management -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <h5>Inventory Management</h5>
                    <p>Add new products, manage existing inventory, update stock levels, and keep your product catalog organized.</p>
                </div>
            </div>
            
            <!-- Stock Alerts -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h5>Stock Alerts</h5>
                    <p>Get notified when stock runs low. Never miss a sale due to out-of-stock items with smart inventory alerts.</p>
                </div>
            </div>
            
            <!-- Contact Management -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-address-book"></i>
                    </div>
                    <h5>Contact Management</h5>
                    <p>Store and manage customer contacts, track interactions, and build lasting business relationships.</p>
                </div>
            </div>
            
            <!-- Buy Airtime -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <h5>Buy Airtime</h5>
                    <p>Purchase airtime for yourself or send to customers directly from the app. Quick and convenient top-ups.</p>
                </div>
            </div>
            
            <!-- Transaction Reports -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h5>Transaction Reports</h5>
                    <p>View detailed transaction history and reports. Track all your business transactions in one place.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Funding Section -->
<section class="py-5" data-aos="fade-up">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">Business <span class="text-success">Funding</span></h2>
                <p class="lead">Access capital to grow your business directly from the app</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Apply for Funding -->
            <div class="col-lg-3 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <h5>Apply for Funding</h5>
                    <p>Submit funding applications quickly and easily. Get the capital you need to grow your business.</p>
                </div>
            </div>
            
            <!-- Progress Tracking -->
            <div class="col-lg-3 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h5>Progress Tracking</h5>
                    <p>Monitor your funding application status in real-time. Stay updated on every step of the process.</p>
                </div>
            </div>
            
            <!-- Withdrawal -->
            <div class="col-lg-3 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h5>Withdrawal</h5>
                    <p>Withdraw approved funds directly to your Mobile Money or bank account with ease.</p>
                </div>
            </div>
            
            <!-- Repayment -->
            <div class="col-lg-3 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h5>Repayment</h5>
                    <p>Manage loan repayments conveniently from the app. Track your repayment schedule and history.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Real-Time Sync Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="mb-4"><i class="fas fa-sync-alt text-success me-2"></i>Real-Time <span class="text-success">Sync</span></h2>
                <p class="lead mb-4">Your mobile app stays perfectly synchronized with the web application. Any changes you make on one platform are instantly reflected on the other.</p>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-3">
                        <i class="fas fa-check-circle text-success me-3 fa-lg"></i>
                        <span>Seamless data synchronization between mobile and web</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="fas fa-check-circle text-success me-3 fa-lg"></i>
                        <span>Access your business data from any device</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="fas fa-check-circle text-success me-3 fa-lg"></i>
                        <span>Offline mode with automatic sync when back online</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fas fa-check-circle text-success me-3 fa-lg"></i>
                        <span>Never lose your data with cloud backup</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <div class="bg-white rounded-4 shadow-lg p-4 d-inline-block">
                        <div class="d-flex align-items-center justify-content-center gap-4">
                            <div class="text-center">
                                <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2 mx-auto" style="width: 80px; height: 80px;">
                                    <i class="fas fa-mobile-alt text-success fa-2x" style="line-height: 56px;"></i>
                                </div>
                                <small class="fw-bold">Mobile App</small>
                            </div>
                            <div class="text-success">
                                <i class="fas fa-arrows-alt-h fa-2x"></i>
                            </div>
                            <div class="text-center">
                                <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2 mx-auto" style="width: 80px; height: 80px;">
                                    <i class="fas fa-desktop text-success fa-2x" style="line-height: 56px;"></i>
                                </div>
                                <small class="fw-bold">Web App</small>
                            </div>
                        </div>
                        <div class="mt-3 pt-3 border-top">
                            <span class="badge bg-success py-2 px-3"><i class="fas fa-bolt me-1"></i> Instant Sync</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How to Get Started Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">How to <span class="text-success">Get Started</span></h2>
                <p class="lead">Getting started with the AppNomu SalesQ App is quick and easy</p>
            </div>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-download"></i>
                    </div>
                    <h5>1. Download the App</h5>
                    <p>Get the AppNomu SalesQ App from Google Play Store or Apple App Store. It's free to download and takes less than a minute.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h5>2. Create Your Account</h5>
                    <p>Sign up with your phone number or email. Add your business details and you're ready to go. Already have a web account? Just log in!</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="feature-card-3d">
                    <div class="card-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h5>3. Start Managing</h5>
                    <p>Add your products, record your first sale, and explore all the features. Your data syncs automatically with the web platform.</p>
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
                    <p class="mb-4">"The AppNomu SalesQ App has transformed how I manage my hobby business. I can track sales, manage inventory, and access funding - all from my phone. The offline mode is perfect for when I'm at markets without good network coverage!"</p>
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
                    <p class="mb-4">"As a tech company owner, I needed a solution that could keep up with our fast-paced operations. AppNomu SalesQ App delivers exactly that. The real-time sync between web and mobile means I'm always up to date, whether I'm in the office or meeting clients."</p>
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
                    <p class="mb-4">"Running an agribusiness means I'm often in the field with limited connectivity. The AppNomu SalesQ App's offline capability has been a game-changer. I can record transactions anywhere and everything syncs when I'm back online. Highly recommended for agricultural businesses!"</p>
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
                <p class="lead">Everything you need to know about the AppNomu SalesQ Mobile App</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion faq-accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                <i class="fas fa-question-circle text-success me-2"></i> Is the AppNomu SalesQ Mobile App free?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! The AppNomu SalesQ Mobile App is completely free to download and use. All premium features are accessed through the Web application.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                <i class="fas fa-question-circle text-success me-2"></i> Does the AppNomu SalesQ Mobile App work offline?
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
                                Absolutely! Your AppNomu SalesQ account works across all platforms. Data syncs in real-time between the web dashboard and the AppNomu SalesQ Mobile App.
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
                                Go to the Funding section in the AppNomu SalesQ Mobile App, fill out the application form with your business details, and submit. Our team reviews applications within 1 to 5 working days, and upon approval, funds are disbursed within 24 hours if it's a working day.
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
                                We support Mobile Money (MTN and Airtel), Card payments, Google Pay, and Apple Pay through the Flutterwave payment gateway. We also accept Cryptocurrencies through the Cryptomus gateway.
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
            <div class="col-lg-7 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-3">Ready to Transform Your Business?</h2>
                <p class="lead opacity-90 mb-0">
                    Join thousands of African entrepreneurs who are growing their businesses with the AppNomu SalesQ App.
                </p>
            </div>
            <div class="col-lg-5 text-lg-end">
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-lg-end">
                    <a href="#" class="app-download-btn">
                        <svg class="app-store-icon" viewBox="0 0 24 24" fill="currentColor" width="28" height="28">
                            <path d="M3.609 1.814L13.792 12 3.61 22.186a.996.996 0 0 1-.61-.92V2.734a1 1 0 0 1 .609-.92zm10.89 10.893l2.302 2.302-10.937 6.333 8.635-8.635zm3.199-3.198l2.807 1.626a1 1 0 0 1 0 1.73l-2.808 1.626L15.206 12l2.492-2.491zM5.864 2.658L16.802 8.99l-2.303 2.303-8.635-8.635z"/>
                        </svg>
                        <div class="btn-text">
                            <small>GET IT ON</small>
                            <span>Google Play</span>
                        </div>
                    </a>
                    <a href="#" class="app-download-btn">
                        <svg class="app-store-icon" viewBox="0 0 24 24" fill="currentColor" width="28" height="28">
                            <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                        </svg>
                        <div class="btn-text">
                            <small>DOWNLOAD ON</small>
                            <span>App Store</span>
                        </div>
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
