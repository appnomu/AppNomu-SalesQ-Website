<?php
// Load configuration
require_once __DIR__ . '/config.php';

// Set the current page for navigation highlighting
$current_page = 'trust-centre';

// Set page metadata
$page_title = 'Trust Centre - AppNomu SalesQ';
$page_description = 'Learn about AppNomu SalesQ\'s commitment to privacy, security, and compliance. We prioritize protecting your data while providing powerful business tools.';

// Set page-specific keywords for SEO
$page_keywords = 'Data Security Uganda, Business Privacy Solutions, GDPR Compliance Africa, Secure CRM Uganda, Data Protection Software, Trust Centre AppNomu, Secure Business Tools Africa, Privacy by Design Uganda';

// Additional CSS files
$additional_css = [
    asset('css/legal-pages-modern.css')
];

// Additional JS files
$additional_js = [
    'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js'
];

// Start output buffering
ob_start();
?>

<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden" style="padding-top: 120px; padding-bottom: 80px;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNMCwxMDBjMzAsMCwyMCwtMzAgNTAsLTMwczIwLDMwLDUwLDMwczIwLC0zMCw1MCwtMzBzMjAsMzAsNTAsMzBzMjAsLTMwLDUwLC0zMHMyMCwzMCw1MCwzMFYwSDBaIiBmaWxsPSJyZ2JhKDI1LDEzNSw4NCwwLjA1KSIvPjwvc3ZnPg=='); background-size: 100% 200px; background-repeat: repeat; opacity: 0.4;"></div>
    
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center">
                <span class="badge bg-success-soft text-success fw-bold px-3 py-2 rounded-pill mb-3 d-inline-block">Trust & Security</span>
                <h1 class="display-4 fw-bold mb-3">AppNomu SalesQ <span class="text-success">Trust Centre</span></h1>
                <p class="lead mb-4" style="font-size: 1.2rem; font-weight: 300;">Your data is our responsibility. Learn how we safeguard your business information while delivering powerful tools.</p>
            </div>
        </div>
    </div>
</section>

<!-- Built on Privacy Section -->
<section class="privacy-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Built on <span class="text-success">Privacy</span></h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
            <p class="lead mt-3 text-secondary">We put your data privacy first in everything we do.</p>
        </div>

        <div class="row g-4">
            <!-- Data Ownership Card -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="privacy-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-database-lock text-success fs-3"></i>
                        </div>
                        <h4>Data Ownership</h4>
                        <p>Your data belongs to you. We never claim ownership of your customer or business information. You retain full rights to export or delete your data at any time.</p>
                    </div>
                </div>
            </div>

            <!-- Privacy by Design Card -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="privacy-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-layout-text-window text-success fs-3"></i>
                        </div>
                        <h4>Privacy by Design</h4>
                        <p>Privacy considerations are built into our products from the ground up. We constantly evaluate our practices to ensure they meet the highest privacy standards.</p>
                    </div>
                </div>
            </div>

            <!-- Transparent Policies Card -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="privacy-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-file-earmark-text text-success fs-3"></i>
                        </div>
                        <h4>Transparent Policies</h4>
                        <p>Our privacy and data handling policies are written in plain language. We're transparent about what data we collect and how we use it to provide our services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Committed to Security Section -->
<section class="security-section py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Committed to <span class="text-success">Security</span></h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
            <p class="lead mt-3 text-secondary">We implement industry-best practices to protect your business information.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="security-image-container position-relative">
                    <img src="https://appnomu.com/landing/assets/images/Security_illustrations.png" alt="Security illustration" class="img-fluid rounded-3 shadow" onerror="this.src='https://placehold.co/600x400/e9ecef/198754?text=Security&font=Lexend'" style="width: 100%; height: auto; max-height: 400px; object-fit: contain;">
                    <div class="position-absolute" style="top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(25,135,84,0.1); border-radius: 50%; z-index: -1;"></div>
                    <div class="position-absolute" style="bottom: -30px; left: -30px; width: 150px; height: 150px; background: rgba(25,135,84,0.05); border-radius: 50%; z-index: -1;"></div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="accordion security-accordion" id="securityAccordion" data-aos="fade-left" data-aos-delay="200">
                    <!-- Data Encryption -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#securityOne" aria-expanded="true" aria-controls="securityOne">
                                <i class="bi bi-lock-fill text-success me-2"></i> Data Encryption
                            </button>
                        </h2>
                        <div id="securityOne" class="accordion-collapse collapse show" data-bs-parent="#securityAccordion">
                            <div class="accordion-body">
                                All data is encrypted both in transit and at rest using industry-standard encryption protocols. We use TLS for all data transfers and encrypt sensitive information in our databases.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Infrastructure Security -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#securityTwo" aria-expanded="false" aria-controls="securityTwo">
                                <i class="bi bi-hdd-rack-fill text-success me-2"></i> Infrastructure Security
                            </button>
                        </h2>
                        <div id="securityTwo" class="accordion-collapse collapse" data-bs-parent="#securityAccordion">
                            <div class="accordion-body">
                                Our infrastructure is hosted on secure, enterprise-grade cloud platforms with redundancy and disaster recovery protocols. We employ firewalls, intrusion detection systems, and regular security audits.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Access Controls -->
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#securityThree" aria-expanded="false" aria-controls="securityThree">
                                <i class="bi bi-person-badge text-success me-2"></i> Access Controls
                            </button>
                        </h2>
                        <div id="securityThree" class="accordion-collapse collapse" data-bs-parent="#securityAccordion">
                            <div class="accordion-body">
                                We implement strict role-based access controls for all systems and data. Our employees only have access to the specific data they need to perform their job functions, and all access is logged and monitored.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Security Testing -->
                    <div class="accordion-item border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#securityFour" aria-expanded="false" aria-controls="securityFour">
                                <i class="bi bi-bug text-success me-2"></i> Security Testing
                            </button>
                        </h2>
                        <div id="securityFour" class="accordion-collapse collapse" data-bs-parent="#securityAccordion">
                            <div class="accordion-body">
                                We conduct regular security assessments, penetration testing, and vulnerability scanning to identify and address potential security issues before they become problems.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tools for Compliance Section -->
<section class="compliance-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Tools for <span class="text-success">Compliance</span></h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
            <p class="lead mt-3 text-secondary">We provide features to help your business meet regulatory requirements.</p>
        </div>
        
        <div class="row g-4 mb-5">
            <!-- GDPR Compliance -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="compliance-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-shield-check text-success fs-3"></i>
                        </div>
                        <h4>GDPR Compliance</h4>
                        <p>Tools to help manage personal data according to GDPR requirements including data export and deletion capabilities.</p>
                    </div>
                </div>
            </div>
            
            <!-- Data Retention Controls -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="compliance-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-calendar-check text-success fs-3"></i>
                        </div>
                        <h4>Data Retention</h4>
                        <p>Configurable data retention policies allow you to automatically archive or delete data after specified periods.</p>
                    </div>
                </div>
            </div>
            
            <!-- Audit Logging -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="compliance-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-journal-text text-success fs-3"></i>
                        </div>
                        <h4>Audit Logging</h4>
                        <p>Comprehensive audit logs track all activities within your account for accountability and regulatory compliance.</p>
                    </div>
                </div>
            </div>
            
            <!-- Access Management -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="compliance-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-people text-success fs-3"></i>
                        </div>
                        <h4>Access Management</h4>
                        <p>Role-based access controls to ensure only authorized personnel can access sensitive customer data.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Compliance Statement -->
        <div class="compliance-statement bg-light p-4 rounded-3 shadow-sm" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-md-1 text-center mb-3 mb-md-0">
                    <i class="bi bi-info-circle-fill text-success fs-1"></i>
                </div>
                <div class="col-md-11">
                    <h4 class="mb-2">Compliance Statement</h4>
                    <p class="mb-0 text-secondary">AppNomu SalesQ is designed to help businesses comply with data protection regulations, but compliance ultimately depends on how you configure and use our services. We provide the tools, but your organization remains responsible for ensuring that your use of our platform meets your regulatory obligations. We're here to help with guidance and best practices.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Word from the CEO Section -->
<section class="ceo-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Word from the <span class="text-success">CEO</span></h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="position-relative">
                    <img src="https://appnomu.com/landing/assets/images/Bahati%20Asher.jpg" alt="Bahati Asher Faith - CEO" class="img-fluid rounded-3 shadow" onerror="this.src='https://placehold.co/500x600/e9ecef/198754?text=Bahati+Asher+Faith&font=Lexend'" style="width: 100%; max-width: 400px; border: 3px solid rgba(25,135,84,0.2);">
                    <div class="position-absolute" style="bottom: -15px; right: -15px; width: 70%; height: 70%; background: linear-gradient(135deg, rgba(25,135,84,0.1) 0%, rgba(25,135,84,0.05) 100%); border-radius: 12px; z-index: -1;"></div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="ceo-message p-4 bg-light rounded-3 shadow-sm">
                    <i class="bi bi-quote fs-1 text-success opacity-25"></i>
                    <h4 class="mb-3">A Commitment to Trust</h4>
                    <p class="lead text-dark">At AppNomu SalesQ, we understand that your business data is one of your most valuable assets. Our mission has always been to provide powerful tools that help businesses grow while maintaining the highest standards of security and privacy.</p>
                    <p class="text-secondary">We built AppNomu SalesQ with trust as its foundation. Every feature we develop, every update we release, and every support interaction we have is guided by our commitment to protecting your data and earning your confidence.</p>
                    <p class="text-secondary">As technology evolves and new challenges emerge, our dedication to security, privacy, and compliance remains unwavering. We're honored to be your partner in business growth and success.</p>
                    <div class="d-flex align-items-center mt-4">
                        <div>
                            <h5 class="mb-0">Bahati Asher Faith</h5>
                            <p class="text-muted mb-0">Founder & CEO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AppNomu SalesQ Guides Section -->
<section class="guides-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>AppNomu SalesQ <span class="text-success">Guides</span></h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
            <p class="lead mt-3 text-secondary">We're here to help you succeed with AppNomu SalesQ.</p>
        </div>
        
        <div class="row g-4">
            <!-- Support Contact -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4 text-center">
                        <div class="guide-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-headset text-success fs-3"></i>
                        </div>
                        <h4>Contact Support</h4>
                        <p>Our support team is ready to assist you with any questions or issues.</p>
                        <a href="mailto:support@appnomu.com" class="btn btn-outline-success rounded-pill mt-3">Email Support</a>
                        <a href="https://api.whatsapp.com/send/?phone=256709712129&text&type=phone_number&app_absent=0" class="btn btn-success rounded-pill mt-2"><i class="bi bi-whatsapp me-1"></i> WhatsApp Support</a>
                    </div>
                </div>
            </div>
            
            <!-- Help Documentation -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4 text-center">
                        <div class="guide-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-book text-success fs-3"></i>
                        </div>
                        <h4>Blog and Articles</h4>
                        <p>Explore our latest insights, tips, and resources to help your business grow with AppNomu SalesQ.</p>
                        <a href="https://appnomu.com/landing/resources" class="btn btn-success rounded-pill mt-3">View Blog</a>
                    </div>
                </div>
            </div>
            
            <!-- Security Questions -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4 text-center">
                        <div class="guide-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-shield-check text-success fs-3"></i>
                        </div>
                        <h4>Security Questions</h4>
                        <p>For specific security or compliance inquiries, our security team is available to assist.</p>
                        <a href="mailto:security@appnomu.com" class="btn btn-outline-success rounded-pill mt-3">Contact Security Team</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact CTA -->
        <div class="text-center mt-5" data-aos="fade-up">
            <p class="mb-4">Have questions about how AppNomu SalesQ can help your business?</p>
            <a href="contact.php" class="btn btn-success btn-lg rounded-pill px-4 py-2">Talk to Our Team</a>
        </div>
    </div>
</section>

<!-- AOS Initialization Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
        
        // Fallback for data-aos elements if AOS fails to initialize
        setTimeout(function() {
            if (document.querySelectorAll('[data-aos]:not(.aos-animate)').length > 0) {
                document.querySelectorAll('[data-aos]').forEach(function(el) {
                    el.classList.add('aos-animate');
                });
            }
        }, 500);
    });
</script>

<?php
// Get page content from output buffer
$content = ob_get_clean();

// Load layout with current page content
require_once __DIR__ . '/includes/layout.php';
?>
