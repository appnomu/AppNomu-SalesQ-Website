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
$page_title = 'Product & Sales Management System | Inventory Control | AppNomu SalesQ';
$page_description = 'Complete product and sales management solution for African businesses. Track inventory, manage stock levels, analyze sales performance, and automate product operations with real-time analytics and reporting.';

// Set page-specific keywords for SEO
$page_keywords = 'Product Management System Africa, Sales Management Software Uganda, Inventory Control System, Stock Management Software, Product Catalog Management, Sales Analytics Dashboard, Inventory Tracking Software, African Business Management, Sales Reporting Tools Uganda, Product Sales Analytics, Stock Control System Africa';

// Add AOS initialization with fallback to ensure content visibility
$additional_footer_script = <<<EOD
<script>
    // Initialize AOS animation library
    AOS.init({
        duration: 800,
        once: true
    });
    
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Fallback for AOS to ensure content visibility if AOS fails to load or initialize
    document.addEventListener('DOMContentLoaded', function() {
        // After a short delay, make sure all AOS elements are visible regardless of AOS initialization
        setTimeout(function() {
            const aosElements = document.querySelectorAll('[data-aos]');
            aosElements.forEach(function(element) {
                // Check if the element is not visible (AOS keeps items hidden until animated)
                if (element.style.opacity === '0' || window.getComputedStyle(element).opacity === '0') {
                    element.style.opacity = '1';
                    element.style.transform = 'none';
                }
            });
        }, 1500); // 1.5 second delay
    });
</script>        
EOD;
?>

<style>
    /* Custom styles for feature page */
    .hero-section {
        background: #ffffff;
        background-image: linear-gradient(135deg, rgba(255,255,255,0.98) 0%, #f8f9fa 100%);
        padding: 60px 0 40px;
        position: relative;
        overflow: hidden;
    }
    
    /* SVG Wave Pattern */
    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='rgba(0,0,0,.015)' fill-rule='evenodd'/%3E%3C/svg%3E");
        opacity: 1;
    }
    
    .hero-section h1 {
        font-size: 2.8rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        color: #212529;
    }
    
    .hero-section p {
        color: #212529;
    }
    
    .feature-icon {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        color: #ffc107;
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
    
    /* Pulse animation for buttons */
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
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="mb-2">
                    <span class="badge bg-success text-white px-3 py-1 rounded-pill">
                        <i class="fas fa-boxes me-1"></i> Inventory Management
                    </span>
                </div>
                <h1 class="display-5 fw-bold mb-3">Complete Product & Sales Management System</h1>
                <p class="lead mb-3">Transform your African business with our comprehensive inventory control and sales management platform. Track stock levels, manage product catalogs, analyze sales performance, and automate operations with real-time analytics and reporting.</p>
                
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fas fa-chart-line text-success me-2"></i> Real-time Analytics
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fas fa-warehouse text-primary me-2"></i> Stock Control
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fas fa-mobile-alt text-info me-2"></i> Mobile Access
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fas fa-qrcode text-warning me-2"></i> QR Code Integration
                    </div>
                </div>
                
                <!-- Key Benefits Highlight -->
                <div class="bg-success bg-opacity-10 border border-success rounded-4 p-3 mb-3">
                    <div class="d-flex align-items-center">
                        <div class="bg-success rounded-circle p-2 me-3">
                            <i class="fas fa-trophy text-white"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 fw-bold text-success">Complete Business Solution</h6>
                            <p class="mb-0 small">Inventory tracking • Sales analytics • Product management • Stock alerts</p>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=product_sales_feature&utm_campaign=inventory_cta" class="btn btn-success btn-lg rounded-pill shadow-lg pulse-animation">
                        <i class="fas fa-rocket me-2"></i>Start Managing Inventory
                    </a>
                    <a href="#features" class="btn btn-outline-success btn-lg rounded-pill">
                        <i class="fas fa-chart-bar me-2"></i>View Features
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <div class="overflow-hidden rounded-4 shadow-lg" style="border: 1px solid rgba(0,0,0,0.1);">
                        <img src="https://appnomu.com/landing/assets/images/salesQ_dashboard.png" 
                             alt="AppNomu SalesQ Dashboard" 
                             class="img-fluid" 
                             style="display: block; width: 100%; height: auto;"
                             onerror="this.onerror=null; this.src='https://via.placeholder.com/800x600/198754/ffffff?text=SalesQ+Dashboard'">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                            <div class="text-white text-start">
                                <div class="d-flex align-items-center">
                                    <div class="bg-success rounded-circle p-2 me-2">
                                        <i class="fas fa-chart-line text-white"></i>
                                    </div>
                                    <div>
                                        <div class="small">Live Dashboard</div>
                                        <div class="fw-bold">Real-time Sales & Inventory</div>
                                    </div>
                                </div>
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
                <h2 class="mb-4"><i class="fas fa-star text-success me-2"></i>Product & <span class="text-success">Sales Features</span></h2>
                <p class="lead">Powerful tools for inventory and sales management</p>
            </div>
        </div>
        
        <!-- Inventory Management Section -->
        <div class="row mb-5 align-items-center" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative rounded-4 overflow-hidden shadow-lg" style="border: 1px solid rgba(0,0,0,0.1);">
                    <img src="https://appnomu.com/landing/assets/images/inventory.png" 
                         alt="AppNomu SalesQ Inventory Management" 
                         class="img-fluid" 
                         style="display: block; width: 100%; height: auto;"
                         onerror="this.onerror=null; this.src='https://via.placeholder.com/800x500/198754/ffffff?text=Inventory+Management'">
                    <div class="position-absolute top-0 end-0 m-3">
                        <span class="badge bg-success"><i class="fas fa-check-circle me-1"></i> Live Demo</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">

                <h3 class="mb-4"><i class="fas fa-box-open text-success me-2"></i>Easy Inventory Management</h3>
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-clipboard-list text-white"></i>
                        </div>
                        <div>
                            <h5><i class="fas fa-tags text-success me-2"></i>Add Products Effortlessly</h5>
                            <p>Quickly add products to your inventory with comprehensive details including name, price, cost, SKU, and stock levels. Our intuitive interface makes managing your product catalog simple.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-shopping-cart text-white"></i>
                        </div>
                        <div>
                            <h5><i class="fas fa-receipt text-success me-2"></i>Record Sales Instantly</h5>
                            <p>Create sales records in seconds with our streamlined process. Select products, quantities, and payment methods to generate professional receipts and automatically update inventory levels.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-chart-pie text-white"></i>
                        </div>
                        <div>
                            <h5><i class="fas fa-chart-bar text-success me-2"></i>Track Profit & Loss</h5>
                            <p>Get instant insights into your profitability with detailed reports that compare sales revenue against costs. Understand which products generate the most profit and optimize your inventory accordingly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sales Analytics Section -->
        <div class="row my-5 py-5 bg-light rounded-3" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 order-lg-2">
                <div class="p-lg-4">
                    <h3 class="mb-4"><i class="fas fa-lightbulb text-success me-2"></i>Sales Analytics & Reporting</h3>
                    <p class="lead mb-4">Make data-driven decisions with powerful sales analytics and customizable reports</p>
                    
                    <div class="mb-4">
                        <div class="d-flex align-items-start">
                            <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                                <i class="fas fa-chart-line text-white"></i>
                            </div>
                            <div>
                                <h5>Sales Performance Tracking</h5>
                                <p>Monitor daily, weekly, and monthly sales trends with interactive graphs and charts. Compare periods to identify growth patterns and seasonal variations in your business.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="d-flex align-items-start">
                            <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                                <i class="fas fa-file-invoice-dollar text-white"></i>
                            </div>
                            <div>
                                <h5>Professional Sales Receipts</h5>
                                <p>Generate branded sales receipts for your customers with all transaction details. Email receipts directly or print physical copies with your business logo and contact information.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-0">
                        <div class="d-flex align-items-start">
                            <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                                <i class="fas fa-file-export text-white"></i>
                            </div>
                            <div>
                                <h5>Export & Import Reports</h5>
                                <p>Easily export sales and inventory reports to Excel or CSV formats for further analysis or accounting purposes. Import product data in bulk to save time when updating your inventory.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 mb-4 mb-lg-0">
                <div class="bg-white p-4 rounded-3 shadow-lg">
                    <h5 class="mb-3 border-bottom pb-3"><i class="fas fa-chart-bar text-success me-2"></i>Sales Performance Overview</h5>
                    <div class="mb-4" style="height: 200px; position: relative;">
                        <!-- Sales Chart Visualization -->
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 200px; display: flex; align-items: flex-end;">
                            <div class="me-2 d-flex flex-column align-items-center" style="flex: 1;">
                                <div style="width: 80%; background: linear-gradient(180deg, #198754, #20c997); height: 65%; border-radius: 4px 4px 0 0;"></div>
                                <div class="small text-muted mt-2">Mon</div>
                            </div>
                            <div class="me-2 d-flex flex-column align-items-center" style="flex: 1;">
                                <div style="width: 80%; background: linear-gradient(180deg, #198754, #20c997); height: 40%; border-radius: 4px 4px 0 0;"></div>
                                <div class="small text-muted mt-2">Tue</div>
                            </div>
                            <div class="me-2 d-flex flex-column align-items-center" style="flex: 1;">
                                <div style="width: 80%; background: linear-gradient(180deg, #198754, #20c997); height: 80%; border-radius: 4px 4px 0 0;"></div>
                                <div class="small text-muted mt-2">Wed</div>
                            </div>
                            <div class="me-2 d-flex flex-column align-items-center" style="flex: 1;">
                                <div style="width: 80%; background: linear-gradient(180deg, #198754, #20c997); height: 55%; border-radius: 4px 4px 0 0;"></div>
                                <div class="small text-muted mt-2">Thu</div>
                            </div>
                            <div class="me-2 d-flex flex-column align-items-center" style="flex: 1;">
                                <div style="width: 80%; background: linear-gradient(180deg, #198754, #20c997); height: 90%; border-radius: 4px 4px 0 0;"></div>
                                <div class="small text-muted mt-2">Fri</div>
                            </div>
                            <div class="me-2 d-flex flex-column align-items-center" style="flex: 1;">
                                <div style="width: 80%; background: linear-gradient(180deg, #198754, #20c997); height: 75%; border-radius: 4px 4px 0 0;"></div>
                                <div class="small text-muted mt-2">Sat</div>
                            </div>
                            <div class="d-flex flex-column align-items-center" style="flex: 1;">
                                <div style="width: 80%; background: linear-gradient(180deg, #198754, #20c997); height: 45%; border-radius: 4px 4px 0 0;"></div>
                                <div class="small text-muted mt-2">Sun</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 bg-light rounded mb-4">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="border-end">
                                    <div class="small text-muted">Total Sales</div>
                                    <div class="h5 mb-0">UGX 3.2M</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <div class="small text-muted">Profit Margin</div>
                                    <div class="h5 mb-0">32%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h6 class="mb-3">Top Selling Products</h6>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div>Premium Service Pack</div>
                            <div class="progress flex-grow-1 mx-3" style="height: 6px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="text-success">75%</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>Super Widget Pro</div>
                            <div class="progress flex-grow-1 mx-3" style="height: 6px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="text-success">45%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- AI Recommendations Section -->
        <div class="row my-5" data-aos="fade-up" data-aos-delay="200">
            <div class="col-12 text-center mb-4">
                <h3><i class="fas fa-robot text-success me-2"></i>AI-Powered <span class="text-success">Sales Recommendations</span></h3>
                <p class="lead">Unlock new opportunities with intelligent data analysis and predictive suggestions</p>
            </div>
            <div class="col-lg-8 mx-auto">
                <div class="bg-white p-4 rounded-3 shadow-lg mb-4" style="border-left: 4px solid #198754;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success rounded-circle p-2 me-3" style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-lightbulb text-white fa-lg"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">SalesQ AI Recommendations</h5>
                            <div class="small text-muted">Based on your business data</div>
                        </div>
                        <div class="ms-auto">
                            <span class="badge bg-success rounded-pill mb-2">New</span>
                        </div>
                    </div>
                    
                    <div class="list-group mb-3">
                        <div class="list-group-item list-group-item-action d-flex align-items-center p-3">
                            <div class="bg-light rounded-circle p-2 me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-chart-line text-success"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Increase Premium Service Pack price by 5%</h6>
                                <p class="mb-1 small text-muted">Analysis shows demand is strong at current price point with room for adjustment</p>
                            </div>
                            <div class="ms-auto">
                                <button class="btn btn-sm btn-success rounded-pill">Apply</button>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action d-flex align-items-center p-3">
                            <div class="bg-light rounded-circle p-2 me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-tags text-primary"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Bundle "Super Widget Pro" with accessories</h6>
                                <p class="mb-1 small text-muted">Customers who buy this product typically purchase related accessories</p>
                            </div>
                            <div class="ms-auto">
                                <button class="btn btn-sm btn-success rounded-pill">Apply</button>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action d-flex align-items-center p-3">
                            <div class="bg-light rounded-circle p-2 me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-calendar-alt text-info"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Restock Basic Widgets within 7 days</h6>
                                <p class="mb-1 small text-muted">Historical data suggests you'll run out before month end</p>
                            </div>
                            <div class="ms-auto">
                                <button class="btn btn-sm btn-success rounded-pill">Remind</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- QR Code Features Section -->
        <div class="row my-5 bg-light py-5 rounded-3" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative p-3">
                    <div class="bg-white rounded-4 shadow-lg p-4 mx-auto" style="max-width: 350px;">
                        <div class="text-center">
                            <img src="https://appnomu.com/landing/assets/images/QR_.png" 
                                 alt="AppNomu SalesQ QR Code Integration" 
                                 class="img-fluid mb-3" 
                                 style="max-width: 200px; height: auto;"
                                 onerror="this.onerror=null; this.src='https://via.placeholder.com/200x200/198754/ffffff?text=QR+Code+Integration'">
                            <h5 class="text-success">Scan to View Product</h5>
                            <p class="small text-muted">Try our QR code scanning feature</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-lg-4">
                    <h3 class="mb-4"><i class="fas fa-qrcode text-success me-2"></i>QR Code Integration</h3>
                    <p class="lead mb-4">Streamline your operations with advanced QR code functionality</p>
                    
                    <div class="mb-4">
                        <div class="d-flex align-items-start">
                            <div class="bg-success rounded-circle p-3 me-3">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                            <div>
                                <h5>Add Products via QR</h5>
                                <p>Quickly scan product barcodes or QR codes to add items to your inventory without manual data entry. Perfect for bulk product additions and reducing input errors.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="d-flex align-items-start">
                            <div class="bg-success rounded-circle p-3 me-3">
                                <i class="fas fa-qrcode text-white"></i>
                            </div>
                            <div>
                                <h5>Generate Product QR Codes</h5>
                                <p>Create unique QR codes for each product in your inventory. These codes can be printed on labels, packaging, or displayed for easy scanning by customers or staff.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-0">
                        <div class="d-flex align-items-start">
                            <div class="bg-success rounded-circle p-3 me-3">
                                <i class="fas fa-shopping-basket text-white"></i>
                            </div>
                            <div>
                                <h5>Offline Client Scanning</h5>
                                <p>Enable customers to scan product QR codes in physical stores or displays to access detailed information, pricing, and even add items directly to their online shopping cart.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Why Choose Us Section -->
        <div class="row my-5" data-aos="fade-up" data-aos-delay="400">
            <div class="col-12 text-center mb-4">
                <h3><i class="fas fa-medal text-success me-2"></i>Why Choose Our Product & Sales Management</h3>
                <p class="lead">The smart choice for businesses of all sizes</p>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-cloud text-white fa-2x"></i>
                        </div>
                        <h5 class="card-title">Cloud-Based Access</h5>
                        <p class="card-text">Access your inventory and sales data from anywhere, on any device, with our secure cloud platform. No hardware or server infrastructure required.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-infinity text-white fa-2x"></i>
                        </div>
                        <h5 class="card-title">No Subscriptions Needed</h5>
                        <p class="card-text">Enjoy our comprehensive product and sales management features with a one-time payment. No recurring fees or hidden costs to worry about.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-file-export text-white fa-2x"></i>
                        </div>
                        <h5 class="card-title">Export & Import Reports</h5>
                        <p class="card-text">Easily export comprehensive sales and inventory reports for accounting or further analysis. Import product data in bulk to save time.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Call-to-Action Section -->
        <div class="row my-5" data-aos="fade-up" data-aos-delay="500">
            <div class="col-12">
                <div class="p-5 rounded-3 text-center" style="background: rgba(248, 249, 250, 0.9); border: 1px solid rgba(0,0,0,0.04); box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
                    <h3 class="mb-3 text-dark">Ready to transform your product and sales management?</h3>
                    <p class="lead mb-4 text-muted">Join thousands of businesses already using AppNomu SalesQ to streamline their operations</p>
                    <div class="d-flex justify-content-center flex-wrap gap-2">
                        <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=feature_psm&utm_campaign=free_trial" class="btn btn-success btn-lg rounded-pill px-4"><i class="fas fa-rocket me-2"></i>Start Free Trial</a>
                        <a href="https://www.appnomu.com/landing/contact" class="btn btn-outline-success btn-lg rounded-pill px-4"><i class="fas fa-headset me-2"></i>Talk to Sales</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
