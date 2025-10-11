<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load configuration
require_once __DIR__ . '/config.php';

// Set page variables
$current_page = 'contact';
$page_title = 'Contact Us | AppNomu SalesQ';
$page_description = 'Get in touch with the AppNomu SalesQ team for sales inquiries, support, or partnership opportunities';

// Set page-specific keywords for SEO
$page_keywords = 'Contact AppNomu Uganda, Business Software Support, Sales Inquiry AppNomu, CRM Support Uganda, Business Solutions Contact, Software Demo Request, AppNomu Partnership, Technology Support Africa';

// Start output buffering
ob_start();

// Ensure session is started for CSRF token
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Generate CSRF token
$csrf_token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrf_token;

// Cloudflare Turnstile site key
$turnstile_site_key = '0x4AAAAAABky2ZVjyQirVHsh';
?>

<!-- Modern Hero Section with Neutral Professional Design -->
<header class="page-header position-relative overflow-hidden py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <!-- Subtle pattern overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNMCwwaDEwMHYxMDBoLTEwMHoiIGZpbGw9Im5vbmUiLz48cGF0aCBkPSJNMCwwbDEwMCwxMDAiIHN0cm9rZT0icmdiYSgwLDAsMCwwLjAzKSIgc3Ryb2tlLXdpZHRoPSIwLjUiLz48L3N2Zz4='); opacity: 0.4;"></div>
    
    <div class="container position-relative">
        <div class="row align-items-center py-4">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold text-dark mb-3">Get In Touch</h1>
                <p class="lead text-dark opacity-75 mb-4">We're here to answer your questions about AppNomu SalesQ and help you succeed with our platform.</p>
                <div class="d-flex align-items-center">
                    <div class="badge bg-success text-white p-2 me-3">
                        <i class="bi bi-clock"></i>
                    </div>
                    <p class="mb-0 text-dark">Our support team responds within 24 hours on business days</p>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block text-end">
                <img src="https://appnomu.com/landing/assets/images/compressed-original.webp" alt="Contact Illustration" class="img-fluid rounded-3 shadow" style="max-height: 300px;">
            </div>
        </div>
    </div>
</header>

<!-- Enhanced Contact Information Cards -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row g-4">
                    <!-- Email Card -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm hover-shadow transition-300">
                            <div class="card-body text-center p-4">
                                <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                    <i class="bi bi-envelope text-success fs-2" aria-hidden="true"></i>
                                </div>
                                <h4 class="mb-3">Email Us</h4>
                                <p class="mb-1"><strong>Support:</strong><br><a href="mailto:support@appnomu.com" class="text-decoration-none">support@appnomu.com</a></p>
                                <p><strong>General:</strong><br><a href="mailto:info@appnomu.com" class="text-decoration-none">info@appnomu.com</a></p>
                                <p class="text-muted small mt-3">For fastest response, email our support team</p>
                            </div>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm hover-shadow transition-300">
                            <div class="card-body text-center p-4">
                                <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                    <i class="bi bi-telephone text-success fs-2" aria-hidden="true"></i>
                                </div>
                                <h4 class="mb-3">Call Us</h4>
                                <p class="mb-1"><strong>Support Line:</strong><br><a href="tel:+256200948420" class="text-decoration-none">+256 200 948 420</a></p>
                                <p class="text-muted small mt-3">Available Monday - Friday<br>9:00 AM - 5:00 PM EAT</p>
                            </div>
                        </div>
                    </div>

                    <!-- Location Card -->
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm hover-shadow transition-300">
                            <div class="card-body text-center p-4">
                                <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                    <i class="bi bi-geo-alt text-success fs-2" aria-hidden="true"></i>
                                </div>
                                <h4 class="mb-3">Visit Us</h4>
                                <p class="mb-1"><strong>Head Office:</strong><br>77 Market Street<br>Bugiri Municipality, Uganda</p>
                                <p class="text-muted small mt-3">By appointment only</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- WhatsApp Contact Button -->
                <div class="text-center mt-4">
                    <a href="https://api.whatsapp.com/send/?phone=256709712129&text&type=phone_number&app_absent=0" class="btn btn-success rounded-pill px-4 text-white" target="_blank">
                        <i class="bi bi-whatsapp me-2"></i> WhatsApp Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Professional Contact Form Section -->
<section class="py-5 bg-light" id="contact-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-header bg-gradient-subtle py-3 px-3" style="background: linear-gradient(to right, #f8f9fa, #e9ecef);">
                        <h3 id="contact-form-heading" class="m-0 fw-bold d-flex align-items-center fs-4">
                            <span class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">
                                <i class="bi bi-envelope" aria-hidden="true"></i>
                            </span>
                            Send us a message
                        </h3>
                    </div>
                    <div class="card-body p-3 p-md-4 bg-white">
                        <p class="text-muted mb-3">Complete the form below and our team will respond within 24 hours.</p>
                        <?php
                        // Check for contact status
                        $contact_status = isset($_GET['contact_status']) ? $_GET['contact_status'] : '';
                        $user_name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
                        $error_message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';
                        
                        if ($contact_status == 'success'):
                        ?>
                        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                            <strong>Thank you<?php echo !empty($user_name) ? ', ' . $user_name : ''; ?>!</strong> Your message has been sent successfully.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php elseif ($contact_status == 'error'): ?>
                        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                            <strong>Error:</strong> <?php echo !empty($error_message) ? $error_message : 'We couldn\'t send your message. Please try again.'; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>
                        
                        <form id="contactForm" action="process_contact.php" method="POST" class="needs-validation" role="form" aria-labelledby="contact-form-heading" novalidate>
                            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                            
                            <div class="row g-2">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control custom-input" id="name" name="name" placeholder="John Doe" required aria-required="true" aria-describedby="name-error" style="height: 46px;">
                                        <label for="name" class="small">Full Name <span class="text-danger">*</span><span class="sr-only"> (required)</span></label>
                                        <div class="invalid-feedback small" id="name-error">Please enter your name</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="email" class="form-control custom-input" id="email" name="email" placeholder="name@example.com" required aria-required="true" aria-describedby="email-error" style="height: 46px;">
                                        <label for="email" class="small">Email Address <span class="text-danger">*</span><span class="sr-only"> (required)</span></label>
                                        <div class="invalid-feedback small" id="email-error">Please enter a valid email</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control custom-input" id="phone" name="phone" placeholder="+256 XXX XXX XXX" aria-describedby="phone-help" style="height: 46px;">
                                        <label for="phone" class="small">Phone Number</label>
                                        <div id="phone-help" class="sr-only">Optional phone number</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select custom-input" id="subject" name="subject" aria-label="Subject selection" aria-describedby="subject-help" style="height: 46px;">
                                            <option value="" selected disabled>Select a subject</option>
                                            <option value="Sales Inquiry">Sales Inquiry</option>
                                            <option value="Technical Support">Technical Support</option>
                                            <option value="Billing">Billing</option>
                                            <option value="Partnership">Partnership</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <label for="subject" class="small">Subject</label>
                                        <div id="subject-help" class="sr-only">Optional - select a subject for your message</div>
                                    </div>
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <div class="form-floating">
                                        <textarea class="form-control custom-input" id="message" name="message" style="height: 120px" placeholder="Your message here" required aria-required="true" aria-describedby="message-error"></textarea>
                                        <label for="message" class="small">Your Message <span class="text-danger">*</span><span class="sr-only"> (required)</span></label>
                                        <div class="invalid-feedback small" id="message-error">Please enter your message</div>
                                    </div>
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <div class="card border-0 bg-light p-2 rounded-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="privacy" name="privacy" required aria-required="true" aria-describedby="privacy-error">
                                            <label class="form-check-label small" for="privacy">
                                                I agree to the <a href="https://appnomu.com/landing/privacy-policy" target="_blank" class="text-success text-decoration-none fw-medium">Privacy Policy</a><span class="sr-only"> (required)</span>
                                            </label>
                                            <div class="invalid-feedback small" id="privacy-error">
                                                You must agree to our privacy policy before submitting.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Cloudflare Turnstile Widget -->
                                <div class="col-12 mb-3">
                                    <div class="card border-0 bg-light p-2 rounded-3">
                                        <label class="form-label mb-1 small"><i class="bi bi-shield-check text-success me-1" aria-hidden="true"></i>Security Verification <span class="sr-only">(required)</span></label>
                                        <div class="d-flex justify-content-start">
                                            <div class="cf-turnstile" data-sitekey="<?php echo $turnstile_site_key; ?>"></div>
                                        </div>
                                        <div class="invalid-feedback small" id="turnstile-error" style="display: none;">
                                            Please complete the security verification.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success w-100 shadow position-relative overflow-hidden contact-submit-btn" aria-label="Submit contact form">
                                        <span class="d-flex align-items-center justify-content-center py-2">
                                            <i class="bi bi-send me-2" aria-hidden="true"></i> Send Message
                                        </span>
                                    </button>
                                    <p class="text-center text-muted small mt-3">Your data is protected and handled in accordance with our <a href="https://appnomu.com/landing/privacy-policy" class="text-success text-decoration-none">Privacy Policy</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="mt-4 pt-2">
                    <h3 class="text-center mb-3 fs-4">Frequently Asked Questions</h3>
                    <div class="accordion" id="contactFAQ">
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" aria-label="Show answer to: How quickly can I expect a response?">
                                    How quickly can I expect a response?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    Our team typically responds to all inquiries within 24 business hours. For urgent matters, we recommend contacting us via WhatsApp during business hours.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" aria-label="Show answer to: What information should I include in my message?">
                                    Do you offer technical support for your products?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    Yes, we provide comprehensive technical support for all our products. You can reach our technical support team via email at support@appnomu.com or through the contact form on this page.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 shadow-sm">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" aria-label="Show answer to: Do you offer technical support through this form?">
                                    Can I schedule a demo of AppNomu SalesQ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    Absolutely! You can request a personalized demo through our <a href="demo.php">demo request page</a> or by contacting our sales team directly. We'll schedule a time that works best for you.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS for professional form styling -->
<style>
    /* General styles and transitions */
    .transition-300 {
        transition: all 0.3s ease;
    }
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    /* Enhanced form styling */
    .custom-input {
        border: 1px solid #e0e0e0;
        border-radius: 0.5rem;
        transition: all 0.25s ease-in-out;
    }
    .custom-input:focus {
        border-color: #198754;
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.1);
    }
    .form-floating > .custom-input:focus ~ label {
        color: #198754;
    }
    .form-floating > .form-select ~ label {
        z-index: 2;
    }
    
    /* Submit button animation */
    .contact-submit-btn {
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    .contact-submit-btn:hover {
        transform: translateY(-3px);
    }
    .contact-submit-btn::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, #198754, #28a745, #20c997, #198754);
        background-size: 400%;
        border-radius: 8px;
        z-index: -1;
        animation: glowing 20s linear infinite;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }
    .contact-submit-btn:hover::before {
        opacity: 1;
    }
    
    /* Form header styling */
    .card-header.bg-gradient-subtle {
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    
    /* Form field focus effect */
    .form-floating > .form-control:focus,
    .form-floating > .form-control:not(:placeholder-shown) {
        padding-top: 1.5rem;
        padding-bottom: 0.5rem;
    }
    .form-floating > label {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }
    
    /* Checkbox styling */
    .form-check-input:checked {
        background-color: #198754;
        border-color: #198754;
    }
    .form-check-input:focus {
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
        border-color: #198754;
    }
    
    /* Animations */
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
    
    @keyframes glowing {
        0% { background-position: 0 0; }
        50% { background-position: 400% 0; }
        100% { background-position: 0 0; }
    }
    
    /* Card background styling */
    .card.shadow-lg {
        background-image: url("data:image/svg+xml,%3Csvg width='6' height='6' viewBox='0 0 6 6' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23f8f9fa' fill-opacity='0.4' fill-rule='evenodd'%3E%3Cpath d='M5 0h1L0 6V5zM6 5v1H5z'/%3E%3C/g%3E%3C/svg%3E");
    }
    
    /* Mobile responsive styling */
    @media (max-width: 767.98px) {
        .card-body {
            padding: 1rem !important;
        }
        .card-header {
            padding: 0.75rem !important;
        }
        .form-floating > label {
            font-size: 0.85rem;
        }
        .form-control, .form-select {
            font-size: 0.95rem;
        }
        .contact-submit-btn {
            font-size: 0.95rem;
        }
        .col-md-6, .col-12 {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
        .card {
            border-radius: 0.5rem !important;
        }
        .g-2 {
            --bs-gutter-y: 0.25rem;
        }
        .contact-info-card {
            height: auto !important;
            padding: 1rem !important;
        }
    }
    
    /* Focus visible styles for accessibility */
    :focus-visible {
        outline: 3px solid #198754;
        outline-offset: 2px;
    }
    
    /* Respect prefers-reduced-motion */
    @media (prefers-reduced-motion: reduce) {
        .pulse-animation,
        [class*="animate__"],
        .transition-300,
        .hover-shadow,
        [data-aos] {
            animation: none !important;
            transition: none !important;
            transform: none !important;
        }
    }
</style>

<!-- Cloudflare Turnstile Script -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<script>
document.addEventListener('DOMContentLoaded', function() {    
    // Form validation with improved accessibility
    const form = document.getElementById('contactForm');
    if (form) {
        // Add keyboard navigation enhancements
        document.querySelectorAll('.form-control, .form-select, .form-check-input, button, a').forEach(el => {
            el.addEventListener('keydown', function(e) {
                // Add keyboard support for Enter key on clickable elements that aren't already interactive
                if (e.key === 'Enter' && (this.tagName !== 'BUTTON' && this.tagName !== 'INPUT' && this.tagName !== 'SELECT' && this.tagName !== 'TEXTAREA' && this.tagName !== 'A')) {
                    e.preventDefault();
                    this.click();
                }
                
                // Support escape key to blur the current element
                if (e.key === 'Escape' && document.activeElement === this) {
                    this.blur();
                }
            });
        });
        
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                
                // Find all invalid elements
                const invalidElements = form.querySelectorAll(':invalid');
                const invalidCount = invalidElements.length;
                
                // Find the first invalid field and focus it
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
                
                // Check if Turnstile validation was completed
                const turnstileResponse = document.querySelector('[name="cf-turnstile-response"]');
                if (!turnstileResponse || !turnstileResponse.value) {
                    event.preventDefault();
                    event.stopPropagation();
                    document.getElementById('turnstile-error').style.display = 'block';
                } else {
                    document.getElementById('turnstile-error').style.display = 'none';
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
});
</script>

<?php
// Get the buffered content
$content = ob_get_clean();

// Include the layout
include __DIR__ . '/includes/layout.php';
?>
