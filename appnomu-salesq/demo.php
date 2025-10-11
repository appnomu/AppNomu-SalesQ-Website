<?php
// Include configuration file
require_once __DIR__ . '/includes/config.php';

// Set the current page for navigation highlighting
$current_page = 'demo';
$page_title = 'Request a Demo | AppNomu SalesQ';
$page_description = 'Schedule a personalized demo to experience the power of AppNomu SalesQ for your business';

// Set page-specific keywords for SEO
$page_keywords = 'SalesQ Demo, Free CRM Demo Uganda, Business Software Demo, Sales Software Trial, Inventory Software Demo Africa, Online Demo Request, AppNomu Live Demonstration, Product Demo East Africa, Sales Management Demo';

// Additional CSS for this page
$additional_css = [];

// Additional JS for this page
$additional_js = [];

// Start output buffering
ob_start();

// Generate CSRF token for form security
if (!isset($_SESSION)) {
    session_start();
}
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];
?>

<!-- AOS Animation Library -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- Cloudflare Turnstile Script -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<!-- AOS Fallback CSS to ensure content visibility -->
<style>
    [data-aos] {
        opacity: 1 !important;
        transform: translate(0) scale(1) !important;
    }
    
    /* Pulse animation for submit button */
    @keyframes pulse-light {
        0% { box-shadow: 0 0 0 0 rgba(25, 135, 84, 0.4); }
        70% { box-shadow: 0 0 0 10px rgba(25, 135, 84, 0); }
        100% { box-shadow: 0 0 0 0 rgba(25, 135, 84, 0); }
    }
    .btn-pulse {
        animation: pulse-light 2s infinite;
    }
    
    .pulse-animation {
        animation: pulse-light 2s infinite;
    }
    
    /* Modern Form Styling */
    .form-control-modern,
    .form-control-modern:focus {
        box-shadow: none;
        border-color: #dee2e6;
        transition: all 0.3s ease;
    }
    
    .form-control-modern:focus {
        border-color: #198754;
    }
    
    .input-group-custom {
        border-radius: 0.375rem;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 2px 5px rgba(0,0,0,0.02);
    }
    
    .input-group-custom:focus-within {
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.15);
    }
    
    .input-group-custom .input-group-text {
        border-color: #dee2e6;
        color: #6c757d;
        background-color: #f8f9fa;
        transition: all 0.3s ease;
    }
    
    .input-group-custom:focus-within .input-group-text {
        border-color: #198754;
        color: #198754;
    }
    
    /* Demo Card Header - Clean White Style */
    .demo-card-header {
        background: #ffffff;
        color: #333;
        padding: 2rem;
        position: relative;
        border-bottom: 3px solid #198754;
    }
    
    /* Enhanced hover effects */
    .hover-shadow {
        transition: all 0.3s ease-in-out;
    }
    
    .hover-shadow:hover {
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15)!important;
        transform: translateY(-3px);
    }
    
    /* Animation transitions */
    .transition-300 {
        transition: all 0.3s ease-in-out;
    }
    
    /* Enhanced form styles */
    .form-control:focus, .form-select:focus {
        border-color: rgba(25, 135, 84, 0.5);
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, .15);
    }
    
    .input-group-text {
        transition: all 0.3s;
    }
    
    .input-group:focus-within .input-group-text {
        border-color: rgba(25, 135, 84, 0.5);
        background-color: rgba(25, 135, 84, 0.05);
    }
    
    .invalid-feedback {
        font-size: 0.85em;
        margin-top: 0.25rem;
    }
    
    .btn-success {
        background-color: #198754;
        border-color: #198754;
    }
    
    .btn-success:hover, .btn-success:focus {
        background-color: #157347;
        border-color: #157347;
    }
    
    .text-success {
        color: #198754 !important;
    }
    
    /* Card enhancements */
    .card {
        transition: all 0.3s ease;
    }
    
    .demo-card-header {
        background: linear-gradient(135deg, #198754 0%, #157347 100%);
        border-radius: 0.375rem 0.375rem 0 0;
        padding: 1.5rem;
    }
    
    /* Input label styling */
    .form-label {
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
    }
    
    /* Enhanced testimonial card */
    .testimonial-card {
        border-left: 4px solid #198754 !important;
        background-color: rgba(248, 249, 250, 0.8);
    }
    
    /* Mobile Form Optimizations */
    @media (max-width: 768px) {
        .input-group-custom {
            margin-bottom: 0.5rem;
        }
        
        .form-control, .form-select {
            font-size: 16px; /* Prevents zoom on iOS */
            padding: 0.875rem 0.75rem;
        }
        
        .btn {
            padding: 0.875rem 1.5rem;
            font-size: 1rem;
        }
        
        .modal-dialog {
            margin: 0.5rem;
        }
        
        .hero-stats {
            flex-direction: column;
            align-items: center !important;
            text-align: center;
        }
        
        .hero-stats > div {
            margin-bottom: 1rem;
        }
        
        .trust-indicators {
            justify-content: center !important;
            text-align: center;
        }
        
        .trust-indicators > div {
            margin-bottom: 0.5rem;
        }
    }
    
    /* Improved touch targets for mobile */
    @media (max-width: 576px) {
        .btn {
            min-height: 48px;
            width: 100%;
            margin-bottom: 0.5rem;
        }
        
        .input-group-text {
            min-width: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .form-check-input {
            width: 1.25rem;
            height: 1.25rem;
        }
    }
    
    /* Custom Modal Backdrop - Less Intrusive */
    .modal-backdrop {
        background-color: rgba(0, 0, 0, 0.3) !important; /* Lighter backdrop */
    }
    
    .modal-backdrop.show {
        opacity: 0.3 !important; /* Reduced opacity */
    }
    
    
    /* Exit Intent Modal - Keep original backdrop */
    #exitIntentModal ~ .modal-backdrop {
        background-color: rgba(0, 0, 0, 0.5) !important;
        opacity: 0.5 !important;
    }
</style>

<!-- Professional Hero Section with Light Gray Gradient (Matching Careers Page) -->
<header class="page-header position-relative overflow-hidden py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <!-- Subtle pattern overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNMCwwaDEwMHYxMDBoLTEwMHoiIGZpbGw9Im5vbmUiLz48cGF0aCBkPSJNMCwwbDEwMCwxMDAiIHN0cm9rZT0icmdiYSgwLDAsMCwwLjAzKSIgc3Ryb2tlLXdpZHRoPSIwLjUiLz48L3N2Zz4='); opacity: 0.4;"></div>
    
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-up">
                <span class="badge bg-success text-white fw-bold px-3 py-2 rounded-pill mb-3">LIVE DEMO</span>
                <h1 class="display-4 fw-bold mb-4">Experience AppNomu SalesQ in Action</h1>
                <p class="lead mb-4">Schedule a personalized demo to see how our powerful sales and inventory management solution can transform your business operations and boost revenue.</p>
                <div class="d-flex flex-wrap mb-4 hero-stats">
                    <div class="me-3 mb-2">
                        <div class="d-flex align-items-center">
                            <span class="fw-bold fs-4 me-1 text-success">30min</span>
                            <span class="text-dark opacity-75">Demo Duration</span>
                        </div>
                    </div>
                    <div class="me-3 mb-2">
                        <div class="d-flex align-items-center">
                            <span class="fw-bold fs-4 me-1 text-success">15+</span>
                            <span class="text-dark opacity-75">Industry Scenarios</span>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="d-flex align-items-center">
                            <span class="fw-bold fs-4 me-1 text-success">93%</span>
                            <span class="text-dark opacity-75">Satisfaction Rate</span>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <a href="#demo-request" class="btn btn-success rounded-pill px-4 shadow-sm hover-shadow transition-300 py-2 pulse-animation">
                        <i class="bi bi-calendar-check me-2"></i> Schedule Demo Now
                    </a>
                    <a href="#why-demo" class="btn btn-outline-success rounded-pill px-4 shadow-sm hover-shadow transition-300 py-2">
                        <i class="bi bi-info-circle me-2"></i> Learn More
                    </a>
                </div>
                
                <!-- Urgency and Trust Indicators -->
                <div class="d-flex flex-wrap align-items-center gap-3 text-sm trust-indicators">
                    <div class="d-flex align-items-center">
                        <div class="bg-warning bg-opacity-10 rounded-circle p-1 me-2" style="width: 24px; height: 24px;">
                            <i class="bi bi-clock text-warning fs-6"></i>
                        </div>
                        <small class="text-muted">Limited slots this week</small>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-1 me-2" style="width: 24px; height: 24px;">
                            <i class="bi bi-shield-check text-success fs-6"></i>
                        </div>
                        <small class="text-muted">100% Free • No commitment</small>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-info bg-opacity-10 rounded-circle p-1 me-2" style="width: 24px; height: 24px;">
                            <i class="bi bi-headset text-info fs-6"></i>
                        </div>
                        <small class="text-muted">Local Uganda support</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block" data-aos="fade-left" data-aos-delay="200">
                <div class="position-relative">
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-success opacity-10 rounded-4"></div>
                    <img src="https://appnomu.com/landing/assets/images/DEMO_123.jpg" alt="AppNomu SalesQ Demo Preview" class="img-fluid rounded-4 shadow-lg" style="transform: translateY(-10px); border: 5px solid rgba(255,255,255,0.7);">
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Why Book a Demo Section -->
<section id="why-demo" class="py-5 position-relative overflow-hidden" style="background: #ffffff;">
    <div class="container py-4">
        <!-- Section Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Why Book a <span class="text-success">Demo</span> With Us?</h2>
                <p class="lead text-muted mb-4" data-aos="fade-up" data-aos-delay="100">Experience firsthand how our platform can transform your business operations and boost your revenue.</p>
                <div class="d-flex justify-content-center">
                    <div class="divider bg-success" style="height: 4px; width: 70px; border-radius: 2px;" data-aos="zoom-in" data-aos-delay="150"></div>
                </div>
            </div>
        </div>
        
        <!-- Feature Cards -->
        <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 h-100 rounded-4 shadow-sm hover-shadow transition-300">
                    <div class="card-body p-4 text-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex justify-content-center align-items-center mb-4" style="width: 80px; height: 80px;">
                            <i class="bi bi-clock-history text-success fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Save Time</h4>
                        <p class="text-muted">Our guided demo walks you through exactly how SalesQ can streamline your specific business processes, saving you research time.</p>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 h-100 rounded-4 shadow-sm hover-shadow transition-300">
                    <div class="card-body p-4 text-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex justify-content-center align-items-center mb-4" style="width: 80px; height: 80px;">
                            <i class="bi bi-person-check text-success fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Personalized Experience</h4>
                        <p class="text-muted">Get answers to your specific questions and see how our features directly apply to your business needs.</p>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 h-100 rounded-4 shadow-sm hover-shadow transition-300">
                    <div class="card-body p-4 text-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex justify-content-center align-items-center mb-4" style="width: 80px; height: 80px;">
                            <i class="bi bi-graph-up-arrow text-success fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">ROI Preview</h4>
                        <p class="text-muted">Discover the potential return on investment with concrete examples tailored to your industry and business size.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Stats Row -->
        <div class="row mt-5 g-4 justify-content-center" data-aos="fade-up" data-aos-delay="400">
            <div class="col-12">
                <div class="card border-0 shadow-sm rounded-4 bg-white">
                    <div class="card-body p-4">
                        <div class="row text-center">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <h3 class="display-5 fw-bold text-success">93%</h3>
                                <p class="text-muted mb-0">of our demo attendees report better understanding of their business needs</p>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-0 border-start border-end border-light">
                                <h3 class="display-5 fw-bold text-success">15+</h3>
                                <p class="text-muted mb-0">industry-specific demo scenarios available for your business type</p>
                            </div>
                            <div class="col-md-4">
                                <h3 class="display-5 fw-bold text-success">30min</h3>
                                <p class="text-muted mb-0">average demo duration - respectful of your valuable time</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Minimal Background Elements -->
    <div class="position-absolute" style="bottom: 0; right: 0; width: 300px; height: 300px; background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjMwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMTUwLDAgTDMwMCwxNTAgTDE1MCwzMDAgTDAsMTUwIFoiIGZpbGw9InJnYmEoMjUsMTM1LDg0LDAuMDEpIi8+PC9zdmc+'); background-size: contain; background-repeat: no-repeat; opacity: 0.3; z-index: 0;"></div>
    <div class="position-absolute" style="top: 20%; left: 5%; width: 100px; height: 100px; background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Y2lyY2xlIGN4PSI1MCIgY3k9IjUwIiByPSI1MCIgZmlsbD0icmdiYSgyNSwxMzUsODQsMC4wMSkiLz48L3N2Zz4='); background-size: contain; background-repeat: no-repeat; opacity: 0.4; z-index: 0;"></div>
</section>

<!-- Demo Request Section -->
<section class="py-5" id="demo-request">
    <div class="container">
        <div class="row align-items-start">
            <!-- Demo Form -->
            <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
                <div class="card border-0 shadow rounded-4 mb-4 hover-shadow">
                    <div class="card-header border-0 position-relative" style="background: #ffffff; border-bottom: 3px solid #198754; padding: 2rem;">
                        <div class="position-relative">
                            <h2 class="mb-2 fw-bold text-dark">Request Your Personalized Demo</h2>
                            <p class="mb-0 text-muted">Fill out the form below and our team will contact you shortly</p>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        
                        <?php
                        // Check for demo request status
                        $demo_request = isset($_GET['demo_request']) ? $_GET['demo_request'] : '';
                        $user_name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
                        $error_message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';
                        
                        if ($demo_request == 'success'):
                        ?>
                        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                            <strong>Thank you<?php echo !empty($user_name) ? ', ' . $user_name : ''; ?>!</strong> Your demo request has been received. Our team will contact you shortly to schedule your personalized demo.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php elseif ($demo_request == 'error'): ?>
                        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                            <strong>Error:</strong> <?php echo !empty($error_message) ? $error_message : 'We couldn\'t process your request. Please try again.'; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>
                        
                        <form id="demoForm" action="process_demo_request.php" method="POST" class="needs-validation" novalidate>
                            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                            
                            <!-- Honeypot field - hidden from real users but bots will fill it out -->
                            <div class="d-none">
                                <label for="website">Website (Leave this empty)</label>
                                <input type="text" name="website" id="website" autocomplete="off">
                            </div>
                            
                            <div class="row g-4">
                                <!-- Full Name -->
                                <div class="col-md-6">
                                    <label for="name" class="form-label fw-semibold small">Full Name <span class="text-danger">*</span></label>
                                    <div class="input-group input-group-custom hover-shadow">
                                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-person text-success"></i></span>
                                        <input type="text" class="form-control form-control-modern border-start-0 ps-0" id="name" name="name" placeholder="Enter your full name" required>
                                    </div>
                                    <div class="invalid-feedback">Please enter your name</div>
                                </div>
                                
                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-semibold small">Email Address <span class="text-danger">*</span></label>
                                    <div class="input-group input-group-custom hover-shadow">
                                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope text-success"></i></span>
                                        <input type="email" class="form-control form-control-modern border-start-0 ps-0" id="email" name="email" placeholder="Enter your email address" required>
                                    </div>
                                    <div class="invalid-feedback">Please enter a valid email</div>
                                </div>
                                
                                <!-- Phone -->
                                <div class="col-md-6">
                                    <label for="phone" class="form-label fw-semibold small">Phone Number <span class="text-danger">*</span></label>
                                    <div class="input-group input-group-custom hover-shadow">
                                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-telephone text-success"></i></span>
                                        <input type="tel" class="form-control form-control-modern border-start-0 ps-0" id="phone" name="phone" placeholder="Enter your phone number" required>
                                    </div>
                                    <div class="invalid-feedback">Please enter your phone number</div>
                                </div>
                                
                                <!-- Company -->
                                <div class="col-md-6">
                                    <label for="company" class="form-label fw-semibold small">Company Name <span class="text-danger">*</span></label>
                                    <div class="input-group input-group-custom hover-shadow">
                                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-building text-success"></i></span>
                                        <input type="text" class="form-control form-control-modern border-start-0 ps-0" id="company" name="company" placeholder="Enter your company name" required>
                                    </div>
                                    <div class="invalid-feedback">Please enter your company name</div>
                                </div>
                                
                                <!-- Business Type -->
                                <div class="col-md-6">
                                    <label for="business_type" class="form-label fw-semibold small">Business Type <span class="text-danger">*</span></label>
                                    <div class="input-group input-group-custom hover-shadow">
                                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-briefcase text-success"></i></span>
                                        <select class="form-select form-control-modern border-start-0 ps-0" id="business_type" name="business_type" required>
                                        <option value="">Select business type</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Wholesale">Wholesale</option>
                                        <option value="Manufacturing">Manufacturing</option>
                                        <option value="Services">Services</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    </div>
                                    <div class="invalid-feedback">Please select your business type</div>
                                </div>
                                
                                <!-- Team Size -->
                                <div class="col-md-6">
                                    <label for="team_size" class="form-label fw-semibold small">Team Size</label>
                                    <div class="input-group input-group-custom hover-shadow">
                                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-people text-success"></i></span>
                                        <select class="form-select form-control-modern border-start-0 ps-0" id="team_size" name="team_size">
                                        <option value="">Select team size</option>
                                        <option value="1-10">1-10 employees</option>
                                        <option value="11-50">11-50 employees</option>
                                        <option value="51-200">51-200 employees</option>
                                        <option value="201-500">201-500 employees</option>
                                        <option value="501+">501+ employees</option>
                                    </select>
                                    </div>
                                </div>
                                
                                <!-- Preferred Date -->
                                <div class="col-md-6">
                                    <label for="preferred_date" class="form-label fw-semibold small">Preferred Demo Date</label>
                                    <div class="input-group input-group-custom hover-shadow">
                                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-calendar-event text-success"></i></span>
                                        <input type="date" class="form-control form-control-modern border-start-0 ps-0" id="preferred_date" name="preferred_date" min="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                                
                                <!-- Preferred Time -->
                                <div class="col-md-6">
                                    <label for="preferred_time" class="form-label fw-semibold small">Preferred Time</label>
                                    <div class="input-group input-group-custom hover-shadow">
                                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-clock text-success"></i></span>
                                        <select class="form-select form-control-modern border-start-0 ps-0" id="preferred_time" name="preferred_time">
                                        <option value="">Select preferred time</option>
                                        <option value="Morning (9AM-12PM EAT)">Morning (9AM-12PM EAT)</option>
                                        <option value="Afternoon (1PM-5PM EAT)">Afternoon (1PM-5PM EAT)</option>
                                        <option value="Flexible">Flexible</option>
                                    </select>
                                    </div>
                                </div>
                                
                                <!-- Specific Requirements -->
                                <div class="col-12">
                                    <label for="requirements" class="form-label fw-semibold small">Specific Requirements or Questions</label>
                                    <div class="input-group input-group-custom hover-shadow">
                                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-chat-dots text-success"></i></span>
                                        <textarea class="form-control form-control-modern border-start-0 ps-0" id="requirements" name="requirements" rows="4" placeholder="Tell us about your specific needs or questions..."></textarea>
                                    </div>
                                </div>
                                
                                <!-- Terms Agreement -->
                                <div class="col-12">
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="privacy" name="privacy" required>
                                        <label class="form-check-label small" for="privacy">
                                            I agree to the <a href="https://appnomu.com/landing/privacy-policy" target="_blank" class="text-success">Privacy Policy</a> and consent to being contacted about AppNomu SalesQ.
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree to our privacy policy before submitting.
                                        </div>
                                    </div>
                                </div>

                                <!-- Cloudflare Turnstile Widget -->
                                <div class="col-12 mt-4 mb-2">
                                    <label class="form-label fw-semibold small mb-2"><i class="bi bi-shield-check text-success me-1"></i> Security Verification</label>
                                    <div class="d-flex justify-content-start">
                                        <div class="cf-turnstile" data-sitekey="<?php echo $turnstile_site_key; ?>"></div>
                                    </div>
                                    <div class="invalid-feedback" id="turnstile-error" style="display: none;">
                                        Please complete the security verification.
                                    </div>
                                </div>
                                
                                <!-- Security and Trust Badges -->
                                <div class="col-12 mt-3">
                                    <div class="row g-2 mb-3">
                                        <div class="col-6 col-md-3">
                                            <div class="d-flex align-items-center justify-content-center p-2 bg-light rounded-3">
                                                <i class="bi bi-shield-lock text-success me-1"></i>
                                                <small class="text-muted">SSL Secured</small>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="d-flex align-items-center justify-content-center p-2 bg-light rounded-3">
                                                <i class="bi bi-check-circle text-success me-1"></i>
                                                <small class="text-muted">GDPR Compliant</small>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="d-flex align-items-center justify-content-center p-2 bg-light rounded-3">
                                                <i class="bi bi-clock text-info me-1"></i>
                                                <small class="text-muted">24hr Response</small>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="d-flex align-items-center justify-content-center p-2 bg-light rounded-3">
                                                <i class="bi bi-geo-alt text-warning me-1"></i>
                                                <small class="text-muted">Uganda Based</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Testimonial Integration -->
                                <div class="col-12">
                                    <div class="d-flex align-items-center p-3 rounded-3 testimonial-card hover-shadow">
                                        <div class="text-warning me-2 d-flex">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <div class="fst-italic flex-grow-1">
                                            <div>"We signed up the same day after our demo!"</div>
                                            <div class="small text-muted mt-1">- Komatai Ochen, Sales Director</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Submit Button -->
                                <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-success btn-lg w-100 d-flex align-items-center justify-content-center gap-2 btn-pulse shadow-sm rounded-pill">
                                    <span>Request Your Demo</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Demo Benefits -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-lg rounded-4 p-4 mb-4 position-relative overflow-hidden hover-shadow" data-aos="fade-up" data-aos-delay="100" style="background: #ffffff; border-left: 4px solid #198754;">
                    <!-- Minimal Background Pattern -->
                    <div class="position-absolute top-0 end-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNMCwwYzMzLjMsMzMuMyw2Ni43LDMzLjMsMTAwLDBWMTAwSDBWMHoiIGZpbGw9InJnYmEoMjUsMTM1LDg0LDAuMDIpIi8+PC9zdmc+'); background-size: cover; background-position: center; opacity: 0.3;"></div>
                    
                    <!-- Minimal Decorative Elements -->
                    <div class="position-absolute" style="top: 20px; right: 20px; width: 40px; height: 40px; border-radius: 50%; background: rgba(25,135,84,0.05);"></div>
                    <div class="position-absolute" style="bottom: 30px; left: 20px; width: 60px; height: 60px; border-radius: 30%; transform: rotate(45deg); background: rgba(25,135,84,0.03);"></div>
                    
                    <div class="card-body position-relative">
                        <h3 class="mb-4 fw-bold text-dark">What to Expect in Your Demo</h3>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start mb-4 transition-300" data-aos="fade-up" data-aos-delay="150">
                                <div class="flex-shrink-0 bg-success bg-opacity-10 rounded-circle p-3 me-3 shadow-sm" style="width: 60px; height: 60px;">
                                    <i class="bi bi-person-video3 text-success fs-4 d-flex justify-content-center"></i>
                                </div>
                                <div>
                                    <h5 class="fw-semibold text-dark">Personalized Walkthrough</h5>
                                    <p class="mb-0 text-muted">Our product specialists will customize the demo to match your specific business needs.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4 transition-300" data-aos="fade-up" data-aos-delay="200">
                                <div class="flex-shrink-0 bg-success bg-opacity-10 rounded-circle p-3 me-3 shadow-sm" style="width: 60px; height: 60px;">
                                    <i class="bi bi-lightbulb text-success fs-4 d-flex justify-content-center"></i>
                                </div>
                                <div>
                                    <h5 class="fw-semibold text-dark">Actionable Insights</h5>
                                    <p class="mb-0 text-muted">Discover key opportunities to increase sales and optimize inventory management.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4 transition-300" data-aos="fade-up" data-aos-delay="250">
                                <div class="flex-shrink-0 bg-success bg-opacity-10 rounded-circle p-3 me-3 shadow-sm" style="width: 60px; height: 60px;">
                                    <i class="bi bi-tools text-success fs-4 d-flex justify-content-center"></i>
                                </div>
                                <div>
                                    <h5 class="fw-semibold text-dark">Tailored Solutions</h5>
                                    <p class="mb-0 text-muted">See how AppNomu SalesQ can be customized to fit your specific workflow.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start transition-300" data-aos="fade-up" data-aos-delay="300">
                                <div class="flex-shrink-0 bg-success bg-opacity-10 rounded-circle p-3 me-3 shadow-sm" style="width: 60px; height: 60px;">
                                    <i class="bi bi-cash-stack text-success fs-4 d-flex justify-content-center"></i>
                                </div>
                                <div>
                                    <h5 class="fw-semibold text-dark">ROI Assessment</h5>
                                    <p class="mb-0 text-muted">Learn how our platform can deliver measurable return on investment for your business.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4 transition-300" data-aos="fade-up" data-aos-delay="350">
                                <div class="flex-shrink-0 bg-success bg-opacity-10 rounded-circle p-3 me-3 shadow-sm" style="width: 60px; height: 60px;">
                                    <i class="bi bi-puzzle text-success fs-4 d-flex justify-content-center"></i>
                                </div>
                                <div>
                                    <h5 class="fw-semibold text-dark">Feature Showcase</h5>
                                    <p class="mb-0 text-muted">See how our robust features streamline your sales and inventory processes.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start transition-300" data-aos="fade-up" data-aos-delay="400">
                                <div class="flex-shrink-0 bg-success bg-opacity-10 rounded-circle p-3 me-3 shadow-sm" style="width: 60px; height: 60px;">
                                    <i class="bi bi-graph-up-arrow text-success fs-4 d-flex justify-content-center"></i>
                                </div>
                                <div>
                                    <h5 class="fw-semibold text-dark">ROI Discussion</h5>
                                    <p class="mb-0 text-muted">Understand how AppNomu SalesQ delivers value and drives growth for your business.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</section>

<!-- Industry-Specific Demo Scenarios -->
<section class="py-5" style="background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container py-4">
        <!-- Section Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">See SalesQ in <span class="text-success">Your Industry</span></h2>
                <p class="lead text-muted mb-4" data-aos="fade-up" data-aos-delay="100">Experience tailored demos designed for your specific business type and challenges</p>
                <div class="d-flex justify-content-center">
                    <div class="divider bg-success" style="height: 4px; width: 70px; border-radius: 2px;" data-aos="zoom-in" data-aos-delay="150"></div>
                </div>
            </div>
        </div>
        
        <!-- Industry Cards -->
        <div class="row g-4">
            <!-- Retail -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 h-100 shadow-sm hover-shadow transition-300 rounded-4">
                    <div class="card-body p-4 text-center">
                        <div class="bg-primary bg-opacity-10 rounded-circle p-3 d-inline-flex mb-3" style="width: 70px; height: 70px;">
                            <i class="bi bi-shop text-primary fs-2"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Retail Business</h5>
                        <p class="text-muted mb-4 small">POS integration, inventory tracking, customer management, and sales analytics for retail stores.</p>
                        <a href="#demo-request" class="btn btn-outline-primary rounded-pill btn-sm px-3">
                            <i class="bi bi-calendar-plus me-1"></i>Book Retail Demo
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Manufacturing -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 h-100 shadow-sm hover-shadow transition-300 rounded-4">
                    <div class="card-body p-4 text-center">
                        <div class="bg-warning bg-opacity-10 rounded-circle p-3 d-inline-flex mb-3" style="width: 70px; height: 70px;">
                            <i class="bi bi-gear-fill text-warning fs-2"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Manufacturing</h5>
                        <p class="text-muted mb-4 small">Production planning, raw material tracking, quality control, and supply chain management.</p>
                        <a href="#demo-request" class="btn btn-outline-warning rounded-pill btn-sm px-3">
                            <i class="bi bi-calendar-plus me-1"></i>Book Manufacturing Demo
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Wholesale -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 h-100 shadow-sm hover-shadow transition-300 rounded-4">
                    <div class="card-body p-4 text-center">
                        <div class="bg-info bg-opacity-10 rounded-circle p-3 d-inline-flex mb-3" style="width: 70px; height: 70px;">
                            <i class="bi bi-boxes text-info fs-2"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Wholesale</h5>
                        <p class="text-muted mb-4 small">Bulk order management, distributor networks, pricing tiers, and volume-based analytics.</p>
                        <a href="#demo-request" class="btn btn-outline-info rounded-pill btn-sm px-3">
                            <i class="bi bi-calendar-plus me-1"></i>Book Wholesale Demo
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Services -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="card border-0 h-100 shadow-sm hover-shadow transition-300 rounded-4">
                    <div class="card-body p-4 text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 d-inline-flex mb-3" style="width: 70px; height: 70px;">
                            <i class="bi bi-people-fill text-success fs-2"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Service Business</h5>
                        <p class="text-muted mb-4 small">Client management, appointment scheduling, service tracking, and billing automation.</p>
                        <a href="#demo-request" class="btn btn-outline-success rounded-pill btn-sm px-3">
                            <i class="bi bi-calendar-plus me-1"></i>Book Service Demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Popular Features Highlight -->
        <div class="row mt-5">
            <div class="col-12" data-aos="fade-up">
                <div class="card border-0 shadow-sm rounded-4 bg-white">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5 class="fw-bold mb-2">Not sure which demo fits your business?</h5>
                                <p class="text-muted mb-md-0">Our product specialists will help identify the best demo scenario for your specific needs during the consultation.</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <a href="#demo-request" class="btn btn-success rounded-pill px-4">
                                    <i class="bi bi-chat-dots me-2"></i>Get Custom Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Demo Process Section -->
<section class="py-5" style="background: #ffffff;">
    <div class="container py-4">
        <!-- Section Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Our <span class="text-success">Demo</span> Process</h2>
                <p class="lead text-muted mb-4" data-aos="fade-up" data-aos-delay="100">Simple, streamlined, and focused on your business needs</p>
                <div class="d-flex justify-content-center">
                    <div class="divider bg-success" style="height: 4px; width: 70px; border-radius: 2px;" data-aos="zoom-in" data-aos-delay="150"></div>
                </div>
            </div>
        </div>
        
        <!-- Process Steps -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="position-relative">
                    <!-- Vertical Line -->
                    <div class="position-absolute h-100" style="width: 2px; background-color: #dee2e6; left: 21px; top: 0;"></div>
                    
                    <!-- Step 1 -->
                    <div class="d-flex mb-5" data-aos="fade-right">
                        <div class="flex-shrink-0">
                            <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center fw-bold" style="width: 45px; height: 45px; position: relative; z-index: 2;">1</div>
                        </div>
                        <div class="ms-4">
                            <div class="card border-0 shadow-sm rounded-4">
                                <div class="card-body p-4">
                                    <h4 class="fw-bold mb-3">Submit Your Request</h4>
                                    <p class="text-muted mb-0">Fill out our demo request form with your business details and preferred schedule. This helps us tailor the demo to your specific industry needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="d-flex mb-5" data-aos="fade-right" data-aos-delay="100">
                        <div class="flex-shrink-0">
                            <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center fw-bold" style="width: 45px; height: 45px; position: relative; z-index: 2;">2</div>
                        </div>
                        <div class="ms-4">
                            <div class="card border-0 shadow-sm rounded-4">
                                <div class="card-body p-4">
                                    <h4 class="fw-bold mb-3">Confirmation & Scheduling</h4>
                                    <p class="text-muted mb-0">Within 24 hours, our team will reach out to confirm your demo appointment and send a calendar invitation with meeting details.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="d-flex mb-5" data-aos="fade-right" data-aos-delay="200">
                        <div class="flex-shrink-0">
                            <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center fw-bold" style="width: 45px; height: 45px; position: relative; z-index: 2;">3</div>
                        </div>
                        <div class="ms-4">
                            <div class="card border-0 shadow-sm rounded-4">
                                <div class="card-body p-4">
                                    <h4 class="fw-bold mb-3">Personalized Demo Session</h4>
                                    <p class="text-muted mb-0">Join a live session with our product specialist who will walk you through SalesQ features relevant to your business and answer all your questions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="d-flex" data-aos="fade-right" data-aos-delay="300">
                        <div class="flex-shrink-0">
                            <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center fw-bold" style="width: 45px; height: 45px; position: relative; z-index: 2;">4</div>
                        </div>
                        <div class="ms-4">
                            <div class="card border-0 shadow-sm rounded-4">
                                <div class="card-body p-4">
                                    <h4 class="fw-bold mb-3">Follow-Up & Next Steps</h4>
                                    <p class="text-muted mb-0">After the demo, you'll receive a personalized summary, pricing information, and guidance on how to get started with a free trial or full implementation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA -->
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 col-lg-6 text-center" data-aos="fade-up">
                <div class="card border-0 shadow-sm rounded-4 p-4" style="background: #ffffff; border-left: 4px solid #198754;">
                    <div class="card-body">
                        <h4 class="fw-bold mb-3 text-dark">Ready to transform your business?</h4>
                        <p class="mb-4 text-muted">Our product specialists are ready to show you how SalesQ can work for your specific business needs.</p>
                        <a href="#demo-request" class="btn btn-success rounded-pill px-4 py-2 btn-pulse">Schedule Your Demo Today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="py-5" id="demo-faq" style="background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);">
    <div class="container py-4">
        <!-- Section Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Frequently Asked <span class="text-success">Questions</span></h2>
                <p class="lead text-muted mb-4" data-aos="fade-up" data-aos-delay="100">Everything you need to know about our demo process</p>
                <div class="d-flex justify-content-center">
                    <div class="divider bg-success" style="height: 4px; width: 70px; border-radius: 2px;" data-aos="zoom-in" data-aos-delay="150"></div>
                </div>
            </div>
        </div>
        
        <!-- FAQ Accordion -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="demoFaqAccordion">
                    <!-- Question 1 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="accordion-header">
                            <button class="accordion-button fw-semibold rounded-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">
                                How long does a typical demo session last?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#demoFaqAccordion">
                            <div class="accordion-body text-muted">
                                Our standard demo sessions are scheduled for 30 minutes, which provides enough time to showcase the key features of SalesQ relevant to your business. If needed, we can extend the session to address all your questions thoroughly. Our goal is to respect your time while ensuring you get all the information you need.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 2 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4" data-aos="fade-up" data-aos-delay="150">
                        <h3 class="accordion-header">
                            <button class="accordion-button fw-semibold rounded-4 shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Do I need to prepare anything before the demo?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#demoFaqAccordion">
                            <div class="accordion-body text-muted">
                                No specific preparation is required. However, it can be helpful to have a list of your current business challenges or specific features you're interested in exploring. This allows our product specialist to focus on the aspects of SalesQ most relevant to your needs. We also recommend having key stakeholders attend the demo if possible.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 3 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="accordion-header">
                            <button class="accordion-button fw-semibold rounded-4 shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Can I get a custom demo specific to my industry?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#demoFaqAccordion">
                            <div class="accordion-body text-muted">
                                Absolutely! We offer industry-specific demo scenarios for various business types including retail, manufacturing, wholesale, e-commerce, and service-based businesses. When filling out the demo request form, be sure to indicate your industry and specific requirements to help us tailor the demonstration to your unique needs.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 4 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4" data-aos="fade-up" data-aos-delay="250">
                        <h3 class="accordion-header">
                            <button class="accordion-button fw-semibold rounded-4 shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What happens after the demo session?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#demoFaqAccordion">
                            <div class="accordion-body text-muted">
                                After the demo, you'll receive a follow-up email with a summary of what was covered, answers to questions raised during the session, and relevant pricing information. Our team will also provide options for next steps, whether that's starting a free trial, scheduling a deeper technical discussion, or proceeding with implementation. We're here to support your decision-making process without any pressure.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 5 -->
                    <div class="accordion-item border-0 shadow-sm rounded-4" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="accordion-header">
                            <button class="accordion-button fw-semibold rounded-4 shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Can I invite my team members to the demo?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#demoFaqAccordion">
                            <div class="accordion-body text-muted">
                                Yes, we encourage you to invite relevant team members who will be using the system or involved in the decision-making process. You can either include their details in the 'Specific Requirements' field when submitting your demo request, or let us know after we've confirmed your appointment. Having key stakeholders present ensures everyone's questions are addressed directly.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Exit Intent Popup -->
<div id="exitIntentModal" class="modal fade" tabindex="-1" aria-labelledby="exitIntentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header border-0 bg-gradient" style="background: linear-gradient(135deg, #198754 0%, #20c997 100%);">
                <h5 class="modal-title text-white fw-bold" id="exitIntentModalLabel">
                    <i class="bi bi-clock-history me-2"></i>Wait! Don't Miss Out
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 text-center">
                <div class="mb-4">
                    <i class="bi bi-calendar-check text-success" style="font-size: 3rem;"></i>
                </div>
                <h4 class="fw-bold mb-3">Get a Quick 15-Minute Demo Instead</h4>
                <p class="text-muted mb-4">Not ready for a full demo? See SalesQ's key features in just 15 minutes. Perfect for busy schedules!</p>
                
                <div class="row g-3 mb-4">
                    <div class="col-4">
                        <div class="text-center">
                            <div class="bg-success bg-opacity-10 rounded-circle p-2 d-inline-flex mb-2" style="width: 50px; height: 50px;">
                                <i class="bi bi-lightning text-success fs-5 d-flex align-items-center"></i>
                            </div>
                            <small class="text-muted">Quick Setup</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center">
                            <div class="bg-success bg-opacity-10 rounded-circle p-2 d-inline-flex mb-2" style="width: 50px; height: 50px;">
                                <i class="bi bi-eye text-success fs-5 d-flex align-items-center"></i>
                            </div>
                            <small class="text-muted">Key Features</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center">
                            <div class="bg-success bg-opacity-10 rounded-circle p-2 d-inline-flex mb-2" style="width: 50px; height: 50px;">
                                <i class="bi bi-question-circle text-success fs-5 d-flex align-items-center"></i>
                            </div>
                            <small class="text-muted">Q&A Time</small>
                        </div>
                    </div>
                </div>
                
                <div class="d-grid gap-2">
                    <a href="#demo-request" class="btn btn-success rounded-pill py-2" data-bs-dismiss="modal">
                        <i class="bi bi-calendar-plus me-2"></i>Book 15-Min Quick Demo
                    </a>
                    <button type="button" class="btn btn-outline-secondary rounded-pill py-2" data-bs-dismiss="modal">
                        Maybe Later
                    </button>
                </div>
                
                <div class="mt-3">
                    <small class="text-muted">
                        <i class="bi bi-shield-check text-success me-1"></i>
                        No commitment required • Free consultation
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS animations with enhanced fallback
    try {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false,
            offset: 50
        });
        
        // Additional fallback to ensure content visibility
        setTimeout(function() {
            const aosElements = document.querySelectorAll('[data-aos]');
            aosElements.forEach(function(element) {
                if (window.getComputedStyle(element).opacity === '0') {
                    element.style.opacity = '1';
                    element.style.transform = 'translate(0) scale(1)';
                    element.style.visibility = 'visible';
                }
            });
        }, 1500);
    } catch (err) {
        console.warn('AOS not initialized: ', err);
        // Make sure elements are visible if AOS fails
        document.querySelectorAll('[data-aos]').forEach(el => {
            el.removeAttribute('data-aos');
            el.style.opacity = '1';
            el.style.visibility = 'visible';
        });
    }
    
    // Form validation
    const form = document.getElementById('demoForm');
    if (form) {
        form.addEventListener('submit', function(event) {
            // First check basic form validation
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            // Check if Turnstile CAPTCHA is completed
            const turnstileResponse = document.querySelector('[name="cf-turnstile-response"]');
            if (!turnstileResponse || !turnstileResponse.value) {
                event.preventDefault();
                event.stopPropagation();
                const turnstileError = document.getElementById('turnstile-error');
                if (turnstileError) {
                    turnstileError.style.display = 'block';
                }
                // Scroll to the CAPTCHA
                document.querySelector('.cf-turnstile').scrollIntoView({ behavior: 'smooth', block: 'center' });
                return false;
            } else {
                const turnstileError = document.getElementById('turnstile-error');
                if (turnstileError) {
                    turnstileError.style.display = 'none';
                }
            }
            
            form.classList.add('was-validated');
        });
    }
    
    // Auto-dismiss alert messages after a few seconds
    const alertElement = document.querySelector('.alert');
    if (alertElement) {
        setTimeout(() => {
            const bsAlert = new bootstrap.Alert(alertElement);
            bsAlert.close();
        }, 8000);
    }
    
    // Exit Intent Detection
    let exitIntentShown = false;
    let mouseLeaveTimer;
    
    function showExitIntent() {
        if (!exitIntentShown && !localStorage.getItem('exitIntentShown')) {
            exitIntentShown = true;
            localStorage.setItem('exitIntentShown', 'true');
            const exitModal = new bootstrap.Modal(document.getElementById('exitIntentModal'));
            exitModal.show();
        }
    }
    
    // Track mouse movement
    document.addEventListener('mouseleave', function(e) {
        if (e.clientY <= 0) {
            clearTimeout(mouseLeaveTimer);
            mouseLeaveTimer = setTimeout(showExitIntent, 500);
        }
    });
    
    document.addEventListener('mouseenter', function() {
        clearTimeout(mouseLeaveTimer);
    });
    
    // Also trigger on scroll up (mobile behavior)
    let lastScrollTop = 0;
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop < lastScrollTop && scrollTop < 100) {
            showExitIntent();
        }
        lastScrollTop = scrollTop;
    });
    
});
</script>

<?php
// Get the buffered content
$content = ob_get_clean();

// Include the layout
include __DIR__ . '/includes/layout.php';
?>
