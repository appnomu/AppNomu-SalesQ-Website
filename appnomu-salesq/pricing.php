<?php
// Include required files
require_once 'config.php';
require_once 'includes/country_content.php';

// Page configuration
$page_title = "AppNomu SalesQ - Boost Sales in Africa with AppNomu";
$page_description = "Your All-in-One Marketing Suite with transparent pay-as-you-go pricing. AppNomu SalesQ offers flexible pricing for Ugandan businesses - no monthly fees, only pay for what you use.";

// Set page-specific keywords for SEO
$page_keywords = 'Pay-As-You-Go Software Uganda, Flexible Pricing Business Software, No Monthly Fee CRM, Affordable SMS Pricing Uganda, Business Software Pricing Africa, SMS Marketing Costs, Transparent Pricing Software, No Hidden Fees Business Tools';
$additional_css = [
    "https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
];
$additional_js = [
    "https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"
];

// Get current country and pricing
$currentCountry = get_user_country();
$pricingSymbol = get_country_content('pricing_symbol', 'UGX');

// Helper function to format price with country-specific currency
function format_price($priceKey, $fallbackPrice = 0) {
    global $pricingSymbol;
    $price = get_country_content("pricing_plans.{$priceKey}", $fallbackPrice);
    
    if ($pricingSymbol === 'USD' && is_numeric($price)) {
        return '$' . number_format($price, 2);
    } else if (is_numeric($price)) {
        return $pricingSymbol . ' ' . number_format($price);
    }
    return $pricingSymbol . ' ' . $fallbackPrice;
}

// Start output buffering
ob_start();
?>

<style>
    /* ============================================
       MOBILE FIX - DISABLE ALL ANIMATIONS/TRANSFORMS
       Must be at the top to ensure it loads first
       ============================================ */
    @media (max-width: 991.98px) {
        /* Kill ALL animations globally on mobile */
        *, *::before, *::after {
            animation: none !important;
            transition: none !important;
        }
        
        /* Prevent any transforms that cause shaking */
        .pricing-card,
        .enterprise-card,
        .addon-card,
        .pricing-icon-enhanced,
        .feature-list-enhanced,
        .btn-enhanced,
        .value-highlight,
        .smoke,
        .smoke-container,
        .popular-badge,
        .save-badge,
        .roi-calculator,
        .roi-calculator::before,
        [data-aos] {
            animation: none !important;
            transform: none !important;
            transition: none !important;
            opacity: 1 !important;
        }
        
        /* Hide smoke effects completely */
        .smoke-container,
        .smoke {
            display: none !important;
            visibility: hidden !important;
        }
        
        /* Remove perspective that causes 3D tilting */
        .row {
            perspective: none !important;
            transform-style: flat !important;
        }
        
        /* Disable hover states */
        .pricing-card:hover,
        .enterprise-card:hover,
        .addon-card:hover,
        .pricing-icon-enhanced:hover,
        .feature-list-enhanced:hover,
        .btn-enhanced:hover,
        .feature-icon-small:hover {
            transform: none !important;
        }
        
        /* Ensure body doesn't overflow horizontally */
        body {
            overflow-x: hidden !important;
            max-width: 100vw !important;
        }
        
        /* Fix any potential overflow issues */
        .hero-section,
        .pricing-section,
        .payg-section,
        section {
            overflow-x: hidden !important;
            max-width: 100% !important;
        }
    }
    
    /* Smoke Effect Styles */
    .smoke-container {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        overflow: hidden;
        pointer-events: none;
        z-index: 0;
    }
    
    .smoke {
        position: absolute;
        width: 300px;
        height: 300px;
        background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiB2aWV3Qm94PSIwIDAgMzAwIDMwMCI+PGRlZnM+PHJhZGlhbEdyYWRpZW50IGlkPSJhIiBjeD0iMTUwIiBjeT0iMTUwIiByPSIxNTAiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiMyOGE3NDUiIHN0b3Atb3BhY2l0eT0iLjEiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiMyOGE3NDUiIHN0b3Atb3BhY2l0eT0iMCIvPjwvcmFkaWFsR3JhZGllbnQ+PC9kZWZzPjxjaXJjbGUgY3g9IjE1MCIgY3k9IjE1MCIgcj0iMTUwIiBmaWxsPSJ1cmwoI2EpIi8+PC9zdmc+');
        background-size: contain;
        opacity: 0;
        animation: smoke-animation 8s infinite ease-out;
        transform: scale(0.8);
    }
    
    @keyframes smoke-animation {
        0% {
            opacity: 0;
            transform: translate(0, 0) scale(0.8);
        }
        20% {
            opacity: 0.3;
        }
        40% {
            opacity: 0.2;
            transform: translate(30px, -100px) scale(1.5);
        }
        60% {
            opacity: 0.1;
        }
        80% {
            opacity: 0.05;
            transform: translate(60px, -200px) scale(2);
        }
        100% {
            opacity: 0;
            transform: translate(80px, -300px) scale(2.5);
        }
    }
    
    .pricing-section {
        position: relative;
    }
    
    .smoke-1 { animation-delay: 0s; left: 10%; top: 40%; }
    .smoke-2 { animation-delay: 2s; left: 30%; top: 60%; }
    .smoke-3 { animation-delay: 4s; left: 60%; top: 30%; }
    .smoke-4 { animation-delay: 6s; left: 80%; top: 50%; }
    .smoke-5 { animation-delay: 1s; left: 20%; top: 70%; }
    .smoke-6 { animation-delay: 3s; left: 50%; top: 20%; }
    .smoke-7 { animation-delay: 5s; left: 70%; top: 80%; }
    .smoke-8 { animation-delay: 7s; left: 90%; top: 40%; }
    
    /* Global styles for pricing page */
    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    .hero-section {
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
        margin: 0 !important;
        position: relative;
    }
    .hero-section h1 {
        display: block;
        border: none;
        padding: 0;
        margin-bottom: 1.5rem;
        color: #ffffff;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        font-weight: 800;
    }
    .hero-section p.lead {
        display: block;
        border: none;
        padding: 0;
        margin-bottom: 1.5rem;
        color: rgba(255, 255, 255, 0.85);
        text-shadow: 0 1px 2px rgba(0,0,0,0.3);
        font-weight: 400;
    }
    .pricing-step {
        position: relative;
    }
    .pricing-step::after {
        content: '';
        position: absolute;
        bottom: -30px;
        left: 50%;
        transform: translateX(-50%);
        width: 2px;
        height: 30px;
        background-color: rgba(25, 135, 84, 0.2);
    }
    .pricing-step:last-child::after {
        display: none;
    }
    .step-number {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #198754;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-right: 15px;
        flex-shrink: 0;
    }
    .feature-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
    }
    
    /* Enhanced UI Styles */
    .pricing-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid rgba(255, 255, 255, 0.08);
        background: rgba(255, 255, 255, 0.03);
        position: relative;
        overflow: hidden;
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        max-width: 100%;
    }
    
    .pricing-card h3,
    .pricing-card h4,
    .pricing-card h5 {
        color: #ffffff;
    }
    
    .pricing-card p,
    .pricing-card li {
        color: rgba(255, 255, 255, 0.7);
    }
    
    .pricing-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #198754 0%, #20c997 100%);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }
    
    .pricing-card:hover::before {
        transform: scaleX(1);
    }
    
    .pricing-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(25, 135, 84, 0.2);
        border-color: rgba(25, 135, 84, 0.3);
    }
    
    .enterprise-card {
        background: rgba(25, 135, 84, 0.1);
        border: 2px solid #198754 !important;
        transform: none;
        position: relative;
        box-shadow: 0 12px 35px rgba(25, 135, 84, 0.3);
    }
    
    .enterprise-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(145deg, rgba(25, 135, 84, 0.05) 0%, rgba(32, 201, 151, 0.05) 100%);
        pointer-events: none;
        border-radius: 1rem;
    }
    
    .enterprise-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(25, 135, 84, 0.25);
    }
    
    .pricing-icon-enhanced {
        background: linear-gradient(135deg, #198754 0%, #20c997 100%);
        box-shadow: 0 12px 35px rgba(25, 135, 84, 0.4);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }
    
    .pricing-icon-enhanced::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(135deg, #198754, #20c997, #198754);
        border-radius: inherit;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .pricing-icon-enhanced:hover::before {
        opacity: 1;
        animation: rotate-gradient 2s linear infinite;
    }
    
    @keyframes rotate-gradient {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
    .pricing-icon-enhanced:hover {
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 12px 35px rgba(25, 135, 84, 0.4);
    }
    
    .price-highlight {
        background: linear-gradient(135deg, #198754 0%, #20c997 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 800;
    }
    
    .feature-list-enhanced {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        position: relative;
        backdrop-filter: blur(5px);
        transition: all 0.3s ease;
    }
    
    .feature-list-enhanced:hover {
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(25, 135, 84, 0.3);
        transform: translateY(-2px);
    }
    
    .feature-list-enhanced::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(180deg, #198754 0%, #20c997 100%);
        border-radius: 0 4px 4px 0;
    }
    
    .btn-enhanced {
        background: linear-gradient(135deg, #198754 0%, #20c997 100%);
        border: none;
        box-shadow: 0 4px 15px rgba(25, 135, 84, 0.3);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .btn-enhanced::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }
    
    .btn-enhanced:hover::before {
        left: 100%;
    }
    
    .btn-enhanced:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(25, 135, 84, 0.4);
    }
    
    .section-header {
        position: relative;
        padding-bottom: 2rem;
    }
    
    .section-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #198754 0%, #20c997 100%);
        border-radius: 2px;
    }
    
    .badge-enhanced {
        background: linear-gradient(135deg, #198754 0%, #20c997 100%);
        color: white;
        padding: 0.5rem 1.5rem;
        border-radius: 50px;
        font-weight: 600;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 15px rgba(25, 135, 84, 0.3);
    }
    
    .popular-badge {
        background: linear-gradient(135deg, #ffc107 0%, #ff8c00 100%);
        color: #000;
        font-weight: 700;
        box-shadow: 0 4px 15px rgba(255, 193, 7, 0.4);
        animation: pulse-glow 2s infinite;
    }
    
    /* Pricing Toggle Styles */
    .pricing-toggle {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50px;
        padding: 4px;
        display: inline-flex;
        position: relative;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .pricing-toggle input[type="radio"] {
        display: none;
    }
    
    .pricing-toggle label {
        padding: 12px 24px;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.6);
        position: relative;
        z-index: 2;
    }
    
    .pricing-toggle input[type="radio"]:checked + label {
        background: linear-gradient(135deg, #198754 0%, #20c997 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(25, 135, 84, 0.3);
    }
    
    .save-badge {
        background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
        color: white;
        font-size: 0.75rem;
        padding: 4px 8px;
        border-radius: 12px;
        font-weight: 700;
        animation: pulse-glow 2s infinite;
    }
    
    .value-highlight {
        background: rgba(25, 135, 84, 0.1);
        border: 1px solid rgba(25, 135, 84, 0.2);
        border-radius: 12px;
        padding: 10px 16px;
        margin: 8px 0;
        position: relative;
        overflow: hidden;
    }
    
    .value-highlight::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
        transition: left 0.6s;
    }
    
    .value-highlight:hover::before {
        left: 100%;
    }
    
    .roi-calculator {
        background: rgba(255, 193, 7, 0.1);
        border: 1px solid rgba(255, 193, 7, 0.3);
        border-radius: 20px;
        padding: 30px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(255, 193, 7, 0.15);
    }
    
    .roi-calculator::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 193, 7, 0.1) 0%, transparent 70%);
        animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { transform: translate(0, 0) rotate(0deg); }
        33% { transform: translate(30px, -30px) rotate(120deg); }
        66% { transform: translate(-20px, 20px) rotate(240deg); }
    }
    
    /* Feature Icon Styles */
    .feature-icon-small {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }
    
    .feature-icon-small:hover {
        transform: scale(1.1);
    }
    
    /* Premium Plan Specific Styling */
    .premium-card {
        position: relative;
    }
    
    .premium-card::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, #6f42c1, #e83e8c, #6f42c1);
        border-radius: inherit;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .premium-card:hover::before {
        opacity: 0.3;
    }
    
    @keyframes pulse-glow {
        0%, 100% {
            transform: scale(1);
            box-shadow: 0 4px 15px rgba(255, 193, 7, 0.4);
        }
        50% {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(255, 193, 7, 0.6);
        }
    }
    
    .addon-card {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }
    
    .addon-card h4,
    .addon-card h5 {
        color: #ffffff;
    }
    
    .addon-card p {
        color: rgba(255, 255, 255, 0.7);
    }
    
    .addon-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, #6f42c1 0%, #e83e8c 100%);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }
    
    .addon-card:hover::before {
        transform: scaleX(1);
    }
    
    .addon-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 40px rgba(111, 66, 193, 0.15);
        border-color: rgba(111, 66, 193, 0.3);
    }
    
    .payg-section {
        position: relative;
    }
    
    /* FAQ Accordion Dark Theme Styles */
    .accordion-item {
        background: rgba(255, 255, 255, 0.03) !important;
        border: 1px solid rgba(255, 255, 255, 0.08) !important;
    }
    
    .accordion-button {
        background: rgba(255, 255, 255, 0.03) !important;
        color: #ffffff !important;
    }
    
    .accordion-button:not(.collapsed) {
        background: rgba(25, 135, 84, 0.1) !important;
        color: #ffffff !important;
    }
    
    .accordion-button::after {
        filter: invert(1);
    }
    
    .accordion-body {
        background: rgba(255, 255, 255, 0.02) !important;
        color: rgba(255, 255, 255, 0.8) !important;
    }
    
    .accordion-body h6 {
        color: #ffffff !important;
    }
    
    .accordion-body p,
    .accordion-body li {
        color: rgba(255, 255, 255, 0.7) !important;
    }
    
    .accordion-body .border {
        background: rgba(255, 255, 255, 0.03) !important;
        border-color: rgba(255, 255, 255, 0.08) !important;
    }
    
    .payg-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: radial-gradient(circle at 25% 25%, rgba(25, 135, 84, 0.05) 0%, transparent 50%),
                          radial-gradient(circle at 75% 75%, rgba(32, 201, 151, 0.05) 0%, transparent 50%);
        pointer-events: none;
    }
    
    /* ========================================
       MOBILE RESPONSIVE STYLES
       ======================================== */
    
    /* Tablet and below (max-width: 991px) */
    @media (max-width: 991.98px) {
        .hero-section {
            padding: 2.5rem 0 3rem 0 !important;
        }
        
        .hero-section h1 {
            font-size: 2.5rem !important;
        }
        
        .hero-section p.lead {
            font-size: 1.1rem !important;
        }
        
        .pricing-card,
        .enterprise-card,
        .addon-card {
            margin-bottom: 1.5rem;
        }
        
        .pricing-icon,
        .pricing-icon-enhanced {
            width: 80px !important;
            height: 80px !important;
        }
        
        .pricing-icon i,
        .pricing-icon-enhanced i {
            font-size: 1.75rem !important;
        }
        
        .display-4 {
            font-size: 2rem !important;
        }
        
        .display-5 {
            font-size: 1.75rem !important;
        }
        
        .section-header h2 {
            font-size: 1.75rem !important;
        }
        
        .feature-list-enhanced {
            padding: 1rem !important;
        }
        
        .card-body {
            padding: 1.25rem !important;
        }
        
        .card-header {
            padding-top: 2rem !important;
        }
    }
    
    /* Mobile devices (max-width: 767px) */
    @media (max-width: 767.98px) {
        /* DISABLE ALL HOVER ANIMATIONS ON MOBILE */
        .pricing-card,
        .enterprise-card,
        .addon-card,
        .pricing-icon-enhanced,
        .feature-list-enhanced,
        .btn-enhanced,
        .value-highlight {
            transform: none !important;
            transition: none !important;
        }
        
        .pricing-card:hover,
        .enterprise-card:hover,
        .addon-card:hover {
            transform: none !important;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1) !important;
        }
        
        .pricing-icon-enhanced:hover {
            transform: none !important;
        }
        
        .feature-list-enhanced:hover {
            transform: none !important;
        }
        
        .btn-enhanced:hover {
            transform: none !important;
        }
        
        /* Disable smoke animations on mobile */
        .smoke-container {
            display: none !important;
        }
        
        /* Disable floating animations */
        .roi-calculator::before {
            animation: none !important;
        }
        
        /* Disable pulse animations */
        .popular-badge {
            animation: none !important;
        }
        
        .save-badge {
            animation: none !important;
        }
        
        /* Disable gradient rotation */
        .pricing-icon-enhanced::before {
            animation: none !important;
            display: none !important;
        }
        
        /* Disable card top border animation */
        .pricing-card::before,
        .addon-card::before {
            transform: scaleX(1) !important;
            transition: none !important;
        }
        
        /* CRITICAL: Disable 3D perspective that causes tilting */
        .row[style*="perspective"] {
            perspective: none !important;
        }
        
        /* Disable AOS animations on mobile */
        [data-aos] {
            opacity: 1 !important;
            transform: none !important;
            transition: none !important;
        }
        
        .hero-section {
            padding: 2rem 0 2.5rem 0 !important;
        }
        
        .hero-section h1 {
            font-size: 1.85rem !important;
            line-height: 1.3 !important;
        }
        
        .hero-section .price-highlight {
            font-size: 1.85rem !important;
        }
        
        .hero-section p.lead {
            font-size: 1rem !important;
            padding: 0 0.5rem;
        }
        
        .badge-enhanced {
            font-size: 0.75rem !important;
            padding: 0.4rem 1rem !important;
        }
        
        /* Pricing Toggle Mobile */
        .pricing-toggle {
            flex-direction: column;
            width: 100%;
            max-width: 280px;
            margin: 0 auto;
        }
        
        .pricing-toggle label {
            padding: 10px 16px;
            font-size: 0.9rem;
            text-align: center;
            width: 100%;
        }
        
        .save-badge {
            display: block;
            margin-top: 4px;
            margin-left: 0 !important;
        }
        
        /* Pricing Cards Mobile */
        .pricing-card,
        .enterprise-card,
        .addon-card {
            margin: 0 auto 1.5rem auto;
            max-width: 100%;
        }
        
        .pricing-card .card-header,
        .enterprise-card .card-header,
        .addon-card .card-header {
            padding: 1.5rem 1rem 0 1rem !important;
        }
        
        .pricing-card .card-body,
        .enterprise-card .card-body,
        .addon-card .card-body {
            padding: 1rem !important;
        }
        
        .pricing-icon,
        .pricing-icon-enhanced {
            width: 70px !important;
            height: 70px !important;
        }
        
        .pricing-icon i,
        .pricing-icon-enhanced i {
            font-size: 1.5rem !important;
        }
        
        .pricing-card h3,
        .enterprise-card h3,
        .addon-card h3 {
            font-size: 1.15rem !important;
        }
        
        .price-tag .display-4,
        .price-tag .display-5 {
            font-size: 1.5rem !important;
        }
        
        .price-tag p {
            font-size: 0.85rem !important;
        }
        
        .value-highlight {
            padding: 8px 12px;
            margin: 6px 0;
        }
        
        .value-highlight small {
            font-size: 0.75rem !important;
        }
        
        /* Feature List Mobile */
        .feature-list-enhanced {
            padding: 0.875rem !important;
            margin-bottom: 1rem !important;
        }
        
        .feature-list-enhanced li {
            margin-bottom: 0.5rem !important;
        }
        
        .feature-list-enhanced span {
            font-size: 0.85rem !important;
        }
        
        .feature-icon-small {
            width: 26px !important;
            height: 26px !important;
            min-width: 26px !important;
            padding: 4px !important;
            margin-right: 8px !important;
        }
        
        .feature-icon-small i {
            font-size: 0.7rem !important;
        }
        
        /* Buttons Mobile */
        .btn-lg {
            padding: 0.65rem 1.25rem !important;
            font-size: 0.9rem !important;
        }
        
        .btn-enhanced {
            padding: 0.75rem 1.5rem !important;
        }
        
        /* Section Headers Mobile */
        .section-header {
            padding-bottom: 1.5rem;
        }
        
        .section-header h2 {
            font-size: 1.5rem !important;
        }
        
        .section-header p {
            font-size: 0.9rem !important;
            padding: 0 0.5rem;
        }
        
        .section-header::after {
            width: 60px;
            height: 3px;
        }
        
        /* Popular Badge Mobile */
        .popular-badge {
            font-size: 0.7rem !important;
            padding: 0.35rem 0.75rem !important;
        }
        
        /* Trust Indicators Mobile */
        .hero-section .bg-success.bg-opacity-10 {
            width: 50px !important;
            height: 50px !important;
            padding: 0.5rem !important;
        }
        
        .hero-section .bg-success.bg-opacity-10 i {
            font-size: 1.25rem !important;
        }
        
        .hero-section small.text-muted {
            font-size: 0.75rem !important;
        }
        
        /* How It Works Mobile */
        .pricing-step .feature-icon {
            width: 50px !important;
            height: 50px !important;
        }
        
        .pricing-step .feature-icon i {
            font-size: 1.5rem !important;
        }
        
        .pricing-step h5 {
            font-size: 1rem !important;
        }
        
        .pricing-step p {
            font-size: 0.8rem !important;
        }
        
        .pricing-step::after {
            display: none;
        }
        
        /* Stats Section Mobile */
        .container.mt-6 .h2 {
            font-size: 1.5rem !important;
        }
        
        .container.mt-6 p {
            font-size: 0.8rem !important;
        }
        
        /* Spacing Adjustments */
        .py-7 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }
        
        .py-5 {
            padding-top: 2rem !important;
            padding-bottom: 2rem !important;
        }
        
        .mb-5 {
            margin-bottom: 2rem !important;
        }
        
        .mb-6 {
            margin-bottom: 2.5rem !important;
        }
        
        .mt-6 {
            margin-top: 2.5rem !important;
        }
        
        /* Container padding on mobile */
        .container-fluid {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }
        
        .container {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }
        
        /* Row gap adjustments */
        .row.g-4 {
            --bs-gutter-x: 1rem;
            --bs-gutter-y: 1rem;
        }
    }
    
    /* Extra small devices (max-width: 575px) */
    @media (max-width: 575.98px) {
        .hero-section h1 {
            font-size: 1.6rem !important;
        }
        
        .hero-section .price-highlight {
            font-size: 1.6rem !important;
        }
        
        .pricing-toggle {
            max-width: 100%;
            border-radius: 12px;
        }
        
        .pricing-toggle label {
            border-radius: 8px;
        }
        
        .pricing-card,
        .enterprise-card,
        .addon-card {
            border-radius: 1rem !important;
        }
        
        .feature-list-enhanced {
            border-radius: 0.75rem !important;
        }
        
        .btn-lg {
            width: 100%;
        }
        
        /* CTA buttons stack vertically */
        .d-flex.flex-sm-row {
            flex-direction: column !important;
        }
        
        .d-flex.flex-sm-row .btn {
            width: 100%;
            margin-bottom: 0.75rem;
        }
        
        .d-flex.flex-sm-row .btn:last-child {
            margin-bottom: 0;
        }
    }
</style>

<!-- Hero Section: Professional Value Proposition -->
<section class="hero-section position-relative overflow-hidden" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); padding: 4rem 0 5rem 0;">
    <!-- Subtle decorative accent -->
    <div class="position-absolute top-0 end-0 d-none d-lg-block" style="opacity: 0.05; width: 300px; height: 300px; background: radial-gradient(circle, #198754 0%, transparent 70%); border-radius: 50%;"></div>
    
    <div class="container position-relative">
        <div class="row align-items-center min-vh-50">
            <div class="col-lg-10 col-xl-8 mx-auto text-center">
                <!-- Badge -->
                <div class="mb-4" data-aos="fade-up">
                    <span class="badge-enhanced fs-6 px-4 py-2">
                        <i class="bi bi-star-fill me-2"></i>TRANSPARENT PRICING
                    </span>
                </div>
                
                <!-- Main Headline -->
                <h1 class="display-2 fw-bold mb-4 text-dark" data-aos="fade-up" data-aos-delay="100" style="line-height: 1.2;">
                    Choose Your Perfect
                    <span class="price-highlight d-block">Business Plan</span>
                </h1>
                
                <!-- Subheadline -->
                <p class="lead fs-4 text-muted mb-5 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-delay="200">
                    Start free and scale as you grow. No hidden fees, no surprises - just transparent pricing that works for your business.
                </p>
                
                <!-- CTA Buttons -->
                <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 mb-5" data-aos="fade-up" data-aos-delay="300">
                    <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=cta&utm_campaign=salesq&plan=free" class="btn btn-enhanced btn-lg px-5 py-3 rounded-pill fw-bold text-white">
                        <i class="bi bi-rocket-takeoff me-2"></i> Start Free Today
                    </a>
                    <a href="https://appnomu.com/landing/contact" class="btn btn-outline-success btn-lg px-5 py-3 rounded-pill fw-bold">
                        <i class="bi bi-telephone me-2"></i> Talk to Sales
                    </a>
                </div>
                
                <!-- Trust Indicators -->
                <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                        <div class="d-flex flex-column align-items-center">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2" style="width: 60px; height: 60px;">
                                <i class="bi bi-shield-check text-success fs-4"></i>
                            </div>
                            <small class="text-muted fw-semibold">No Hidden Fees</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                        <div class="d-flex flex-column align-items-center">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2" style="width: 60px; height: 60px;">
                                <i class="bi bi-clock text-success fs-4"></i>
                            </div>
                            <small class="text-muted fw-semibold">Setup in Minutes</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                        <div class="d-flex flex-column align-items-center">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2" style="width: 60px; height: 60px;">
                                <i class="bi bi-headset text-success fs-4"></i>
                            </div>
                            <small class="text-muted fw-semibold">24/7 Support</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="d-flex flex-column align-items-center">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 mb-2" style="width: 60px; height: 60px;">
                                <i class="bi bi-arrow-up-right text-success fs-4"></i>
                            </div>
                            <small class="text-muted fw-semibold">Scale Anytime</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section: Clear Steps -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-success-soft text-success mb-3 px-3 py-2 rounded-pill">HOW IT WORKS</span>
            <h2 class="display-5 fw-bold">Simple Wallet System</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Because we value your time, we've made our pricing system incredibly easy to use</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 rounded-4 shadow-sm mb-5">
                    <div class="card-body p-4">
                        <div class="row g-4">
                            <div class="col-md-4 text-center pricing-step">
                                <div class="feature-icon bg-success-soft mx-auto">
                                    <i class="bi bi-wallet2 text-success fs-1"></i>
                                </div>
                                <h5 class="mb-2">1. Add Funds</h5>
                                <p class="text-muted small mb-0">Top up your wallet using Card Payment, Mobile Money, PayPal, Bank Transfers, Airtel Pay, or Binance</p>
                            </div>
                            <div class="col-md-4 text-center pricing-step">
                                <div class="feature-icon bg-success-soft mx-auto">
                                    <i class="bi bi-send text-success fs-1"></i>
                                </div>
                                <h5 class="mb-2">2. Use Services</h5>
                                <p class="text-muted small mb-0">Send SMS, emails, or use any other features as needed</p>
                            </div>
                            <div class="col-md-4 text-center pricing-step">
                                <div class="feature-icon bg-success-soft mx-auto">
                                    <i class="bi bi-cash-coin text-success fs-1"></i>
                                </div>
                                <h5 class="mb-2">3. Pay As You Go</h5>
                                <p class="text-muted small mb-0">Funds are automatically deducted based on your usage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Pricing Plans Section -->
<section class="py-7 bg-light position-relative pricing-section">
    <!-- Smoke Effect Elements for Pricing Cards Section -->
    <div class="smoke-container">
        <div class="smoke smoke-5"></div>
        <div class="smoke smoke-6"></div>
        <div class="smoke smoke-7"></div>
        <div class="smoke smoke-8"></div>
    </div>
    <div class="container">
        <div class="text-center mb-5 section-header">
            <span class="badge-enhanced mb-3">CHOOSE YOUR PLAN</span>
            <h2 class="display-4 fw-bold mb-3">Simple, Transparent Pricing</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Start free and upgrade when you're ready. All plans include access to our wallet system for pay-as-you-go services.</p>
            
            <!-- Pricing Toggle -->
            <div class="pricing-toggle mt-4 mb-4">
                <input type="radio" id="monthly" name="pricing" value="monthly" checked>
                <label for="monthly">Monthly</label>
                <input type="radio" id="annual" name="pricing" value="annual">
                <label for="annual">
                    Annual
                    <span class="save-badge ms-2">SAVE 2 MONTHS</span>
                </label>
            </div>
        </div>
        
        <!-- Main Plans -->
        <div class="container-fluid px-4">
            <div class="row g-4 justify-content-center mb-6" style="max-width: 1400px; margin: 0 auto;">
            <!-- Free Plan -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="card pricing-card h-100 border-0 rounded-4 shadow-lg position-relative">
                    <div class="card-header bg-transparent border-0 text-center pt-5 pb-0">
                        <div class="pricing-icon-wrapper mb-4">
                            <div class="pricing-icon pricing-icon-enhanced rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                <i class="bi bi-gift text-white fs-1"></i>
                            </div>
                        </div>
                        <h3 class="h4 fw-bold mb-3">
                            <span class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-gift text-success me-2"></i>
                                Free Plan
                            </span>
                        </h3>
                        <div class="price-tag text-center mb-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <h4 class="display-5 price-highlight mb-0">Free</h4>
                            </div>
                            <p class="text-muted mt-2 fs-6">Perfect for testing & small businesses</p>
                            <div class="mt-2">
                                <small class="text-warning fw-bold">⚡ Upgrade to unlock unlimited potential</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column px-4">
                        <div class="feature-list feature-list-enhanced rounded-4 p-4 mb-4">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6"><strong>500 products</strong> per month</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6"><strong>500 customers</strong> per month</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6"><strong>50 sales receipts</strong> per month</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6">Customer support</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6">Earnings module</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6">Basic earnings reports</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-danger bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-x-circle-fill text-danger fs-6"></i>
                                    </div>
                                    <span class="fs-6 text-muted">Sales & Expense Reports</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-danger bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-x-circle-fill text-danger fs-6"></i>
                                    </div>
                                    <span class="fs-6 text-muted">Email Marketing</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-danger bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-x-circle-fill text-danger fs-6"></i>
                                    </div>
                                    <span class="fs-6 text-muted">SMS Included</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-danger bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-x-circle-fill text-danger fs-6"></i>
                                    </div>
                                    <span class="fs-6 text-muted">P&L Reports</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="feature-icon-small bg-danger bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-x-circle-fill text-danger fs-6"></i>
                                    </div>
                                    <span class="fs-6 text-muted">AI Business Insights</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=cta&utm_campaign=salesq&plan=free" class="btn btn-outline-success btn-lg w-100 rounded-pill py-3 fw-bold">
                                <i class="bi bi-play-circle me-2"></i> Get Started Free
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Premium Plan -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
                <div class="card pricing-card premium-card h-100 border-0 rounded-4 shadow-lg position-relative">
                    <div class="card-header bg-transparent border-0 text-center pt-5 pb-0">
                        <div class="pricing-icon-wrapper mb-4">
                            <div class="pricing-icon pricing-icon-enhanced rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                <i class="bi bi-gem text-white fs-1"></i>
                            </div>
                        </div>
                        <h3 class="h4 fw-bold mb-3">
                            <span class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-gem text-primary me-2"></i>
                                Premium Plan
                            </span>
                        </h3>
                        <div class="price-tag text-center mb-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <h4 class="display-5 price-highlight mb-0" id="premium-price">$15</h4>
                                <span class="text-muted ms-2 fs-6" id="premium-period">/month</span>
                            </div>
                            <p class="text-muted mt-2 fs-6" id="premium-description">Ideal for growing businesses</p>
                            <div class="value-highlight mt-2">
                                <small class="text-success fw-bold">💎 Includes $45+ value • 450 SMS included</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column px-4">
                        <div class="feature-list feature-list-enhanced rounded-4 p-4 mb-4">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6"><strong>10,000 products</strong> per month</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6"><strong>10,000 customers</strong> per month</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6"><strong>1,000 sales receipts</strong> per month</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6">Priority customer support</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6">All earnings reports</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6">Sales & Expense Reports</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6">Basic Email Marketing</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6"><strong>450 SMS per month</strong> included</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-danger bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-x-circle-fill text-danger fs-6"></i>
                                    </div>
                                    <span class="fs-6 text-muted">P&L Reports</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="feature-icon-small bg-danger bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-x-circle-fill text-danger fs-6"></i>
                                    </div>
                                    <span class="fs-6 text-muted">AI Business Insights</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=cta&utm_campaign=salesq&plan=premium" class="btn btn-outline-primary btn-lg w-100 rounded-pill py-3 fw-bold">
                                <i class="bi bi-gem me-2"></i> Upgrade to Premium
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Enterprise Plan -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card enterprise-card h-100 border-0 rounded-4 shadow-xl position-relative">
                    <!-- Popular Badge -->
                    <div class="position-absolute top-0 start-50 translate-middle" style="z-index: 10;">
                        <span class="popular-badge px-4 py-2 rounded-pill fs-6 fw-bold">⭐ Most Popular</span>
                    </div>
                    <div class="card-header bg-transparent border-0 text-center pt-6 pb-0">
                        <div class="pricing-icon-wrapper mb-4">
                            <div class="pricing-icon pricing-icon-enhanced rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 110px; height: 110px;">
                                <i class="bi bi-star-fill text-white fs-1"></i>
                            </div>
                        </div>
                        <h3 class="h4 fw-bold mb-3">
                            <span class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-star-fill text-warning me-2"></i>
                                Complete Business Suite
                            </span>
                        </h3>
                        <div class="price-tag text-center mb-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <h4 class="display-5 price-highlight mb-0" id="enterprise-price"><?= format_price('enterprise', 95000) ?></h4>
                                <span class="text-muted ms-2 fs-6" id="price-period">/month</span>
                            </div>
                            <p class="text-muted mt-2 fs-6" id="price-description">Professional-grade business management</p>
                            <div class="value-highlight mt-2">
                                <small class="text-success fw-bold">💰 Less than $1 per day • Includes $30+ SMS value</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column px-4">
                        <div class="feature-list feature-list-enhanced rounded-4 p-4 mb-4">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6"><strong>Unlimited products</strong></span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6"><strong>Unlimited customers</strong></span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6"><strong>Unlimited sales</strong></span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6">VIP customer support</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6">All earnings reports</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6">Sales & Expense Reports</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6">Advanced Email Marketing</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6"><strong>1000 SMS per month</strong> included</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6">P&L Reports</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="feature-icon-small bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-check-circle-fill text-success fs-6"></i>
                                    </div>
                                    <span class="fs-6">AI Business Insights</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=cta&utm_campaign=salesq&plan=enterprise" class="btn btn-enhanced btn-lg w-100 rounded-pill py-3 fw-bold text-white">
                                <i class="bi bi-rocket-takeoff me-2"></i> Get Enterprise
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
        <!-- Customer Success Stats -->
        <div class="container mt-6">
            <div class="row text-center">
                <div class="col-md-3 mb-3">
                    <div class="h2 fw-bold text-success">5,000+</div>
                    <p class="text-muted mb-0">Happy Businesses</p>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="h2 fw-bold text-success">40%</div>
                    <p class="text-muted mb-0">Avg Sales Increase</p>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="h2 fw-bold text-success">24/7</div>
                    <p class="text-muted mb-0">Customer Support</p>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="h2 fw-bold text-success">99.9%</div>
                    <p class="text-muted mb-0">Uptime</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add-on Services Section -->
<section class="py-7 bg-white position-relative">
    <div class="container-fluid px-4">
        <div class="text-center mb-5 section-header">
            <span class="badge-enhanced mb-3">ADD-ON SERVICES</span>
            <h2 class="display-4 fw-bold mb-3">Enhance Your Experience</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Optional services to supercharge your business operations</p>
        </div>
        
        <div class="row g-4 justify-content-center" style="max-width: 1200px; margin: 0 auto;">
            <!-- SMTP Setup -->
            <div class="col-lg-5 col-md-6" data-aos="fade-up">
                <div class="card addon-card h-100 border-0 rounded-4 shadow-lg">
                    <div class="card-header bg-transparent border-0 text-center pt-5 pb-0">
                        <div class="pricing-icon-wrapper mb-4">
                            <div class="pricing-icon pricing-icon-enhanced rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                <i class="bi bi-envelope-gear text-white fs-1"></i>
                            </div>
                        </div>
                        <h3 class="h3 fw-bold mb-3">SMTP Email Setup</h3>
                    </div>
                    <div class="card-body d-flex flex-column px-4">
                        <div class="price-tag text-center mb-4">
                            <span class="badge-enhanced mb-3">ONE-TIME SETUP</span>
                            <div class="d-flex align-items-center justify-content-center">
                                <h4 class="display-4 price-highlight mb-0"><?= format_price('smtp_setup', 56000) ?></h4>
                            </div>
                            <p class="text-muted mt-2 fs-5">Professional email marketing setup</p>
                        </div>
                        <div class="feature-list feature-list-enhanced rounded-4 p-4 mb-4">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">Complete SMTP configuration</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">Professional email templates</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">Delivery tracking & analytics</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">Required for email marketing</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="https://appnomu.com/landing/contact" class="btn btn-outline-success btn-lg w-100 rounded-pill py-3 fw-bold">
                                <i class="bi bi-gear me-2"></i> Setup SMTP
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- AI Email Composer -->
            <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card addon-card h-100 border-0 rounded-4 shadow-lg">
                    <div class="card-header bg-transparent border-0 text-center pt-5 pb-0">
                        <div class="pricing-icon-wrapper mb-4">
                            <div class="pricing-icon pricing-icon-enhanced rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                <i class="bi bi-robot text-white fs-1"></i>
                            </div>
                        </div>
                        <h3 class="h3 fw-bold mb-3">🤖 AI Email Composer</h3>
                    </div>
                    <div class="card-body d-flex flex-column px-4">
                        <div class="price-tag text-center mb-4">
                            <span class="badge-enhanced mb-3">MONTHLY SUBSCRIPTION</span>
                            <div class="d-flex align-items-center justify-content-center">
                                <h4 class="display-4 price-highlight mb-0"><?= format_price('ai_email', 25000) ?></h4>
                                <span class="text-muted ms-2 fs-5">/month</span>
                            </div>
                            <p class="text-muted mt-2 fs-5">AI-powered email creation</p>
                        </div>
                        <div class="feature-list feature-list-enhanced rounded-4 p-4 mb-4">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">AI-generated email content</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">Personalized messaging</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">Multiple language support</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">Save time on email creation</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="https://appnomu.com/landing/contact" class="btn btn-outline-success btn-lg w-100 rounded-pill py-3 fw-bold">
                                <i class="bi bi-magic me-2"></i> Get AI Composer
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pay-As-You-Go Services Section -->
<section class="py-7 payg-section position-relative pricing-section">
    <!-- Smoke Effect Elements for Pay-as-you-go Section -->
    <div class="smoke-container">
        <div class="smoke smoke-1" style="animation-delay: 1.5s;"></div>
        <div class="smoke smoke-2" style="animation-delay: 3.5s;"></div>
        <div class="smoke smoke-3" style="animation-delay: 5.5s;"></div>
        <div class="smoke smoke-4" style="animation-delay: 7.5s;"></div>
    </div>
    <div class="container position-relative">
        <div class="text-center mb-5 section-header">
            <span class="badge-enhanced mb-3">PAY-AS-YOU-GO</span>
            <h2 class="display-4 fw-bold mb-3">Additional Services</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Use our wallet system to pay only for what you need</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- SMS Messaging -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="card pricing-card h-100 border-0 rounded-4 shadow-lg">
                    <div class="card-header bg-transparent border-0 text-center pt-5 pb-0">
                        <div class="pricing-icon-wrapper mb-4">
                            <div class="pricing-icon pricing-icon-enhanced rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                <i class="bi bi-chat-dots text-white fs-1"></i>
                            </div>
                        </div>
                        <h3 class="h3 fw-bold mb-3">📱 Bulk SMS</h3>
                    </div>
                    <div class="card-body d-flex flex-column px-4">
                        <div class="price-tag text-center mb-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <h4 class="display-4 price-highlight mb-0"><?= format_price('sms_rate', 30) ?></h4>
                                <span class="text-muted ms-2 fs-5">/SMS</span>
                            </div>
                            <p class="text-muted mt-2 fs-6">Per 160 characters sent</p>
                        </div>
                        <div class="feature-list feature-list-enhanced rounded-4 p-4 mb-4">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">Direct deduction from wallet</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">No minimum quantity required</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">Delivery reports included</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Airtime Services -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card pricing-card h-100 border-0 rounded-4 shadow-lg">
                    <div class="card-header bg-transparent border-0 text-center pt-5 pb-0">
                        <div class="pricing-icon-wrapper mb-4">
                            <div class="pricing-icon pricing-icon-enhanced rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                <i class="bi bi-phone text-white fs-1"></i>
                            </div>
                        </div>
                        <h3 class="h3 fw-bold mb-3">📞 Airtime Services</h3>
                    </div>
                    <div class="card-body d-flex flex-column px-4">
                        <div class="price-tag text-center mb-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <h4 class="display-4 price-highlight mb-0">Variable</h4>
                            </div>
                            <p class="text-muted mt-2 fs-6">Based on amount purchased</p>
                        </div>
                        <div class="feature-list feature-list-enhanced rounded-4 p-4 mb-4">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">All major networks supported</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">Instant delivery</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">Competitive rates</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sender ID -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card pricing-card h-100 border-0 rounded-4 shadow-lg">
                    <div class="card-header bg-transparent border-0 text-center pt-5 pb-0">
                        <div class="pricing-icon-wrapper mb-4">
                            <div class="pricing-icon pricing-icon-enhanced rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                                <i class="bi bi-person-badge text-white fs-1"></i>
                            </div>
                        </div>
                        <h3 class="h3 fw-bold mb-3">🏷️ Sender ID</h3>
                    </div>
                    <div class="card-body d-flex flex-column px-4">
                        <div class="price-tag text-center mb-4">
                            <div class="pricing-options d-flex justify-content-center gap-3 mt-3">
                                <div class="text-center p-3 border rounded-4 bg-white shadow-sm">
                                    <h6 class="text-muted mb-1 fw-bold">MTN</h6>
                                    <h5 class="price-highlight mb-0"><?= format_price('sender_id_mtn', 250000) ?></h5>
                                    <small class="text-muted">Monthly</small>
                                </div>
                                <div class="text-center p-3 border rounded-4 bg-white shadow-sm">
                                    <h6 class="text-muted mb-1 fw-bold">Airtel</h6>
                                    <h5 class="price-highlight mb-0"><?= format_price('sender_id_airtel', 250000) ?></h5>
                                    <small class="text-muted">One-time</small>
                                </div>
                            </div>
                            <p class="text-muted mt-3 fs-6">+ <?= format_price('setup_fee', 400000) ?> setup fee</p>
                        </div>
                        <div class="feature-list feature-list-enhanced rounded-4 p-4 mb-4">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">Custom business name</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">Brand recognition</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                                    <span class="fs-6">Higher response rates</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-7 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-success-soft text-success mb-3 px-3 py-2 rounded-pill">WHY CHOOSE US</span>
            <h2 class="display-5 fw-bold">Benefits Made For You</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Because we value your business, we've designed our system with your needs in mind</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-md-4" data-aos="fade-up">
                <div class="card h-100 border-0 rounded-4 shadow-sm hover-shadow-lg transition-300">
                    <div class="card-body p-4 text-center">
                        <div class="feature-icon bg-success-soft mx-auto">
                            <i class="bi bi-wallet2 text-success fs-1"></i>
                        </div>
                        <h4 class="mb-3 mt-3">Easy Top-ups</h4>
                        <p class="text-muted mb-0">Add funds to your wallet using mobile money, bank transfer, or other local payment methods.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 rounded-4 shadow-sm hover-shadow-lg transition-300">
                    <div class="card-body p-4 text-center">
                        <div class="feature-icon bg-success-soft mx-auto">
                            <i class="bi bi-shield-check text-success fs-1"></i>
                        </div>
                        <h4 class="mb-3 mt-3">Secure Payments</h4>
                        <p class="text-muted mb-0">We only store transaction results, not your payment details. All payment processing is handled securely.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 rounded-4 shadow-sm hover-shadow-lg transition-300">
                    <div class="card-body p-4 text-center">
                        <div class="feature-icon bg-success-soft mx-auto">
                            <i class="bi bi-graph-up-arrow text-success fs-1"></i>
                        </div>
                        <h4 class="mb-3 mt-3">Real-time Monitoring</h4>
                        <p class="text-muted mb-0">Monitor your wallet balance and service usage in real-time from your dashboard.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Payment Methods Section -->
        <div class="row mt-5">
            <div class="col-lg-6 mx-auto">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="wallet-icon mb-4">
                            <div class="bg-warning rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="bi bi-wallet2 text-dark fs-1"></i>
                            </div>
                        </div>
                        <h3 class="mb-4">Accepted Payment Methods</h3>
                        
                        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                            <div class="payment-icon bg-white p-3 rounded-3 shadow-sm" title="Visa">
                                <i class="bi bi-credit-card text-success fs-2"></i>
                            </div>
                            <div class="payment-icon bg-white p-3 rounded-3 shadow-sm" title="Mastercard">
                                <i class="bi bi-credit-card-2-front text-danger fs-2"></i>
                            </div>
                            <div class="payment-icon bg-white p-3 rounded-3 shadow-sm" title="PayPal">
                                <i class="bi bi-paypal text-primary fs-2"></i>
                            </div>
                            <div class="payment-icon bg-white p-3 rounded-3 shadow-sm" title="Binance">
                                <i class="bi bi-currency-bitcoin text-warning fs-2"></i>
                            </div>
                            <div class="payment-icon bg-white p-3 rounded-3 shadow-sm" title="Mobile Money">
                                <i class="bi bi-phone text-success fs-2"></i>
                            </div>
                            <div class="payment-icon bg-white p-3 rounded-3 shadow-sm" title="Bank Transfer">
                                <i class="bi bi-bank text-dark fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</section>

<!-- FAQ Section -->
<section class="py-7" style="background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 50%, #f8f9fa 100%);">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="badge bg-success bg-opacity-10 text-success mb-3 px-3 py-2 rounded-pill fw-semibold">FREQUENTLY ASKED</span>
                <h2 class="display-5 fw-bold mb-3">Common Questions</h2>
                <p class="lead text-muted">Everything you need to know about our pricing and features</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="pricingFAQ">
                    <div class="accordion-item border-0 rounded-4 mb-3 shadow-sm bg-white">
                        <h2 class="accordion-header" id="faqOne">
                            <button class="accordion-button rounded-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border: none; box-shadow: none;">
                                <i class="bi bi-patch-question text-success me-3 fs-5"></i>
                                What's the difference between Free and Enterprise plans?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#pricingFAQ">
                            <div class="accordion-body p-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="text-success fw-bold mb-2"><i class="bi bi-gift me-2"></i>Free Plan</h6>
                                        <ul class="list-unstyled mb-3">
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>500 products/month</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>500 customers/month</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>50 sales receipts/month</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Basic earnings reports</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Customer support</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-primary fw-bold mb-2"><i class="bi bi-gem me-2"></i>Premium Plan ($15/month)</h6>
                                        <ul class="list-unstyled mb-2">
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>10,000 products/customers</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>1,000 sales receipts</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Sales & Expense Reports</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>450 SMS included</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Email Marketing</li>
                                        </ul>
                                        <h6 class="text-success fw-bold mb-2"><i class="bi bi-star me-2"></i>Enterprise Plan ($25/month)</h6>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Everything in Premium +</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Unlimited everything</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>AI Business Insights</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>1000 SMS included</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Advanced Analytics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 rounded-4 mb-3 shadow-sm bg-white">
                        <h2 class="accordion-header" id="faqTwo">
                            <button class="accordion-button collapsed rounded-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border: none; box-shadow: none;">
                                <i class="bi bi-wallet2 text-success me-3 fs-5"></i>
                                How does the wallet system work?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#pricingFAQ">
                            <div class="accordion-body p-4">
                                <p class="mb-3">Both Free and Enterprise plans include access to our wallet system for pay-as-you-go services:</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="text-primary fw-bold mb-2"><i class="bi bi-credit-card me-2"></i>How to Add Funds</h6>
                                        <ul class="list-unstyled mb-3">
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Mobile Money</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Bank Transfer</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Credit/Debit Cards</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-primary fw-bold mb-2"><i class="bi bi-cart me-2"></i>What You Can Buy</h6>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Extra SMS (<?= format_price('sms_rate', 30) ?>/SMS)</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Airtime Services</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Sender ID Setup</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="alert alert-info border-0 mt-3" style="background: linear-gradient(135deg, #e3f2fd 0%, #f8f9fa 100%);">
                                    <i class="bi bi-info-circle text-primary me-2"></i>
                                    <small><strong>Note:</strong> Plan subscriptions and wallet services are charged separately.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 rounded-4 mb-3 shadow-sm bg-white">
                        <h2 class="accordion-header" id="faqThree">
                            <button class="accordion-button collapsed rounded-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border: none; box-shadow: none;">
                                <i class="bi bi-plus-circle text-success me-3 fs-5"></i>
                                What are the add-on services?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#pricingFAQ">
                            <div class="accordion-body p-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="border rounded-3 p-3 mb-3" style="background: linear-gradient(135deg, #f0fdf4 0%, #ffffff 100%);">
                                            <h6 class="text-success fw-bold mb-2"><i class="bi bi-envelope me-2"></i>SMTP Email Setup</h6>
                                            <p class="mb-2"><strong><?= format_price('smtp_setup', 56000) ?></strong> one-time payment</p>
                                            <small class="text-muted">Professional email marketing setup required for email campaigns</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="border rounded-3 p-3 mb-3" style="background: linear-gradient(135deg, #f0f9ff 0%, #ffffff 100%);">
                                            <h6 class="text-primary fw-bold mb-2"><i class="bi bi-robot me-2"></i>AI Email Composer</h6>
                                            <p class="mb-2"><strong><?= format_price('ai_email', 25000) ?></strong>/month</p>
                                            <small class="text-muted">AI-powered email content generation for marketing campaigns</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 rounded-4 mb-3 shadow-sm bg-white">
                        <h2 class="accordion-header" id="faqFour">
                            <button class="accordion-button collapsed rounded-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border: none; box-shadow: none;">
                                <i class="bi bi-credit-card-2-front text-success me-3 fs-5"></i>
                                What payment methods do you accept?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour" data-bs-parent="#pricingFAQ">
                            <div class="accordion-body p-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="text-primary fw-bold mb-2"><i class="bi bi-globe me-2"></i>International</h6>
                                        <ul class="list-unstyled mb-3">
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Visa/Mastercard</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>PayPal</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Binance</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-primary fw-bold mb-2"><i class="bi bi-geo-alt me-2"></i>Local (Uganda)</h6>
                                        <ul class="list-unstyled mb-3">
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>MTN Mobile Money</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Airtel Money</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Bank Transfers</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="alert alert-success border-0" style="background: linear-gradient(135deg, #d1e7dd 0%, #f8f9fa 100%);">
                                    <i class="bi bi-shield-check text-success me-2"></i>
                                    <small><strong>Security:</strong> We only store transaction status, never your payment details.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 rounded-4 mb-3 shadow-sm bg-white">
                        <h2 class="accordion-header" id="faqFive">
                            <button class="accordion-button collapsed rounded-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); border: none; box-shadow: none;">
                                <i class="bi bi-arrow-up-circle text-success me-3 fs-5"></i>
                                Can I upgrade or downgrade anytime?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="faqFive" data-bs-parent="#pricingFAQ">
                            <div class="accordion-body p-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="text-success fw-bold mb-2"><i class="bi bi-arrow-up me-2"></i>Upgrading</h6>
                                        <ul class="list-unstyled mb-3">
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Instant upgrade available</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>All data preserved</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Wallet balance intact</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-primary fw-bold mb-2"><i class="bi bi-arrow-down me-2"></i>Downgrading</h6>
                                        <ul class="list-unstyled mb-3">
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Available at billing cycle end</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>Data within limits preserved</li>
                                            <li class="mb-1"><i class="bi bi-check text-success me-2"></i>No cancellation fees</li>
                                        </ul>
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

<!-- Final CTA Section: Clean & Professional -->
<section class="position-relative" style="background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%); padding: 4rem 0;">
    <!-- Subtle Decorative Elements -->
    <div class="position-absolute top-0 end-0 opacity-3" style="width: 200px; height: 200px; background: radial-gradient(circle, #dee2e6 0%, transparent 70%); transform: translate(30%, -30%);">
    </div>
    <div class="position-absolute bottom-0 start-0 opacity-3" style="width: 150px; height: 150px; background: radial-gradient(circle, #adb5bd 0%, transparent 70%); transform: translate(-30%, 30%);">
    </div>
    
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <!-- Main Headline -->
                <h2 class="display-4 fw-bold mb-3">Ready to Transform Your Business?</h2>
                
                <!-- Subheadline -->
                <p class="lead text-muted mb-4" data-aos="fade-up" data-aos-delay="100">
                    Join 1000+ businesses using AppNomu SalesQ to increase sales by 40% on average.
                </p>
                
                <!-- Urgency Element -->
                <div class="alert alert-warning border-0 rounded-4 mb-4" style="background: linear-gradient(135deg, #fff3cd 0%, #fef7e0 100%);" data-aos="fade-up" data-aos-delay="150">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="bi bi-clock text-warning me-2 fs-5"></i>
                        <strong>Limited Time: Early Adopter Pricing - Lock in $25/month forever!</strong>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=cta&utm_campaign=salesq&plan=enterprise" class="btn btn-enhanced btn-lg px-5 py-3 rounded-pill fw-bold text-white">
                        <i class="bi bi-rocket-takeoff me-2"></i> Start 30-Day Free Trial
                    </a>
                    <a href="https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=cta&utm_campaign=salesq&plan=free" class="btn btn-outline-success btn-lg px-5 py-3 rounded-pill fw-bold">
                        <i class="bi bi-play-circle me-2"></i> Try Free Version
                    </a>
                </div>
                
                <!-- Simple Trust Indicators -->
                <div class="row justify-content-center text-center mt-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="bi bi-shield-check text-success me-2 fs-5"></i>
                            <small class="text-muted fw-semibold">30-Day Money Back</small>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="bi bi-clock text-success me-2 fs-5"></i>
                            <small class="text-muted fw-semibold">No Setup Fees</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="bi bi-headset text-success me-2 fs-5"></i>
                            <small class="text-muted fw-semibold">24/7 Support</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AOS Animation Initialization Script with Fallback -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
        
        // Pricing toggle functionality
        const monthlyRadio = document.getElementById('monthly');
        const annualRadio = document.getElementById('annual');
        const premiumPrice = document.getElementById('premium-price');
        const premiumPeriod = document.getElementById('premium-period');
        const premiumDescription = document.getElementById('premium-description');
        const enterprisePrice = document.getElementById('enterprise-price');
        const pricePeriod = document.getElementById('price-period');
        const priceDescription = document.getElementById('price-description');
        
        function updatePricing() {
            if (annualRadio && annualRadio.checked) {
                // Annual pricing (2 months free)
                if (premiumPrice) premiumPrice.textContent = '$150';
                if (premiumPeriod) premiumPeriod.textContent = '/year';
                if (premiumDescription) premiumDescription.textContent = 'Save $30 annually • 2 months FREE!';
                
                if (enterprisePrice) enterprisePrice.textContent = '$250';
                if (pricePeriod) pricePeriod.textContent = '/year';
                if (priceDescription) priceDescription.textContent = 'Save $50 annually • 2 months FREE!';
            } else {
                // Monthly pricing
                if (premiumPrice) premiumPrice.textContent = '$15';
                if (premiumPeriod) premiumPeriod.textContent = '/month';
                if (premiumDescription) premiumDescription.textContent = 'Ideal for growing businesses';
                
                if (enterprisePrice) enterprisePrice.textContent = '$25';
                if (pricePeriod) pricePeriod.textContent = '/month';
                if (priceDescription) priceDescription.textContent = 'Professional-grade business management';
            }
        }
        
        if (monthlyRadio) monthlyRadio.addEventListener('change', updatePricing);
        if (annualRadio) annualRadio.addEventListener('change', updatePricing);
        
        // Only enable scroll effects on desktop (not mobile/tablet)
        const isMobile = window.innerWidth <= 991;
        
        if (!isMobile) {
            // Enhance smoke effect with scroll interaction - DESKTOP ONLY
            const smokeElements = document.querySelectorAll('.smoke');
            
            window.addEventListener('scroll', function() {
                const scrollPosition = window.scrollY;
                
                // Adjust smoke position based on scroll
                smokeElements.forEach(function(smoke, index) {
                    // Create a subtle parallax effect
                    const speed = 0.05 + (index % 4) * 0.01;
                    const yOffset = scrollPosition * speed;
                    
                    // Apply transform with existing animation
                    smoke.style.transform = `scale(0.8) translateY(${-yOffset}px)`;
                });
            });
        }
        
        // On mobile, ensure all AOS elements are visible immediately
        if (isMobile) {
            const aosElements = document.querySelectorAll('[data-aos]');
            aosElements.forEach(function(element) {
                element.removeAttribute('data-aos');
                element.removeAttribute('data-aos-delay');
                element.style.opacity = '1';
                element.style.transform = 'none';
            });
            
            // Also hide smoke containers
            const smokeContainers = document.querySelectorAll('.smoke-container');
            smokeContainers.forEach(function(container) {
                container.style.display = 'none';
            });
        } else {
            // Fallback in case AOS fails to initialize - DESKTOP ONLY
            setTimeout(function() {
                const aosElements = document.querySelectorAll('[data-aos]');
                aosElements.forEach(function(element) {
                    if (element.classList.contains('aos-animate') === false) {
                        element.setAttribute('style', 'opacity: 1; transform: translateZ(0)');
                    }
                });
            }, 1000);
        }
    });
</script>

<?php
// Store the buffered content into $content variable
$content = ob_get_clean();

// Include the layout file which will use the $content variable
include 'includes/layout.php';
?>
