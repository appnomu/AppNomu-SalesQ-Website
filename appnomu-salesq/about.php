<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load configuration first
require_once __DIR__ . '/config.php';

// Load country-specific content
require_once __DIR__ . '/includes/country_content.php';

// Helper function for safe translations
function safe_translate($key, $default = '') {
    if (function_exists('__')) {
        try {
            $result = __($key, [], $default);
            return is_string($result) ? $result : $default;
        } catch (Exception $e) {
            return $default;
        }
    }
    return $default;
}

// Set the current page for navigation highlighting
$current_page = 'about';

// Set translated page metadata with fallback
$page_title = safe_translate('about.page_title', 'About Us | AppNomu SalesQ - Uganda\'s Smart Solution');
$page_description = safe_translate('about.page_description', 'Uganda\'s Smart Solution for SMS, CRM, and Sales Management. Learn about AppNomu SalesQ\'s mission to empower African businesses with innovative technology.');

// Set page-specific keywords for SEO
$page_keywords = safe_translate('about.page_keywords', 'AppNomu Company Uganda, Business Software Provider Africa, Ugandan Tech Company, African CRM Solution, AppNomu Team, Business Management Solutions Uganda, Technology Innovation Africa, AppNomu History');

// Additional CSS for this page
$additional_css = [];

// Additional JS for this page
$additional_js = [
    '/assets/js/about.js'
];

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
</style>

<!-- Modern Hero Section with Light Gray Gradient (Matching Contact Page) -->
<header class="page-header position-relative overflow-hidden py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <!-- Subtle pattern overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNMCwwaDEwMHYxMDBoLTEwNHoiIGZpbGw9Im5vbmUiLz48cGF0aCBkPSJNMCwwbDEwMCwxMDAiIHN0cm9rZT0icmdiYSgwLDAsMCwwLjAzKSIgc3Ryb2tlLXdpZHRoPSIwLjUiLz48L3N2Zz4='); opacity: 0.4;"></div>
    
    <div class="container position-relative">
        <div class="row align-items-center py-3">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <!-- Awards Banner - Responsive for all devices -->
                <div class="mb-3 d-flex flex-wrap align-items-center gap-2">
                    <div class="bg-white bg-opacity-75 rounded-pill px-3 py-2 shadow-sm d-flex align-items-center">
                        <span class="badge rounded-pill bg-success text-white me-1"><?= __('about.award_badge', [], 'AWARD') ?></span>
                        <div class="small text-dark d-flex align-items-center">
                            <i class="bi bi-award me-1"></i>
                            <span><?= __('about.award_text', [], '2025 Data Quadrant Champion') ?></span>
                        </div>
                    </div>
                    <div class="bg-white bg-opacity-75 rounded-pill px-3 py-2 shadow-sm d-flex align-items-center">
                        <span class="badge rounded-pill bg-success text-white me-1"><?= __('about.award_badge', [], 'AWARD') ?></span>
                        <div class="small text-dark d-flex align-items-center">
                            <i class="bi bi-star-fill me-1"></i>
                            <span><?= __('about.top_rated', [], 'Top Rated 2025 by Info-Tech') ?></span>
                        </div>
                    </div>
                </div>
                
                <h1 class="fw-bold mb-2 text-dark" style="font-size: 2.5rem;"><?= __('about.hero_title', [], 'Empowering African Businesses') ?></h1>
                <p class="lead text-dark opacity-75 mb-3"><?= __('about.hero_subtitle', [], 'Transforming sales and inventory management with intuitive solutions designed for growth.') ?></p>
                
                <!-- Compact Stats Banner -->
                <div class="d-flex flex-wrap mb-4">
                    <div class="me-3 mb-2">
                        <div class="d-flex align-items-center">
                            <span class="fw-bold fs-4 me-1 text-success">25K+</span>
                            <span class="text-dark opacity-75"><?= __('about.stats.clients', [], 'Happy Clients') ?></span>
                        </div>
                    </div>
                    <div class="me-3 mb-2">
                        <div class="d-flex align-items-center">
                            <span class="fw-bold fs-4 me-1 text-success">25+</span>
                            <span class="text-dark opacity-75"><?= __('about.stats.countries', [], 'Countries') ?></span>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="d-flex align-items-center">
                            <span class="fw-bold fs-4 me-1 text-success">98%</span>
                            <span class="text-dark opacity-75"><?= __('about.stats.success_rate', [], 'Success Rate') ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex flex-wrap gap-2">
                    <a href="/contact" class="btn btn-success rounded-pill px-4 py-2 shadow-sm">
                        <i class="bi bi-chat-left-text me-2"></i> <?= __('about.cta.get_in_touch', [], 'Get in Touch') ?>
                    </a>
                    <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=cta&utm_campaign=salesq" class="btn btn-outline-success rounded-pill px-4 py-2" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-person-plus me-2"></i> Setup Account
                    </a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block text-end">
                <img src="https://appnomu.com/landing/assets/images/compressed-original-hero.webp" alt="About AppNomu SalesQ" class="img-fluid rounded-3 shadow" style="max-height: 320px;">
            </div>
        </div>
    </div>
</header>

<!-- Social Proof Badges Section -->
<section class="social-proof-section py-5" style="background: linear-gradient(180deg, #e9ecef 0%, #ffffff 100%);">
    <div class="container">
        <div class="row g-4 justify-content-center align-items-center">
            <!-- Badge 1: Data Quadrant Champion Badge (Actual Image) -->
            <div class="col-6 col-md-4 col-lg text-center" data-aos="fade-up">
                <div class="award-badge mb-2">
                    <img src="https://cdn2.softwarereviews.com/assets/software_reviews_shared/awards/new_data_quadrant_awards_badge_2025-eb559fd7025ffdf351735d8cf2efe5cdfce34b3351877666485b4997ef20c21f.png" 
                         alt="2025 Data Quadrant Champion" 
                         class="img-fluid" style="max-height: 120px;">
                </div>
            </div>
            
            <!-- Badge 2: Top Rated Badge (Actual Image) -->
            <div class="col-6 col-md-4 col-lg text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="award-badge mb-2">
                    <img src="https://cdn3.softwarereviews.com/assets/software_reviews_shared/awards/new_top-rated-badge-2025-6bd174b2907664f2d6e1045420fc1b82e9e8a3f72703871507b2435c9b71aaed.png" 
                         alt="Top Rated 2025 by Info-Tech" 
                         class="img-fluid" style="max-height: 120px;">
                </div>
            </div>
            
            <!-- Badge 3: Capterra Badge (Actual Image) -->
            <div class="col-6 col-md-4 col-lg text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="award-badge mb-2">
                    <img src="https://brand-assets.capterra.com/badge/62778979-346d-4923-9ad3-9c5eb9e6fb72.png" 
                         alt="Capterra Top Rated" 
                         class="img-fluid" style="max-height: 120px;">
                </div>
            </div>
            
            <!-- Badge 4: Software Advice Badge (Actual Image) -->
            <div class="col-6 col-md-4 col-lg text-center" data-aos="fade-up" data-aos-delay="250">
                <div class="award-badge mb-2">
                    <img src="https://brand-assets.softwareadvice.com/badge/e6e49124-da12-4a5e-8799-530a5767b48e.png" 
                         alt="Software Advice Top Rated" 
                         class="img-fluid" style="max-height: 120px;">
                </div>
            </div>
            
            <!-- Badge 5: Support Rating -->
            <div class="col-6 col-md-4 col-lg">
                <div class="badge-card text-center p-3 bg-white rounded-4 shadow-sm h-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="badge-icon mb-2">
                        <i class="bi bi-headset text-success" style="font-size: 2rem;"></i>
                    </div>
                    <h3 class="badge-title h6 mb-1">24/7 Support</h3>
                    <div class="badge-text small text-muted">99% Satisfaction</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section position-relative overflow-hidden" style="background: #fff; padding-top: 3rem; padding-bottom: 3rem;">
    <div class="position-absolute top-0 end-0">
        <div class="floating-shape-1"></div>
    </div>
    
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="about-img position-relative">
                    <div class="position-relative z-2 rounded-4 overflow-hidden shadow-lg">
                        <img src="https://appnomu.com/landing/assets/images/compressed-original-2.webp" alt="Our Team at Work" class="img-fluid rounded-4">
                    </div>
                    
                    <!-- Floating elements -->
                    <div class="floating-shape-2"></div>
                    <div class="floating-shape-3"></div>
                </div>
                
                <!-- Vision & Mission Section -->
                <div class="mt-5 pt-4">
                    <div class="vision-mission-card p-4 p-lg-5 bg-white rounded-4 shadow-sm mb-5">
                        <div class="d-flex align-items-start mb-4">
                            <div class="icon-box bg-success-soft rounded-circle p-3 me-4 flex-shrink-0">
                                <i class="bi bi-eye-fill text-success fs-4"></i>
                            </div>
                            <div>
                                <h4 class="mb-3"><?= __('about.vision.title', [], 'Our Vision') ?></h4>
                                <p class="mb-0"><?= __('about.vision.description', [], 'To be the leading digital solutions provider across Africa and beyond, known for innovation, excellence, and transformative impact. We envision a world where businesses of all sizes have access to cutting-edge digital tools and technologies that enable them to compete effectively in the global marketplace and achieve sustainable growth.') ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="vision-mission-card p-4 p-lg-5 bg-white rounded-4 shadow-sm">
                        <div class="d-flex align-items-start mb-4">
                            <div class="icon-box bg-success-soft rounded-circle p-3 me-4 flex-shrink-0">
                                <i class="bi bi-bullseye text-success fs-4"></i>
                            </div>
                            <div>
                                <h4 class="mb-3"><?= __('about.mission.title', [], 'Our Mission') ?></h4>
                                <p class="mb-0"><?= __('about.mission.description', [], 'To democratize access to business technology globally by providing affordable, accessible, and easy-to-use sales and inventory management solutions. We are committed to supporting underserved markets and making our solutions accessible through flexible pricing structures and special discounts for qualifying organizations in need.') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 ps-lg-5">
                <div class="section-title mb-5" data-aos="fade-up">
                    <span class="subtitle text-success fw-bold"><?= strtoupper(__('about.who_we_are.title', [], 'WHO WE ARE')) ?></span>
                    <h2 class="display-5 fw-bold"><?= __('about.who_we_are.heading', [], 'AppNomu SalesQ—Africa\'s Toolkit for <span class="text-success">Smarter Business Growth</span>') ?></h2>
                    <p class="lead"><?= __('about.who_we_are.description', [], 'AppNomu SalesQ is Uganda\'s leading provider of Bulk SMS, CRM, and inventory management solutions, empowering businesses across Africa to streamline operations and accelerate growth.') ?></p>
                </div>
                
                <div class="mb-5">
                    <div class="value-card p-4 rounded-4 bg-white shadow-sm mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="icon-box bg-success-soft rounded-circle p-3 me-4">
                                    <i class="bi bi-lightbulb-fill text-success fs-4"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="mb-2"><?= __('about.value_proposition.title', [], 'Built For Africa, By Africans') ?></h4>
                                <p class="mb-0"><?= __('about.value_proposition.description', [], 'Unlike international solutions that don\'t account for local realities, our platform addresses unique African market challenges: fluctuating internet connectivity, varied payment methods, and multilingual business environments.') ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="value-card p-4 rounded-4 bg-white shadow-sm mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="icon-box bg-success-soft rounded-circle p-3 me-4">
                                    <i class="bi bi-currency-dollar text-success fs-4"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="mb-2"><?= __('about.accessible_pricing.title', [], 'Accessible Pricing') ?></h4>
                                <p class="mb-0"><?= __('about.accessible_pricing.description', [], 'We\'ve eliminated the prohibitive costs typical of business software with flexible, pay-as-you-grow plans starting at just 50,000 UGX monthly—making enterprise-grade tools accessible to even small market vendors.') ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="value-card p-4 rounded-4 bg-white shadow-sm" data-aos="fade-up" data-aos-delay="300">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="icon-box bg-success-soft rounded-circle p-3 me-4">
                                    <i class="bi bi-translate text-success fs-4"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="mb-2"><?= __('about.localized_support.title', [], 'Localized Support') ?></h4>
                                <p class="mb-0"><?= __('about.localized_support.description', [], 'Our support team speaks your language—literally. Get help in English, Swahili, Luganda and other regional languages, with local offices providing hands-on training and implementation assistance.') ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <p class="mt-4"><strong>Founded in 2023</strong>, we're on a mission to democratize access to business technology globally. We believe that technology should empower, not complicate. Our goal is to create tools that are powerful enough for sophisticated business needs yet simple enough for anyone to use, regardless of their technical expertise or geographical location.</p>
                </div>
                
                <!-- Stats Section Moved Here -->
                <div class="row g-3 mt-4">
                    <div class="col-md-6">
                        <div class="stat-card text-center p-4 rounded-4 bg-white shadow-sm h-100">
                            <div class="icon-box bg-success-soft rounded-circle p-3 mb-3 mx-auto">
                                <i class="bi bi-people fs-3 text-success"></i>
                            </div>
                            <h3 class="display-4 fw-bold text-dark mb-2">25K+</h3>
                            <p class="text-muted mb-0"><?= __('about.stats.clients', [], 'Satisfied Clients') ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stat-card text-center p-4 rounded-4 bg-white shadow-sm h-100">
                            <div class="icon-box bg-success-soft rounded-circle p-3 mb-3 mx-auto">
                                <i class="bi bi-globe fs-3 text-success"></i>
                            </div>
                            <h3 class="display-4 fw-bold text-dark mb-2">25+</h3>
                            <p class="text-muted mb-0"><?= __('about.stats.countries', [], 'Countries Served') ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stat-card text-center p-4 rounded-4 bg-white shadow-sm h-100">
                            <div class="icon-box bg-success-soft rounded-circle p-3 mb-3 mx-auto">
                                <i class="bi bi-chat-right-text fs-3 text-success"></i>
                            </div>
                            <h3 class="display-4 fw-bold text-dark mb-2">10M+</h3>
                            <p class="text-muted mb-0"><?= __('about.stats.messages', [], 'Messages Sent') ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stat-card text-center p-4 rounded-4 bg-white shadow-sm h-100">
                            <div class="icon-box bg-success-soft rounded-circle p-3 mb-3 mx-auto">
                                <i class="bi bi-headset fs-3 text-success"></i>
                            </div>
                            <h3 class="display-4 fw-bold text-dark mb-2">24/7</h3>
                            <p class="text-muted mb-0"><?= __('about.stats.support', [], 'Support') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company History Timeline Section -->
<section class="timeline-section py-5 bg-light position-relative overflow-hidden">
    <div class="position-absolute w-100 h-100" style="background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNMCwxMDBjMzAsMCwyMCwtMzAgNTAsLTMwczIwLDMwLDUwLDMwczIwLC0zMCw1MCwtMzBzMjAsMzAsNTAsMzBzMjAsLTMwLDUwLC0zMHMyMCwzMCw1MCwzMFYwSDBaIiBmaWxsPSJyZ2JhKDI2LDM1LDEyNiwwLjAzKSIvPjwvc3ZnPg=='); opacity: 0.25;"></div>
    
    <div class="container position-relative">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <div class="section-title" data-aos="fade-up">
                    <span class="subtitle text-success fw-bold"><?= strtoupper(__('about.timeline.title', [], 'OUR JOURNEY')) ?></span>
                    <h2 class="display-5 fw-bold"><?= __('about.timeline.heading', [], 'Our Story of Innovation and Growth') ?></h2>
                    <p class="lead"><?= __('about.timeline.subtitle', [], 'From humble beginnings to becoming a leader in business technology solutions') ?></p>
                </div>
            </div>
        </div>
        
        <style>
        /* Timeline styling */
        .timeline {
            position: relative;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            height: 100%;
            width: 4px;
            background: linear-gradient(180deg, #0d3d25 0%, #198754 100%);
            transform: translateX(-50%);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 60px;
        }
        
        .timeline-content {
            transition: all 0.3s ease;
            position: relative;
            width: 45%;
        }
        
        .timeline-content:hover {
            transform: translateY(-5px);
        }
        
        .timeline-date {
            position: absolute;
            top: 0;
            left: 50%;
            width: 120px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0d3d25, #198754);
            color: white;
            border-radius: 20px;
            transform: translateX(-50%);
            font-weight: bold;
            z-index: 2;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
        
        .left {
            margin-right: auto;
        }
        
        .right {
            margin-left: auto;
        }
        
        .timeline-dot {
            position: absolute;
            top: 10px;
            left: 50%;
            width: 20px;
            height: 20px;
            background: white;
            border: 4px solid #198754;
            border-radius: 50%;
            transform: translateX(-50%);
            z-index: 2;
        }
        
        @media (max-width: 768px) {
            .timeline::before {
                left: 30px;
            }
            
            .timeline-content {
                width: calc(100% - 60px);
                margin-left: 60px;
            }
            
            .timeline-date {
                left: 30px;
                transform: translateX(-50%);
                width: 100px;
            }
            
            .timeline-dot {
                left: 30px;
            }
        }
        </style>
        
        <div class="timeline" data-aos="fade-up">
            <!-- Timeline Item 1 -->
            <div class="timeline-item">
                <div class="timeline-date">2023 Q1</div>
                <div class="timeline-dot"></div>
                <div class="timeline-content left p-4 rounded-4 bg-white shadow-sm">
                    <h4 class="text-success"><?= __('about.timeline.items.founded.title', [], 'Company Founded') ?></h4>
                    <p><?= __('about.timeline.items.founded.description', [], 'AppNomu was established with a vision to transform business operations through innovative technology solutions.') ?></p>
                </div>
            </div>

            <!-- Timeline Item 2 -->
            <div class="timeline-item">
                <div class="timeline-date">2023 Q2</div>
                <div class="timeline-dot"></div>
                <div class="timeline-content right p-4 rounded-4 bg-white shadow-sm">
                    <h4 class="text-success"><?= __('about.timeline.items.first_launch.title', [], 'First Product Launch') ?></h4>
                    <p><?= __('about.timeline.items.first_launch.description', [], 'Launched our flagship product, SalesQ, designed specifically for the African market\'s unique business needs.') ?></p>
                </div>
            </div>

            <!-- Timeline Item 3 -->
            <div class="timeline-item">
                <div class="timeline-date">2023 Q3</div>
                <div class="timeline-dot"></div>
                <div class="timeline-content left p-4 rounded-4 bg-white shadow-sm">
                    <h4 class="text-success"><?= __('about.timeline.items.first_customers.title', [], 'First 1000 Customers') ?></h4>
                    <p><?= __('about.timeline.items.first_customers.description', [], 'Reached a significant milestone of serving over 1,000 businesses across East Africa.') ?></p>
                </div>
            </div>

            <!-- Timeline Item 4 -->
            <div class="timeline-item">
                <div class="timeline-date">2023 Q4</div>
                <div class="timeline-dot"></div>
                <div class="timeline-content right p-4 rounded-4 bg-white shadow-sm">
                    <h4 class="text-success"><?= __('about.timeline.items.expansion.title', [], 'Regional Expansion') ?></h4>
                    <p><?= __('about.timeline.items.expansion.description', [], 'Expanded our services to 5 new countries, bringing our total to 10 countries across Africa.') ?></p>
                </div>
            </div>

            <!-- Timeline Item 5 -->
            <div class="timeline-item">
                <div class="timeline-date">2024 Q1</div>
                <div class="timeline-dot"></div>
                <div class="timeline-content left p-4 rounded-4 bg-white shadow-sm">
                    <h4 class="text-success"><?= __('about.timeline.items.enhancement.title', [], 'Product Enhancement') ?></h4>
                    <p><?= __('about.timeline.items.enhancement.description', [], 'Launched major updates with advanced analytics and multi-language support.') ?></p>
                </div>
            </div>

            <!-- Timeline Item 6 -->
            <div class="timeline-item">
                <div class="timeline-date">2024 Q2</div>
                <div class="timeline-dot"></div>
                <div class="timeline-content right p-4 rounded-4 bg-white shadow-sm">
                    <h4 class="text-success"><?= __('about.timeline.items.milestone.title', [], '25,000+ Businesses Served') ?></h4>
                    <p><?= __('about.timeline.items.milestone.description', [], 'Celebrated serving over 25,000 businesses with our innovative solutions.') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section py-5 bg-light position-relative overflow-hidden">
    <!-- Improved Decorative Background -->
    <div class="position-absolute top-0 end-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMDAgMjAwIj48cGF0aCBkPSJNMCwxMDBjMzAsMCwyMCwtMzAgNTAsLTMwczIwLDMwLDUwLDMwczIwLC0zMCw1MCwtMzBzMjAsMzAsNTAsMzBzMjAsLTMwLDUwLC0zMHMyMCwzMCw1MCwzMFYwSDBaIiBmaWxsPSJyZ2JhKDI2LDM1LDEyNiwwLjAzKSIvPjwvc3ZnPg=='); opacity: 0.4;"></div>
    
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title mb-5">
                    <span class="subtitle text-success fw-bold">OUR TEAM</span>
                    <h2 class="display-5 fw-bold">Meet Our <span class="text-gradient">Leadership</span></h2>
                    <p class="lead">A team of passionate professionals dedicated to your success</p>
                </div>
            </div>
        </div>
        
        <style>
        /* Team card hover effects */
        .team-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .team-img .rounded-circle {
            transition: all 0.3s ease;
        }
        
        .team-card:hover .team-img .rounded-circle {
            transform: scale(1.05);
            border-color: var(--accent) !important;
        }
        </style>
        <div class="row g-4 justify-content-center">
            <!-- Team Member 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-card text-center p-4 rounded-4 bg-white shadow-sm h-100" data-aos="fade-up">
                    <div class="team-img-container mx-auto mb-4">
                        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="<?= __('about.team.member1.name', [], 'Sarah Johnson') ?>" class="img-fluid rounded-circle">
                        <div class="social-links">
                            <a href="#" class="text-white" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="text-white" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="text-white" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <h4 class="mb-1"><?= __('about.team.member1.name', [], 'Sarah Johnson') ?></h4>
                    <p class="text-success mb-3"><?= __('about.team.member1.role', [], 'CEO & Founder') ?></p>
                    <p class="mb-0"><?= __('about.team.member1.bio', [], 'Visionary leader with 15+ years of experience in business technology and entrepreneurship.') ?></p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-card text-center p-4 rounded-4 bg-white shadow-sm h-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-img-container mx-auto mb-4">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="<?= __('about.team.member2.name', [], 'David Kimani') ?>" class="img-fluid rounded-circle">
                        <div class="social-links">
                            <a href="#" class="text-white" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="text-white" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="text-white" aria-label="GitHub"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                    <h4 class="mb-1"><?= __('about.team.member2.name', [], 'David Kimani') ?></h4>
                    <p class="text-success mb-3"><?= __('about.team.member2.role', [], 'CTO') ?></p>
                    <p class="mb-0"><?= __('about.team.member2.bio', [], 'Technology expert with a passion for building scalable and innovative software solutions.') ?></p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-card text-center p-4 rounded-4 bg-white shadow-sm h-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-img-container mx-auto mb-4">
                        <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="<?= __('about.team.member3.name', [], 'Amina Okafor') ?>" class="img-fluid rounded-circle">
                        <div class="social-links">
                            <a href="#" class="text-white" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="text-white" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="text-white" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                    <h4 class="mb-1"><?= __('about.team.member3.name', [], 'Amina Okafor') ?></h4>
                    <p class="text-success mb-3"><?= __('about.team.member3.role', [], 'Head of Customer Success') ?></p>
                    <p class="mb-0"><?= __('about.team.member3.bio', [], 'Dedicated to ensuring our clients achieve their business goals with our solutions.') ?></p>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card border-0 bg-white shadow-sm h-100 p-4 team-card">
                    <div class="text-center mb-4">
                        <div class="team-img mb-4">
                            <img src="https://appnomu.com/landing/assets/images/Sharon%20Payne.jpeg" alt="<?= __('about.team.member4.name', [], 'Sharon Payne') ?>" class="rounded-circle border border-3 border-success-soft" width="150" height="150">
                        </div>
                        <h5 class="mb-1"><?= __('about.team.member4.name', [], 'Sharon Payne') ?></h5>
                        <p class="text-success mb-3"><?= __('about.team.member4.role', [], 'Head of Customer Support') ?></p>
                        <p class="mb-0"><?= __('about.team.member4.bio', [], 'Dedicated to providing exceptional service and support to our valued clients.') ?></p>
                    </div>
                    <p class="text-center"><?= __('about.team.member4.description', [], 'Sharon provides expert legal guidance to ensure compliance across multiple jurisdictions. She has extensive experience in international business law and data privacy regulations.') ?></p>
                    <div class="social-links text-center mt-auto">
                        <a href="https://linkedin.com/in/" class="text-success mx-2"><i class="bi bi-linkedin"></i></a>
                        <a href="https://twitter.com/appnomu" class="text-success mx-2"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 5 -->
            <div class="col-lg-4 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="500">
                <div class="card border-0 bg-white shadow-sm h-100 p-4 team-card">
                    <div class="text-center mb-4">
                        <div class="team-img mb-4">
                            <img src="https://appnomu.com/landing/assets/images/Bernice.jpg" alt="Bernice Sandra" class="rounded-circle border border-3 border-primary-soft" width="150" height="150">
                        </div>
                        <h5 class="mb-1">Bernice Sandra</h5>
                        <p class="text-success fw-bold mb-0">Head of Marketing</p>
                        <p class="text-muted small">Since 2021</p>
                    </div>
                    <p class="text-center">Bernice leads our global marketing strategy with over 10 years of experience in digital marketing and brand development. She previously worked at Unilever East Africa.</p>
                    <div class="social-links text-center mt-auto">
                        <a href="https://linkedin.com/in/" class="text-success mx-2"><i class="bi bi-linkedin"></i></a>
                        <a href="https://twitter.com/appnomu" class="text-success mx-2"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="core-values py-7 position-relative overflow-hidden">
    <!-- Background pattern with improved opacity -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNMCwxMDBjMzAsMCwyMCwtMzAgNTAsLTMwczIwLDMwLDUwLDMwczIwLC0zMCw1MCwtMzBzMjAsMzAsNTAsMzBzMjAsLTMwLDUwLC0zMHMyMCwzMCw1MCwzMFYwSDBaIiBmaWxsPSJyZ2JhKDI2LDM1LDEyNiwwLjAzKSIvPjwvc3ZnPg=='); background-size: 100% 400px; background-repeat: repeat-x; background-position: top center;"></div>
    
    <div class="container position-relative">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <div class="section-title">
                    <span class="subtitle">OUR PRINCIPLES</span>
                    <h2 class="display-5 fw-bold mb-3">Core <span class="text-gradient">Values</span> That Guide Us</h2>
                    <p class="lead">These principles define who we are and shape everything we do as a company</p>
                </div>
            </div>
              <!-- Value cards with enhanced styling -->
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="value-card bg-white p-4 p-md-5 rounded-4 h-100 shadow-sm">
                    <div class="d-flex align-items-start mb-4">
                        <div class="icon-box btn-success-soft rounded-circle p-3 me-4 flex-shrink-0">
                            <i class="bi bi-globe text-success fs-4"></i>
                        </div>
                        <div>
                            <h4 class="mb-3">Global Focus</h4>
                            <p class="mb-0">We build solutions designed for diverse markets across Africa, USA, and Asia, addressing the unique challenges and opportunities in each region.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="value-card bg-white p-4 p-md-5 rounded-4 h-100 shadow-sm">
                    <div class="d-flex align-items-start mb-4">
                        <div class="icon-box btn-success-soft rounded-circle p-3 me-4 flex-shrink-0">
                            <i class="bi bi-universal-access text-success fs-4"></i>
                        </div>
                        <div>
                            <h4 class="mb-3">Accessibility</h4>
                            <p class="mb-0">We design our products to be usable by everyone, regardless of technical expertise, language, or location. Our special discount programs for startups and non-profits reflect this commitment.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="value-card bg-white p-4 p-md-5 rounded-4 h-100 shadow-sm">
                    <div class="d-flex align-items-start mb-4">
                        <div class="icon-box btn-success-soft rounded-circle p-3 me-4 flex-shrink-0">
                            <i class="bi bi-lightbulb text-success fs-4"></i>
                        </div>
                        <div>
                            <h4 class="mb-3">Innovation</h4>
                            <p class="mb-0">We continuously improve our platform to meet evolving business needs, incorporating feedback from our diverse customer base to create solutions that truly serve their requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="value-card bg-white p-4 p-md-5 rounded-4 h-100 shadow-sm">
                    <div class="d-flex align-items-start mb-4">
                        <div class="icon-box btn-success-soft rounded-circle p-3 me-4 flex-shrink-0">
                            <i class="bi bi-shield-check text-success fs-4"></i>
                        </div>
                        <div>
                            <h4 class="mb-3">Integrity</h4>
                            <p class="mb-0">We operate with transparency and put customer trust at the center of everything we do. Our pricing is clear, our services reliable, and our support responsive.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="faq-section py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <div class="section-title" data-aos="fade-up">
                    <span class="subtitle text-success fw-bold"><?= strtoupper(__('about.faq.title', [], 'FAQ')) ?></span>
                    <h2 class="display-5 fw-bold"><?= __('about.faq.heading', [], 'Frequently Asked Questions') ?></h2>
                    <p class="lead"><?= __('about.faq.subtitle', [], 'Get answers to common questions about AppNomu SalesQ') ?></p>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="100">
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?= __('about.faq.q1.question', [], 'What industries does AppNomu SalesQ serve?') ?>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?= __('about.faq.q1.answer', [], 'AppNomu SalesQ serves a wide range of industries including retail, wholesale distribution, manufacturing, consumer packaged goods, pharmaceuticals, and more. Our platform is flexible enough to adapt to the specific needs of various business types and sizes across Africa, USA, and Asia.') ?>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <?= __('about.faq.q2.question', [], 'How does the free trial work?') ?>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?= __('about.faq.q2.answer', [], 'Our free trial gives you full access to all features of AppNomu SalesQ for 14 days. There\'s no credit card required to start, and you can easily upgrade to a paid plan at any time. During the trial, you\'ll have access to our support team to help you get the most out of the platform.') ?>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <?= __('about.faq.q3.question', [], 'What kind of support does AppNomu provide?') ?>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?= __('about.faq.q3.answer', [], 'We provide comprehensive support to all our customers, including 24/7 technical support, personalized onboarding assistance, regular training sessions, and an extensive knowledge base. Our dedicated customer success team ensures you get maximum value from the platform.') ?>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="accordion-item border-0 shadow-sm rounded">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <?= __('about.faq.q4.question', [], 'Can I integrate SalesQ with my existing systems?') ?>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?= __('about.faq.q4.answer', [], 'Yes, AppNomu SalesQ offers robust API capabilities and pre-built integrations with popular business tools including accounting software, CRM systems, e-commerce platforms, and ERP solutions. Our team can also build custom integrations to meet your specific business needs.') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Enhanced CTA Section -->
<section class="cta-section py-7" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">

    <?php 
    // Check for demo request status
    $demo_request = isset($_GET['demo_request']) ? $_GET['demo_request'] : '';
    $user_name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
    
    if ($demo_request == 'success'): 
    ?>
    <div class="container mb-4">
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <div class="d-flex align-items-center">
                <div class="me-3">
                    <i class="bi bi-check-circle-fill fs-1"></i>
                </div>
                <div>
                    <h4 class="alert-heading mb-1"><?= __('about.demo_success.title', [], 'Thank you') ?><?php echo !empty($user_name) ? ', ' . htmlspecialchars($user_name) : ''; ?>!</h4>
                    <p class="mb-0"><?= __('about.demo_success.message', [], 'Your demo request has been sent successfully. Our team will contact you shortly to schedule your personalized demo.') ?></p>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="<?= __('general.close', [], 'Close') ?>"></button>
        </div>
    </div>
    <?php elseif ($demo_request == 'error'): ?>
    <div class="container mb-4">
        <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
            <div class="d-flex align-items-center">
                <div class="me-3">
                    <i class="bi bi-exclamation-triangle-fill fs-1"></i>
                </div>
                <div>
                    <h4 class="alert-heading mb-1"><?= __('about.demo_error.title', [], 'Something went wrong') ?></h4>
                    <p class="mb-0"><?= sprintf(
                        __('about.demo_error.message', [], 'We couldn\'t process your demo request. Please try again or contact us directly at %s.'),
                        '<a href="mailto:support@appnomu.com" class="alert-link">support@appnomu.com</a>'
                    ) ?></p>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="<?= __('general.close', [], 'Close') ?>"></button>
        </div>
    </div>
    <?php endif; ?>
    
    <div class="container position-relative py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="display-4 fw-bold text-dark mb-4"><?= __('about.cta.title', [], 'Ready to Transform Your <span class="text-success">Sales Process</span>?') ?></h2>
                <p class="lead text-dark opacity-75 mb-4"><?= __('about.cta.subtitle', [], 'Join thousands of businesses across Africa, USA, and Asia that have unlocked their sales potential with SalesQ.') ?></p>
                <div class="mt-5">
                    <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=cta&utm_campaign=salesq" class="btn btn-success btn-lg px-5 py-3 me-sm-3 mb-3 mb-sm-0 pulse-animation">
                        <?= __('cta.start_free_trial', [], 'Start Free Trial') ?>
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=256709712129&text&type=phone_number&app_absent=0" class="btn btn-outline-success btn-lg px-5 py-3" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-whatsapp me-2"></i><?= __('cta.start_chat', [], 'Start Chat Now') ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 ms-auto">
                <div class="card shadow-sm rounded-4 border-0 overflow-hidden">
                    <!-- Green accent header -->
                    <div class="card-header bg-success text-white py-3">
                        <h4 class="mb-0"><?= __('about.demo_form.title', [], 'Request a Demo') ?></h4>
                        <p class="small mb-0"><?= __('about.demo_form.subtitle', [], 'Get a personalized walkthrough of SalesQ') ?></p>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <form class="p-4" action="/process_demo_request.php" method="POST" id="demoForm">
                            <div class="mb-3">
                                <label for="name" class="form-label"><?= __('form.labels.full_name', [], 'Full Name') ?></label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"><?= __('form.labels.email', [], 'Email Address') ?></label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label"><?= __('form.labels.phone', [], 'Phone Number') ?></label>
                                <input type="tel" class="form-control form-control-lg" id="phone" name="phone" required>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label"><?= __('form.labels.message', [], 'What would you like to learn about?') ?></label>
                                <textarea class="form-control form-control-lg" id="message" name="message" rows="3" required></textarea>
                                <label for="teamSize" class="form-label"><?= __('form.labels.team_size', [], 'Team Size') ?></label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="bi bi-people"></i></span>
                                    <select class="form-select" id="teamSize" name="teamSize" required>
                                        <option value="" selected disabled><?= __('form.select_placeholder.team_size', [], 'Select team size') ?></option>
                                        <option value="1-10"><?= __('form.options.team_size.1_10', [], '1-10 employees') ?></option>
                                        <option value="11-50"><?= __('form.options.team_size.11_50', [], '11-50 employees') ?></option>
                                        <option value="51-200"><?= __('form.options.team_size.51_200', [], '51-200 employees') ?></option>
                                        <option value="201-500"><?= __('form.options.team_size.201_500', [], '201-500 employees') ?></option>
                                        <option value="500+"><?= __('form.options.team_size.500_plus', [], '500+ employees') ?></option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg w-100 pulse-animation">Request Demo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Proven fix for AOS content visibility issues (similar to legal pages fix)
document.addEventListener('DOMContentLoaded', function() {
    // Immediate fix: Make all AOS elements visible regardless of AOS initialization
    document.querySelectorAll('[data-aos]').forEach(function(element) {
        element.style.opacity = '1';
        element.style.transform = 'none';
        element.style.visibility = 'visible';
    });
    
    // Initialize AOS with safe settings
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 50,
            disable: 'mobile'
        });
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Mobile optimizations
    if (window.innerWidth < 768) {
        document.querySelectorAll('.timeline-item').forEach(item => {
            item.style.marginBottom = '40px';
        });
    }
    
    // Support button functionality
    document.querySelectorAll('.contact-support-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if (window.liveChat) {
                liveChat('maximize');
            } else {
                window.location.href = '/contact';
            }
        });
    });
});
</script>

<?php
// Get the page content buffer
$content = ob_get_clean();

// Include the layout template
require_once __DIR__ . '/includes/layout.php';
?>
