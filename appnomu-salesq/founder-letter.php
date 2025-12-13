<?php
// Load configuration
require_once __DIR__ . '/config.php';

// Set the current page for navigation highlighting
$current_page = 'founder-letter';

// Set page metadata
$page_title = 'A Letter from Our Founder - AppNomu SalesQ';
$page_description = 'An important message from Bahati Asher Faith, Founder & CEO of AppNomu SalesQ, about our platform evolution and new pricing structure.';

// Set page-specific keywords for SEO
$page_keywords = 'AppNomu SalesQ Founder Letter, Bahati Asher Faith, Pricing Update, Enterprise Plan, Uganda CRM, Business Software Evolution';

// Start output buffering
ob_start();
?>

<!-- Comprehensive Mobile Responsive CSS -->
<style>
/* Mobile Tablet Styles */
@media (max-width: 768px) {
    /* Hero Section */
    .hero-section {
        padding-top: 80px !important;
        padding-bottom: 60px !important;
    }
    .hero-section .display-3 {
        font-size: 2.2rem !important;
        line-height: 1.3 !important;
    }
    .hero-section .lead {
        font-size: 1.1rem !important;
        padding: 0 15px;
    }
    .founder-image-container img {
        width: 100px !important;
        height: 100px !important;
    }
    .founder-image-container .position-absolute {
        width: 30px !important;
        height: 30px !important;
    }
    
    /* Letter Content */
    .letter-section {
        padding: 40px 0 !important;
    }
    .letter-content {
        padding: 30px 20px !important;
        margin: 0 10px !important;
    }
    
    /* Plan Cards - Fix alignment */
    .plan-card {
        margin-bottom: 25px !important;
        padding: 20px !important;
    }
    .plan-card h4 {
        font-size: 1.3rem !important;
        line-height: 1.4 !important;
    }
    .plan-card .d-flex {
        flex-direction: column !important;
        text-align: center !important;
    }
    .plan-card .d-flex .me-3 {
        margin-right: 0 !important;
        margin-bottom: 10px !important;
        align-self: center;
    }
    
    /* Add-on Services - Fix grid layout */
    .addon-services .row.g-3 {
        margin: 0 !important;
    }
    .addon-services .col-md-6 {
        padding: 0 5px !important;
        margin-bottom: 15px !important;
    }
    .addon-card {
        padding: 15px !important;
        text-align: center;
    }
    .addon-card h5 {
        font-size: 1.1rem !important;
    }
    
    /* Payment Integrations - Fix alignment */
    .payment-integration {
        margin-bottom: 20px !important;
        padding: 15px !important;
    }
    .future-feature .row.g-3 {
        margin: 0 !important;
    }
    .future-feature .col-md-4 {
        padding: 0 5px !important;
        margin-bottom: 15px !important;
    }
    
    /* Commitment Cards */
    .commitment-card {
        text-align: center !important;
        margin-bottom: 20px !important;
    }
    
    /* CTA Section */
    .d-flex.gap-3 {
        flex-direction: column !important;
        gap: 15px !important;
    }
    .btn-lg {
        padding: 12px 25px !important;
        font-size: 1rem !important;
        width: 100% !important;
        max-width: 300px !important;
        margin: 0 auto !important;
    }
    
    /* Typography */
    h2 {
        font-size: 1.8rem !important;
        text-align: center !important;
        margin-bottom: 20px !important;
    }
    h3 {
        font-size: 1.5rem !important;
        text-align: center !important;
        margin-bottom: 15px !important;
    }
    h4 {
        font-size: 1.3rem !important;
    }
    h5 {
        font-size: 1.1rem !important;
    }
    
    /* Lists and Content */
    .list-unstyled li {
        margin-bottom: 15px !important;
        padding: 0 10px !important;
    }
    
    /* Background Elements */
    .future-feature {
        margin: 0 10px !important;
        padding: 20px 15px !important;
    }
}

/* Mobile Phone Styles */
@media (max-width: 576px) {
    /* Hero Section */
    .hero-section {
        padding-top: 60px !important;
        padding-bottom: 40px !important;
    }
    .hero-section .display-3 {
        font-size: 1.8rem !important;
    }
    .hero-section .lead {
        font-size: 1rem !important;
    }
    
    /* Letter Content */
    .letter-content {
        padding: 20px 15px !important;
        margin: 0 5px !important;
    }
    .founder-image-container img {
        width: 80px !important;
        height: 80px !important;
    }
    
    /* Plan Cards - Extra compact */
    .plan-card {
        padding: 15px !important;
        margin-bottom: 20px !important;
    }
    .plan-card h4 {
        font-size: 1.1rem !important;
    }
    
    /* Add-on Cards - Stack properly */
    .addon-services .col-md-6 {
        width: 100% !important;
        padding: 0 !important;
        margin-bottom: 10px !important;
    }
    .addon-card {
        padding: 12px !important;
    }
    
    /* Payment Integrations - Single column */
    .future-feature .col-md-4 {
        width: 100% !important;
        padding: 0 !important;
        margin-bottom: 10px !important;
    }
    
    /* Buttons */
    .btn-lg {
        padding: 10px 20px !important;
        font-size: 0.9rem !important;
        width: 100% !important;
    }
    
    /* Typography - More compact */
    h2 {
        font-size: 1.5rem !important;
    }
    h3 {
        font-size: 1.3rem !important;
    }
    h4 {
        font-size: 1.1rem !important;
    }
    h5 {
        font-size: 1rem !important;
    }
    
    /* Content spacing */
    .future-feature {
        margin: 0 5px !important;
        padding: 15px 10px !important;
    }
    
    /* Lists */
    .list-unstyled li {
        padding: 0 5px !important;
        font-size: 0.9rem !important;
    }
}

/* Fix Bootstrap grid issues on mobile */
@media (max-width: 768px) {
    .row.g-3 > * {
        padding-left: 5px !important;
        padding-right: 5px !important;
    }
    .row.g-4 > * {
        padding-left: 5px !important;
        padding-right: 5px !important;
    }
    .col-md-4, .col-md-6 {
        flex: 0 0 100% !important;
        max-width: 100% !important;
    }
}

/* CRITICAL Mobile Menu Visibility Fixes */
@media (max-width: 991.98px) {
    /* Force header to be visible with highest priority */
    header.fixed-top {
        z-index: 99999 !important;
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        background: rgba(255, 255, 255, 0.95) !important;
        backdrop-filter: blur(10px) !important;
        border-bottom: 1px solid rgba(0,0,0,0.1) !important;
    }
    
    /* Ensure navbar is always visible */
    .navbar {
        z-index: 99998 !important;
        position: relative !important;
        background: transparent !important;
    }
    
    /* Fix navbar toggler visibility with strong overrides */
    .navbar-toggler,
    .navbar-toggler.custom-toggler {
        z-index: 99997 !important;
        position: relative !important;
        border: 2px solid #198754 !important;
        padding: 6px 10px !important;
        background: white !important;
        border-radius: 4px !important;
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
    }
    
    /* Make toggler icon more visible */
    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23198754' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='m4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        width: 20px !important;
        height: 20px !important;
    }
    
    /* Ensure navbar collapse is visible with strong overrides */
    .navbar-collapse {
        z-index: 99996 !important;
        background: white !important;
        border-radius: 8px !important;
        box-shadow: 0 8px 30px rgba(0,0,0,0.15) !important;
        margin-top: 15px !important;
        padding: 20px !important;
        border: 1px solid rgba(0,0,0,0.1) !important;
        position: relative !important;
    }
    
    /* Fix navbar brand visibility */
    .navbar-brand {
        z-index: 99995 !important;
        position: relative !important;
        color: #0d6efd !important;
    }
    
    /* Style nav links for mobile */
    .navbar-nav .nav-link {
        color: #333 !important;
        padding: 10px 15px !important;
        border-bottom: 1px solid rgba(0,0,0,0.1) !important;
    }
    
    .navbar-nav .nav-link:hover {
        background: #f8f9fa !important;
        color: #198754 !important;
    }
    
    /* Ensure hero section doesn't overlap menu */
    .hero-section {
        margin-top: 80px !important;
        padding-top: 40px !important;
    }
    
    /* Fix any position absolute elements that might cover menu */
    .position-absolute {
        z-index: 1 !important;
    }
    
    /* Ensure floating particles don't interfere */
    .hero-section .position-absolute {
        z-index: 1 !important;
        pointer-events: none !important;
    }
    
    /* Override any conflicting styles */
    * {
        position: relative;
    }
    
    header.fixed-top * {
        position: relative !important;
    }
    
    /* Force visibility of header elements (except collapse) */
    header.fixed-top,
    header.fixed-top .navbar,
    header.fixed-top .navbar-toggler,
    header.fixed-top .navbar-brand {
        visibility: visible !important;
        opacity: 1 !important;
    }
    
    /* Let Bootstrap handle navbar-collapse display naturally */
    .navbar-collapse.show {
        animation: slideDown 0.3s ease !important;
    }
    
    .navbar-collapse.collapsing {
        transition: all 0.35s ease !important;
        overflow: hidden !important;
    }
    
    /* Animation for smooth menu appearance */
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
}

/* Additional mobile navigation fixes */
@media (max-width: 576px) {
    .navbar-toggler {
        padding: 6px 10px !important;
        font-size: 1.1rem !important;
    }
    
    .hero-section {
        padding-top: 90px !important;
    }
}
</style>

<!-- Mobile Menu JavaScript Fix -->
<script>
// Simple Bootstrap-compatible mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (navbarToggler && navbarCollapse) {
        // Ensure menu starts closed
        navbarCollapse.classList.remove('show');
        navbarToggler.setAttribute('aria-expanded', 'false');
        
        // Close menu when clicking on any nav link
        const allNavLinks = navbarCollapse.querySelectorAll('.nav-link, .dropdown-item');
        allNavLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // Close the menu immediately when a link is clicked
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
            });
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            const isClickInsideNav = navbarToggler.contains(e.target) || navbarCollapse.contains(e.target);
            
            if (!isClickInsideNav && navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
            }
        });
    }
});
</script>

<!-- Hero Section with Enhanced Professional Design -->
<section class="hero-section position-relative overflow-hidden" style="padding-top: 120px; padding-bottom: 100px;">
    <!-- Subtle Background Elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <!-- Minimal Floating Particles -->
        <div class="position-absolute" style="top: 20%; left: 8%; width: 4px; height: 4px; background: rgba(25,135,84,0.1); border-radius: 50%; animation: float 8s infinite ease-in-out;"></div>
        <div class="position-absolute" style="top: 80%; right: 12%; width: 3px; height: 3px; background: rgba(25,135,84,0.08); border-radius: 50%; animation: float 12s infinite ease-in-out;"></div>
        
        <!-- Wave Pattern -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; bottom: 0; left: 0; opacity: 0.05;">
            <path fill="#198754" fill-opacity="0.1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,250.7C960,235,1056,181,1152,165.3C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
    
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="hero-content" data-aos="fade-up" data-aos-duration="800">
                    <span class="badge bg-success bg-opacity-10 text-success fw-bold px-4 py-2 rounded-pill mb-4 d-inline-block border border-success border-opacity-25" style="font-size: 0.95rem;">📢 Important Message from Our Founder</span>
                    
                    <h1 class="display-3 fw-bold mb-4 text-dark" style="line-height: 1.2;">A Personal Letter from <br><span class="text-success position-relative">Bahati Asher Faith
                        <svg class="position-absolute" style="bottom: -10px; left: 50%; transform: translateX(-50%); width: 100%; height: 12px;" viewBox="0 0 300 12">
                            <path d="M5,6 Q150,0 295,6" stroke="#198754" stroke-width="3" fill="none" opacity="0.3"/>
                        </svg>
                    </span></h1>
                    
                    <p class="lead mb-5 text-dark" style="font-size: 1.3rem; font-weight: 300; max-width: 600px; margin: 0 auto;">Founder & CEO of AppNomu SalesQ<br><small class="text-muted">Empowering African Businesses Since 2023</small></p>
                    
                    <div class="founder-image-container mb-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="position-relative d-inline-block">
                            <div class="founder-image-bg position-absolute w-100 h-100 rounded-circle" style="background: linear-gradient(135deg, rgba(25,135,84,0.1) 0%, rgba(25,135,84,0.05) 100%); transform: scale(1.1);"></div>
                            <img src="https://appnomu.com/landing/assets/images/Bahati%20Asher.jpg" alt="Bahati Asher Faith, Founder & CEO" class="rounded-circle shadow-lg position-relative" style="width: 140px; height: 140px; object-fit: cover; border: 5px solid white; box-shadow: 0 10px 30px rgba(25,135,84,0.2) !important;" onerror="this.src='https://placehold.co/140x140/198754/fff?text=B&font=Lexend'">
                            <div class="position-absolute bottom-0 end-0 bg-success rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border: 3px solid white;">
                                <i class="bi bi-check-lg text-white fs-5"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="scroll-indicator mt-5" data-aos="fade-up" data-aos-delay="600">
                        <p class="small text-muted mb-2">Read the full message below</p>
                        <i class="bi bi-chevron-down text-success fs-4 animate-bounce"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Letter Content Section -->
<section class="letter-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Letter Header -->
                <div class="letter-header text-center mb-5">
                    <p class="text-muted mb-0">Date: <?= date('F j, Y') ?></p>
                </div>

                <!-- Letter Body -->
                <div class="letter-body p-5 rounded-3 shadow-lg position-relative overflow-hidden" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.08); border-left: 6px solid #198754; font-size: 1.1rem; line-height: 1.8;" data-aos="fade-up" data-aos-delay="200">
                    <!-- Decorative Elements -->
                    <div class="position-absolute top-0 end-0 opacity-10">
                        <i class="bi bi-quote text-success" style="font-size: 8rem;"></i>
                    </div>
                    
                    <div class="letter-body mb-5">
                        <p class="mb-4">Dear Valued AppNomu SalesQ Community,</p>
                        
                        <p class="mb-4">I hope this message finds you thriving in your business endeavors. As we approach the end of 2025, I wanted to personally reach out to share some important updates about AppNomu SalesQ and our journey forward.</p>
                        
                        <p class="mb-4">Since launching AppNomu SalesQ, we have been overwhelmed by the incredible response from businesses across Uganda and beyond. Your trust, feedback, and success stories have been the driving force behind our continuous innovation and improvement.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Evolution Section -->
<section class="evolution-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Our <span class="text-success">Evolution</span></h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
            <p class="lead mt-3 text-secondary">From beta to production-ready platform serving African businesses.</p>
        </div>

        <div class="row g-4">
            <!-- Platform Stability -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="evolution-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-shield-check text-success fs-3"></i>
                        </div>
                        <h4>Enhanced Stability</h4>
                        <p>Transformed from beta to enterprise-grade platform with robust performance and reliability for your business operations.</p>
                    </div>
                </div>
            </div>

            <!-- Advanced Features -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="evolution-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-graph-up text-success fs-3"></i>
                        </div>
                        <h4>Advanced Analytics</h4>
                        <p>Comprehensive reporting and analytics capabilities to help you make data-driven business decisions and track growth.</p>
                    </div>
                </div>
            </div>

            <!-- User Experience -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="evolution-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-heart text-success fs-3"></i>
                        </div>
                        <h4>Better Experience</h4>
                        <p>Improved user interface design and customer support system based on your valuable feedback and suggestions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New Pricing Structure Section -->
<section class="pricing-section py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>New <span class="text-success">Pricing Structure</span></h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
            <p class="lead mt-3 text-secondary">Transparent, fair, and designed for sustainable growth.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="pricing-image-container position-relative">
                    <img src="https://placehold.co/600x400/e9ecef/198754?text=Pricing&font=Lexend" alt="Pricing illustration" class="img-fluid rounded-3 shadow" style="width: 100%; height: auto;">
                    <div class="position-absolute" style="top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(25,135,84,0.1); border-radius: 50%; z-index: -1;"></div>
                    <div class="position-absolute" style="bottom: -30px; left: -30px; width: 150px; height: 150px; background: rgba(25,135,84,0.05); border-radius: 50%; z-index: -1;"></div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="accordion pricing-accordion" id="pricingAccordion" data-aos="fade-left" data-aos-delay="200">
                    <!-- Free Plan -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#pricingOne" aria-expanded="true" aria-controls="pricingOne">
                                <i class="bi bi-heart-fill text-primary me-2"></i> Free Plan - Always Available
                            </button>
                        </h2>
                        <div id="pricingOne" class="accordion-collapse collapse show" data-bs-parent="#pricingAccordion">
                            <div class="accordion-body">
                                <p class="mb-3"><strong>Core features remain accessible to everyone:</strong></p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Up to 1,000 products</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Up to 1,000 customers</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Up to 100 sales receipts per month</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Customer support</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Basic earnings reports</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Premium Plan -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pricingTwo" aria-expanded="false" aria-controls="pricingTwo">
                                <i class="bi bi-gem text-primary me-2"></i> Premium Plan - $15/month
                            </button>
                        </h2>
                        <div id="pricingTwo" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                            <div class="accordion-body">
                                <p class="mb-3"><strong>Perfect for growing businesses:</strong></p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Up to 10,000 products</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Up to 10,000 customers</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Up to 1,000 sales receipts per month</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Priority customer support</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Sales & expense reports</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Basic email marketing</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> 450 SMS per month included</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Enterprise Plan -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pricingThree" aria-expanded="false" aria-controls="pricingThree">
                                <i class="bi bi-star-fill text-success me-2"></i> Complete Business Suite - UGX 95,000/month
                            </button>
                        </h2>
                        <div id="pricingThree" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                            <div class="accordion-body">
                                <p class="mb-3"><strong>Unlimited access to all platform features:</strong></p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Unlimited products, customers, and sales</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> VIP customer support</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Advanced email marketing</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> P&L reports & AI business insights</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> 1,000 SMS per month included</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> All current and future premium features</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Add-on Services -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pricingFour" aria-expanded="false" aria-controls="pricingFour">
                                <i class="bi bi-plus-circle text-success me-2"></i> Add-on Services
                            </button>
                        </h2>
                        <div id="pricingFour" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                            <div class="accordion-body">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                            <div>
                                                <strong>📧 SMTP Email Setup</strong>
                                                <br><small class="text-muted">Professional email marketing configuration</small>
                                            </div>
                                            <span class="fw-bold">UGX 56,000 <small class="text-muted">(one-time)</small></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                            <div>
                                                <strong>🤖 AI Email Composer</strong>
                                                <br><small class="text-muted">AI-powered email generation & personalization</small>
                                            </div>
                                            <span class="fw-bold">UGX 25,000 <small class="text-muted">/month</small></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <strong>📱 Bulk SMS Services</strong>
                                                <br><small class="text-muted">UGX 30 per SMS (160 characters)</small>
                                            </div>
                                            <span class="fw-bold">Pay as you use</span>
                                        </div>
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

<!-- Future Features Section -->
<section class="future-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Exciting <span class="text-success">Future</span></h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
            <p class="lead mt-3 text-secondary">Payment integrations coming March 2026.</p>
        </div>

        <div class="row g-4">
            <!-- Payment Integrations -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4 text-center">
                        <div class="future-icon bg-primary-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-credit-card text-primary fs-3"></i>
                        </div>
                        <h4>Flutterwave</h4>
                        <p>Comprehensive payment processing for walk-in clients directly through your AppNomu SalesQ platform.</p>
                    </div>
                </div>
            </div>

            <!-- PayPal Integration -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4 text-center">
                        <div class="future-icon bg-primary-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-paypal text-primary fs-3"></i>
                        </div>
                        <h4>PayPal</h4>
                        <p>International payment processing capabilities for businesses serving global customers.</p>
                    </div>
                </div>
            </div>

            <!-- Stripe Integration -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4 text-center">
                        <div class="future-icon bg-primary-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-stripe text-primary fs-3"></i>
                        </div>
                        <h4>Stripe</h4>
                        <p>Advanced payment processing with comprehensive financial tools and reporting features.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <p class="text-muted"><em>These features will be available exclusively on the Enterprise plan.</em></p>
        </div>
    </div>
</section>

<!-- Commitment Section -->
<section class="commitment-section py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Our <span class="text-success">Commitment</span></h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
            <p class="lead mt-3 text-secondary">This transition represents our dedication to your success.</p>
        </div>

        <div class="row g-4">
            <!-- Innovation -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="commitment-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-lightbulb text-success fs-3"></i>
                        </div>
                        <h4>Continuous Innovation</h4>
                        <p>Investing in new features and improvements that drive your business growth and competitive advantage.</p>
                    </div>
                </div>
            </div>

            <!-- Security -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="commitment-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-shield-shaded text-success fs-3"></i>
                        </div>
                        <h4>Enhanced Security</h4>
                        <p>Maintaining the highest standards of data protection and platform security for your business information.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Letter Continuation -->
<section class="letter-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="letter-content p-5 rounded-3 shadow-sm position-relative" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.08);">
                    <h3 class="text-success mb-3 mt-5">Moving Forward Together</h3>
                    
                    <p class="mb-4">I want to personally thank you for being part of the AppNomu SalesQ family. Your success is our success, and we are committed to providing you with the tools and support you need to achieve your business goals.</p>
                    
                    <p class="mb-4">Whether you choose our Free plan to get started or upgrade to Enterprise for unlimited access, we will continue to be your trusted partner in business growth.</p>
                    
                    <p class="mb-4">If you have any questions or concerns about these changes, please don't hesitate to reach out to our support team. We are here to help you make the transition as smooth as possible.</p>
                    
                    <!-- Closing -->
                    <div class="letter-closing mt-5 pt-4" style="border-top: 1px solid #e9ecef;">
                        <p class="mb-4">Thank you for your continued trust and partnership. Together, we will build a stronger, more successful future for African businesses.</p>
                        
                        <p class="mb-4">With warm regards and appreciation,</p>
                        
                        <div class="signature mb-4">
                            <div>
                                <p class="mb-1 fw-bold">Bahati Asher Faith</p>
                                <p class="mb-0 text-muted">Founder & CEO, AppNomu SalesQ</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                    </div>
                </div>
                
                <!-- Enhanced CTA Section -->
                <div class="mt-5">
                    <div class="row mt-5 py-5 bg-success bg-opacity-10 rounded-4 text-center position-relative overflow-hidden" data-aos="fade-up" data-aos-delay="600">
                        <!-- Clean Background -->
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-5">
                            <svg width="100%" height="100%" viewBox="0 0 100 100">
                                <pattern id="cta-pattern" x="0" y="0" width="30" height="30" patternUnits="userSpaceOnUse">
                                    <circle cx="15" cy="15" r="0.5" fill="#198754" opacity="0.3"/>
                                </pattern>
                                <rect width="100%" height="100%" fill="url(#cta-pattern)"/>
                            </svg>
                        </div>
                        
                        <div class="col-lg-10 mx-auto position-relative">
                            <div class="mb-4">
                                <div class="d-inline-flex align-items-center justify-content-center bg-success bg-opacity-15 rounded-circle mb-3" style="width: 100px; height: 100px;">
                                    <i class="bi bi-rocket-takeoff text-success" style="font-size: 2.5rem;"></i>
                                </div>
                            </div>
                            
                            <h2 class="mb-4 fw-bold">Need <span class="text-success">Assistance</span>?</h2>
                            <p class="lead mb-5 text-muted">We're here to help you with any questions about the pricing changes</p>
                            
                            <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                                <a href="<?= url('contact') ?>" class="btn btn-success btn-lg rounded-pill px-5 py-3 shadow">
                                    <i class="bi bi-chat-dots me-2"></i> Contact Support
                                </a>
                                <a href="https://api.whatsapp.com/send/?phone=256709712129" target="_blank" class="btn btn-outline-success btn-lg rounded-pill px-5 py-3">
                                    <i class="bi bi-whatsapp me-2"></i> WhatsApp Us
                                </a>
                            </div>
                            
                            <div class="row g-3 justify-content-center mt-4">
                                <div class="col-auto">
                                    <div class="d-flex align-items-center text-muted">
                                        <i class="bi bi-shield-check text-success me-2"></i>
                                        <small>Secure Payments</small>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-flex align-items-center text-muted">
                                        <i class="bi bi-headset text-success me-2"></i>
                                        <small>24/7 Support</small>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-flex align-items-center text-muted">
                                        <i class="bi bi-arrow-clockwise text-success me-2"></i>
                                        <small>Easy Upgrades</small>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="mt-4 text-muted small">Questions? We're here to help you every step of the way.<br>
                            <strong>Emergency Line:</strong> +256200948420</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Styling and Animations -->
<style>
/* Letter Typography */
.letter-body {
    font-family: 'Georgia', serif;
    background: linear-gradient(135deg, #ffffff 0%, #fafafa 100%);
}

/* Floating Animations */
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-10px); }
    60% { transform: translateY(-5px); }
}

.animate-bounce {
    animation: bounce 2s infinite;
}

.pulse-animation {
    animation: pulse 2s infinite;
}

/* Card Hover Effects */
.plan-card {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid rgba(25,135,84,0.1) !important;
}

.plan-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 40px rgba(25,135,84,0.15) !important;
    border-color: rgba(25,135,84,0.3) !important;
}

.addon-card {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid rgba(25,135,84,0.1) !important;
}

.addon-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 30px rgba(25,135,84,0.1) !important;
    border-color: rgba(25,135,84,0.2) !important;
}

.commitment-card {
    transition: all 0.3s ease;
    border: 1px solid #e9ecef !important;
}

.commitment-card:hover {
    border-color: #198754 !important;
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(25,135,84,0.1) !important;
}

.payment-integration {
    transition: all 0.3s ease;
}

.payment-integration:hover {
    transform: scale(1.1);
}

/* Enhanced Button Styles */
.btn-success {
    background: linear-gradient(135deg, #198754 0%, #20c997 100%);
    border: none;
    transition: all 0.3s ease;
}

.btn-success:hover {
    background: linear-gradient(135deg, #157347 0%, #1aa179 100%);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(25,135,84,0.3);
}

.btn-outline-success {
    transition: all 0.3s ease;
}

.btn-outline-success:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(25,135,84,0.2);
}

/* Hero Enhancements */
.founder-image-container:hover img {
    transform: scale(1.05);
    transition: all 0.3s ease;
}

.hero-content {
    animation: fadeInUp 1s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Scroll Indicator */
.scroll-indicator i {
    animation: bounce 2s infinite;
}

/* Background Patterns */
.pricing-announcement::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(25,135,84,0.03) 1px, transparent 1px);
    background-size: 20px 20px;
    animation: rotate 60s linear infinite;
    pointer-events: none;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* Letter Header Enhancement */
.letter-header {
    position: relative;
}

.letter-header::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 2px;
    background: linear-gradient(90deg, transparent, #198754, transparent);
}

/* Future Feature Section */
.future-feature {
    position: relative;
    overflow: hidden;
}

.future-feature::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    animation: shimmer 3s infinite;
}

@keyframes shimmer {
    0% { left: -100%; }
    100% { left: 100%; }
}

/* Contact Info Enhancement */
.contact-info {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border: 1px solid rgba(25,135,84,0.1);
}

/* Signature Enhancement */
.signature {
    position: relative;
}

.signature::before {
    content: '';
    position: absolute;
    top: -15px;
    left: 0;
    width: 60px;
    height: 2px;
    background: #198754;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .letter-body {
        padding: 2rem !important;
        font-size: 1rem !important;
    }
    
    .display-3 {
        font-size: 2.5rem !important;
    }
    
    .hero-section {
        padding-top: 100px !important;
        padding-bottom: 60px !important;
    }
    
    .founder-image-container img {
        width: 100px !important;
        height: 100px !important;
    }
    
    .pricing-announcement {
        padding: 2rem !important;
    }
    
    .btn-lg {
        padding: 0.75rem 2rem !important;
        font-size: 1rem !important;
    }
}

/* Dark Mode Support */
@media (prefers-color-scheme: dark) {
    .letter-body {
        background: linear-gradient(135deg, #2d3748 0%, #1a202c 100%);
        color: #e2e8f0;
    }
    
    .plan-card, .addon-card {
        background: #2d3748 !important;
        color: #e2e8f0;
    }
}

/* Print Styles */
@media print {
    .hero-section,
    .enhanced-cta,
    .btn,
    .pulse-animation {
        display: none !important;
    }
    
    .letter-body {
        box-shadow: none !important;
        border: 1px solid #ccc !important;
    }
}
</style>

<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });
        
        // Enhanced scroll effects
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.hero-section');
            if (parallax) {
                const speed = scrolled * 0.5;
                parallax.style.transform = `translateY(${speed}px)`;
            }
        });
        
        // Button click animations
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                let ripple = document.createElement('span');
                ripple.classList.add('ripple');
                this.appendChild(ripple);
                
                let x = e.clientX - e.target.offsetLeft;
                let y = e.clientY - e.target.offsetTop;
                
                ripple.style.left = `${x}px`;
                ripple.style.top = `${y}px`;
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
    });
</script>

<?php
// Get the content buffer
$content = ob_get_clean();

// Include the layout
include __DIR__ . '/includes/layout.php';
?>
