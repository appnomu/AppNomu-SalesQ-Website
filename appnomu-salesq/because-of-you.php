<?php
// Load configuration
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/country_content.php';
require_once __DIR__ . '/includes/translations/translator.php';

// Set the current page for navigation highlighting
$current_page = 'because-of-you';

// Get country-specific content
$country = get_user_country();
$impact_data = get_country_content('impact', []);

// Set page metadata with translations
$page_title = __('impact_page.page_title');
$page_description = __('impact_page.page_description');

// Enhanced SEO keywords for better ranking
$page_keywords = 'AppNomu SalesQ impact, business growth Uganda, SMS marketing success stories, CRM software achievements, tech company social responsibility, African business solutions, Uganda startup success, women in tech empowerment, environmental initiatives Uganda, business automation Africa, SMS platform Uganda, inventory management success, customer relationship management Africa, digital transformation Uganda, tech innovation East Africa, business impact metrics, startup funding Uganda, Infobip partnership, sustainable business practices, community development Uganda';

// Additional SEO metadata
$canonical_url = url('/because-of-you');
$og_image = asset('images/AppNomu_SalesQ_Logo_White.svg');
$country_name = $country === 'KE' ? 'Kenya' : ($country === 'NG' ? 'Nigeria' : ($country === 'ZA' ? 'South Africa' : ($country === 'TZ' ? 'Tanzania' : ($country === 'RW' ? 'Rwanda' : 'Uganda'))));

// Country-specific SEO enhancements
$localized_description = str_replace('Uganda and beyond', $country_name . ' and East Africa', $page_description);
$localized_keywords = $page_keywords . ', ' . strtolower($country_name) . ' business solutions, ' . strtolower($country_name) . ' CRM software, ' . strtolower($country_name) . ' SMS marketing';

// Additional CSS files
$additional_css = [
    asset('css/legal-pages-modern.css')
];

// SEO and Social Media Meta Tags
$additional_meta = [
    // Enhanced SEO
    '<meta name="keywords" content="' . htmlspecialchars($localized_keywords) . '">',
    '<meta name="description" content="' . htmlspecialchars($localized_description) . '">',
    '<meta name="author" content="AppNomu SalesQ">',
    '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">',
    '<link rel="canonical" href="' . $canonical_url . '">',
    
    // Open Graph Meta Tags
    '<meta property="og:type" content="website">',
    '<meta property="og:title" content="' . htmlspecialchars($page_title) . '">',
    '<meta property="og:description" content="' . htmlspecialchars($localized_description) . '">',
    '<meta property="og:url" content="' . $canonical_url . '">',
    '<meta property="og:site_name" content="AppNomu SalesQ">',
    '<meta property="og:image" content="' . $og_image . '">',
    '<meta property="og:image:width" content="1200">',
    '<meta property="og:image:height" content="630">',
    '<meta property="og:locale" content="' . ($country === 'KE' || $country === 'TZ' ? 'sw_KE' : 'en_US') . '">',
    
    // Twitter Card Meta Tags
    '<meta name="twitter:card" content="summary_large_image">',
    '<meta name="twitter:title" content="' . htmlspecialchars($page_title) . '">',
    '<meta name="twitter:description" content="' . htmlspecialchars($localized_description) . '">',
    '<meta name="twitter:image" content="' . $og_image . '">',
    '<meta name="twitter:site" content="@AppNomuSalesQ">',
    
    // Additional SEO enhancements
    '<meta name="theme-color" content="#198754">',
    '<meta name="msapplication-TileColor" content="#198754">',
    '<meta name="application-name" content="AppNomu SalesQ">',
];

// Additional JS files - Using lightweight local alternatives
$additional_js = [];

// Start output buffering
ob_start();
?>

<!-- JSON-LD Structured Data for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "AppNomu SalesQ",
  "description": "<?= htmlspecialchars($localized_description) ?>",
  "url": "<?= $canonical_url ?>",
  "logo": "<?= $og_image ?>",
  "foundingDate": "2020",
  "foundingLocation": {
    "@type": "Place",
    "name": "Uganda"
  },
  "areaServed": [
    {
      "@type": "Country",
      "name": "Uganda"
    },
    {
      "@type": "Country",
      "name": "Kenya"
    },
    {
      "@type": "Country",
      "name": "Nigeria"
    },
    {
      "@type": "Country",
      "name": "South Africa"
    },
    {
      "@type": "Country",
      "name": "Tanzania"
    },
    {
      "@type": "Country",
      "name": "Rwanda"
    }
  ],
  "industry": "Software Development",
  "numberOfEmployees": "<?= $impact_data['team_members'] ?? 25 ?>",
  "award": [
    "Best Business Solution 2023",
    "Fastest Growing Tech Startup Eastern Uganda",
    "Gartner Platform Awards"
  ],
  "sameAs": [
    "https://www.linkedin.com/company/appnomu",
    "https://twitter.com/AppNomuSalesQ"
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "<?= get_country_content('contact_number', '+256 700 000000') ?>",
    "contactType": "Customer Service",
    "areaServed": "<?= $country_name ?>"
  },
  "makesOffer": {
    "@type": "Offer",
    "itemOffered": {
      "@type": "SoftwareApplication",
      "name": "AppNomu SalesQ CRM",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "Web Browser",
      "description": "All-in-one CRM with SMS marketing and inventory management for African businesses"
    }
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "<?= $impact_data['clients'] ?? 25000 ?>",
    "bestRating": "5"
  },
  "hasCredential": [
    {
      "@type": "EducationalOccupationalCredential",
      "name": "Infobip Partnership",
      "credentialCategory": "Investment",
      "recognizedBy": {
        "@type": "Organization",
        "name": "Infobip"
      }
    }
  ]
}
</script>

<!-- Additional Structured Data for Impact Statistics -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "<?= htmlspecialchars($page_title) ?>",
  "description": "<?= htmlspecialchars($localized_description) ?>",
  "url": "<?= $canonical_url ?>",
  "inLanguage": "<?= $country === 'KE' || $country === 'TZ' ? 'sw' : 'en' ?>",
  "isPartOf": {
    "@type": "WebSite",
    "name": "AppNomu SalesQ",
    "url": "<?= url('/') ?>"
  },
  "about": {
    "@type": "Thing",
    "name": "Business Impact and Social Responsibility",
    "description": "AppNomu SalesQ's comprehensive impact across East Africa including business growth, environmental initiatives, and community development"
  },
  "mainEntity": {
    "@type": "ItemList",
    "name": "Impact Metrics",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Clients Served",
        "description": "<?= number_format($impact_data['clients'] ?? 25000) ?>+ businesses across East Africa"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Messages Sent",
        "description": "<?= round(($impact_data['messages'] ?? 20000000) / 1000000) ?>M+ SMS messages delivered"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Investment Received",
        "description": "$<?= number_format($impact_data['funding'] ?? 90000) ?> in credits from Infobip, Cloudflare, and Google for Startups"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Environmental Impact",
        "description": "<?= number_format($impact_data['trees'] ?? 1000) ?>+ trees planted for reforestation"
      }
    ]
  }
}
</script>

<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden" style="padding-top: 120px; padding-bottom: 80px;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNMCwxMDBjMzAsMCwyMCwtMzAgNTAsLTMwczIwLDMwLDUwLDMwczIwLC0zMCw1MCwtMzBzMjAsMzAsNTAsMzBzMjAsLTMwLDUwLC0zMHMyMCwzMCw1MCwzMFYwSDBaIiBmaWxsPSJyZ2JhKDI1LDEzNSw4NCwwLjA1KSIvPjwvc3ZnPg=='); background-size: 100% 200px; background-repeat: repeat; opacity: 0.4;"></div>
    
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-success-soft text-success fw-bold px-3 py-2 rounded-pill mb-3 d-inline-block"><?= __('impact_page.hero_badge') ?></span>
                <h1 class="display-4 fw-bold mb-3"><?= __('impact_page.hero_title') ?> <span class="text-success">You</span></h1>
                <p class="lead mb-4" style="font-size: 1.2rem; font-weight: 300;"><?= __('impact_page.hero_subtitle') ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Key Metrics Section -->
<section class="metrics-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Our <span class="text-success">Impact</span> in Numbers</h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
            <p class="lead mt-3 text-secondary"><?= __('impact_page.metrics_subtitle') ?></p>
        </div>

        <div class="row g-4">
            <!-- Clients Card -->
            <div class="col-md-4" data-animate="fade-up" data-delay="100">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4 text-center">
                        <div class="impact-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3" role="img" aria-label="Clients icon">
                            <i class="bi bi-people-fill text-success fs-3" aria-hidden="true"></i>
                        </div>
                        <h2 class="display-5 fw-bold mb-2"><span id="clientCount"><?= number_format($impact_data['clients'] ?? 25000) ?></span>+</h2>
                        <h4><?= __('impact_page.clients_served') ?></h4>
                        <p class="text-secondary"><?= __('impact_page.clients_description') ?></p>
                    </div>
                </div>
            </div>

            <!-- Messages Card -->
            <div class="col-md-4" data-animate="fade-up" data-delay="200">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4 text-center">
                        <div class="impact-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3" role="img" aria-label="Messages icon">
                            <i class="bi bi-chat-dots-fill text-success fs-3" aria-hidden="true"></i>
                        </div>
                        <h2 class="display-5 fw-bold mb-2"><span id="messageCount"><?= round(($impact_data['messages'] ?? 20000000) / 1000000) ?></span>M+</h2>
                        <h4><?= __('impact_page.messages_sent') ?></h4>
                        <p class="text-secondary"><?= __('impact_page.messages_description') ?></p>
                    </div>
                </div>
            </div>

            <!-- Funding Card -->
            <div class="col-md-4" data-animate="fade-up" data-delay="300">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4 text-center">
                        <div class="impact-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3" role="img" aria-label="Funding icon">
                            <i class="bi bi-currency-dollar text-success fs-3" aria-hidden="true"></i>
                        </div>
                        <h2 class="display-5 fw-bold mb-2">$<span id="fundingCount"><?= number_format($impact_data['funding'] ?? 90000) ?></span></h2>
                        <h4><?= __('impact_page.funding_raised') ?></h4>
                        <p class="text-secondary">$60,000 from Infobip, $10,000 from Cloudflare, $20,000 from Google for Startups</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Additional Impact Statistics -->
        <div class="row g-4 mt-5">
            <div class="col-12 text-center mb-4">
                <h3>Additional <span class="text-success">Impact</span> Statistics</h3>
                <div class="divider mx-auto mt-3 mb-4" style="width: 60px; height: 3px; background-color: #198754; border-radius: 2px;"></div>
            </div>
            
            <!-- Website Visitors -->
            <div class="col-md-4 col-lg-2" data-animate="fade-up">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-3 text-center">
                        <div class="impact-icon bg-success-soft p-2 rounded-3 d-inline-flex align-items-center justify-content-center mb-2" style="width: 40px; height: 40px;">
                            <i class="bi bi-globe text-success"></i>
                        </div>
                        <h3 class="fw-bold mb-0"><span id="visitorCount"><?= round(($impact_data['website_visitors'] ?? 2500000) / 1000000, 1) ?></span>M+</h3>
                        <p class="small text-secondary mb-0">Monthly Website Visitors</p>
                    </div>
                </div>
            </div>
            
            <!-- Page Views -->
            <div class="col-md-4 col-lg-2" data-animate="fade-up" data-delay="100">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-3 text-center">
                        <div class="impact-icon bg-success-soft p-2 rounded-3 d-inline-flex align-items-center justify-content-center mb-2" style="width: 40px; height: 40px;">
                            <i class="bi bi-eye text-success"></i>
                        </div>
                        <h3 class="fw-bold mb-0"><span id="pageViewCount"><?= round(($impact_data['page_views'] ?? 65000000) / 1000000) ?></span>M+</h3>
                        <p class="small text-secondary mb-0">Total Page Views</p>
                    </div>
                </div>
            </div>
            
            <!-- Products Added -->
            <div class="col-md-4 col-lg-2" data-animate="fade-up" data-delay="200">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-3 text-center">
                        <div class="impact-icon bg-success-soft p-2 rounded-3 d-inline-flex align-items-center justify-content-center mb-2" style="width: 40px; height: 40px;">
                            <i class="bi bi-box-seam text-success"></i>
                        </div>
                        <h3 class="fw-bold mb-0"><span id="productsCount"><?= round(($impact_data['products_added'] ?? 34000000) / 1000000) ?></span>M+</h3>
                        <p class="small text-secondary mb-0">Products Managed</p>
                    </div>
                </div>
            </div>
            
            <!-- Transactions -->
            <div class="col-md-4 col-lg-2" data-animate="fade-up" data-delay="300">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-3 text-center">
                        <div class="impact-icon bg-success-soft p-2 rounded-3 d-inline-flex align-items-center justify-content-center mb-2" style="width: 40px; height: 40px;">
                            <i class="bi bi-credit-card text-success"></i>
                        </div>
                        <?php 
                        $transactions = $impact_data['transactions'] ?? 2000000;
                        if ($transactions >= 1000000) {
                            $display_value = round($transactions / 1000000);
                            $unit = 'M+';
                        } else {
                            $display_value = round($transactions / 1000);
                            $unit = 'K+';
                        }
                        ?>
                        <h3 class="fw-bold mb-0"><span id="transactionsCount"><?= $display_value ?></span><?= $unit ?></h3>
                        <p class="small text-secondary mb-0">Transactions</p>
                    </div>
                </div>
            </div>
            
            <!-- Receipts Printed -->
            <div class="col-md-4 col-lg-2" data-animate="fade-up" data-delay="400">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-3 text-center">
                        <div class="impact-icon bg-success-soft p-2 rounded-3 d-inline-flex align-items-center justify-content-center mb-2" style="width: 40px; height: 40px;">
                            <i class="bi bi-receipt text-success"></i>
                        </div>
                        <h3 class="fw-bold mb-0"><span id="receiptsCount"><?= round(($impact_data['receipts_printed'] ?? 13000000) / 1000000) ?></span>M+</h3>
                        <p class="small text-secondary mb-0">Digital Receipts Generated</p>
                    </div>
                </div>
            </div>
            
            <!-- API Calls -->
            <div class="col-md-4 col-lg-2" data-animate="fade-up" data-delay="500">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-3 text-center">
                        <div class="impact-icon bg-success-soft p-2 rounded-3 d-inline-flex align-items-center justify-content-center mb-2" style="width: 40px; height: 40px;">
                            <i class="bi bi-code-slash text-success"></i>
                        </div>
                        <h3 class="fw-bold mb-0"><span id="apiCount"><?= round(($impact_data['api_calls'] ?? 120000000) / 1000000) ?></span>M+</h3>
                        <p class="small text-secondary mb-0">API Requests Processed</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mobile Apps & Integrations Row -->
        <div class="row g-4 mt-4">
            <!-- Mobile Apps -->
            <div class="col-md-6" data-animate="fade-up">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden; background: linear-gradient(135deg, #198754 0%, #157347 100%);">
                    <div class="card-body p-4 text-white">
                        <div class="d-flex align-items-center mb-3">
                            <div class="impact-icon bg-white bg-opacity-25 p-3 rounded-3 d-inline-flex align-items-center justify-content-center me-3">
                                <i class="bi bi-phone-fill text-white fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-0 text-white">Mobile Applications</h4>
                                <p class="mb-0 text-white-50">Available on Android & iOS</p>
                            </div>
                        </div>
                        <p class="text-white-50 mb-3">Access AppNomu SalesQ on the go with our mobile apps. Manage your business anywhere, anytime.</p>
                        <div class="d-flex gap-2">
                            <a href="https://play.google.com/store/apps/details?id=com.appnomu.salesq" class="btn btn-light btn-sm" target="_blank">
                                <i class="bi bi-google-play me-1"></i> Play Store
                            </a>
                            <a href="#" class="btn btn-outline-light btn-sm">
                                <i class="bi bi-apple me-1"></i> App Store
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Integrations -->
            <div class="col-md-6" data-animate="fade-up" data-delay="100">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="impact-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center me-3">
                                <i class="bi bi-plug-fill text-success fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-0">12+ Integrations</h4>
                                <p class="mb-0 text-muted">All your tools in one place</p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-light text-dark border">PayPal</span>
                            <span class="badge bg-light text-dark border">Stripe</span>
                            <span class="badge bg-light text-dark border">Flutterwave</span>
                            <span class="badge bg-light text-dark border">DPO Payments</span>
                            <span class="badge bg-light text-dark border">HubSpot</span>
                            <span class="badge bg-light text-dark border">Mailchimp</span>
                            <span class="badge bg-light text-dark border">Calendly</span>
                            <span class="badge bg-light text-dark border">Zoom</span>
                            <span class="badge bg-light text-dark border">ConvertKit</span>
                            <span class="badge bg-light text-dark border">Google Meet</span>
                            <span class="badge bg-light text-dark border">Slack</span>
                            <span class="badge bg-light text-dark border">Microsoft Teams</span>
                            <span class="badge bg-light text-dark border">Google Analytics</span>
                            <span class="badge bg-success text-white">+ More</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Impact Section -->
<section class="business-impact-section py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2><?= __('impact_page.business_impact_title') ?></h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
            <p class="lead mt-3 text-secondary"><?= __('impact_page.business_impact_subtitle') ?></p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-animate="fade-right">
                <div class="impact-charts-container position-relative mb-4 mb-lg-0">
                    <!-- Growth Chart -->
                    <div class="chart-card bg-white rounded-3 shadow p-4 mb-3">
                        <h5 class="text-success mb-3">AppNomu SalesQ Growth Journey</h5>
                        <div class="growth-chart position-relative" style="height: 120px;">
                            <div class="chart-bars d-flex align-items-end justify-content-between h-100">
                                <div class="bar bg-success-soft" style="height: 30%; width: 12%; border-radius: 4px 4px 0 0;" data-animate-bar="30"></div>
                                <div class="bar bg-success-soft" style="height: 45%; width: 12%; border-radius: 4px 4px 0 0;" data-animate-bar="45"></div>
                                <div class="bar bg-success-soft" style="height: 60%; width: 12%; border-radius: 4px 4px 0 0;" data-animate-bar="60"></div>
                                <div class="bar bg-success" style="height: 80%; width: 12%; border-radius: 4px 4px 0 0;" data-animate-bar="80"></div>
                                <div class="bar bg-success" style="height: 95%; width: 12%; border-radius: 4px 4px 0 0;" data-animate-bar="95"></div>
                                <div class="bar bg-success" style="height: 100%; width: 12%; border-radius: 4px 4px 0 0;" data-animate-bar="100"></div>
                            </div>
                            <div class="chart-labels d-flex justify-content-between mt-2">
                                <small class="text-muted">2019</small>
                                <small class="text-muted">2020</small>
                                <small class="text-muted">2021</small>
                                <small class="text-muted">2022</small>
                                <small class="text-muted">2023</small>
                                <small class="text-muted">2024</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Impact Metrics Visualization -->
                    <div class="chart-card bg-white rounded-3 shadow p-4">
                        <h5 class="text-success mb-3">Key Performance Indicators</h5>
                        <div class="impact-circles d-flex justify-content-around align-items-center">
                            <div class="circle-chart text-center">
                                <div class="circle bg-success-soft position-relative" style="width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <div class="circle-fill bg-success position-absolute" style="width: 60%; height: 60%; border-radius: 50%; animation: pulse 2s infinite;"></div>
                                    <span class="position-relative text-success fw-bold"><?= number_format(($impact_data['clients'] ?? 25000) / 1000) ?>K+</span>
                                </div>
                                <small class="text-muted mt-1 d-block">Clients</small>
                            </div>
                            <div class="circle-chart text-center">
                                <div class="circle bg-success-soft position-relative" style="width: 90px; height: 90px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <div class="circle-fill bg-success position-absolute" style="width: 70%; height: 70%; border-radius: 50%; animation: pulse 2s infinite 0.5s;"></div>
                                    <span class="position-relative text-success fw-bold"><?= round(($impact_data['messages'] ?? 20000000) / 1000000) ?>M+</span>
                                </div>
                                <small class="text-muted mt-1 d-block">Messages</small>
                            </div>
                            <div class="circle-chart text-center">
                                <div class="circle bg-success-soft position-relative" style="width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <div class="circle-fill bg-success position-absolute" style="width: 50%; height: 50%; border-radius: 50%; animation: pulse 2s infinite 1s;"></div>
                                    <span class="position-relative text-success fw-bold">$<?= number_format(($impact_data['funding'] ?? 90000) / 1000) ?>K</span>
                                </div>
                                <small class="text-muted mt-1 d-block">Funding</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Elements -->
                    <div class="position-absolute" style="top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(25,135,84,0.1); border-radius: 50%; z-index: -1;"></div>
                    <div class="position-absolute" style="bottom: -30px; left: -30px; width: 150px; height: 150px; background: rgba(25,135,84,0.05); border-radius: 50%; z-index: -1;"></div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="row g-4">
                    <!-- Team Growth -->
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                            <div class="card-body p-4">
                                <div class="impact-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                                    <i class="bi bi-person-plus-fill text-success fs-3"></i>
                                </div>
                                <h4><?= ($impact_data['team_members'] ?? 25) ?>+ <?= __('impact_page.team_members') ?></h4>
                                <p class="text-secondary"><?= __('impact_page.team_description') ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Airtime Sent -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                            <div class="card-body p-4">
                                <div class="impact-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                                    <i class="bi bi-phone-fill text-success fs-3"></i>
                                </div>
                                <?php 
                                $currency = get_country_content('pricing_currency', 'UGX');
                                $airtime_key = 'airtime_' . strtolower($currency);
                                $airtime_amount = $impact_data[$airtime_key] ?? $impact_data['airtime_ugx'] ?? 240000000;
                                ?>
                                <h4><?= $currency ?> <?= number_format($airtime_amount / 1000000) ?>M+ <?= __('impact_page.airtime_distributed') ?></h4>
                                <p class="text-secondary"><?= __('impact_page.airtime_description') ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Women Developers -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                            <div class="card-body p-4">
                                <div class="impact-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                                    <i class="bi bi-code-slash text-success fs-3"></i>
                                </div>
                                <h4><?= ($impact_data['women_developers'] ?? 30) ?>+ <?= __('impact_page.women_developers') ?></h4>
                                <p class="text-secondary"><?= __('impact_page.women_description') ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Future Impact -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                            <div class="card-body p-4">
                                <div class="impact-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                                    <i class="bi bi-graph-up-arrow text-success fs-3"></i>
                                </div>
                                <h4>Growing Impact</h4>
                                <p class="text-secondary">We're just getting started - more innovations and impact to come.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Environmental & Community Impact Section -->
<section class="environmental-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Environmental & Community <span class="text-success">Impact</span></h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
            <p class="lead mt-3 text-secondary">Our commitment extends beyond business to our environment and communities.</p>
        </div>
        
        <div class="row g-4 mb-5">
            <!-- Trees Planted -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-lg-4 text-center mb-3 mb-lg-0">
                                <div class="impact-icon-lg bg-success-soft p-4 rounded-circle d-inline-flex align-items-center justify-content-center">
                                    <i class="bi bi-tree-fill text-success" style="font-size: 3rem;"></i>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <h3 class="mb-2"><span id="treeCount">1,000</span>+ Trees Planted</h3>
                                <p class="text-secondary mb-0">Our reforestation initiative is helping combat climate change and restore Uganda's natural beauty.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Football Events -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-lg-4 text-center mb-3 mb-lg-0">
                                <div class="impact-icon-lg bg-success-soft p-4 rounded-circle d-inline-flex align-items-center justify-content-center">
                                    <i class="bi bi-trophy-fill text-success" style="font-size: 3rem;"></i>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <h3 class="mb-2">4 Football Events Celebrated</h3>
                                <p class="text-secondary mb-0">Supporting local sports and bringing communities together through football tournaments and celebrations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</section>

<!-- Awards & Recognition Section -->
<section class="awards-section py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Awards & <span class="text-success">Recognition</span></h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
            <p class="lead mt-3 text-secondary">Our commitment to excellence has been recognized by industry leaders.</p>
        </div>
        
        <div class="row g-4">
            <!-- Gartner Awards -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4 text-center">
                        <div class="impact-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-trophy-fill text-success fs-3"></i>
                        </div>
                        <h3 class="mb-2">10+ Awards</h3>
                        <p class="text-secondary">From Gartner platforms including Capterra, Getapp, and SoftwareAdvice</p>
                    </div>
                </div>
            </div>
            
            <!-- Software Reviews Awards -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4 text-center">
                        <div class="impact-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-award-fill text-success fs-3"></i>
                        </div>
                        <h3 class="mb-2">2 Awards</h3>
                        <p class="text-secondary">From Software Reviews for excellence in service and innovation</p>
                    </div>
                </div>
            </div>
            
            <!-- Software Suggest Awards -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4 text-center">
                        <div class="impact-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-star-fill text-success fs-3"></i>
                        </div>
                        <h3 class="mb-2">7+ Awards</h3>
                        <p class="text-secondary">From Software Suggest recognizing our platform's quality and impact</p>
                    </div>
                </div>
            </div>
            
            <!-- Fastest Growing Tech Startup -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4 text-center">
                        <div class="impact-icon bg-success-soft p-3 rounded-3 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="bi bi-graph-up text-success fs-3"></i>
                        </div>
                        <h3 class="mb-2">Fastest Growing</h3>
                        <p class="text-secondary">Tech Startup in Eastern Uganda, recognized for our rapid expansion</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Success Stories Section -->
<section class="success-stories-section py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Our Client <span class="text-success">Feedback</span></h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
            <p class="lead mt-3 text-secondary">Real businesses achieving real results with AppNomu SalesQ.</p>
        </div>
        
        <div class="row g-4">
            <!-- Success Story 1 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <h5 class="mb-0">Berean Hand</h5>
                            <p class="text-muted mb-0">Retail Business</p>
                        </div>
                        <p class="text-secondary">"AppNomu SalesQ transformed our inventory management and customer communication. We've seen a 40% increase in repeat business since implementing their SMS marketing tools."</p>
                    </div>
                </div>
            </div>
            
            <!-- Success Story 2 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <h5 class="mb-0">Meizon Radio</h5>
                            <p class="text-muted mb-0">Media & Broadcasting</p>
                        </div>
                        <p class="text-secondary">"The airtime distribution feature has been a game-changer for our field sales team. We've improved communication efficiency by 60% and reduced operational costs."</p>
                    </div>
                </div>
            </div>
            
            <!-- Success Story 3 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <h5 class="mb-0">Birungi Britah</h5>
                            <p class="text-muted mb-0">Fuse</p>
                        </div>
                        <p class="text-secondary">"I'd rate AppNomu SalesQ 8/10—simple, fair, and impressively feature-rich. Its pricing feels undervalued; I'd honestly price it higher. It's the first tool I've seen that goes far beyond stock management."</p>
                    </div>
                </div>
            </div>
            
            <!-- Success Story 4 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <h5 class="mb-0">Ssentamu Abel</h5>
                            <p class="text-muted mb-0">Software Developer at Kyuma</p>
                        </div>
                        <p class="text-secondary">"Overall, I give the AppNomu SalesQ 5/5 because of how all features were brought in a good view despite being many without affecting the user interface. The fact that the Email report is available is something that other tools do not offer."</p>
                    </div>
                </div>
            </div>
            
            <!-- Success Story 5 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <h5 class="mb-0">Ivan Masete</h5>
                            <p class="text-muted mb-0">Founder of Chamixtech</p>
                        </div>
                        <p class="text-secondary">"The SMS scheduling is something more important to me because I can schedule my SMS to be sent at a scheduled time which gives me extra time to do other things."</p>
                    </div>
                </div>
            </div>
            
            <!-- Success Story 6 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <h5 class="mb-0">Ivan Ssenuma</h5>
                            <p class="text-muted mb-0">Developer at EAVCA</p>
                        </div>
                        <p class="text-secondary">"This is a wonderful solution because it can automate things like sales receipt and the cost of SMS is relatively affordable but what is more is that they get delivered on time with detailed logging of SMS delivery reports."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Future Impact Section -->
<section class="future-impact-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Our <span class="text-success">Future</span> Impact</h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background-color: #198754; border-radius: 2px;"></div>
            <p class="lead mt-3 text-secondary">We're just getting started. Here's what's next on our impact journey.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="future-goals p-4 bg-light rounded-3 shadow-sm h-100">
                    <h4 class="mb-3">Our Goals for the Next 5 Years</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex">
                            <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                            <div>
                                <h5>100,000+ Businesses Served</h5>
                                <p class="text-secondary mb-0">Expanding our reach to more SMEs across East Africa.</p>
                            </div>
                        </li>
                        <li class="mb-3 d-flex">
                            <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                            <div>
                                <h5>10,000 Trees Planted</h5>
                                <p class="text-secondary mb-0">Scaling our environmental initiatives tenfold.</p>
                            </div>
                        </li>
                        <li class="mb-3 d-flex">
                            <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                            <div>
                                <h5>100+ Women in Tech</h5>
                                <p class="text-secondary mb-0">Expanding our support for women developers in Uganda.</p>
                            </div>
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                            <div>
                                <h5>Digital Literacy for 5,000+</h5>
                                <p class="text-secondary mb-0">New initiative to bring digital skills to underserved communities.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="join-us p-4 bg-success text-white rounded-3 shadow h-100">
                    <h4 class="mb-3 text-white">Join Us on This Journey</h4>
                    <p class="text-white">Every business that chooses AppNomu SalesQ becomes part of our impact story. Your success is our success, and together we can create positive change in our communities.</p>
                    <p class="text-white">Whether you're looking to grow your business, support environmental initiatives, or be part of Uganda's tech revolution, we invite you to join us.</p>
                    <div class="mt-4">
                        <a href="https://appnomu.com/landing/partners" class="btn btn-outline-light rounded-pill px-4 py-2 me-2 mb-2">Partner With Us</a>
                        <a href="<?= url('/demo') ?>" class="btn btn-outline-light rounded-pill px-4 py-2 mb-2">Request a Demo</a>
                    </div>
                    
                    <div class="row g-3 mt-4">
                        <!-- Card 1 -->
                        <div class="col-md-6">
                            <div class="card h-100 bg-success-subtle border-0 shadow-sm">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-briefcase-fill text-success me-2"></i>
                                        <h6 class="mb-0 text-success">Business Partners</h6>
                                    </div>
                                    <p class="card-text small mb-0 text-dark">Join our network of business partners and grow together with exclusive benefits.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 2 -->
                        <div class="col-md-6">
                            <div class="card h-100 bg-success-subtle border-0 shadow-sm">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-people-fill text-success me-2"></i>
                                        <h6 class="mb-0 text-success">Community Impact</h6>
                                    </div>
                                    <p class="card-text small mb-0 text-dark">Make a difference in your community through our shared social initiatives.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Thank You Section -->
<section class="thank-you-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                <h2 class="mb-4">Thank You for Being Part of Our Story</h2>
                <p class="lead mb-4 text-dark">None of this would be possible without our clients, partners, team members, and supporters. Because of you, we continue to grow and make a difference.</p>
                <a href="<?= url('/contact') ?>" class="btn btn-success btn-lg rounded-pill px-4 py-2">Get in Touch</a>
            </div>
        </div>
    </div>
</section>

<!-- Lightweight Animation Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Lightweight animation system
        const animateElements = document.querySelectorAll('[data-animate]');
        
        // Simple fade-up animation using CSS transitions
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const delay = entry.target.getAttribute('data-delay') || 0;
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, delay);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        // Initialize elements with animation styles
        animateElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
        
        // Simple number animation for statistics
        const animateNumber = (element, target, duration = 2000) => {
            const start = 0;
            const increment = target / (duration / 16);
            let current = start;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current).toLocaleString();
            }, 16);
        };
        
        // Animate numbers when they come into view
        const numberObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const targetValue = parseInt(element.textContent.replace(/[^0-9]/g, ''));
                    if (targetValue > 0) {
                        animateNumber(element, targetValue);
                    }
                    numberObserver.unobserve(element);
                }
            });
        }, { threshold: 0.5 });
        
        // Observe number elements
        document.querySelectorAll('#clientCount, #messageCount, #fundingCount, #treeCount, #visitorCount, #pageViewCount, #productsCount, #transactionsCount, #receiptsCount, #apiCount').forEach(el => {
            if (el) numberObserver.observe(el);
        });
        
        // Animate chart bars
        const chartObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bars = entry.target.querySelectorAll('[data-animate-bar]');
                    bars.forEach((bar, index) => {
                        setTimeout(() => {
                            const targetHeight = bar.getAttribute('data-animate-bar') + '%';
                            bar.style.transition = 'height 0.8s ease-in-out';
                            bar.style.height = targetHeight;
                        }, index * 200);
                    });
                    chartObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });
        
        // Observe chart containers
        document.querySelectorAll('.growth-chart').forEach(chart => {
            // Reset bar heights for animation
            chart.querySelectorAll('[data-animate-bar]').forEach(bar => {
                bar.style.height = '0%';
            });
            chartObserver.observe(chart);
        });
    });
</script>

<!-- Custom Styles -->
<style>
    /* Background color for success-soft */
    .bg-success-soft {
        background-color: rgba(25, 135, 84, 0.1);
    }
    
    /* Card hover effects */
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    }
    
    /* Impact icon styling */
    .impact-icon {
        width: 60px;
        height: 60px;
    }
    
    .impact-icon-lg {
        width: 100px;
        height: 100px;
    }
    
    /* Gallery item styling */
    .gallery-item {
        transition: transform 0.3s ease;
        height: 200px;
        overflow: hidden;
    }
    
    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .gallery-item:hover img {
        transform: scale(1.05);
    }
    
    /* Chart specific styles */
    .chart-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .chart-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
    }
    
    .bar {
        transition: height 0.8s ease-in-out, background-color 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .bar::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.3) 50%, transparent 70%);
        transform: translateX(-100%);
        animation: shimmer 2s infinite;
    }
    
    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }
    
    .circle-chart .circle {
        transition: transform 0.3s ease;
    }
    
    .circle-chart:hover .circle {
        transform: scale(1.1);
    }
    
    .impact-circles {
        gap: 1rem;
    }
    
    @media (max-width: 768px) {
        .impact-circles {
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .chart-card {
            margin-bottom: 1rem;
        }
    }
    
    /* Pulse animation for circles */
    @keyframes pulse {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        50% {
            transform: scale(1.05);
            opacity: 0.8;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }
    
    .display-5 {
        animation: pulse 2s infinite;
    }
</style>

<?php
// Get page content from output buffer
$content = ob_get_clean();

// Load layout with current page content
require_once __DIR__ . '/includes/layout.php';
?>
