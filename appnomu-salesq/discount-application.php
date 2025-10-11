<?php
session_start();
// Initialize error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Cloudflare Turnstile site key
$turnstile_site_key = '0x4AAAAAABky2ZVjyQirVHsh';

// Set current page for active navigation
$current_page = 'discount';
$page_title = 'Discount Application | AppNomu SalesQ';
$page_description = 'Apply for special discount pricing on AppNomu SalesQ for your organization.';

// Set page-specific keywords for SEO
$page_keywords = 'Business Software Discount Uganda, Non-profit Software Pricing, Educational Software Discount, AppNomu Special Pricing, Discounted CRM Solution, NGO Software Rates Africa, Student Software Discount, Affordable Business Tools';

// Additional CSS for this page
$additional_css = [
    'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;600;700&display=swap',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
    '/assets/css/legal-pages-modern.css'
];

// Additional JS for this page
$additional_js = [];

// Include database configuration first, as per best practices
if(file_exists('config/db_config.php')) {
    include_once 'config/db_config.php';
} else if(file_exists('../config/db_config.php')) {
    include_once '../config/db_config.php';
} else {
    // Fallback for relative path issues
    include_once dirname(__FILE__) . '/config/db_config.php';
}

// Include config only after db_config
if(file_exists('config/config.php')) {
    include_once 'config/config.php';
} else if(file_exists('../config/config.php')) {
    include_once '../config/config.php';
} else {
    // Fallback for relative path issues
    include_once dirname(__FILE__) . '/config/config.php';
}

// Include email configuration
if(file_exists('config/email_config.php')) {
    include_once 'config/email_config.php';
} else if(file_exists('../config/email_config.php')) {
    include_once '../config/email_config.php';
} else {
    // Fallback for relative path issues
    include_once dirname(__FILE__) . '/config/email_config.php';
}

// Start output buffering
ob_start();
?>

<style>
    /* Custom styles for the discount application page */
    body {
        font-family: "Lato", "Lexend", sans-serif;
        background-color: #f8f9fa;
    }
    
    .hero-section {
        background: #ffffff;
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23e9ecef' fill-opacity='0.2'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        color: #212529;
        padding: 120px 0 80px;
        margin-top: 0;
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    
    .hero-section h1 {
        font-size: 2.8rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }
    
    .hero-section p {
        font-size: 1.3rem;
        font-weight: 300;
        text-shadow: 0 1px 2px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .form-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
        padding: 30px;
        margin-bottom: 50px;
        position: relative;
        z-index: 1;
    }
    
    .form-card h2 {
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 25px;
        padding-bottom: 15px;
        position: relative;
        text-shadow: 1px 1px 1px rgba(0,0,0,0.05);
    }
    
    .form-card h2:after {
        content: "";
        position: absolute;
        width: 100px;
        height: 3px;
        background-color: #198754;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }
    
    .info-card {
        background: #f8f9fa;
        border-left: 4px solid #198754;
        padding: 15px 20px;
        border-radius: 10px;
    }
    
    .section-title {
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #f0f0f0;
        position: relative;
    }
    
    .section-title:after {
        content: "";
        position: absolute;
        width: 50px;
        height: 3px;
        background-color: #25d366;
        bottom: 0;
        left: 0;
    }
    
    .form-label {
        font-weight: 500;
        margin-bottom: 8px;
    }
    
    .required-field::after {
        content: " *";
        color: #e74c3c;
    }
    
    .form-text {
        font-size: 0.85rem;
        color: #6c757d;
        margin-top: -8px;
        margin-bottom: 15px;
    }

    .btn-submit {
        background-color: #198754 !important;
        color: white !important;
        padding: 14px 36px;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(25, 135, 84, 0.2);
    }

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(25, 135, 84, 0.25);
    }

    .btn-submit:active {
        transform: translateY(0);
    }

    .category-badge {
        display: inline-block;
        background-color: rgba(25, 135, 84, 0.1);
        color: #198754;
        padding: 6px 12px;
        font-size: 0.85rem;
        font-weight: 600;
        border-radius: 50px;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .info-card {
        background-color: rgba(25, 135, 84, 0.05);
        border-radius: 10px;
        padding: 20px;
        border-left: 4px solid #198754;
        margin-bottom: 30px;
    }

    .info-card h5 {
        color: #198754;
    }

    .alert-info h5 {
        color: #198754;
    }
    
    .form-group {
        margin-bottom: 24px;
    }
    
    /* Form field icons */
    .input-icon {
        position: relative;
    }
    
    .input-icon i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 15px;
        color: #6c757d;
    }
    
    .input-icon .form-control, 
    .input-icon .form-select {
        padding-left: 45px;
    }

    .section-title {
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 30px;
        font-weight: 700;
    }

    .section-title:after {
        content: "";
        position: absolute;
        width: 50px;
        height: 3px;
        background-color: #25d366;
        bottom: 0;
        left: 0;
    }
    
    /* Animation for success icon */
    @keyframes checkmark {
        0% { transform: scale(0); opacity: 0; }
        100% { transform: scale(1); opacity: 1; }
    }
    
    .success-checkmark {
        font-size: 3rem;
        color: #198754;
        animation: checkmark 0.5s ease-in-out;
    }
</style>

?>

<!-- AOS Animation Library -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- Fix for AOS animation visibility - Ensure content is visible even if AOS doesn't initialize -->
<style>
[data-aos] {
    opacity: 1 !important;
    transform: none !important;
    visibility: visible !important;
}

/* Pulse animation for buttons */
@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

.pulse-animation {
    animation: pulse 2s infinite;
}

/* Add a class to respect prefers-reduced-motion */
@media (prefers-reduced-motion: reduce) {
    .pulse-animation,
    [class*="animate__"],
    [data-aos] {
        animation: none !important;
        transition: none !important;
        transform: none !important;
    }
}

/* Focus visible polyfill for better keyboard focus indication */
:focus:not(:focus-visible) {
    outline: none;
}

:focus-visible {
    outline: 3px solid #198754;
    outline-offset: 3px;
    box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.25);
}

/* Card hover effects */
.hover-shadow {
    transition: all 0.3s ease;
}

.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
}

.transition-300 {
    transition: all 0.3s ease;
}
</style>

<!-- Cloudflare Turnstile Script -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden mb-5">
    <!-- Layered backgrounds for depth -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: linear-gradient(135deg, rgba(25, 135, 84, 0.03) 0%, rgba(25, 135, 84, 0.08) 100%);"></div>
    
    <!-- Wave Pattern Background -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNMCwxMDBjMzAsMCwyMCwtMzAgNTAsLTMwczIwLDMwLDUwLDMwczIwLC0zMCw1MCwtMzBzMjAsMzAsNTAsMzBzMjAsLTMwLDUwLC0zMHMyMCwzMCw1MCwzMFYwSDBaIiBmaWxsPSJyZ2JhKDI1LDEzNSw4NCwwLjA1KSIvPjwvc3ZnPg=='); background-size: 100% 200px; background-repeat: repeat; opacity: 0.4;"></div>
    
    <!-- Geometric Elements for Depth -->
    <div class="position-absolute" style="top: 20%; right: 10%; width: 150px; height: 150px; background: rgba(25, 135, 84, 0.03); border-radius: 40px; transform: rotate(25deg);"></div>
    <div class="position-absolute" style="bottom: 30%; left: 5%; width: 80px; height: 80px; background: rgba(25, 135, 84, 0.05); border-radius: 20px; transform: rotate(-15deg);"></div>
    <div class="position-absolute" style="top: 30%; left: 15%; width: 60px; height: 60px; background: rgba(25, 135, 84, 0.03); border-radius: 30px;"></div>
    
    <!-- SVG Wave Overlay -->
    <div class="position-absolute bottom-0 start-0 w-100">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80"><path fill="#ffffff" fill-opacity="1" d="M0,32L48,42.7C96,53,192,75,288,74.7C384,75,480,53,576,42.7C672,32,768,32,864,37.3C960,43,1056,53,1152,53.3C1248,53,1344,43,1392,37.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    <!-- Custom edge for clean separation -->
    <div class="position-absolute bottom-0 start-0 w-100" style="height: 2px; background-color: #ffffff; z-index: 5;"></div>
    
    <div class="container position-relative">
        <div class="row py-5">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                <h1 class="display-4 fw-bold mb-4 text-dark">Discount Application<br><span style="font-size: 0.9em;">Special Pricing for Eligible Organizations</span></h1>
                <p class="lead mb-4 text-dark opacity-75">Apply for special pricing for startups, nonprofits, educational institutions and qualify for up to 40% off on AppNomu SalesQ services.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="#discountForm" class="btn btn-success btn-lg rounded-pill px-4 shadow-sm pulse-animation">
                        <i class="fas fa-file-alt me-2"></i> Complete Application
                    </a>
                    <a href="/contact" class="btn btn-outline-success btn-lg rounded-pill px-4">
                        <i class="fas fa-question-circle me-2"></i> Have Questions?
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Section -->
<section class="form-section position-relative" style="z-index: 2; margin-top: 2rem;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-card shadow-lg">
                    <!-- Eligibility Information -->
                    <div class="info-card mb-4">
                        <h5 class="mb-3"><i class="fas fa-info-circle me-2"></i>Eligibility Information</h5>
                        <p class="mb-2">The following organizations may qualify for special discounts:</p>
                        <span class="category-badge"><i class="fas fa-rocket me-1"></i> Startups (20-30%)</span>
                        <span class="category-badge"><i class="fas fa-hand-holding-heart me-1"></i> Nonprofits (30-40%)</span>
                        <span class="category-badge"><i class="fas fa-graduation-cap me-1"></i> Educational (25-35%)</span>
                        <span class="category-badge"><i class="fas fa-globe-africa me-1"></i> African SMEs (15-25%)</span>
                        <p class="mt-3 mb-0">Discounts are applied based on organization type, size, location, and other factors. Our team will review your application and respond within 2-3 business days.</p>
                        <p class="mb-0"><strong>Note:</strong> All applicants must be duly registered to be considered for this discount.</p>
                    </div>
                    
                    <!-- Status Messages -->
                    <?php if (isset($_GET['status'])): ?>
                        <?php if ($_GET['status'] == 'success' && isset($_SESSION['success_message'])): ?>
                            <div class="alert alert-success mb-4">
                                <div class="text-center mb-3">
                                    <i class="fas fa-check-circle success-checkmark"></i>
                                </div>
                                <h4 class="alert-heading text-center">Application Submitted Successfully!</h4>
                                <p class="text-center">
                                    <?php 
                                        echo $_SESSION['success_message']; 
                                        // Clear the session message after displaying
                                        unset($_SESSION['success_message']);
                                    ?>
                                </p>
                            </div>
                        <?php elseif ($_GET['status'] == 'error'): ?>
                            <div class="alert alert-danger mb-4">
                                <div class="text-center mb-3">
                                    <i class="fas fa-exclamation-triangle fa-3x text-danger"></i>
                                </div>
                                <h4 class="alert-heading text-center">Submission Error</h4>
                                <p class="text-center">
                                    <?php 
                                        if (isset($_SESSION['error_message'])) {
                                            echo $_SESSION['error_message'];
                                            unset($_SESSION['error_message']);
                                        } else {
                                            echo "An error occurred while processing your application. Please try again or contact us directly.";
                                        }
                                    ?>
                                </p>
                                <div class="text-center mt-3">
                                    <button type="button" class="btn btn-outline-success" onclick="window.location.href='discount-application.php'">
                                        <i class="fas fa-redo me-2"></i>Try Again
                                    </button>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                    <form action="process_discount.php" method="POST" id="discountForm" class="needs-validation" novalidate>
                        <!-- Organization Information -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <h5 class="section-title" id="org-info-heading">Organization Information</h5>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="organization_name" class="form-label required-field">Organization Name</label>
                                    <div class="input-icon">
                                        <i class="fas fa-building" aria-hidden="true"></i>
                                        <input type="text" class="form-control" id="organization_name" name="organization_name" required aria-required="true" aria-describedby="org-name-error">
                                    </div>
                                    <div class="invalid-feedback" id="org-name-error">Please enter your organization name.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="business_type" class="form-label required-field">Organization Type</label>
                                    <div class="input-icon">
                                        <i class="fas fa-briefcase" aria-hidden="true"></i>
                                        <select class="form-select" id="business_type" name="business_type" required aria-required="true" aria-describedby="business-type-error">
                                            <option value="" selected disabled>Select Organization Type</option>
                                            <option value="startup">Startup (Less than 3 years old)</option>
                                            <option value="nonprofit">Nonprofit Organization</option>
                                            <option value="educational">Educational Institution</option>
                                            <option value="government">Government Entity</option>
                                            <option value="sme_africa">Small Business in Africa</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback" id="business-type-error">Please select your organization type.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country" class="form-label required-field">Country</label>
                                    <div class="input-icon">
                                        <i class="fas fa-globe"></i>
                                        <select class="form-select" id="country" name="country" required>
                                            <option value="" selected disabled>Select Country</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="United States">United States</option>
                                            <option value="India">India</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">Please select your country.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="organization_size" class="form-label required-field">Organization Size</label>
                                    <div class="input-icon">
                                        <i class="fas fa-users"></i>
                                        <select class="form-select" id="organization_size" name="organization_size" required>
                                            <option value="" selected disabled>Select Size</option>
                                            <option value="1-5">1-5 employees</option>
                                            <option value="6-20">6-20 employees</option>
                                            <option value="21-50">21-50 employees</option>
                                            <option value="51-100">51-100 employees</option>
                                            <option value="101-500">101-500 employees</option>
                                            <option value="500+">500+ employees</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">Please select your organization size.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="registration_number" class="form-label required-field">Registration/License Number</label>
                                    <div class="input-icon">
                                        <i class="fas fa-id-card"></i>
                                        <input type="text" class="form-control" id="registration_number" name="registration_number" required>
                                    </div>
                                    <div class="invalid-feedback">Please enter your organization's registration number.</div>
                                    <div class="form-text">Business registration, nonprofit registration, or educational license number.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="website" class="form-label">Website (if available)</label>
                                    <div class="input-icon">
                                        <i class="fas fa-globe"></i>
                                        <input type="url" class="form-control" id="website" name="website" placeholder="https://yourdomain.com">
                                    </div>
                                    <div class="invalid-feedback">Please enter a valid URL.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Contact Information -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <h5 class="section-title" id="contact-info-heading">Contact Information</h5>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="full_name" class="form-label required-field">Your Full Name</label>
                                    <div class="input-icon">
                                        <i class="fas fa-user"></i>
                                        <input type="text" class="form-control" id="full_name" name="full_name" required>
                                    </div>
                                    <div class="invalid-feedback">Please enter your full name.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="job_title" class="form-label required-field">Your Job Title</label>
                                    <div class="input-icon">
                                        <i class="fas fa-briefcase"></i>
                                        <input type="text" class="form-control" id="job_title" name="job_title" required>
                                    </div>
                                    <div class="invalid-feedback">Please enter your job title.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="business_email" class="form-label required-field">Business Email</label>
                                    <div class="input-icon">
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" class="form-control" id="business_email" name="business_email" required>
                                    </div>
                                    <div class="invalid-feedback email-error">Please enter a valid business email address.</div>
                                    <div class="form-text">We cannot accept applications from personal email addresses (Gmail, Yahoo, etc).</div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="form-label required-field">Phone Number</label>
                                    <div class="input-icon">
                                        <i class="fas fa-phone"></i>
                                        <input type="tel" class="form-control" id="phone" name="phone" required>
                                    </div>
                                    <div class="invalid-feedback">Please enter your phone number.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Service Information -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <h5 class="section-title" id="service-info-heading">Service Information</h5>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="service_plan" class="form-label required-field">Preferred Plan</label>
                                    <div class="input-icon">
                                        <i class="fas fa-th-list"></i>
                                        <select class="form-select" id="service_plan" name="service_plan" required>
                                            <option value="" selected disabled>Select Plan</option>
                                            <option value="Basic">Basic Plan</option>
                                            <option value="Standard">Standard Plan</option>
                                            <option value="Premium">Premium Plan</option>
                                            <option value="Enterprise">Enterprise Plan</option>
                                            <option value="Not Sure">Not Sure</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">Please select a preferred plan.</div>
                                    <div class="form-text">See our <a href="pricing.php" target="_blank">pricing page</a> for plan details.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="users" class="form-label required-field">Number of Users</label>
                                    <div class="input-icon">
                                        <i class="fas fa-users"></i>
                                        <select class="form-select" id="users" name="users" required>
                                            <option value="" selected disabled>Select Number of Users</option>
                                            <option value="1-5">1-5 users</option>
                                            <option value="6-10">6-10 users</option>
                                            <option value="11-25">11-25 users</option>
                                            <option value="26-50">26-50 users</option>
                                            <option value="51-100">51-100 users</option>
                                            <option value="100+">100+ users</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">Please select the number of users.</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="needs" class="form-label required-field">How will AppNomu SalesQ help your organization?</label>
                                    <textarea class="form-control" id="needs" name="needs" rows="4" required aria-required="true" aria-describedby="needs-error needs-help"></textarea>
                                    <div class="invalid-feedback" id="needs-error">Please tell us how AppNomu SalesQ will help your organization.</div>
                                    <div class="form-text" id="needs-help">Your response helps us understand how we can best support your specific needs.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Cloudflare Turnstile Widget -->
                        <div class="row mb-2">
                            <div class="col-12">
                                <div class="mb-2 d-flex justify-content-start">
                                    <div class="cf-turnstile" data-sitekey="<?php echo $turnstile_site_key; ?>"></div>
                                </div>
                                <div class="invalid-feedback" id="turnstile-error" style="display: none;">
                                    Please complete the CAPTCHA verification.
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-submit" aria-label="Submit discount application form">
                                <i class="fas fa-paper-plane me-2" aria-hidden="true"></i>Submit Application
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Make form sections navigable landmarks for screen readers
document.addEventListener('DOMContentLoaded', function() {
    // Add ARIA landmark roles to major sections
    const formSection = document.querySelector('.form-section');
    if (formSection) formSection.setAttribute('role', 'form');
    
    // Add proper ARIA labels to form sections
    document.querySelectorAll('.section-title').forEach(title => {
        const section = title.closest('.row');
        if (section && title.id) {
            section.setAttribute('role', 'region');
            section.setAttribute('aria-labelledby', title.id);
        }
    });
    
    // Make all form icons hidden from screen readers
    document.querySelectorAll('.input-icon i').forEach(icon => {
        icon.setAttribute('aria-hidden', 'true');
    });
    
    // Ensure required fields have proper aria attributes
    document.querySelectorAll('input[required], select[required], textarea[required]').forEach(field => {
        field.setAttribute('aria-required', 'true');
    });
    
    // Add screen reader text for required field indicators
    document.querySelectorAll('.required-field').forEach(label => {
        // Check if the label already has screen reader text
        if (!label.querySelector('.sr-only')) {
            const srText = document.createElement('span');
            srText.className = 'sr-only';
            srText.textContent = ' (required)';
            label.appendChild(srText);
        }
    });

// Proven fix for AOS content visibility issues
    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });

    // Fallback for AOS content visibility
    setTimeout(function() {
        document.querySelectorAll('[data-aos]').forEach(function(el) {
            el.style.opacity = '1';
            el.style.transform = 'none';
            el.style.visibility = 'visible';
        });
    }, 1000);
});
</script>

<?php
// Get the buffered content
$content = ob_get_clean();

// Include the layout file which contains both header and footer
if(file_exists('includes/layout.php')) {
    include 'includes/layout.php';
} else if(file_exists('../includes/layout.php')) {
    include '../includes/layout.php';
} else {
    // Fallback for relative path issues
    include dirname(__FILE__) . '/includes/layout.php';
}
?>

<script>
    // Initialize AOS animation library
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-out',
                once: true,
                offset: 100
            });
        } else {
            // Fallback if AOS is not loaded - show all elements that would be animated
            document.querySelectorAll('[data-aos]').forEach(el => {
                el.style.opacity = '1';
                el.style.transform = 'none';
                el.removeAttribute('data-aos');
            });
        }
        
        const form = document.getElementById('discountForm');
        const emailInput = document.getElementById('business_email');
        const businessTypeSelect = document.getElementById('business_type');
        
        // Generic email domains to check against
        const genericDomains = [
            'gmail.com', 'yahoo.com', 'hotmail.com', 'outlook.com', 
            'aol.com', 'icloud.com', 'mail.com', 'proton.me',
            'protonmail.com', 'zoho.com', 'yandex.com', 'live.com',
            'msn.com', 'me.com', 'inbox.com', 'gmx.com'
        ];
        
        emailInput.addEventListener('input', function() {
            const email = this.value;
            if (email.includes('@')) {
                const domain = email.split('@')[1];
                
                if (domain && genericDomains.includes(domain.toLowerCase())) {
                    this.setCustomValidity('Please use your business email address');
                    this.classList.add('is-invalid');
                    document.querySelector('.email-error').textContent = 'Personal email addresses are not accepted. Please use your business email.';
                } else {
                    this.setCustomValidity('');
                    this.classList.remove('is-invalid');
                }
            }
        });

        // Show/hide additional fields based on business type
        businessTypeSelect.addEventListener('change', function() {
            const selectedType = this.value;
            // You can add logic here to show/hide conditional fields
            // For example, showing additional fields for non-profits
        });
        
        // Enhance form validation with better screen reader support
        form.addEventListener('submit', function(event) {
            // Basic form validation
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                
                // Find all invalid elements
                const invalidElements = form.querySelectorAll(':invalid');
                const invalidCount = invalidElements.length;
                
                // Find the first invalid element and focus it
                if (invalidElements.length > 0) {
                    const firstInvalid = invalidElements[0];
                    firstInvalid.focus();
                    
                    // Scroll to the element
                    firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    
                    // Announce to screen readers
                    const errorMessage = `Form has ${invalidCount} ${invalidCount === 1 ? 'error' : 'errors'}. Please correct and try again.`;
                    
                    // Use the live region in the main layout for announcement
                    const announcer = document.getElementById('sr-announcements');
                    if (announcer) {
                        announcer.textContent = '';
                        setTimeout(() => {
                            announcer.textContent = errorMessage;
                        }, 50);
                    }
                }
            }
            
            // Check if Turnstile validation was completed
            const turnstileResponse = document.querySelector('[name="cf-turnstile-response"]');
            if (!turnstileResponse || !turnstileResponse.value) {
                event.preventDefault();
                event.stopPropagation();
                document.getElementById('turnstile-error').style.display = 'block';
                
                // Scroll to Turnstile widget if it's the only validation error
                if (form.checkValidity()) {
                    const turnstileWidget = document.querySelector('.cf-turnstile');
                    if (turnstileWidget) {
                        turnstileWidget.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }
            } else {
                document.getElementById('turnstile-error').style.display = 'none';
            }
            
            form.classList.add('was-validated');
        });
        
        // Add animation to form card (accessible way)
        const formCard = document.querySelector('.form-card');
        if (formCard) {
            setTimeout(() => {
                formCard.style.opacity = '1';
            }, 100);
            
            // Make card keyboard navigable
            formCard.tabIndex = '-1';
        }
        
        // Add keyboard navigation support for all interactive elements
        document.querySelectorAll('a, button, input, select, textarea, [tabindex]').forEach(el => {
            el.addEventListener('keydown', function(e) {
                // Add keyboard support for Enter key on clickable elements
                if (e.key === 'Enter' && (this.tagName !== 'BUTTON' && this.tagName !== 'INPUT' && this.tagName !== 'SELECT' && this.tagName !== 'TEXTAREA')) {
                    e.preventDefault();
                    this.click();
                }
            });
        });
        
        // Add special keyboard handling for select elements
        document.querySelectorAll('select').forEach(select => {
            select.addEventListener('keydown', function(e) {
                // Support arrow keys for navigation in dropdowns
                if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
                    this.click();
                }
            });
        });
    });
</script>
