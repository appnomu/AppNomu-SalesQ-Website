<?php
/**
 * RSS Sitemap Generator for AppNomu SalesQ
 * Provides a directory of all available RSS feeds
 */

// Load configuration
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/country_content.php';

// Set base URL for RSS feeds
$base_url = rtrim(BASE_URL, '/');

$current_page = 'rss-sitemap';
$page_title = 'RSS Feeds Directory | AppNomu SalesQ Blog';
$page_description = 'Subscribe to AppNomu SalesQ RSS feeds for the latest business growth tips, SMS marketing insights, and CRM strategies tailored for African entrepreneurs.';
$page_keywords = 'RSS feeds, AppNomu SalesQ blog, business tips RSS, SMS marketing RSS, CRM insights RSS, African business RSS, Uganda business RSS, Kenya business RSS, Nigeria business RSS';

// Additional CSS for this page
$additional_css = [
    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css',
    '/assets/css/legal-pages-modern.css'
];

ob_start();
?>

<!-- RSS Sitemap Header -->
<header class="page-header py-5" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); color: #333;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10 mx-auto text-center">
                <div class="mb-4">
                    <div class="rss-icon-container d-inline-flex align-items-center justify-content-center rounded-circle bg-success bg-opacity-10 p-4 mb-3">
                        <i class="bi bi-rss text-success" style="font-size: 3rem;"></i>
                    </div>
                </div>
                <h1 class="display-4 fw-bold mb-3">RSS Feeds Directory</h1>
                <p class="lead mb-3" style="font-size: 1.3rem;">Stay updated with the latest business insights from AppNomu SalesQ</p>
                <p class="mb-4 text-muted">Choose from our global or country-specific RSS feeds and never miss important business tips</p>
                
                <!-- Quick Stats -->
                <div class="row g-3 mt-4">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="bi bi-globe2 me-2" style="font-size: 1.5rem;"></i>
                            <div class="text-start">
                                <div class="fw-bold">6 Countries</div>
                                <small class="text-muted">Localized Content</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="bi bi-translate me-2" style="font-size: 1.5rem;"></i>
                            <div class="text-start">
                                <div class="fw-bold">3 Languages</div>
                                <small class="text-muted">Multi-language Support</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="bi bi-clock me-2" style="font-size: 1.5rem;"></i>
                            <div class="text-start">
                                <div class="fw-bold">Daily Updates</div>
                                <small class="text-muted">Fresh Content</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                
                <!-- How RSS Subscription Works -->
                <div class="mb-5">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="p-4 bg-light rounded-3 shadow-sm h-100">
                                <h3 class="text-success mb-3"><i class="bi bi-info-circle me-2"></i>What is RSS?</h3>
                                <p class="mb-3">RSS (Really Simple Syndication) allows you to stay updated with our latest blog posts automatically. When you subscribe to our RSS feed, you'll receive notifications whenever we publish new content about business growth, SMS marketing, CRM strategies, and more.</p>
                                <div class="row g-2">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>Automatic updates when we publish</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>No email address required</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                                            <span>Works with any RSS reader app</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-4 bg-success bg-opacity-10 rounded-3 shadow-sm h-100 border border-success border-opacity-25">
                                <h3 class="text-success mb-3"><i class="bi bi-gear me-2"></i>How RSS Subscription Works</h3>
                                <div class="subscription-steps">
                                    <div class="step-item d-flex align-items-start mb-3">
                                        <div class="step-number bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 30px; height: 30px; font-size: 0.9rem; font-weight: bold;">1</div>
                                        <div>
                                            <strong>Copy RSS URL</strong>
                                            <p class="mb-0 text-muted small">Click the copy button next to any RSS feed URL below</p>
                                        </div>
                                    </div>
                                    <div class="step-item d-flex align-items-start mb-3">
                                        <div class="step-number bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 30px; height: 30px; font-size: 0.9rem; font-weight: bold;">2</div>
                                        <div>
                                            <strong>Open RSS Reader</strong>
                                            <p class="mb-0 text-muted small">Use Feedly, Flipboard, or any RSS reader app</p>
                                        </div>
                                    </div>
                                    <div class="step-item d-flex align-items-start mb-3">
                                        <div class="step-number bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 30px; height: 30px; font-size: 0.9rem; font-weight: bold;">3</div>
                                        <div>
                                            <strong>Add Feed</strong>
                                            <p class="mb-0 text-muted small">Paste the URL in your RSS reader's "Add Feed" section</p>
                                        </div>
                                    </div>
                                    <div class="step-item d-flex align-items-start">
                                        <div class="step-number bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 30px; height: 30px; font-size: 0.9rem; font-weight: bold;">4</div>
                                        <div>
                                            <strong>Get Updates</strong>
                                            <p class="mb-0 text-muted small">Receive automatic notifications when we publish new content</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Global RSS Feed -->
                <div class="mb-4 p-4 bg-white rounded-3 shadow-sm border-start border-success border-3">
                    <h3 class="text-success mb-3"><i class="bi bi-globe me-2"></i>Global RSS Feed</h3>
                    <p class="mb-3">Our main RSS feed covering business insights for entrepreneurs across Africa and beyond.</p>
                    
                    <div class="row g-3 align-items-center">
                        <div class="col-md-8">
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-rss"></i></span>
                                <input type="text" class="form-control" value="<?= url('rss.php') ?>" readonly id="global-rss-url">
                                <button class="btn btn-outline-success" type="button" onclick="copyToClipboard('global-rss-url')">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="<?= url('rss.php') ?>" class="btn btn-success w-100" target="_blank">
                                <i class="bi bi-rss me-1"></i> Subscribe
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Country-Specific RSS Feeds -->
                <div class="mb-5">
                    <h3 class="text-success mb-4"><i class="bi bi-flag me-2"></i>Country-Specific RSS Feeds</h3>
                    <p class="text-muted mb-4">Get localized content tailored to your country's business environment, currency, and language preferences.</p>
                    
                    <div class="row g-4">
                        
                        <!-- Kenya Feed -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card h-100 border-0 shadow-sm hover-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="country-flag-circle bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                            <span class="flag-emoji" style="font-size: 1.5rem;">🇰🇪</span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-1">Kenya</h5>
                                            <span class="badge bg-success">Swahili + English</span>
                                        </div>
                                    </div>
                                    <p class="card-text text-muted mb-3">Business insights for Kenyan entrepreneurs with M-Pesa integration, KES pricing, and Swahili translations.</p>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control form-control-sm bg-light" value="<?php echo $base_url; ?>/rss-country.php?country=KE" readonly>
                                        <button class="btn btn-success btn-sm copy-btn" type="button" data-url="<?php echo $base_url; ?>/rss-country.php?country=KE" title="Copy RSS URL">
                                            <i class="bi bi-clipboard"></i>
                                        </button>
                                    </div>
                                    <small class="text-muted"><i class="bi bi-people me-1"></i>Perfect for East African markets</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Nigeria Feed -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card h-100 border-0 shadow-sm hover-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="country-flag-circle bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                            <span class="flag-emoji" style="font-size: 1.5rem;">🇳🇬</span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-1">Nigeria</h5>
                                            <span class="badge bg-primary">English</span>
                                        </div>
                                    </div>
                                    <p class="card-text text-muted mb-3">Content focused on Nigerian business landscape, Naira pricing, Paystack integration, and West African markets.</p>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control form-control-sm bg-light" value="<?php echo $base_url; ?>/rss-country.php?country=NG" readonly>
                                        <button class="btn btn-success btn-sm copy-btn" type="button" data-url="<?php echo $base_url; ?>/rss-country.php?country=NG" title="Copy RSS URL">
                                            <i class="bi bi-clipboard"></i>
                                        </button>
                                    </div>
                                    <small class="text-muted"><i class="bi bi-graph-up me-1"></i>Largest African economy focus</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- South Africa Feed -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card h-100 border-0 shadow-sm hover-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="country-flag-circle bg-warning bg-opacity-10 rounded-circle p-2 me-3">
                                            <span class="flag-emoji" style="font-size: 1.5rem;">🇿🇦</span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-1">South Africa</h5>
                                            <span class="badge bg-warning text-dark">English</span>
                                        </div>
                                    </div>
                                    <p class="card-text text-muted mb-3">Business strategies for South African market with Rand pricing, PayFast integration, and local regulations.</p>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control form-control-sm bg-light" value="<?php echo $base_url; ?>/rss-country.php?country=ZA" readonly>
                                        <button class="btn btn-success btn-sm copy-btn" type="button" data-url="<?php echo $base_url; ?>/rss-country.php?country=ZA" title="Copy RSS URL">
                                            <i class="bi bi-clipboard"></i>
                                        </button>
                                    </div>
                                    <small class="text-muted"><i class="bi bi-building me-1"></i>Advanced business infrastructure</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Tanzania Feed -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card h-100 border-0 shadow-sm hover-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="country-flag-circle bg-info bg-opacity-10 rounded-circle p-2 me-3">
                                            <span class="flag-emoji" style="font-size: 1.5rem;">🇹🇿</span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-1">Tanzania</h5>
                                            <span class="badge bg-info">Swahili + English</span>
                                        </div>
                                    </div>
                                    <p class="card-text text-muted mb-3">Tanzanian business content with Swahili translations, TZS pricing, and East African market focus.</p>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control form-control-sm bg-light" value="<?php echo $base_url; ?>/rss-country.php?country=TZ" readonly>
                                        <button class="btn btn-success btn-sm copy-btn" type="button" data-url="<?php echo $base_url; ?>/rss-country.php?country=TZ" title="Copy RSS URL">
                                            <i class="bi bi-clipboard"></i>
                                        </button>
                                    </div>
                                    <small class="text-muted"><i class="bi bi-geo me-1"></i>East African trade hub</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Rwanda Feed -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card h-100 border-0 shadow-sm hover-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="country-flag-circle bg-secondary bg-opacity-10 rounded-circle p-2 me-3">
                                            <span class="flag-emoji" style="font-size: 1.5rem;">🇷🇼</span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-1">Rwanda</h5>
                                            <span class="badge bg-secondary">Kinyarwanda + English</span>
                                        </div>
                                    </div>
                                    <p class="card-text text-muted mb-3">Rwanda-focused business insights with Kinyarwanda translations, RWF pricing, and innovation ecosystem content.</p>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control form-control-sm bg-light" value="<?php echo $base_url; ?>/rss-country.php?country=RW" readonly>
                                        <button class="btn btn-success btn-sm copy-btn" type="button" data-url="<?php echo $base_url; ?>/rss-country.php?country=RW" title="Copy RSS URL">
                                            <i class="bi bi-clipboard"></i>
                                        </button>
                                    </div>
                                    <small class="text-muted"><i class="bi bi-lightbulb me-1"></i>Innovation and tech hub</small>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- Popular RSS Readers -->
                <div class="mb-5">
                    <div class="row g-4">
                        <div class="col-lg-8">
                            <div class="p-4 bg-light rounded-3 shadow-sm h-100">
                                <h3 class="text-success mb-3"><i class="bi bi-app-indicator me-2"></i>Popular RSS Readers</h3>
                                <p class="mb-4">Use these popular RSS readers to subscribe to our feeds and manage all your content in one place:</p>
                                
                                <div class="row g-3">
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex align-items-center p-3 bg-white rounded border">
                                            <i class="bi bi-bookmark-star text-success me-3" style="font-size: 1.5rem;"></i>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Feedly</h6>
                                                <small class="text-muted">Most popular RSS reader</small>
                                            </div>
                                            <a href="https://feedly.com" target="_blank" class="btn btn-sm btn-outline-success">Visit</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex align-items-center p-3 bg-white rounded border">
                                            <i class="bi bi-grid-3x3-gap text-primary me-3" style="font-size: 1.5rem;"></i>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Flipboard</h6>
                                                <small class="text-muted">Magazine-style reader</small>
                                            </div>
                                            <a href="https://flipboard.com" target="_blank" class="btn btn-sm btn-outline-success">Visit</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex align-items-center p-3 bg-white rounded border">
                                            <i class="bi bi-newspaper text-info me-3" style="font-size: 1.5rem;"></i>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Inoreader</h6>
                                                <small class="text-muted">Advanced features</small>
                                            </div>
                                            <a href="https://www.inoreader.com" target="_blank" class="btn btn-sm btn-outline-success">Visit</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex align-items-center p-3 bg-white rounded border">
                                            <i class="bi bi-rss text-warning me-3" style="font-size: 1.5rem;"></i>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">NewsBlur</h6>
                                                <small class="text-muted">Social features</small>
                                            </div>
                                            <a href="https://newsblur.com" target="_blank" class="btn btn-sm btn-outline-success">Visit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="p-4 bg-success bg-opacity-10 rounded-3 shadow-sm h-100 border border-success border-opacity-25">
                                <h4 class="text-success mb-3"><i class="bi bi-question-circle me-2"></i>Need Help?</h4>
                                <div class="mb-3">
                                    <h6 class="mb-2">Quick Setup Guide:</h6>
                                    <ol class="small text-muted mb-3">
                                        <li>Choose an RSS reader above</li>
                                        <li>Create a free account</li>
                                        <li>Copy any RSS URL from this page</li>
                                        <li>Add it to your reader</li>
                                        <li>Start receiving updates!</li>
                                    </ol>
                                </div>
                                <div class="mb-3">
                                    <h6 class="mb-2">Benefits:</h6>
                                    <ul class="small text-muted list-unstyled">
                                        <li><i class="bi bi-check text-success me-1"></i> No spam emails</li>
                                        <li><i class="bi bi-check text-success me-1"></i> Read offline</li>
                                        <li><i class="bi bi-check text-success me-1"></i> Organize by topics</li>
                                        <li><i class="bi bi-check text-success me-1"></i> Never miss updates</li>
                                    </ul>
                                </div>
                                <a href="<?= url('contact') ?>" class="btn btn-success btn-sm w-100">
                                    <i class="bi bi-envelope me-1"></i> Contact Support
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feed Information -->
                <div class="alert alert-info border-0 shadow-sm">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-info-circle text-info me-3" style="font-size: 1.5rem;"></i>
                        <div>
                            <h6 class="mb-1">Feed Update Information</h6>
                            <p class="mb-0">Our RSS feeds are updated automatically whenever we publish new content. Feeds are cached for 60 minutes to ensure optimal performance.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Copy to clipboard functionality with enhanced feedback
    document.querySelectorAll('.copy-btn').forEach(button => {
        button.addEventListener('click', function() {
            const url = this.getAttribute('data-url');
            navigator.clipboard.writeText(url).then(() => {
                // Show success feedback
                const originalIcon = this.innerHTML;
                const originalClasses = this.className;
                
                this.innerHTML = '<i class="bi bi-check"></i>';
                this.classList.remove('btn-outline-success');
                this.classList.add('btn-success');
                this.setAttribute('title', 'Copied!');
                
                // Show toast notification
                showToast('RSS URL copied to clipboard!', 'success');
                
                setTimeout(() => {
                    this.innerHTML = originalIcon;
                    this.className = originalClasses;
                    this.setAttribute('title', 'Copy RSS URL');
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy: ', err);
                showToast('Failed to copy URL. Please try again.', 'error');
            });
        });
    });

    // Toast notification system
    function showToast(message, type = 'success') {
        // Remove existing toasts
        const existingToasts = document.querySelectorAll('.custom-toast');
        existingToasts.forEach(toast => toast.remove());
        
        const toast = document.createElement('div');
        toast.className = `custom-toast alert alert-${type === 'success' ? 'success' : 'danger'} position-fixed`;
        toast.style.cssText = `
            top: 20px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            border: none;
            animation: slideInRight 0.3s ease-out;
        `;
        
        toast.innerHTML = `
            <div class="d-flex align-items-center">
                <i class="bi bi-${type === 'success' ? 'check-circle-fill' : 'exclamation-triangle-fill'} me-2"></i>
                <span>${message}</span>
                <button type="button" class="btn-close ms-auto" onclick="this.parentElement.parentElement.remove()"></button>
            </div>
        `;
        
        document.body.appendChild(toast);
        
        // Auto remove after 4 seconds
        setTimeout(() => {
            if (toast.parentElement) {
                toast.style.animation = 'slideOutRight 0.3s ease-in';
                setTimeout(() => toast.remove(), 300);
            }
        }, 4000);
    }

    // Add CSS animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideInRight {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes slideOutRight {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(100%); opacity: 0; }
        }
        .hover-card {
            transition: all 0.3s ease;
        }
        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
        }
        .country-flag-circle {
            transition: all 0.3s ease;
        }
        .hover-card:hover .country-flag-circle {
            transform: scale(1.1);
        }
    `;
    document.head.appendChild(style);
});
</script>

<?php
$content = ob_get_clean();
include 'includes/layout.php';
?>
