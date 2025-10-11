<?php
session_start();
// Initialize error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load configuration
require_once __DIR__ . '/../config.php';

// Start output buffering
ob_start();

// Set the current page for active navigation highlighting
$current_page = 'features';

// Set page metadata
$page_title = 'Professional Voice Broadcasting & Automated Voice Calls for African Businesses | AppNomu SalesQ';
$page_description = 'Transform your business communication with AppNomu SalesQ\'s professional voice broadcasting platform. Automated voice calls, bulk voice campaigns, MP3 uploads, AI text-to-speech, call scheduling & real-time analytics. Trusted by 25,000+ businesses across Africa. UGX 45 per minute per contact. Available in Kenya, Uganda, Tanzania, Rwanda, South Africa & more.';

// Set page-specific keywords for SEO
$page_keywords = 'voice broadcasting Africa, automated voice calls Kenya Uganda Tanzania, bulk voice marketing campaigns, business voice messaging platform, voice call automation software, MP3 voice message broadcasting, text to speech voice calls Africa, voice marketing ROI analytics, professional voice campaigns Africa, business communication automation, voice call scheduling software, AppNomu SalesQ voice features, African business voice solutions, automated customer outreach calls, voice marketing dashboard analytics, bulk voice SMS integration, business voice broadcasting platform, voice call delivery tracking, automated voice notifications Africa, professional voice messaging service';
?>

<style>
    /* Custom styles for voice feature page */
    .hero-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
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
    
    .voice-wave {
        animation: voice-wave 2s ease-in-out infinite;
    }
    
    @keyframes voice-wave {
        0%, 100% { transform: scaleY(1); }
        50% { transform: scaleY(1.5); }
    }
    
    .pricing-highlight {
        background: linear-gradient(135deg, #198754 0%, #20c997 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 800;
    }
</style>

<!-- Hero Section -->
<section class="hero-section">
    <!-- Decorative Elements -->
    <div class="position-absolute top-0 end-0 d-none d-lg-block" style="opacity: 0.05; width: 300px; height: 300px; background: radial-gradient(circle, #198754 0%, transparent 70%); border-radius: 50%;"></div>
    
    <!-- Voice Wave Animation -->
    <div class="position-absolute start-0 top-50 d-none d-xl-block" style="opacity: 0.3; z-index: 0;">
        <div class="d-flex align-items-end gap-1" style="height: 60px;">
            <div class="bg-success voice-wave" style="width: 4px; height: 20px; animation-delay: 0s;"></div>
            <div class="bg-success voice-wave" style="width: 4px; height: 40px; animation-delay: 0.1s;"></div>
            <div class="bg-success voice-wave" style="width: 4px; height: 60px; animation-delay: 0.2s;"></div>
            <div class="bg-success voice-wave" style="width: 4px; height: 30px; animation-delay: 0.3s;"></div>
            <div class="bg-success voice-wave" style="width: 4px; height: 50px; animation-delay: 0.4s;"></div>
        </div>
    </div>
    
    <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="badge bg-warning text-dark px-3 py-2 rounded-pill mb-3 fw-bold">
                    <i class="bi bi-megaphone-fill me-2"></i>New Feature Available
                </div>
                <h1>Professional Voice Broadcasting Platform for African Businesses</h1>
                <p class="lead mb-4">Reach your customers with automated voice calls and bulk voice campaigns. Professional voice broadcasting made simple with scheduling, analytics, and 94.2% delivery rates.</p>
                
                <!-- Key Benefits -->
                <div class="row mb-4">
                    <div class="col-sm-6 mb-2">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span class="fw-semibold text-dark">All African Countries*</span>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span class="fw-semibold text-dark">UGX 45/minute/contact</span>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span class="fw-semibold text-dark">MP3 & Text-to-Speech</span>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span class="fw-semibold text-dark">Real-time Analytics</span>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=voice_feature&utm_campaign=hero_section" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">
                        <i class="bi bi-telephone-fill me-2"></i>Start Voice Campaigns
                    </a>
                    <a href="https://appnomu.com/landing/pricing" class="btn btn-outline-success rounded-pill px-4">View Pricing</a>
                </div>
                
                <p class="small text-muted">
                    <i class="bi bi-info-circle me-1"></i>*Available in all African countries except Nigeria
                </p>
            </div>
            <div class="col-lg-6 text-center">
                <!-- Rating Badge -->
                <div class="d-flex justify-content-center gap-3 mb-3">
                    <div class="bg-warning text-dark fw-bold px-3 py-2 rounded-pill shadow-sm d-flex align-items-center">
                        <i class="bi bi-star-fill me-1"></i> 4.8/5 Rating
                    </div>
                    <div class="bg-white text-dark fw-bold px-3 py-2 rounded-pill shadow-sm d-flex align-items-center">
                        <i class="bi bi-telephone-fill me-1 text-success"></i> Voice Ready
                    </div>
                </div>
                
                <!-- Hero Image -->
                <div class="position-relative">
                    <img src="https://appnomu.com/landing/assets/images/Voice_Call_AppNomu_SalesQ.webp" alt="Voice Broadcasting Dashboard" class="img-fluid rounded-4 shadow-lg" style="max-height: 400px;">
                    
                    <!-- Floating Stats -->
                    <div class="position-absolute bg-white rounded-3 p-3 shadow-sm" style="top: 20px; left: -20px; border-left: 4px solid #198754; max-width: 140px;">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-telephone-outgoing text-success me-2"></i>
                            <small class="fw-bold">2,847</small>
                        </div>
                        <small class="text-muted">Calls Sent</small>
                    </div>
                    
                    <div class="position-absolute bg-white rounded-3 p-3 shadow-sm" style="bottom: 20px; right: -20px; border-left: 4px solid #198754; max-width: 140px;">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check-circle text-success me-2"></i>
                            <small class="fw-bold">94.2%</small>
                        </div>
                        <small class="text-muted">Delivery Rate</small>
                    </div>
                    
                    <div class="position-absolute bg-white rounded-3 p-3 shadow-sm" style="bottom: 20px; left: -20px; border-left: 4px solid #198754; max-width: 140px;">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-clock text-success me-2"></i>
                            <small class="fw-bold">1.8min</small>
                        </div>
                        <small class="text-muted">Avg Duration</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Features Section -->
<section class="py-5" id="features">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">Voice Broadcasting Features <span class="text-success">for Your Business</span></h2>
                <p class="lead">Powerful automated voice calling tools to enhance customer communication and engagement</p>
                <!-- Visual Feature Icons -->
                <div class="d-flex flex-wrap justify-content-center gap-4 mt-4">
                    <div class="text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2 mx-auto" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-mic-fill text-success" style="font-size: 2rem;"></i>
                        </div>
                        <div class="small fw-bold">Voice Calls</div>
                    </div>
                    <div class="text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2 mx-auto" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-file-music text-success" style="font-size: 2rem;"></i>
                        </div>
                        <div class="small fw-bold">MP3 Upload</div>
                    </div>
                    <div class="text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2 mx-auto" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-calendar-check text-success" style="font-size: 2rem;"></i>
                        </div>
                        <div class="small fw-bold">Scheduling</div>
                    </div>
                    <div class="text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2 mx-auto" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-graph-up text-success" style="font-size: 2rem;"></i>
                        </div>
                        <div class="small fw-bold">Analytics</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Core Voice Features Section -->
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="bg-light rounded-4 p-4 text-center">
                    <!-- Voice Feature Mockup -->
                    <div class="bg-success bg-opacity-10 rounded-circle p-4 mx-auto mb-3" style="width: 150px; height: 150px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-broadcast text-success" style="font-size: 4rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Professional Voice Broadcasting</h5>
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="bg-white rounded p-2 text-center">
                                <div class="h6 mb-0 text-success">Single</div>
                                <small class="text-muted">Calls</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-white rounded p-2 text-center">
                                <div class="h6 mb-0 text-primary">Bulk</div>
                                <small class="text-muted">Campaigns</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">Core Voice Features</h3>
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm bg-success text-white rounded p-3 me-3">
                            <i class="bi bi-telephone-outbound-fill"></i>
                        </div>
                        <div>
                            <h5>Single Voice Calls</h5>
                            <p>Send personalized voice messages to individual customers. Perfect for important notifications, appointment reminders, or one-on-one customer communications.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm bg-primary text-white rounded p-3 me-3">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <div>
                            <h5>Bulk Voice Broadcasting</h5>
                            <p>Reach thousands of customers simultaneously with automated voice campaigns. Ideal for marketing announcements, promotional offers, and mass communications.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm bg-info text-white rounded p-3 me-3">
                            <i class="bi bi-file-music-fill"></i>
                        </div>
                        <div>
                            <h5>MP3 Audio Upload</h5>
                            <p>Upload your own professional MP3 recordings for voice campaigns. Use pre-recorded messages, jingles, or custom audio content for maximum impact.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex">
                        <div class="feature-icon-sm bg-warning text-white rounded p-3 me-3">
                            <i class="bi bi-chat-square-text-fill"></i>
                        </div>
                        <div>
                            <h5>Text-to-Speech Generation</h5>
                            <p>Convert your text messages into natural-sounding voice calls. Our AI-powered text-to-speech engine supports multiple languages and accents.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=voice_feature&utm_campaign=core_features" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">Start Voice Broadcasting</a>
                </div>
            </div>
        </div>
        
        <!-- Advanced Features Section -->
        <div class="row mt-5 py-5 bg-light rounded-3">
            <div class="col-12 text-center mb-4">
                <h2 class="mb-3">Advanced Voice <span class="text-success">Management Tools</span></h2>
                <p class="lead">Professional scheduling, analytics, and campaign management features</p>
            </div>
            
            <div class="col-lg-6">
                <div class="row g-4 h-100">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-lift">
                            <div class="card-body p-4">
                                <div class="feature-icon-sm bg-success bg-opacity-10 text-success rounded-circle mb-3">
                                    <i class="bi bi-calendar-event"></i>
                                </div>
                                <h5 class="card-title">Call Scheduling</h5>
                                <p class="card-text">Schedule voice campaigns for optimal delivery times. Set specific dates, times, and time zones for maximum customer engagement.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-lift">
                            <div class="card-body p-4">
                                <div class="feature-icon-sm bg-primary bg-opacity-10 text-primary rounded-circle mb-3">
                                    <i class="bi bi-bar-chart-line"></i>
                                </div>
                                <h5 class="card-title">Real-time Analytics</h5>
                                <p class="card-text">Track call delivery rates, duration, completion rates, and customer engagement with comprehensive real-time reporting.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-lift">
                            <div class="card-body p-4">
                                <div class="feature-icon-sm bg-info bg-opacity-10 text-info rounded-circle mb-3">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>
                                <h5 class="card-title">Visual Dashboard</h5>
                                <p class="card-text">Interactive visual dashboard with charts, graphs, and metrics to monitor campaign performance and optimize results.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-lift">
                            <div class="card-body p-4">
                                <div class="feature-icon-sm bg-warning bg-opacity-10 text-warning rounded-circle mb-3">
                                    <i class="bi bi-file-earmark-text"></i>
                                </div>
                                <h5 class="card-title">Detailed Reports</h5>
                                <p class="card-text">Generate comprehensive reports with call logs, delivery status, customer responses, and campaign ROI analysis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Analytics Dashboard Mockup -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="text-center">
                    <div class="bg-white rounded-4 shadow-lg p-4">
                        <h5 class="fw-bold mb-4">Voice Analytics Dashboard</h5>
                        
                        <!-- Mock Chart -->
                        <div class="bg-light rounded-3 p-3 mb-4" style="height: 200px; display: flex; align-items: center; justify-content: center;">
                            <div class="text-center">
                                <i class="bi bi-bar-chart-fill text-success mb-2" style="font-size: 3rem;"></i>
                                <div class="small text-muted">Interactive Voice Analytics</div>
                            </div>
                        </div>
                        
                        <!-- Mock Metrics -->
                        <div class="row g-3">
                            <div class="col-3 text-center">
                                <div class="bg-success bg-opacity-10 rounded p-2">
                                    <div class="h6 mb-0 text-success">94.2%</div>
                                    <small class="text-muted">Delivery Rate</small>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <div class="bg-primary bg-opacity-10 rounded p-2">
                                    <div class="h6 mb-0 text-primary">1.8min</div>
                                    <small class="text-muted">Avg Duration</small>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <div class="bg-info bg-opacity-10 rounded p-2">
                                    <div class="h6 mb-0 text-info">78%</div>
                                    <small class="text-muted">Listen Rate</small>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                <div class="bg-warning bg-opacity-10 rounded p-2">
                                    <div class="h6 mb-0 text-warning">2,847</div>
                                    <small class="text-muted">Calls Sent</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="mb-4">Simple, Transparent <span class="text-success">Voice Pricing</span></h2>
                <p class="lead">Pay only for what you use - no hidden fees, no monthly commitments</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-body p-5 text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-4 mx-auto mb-4" style="width: 120px; height: 120px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-telephone-fill text-success" style="font-size: 3rem;"></i>
                        </div>
                        
                        <h3 class="mb-3">Voice Call Pricing</h3>
                        <div class="mb-4">
                            <span class="pricing-highlight display-4">UGX 45</span>
                            <span class="text-muted fs-5"> per minute per contact</span>
                        </div>
                        
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Single Voice Calls</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Bulk Voice Broadcasting</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>MP3 Audio Upload</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Text-to-Speech</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Call Scheduling</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Analytics Dashboard</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="alert alert-info border-0 bg-info bg-opacity-10">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-info-circle-fill text-info me-2"></i>
                                <div>
                                    <strong>Available as an Add-on:</strong> Voice calling is available as an add-on feature to any AppNomu SalesQ plan. Available in all African countries except Nigeria.
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                            <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=voice_feature&utm_campaign=pricing_section" class="btn btn-success btn-lg rounded-pill px-5 pulse-animation">
                                <i class="bi bi-telephone-fill me-2"></i>Start Voice Campaigns
                            </a>
                            <a href="<?= url('/contact') ?>" class="btn btn-outline-success btn-lg rounded-pill px-5">
                                <i class="bi bi-chat-dots me-2"></i>Contact Sales
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Structured Data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "AppNomu SalesQ Voice Broadcasting",
  "applicationCategory": "BusinessApplication",
  "description": "Professional voice broadcasting platform for African businesses. Automated voice calls, bulk voice campaigns, MP3 uploads, AI text-to-speech, call scheduling and real-time analytics.",
  "operatingSystem": "Web-based",
  "offers": {
    "@type": "Offer",
    "price": "45",
    "priceCurrency": "UGX",
    "description": "Per minute per contact voice call pricing"
  },
  "provider": {
    "@type": "Organization",
    "name": "AppNomu SalesQ",
    "url": "https://appnomu.com/landing",
    "logo": "https://appnomu.com/landing/assets/img/logo.png",
    "foundingDate": "2019",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "UG",
      "addressRegion": "Uganda"
    }
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "ratingCount": "25000"
  },
  "featureList": [
    "Single Voice Calls",
    "Bulk Voice Broadcasting", 
    "MP3 Audio Upload",
    "Text-to-Speech Generation",
    "Call Scheduling",
    "Real-time Analytics",
    "Visual Dashboard",
    "Detailed Reports"
  ]
}
</script>

<?php
// Get the content
$content = ob_get_clean();

// Include the layout
include __DIR__ . '/../includes/layout.php';
?>
