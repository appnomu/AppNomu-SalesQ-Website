<?php
// Load configuration
require_once __DIR__ . '/../config.php';

// Set the current page for navigation highlighting
$current_page = 'integrations';

// Set page metadata
$page_title = 'Team Communication Integration | AppNomu SalesQ - Slack & Microsoft Teams';
$page_description = 'Integrate AppNomu SalesQ with Slack and Microsoft Teams for real-time notifications, team collaboration, and automated workflow alerts. Perfect for African teams.';

// Set page-specific keywords for SEO
$page_keywords = 'Slack Integration Uganda, Microsoft Teams Integration Africa, Team Communication Uganda, Workflow Automation East Africa, Business Collaboration Uganda, Team Notifications Africa';

// Additional CSS for this page
$additional_css = [
    "https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
];

// Additional JS for this page
$additional_js = [
    "https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"
];

// Start output buffering
ob_start();
?>

<!-- Hero Section -->
<section class="hero-section position-relative" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); padding: 80px 0 60px;">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="d-flex align-items-center mb-3">
                    <img src="https://a.slack-edge.com/80588/marketing/img/icons/icon_slack_hash_colored.png" alt="Slack" style="height: 40px;" class="me-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Microsoft_Office_Teams_%282018%E2%80%93present%29.svg" alt="Microsoft Teams" style="height: 35px;" class="me-3">
                    <span class="text-dark fs-4">+</span>
                    <img src="https://appnomu.com/landing/assets/images/AppNomu%20SalesQ%20blue%20logo.png" alt="AppNomu SalesQ" style="height: 35px;" class="ms-3">
                </div>
                <h1 class="display-4 fw-bold mb-3 text-dark">Team Communication <span class="text-success">Integration</span></h1>
                <p class="lead mb-4 text-dark" style="font-size: 1.2rem; font-weight: 300;">
                    Connect AppNomu SalesQ with Slack and Microsoft Teams to keep your team informed 
                    with real-time notifications, automated alerts, and seamless collaboration.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 mb-4">
                    <a href="https://www.appnomu.com/register.php?utm_source=team_integration&utm_medium=hero&utm_campaign=salesq" 
                       class="btn btn-success btn-lg rounded-pill px-4 py-3 shadow" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-chat-dots me-2"></i> Start Integration
                    </a>
                    <a href="<?= url('/demo') ?>" class="btn btn-outline-success btn-lg rounded-pill px-4 py-3">
                        <i class="bi bi-play-circle me-2"></i> Watch Demo
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0">
                <div class="position-relative" data-aos="fade-left">
                    <img src="https://appnomu.com/landing/assets/images/Slack_meet.png" alt="Slack and Teams Integration" class="img-fluid rounded-4 shadow-lg" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Supported Platforms -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Supported Communication Platforms</h2>
            <p class="text-muted">Connect with the tools your team already uses</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://a.slack-edge.com/80588/marketing/img/icons/icon_slack_hash_colored.png" alt="Slack" style="height: 50px;" class="me-3">
                            <div>
                                <h5 class="fw-bold mb-0">Slack</h5>
                                <small class="text-muted">Where work happens</small>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Channel notifications</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Direct messages</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Custom workflows</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Bot integrations</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Microsoft_Office_Teams_%282018%E2%80%93present%29.svg" alt="Microsoft Teams" style="height: 50px;" class="me-3">
                            <div>
                                <h5 class="fw-bold mb-0">Microsoft Teams</h5>
                                <small class="text-muted">Chat, meet, call, collaborate</small>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Team notifications</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Channel messages</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Adaptive cards</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Office 365 integration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Powerful Communication Features</h2>
            <p class="text-muted">Keep your team connected and informed</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-bell text-primary fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Real-time Alerts</h5>
                        <p class="text-muted">Get instant notifications for new sales, leads, and important business events.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-success-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-people text-success fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Team Collaboration</h5>
                        <p class="text-muted">Share customer insights and coordinate responses across your entire team.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-warning-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-robot text-warning fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Automated Workflows</h5>
                        <p class="text-muted">Set up custom workflows to automate routine notifications and updates.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-info-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-graph-up text-info fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Performance Updates</h5>
                        <p class="text-muted">Share daily, weekly, and monthly performance reports with your team.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-danger-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-exclamation-triangle text-danger fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Critical Alerts</h5>
                        <p class="text-muted">Receive immediate notifications for system issues, low stock, or urgent matters.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-secondary-soft rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-gear text-secondary fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Custom Channels</h5>
                        <p class="text-muted">Configure different notification types for specific channels or team members.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Perfect for African Teams</h2>
            <p class="text-muted">Real-world communication use cases</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-shop text-white fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Sales Teams</h5>
                        <p class="text-muted">Keep sales teams updated on new leads, deals closed, and performance metrics in real-time.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-success rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-headset text-white fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Customer Support</h5>
                        <p class="text-muted">Alert support teams about new tickets, escalations, and customer feedback instantly.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-warning rounded-circle p-3 mb-3 d-inline-block">
                            <i class="bi bi-people text-white fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Management Teams</h5>
                        <p class="text-muted">Keep executives informed with daily summaries, KPI updates, and critical business alerts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">How Team Integration Works</h2>
            <p class="text-muted">Get your team connected in minutes</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-primary rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-1-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Connect Platform</h5>
                <p class="text-muted">Add your Slack workspace or Microsoft Teams tenant to AppNomu SalesQ.</p>
            </div>
            
            <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-primary rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-2-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Configure Channels</h5>
                <p class="text-muted">Choose which channels receive different types of notifications and alerts.</p>
            </div>
            
            <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-primary rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-3-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Set Preferences</h5>
                <p class="text-muted">Customize notification frequency, format, and content for your team's needs.</p>
            </div>
            
            <div class="col-lg-3 text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="bg-primary rounded-circle p-4 mb-3 d-inline-block">
                    <i class="bi bi-4-circle-fill text-white fs-2"></i>
                </div>
                <h5 class="fw-bold mb-3">Start Collaborating</h5>
                <p class="text-muted">Enjoy seamless team communication and real-time business updates.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Team Communication Pricing</h2>
            <p class="text-muted">Keep your team connected affordably</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4 text-center">
                                <div class="bg-primary-soft rounded-circle p-3 mb-3 d-inline-block">
                                    <i class="bi bi-chat-dots text-primary fs-2"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Basic Communication</h4>
                                <div class="mb-4">
                                    <span class="display-4 fw-bold text-primary">Free</span>
                                    <span class="text-muted">/month</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Basic notifications</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Single channel</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Standard alerts</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Email support</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 shadow-lg border-primary">
                            <div class="card-body p-4 text-center">
                                <div class="bg-primary rounded-circle p-3 mb-3 d-inline-block">
                                    <i class="bi bi-star text-white fs-2"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Advanced Communication</h4>
                                <div class="mb-4">
                                    <span class="display-4 fw-bold text-primary">$25</span>
                                    <span class="text-muted">/month</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Everything in Basic</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Multiple channels</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Custom workflows</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Priority support</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4 text-center">
                                <div class="bg-warning-soft rounded-circle p-3 mb-3 d-inline-block">
                                    <i class="bi bi-building text-warning fs-2"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Enterprise Communication</h4>
                                <div class="mb-4">
                                    <span class="display-4 fw-bold text-warning">$45</span>
                                    <span class="text-muted">/month</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Everything in Advanced</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Unlimited channels</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Advanced automation</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Dedicated support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-3 text-dark">Ready to Connect Your Team?</h2>
                <p class="lead text-muted mb-4">
                    Integrate AppNomu SalesQ with your team communication platform and boost collaboration today.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="https://www.appnomu.com/register.php?utm_source=team_cta&utm_medium=bottom&utm_campaign=salesq" 
                       class="btn btn-success btn-lg rounded-pill px-4 py-3 shadow" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-chat-dots me-2"></i> Start Integration
                    </a>
                    <a href="<?= url('/contact') ?>" class="btn btn-outline-success btn-lg rounded-pill px-4 py-3">
                        <i class="bi bi-telephone me-2"></i> Contact Sales
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .bg-primary-soft { background-color: rgba(13, 110, 253, 0.1); }
    .bg-success-soft { background-color: rgba(25, 135, 84, 0.1); }
    .bg-warning-soft { background-color: rgba(255, 193, 7, 0.1); }
    .bg-info-soft { background-color: rgba(13, 202, 240, 0.1); }
    .bg-danger-soft { background-color: rgba(220, 53, 69, 0.1); }
    .bg-secondary-soft { background-color: rgba(108, 117, 125, 0.1); }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100
        });
    }
});
</script>

<?php
$content = ob_get_clean();
require_once __DIR__ . '/../includes/layout.php';
?>
