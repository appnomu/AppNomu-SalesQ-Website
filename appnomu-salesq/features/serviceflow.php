<?php
// Start the session
session_start();

// Start output buffering
ob_start();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set the current page for active navigation highlighting
$current_page = 'features';

// SEO metadata
$page_title = "ServiceFlow - Professional Service Management Software 2025 | AppNomu SalesQ";
$page_description = "Complete service management solution for African businesses. Manage services, send invoices via Email/WhatsApp/SMS, accept payments through Flutterwave, PayPal, Stripe, Mobile Money & Bank transfers. Track service sales with powerful reports. Perfect for IT services, consulting, creative agencies & professional services in Uganda, Kenya, Nigeria, Tanzania.";

// Set page-specific keywords for SEO
$page_keywords = "service management software, service business software, professional services software, service invoicing software, service billing system, invoice management system, multi-channel invoicing, WhatsApp invoice, SMS invoice, email invoice, Flutterwave payments, PayPal integration, Stripe payments, mobile money payments, bank transfer payments, service sales management, service revenue tracking, service reports, service analytics, client management software, digital receipts, Uganda service software, Kenya service management, Nigeria service billing, Tanzania service invoicing, African service software, IT service management, consulting business software, creative agency software, freelancer invoicing, service CRM, automated invoicing, payment tracking software, service business automation, cloud service management, service workflow automation, online payment integration, service scheduling software, appointment booking, service team management, service quality management, customer satisfaction tracking, client self-service portal, enterprise service solution, SME service software, small business service management, service revenue optimization, service productivity tools, service time tracking, service project management, service contract management, secure service payments, PCI compliant payments, mobile service management, service management app, user-friendly service software, service onboarding support, service customer support, service integration support, managed service provider software, IT service provider tools, consulting firm software, marketing agency tools, design agency software, freelance management, service marketplace, service ROI calculator, service pricing calculator, service digital transformation, service AI integration, service business intelligence, service accounting integration, service ERP integration, service CRM integration, service performance management, service KPI dashboard, service metrics tracking, service compliance management, service best practices, service methodology, service workflow, service delivery model, service business model, service subscription model, service SaaS model, service platform model, service ecosystem, service excellence, service quality, service optimization, service efficiency, service scalability, service reliability, service security, service privacy";

?>

<style>
    /* Custom styles for ServiceFlow feature page - Dark Theme */
    .hero-section {
        padding: 120px 0 80px;
        position: relative;
        overflow: hidden;
    }
    
    .hero-section h1 {
        font-size: 2.8rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }
    
    .hero-section p {
        color: rgba(255, 255, 255, 0.7);
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
    
    .service-flow-card {
        background: rgba(255, 255, 255, 0.03);
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 
            0 10px 30px rgba(0, 0, 0, 0.3),
            0 1px 8px rgba(0, 0, 0, 0.2);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(255, 255, 255, 0.08);
        position: relative;
        overflow: hidden;
    }
    
    .service-flow-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #198754, #20c997, #198754);
        transform: translateX(-100%);
        transition: transform 0.6s ease;
    }
    
    .service-flow-card:hover::before {
        transform: translateX(0);
    }
    
    .service-flow-card:hover {
        transform: translateY(-12px) scale(1.02);
        background: rgba(255, 255, 255, 0.06);
        box-shadow: 
            0 20px 60px rgba(25, 135, 84, 0.3),
            0 10px 20px rgba(25, 135, 84, 0.2);
        border-color: rgba(25, 135, 84, 0.4);
    }
    
    .service-flow-card .rounded-circle {
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 5px 15px rgba(25, 135, 84, 0.2);
    }
    
    .service-flow-card:hover .rounded-circle {
        transform: scale(1.1) rotateY(10deg);
        box-shadow: 0 10px 30px rgba(25, 135, 84, 0.4);
    }
    
    .service-flow-card h4 {
        transition: color 0.3s ease;
        color: #ffffff;
    }
    
    .service-flow-card:hover h4 {
        color: #20c997;
    }
    
    .service-flow-card p {
        color: rgba(255, 255, 255, 0.7);
    }
    
    .payment-logo-container {
        background: linear-gradient(145deg, #ffffff, #f8f9fa);
        padding: 1.5rem;
        border-radius: 16px;
        box-shadow: 
            0 8px 20px rgba(0, 0, 0, 0.08),
            0 2px 6px rgba(0, 0, 0, 0.04),
            inset 0 1px 0 rgba(255, 255, 255, 0.9);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(255, 255, 255, 0.8);
        position: relative;
        overflow: hidden;
    }
    
    .payment-logo-container::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(25, 135, 84, 0.1);
        transform: translate(-50%, -50%);
        transition: width 0.6s ease, height 0.6s ease;
    }
    
    .payment-logo-container:hover::after {
        width: 200px;
        height: 200px;
    }
    
    .payment-logo-container:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 
            0 15px 40px rgba(25, 135, 84, 0.2),
            0 5px 15px rgba(25, 135, 84, 0.1),
            inset 0 1px 0 rgba(255, 255, 255, 1);
        border-color: rgba(25, 135, 84, 0.3);
    }
    
    .payment-logo-container img,
    .payment-logo-container i {
        position: relative;
        z-index: 1;
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .payment-logo-container:hover img,
    .payment-logo-container:hover i {
        transform: scale(1.1) rotateY(5deg);
    }
    
    /* Use Case Cards 3D Effects - Dark Theme */
    .use-case-card-3d {
        background: rgba(255, 255, 255, 0.03);
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 
            0 10px 30px rgba(0, 0, 0, 0.3),
            0 1px 8px rgba(0, 0, 0, 0.2);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(255, 255, 255, 0.08);
        position: relative;
        overflow: hidden;
    }
    
    .use-case-card-3d::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(25, 135, 84, 0.1) 0%, transparent 70%);
        opacity: 0;
        transition: opacity 0.6s ease;
    }
    
    .use-case-card-3d:hover::before {
        opacity: 1;
    }
    
    .use-case-card-3d:hover {
        transform: translateY(-15px) scale(1.03);
        background: rgba(255, 255, 255, 0.06);
        box-shadow: 
            0 20px 60px rgba(25, 135, 84, 0.3),
            0 10px 20px rgba(25, 135, 84, 0.2);
        border-color: rgba(25, 135, 84, 0.4);
    }
    
    .use-case-card-3d i {
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        z-index: 1;
    }
    
    .use-case-card-3d:hover i {
        transform: scale(1.2) rotateY(360deg);
        color: #198754 !important;
    }
    
    .use-case-card-3d h5 {
        position: relative;
        z-index: 1;
        color: #ffffff;
    }
    
    .use-case-card-3d p {
        position: relative;
        z-index: 1;
        color: rgba(255, 255, 255, 0.7) !important;
    }
    
    /* Pricing Card 3D Effects - Dark Theme */
    .pricing-card-3d {
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
    }
    
    .pricing-card-3d:hover {
        transform: translateY(-10px) scale(1.02);
    }
    
    .pricing-card-3d .card {
        box-shadow: 
            0 10px 40px rgba(0, 0, 0, 0.3),
            0 2px 8px rgba(0, 0, 0, 0.2);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .pricing-card-3d:hover .card {
        box-shadow: 
            0 20px 60px rgba(25, 135, 84, 0.3),
            0 10px 20px rgba(25, 135, 84, 0.2);
        border-color: rgba(25, 135, 84, 0.4) !important;
    }
    
    .pricing-card-3d .card li {
        color: rgba(255, 255, 255, 0.85);
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
                <h1><i class="fas fa-cogs text-success me-2"></i>ServiceFlow</h1>
                <p class="lead mb-4">Complete Service Management Solution for Professional Service Businesses</p>
                <p class="mb-4">Manage your entire service business from pricing to payment. Create professional invoices, accept payments online, and track service sales with powerful reporting tools.</p>
                <div class="mb-4">
                    <span class="badge bg-warning text-dark me-2 mb-2 py-2 px-3"><i class="fas fa-crown me-2"></i>Premium Feature</span>
                    <span class="badge bg-warning text-dark me-2 mb-2 py-2 px-3"><i class="fas fa-building me-2"></i>Enterprise Feature</span>
                    <span class="badge bg-success text-white mb-2 py-2 px-3"><i class="fas fa-mobile-alt me-2"></i>Multi-Channel Invoicing</span>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=serviceflow_feature&utm_campaign=hero_section" class="btn btn-success rounded-pill px-4 shadow-lg pulse-animation">Get Started Now</a>
                    <a href="#features" class="btn btn-outline-success rounded-pill px-4">Explore Features</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <img 
                        src="https://appnomu.com/landing/assets/images/salesq_invoice.png" 
                        alt="ServiceFlow - Professional Service Management" 
                        class="img-fluid rounded-4 shadow-lg"
                        data-aos="fade-left"
                        data-aos-delay="200"
                        style="max-width: 100%; height: auto;"
                    >
                    <!-- Floating Badge -->
                    <div class="position-absolute" style="top: 20px; right: 20px;">
                        <div class="bg-success text-white fw-bold px-3 py-2 rounded-pill shadow-sm d-flex align-items-center">
                            <i class="fas fa-bolt me-1"></i> All-in-One Service Platform
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
                <h2 class="mb-4">ServiceFlow <span class="text-success">Core Features</span></h2>
                <p class="lead">Everything you need to run a professional service business</p>
            </div>
        </div>
        
        <!-- Key Features Grid -->
        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-flow-card h-100">
                    <div class="text-center mb-3">
                        <div class="rounded-circle bg-success bg-opacity-10 p-4 d-inline-flex" style="width: 90px; height: 90px;">
                            <i class="fas fa-concierge-bell text-success" style="font-size: 2.5rem; margin: auto;"></i>
                        </div>
                    </div>
                    <h4 class="text-center mb-3">Service Management</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Add unlimited services</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Set custom pricing tiers</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Service categories & descriptions</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Duration & availability tracking</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Service package bundles</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-flow-card h-100">
                    <div class="text-center mb-3">
                        <div class="rounded-circle bg-success bg-opacity-10 p-4 d-inline-flex" style="width: 90px; height: 90px;">
                            <i class="fas fa-file-invoice-dollar text-success" style="font-size: 2.5rem; margin: auto;"></i>
                        </div>
                    </div>
                    <h4 class="text-center mb-3">Multi-Channel Invoicing</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Professional invoice templates</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Send via Email instantly</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>WhatsApp invoice delivery</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>SMS invoice notifications</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Automated payment reminders</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-flow-card h-100">
                    <div class="text-center mb-3">
                        <div class="rounded-circle bg-success bg-opacity-10 p-4 d-inline-flex" style="width: 90px; height: 90px;">
                            <i class="fas fa-credit-card text-success" style="font-size: 2.5rem; margin: auto;"></i>
                        </div>
                    </div>
                    <h4 class="text-center mb-3">Payment Integration</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Flutterwave integration</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>PayPal payments</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Stripe processing</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Bank Account payments</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Mobile Money & Cash</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-flow-card h-100">
                    <div class="text-center mb-3">
                        <div class="rounded-circle bg-success bg-opacity-10 p-4 d-inline-flex" style="width: 90px; height: 90px;">
                            <i class="fas fa-receipt text-success" style="font-size: 2.5rem; margin: auto;"></i>
                        </div>
                    </div>
                    <h4 class="text-center mb-3">Service Receipts</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Completion receipts</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Digital receipt delivery</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Payment confirmations</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Branded receipts</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Receipt history tracking</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-flow-card h-100">
                    <div class="text-center mb-3">
                        <div class="rounded-circle bg-success bg-opacity-10 p-4 d-inline-flex" style="width: 90px; height: 90px;">
                            <i class="fas fa-chart-line text-success" style="font-size: 2.5rem; margin: auto;"></i>
                        </div>
                    </div>
                    <h4 class="text-center mb-3">Sales Recording</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Track all service sales</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Revenue tracking</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Client purchase history</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Service performance metrics</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Payment status monitoring</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-flow-card h-100">
                    <div class="text-center mb-3">
                        <div class="rounded-circle bg-success bg-opacity-10 p-4 d-inline-flex" style="width: 90px; height: 90px;">
                            <i class="fas fa-file-alt text-success" style="font-size: 2.5rem; margin: auto;"></i>
                        </div>
                    </div>
                    <h4 class="text-center mb-3">Advanced Reports</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Service revenue reports</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Client analytics</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Payment status reports</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Performance dashboards</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Export to Excel/PDF</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Multi-Channel Invoicing Section -->
        <div class="row my-5 align-items-center" data-aos="fade-up">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="mb-4"><i class="fas fa-paper-plane text-success me-2"></i>Send Invoices Anywhere, Anytime</h3>
                <p class="lead mb-4">Reach your clients through their preferred communication channel</p>
                <p class="mb-4">ServiceFlow makes it easy to send professional invoices through multiple channels. Whether your clients prefer email, WhatsApp, or SMS, you can deliver invoices instantly and track their status in real-time.</p>
                
                <div class="row g-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm hover-lift">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                <i class="fas fa-envelope text-primary fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Email Invoicing</h5>
                                <p class="text-muted mb-0">Professional email invoices with PDF attachments and payment links</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm hover-lift">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3">
                                <i class="fab fa-whatsapp text-success fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">WhatsApp Invoicing</h5>
                                <p class="text-muted mb-0">Send invoices directly to WhatsApp with instant delivery confirmation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm hover-lift">
                            <div class="bg-info bg-opacity-10 rounded-circle p-3 me-3">
                                <i class="fas fa-sms text-info fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">SMS Invoicing</h5>
                                <p class="text-muted mb-0">Quick SMS notifications with payment details and secure links</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="d-flex align-items-center mb-3 border-bottom pb-3">
                        <div class="bg-success rounded-circle p-3 me-3">
                            <i class="fas fa-file-invoice text-white fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="mb-0">Invoice #INV-2024-001</h4>
                            <div class="badge bg-warning text-dark">Pending Payment</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Service:</span>
                            <span class="fw-bold">Website Development</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Client:</span>
                            <span class="fw-bold">ABC Company Ltd</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Amount:</span>
                            <span class="fw-bold text-success">UGX 2,500,000</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Due Date:</span>
                            <span class="fw-bold">Dec 31, 2024</span>
                        </div>
                    </div>
                    <div class="border-top pt-3">
                        <p class="text-muted small mb-3"><i class="fas fa-info-circle me-2"></i>Send this invoice via:</p>
                        <div class="d-flex flex-wrap gap-2">
                            <button class="btn btn-primary btn-sm rounded-pill">
                                <i class="fas fa-envelope me-1"></i> Email
                            </button>
                            <button class="btn btn-success btn-sm rounded-pill">
                                <i class="fab fa-whatsapp me-1"></i> WhatsApp
                            </button>
                            <button class="btn btn-info btn-sm rounded-pill">
                                <i class="fas fa-sms me-1"></i> SMS
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Payment Integration Section -->
        <div class="row my-5 py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border-radius: 20px;" data-aos="fade-up">
            <div class="col-12 text-center mb-5">
                <h3 class="mb-4"><i class="fas fa-credit-card text-success me-2"></i>Seamless Payment Integration</h3>
                <p class="lead">Accept payments from clients worldwide with trusted payment gateways</p>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="payment-logo-container">
                    <img src="https://flutterwave.com/images/logo/full.svg" alt="Flutterwave" class="img-fluid" style="max-height: 50px; max-width: 100%;">
                </div>
                <div class="text-center mt-3">
                    <h6 class="mb-1">Flutterwave</h6>
                    <p class="text-muted small mb-0">African Payments</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="payment-logo-container">
                    <img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_111x69.jpg" alt="PayPal" class="img-fluid" style="max-height: 50px; max-width: 100%;">
                </div>
                <div class="text-center mt-3">
                    <h6 class="mb-1">PayPal</h6>
                    <p class="text-muted small mb-0">Global Payments</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="payment-logo-container">
                    <img src="https://cdn.worldvectorlogo.com/logos/stripe-4.svg" alt="Stripe" class="img-fluid" style="max-height: 50px; max-width: 100%;">
                </div>
                <div class="text-center mt-3">
                    <h6 class="mb-1">Stripe</h6>
                    <p class="text-muted small mb-0">Card Processing</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="payment-logo-container">
                    <div class="text-center">
                        <i class="fas fa-wallet text-success" style="font-size: 3rem;"></i>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <h6 class="mb-1">Custom Methods</h6>
                    <p class="text-muted small mb-0">Bank, Mobile Money, Cash</p>
                </div>
            </div>
            
            <div class="col-12 text-center mt-4">
                <div class="alert alert-success d-inline-block">
                    <i class="fas fa-shield-alt me-2"></i>All payments are secured with industry-standard encryption
                </div>
            </div>
        </div>
        
        <!-- Reporting & Analytics Section -->
        <div class="row my-5 align-items-center" data-aos="fade-up">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="position-relative">
                    <img 
                        src="https://appnomu.com/landing/assets/images/workflow-automation-img1.webp" 
                        alt="ServiceFlow Reports and Analytics" 
                        class="img-fluid rounded-4 shadow-lg"
                        data-aos="fade-right"
                        data-aos-delay="200"
                        style="width: 100%; height: auto;"
                    >
                    <!-- Floating Badge -->
                    <div class="position-absolute" style="top: 20px; left: 20px;">
                        <div class="bg-success text-white fw-bold px-3 py-2 rounded-pill shadow-sm d-flex align-items-center">
                            <i class="fas fa-chart-bar me-1"></i> Real-Time Analytics
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                <h3 class="mb-4"><i class="fas fa-chart-pie text-success me-2"></i>Powerful Reporting & Analytics</h3>
                <p class="lead mb-4">Make data-driven decisions with comprehensive service reports</p>
                
                <div class="mb-3">
                    <div class="d-flex">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-dollar-sign text-white"></i>
                        </div>
                        <div>
                            <h5><i class="fas fa-money-bill-wave text-success me-2"></i>Revenue Reports</h5>
                            <p>Track service revenue by period, client, or service type. Identify your most profitable services and optimize pricing strategies.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-users text-white"></i>
                        </div>
                        <div>
                            <h5><i class="fas fa-user-chart text-success me-2"></i>Client Analytics</h5>
                            <p>Understand client behavior, purchase patterns, and payment history. Build stronger relationships with data insights.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-file-export text-white"></i>
                        </div>
                        <div>
                            <h5><i class="fas fa-download text-success me-2"></i>Export Capabilities</h5>
                            <p>Export reports to Excel or PDF for sharing with stakeholders, accountants, or for record-keeping purposes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pricing Tiers Section -->
        <div class="row my-5 py-5" style="background: rgba(25, 135, 84, 0.1); border: 1px solid rgba(25, 135, 84, 0.2); border-radius: 20px;" data-aos="fade-up">
            <div class="col-12 text-center mb-5">
                <h3 class="mb-4"><i class="fas fa-crown text-warning me-2"></i>Available for Premium & Enterprise Users</h3>
                <p class="lead">Upgrade to unlock ServiceFlow and transform your service business</p>
            </div>
            
            <div class="col-lg-6 mb-4 pricing-card-3d">
                <div class="card h-100 border-0 shadow-lg position-relative" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.08) !important;">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <div class="rounded-circle bg-warning bg-opacity-10 p-4 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                                <i class="fas fa-star text-warning" style="font-size: 2rem; margin: auto;"></i>
                            </div>
                            <h3 class="mb-2" style="color: #ffffff;">Premium Plan</h3>
                            <p style="color: rgba(255, 255, 255, 0.7);">Perfect for growing service businesses</p>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i>Full ServiceFlow access</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i>Unlimited services & invoices</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i>Email, WhatsApp & SMS invoicing</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i>Payment gateway integration</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i>Basic reports & analytics</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i>Priority support</li>
                        </ul>
                        <div class="text-center">
                            <a href="https://www.appnomu.com/landing/pricing" class="btn btn-warning btn-lg rounded-pill px-4 w-100">
                                <i class="fas fa-arrow-right me-2"></i>View Premium Plans
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4 pricing-card-3d">
                <div class="card h-100 border-0 shadow-lg position-relative" style="background: rgba(255, 255, 255, 0.03); border: 3px solid #198754 !important;">
                    <span class="badge bg-success position-absolute" style="top: -15px; right: 20px; padding: 0.5rem 1.5rem; font-size: 0.9rem;">RECOMMENDED</span>
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <div class="rounded-circle bg-success bg-opacity-10 p-4 d-inline-flex mb-3" style="width: 80px; height: 80px;">
                                <i class="fas fa-building text-success" style="font-size: 2rem; margin: auto;"></i>
                            </div>
                            <h3 class="mb-2" style="color: #ffffff;">Enterprise Plan</h3>
                            <p style="color: rgba(255, 255, 255, 0.7);">For established service organizations</p>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i>Everything in Premium</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i>Advanced reporting & analytics</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i>Custom payment gateway setup</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i>Multi-user access & permissions</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i>API access for integrations</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i>Dedicated account manager</li>
                        </ul>
                        <div class="text-center">
                            <a href="https://www.appnomu.com/landing/pricing" class="btn btn-success btn-lg rounded-pill px-4 w-100">
                                <i class="fas fa-rocket me-2"></i>View Enterprise Plans
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Use Cases Section -->
        <div class="row my-5" data-aos="fade-up">
            <div class="col-12 text-center mb-5">
                <h3 class="mb-4">Perfect For <span class="text-success">Service-Based Businesses</span></h3>
                <p class="lead">ServiceFlow is designed for businesses that provide professional services</p>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center use-case-card-3d h-100">
                    <i class="fas fa-laptop-code text-success mb-3" style="font-size: 3rem;"></i>
                    <h5 class="mb-3">IT & Software</h5>
                    <p class="text-muted small">Web development, app development, IT consulting, software maintenance</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center use-case-card-3d h-100">
                    <i class="fas fa-paint-brush text-success mb-3" style="font-size: 3rem;"></i>
                    <h5 class="mb-3">Creative Services</h5>
                    <p class="text-muted small">Graphic design, video production, photography, content creation</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center use-case-card-3d h-100">
                    <i class="fas fa-briefcase text-success mb-3" style="font-size: 3rem;"></i>
                    <h5 class="mb-3">Consulting</h5>
                    <p class="text-muted small">Business consulting, financial advisory, legal services, HR consulting</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center use-case-card-3d h-100">
                    <i class="fas fa-wrench text-success mb-3" style="font-size: 3rem;"></i>
                    <h5 class="mb-3">Professional Services</h5>
                    <p class="text-muted small">Maintenance, repairs, cleaning, installation, technical support</p>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="p-5 rounded-3 text-center mt-5" style="background: rgba(25, 135, 84, 0.1); border: 1px solid rgba(25, 135, 84, 0.2); box-shadow: 0 4px 20px rgba(0,0,0,0.2);" data-aos="fade-up">
            <h2 class="mb-3"><i class="fas fa-rocket text-success me-2"></i>Ready to Streamline Your Service Business?</h2>
            <p class="lead mb-4">Join thousands of service businesses using ServiceFlow to manage their operations efficiently.</p>
            <div class="d-flex justify-content-center flex-wrap gap-2">
                <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=feature_serviceflow&utm_campaign=free_trial" class="btn btn-success btn-lg rounded-pill px-4"><i class="fas fa-rocket me-2"></i>Start Free Trial</a>
                <a href="https://www.appnomu.com/landing/contact" class="btn btn-outline-success btn-lg rounded-pill px-4"><i class="fas fa-headset me-2"></i>Contact Sales</a>
            </div>
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
