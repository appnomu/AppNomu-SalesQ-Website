<?php 
// Ensure config is loaded
if (!function_exists('url') || !function_exists('asset')) {
    require_once __DIR__ . '/../config.php';
}
?>
<?php
// Generate a random nonce for inline scripts
$cspNonce = base64_encode(random_bytes(16));

// Define the Content Security Policy
$csp = [
    // Base restrictions
    "default-src 'self' https: data:",
    
    // Script sources - allow Cloudflare Rocket Loader, Intercom, and Mixpanel
    "script-src 'self' 'nonce-{$cspNonce}' 'strict-dynamic' 'unsafe-inline' 'unsafe-eval' " .
          "https: " .
          "https://*.intercomcdn.com " .
          "https://*.intercom.io " .
          "https://widget.intercom.io " .
          "https://js.intercomcdn.com " .
          "https://*.intercom.com " .
          "https://www.googletagmanager.com " .
          "https://www.google-analytics.com " .
          "https://cdn.jsdelivr.net " .
          "https://cdn.mxpnl.com " .
          "https://appnomu.com " .
          "https://cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js",
    
    // Additional script-src-* directives for better compatibility
    "script-src-elem 'self' 'unsafe-inline' https: " .
          "https://*.intercomcdn.com " .
          "https://*.intercom.io " .
          "https://widget.intercom.io " .
          "https://js.intercomcdn.com " .
          "https://cdn.mxpnl.com " .
          "https://appnomu.com " .
          "https://cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js",
    
    // Allow inline event handlers (onclick, onerror, etc.)
    "script-src-attr 'unsafe-inline' 'unsafe-hashes'",
    
    // Other resource types
    "style-src 'self' 'unsafe-inline' https: https://fonts.googleapis.com https://cdn.jsdelivr.net",
    "img-src 'self' data: https: blob: https://*.intercom.io https://*.intercomcdn.com https://js.intercomcdn.com",
    "font-src 'self' data: https: https://fonts.gstatic.com https://cdn.jsdelivr.net",
    "connect-src 'self' https: wss: https://*.intercom.io https://*.intercomcdn.com " .
               "https://*.google-analytics.com https://*.googletagmanager.com " .
               "https://api-iam.intercom.io https://api-ping.intercom.io https://nexus-websocket-a.intercom.io " .
               "https://api-eu.mixpanel.com https://api.mixpanel.com",
    "frame-src 'self' https: *.intercom.io *.intercomcdn.com *.youtube.com *.vimeo.com js.intercomcdn.com",
    "media-src 'self' https: data: https://*.intercomcdn.com",
    "object-src 'none'",
    "base-uri 'self'",
    "form-action 'self' https:",
    "frame-ancestors 'none'"
];

// Set the CSP header
header("Content-Security-Policy: " . implode("; ", $csp));

// Set Permissions Policy to fix violations
header("Permissions-Policy: accelerometer=(), camera=(), geolocation=(), gyroscope=(), magnetometer=(), microphone=(), payment=(), usb=()");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Temporary CSP removed - will be added back later -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <meta name="description" content="<?= $page_description ?>">
    <!-- Accessibility meta tags -->
    <meta name="color-scheme" content="light dark">
    <meta name="theme-color" content="#198754">
    <link rel="icon" type="image/png" href="https://appnomu.com/landing/assets/images/AppNomu%20SalesQ%20logo.png">
    <link rel="apple-touch-icon" href="https://appnomu.com/landing/assets/images/AppNomu%20SalesQ%20logo.png">
    
    <!-- Canonical URL -->
    <?php if (isset($page_canonical)): ?>
    <link rel="canonical" href="<?= $page_canonical ?>">
    <?php endif; ?>
    
    <!-- Open Graph meta tags for better social sharing -->
    <meta property="og:title" content="<?= isset($page_og_title) ? $page_og_title : $page_title ?>">
    <meta property="og:description" content="<?= isset($page_og_description) ? $page_og_description : $page_description ?>">
    <meta property="og:image" content="<?= isset($page_og_image) ? $page_og_image : 'https://appnomu.com/landing/assets/images/AppNomu%20SalesQ%20logo.png' ?>">
    <meta property="og:url" content="<?= isset($page_canonical) ? $page_canonical : (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="AppNomu SalesQ">
    
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= isset($page_twitter_title) ? $page_twitter_title : $page_title ?>">
    <meta name="twitter:description" content="<?= isset($page_twitter_description) ? $page_twitter_description : $page_description ?>">
    <meta name="twitter:image" content="<?= isset($page_og_image) ? $page_og_image : 'https://appnomu.com/landing/assets/images/AppNomu%20SalesQ%20logo.png' ?>">
    <meta name="twitter:site" content="@AppNomu">
    <meta name="twitter:creator" content="@AppNomu">
    
    <!-- Additional SEO meta tags -->
    <meta name="keywords" content="<?= isset($page_keywords) ? $page_keywords : 'Bulk SMS Uganda, CRM Uganda, Inventory Management Africa, Sales Management System, Uganda Business Software, African Business Solutions, SMS Marketing Uganda' ?>">
    
    <!-- RSS Feed Links -->
    <link rel="alternate" type="application/rss+xml" title="AppNomu SalesQ Blog - RSS Feed" href="<?= url('rss.php') ?>">
    <link rel="alternate" type="application/rss+xml" title="AppNomu SalesQ Blog <?= get_user_country() ?> - Country RSS Feed" href="<?= url('rss-country.php?country=' . get_user_country()) ?>">
    
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="<?= asset('css/style.css') ?>?v=<?= filemtime(__DIR__ . '/../assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?= asset('css/accessibility.css') ?>?v=<?= filemtime(__DIR__ . '/../assets/css/accessibility.css') ?>" rel="stylesheet">
    <?php if (isset($additional_css)): ?>
        <?php foreach ($additional_css as $css): ?>
            <link href="<?= $css ?>" rel="stylesheet">
        <?php endforeach; ?>
    <?php endif; ?>
    <!-- Structured Data for SEO -->
    <script type="application/ld+json" nonce="<?= $cspNonce ?>">
    <?php if (isset($schema_data)): ?>
        <?= json_encode($schema_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
    <?php else: ?>
    {
        "@context": "https://schema.org",
        "@type": "SoftwareApplication",
        "name": "AppNomu SalesQ",
        "description": "Uganda's Leading CRM & SMS Platform. Bulk SMS, CRM, and Inventory Made Easy for African Businesses.",
        "applicationCategory": "BusinessApplication",
        "operatingSystem": "Web",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "UGX",
            "priceSpecification": {
                "@type": "PriceSpecification",
                "price": "0",
                "priceCurrency": "UGX",
                "valueAddedTaxIncluded": "false"
            }
        },
        "keywords": "<?= isset($page_keywords) ? $page_keywords : 'Bulk SMS Uganda, CRM Uganda, Inventory Management Africa, Sales Management System, Uganda Business Software' ?>",
        "publisher": {
            "@type": "Organization",
            "name": "AppNomu",
            "logo": {
                "@type": "ImageObject",
                "url": "https://appnomu.com/landing/assets/images/AppNomu%20SalesQ%20Logo-blue.png"
            }
        },
        "url": "https://www.appnomu.com"
    }
    <?php endif; ?>
    </script>
    <!-- Resources Widget -->
    <div id="resources-widget" class="resources-widget">
        <button class="resources-toggle" aria-label="Open Our Resources Menu" title="Quick Access to Our Resources">
            <i class="bi bi-book"></i>
            <span class="widget-text">Our Resources</span>
        </button>
        <div class="resources-menu">
            <div class="resources-header">
                <h6><i class="bi bi-book me-2"></i>Our Resources</h6>
                <button class="close-resources" aria-label="Close Our Resources Menu">
                    <i class="bi bi-x"></i>
                </button>
            </div>
            <div class="resources-content">
                <a href="<?= url('/resources') ?>" class="resource-item">
                    <i class="bi bi-journal-text"></i>
                    <div>
                        <strong>Blog & Insights</strong>
                        <small>Expert articles & guides</small>
                    </div>
                </a>
                <a href="https://doc.appnomu.com/en" target="_blank" class="resource-item">
                    <i class="bi bi-question-circle"></i>
                    <div>
                        <strong>Help Center</strong>
                        <small>Documentation & support</small>
                    </div>
                </a>
                <a href="<?= url('/b/5-effective-sms-templates-for-ugandan-retail-businesses') ?>" class="resource-item">
                    <i class="bi bi-chat-square-text"></i>
                    <div>
                        <strong>SMS Templates</strong>
                        <small>Ready-to-use templates</small>
                    </div>
                </a>
                <a href="<?= url('/b/appnomu-salesq-industry-use-cases-africa-usa') ?>" class="resource-item">
                    <i class="bi bi-building"></i>
                    <div>
                        <strong>Industry Guides</strong>
                        <small>Sector-specific solutions</small>
                    </div>
                </a>
                <a href="<?= url('/demo') ?>" class="resource-item">
                    <i class="bi bi-play-circle"></i>
                    <div>
                        <strong>Product Demo</strong>
                        <small>See SalesQ in action</small>
                    </div>
                </a>
                <a href="<?= url('/pricing') ?>" class="resource-item">
                    <i class="bi bi-calculator"></i>
                    <div>
                        <strong>Pricing Calculator</strong>
                        <small>Find your perfect plan</small>
                    </div>
                </a>
            </div>
            <div class="resources-footer">
                <a href="<?= url('/contact') ?>" class="btn btn-success btn-sm w-100">
                    <i class="bi bi-headset me-1"></i>Need Help?
                </a>
            </div>
        </div>
    </div>

    <!-- Status Page Widget -->
    <script nonce="<?= $cspNonce ?>">
    // Position the status widget on the left side, below resources widget
    document.addEventListener('DOMContentLoaded', function() {
        // Create a style element for the status widget
        const style = document.createElement('style');
        style.textContent = `
            #status-widget {
                position: fixed;
                left: 20px;
                bottom: 80px; /* Position above resources widget */
                z-index: 2147483000; /* Just below Intercom's z-index */
            }
            @media (max-width: 768px) {
                #status-widget {
                    left: 10px;
                    bottom: 140px; /* Move up on mobile to avoid overlapping */
                }
            }
        `;
        document.head.appendChild(style);
        
        // Create container for the status widget
        const statusWidget = document.createElement('div');
        statusWidget.id = 'status-widget';
        document.body.appendChild(statusWidget);
        
        // Load the status widget script
        const script = document.createElement('script');
        script.src = 'https://status.appnomu.com/en/1a205829/widget/script.js';
        script.async = true;
        document.body.appendChild(script);
    });
    </script>
    <script nonce="<?= $cspNonce ?>" type="text/javascript">
      (function(e,c){if(!c.__SV){var l,h;window.mixpanel=c;c._i=[];c.init=function(q,r,f){function t(d,a){var g=a.split(".");2==g.length&&(d=d[g[0]],a=g[1]);d[a]=function(){d.push([a].concat(Array.prototype.slice.call(arguments,0)))}}var b=c;"undefined"!==typeof f?b=c[f]=[]:f="mixpanel";b.people=b.people||[];b.toString=function(d){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);d||(a+=" (stub)");return a};b.people.toString=function(){return b.toString(1)+".people (stub)"};l="disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking start_batch_senders start_session_recording stop_session_recording people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");
      for(h=0;h<l.length;h++)t(b,l[h]);var n="set set_once union unset remove delete".split(" ");b.get_group=function(){function d(p){a[p]=function(){b.push([g,[p].concat(Array.prototype.slice.call(arguments,0))])}}for(var a={},g=["get_group"].concat(Array.prototype.slice.call(arguments,0)),m=0;m<n.length;m++)d(n[m]);return a};c._i.push([q,r,f])};c.__SV=1.2;var k=e.createElement("script");k.type="text/javascript";k.async=!0;k.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===
      e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";e=e.getElementsByTagName("script")[0];e.parentNode.insertBefore(k,e)}})(document,window.mixpanel||[])

      mixpanel.init('89d749d90fe67370f9ea3009bb9d4a9a', {
        autocapture: true,
        record_sessions_percent: 100,
      })

    </script>
</head>
<body>
    <!-- Skip to content link for keyboard users -->
    <a href="#main-content" class="skip-to-content">Skip to main content</a>
    
    <!-- Accessibility controls -->
    <div id="accessibility-controls" class="visually-hidden">
        <button id="toggle-high-contrast" aria-pressed="false">Toggle high contrast mode</button>
        <button id="toggle-reduced-motion" aria-pressed="false">Toggle reduced motion</button>
    </div>
    
    <?php include 'header.php'; ?>
    
    <main id="main-content" tabindex="-1" role="main">
        <!-- Screen reader live region for important announcements -->
        <div id="sr-announcements" class="sr-announcement" aria-live="polite" aria-atomic="true"></div>
        <?= $content ?>
    </main>
    
    <?php include 'footer.php'; ?>
    
    <!-- Cookie Notice -->
    <div id="cookie-notice" class="cookie-notice">
        <div class="cookie-content">
            <h5>We Value Your Privacy</h5>
            <p>We use cookies to enhance your browsing experience, serve personalized ads or content, and analyze our traffic. By clicking "Accept All", you consent to our use of cookies.</p>
            <div class="cookie-options">
                <button type="button" class="btn btn-sm btn-outline-light mb-2 mb-sm-0 me-sm-2" id="cookie-settings">Customize</button>
                <button type="button" class="btn btn-sm btn-success" id="accept-all">Accept All</button>
            </div>
            <div class="cookie-settings" style="display: none;">
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="necessary-cookies" checked disabled>
                    <label class="form-check-label" for="necessary-cookies">Necessary Cookies</label>
                    <small class="d-block text-muted">Required for the website to function</small>
                </div>
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="analytics-cookies" checked>
                    <label class="form-check-label" for="analytics-cookies">Analytics</label>
                    <small class="d-block text-muted">Help us improve our website</small>
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="marketing-cookies">
                    <label class="form-check-label" for="marketing-cookies">Marketing</label>
                    <small class="d-block text-muted">For personalized advertising</small>
                </div>
                <button type="button" class="btn btn-sm btn-success w-100" id="save-preferences">Save Preferences</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" nonce="<?= $cspNonce ?>"></script>
    <script src="<?= asset('js/main.js') ?>?v=<?= filemtime(__DIR__ . '/../assets/js/main.js') ?>" nonce="<?= $cspNonce ?>"></script>
    <?php if (isset($additional_js)): ?>
        <?php foreach ($additional_js as $js): ?>
            <script src="<?= $js ?>" nonce="<?= $cspNonce ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
    
    <style>
        /* Resources Widget Styles */
        .resources-widget {
            position: fixed;
            left: 20px;
            bottom: 20px;
            z-index: 2147483001; /* Above status widget but below Intercom */
            font-family: 'Lexend', sans-serif;
        }
        
        .resources-toggle {
            background: #198754;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 20px rgba(25, 135, 84, 0.3);
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
            font-weight: 600;
            min-width: 140px;
            justify-content: center;
        }
        
        .resources-toggle:hover {
            background: #157347;
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(25, 135, 84, 0.4);
        }
        
        .resources-toggle i {
            font-size: 18px;
        }
        
        .resources-menu {
            position: absolute;
            bottom: 60px;
            left: 0;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            width: 280px;
            max-height: 400px;
            overflow: hidden;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .resources-menu.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .resources-header {
            background: #f8f9fa;
            padding: 16px 20px;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            justify-content: between;
            align-items: center;
        }
        
        .resources-header h6 {
            margin: 0;
            color: #333;
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        
        .close-resources {
            background: none;
            border: none;
            color: #6c757d;
            font-size: 20px;
            cursor: pointer;
            padding: 0;
            margin-left: auto;
            transition: color 0.2s ease;
        }
        
        .close-resources:hover {
            color: #198754;
        }
        
        .resources-content {
            max-height: 280px;
            overflow-y: auto;
            padding: 8px 0;
        }
        
        .resource-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            text-decoration: none;
            color: #333;
            transition: all 0.2s ease;
            border-bottom: 1px solid #f8f9fa;
        }
        
        .resource-item:hover {
            background: #f8f9fa;
            color: #198754;
            text-decoration: none;
        }
        
        .resource-item i {
            font-size: 18px;
            color: #198754;
            min-width: 20px;
        }
        
        .resource-item div {
            flex: 1;
        }
        
        .resource-item strong {
            display: block;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 2px;
        }
        
        .resource-item small {
            color: #6c757d;
            font-size: 12px;
        }
        
        .resources-footer {
            padding: 16px 20px;
            border-top: 1px solid #e9ecef;
            background: #f8f9fa;
        }
        
        .resources-footer .btn {
            font-size: 13px;
            font-weight: 600;
        }
        
        /* Mobile Responsive */
        @media (max-width: 768px) {
            .resources-widget {
                left: 10px;
                bottom: 10px;
            }
            
            .resources-toggle {
                padding: 10px 12px;
                min-width: 100px;
                font-size: 13px;
            }
            
            .resources-toggle .widget-text {
                display: none;
            }
            
            .resources-menu {
                width: 260px;
                bottom: 55px;
            }
            
            .resource-item {
                padding: 10px 16px;
            }
            
            .resources-header,
            .resources-footer {
                padding: 12px 16px;
            }
        }
        
        /* Very small screens */
        @media (max-width: 480px) {
            .resources-menu {
                width: calc(100vw - 40px);
                left: -10px;
            }
        }
        
        /* Accessibility */
        .resources-toggle:focus,
        .close-resources:focus,
        .resource-item:focus {
            outline: 2px solid #198754;
            outline-offset: 2px;
        }
        
        /* Animation for smooth opening */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .resources-menu.show {
            animation: slideUp 0.3s ease;
        }

        /* Cookie Notice Styles */
        .cookie-notice {
            position: fixed;
            left: -400px;
            bottom: 20px;
            background: #198754;
            color: white;
            padding: 20px;
            width: 350px;
            max-width: 90%;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            z-index: 99999;
            transition: left 0.5s ease-in-out;
            font-family: 'Lato', sans-serif;
        }
        
        .cookie-notice.show {
            left: 0;
        }
        
        .cookie-notice h5 {
            color: white;
            margin-top: 0;
            margin-bottom: 10px;
        }
        
        .cookie-notice p {
            font-size: 14px;
            margin-bottom: 15px;
            line-height: 1.5;
            word-break: break-word;
        }
        
        .cookie-options {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        
        .cookie-settings {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .form-switch .form-check-input {
            width: 2.5em;
            margin-left: -2.8em;
        }
        
        .form-check-label {
            margin-left: 0.5em;
        }
        
        /* Adjust positioning when back-to-top button is present */
        .cookie-notice.with-back-to-top {
            bottom: 100px;
        }
        
        @media (max-width: 576px) {
            .cookie-notice {
                width: 100%;
                border-radius: 0;
                bottom: -100%;
                left: 0;
                transform: none;
                transition: bottom 0.5s ease-in-out;
            }
            
            .cookie-notice.show {
                left: 0;
                bottom: 0;
            }
            
            /* On mobile, keep cookie notice at bottom even with back-to-top button */
            .cookie-notice.with-back-to-top {
                bottom: -100%;
            }
            
            .cookie-notice.with-back-to-top.show {
                bottom: 0;
            }
        }
    </style>
    
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Resources Widget JavaScript -->
    <script nonce="<?= $cspNonce ?>">
        document.addEventListener('DOMContentLoaded', function() {
            const resourcesWidget = document.getElementById('resources-widget');
            const resourcesToggle = document.querySelector('.resources-toggle');
            const resourcesMenu = document.querySelector('.resources-menu');
            const closeResourcesBtn = document.querySelector('.close-resources');
            
            if (!resourcesWidget || !resourcesToggle || !resourcesMenu) return;
            
            let isMenuOpen = false;
            
            // Toggle menu function
            function toggleMenu() {
                isMenuOpen = !isMenuOpen;
                resourcesMenu.classList.toggle('show', isMenuOpen);
                resourcesToggle.setAttribute('aria-expanded', isMenuOpen);
                
                if (isMenuOpen) {
                    // Focus management for accessibility
                    setTimeout(() => {
                        closeResourcesBtn?.focus();
                    }, 100);
                }
            }
            
            // Close menu function
            function closeMenu() {
                isMenuOpen = false;
                resourcesMenu.classList.remove('show');
                resourcesToggle.setAttribute('aria-expanded', 'false');
                resourcesToggle.focus();
            }
            
            // Event listeners
            resourcesToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                toggleMenu();
            });
            
            if (closeResourcesBtn) {
                closeResourcesBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    closeMenu();
                });
            }
            
            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (isMenuOpen && !resourcesWidget.contains(e.target)) {
                    closeMenu();
                }
            });
            
            // Keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && isMenuOpen) {
                    closeMenu();
                }
            });
            
            // Track resource clicks for analytics (if available)
            const resourceItems = document.querySelectorAll('.resource-item');
            resourceItems.forEach(item => {
                item.addEventListener('click', function() {
                    const resourceName = this.querySelector('strong')?.textContent || 'Unknown Resource';
                    
                    // Google Analytics tracking (if available)
                    if (typeof gtag !== 'undefined') {
                        gtag('event', 'resource_click', {
                            'resource_name': resourceName,
                            'resource_url': this.href
                        });
                    }
                    
                    // Close menu after click (with small delay for better UX)
                    setTimeout(() => {
                        closeMenu();
                    }, 150);
                });
            });
            
            // Initialize ARIA attributes
            resourcesToggle.setAttribute('aria-expanded', 'false');
            resourcesToggle.setAttribute('aria-haspopup', 'true');
        });
    </script>
    <!-- Subscription Notification Banner -->
    <div id="subscription-notice" class="subscription-notice" style="display: none;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="me-3 text-white">
                    <strong>🚀 Special Offer!</strong> Get started with our Enterprise plan at only <strong>USD25/month</strong> and receive <strong>UGX 1,000 in SMS credit</strong> to test our SMS Marketing platform!
                </div>
                <div class="d-flex align-items-center">
                    <a href="https://www.appnomu.com/register.php?utm_source=notification_banner&utm_medium=website&utm_campaign=enterprise_offer" class="btn btn-light btn-sm me-2">Upgrade Now</a>
                    <button type="button" class="btn-close btn-close-white" aria-label="Close" id="close-subscription-notice"></button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .subscription-notice {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: #198754;
            color: #ffffff;
            padding: 12px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            z-index: 99998;
            max-width: 90%;
            width: 600px;
            animation: slideUp 0.3s ease-out;
            border: none;
        }

        @keyframes slideUp {
            from { transform: translate(-50%, 100%); }
            to { transform: translate(-50%, 0); }
        }

        .subscription-notice .btn-close {
            padding: 0.5rem;
            background-size: 0.75rem;
        }

        @media (max-width: 768px) {
            .subscription-notice {
                width: 95%;
                padding: 10px 15px;
            }
            
            .subscription-notice .btn {
                padding: 0.25rem 0.5rem;
                font-size: 0.875rem;
            }
        }
    </style>

    <script nonce="<?= $cspNonce ?>">
        document.addEventListener('DOMContentLoaded', function() {
            const cookieNotice = document.getElementById('cookie-notice');
            const cookieSettings = document.querySelector('.cookie-settings');
            const cookieSettingsBtn = document.getElementById('cookie-settings');
            const acceptAllBtn = document.getElementById('accept-all');
            const savePrefsBtn = document.getElementById('save-preferences');
            const analyticsCheckbox = document.getElementById('analytics-cookies');
            const marketingCheckbox = document.getElementById('marketing-cookies');
            
            // Check for back-to-top button and adjust cookie notice positioning
            const backToTopBtn = document.getElementById('backToTop');
            if (backToTopBtn) {
                cookieNotice.classList.add('with-back-to-top');
            }
            
            // Check if user has already made a choice
            const consentCookie = getCookie('cookie_consent');
            console.log('Cookie consent check:', consentCookie);
            console.log('All cookies:', document.cookie);
            
            if (!consentCookie) {
                // Show cookie notice on all pages after page load
                setTimeout(() => {
                    cookieNotice.classList.add('show');
                }, 1000);
            } else {
                console.log('Cookie consent already given:', consentCookie);
            }
            
            // Toggle settings panel
            cookieSettingsBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                cookieSettings.style.display = cookieSettings.style.display === 'none' ? 'block' : 'none';
            });
            
            // Accept all cookies
            acceptAllBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                setCookie('cookie_consent', 'all', 365);
                setCookie('analytics_cookies', 'true', 365);
                setCookie('marketing_cookies', 'true', 365);
                cookieNotice.classList.remove('show');
                
                // Load analytics and marketing scripts
                loadTrackingScripts();
            });
            
            // Save preferences
            savePrefsBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                setCookie('cookie_consent', 'custom', 365);
                setCookie('analytics_cookies', analyticsCheckbox.checked, 365);
                setCookie('marketing_cookies', marketingCheckbox.checked, 365);
                cookieNotice.classList.remove('show');
                
                // Load selected scripts
                if (analyticsCheckbox.checked || marketingCheckbox.checked) {
                    loadTrackingScripts({
                        analytics: analyticsCheckbox.checked,
                        marketing: marketingCheckbox.checked
                    });
                }
            });
            
            // Helper function to set cookie
            function setCookie(name, value, days) {
                const d = new Date();
                d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
                const expires = 'expires=' + d.toUTCString();
                
                // Build cookie string - don't set domain for localhost
                let cookieString = name + '=' + value + ';' + expires + ';path=/;SameSite=Lax';
                
                // Only set domain for production (not localhost or IP addresses)
                const hostname = window.location.hostname;
                if (hostname !== 'localhost' && hostname !== '127.0.0.1' && !hostname.match(/^\d+\.\d+\.\d+\.\d+$/)) {
                    // For production domains, set domain to allow subdomain sharing
                    const domainParts = hostname.split('.');
                    if (domainParts.length > 2) {
                        // For subdomains like www.example.com, set to .example.com
                        const rootDomain = '.' + domainParts.slice(-2).join('.');
                        cookieString += ';domain=' + rootDomain;
                    }
                }
                
                document.cookie = cookieString;
                console.log('Cookie set:', name, '=', value, 'Cookie string:', cookieString);
            }
            
            // Helper function to get cookie
            function getCookie(name) {
                const nameEQ = name + '=';
                const ca = document.cookie.split(';');
                for (let i = 0; i < ca.length; i++) {
                    let c = ca[i];
                    while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }
            
            // Function to load tracking scripts based on preferences
            function loadTrackingScripts(prefs = { analytics: true, marketing: true }) {
                // Load Google Analytics if analytics is enabled
                if (prefs.analytics) {
                    // Google Analytics 4 (GA4) tracking code
                    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                    })(window,document,'script','dataLayer','GTM-81RYBYKXLC');
                    
                    // Alternative GA4 implementation
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());
                    gtag('config', 'G-81RYBYKXLC');
                }
                
                // Intercom now loads unconditionally elsewhere
            }
            
            // Check for existing preferences and load scripts if needed
            const consent = getCookie('cookie_consent');
            if (consent === 'all' || (consent === 'custom' && 
                (getCookie('analytics_cookies') === 'true' || getCookie('marketing_cookies') === 'true'))) {
                loadTrackingScripts({
                    analytics: getCookie('analytics_cookies') === 'true',
                    marketing: getCookie('marketing_cookies') === 'true'
                });
            }
        });
    </script>

    <script nonce="<?= $cspNonce ?>">
        document.addEventListener('DOMContentLoaded', function() {
            const subscriptionNotice = document.getElementById('subscription-notice');
            const closeButton = document.getElementById('close-subscription-notice');
            const STORAGE_KEY = 'subscriptionNoticeClosed';
            const NOTICE_DURATION = 30 * 60 * 1000; // 30 minutes in milliseconds

            function showNotice() {
                const lastClosed = localStorage.getItem(STORAGE_KEY);
                const now = new Date().getTime();
                
                if (!lastClosed || (now - parseInt(lastClosed)) > NOTICE_DURATION) {
                    subscriptionNotice.style.display = 'block';
                }
            }

            function hideNotice() {
                subscriptionNotice.style.display = 'none';
                localStorage.setItem(STORAGE_KEY, new Date().getTime().toString());
            }

            if (closeButton) {
                closeButton.addEventListener('click', hideNotice);
            }

            // Show notice after a short delay to improve page load
            setTimeout(showNotice, 2000);
        });
    </script>

    <!-- Accessibility enhancements -->
    <script src="<?= asset('js/accessibility.js') ?>?v=<?= filemtime(__DIR__ . '/../assets/js/accessibility.js') ?>" nonce="<?= $cspNonce ?>"></script>

    <script nonce="<?= $cspNonce ?>">
        // Intercom Live Chat for Non-Logged-In Users - always load
        window.intercomSettings = {
            api_base: "https://api-iam.intercom.io",
            app_id: "j2sfvra7"
        };

        (function(){
            var w = window;
            var ic = w.Intercom;
            if (typeof ic === "function") {
                ic('reattach_activator');
                ic('update', w.intercomSettings);
            } else {
                var d = document;
                var i = function() { i.c(arguments); };
                i.q = [];
                i.c = function(args) { i.q.push(args); };
                w.Intercom = i;

                function l() {
                    var s = d.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = 'https://widget.intercom.io/widget/j2sfvra7';
                    s.onerror = function() {
                        console.error('Failed to load Intercom widget');
                    };
                    var x = d.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }

                if (document.readyState === 'complete') {
                    l();
                } else if (w.attachEvent) {
                    w.attachEvent('onload', l);
                } else {
                    w.addEventListener('load', l, false);
                }
            }
        })();
    </script>

</body>
</html>
