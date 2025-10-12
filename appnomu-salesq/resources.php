<?php
// Load configuration
require_once __DIR__ . '/config.php';

// Set the current page for navigation highlighting
$current_page = 'resources';
$page_title = 'Resources & Blog | AppNomu SalesQ - Business Growth Insights';
$page_description = 'Discover expert insights, SMS marketing strategies, and business growth tips for African entrepreneurs. Learn how to maximize your CRM and SMS campaigns with AppNomu SalesQ.';
$page_keywords = 'business resources Uganda, SMS marketing tips, CRM best practices, African business insights, AppNomu SalesQ blog, business growth strategies, SMS templates Uganda, retail marketing Africa';

// Additional CSS files for resources page styling
$additional_css = [
    asset('css/legal-pages-modern.css')
];

// Custom CSS for resources page
$custom_css = '
<style>
    .resources-hero {
        background: linear-gradient(135deg, #f8f9fa 0%, #e3f2fd 50%, #ffffff 100%);
        color: #333;
        padding: 80px 0 60px;
    }
    
    .blog-card {
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        height: 100%;
    }
    
    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    }
    
    .blog-card .card-img-top {
        height: 200px;
        object-fit: cover;
        background: linear-gradient(45deg, #f8f9fa, #e9ecef);
    }
    
    .blog-meta {
        font-size: 0.875rem;
        color: #6c757d;
    }
    
    .blog-category {
        background: #198754;
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 1rem;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .read-time {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
    }
    
    .resources-stats {
        background: rgba(255,255,255,0.8);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(0,0,0,0.1);
        border-radius: 15px;
        padding: 2rem;
        margin-top: 2rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    
    .stat-item {
        text-align: center;
    }
    
    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: #198754;
        display: block;
    }
    
    .stat-label {
        color: #6c757d;
        font-size: 0.9rem;
        margin-top: 0.5rem;
    }
    
    .search-box {
        position: relative;
        max-width: 500px;
        margin: 0 auto 3rem;
    }
    
    .search-box input {
        padding-left: 3rem;
        border-radius: 50px;
        border: 2px solid #e9ecef;
        transition: all 0.3s ease;
    }
    
    .search-box input:focus {
        border-color: #198754;
        box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.25);
    }
    
    .search-box .search-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
    }
    
    .filter-tabs {
        border-bottom: 2px solid #e9ecef;
        margin-bottom: 2rem;
    }
    
    .filter-tabs .nav-link {
        border: none;
        color: #6c757d;
        font-weight: 600;
        padding: 1rem 1.5rem;
        border-radius: 0;
        position: relative;
    }
    
    .filter-tabs .nav-link.active {
        color: #198754;
        background: none;
        border-bottom: 3px solid #198754;
    }
    
    .filter-tabs .nav-link:hover {
        color: #198754;
        background: rgba(25, 135, 84, 0.05);
    }
</style>';

// Blog posts data
$blog_posts = [
    [
        'title' => 'AppNomu SalesQ Industry Use Cases: Transforming Business Communication Across Africa & USA',
        'description' => 'Discover how AppNomu SalesQ revolutionizes business operations across Education, Agriculture, Retail, Healthcare, and NGO sectors with comprehensive communication and management solutions.',
        'url' => 'b/appnomu-salesq-industry-use-cases-africa-usa',
        'category' => 'Industry Solutions',
        'date' => 'October 12, 2024',
        'read_time' => '30 min read',
        'image' => 'https://appnomu.com/landing/assets/images/Feature-Image-1.png',
        'fallback_image' => 'https://placehold.co/400x200/e9ecef/198754?text=Industry+Use+Cases&font=Lexend'
    ],
    [
        'title' => 'Why Online Payment Aggregators Need Mobile Payment Processing for African Business Penetration',
        'description' => 'How payment aggregators are transforming African commerce through seamless mobile payment integration and simplified business solutions.',
        'url' => 'b/why-online-payment-aggregators-need-mobile-payment-processing-africa',
        'category' => 'Payments',
        'date' => 'September 10, 2025',
        'read_time' => '8 min read',
        'image' => 'https://corporate.visa.com/dam/VCOM/corporate/visa-perspectives/innovation/images/tap-to-pay-inline-1-800x450.jpg',
        'fallback_image' => 'https://placehold.co/400x200/e9ecef/198754?text=Payment+Processing+in+Africa&font=Lexend'
    ],
    [
        'title' => '5 Effective SMS Templates for Ugandan Retail Businesses',
        'description' => 'Boost your conversions with these proven SMS templates customized for the Ugandan retail market. Ready-to-use templates for sales, promotions, and customer retention.',
        'url' => 'b/5-effective-sms-templates-for-ugandan-retail-businesses',
        'category' => 'SMS Marketing',
        'date' => 'September 8, 2025',
        'read_time' => '6 min read',
        'image' => 'https://appnomu.com/landing/assets/images/111SMS-templates-header-UPDATE.webp',
        'fallback_image' => 'https://placehold.co/400x200/e9ecef/198754?text=SMS+Templates+Uganda&font=Lexend'
    ],
    [
        'title' => 'How to Build an Effective SMS Campaign in Uganda',
        'description' => 'Master SMS marketing in Uganda with our comprehensive guide. Learn targeting strategies, compliance requirements, and optimization techniques for maximum ROI.',
        'url' => 'b/how-to-build-an-effective-sms-campaign-in-uganda',
        'category' => 'SMS Marketing',
        'date' => 'October 12, 2024',
        'read_time' => '8 min read',
        'image' => 'https://appnomu.com/landing/assets/images/sms_marketing_campaigns.webp',
        'fallback_image' => 'https://placehold.co/400x200/e9ecef/198754?text=SMS+Campaign+Uganda&font=Lexend'
    ],
    [
        'title' => 'SMS vs WhatsApp Marketing: What Works Best in Uganda',
        'description' => 'Compare SMS and WhatsApp marketing effectiveness in Uganda. Discover which channel delivers better ROI for your business and when to use each platform.',
        'url' => 'b/sms-vs-whatsapp-marketing-what-works-best-in-uganda',
        'category' => 'Marketing Strategy',
        'date' => 'September 3, 2025',
        'read_time' => '5 min read',
        'image' => 'https://appnomu.com/landing/assets/images/1212%20SMS%20VS%20WHATSAPP.webp',
        'fallback_image' => 'https://placehold.co/400x200/e9ecef/198754?text=SMS+vs+WhatsApp+Uganda&font=Lexend'
    ],
    [
        'title' => 'The Role of AI in the African Business Sector',
        'description' => 'Discover how artificial intelligence is transforming African businesses and driving growth across the continent. Learn about AI applications and opportunities.',
        'url' => 'b/the-role-of-ai-in-african-business-sector',
        'category' => 'Technology',
        'date' => 'September 1, 2025',
        'read_time' => '9 min read',
        'image' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
        'fallback_image' => 'https://placehold.co/400x200/e9ecef/198754?text=AI+in+African+Business&font=Lexend'
    ],
    [
        'title' => 'Why SMS Marketing is Not Dead in Uganda',
        'description' => 'Explore why SMS marketing remains a powerful tool for Ugandan businesses. Learn about high open rates, mobile penetration, and effective SMS strategies.',
        'url' => 'b/why-sms-marketing-is-not-dead-in-uganda',
        'category' => 'SMS Marketing',
        'date' => 'August 28, 2025',
        'read_time' => '4 min read',
        'image' => 'https://appnomu.com/landing/assets/images/111SMS_Marketing.webp',
        'fallback_image' => 'https://placehold.co/400x200/e9ecef/198754?text=SMS+Marketing+Uganda&font=Lexend'
    ],
    [
        'title' => 'Best Email, SMS & WhatsApp Marketing Practices for ROI in Uganda',
        'description' => 'Master multi-channel marketing in Uganda with proven strategies for email, SMS, and WhatsApp campaigns. Learn how to achieve 3x higher engagement and 250% better ROI.',
        'url' => 'b/best-email-sms-whatsapp-marketing-practices-roi-uganda',
        'category' => 'Marketing Strategy',
        'date' => 'August 25, 2025',
        'read_time' => '10 min read',
        'image' => 'https://appnomu.com/landing/assets/images/Email_WhatsApp_SMS_AppNomu.jpg',
        'fallback_image' => 'https://placehold.co/400x200/e9ecef/198754?text=Multi-Channel+Marketing+Uganda&font=Lexend'
    ],
    [
        'title' => 'Local Strategies to Improve Your Business and Attract More Online Leads',
        'description' => 'Transform your local business with proven digital strategies and comprehensive management tools. Discover how AppNomu SalesQ helps African and American businesses streamline operations and maximize revenue.',
        'url' => 'b/local-strategies-improve-business-attract-online-leads',
        'category' => 'Business Growth',
        'date' => 'August 20, 2025',
        'read_time' => '15 min read',
        'image' => 'https://appnomu.com/landing/assets/images/local-marketing-strategies-1.png',
        'fallback_image' => 'https://placehold.co/400x200/e9ecef/198754?text=Local+Business+Growth&font=Lexend'
    ],
    [
        'title' => 'Why Timely Stocking is Essential for Business Success During Festival Season in Uganda',
        'description' => 'Master inventory management for Uganda\'s festival seasons. Learn strategic stocking, demand forecasting, and supply chain optimization to maximize profits during peak periods.',
        'url' => 'b/why-timely-stocking-essential-business-festival-season-uganda',
        'category' => 'Inventory Management',
        'date' => 'August 15, 2025',
        'read_time' => '12 min read',
        'image' => 'https://appnomu.com/landing/assets/images/Festival_Season_Stocking_Uganda.jpg',
        'fallback_image' => 'https://placehold.co/400x200/e9ecef/198754?text=Festival+Season+Stocking&font=Lexend'
    ]
];

// Get unique categories
$categories = array_unique(array_column($blog_posts, 'category'));
sort($categories);

// Start output buffering
ob_start();
?>

<!-- Resources Hero Section -->
<section class="resources-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-3 text-dark">Resources & Insights</h1>
                <p class="lead mb-4 text-secondary">Expert insights, practical guides, and proven strategies to grow your African business with SMS marketing, CRM, and digital tools.</p>
                
                <!-- Resources Stats -->
                <div class="resources-stats">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="stat-item">
                                <span class="stat-number">100+</span>
                                <div class="stat-label">Expert Articles</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stat-item">
                                <span class="stat-number">25K+</span>
                                <div class="stat-label">Businesses Helped</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stat-item">
                                <span class="stat-number">65%</span>
                                <div class="stat-label">Average Growth</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stat-item">
                                <span class="stat-number">100K+</span>
                                <div class="stat-label">Monthly Readers</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Blog Posts Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold mb-3 text-dark">Featured Blog Posts</h2>
                <p class="lead mb-4 text-secondary">Discover expert insights and practical guides to grow your African business with SMS marketing, CRM, and digital tools.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://appnomu.com/landing/assets/images/local-marketing-strategies-1.png" class="card-img-top" alt="Local Business Growth Strategies" style="height: 200px; object-fit: cover;" onerror="this.src='https://placehold.co/600x400/198754/ffffff?text=Local+Business+Growth&font=Lexend'">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Local Strategies to Improve Your Business and Attract More Online Leads</h5>
                        <p class="card-text text-muted flex-grow-1">Transform your local business with proven digital strategies and comprehensive management tools. Discover how AppNomu SalesQ helps African and American businesses streamline operations and maximize revenue.</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <small class="text-muted">Sep 2025</small>
                            <a href="<?= url('b/local-strategies-improve-business-attract-online-leads') ?>" class="btn btn-outline-success btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://appnomu.com/landing/assets/images/Back-In-Stock-AppNomu%20SalesQ.png" class="card-img-top" alt="Festival Season Inventory Management" style="height: 200px; object-fit: cover;" onerror="this.src='https://placehold.co/600x400/198754/ffffff?text=Festival+Season+Inventory&font=Lexend'">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Why Timely Stocking is Essential for Your Business During Festival Season in Uganda</h5>
                        <p class="card-text text-muted flex-grow-1">Learn how automated stock alerts via SMS, WhatsApp, and email can help your business capitalize on Uganda's lucrative festival season and avoid costly stockouts.</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <small class="text-muted">Sep 12, 2025</small>
                            <a href="<?= url('b/why-timely-stocking-essential-business-festival-season-uganda') ?>" class="btn btn-outline-success btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Resources Content -->
<section class="py-5">
    <div class="container">
        <!-- Search Box -->
        <div class="search-box">
            <div class="position-relative">
                <i class="bi bi-search search-icon"></i>
                <input type="text" class="form-control form-control-lg" placeholder="Search articles, guides, and resources..." id="searchInput">
            </div>
        </div>
        
        <!-- Filter Tabs -->
        <ul class="nav nav-tabs filter-tabs justify-content-center" id="categoryTabs">
            <li class="nav-item">
                <a class="nav-link active" href="#" data-category="all">All Resources</a>
            </li>
            <?php foreach ($categories as $category): ?>
            <li class="nav-item">
                <a class="nav-link" href="#" data-category="<?= strtolower(str_replace(' ', '-', $category)) ?>"><?= $category ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        
        <!-- Blog Grid -->
        <div class="row g-4" id="blogGrid">
            <?php foreach ($blog_posts as $post): ?>
            <div class="col-lg-4 col-md-6 blog-item" data-category="<?= strtolower(str_replace(' ', '-', $post['category'])) ?>" data-title="<?= strtolower($post['title']) ?>" data-description="<?= strtolower($post['description']) ?>">
                <article class="card blog-card h-100">
                    <img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>" class="card-img-top" loading="lazy" onerror="this.src='<?= $post['fallback_image'] ?>'">
                    
                    <div class="card-body d-flex flex-column">
                        <div class="mb-3">
                            <span class="blog-category"><?= $post['category'] ?></span>
                        </div>
                        
                        <h3 class="card-title h5 mb-3">
                            <a href="<?= $post['url'] ?>" class="text-decoration-none text-dark stretched-link"><?= $post['title'] ?></a>
                        </h3>
                        
                        <p class="card-text text-muted mb-3 flex-grow-1"><?= $post['description'] ?></p>
                        
                        <div class="blog-meta d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="bi bi-calendar-event me-1"></i>
                                <?= $post['date'] ?>
                            </small>
                            <small class="text-muted read-time">
                                <i class="bi bi-clock"></i>
                                <?= $post['read_time'] ?>
                            </small>
                        </div>
                    </div>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- No Results Message -->
        <div id="noResults" class="text-center py-5" style="display: none;">
            <div class="mb-3">
                <i class="bi bi-search display-1 text-muted"></i>
            </div>
            <h3 class="text-muted">No articles found</h3>
            <p class="text-muted">Try adjusting your search terms or browse all categories.</p>
        </div>
        
        <!-- Call to Action -->
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto text-center">
                <div class="bg-light border p-5 rounded-3" style="background: linear-gradient(135deg, #f8f9fa 0%, #e3f2fd 50%, #ffffff 100%); border: 1px solid #dee2e6;">
                    <h3 class="mb-3 text-dark">Ready to Transform Your Business?</h3>
                    <p class="mb-4 text-secondary">Join thousands of African businesses using AppNomu SalesQ to automate sales, engage customers, and grow revenue.</p>
                    <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
                        <a href="https://appnomu.com/landing/demo" class="btn btn-success btn-lg px-4">Request Free Demo</a>
                        <a href="https://appnomu.com/landing/pricing" class="btn btn-outline-success btn-lg px-4">View Pricing Plans</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for Search and Filter -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const categoryTabs = document.querySelectorAll('#categoryTabs .nav-link');
    const blogItems = document.querySelectorAll('.blog-item');
    const noResults = document.getElementById('noResults');
    
    let currentCategory = 'all';
    
    // Search functionality
    searchInput.addEventListener('input', function() {
        filterBlogs();
    });
    
    // Category filter functionality
    categoryTabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Update active tab
            categoryTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            // Update current category
            currentCategory = this.dataset.category;
            
            // Filter blogs
            filterBlogs();
        });
    });
    
    function filterBlogs() {
        const searchTerm = searchInput.value.toLowerCase();
        let visibleCount = 0;
        
        blogItems.forEach(item => {
            const category = item.dataset.category;
            const title = item.dataset.title;
            const description = item.dataset.description;
            
            const matchesCategory = currentCategory === 'all' || category === currentCategory;
            const matchesSearch = searchTerm === '' || 
                                title.includes(searchTerm) || 
                                description.includes(searchTerm);
            
            if (matchesCategory && matchesSearch) {
                item.style.display = 'block';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });
        
        // Show/hide no results message
        if (visibleCount === 0) {
            noResults.style.display = 'block';
        } else {
            noResults.style.display = 'none';
        }
    }
});
</script>

<?php echo $custom_css; ?>

<?php
// Get the content
$content = ob_get_clean();

// Include the layout
include 'includes/layout.php';
?>
