<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load configuration first
require_once __DIR__ . '/config.php';

// Load country-specific content if available
if (file_exists(__DIR__ . '/includes/country_content.php')) {
    require_once __DIR__ . '/includes/country_content.php';
}

// Set the current page for navigation highlighting
$current_page = 'discover2inspires';

// Set page metadata
$page_title = 'Discover2Inspire 2026 - Empowering Business Through Technology | Free Event in Bugiri';
$page_description = 'Join Discover2Inspire 2026: Empowering Business Through Technology. Free tech event at Harmony Hotel Bugiri on June 27th. Discover AI, inspire growth, and transform your business with expert speakers, networking, and practical insights. Register now!';
$page_keywords = 'Discover2Inspire 2026, empowering business through technology, tech event Bugiri Uganda, AI conference Uganda, SMS marketing event, business technology Bugiri, AppNomu SalesQ event, free tech conference Uganda, Harmony Hotel Bugiri, technology seminar Uganda, business automation event, CRM training Uganda, digital marketing Bugiri, entrepreneurship event Uganda, tech networking Bugiri, AI business solutions Uganda, June 2026 tech event, business transformation Uganda';

// Open Graph and Twitter Card metadata
$page_og_title = 'Discover2Inspire 2026 - Empowering Business Through Technology';
$page_og_description = 'Discover AI. Inspire Growth. Transform Bugiri. Join us June 27th at Harmony Hotel for a free tech event featuring expert speakers, networking, and practical business solutions.';
$page_og_image = 'https://appnomu.com/landing/assets/images/AppNomu%20SalesQ%20logo.png';
$page_canonical = 'https://appnomu.com/landing/discover2inspire-2026';

// Include header
require_once __DIR__ . '/includes/header.php';
?>

<!-- Page Title -->
<title>Discover2Inspire 2026 - Empowering Business Through Technology | Free Event in Bugiri</title>

<!-- Favicon -->
<link rel="icon" type="image/png" href="https://appnomu.com/landing/assets/images/AppNomu%20SalesQ%20logo.png">
<link rel="apple-touch-icon" href="https://appnomu.com/landing/assets/images/AppNomu%20SalesQ%20logo.png">

<!-- SEO Meta Tags -->
<meta name="robots" content="index, follow">
<meta name="author" content="AppNomu SalesQ">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="distribution" content="global">
<meta name="rating" content="general">

<!-- Event Schema Markup for Rich Snippets -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "Discover2Inspire 2026 - Empowering Business Through Technology",
  "description": "Discover AI. Inspire Growth. Transform Bugiri. First ever tech event in Bugiri featuring AI, SMS Marketing, CRM, and business automation. Free entry with snacks, drinks and entertainment.",
  "startDate": "2026-06-27T17:00:00+03:00",
  "endDate": "2026-06-27T21:30:00+03:00",
  "eventStatus": "https://schema.org/EventScheduled",
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "location": {
    "@type": "Place",
    "name": "Harmony Hotel Bugiri",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Bugiri",
      "addressRegion": "Eastern Region",
      "addressCountry": "UG"
    }
  },
  "image": "https://appnomu.com/landing/assets/images/AppNomu%20SalesQ%20logo.png",
  "organizer": {
    "@type": "Organization",
    "name": "AppNomu SalesQ",
    "url": "https://appnomu.com"
  },
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "UGX",
    "availability": "https://schema.org/InStock",
    "url": "https://appnomu.com/landing/discover2inspire-2026",
    "validFrom": "2025-10-12"
  },
  "performer": [
    {
      "@type": "Person",
      "name": "Bahati Asher Faith"
    },
    {
      "@type": "Person",
      "name": "Azawi"
    }
  ]
}
</script>

<!-- Bootstrap & Icons for Event Page -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

<style>
/* Prevent Bootstrap from affecting the header - Desktop only */
@media (min-width: 993px) {
    .header {
        position: fixed !important;
        width: 100% !important;
        top: 0 !important;
        z-index: 1000 !important;
        background: #fff !important;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1) !important;
    }

    .header .header-container {
        max-width: 1300px !important;
        margin: 0 auto !important;
        padding: 0 20px !important;
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        gap: 1rem !important;
    }

    .header .nav {
        display: flex !important;
        list-style: none !important;
        margin: 0 !important;
        padding: 0 !important;
        align-items: center !important;
    }

    .header .nav-item {
        position: relative !important;
        margin: 0 6px !important;
    }

    .header .nav-link {
        color: #333 !important;
        text-decoration: none !important;
        padding: 0.5rem 0.8rem !important;
        display: flex !important;
        align-items: center !important;
        white-space: nowrap !important;
        font-size: 0.9rem !important;
    }
}

/* Mobile menu fix - hide by default on mobile */
@media (max-width: 992px) {
    .header .nav {
        display: none !important;
    }
    
    .header .nav.show {
        display: flex !important;
    }
}

:root {
    --primary-color: #198754;
    --secondary-color: #0d6efd;
    --accent-color: #ffc107;
}

.event-hero {
    background: linear-gradient(135deg, rgba(255,255,255,1) 0%, rgba(248,249,250,0.95) 50%, rgba(255,255,255,0.9) 100%);
    color: #212529;
    padding: 120px 0 100px;
    position: relative;
    overflow: hidden;
}

.event-hero::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(25,135,84,0.08) 0%, transparent 70%);
    border-radius: 50%;
}

.event-badge {
    background: linear-gradient(135deg, #198754 0%, #0d6efd 100%);
    color: white;
    padding: 10px 24px;
    border-radius: 50px;
    display: inline-block;
    margin-bottom: 24px;
    font-weight: 700;
    font-size: 0.85rem;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 15px rgba(25,135,84,0.3);
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); box-shadow: 0 4px 15px rgba(25,135,84,0.3); }
    50% { transform: scale(1.05); box-shadow: 0 6px 20px rgba(25,135,84,0.4); }
}

.event-title {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 20px;
    color: #212529;
    line-height: 1.2;
}

.event-title .highlight {
    background: linear-gradient(135deg, #198754 0%, #0d6efd 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.event-info-box {
    background: white;
    border-radius: 20px;
    padding: 35px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    border: 1px solid rgba(25,135,84,0.1);
    color: #212529;
}

.event-info-item {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #e9ecef;
}

.event-info-item:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.event-info-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
}

.event-info-icon i {
    font-size: 1.5rem;
    color: white;
}

.speaker-card {
    background: white;
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: all 0.3s;
    height: 100%;
    border: 2px solid transparent;
}

.speaker-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.12);
    border-color: #198754;
}

.speaker-avatar {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 3rem;
    color: white;
    font-weight: 700;
}

.topic-card {
    background: white;
    border-radius: 20px;
    padding: 35px;
    border: 2px solid #f0f0f0;
    box-shadow: 0 5px 20px rgba(0,0,0,0.06);
    transition: all 0.3s ease;
}

.topic-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.12);
    border-color: var(--primary-color);
}

.topic-icon {
    width: 60px;
    height: 60px;
    background: var(--primary-color);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
}

.topic-icon i {
    font-size: 1.8rem;
    color: white;
}

.sponsor-card {
    background: white;
    border-radius: 15px;
    padding: 40px 30px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: all 0.3s;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.sponsor-card:hover {
    transform: translateY(-5px);
}

.free-badge {
    background: #ffc107;
    color: #212529;
    padding: 12px 28px;
    border-radius: 50px;
    font-weight: 700;
    display: inline-block;
    font-size: 1rem;
    box-shadow: 0 4px 15px rgba(255,193,7,0.3);
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}

/* Additional improvements */
.btn-success {
    background: linear-gradient(135deg, #198754 0%, #157347 100%);
    border: none;
    transition: all 0.3s ease;
}

.btn-success:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(25,135,84,0.3) !important;
    background: linear-gradient(135deg, #157347 0%, #198754 100%);
}

.section-title {
    position: relative;
    display: inline-block;
    padding-bottom: 15px;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 4px;
    background: linear-gradient(135deg, #198754 0%, #0d6efd 100%);
    border-radius: 2px;
}

@media (max-width: 768px) {
    .event-title { font-size: 2.2rem; }
    .event-info-box { margin-top: 30px; }
}
</style>

<!-- Hero -->
<section class="event-hero">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="event-badge">
                    <i class="bi bi-star-fill me-2"></i>BUGIRI'S FIRST TECH EVENT
                </div>
                <h1 class="event-title">
                    <span class="highlight">Discover2Inspire</span> 2026
                </h1>
                <div class="mb-3">
                    <h2 class="h3 fw-bold text-success mb-2">Empowering Business Through Technology</h2>
                    <p class="fs-5 text-muted fst-italic">Discover AI. Inspire Growth. Transform Bugiri.</p>
                </div>
                <p class="fs-5 mb-4 text-muted" style="line-height: 1.6;">
                    Join us for an inspiring journey into the future of business with <strong>AI, SMS Marketing & Technology</strong><br>
                    <span class="text-success fw-bold">Learn. Connect. Transform.</span>
                </p>
                
                <div class="d-flex flex-wrap gap-3 align-items-center mb-4">
                    <a href="#register" class="btn btn-success btn-lg px-5 py-3 rounded-pill shadow-lg" style="font-weight: 600;">
                        <i class="bi bi-calendar-check me-2"></i>Reserve Your Free Spot
                    </a>
                    <div class="free-badge">
                        <i class="bi bi-gift-fill me-2"></i>100% FREE ENTRY
                    </div>
                </div>
                
                <div class="d-flex flex-wrap gap-4 text-muted small">
                    <div><i class="bi bi-people-fill text-success me-2"></i><strong>8 Expert Speakers</strong></div>
                    <div><i class="bi bi-cup-hot-fill text-success me-2"></i><strong>Free Snacks & Drinks</strong></div>
                    <div><i class="bi bi-music-note-beamed text-success me-2"></i><strong>Live Entertainment</strong></div>
                </div>
            </div>
            
            <div class="col-lg-5">
                <div class="event-info-box">
                    <div class="event-info-item">
                        <div class="event-info-icon"><i class="bi bi-calendar-event"></i></div>
                        <div><strong class="d-block">Date</strong><span>June 27th, 2026</span></div>
                    </div>
                    <div class="event-info-item">
                        <div class="event-info-icon"><i class="bi bi-clock"></i></div>
                        <div><strong class="d-block">Time</strong><span>5:00 PM - 9:30 PM</span></div>
                    </div>
                    <div class="event-info-item">
                        <div class="event-info-icon"><i class="bi bi-geo-alt"></i></div>
                        <div><strong class="d-block">Venue</strong><span>Harmony Hotel, Bugiri</span></div>
                    </div>
                    <div class="event-info-item">
                        <div class="event-info-icon"><i class="bi bi-ticket-perforated"></i></div>
                        <div><strong class="d-block">Entry</strong><span class="text-success fw-bold">FREE with Snacks, Drinks & Entertainment</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Topics -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold section-title">What You'll Discover</h2>
            <p class="lead text-muted mt-4">Cutting-edge insights and practical strategies for business growth</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="topic-card h-100">
                    <div class="topic-icon"><i class="bi bi-robot"></i></div>
                    <h3 class="h5 fw-bold mb-3">AI & Technology Revolution</h3>
                    <p class="text-muted mb-0">Discover how AI is transforming business operations and creating new opportunities in Uganda and East Africa.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="topic-card h-100">
                    <div class="topic-icon"><i class="bi bi-chat-dots"></i></div>
                    <h3 class="h5 fw-bold mb-3">SMS Marketing Strategies</h3>
                    <p class="text-muted mb-0">Learn proven SMS marketing techniques that drive engagement, boost sales, and build customer relationships.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="topic-card h-100">
                    <div class="topic-icon"><i class="bi bi-headset"></i></div>
                    <h3 class="h5 fw-bold mb-3">Customer Service Excellence</h3>
                    <p class="text-muted mb-0">Master exceptional customer service using modern tools and AI-powered solutions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="topic-card h-100">
                    <div class="topic-icon"><i class="bi bi-graph-up-arrow"></i></div>
                    <h3 class="h5 fw-bold mb-3">Online Marketing Trends 2026</h3>
                    <p class="text-muted mb-0">Stay ahead with the latest digital marketing trends, tools, and tactics reshaping business.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="topic-card h-100">
                    <div class="topic-icon"><i class="bi bi-lightning-charge"></i></div>
                    <h3 class="h5 fw-bold mb-3">AppNomu SalesQ in Action</h3>
                    <p class="text-muted mb-0">See live demos of how AppNomu SalesQ automates sales, manages inventory, and scales operations.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="topic-card h-100">
                    <div class="topic-icon"><i class="bi bi-lightbulb"></i></div>
                    <h3 class="h5 fw-bold mb-3">Best Practices for AI Era</h3>
                    <p class="text-muted mb-0">Actionable strategies to help your business thrive in the AI-powered environment.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Attend -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold section-title">Why Attend This Event?</h2>
            <p class="lead text-muted mt-4">Transform your business with knowledge, connections, and opportunities</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 bg-white rounded-4 shadow-sm h-100">
                    <div class="mb-3">
                        <div class="d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background: linear-gradient(135deg, #198754 0%, #0d6efd 100%); border-radius: 50%;">
                            <i class="bi bi-lightbulb-fill text-white" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                    <h4 class="h5 fw-bold mb-3">Learn from Experts</h4>
                    <p class="text-muted mb-0">Gain insights from industry leaders who have successfully implemented AI and technology in their businesses.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 bg-white rounded-4 shadow-sm h-100">
                    <div class="mb-3">
                        <div class="d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background: linear-gradient(135deg, #198754 0%, #0d6efd 100%); border-radius: 50%;">
                            <i class="bi bi-people-fill text-white" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                    <h4 class="h5 fw-bold mb-3">Network & Connect</h4>
                    <p class="text-muted mb-0">Meet like-minded business owners, entrepreneurs, and tech enthusiasts from Bugiri and beyond.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 bg-white rounded-4 shadow-sm h-100">
                    <div class="mb-3">
                        <div class="d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background: linear-gradient(135deg, #198754 0%, #0d6efd 100%); border-radius: 50%;">
                            <i class="bi bi-rocket-takeoff-fill text-white" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                    <h4 class="h5 fw-bold mb-3">Grow Your Business</h4>
                    <p class="text-muted mb-0">Discover practical tools and strategies you can implement immediately to boost sales and efficiency.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 bg-white rounded-4 shadow-sm h-100">
                    <div class="mb-3">
                        <div class="d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background: linear-gradient(135deg, #198754 0%, #0d6efd 100%); border-radius: 50%;">
                            <i class="bi bi-gift-fill text-white" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                    <h4 class="h5 fw-bold mb-3">Exclusive Perks</h4>
                    <p class="text-muted mb-0">Enjoy free entry, refreshments, entertainment, and exclusive offers available only to attendees.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Who Should Attend -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold section-title">Who Should Attend?</h2>
            <p class="lead text-muted mt-4">This event is perfect for anyone looking to leverage technology for business growth</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="p-4 border border-success rounded-4 h-100 bg-light">
                    <div class="d-flex align-items-start mb-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-check-circle-fill text-success" style="font-size: 1.5rem;"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="fw-bold mb-2">Business Owners</h5>
                            <p class="text-muted mb-0">Small and medium business owners looking to scale operations and increase revenue.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="p-4 border border-success rounded-4 h-100 bg-light">
                    <div class="d-flex align-items-start mb-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-check-circle-fill text-success" style="font-size: 1.5rem;"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="fw-bold mb-2">Entrepreneurs</h5>
                            <p class="text-muted mb-0">Startup founders and aspiring entrepreneurs ready to embrace technology.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="p-4 border border-success rounded-4 h-100 bg-light">
                    <div class="d-flex align-items-start mb-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-check-circle-fill text-success" style="font-size: 1.5rem;"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="fw-bold mb-2">Marketing Professionals</h5>
                            <p class="text-muted mb-0">Marketers seeking to master SMS marketing and digital strategies.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="p-4 border border-success rounded-4 h-100 bg-light">
                    <div class="d-flex align-items-start mb-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-check-circle-fill text-success" style="font-size: 1.5rem;"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="fw-bold mb-2">Sales Teams</h5>
                            <p class="text-muted mb-0">Sales professionals wanting to leverage CRM and automation tools.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="p-4 border border-success rounded-4 h-100 bg-light">
                    <div class="d-flex align-items-start mb-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-check-circle-fill text-success" style="font-size: 1.5rem;"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="fw-bold mb-2">Tech Enthusiasts</h5>
                            <p class="text-muted mb-0">Anyone interested in AI, technology, and digital transformation.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="p-4 border border-success rounded-4 h-100 bg-light">
                    <div class="d-flex align-items-start mb-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-check-circle-fill text-success" style="font-size: 1.5rem;"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="fw-bold mb-2">Students & Graduates</h5>
                            <p class="text-muted mb-0">Young professionals looking to understand business technology trends.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Speakers -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold section-title">Meet Our Speakers</h2>
            <p class="lead text-muted mt-4">Industry leaders and innovators sharing their expertise</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="speaker-card text-center">
                    <div class="mb-3">
                        <img src="https://appnomu.com/landing/assets/images/Bahati%20Asher.jpg" alt="Bahati Asher Faith" class="rounded-circle shadow" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #198754;">
                    </div>
                    <h3 class="h5 fw-bold">Bahati Asher Faith</h3>
                    <p class="text-success fw-bold mb-1">CEO & Founder</p>
                    <p class="text-muted small">AppNomu</p>
                    <p class="text-muted small mt-3">Leading the AI revolution in business automation across Africa.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="speaker-card text-center">
                    <div class="mb-3">
                        <img src="https://appnomu.com/landing/assets/images/Mubezi.jpeg" alt="Mubezi Moses" class="rounded-circle shadow" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #198754;">
                    </div>
                    <h3 class="h5 fw-bold">Mubezi Moses</h3>
                    <p class="text-success fw-bold mb-1">Software Developer & Political Leader</p>
                    <p class="text-muted small">Tech & Politics</p>
                    <p class="text-muted small mt-3">Bridging technology and leadership for community development.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="speaker-card text-center">
                    <div class="mb-3">
                        <img src="https://appnomu.com/landing/assets/images/Mulutazah.png" alt="Walwasa Mulutazah" class="rounded-circle shadow" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #198754;">
                    </div>
                    <h3 class="h5 fw-bold">Walwasa Mulutazah</h3>
                    <p class="text-success fw-bold mb-1">Project Officer</p>
                    <p class="text-muted small">Imagine Her</p>
                    <p class="text-muted small mt-3">Empowering women in technology and driving digital transformation.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="speaker-card text-center">
                    <div class="mb-3">
                        <img src="https://appnomu.com/landing/assets/images/Azawi-1320x880.jpg" alt="Azawi" class="rounded-circle shadow" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #198754;">
                    </div>
                    <h3 class="h5 fw-bold">Azawi</h3>
                    <p class="text-success fw-bold mb-1">Performing Artist</p>
                    <p class="text-muted small">Uganda</p>
                    <p class="text-muted small mt-3">Award-winning artist bringing entertainment and inspiration.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="speaker-card text-center">
                    <div class="mb-3">
                        <img src="https://appnomu.com/landing/assets/images/JEAN.jpeg" alt="Jean Amukwatse" class="rounded-circle shadow" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #198754;">
                    </div>
                    <h3 class="h5 fw-bold">Jean Amukwatse</h3>
                    <p class="text-success fw-bold mb-1">Software Engineer</p>
                    <p class="text-muted small">Living Goods</p>
                    <p class="text-muted small mt-3">Building scalable software solutions for social impact and healthcare.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="speaker-card text-center">
                    <div class="mb-3">
                        <img src="https://appnomu.com/landing/assets/images/Immaculate.jpeg" alt="Immaculate Nayiga" class="rounded-circle shadow" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #198754;">
                    </div>
                    <h3 class="h5 fw-bold">Immaculate Nayiga</h3>
                    <p class="text-success fw-bold mb-1">Software Developer</p>
                    <p class="text-muted small">Agrosahas International PVT Ltd</p>
                    <p class="text-muted small mt-3">Developing innovative agricultural technology solutions.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="speaker-card text-center">
                    <div class="mb-3">
                        <img src="https://appnomu.com/landing/assets/images/Augusta.jpeg" alt="Augustus Katende" class="rounded-circle shadow" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #198754;">
                    </div>
                    <h3 class="h5 fw-bold">Augustus Katende</h3>
                    <p class="text-success fw-bold mb-1">Founder</p>
                    <p class="text-muted small">RelWorx</p>
                    <p class="text-muted small mt-3">Entrepreneur driving digital transformation and business innovation.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="speaker-card text-center">
                    <div class="mb-3">
                        <img src="https://appnomu.com/landing/assets/images/Daphine.jpeg" alt="Daphine Nkunda" class="rounded-circle shadow" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid #198754;">
                    </div>
                    <h3 class="h5 fw-bold">Daphine Nkunda</h3>
                    <p class="text-success fw-bold mb-1">Communications & Engagement</p>
                    <p class="text-muted small">Sunbird AI</p>
                    <p class="text-muted small mt-3">Leading AI communication strategies and community engagement initiatives.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sponsors -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold section-title">Our Sponsors</h2>
            <p class="lead text-muted mt-4">Powered by industry-leading technology partners</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up">
                <div class="sponsor-card">
                    <img src="https://appnomu.com/landing/assets/images/AppNomu%20SalesQ%20logo.png" alt="AppNomu SalesQ" style="max-width:100%;max-height:60px;object-fit:contain;">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up">
                <div class="sponsor-card">
                    <strong style="color:#ffcb05;font-size:1.5rem">MTN Uganda</strong>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up">
                <div class="sponsor-card">
                    <strong style="color:#0099ff;font-size:1.5rem">Infobip</strong>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up">
                <div class="sponsor-card">
                    <strong style="color:#f38020;font-size:1.5rem">Cloudflare</strong>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up">
                <div class="sponsor-card">
                    <strong style="color:#211f1f;font-size:1.5rem">GitHub</strong>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up">
                <div class="sponsor-card">
                    <strong style="color:#f5a623;font-size:1.5rem">Flutterwave</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-5" style="background: linear-gradient(135deg, rgba(25,135,84,0.05) 0%, rgba(248,249,250,1) 100%); border-top: 3px solid #198754;" id="register">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="mb-4">
                    <span class="badge bg-success px-4 py-2 rounded-pill mb-3" style="font-size: 0.9rem;">
                        <i class="bi bi-lightning-charge-fill me-2"></i>LIMITED SEATS AVAILABLE
                    </span>
                </div>
                <h2 class="display-4 fw-bold mb-4" style="color: #212529;">Ready to Transform Your Business?</h2>
                <p class="lead mb-4 text-muted">Join us at Discover2Inspire 2026: <strong>Empowering Business Through Technology</strong>. Discover how AI and technology can revolutionize your business operations and drive sustainable growth.</p>
                <p class="h5 mb-4 text-success fw-bold">🎯 Reserve your spot today - It's completely FREE!</p>
                
                <a href="https://www.appnomu.com/register.php?utm_source=discover2inspires&utm_medium=event_page&utm_campaign=discover2inspires_2026" class="btn btn-success btn-lg px-5 py-3 rounded-pill shadow-lg mb-4" target="_blank" style="font-weight: 600;">
                    <i class="bi bi-calendar-check me-2"></i>Register Now - FREE Entry
                </a>
                
                <div class="mt-4 p-4 bg-white rounded-4 shadow-sm d-inline-block">
                    <p class="mb-2 text-dark"><i class="bi bi-envelope-fill me-2 text-success"></i>Questions? Email: <a href="mailto:info@appnomu.com" class="text-success fw-bold">info@appnomu.com</a></p>
                    <p class="mb-0 text-dark"><i class="bi bi-telephone-fill me-2 text-success"></i>Call: <a href="tel:+256200948420" class="text-success fw-bold">+256 200 948 420</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
