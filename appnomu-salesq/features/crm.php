<?php
// Start the session
session_start();

// Start output buffering
ob_start();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set the current page for active navigation highlighting
$current_page = 'features';

// SEO metadata
$page_title = "Customer Relationship Management | AppNomu SalesQ";
$page_description = "Track customer information, import/export data easily, and analyze buying behavior with our free CRM solution. Seamless integrations with payment gateways and expense reporting.";

// Set page-specific keywords for SEO
$page_keywords = "CRM Uganda, Customer Relationship Management Africa, Sales CRM Software, Business CRM Solutions Uganda, Customer Data Management, Lead Management System, Sales Pipeline Software Africa, Customer Analytics Uganda";
?>

<style>
    /* Custom styles for feature page */
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
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        color: #212529;
    }
    
    .hero-section p {
        color: #212529;
    }
    
    .feature-icon {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        color: #0dcaf0;
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
    
    .integration-icon {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        margin: 0 auto 15px;
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
                <h1>Customer Relationship Management</h1>
                <p class="lead mb-4">Build stronger customer relationships and boost sales with our comprehensive CRM solution</p>
                <div class="mb-4">
                    <span class="badge bg-success text-white me-2 mb-2 py-2 px-3"><i class="fas fa-check-circle me-2"></i> Free to Use</span>
                    <span class="badge bg-success text-white me-2 mb-2 py-2 px-3"><i class="fas fa-shield-alt me-2"></i> Secure Data</span>
                    <span class="badge bg-success text-white mb-2 py-2 px-3"><i class="fas fa-chart-line me-2"></i> Sales Insights</span>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=crm_feature&utm_campaign=hero_section" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">Get Started Free</a>
                    <a href="#features" class="btn btn-outline-success rounded-pill px-4">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <div class="p-4 rounded-3 shadow-lg" style="border-top: 4px solid #198754; background-color: rgba(255, 255, 255, 0.9);">
                        <div class="mb-4 d-flex align-items-center">
                            <div class="bg-success text-white rounded-circle p-2 me-3" style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-user-circle fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 fw-bold text-success">Customer Profile</h5>
                                <div class="small text-muted">Last updated: Today</div>
                            </div>
                            <div class="ms-auto">
                                <span class="badge" style="background-color: #198754;">Active</span>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3">
                                <div class="p-3 rounded-3 text-center" style="background-color: rgba(25, 135, 84, 0.1);">
                                    <div class="small text-success fw-bold mb-1">Total Purchases</div>
                                    <div class="h4 mb-0 text-success">24</div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="p-3 rounded-3 text-center" style="background-color: rgba(25, 135, 84, 0.1);">
                                    <div class="small text-success fw-bold mb-1">Lifetime Value</div>
                                    <div class="h4 mb-0 text-success">UGX 4.2M</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-3 rounded-3" style="background-color: rgba(25, 135, 84, 0.05);">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle p-2 me-3" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-phone-alt text-white"></i>
                                </div>
                                <div>
                                    <div class="small text-muted">Contact</div>
                                    <div class="fw-bold">+256 700 123456</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded-circle p-2 me-3" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <div class="small text-muted">Location</div>
                                    <div class="fw-bold">Kampala, Uganda</div>
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
                <h2 class="mb-4">CRM <span class="text-success">Features</span></h2>
                <p class="lead">Tools to help you manage customer relationships effectively</p>
            </div>
        </div>
        
        <!-- Core CRM Features Section -->
        <div class="row mb-5 align-items-center" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="bg-white rounded-3 shadow-lg p-4">
                    <div class="d-flex align-items-center mb-3 border-bottom pb-3">
                        <div class="bg-success rounded-circle p-3 me-3">
                            <i class="fas fa-users text-white fa-2x"></i>
                        </div>
                        <h4 class="mb-0">Customer Database</h4>
                        <div class="ms-auto badge bg-success">245 Contacts</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 mb-3">
                            <div class="d-flex align-items-center p-3 border rounded mb-2 hover-lift">
                                <div class="bg-light rounded-circle p-2 me-3">
                                    <i class="fas fa-user-tie text-success"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">John Doe</h6>
                                    <div class="small text-muted">CEO, ABC Company</div>
                                </div>
                                <div class="ms-auto text-end">
                                    <div class="text-success fw-bold">UGX 2.5M</div>
                                    <div class="small text-muted">Total Purchases</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="d-flex align-items-center p-3 border rounded mb-2 hover-lift">
                                <div class="bg-light rounded-circle p-2 me-3">
                                    <i class="fas fa-user text-success"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Jane Smith</h6>
                                    <div class="small text-muted">Marketing Manager, XYZ Ltd</div>
                                </div>
                                <div class="ms-auto text-end">
                                    <div class="text-success fw-bold">UGX 1.8M</div>
                                    <div class="small text-muted">Total Purchases</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center p-3 border rounded hover-lift">
                                <div class="bg-light rounded-circle p-2 me-3">
                                    <i class="fas fa-user-friends text-success"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Asante Corp</h6>
                                    <div class="small text-muted">Enterprise Client</div>
                                </div>
                                <div class="ms-auto text-end">
                                    <div class="text-success fw-bold">UGX 5.2M</div>
                                    <div class="small text-muted">Total Purchases</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-sm btn-outline-success rounded-pill">
                            <i class="fas fa-plus me-1"></i> Add New Customer
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4"><i class="fas fa-star text-warning me-2"></i>Core CRM Features</h3>
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-user-friends text-white"></i>
                        </div>
                        <div>
                            <h5><i class="fas fa-id-card-alt text-success me-2"></i>Track Customer Information</h5>
                            <p>Store and manage comprehensive customer profiles including contact details, purchase history, communication logs, and preferences. Keep all your customer data organized in one secure place.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-exchange-alt text-white"></i>
                        </div>
                        <div>
                            <h5><i class="fas fa-sync-alt text-success me-2"></i>Import & Export Data Easily</h5>
                            <p>Seamlessly import your existing customer lists from CSV files or spreadsheets. Export your customer data anytime in multiple formats for reporting, analysis, or backup purposes.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-chart-bar text-white"></i>
                        </div>
                        <div>
                            <h5><i class="fas fa-shopping-cart text-success me-2"></i>Track Customer Buying Behavior</h5>
                            <p>Gain valuable insights into customer purchasing patterns with detailed buying behavior analytics. Identify your most valuable customers and understand their preferences for targeted marketing.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=crm_feature&utm_campaign=core_features" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">Start Using CRM Free</a>
                </div>
            </div>
        </div>
        
        <!-- Customer Data Visualization Section -->
        <div class="row my-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                <div class="position-relative bg-white p-4 rounded shadow-lg">
                    <div class="position-absolute" style="top: -20px; right: -20px; background-color: #198754; padding: 15px; border-radius: 50%; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                        <span class="fw-bold text-white">Analytics</span>
                    </div>
                    
                    <!-- Customer Segmentation Chart -->
                    <div class="mb-3">
                        <h5 class="mb-3">Customer Segmentation</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="position-relative" style="height: 180px; width: 180px; margin: 0 auto;">
                                    <!-- Circle chart representing customer segments -->
                                    <div class="position-absolute" style="width: 180px; height: 180px; border-radius: 50%; background: conic-gradient(#198754 0% 40%, #20c997 40% 65%, #75b798 65% 85%, #d1e7dd 85% 100%); left: 0; top: 0;"></div>
                                    <div class="position-absolute bg-white shadow-sm" style="width: 120px; height: 120px; border-radius: 50%; left: 30px; top: 30px;"></div>
                                    <div class="position-absolute" style="width: 100%; height: 100%; left: 0; top: 0; display: flex; align-items: center; justify-content: center;">
                                        <div class="text-center">
                                            <div class="fw-bold">245</div>
                                            <div class="small">Customers</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-2 d-flex align-items-center">
                                    <span class="d-inline-block me-2" style="width: 12px; height: 12px; background-color: #198754; border-radius: 2px;"></span>
                                    <span>Frequent Buyers (40%)</span>
                                </div>
                                <div class="mb-2 d-flex align-items-center">
                                    <span class="d-inline-block me-2" style="width: 12px; height: 12px; background-color: #20c997; border-radius: 2px;"></span>
                                    <span>Regular Customers (25%)</span>
                                </div>
                                <div class="mb-2 d-flex align-items-center">
                                    <span class="d-inline-block me-2" style="width: 12px; height: 12px; background-color: #75b798; border-radius: 2px;"></span>
                                    <span>Occasional Shoppers (20%)</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-block me-2" style="width: 12px; height: 12px; background-color: #d1e7dd; border-radius: 2px;"></span>
                                    <span>New Customers (15%)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Buying Behavior Stats -->
                    <div class="border-top pt-3 mt-3">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="text-center p-2">
                                    <div class="fw-bold text-success h4">78%</div>
                                    <div class="small text-muted">Repeat Purchase Rate</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="text-center p-2">
                                    <div class="fw-bold text-success h4">UGX 85K</div>
                                    <div class="small text-muted">Avg. Purchase Value</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="text-center p-2">
                                    <div class="fw-bold text-success h4">32 Days</div>
                                    <div class="small text-muted">Avg. Time Between Orders</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="pe-lg-4">
                    <h3 class="mb-4"><i class="fas fa-lightbulb text-warning me-2"></i>Data-Driven Customer Insights</h3>
                    <p class="lead mb-4">Make informed business decisions with powerful customer analytics and visualizations.</p>
                    
                    <div class="mb-4">
                        <h5><i class="fas fa-bolt text-warning me-2"></i> Instant Customer Segmentation</h5>
                        <p>Automatically categorize customers based on purchase frequency, value, and engagement. Identify your most valuable customers and those who need attention.</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5><i class="fas fa-bullseye text-danger me-2"></i> Targeted Marketing Opportunities</h5>
                        <p>Use customer behavior insights to create personalized marketing campaigns that resonate with specific customer segments and increase conversion rates.</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5><i class="fas fa-tasks text-success me-2"></i> Customer Lifecycle Management</h5>
                        <p>Track the complete customer journey from acquisition to loyalty. Identify opportunities to upsell, cross-sell, or re-engage dormant customers.</p>
                    </div>
                    
                    <div class="mt-4">
                        <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=crm_feature&utm_campaign=data_insights" class="btn btn-outline-success rounded-pill px-4 me-2">Access Customer Analytics</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Why Choose Our CRM Section -->
        <div class="row mt-5 py-5 bg-light rounded-3" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3"><i class="fas fa-question-circle text-success me-2"></i>Why AppNomu SalesQ <span class="text-success">CRM</span></h2>
                <p class="lead">Our CRM solution stands out with powerful features designed for businesses of all sizes</p>
            </div>
            
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-dollar-sign text-success" style="font-size: 2rem; margin: auto;"></i>
                        </div>
                        <h4>Free to Use</h4>
                        <p>Get started with our full-featured CRM at no cost. Manage unlimited customer information without any hidden fees or trial periods.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-credit-card text-success" style="font-size: 2rem; margin: auto;"></i>
                        </div>
                        <h4>Payment Integration</h4>
                        <p>Seamlessly integrate with Flutterwave, Stripe, PayPal, and more to charge clients directly from your CRM system.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-file-invoice text-success" style="font-size: 2rem; margin: auto;"></i>
                        </div>
                        <h4>Expense Reports</h4>
                        <p>Track expenses and generate detailed reports directly connected to customer activities and sales performance.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Payment Integration Section -->
        <div class="row my-5 align-items-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h3 class="mb-4"><i class="fas fa-money-bill-wave text-success me-2"></i>Seamless Payment Integrations</h3>
                <p class="lead mb-4">Accept payments easily with integrations to major payment platforms.</p>
                <p>Connect your CRM directly with leading payment processors to streamline your billing and collection process. Send invoices, track payments, and reconcile accounts all in one place.</p>
                
                <div class="row g-3 mt-4">
                    <div class="col-6 col-sm-4">
                        <div class="bg-white p-3 text-center rounded-4 shadow-sm">
                            <div class="integration-logo mb-2 d-flex align-items-center justify-content-center" style="height: 50px;">
                                <img src="https://flutterwave.com/images/logo/full.svg" alt="Flutterwave" class="img-fluid" style="max-height: 35px; max-width: 100%;"> 
                            </div>
                            <div class="small fw-bold">Flutterwave</div>
                            <p class="text-muted small mb-0">Payment gateway</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="bg-white p-3 text-center rounded-4 shadow-sm">
                            <div class="integration-logo mb-2 d-flex align-items-center justify-content-center" style="height: 50px;">
                                <img src="https://cdn.worldvectorlogo.com/logos/stripe-4.svg" alt="Stripe" class="img-fluid" style="max-height: 35px; max-width: 100%;"> 
                            </div>
                            <div class="small fw-bold">Stripe</div>
                            <p class="text-muted small mb-0">Payment processing</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="bg-white p-3 text-center rounded-4 shadow-sm">
                            <div class="integration-logo mb-2 d-flex align-items-center justify-content-center" style="height: 50px;">
                                <img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_37x23.jpg" alt="PayPal" class="img-fluid" style="max-height: 35px; max-width: 100%;"> 
                            </div>
                            <div class="small fw-bold">PayPal</div>
                            <p class="text-muted small mb-0">Global payments</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="position-relative">
                    <img 
                        src="https://appnomu.com/landing/assets/images/salesq_invoice.png" 
                        alt="AppNomu SalesQ Invoice" 
                        class="img-fluid rounded-4 shadow-lg"
                        data-aos="fade-left"
                        data-aos-delay="200"
                        style="width: 100%; height: auto;"
                    >
                    <!-- Floating Badge -->
                    <div class="position-absolute" style="top: 20px; right: 20px;">
                        <div class="bg-success text-white fw-bold px-3 py-2 rounded-pill shadow-sm d-flex align-items-center">
                            <i class="fas fa-file-invoice-dollar me-1"></i> Professional Invoicing
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="p-5 rounded-3 text-center mt-5" style="background: rgba(248, 249, 250, 0.9); border: 1px solid rgba(0,0,0,0.04); box-shadow: 0 4px 20px rgba(0,0,0,0.03);" data-aos="fade-up">
            <h2 class="mb-3 text-dark"><i class="fas fa-handshake text-success me-2"></i>Ready to Transform Your Customer Relationships?</h2>
            <p class="lead mb-4 text-muted">Join thousands of businesses already using our free CRM to grow their customer base and increase sales.</p>
            <div class="d-flex justify-content-center flex-wrap gap-2">
                <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=feature_crm&utm_campaign=free_trial" class="btn btn-success btn-lg rounded-pill px-4"><i class="fas fa-rocket me-2"></i>Start Free Trial</a>
                <a href="https://www.appnomu.com/landing/contact" class="btn btn-outline-success btn-lg rounded-pill px-4"><i class="fas fa-headset me-2"></i>Contact Sales</a>
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
