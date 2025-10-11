<?php
// Load configuration
require_once __DIR__ . '/../config.php';

// Set the current page for navigation highlighting
$current_page = 'integrations';

// Set page metadata
$page_title = 'Video & Scheduling Integration | AppNomu SalesQ - Zoom & Calendly';
$page_description = 'Integrate AppNomu SalesQ with Zoom and Calendly for seamless meeting scheduling, automated bookings, and video consultations. Perfect for African businesses.';

// Set page-specific keywords for SEO
$page_keywords = 'Zoom Integration Uganda, Calendly Integration Africa, Video Meetings Uganda, Appointment Scheduling East Africa, Online Consultations Uganda, Meeting Automation Africa';

// Additional CSS for this page
$additional_css = [
    "https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
];

// Additional JS for this page
$additional_js = [
    "https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"
];

// Start output buffering
ob_start();
?>

<!-- Hero Section -->
<section class="hero-section position-relative" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); padding: 80px 0 60px;">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <h1 class="display-4 fw-bold mb-3 text-dark">Video & Scheduling <span class="text-success">Integration</span></h1>
                <p class="lead mb-4 text-dark" style="font-size: 1.2rem; font-weight: 300;">
                    Connect AppNomu SalesQ with Zoom and Calendly to automate meeting scheduling, 
                    streamline video consultations, and enhance customer engagement across Africa.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 mb-4">
                    <a href="https://www.appnomu.com/register.php?utm_source=video_integration&utm_medium=hero&utm_campaign=salesq" 
                       class="btn btn-success btn-lg rounded-pill px-4 py-3 shadow" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-camera-video me-2"></i> Start Integration
                    </a>
                    <a href="<?= url('/demo') ?>" class="btn btn-outline-success btn-lg rounded-pill px-4 py-3">
                        <i class="bi bi-play-circle me-2"></i> Watch Demo
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                <div class="position-relative" data-aos="fade-left">
                    <img src="https://appnomu.com/landing/assets/images/Zoom.png" alt="Zoom and Calendly Integration" class="img-fluid rounded-4 shadow-lg" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Supported Platforms -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Supported Video & Scheduling Platforms</h2>
            <p class="text-muted">Connect with the world's leading meeting and scheduling tools</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://st1.zoom.us/zoom.ico" alt="Zoom" style="height: 50px;" class="me-3">
                            <div>
                                <h5 class="fw-bold mb-0">Zoom</h5>
                                <small class="text-muted">Video communications platform</small>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Automatic meeting creation</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Meeting recordings</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Participant management</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> HD video & audio</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-warning-soft rounded p-3 me-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-calendar-event text-warning fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-0">Calendly</h5>
                                <small class="text-muted">Scheduling automation platform</small>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Automated scheduling</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Calendar synchronization</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Custom availability</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Reminder notifications</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Powerful Video & Scheduling Features</h2>
            <p class="text-muted">Everything you need for seamless customer meetings</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-calendar-check text-primary fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Automated Booking</h5>
                        <p class="text-muted">Let customers book meetings automatically based on your availability and preferences.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-success-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-camera-video text-success fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Video Consultations</h5>
                        <p class="text-muted">Conduct professional video meetings with customers across Africa seamlessly.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-warning-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-bell text-warning fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Smart Reminders</h5>
                        <p class="text-muted">Automatically send meeting reminders via SMS, email, and push notifications.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-info-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-arrow-repeat text-info fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Calendar Sync</h5>
                        <p class="text-muted">Sync with Google Calendar, Outlook, and other calendar applications automatically.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-danger-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-record-circle text-danger fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Meeting Recording</h5>
                        <p class="text-muted">Record important meetings and store them securely for future reference.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-secondary-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-people text-secondary fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Team Scheduling</h5>
                        <p class="text-muted">Coordinate meetings across multiple team members and departments efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Perfect for African Businesses</h2>
            <p class="text-muted">Real-world video and scheduling use cases</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-briefcase text-white fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Sales Consultations</h5>
                        <p class="text-muted">Conduct product demos, sales presentations, and client consultations remotely across Africa.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-success rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-heart text-white fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Healthcare Appointments</h5>
                        <p class="text-muted">Enable telemedicine consultations and patient appointments with automated scheduling.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-warning rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-mortarboard text-white fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Educational Sessions</h5>
                        <p class="text-muted">Schedule and conduct online classes, training sessions, and educational consultations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">How Video & Scheduling Integration Works</h2>
            <p class="text-muted">Get your meetings automated in minutes</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-primary rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-1-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Connect Accounts</h5>
                <p class="text-muted">Link your Zoom and Calendly accounts to AppNomu SalesQ securely.</p>
            </div>
            
            <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-primary rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-2-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Set Availability</h5>
                <p class="text-muted">Configure your working hours, time zones, and meeting preferences.</p>
            </div>
            
            <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-primary rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-3-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Automate Booking</h5>
                <p class="text-muted">Let customers book meetings directly from your SalesQ platform.</p>
            </div>
            
            <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="bg-primary rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-4-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Meet & Follow-up</h5>
                <p class="text-muted">Conduct meetings and automatically track outcomes in your CRM.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Video & Scheduling Pricing</h2>
            <p class="text-muted">Professional meeting solutions at affordable rates</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4 text-center">
                                <div class="bg-primary-soft rounded-circle p-3 mb-3 d-inline-block">
                                    <i class="bi bi-camera-video text-primary fs-2"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Basic Video & Scheduling</h4>
                                <div class="mb-4">
                                    <span class="display-4 fw-bold text-primary">Free</span>
                                    <span class="text-muted">/month</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Basic meeting scheduling</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Calendar sync</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Standard reminders</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Email support</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 shadow-lg border-primary">
                            <div class="card-body p-4 text-center">
                                <div class="bg-primary rounded-circle p-3 mb-3 d-inline-block">
                                    <i class="bi bi-star text-white fs-2"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Advanced Video & Scheduling</h4>
                                <div class="mb-4">
                                    <span class="display-4 fw-bold text-primary">$25</span>
                                    <span class="text-muted">/month</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Everything in Basic</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Meeting recordings</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Advanced automation</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Priority support</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4 text-center">
                                <div class="bg-warning-soft rounded-circle p-3 mb-3 d-inline-block">
                                    <i class="bi bi-building text-warning fs-2"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Enterprise Video & Scheduling</h4>
                                <div class="mb-4">
                                    <span class="display-4 fw-bold text-warning">$45</span>
                                    <span class="text-muted">/month</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Everything in Advanced</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Unlimited recordings</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Custom workflows</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Dedicated support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-3 text-dark">Ready to Automate Your Meetings?</h2>
                <p class="lead text-muted mb-4">
                    Connect AppNomu SalesQ with Zoom and Calendly to streamline your scheduling and video consultations.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="https://www.appnomu.com/register.php?utm_source=video_cta&utm_medium=bottom&utm_campaign=salesq" 
                       class="btn btn-success btn-lg rounded-pill px-4 py-3 shadow" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-camera-video me-2"></i> Start Integration
                    </a>
                    <a href="<?= url('/contact') ?>" class="btn btn-outline-success btn-lg rounded-pill px-4 py-3">
                        <i class="bi bi-telephone me-2"></i> Contact Sales
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .bg-primary-soft { background-color: rgba(13, 110, 253, 0.1); }
    .bg-success-soft { background-color: rgba(25, 135, 84, 0.1); }
    .bg-warning-soft { background-color: rgba(255, 193, 7, 0.1); }
    .bg-info-soft { background-color: rgba(13, 202, 240, 0.1); }
    .bg-danger-soft { background-color: rgba(220, 53, 69, 0.1); }
    .bg-secondary-soft { background-color: rgba(108, 117, 125, 0.1); }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100
        });
    }
});
</script>

<?php
$content = ob_get_clean();
require_once __DIR__ . '/../includes/layout.php';
?>
