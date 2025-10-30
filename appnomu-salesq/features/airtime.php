<?php
session_start();
// Initialize error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start output buffering
ob_start();

// Set the current page for active navigation highlighting
$current_page = 'features';

// Set page metadata
$page_title = 'Best Airtime Selling Tool in Uganda | Send Airtime to All African Countries | AppNomu SalesQ';
$page_description = 'Uganda\'s #1 airtime selling tool! Send airtime to all African countries instantly. Recharge and earn with our reliable airtime API. Mobile top-up solutions for businesses across Africa.';

// Set page-specific keywords for SEO
$page_keywords = 'Best Airtime Selling tool in Uganda, Send Airtime to All African countries, Recharge and Earn, Mobile Top up, Reliable Airtime API, Airtime Distribution Uganda, Bulk Airtime Solutions, Mobile Credit Distribution Africa, Telecom Airtime Management, Enterprise Airtime Services, Airtime Top-Up Platform, Business Airtime Distribution, Wholesale Airtime Uganda, Uganda Airtime Reseller, African Mobile Recharge, Airtime Business Uganda, Mobile Money Top Up, Cross Border Airtime, Pan African Airtime Distribution';

// Additional SEO metadata
$page_canonical = 'https://appnomu.com/landing/features/airtime';
$page_og_title = 'Best Airtime Selling Tool in Uganda - Send Airtime Across Africa';
$page_og_description = 'Transform your business with Uganda\'s most reliable airtime selling tool. Send airtime to all African countries, earn commissions, and grow your mobile top-up business today.';
$page_og_image = 'https://appnomu.com/landing/assets/images/Airtime_distribution.png';
$page_twitter_title = 'Best Airtime Selling Tool in Uganda | AppNomu SalesQ';
$page_twitter_description = 'Send airtime to all African countries with Uganda\'s #1 airtime selling tool. Reliable API, instant delivery, earn commissions.';

// Schema.org structured data for SEO
$schema_data = [
    '@context' => 'https://schema.org',
    '@type' => 'SoftwareApplication',
    'name' => 'AppNomu SalesQ Airtime Distribution',
    'description' => 'Best airtime selling tool in Uganda for sending airtime to all African countries with reliable API',
    'applicationCategory' => 'BusinessApplication',
    'operatingSystem' => 'Web Browser',
    'offers' => [
        '@type' => 'Offer',
        'price' => '0',
        'priceCurrency' => 'UGX',
        'description' => 'Free trial available'
    ],
    'aggregateRating' => [
        '@type' => 'AggregateRating',
        'ratingValue' => '4.8',
        'ratingCount' => '2500',
        'bestRating' => '5'
    ],
    'featureList' => [
        'Send Airtime to All African Countries',
        'Reliable Airtime API',
        'Mobile Top Up Solutions',
        'Recharge and Earn Commissions',
        'Bulk Airtime Distribution',
        'Cross Border Airtime Sales'
    ],
    'provider' => [
        '@type' => 'Organization',
        'name' => 'AppNomu',
        'url' => 'https://appnomu.com'
    ]
];
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
    
    .hero-section .d-flex.align-items-center span {
        color: #212529 !important;
    }
    
    .hero-section small,
    .hero-section .text-muted {
        color: #6c757d !important;
    }
    
    .hero-section .fw-medium {
        color: #212529 !important;
    }
    
    .feature-icon {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        color: #218838;
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
                <!-- Main Hero Content -->
                <div class="mb-4">
                    <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill mb-3">
                        <i class="bi bi-lightning-fill me-1"></i> Instant Delivery
                    </span>
                    <h1 class="display-5 fw-bold mb-3">
                        Best Airtime Selling Tool in <span class="text-success">Uganda</span>
                    </h1>
                    <p class="lead mb-4">
                        Send airtime to all African countries instantly through our user-friendly portal or powerful API. 
                        Whether you need to send single top-ups or process bulk airtime, we've got you covered with 
                        Uganda's most reliable airtime distribution platform.
                    </p>
                    
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span>Single Airtime Top-ups</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span>Bulk Airtime Distribution</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span>Powerful API Integration</span>
                        </div>
                    </div>
                </div>

                <!-- Key Benefits Grid -->
                <div class="row g-3 mb-4">
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="bg-success bg-opacity-10 p-2 rounded-circle me-2">
                                <i class="bi bi-check-circle-fill text-success"></i>
                            </div>
                            <small class="fw-medium text-dark">All Networks</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="bg-success bg-opacity-10 p-2 rounded-circle me-2">
                                <i class="bi bi-clock-fill text-success"></i>
                            </div>
                            <small class="fw-medium text-dark">Instant Delivery</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="bg-success bg-opacity-10 p-2 rounded-circle me-2">
                                <i class="bi bi-percent text-success"></i>
                            </div>
                            <small class="fw-medium text-dark">5% Commission</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="bg-success bg-opacity-10 p-2 rounded-circle me-2">
                                <i class="bi bi-shield-check text-success"></i>
                            </div>
                            <small class="fw-medium text-dark">Secure Platform</small>
                        </div>
                    </div>
                </div>

                <!-- Statistics Row -->
                <div class="row g-3 mb-4">
                    <div class="col-4">
                        <div class="text-center">
                            <div class="h4 fw-bold text-success mb-0">25K+</div>
                            <small class="text-muted">Happy Customers</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center">
                            <div class="h4 fw-bold text-success mb-0">15+</div>
                            <small class="text-muted">African Countries</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center">
                            <div class="h4 fw-bold text-success mb-0">99.9%</div>
                            <small class="text-muted">Success Rate</small>
                        </div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=airtime_feature&utm_campaign=hero_section" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">
                        <i class="bi bi-rocket-takeoff me-2"></i>Start Free Trial
                    </a>
                    <a href="https://appnomu.com/landing/pricing" class="btn btn-outline-success rounded-pill px-4">
                        <i class="bi bi-calculator me-2"></i>View Pricing
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="mt-4 pt-3 border-top border-light">
                    <div class="d-flex align-items-center flex-wrap gap-3">
                        <small class="text-muted">Trusted by:</small>
                        <div class="d-flex align-items-center gap-3">
                            <span class="badge bg-light text-dark px-2 py-1">
                                <i class="bi bi-building me-1"></i>Enterprises
                            </span>
                            <span class="badge bg-light text-dark px-2 py-1">
                                <i class="bi bi-shop me-1"></i>SMEs
                            </span>
                            <span class="badge bg-light text-dark px-2 py-1">
                                <i class="bi bi-person-workspace me-1"></i>Freelancers
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <img 
                        src="https://appnomu.com/landing/assets/images/Airtime-header.webp" 
                        alt="AppNomu SalesQ Airtime Distribution" 
                        class="img-fluid rounded-4 shadow-lg"
                        data-aos="fade-left"
                        data-aos-delay="200"
                        style="max-height: 500px; width: auto;"
                    >
                    <!-- Floating Badge -->
                    <div class="position-absolute" style="bottom: 10%; left: 0;">
                        <div class="bg-white text-dark fw-bold px-3 py-2 rounded-pill shadow-sm d-flex align-items-center">
                            <i class="bi bi-currency-exchange text-success me-1"></i> Pan-African Coverage
                        </div>
                    </div>
                    <!-- Additional Floating Badge -->
                    <div class="position-absolute" style="top: 10%; right: 0;">
                        <div class="bg-success text-white fw-bold px-3 py-2 rounded-pill shadow-sm d-flex align-items-center">
                            <i class="bi bi-lightning-fill me-1"></i> Instant
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
                <h2 class="mb-4">Best Airtime Selling Tool <span class="text-success">Features</span></h2>
                <p class="lead">Powerful mobile top-up solutions to send airtime to all African countries with our reliable airtime API</p>
            </div>
        </div>
        
        <!-- Core Airtime Features Section -->
        <div class="row mb-5 align-items-center" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://appnomu.com/landing/assets/images/Airtime.jpg" alt="Airtime Distribution" class="img-fluid rounded shadow-lg" style="max-height: 400px;">
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">Core Airtime Features</h3>
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm bg-success text-white rounded p-3 me-3">
                            <i class="bi bi-gift-fill"></i>
                        </div>
                        <div>
                            <h5>Airtime as Incentive</h5>
                            <p>Reward survey participants, marketing campaign responders, and loyal customers with instant airtime incentives. Perfect for boosting engagement and participation rates.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm bg-success text-white rounded p-3 me-3">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div>
                            <h5>Bulk Airtime Distribution</h5>
                            <p>Send airtime to multiple recipients across various African networks simultaneously from a single wallet. Ideal for employee rewards, customer appreciation, and mass marketing campaigns.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm bg-success text-white rounded p-3 me-3">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <div>
                            <h5>Single Airtime Purchase</h5>
                            <p>Quickly send airtime to individual recipients with our streamlined single-purchase interface. Perfect for one-off transactions and personal needs.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=airtime_feature&utm_campaign=core_features" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">Start Sending Airtime Today</a>
                </div>
            </div>
        </div>
        
        <!-- Airtime Analytics & Reporting -->
        <div class="row my-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                <div class="position-relative">
                    <img 
                        src="https://appnomu.com/landing/assets/images/bills.webp" 
                        alt="AppNomu SalesQ Airtime Analytics" 
                        class="img-fluid rounded-4 shadow-lg"
                        data-aos="fade-left"
                        data-aos-delay="200"
                        style="width: 100%; height: auto;"
                    >
                    <!-- Floating Badge -->
                    <div class="position-absolute" style="top: 20px; right: 20px;">
                        <div class="bg-success text-white fw-bold px-3 py-2 rounded-pill shadow-sm d-flex align-items-center">
                            <i class="bi bi-graph-up-arrow me-1"></i> Data-Driven
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="pe-lg-4">
                    <h3 class="mb-4">Advanced Analytics & Reporting</h3>
                    <p class="lead mb-4">Gain valuable insights into your airtime distribution with comprehensive analytics and detailed reports.</p>
                    
                    <div class="mb-4">
                        <h5><i class="bi bi-graph-up text-success me-2"></i> Network Distribution Analytics</h5>
                        <p>Track airtime distribution across different mobile networks. Understand which networks your customers use most to optimize your marketing strategy.</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5><i class="bi bi-file-earmark-text text-success me-2"></i> Comprehensive Transaction Reports</h5>
                        <p>Access detailed transaction reports that can be filtered by date, recipient, network, and transaction status. Export reports in CSV, PDF, or Excel formats for further analysis.</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5><i class="bi bi-check-circle text-success me-2"></i> Delivery Tracking</h5>
                        <p>Monitor the delivery status of all airtime transactions in real-time. Get instant notifications for successful deliveries and failed transactions.</p>
                    </div>
                    
                    <div class="mt-4">
                        <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=airtime_feature&utm_campaign=analytics" class="btn btn-outline-success rounded-pill px-4 me-2">Access Analytics</a>
                        <a href="#features" class="btn btn-link text-success text-decoration-none">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose Our Airtime Solutions Section -->
        <div class="row mt-5 py-5 bg-light rounded-3" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">Why Choose AppNomu SalesQ <span class="text-success">Airtime</span>?</h2>
                <p class="lead">Experience the AppNomu SalesQ difference with our premium airtime distribution service</p>
            </div>
            
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-currency-dollar text-success" style="font-size: 2rem; margin: auto;"></i>
                        </div>
                        <h4>Affordable Rates</h4>
                        <p>Enjoy competitive airtime rates across all networks with no hidden fees or charges. Get more value for your money with every transaction.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-lightning-fill text-success" style="font-size: 2rem; margin: auto;"></i>
                        </div>
                        <h4>Faster Delivery</h4>
                        <p>Our airtime delivery is instant across all networks. No waiting, no delays - just immediate top-ups when you need them most.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-reception-4 text-success" style="font-size: 2rem; margin: auto;"></i>
                        </div>
                        <h4>All Networks Support</h4>
                        <p>Send airtime to any network without switching between providers. One platform for all your airtime needs across Africa.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Additional Benefits -->
        <div class="row row-cols-1 row-cols-md-2 g-4 my-5" data-aos="fade-up" data-aos-delay="200">
            <!-- Cross-Border Feature -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-globe text-success"></i>
                            </div>
                            <h4 class="mb-0">Cross-Border Selling</h4>
                        </div>
                        <p>Expand your reach beyond borders with our cross-border airtime distribution. Send airtime to customers in multiple African countries from a single platform.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Support for major African telcos</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Seamless currency conversion</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Regional business expansion</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Pay-As-You-Go Feature -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-wallet2 text-success"></i>
                            </div>
                            <h4 class="mb-0">No Monthly Subscription</h4>
                        </div>
                        <p>Enjoy our pay-as-you-go model without any monthly fees or subscription charges. Only pay for the airtime you purchase, nothing more.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> No recurring charges</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Flexible usage options</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Cost-effective for all business sizes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Enterprise Benefits -->
        <div class="row align-items-center my-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="position-relative">
                    <div class="bg-white p-4 rounded-lg shadow-lg">
                        <!-- Enterprise Commission Calculator -->
                        <div class="card border-0 bg-light mb-4">
                            <div class="card-body p-4">
                                <h5 class="text-center mb-4">Enterprise Commission Calculator</h5>
                                
                                <!-- Visual Commission Representation -->
                                <div class="position-relative mb-4" style="height: 80px;">
                                    <div class="progress" style="height: 40px; border-radius: 20px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="position-absolute" style="top: 0; left: 25%; transform: translateX(-50%);">
                                        <div class="text-center">
                                            <div class="bg-light border rounded-circle p-2 shadow-sm d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                                <span class="fw-bold">Start</span>
                                            </div>
                                            <div class="small mt-1 text-muted">UGX 0</div>
                                        </div>
                                    </div>
                                    <div class="position-absolute" style="top: 0; left: 75%; transform: translateX(-50%);">
                                        <div class="text-center">
                                            <div class="bg-success text-white border rounded-circle p-2 shadow-sm d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                                <span class="fw-bold">5%</span>
                                            </div>
                                            <div class="small mt-1 text-dark">UGX 500K</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Example Calculation -->
                                <div class="card bg-white">
                                    <div class="card-body p-3">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span>Purchase Amount:</span>
                                            <span class="fw-bold">UGX 1,000,000</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span>Commission Rate:</span>
                                            <span class="fw-bold text-success">5%</span>
                                        </div>
                                        <div class="d-flex justify-content-between fw-bold">
                                            <span>Your Commission:</span>
                                            <span class="text-success">UGX 50,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Enterprise Badge -->
                        <div class="d-flex justify-content-center">
                            <div class="bg-dark text-white p-3 rounded-pill">
                                <i class="bi bi-star-fill text-warning me-2"></i>
                                <span class="fw-bold">Enterprise Benefits</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="position-absolute bottom-0 end-0 bg-white p-3 rounded-circle shadow-sm d-flex align-items-center justify-content-center" style="transform: translate(25%, 25%); width: 80px; height: 80px;">
                        <i class="bi bi-building text-success" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ps-lg-4">
                    <h3 class="mb-4">Enterprise Benefits</h3>
                    <p class="lead mb-4">Special features and advantages designed specifically for businesses with high-volume airtime needs.</p>
                    
                    <div class="alert alert-success p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="bi bi-percent-circle h1 text-success"></i>
                            </div>
                            <div class="ms-3">
                                <h4>5% Commission on Bulk Purchases</h4>
                                <p class="mb-0">Earn a 5% commission on all airtime purchases above UGX 500,000. The more you buy, the more you save!</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0 text-success me-3">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div>
                                    <h5>Dedicated Support</h5>
                                    <p>Enterprise customers receive priority customer support and dedicated account management.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0 text-success me-3">
                                    <i class="bi bi-arrow-repeat"></i>
                                </div>
                                <div>
                                    <h5>Automated Reorders</h5>
                                    <p>Set up recurring airtime purchases to ensure your business never runs out of airtime credit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=airtime_feature&utm_campaign=enterprise" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">Start Your Enterprise Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section -->
    <div class="p-5 rounded-3 text-center mt-5" style="background: rgba(248, 249, 250, 0.9); border: 1px solid rgba(0,0,0,0.04); box-shadow: 0 4px 20px rgba(0,0,0,0.03);" data-aos="fade-up">
        <h2 class="mb-3 text-dark">Ready to Start with Uganda's Best Airtime Selling Tool?</h2>
        <p class="lead mb-4 text-muted">Join thousands of businesses using our reliable airtime API to send airtime to all African countries. Recharge and earn with mobile top-up solutions.</p>
        <div class="d-flex justify-content-center flex-wrap gap-2">
            <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=feature_airtime&utm_campaign=free_trial" class="btn btn-success btn-lg rounded-pill px-4"><i class="fas fa-rocket me-2"></i>Start Free Trial</a>
            <a href="https://www.appnomu.com/landing/contact" class="btn btn-outline-success btn-lg rounded-pill px-4"><i class="fas fa-headset me-2"></i>Contact Sales</a>
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
