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

// Start output buffering
ob_start();

// Set the current page for active navigation highlighting
$current_page = 'features';

// Set page metadata
$page_title = 'Low Stock Alert System | WhatsApp SMS Email Automation | AppNomu SalesQ';
$page_description = 'Automated low stock alerts via WhatsApp, SMS, and Email with customizable thresholds. Never run out of inventory with real-time notifications and smart stock management for African businesses.';

// Set page-specific keywords for SEO
$page_keywords = 'Low Stock Alert System, WhatsApp Stock Notifications, SMS Inventory Alerts, Email Stock Alerts, Automated Stock Management, Inventory Threshold Alerts, Stock Alert Automation Africa, WhatsApp Business Alerts Uganda, SMS Stock Notifications, Email Inventory Management, Stock Alert System Africa';
?>

<style>
    /* Custom styles for feature page */
    /* Hover effects */
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1rem rgba(25, 135, 84, 0.15)!important;
    }
    
    /* Add pulse animation */
    .animate-pulse {
        animation: pulse 2s infinite;
        box-shadow: 0 0 0 0 rgba(25, 135, 84, 0.7);
    }
    
    @keyframes pulse {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(25, 135, 84, 0.7);
        }
        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(25, 135, 84, 0);
        }
        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(25, 135, 84, 0);
        }
    }
    
    /* Feature icons with gradient backgrounds */
    .feature-icon-sm {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .feature-icon-sm:hover {
        transform: scale(1.1);
    }
    
    .hero-section {
        padding: 60px 0 40px;
        position: relative;
        overflow: hidden;
    }
    
    .hero-section h1 {
        font-size: 2.8rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        color: #ffffff;
    }
    
    .hero-section p,
    .hero-section .lead {
        color: rgba(255, 255, 255, 0.7);
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
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
</style>

<!-- Hero Section -->
<section class="hero-section">
    <!-- SVG Wave Overlay -->
    <div class="position-absolute w-100 h-100" style="top: 0; left: 0; opacity: 0.1; z-index: 1;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; bottom: 0;">
            <path fill="#ffffff" fill-opacity="1" d="M0,192L48,176C96,160,192,128,288,122.7C384,117,480,139,576,160C672,181,768,203,864,202.7C960,203,1056,181,1152,165.3C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 position-relative" style="z-index: 5;">
                <div class="mb-2">
                    <span class="badge bg-warning text-dark px-3 py-1 rounded-pill">
                        <i class="fas fa-bell me-1"></i> Stock Alert Automation
                    </span>
                </div>
                <h1 class="display-5 fw-bold mb-3"><i class="fas fa-exclamation-triangle text-warning me-2"></i>Smart Low Stock Alert System</h1>
                <p class="lead mb-3">Never run out of inventory with automated alerts via WhatsApp, SMS, and Email. Set your preferred stock thresholds and receive instant notifications when inventory levels drop, ensuring seamless business operations across Africa.</p>
                
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fab fa-whatsapp text-success me-2"></i> WhatsApp Alerts
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fas fa-sms text-primary me-2"></i> SMS Notifications
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fas fa-envelope text-info me-2"></i> Email Alerts
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fas fa-sliders-h text-warning me-2"></i> Custom Thresholds
                    </div>
                </div>
                
                <!-- Threshold Highlight -->
                <div class="bg-warning bg-opacity-10 border border-warning rounded-4 p-3 mb-3">
                    <div class="d-flex align-items-center">
                        <div class="bg-warning rounded-circle p-2 me-3">
                            <i class="fas fa-cog text-dark"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-bold text-warning">Customizable Stock Thresholds</h6>
                            <p class="mb-0 small">Set minimum stock levels per product • Get alerts before stockouts • Prevent lost sales</p>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=stock_alert_feature&utm_campaign=automation_cta" class="btn btn-warning btn-lg rounded-pill shadow-lg animate-pulse">
                        <i class="fas fa-bell me-2"></i>Setup Stock Alerts
                    </a>
                    <a href="#features" class="btn btn-outline-warning btn-lg rounded-pill">
                        <i class="fas fa-cogs me-2"></i>View Automation
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <!-- Square Image Container -->
                    <div class="d-inline-block position-relative" style="width: 400px; height: 400px; max-width: 100%;">
                        <img 
                            src="https://appnomu.com/landing/assets/images/Alert_Stock.png" 
                            alt="Stock Alert Automation System" 
                            class="rounded-4 shadow-lg"
                            data-aos="fade-left"
                            data-aos-delay="200"
                            style="width: 100%; height: 100%; object-fit: cover; object-position: center;"
                        >
                        <!-- Multi-Channel Alert Badges -->
                        <div class="position-absolute" style="top: 15px; right: 15px;">
                            <div class="bg-success text-white fw-bold px-3 py-2 rounded-pill shadow-sm d-flex align-items-center mb-2">
                                <i class="fab fa-whatsapp me-1"></i> WhatsApp
                            </div>
                        </div>
                        <div class="position-absolute" style="top: 60px; right: 15px;">
                            <div class="bg-primary text-white fw-bold px-3 py-2 rounded-pill shadow-sm d-flex align-items-center mb-2">
                                <i class="fas fa-sms me-1"></i> SMS
                            </div>
                        </div>
                        <div class="position-absolute" style="top: 105px; right: 15px;">
                            <div class="bg-info text-white fw-bold px-3 py-2 rounded-pill shadow-sm d-flex align-items-center">
                                <i class="fas fa-envelope me-1"></i> Email
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
                <h2 class="mb-4"><i class="fas fa-star text-success me-2"></i>Low Stock Alert Features</h2>
                <p class="lead">Keep your inventory optimized with our smart alert system</p>
            </div>
        </div>
        
        <!-- Notification Methods Feature -->    
        <div class="row mb-5 align-items-center" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative">
                    <!-- HTML/CSS Visual for Alert Notifications -->
                    <div class="bg-white rounded-4 shadow-lg p-4" style="min-height: 320px;">
                        <!-- Notification Header -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="mb-0">Stock Alerts</h5>
                            <span class="badge bg-success p-2 rounded-pill">3 New Alerts</span>
                        </div>
                        
                        <!-- SMS Notification -->
                        <div class="d-flex mb-3 p-3 bg-light rounded-3 position-relative overflow-hidden">
                            <div class="me-3">
                                <div class="bg-success rounded-circle p-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-sms text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-muted mb-1">Today, 10:45 AM</div>
                                <h6>SMS Alert Sent</h6>
                                <p class="mb-0 small">"Premium T-Shirt stock is low (15 units). Reorder advised."</p>
                            </div>
                            <div class="position-absolute" style="top: 0; left: 0; width: 5px; height: 100%; background-color: #198754;"></div>
                        </div>
                        
                        <!-- WhatsApp Notification -->
                        <div class="d-flex mb-3 p-3 bg-light rounded-3 position-relative overflow-hidden">
                            <div class="me-3">
                                <div class="bg-success rounded-circle p-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fab fa-whatsapp text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-muted mb-1">Today, 9:30 AM</div>
                                <h6>WhatsApp Alert Sent</h6>
                                <p class="mb-0 small">"URGENT: Classic Jeans stock critical (5 units). Immediate reorder required."</p>
                            </div>
                            <div class="position-absolute" style="top: 0; left: 0; width: 5px; height: 100%; background-color: #198754;"></div>
                        </div>
                        
                        <!-- Email Notification -->
                        <div class="d-flex p-3 bg-light rounded-3 position-relative overflow-hidden">
                            <div class="me-3">
                                <div class="bg-success rounded-circle p-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-muted mb-1">Yesterday</div>
                                <h6>Daily Stock Report</h6>
                                <p class="mb-0 small">"Stock summary report for July 10 attached. 4 items need attention."</p>
                            </div>
                            <div class="position-absolute" style="top: 0; left: 0; width: 5px; height: 100%; background-color: #198754;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4"><i class="fas fa-bell text-success me-2"></i>Multi-Channel Alert Notifications</h3>
                <p class="lead mb-4">Get timely alerts through your preferred channels when inventory levels drop below your set thresholds</p>
                
                <!-- Notification Methods -->
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex p-3 rounded-3 shadow-sm" style="background-color: #f8f9fa;">
                            <div class="me-3">
                                <div class="bg-success rounded-circle p-3" style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-sms text-white"></i>
                                </div>
                            </div>
                            <div>
                                <h5>SMS Alerts</h5>
                                <p class="mb-0 small">Instant text message notifications directly to your phone</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex p-3 rounded-3 shadow-sm" style="background-color: #f8f9fa;">
                            <div class="me-3">
                                <div class="bg-success rounded-circle p-3" style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fab fa-whatsapp text-white"></i>
                                </div>
                            </div>
                            <div>
                                <h5>WhatsApp</h5>
                                <p class="mb-0 small">Get alerts via WhatsApp for immediate attention</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex p-3 rounded-3 shadow-sm" style="background-color: #f8f9fa;">
                            <div class="me-3">
                                <div class="bg-success rounded-circle p-3" style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                            </div>
                            <div>
                                <h5>Email Notifications</h5>
                                <p class="mb-0 small">Detailed stock reports sent straight to your inbox</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex p-3 rounded-3 shadow-sm" style="background-color: #f8f9fa;">
                            <div class="me-3">
                                <div class="bg-success rounded-circle p-3" style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-desktop text-white"></i>
                                </div>
                            </div>
                            <div>
                                <h5>In-App Alerts</h5>
                                <p class="mb-0 small">Dashboard notifications when you log into SalesQ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Divider -->
        <hr class="my-5">
        
        <!-- Multi-Device Management -->
        <div class="row mb-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                <!-- HTML/CSS Visual for Multi-Device Stock Management -->
                <div class="position-relative d-flex justify-content-center align-items-center">
                    <!-- Desktop Device -->
                    <div class="bg-dark rounded-4 shadow-lg p-2" style="width: 320px; z-index: 1;">
                        <div class="bg-light rounded-2" style="height: 200px; overflow: hidden;">
                            <!-- Screen Content -->
                            <div class="p-2">
                                <div class="bg-success text-white p-2 rounded d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <i class="fas fa-th-large"></i>
                                    </div>
                                    <div>
                                        <strong>SalesQ Dashboard</strong>
                                    </div>
                                    <div>
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                </div>
                                
                                <!-- Mini Stock Table -->
                                <div class="table-responsive" style="font-size: 10px;">
                                    <table class="table table-sm">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Product</th>
                                                <th>Stock</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Classic Jeans</td>
                                                <td>5</td>
                                                <td><span class="badge bg-success">Alert Sent</span></td>
                                            </tr>
                                            <tr>
                                                <td>Premium T-Shirt</td>
                                                <td>15</td>
                                                <td><span class="badge bg-success">Low</span></td>
                                            </tr>
                                            <tr>
                                                <td>Winter Jacket</td>
                                                <td>8</td>
                                                <td><span class="badge bg-success">Low</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Laptop Stand -->
                        <div class="bg-dark mx-auto mt-1" style="width: 100px; height: 10px; border-radius: 0 0 10px 10px;"></div>
                    </div>
                    
                    <!-- Tablet Device (positioned to overlap) -->
                    <div class="position-absolute" style="right: 40px; bottom: 30px;">
                        <div class="bg-dark rounded-4 p-1" style="width: 140px; height: 180px;">
                            <div class="bg-light rounded-2" style="height: 100%; overflow: hidden;">
                                <div class="p-1">
                                    <!-- Tablet Mini Header -->
                                    <div class="bg-primary text-white p-1 rounded text-center mb-1" style="font-size: 8px;">
                                        <strong>SalesQ</strong>
                                    </div>
                                    
                                    <!-- Alert Box -->
                                    <div class="alert alert-danger p-1 mb-1" style="font-size: 6px;">
                                        <i class="fas fa-exclamation-triangle me-1"></i>
                                        Low Stock Alert
                                    </div>
                                    
                                    <!-- Mini List -->
                                    <div class="list-group" style="font-size: 6px;">
                                        <div class="list-group-item p-1 d-flex justify-content-between align-items-center">
                                            <span>Classic Jeans</span>
                                            <span class="badge bg-danger rounded-pill">5</span>
                                        </div>
                                        <div class="list-group-item p-1 d-flex justify-content-between align-items-center">
                                            <span>Premium T-Shirt</span>
                                            <span class="badge bg-warning rounded-pill">15</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mobile Phone (positioned to overlap) -->
                    <div class="position-absolute" style="left: 40px; bottom: 0;">
                        <div class="bg-dark rounded-4 p-1" style="width: 80px; height: 150px; border-radius: 18px;">
                            <div class="bg-light rounded-3" style="height: 100%; overflow: hidden; border-radius: 16px;">
                                <!-- App Screen -->
                                <div style="font-size: 6px;">
                                    <!-- Mobile Mini Header -->
                                    <div class="bg-primary text-white p-1 text-center">
                                        <strong>SalesQ</strong>
                                    </div>
                                    
                                    <!-- Alert Icon -->
                                    <div class="text-center p-1">
                                        <div class="bg-danger rounded-circle mx-auto" style="width: 20px; height: 20px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-bell text-white"></i>
                                        </div>
                                        <div class="mt-1">Stock Alert</div>
                                    </div>
                                    
                                    <!-- Mini Item -->
                                    <div class="bg-light mx-1 p-1 rounded shadow-sm mb-1">
                                        <div>Classic Jeans</div>
                                        <div class="badge bg-danger w-100">5 units</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sync Icon -->
                    <div class="position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        <div class="bg-success rounded-circle shadow p-2" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; z-index: 10;">
                            <i class="fas fa-sync text-white fa-lg fa-spin"></i>
                        </div>
                        <!-- Connection Lines -->
                        <div class="position-absolute" style="top: 50%; left: 50%; width: 200px; height: 200px; transform: translate(-50%, -50%); z-index: -1;">
                            <div class="position-absolute bg-primary opacity-25" style="height: 2px; width: 100px; top: 50%; right: 50%; transform: rotate(45deg);"></div>
                            <div class="position-absolute bg-primary opacity-25" style="height: 2px; width: 100px; top: 50%; left: 50%; transform: rotate(-45deg);"></div>
                            <div class="position-absolute bg-primary opacity-25" style="height: 2px; width: 100px; top: 100%; left: 50%; transform: translateX(-50%) rotate(90deg);"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <h3 class="mb-4"><i class="fas fa-laptop-house text-success me-2"></i>Manage Stock From Anywhere</h3>
                <p class="lead mb-4">Take control of your inventory across all your devices - mobile, tablet, or desktop</p>
                
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-success rounded-circle p-2 me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-mobile-alt text-white"></i>
                                    </div>
                                    <h5 class="card-title mb-0">Mobile App</h5>
                                </div>
                                <p class="card-text small">Update stock levels and receive alerts on the go with our mobile app</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-success rounded-circle p-2 me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-tablet-alt text-white"></i>
                                    </div>
                                    <h5 class="card-title mb-0">Tablet View</h5>
                                </div>
                                <p class="card-text small">Perfect for store associates to check and update inventory while serving customers</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-success rounded-circle p-2 me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-desktop text-white"></i>
                                    </div>
                                    <h5 class="card-title mb-0">Desktop Dashboard</h5>
                                </div>
                                <p class="card-text small">Comprehensive view with advanced stock management features</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100 hover-lift">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-success rounded-circle p-2 me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-sync text-white"></i>
                                    </div>
                                    <h5 class="card-title mb-0">Real-Time Sync</h5>
                                </div>
                                <p class="card-text small">All devices stay updated with the latest inventory changes automatically</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Divider -->
        <hr class="my-5">
        
        <!-- Stock Fill Tracking -->
        <div class="row mb-5 align-items-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <!-- Stock Tracking UI Example -->
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary rounded-circle p-2 me-3" style="width: 42px; height: 42px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-chart-line text-white"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Stock Level Tracking</h5>
                            <p class="text-muted small mb-0">Real-time inventory monitoring</p>
                        </div>
                    </div>
                    
                    <!-- Stock Table Example -->
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Current Stock</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Last Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Premium T-Shirt</td>
                                    <td>15 units</td>
                                    <td><span class="badge bg-success">Low Stock</span></td>
                                    <td class="small">Today, 10:45 AM</td>
                                </tr>
                                <tr>
                                    <td>Classic Jeans</td>
                                    <td>5 units</td>
                                    <td><span class="badge bg-success">Critical</span></td>
                                    <td class="small">Today, 9:30 AM</td>
                                </tr>
                                <tr>
                                    <td>Casual Sneakers</td>
                                    <td>30 units</td>
                                    <td><span class="badge bg-success">Good</span></td>
                                    <td class="small">Yesterday</td>
                                </tr>
                                <tr>
                                    <td>Winter Jacket</td>
                                    <td>8 units</td>
                                    <td><span class="badge bg-success">Low Stock</span></td>
                                    <td class="small">Yesterday</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Stock History Chart Placeholder -->
                    <div class="mt-4 p-3 border rounded bg-light">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="mb-0">Stock Fill History: Premium T-Shirt</h6>
                            <div>
                                <span class="badge bg-primary">Last 30 days</span>
                            </div>
                        </div>
                        <div class="chart-placeholder" style="height: 150px; background: linear-gradient(to right, #e9ecef 0%, #dee2e6 50%, #e9ecef 100%); border-radius: 4px;">
                            <!-- Chart placeholder -->
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <span class="small text-muted">Jun 10</span>
                            <span class="small text-muted">Jul 10</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4"><i class="fas fa-box-open text-success me-2"></i>Track Stock Fill Updates</h3>
                <p class="lead mb-4">Monitor inventory movements with detailed tracking and reporting</p>
                
                <div class="mb-4">
                    <h5><i class="fas fa-history text-primary me-2"></i>Historical Tracking</h5>
                    <p>Access complete history logs of all stock changes, including who made updates and when. Perfect for auditing and analyzing inventory patterns over time.</p>
                </div>
                
                <div class="mb-4">
                    <h5><i class="fas fa-chart-bar text-success me-2"></i>Visual Analytics</h5>
                    <p>View stock level trends with intuitive charts and graphs that help you visualize seasonal patterns and predict future inventory needs.</p>
                </div>
                
                <div class="mb-4">
                    <h5><i class="fas fa-file-export text-info me-2"></i>Exportable Reports</h5>
                    <p>Generate comprehensive stock reports that can be exported to PDF or Excel for sharing with team members or using in business planning.</p>
                </div>
                
                <div>
                    <h5><i class="fas fa-upload text-warning me-2"></i>Bulk Update Tools</h5>
                    <p>Easily update multiple stock items at once with our bulk upload feature, saving you time when receiving large shipments.</p>
                </div>
            </div>
        </div>
        
        <!-- Call to Action -->
        <div class="row mt-5 py-5 text-center rounded-4 position-relative overflow-hidden" data-aos="fade-up" data-aos-delay="300" style="background: rgba(25, 135, 84, 0.1); border: 1px solid rgba(25, 135, 84, 0.2);">
            <!-- Fading background effect -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, rgba(25,135,84,0.05) 0%, rgba(25,135,84,0.02) 100%); z-index: 0;"></div>
            
            <div class="col-lg-8 mx-auto position-relative" style="z-index: 1;">
                <h3 class="mb-3 fw-bold">Ready to optimize your inventory management?</h3>
                <p class="lead mb-4">Join thousands of businesses that have improved their stock management with SalesQ</p>
                <div class="d-flex justify-content-center flex-wrap gap-3">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=lowstock_feature&utm_campaign=bottom_cta" class="btn btn-success btn-lg rounded-pill px-4 animate-pulse">
                        <i class="fas fa-rocket me-2"></i>Get Started Free
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=256709712129" target="_blank" class="btn btn-outline-success btn-lg rounded-pill px-4" style="border-width: 2px;">
                        <i class="fab fa-whatsapp text-success me-2"></i>Chat with Expert
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // AOS initialization with fallback to ensure content visibility
    document.addEventListener('DOMContentLoaded', function() {
        // Add a class to make AOS elements visible by default (fallback)
        const aosElements = document.querySelectorAll('[data-aos]');
        aosElements.forEach(function(element) {
            element.classList.add('aos-init');
            element.classList.add('aos-animate');
        });
        
        // Initialize AOS with desired settings
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                offset: 100
            });
        }
    });
</script>

<?php
// Get the buffered content
$content = ob_get_clean();

// Include the layout file which contains both header and footer
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
