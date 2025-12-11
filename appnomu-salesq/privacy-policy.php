<?php
$current_page = 'privacy';
$page_title = 'Privacy Policy | AppNomu SalesQ';
$page_description = 'Learn how we collect, use, and protect your personal information in accordance with Ugandan data protection laws.';

// Set page-specific keywords for SEO
$page_keywords = 'Data Privacy Uganda, Privacy Policy Africa, GDPR Compliance Uganda, Business Data Protection, Information Security Policy, Uganda Data Protection, Customer Privacy Rights, Business Data Security Africa';

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
.privacy-section {
    background: #fff;
    border-radius: 16px;
    padding: 2.5rem;
    margin-bottom: 2rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    border: 1px solid rgba(25, 135, 84, 0.1);
}

.privacy-section h2 {
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

.privacy-section h2 i {
    font-size: 1.75rem;
}

.privacy-section h3 {
    color: #333;
    font-size: 1.15rem;
    font-weight: 600;
    margin-top: 1.75rem;
    margin-bottom: 1rem;
}

.privacy-section p {
    color: #555;
    line-height: 1.8;
    margin-bottom: 1rem;
}

.privacy-section ul {
    padding-left: 0;
    list-style: none;
}

.privacy-section ul li {
    padding: 0.5rem 0;
    padding-left: 1.75rem;
    position: relative;
    color: #555;
    line-height: 1.7;
}

.privacy-section ul li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #198754;
    font-weight: bold;
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

.permission-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.25rem;
    margin: 1.5rem 0;
}

.permission-card {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 1.5rem;
    border: 1px solid #e9ecef;
    transition: all 0.3s ease;
}

.permission-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    border-color: rgba(25, 135, 84, 0.3);
}

.permission-card .icon {
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, #198754 0%, #20c997 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
}

.permission-card .icon i {
    color: white;
    font-size: 1.5rem;
}

.permission-card h4 {
    font-size: 1.05rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 0.75rem;
}

.permission-card p {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 0;
    line-height: 1.6;
}

.data-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin: 1.5rem 0;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.data-table th {
    background: linear-gradient(135deg, #198754 0%, #20c997 100%);
    color: white;
    padding: 1rem 1.25rem;
    text-align: left;
    font-weight: 600;
}

.data-table td {
    padding: 1rem 1.25rem;
    border-bottom: 1px solid #e9ecef;
    color: #555;
}

.data-table tr:last-child td {
    border-bottom: none;
}

.data-table tr:nth-child(even) {
    background: #f8f9fa;
}

.rights-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
    margin: 1.5rem 0;
}

.rights-card {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 10px;
    padding: 1.25rem;
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.rights-card .icon {
    width: 40px;
    height: 40px;
    min-width: 40px;
    background: rgba(25, 135, 84, 0.1);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.rights-card .icon i {
    color: #198754;
    font-size: 1.25rem;
}

.rights-card h5 {
    font-size: 0.95rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 0.35rem;
}

.rights-card p {
    font-size: 0.85rem;
    color: #666;
    margin-bottom: 0;
    line-height: 1.5;
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

@media (max-width: 991px) {
    .toc-nav {
        display: none;
    }
    
    .privacy-section {
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
                <h1 class="display-4 fw-bold mb-3" style="color: #333;">Privacy Policy</h1>
                <p class="lead mb-2" style="color: #555;">Your privacy matters to us. This policy explains how we collect, use, and protect your information.</p>
                <p class="text-muted"><i class="bi bi-calendar3 me-2"></i>Last updated: December 11, 2025</p>
            </div>
            <div class="col-lg-5 d-none d-lg-block text-end" data-aos="fade-left" data-aos-duration="800">
                <img src="https://appnomu.com/landing/assets/images/compressed-original.webp" alt="Privacy Policy" class="img-fluid rounded-4 shadow-lg" style="max-height: 280px; object-fit: contain;">
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
                        <li><a href="#introduction">Introduction</a></li>
                        <li><a href="#data-collection">Data We Collect</a></li>
                        <li><a href="#data-usage">How We Use Data</a></li>
                        <li><a href="#third-party">Third-Party Services</a></li>
                        <li><a href="#data-security">Data Security</a></li>
                        <li><a href="#mobile-app">Mobile App Data</a></li>
                        <li><a href="#data-retention">Data Retention</a></li>
                        <li><a href="#your-rights">Your Rights</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            
            <!-- Main Content Area -->
            <div class="col-lg-9">
                
                <!-- Introduction -->
                <section id="introduction" class="privacy-section" data-aos="fade-up">
                    <h2><i class="bi bi-shield-check"></i> Introduction</h2>
                    
                    <p>At AppNomu SalesQ, we are deeply committed to protecting your privacy and safeguarding your personal data. This Privacy Policy explains in clear, straightforward language how we collect, use, store, and protect your information when you use our business management platform.</p>
                    
                    <p>We operate in full compliance with the <strong>Data Protection and Privacy Act of Uganda</strong> and adhere to international data protection best practices. Your trust is the foundation of our business, and we take our responsibility to protect your data seriously.</p>
                    
                    <div class="info-card">
                        <h4><i class="bi bi-info-circle me-2"></i>Key Commitments</h4>
                        <p>We will never sell your personal data to third parties. We only collect data necessary to provide our services. You have full control over your data and can request access, correction, or deletion at any time.</p>
                    </div>
                    
                    <p>This policy applies to all AppNomu SalesQ services, including our web application at <strong>appnomu.com/client/dashboard.php</strong> and our mobile applications for Android and iOS. By using our services, you agree to the collection and use of information as described in this policy.</p>
                </section>
                
                <!-- Data Collection -->
                <section id="data-collection" class="privacy-section" data-aos="fade-up">
                    <h2><i class="bi bi-collection"></i> Information We Collect</h2>
                    
                    <p>To provide you with a comprehensive business management solution, we collect different types of information. We always aim to collect only what is necessary to deliver our services effectively.</p>
                    
                    <h3>Information You Provide Directly</h3>
                    <p>When you create an account or use our services, you voluntarily provide us with certain information:</p>
                    
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Data Type</th>
                                <th>Examples</th>
                                <th>Purpose</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Account Information</strong></td>
                                <td>Name, email, phone number, business name</td>
                                <td>Account creation & authentication</td>
                            </tr>
                            <tr>
                                <td><strong>Business Data</strong></td>
                                <td>Products, sales records, inventory, customers</td>
                                <td>Core service functionality</td>
                            </tr>
                            <tr>
                                <td><strong>Payment Information</strong></td>
                                <td>Billing address, transaction history</td>
                                <td>Processing payments & subscriptions</td>
                            </tr>
                            <tr>
                                <td><strong>Communication Data</strong></td>
                                <td>SMS content, voice recordings, email templates</td>
                                <td>Marketing campaigns & customer outreach</td>
                            </tr>
                            <tr>
                                <td><strong>Service Records</strong></td>
                                <td>Invoices, receipts, service descriptions</td>
                                <td>ServiceFlow feature functionality</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <h3>Information Collected Automatically</h3>
                    <p>When you use our platform, we automatically collect certain technical information to improve your experience and maintain security:</p>
                    
                    <ul>
                        <li><strong>Device Information:</strong> Browser type, operating system, device model, and screen resolution to optimize display</li>
                        <li><strong>Usage Analytics:</strong> Pages visited, features used, time spent, and interaction patterns to improve our service</li>
                        <li><strong>Log Data:</strong> IP address, access times, and system activity for security monitoring</li>
                        <li><strong>Cookies:</strong> Small files stored on your device to remember preferences and maintain sessions</li>
                    </ul>
                    
                    <div class="highlight-box info">
                        <p><strong><i class="bi bi-lightbulb me-2"></i>Note:</strong> We use analytics tools like Mixpanel and Google Analytics to understand how users interact with our platform. This helps us identify areas for improvement and develop new features that meet your needs.</p>
                    </div>
                </section>
                
                <!-- Data Usage -->
                <section id="data-usage" class="privacy-section" data-aos="fade-up">
                    <h2><i class="bi bi-gear"></i> How We Use Your Information</h2>
                    
                    <p>We use your information for specific, legitimate purposes that directly benefit your experience with AppNomu SalesQ. We never use your data in ways that you wouldn't reasonably expect.</p>
                    
                    <h3>Primary Uses</h3>
                    
                    <div class="permission-grid">
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-box-seam"></i></div>
                            <h4>Service Delivery</h4>
                            <p>Providing and maintaining all platform features including sales tracking, inventory management, CRM, and reporting.</p>
                        </div>
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-credit-card"></i></div>
                            <h4>Payment Processing</h4>
                            <p>Processing your subscription payments, wallet top-ups, and facilitating payments through ServiceFlow invoices.</p>
                        </div>
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-chat-dots"></i></div>
                            <h4>Communication</h4>
                            <p>Sending important account notifications, security alerts, feature updates, and responding to your support requests.</p>
                        </div>
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-graph-up"></i></div>
                            <h4>Analytics & Improvement</h4>
                            <p>Analyzing usage patterns to improve features, fix bugs, enhance performance, and develop new capabilities.</p>
                        </div>
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-shield-lock"></i></div>
                            <h4>Security & Fraud Prevention</h4>
                            <p>Detecting and preventing fraudulent activity, unauthorized access, and protecting the integrity of our platform.</p>
                        </div>
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-file-text"></i></div>
                            <h4>Legal Compliance</h4>
                            <p>Meeting regulatory requirements, responding to legal requests, and maintaining records as required by Ugandan law.</p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <h4><i class="bi bi-envelope me-2"></i>Marketing Communications</h4>
                        <p>We may occasionally send you information about new features, promotions, or tips for using AppNomu SalesQ. You can opt out of marketing emails at any time by clicking the unsubscribe link or adjusting your notification preferences in your account settings.</p>
                    </div>
                </section>
                
                <!-- Third-Party Services -->
                <section id="third-party" class="privacy-section" data-aos="fade-up">
                    <h2><i class="bi bi-puzzle"></i> Third-Party Services & Integrations</h2>
                    
                    <p>AppNomu SalesQ integrates with trusted third-party services to provide you with a comprehensive business management experience. We carefully vet all partners to ensure they meet our security and privacy standards.</p>
                    
                    <h3>Payment Processing Partners</h3>
                    <p>We work with leading payment providers to process transactions securely. Your payment card details are processed directly by these providers and are <strong>never stored on our servers</strong>:</p>
                    
                    <ul>
                        <li><strong>Flutterwave:</strong> Handles card payments, mobile money transactions, and wallet top-ups</li>
                        <li><strong>Stripe & PayPal:</strong> Process international card payments for ServiceFlow invoices</li>
                        <li><strong>MTN Mobile Money & Airtel Money:</strong> Process local mobile money payments in Uganda</li>
                    </ul>
                    
                    <h3>Communication Services</h3>
                    <p>To power our SMS, voice, and email features, we partner with:</p>
                    
                    <ul>
                        <li><strong>Infobip:</strong> Delivers SMS messages for bulk SMS campaigns and notifications</li>
                        <li><strong>Voice Service Providers:</strong> Enable automated voice calls across Africa</li>
                        <li><strong>SMTP Providers:</strong> Send transactional and marketing emails</li>
                    </ul>
                    
                    <h3>Analytics & Support</h3>
                    <ul>
                        <li><strong>Mixpanel:</strong> Product analytics to understand user behavior and improve features</li>
                        <li><strong>Google Analytics:</strong> Website traffic analysis and visitor insights</li>
                        <li><strong>Intercom:</strong> Live chat support and in-app customer communication</li>
                        <li><strong>Cloudflare:</strong> Security, performance optimization, and content delivery</li>
                    </ul>
                    
                    <div class="highlight-box">
                        <p><strong><i class="bi bi-shield-lock me-2"></i>API Security:</strong> All API keys and authentication tokens you provide for integrations (HubSpot, Mailchimp, Slack, etc.) are encrypted using <strong>AES-256 encryption</strong>. We cannot read your credentials in plain text, ensuring your connected accounts remain secure.</p>
                    </div>
                </section>
                
                <!-- Data Security -->
                <section id="data-security" class="privacy-section" data-aos="fade-up">
                    <h2><i class="bi bi-lock"></i> Data Security</h2>
                    
                    <p>Protecting your data is a top priority. We implement industry-standard security measures and continuously monitor for potential threats to keep your information safe.</p>
                    
                    <h3>Security Measures We Implement</h3>
                    
                    <div class="permission-grid">
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-file-earmark-lock"></i></div>
                            <h4>Encryption</h4>
                            <p>All data is encrypted in transit using TLS 1.3 and at rest using AES-256 encryption. Your sensitive information is never stored in plain text.</p>
                        </div>
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-person-lock"></i></div>
                            <h4>Access Controls</h4>
                            <p>Role-based access controls ensure that only authorized personnel can access your data, and only for legitimate business purposes.</p>
                        </div>
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-shield-exclamation"></i></div>
                            <h4>Security Monitoring</h4>
                            <p>24/7 monitoring for suspicious activity, with automated alerts and incident response procedures in place.</p>
                        </div>
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-arrow-repeat"></i></div>
                            <h4>Regular Backups</h4>
                            <p>Your data is backed up regularly to secure, geographically distributed servers to prevent data loss.</p>
                        </div>
                    </div>
                    
                    <div class="highlight-box danger">
                        <p><strong><i class="bi bi-exclamation-triangle me-2"></i>Your Responsibility:</strong> While we protect your data on our end, please ensure you use a strong, unique password for your account and enable two-factor authentication. Never share your login credentials with others.</p>
                    </div>
                </section>
                
                <!-- Mobile App Data -->
                <section id="mobile-app" class="privacy-section" data-aos="fade-up">
                    <h2><i class="bi bi-phone"></i> Mobile App Permissions & Data</h2>
                    
                    <p>Our mobile app (available on Android and iOS) requests certain permissions to provide full functionality. All permissions are optional unless specifically noted, and you can deny any permission—though some features may not work without them.</p>
                    
                    <h3>Permissions We Request</h3>
                    
                    <div class="permission-grid">
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4>Location (Exact GPS)</h4>
                            <p><strong>Purpose:</strong> Required for Business Funding eligibility verification in Uganda. We collect your exact location only when applying for funding—not continuously.</p>
                        </div>
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-camera"></i></div>
                            <h4>Camera</h4>
                            <p><strong>Purpose:</strong> Scanning product barcodes, taking product photos, and verifying identity documents. Photos are stored locally unless you choose to upload them.</p>
                        </div>
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-chat-text"></i></div>
                            <h4>SMS/Messages</h4>
                            <p><strong>Purpose:</strong> Auto-reading OTP verification codes for faster login. We only read codes from AppNomu—never your personal messages.</p>
                        </div>
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-bell"></i></div>
                            <h4>Notifications</h4>
                            <p><strong>Purpose:</strong> Sending alerts about sales, low stock warnings, payment reminders, and important updates. Fully customizable in settings.</p>
                        </div>
                        <div class="permission-card">
                            <div class="icon"><i class="bi bi-folder"></i></div>
                            <h4>Storage</h4>
                            <p><strong>Purpose:</strong> Downloading and saving exported documents like reports, invoices, and receipts in PDF or CSV format.</p>
                        </div>
                    </div>
                    
                    <h3>Mobile App Exclusive Features</h3>
                    <p>The following features are available only in our mobile app, with their associated data handling:</p>
                    
                    <ul>
                        <li><strong>Goal Saving:</strong> Your savings goals and progress are synced to your account for access across devices</li>
                        <li><strong>Investment:</strong> Investment preferences and returns are stored securely with encryption</li>
                        <li><strong>Business Calculator:</strong> Calculation history is stored locally on your device only</li>
                        <li><strong>Business Reminders:</strong> Reminder data is synced to enable cross-device notifications</li>
                        <li><strong>Debt Tracker:</strong> Debt records are encrypted and synced to your account</li>
                        <li><strong>Spin and Win:</strong> We track eligibility (account age, spending) and prize history</li>
                    </ul>
                    
                    <div class="info-card">
                        <h4><i class="bi bi-geo-alt-fill me-2"></i>Business Funding (Uganda Only)</h4>
                        <p>Business funding is currently available only to users in Uganda. When you apply, we collect your exact GPS location to verify you are operating in Uganda. This location data is used solely for funding eligibility and is not continuously tracked.</p>
                    </div>
                </section>
                
                <!-- Data Retention -->
                <section id="data-retention" class="privacy-section" data-aos="fade-up">
                    <h2><i class="bi bi-clock-history"></i> Data Retention & Sharing</h2>
                    
                    <p>We retain your data only for as long as necessary to provide our services and comply with legal obligations. Here's how long we keep different types of data:</p>
                    
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Data Category</th>
                                <th>Retention Period</th>
                                <th>Reason</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Account Information</strong></td>
                                <td>While account is active + 30 days</td>
                                <td>Service provision & account recovery</td>
                            </tr>
                            <tr>
                                <td><strong>Transaction Records</strong></td>
                                <td>7 years</td>
                                <td>Ugandan financial regulations</td>
                            </tr>
                            <tr>
                                <td><strong>Airtime Purchase Numbers</strong></td>
                                <td>180 days (5 years in backups)</td>
                                <td>Service verification & dispute resolution</td>
                            </tr>
                            <tr>
                                <td><strong>Communication Logs</strong></td>
                                <td>2 years after last interaction</td>
                                <td>Support history & compliance</td>
                            </tr>
                            <tr>
                                <td><strong>Analytics Data</strong></td>
                                <td>26 months</td>
                                <td>Service improvement & trend analysis</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <h3>When We Share Your Data</h3>
                    <p>We do not sell your personal information. We only share data in the following circumstances:</p>
                    
                    <ul>
                        <li><strong>Service Providers:</strong> With trusted partners who help us operate (payment processors, hosting, analytics) under strict confidentiality agreements</li>
                        <li><strong>Legal Requirements:</strong> When required by law, court order, or valid government request</li>
                        <li><strong>Business Transfers:</strong> In case of merger, acquisition, or asset sale, with advance notice to you</li>
                        <li><strong>With Your Consent:</strong> For any other purpose, only with your explicit permission</li>
                    </ul>
                </section>
                
                <!-- Your Rights -->
                <section id="your-rights" class="privacy-section" data-aos="fade-up">
                    <h2><i class="bi bi-person-check"></i> Your Privacy Rights</h2>
                    
                    <p>Under the Data Protection and Privacy Act of Uganda and international best practices, you have significant rights regarding your personal data. We make it easy for you to exercise these rights.</p>
                    
                    <div class="rights-grid">
                        <div class="rights-card">
                            <div class="icon"><i class="bi bi-eye"></i></div>
                            <div>
                                <h5>Right to Access</h5>
                                <p>Request a complete copy of all personal data we hold about you. We'll provide it within 30 days.</p>
                            </div>
                        </div>
                        <div class="rights-card">
                            <div class="icon"><i class="bi bi-pencil"></i></div>
                            <div>
                                <h5>Right to Correction</h5>
                                <p>Request correction of any inaccurate or incomplete data. Update most info directly in your settings.</p>
                            </div>
                        </div>
                        <div class="rights-card">
                            <div class="icon"><i class="bi bi-trash"></i></div>
                            <div>
                                <h5>Right to Deletion</h5>
                                <p>Request deletion of your personal data, subject to legal retention requirements.</p>
                            </div>
                        </div>
                        <div class="rights-card">
                            <div class="icon"><i class="bi bi-download"></i></div>
                            <div>
                                <h5>Right to Portability</h5>
                                <p>Export your data in machine-readable formats (CSV, JSON) for use elsewhere.</p>
                            </div>
                        </div>
                        <div class="rights-card">
                            <div class="icon"><i class="bi bi-hand-thumbs-down"></i></div>
                            <div>
                                <h5>Right to Object</h5>
                                <p>Object to processing for marketing purposes. Opt out of marketing communications anytime.</p>
                            </div>
                        </div>
                        <div class="rights-card">
                            <div class="icon"><i class="bi bi-exclamation-triangle"></i></div>
                            <div>
                                <h5>Right to Complain</h5>
                                <p>File a complaint with NITA-U if you believe your privacy rights have been violated.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <h4><i class="bi bi-clock me-2"></i>Response Timeline</h4>
                        <p>We acknowledge all privacy requests within 48 hours and provide a full response within 30 days. For complex requests, we may extend this by an additional 30 days with prior notice.</p>
                    </div>
                    
                    <h3>Account Deletion</h3>
                    <p>You can delete your account at any time through <strong>Profile → Delete Account</strong> in the mobile app, or by emailing support@appnomu.com. Upon deletion:</p>
                    
                    <ul>
                        <li>Your account and profile data will be permanently deleted within 30 days</li>
                        <li>Some data may be retained for legal compliance (e.g., financial records for 7 years)</li>
                        <li>Data cannot be recovered after deletion is complete</li>
                        <li>Outstanding obligations (e.g., unpaid funding) must be settled before deletion</li>
                    </ul>
                </section>
                
                <!-- Contact -->
                <section id="contact" class="privacy-section" data-aos="fade-up">
                    <h2><i class="bi bi-headset"></i> Contact Us</h2>
                    
                    <p>If you have any questions about this Privacy Policy, want to exercise your privacy rights, or have concerns about how we handle your data, please reach out to us:</p>
                    
                    <div class="contact-grid">
                        <div class="contact-card">
                            <div class="icon"><i class="bi bi-shield-lock"></i></div>
                            <h4>Privacy Officer</h4>
                            <a href="mailto:privacy@appnomu.com">privacy@appnomu.com</a>
                            <p class="mt-2">For data requests, privacy concerns, and GDPR inquiries</p>
                        </div>
                        <div class="contact-card">
                            <div class="icon"><i class="bi bi-chat-dots"></i></div>
                            <h4>General Support</h4>
                            <a href="mailto:support@appnomu.com">support@appnomu.com</a>
                            <p class="mt-2">For technical help and account questions</p>
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
                    
                    <div class="info-card" style="margin-top: 2rem;">
                        <h4><i class="bi bi-bell me-2"></i>Policy Updates</h4>
                        <p>We may update this Privacy Policy from time to time. When we make significant changes, we'll notify you via email at least 30 days before changes take effect. Minor updates will be posted here with an updated "Last updated" date.</p>
                    </div>
                </section>
                
                <!-- Effective Date Notice -->
                <div class="alert alert-success border-0 rounded-4 shadow-sm mt-4" data-aos="fade-up">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-3 fs-4"></i>
                        <div>
                            <p class="mb-0"><strong>Effective Date:</strong> This Privacy Policy is effective as of <strong>December 11, 2025</strong> and applies to our web platform and mobile application. It complies with the Data Protection and Privacy Act of Uganda.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</main>

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
