<?php
$current_page = 'refund-policy';
$page_title = 'Refund Policy | AppNomu SalesQ';
$page_description = 'Our refund policy outlines the terms and conditions for requesting refunds for AppNomu SalesQ services in Uganda.';

// Set page-specific keywords for SEO
$page_keywords = 'Refund Policy Uganda, Money Back Guarantee, Business Software Refund, SaaS Refund Policy Africa, AppNomu Refund Terms, 30-Day Satisfaction Guarantee, Software Subscription Refund, Customer Refund Process Uganda';

// Additional CSS for this page
$additional_css = [
    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css',
    'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
    'https://unpkg.com/aos@2.3.1/dist/aos.css',
    '/assets/css/legal-pages-modern.css'
];

// Additional JS for this page
$additional_js = [
    'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',
    'https://unpkg.com/aos@2.3.1/dist/aos.js',
    '/assets/js/legal-pages-modern.js'
];

ob_start();
?>

<style>
.refund-section {
    background: #fff;
    border-radius: 16px;
    padding: 2.5rem;
    margin-bottom: 2rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    border: 1px solid rgba(25, 135, 84, 0.1);
}

.refund-section h2 {
    color: #198754;
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid rgba(25, 135, 84, 0.15);
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.refund-section h2 i {
    font-size: 1.75rem;
}

.refund-section h3 {
    color: #333;
    font-size: 1.15rem;
    font-weight: 600;
    margin-top: 1.75rem;
    margin-bottom: 1rem;
}

.refund-section p {
    color: #555;
    line-height: 1.8;
    margin-bottom: 1rem;
}

.refund-section ul {
    padding-left: 0;
    list-style: none;
}

.refund-section ul li {
    padding: 0.35rem 0;
    padding-left: 1.75rem;
    position: relative;
    color: #555;
    line-height: 1.7;
}

.refund-section ul li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #198754;
    font-weight: bold;
}

.refund-section ul.danger-list li::before {
    content: "✕";
    color: #dc3545;
}

.refund-highlight {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9f7ef 100%);
    border-radius: 12px;
    padding: 1.5rem;
    margin: 1.5rem 0;
    border-left: 4px solid #198754;
}

.refund-highlight.danger {
    background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
    border-left-color: #dc3545;
}

.refund-highlight.info {
    background: linear-gradient(135deg, #d1ecf1 0%, #bee5eb 100%);
    border-left-color: #17a2b8;
}

/* Match contact cards style from Terms of Use page */
.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 1.5rem;
    margin: 1.5rem 0;
}

.contact-card {
    background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%);
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 1.75rem;
    text-align: left;
    transition: all 0.3s ease;
}

.contact-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border-color: #198754;
}

.contact-card .icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #198754 0%, #20c997 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 0 1rem 0;
}

.contact-card .icon i {
    color: white;
    font-size: 1.5rem;
}

.contact-card h4 {
    font-size: 1rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 0.5rem;
}

.contact-card a {
    color: #198754;
    font-weight: 600;
    text-decoration: none;
}

.contact-card a:hover {
    text-decoration: underline;
}

.contact-card p {
    font-size: 0.85rem;
    color: #666;
    margin-bottom: 0;
}

.toc-nav {
    background: #fff;
    border-radius: 16px;
    padding: 1.5rem;
    position: sticky;
    top: 100px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
}

.toc-nav h4 {
    font-size: 1rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 1rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid #198754;
}

.toc-nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.toc-nav ul li {
    margin-bottom: 0.5rem;
}

.toc-nav ul li a {
    color: #555;
    text-decoration: none;
    font-size: 0.9rem;
    display: block;
    padding: 0.5rem 0.75rem;
    border-radius: 6px;
    transition: all 0.2s ease;
}

.toc-nav ul li a:hover {
    background: rgba(25, 135, 84, 0.1);
    color: #198754;
}

@media (max-width: 991px) {
    .toc-nav {
        display: none;
    }
    
    .refund-section {
        padding: 1.5rem;
    }
}

#backToTop.visible {
    opacity: 1 !important;
    visibility: visible !important;
}

#backToTop:hover {
    transform: translateY(-5px);
}
</style>

<!-- Hero Section with Gray Gradient Background -->
<header class="position-relative" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="800">
                <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 mb-3">Legal Document</span>
                <h1 class="mb-3 display-5 fw-bold" style="color: #333;">Refund Policy</h1>
                <p class="lead mb-2" style="color: #555;">Clear and transparent guidelines on how refunds work for AppNomu SalesQ services and subscriptions.</p>
                <p class="text-muted mb-0"><i class="bi bi-calendar3 me-2"></i>Last updated: December 11, 2025</p>
            </div>
            <div class="col-lg-5 d-none d-lg-block text-end" data-aos="fade-left" data-aos-duration="800">
                <img src="https://appnomu.com/landing/assets/images/compressed-original.webp" alt="Refund Policy" class="img-fluid rounded-4 shadow-lg" style="max-height: 280px; object-fit: contain;">
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row">
            <!-- Table of Contents - Sidebar -->
            <div class="col-lg-3 d-none d-lg-block">
                <nav class="toc-nav">
                    <h4><i class="bi bi-list-ul me-2"></i>Contents</h4>
                    <ul>
                        <li><a href="#intro">Introduction</a></li>
                        <li><a href="#general-policy">General Refund Policy</a></li>
                        <li><a href="#non-refundable">Non-Refundable Items</a></li>
                        <li><a href="#process">Refund Process</a></li>
                        <li><a href="#special">Special Circumstances</a></li>
                        <li><a href="#contact">Contact & Support</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Main Content Area -->
            <div class="col-lg-9">

                <!-- Introduction -->
                <section id="intro" class="refund-section" data-aos="fade-up">
                    <h2><i class="bi bi-shield-check"></i> Introduction</h2>

                    <p>At AppNomu SalesQ, all payments work on a <strong>wallet-based, pay-as-you-go model</strong>. You top up your wallet, and all subscriptions, SMS, voice, airtime, and other charges are deducted directly from your wallet balance—not from your card or payment method every time.</p>

                    <p>We stand firmly behind our products with a practical and fair refund policy. Instead of refunding individual services, <strong>eligible refunds apply to wallet top-up transactions</strong> that meet our criteria. This approach keeps your account simple while still protecting you when something goes wrong.</p>

                    <p>When you need to request a refund, you can use the <strong>Request Refund</strong> page in your account (accessible from the profile dropdown) or reach out through our support channels. Our team reviews each case individually and communicates clearly about eligibility, timelines, and outcomes.</p>

                    <div class="refund-highlight">
                        <h3 class="mb-2" style="font-size: 1.05rem;">Customer-First Commitment</h3>
                        <p class="mb-0">Our goal is always to be fair and transparent. We review each refund request carefully and communicate clearly about outcomes, timelines, and any credits applied to your account.</p>
                    </div>
                </section>

                <!-- General Refund Policy -->
                <section id="general-policy" class="refund-section" data-aos="fade-up">
                    <h2><i class="bi bi-arrow-repeat"></i> General Refund Policy</h2>

                    <p>We have developed a fair and transparent refund policy based on years of experience serving businesses like yours. Our policy balances flexibility with sustainable business practices to ensure we can continue providing excellent service.</p>

                    <h3>Wallet-Based Refunds</h3>
                    <p>Because AppNomu SalesQ is wallet-based, refunds focus on <strong>wallet top-up transactions</strong>, not individual usage (SMS, calls, airtime) or per-feature charges.</p>

                    <h3>Refund Eligibility</h3>
                    <ul>
                        <li><strong>Wallet top-ups only:</strong> Refunds apply to eligible wallet funding transactions, not to individual SMS, voice, airtime, or subscription debits.</li>
                        <li><strong>30-day window:</strong> Only wallet top-up transactions that are <strong>less than 30 days old</strong> are eligible for review.</li>
                        <li><strong>Unused funds:</strong> Funds must still be available in your wallet. If you've already used some or all of the top-up amount, you may not be eligible for a full refund.</li>
                        <li><strong>Traceable in your account:</strong> All eligible top-ups can be viewed under your account history and from the <strong>Request Refund</strong> page accessed from the profile dropdown.</li>
                    </ul>

                    <div class="refund-highlight info">
                        <p class="mb-0"><strong><i class="bi bi-info-circle me-2"></i>Note:</strong> In some cases, instead of a monetary refund, we may offer service credits that can be applied toward future invoices or feature upgrades.</p>
                    </div>
                </section>

                <!-- Non-Refundable Items -->
                <section id="non-refundable" class="refund-section" data-aos="fade-up">
                    <h2><i class="bi bi-x-octagon"></i> Non-Refundable Products & Services</h2>

                    <p>Due to their immediate delivery and consumption nature, the following items cannot be refunded:</p>

                    <ul class="danger-list">
                        <li><strong>SMS credits</strong> – Once purchased and added to your account</li>
                        <li><strong>Voice call usage</strong> – All voice calls that have been initiated and delivered, regardless of call duration or completion status</li>
                        <li><strong>Gift cards and promotional vouchers</strong> – Including any special offer codes</li>
                        <li><strong>Airtime purchases</strong> – All mobile network airtime transactions</li>
                        <li><strong>Completed custom development work</strong> – Any customizations already implemented</li>
                        <li><strong>Set-up and onboarding fees</strong> – These cover resources already expended</li>
                        <li><strong>Cryptocurrency payments via Cryptomus</strong> – All payments made through our crypto payment provider are <strong>final and non-refundable</strong>.</li>
                    </ul>

                    <div class="refund-highlight danger">
                        <p class="mb-0"><strong><i class="bi bi-exclamation-triangle me-2"></i>Important:</strong> Non-refundable items are clearly indicated before purchase within the platform to help you make informed decisions.</p>
                    </div>
                </section>

                <!-- Refund Process -->
                <section id="process" class="refund-section" data-aos="fade-up">
                    <h2><i class="bi bi-diagram-3"></i> How Our Refund Process Works</h2>

                    <p class="mb-3">Getting a refund from AppNomu SalesQ is straightforward. We've designed our process around your <strong>Refund Requests</strong> page inside the dashboard so that you can always see which transactions are eligible and track the status of every request.</p>

                    <h3>1. Checking Eligible Transactions</h3>
                    <p>From your account dashboard, open the <strong>Refund Requests</strong> page (accessible from the profile dropdown). This page automatically lists wallet top-up transactions that meet our refund criteria (for example, <strong>less than 30 days old and still unused</strong>).</p>
                    <ul>
                        <li>Each eligible transaction shows the <strong>date</strong>, <strong>amount</strong>, and <strong>payment method</strong>.</li>
                        <li>Ineligible or fully used transactions are clearly marked and cannot be selected for refund.</li>
                        <li>You can always revisit this page to see which top-ups remain eligible over time.</li>
                    </ul>

                    <h3>2. Submitting a Refund Request</h3>
                    <p>When you are ready to request a refund, select one or more eligible wallet top-up transactions from the list. The refund form will automatically fill in the <strong>transaction IDs</strong>, <strong>amounts</strong>, and other relevant details for you.</p>
                    <ul>
                        <li>Confirm the pre-filled transaction information.</li>
                        <li>Provide a clear <strong>reason for the refund</strong> in the text field (for example, mistaken top-up amount, duplicate payment, etc.).</li>
                        <li>Submit the form directly from the Refund Requests page—no need to manually type transaction IDs.</li>
                    </ul>

                    <h3>3. Review & Assessment</h3>
                    <p>After you submit a request, our customer success team reviews it together with your account and transaction history. We consider factors such as wallet usage, top-up dates, and the specific circumstances of your request.</p>
                    <p>You'll receive an email acknowledgment within 24 hours and a final decision within 2 business days. The status of each request is also updated directly on your <strong>Refund Requests</strong> page.</p>

                    <h3>4. Processing Your Refund</h3>
                    <p>When your refund is approved, we'll process the payment back to your original funding method. Processing times depend on the provider handling your transaction, and your request status will move to <strong>Approved / Processing</strong> on the Refund Requests page:</p>

                    <ul>
                        <li><strong>Mobile Money:</strong> Typically <strong>1–2 business days</strong></li>
                        <li><strong>Card Payments:</strong> Typically <strong>5–15 business days</strong> (depending on your bank)</li>
                        <li><strong>PayPal:</strong> Typically <strong>3–5 business days</strong></li>
                        <li><strong>Cryptocurrency (Cryptomus):</strong> <strong>Non-refundable</strong> – crypto payments are final and cannot be reversed.</li>
                    </ul>

                    <p>Please note that these timeframes are estimates. Actual posting times may vary depending on your financial institution and payment provider.</p>
                </section>

                <!-- Special Circumstances -->
                <section id="special" class="refund-section" data-aos="fade-up">
                    <h2><i class="bi bi-exclamation-triangle"></i> Special Refund Circumstances</h2>

                    <p class="mb-3">We recognize that unique situations sometimes require flexible solutions. Our team takes a thoughtful approach to special circumstances that may affect your subscription or refund needs.</p>

                    <h3>Service Availability & Downtime</h3>
                    <p>In the rare instances where our platform experiences extended interruptions (lasting more than 24 hours), you won't need to request compensation. Our monitoring systems automatically track downtime, and we proactively issue service credits or prorated refunds for affected periods.</p>
                    <p>Our engineering team maintains a robust infrastructure with redundancies to minimize any potential service disruptions, and you'll always receive advance notice of scheduled maintenance activities through your registered email.</p>

                    <h3>Billing Questions & Errors</h3>
                    <p>Financial accuracy is a cornerstone of our customer relationship. If you notice any discrepancies in your billing, our dedicated finance team is ready to help. Simply reach out with your transaction details, and we'll conduct a thorough investigation within two business days.</p>
                    <p>For verified billing errors, we fast-track resolution with appropriate documentation and process any necessary refunds within 10 business days, keeping you informed throughout the process.</p>

                    <h3>Plan Changes & Account Closure</h3>
                    <p><strong>For upgrades:</strong> When you move to a higher-tier plan, we automatically prorate your existing subscription and apply remaining credit toward your new plan, maximizing the value of your initial investment.</p>
                    <p><strong>For downgrades:</strong> Your new pricing takes effect at the start of your next billing cycle. While we don't issue refunds for the current period in downgrade scenarios, this approach ensures uninterrupted access to your current features until the transition occurs.</p>

                    <div class="refund-highlight">
                        <h3 class="mb-2" style="font-size: 1.05rem;"><i class="bi bi-person-check me-2"></i>Account Closure Considerations</h3>
                        <p class="mb-0">If you choose to close your account, you may qualify for a prorated refund of any unused subscription time, subject to our standard eligibility criteria. Accounts closed due to Terms of Service violations are not eligible for refunds.</p>
                    </div>
                </section>

                <!-- Contact -->
                <section id="contact" class="refund-section" data-aos="fade-up">
                    <h2><i class="bi bi-headset"></i> Contact & Support</h2>

                    <p>If you have questions about this Refund Policy or need help with a specific refund request, our team is here to support you.</p>

                    <div class="contact-grid mt-3">
                        <div class="contact-card">
                            <div class="icon"><i class="bi bi-shield-lock"></i></div>
                            <h4>Refund & Legal Inquiries</h4>
                            <a href="mailto:legal@appnomu.com">legal@appnomu.com</a>
                            <p class="mt-2">Refund terms, disputes, and compliance questions</p>
                        </div>
                        <div class="contact-card">
                            <div class="icon"><i class="bi bi-chat-dots"></i></div>
                            <h4>Support Team</h4>
                            <a href="mailto:support@appnomu.com">support@appnomu.com</a>
                            <p class="mt-2">Help with refund requests and account issues</p>
                        </div>
                        <div class="contact-card">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4>Physical Address</h4>
                            <p class="mb-0">
                                <strong>AppNomu SalesQ Building</strong><br>
                                77 Market Street, Bugiri Municipality<br>
                                Opposite Hindocha P/S Main Gate
                            </p>
                        </div>
                    </div>

                    <div class="refund-highlight" style="margin-top: 2rem;">
                        <h3 class="mb-2" style="font-size: 1.05rem;"><i class="bi bi-clock-history me-2"></i>Our Commitment to You</h3>
                        <p class="mb-0">We aim to acknowledge all refund-related emails within 24 hours and provide a clear decision or next steps within 2 business days. Throughout the process, we'll keep you informed about the status of your request and any additional information that may be needed.</p>
                    </div>
                </section>

                <!-- Effective Date Notice -->
                <div class="alert alert-success border-0 rounded-4 shadow-sm mt-4" data-aos="fade-up">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                        <div>
                            <p class="mb-0"><strong>Effective Date:</strong> This Refund Policy is effective as of <strong>December 11, 2025</strong> and may be updated from time to time. Please check this page for the most current version.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<!-- Fixed back-to-top button as a simple circular icon -->
<a href="#" id="backToTop" class="btn btn-success shadow position-fixed bottom-0 end-0 m-4 d-flex align-items-center justify-content-center rounded-circle" style="width: 50px; height: 50px; z-index: 1030; opacity: 0; visibility: hidden; transition: all 0.3s ease;">
    <i class="bi bi-arrow-up" style="font-size: 20px;"></i>
</a>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Back to top button
    const backToTopButton = document.getElementById('backToTop');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.add('visible');
        } else {
            backToTopButton.classList.remove('visible');
        }
    });
    
    backToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    
    // Smooth scroll for TOC links
    document.querySelectorAll('.toc-nav a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerOffset = 90;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
            }
        });
    });

    // Reading progress indicator
    const progressBar = document.createElement('div');
    progressBar.style.cssText = 'position: fixed; top: 0; left: 0; width: 0%; height: 3px; background: linear-gradient(90deg, #198754, #20c997); z-index: 9999; transition: width 0.3s ease;';
    document.body.appendChild(progressBar);

    window.addEventListener('scroll', function() {
        const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        progressBar.style.width = scrolled + '%';
    });

    // Initialize AOS if available
    if (typeof AOS !== 'undefined') {
        AOS.init({ duration: 600, once: true, offset: 100 });
    }
});
</script>

<?php
$content = ob_get_clean();
include 'includes/layout.php';
?>
