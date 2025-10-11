<?php
// Set the current page for navigation highlighting
$current_page = 'partners';

// Set page metadata
$page_title = 'Partner with AppNomu SalesQ | Business Partnership Opportunities';
$page_description = 'Join our partner network and grow your business with AppNomu SalesQ. Explore opportunities for resellers, integrators, and technology partners in Uganda and across Africa.';

// Set page-specific keywords for SEO
$page_keywords = 'Business Partnership Uganda, Technology Partners Africa, Software Reseller Program, Integration Partners Uganda, SMS Reseller Business, AppNomu Partner Network, SalesQ Affiliate Program, Business Solutions Partnership';

// Additional CSS for this page
$additional_css = [
    '/assets/css/partners.css'
];
// Additional JS for this page
$additional_js = [
    'https://cdn.jsdelivr.net/npm/validator@13.7.0/validator.min.js',
    'https://unpkg.com/aos@2.3.1/dist/aos.js',
    '/assets/js/partners.js'
];

// Add AOS CSS
if (!isset($additional_header_content)) {
    $additional_header_content = '';
}
$additional_header_content .= '<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">';

// Add CSS for success-soft background and AOS fallback
$additional_header_content .= '
<style>
    /* Success soft background for icon boxes */
    .bg-success-soft {
        background-color: rgba(25, 135, 84, 0.1);
    }
    
    /* AOS fallback to prevent invisible content */
    [data-aos] {
        opacity: 1 !important;
        transform: translate(0) scale(1) !important;
    }
</style>';
$page_title = 'Partners | AppNomu SalesQ';
$page_description = 'Join our partner program and grow your business with AppNomu SalesQ.';

// Start output buffering
ob_start();
?>

<!-- Page Header with Light Gray Gradient Background -->
<section class="page-header position-relative overflow-hidden" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding-top: 120px; padding-bottom: 80px;">
    <!-- Subtle Pattern Background -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNMCwxMDBjMzAsMCwyMCwtMzAgNTAsLTMwczIwLDMwLDUwLDMwczIwLC0zMCw1MCwtMzBzMjAsMzAsNTAsMzBzMjAsLTMwLDUwLC0zMHMyMCwzMCw1MCwzMFYwSDBaIiBmaWxsPSJyZ2JhKDAsODAsMCwwLjA1KSIvPjwvc3ZnPg=='); background-size: 100% 200px; background-repeat: repeat; opacity: 0.4;"></div>
    
    <!-- Subtle Animated Pattern -->
    <div class="position-absolute w-100 h-100" style="top: 30%; left: 0; transform: rotate(180deg);">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; opacity: 0.05;">
            <path fill="#198754" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,250.7C960,235,1056,181,1152,165.3C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; top: 50px; opacity: 0.03;">
            <path fill="#198754" fill-opacity="1" d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,112C672,128,768,192,864,192C960,192,1056,128,1152,117.3C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
    
    <div class="container position-relative">
        <div class="row py-5">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4 text-dark">Partner with <span class="text-success">AppNomu SalesQ</span></h1>
                <p class="lead mb-4 text-dark opacity-75" style="font-size: 1.3rem; font-weight: 300;">Join our network of trusted partners and help businesses transform their sales processes with our powerful platform.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="#partner-form" class="btn btn-success btn-lg rounded-pill px-4 shadow-sm pulse-animation">
                        <i class="bi bi-person-plus me-2"></i> Become a Partner
                    </a>
                    <a href="#integrations" class="btn btn-outline-dark btn-lg rounded-pill px-4">
                        <i class="bi bi-puzzle me-2"></i> Integrations
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Removed wave divider as requested -->
    
    <!-- Static decorative elements -->
    <div class="position-absolute" style="top: 20%; left: 10%; width: 40px; height: 40px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>
    <div class="position-absolute" style="top: 60%; left: 85%; width: 25px; height: 25px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>
    <div class="position-absolute" style="top: 30%; left: 75%; width: 50px; height: 50px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>
</section>

<!-- Partners Intro Section -->
<section class="partners-intro py-5" style="padding-top: 4rem;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title mb-5">
                    <span class="subtitle">PARTNER WITH US</span>
                    <h2>Grow Your Business with AppNomu SalesQ</h2>
                    <p>Join our partner program and help businesses transform their sales processes with our powerful platform while earning competitive commissions and benefits.</p>
                </div>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="partner-card h-100 shadow-sm rounded-4 p-4 border-top border-success border-3 transition-all">
                    <div class="partner-icon mb-4 d-inline-flex align-items-center justify-content-center bg-success-soft rounded-circle p-3" style="width: 70px; height: 70px;">
                        <i class="bi bi-people-fill text-success fs-3"></i>
                    </div>
                    <h3>Reseller Partners</h3>
                    <p>Sell AppNomu SalesQ solutions to your clients and earn recurring revenue. Perfect for agencies and consultants.</p>
                    <ul class="partner-benefits">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Competitive commissions</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Sales and technical training</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Dedicated support</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Marketing resources</li>
                    </ul>
                    <a href="#partner-form" class="btn btn-outline-success mt-3 w-100" data-partner-type="reseller">Become a Reseller</a>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="partner-card h-100 shadow-sm rounded-4 p-4 border-top border-success border-3 transition-all">
                    <div class="partner-icon mb-4 d-inline-flex align-items-center justify-content-center bg-success-soft rounded-circle p-3" style="width: 70px; height: 70px;">
                        <i class="bi bi-puzzle-fill text-success fs-3"></i>
                    </div>
                    <h3>Integration Partners</h3>
                    <p>Integrate your application with AppNomu SalesQ and provide more value to your mutual customers.</p>
                    <ul class="partner-benefits">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> API access</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Technical documentation</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Co-marketing opportunities</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Joint go-to-market</li>
                    </ul>
                    <a href="#partner-form" class="btn btn-outline-success mt-3 w-100" data-partner-type="integration">Become an Integration Partner</a>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="partner-card h-100 shadow-sm rounded-4 p-4 border-top border-success border-3 transition-all">
                    <div class="partner-icon mb-4 d-inline-flex align-items-center justify-content-center bg-success-soft rounded-circle p-3" style="width: 70px; height: 70px;">
                        <i class="bi bi-star-fill text-success fs-3"></i>
                    </div>
                    <h3>Technology Alliances</h3>
                    <p>Strategic partnerships with leading technology providers to deliver comprehensive solutions.</p>
                    <ul class="partner-benefits">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Strategic alignment</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Joint solution development</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Executive sponsorship</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Global reach</li>
                    </ul>
                    <a href="#partner-form" class="btn btn-outline-success mt-3 w-100" data-partner-type="technology">Become an Alliance Partner</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partner Integrations Section -->
<section id="integrations" class="partner-integrations py-7 position-relative overflow-hidden">
    <div class="position-absolute top-0 end-0">
        <div class="floating-shape-1"></div>
    </div>
    
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title mb-5">
                    <span class="subtitle">SEAMLESS INTEGRATIONS</span>
                    <h2 class="display-5 fw-bold mb-3">Our <span class="text-gradient">Partner Integrations</span></h2>
                    <p class="lead">AppNomu SalesQ works seamlessly with leading platforms to provide you with a complete business solution.</p>
                </div>
            </div>
        </div>

        <!-- Payment & Mobile Money Partners -->
        <div class="mb-5">
            <h3 class="text-center mb-4">Payment & Mobile Money</h3>
            <div class="row g-4 justify-content-center">
                <!-- Airtel -->
                <div class="col-6 col-md-4 col-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="integration-card bg-white p-4 rounded-4 shadow-sm h-100 text-center transition-all">
                        <div class="integration-logo mb-3 d-flex align-items-center justify-content-center" style="height: 60px;">
                            <img src="https://appnomu.com/landing/assets/images/Airtel_logo.png" alt="Airtel" class="img-fluid" style="max-height: 40px; max-width: 100%; object-fit: contain;">
                        </div>
                        <h6 class="mb-2">Airtel Money</h6>
                        <p class="text-muted small mb-0">Mobile payments</p>
                    </div>
                </div>
                
                <!-- MTN -->
                <div class="col-6 col-md-4 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
                    <div class="integration-card bg-white p-4 rounded-4 shadow-sm h-100 text-center transition-all">
                        <div class="integration-logo mb-3 d-flex align-items-center justify-content-center" style="height: 60px;">
                            <img src="https://appnomu.com/landing/assets/images/MTN%20logo.png" alt="MTN" class="img-fluid" style="max-height: 40px; max-width: 100%; object-fit: contain;">
                        </div>
                        <h6 class="mb-2">MTN Mobile Money</h6>
                        <p class="text-muted small mb-0">Mobile payments</p>
                    </div>
                </div>
                
                <!-- Flutterwave -->
                <div class="col-6 col-md-4 col-lg-2" data-aos="zoom-in" data-aos-delay="300">
                    <div class="integration-card bg-white p-4 rounded-4 shadow-sm h-100 text-center transition-all">
                        <div class="integration-logo mb-3 d-flex align-items-center justify-content-center" style="height: 60px;">
                            <img src="https://flutterwave.com/images/logo/full.svg" alt="Flutterwave" class="img-fluid" style="max-height: 40px;">
                        </div>
                        <h6 class="mb-2">Flutterwave</h6>
                        <p class="text-muted small mb-0">Payment gateway</p>
                    </div>
                </div>
                
                <!-- Stripe -->
                <div class="col-6 col-md-4 col-lg-2" data-aos="zoom-in" data-aos-delay="400">
                    <div class="integration-card bg-white p-4 rounded-4 shadow-sm h-100 text-center transition-all">
                        <div class="integration-logo mb-3 d-flex align-items-center justify-content-center" style="height: 60px;">
                            <img src="https://cdn.worldvectorlogo.com/logos/stripe-4.svg" alt="Stripe" class="img-fluid" style="max-height: 40px;">
                        </div>
                        <h6 class="mb-2">Stripe</h6>
                        <p class="text-muted small mb-0">Payment processing</p>
                    </div>
                </div>
                
                <!-- PayPal -->
                <div class="col-6 col-md-4 col-lg-2" data-aos="zoom-in" data-aos-delay="500">
                    <div class="integration-card bg-white p-4 rounded-4 shadow-sm h-100 text-center transition-all">
                        <div class="integration-logo mb-3 d-flex align-items-center justify-content-center" style="height: 60px;">
                            <img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_37x23.jpg" alt="PayPal" class="img-fluid" style="max-height: 40px;">
                        </div>
                        <h6 class="mb-2">PayPal</h6>
                        <p class="text-muted small mb-0">Global payments</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CRM & Sales Partners -->
        <div class="mb-5">
            <h3 class="text-center mb-4">CRM & Sales Management</h3>
            <div class="row g-4 justify-content-center">
                <!-- HubSpot -->
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="integration-card bg-white p-4 rounded-4 shadow-sm h-100 text-center transition-all">
                        <div class="integration-logo mb-3 d-flex align-items-center justify-content-center" style="height: 60px;">
                            <img src="https://www.hubspot.com/hubfs/HubSpot_Logos/HubSpot-Inversed-Favicon.png" alt="HubSpot" class="img-fluid" style="max-height: 40px; max-width: 100%; object-fit: contain;">
                        </div>
                        <h6 class="mb-2">HubSpot CRM</h6>
                        <p class="text-muted small mb-0">Lead management & deals</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Email Marketing Partners -->
        <div class="mb-5">
            <h3 class="text-center mb-4">Email Marketing</h3>
            <div class="row g-4 justify-content-center">
                <!-- Mailchimp -->
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="integration-card bg-white p-4 rounded-4 shadow-sm h-100 text-center transition-all">
                        <div class="integration-logo mb-3 d-flex align-items-center justify-content-center" style="height: 60px;">
                            <img src="https://appnomu.com/landing/assets/images/Mailchimp-Logo.png" alt="Mailchimp" class="img-fluid" style="max-height: 40px; max-width: 100%; object-fit: contain;">
                        </div>
                        <h6 class="mb-2">Mailchimp</h6>
                        <p class="text-muted small mb-0">Email campaigns & automation</p>
                    </div>
                </div>
                
                <!-- ConvertKit -->
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="integration-card bg-white p-4 rounded-4 shadow-sm h-100 text-center transition-all">
                        <div class="integration-logo mb-3 d-flex align-items-center justify-content-center" style="height: 60px;">
                            <img src="https://appnomu.com/landing/assets/images/convertkit.png" alt="ConvertKit" class="img-fluid" style="max-height: 40px; max-width: 100%; object-fit: contain;">
                        </div>
                        <h6 class="mb-2">ConvertKit</h6>
                        <p class="text-muted small mb-0">Creator email marketing</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Analytics Partners -->
        <div class="mb-5">
            <h3 class="text-center mb-4">Analytics & Insights</h3>
            <div class="row g-4 justify-content-center">
                <!-- Google Analytics -->
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="integration-card bg-white p-4 rounded-4 shadow-sm h-100 text-center transition-all">
                        <div class="integration-logo mb-3 d-flex align-items-center justify-content-center" style="height: 60px;">
                            <img src="https://appnomu.com/landing/assets/images/Google-Analytics-Logo.png" alt="Google Analytics" class="img-fluid" style="max-height: 40px; max-width: 100%; object-fit: contain;">
                        </div>
                        <h6 class="mb-2">Google Analytics</h6>
                        <p class="text-muted small mb-0">Business intelligence & tracking</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Communication Partners -->
        <div class="mb-5">
            <h3 class="text-center mb-4">Team Communication</h3>
            <div class="row g-4 justify-content-center">
                <!-- Slack -->
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="integration-card bg-white p-4 rounded-4 shadow-sm h-100 text-center transition-all">
                        <div class="integration-logo mb-3 d-flex align-items-center justify-content-center" style="height: 60px;">
                            <img src="https://a.slack-edge.com/80588/marketing/img/icons/icon_slack_hash_colored.png" alt="Slack" class="img-fluid" style="max-height: 40px; max-width: 100%; object-fit: contain;">
                        </div>
                        <h6 class="mb-2">Slack</h6>
                        <p class="text-muted small mb-0">Team notifications & alerts</p>
                    </div>
                </div>
                
                <!-- Microsoft Teams -->
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="integration-card bg-white p-4 rounded-4 shadow-sm h-100 text-center transition-all">
                        <div class="integration-logo mb-3 d-flex align-items-center justify-content-center" style="height: 60px;">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Microsoft_Office_Teams_%282018%E2%80%93present%29.svg" alt="Microsoft Teams" class="img-fluid" style="max-height: 40px; max-width: 100%; object-fit: contain;">
                        </div>
                        <h6 class="mb-2">Microsoft Teams</h6>
                        <p class="text-muted small mb-0">Collaboration & workflows</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Video & Scheduling Partners -->
        <div class="mb-5">
            <h3 class="text-center mb-4">Video & Scheduling</h3>
            <div class="row g-4 justify-content-center">
                <!-- Zoom -->
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="integration-card bg-white p-4 rounded-4 shadow-sm h-100 text-center transition-all">
                        <div class="integration-logo mb-3 d-flex align-items-center justify-content-center" style="height: 60px;">
                            <img src="https://st1.zoom.us/zoom.ico" alt="Zoom" class="img-fluid" style="max-height: 40px; max-width: 100%; object-fit: contain;">
                        </div>
                        <h6 class="mb-2">Zoom</h6>
                        <p class="text-muted small mb-0">Video meetings & consultations</p>
                    </div>
                </div>
                
                <!-- Calendly -->
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="integration-card bg-white p-4 rounded-4 shadow-sm h-100 text-center transition-all">
                        <div class="integration-logo mb-3 d-flex align-items-center justify-content-center" style="height: 60px;">
                            <div class="bg-warning-soft rounded p-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-calendar-event text-warning fs-4"></i>
                            </div>
                        </div>
                        <h6 class="mb-2">Calendly</h6>
                        <p class="text-muted small mb-0">Automated scheduling</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- SMS & Communication API -->
        <div class="mb-5">
            <h3 class="text-center mb-4">SMS & Communication APIs</h3>
            <div class="row g-4 justify-content-center">
                <!-- Infobip -->
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="integration-card bg-white p-4 rounded-4 shadow-sm h-100 text-center transition-all">
                        <div class="integration-logo mb-3 d-flex align-items-center justify-content-center" style="height: 60px;">
                            <img src="https://appnomu.com/landing/assets/images/Infobip_logo.png" alt="Infobip" class="img-fluid" style="max-height: 40px; max-width: 100%; object-fit: contain;">
                        </div>
                        <h6 class="mb-2">Infobip</h6>
                        <p class="text-muted small mb-0">Communication API</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <p class="mb-4">Don't see your preferred integration? We're constantly adding new partners.</p>
            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                <a href="/integrations/" class="btn btn-success btn-lg rounded-pill px-4">
                    <i class="bi bi-puzzle me-2"></i> View All Integrations
                </a>
                <a href="#partner-form" class="btn btn-outline-primary btn-lg rounded-pill px-4" data-bs-toggle="smooth-scroll">
                    <i class="bi bi-envelope me-2"></i> Request an Integration
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Partner Benefits Section -->
<section class="partner-benefits-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="section-title mb-4">
                    <span class="subtitle">WHY PARTNER WITH US</span>
                    <h2>Partner Benefits</h2>
                    <p>We provide our partners with the tools, resources, and support needed to succeed.</p>
                </div>
                
                <div class="benefits-list">
                    <div class="benefit-item d-flex mb-4">
                        <div class="benefit-icon me-4">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <div>
                            <h4>Lucrative Commissions</h4>
                            <p>Earn competitive commissions on all sales and enjoy recurring revenue opportunities.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item d-flex mb-4">
                        <div class="benefit-icon me-4">
                            <i class="bi bi-tools"></i>
                        </div>
                        <div>
                            <h4>Dedicated Support</h4>
                            <p>Access to dedicated partner support and technical resources to help you succeed.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item d-flex">
                        <div class="benefit-icon me-4">
                            <i class="bi bi-bullhorn"></i>
                        </div>
                        <div>
                            <h4>Marketing Resources</h4>
                            <p>Co-marketing opportunities, sales collateral, and lead sharing to help you grow.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" id="partner-form">
                <div class="partner-form p-5 rounded-4 shadow-lg bg-white" style="border-top: 4px solid #198754;">
                    <div class="text-center mb-4">
                        <div class="icon-box bg-success-soft rounded-circle p-3 d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                            <i class="bi bi-people-fill text-success fs-3"></i>
                        </div>
                        <h3 class="mb-2">Become a Partner Today</h3>
                        <p class="text-muted">Fill out the form below and our partnership team will contact you within 24 hours.</p>
                    </div>
                    
                    <?php 
                    // Ensure session is started
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                    }

                    // Generate CSRF token if not exists
                    if (empty($_SESSION['csrf_token'])) {
                        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                    }

                    $csrf_token = $_SESSION['csrf_token'];

                    // Cloudflare Turnstile site key
                    $turnstile_site_key = '0x4AAAAAABky2ZVjyQirVHsh';
                    ?>
                    <?php
                        // Check for partner request status
                        $partner_request = isset($_GET['partner_request']) ? $_GET['partner_request'] : '';
                        $user_name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
                        $error_message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';
                        
                        if ($partner_request == 'success'):
                        ?>
                        <div class="alert alert-success alert-dismissible fade show mb-4 shadow-sm" role="alert">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-check-circle-fill fs-1"></i>
                                </div>
                                <div>
                                    <h4 class="alert-heading mb-1">Thank you<?php echo !empty($user_name) ? ', ' . $user_name : ''; ?>!</h4>
                                    <p class="mb-0">Your partner request has been sent successfully. Our partnership team will contact you within 24 hours to discuss next steps.</p>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php elseif ($partner_request == 'error'): ?>
                        <div class="alert alert-danger alert-dismissible fade show mb-4 shadow-sm" role="alert">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="bi bi-exclamation-triangle-fill fs-1"></i>
                                </div>
                                <div>
                                    <h4 class="alert-heading mb-1">Something went wrong</h4>
                                    <p class="mb-0"><?php echo !empty($error_message) ? $error_message : 'We couldn\'t process your partner request. Please try again or contact us directly.'; ?></p>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>
                        
                        <form id="partnerForm" action="process_partner_request.php" method="POST" class="needs-validation" novalidate>
                            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                            <div class="mb-3">
                                <label for="companyName" class="form-label">Company Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="companyName" name="companyName" required>
                                <div class="invalid-feedback">Please provide your company name.</div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                                    <div class="invalid-feedback">Please provide your first name.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                                    <div class="invalid-feedback">Please provide your last name.</div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required>
                                    <div class="invalid-feedback">Please provide a valid email address.</div>
                                </div>
                                <small class="form-text text-muted">We'll send partnership details to this email</small>
                            </div>
                            
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            
                            <div class="mb-3">
                                <label for="partnerType" class="form-label">Partner Type <span class="text-danger">*</span></label>
                                <select class="form-select" id="partnerType" name="partnerType" required>
                                    <option value="" selected disabled>Select partner type</option>
                                    <option value="reseller">Reseller</option>
                                    <option value="integration">Integration Partner</option>
                                    <option value="technology">Technology Alliance</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="invalid-feedback">Please select a partner type.</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="message" class="form-label">Tell us about your business</label>
                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                            </div>
                            
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                <label class="form-check-label" for="terms">
                                    I agree to the <a href="https://appnomu.com/landing/terms-of-use" target="_blank">Terms of Service</a> and <a href="https://appnomu.com/landing/privacy-policy" target="_blank">Privacy Policy</a>
                                </label>
                                <div class="invalid-feedback">
                                    You must agree to the Terms of Service and Privacy Policy.
                                </div>
                            </div>
                            
                            <!-- Cloudflare Turnstile Widget -->
                            <div class="mt-4 mb-2">
                                <div class="d-flex justify-content-start">
                                    <div class="cf-turnstile" data-sitekey="<?php echo $turnstile_site_key; ?>"></div>
                                </div>
                                <div class="invalid-feedback" id="turnstile-error" style="display: none;">
                                    Please complete the CAPTCHA verification.
                                </div>
                            </div>
                            
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success w-100 py-3 pulse-animation">
                                    <i class="bi bi-send-fill me-2"></i>Submit Partner Request
                                </button>
                                <div class="text-center mt-3 mb-0">
                                    <p class="text-muted mb-2">Need immediate assistance?</p>
                                    <div class="d-flex justify-content-center gap-3">
                                        <a href="mailto:partner@appnomu.com" class="text-success fw-medium">
                                            <i class="bi bi-envelope me-1"></i> Email Us
                                        </a>
                                        <span class="text-muted">or</span>
                                        <a href="https://api.whatsapp.com/send/?phone=256709712129&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer" class="text-success fw-medium">
                                            <i class="bi bi-whatsapp me-1"></i> Chat Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced CTA Section -->
<section class="cta-section py-6" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="cta-content text-center text-lg-start">
                    <h2 class="text-dark mb-3">Ready to grow your business with <span class="text-success">AppNomu SalesQ</span>?</h2>
                    <p class="text-dark opacity-75 mb-4">Join our partner program today and start offering the best sales management solution to your clients.</p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                        <a href="#partner-form" class="btn btn-success btn-lg pulse-animation">Become a Partner</a>
                        <a href="https://api.whatsapp.com/send/?phone=256709712129&text&type=phone_number&app_absent=0" class="btn btn-outline-dark btn-lg" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-whatsapp me-2"></i>Start Chat Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="card testimonial-card shadow-lg border-0">
                    <div class="card-body p-4">
                        <div class="d-flex mb-4">
                            <i class="bi bi-quote fs-1 text-primary me-3"></i>
                            <div>
                                <h5 class="mb-1">Partner Testimonial</h5>
                                <p class="text-muted mb-0">softwareviews.com</p>
                            </div>
                        </div>
                        <p class="mb-3">"I do like the billing system of the software, most features are free to use and you only pay when you want to use the SMS, AI module and business insights. Business insights makes it for me because provides actual recommendations and how to guides to improve product sales using the data from our sales."</p>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <span class="fw-bold">MU</span>
                            </div>
                            <div>
                                <h6 class="mb-1">Muhumuza U</h6>
                                <p class="small text-muted mb-0">Verified Customer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-7 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <div class="section-title">
                    <span class="subtitle">FREQUENTLY ASKED QUESTIONS</span>
                    <h2>Common Questions About Our Partnership Program</h2>
                    <p>Find answers to the most common questions about becoming an AppNomu SalesQ partner.</p>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion shadow-sm" id="partnerFaqAccordion">
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-question-circle me-2 text-success"></i> What are the benefits of becoming a reseller partner?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#partnerFaqAccordion">
                            <div class="accordion-body">
                                <p>As a reseller partner, you'll earn competitive commissions on all sales, receive dedicated training and support, gain access to marketing resources, and have priority access to new features. Our tiered commission structure rewards your success with increasing commission rates as you grow your sales.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="bi bi-question-circle me-2 text-success"></i> How does the integration partnership work?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#partnerFaqAccordion">
                            <div class="accordion-body">
                                <p>Integration partners connect their applications with AppNomu SalesQ to provide enhanced functionality to mutual customers. We provide comprehensive API documentation, technical support during integration, and co-marketing opportunities to help promote the integration to our user base.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="bi bi-question-circle me-2 text-success"></i> What is required to become an AppNomu SalesQ partner?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#partnerFaqAccordion">
                            <div class="accordion-body">
                                <p>Requirements vary by partner type, but generally we look for partners who share our commitment to customer success, have relevant industry experience, and can effectively represent or integrate with our platform. After filling out the partner request form, our team will evaluate your application and reach out to discuss next steps.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="bi bi-question-circle me-2 text-success"></i> How long does the partner onboarding process take?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#partnerFaqAccordion">
                            <div class="accordion-body">
                                <p>The onboarding timeline varies based on partner type and readiness, but typically takes 1-2 weeks for reseller partners and 2-4 weeks for integration partners. Our partnership team will guide you through each step of the process, including training, account setup, and resource access.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 5 -->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="bi bi-question-circle me-2 text-success"></i> What kind of support do partners receive?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#partnerFaqAccordion">
                            <div class="accordion-body">
                                <p>All partners receive dedicated support from our partnership team, including sales and technical training, marketing resources, and access to our partner portal. Additionally, partners receive priority support for their customers and regular business reviews to ensure mutual success and growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize AOS animations with fallback for invisible content
document.addEventListener('DOMContentLoaded', function() {
    // Make all AOS elements visible immediately as fallback
    document.querySelectorAll('[data-aos]').forEach(function(el) {
        el.style.opacity = '1';
        el.style.transform = 'translate(0) scale(1)';
    });
    
    // Try to initialize AOS with a small delay
    setTimeout(function() {
        try {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
        } catch (e) {
            console.warn('AOS initialization failed, using fallback for visibility', e);
        }
    }, 100);
    
    // Partner Type Selection
    const form = document.getElementById('partnerForm');
    if (form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    }
    
    // Add transition effects to partner and integration cards
    document.querySelectorAll('.partner-card, .integration-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.classList.add('shadow');
            this.style.transform = 'translateY(-5px)';
        });
        card.addEventListener('mouseleave', function() {
            this.classList.remove('shadow');
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Auto-dismiss alert messages after a few seconds
    const alertElement = document.querySelector('.alert');
    if (alertElement) {
        setTimeout(() => {
            const bsAlert = new bootstrap.Alert(alertElement);
            bsAlert.close();
        }, 10000);
        
        // Scroll to the alert if it exists
        alertElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
});
</script>

<style>
/* Transition effects for cards */
.transition-all {
    transition: all 0.3s ease;
}

/* Primary soft background for icons */
.bg-primary-soft {
    background-color: rgba(26, 35, 126, 0.1);
}

/* Pulse animation for CTA buttons */
.pulse-animation {
    animation: pulse-animation 2s infinite;
}

@keyframes pulse-animation {
    0% { box-shadow: 0 0 0 0 rgba(26, 35, 126, 0.4); }
    70% { box-shadow: 0 0 0 10px rgba(26, 35, 126, 0); }
    100% { box-shadow: 0 0 0 0 rgba(26, 35, 126, 0); }
}
</style>

<!-- Cloudflare Turnstile Script -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Form validation for partner form
    const form = document.getElementById('partnerForm');
    if (form) {
        form.addEventListener('submit', function(event) {
            // Check basic form validity
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            // Check if Turnstile validation was completed
            const turnstileResponse = document.querySelector('[name="cf-turnstile-response"]');
            if (!turnstileResponse || !turnstileResponse.value) {
                event.preventDefault();
                event.stopPropagation();
                document.getElementById('turnstile-error').style.display = 'block';
            } else {
                document.getElementById('turnstile-error').style.display = 'none';
            }
            
            form.classList.add('was-validated');
        });
    }
});
</script>

<?php
// Get the buffered content
$content = ob_get_clean();

// Include the layout
include __DIR__ . '/includes/layout.php';
?>
