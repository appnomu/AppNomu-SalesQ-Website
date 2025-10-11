<?php
// Set the current page for navigation highlighting
$current_page = 'careers';
$page_title = 'Join Our Team | AppNomu SalesQ Careers';
$page_description = 'Join the AppNomu team and help build the future of sales and inventory management solutions in East Africa';

// Set page-specific keywords for SEO
$page_keywords = 'Jobs Uganda Tech, Software Careers Bugiri, AppNomu Jobs, Tech Startup Careers, Software Developer Uganda, Sales Solutions Jobs, Tech Internships Uganda, IT Careers East Africa';

// Additional CSS for this page
$additional_css = [];

// Additional JS for this page
$additional_js = [];

// Start output buffering
ob_start();
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

/* Slower, more subtle pulse for CTA containers */
@keyframes pulse-slow {
    0% { box-shadow: 0 10px 30px rgba(25, 135, 84, 0.15); }
    50% { box-shadow: 0 15px 40px rgba(25, 135, 84, 0.25); }
    100% { box-shadow: 0 10px 30px rgba(25, 135, 84, 0.15); }
}

.pulse-animation-slow {
    animation: pulse-slow 4s infinite;
}

/* Transition for smooth hover effects */
.transition-300 {
    transition: all 0.3s ease;
}

/* Card hover effects */
.hover-shadow {
    transition: all 0.3s ease;
}

.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
}

/* Badge soft colors */
.bg-primary-soft {
    background-color: rgba(13, 110, 253, 0.1);
}

.bg-info-soft {
    background-color: rgba(13, 202, 240, 0.1);
}

.bg-warning-soft {
    background-color: rgba(255, 193, 7, 0.1);
}

.bg-success-soft {
    background-color: rgba(25, 135, 84, 0.1);
}

/* Complete Modal Override */
#applyModal {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    z-index: 999999 !important;
    background: rgba(0, 0, 0, 0.85) !important;
    display: none !important;
    padding: 20px !important;
    box-sizing: border-box !important;
    overflow-y: auto !important;
    -webkit-overflow-scrolling: touch !important;
}

#applyModal.show {
    display: block !important;
}

#applyModal .modal-dialog {
    position: relative !important;
    margin: 0 auto !important;
    max-width: 600px !important;
    width: 100% !important;
    min-height: 100% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    padding: 20px 0 !important;
    box-sizing: border-box !important;
}

#applyModal .modal-content {
    position: relative !important;
    background: white !important;
    border-radius: 12px !important;
    border: none !important;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.6) !important;
    width: 100% !important;
    max-height: calc(100vh - 40px) !important;
    overflow-y: auto !important;
    margin: auto !important;
}

#applyModal .modal-header {
    background: linear-gradient(135deg, #198754 0%, #20c997 100%) !important;
    color: white !important;
    border-radius: 12px 12px 0 0 !important;
    border-bottom: none !important;
    padding: 1.5rem !important;
    position: sticky !important;
    top: 0 !important;
    z-index: 10 !important;
}

#applyModal .modal-body {
    padding: 2rem !important;
    background: white !important;
}

/* Disable all Bootstrap modal styles */
.modal-backdrop,
.modal-backdrop.show,
.modal-backdrop.fade {
    display: none !important;
    opacity: 0 !important;
    visibility: hidden !important;
}

/* Lock body scroll completely */
body.modal-open {
    overflow: hidden !important;
    position: fixed !important;
    width: 100% !important;
    height: 100% !important;
}

/* Ensure modal is always on top of everything */
#applyModal * {
    box-sizing: border-box !important;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    #applyModal {
        padding: 10px !important;
    }
    
    #applyModal .modal-dialog {
        padding: 10px 0 !important;
    }
    
    #applyModal .modal-content {
        max-height: calc(100vh - 20px) !important;
    }
}

/* Form styling improvements */
.modal .form-control,
.modal .form-select {
    border: 1px solid #dee2e6;
    border-radius: 8px;
    padding: 0.75rem;
    transition: all 0.2s;
}

.modal .form-control:focus,
.modal .form-select:focus {
    border-color: #198754;
    box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.15);
}

.modal .form-label {
    font-weight: 600;
    color: #495057;
    margin-bottom: 0.5rem;
}

.modal .btn {
    border-radius: 25px;
    padding: 0.75rem 1.5rem;
    font-weight: 600;
    transition: all 0.2s;
}

.modal .btn:hover {
    transform: translateY(-1px);
}
</style>

<!-- Application Status Messages -->
<?php if (isset($_GET['application'])): ?>
    <div class="alert-container position-fixed top-0 start-50 translate-middle-x" style="z-index: 9999; margin-top: 100px;">
        <?php if ($_GET['application'] === 'success'): ?>
            <div class="alert alert-success alert-dismissible fade show shadow-lg" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                <strong>Application Submitted!</strong> <?= isset($_GET['message']) ? htmlspecialchars($_GET['message']) : 'We will contact you within 48 hours.' ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php elseif ($_GET['application'] === 'error'): ?>
            <div class="alert alert-danger alert-dismissible fade show shadow-lg" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <strong>Error!</strong> <?= isset($_GET['message']) ? htmlspecialchars($_GET['message']) : 'There was an error processing your application.' ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>

<!-- Modern Hero Section with Light Gray Gradient (Matching About & Contact Pages) -->
<header class="page-header position-relative overflow-hidden py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <!-- Subtle pattern overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNMCwwaDEwMHYxMDBoLTEwMHoiIGZpbGw9Im5vbmUiLz48cGF0aCBkPSJNMCwwbDEwMCwxMDAiIHN0cm9rZT0icmdiYSgwLDAsMCwwLjAzKSIgc3Ryb2tlLXdpZHRoPSIwLjUiLz48L3N2Zz4='); opacity: 0.4;"></div>
    
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-up">
                <span class="badge bg-success text-white fw-bold px-3 py-2 rounded-pill mb-3">CAREERS</span>
                <h1 class="display-4 fw-bold mb-4">Join Our Innovative Team</h1>
                <p class="lead mb-4">Be part of a passionate team building the future of sales and inventory management in East Africa.</p>
                <div class="d-flex flex-wrap mb-4">
                    <div class="me-3 mb-2">
                        <div class="d-flex align-items-center">
                            <span class="fw-bold fs-4 me-1 text-success">5+</span>
                            <span class="text-dark opacity-75">Years Growth</span>
                        </div>
                    </div>
                    <div class="me-3 mb-2">
                        <div class="d-flex align-items-center">
                            <span class="fw-bold fs-4 me-1 text-success">40+</span>
                            <span class="text-dark opacity-75">Team Members</span>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="d-flex align-items-center">
                            <span class="fw-bold fs-4 me-1 text-success">4.8/5</span>
                            <span class="text-dark opacity-75">Employee Rating</span>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex flex-wrap gap-2">
                    <a href="#current-openings" class="btn btn-success rounded-pill px-4 shadow-sm hover-shadow transition-300 py-2 pulse-animation">
                        <i class="bi bi-briefcase me-2"></i> View Open Positions
                    </a>
                    <a href="#" class="btn btn-outline-success rounded-pill px-4 shadow-sm hover-shadow transition-300 py-2" data-bs-toggle="modal" data-bs-target="#applyModal" data-job="General Application">
                        <i class="bi bi-person-plus me-2"></i> Submit Application
                    </a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block" data-aos="fade-left" data-aos-delay="200">
                <div class="position-relative">
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-success opacity-10 rounded-4"></div>
                    <img src="https://www.gstatic.com/hiring/CportalUi/teams_1x.jpg" alt="AppNomu SalesQ Team" class="img-fluid rounded-4 shadow-lg" style="transform: translateY(-10px); border: 5px solid rgba(255,255,255,0.7);">
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Why Join Us Section -->
<section class="py-5" style="background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5" data-aos="fade-up">
                <span class="badge bg-success text-white fw-bold px-3 py-2 rounded-pill mb-3">JOIN OUR TEAM</span>
                <h2 class="display-5 fw-bold mb-3">Why Join AppNomu?</h2>
                <p class="lead text-muted">At AppNomu, we're more than just a tech company. We're a team of passionate individuals working together to revolutionize how businesses operate in East Africa.</p>
            </div>
        </div>
        
        <div class="row g-4 mb-5">
            <!-- Reason 1 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm transition-300 hover-shadow rounded-4 p-3">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <span class="bg-success text-white d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px;">
                                <i class="bi bi-rocket-takeoff fs-1"></i>
                            </span>
                        </div>
                        <h4>Impactful Work</h4>
                        <p class="text-muted">Our solutions directly impact thousands of businesses across East Africa, helping them grow and thrive.</p>
                    </div>
                </div>
            </div>
            
            <!-- Reason 2 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm transition-300 hover-shadow rounded-4 p-3">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <span class="bg-success text-white d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px;">
                                <i class="bi bi-lightbulb fs-1"></i>
                            </span>
                        </div>
                        <h4>Innovation Culture</h4>
                        <p class="text-muted">We encourage creative thinking and provide the freedom to experiment with new ideas and technologies.</p>
                    </div>
                </div>
            </div>
            
            <!-- Reason 3 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm transition-300 hover-shadow rounded-4 p-3">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <span class="bg-success text-white d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px;">
                                <i class="bi bi-graph-up-arrow fs-1"></i>
                            </span>
                        </div>
                        <h4>Growth Opportunities</h4>
                        <p class="text-muted">Continuous learning and professional development are core to our culture, with clear paths for career advancement.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Culture -->
<section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5" data-aos="fade-up">
                <span class="badge bg-success text-white fw-bold px-3 py-2 rounded-pill mb-3">OUR VALUES</span>
                <h2 class="display-5 fw-bold mb-3">Our Culture & Values</h2>
                <p class="lead text-muted">At AppNomu, we believe in fostering a culture that encourages innovation, collaboration, and growth.</p>
            </div>
        </div>
        
        <div class="row g-4 mb-5">
            <!-- Value 1 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-shield-check fs-4"></i>
                        </div>
                    </div>
                    <div>
                        <h4>Integrity</h4>
                        <p class="text-muted">We uphold the highest ethical standards in all our dealings, always choosing honesty and transparency.</p>
                    </div>
                </div>
            </div>
            
            <!-- Value 2 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-hand-thumbs-up fs-4"></i>
                        </div>
                    </div>
                    <div>
                        <h4>Excellence</h4>
                        <p class="text-muted">We strive for excellence in everything we do, constantly pushing boundaries and exceeding expectations.</p>
                    </div>
                </div>
            </div>
            
            <!-- Value 3 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-people fs-4"></i>
                        </div>
                    </div>
                    <div>
                        <h4>Collaboration</h4>
                        <p class="text-muted">We believe in the power of teamwork and bringing diverse perspectives together to solve complex problems.</p>
                    </div>
                </div>
            </div>
            
            <!-- Value 4 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-gear fs-4"></i>
                        </div>
                    </div>
                    <div>
                        <h4>Innovation</h4>
                        <p class="text-muted">We embrace change and continuously seek innovative solutions to stay ahead in a rapidly evolving industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Current Openings -->
<section id="current-openings" class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5" data-aos="fade-up">
                <span class="badge bg-success text-white fw-bold px-3 py-2 rounded-pill mb-3">OPPORTUNITIES</span>
                <h2 class="display-5 fw-bold mb-3">Current Openings</h2>
                <p class="lead text-muted">Join our talented team and help shape the future of business technology in East Africa</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Job 1 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm transition-300 hover-shadow rounded-4 hover-shadow">
                    <div class="card-body p-4">
                        <span class="badge bg-success rounded-pill px-2 py-1 mb-3">Full-Time</span>
                        <h4 class="card-title mb-3">Senior Backend Developer</h4>
                        <p class="text-muted mb-3">Build robust, scalable APIs and services that power our sales and inventory management platform.</p>
                        <h6 class="mb-2">Requirements:</h6>
                        <ul class="mb-4 text-muted">
                            <li>5+ years experience with PHP, Laravel or similar frameworks</li>
                            <li>Experience with RESTful APIs and microservices</li>
                            <li>Strong SQL database knowledge</li>
                            <li>Experience with cloud platforms (AWS/Azure)</li>
                        </ul>
                        <a href="#" class="btn btn-success rounded-pill px-4 py-2" data-bs-toggle="modal" data-bs-target="#applyModal" data-job="Senior Backend Developer"><i class="bi bi-send me-2"></i>Apply Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Job 2 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm transition-300 hover-shadow rounded-4 hover-shadow">
                    <div class="card-body p-4">
                        <span class="badge bg-success rounded-pill px-2 py-1 mb-3">Full-Time</span>
                        <h4 class="card-title mb-3">UI/UX Designer</h4>
                        <p class="text-muted mb-3">Create intuitive, engaging user experiences for our web and mobile applications.</p>
                        <h6 class="mb-2">Requirements:</h6>
                        <ul class="mb-4 text-muted">
                            <li>3+ years of UI/UX design experience</li>
                            <li>Proficiency with design tools (Figma, Adobe XD)</li>
                            <li>Experience designing for both web and mobile applications</li>
                            <li>Portfolio demonstrating user-centered design approach</li>
                        </ul>
                        <a href="#" class="btn btn-success rounded-pill px-4 py-2" data-bs-toggle="modal" data-bs-target="#applyModal" data-job="UI/UX Designer"><i class="bi bi-send me-2"></i>Apply Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Job 3 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm transition-300 hover-shadow rounded-4 hover-shadow">
                    <div class="card-body p-4">
                        <span class="badge bg-success rounded-pill px-2 py-1 mb-3">Full-Time</span>
                        <h4 class="card-title mb-3">Sales Representative</h4>
                        <p class="text-muted mb-3">Drive business growth by introducing our innovative solutions to potential clients across East Africa.</p>
                        <h6 class="mb-2">Requirements:</h6>
                        <ul class="mb-4 text-muted">
                            <li>3+ years of B2B sales experience</li>
                            <li>Knowledge of SaaS or enterprise software sales</li>
                            <li>Excellent communication and negotiation skills</li>
                            <li>Experience in the East African market preferred</li>
                        </ul>
                        <a href="#" class="btn btn-success rounded-pill px-4 py-2" data-bs-toggle="modal" data-bs-target="#applyModal" data-job="Sales Representative"><i class="bi bi-send me-2"></i>Apply Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Job 4 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm transition-300 hover-shadow rounded-4 hover-shadow">
                    <div class="card-body p-4">
                        <span class="badge bg-success rounded-pill px-2 py-1 mb-3">Internship</span>
                        <h4 class="card-title mb-3">Software Development Intern</h4>
                        <p class="text-muted mb-3">Learn and grow alongside our experienced development team while contributing to real projects.</p>
                        <h6 class="mb-2">Requirements:</h6>
                        <ul class="mb-4 text-muted">
                            <li>Currently pursuing degree in Computer Science or related field</li>
                            <li>Basic knowledge of web development (HTML, CSS, JavaScript)</li>
                            <li>Eager to learn and adaptable to fast-paced environment</li>
                            <li>Strong problem-solving skills</li>
                        </ul>
                        <a href="#" class="btn btn-success rounded-pill px-4 py-2" data-bs-toggle="modal" data-bs-target="#applyModal" data-job="Software Development Intern"><i class="bi bi-send me-2"></i>Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-12 text-center" data-aos="fade-up">
                <div class="bg-white shadow-sm rounded-4 p-4">
                    <div class="d-flex align-items-center justify-content-center mb-3">
                        <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <i class="bi bi-question-circle text-success fs-4"></i>
                        </div>
                        <h4 class="mb-0">Don't see a position that matches your skills?</h4>
                    </div>
                    <p class="mb-4 text-muted">We're always looking for talented individuals who can contribute to our mission</p>
                    
                    <!-- Multiple Application Methods -->
                    <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                        <a href="#" class="btn btn-success pulse-animation rounded-pill px-4 py-2" data-bs-toggle="modal" data-bs-target="#applyModal" data-job="General Application">
                            <i class="bi bi-send me-2"></i>Submit Application
                        </a>
                        <a href="mailto:career@appnomu.com?subject=Career Inquiry" class="btn btn-outline-primary rounded-pill px-4 py-2">
                            <i class="bi bi-envelope me-2"></i>Email HR Directly
                        </a>
                        <a href="https://www.linkedin.com/company/our-appnomu/" target="_blank" class="btn btn-outline-info rounded-pill px-4 py-2">
                            <i class="bi bi-linkedin me-2"></i>Connect on LinkedIn
                        </a>
                    </div>
                    
                    <!-- Trust Indicators -->
                    <div class="row g-3 text-center">
                        <div class="col-md-3">
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-shield-check text-success me-2"></i>
                                <small class="text-muted">GDPR Compliant</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-clock text-primary me-2"></i>
                                <small class="text-muted">48hr Response</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-eye-slash text-info me-2"></i>
                                <small class="text-muted">Confidential Process</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-people text-warning me-2"></i>
                                <small class="text-muted">Equal Opportunity</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Employee Testimonials & Life at AppNomu -->
<section class="py-5 bg-light position-relative overflow-hidden">
    <!-- Background pattern with improved opacity -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMDAgMjAwIj48cGF0aCBkPSJNMCwxMDBjMzAsMCwyMCwtMzAgNTAsLTMwczIwLDMwLDUwLDMwczIwLC0zMCw1MCwtMzBzMjAsMzAsNTAsMzBzMjAsLTMwLDUwLC0zMHMyMCwzMCw1MCwzMFYwSDBaIiBmaWxsPSJyZ2JhKDI1LDEzNSw4NCwwLjAzKSIvPjwvc3ZnPg=='); opacity: 0.4;"></div>
    
    <!-- Geometric elements for visual depth -->
    <div class="position-absolute" style="top: 10%; right: 5%; width: 100px; height: 100px; background: rgba(25, 135, 84, 0.02); border-radius: 30%; transform: rotate(15deg);"></div>
    <div class="position-absolute" style="bottom: 15%; left: 8%; width: 70px; height: 70px; background: rgba(25, 135, 84, 0.03); border-radius: 8px; transform: rotate(-20deg);"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5" data-aos="fade-up">
                <h2 class="mb-3">Life at AppNomu</h2>
                <p class="lead text-muted">Our workplace culture fosters innovation, collaboration, and growth</p>
            </div>
        </div>
        
        <!-- Work Culture Imagery -->
        <div class="row g-4 mb-5">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="rounded-4 overflow-hidden shadow-sm hover-shadow transition-300">
                    <div class="bg-primary text-white text-center py-5 px-3">
                        <i class="bi bi-people-fill" style="font-size: 3rem;"></i>
                        <h4 class="mt-3 mb-0">Collaborative Teams</h4>
                    </div>
                    <div class="bg-white p-4">
                        <p class="mb-0">Our cross-functional teams work closely together, combining diverse perspectives to develop innovative solutions for our clients.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="rounded-4 overflow-hidden shadow">
                    <div class="bg-info text-white text-center py-5 px-3">
                        <i class="bi bi-lightbulb-fill" style="font-size: 3rem;"></i>
                        <h4 class="mt-3 mb-0">Innovation Hub</h4>
                    </div>
                    <div class="bg-white p-4">
                        <p class="mb-0">We dedicate time for innovation sprints where team members can explore new ideas and technologies to enhance our products.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="rounded-4 overflow-hidden shadow">
                    <div class="bg-warning text-white text-center py-5 px-3">
                        <i class="bi bi-trophy-fill" style="font-size: 3rem;"></i>
                        <h4 class="mt-3 mb-0">Celebrating Success</h4>
                    </div>
                    <div class="bg-white p-4">
                        <p class="mb-0">We recognize achievements through regular team celebrations, awards, and opportunities for career advancement.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Testimonial 1 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm hover-shadow transition-300 rounded-4 p-4">
                    <div class="card-body">
                        <div class="d-flex mb-4">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3" style="width: 64px; height: 64px; font-size: 1.5rem;">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Bazibu Trevor</h5>
                                <p class="text-muted mb-0">Senior Developer, 3 years at AppNomu</p>
                            </div>
                        </div>
                        <blockquote class="blockquote mb-0">
                            <p>"Working at AppNomu has been the highlight of my career. I've had the opportunity to work on challenging projects that have real impact on businesses across Uganda and East Africa. The supportive culture and focus on continuous learning have helped me grow both professionally and personally."</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm hover-shadow transition-300 rounded-4 p-4">
                    <div class="card-body">
                        <div class="d-flex mb-4">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3" style="width: 64px; height: 64px; font-size: 1.5rem;">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Esther Namilmebe</h5>
                                <p class="text-muted mb-0">Product Manager, 2 years at AppNomu</p>
                            </div>
                        </div>
                        <blockquote class="blockquote mb-0">
                            <p>"The collaborative environment at AppNomu is unlike anything I've experienced before. Everyone's ideas are valued, regardless of their position or tenure. This open approach to innovation has allowed us to develop solutions that truly address the needs of our clients and stand out in the market."</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tech Stack & Recruitment Marketing Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <span class="badge bg-primary text-white fw-bold px-3 py-2 rounded-pill mb-3">TECHNOLOGY & GROWTH</span>
                <h2 class="mb-3">Why Top Talent Chooses AppNomu</h2>
                <p class="lead text-muted">Join a company that invests in cutting-edge technology and your professional growth</p>
            </div>
        </div>
        
        <div class="row g-4 mb-5">
            <!-- Tech Stack Showcase -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="bi bi-code-slash fs-4"></i>
                            </div>
                            <h4 class="mb-0">Our Tech Stack</h4>
                        </div>
                        <p class="text-muted mb-4">Work with modern technologies and industry-leading tools</p>
                        
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge bg-primary-soft text-primary me-2">Backend</span>
                                </div>
                                <ul class="list-unstyled small text-muted">
                                    <li>• PHP 8.2+ & Laravel</li>
                                    <li>• Node.js & Express</li>
                                    <li>• MySQL & Redis</li>
                                    <li>• RESTful APIs</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge bg-info-soft text-info me-2">Frontend</span>
                                </div>
                                <ul class="list-unstyled small text-muted">
                                    <li>• React & Vue.js</li>
                                    <li>• Bootstrap 5</li>
                                    <li>• JavaScript ES6+</li>
                                    <li>• Progressive Web Apps</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge bg-warning-soft text-warning me-2">DevOps</span>
                                </div>
                                <ul class="list-unstyled small text-muted">
                                    <li>• AWS & Docker</li>
                                    <li>• CI/CD Pipelines</li>
                                    <li>• Git & GitHub</li>
                                    <li>• Monitoring Tools</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge bg-success-soft text-success me-2">Mobile</span>
                                </div>
                                <ul class="list-unstyled small text-muted">
                                    <li>• React Native</li>
                                    <li>• Flutter</li>
                                    <li>• iOS & Android</li>
                                    <li>• Cross-platform</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Employee Referral Program -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="bi bi-people-fill fs-4"></i>
                            </div>
                            <h4 class="mb-0">Employee Referral Program</h4>
                        </div>
                        <p class="text-muted mb-4">Know someone who'd be a great fit? Refer them and earn rewards!</p>
                        
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="text-center p-3 bg-light rounded-3">
                                    <div class="text-success fw-bold fs-4">UGX 500K</div>
                                    <small class="text-muted">Senior Positions</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center p-3 bg-light rounded-3">
                                    <div class="text-success fw-bold fs-4">UGX 250K</div>
                                    <small class="text-muted">Junior Positions</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="mb-1">How it works:</h6>
                                <small class="text-muted">Refer → Interview → Hire → Get Rewarded</small>
                            </div>
                            <a href="mailto:career@appnomu.com?subject=Employee Referral" class="btn btn-outline-success rounded-pill px-3">
                                <i class="bi bi-envelope me-1"></i> Refer Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- University Partnerships -->
        <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm rounded-4 p-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                        <i class="bi bi-mortarboard-fill fs-4"></i>
                                    </div>
                                    <h4 class="mb-0">University Partnerships & Graduate Programs</h4>
                                </div>
                                <p class="text-muted mb-3">We partner with leading universities to identify and nurture the next generation of tech talent in East Africa.</p>
                                
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span class="small">Makerere University</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span class="small">Kyambogo University</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span class="small">MUST University</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                                <div class="d-flex flex-column gap-2">
                                    <a href="#current-openings" class="btn btn-primary rounded-pill px-4">
                                        <i class="bi bi-search me-2"></i>View Internships
                                    </a>
                                    <a href="mailto:partnerships@appnomu.com" class="btn btn-outline-primary rounded-pill px-4">
                                        <i class="bi bi-handshake me-2"></i>Partner With Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5 position-relative overflow-hidden">
    <!-- Subtle green pattern overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: linear-gradient(135deg, rgba(25, 135, 84, 0.02) 0%, rgba(25, 135, 84, 0.05) 100%);"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <h2 class="mb-3">Benefits & Perks</h2>
                <p class="lead text-muted">We take care of our team so they can focus on doing their best work</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Benefit 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <div class="mb-4">
                        <i class="bi bi-heart-pulse text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h4>Health Insurance</h4>
                    <p class="text-muted">Comprehensive health coverage for you and your dependents</p>
                </div>
            </div>
            
            <!-- Benefit 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div class="mb-4">
                        <i class="bi bi-laptop text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h4>Flexible Work</h4>
                    <p class="text-muted">Flexible hours and remote work options to maintain work-life balance</p>
                </div>
            </div>
            
            <!-- Benefit 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <div class="mb-4">
                        <i class="bi bi-book text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h4>Learning & Development</h4>
                    <p class="text-muted">Annual training budget and support for continued education</p>
                </div>
            </div>
            
            <!-- Benefit 4 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="mb-4">
                        <i class="bi bi-cup-hot text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h4>Modern Office</h4>
                    <p class="text-muted">Comfortable workspace with free snacks and beverages</p>
                </div>
            </div>
            
            <!-- Benefit 5 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                <div class="text-center">
                    <div class="mb-4">
                        <i class="bi bi-calendar-check text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h4>Paid Time Off</h4>
                    <p class="text-muted">Generous vacation policy plus paid holidays and sick days</p>
                </div>
            </div>
            
            <!-- Benefit 6 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                <div class="text-center">
                    <div class="mb-4">
                        <i class="bi bi-stars text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h4>Team Activities</h4>
                    <p class="text-muted">Regular team-building events and social gatherings</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap 5.3.0 Application Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header border-0" style="background: linear-gradient(135deg, #198754 0%, #20c997 100%); color: white;">
                <div>
                    <h5 class="modal-title mb-1" id="applyModalLabel">Apply for <span id="jobTitleDisplay">Position</span></h5>
                    <small class="opacity-75">
                        <i class="bi bi-shield-check me-1"></i>Secure Application • 
                        <i class="bi bi-clock me-1"></i>Response within 48 hours
                    </small>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="applicationForm">
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name" required>
                        </div>
                    </div>
                    
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="resumeUpload" class="form-label">Upload Your Resume/CV</label>
                        <input type="file" class="form-control" id="resumeUpload" name="resume" accept=".pdf,.doc,.docx" required>
                        <div class="form-text">Accepted formats: PDF, DOC, DOCX (Max 5MB)</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="coverLetter" class="form-label">Cover Letter</label>
                        <textarea class="form-control" id="coverLetter" name="cover_letter" rows="4" placeholder="Tell us why you're interested in this position and what makes you a great fit..."></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="portfolio" class="form-label">Portfolio URL (if applicable)</label>
                        <input type="url" class="form-control" id="portfolio" name="portfolio" placeholder="https://yourportfolio.com">
                    </div>
                    
                    <div class="mb-3">
                        <label for="linkedIn" class="form-label">LinkedIn Profile</label>
                        <input type="url" class="form-control" id="linkedIn" name="linkedin" placeholder="https://linkedin.com/in/yourprofile">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Where did you hear about us?</label>
                        <select class="form-select" id="referralSource" name="referral_source">
                            <option selected disabled value="">Choose...</option>
                            <option value="website">Company Website</option>
                            <option value="linkedin">LinkedIn</option>
                            <option value="job_board">Job Board</option>
                            <option value="referral">Employee Referral</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                
                    <div class="mt-4 d-flex justify-content-between align-items-center">
                        <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success px-4">
                            <i class="bi bi-send me-2"></i>Submit Application
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Engagement & Events Section -->
<section class="py-5" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <span class="badge bg-info text-white fw-bold px-3 py-2 rounded-pill mb-3">EVENTS & ENGAGEMENT</span>
                <h2 class="mb-3">Connect With Our Team</h2>
                <p class="lead text-muted">Join our events, ask questions, and get to know the AppNomu culture</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Upcoming Events -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="bi bi-calendar-event fs-4"></i>
                            </div>
                            <h4 class="mb-0">Upcoming Events</h4>
                        </div>
                        
                        <div class="event-list">
                            <!-- Event 1 -->
                            <div class="d-flex align-items-start mb-3 p-3 bg-light rounded-3">
                                <div class="text-center me-3" style="min-width: 60px;">
                                    <div class="fw-bold text-info">OCT</div>
                                    <div class="fs-4 fw-bold">15</div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Virtual Career Fair</h6>
                                    <p class="small text-muted mb-2">Meet our team and learn about open positions</p>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-clock text-muted me-1"></i>
                                        <small class="text-muted">2:00 PM - 4:00 PM EAT</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Event 2 -->
                            <div class="d-flex align-items-start mb-3 p-3 bg-light rounded-3">
                                <div class="text-center me-3" style="min-width: 60px;">
                                    <div class="fw-bold text-info">OCT</div>
                                    <div class="fs-4 fw-bold">22</div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Tech Talk: Building Scalable APIs</h6>
                                    <p class="small text-muted mb-2">Learn from our senior developers</p>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-clock text-muted me-1"></i>
                                        <small class="text-muted">6:00 PM - 7:30 PM EAT</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Event 3 -->
                            <div class="d-flex align-items-start p-3 bg-light rounded-3">
                                <div class="text-center me-3" style="min-width: 60px;">
                                    <div class="fw-bold text-info">NOV</div>
                                    <div class="fs-4 fw-bold">05</div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Office Tour & Meet the Team</h6>
                                    <p class="small text-muted mb-2">Visit our Bugiri Municipality office and meet the team</p>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-clock text-muted me-1"></i>
                                        <small class="text-muted">10:00 AM - 12:00 PM EAT</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <a href="mailto:events@appnomu.com?subject=Event Registration" class="btn btn-outline-info rounded-pill px-4">
                                <i class="bi bi-calendar-plus me-2"></i>Register for Events
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Q&A Section -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="bi bi-question-circle fs-4"></i>
                            </div>
                            <h4 class="mb-0">Ask the Team</h4>
                        </div>
                        
                        <div class="qa-section">
                            <div class="mb-4">
                                <h6 class="text-primary mb-2">Q: What's the interview process like?</h6>
                                <p class="small text-muted mb-3">A: Our process typically includes: Application review → Phone/video screening → Technical assessment → Team interview → Final decision. We aim to complete this within 2 weeks.</p>
                            </div>
                            
                            <div class="mb-4">
                                <h6 class="text-primary mb-2">Q: Do you offer remote work options?</h6>
                                <p class="small text-muted mb-3">A: Yes! We offer flexible hybrid arrangements. Most roles can be done remotely 2-3 days per week, with collaborative days in the office.</p>
                            </div>
                            
                            <div class="mb-4">
                                <h6 class="text-primary mb-2">Q: What learning opportunities are available?</h6>
                                <p class="small text-muted mb-3">A: We provide annual learning budgets, conference attendance, internal tech talks, mentorship programs, and support for professional certifications.</p>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <a href="mailto:career@appnomu.com?subject=Career Question" class="btn btn-outline-warning rounded-pill px-4">
                                <i class="bi bi-chat-dots me-2"></i>Ask Your Question
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-gradient position-relative overflow-hidden" style="background: linear-gradient(135deg, rgba(25, 135, 84, 0.05) 0%, rgba(25, 135, 84, 0.1) 100%);">
    <!-- Geometric shapes for visual interest -->
    <div class="position-absolute top-0 end-0 d-none d-lg-block" style="width: 180px; height: 180px; background: linear-gradient(135deg, rgba(25, 135, 84, 0.1) 0%, rgba(25, 135, 84, 0.2) 100%); border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;"></div>
    <div class="position-absolute bottom-0 start-0 d-none d-lg-block" style="width: 150px; height: 150px; background: linear-gradient(135deg, rgba(25, 135, 84, 0.1) 0%, rgba(25, 135, 84, 0.15) 100%); border-radius: 50% 50% 50% 0%;"></div>
    
    <div class="container py-5 position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up">
                <!-- Form Card with prominent styling -->
                <div id="subscribe-form" class="card border-0 shadow-lg rounded-4 p-1 pulse-animation-slow" style="background: linear-gradient(to right, rgba(255,255,255,0.95), rgba(255,255,255,0.98))">
                    <div class="card-body p-md-5 p-4">
                        <div class="row align-items-center">
                            <div class="col-lg-7 mb-4 mb-lg-0">
                                <span class="badge bg-success text-white fw-bold px-3 py-2 rounded-pill mb-3">NEWSLETTER</span>
                                <h2 class="fw-bold mb-3">Stay Updated on New Opportunities</h2>
                                <p class="lead mb-0">Subscribe to our careers newsletter to get notified about the latest job openings and career tips</p>
                            </div>
                            <div class="col-lg-5">
                                <!-- Subscribe Form -->
                                <form id="subscribeForm" action="subscribe.php" method="POST">
                                    <div class="form-group position-relative mb-3">
                                        <div class="input-group input-group-lg shadow-sm">
                                            <span class="input-group-text bg-light border-0"><i class="bi bi-envelope text-success"></i></span>
                                            <input type="email" name="subscriber_email" class="form-control form-control-lg border-0" 
                                                placeholder="Enter your email address" aria-label="Email address" required
                                                style="border-top-right-radius: 0.5rem; border-bottom-right-radius: 0.5rem;">
                                        </div>
                                    </div>
                                    <button class="btn btn-success btn-lg rounded-pill w-100 shadow-sm hover-shadow transition-300 pulse-animation" type="submit">
                                        <i class="bi bi-bell-fill me-2"></i>Subscribe Now
                                    </button>
                                    <!-- Success/Error Messages -->
                                    <div class="mt-3" id="subscribe-message"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script nonce="<?= $cspNonce ?>">
// Beautiful Success/Error Message Functions
function showSuccessMessage(title, message) {
    const modal = document.getElementById('applyModal');
    const modalBody = modal.querySelector('.modal-body');
    
    // Create success message HTML
    const successHTML = `
        <div class="text-center py-5">
            <div class="mb-4">
                <div class="bg-success rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                    <i class="bi bi-check-lg text-white" style="font-size: 2.5rem;"></i>
                </div>
            </div>
            <h3 class="text-success mb-3">${title}</h3>
            <p class="text-muted mb-4 lead">${message}</p>
            <button type="button" class="btn btn-success btn-lg px-4" onclick="hideApplyModal()">
                <i class="bi bi-check-circle me-2"></i>Got it, thanks!
            </button>
        </div>
    `;
    
    modalBody.innerHTML = successHTML;
}

function showErrorMessage(title, message) {
    const modal = document.getElementById('applyModal');
    const modalBody = modal.querySelector('.modal-body');
    
    // Create error message HTML
    const errorHTML = `
        <div class="text-center py-5">
            <div class="mb-4">
                <div class="bg-danger rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                    <i class="bi bi-exclamation-triangle text-white" style="font-size: 2.5rem;"></i>
                </div>
            </div>
            <h3 class="text-danger mb-3">${title}</h3>
            <p class="text-muted mb-4 lead">${message}</p>
            <div class="d-flex gap-3 justify-content-center">
                <button type="button" class="btn btn-outline-secondary px-4" onclick="hideApplyModal()">
                    <i class="bi bi-x-circle me-2"></i>Close
                </button>
                <button type="button" class="btn btn-primary px-4" onclick="location.reload()">
                    <i class="bi bi-arrow-clockwise me-2"></i>Try Again
                </button>
            </div>
        </div>
    `;
    
    modalBody.innerHTML = errorHTML;
}

document.addEventListener('DOMContentLoaded', function() {
    // Custom Modal Handler (bypassing Bootstrap)
    const applyModal = document.getElementById('applyModal');
    const jobTitleDisplay = document.getElementById('jobTitleDisplay');
    
    function showModal(jobTitle) {
        if (applyModal && jobTitleDisplay) {
            // Store current scroll position
            const scrollY = window.scrollY;
            
            // Set job title
            jobTitleDisplay.textContent = jobTitle || 'Position';
            
            // Show modal
            applyModal.classList.add('show');
            applyModal.style.display = 'block';
            
            // Lock body completely
            document.body.classList.add('modal-open');
            document.body.style.overflow = 'hidden';
            document.body.style.position = 'fixed';
            document.body.style.width = '100%';
            document.body.style.height = '100%';
            document.body.style.top = `-${scrollY}px`;
            
            // Store scroll position for restoration
            applyModal.dataset.scrollY = scrollY;
            
            // Focus on first input after a delay
            setTimeout(() => {
                const firstInput = applyModal.querySelector('input[type="text"]');
                if (firstInput) {
                    firstInput.focus();
                }
            }, 150);
            
        }
    }
    
    function hideModal() {
        if (applyModal) {
            // Hide modal
            applyModal.classList.remove('show');
            applyModal.style.display = 'none';
            
            // Restore body scroll
            document.body.classList.remove('modal-open');
            document.body.style.overflow = '';
            document.body.style.position = '';
            document.body.style.width = '';
            document.body.style.height = '';
            document.body.style.top = '';
            
            // Restore scroll position
            const scrollY = applyModal.dataset.scrollY || 0;
            window.scrollTo(0, parseInt(scrollY));
            
            // Reset form
            const form = document.getElementById('applicationForm');
            if (form) {
                form.reset();
            }
            
        }
    }
    
    // Handle button clicks
    document.querySelectorAll('[data-bs-target="#applyModal"]').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const jobTitle = this.getAttribute('data-job');
            showModal(jobTitle);
        });
    });
    
    // Handle close buttons
    if (applyModal) {
        applyModal.querySelectorAll('[data-bs-dismiss="modal"], .btn-close').forEach(closeBtn => {
            closeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                hideModal();
            });
        });
        
        // Close on backdrop click (more reliable)
        applyModal.addEventListener('click', function(e) {
            // Only close if clicking directly on the modal backdrop, not on content
            if (e.target === applyModal || e.target.classList.contains('modal-dialog')) {
                hideModal();
            }
        });
        
        // Prevent clicks inside modal content from closing modal
        const modalContent = applyModal.querySelector('.modal-content');
        if (modalContent) {
            modalContent.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        }
    }
    
    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && applyModal.classList.contains('show')) {
            hideModal();
        }
    });
    
    // Store hideModal function globally for form submission and success messages
    window.hideApplyModal = hideModal;
    window.hideModal = hideModal;
    
    // Handle application form submission
    const applicationForm = document.getElementById('applicationForm');
    if (applicationForm) {
        applicationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitButton = this.querySelector('button[type="submit"]');
            const formData = new FormData(this);
            
            // Add job title to form data
            const jobTitle = document.getElementById('jobTitleDisplay').textContent;
            formData.append('job_title', jobTitle);
            
            // Show loading state
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...';
            
            // Send AJAX request
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'process_application.php', true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            
            xhr.onload = function() {
                submitButton.disabled = false;
                submitButton.innerHTML = '<i class="bi bi-send me-2"></i>Submit Application';
                
                if (xhr.status === 200) {
                    try {
                        const response = JSON.parse(xhr.responseText);
                        if (response.success) {
                            showSuccessMessage('Application submitted successfully!', 'We will contact you within 48 hours. Thank you for your interest in joining our team!');
                        } else {
                            showErrorMessage('Application Error', response.message || 'Failed to submit application. Please try again.');
                        }
                    } catch (e) {
                        showSuccessMessage('Application submitted!', 'We will review it and get back to you soon. Thank you for your interest!');
                    }
                } else {
                    showErrorMessage('Submission Error', 'There was an error submitting your application. Please try again or email us directly at career@appnomu.com');
                }
            };
            
            xhr.onerror = function() {
                submitButton.disabled = false;
                submitButton.innerHTML = '<i class="bi bi-send me-2"></i>Submit Application';
                showErrorMessage('Network Error', 'Please check your connection and try again.');
            };
            
            xhr.send(formData);
        });
    }
    
    // Auto-hide alert messages after 5 seconds
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            if (typeof bootstrap !== 'undefined') {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            } else {
                alert.style.display = 'none';
            }
        }, 5000);
    });
    
    // Initialize AOS if available
    document.querySelectorAll('[data-aos]').forEach(el => {
        el.style.opacity = '1';
        el.style.transform = 'none';
        el.style.visibility = 'visible';
    });
    
    try {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                once: false,
                duration: 800,
                easing: 'ease-in-out',
                delay: 100
            });
            
            setTimeout(function() {
                document.querySelectorAll('[data-aos]').forEach(el => {
                    el.style.opacity = '';
                    el.style.transform = '';
                    el.style.visibility = '';
                });
            }, 100);
        }
    } catch (e) {
        console.warn('AOS not available, using fallback');
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#' || targetId === '#!') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Handle newsletter subscription form submission
    const subscribeForm = document.getElementById('subscribeForm');
    if (subscribeForm) {
        subscribeForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[name="subscriber_email"]');
            const messageContainer = document.getElementById('subscribe-message');
            const submitButton = this.querySelector('button[type="submit"]');
            
            if (!emailInput.value.trim()) {
                messageContainer.innerHTML = '<div class="alert alert-danger">Please enter your email address</div>';
                return;
            }
            
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Subscribing...';
            messageContainer.innerHTML = '';
            
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'subscribe.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            
            xhr.onload = function() {
                submitButton.disabled = false;
                submitButton.innerHTML = '<i class="bi bi-bell-fill me-2"></i>Subscribe Now';
                
                if (xhr.status === 200) {
                    try {
                        if (!xhr.responseText.trim()) {
                            messageContainer.innerHTML = '<div class="alert alert-success">Thank you for subscribing!</div>';
                            emailInput.value = '';
                            return;
                        }
                        
                        const response = JSON.parse(xhr.responseText);
                        if (response && response.success) {
                            messageContainer.innerHTML = '<div class="alert alert-success">' + response.message + '</div>';
                            emailInput.value = '';
                        } else if (response && response.message) {
                            messageContainer.innerHTML = '<div class="alert alert-danger">' + response.message + '</div>';
                        } else {
                            messageContainer.innerHTML = '<div class="alert alert-success">Thank you for subscribing!</div>';
                            emailInput.value = '';
                        }
                    } catch (e) {
                        messageContainer.innerHTML = '<div class="alert alert-success">Thank you for subscribing!</div>';
                        emailInput.value = '';
                    }
                } else {
                    messageContainer.innerHTML = '<div class="alert alert-success">Thank you for subscribing!</div>';
                    emailInput.value = '';
                }
            };
            
            xhr.onerror = function() {
                submitButton.disabled = false;
                submitButton.innerHTML = '<i class="bi bi-bell-fill me-2"></i>Subscribe Now';
                messageContainer.innerHTML = '<div class="alert alert-success">Thank you for subscribing!</div>';
                emailInput.value = '';
            };
            
            const formData = 'subscriber_email=' + encodeURIComponent(emailInput.value);
            xhr.send(formData);
        });
    }
});
</script>

<?php
// Get the buffer content and clean the buffer
$content = ob_get_clean();

// Load the layout which will use the variables defined above
require_once __DIR__ . '/includes/layout.php';
?>
