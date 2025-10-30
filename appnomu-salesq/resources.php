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
        border-radius: 12px;
        overflow: hidden;
    }
    
    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    }
    
    .blog-card .card-img-top {
        height: 100%;
        min-height: 280px;
        object-fit: contain;
        background: #f8f9fa;
        padding: 1rem;
    }
    
    .featured-blog-card {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.12);
    }
    
    .featured-blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 40px rgba(0,0,0,0.2);
    }
    
    .featured-blog-card .card-img-top {
        height: 100%;
        min-height: 350px;
        object-fit: contain;
        background: #f8f9fa;
        padding: 2rem;
    }
    
    .blog-card .row {
        min-height: 280px;
    }
    
    .pagination-container {
        margin-top: 3rem;
    }
    
    .pagination .page-link {
        border: none;
        color: #198754;
        font-weight: 600;
        padding: 0.75rem 1rem;
        margin: 0 0.25rem;
        border-radius: 8px;
    }
    
    .pagination .page-link:hover {
        background-color: #e8f5e9;
        color: #198754;
    }
    
    .pagination .page-item.active .page-link {
        background-color: #198754;
        color: white;
    }
    
    .load-more-btn {
        margin-top: 3rem;
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
        'title' => 'How AI is Transforming Marketing in 2026: From Canva to SalesQ AI',
        'description' => 'Discover how AI is revolutionizing marketing in 2026 for Ugandan and global SMEs. Learn about AI-powered tools like Canva graphics, Google Ads campaigns, Meta advertising, and SalesQ AI for voice campaigns, SMS marketing, and business analytics.',
        'url' => 'b/how-ai-transforms-marketing-2026-uganda-global',
        'category' => 'AI & Technology',
        'date' => 'October 19, 2025',
        'read_time' => '15 min read',
        'image' => 'https://appnomu.com/landing/assets/images/2026%20AI.jpg',
        'fallback_image' => 'https://placehold.co/400x200/e9ecef/198754?text=AI+Marketing+2026&font=Lexend'
    ],
    [
        'title' => 'Why Small Businesses Fail Payment Verification in Uganda',
        'description' => 'Discover why Ugandan SMEs struggle with payment gateway verification and how proper record keeping, transaction auditing, and automated systems help businesses qualify for Flutterwave, DPO, PayPal, and Stripe integration.',
        'url' => 'b/why-small-businesses-fail-payment-verification-uganda',
        'category' => 'Payment Solutions',
        'date' => 'October 19, 2025',
        'read_time' => '12 min read',
        'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
        'fallback_image' => 'https://placehold.co/400x200/e9ecef/198754?text=Payment+Verification+Uganda&font=Lexend'
    ],
    [
        'title' => 'Why Voice Campaign Marketing is Important to Embrace in 2026',
        'description' => 'Discover why voice campaign marketing is revolutionizing customer engagement in Uganda for 2026. Learn strategies, benefits, and how automated voice calls can transform your business with 10x higher response rates than SMS.',
        'url' => 'b/why-voice-campaign-marketing-important-embrace-2026-uganda',
        'category' => 'Voice Marketing',
        'date' => 'October 12, 2024',
        'read_time' => '18 min read',
        'image' => 'https://appnomu.com/landing/assets/images/Voice_campaign.png',
        'fallback_image' => 'https://placehold.co/400x200/e9ecef/198754?text=Voice+Campaign+Marketing+2026&font=Lexend'
    ],
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

<!-- Featured Blog Post Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <span class="badge bg-success px-3 py-2 rounded-pill mb-2">Featured Article</span>
                <h2 class="display-6 fw-bold text-dark">Latest from Our Blog</h2>
            </div>
        </div>
        
        <?php $featured = $blog_posts[0]; ?>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <article class="card featured-blog-card border-0" data-aos="fade-up">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="<?= $featured['image'] ?>" alt="<?= $featured['title'] ?>" class="card-img-top h-100" onerror="this.src='<?= $featured['fallback_image'] ?>'">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body p-4 p-lg-5 d-flex flex-column h-100">
                                <div class="mb-3">
                                    <span class="blog-category"><?= $featured['category'] ?></span>
                                </div>
                                
                                <h3 class="card-title h3 mb-3">
                                    <a href="<?= $featured['url'] ?>" class="text-decoration-none text-dark"><?= $featured['title'] ?></a>
                                </h3>
                                
                                <p class="card-text text-muted mb-4 flex-grow-1"><?= $featured['description'] ?></p>
                                
                                <div class="blog-meta d-flex justify-content-between align-items-center mb-3">
                                    <small class="text-muted">
                                        <i class="bi bi-calendar-event me-1"></i>
                                        <?= $featured['date'] ?>
                                    </small>
                                    <small class="text-muted read-time">
                                        <i class="bi bi-clock me-1"></i>
                                        <?= $featured['read_time'] ?>
                                    </small>
                                </div>
                                
                                <a href="<?= $featured['url'] ?>" class="btn btn-success btn-lg">Read Full Article <i class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
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
        
        <!-- Section Title -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="display-6 fw-bold text-dark">All Articles</h2>
                <p class="text-muted">Browse our complete collection of guides and insights</p>
            </div>
        </div>
        
        <!-- Blog Grid (2 columns, skip first post as it's featured) -->
        <div class="row g-4" id="blogGrid">
            <?php 
            $remaining_posts = array_slice($blog_posts, 1); // Skip first post (featured)
            foreach ($remaining_posts as $post): 
            ?>
            <div class="col-lg-6 blog-item" data-category="<?= strtolower(str_replace(' ', '-', $post['category'])) ?>" data-title="<?= strtolower($post['title']) ?>" data-description="<?= strtolower($post['description']) ?>">
                <article class="card blog-card h-100">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>" class="card-img-top h-100" loading="lazy" onerror="this.src='<?= $post['fallback_image'] ?>'">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body d-flex flex-column h-100 p-4">
                                <div class="mb-2">
                                    <span class="blog-category"><?= $post['category'] ?></span>
                                </div>
                                
                                <h3 class="card-title h5 mb-3">
                                    <a href="<?= $post['url'] ?>" class="text-decoration-none text-dark stretched-link"><?= $post['title'] ?></a>
                                </h3>
                                
                                <p class="card-text text-muted mb-3 flex-grow-1" style="font-size: 0.9rem;"><?= substr($post['description'], 0, 120) ?>...</p>
                                
                                <div class="blog-meta d-flex justify-content-between align-items-center mt-auto">
                                    <small class="text-muted">
                                        <i class="bi bi-calendar-event me-1"></i>
                                        <?= $post['date'] ?>
                                    </small>
                                    <small class="text-muted read-time">
                                        <i class="bi bi-clock me-1"></i>
                                        <?= $post['read_time'] ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Pagination -->
        <div class="pagination-container">
            <nav aria-label="Blog pagination">
                <ul class="pagination justify-content-center" id="pagination">
                    <!-- Pagination will be generated by JavaScript -->
                </ul>
            </nav>
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

<!-- JavaScript for Search, Filter, and Pagination -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const categoryTabs = document.querySelectorAll('#categoryTabs .nav-link');
    const blogItems = document.querySelectorAll('.blog-item');
    const noResults = document.getElementById('noResults');
    const paginationContainer = document.getElementById('pagination');
    
    let currentCategory = 'all';
    let currentPage = 1;
    const itemsPerPage = 6;
    let filteredItems = [];
    
    // Search functionality
    searchInput.addEventListener('input', function() {
        currentPage = 1;
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
            currentPage = 1;
            
            // Filter blogs
            filterBlogs();
        });
    });
    
    function filterBlogs() {
        const searchTerm = searchInput.value.toLowerCase();
        filteredItems = [];
        
        blogItems.forEach(item => {
            const category = item.dataset.category;
            const title = item.dataset.title;
            const description = item.dataset.description;
            
            const matchesCategory = currentCategory === 'all' || category === currentCategory;
            const matchesSearch = searchTerm === '' || 
                                title.includes(searchTerm) || 
                                description.includes(searchTerm);
            
            if (matchesCategory && matchesSearch) {
                filteredItems.push(item);
            }
        });
        
        displayPage();
        renderPagination();
        
        // Show/hide no results message
        if (filteredItems.length === 0) {
            noResults.style.display = 'block';
            paginationContainer.style.display = 'none';
        } else {
            noResults.style.display = 'none';
            paginationContainer.style.display = 'flex';
        }
    }
    
    function displayPage() {
        // Hide all items first
        blogItems.forEach(item => {
            item.style.display = 'none';
        });
        
        // Calculate start and end indices
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;
        
        // Show items for current page
        const itemsToShow = filteredItems.slice(startIndex, endIndex);
        itemsToShow.forEach(item => {
            item.style.display = 'block';
        });
        
        // Smooth scroll to top of blog grid
        if (currentPage > 1) {
            document.getElementById('blogGrid').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
    
    function renderPagination() {
        const totalPages = Math.ceil(filteredItems.length / itemsPerPage);
        
        if (totalPages <= 1) {
            paginationContainer.innerHTML = '';
            return;
        }
        
        let paginationHTML = '';
        
        // Previous button
        paginationHTML += `
            <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                <a class="page-link" href="#" data-page="${currentPage - 1}">
                    <i class="bi bi-chevron-left"></i> Previous
                </a>
            </li>
        `;
        
        // Page numbers
        const maxVisiblePages = 5;
        let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
        let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);
        
        if (endPage - startPage < maxVisiblePages - 1) {
            startPage = Math.max(1, endPage - maxVisiblePages + 1);
        }
        
        // First page
        if (startPage > 1) {
            paginationHTML += `
                <li class="page-item">
                    <a class="page-link" href="#" data-page="1">1</a>
                </li>
            `;
            if (startPage > 2) {
                paginationHTML += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
            }
        }
        
        // Page numbers
        for (let i = startPage; i <= endPage; i++) {
            paginationHTML += `
                <li class="page-item ${i === currentPage ? 'active' : ''}">
                    <a class="page-link" href="#" data-page="${i}">${i}</a>
                </li>
            `;
        }
        
        // Last page
        if (endPage < totalPages) {
            if (endPage < totalPages - 1) {
                paginationHTML += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
            }
            paginationHTML += `
                <li class="page-item">
                    <a class="page-link" href="#" data-page="${totalPages}">${totalPages}</a>
                </li>
            `;
        }
        
        // Next button
        paginationHTML += `
            <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                <a class="page-link" href="#" data-page="${currentPage + 1}">
                    Next <i class="bi bi-chevron-right"></i>
                </a>
            </li>
        `;
        
        paginationContainer.innerHTML = paginationHTML;
        
        // Add click handlers to pagination links
        paginationContainer.querySelectorAll('.page-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const page = parseInt(this.dataset.page);
                if (page && page !== currentPage && page >= 1 && page <= totalPages) {
                    currentPage = page;
                    displayPage();
                    renderPagination();
                }
            });
        });
    }
    
    // Initial load
    filterBlogs();
});
</script>

<?php echo $custom_css; ?>

<?php
// Get the content
$content = ob_get_clean();

// Include the layout
include 'includes/layout.php';
?>
