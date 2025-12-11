<?php
$current_page = 'terms';
$page_title = 'Terms of Use | AppNomu SalesQ';
$page_description = 'Terms and conditions governing the use of AppNomu SalesQ services in Uganda.';

// Set page-specific keywords for SEO
$page_keywords = 'Terms and Conditions Uganda, Service Agreement Africa, Software Terms of Use, Business Software Legal, Ugandan Business Terms, Software Licensing Agreement, AppNomu Legal Terms, SMS Service Terms Uganda';

// Additional CSS for this page
$additional_css = [
    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css'
];

// Additional JS for this page
$additional_js = [
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'
];

ob_start();
?>

<style>
.terms-section {
    background: #fff;
    border-radius: 16px;
    padding: 2.5rem;
    margin-bottom: 2rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    border: 1px solid rgba(25, 135, 84, 0.1);
}

.terms-section h2 {
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

.terms-section h2 i {
    font-size: 1.75rem;
}

.terms-section h3 {
    color: #333;
    font-size: 1.15rem;
    font-weight: 600;
    margin-top: 1.75rem;
    margin-bottom: 1rem;
}

.terms-section p {
    color: #555;
    line-height: 1.8;
    margin-bottom: 1rem;
}

.terms-section ul {
    padding-left: 0;
    list-style: none;
}

.terms-section ul li {
    padding: 0.5rem 0;
    padding-left: 1.75rem;
    position: relative;
    color: #555;
    line-height: 1.7;
}

.terms-section ul li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #198754;
    font-weight: bold;
}

.terms-section ul.danger-list li::before {
    content: "✕";
    color: #dc3545;
}

.info-card {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9f7ef 100%);
    border-radius: 12px;
    padding: 1.5rem;
    margin: 1.5rem 0;
    border-left: 4px solid #198754;
}

.info-card h4 {
    color: #198754;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.75rem;
}

.info-card p {
    margin-bottom: 0;
    font-size: 0.95rem;
}

.feature-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.25rem;
    margin: 1.5rem 0;
}

.feature-card {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 1.5rem;
    border: 1px solid #e9ecef;
    transition: all 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    border-color: rgba(25, 135, 84, 0.3);
}

.feature-card .icon {
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, #198754 0%, #20c997 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
}

.feature-card .icon i {
    color: white;
    font-size: 1.5rem;
}

.feature-card h4 {
    font-size: 1.05rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 0.75rem;
}

.feature-card p {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 0;
    line-height: 1.6;
}

.pricing-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin: 1.5rem 0;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.pricing-table th {
    background: linear-gradient(135deg, #198754 0%, #20c997 100%);
    color: white;
    padding: 1rem 1.25rem;
    text-align: left;
    font-weight: 600;
}

.pricing-table td {
    padding: 1rem 1.25rem;
    border-bottom: 1px solid #e9ecef;
    color: #555;
}

.pricing-table tr:last-child td {
    border-bottom: none;
}

.pricing-table tr:nth-child(even) {
    background: #f8f9fa;
}

.highlight-box {
    background: linear-gradient(135deg, #fff3cd 0%, #ffeeba 100%);
    border-radius: 12px;
    padding: 1.5rem;
    margin: 1.5rem 0;
    border-left: 4px solid #ffc107;
}

.highlight-box.danger {
    background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
    border-left-color: #dc3545;
}

.highlight-box.info {
    background: linear-gradient(135deg, #d1ecf1 0%, #bee5eb 100%);
    border-left-color: #17a2b8;
}

.highlight-box.success {
    background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
    border-left-color: #198754;
}

.integration-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin: 1rem 0;
}

.integration-badge {
    background: rgba(25, 135, 84, 0.1);
    color: #198754;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 500;
    border: 1px solid rgba(25, 135, 84, 0.2);
}

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
    text-align: center;
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
    margin: 0 auto 1rem;
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

.requirement-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1rem;
    margin: 1.5rem 0;
}

.requirement-item {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 10px;
    padding: 1.25rem;
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.requirement-item .icon {
    width: 40px;
    height: 40px;
    min-width: 40px;
    background: rgba(25, 135, 84, 0.1);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.requirement-item .icon i {
    color: #198754;
    font-size: 1.25rem;
}

.requirement-item.danger .icon {
    background: rgba(220, 53, 69, 0.1);
}

.requirement-item.danger .icon i {
    color: #dc3545;
}

.requirement-item.warning .icon {
    background: rgba(255, 193, 7, 0.1);
}

.requirement-item.warning .icon i {
    color: #856404;
}

.requirement-item h5 {
    font-size: 0.95rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 0.35rem;
}

.requirement-item p {
    font-size: 0.85rem;
    color: #666;
    margin-bottom: 0;
    line-height: 1.5;
}

@media (max-width: 991px) {
    .toc-nav {
        display: none;
    }
    
    .terms-section {
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

<!-- Hero Section -->
<header class="position-relative" style="background: linear-gradient(135deg, #fff 0%, #e9f7ef 100%);">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="800">
                <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 mb-3">Legal Document</span>
                <h1 class="display-4 fw-bold mb-3" style="color: #333;">Terms of Use</h1>
                <p class="lead mb-2" style="color: #555;">Clear, transparent terms governing your use of AppNomu SalesQ services and platform.</p>
                <p class="text-muted"><i class="bi bi-calendar3 me-2"></i>Last updated: December 11, 2025</p>
            </div>
            <div class="col-lg-5 d-none d-lg-block text-end" data-aos="fade-left" data-aos-duration="800">
                <img src="https://appnomu.com/landing/assets/images/compressed-original.webp" alt="Terms of Use" class="img-fluid rounded-4 shadow-lg" style="max-height: 280px; object-fit: contain;">
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
                        <li><a href="#acceptance">Acceptance of Terms</a></li>
                        <li><a href="#services">Our Services</a></li>
                        <li><a href="#payments">Payment Terms</a></li>
                        <li><a href="#integrations">Integrations</a></li>
                        <li><a href="#affiliate">Affiliate Program</a></li>
                        <li><a href="#acceptable-use">Acceptable Use</a></li>
                        <li><a href="#liability">Liability & Disclaimers</a></li>
                        <li><a href="#mobile-app">Mobile App Terms</a></li>
                        <li><a href="#spin-win">Spin and Win</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            
            <!-- Main Content Area -->
            <div class="col-lg-9">
                
                <!-- Acceptance of Terms -->
                <section id="acceptance" class="terms-section" data-aos="fade-up">
                    <h2><i class="bi bi-check-circle"></i> 1. Acceptance of Terms</h2>
                    
                    <p>By creating an account, accessing, or using any part of the AppNomu SalesQ platform, you acknowledge that you have read, understood, and agree to be bound by these Terms of Use and our Privacy Policy. These terms constitute a legally binding agreement between you and AppNomu Technologies.</p>
                    
                    <p>If you are using AppNomu SalesQ on behalf of a business or organization, you represent and warrant that you have the authority to bind that entity to these terms. In such cases, "you" and "your" will refer to both you as an individual and the entity you represent.</p>
                    
                    <h3>Who Can Use Our Services</h3>
                    <p>Our platform is designed for businesses and individuals who meet the following criteria:</p>
                    
                    <div class="requirement-list">
                        <div class="requirement-item">
                            <div class="icon"><i class="bi bi-person-check"></i></div>
                            <div>
                                <h5>Age Requirement</h5>
                                <p>You must be at least 18 years old or have reached the age of majority in your jurisdiction.</p>
                            </div>
                        </div>
                        <div class="requirement-item">
                            <div class="icon"><i class="bi bi-file-earmark-text"></i></div>
                            <div>
                                <h5>Legal Capacity</h5>
                                <p>You must have the legal capacity to enter into binding agreements under applicable law.</p>
                            </div>
                        </div>
                        <div class="requirement-item">
                            <div class="icon"><i class="bi bi-building"></i></div>
                            <div>
                                <h5>Legitimate Business</h5>
                                <p>You must operate a legitimate business in compliance with all applicable laws and regulations.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <h4><i class="bi bi-bell me-2"></i>Agreement Updates</h4>
                        <p>We may modify these terms from time to time to reflect changes in our services, legal requirements, or business practices. When we make significant changes, we'll notify you via email at least 30 days in advance and update the "Last updated" date. Your continued use of our services after modifications constitutes acceptance of the updated terms.</p>
                    </div>
                </section>
                
                <!-- Description of Services -->
                <section id="services" class="terms-section" data-aos="fade-up">
                    <h2><i class="bi bi-grid"></i> 2. Description of Services</h2>
                    
                    <p>AppNomu SalesQ provides comprehensive business management software solutions through our web platform (<strong>app.appnomu.com</strong>) and mobile applications (Android & iOS). Our platform is designed to help businesses streamline operations, manage customer relationships, and grow revenue across East Africa and beyond.</p>
                    
                    <h3>Web Platform Features</h3>
                    
                    <div class="feature-grid">
                        <div class="feature-card">
                            <div class="icon"><i class="bi bi-cart-check"></i></div>
                            <h4>Sales & Inventory</h4>
                            <p>Complete product management, sales tracking, low stock alerts, and real-time inventory management.</p>
                        </div>
                        <div class="feature-card">
                            <div class="icon"><i class="bi bi-people"></i></div>
                            <h4>CRM System</h4>
                            <p>Customer management, contact organization, relationship tracking, and customer segmentation.</p>
                        </div>
                        <div class="feature-card">
                            <div class="icon"><i class="bi bi-chat-dots"></i></div>
                            <h4>Bulk SMS</h4>
                            <p>SMS marketing campaigns, personalized messaging, delivery tracking, and scheduled sends.</p>
                        </div>
                        <div class="feature-card">
                            <div class="icon"><i class="bi bi-telephone"></i></div>
                            <h4>Voice Campaigns</h4>
                            <p>Automated voice calls, IVR campaigns, and call analytics across all African countries except Nigeria.</p>
                        </div>
                        <div class="feature-card">
                            <div class="icon"><i class="bi bi-phone"></i></div>
                            <h4>Airtime Services</h4>
                            <p>Instant airtime top-up for MTN and Airtel networks directly from your wallet.</p>
                        </div>
                        <div class="feature-card">
                            <div class="icon"><i class="bi bi-gear-fill"></i></div>
                            <h4>ServiceFlow</h4>
                            <p>Service management, invoicing, and payment processing for Premium & Enterprise users.</p>
                        </div>
                        <div class="feature-card">
                            <div class="icon"><i class="bi bi-robot"></i></div>
                            <h4>SalesQ AI</h4>
                            <p>AI-powered business insights, analytics, recommendations, and intelligent reporting.</p>
                        </div>
                        <div class="feature-card">
                            <div class="icon"><i class="bi bi-receipt"></i></div>
                            <h4>Receipt Link</h4>
                            <p>Digital receipt generation and sharing via SMS, WhatsApp, and email to customers.</p>
                        </div>
                    </div>
                    
                    <div class="highlight-box info">
                        <p><strong><i class="bi bi-star me-2"></i>ServiceFlow Feature:</strong> Available exclusively for Premium and Enterprise users. Includes comprehensive service management, multi-channel invoicing (Email, WhatsApp, SMS), payment gateway integration (Flutterwave, PayPal, Stripe, Mobile Money, Bank Transfers, Cash), and detailed reporting.</p>
                    </div>
                </section>
                
                <!-- Payment Terms -->
                <section id="payments" class="terms-section" data-aos="fade-up">
                    <h2><i class="bi bi-credit-card"></i> 3. Payment Terms</h2>
                    
                    <p>Certain features of our service require payment. By using paid features, you agree to pay all fees and charges associated with your use of AppNomu SalesQ in accordance with our pricing terms. All prices are displayed in Ugandan Shillings (UGX) unless otherwise specified.</p>
                    
                    <h3>Subscription Plans</h3>
                    <p>We offer various subscription tiers with different features and capabilities to meet the needs of businesses of all sizes:</p>
                    
                    <ul>
                        <li><strong>Free Plan:</strong> Basic features with limited usage for small businesses getting started</li>
                        <li><strong>Premium Plan:</strong> Advanced features including ServiceFlow, priority support, and higher limits</li>
                        <li><strong>Enterprise Plan:</strong> Full access to all features, dedicated support, and custom integrations</li>
                    </ul>
                    
                    <p>You may upgrade or downgrade your plan at any time, with changes taking effect at your next billing cycle. All subscription fees are billed in advance on a recurring basis according to your selected billing frequency (monthly or annually).</p>
                    
                    <h3>Usage-Based Services</h3>
                    
                    <table class="pricing-table">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Pricing</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Voice Calls</strong></td>
                                <td>UGX 45 per minute per contact</td>
                                <td>Non-refundable once initiated</td>
                            </tr>
                            <tr>
                                <td><strong>SMS Messages</strong></td>
                                <td>Based on package purchased</td>
                                <td>Bulk discounts available</td>
                            </tr>
                            <tr>
                                <td><strong>Airtime Top-up</strong></td>
                                <td>Face value + small service fee</td>
                                <td>MTN & Airtel Uganda</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="highlight-box">
                        <p><strong><i class="bi bi-exclamation-triangle me-2"></i>Voice Usage:</strong> Voice calling services are billed immediately upon call initiation. Once a voice call is initiated and delivered, charges cannot be refunded regardless of call duration or completion status. Voice services are available in all African countries except Nigeria.</p>
                    </div>
                    
                    <div class="info-card">
                        <h4><i class="bi bi-shield-lock me-2"></i>Secure Payment Processing</h4>
                        <p>We use industry-standard payment processors (Flutterwave, Stripe, PayPal) to handle all transactions securely. Your payment card details are processed directly by these providers and are never stored on our servers in plain text.</p>
                    </div>
                </section>
                
                <!-- Third-Party Integrations -->
                <section id="integrations" class="terms-section" data-aos="fade-up">
                    <h2><i class="bi bi-link-45deg"></i> 4. Third-Party Integrations</h2>
                    
                    <p>AppNomu SalesQ integrates with various trusted third-party services to enhance your business operations. By using these integrations, you agree to comply with the respective terms and conditions of each service provider.</p>
                    
                    <h3>Available Integrations</h3>
                    
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <h4 class="h6 text-success mb-3"><i class="bi bi-credit-card me-2"></i>Payment Gateways</h4>
                            <div class="integration-badges">
                                <span class="integration-badge">Flutterwave</span>
                                <span class="integration-badge">Stripe</span>
                                <span class="integration-badge">PayPal</span>
                                <span class="integration-badge">MTN MoMo</span>
                                <span class="integration-badge">Airtel Money</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="h6 text-success mb-3"><i class="bi bi-people me-2"></i>CRM & Marketing</h4>
                            <div class="integration-badges">
                                <span class="integration-badge">HubSpot</span>
                                <span class="integration-badge">Mailchimp</span>
                                <span class="integration-badge">ConvertKit</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="h6 text-success mb-3"><i class="bi bi-chat me-2"></i>Communication</h4>
                            <div class="integration-badges">
                                <span class="integration-badge">Slack</span>
                                <span class="integration-badge">Microsoft Teams</span>
                                <span class="integration-badge">Zoom</span>
                                <span class="integration-badge">Calendly</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="h6 text-success mb-3"><i class="bi bi-graph-up me-2"></i>Analytics & Support</h4>
                            <div class="integration-badges">
                                <span class="integration-badge">Google Analytics</span>
                                <span class="integration-badge">Mixpanel</span>
                                <span class="integration-badge">Intercom</span>
                                <span class="integration-badge">Cloudflare</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="highlight-box success">
                        <p><strong><i class="bi bi-shield-lock me-2"></i>API Security:</strong> All API keys and authentication tokens you provide for integrations are encrypted using <strong>AES-256 encryption</strong>. We cannot read or access your credentials in plain text, ensuring your connected accounts remain completely secure.</p>
                    </div>
                </section>
                
                <!-- Affiliate Program -->
                <section id="affiliate" class="terms-section" data-aos="fade-up">
                    <h2><i class="bi bi-percent"></i> 5. Affiliate Program</h2>
                    
                    <p>Our affiliate program allows you to earn commissions by referring new customers to AppNomu SalesQ. Participation is subject to approval and compliance with our affiliate terms.</p>
                    
                    <div class="highlight-box success" style="text-align: center;">
                        <h3 style="color: #198754; margin-bottom: 0.5rem; font-size: 2rem;">30%</h3>
                        <p style="margin-bottom: 0;"><strong>Recurring Commission</strong> — Earn 30% of every payment made by customers you refer for as long as they remain active subscribers.</p>
                    </div>
                    
                    <h3>Program Requirements</h3>
                    <p>To participate in our affiliate program, you must:</p>
                    
                    <ul>
                        <li><strong>Be at least 18 years old</strong> and have a valid AppNomu SalesQ account</li>
                        <li><strong>Comply with all applicable laws</strong> and regulations in your jurisdiction</li>
                        <li><strong>Not engage in fraudulent or deceptive practices</strong> to generate referrals</li>
                        <li><strong>Properly disclose affiliate relationships</strong> as required by law in your promotional materials</li>
                        <li><strong>Not use spam, unsolicited messages, or misleading tactics</strong> to promote your referral link</li>
                    </ul>
                    
                    <div class="info-card">
                        <h4><i class="bi bi-info-circle me-2"></i>How It Works</h4>
                        <p>Share your unique referral link with potential customers. When they sign up and make payments, you earn 30% of their subscription fees automatically. Commissions are tracked in your dashboard and paid out monthly via mobile money or bank transfer.</p>
                    </div>
                </section>
                
                <!-- Acceptable Use Policy -->
                <section id="acceptable-use" class="terms-section" data-aos="fade-up">
                    <h2><i class="bi bi-shield-check"></i> 6. Acceptable Use Policy</h2>
                    
                    <p>AppNomu SalesQ is designed to help legitimate businesses grow and succeed. To maintain a safe, fair, and productive environment for all users, you agree to use our platform responsibly and in accordance with the following guidelines.</p>
                    
                    <h3>Prohibited Activities</h3>
                    <p>You may NOT use AppNomu SalesQ to:</p>
                    
                    <div class="requirement-list">
                        <div class="requirement-item danger">
                            <div class="icon"><i class="bi bi-x-lg"></i></div>
                            <div>
                                <h5>Violate Laws</h5>
                                <p>Engage in any activity that violates local, national, or international laws, including fraud, money laundering, or tax evasion.</p>
                            </div>
                        </div>
                        <div class="requirement-item danger">
                            <div class="icon"><i class="bi bi-x-lg"></i></div>
                            <div>
                                <h5>Send Spam</h5>
                                <p>Use SMS or Voice services for bulk unsolicited messages, promotional content without consent, or any form of spam.</p>
                            </div>
                        </div>
                        <div class="requirement-item danger">
                            <div class="icon"><i class="bi bi-x-lg"></i></div>
                            <div>
                                <h5>Infringe IP Rights</h5>
                                <p>Upload or distribute content that infringes copyrights, trademarks, patents, or intellectual property rights.</p>
                            </div>
                        </div>
                        <div class="requirement-item danger">
                            <div class="icon"><i class="bi bi-x-lg"></i></div>
                            <div>
                                <h5>Distribute Malware</h5>
                                <p>Upload viruses, malware, ransomware, or code designed to harm systems or devices.</p>
                            </div>
                        </div>
                        <div class="requirement-item danger">
                            <div class="icon"><i class="bi bi-x-lg"></i></div>
                            <div>
                                <h5>Harass or Abuse</h5>
                                <p>Use the platform to harass, threaten, defame, or abuse other users, customers, or third parties.</p>
                            </div>
                        </div>
                        <div class="requirement-item danger">
                            <div class="icon"><i class="bi bi-x-lg"></i></div>
                            <div>
                                <h5>Manipulate Systems</h5>
                                <p>Exploit bugs, manipulate Spin and Win, create multiple accounts for fraud, or abuse referral programs.</p>
                            </div>
                        </div>
                    </div>
                    
                    <h3>Consequences of Violations</h3>
                    
                    <div class="highlight-box">
                        <p><strong><i class="bi bi-exclamation-triangle me-2"></i>Enforcement:</strong> Violations may result in warnings, feature restrictions, account suspension, permanent termination, and forfeiture of credits. Serious violations may be reported to law enforcement and result in legal action.</p>
                    </div>
                    
                    <h3>Your Rights as a User</h3>
                    <p>While using AppNomu SalesQ, you are entitled to:</p>
                    
                    <ul>
                        <li><strong>Data Ownership:</strong> You own all data you enter, including customer information and sales records. We do not claim ownership</li>
                        <li><strong>Data Portability:</strong> Export your data at any time in standard formats (CSV, PDF)</li>
                        <li><strong>Cancel Anytime:</strong> Cancel your subscription without penalty; access continues until billing period ends</li>
                        <li><strong>Privacy Protection:</strong> Your data is protected according to our Privacy Policy and Ugandan law</li>
                        <li><strong>Fair Treatment:</strong> Equal access to features based on your subscription tier</li>
                        <li><strong>Customer Support:</strong> Access to our support team via email, chat, and phone</li>
                    </ul>
                </section>
                
                <!-- Limitation of Liability -->
                <section id="liability" class="terms-section" data-aos="fade-up">
                    <h2><i class="bi bi-exclamation-triangle"></i> 7. Limitation of Liability & Disclaimers</h2>
                    
                    <p>Please read this section carefully as it limits our liability to you. By using AppNomu SalesQ, you acknowledge and agree to the following limitations.</p>
                    
                    <h3>Service Provided "As Is"</h3>
                    <p>AppNomu SalesQ and all related services are provided on an "as is" and "as available" basis without warranties of any kind, either express or implied, including but not limited to:</p>
                    
                    <ul>
                        <li>Implied warranties of merchantability, fitness for a particular purpose, or non-infringement</li>
                        <li>Warranties that the service will be uninterrupted, error-free, or completely secure</li>
                        <li>Warranties regarding the accuracy, reliability, or completeness of any information provided</li>
                    </ul>
                    
                    <h3>Limitation of Damages</h3>
                    <p>To the maximum extent permitted by law, AppNomu and its directors, employees, partners, and affiliates shall NOT be liable for:</p>
                    
                    <div class="requirement-list">
                        <div class="requirement-item warning">
                            <div class="icon"><i class="bi bi-exclamation-circle"></i></div>
                            <div>
                                <h5>Indirect Damages</h5>
                                <p>Any indirect, incidental, special, consequential, or punitive damages of any kind.</p>
                            </div>
                        </div>
                        <div class="requirement-item warning">
                            <div class="icon"><i class="bi bi-graph-down"></i></div>
                            <div>
                                <h5>Lost Profits</h5>
                                <p>Loss of profits, revenue, data, business opportunities, or goodwill.</p>
                            </div>
                        </div>
                        <div class="requirement-item warning">
                            <div class="icon"><i class="bi bi-wifi-off"></i></div>
                            <div>
                                <h5>Service Interruptions</h5>
                                <p>Damages arising from service interruptions, downtime, or data loss.</p>
                            </div>
                        </div>
                        <div class="requirement-item warning">
                            <div class="icon"><i class="bi bi-people"></i></div>
                            <div>
                                <h5>Third-Party Actions</h5>
                                <p>Actions, omissions, or conduct of third parties using our platform.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="highlight-box info">
                        <p><strong><i class="bi bi-info-circle me-2"></i>Maximum Liability Cap:</strong> In any case where we are found liable, our total liability shall not exceed the total amount you paid to us during the <strong>twelve (12) months</strong> immediately preceding the event giving rise to the claim.</p>
                    </div>
                    
                    <h3>Governing Law & Disputes</h3>
                    <p>These Terms of Use shall be governed by and construed in accordance with the laws of the Republic of Uganda. Any disputes shall be subject to the exclusive jurisdiction of the courts in Kampala, Uganda. Before filing any formal legal claim, you agree to contact us at <strong>legal@appnomu.com</strong> to attempt informal resolution within 30 days.</p>
                </section>
                
                <!-- Mobile App Terms -->
                <section id="mobile-app" class="terms-section" data-aos="fade-up">
                    <h2><i class="bi bi-phone"></i> 8. Mobile App Specific Terms</h2>
                    
                    <p>The following additional terms apply specifically to our mobile application, available on Android (Google Play) and iOS (App Store).</p>
                    
                    <h3>Mobile App Exclusive Features</h3>
                    <p>The following features are available <strong>only in the mobile app</strong> and not on the web platform:</p>
                    
                    <div class="feature-grid">
                        <div class="feature-card">
                            <div class="icon"><i class="bi bi-piggy-bank"></i></div>
                            <h4>Goal Saving</h4>
                            <p>Set and track savings goals for your business with visual progress tracking.</p>
                        </div>
                        <div class="feature-card">
                            <div class="icon"><i class="bi bi-graph-up-arrow"></i></div>
                            <h4>Investment</h4>
                            <p>Access investment opportunities and track returns on your business capital.</p>
                        </div>
                        <div class="feature-card">
                            <div class="icon"><i class="bi bi-calculator"></i></div>
                            <h4>Business Calculator</h4>
                            <p>Calculate profits, margins, and business metrics on the go.</p>
                        </div>
                        <div class="feature-card">
                            <div class="icon"><i class="bi bi-bell"></i></div>
                            <h4>Business Reminders</h4>
                            <p>Set reminders for payments, restocking, and important dates.</p>
                        </div>
                        <div class="feature-card">
                            <div class="icon"><i class="bi bi-cash-coin"></i></div>
                            <h4>Debt Tracker</h4>
                            <p>Track money owed to you and money you owe to suppliers.</p>
                        </div>
                        <div class="feature-card">
                            <div class="icon"><i class="bi bi-trophy"></i></div>
                            <h4>Spin and Win</h4>
                            <p>Rewards program for eligible users (see terms below).</p>
                        </div>
                    </div>
                    
                    <h3>Business Funding (Uganda Only)</h3>
                    
                    <div class="highlight-box">
                        <p><strong><i class="bi bi-geo-alt me-2"></i>Geographic Restriction:</strong> Business funding services are currently available <strong>only to users in Uganda</strong>. You must grant location permission to verify you are operating in Uganda.</p>
                    </div>
                    
                    <ul>
                        <li><strong>Eligibility:</strong> Based on sales history, business revenue, verification documents, and location verification</li>
                        <li><strong>Location Requirement:</strong> We collect your exact GPS location for funding eligibility assessment</li>
                        <li><strong>Repayment:</strong> Must be repaid according to agreed terms and schedule</li>
                        <li><strong>Default Consequences:</strong> May result in account restrictions, credit reporting, and legal action</li>
                    </ul>
                    
                    <h3>Account Deletion</h3>
                    <p>You can delete your account via <strong>Profile → Delete Account</strong> in the app, or by contacting support@appnomu.com. Data is permanently deleted within 30 days, except where retention is required by law or you have outstanding obligations (e.g., unpaid funding).</p>
                </section>
                
                <!-- Spin and Win Terms -->
                <section id="spin-win" class="terms-section" data-aos="fade-up">
                    <h2><i class="bi bi-trophy"></i> 9. Spin and Win Terms & Conditions</h2>
                    
                    <p>The Spin and Win feature is a rewards program available exclusively in the AppNomu SalesQ mobile app. By participating, you agree to the following terms:</p>
                    
                    <h3>Eligibility Requirements</h3>
                    <p>To participate in Spin and Win, you must meet <strong>ALL</strong> of the following criteria:</p>
                    
                    <div class="requirement-list">
                        <div class="requirement-item">
                            <div class="icon"><i class="bi bi-calendar-check"></i></div>
                            <div>
                                <h5>Account Age</h5>
                                <p>Your account must be at least <strong>1 week (7 days) old</strong> from the date of registration.</p>
                            </div>
                        </div>
                        <div class="requirement-item">
                            <div class="icon"><i class="bi bi-wallet2"></i></div>
                            <div>
                                <h5>Minimum Spending</h5>
                                <p>You must have spent at least <strong>UGX 10,000 or more</strong> on the platform (wallet top-ups, airtime, SMS credits, etc.).</p>
                            </div>
                        </div>
                        <div class="requirement-item">
                            <div class="icon"><i class="bi bi-shield-check"></i></div>
                            <div>
                                <h5>Active Account</h5>
                                <p>Your account must be in good standing with no policy violations or outstanding issues.</p>
                            </div>
                        </div>
                    </div>
                    
                    <h3>Spin Frequency & Limits</h3>
                    <table class="pricing-table">
                        <thead>
                            <tr>
                                <th>Rule</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Spin Limit</strong></td>
                                <td>One (1) spin per week for eligible users</td>
                            </tr>
                            <tr>
                                <td><strong>Weekly Reset</strong></td>
                                <td>Eligibility resets every 7 days from your last spin</td>
                            </tr>
                            <tr>
                                <td><strong>Transferability</strong></td>
                                <td>Spins cannot be transferred, sold, or accumulated</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <h3>Prizes & Rewards</h3>
                    <ul>
                        <li><strong>Prize Types:</strong> Prizes may include wallet credits, SMS credits, airtime, discounts, or other rewards</li>
                        <li><strong>Prize Delivery:</strong> Prizes are credited to your account immediately upon winning</li>
                        <li><strong>No Cash Value:</strong> Prizes cannot be exchanged for cash unless explicitly stated</li>
                        <li><strong>Expiration:</strong> Some prizes may have expiration dates as specified at the time of winning</li>
                    </ul>
                    
                    <div class="highlight-box danger">
                        <p><strong><i class="bi bi-exclamation-triangle me-2"></i>Fair Play:</strong> Any attempt to manipulate, exploit, or abuse the Spin and Win system will result in immediate disqualification and potential account suspension. AppNomu reserves the right to modify, suspend, or terminate the program at any time without prior notice.</p>
                    </div>
                </section>
                
                <!-- Contact -->
                <section id="contact" class="terms-section" data-aos="fade-up">
                    <h2><i class="bi bi-headset"></i> 10. Contact & Support</h2>
                    
                    <p>We are committed to providing excellent support and addressing any questions or concerns you may have about these Terms of Use or our services. Here's how to reach us:</p>
                    
                    <div class="contact-grid">
                        <div class="contact-card">
                            <div class="icon"><i class="bi bi-envelope"></i></div>
                            <h4>Legal Inquiries</h4>
                            <a href="mailto:legal@appnomu.com">legal@appnomu.com</a>
                            <p class="mt-2">Terms, privacy, compliance, and legal matters</p>
                        </div>
                        <div class="contact-card">
                            <div class="icon"><i class="bi bi-chat-dots"></i></div>
                            <h4>Technical Support</h4>
                            <a href="mailto:support@appnomu.com">support@appnomu.com</a>
                            <p class="mt-2">Account help and technical issues</p>
                        </div>
                        <div class="contact-card">
                            <div class="icon"><i class="bi bi-telephone"></i></div>
                            <h4>Phone Support</h4>
                            <a href="tel:+256200948420">+256 200 948 420</a>
                            <p class="mt-2">Mon-Fri, 9AM-5PM EAT</p>
                        </div>
                        <div class="contact-card">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4>Physical Address</h4>
                            <p class="mb-0"><strong>AppNomu Technologies</strong><br>77 Market Street<br>Bugiri, Uganda</p>
                        </div>
                    </div>
                    
                    <h3>Response Times</h3>
                    <ul>
                        <li><strong>Email Support:</strong> We aim to respond within 24-48 business hours</li>
                        <li><strong>Legal Inquiries:</strong> Response within 5-7 business days for complex matters</li>
                        <li><strong>In-App Chat:</strong> Real-time support during business hours via Intercom</li>
                        <li><strong>Phone Support:</strong> Immediate assistance during business hours for urgent matters</li>
                    </ul>
                    
                    <div class="info-card" style="margin-top: 2rem;">
                        <h4><i class="bi bi-bell me-2"></i>Terms Updates</h4>
                        <p>We may update these Terms of Use from time to time. When we make significant changes, we'll notify you via email at least 30 days before changes take effect. Minor updates will be posted here with an updated "Last updated" date. Your continued use indicates acceptance of the updated terms.</p>
                    </div>
                </section>
                
                <!-- Effective Date Notice -->
                <div class="alert alert-success border-0 rounded-4 shadow-sm mt-4" data-aos="fade-up">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                        <div>
                            <p class="mb-0"><strong>Effective Date:</strong> These Terms of Use are effective as of <strong>December 11, 2025</strong> and apply to our web platform and mobile application. They are governed by the laws of the Republic of Uganda.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</main>

<!-- Call to Action Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h3 class="fw-bold mb-3">Ready to Get Started?</h3>
                <p class="lead mb-4" style="color: #666;">Join thousands of businesses already using AppNomu SalesQ to grow their operations.</p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="/demo" class="btn btn-success btn-lg rounded-pill px-4">
                        <i class="bi bi-play-circle me-2"></i>Request Demo
                    </a>
                    <a href="/pricing" class="btn btn-outline-success btn-lg rounded-pill px-4">
                        <i class="bi bi-eye me-2"></i>View Pricing
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Back-to-top button -->
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
    
    // Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({ duration: 600, once: true, offset: 100 });
    }
});
</script>

<?php
$content = ob_get_clean();
include 'includes/layout.php';
?>
