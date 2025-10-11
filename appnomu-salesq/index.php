<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs/php_errors.log');

// Create logs directory if it doesn't exist
if (!is_dir(__DIR__ . '/logs')) {
    @mkdir(__DIR__ . '/logs', 0755, true);
}

// Load configuration with error handling
try {
    require_once __DIR__ . '/config.php';
} catch (Exception $e) {
    error_log("Config loading error: " . $e->getMessage());
    die("Configuration error. Please check server logs.");
}

// Load country-specific content
require_once __DIR__ . '/includes/country_content.php';

// Set the current page for navigation highlighting
$current_page = 'home';

// Set page metadata
$page_title = 'Best CRM Software for Small Business 2024 | AppNomu SalesQ - Affordable SMS Marketing & Inventory Management';
$page_description = 'Affordable CRM software for small businesses in Africa. Get SMS marketing, voice broadcasting, inventory management, and sales automation in one platform. Free 14-day trial, no credit card required. Trusted by 25,000+ businesses worldwide.';

// Set page-specific keywords for SEO
$page_keywords = 'affordable CRM software, small business CRM, best CRM for startups, SMS marketing software, inventory management system, business automation tools, CRM software Africa, cheap CRM solution, sales automation software, customer management system, bulk SMS marketing, CRM with SMS integration, small business software, point of sale system, mobile CRM app, cloud-based CRM, CRM for retail business, inventory tracking software, automated SMS campaigns, lead management software, customer database software, sales pipeline management, CRM integration tools, business process automation, multi-channel marketing platform';

// Start output buffering
ob_start();

// Get current country for JavaScript
$currentCountry = get_user_country();
?>

<!-- Hero Section with Clean Modern Design -->
<section class="hero-section position-relative" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); padding: 80px 0 60px;">
    <!-- Subtle decorative accent -->
    <div class="position-absolute top-0 end-0 d-none d-lg-block" style="opacity: 0.05; width: 300px; height: 300px; background: radial-gradient(circle, #198754 0%, transparent 70%); border-radius: 50%;"></div>
    
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="urgency-banner bg-warning text-dark px-3 py-2 rounded-pill mb-3 d-inline-block fw-bold" id="urgency-banner">
                    <i class="bi bi-clock-fill me-2"></i><?= get_country_content('hero.urgency_banner', 'Limited Time: 50% Off First 3 Months - Ends in 5 Days!') ?>
                </div>
                
                <!-- Live Signup Counter -->
                <div class="live-activity mb-3">
                    <div class="activity-notification bg-white border border-success rounded-pill px-3 py-2 d-inline-flex align-items-center shadow-sm animate-fade-in">
                        <div class="activity-avatar bg-success rounded-circle me-2" style="width: 24px; height: 24px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-person-fill text-white" style="font-size: 0.7rem;"></i>
                        </div>
                        <small class="text-dark fw-bold mb-0">
                            <span id="recent-signup-name"><?= get_country_content('hero.recent_signup', 'Sarah from Kenya') ?></span> just signed up 
                            <span id="signup-time">2 minutes ago</span>
                        </small>
                        <div class="activity-pulse ms-2">
                            <div class="pulse-dot bg-success"></div>
                        </div>
                    </div>
                </div>
                <h1 class="display-4 fw-bold mb-3 text-dark" id="hero-title"><span class="text-success"><?= get_country_content('hero.title', 'Grow Sales 40% with SalesQ-AI CRM Platform') ?></span></h1>
                <p class="lead mb-4 text-dark" style="font-size: 1.2rem; font-weight: 300;" id="hero-subtitle"><?= get_country_content('hero.subtitle', 'AI-powered CRM with SalesQ-AI features, SMS marketing, and inventory management. Join 25,000+ businesses automating sales and saving 15 hours weekly with intelligent automation.') ?></p>
                <div class="cta-container mb-4">
                    <div class="position-relative d-inline-block">
                        <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=hero&utm_campaign=salesq" class="btn btn-success btn-lg rounded-pill px-4 py-3 shadow-lg pulse-animation" target="_blank" rel="noopener noreferrer" style="min-height: 50px; font-weight: 700; font-size: 1rem; display: inline-flex; align-items: center; justify-content: center;" id="cta-button">
                            <i class="bi bi-lightning-charge me-2"></i><span id="cta-text"><?= get_country_content('hero.cta_text', 'Start Your Free 14-Day Trial') ?></span>
                        </a>
                        <div class="position-absolute d-none d-sm-block" style="top: -8px; right: -15px;">
                            <span class="badge rounded-pill bg-danger text-white animate-pulse" style="font-size: 0.65rem;">NO CARD</span>
                        </div>
                    </div>
                    <div class="guarantee-text text-center mt-3">
                        <small class="text-muted" id="guarantee-text"><i class="bi bi-shield-check text-success me-1"></i><?= get_country_content('hero.guarantee', '30-Day Money Back Guarantee • Setup in 5 Minutes') ?></small>
                    </div>
                </div>
                <div class="trusted-by mt-4 p-3 rounded bg-white shadow-sm" style="border-left: 4px solid #198754; transition: all 0.3s ease;" data-aos="fade-up" data-aos-delay="100">
                    <div class="d-flex align-items-center mb-2">
                        <div class="bg-success-soft rounded-circle p-1 me-2">
                            <i class="bi bi-shield-check text-success"></i>
                        </div>
                        <p class="text-dark mb-0 small fw-bold">TRUSTED BY INDUSTRY LEADERS</p>
                    </div>
                    <div class="d-flex flex-wrap align-items-center justify-content-start gap-4 pt-2">
                        <!-- Client logo placeholders - replace with actual logos when available -->
                        <div class="client-logo-placeholder" style="height: 40px; width: 120px; background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; color: #6c757d; filter: grayscale(30%); transition: all 0.3s ease;" onmouseover="this.style.filter='grayscale(0%)'; this.style.transform='scale(1.05)'" onmouseout="this.style.filter='grayscale(30%)'; this.style.transform='scale(1)'">
                            Berean Hand
                        </div>
                        <div class="client-logo-placeholder" style="height: 30px; width: 100px; background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; color: #6c757d; filter: grayscale(30%); transition: all 0.3s ease;" onmouseover="this.style.filter='grayscale(0%)'; this.style.transform='scale(1.05)'" onmouseout="this.style.filter='grayscale(30%)'; this.style.transform='scale(1)'">
                            Coca-Cola
                        </div>
                        <div class="client-logo-placeholder" style="height: 35px; width: 80px; background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; color: #6c757d; filter: grayscale(30%); transition: all 0.3s ease;" onmouseover="this.style.filter='grayscale(0%)'; this.style.transform='scale(1.05)'" onmouseout="this.style.filter='grayscale(30%)'; this.style.transform='scale(1)'">
                            Pepsi UG
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                <div class="position-relative" data-aos="fade-left" data-aos-delay="200">
                    <!-- Featured Product Image with Modern Frame - Mobile Optimized -->
                    <div class="hero-image-container">
                        <div class="hero-image-frame position-relative" style="background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%); border-radius: 15px; padding: 12px; box-shadow: 0 15px 30px rgba(0,0,0,0.1), 0 5px 15px rgba(0,0,0,0.05); overflow: hidden; max-width: 100%; margin: 0 auto;">
                            <!-- Subtle background pattern -->
                            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at 20% 20%, rgba(25, 135, 84, 0.03) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(25, 135, 84, 0.02) 0%, transparent 50%); pointer-events: none;"></div>
                            
                            <img src="https://appnomu.com/landing/assets/images/Header_AppNomu.jpg" alt="AppNomu SalesQ - Complete Business Management Platform" class="img-fluid rounded-3 position-relative" loading="lazy" style="box-shadow: 0 4px 15px rgba(0,0,0,0.08); transition: transform 0.3s ease; width: 100%; height: auto;" onmouseover="this.style.transform='scale(1.01)'" onmouseout="this.style.transform='scale(1)'">
                            
                            <!-- Enhanced Status Badges - Mobile Responsive -->
                            <div class="position-absolute d-flex flex-column flex-sm-row gap-1 gap-sm-2" style="top: 10px; right: 10px;">
                                <div class="badge bg-success text-white px-2 px-sm-3 py-1 py-sm-2 rounded-pill shadow-sm d-flex align-items-center" style="font-size: 0.65rem; backdrop-filter: blur(10px);">
                                    <i class="bi bi-lightning-fill me-1"></i> <span class="d-none d-sm-inline">AI-Powered</span><span class="d-sm-none">AI</span>
                                </div>
                                <div class="badge bg-primary text-white px-2 px-sm-3 py-1 py-sm-2 rounded-pill shadow-sm d-flex align-items-center" style="font-size: 0.65rem; backdrop-filter: blur(10px);">
                                    <i class="bi bi-shield-check me-1"></i> <span class="d-none d-sm-inline">Secure</span><span class="d-sm-none">Safe</span>
                                </div>
                            </div>
                            
                            <!-- Live Usage Indicator - Mobile Responsive -->
                            <div class="position-absolute d-flex align-items-center gap-1 gap-sm-2 bg-white rounded-pill px-2 px-sm-3 py-1 py-sm-2 shadow-sm" style="bottom: 10px; left: 10px; border: 2px solid #198754;">
                                <div class="bg-success rounded-circle" style="width: 6px; height: 6px; animation: pulse 2s infinite;"></div>
                                <small class="fw-bold text-dark" style="font-size: 0.7rem;">25K+ Users</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Enhanced Feature Highlights for Desktop -->
                    <div class="d-none d-lg-block">
                        <!-- Voice Broadcasting Feature -->
                        <div class="position-absolute bg-white rounded-4 p-3 shadow-lg" style="bottom: 30px; right: -30px; border-left: 4px solid #198754; max-width: 160px; backdrop-filter: blur(10px);">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-telephone-fill text-success me-2"></i>
                                <small class="fw-bold">Voice Calls</small>
                            </div>
                            <small class="text-muted">Automated voice broadcasting campaigns</small>
                        </div>
                        
                        <!-- SMS Marketing Feature -->
                        <div class="position-absolute bg-white rounded-4 p-3 shadow-lg" style="top: 40px; left: -30px; border-left: 4px solid #198754; max-width: 160px; backdrop-filter: blur(10px);">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-envelope-paper text-success me-2"></i>
                                <small class="fw-bold">Bulk SMS</small>
                            </div>
                            <small class="text-muted">Send thousands of messages instantly</small>
                        </div>
                        
                        <!-- Analytics Feature -->
                        <div class="position-absolute bg-white rounded-4 p-3 shadow-lg" style="top: 50%; left: -40px; transform: translateY(-50%); border-left: 4px solid #198754; max-width: 160px; backdrop-filter: blur(10px);">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-graph-up text-success me-2"></i>
                                <small class="fw-bold">Real-time Analytics</small>
                            </div>
                            <small class="text-muted">Business insights & reports</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Hero Section Styles -->
<style>
/* Hero Image Enhancements - Mobile Optimized */
.hero-image-frame {
    transition: all 0.4s ease;
    /* Remove 3D transforms on mobile to prevent tilting */
    transform: none;
}

/* Only apply 3D effects on larger screens */
@media (min-width: 992px) {
    .hero-image-frame {
        transform: perspective(1000px) rotateY(-1deg) rotateX(1deg);
    }
    
    .hero-image-frame:hover {
        transform: perspective(1000px) rotateY(0deg) rotateX(0deg) scale(1.01);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15), 0 10px 20px rgba(0,0,0,0.1) !important;
    }
}

/* Reduced Floating Animation - Less Aggressive */
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-5px); }
}

/* Disable floating animations on mobile to prevent shaking */
@media (min-width: 992px) {
    .hero-section .position-absolute.bg-white {
        animation: float 8s ease-in-out infinite;
    }
    
    .hero-section .position-absolute.bg-white:nth-child(2) {
        animation-delay: -2s;
    }
    
    .hero-section .position-absolute.bg-white:nth-child(3) {
        animation-delay: -4s;
    }
}

/* Pulse Animation for Live Indicator */
@keyframes pulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.2); opacity: 0.7; }
    100% { transform: scale(1); opacity: 1; }
}

/* Mobile Responsiveness Improvements */
@media (max-width: 991px) {
    /* Prevent horizontal overflow on mobile */
    .hero-section {
        overflow-x: hidden;
        padding: 60px 0 40px !important;
    }
    
    /* Ensure hero image doesn't cause horizontal scroll */
    .hero-image-container {
        max-width: 100%;
        overflow: hidden;
    }
    
    .hero-image-frame {
        max-width: 100%;
        margin: 0 auto;
        padding: 8px !important;
        border-radius: 12px !important;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08) !important;
    }
    
    /* Reduce text sizes on mobile for better fit */
    .display-4 {
        font-size: 2rem !important;
        line-height: 1.2;
    }
    
    .lead {
        font-size: 1rem !important;
        line-height: 1.4;
    }
    
    /* Optimize CTA button for mobile */
    .btn-lg {
        font-size: 0.9rem !important;
        padding: 12px 20px !important;
        min-height: auto !important;
    }
    
    /* Hide overflow-causing elements on mobile */
    .position-absolute.bg-white {
        display: none !important;
    }
    
    /* Ensure badges don't overflow */
    .badge {
        font-size: 0.6rem !important;
        white-space: nowrap;
    }
    
    /* Prevent client logos from causing overflow */
    .client-logo-placeholder {
        flex-shrink: 0;
        min-width: 60px !important;
        width: auto !important;
        height: 30px !important;
        font-size: 0.7rem !important;
    }
}

@media (max-width: 576px) {
    /* Extra small screens - further optimizations */
    .hero-section {
        padding: 40px 0 30px !important;
    }
    
    .display-4 {
        font-size: 1.75rem !important;
    }
    
    .lead {
        font-size: 0.95rem !important;
    }
    
    /* Stack badges vertically on very small screens */
    .position-absolute.d-flex {
        flex-direction: column !important;
        gap: 0.25rem !important;
    }
    
    /* Reduce padding in trusted section */
    .trusted-by {
        padding: 1rem !important;
    }
    
    /* Make client logos smaller */
    .client-logo-placeholder {
        height: 25px !important;
        min-width: 50px !important;
        font-size: 0.65rem !important;
    }
}

/* Enhanced Badge Animations */
.hero-image-frame .badge {
    transition: all 0.3s ease;
}

.hero-image-frame:hover .badge {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

/* Responsive CSS Improvements */
@media (max-width: 576px) {
    .hero-section {
        padding: 60px 0 40px !important;
    }
    
    .hero-image-frame {
        transform: none !important;
        border-radius: 16px !important;
        padding: 12px !important;
    }
    
    .display-4 {
        font-size: 1.8rem !important;
        line-height: 1.2;
    }
    
    .lead {
        font-size: 1.1rem !important;
    }
    
    .btn-lg {
        padding: 14px 24px !important;
        font-size: 0.95rem !important;
        min-height: 50px !important;
        width: 100%;
        margin-bottom: 1rem;
        white-space: nowrap !important;
        overflow: visible !important;
    }
    
    .stat-card {
        margin-bottom: 1rem;
        padding: 1.5rem 1rem;
    }
    
    .stat-number {
        font-size: 1.5rem;
    }
    
    .hero-image-frame {
        padding: 8px !important;
    }
    
    .urgency-banner {
        font-size: 0.9rem !important;
        text-align: center;
        display: block !important;
    }
    
    .cta-container {
        text-align: center;
    }
    
    .risk-reversal .col-6 {
        margin-bottom: 2rem !important;
    }
    
    .performance-metrics .display-4 {
        font-size: 2.5rem !important;
    }
}

@media (max-width: 768px) {
    .section {
        padding: 60px 0 !important;
    }
    
    .section-header {
        margin-bottom: 40px !important;
    }
    
    .trusted-by {
        margin-top: 2rem !important;
    }
    
    .client-logo {
        height: 30px !important;
    }
}

/* Improved touch targets */
.btn {
    min-height: 44px;
    touch-action: manipulation;
}

/* Better focus states for accessibility */
.btn:focus {
    box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.25);
}

/* Smooth animations with reduced motion support */
@media (prefers-reduced-motion: reduce) {
    * {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}

/* Professional CSS Consolidation - Phase 2 */

/* Section Standardization */
.section {
    position: relative;
}

.section-header {
    margin-bottom: 4rem;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    line-height: 1.2;
}

.section-subtitle {
    font-size: 1.125rem;
    font-weight: 400;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.section-divider {
    transition: width 0.3s ease;
}

.section-divider:hover {
    width: 80px !important;
}

/* Card Components */
.stat-card {
    background: white;
    padding: 2rem 1.5rem;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15) !important;
}

.stat-icon {
    width: 60px;
    height: 60px;
    margin: 0 auto 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
}

.stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: #198754;
    margin-bottom: 0.5rem;
}

.stat-label {
    color: #6c757d;
    font-weight: 500;
    margin-bottom: 0;
}

.step-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.step-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(25, 135, 84, 0.1) !important;
}

.feature-card {
    background: white;
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(25, 135, 84, 0.1) !important;
}

.benefit-card {
    transition: all 0.3s ease;
}

.benefit-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(25, 135, 84, 0.15) !important;
}

/* Icon Styling */
.icon-box {
    width: 64px;
    height: 64px;
    background: rgba(25, 135, 84, 0.1) !important;
    color: #198754;
    font-size: 1.5rem;
}

.step-icon {
    background: rgba(25, 135, 84, 0.1) !important;
    color: #198754;
}

.benefit-icon {
    background: rgba(25, 135, 84, 0.1) !important;
    color: #198754;
}

/* Typography Improvements */
.display-4 {
    font-weight: 700;
    line-height: 1.1;
}

.lead {
    font-weight: 400;
    line-height: 1.6;
}

/* Button Enhancements */
.btn-success {
    background: linear-gradient(135deg, #198754 0%, #20c997 100%);
    border: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-success:hover {
    background: linear-gradient(135deg, #146c43 0%, #198754 100%);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(25, 135, 84, 0.3);
}

.btn-outline-success {
    border: 2px solid #198754;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-outline-success:hover {
    background: #198754;
    border-color: #198754;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(25, 135, 84, 0.2);
}

/* Loading States */
.loading {
    opacity: 0.7;
    pointer-events: none;
}

.loading::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 20px;
    height: 20px;
    margin: -10px 0 0 -10px;
    border: 2px solid #198754;
    border-top: 2px solid transparent;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Testimonial Cards */
.testimonial-card {
    background: white;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

/* Professional Spacing */
.mb-section {
    margin-bottom: 5rem;
}

.py-section {
    padding: 5rem 0;
}

/* Enhanced Animations */
.fade-in-up {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease;
}

.fade-in-up.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Professional Color Palette */
:root {
    --primary-green: #198754;
    --primary-green-light: #20c997;
    --primary-green-dark: #146c43;
    --text-dark: #212529;
    --text-muted: #6c757d;
    --bg-light: #f8f9fa;
    --shadow-light: rgba(0,0,0,0.08);
    --shadow-medium: rgba(0,0,0,0.15);
}

/* Phase 3: Advanced Enhancements */

/* Advanced Micro-Interactions */
.hero-section {
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(25, 135, 84, 0.03) 0%, transparent 70%);
    animation: subtle-pulse 8s ease-in-out infinite;
    pointer-events: none;
}

@keyframes subtle-pulse {
    0%, 100% { transform: scale(1) rotate(0deg); opacity: 0.5; }
    50% { transform: scale(1.1) rotate(2deg); opacity: 0.8; }
}

/* Advanced Button Interactions */
.btn-success {
    position: relative;
    overflow: hidden;
}

.btn-success::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.btn-success:hover::before {
    width: 300px;
    height: 300px;
}

/* Scroll-Triggered Animations */
.scroll-reveal {
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.scroll-reveal.revealed {
    opacity: 1;
    transform: translateY(0);
}

.scroll-reveal-left {
    opacity: 0;
    transform: translateX(-50px);
    transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.scroll-reveal-left.revealed {
    opacity: 1;
    transform: translateX(0);
}

.scroll-reveal-right {
    opacity: 0;
    transform: translateX(50px);
    transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.scroll-reveal-right.revealed {
    opacity: 1;
    transform: translateX(0);
}

/* Advanced Card Interactions */
.stat-card {
    position: relative;
    overflow: hidden;
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(25, 135, 84, 0.1), transparent);
    transition: left 0.8s;
}

.stat-card:hover::before {
    left: 100%;
}

/* Parallax Effect */
.parallax-element {
    transform: translateZ(0);
    will-change: transform;
}

/* Number Counter Animation */
.counter {
    font-variant-numeric: tabular-nums;
}

/* Enhanced Focus States for Accessibility */
.btn:focus-visible {
    outline: 3px solid rgba(25, 135, 84, 0.5);
    outline-offset: 2px;
    box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.25);
}

.card:focus-within {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(25, 135, 84, 0.15);
}

/* Smooth Page Transitions */
.page-transition {
    opacity: 0;
    animation: fadeInPage 0.8s ease-in-out forwards;
}

@keyframes fadeInPage {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Advanced Loading States */
.skeleton-loader {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: skeleton-loading 1.5s infinite;
}

@keyframes skeleton-loading {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}

/* Interactive Elements */
.interactive-element {
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.interactive-element:hover {
    transform: scale(1.02);
}

/* Progress Indicators */
.scroll-progress {
    position: fixed;
    top: 0;
    left: 0;
    width: 0%;
    height: 3px;
    background: linear-gradient(90deg, var(--primary-green), var(--primary-green-light));
    z-index: 9999;
    transition: width 0.1s ease;
}

/* Advanced Typography Effects */
.text-gradient {
    background: linear-gradient(135deg, var(--primary-green), var(--primary-green-light));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Performance Optimizations */
.will-change-transform {
    will-change: transform;
}

.will-change-opacity {
    will-change: opacity;
}

/* Accessibility Enhancements */
.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}

/* High Contrast Mode Support */
@media (prefers-contrast: high) {
    .btn-success {
        border: 2px solid currentColor;
    }
    
    .card {
        border: 2px solid currentColor;
    }
}

/* Dark Mode Preparation */
@media (prefers-color-scheme: dark) {
    :root {
        --text-dark: #ffffff;
        --text-muted: #a0a0a0;
        --bg-light: #1a1a1a;
    }
}
</style>

    <!-- Stats Section -->
    <section class="stats-section py-5" style="background: linear-gradient(180deg, #f8f9fa 0%, #fff 100%); padding: 80px 0;" aria-label="Company Statistics">
        <div class="container">
            <div class="row g-4" role="list">
                <!-- Happy Clients -->
                <div class="col-6 col-md-3 mb-4" role="listitem">
                    <div class="stat-card" style="border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-top: 4px solid #198754; transition: all 0.3s ease;" role="group" aria-labelledby="stat-clients">
                        <div class="stat-icon rounded-circle mx-auto mb-3" style="background: linear-gradient(135deg, #198754, #20c997); width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;" aria-hidden="true">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="stat-number" style="font-size: 2rem; font-weight: 700; color: #198754; margin-bottom: 0.5rem;" aria-label="25000 plus happy clients">25000+</div>
                        <p class="stat-label" style="color: #6c757d; font-weight: 500; margin-bottom: 0;" id="stat-clients">Happy Clients</p>
                    </div>
                </div>
                
                <!-- Years in Business -->
                <div class="col-6 col-md-3 mb-4" role="listitem">
                    <div class="stat-card" style="border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-top: 4px solid #198754; transition: all 0.3s ease;" role="group" aria-labelledby="stat-years">
                        <div class="stat-icon rounded-circle mx-auto mb-3" style="background: linear-gradient(135deg, #198754, #20c997); width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;" aria-hidden="true">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div class="stat-number" style="font-size: 2rem; font-weight: 700; color: #198754; margin-bottom: 0.5rem;" aria-label="5 plus years in business">5+</div>
                        <p class="stat-label" style="color: #6c757d; font-weight: 500; margin-bottom: 0;" id="stat-years">Years in Business</p>
                    </div>
                </div>
                
                <!-- Customer Satisfaction -->
                <div class="col-6 col-md-3 mb-4" role="listitem">
                    <div class="stat-card" style="border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-top: 4px solid #198754; transition: all 0.3s ease;" role="group" aria-labelledby="stat-satisfaction">
                        <div class="stat-icon rounded-circle mx-auto mb-3" style="background: linear-gradient(135deg, #198754, #20c997); width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;" aria-hidden="true">
                            <i class="bi bi-emoji-smile-fill"></i>
                        </div>
                        <div class="stat-number" style="font-size: 2rem; font-weight: 700; color: #198754; margin-bottom: 0.5rem;" aria-label="98 percent customer satisfaction">98%</div>
                        <p class="stat-label" style="color: #6c757d; font-weight: 500; margin-bottom: 0;" id="stat-satisfaction">Customer Satisfaction</p>
                    </div>
                </div>
                
                <!-- Messages Sent -->
                <div class="col-6 col-md-3 mb-4" role="listitem">
                    <div class="stat-card" style="border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-top: 4px solid #198754; transition: all 0.3s ease;" role="group" aria-labelledby="stat-messages">
                        <div class="stat-icon rounded-circle mx-auto mb-3" style="background: linear-gradient(135deg, #198754, #20c997); width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;" aria-hidden="true">
                            <i class="bi bi-chat-square-text-fill"></i>
                        </div>
                        <div class="stat-number" style="font-size: 2rem; font-weight: 700; color: #198754; margin-bottom: 0.5rem;" aria-label="15 million plus messages sent">15M+</div>
                        <p class="stat-label" style="color: #6c757d; font-weight: 500; margin-bottom: 0;" id="stat-messages">Messages Sent</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="section py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); padding: 80px 0;">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Small Business <span class="text-success">CRM Success Stories</span></h2>
                <p class="section-subtitle lead text-muted mb-4">Real testimonials from businesses using our affordable CRM software</p>
                <div class="section-divider mx-auto" style="width: 60px; height: 3px; background-color: #198754; border-radius: 2px;"></div>
            </div>
            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="step-card text-center p-4 h-100 bg-white shadow-sm rounded-4" style="transition: all 0.3s ease;" data-aos="fade-up" data-aos-delay="100">
                        <div class="step-number rounded-circle bg-success-soft text-success fw-bold mb-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 1.5rem;">1</div>
                        <div class="step-icon mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="bi bi-person-plus text-success fs-4"></i>
                        </div>
                        <h3>Create an Account</h3>
                        <p>Sign up for a free account and get instant access to our platform. No credit card required to start.</p>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="step-card text-center p-4 h-100 bg-white shadow-sm rounded-4" style="transition: all 0.3s ease;" data-aos="fade-up" data-aos-delay="200">
                        <div class="step-number rounded-circle bg-success-soft text-success fw-bold mb-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 1.5rem;">2</div>
                        <div class="step-icon mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="bi bi-building text-success fs-4"></i>
                        </div>
                        <h3>Enter Business Details</h3>
                        <p>Set up your business profile by adding your company information, logo, and preferred settings.</p>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="step-card text-center p-4 h-100 bg-white shadow-sm rounded-4" style="transition: all 0.3s ease;" data-aos="fade-up" data-aos-delay="300">
                        <div class="step-number rounded-circle bg-success-soft text-success fw-bold mb-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 1.5rem;">3</div>
                        <div class="step-icon mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="bi bi-cart-check text-success fs-4"></i>
                        </div>
                        <h3>Start Using the Tool</h3>
                        <p>Begin recording sales, managing customers, and issuing receipts right away with our intuitive interface.</p>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="step-card text-center p-4 h-100 bg-white shadow-sm rounded-4" style="transition: all 0.3s ease;" data-aos="fade-up" data-aos-delay="400">
                        <div class="step-number rounded-circle bg-success-soft text-success fw-bold mb-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 1.5rem;">4</div>
                        <div class="step-icon mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="bi bi-lightning-charge text-success fs-4"></i>
                        </div>
                        <h3>Unlock Premium Features</h3>
                        <p>Recharge your wallet to access premium features like SMS notifications, email marketing, and airtime top-ups.</p>
                        <a href="https://appnomu.com/landing/pricing" class="btn btn-sm btn-outline-success mt-2" target="_blank">View Pricing</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="https://appnomu.com/register.php?utm_source=landing_page&utm_medium=cta&utm_campaign=salesq" class="btn btn-success btn-lg rounded-pill pulse-animation"><i class="bi bi-lightning-charge me-2"></i>Get Started Now</a>
            </div>
        </div>
    </section>

    <!-- Risk Reversal Section with SEO Keywords -->
    <section class="risk-reversal py-4" style="background: rgba(25, 135, 84, 0.05); border-top: 1px solid rgba(25, 135, 84, 0.1); border-bottom: 1px solid rgba(25, 135, 84, 0.1);">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-3 col-6 mb-3 mb-md-0">
                    <div class="risk-item">
                        <i class="bi bi-shield-check text-success fs-2 mb-2"></i>
                        <p class="mb-0 fw-bold">30-Day Money Back</p>
                        <small class="text-muted">Risk-free CRM trial</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3 mb-md-0">
                    <div class="risk-item">
                        <i class="bi bi-clock text-success fs-2 mb-2"></i>
                        <p class="mb-0 fw-bold">5-Minute Setup</p>
                        <small class="text-muted">Quick CRM deployment</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3 mb-md-0">
                    <div class="risk-item">
                        <i class="bi bi-headset text-success fs-2 mb-2"></i>
                        <p class="mb-0 fw-bold">24/7 Expert Support</p>
                        <small class="text-muted">Dedicated CRM support</small>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="risk-item">
                        <i class="bi bi-lock-fill text-success fs-2 mb-2"></i>
                        <p class="mb-0 fw-bold">Enterprise Security</p>
                        <small class="text-muted">Secure CRM platform</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Country Hero Switcher JavaScript -->
    <script>
        // Pass current country from PHP to JavaScript
        window.currentCountry = '<?= $currentCountry ?>';
    </script>
    <script src="<?= asset('js/country-hero-switcher.js') ?>"></script>

    <!-- Features Section -->
    <section id="features" class="section py-5" style="padding: 80px 0; background: #ffffff;">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Complete <span class="text-success">CRM Software Features</span> for Small Business</h2>
                <p class="section-subtitle lead text-muted mb-4">Complete business automation platform with CRM, inventory management, voice & email marketing, payment processing, and sales automation</p>
                <div class="section-divider mx-auto" style="width: 60px; height: 3px; background-color: #198754; border-radius: 2px;"></div>
            </div>
            <div class="row g-4">
                <!-- Row 1 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; transition: all 0.3s ease;" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                        <div class="icon-box mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                            <i class="bi bi-box-seam text-success fs-4"></i>
                        </div>
                        <h3>Inventory Management System</h3>
                        <p class="text-muted">Advanced inventory tracking software to manage stock levels, suppliers, and automated reorder points for small businesses.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; transition: all 0.3s ease;" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                        <div class="icon-box mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                            <i class="bi bi-people text-success fs-4"></i>
                        </div>
                        <h3>Customer Database Software</h3>
                        <p class="text-muted">Complete customer management system with detailed profiles, purchase history, and automated communication logs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; transition: all 0.3s ease;" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                        <div class="icon-box mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                            <i class="bi bi-graph-up text-success fs-4"></i>
                        </div>
                        <h3>Sales Analytics & Reporting</h3>
                        <p class="text-muted">Advanced business intelligence tools with sales performance tracking, revenue analytics, and automated reporting.</p>
                    </div>
                </div>
                
                <!-- Row 2 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; transition: all 0.3s ease;" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                        <div class="icon-box mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                            <i class="bi bi-graph-up-arrow text-success fs-4"></i>
                        </div>
                        <h3>SMS Marketing Software</h3>
                        <p class="text-muted">Bulk SMS campaigns, automated messaging, and multi-channel marketing platform for customer engagement.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; transition: all 0.3s ease;" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                        <div class="icon-box mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                            <i class="bi bi-robot text-success fs-4"></i>
                        </div>
                        <h3>Sales Automation Software</h3>
                        <p class="text-muted">AI-powered sales pipeline management with automated lead scoring, follow-ups, and opportunity tracking.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; transition: all 0.3s ease;" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                        <div class="icon-box mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                            <i class="bi bi-phone text-success fs-4"></i>
                        </div>
                        <h3>Mobile CRM App</h3>
                        <p class="text-muted">Cloud-based CRM accessible on any device - manage leads, track sales, and run your business from anywhere.</p>
                    </div>
                </div>
                
                <!-- Row 3 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; transition: all 0.3s ease;" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                        <div class="icon-box mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                            <i class="bi bi-telephone-fill text-success fs-4"></i>
                        </div>
                        <h3>Voice Broadcasting Platform</h3>
                        <p class="text-muted">Professional automated voice calls and bulk voice campaigns with MP3 uploads, text-to-speech, and real-time analytics.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; transition: all 0.3s ease;" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                        <div class="icon-box mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                            <i class="bi bi-credit-card text-success fs-4"></i>
                        </div>
                        <h3>Client Charging System</h3>
                        <p class="text-muted">Secure payment processing to charge clients directly through Flutterwave, PayPal, and Stripe with automated invoicing and receipts.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card p-4 h-100 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; transition: all 0.3s ease;" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                        <div class="icon-box mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                            <i class="bi bi-envelope-heart text-success fs-4"></i>
                        </div>
                        <h3>Email Marketing Campaigns</h3>
                        <p class="text-muted">Professional email marketing with automated drip campaigns, customer segmentation, and detailed performance analytics.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Video Section -->
    <section id="demo" class="section py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); padding: 80px 0; color: #212529;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-header mb-4">
                        <h2>See SalesQ in <span class="text-success">Action</span></h2>
                        <p class="lead">Watch how our platform helps businesses automate their sales process and boost efficiency</p>
                    </div>
                    <div class="demo-features mb-4">
                        <div class="demo-feature d-flex align-items-center mb-3">
                            <div class="feature-icon me-3 bg-success-soft rounded-circle p-2">
                                <i class="bi bi-check-circle-fill text-success"></i>
                            </div>
                            <p style="color: #212529; font-weight: 500;" class="mb-0">Intuitive dashboard design</p>
                        </div>
                        <div class="demo-feature d-flex align-items-center mb-3">
                            <div class="feature-icon me-3 bg-success-soft rounded-circle p-2">
                                <i class="bi bi-check-circle-fill text-success"></i>
                            </div>
                            <p style="color: #212529; font-weight: 500;" class="mb-0">Customer communication tools</p>
                        </div>
                        <div class="demo-feature d-flex align-items-center">
                            <div class="feature-icon me-3 bg-success-soft rounded-circle p-2">
                                <i class="bi bi-check-circle-fill text-success"></i>
                            </div>
                            <p style="color: #212529; font-weight: 500;" class="mb-0">Advanced analytics capabilities</p>
                        </div>
                    </div>
                    <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=demo_section&utm_campaign=salesq" class="btn btn-success btn-lg rounded-pill px-4 pulse-animation" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-lightning-charge me-2"></i> Try It For Free
                    </a>
                </div>
                <div class="col-lg-7">
                    <div class="video-wrapper mt-4 mt-lg-0">
                        <div class="video-container position-relative rounded-4 overflow-hidden shadow-lg" style="aspect-ratio: 16/10; width: 100%; max-width: 600px; margin: 0 auto; background-color: #000; cursor: pointer; transition: all 0.3s ease;">
                            <!-- Beautiful green gradient overlay with enhanced design -->
                            <div class="placeholder-video d-flex flex-column justify-content-center align-items-center text-center h-100 p-4" style="background: linear-gradient(135deg, rgba(25, 135, 84, 0.9) 0%, rgba(32, 201, 151, 0.8) 50%, rgba(25, 135, 84, 0.9) 100%); position: relative;">
                                <!-- Subtle pattern overlay -->
                                <div class="pattern-overlay position-absolute top-0 start-0 w-100 h-100" style="background-image: radial-gradient(circle at 25% 25%, rgba(255,255,255,0.1) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(255,255,255,0.05) 0%, transparent 50%); opacity: 0.3;"></div>
                                
                                <!-- Content -->
                                <div class="position-relative z-index-2">
                                    <div class="play-button-wrapper mb-3" style="position: relative;">
                                        <div class="play-button-bg position-absolute top-50 start-50 translate-middle rounded-circle" style="width: 100px; height: 100px; background: rgba(255,255,255,0.2); animation: pulse-ring 2s infinite;"></div>
                                        <i class="bi bi-play-circle-fill text-white position-relative" style="font-size: 4.5rem; filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3));"></i>
                                    </div>
                                    <h4 class="text-white mt-3 mb-2 fw-bold" style="font-size: 1.5rem; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">AppNomu SalesQ Demo</h4>
                                    <p class="text-white mb-0" style="font-size: 1rem; opacity: 0.95; text-shadow: 0 1px 2px rgba(0,0,0,0.3);">Click to watch how SalesQ transforms your sales process</p>
                                    <div class="demo-badge mt-3">
                                        <span class="badge bg-white text-success px-3 py-2 rounded-pill" style="font-weight: 600; font-size: 0.85rem;">▶ 3 min demo</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <style>
    .bg-gradient {
        background: linear-gradient(135deg, #198754 0%, #20c997 100%);
    }
    
    .bg-success-soft {
        background-color: rgba(25, 135, 84, 0.1);
    }
    
    .demo-section .feature-icon {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .demo-section .feature-icon i {
        color: var(--accent);
    }
    
    /* Enhanced Video Container Styling */
    .video-container {
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        border: 2px solid transparent;
    }
    
    .video-container:hover {
        transform: scale(1.03) translateY(-5px);
        box-shadow: 0 20px 40px rgba(25, 135, 84, 0.2) !important;
        border-color: rgba(25, 135, 84, 0.3);
    }
    
    /* Pulse Ring Animation for Play Button */
    @keyframes pulse-ring {
        0% {
            transform: translate(-50%, -50%) scale(0.8);
            opacity: 1;
        }
        50% {
            transform: translate(-50%, -50%) scale(1.1);
            opacity: 0.7;
        }
        100% {
            transform: translate(-50%, -50%) scale(1.3);
            opacity: 0;
        }
    }
    
    /* Play Button Hover Effect */
    .video-container:hover .play-button-wrapper i {
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }
    
    /* Responsive Video Scaling */
    @media (max-width: 768px) {
        .video-container {
            aspect-ratio: 16/11;
            max-width: 100%;
        }
        
        .video-container:hover {
            transform: scale(1.02) translateY(-3px);
        }
        
        .placeholder-video h4 {
            font-size: 1.3rem !important;
        }
        
        .placeholder-video p {
            font-size: 0.9rem !important;
        }
        
        .play-button-wrapper i {
            font-size: 3.5rem !important;
        }
    }
    
    @media (max-width: 576px) {
        .video-container {
            aspect-ratio: 4/3;
        }
        
        .placeholder-video h4 {
            font-size: 1.2rem !important;
        }
        
        .placeholder-video p {
            font-size: 0.85rem !important;
        }
        
        .play-button-wrapper i {
            font-size: 3rem !important;
        }
        
        .play-button-bg {
            width: 80px !important;
            height: 80px !important;
        }
    }
    
    /* Enhanced gradient animation */
    .placeholder-video {
        background-size: 200% 200%;
        animation: gradient-shift 6s ease infinite;
    }
    
    @keyframes gradient-shift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    /* Demo badge styling */
    .demo-badge .badge {
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        transition: all 0.3s ease;
    }
    
    .video-container:hover .demo-badge .badge {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    
    /* Simple Video Modal Styles */
    .video-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .video-modal-backdrop {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        cursor: pointer;
    }
    
    .video-modal-content {
        position: relative;
        width: 90%;
        max-width: 900px;
        background: #000;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    }
    
    .video-modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 20px;
        background: #000;
        color: white;
        border-bottom: 1px solid #333;
    }
    
    .video-modal-header h5 {
        margin: 0;
        font-size: 18px;
    }
    
    .video-close-btn {
        background: none;
        border: none;
        color: white;
        font-size: 28px;
        cursor: pointer;
        padding: 0;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: background 0.2s;
    }
    
    .video-close-btn:hover {
        background: rgba(255, 255, 255, 0.1);
    }
    
    .video-modal-body {
        padding: 0;
        background: #000;
    }
    
    .video-modal-body iframe {
        width: 100%;
        height: 500px;
        border: none;
        display: block;
    }
    
    @media (max-width: 768px) {
        .video-modal-content {
            width: 95%;
        }
        
        .video-modal-body iframe {
            height: 250px;
        }
    }
    </style>

    <!-- Why Choose Us Section -->
    <section id="why-choose-us" class="section py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); padding: 80px 0;">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Why Choose <span class="text-success">AppNomu SalesQ</span>?</h2>
                <p class="section-subtitle lead text-muted mb-4">Experience the difference with our comprehensive sales solution designed for African businesses</p>
                <div class="section-divider mx-auto" style="width: 60px; height: 3px; background-color: #198754; border-radius: 2px;"></div>
            </div>
            <div class="row g-4">
                <!-- Quick Setup -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-card h-100 p-4 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; background-color: white; transition: all 0.3s ease;">
                        <div class="benefit-icon mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-lightning-charge text-success fs-4"></i>
                        </div>
                        <h3 class="h5 mb-3 fw-bold">Quick Setup</h3>
                        <p class="mb-0 text-muted">Get started in minutes with our intuitive platform. No technical expertise required to get your sales process up and running.</p>
                    </div>
                </div>
                
                <!-- Affordable Pricing -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-card h-100 p-4 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; background-color: white; transition: all 0.3s ease;">
                        <div class="benefit-icon mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-tag text-success fs-4"></i>
                        </div>
                        <h3 class="h5 mb-3 fw-bold">Affordable Pricing</h3>
                        <p class="mb-0 text-muted">Competitive pricing plans designed for businesses of all sizes. Get premium features without breaking the bank.</p>
                    </div>
                </div>
                
                <!-- AI Powered Insights -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="benefit-card h-100 p-4 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; background-color: white; transition: all 0.3s ease;">
                        <div class="benefit-icon mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-robot text-success fs-4"></i>
                        </div>
                        <h3 class="h5 mb-3 fw-bold">AI Powered Insights</h3>
                        <p class="mb-0 text-muted">Leverage artificial intelligence to gain valuable business insights and make data-driven decisions.</p>
                    </div>
                </div>
                
                <!-- Mobile Access -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="benefit-card h-100 p-4 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; background-color: white; transition: all 0.3s ease;">
                        <div class="benefit-icon mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-phone text-success fs-4"></i>
                        </div>
                        <h3 class="h5 mb-3 fw-bold">Mobile Access</h3>
                        <p class="mb-0 text-muted">Manage your business on the go with our fully responsive mobile interface that works on any device.</p>
                    </div>
                </div>
                
                <!-- Local Support -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="benefit-card h-100 p-4 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; background-color: white; transition: all 0.3s ease;">
                        <div class="benefit-icon mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-headset text-success fs-4"></i>
                        </div>
                        <h3 class="h5 mb-3 fw-bold">Local Support</h3>
                        <p class="mb-0 text-muted">24/7 support through live chat, email, and phone. Our local team is always ready to assist you.</p>
                    </div>
                </div>
                
                <!-- Secure and Reliable -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="benefit-card h-100 p-4 shadow-sm" style="border-radius: 12px; border-left: 4px solid #198754; background-color: white; transition: all 0.3s ease;">
                        <div class="benefit-icon mb-3 bg-success-soft p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-shield-lock text-success fs-4"></i>
                        </div>
                        <h3 class="h5 mb-3 fw-bold">Secure & Reliable</h3>
                        <p class="mb-0 text-muted">Your data is protected with enterprise-grade security and 99.9% uptime guarantee.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="industries-section py-4 bg-white">
        <div class="container">
            <div class="section-header text-center mb-4">
                <h3 class="h4 mb-4">Industries We Serve</h3>
            </div>
            <div class="marquee-container">
                <div class="marquee-track">
                    <div class="marquee-item">
                        <i class="bi bi-shop me-2"></i>Retail
                    </div>
                    <div class="marquee-divider"></div>
                    <div class="marquee-item">
                        <i class="bi bi-cup-hot me-2"></i>Food & Beverage
                    </div>
                    <div class="marquee-divider"></div>
                    <div class="marquee-item">
                        <i class="bi bi-capsule me-2"></i>Pharmacy
                    </div>
                    <div class="marquee-divider"></div>
                    <div class="marquee-item">
                        <i class="bi bi-bag me-2"></i>Fashion
                    </div>
                    <div class="marquee-divider"></div>
                    <div class="marquee-item">
                        <i class="bi bi-tools me-2"></i>Hardware
                    </div>
                    <div class="marquee-divider"></div>
                    <div class="marquee-item">
                        <i class="bi bi-book me-2"></i>Bookshops
                    </div>
                    <div class="marquee-divider"></div>
                    <div class="marquee-item">
                        <i class="bi bi-laptop me-2"></i>Electronics
                    </div>
                    <div class="marquee-divider"></div>
                    <div class="marquee-item">
                        <i class="bi bi-scissors me-2"></i>Beauty & Spa
                    </div>
                    <!-- Duplicate items for seamless loop -->
                    <div class="marquee-divider"></div>
                    <div class="marquee-item">
                        <i class="bi bi-shop me-2"></i>Retail
                    </div>
                    <div class="marquee-divider"></div>
                    <div class="marquee-item">
                        <i class="bi bi-cup-hot me-2"></i>Food & Beverage
                    </div>
                    <div class="marquee-divider"></div>
                    <div class="marquee-item">
                        <i class="bi bi-capsule me-2"></i>Pharmacy
                    </div>
                    <div class="marquee-divider"></div>
                    <div class="marquee-item">
                        <i class="bi bi-bag me-2"></i>Fashion
                    </div>
                    <div class="marquee-divider"></div>
                    <div class="marquee-item">
                        <i class="bi bi-tools me-2"></i>Hardware
                    </div>
                    <div class="marquee-divider"></div>
                    <div class="marquee-item">
                        <i class="bi bi-book me-2"></i>Bookshops
                    </div>
                    <div class="marquee-divider"></div>
                    <div class="marquee-item">
                        <i class="bi bi-laptop me-2"></i>Electronics
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Performance Metrics Section -->
    <section class="performance-metrics py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); padding: 80px 0;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-dark mb-3">Why Small Businesses Choose Our Affordable CRM Software</h2>
                <p class="lead text-muted">Proven results from 25,000+ businesses using our cloud-based CRM and SMS marketing platform</p>
                <div class="section-divider mx-auto" style="width: 60px; height: 3px; background-color: #198754; border-radius: 2px;"></div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-4">
                    <div class="metric-card bg-white p-4 rounded-4 h-100 shadow-sm" style="border-top: 4px solid #198754; transition: all 0.3s ease;">
                        <div class="metric-icon mb-3">
                            <i class="bi bi-graph-up-arrow text-success fs-1"></i>
                        </div>
                        <h3 class="text-success display-4 fw-bold mb-2 counter" data-target="40">40</h3>
                        <p class="text-dark mb-0 fw-bold">% Sales Growth with CRM</p>
                        <small class="text-muted">Small business average</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="metric-card bg-white p-4 rounded-4 h-100 shadow-sm" style="border-top: 4px solid #198754; transition: all 0.3s ease;">
                        <div class="metric-icon mb-3">
                            <i class="bi bi-clock-history text-success fs-1"></i>
                        </div>
                        <h3 class="text-success display-4 fw-bold mb-2 counter" data-target="15">15</h3>
                        <p class="text-dark mb-0 fw-bold">Hours Saved with Automation</p>
                        <small class="text-muted">Business process automation</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="metric-card bg-white p-4 rounded-4 h-100 shadow-sm" style="border-top: 4px solid #198754; transition: all 0.3s ease;">
                        <div class="metric-icon mb-3">
                            <i class="bi bi-people-fill text-success fs-1"></i>
                        </div>
                        <h3 class="text-success display-4 fw-bold mb-2 counter" data-target="25">25</h3>
                        <p class="text-dark mb-0 fw-bold">% Better Customer Retention</p>
                        <small class="text-muted">CRM customer management</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="metric-card bg-white p-4 rounded-4 h-100 shadow-sm" style="border-top: 4px solid #198754; transition: all 0.3s ease;">
                        <div class="metric-icon mb-3">
                            <i class="bi bi-speedometer2 text-success fs-1"></i>
                        </div>
                        <h3 class="text-success display-4 fw-bold mb-2">3x</h3>
                        <p class="text-dark mb-0 fw-bold">Faster Order Processing</p>
                        <small class="text-muted">Inventory management system</small>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=metrics&utm_campaign=salesq" class="btn btn-success btn-lg rounded-pill px-5 py-3 shadow-lg" target="_blank" rel="noopener noreferrer" style="font-weight: 700;">
                    <i class="bi bi-rocket-takeoff me-2"></i>Start Your Free CRM Trial Today
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section py-5" style="background: #ffffff; padding: 80px 0;">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Client <span class="text-success">Testimonials</span></h2>
                <p class="section-subtitle lead text-muted mb-4">What our customers are saying about AppNomu SalesQ and how it transformed their business</p>
                <div class="section-divider mx-auto" style="width: 60px; height: 3px; background-color: #198754; border-radius: 2px;"></div>
            </div>
            <div class="row g-4">
                <!-- Testimonial 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card bg-white p-4 rounded-4 shadow-sm h-100" style="border-top: 3px solid #198754;">
                        <div class="rating mb-2">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <p class="fst-italic">"I like the professional modified UI of the solution which makes the navigation to software features easily. I also like the customer support who responds to technical questions anytime around the clock."</p>
                        <div class="d-flex align-items-center mt-3">
                            <div class="bg-success-soft rounded-circle p-2 me-3"><i class="bi bi-person-fill text-success"></i></div>
                            <div>
                                <h6 class="mb-0 fw-bold">Isophel N</h6>
                                <p class="text-muted small mb-0">Nile Breweries</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card bg-white p-4 rounded-4 shadow-sm h-100" style="border-top: 3px solid #198754;">
                        <div class="rating mb-2">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <p class="fst-italic">"SalesQ has transformed how we track inventory and manage customer communications. The analytics features have been particularly helpful in optimizing our sales strategy and increasing conversions."</p>
                        <div class="d-flex align-items-center mt-3">
                            <div class="bg-success-soft rounded-circle p-2 me-3"><i class="bi bi-person-fill text-success"></i></div>
                            <div>
                                <h6 class="mb-0 fw-bold">Robert K</h6>
                                <p class="text-muted small mb-0">Berean Hand</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card bg-white p-4 rounded-4 shadow-sm h-100" style="border-top: 3px solid #198754;">
                        <div class="rating mb-2">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                        <p class="fst-italic">"We've been using AppNomu SalesQ for over two years now. The bulk SMS capabilities and customer segmentation tools have significantly improved our marketing effectiveness and customer engagement."</p>
                        <div class="d-flex align-items-center mt-3">
                            <div class="bg-success-soft rounded-circle p-2 me-3"><i class="bi bi-person-fill text-success"></i></div>
                            <div>
                                <h6 class="mb-0 fw-bold">Sarah M</h6>
                                <p class="text-muted small mb-0">Pepsi Uganda</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="cta" class="cta-section py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-top: 3px solid #198754;">
        <div class="container">
            <div class="row mt-5 py-5 text-center" data-aos="fade-up">
                <div class="col-lg-10 mx-auto">
                    <div class="urgency-indicator mb-4">
                        <span class="badge bg-danger text-white px-4 py-2 rounded-pill fs-6 animate-pulse">
                            <i class="bi bi-clock-fill me-2"></i>Limited Time Offer - Only 5 Days Left!
                        </span>
                    </div>
                    <h2 class="mb-4 text-dark display-5 fw-bold">Start Using the Best Affordable CRM Software Today</h2>
                    <p class="lead mb-4 text-dark">Join 25,000+ small businesses using our cloud-based CRM with SMS marketing to increase sales by 40% and automate business processes. Get the competitive advantage now!</p>
                    
                    <div class="value-stack mb-4">
                        <div class="row justify-content-center">
                            <div class="col-md-4 mb-2">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span class="fw-bold text-dark">14-Day Free Trial</span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span class="fw-bold text-dark">No Credit Card Required</span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span class="fw-bold text-dark">30-Day Money Back Guarantee</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="cta-buttons">
                        <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=final_cta&utm_campaign=salesq" class="btn btn-success btn-lg rounded-pill px-4 py-3 shadow-lg me-3 mb-3 position-relative pulse-animation" target="_blank" rel="noopener noreferrer" style="font-weight: 700; font-size: 1rem; min-height: 60px; white-space: nowrap; overflow: visible;">
                            <i class="bi bi-rocket-takeoff me-2"></i>Start Your Success Story Today
                            <div class="position-absolute top-0 start-100 translate-middle">
                                <span class="badge rounded-pill bg-warning text-dark" style="font-size: 0.7rem;">50% OFF</span>
                            </div>
                        </a>
                        <div class="mt-3">
                            <small class="text-muted">
                                <i class="bi bi-people-fill text-success me-1"></i>
                                <strong><span id="weekly-signups">127</span> businesses</strong> signed up in the last 7 days
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Sticky CTA -->
    <div class="mobile-sticky-cta d-block d-md-none" id="mobileStickyBtn" style="position: fixed; bottom: 0; left: 0; right: 0; background: white; padding: 15px; box-shadow: 0 -2px 10px rgba(0,0,0,0.1); z-index: 9998; transform: translateY(100%); transition: transform 0.3s ease;">
        <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=mobile_sticky&utm_campaign=salesq" class="btn btn-success btn-lg w-100 rounded-pill py-3 shadow-lg" target="_blank" rel="noopener noreferrer" style="font-weight: 700;">
            <i class="bi bi-lightning-charge me-2"></i>Start Free Trial - 50% OFF
        </a>
    </div>

    <!-- Back to Top Button -->
    <button class="back-to-top btn btn-success rounded-circle shadow" id="backToTop" style="position: fixed; bottom: 25px; right: 25px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; z-index: 9999; opacity: 0; transition: all 0.3s ease; border: none;">
        <i class="bi bi-arrow-up"></i>
    </button>

    
    
    <style>
        .back-to-top.visible {
            opacity: 1 !important;
            transform: translateY(0);
        }
        .back-to-top {
            transform: translateY(20px);
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(25, 135, 84, 0.1) !important;
        }
        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08) !important;
        }
        
        /* Floating animation for CTA section */
        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        
        /* Pulse animation for badges */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
        
        /* Enhanced button hover effects */
        .btn-white:hover {
            transform: scale(1.05) !important;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2) !important;
        }
        
        /* Live Activity Animations */
        .animate-fade-in {
            animation: fadeInSlide 0.8s ease-out;
        }
        
        @keyframes fadeInSlide {
            0% {
                opacity: 0;
                transform: translateY(-10px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .pulse-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            animation: pulse-dot 2s infinite;
        }
        
        @keyframes pulse-dot {
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
        
        /* Mobile Sticky CTA */
        .mobile-sticky-cta.show {
            transform: translateY(0) !important;
        }
        
        /* Exit Intent Modal Enhancements */
        .exit-intent-icon {
            animation: bounce 1s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
        
        .countdown-display {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%) !important;
            border: 2px solid #dc3545;
        }
        
        .time-number {
            font-family: 'Courier New', monospace;
            font-size: 1.5rem !important;
        }
        
    </style>
    
    <script>
        // Back to Top Button
        const backToTop = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });
        
        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('.nav-link-smooth').forEach(link => {
            link.addEventListener('click', function(e) {
                // Only process internal links
                if(this.getAttribute('href').startsWith('#')) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if(targetElement) {
                        const navHeight = 120; // Adjust based on your nav height
                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navHeight;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
        
        // Animated Counters
        function animateValue(obj, start, end, duration) {
            let startTimestamp = null;
            const suffix = obj.getAttribute('data-suffix') || '';
            const prefix = obj.getAttribute('data-prefix') || '';
            const isCurrency = obj.hasAttribute('data-currency');
            
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                let value = Math.floor(progress * (end - start) + start);
                
                // Format the number with commas
                let displayValue = value.toLocaleString();
                
                // Add prefix and suffix if they exist
                obj.innerHTML = `${prefix}${displayValue}${suffix}`;
                
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            
            window.requestAnimationFrame(step);
        }
        
        // Intersection Observer for counters
        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.getAttribute('data-target'), 10);
                    const duration = 2000; // 2 seconds
                    
                    if (!counter.classList.contains('animated')) {
                        counter.classList.add('animated');
                        animateValue(counter, 0, target, duration);
                    }
                    
                    observer.unobserve(counter);
                }
            });
        }, observerOptions);
        
        // Observe all counters
        document.querySelectorAll('.counter').forEach(counter => {
            observer.observe(counter);
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Phase 3: Advanced JavaScript Enhancements
        
        // Advanced Scroll Progress Indicator
        function createScrollProgress() {
            const progressBar = document.createElement('div');
            progressBar.className = 'scroll-progress';
            document.body.appendChild(progressBar);

            window.addEventListener('scroll', throttle(() => {
                const scrollTop = window.pageYOffset;
                const docHeight = document.body.scrollHeight - window.innerHeight;
                const scrollPercent = (scrollTop / docHeight) * 100;
                progressBar.style.width = scrollPercent + '%';
            }, 10));
        }

        // Scroll-Triggered Animations
        function initScrollAnimations() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                        // Trigger number counter animation if element has counter class
                        if (entry.target.classList.contains('counter')) {
                            animateCounter(entry.target);
                        }
                    }
                });
            }, observerOptions);

            // Observe elements for scroll animations
            document.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right, .counter').forEach(el => {
                observer.observe(el);
            });
        }

        // Advanced Number Counter Animation
        function animateCounter(element) {
            const target = parseInt(element.textContent.replace(/[^0-9]/g, ''));
            if (isNaN(target) || target === 0) return;
            
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;
            const suffix = element.textContent.replace(/[0-9]/g, '');

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current) + suffix;
            }, 16);
        }

        // Parallax Effect for Hero Section
        function initParallax() {
            const parallaxElements = document.querySelectorAll('.parallax-element');
            if (parallaxElements.length === 0) return;
            
            window.addEventListener('scroll', throttle(() => {
                const scrolled = window.pageYOffset;
                const rate = scrolled * -0.3;
                
                parallaxElements.forEach(element => {
                    element.style.transform = `translateY(${rate}px)`;
                });
            }, 16));
        }

        // Enhanced Button Interactions with Ripple Effect
        function initButtonEffects() {
            // Add ripple CSS
            const rippleCSS = `
                .ripple {
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.6);
                    transform: scale(0);
                    animation: ripple-animation 0.6s linear;
                    pointer-events: none;
                }
                @keyframes ripple-animation {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
            `;
            
            const style = document.createElement('style');
            style.textContent = rippleCSS;
            document.head.appendChild(style);

            document.querySelectorAll('.btn-success, .btn-outline-success').forEach(button => {
                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.classList.add('ripple');
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        if (ripple.parentNode) {
                            ripple.remove();
                        }
                    }, 600);
                });
            });
        }

        // Performance Optimization: Throttled Function
        function throttle(func, limit) {
            let inThrottle;
            return function() {
                const args = arguments;
                const context = this;
                if (!inThrottle) {
                    func.apply(context, args);
                    inThrottle = true;
                    setTimeout(() => inThrottle = false, limit);
                }
            }
        }

        // Lazy Loading for Images
        function initLazyLoading() {
            const images = document.querySelectorAll('img[data-src]');
            if (images.length === 0) return;
            
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            images.forEach(img => imageObserver.observe(img));
        }

        // Accessibility Enhancements
        function initAccessibility() {
            // Enhanced keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Tab') {
                    document.body.classList.add('keyboard-navigation');
                }
            });

            document.addEventListener('mousedown', () => {
                document.body.classList.remove('keyboard-navigation');
            });

            // Skip to main content functionality
            const skipLink = document.createElement('a');
            skipLink.href = '#main-content';
            skipLink.textContent = 'Skip to main content';
            skipLink.className = 'skip-link';
            skipLink.style.cssText = `
                position: absolute;
                top: -40px;
                left: 6px;
                background: var(--primary-green, #198754);
                color: white;
                padding: 8px 12px;
                text-decoration: none;
                border-radius: 4px;
                z-index: 10000;
                transition: top 0.3s;
                font-size: 14px;
            `;
            
            skipLink.addEventListener('focus', () => {
                skipLink.style.top = '6px';
            });
            
            skipLink.addEventListener('blur', () => {
                skipLink.style.top = '-40px';
            });
            
            document.body.insertBefore(skipLink, document.body.firstChild);
        }

        // Initialize page elements
        function initPageElements() {
            // Add counter class to stat numbers
            document.querySelectorAll('.stat-number').forEach(stat => {
                stat.classList.add('counter');
            });
        }

        // Advanced Conversion Features
        
        // Live Signup Counter
        function initLiveActivity() {
            const names = [
                'Sarah from Kenya', 'Michael from Nigeria', 'Priya from India', 'James from Ghana',
                'Fatima from Morocco', 'David from South Africa', 'Amara from Ethiopia', 'John from Uganda',
                'Zara from Egypt', 'Peter from Tanzania', 'Aisha from Senegal', 'Mark from Botswana'
            ];
            
            const signupName = document.getElementById('recent-signup-name');
            const signupTime = document.getElementById('signup-time');
            const weeklySignups = document.getElementById('weekly-signups');
            
            function updateActivity() {
                const randomName = names[Math.floor(Math.random() * names.length)];
                const randomMinutes = Math.floor(Math.random() * 15) + 1;
                
                signupName.textContent = randomName;
                signupTime.textContent = `${randomMinutes} minutes ago`;
                
                // Animate the notification
                const notification = document.querySelector('.activity-notification');
                notification.style.animation = 'none';
                setTimeout(() => {
                    notification.style.animation = 'fadeInSlide 0.8s ease-out';
                }, 10);
            }
            
            function updateWeeklyCount() {
                const currentCount = parseInt(weeklySignups.textContent);
                const newCount = currentCount + Math.floor(Math.random() * 3) + 1;
                weeklySignups.textContent = newCount;
            }
            
            // Update activity every 8-12 seconds
            setInterval(updateActivity, Math.random() * 4000 + 8000);
            // Update weekly count every 30 seconds
            setInterval(updateWeeklyCount, 30000);
        }
        
        // Countdown Timer
        function initCountdownTimer() {
            const countdownElement = document.getElementById('countdown-timer');
            const exitMinutes = document.getElementById('exit-minutes');
            const exitSeconds = document.getElementById('exit-seconds');
            
            // Check if countdown element exists before proceeding
            if (!countdownElement) {
                console.warn('Countdown timer element not found, skipping initialization');
                return;
            }
            
            // Set end date to 5 days from now
            const endDate = new Date();
            endDate.setDate(endDate.getDate() + 5);
            
            function updateCountdown() {
                // Double-check element exists before updating
                if (!countdownElement) return;
                
                const now = new Date().getTime();
                const distance = endDate.getTime() - now;
                
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                
                if (days > 0) {
                    countdownElement.textContent = `${days} Days ${hours}h`;
                } else if (hours > 0) {
                    countdownElement.textContent = `${hours}h ${minutes}m`;
                } else {
                    countdownElement.textContent = `${minutes} Minutes`;
                }
            }
            
            updateCountdown();
            setInterval(updateCountdown, 60000); // Update every minute
        }
        
        // Mobile Sticky CTA
        function initMobileStickyBtn() {
            const stickyBtn = document.getElementById('mobileStickyBtn');
            let hasShown = false;
            
            window.addEventListener('scroll', () => {
                const scrollPercent = (window.pageYOffset / (document.body.scrollHeight - window.innerHeight)) * 100;
                
                if (scrollPercent > 25 && !hasShown) {
                    stickyBtn.classList.add('show');
                    hasShown = true;
                } else if (scrollPercent < 10 && hasShown) {
                    stickyBtn.classList.remove('show');
                    hasShown = false;
                }
            });
        }
        
        

        // Initialize all advanced features
        document.addEventListener('DOMContentLoaded', () => {
            // Add main content ID for accessibility
            const heroSection = document.querySelector('.hero-section');
            if (heroSection) {
                heroSection.id = 'main-content';
            }
            
            // Initialize core features
            initPageElements();
            initButtonEffects();
            initLazyLoading();
            initAccessibility();
            
            // Initialize new conversion features
            initLiveActivity();
            initCountdownTimer();
            initMobileStickyBtn();
            
            console.log('Advanced conversion features initialized successfully');
        });

        // Reduced motion support
        if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            document.documentElement.style.setProperty('--animation-duration', '0.01ms');
            // Disable parallax for users who prefer reduced motion
            document.querySelectorAll('.parallax-element').forEach(el => {
                el.style.transform = 'none';
            });
        }
    </script>
    
    <style>
        /* Main content styling */
        main {
            position: relative;
            z-index: 1;
            min-height: calc(100vh - 160px);
        }
    </style>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add simple CSS rule to hide scroll down elements
        var style = document.createElement('style');
        style.textContent = '.scroll-down, [class*="scroll-down"], [class*="scroll_down"] { display: none !important; }';
        document.head.appendChild(style);
    });
    </script>
    
    <!-- Simple Video Modal -->
    <div id="videoModal" class="video-modal" style="display: none;">
        <div class="video-modal-backdrop"></div>
        <div class="video-modal-content">
            <div class="video-modal-header">
                <h5>AppNomu SalesQ Official Demo</h5>
                <button class="video-close-btn" id="videoCloseBtn">&times;</button>
            </div>
            <div class="video-modal-body">
                <iframe id="videoFrame" src="" title="SalesQ Product Tour" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
            </div>
        </div>
    </div>

    <script>
    // Simple Video Modal - Clean and Reliable
    document.addEventListener('DOMContentLoaded', function() {
        const videoContainer = document.querySelector('.video-container');
        const videoModal = document.getElementById('videoModal');
        const videoFrame = document.getElementById('videoFrame');
        const closeBtn = document.getElementById('videoCloseBtn');
        const backdrop = document.querySelector('.video-modal-backdrop');
        
        // Open video modal
        if (videoContainer) {
            videoContainer.addEventListener('click', function() {
                videoFrame.src = "https://www.youtube.com/embed/e0WGZnI8Ufs?autoplay=1&rel=0";
                videoModal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            });
        }
        
        // Close video modal function
        function closeVideo() {
            videoModal.style.display = 'none';
            videoFrame.src = '';
            document.body.style.overflow = 'auto';
        }
        
        // Close button
        if (closeBtn) {
            closeBtn.addEventListener('click', closeVideo);
        }
        
        // Backdrop click
        if (backdrop) {
            backdrop.addEventListener('click', closeVideo);
        }
        
        // ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && videoModal.style.display === 'flex') {
                closeVideo();
            }
        });
    });

    // Smooth scrolling for anchor links
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.smooth-scroll').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80, // Account for header height
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
    </script>
    
    <script src="<?= asset('js/main.js') ?>"></script>

<?php
// Get the content buffer
$content = ob_get_clean();

// Include the layout with error handling
try {
    if (file_exists('includes/layout.php')) {
        include 'includes/layout.php';
    } else {
        // Fallback if layout.php is missing
        echo "<!DOCTYPE html><html><head><title>$page_title</title></head><body>";
        echo $content;
        echo "</body></html>";
    }
} catch (Exception $e) {
    error_log("Layout inclusion error: " . $e->getMessage());
    // Emergency fallback
    echo "<!DOCTYPE html><html><head><title>AppNomu SalesQ</title></head><body>";
    echo "<h1>Website Temporarily Unavailable</h1>";
    echo "<p>We're experiencing technical difficulties. Please try again later.</p>";
    echo "</body></html>";
}
?>
