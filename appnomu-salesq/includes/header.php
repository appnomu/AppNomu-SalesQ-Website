<?php 
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Helper function to safely get translations
function getTrans($key, $default = '') {
    if (function_exists('__')) {
        $translation = __($key, [], $default);
        return is_array($translation) ? $default : $translation;
    }
    return $default ?: $key;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppNomu SalesQ</title>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17606368122"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-17606368122');
    </script>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Flag icons */
        .flag-icon {
            width: 20px;
            height: 15px;
            display: inline-block;
            background-size: cover;
            margin-right: 5px;
            vertical-align: middle;
        }
        .flag-icon.en { background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30"><clipPath id="a"><path d="M0 0v30h60V0z"/></clipPath><clipPath id="b"><path d="M30 15h30v15zv15H0zH0V0z"/></clipPath><g clip-path="url(#a)"><path d="M0 0v30h60V0z" fill="#012169"/><path d="M0 0l60 30m0-30L0 30" stroke="#fff" stroke-width="6"/><path d="M0 0l60 30m0-30L0 30" clip-path="url(#b)" stroke="#C8102E" stroke-width="4"/><path d="M30 0v30M0 15h60" stroke="#fff" stroke-width="10"/><path d="M30 0v30M0 15h60" stroke="#C8102E" stroke-width="6"/></g></svg>');
        }
        
        body {
            font-family: 'Figtree', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.5;
            padding-top: 70px; /* Space for fixed header */
        }
        
        /* Header styles */
        .header {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .header-container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 0.75rem;
        }
        
        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            gap: 6px;
        }
        
        .logo img {
            height: 36px;
            margin-right: 0;
            flex-shrink: 0;
        }
        
        .logo-text {
            color: #0d6efd;
            font-family: 'Figtree', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            white-space: nowrap;
            display: flex;
            align-items: center;
        }
        
        .logo-text span {
            color: #0d6efd;
        }
        
        .logo-text .divider {
            margin: 0 3px;
            color: #0d6efd;
        }
        
        .nav {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            align-items: center;
            flex-wrap: nowrap;
        }
        
        .nav-item {
            position: relative;
            margin: 0 0.5rem;
        }
        
        .nav-link {
            display: block;
            padding: 0.9rem 0.7rem;
            color: #333;
            text-decoration: none;
            transition: color 0.2s;
        }
        
        .nav-link:hover {
            color: #0d6efd;
        }
        
        .dropdown {
            position: relative;
        }
        
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            min-width: 200px;
            padding: 0.5rem 0;
            margin: 0.125rem 0 0;
            font-size: 0.9rem;
            color: #212529;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0,0,0,.15);
            border-radius: 0.25rem;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.175);
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.2s ease-in-out;
        }
        
        .dropdown.show .dropdown-menu {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }
        
        .dropdown-item {
            display: block;
            width: 100%;
            padding: 0.5rem 1.5rem;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
            text-decoration: none !important;
        }
        
        .dropdown-item:hover, .dropdown-item:focus {
            color: #16181b;
            background-color: #f8f9fa;
            text-decoration: none !important;
        }
        
        .dropdown-divider {
            height: 0;
            margin: 0.5rem 0;
            overflow: hidden;
            border-top: 1px solid #e9ecef;
        }
        
        .nav-item {
            position: relative;
            margin: 0 6px;
        }
        
        .nav-link {
            color: #333;
            text-decoration: none;
            padding: 0.45rem 0.75rem;
            display: flex;
            align-items: center;
            white-space: nowrap;
            font-size: 0.9rem;
            transition: color 0.2s;
        }
        
        .nav-link:hover {
            color: #0d6efd;
        }
        
        /* Dropdown styles */
        .dropdown {
            position: relative;
        }
        
        .dropdown-toggle::after {
            display: inline-block;
            margin-left: 4px;
            content: "\25BE";
            border: none;
            font-size: 0.9em;
            line-height: 1;
            color: #198754;
            transition: transform 0.2s;
        }
        
        .dropdown:hover .dropdown-toggle::after {
            transform: rotate(180deg);
        }
        
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            min-width: 280px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 4px;
            padding: 10px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
            z-index: 1001;
            border: 1px solid rgba(0,0,0,0.1);
        }
        
        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .dropdown-item {
            display: block;
            padding: 8px 20px;
            color: #333;
            text-decoration: none !important;
            transition: background 0.2s;
        }
        
        .dropdown-item:hover {
            background: #f8f9fa;
            text-decoration: none !important;
        }
        
        /* Mobile menu button */
        .menu-toggle {
            display: none;
            background: none;
            border: 1px solid #0d6efd;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        /* Reduce logo text impact on medium screens so nav has more space */
        @media (max-width: 1200px) {
            .logo-text {
                font-size: 0.9rem;
            }
            .logo-text span:first-child,
            .logo-text .divider {
                display: none;
            }
            /* Give more space to nav items on medium desktops */
            .nav-link {
                font-size: 0.85rem;
                padding: 0.4rem 0.65rem;
            }
            .nav-item {
                margin: 0 4px;
            }
            /* Hide country selector to avoid cutting off Get Started */
            .country-nav-item {
                display: none;
            }
        }
        
        @media (max-width: 992px) {
            .menu-toggle {
                display: block;
            }
            
            .nav {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                padding: 20px;
                box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            }
            
            .nav.show {
                display: flex;
            }
            
            .nav-item {
                margin: 5px 0;
            }
            
            .dropdown-menu {
                position: static;
                display: none;
                box-shadow: none;
                padding-left: 20px;
            }
            
            .dropdown.show .dropdown-menu {
                display: block;
                opacity: 1;
                visibility: visible;
                transform: none;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-container">
            <a href="<?= url('/') ?>" class="logo" style="margin-right: 0.8rem; text-decoration: none !important; display: flex; align-items: center;">
                <img src="https://appnomu.com/landing/assets/images/AppNomu%20SalesQ%20logo.png" alt="AppNomu SalesQ Logo">
                <span class="logo-text">
                    <span>AppNomu</span>
                    <span style="margin: 0 3px;">•</span>
                    <span>SalesQ</span>
                </span>
            </a>
            
            <button class="menu-toggle" id="menuToggle">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
            
            <ul class="nav" id="mainNav">
                <li class="nav-item">
                    <a href="<?= url('/pricing') ?>" class="nav-link"><?= getTrans('pricing', 'Pricing') ?></a>
                </li>
                <li class="nav-item">
                    <a href="<?= url('/affiliate') ?>" class="nav-link"><?= getTrans('affiliate', 'Affiliate') ?></a>
                </li>
                <li class="nav-item">
                    <a href="<?= url('/mobile-app') ?>" class="nav-link" style="color: #198754; display: inline-flex; align-items: center; gap: 0.3rem;">
                        <i class="bi bi-phone me-1"></i><?= getTrans('mobile_app', 'Mobile App') ?>
                        <span class="badge bg-success text-white" style="font-size: 0.65rem; padding: 0.15rem 0.4rem; border-radius: 999px; text-transform: uppercase; letter-spacing: 0.03em;">New</span>
                    </a>
                </li>
                
                <!-- Features Dropdown -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"><?= getTrans('features', 'Features') ?></a>
                    <div class="dropdown-menu">
                        <a href="<?= url('/features/sms') ?>" class="dropdown-item"><?= getTrans('features.sms.title', 'SMS') ?></a>
                        <a href="<?= url('/features/voice') ?>" class="dropdown-item"><i class="bi bi-telephone-fill me-2 text-success"></i><?= getTrans('features.voice.title', 'Voice Calls') ?></a>
                        <a href="<?= url('/features/airtime') ?>" class="dropdown-item"><?= getTrans('features.airtime', 'Airtime') ?></a>
                        <a href="<?= url('/features/crm') ?>" class="dropdown-item"><?= getTrans('features.crm.title', 'CRM') ?></a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= url('/features/serviceflow') ?>" class="dropdown-item"><i class="bi bi-gear-fill me-2 text-success"></i><?= getTrans('features.serviceflow', 'ServiceFlow') ?></a>
                        <a href="<?= url('/features/product-sales-management') ?>" class="dropdown-item"><?= getTrans('features.products', 'Product & Sales') ?></a>
                        <a href="<?= url('/features/salesq-ai') ?>" class="dropdown-item"><?= getTrans('features.ai', 'SalesQ AI') ?></a>
                        <a href="<?= url('/features/low-stock-alert') ?>" class="dropdown-item"><?= getTrans('features.low_stock', 'Low Stock Alert') ?></a>
                        <a href="<?= url('/features/receipt-link') ?>" class="dropdown-item"><?= getTrans('features.receipt', 'Receipt Link') ?></a>
                    </div>
                </li>
                
                <!-- Business Tools Dropdown -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"><?= getTrans('business_tools', 'Business Tools') ?></a>
                    <div class="dropdown-menu">
                        <a href="<?= url('/integrations') ?>" class="dropdown-item"><?= getTrans('integrations.all', 'All Integrations') ?></a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= url('/integrations/hubspot-crm') ?>" class="dropdown-item"><?= getTrans('integrations.hubspot', 'HubSpot CRM') ?></a>
                        <a href="<?= url('/integrations/email-marketing') ?>" class="dropdown-item"><?= getTrans('integrations.email', 'Email Marketing') ?></a>
                        <a href="<?= url('/integrations/google-analytics') ?>" class="dropdown-item"><?= getTrans('integrations.analytics', 'Google Analytics') ?></a>
                        <a href="<?= url('/integrations/slack-teams') ?>" class="dropdown-item"><?= getTrans('integrations.slack', 'Slack & Teams') ?></a>
                        <a href="<?= url('/integrations/zoom-calendly') ?>" class="dropdown-item"><?= getTrans('integrations.zoom', 'Zoom & Calendly') ?></a>
                    </div>
                </li>
                
                <!-- Payment & Tech Dropdown -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"><?= getTrans('payment_tech', 'Payment & Tech') ?></a>
                    <div class="dropdown-menu">
                        <a href="<?= url('/integration/paypal') ?>" class="dropdown-item"><?= getTrans('payments.paypal', 'PayPal') ?></a>
                        <a href="<?= url('/integration/stripe') ?>" class="dropdown-item"><?= getTrans('payments.stripe', 'Stripe') ?></a>
                        <a href="<?= url('/integration/flutterwave') ?>" class="dropdown-item"><?= getTrans('payments.flutterwave', 'Flutterwave') ?></a>
                        <a href="<?= url('/integration/smtp') ?>" class="dropdown-item"><?= getTrans('tech.smtp', 'SMTP') ?></a>
                    </div>
                </li>
                
                <!-- Country Selector (hidden on narrower desktops for space) -->
                <li class="nav-item dropdown country-nav-item" style="margin-right: 5px;">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" style="padding: 0.4rem 0.3rem; font-size: 0.8rem; display: flex; align-items: center; white-space: nowrap; max-width: 90px; overflow: hidden;">
                        <span class="country-selector" style="display: flex; align-items: center; max-width: 80px; overflow: hidden;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 3px; flex-shrink: 0;">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                            <span style="flex-shrink: 0; font-size: 0.75rem; text-overflow: ellipsis; overflow: hidden;"><?= getTrans('country.global', 'GLOBAL') ?></span>
                        </span>
                    </a>
                    <div class="dropdown-menu" style="min-width: 200px;">
                        <a href="#" class="dropdown-item d-flex align-items-center country-option" data-country="KE" data-name="KENYA">
                            <span class="flag-icon" style="background-image: url('https://flagcdn.com/ke.svg');"></span>
                            <span style="margin-left: 10px;"><?= getTrans('country.kenya', 'Kenya') ?> (KES)</span>
                        </a>
                        <a href="#" class="dropdown-item d-flex align-items-center country-option" data-country="NG" data-name="NIGERIA">
                            <span class="flag-icon" style="background-image: url('https://flagcdn.com/ng.svg');"></span>
                            <span style="margin-left: 10px;"><?= getTrans('country.nigeria', 'Nigeria') ?> (NGN)</span>
                        </a>
                        <a href="#" class="dropdown-item d-flex align-items-center country-option" data-country="ZA" data-name="SOUTH AFRICA">
                            <span class="flag-icon" style="background-image: url('https://flagcdn.com/za.svg');"></span>
                            <span style="margin-left: 10px;"><?= getTrans('country.south_africa', 'South Africa') ?> (ZAR)</span>
                        </a>
                        <a href="#" class="dropdown-item d-flex align-items-center country-option" data-country="TZ" data-name="TANZANIA">
                            <span class="flag-icon" style="background-image: url('https://flagcdn.com/tz.svg');"></span>
                            <span style="margin-left: 10px;"><?= getTrans('country.tanzania', 'Tanzania') ?> (TZS)</span>
                        </a>
                        <a href="#" class="dropdown-item d-flex align-items-center country-option" data-country="RW" data-name="RWANDA">
                            <span class="flag-icon" style="background-image: url('https://flagcdn.com/rw.svg');"></span>
                            <span style="margin-left: 10px;"><?= getTrans('country.rwanda', 'Rwanda') ?> (RWF)</span>
                        </a>
                        <a href="#" class="dropdown-item d-flex align-items-center country-option" data-country="GLOBAL" data-name="GLOBAL">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px;">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                            <span><?= getTrans('country.global', 'Global') ?> (USD)</span>
                        </a>
                    </div>
                </li>
                
                <!-- Login/Register Buttons -->
                <li class="nav-item" style="margin-left: 5px;">
                    <a href="https://appnomu.com/index.php" class="nav-link" style="color: #198754; font-weight: 500; padding: 0.5rem 0.6rem; white-space: nowrap; font-size: 0.9rem;">
                        <?= getTrans('login', 'Login') ?>
                    </a>
                </li>
                <li class="nav-item" style="margin-left: 3px;">
                    <a href="https://appnomu.com/index.php?action=register&utm_source=landing_page&utm_medium=header&utm_campaign=salesq" class="nav-link" style="background: #198754; color: white; border-radius: 4px; padding: 0.5rem 0.8rem; font-weight: 500; white-space: nowrap; font-size: 0.9rem;">
                        <?= getTrans('register', 'Get Started') ?>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        'use strict';
        
        // Initialize country selector from URL or session
        const urlParams = new URLSearchParams(window.location.search);
        const urlCountry = urlParams.get('country');
        let currentCountry = '<?= get_user_country() ?>';
        
        if (urlCountry) {
            currentCountry = urlCountry.toUpperCase();
            console.log('Using country from URL:', currentCountry);
        } else {
            console.log('Current country from PHP session:', currentCountry);
        }
        
        // Initialize country selector after functions are defined
        setTimeout(() => {
            if (currentCountry && currentCountry !== 'GLOBAL') {
                updateCountrySelector(currentCountry);
            }
        }, 100);
        
        // Elements
        const menuToggle = document.getElementById('menuToggle');
        const mainNav = document.getElementById('mainNav');
        const dropdowns = document.querySelectorAll('.dropdown');
        let isMobile = window.innerWidth <= 992;
        
        // Toggle mobile menu
        function toggleMobileMenu(e) {
            if (e) e.preventDefault();
            if (!mainNav) return;
            
            const isExpanded = mainNav.classList.toggle('show');
            if (menuToggle) {
                menuToggle.setAttribute('aria-expanded', isExpanded);
            }
            
            // Close all dropdowns when toggling mobile menu
            if (!isExpanded) {
                closeAllDropdowns();
            }
        }
        
        // Close all dropdowns
        function closeAllDropdowns() {
            document.querySelectorAll('.dropdown.show').forEach(dropdown => {
                dropdown.classList.remove('show');
            });
        }
        
        // Toggle dropdown
        function toggleDropdown(dropdown, show) {
            if (!dropdown) return;
            
            if (show === undefined) {
                dropdown.classList.toggle('show');
            } else {
                dropdown.classList.toggle('show', show);
            }
            
            // Close other dropdowns when opening a new one
            if (dropdown.classList.contains('show')) {
                dropdowns.forEach(d => {
                    if (d !== dropdown) d.classList.remove('show');
                });
            }
        }
        
        // Initialize event listeners
        function init() {
            // Mobile menu toggle
            if (menuToggle) {
                menuToggle.addEventListener('click', toggleMobileMenu);
                menuToggle.addEventListener('touchstart', toggleMobileMenu);
            }
            
            // Handle dropdown toggles
            document.addEventListener('click', function(e) {
                const target = e.target;
                const dropdownToggle = target.closest('.dropdown-toggle');
                
                // Handle dropdown toggle click
                if (dropdownToggle) {
                    const dropdown = dropdownToggle.closest('.dropdown');
                    if (dropdown) {
                        toggleDropdown(dropdown);
                        e.preventDefault();
                        return;
                    }
                }
                
                // Close dropdowns when clicking outside
                if (!target.closest('.dropdown')) {
                    closeAllDropdowns();
                }
                
                // Handle country selection
                const countryOption = target.closest('.country-option');
                if (countryOption) {
                    handleCountrySelect(countryOption);
                    return;
                }
                
            });
            
            // Always setup hover handlers - they check isMobile internally
            setupHoverHandlers();
            
            // Handle window resize
            setupResizeHandler();
        }
        
        // Update country selector display
        function updateCountrySelector(countryCode) {
            const countrySelector = document.querySelector('.country-selector');
            if (!countrySelector) return;
            
            const countryData = {
                'KE': { name: 'KENYA', flag: 'https://flagcdn.com/ke.svg' },
                'NG': { name: 'NIGERIA', flag: 'https://flagcdn.com/ng.svg' },
                'ZA': { name: 'SOUTH AFRICA', flag: 'https://flagcdn.com/za.svg' },
                'TZ': { name: 'TANZANIA', flag: 'https://flagcdn.com/tz.svg' },
                'RW': { name: 'RWANDA', flag: 'https://flagcdn.com/rw.svg' },
                'GLOBAL': { name: 'GLOBAL', flag: null }
            };
            
            const country = countryData[countryCode];
            if (country) {
                const displayName = country.name.length > 8 ? country.name.substring(0, 6) + '...' : country.name;
                if (country.flag) {
                    countrySelector.innerHTML = `<span class="flag-icon" style="background-image: url('${country.flag}'); width: 14px; height: 10px; background-size: cover; background-position: center; display: inline-block; margin-right: 3px;"></span><span style="flex-shrink: 0; font-size: 0.75rem; text-overflow: ellipsis; overflow: hidden;">${displayName}</span>`;
                } else {
                    countrySelector.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 3px; flex-shrink: 0;"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg><span style="flex-shrink: 0; font-size: 0.75rem; text-overflow: ellipsis; overflow: hidden;">${displayName}</span>`;
                }
            }
        }

        // Handle country selection
        function handleCountrySelect(countryOption) {
            const countryName = countryOption.getAttribute('data-name');
            const countryCode = countryOption.getAttribute('data-country');
            
            updateCountrySelector(countryCode);
            countryOption.closest('.dropdown')?.classList.remove('show');
            
            // Update URL with country parameter
            const currentUrl = new URL(window.location);
            if (countryCode !== 'GLOBAL') {
                currentUrl.searchParams.set('country', countryCode);
            } else {
                currentUrl.searchParams.delete('country');
            }
            
            // Store country in localStorage for persistence
            localStorage.setItem('selectedCountry', countryCode);
            
            // Force page refresh for all countries to ensure pricing and content updates
            window.location.href = currentUrl.toString();
        }
        
        // Setup hover handlers for desktop
        function setupHoverHandlers() {
            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('mouseenter', function() {
                    if (!isMobile) this.classList.add('show');
                });
                
                dropdown.addEventListener('mouseleave', function() {
                    if (!isMobile) this.classList.remove('show');
                });
                
                const link = dropdown.querySelector('.nav-link');
                if (link) {
                    link.addEventListener('focus', function() {
                        if (!isMobile) dropdown.classList.add('show');
                    });
                    
                    link.addEventListener('blur', function() {
                        if (isMobile) return;
                        setTimeout(() => {
                            if (!dropdown.matches(':hover')) {
                                dropdown.classList.remove('show');
                            }
                        }, 100);
                    });
                }
            });
        }
        
        // Setup window resize handler
        function setupResizeHandler() {
            let resizeTimer;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(() => {
                    const newIsMobile = window.innerWidth <= 992;
                    if (isMobile !== newIsMobile) {
                        isMobile = newIsMobile;
                        // Reset mobile menu state
                        if (mainNav) mainNav.classList.remove('show');
                        if (menuToggle) menuToggle.setAttribute('aria-expanded', 'false');
                        // Close all dropdowns on resize
                        closeAllDropdowns();
                    }
                }, 100);
            });
        }
        
        // Initialize everything
        init();
        
        // Setup hover handlers only for desktop
        if (!isMobile) {
            setupHoverHandlers();
        }
    });
    </script>
