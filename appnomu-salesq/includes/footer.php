<?php 
// Ensure config is loaded
if (!function_exists('url') || !function_exists('asset')) {
    require_once __DIR__ . '/../config.php';
}
?>
<!-- Professional Clean Footer -->
<footer class="footer" style="background-color: #f8f9fa; color: #333; border-top: 1px solid rgba(0,0,0,0.1);">
    <!-- Main Footer Content -->
    <div class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Brand Section -->
                <div class="col-lg-3 col-md-6">
                    <div class="mb-4">
                        <a href="<?= url('/') ?>" class="text-decoration-none">
                            <span style="color: #0d6efd; font-family: 'Lexend', sans-serif; font-weight: 700; font-size: 1.4rem;">
                                <span>AppNomu</span>
                                <span style="margin: 0 3px;">•</span>
                                <span>SalesQ<sup style="font-size: 0.4rem;">TM</sup></span>
                            </span>
                        </a>
                    </div>
                    <p class="text-muted mb-4">Empowering businesses in Uganda with powerful sales and inventory management solutions to drive growth and efficiency.</p>
                    
                    <!-- Social Media Links -->
                    <div class="d-flex gap-3">
                        <a href="https://facebook.com/appnomu" target="_blank" class="btn btn-outline-success btn-sm rounded-circle p-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://x.com/appnomuSalesQ" target="_blank" class="btn btn-outline-success btn-sm rounded-circle p-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;" aria-label="X (Twitter)">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/our-appnomu/posts/?feedView=all" target="_blank" class="btn btn-outline-success btn-sm rounded-circle p-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://instagram.com/appnomu" target="_blank" class="btn btn-outline-success btn-sm rounded-circle p-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@AppNomusalesQ" target="_blank" class="btn btn-outline-success btn-sm rounded-circle p-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;" aria-label="YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Product Links -->
                <div class="col-lg-3 col-md-3 col-6">
                    <h6 class="fw-bold mb-3 text-success">Product</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="<?= url('/why-salesq') ?>" class="text-decoration-none text-muted">Why SalesQ</a></li>
                        <li class="mb-2"><a href="<?= url('/pricing') ?>" class="text-decoration-none text-muted">Pricing</a></li>
                        <li class="mb-2"><a href="<?= url('/demo') ?>" class="text-decoration-none text-muted">Demo</a></li>
                        <li class="mb-2"><a href="<?= url('/features/voice') ?>" class="text-decoration-none text-muted"><i class="bi bi-telephone-fill me-1 text-success"></i>Voice Calls</a></li>
                        <li class="mb-2"><a href="https://appnomu.com/landing/integrations/" class="text-decoration-none text-muted">All Integrations</a></li>
                        <li class="mb-2"><a href="<?= url('/discount-application') ?>" class="text-decoration-none text-success fw-medium">Get Discount</a></li>
                    </ul>
                </div>
                
                <!-- Company Links -->
                <div class="col-lg-3 col-md-3 col-6">
                    <h6 class="fw-bold mb-3 text-success">Company</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="<?= url('/about') ?>" class="text-decoration-none text-muted">About Us</a></li>
                        <li class="mb-2"><a href="<?= url('/founder-letter') ?>" class="text-decoration-none text-muted">Founder's Letter</a></li>
                        <li class="mb-2"><a href="<?= url('/careers') ?>" class="text-decoration-none text-muted">Careers</a></li>
                        <li class="mb-2"><a href="<?= url('/partners') ?>" class="text-decoration-none text-muted">Partners</a></li>
                        <li class="mb-2"><a href="<?= url('/trust-centre') ?>" class="text-decoration-none text-muted">Trust Centre</a></li>
                        <li class="mb-2"><a href="<?= url('/contact') ?>" class="text-decoration-none text-muted">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Resources & Support Links -->
                <div class="col-lg-3 col-md-3 col-6">
                    <h6 class="fw-bold mb-3 text-success">Resources</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://appnomu.com/landing/resources" class="text-decoration-none text-muted">Our Resources</a></li>
                        <li class="mb-2"><a href="https://services.appnomu.com/?utm_source=salesq&utm_medium=footer&utm_campaign=services" target="_blank" class="text-decoration-none text-muted">Services</a></li>
                        <li class="mb-2"><a href="<?= url('/because-of-you') ?>" class="text-decoration-none text-muted">Because of You</a></li>
                        <li class="mb-2"><a href="<?= url('/affiliate') ?>" class="text-decoration-none text-muted">Affiliate Program</a></li>
                        <li class="mb-2"><a href="<?= url('/rss') ?>" class="text-decoration-none text-muted" title="Subscribe to our RSS feed"><i class="bi bi-rss me-1"></i>RSS Feed</a></li>
                        <li class="mb-2"><a href="<?= url('/rss-sitemap') ?>" class="text-decoration-none text-muted" title="RSS Sitemap"><i class="bi bi-diagram-3 me-1"></i>RSS Sitemap</a></li>
                        <li class="mb-2"><a href="<?= url('/sitemap.xml') ?>" class="text-decoration-none text-muted" title="XML Sitemap"><i class="bi bi-file-earmark-code me-1"></i>Sitemap</a></li>
                        <li class="mb-2">
                            <a href="https://status.appnomu.com/?utm_source=salesq_website&utm_medium=footer&utm_campaign=network_status" target="_blank" class="text-decoration-none text-muted">
                                <span class="signal-indicator me-1">
                                    <i class="signal-bar"></i>
                                    <i class="signal-bar"></i>
                                    <i class="signal-bar"></i>
                                    <i class="signal-bar"></i>
                                </span>
                                Network Status
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Copyright Section -->
    <div class="border-top" style="background-color: #e9ecef;">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-md-8 text-center text-md-start">
                    <p class="mb-1 text-muted">&copy; <?= date('Y') ?> AppNomu SalesQ. All rights reserved.</p>
                    <p class="mb-0 text-muted small">Registered in Uganda. Company No. 80020003228371</p>
                </div>
                <div class="col-md-4 text-center text-md-end mt-2 mt-md-0">
                    <div class="d-flex justify-content-center justify-content-md-end gap-3 flex-wrap">
                        <a href="<?= url('/privacy-policy') ?>" class="text-decoration-none text-muted">Privacy</a>
                        <a href="<?= url('/terms-of-use') ?>" class="text-decoration-none text-muted">Terms</a>
                        <a href="<?= url('/refund-policy') ?>" class="text-decoration-none text-muted">Refund Policy</a>
                        <a href="<?= url('/accessibility') ?>" class="text-decoration-none text-muted">Accessibility</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17606368122"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-17606368122');
</script>

<!-- Clean Footer Styling -->
</body>
</html>
<style>
    /* Footer Link Hover Effects */
    .footer a:hover {
        color: #198754 !important;
        transition: color 0.2s ease;
    }
    
    /* Signal Indicator */
    .signal-indicator {
        display: inline-flex;
        align-items: flex-end;
        height: 14px;
        gap: 2px;
    }
    
    .signal-bar {
        display: inline-block;
        width: 3px;
        background-color: #dc3545;
        border-radius: 1px;
    }
    
    .signal-bar:nth-child(1) { height: 30%; }
    .signal-bar:nth-child(2) { height: 60%; }
    .signal-bar:nth-child(3) { height: 90%; }
    .signal-bar:nth-child(4) { height: 100%; }
    
    .signal-indicator:hover .signal-bar {
        background-color: #198754;
        transition: background-color 0.2s ease;
    }
    
    /* Social Media Button Hover */
    .footer .btn-outline-success:hover {
        background-color: #198754;
        border-color: #198754;
        color: white;
        transform: translateY(-2px);
        transition: all 0.2s ease;
    }
    
    /* Mobile Responsive Adjustments */
    @media (max-width: 768px) {
        .footer .col-6 {
            margin-bottom: 2rem;
        }
        
        .footer .d-flex.gap-3 {
            justify-content: center;
        }
    }
</style>
