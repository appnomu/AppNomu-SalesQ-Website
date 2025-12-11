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

<!-- Hero Section -->
<header class="legal-header position-relative" style="background: #ffffff;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="800">
                <h1 class="mb-3 display-5 fw-bold">Privacy Policy</h1>
                <p class="lead">Last updated: December 11, 2025</p>
                <p class="mb-0">Learn how we collect, use, and protect your personal information in accordance with Ugandan data protection laws.</p>
            </div>
            <div class="col-lg-5 d-none d-lg-block" data-aos="fade-left" data-aos-duration="800">
                <img src="https://appnomu.com/landing/assets/images/compressed-original.webp" alt="Privacy Policy" class="img-fluid rounded-4 shadow-lg" style="max-height: 300px; object-fit: contain;">
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="legal-content py-5">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Main Content Area -->
            <div class="col-lg-10">
                <div class="p-4 bg-light rounded-3 shadow-sm border-start border-success border-3" data-aos="fade-up">
                    <h3 class="text-success mb-3">Your Privacy Matters</h3>
                    
                    <p class="lead">At AppNomu SalesQ, we are committed to protecting your privacy and personal data. This policy explains how we collect, use, and safeguard your information in compliance with Ugandan data protection laws.</p>
                    
                    <p>We believe in transparency and your right to understand how your data is handled. This policy covers all aspects of data processing within our business management platform.</p>
                    
                    <p>Your trust is essential to our business, and we work hard to earn and maintain it through responsible data practices.</p>
                </div>

                <div class="accordion accordion-flush" id="privacyAccordion">
                    
                    <!-- 1. Information We Collect -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-gradient text-dark fw-bold py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#section1" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                <div class="d-flex align-items-center w-100">
                                    <div class="me-3 text-success">
                                        <i class="bi bi-collection fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold">1. Information We Collect</div>
                                        <small class="text-muted">Data we gather to provide our services</small>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="section1" class="accordion-collapse collapse" data-bs-parent="#privacyAccordion">
                            <div class="accordion-body p-4">
                                <h6 class="text-success mb-3">Information You Provide</h6>
                                <p>When you use AppNomu SalesQ, we collect information that you provide directly to us:</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Account information:</strong> Name, email, business details</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Profile information:</strong> Profile picture, contact details</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Business data:</strong> Sales records, inventory, customer information</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Service data:</strong> Service descriptions, pricing, invoices, service completion records, client service history</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Voice data:</strong> Voice call logs, delivery status, call analytics, uploaded MP3 files</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Payment information:</strong> Billing details, transaction history, payment gateway credentials</li>
                                    <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Communication preferences:</strong> Notification settings, contact preferences</li>
                                </ul>

                                <h6 class="text-success mt-4 mb-3">Automatically Collected Information</h6>
                                <p>We automatically collect certain information when you use our services:</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Device information:</strong> Browser type, operating system, IP address</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Usage data:</strong> How you interact with our application, features used, time spent</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Log data:</strong> Access times, pages viewed, system activity</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Location information:</strong> Based on IP address</li>
                                    <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Cookies:</strong> Tracking technologies for improved user experience</li>
                                </ul>

                                <h6 class="text-success mt-4 mb-3">Analytics & Tracking Technologies</h6>
                                <p>We use the following services to analyze usage and improve our platform:</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Mixpanel:</strong> Product analytics and session recording to understand user behavior</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Google Analytics:</strong> Website traffic analysis and visitor insights</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Intercom:</strong> Live chat support and customer communication</li>
                                    <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Cloudflare:</strong> Security, performance optimization, and CDN services</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 2. How We Use Information -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-gradient text-dark fw-bold py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#section2" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                <div class="d-flex align-items-center w-100">
                                    <div class="me-3 text-success">
                                        <i class="bi bi-gear fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold">2. How We Use Your Information</div>
                                        <small class="text-muted">Purposes for data processing</small>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="section2" class="accordion-collapse collapse" data-bs-parent="#privacyAccordion">
                            <div class="accordion-body p-4">
                                <p>We use the collected information for the following purposes:</p>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Service provision:</strong> Providing and maintaining our services</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Personalization:</strong> Customizing your experience</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Transactions:</strong> Processing your payments and purchases</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Communication:</strong> Sending administrative information</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Voice services:</strong> Processing and delivering voice calls, analytics</li>
                                            <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Service management:</strong> Managing service invoices, receipts, and payment processing</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Support:</strong> Providing customer assistance</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Analytics:</strong> Analyzing and improving our services</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Security:</strong> Detecting and preventing fraud</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Legal compliance:</strong> Meeting regulatory requirements</li>
                                            <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Invoice delivery:</strong> Sending invoices via Email, WhatsApp, and SMS</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Third-Party Integrations -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-gradient text-dark fw-bold py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#section3" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                <div class="d-flex align-items-center w-100">
                                    <div class="me-3 text-success">
                                        <i class="bi bi-puzzle fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold">3. Third-Party Integrations & API Security</div>
                                        <small class="text-muted">Connected services and data protection</small>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="section3" class="accordion-collapse collapse" data-bs-parent="#privacyAccordion">
                            <div class="accordion-body p-4">
                                <div class="alert alert-success border-0 mb-4">
                                    <i class="bi bi-shield-lock me-2"></i>
                                    <strong>API Security:</strong> All API keys and authentication tokens are encrypted using AES-256 encryption. We cannot read your credentials in plain text.
                                </div>

                                <h6 class="text-success mb-3">Supported Integrations</h6>
                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <div class="card border-0 bg-light">
                                            <div class="card-body p-3">
                                                <h6 class="text-success mb-2">Payment & Mobile Money</h6>
                                                <div class="d-flex flex-wrap gap-1">
                                                    <span class="badge bg-success bg-opacity-10 text-success">Flutterwave</span>
                                                    <span class="badge bg-success bg-opacity-10 text-success">Stripe</span>
                                                    <span class="badge bg-success bg-opacity-10 text-success">PayPal</span>
                                                    <span class="badge bg-success bg-opacity-10 text-success">Airtel Money</span>
                                                    <span class="badge bg-success bg-opacity-10 text-success">MTN MoMo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-0 bg-light">
                                            <div class="card-body p-3">
                                                <h6 class="text-success mb-2">Communication & CRM</h6>
                                                <div class="d-flex flex-wrap gap-1">
                                                    <span class="badge bg-success bg-opacity-10 text-success">Slack</span>
                                                    <span class="badge bg-success bg-opacity-10 text-success">Teams</span>
                                                    <span class="badge bg-success bg-opacity-10 text-success">HubSpot</span>
                                                    <span class="badge bg-success bg-opacity-10 text-success">Mailchimp</span>
                                                    <span class="badge bg-success bg-opacity-10 text-success">Zoom</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <div class="card border-0 bg-light">
                                            <div class="card-body p-3">
                                                <h6 class="text-success mb-2">Analytics & Live Chat</h6>
                                                <div class="d-flex flex-wrap gap-1">
                                                    <span class="badge bg-success bg-opacity-10 text-success">Mixpanel</span>
                                                    <span class="badge bg-success bg-opacity-10 text-success">Google Analytics</span>
                                                    <span class="badge bg-success bg-opacity-10 text-success">Intercom</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-0 bg-light">
                                            <div class="card-body p-3">
                                                <h6 class="text-success mb-2">Infrastructure & Security</h6>
                                                <div class="d-flex flex-wrap gap-1">
                                                    <span class="badge bg-success bg-opacity-10 text-success">Cloudflare</span>
                                                    <span class="badge bg-success bg-opacity-10 text-success">Infobip SMS</span>
                                                    <span class="badge bg-success bg-opacity-10 text-success">SMTP Email</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="text-success mb-3">What We Do NOT Access</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i> <strong>API Keys:</strong> We cannot read your encrypted API keys or authentication tokens</li>
                                    <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i> <strong>Private Data:</strong> We do not access private data beyond what's necessary for functionality</li>
                                    <li class="mb-0"><i class="bi bi-x-circle-fill text-danger me-2"></i> <strong>Unauthorized Data:</strong> We only access data you explicitly authorize</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Data Security & Your Rights -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-gradient text-dark fw-bold py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#section4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                <div class="d-flex align-items-center w-100">
                                    <div class="me-3 text-success">
                                        <i class="bi bi-shield-check fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold">4. Data Security & Your Rights</div>
                                        <small class="text-muted">Protection measures and user rights</small>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="section4" class="accordion-collapse collapse" data-bs-parent="#privacyAccordion">
                            <div class="accordion-body p-4">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <h6 class="text-success mb-3">Security Measures</h6>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Encryption:</strong> Data in transit and at rest</li>
                                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Access controls:</strong> Role-based permissions</li>
                                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Regular assessments:</strong> Security audits and testing</li>
                                            <li class="mb-0"><i class="bi bi-check-circle text-success me-2"></i> <strong>Incident response:</strong> Defined security procedures</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-success mb-3">Your Rights</h6>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Access:</strong> Right to access your personal information</li>
                                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Correction:</strong> Right to correct inaccurate information</li>
                                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Deletion:</strong> Right to erasure of personal data</li>
                                            <li class="mb-0"><i class="bi bi-check-circle text-success me-2"></i> <strong>Portability:</strong> Right to data portability</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="alert alert-info border-0 mt-4">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-info-circle me-3 fs-4"></i>
                                        <div>
                                            <h6 class="mb-1">Exercise Your Rights</h6>
                                            <p class="mb-0">Contact our Privacy Officer at <a href="mailto:privacy@appnomu.com" class="text-success">privacy@appnomu.com</a> or call <a href="tel:+256200948420" class="text-success">+256 200 948 420</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 5. Data Retention & Sharing -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-gradient text-dark fw-bold py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#section5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                <div class="d-flex align-items-center w-100">
                                    <div class="me-3 text-success">
                                        <i class="bi bi-clock-history fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold">5. Data Retention & Sharing</div>
                                        <small class="text-muted">How long we keep data and when we share it</small>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="section5" class="accordion-collapse collapse" data-bs-parent="#privacyAccordion">
                            <div class="accordion-body p-4">
                                <div class="alert alert-warning border-0 mb-4">
                                    <i class="bi bi-exclamation-triangle me-2"></i>
                                    <strong>Important:</strong> We do not sell your personal information to third parties. We only share your information as described in this policy.
                                </div>

                                <h6 class="text-success mb-3">Retention Periods</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Account information:</strong> Retained while your account is active</li>
                                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Transaction data:</strong> Retained for 7 years per financial regulations</li>
                                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Airtime purchases:</strong> Mobile numbers retained for 180 days, backups for 5 years</li>
                                    <li class="mb-0"><i class="bi bi-check-circle text-success me-2"></i> <strong>Communication data:</strong> Retained for 2 years after last interaction</li>
                                </ul>

                                <h6 class="text-success mt-4 mb-3">When We Share Data</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Service providers:</strong> Payment processing, cloud hosting, customer support</li>
                                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Legal requirements:</strong> When required by law or valid legal requests</li>
                                    <li class="mb-0"><i class="bi bi-check-circle text-success me-2"></i> <strong>Business transfers:</strong> In case of merger, acquisition, or asset sale</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 6. Mobile App Specific Data -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-gradient text-dark fw-bold py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#section6" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                <div class="d-flex align-items-center w-100">
                                    <div class="me-3 text-success">
                                        <i class="bi bi-phone fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold">6. Mobile App Permissions & Data</div>
                                        <small class="text-muted">Permissions requested and data collected by our mobile application</small>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="section6" class="accordion-collapse collapse" data-bs-parent="#privacyAccordion">
                            <div class="accordion-body p-4">
                                <p>Our mobile app requests the following permissions to provide full functionality:</p>
                                
                                <div class="alert alert-warning border-0 mb-4">
                                    <i class="bi bi-exclamation-triangle me-2"></i>
                                    <strong>Important:</strong> All permissions are optional except where noted. You can deny permissions, but some features may not work properly.
                                </div>
                                
                                <h6 class="text-success mb-3"><i class="bi bi-geo-alt me-2"></i>Location Permission (Exact Location)</h6>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Purpose:</strong> Required for Business Funding eligibility verification</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Data Collected:</strong> Exact GPS coordinates when applying for business funding</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Geographic Restriction:</strong> Business funding is currently available <strong>only in Uganda</strong></li>
                                    <li class="mb-0"><i class="bi bi-info-circle-fill text-info me-2"></i> <strong>When Used:</strong> Only when you apply for business funding, not continuously tracked</li>
                                </ul>
                                
                                <h6 class="text-success mb-3"><i class="bi bi-camera me-2"></i>Camera Permission</h6>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Purpose:</strong> Scanning barcodes, taking product photos, document verification</li>
                                    <li class="mb-0"><i class="bi bi-info-circle-fill text-info me-2"></i> <strong>Storage:</strong> Photos are stored locally or uploaded only when you choose to save/share</li>
                                </ul>
                                
                                <h6 class="text-success mb-3"><i class="bi bi-chat-dots me-2"></i>SMS/Messages Permission</h6>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Purpose:</strong> Auto-reading OTP codes for faster verification</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Data Collected:</strong> Only OTP/verification codes from AppNomu, not personal messages</li>
                                    <li class="mb-0"><i class="bi bi-info-circle-fill text-info me-2"></i> <strong>Privacy:</strong> We do not read, store, or access your personal SMS messages</li>
                                </ul>
                                
                                <h6 class="text-success mb-3"><i class="bi bi-bell me-2"></i>Notification Permission</h6>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Purpose:</strong> Sending important alerts about sales, low stock, reminders, and updates</li>
                                    <li class="mb-0"><i class="bi bi-info-circle-fill text-info me-2"></i> <strong>Control:</strong> You can manage notification preferences in app settings</li>
                                </ul>
                                
                                <h6 class="text-success mb-3"><i class="bi bi-folder me-2"></i>Storage Permission</h6>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Purpose:</strong> Downloading and saving exported documents (reports, invoices, receipts)</li>
                                    <li class="mb-0"><i class="bi bi-info-circle-fill text-info me-2"></i> <strong>Access:</strong> We only access files you explicitly choose to upload or download</li>
                                </ul>
                                
                                <h6 class="text-success mb-3">Wallet & Financial Data</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Wallet balance:</strong> For in-app transactions and airtime purchases</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Mobile money number:</strong> For payments (shared with MTN/Airtel)</li>
                                    <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i> <strong>Payment card details:</strong> NOT stored - processed directly by Flutterwave</li>
                                </ul>

                                <h6 class="text-success mt-4 mb-3">Funding Application Data (Uganda Only)</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Funding requests:</strong> Amount, purpose, repayment period</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Eligibility data:</strong> Business revenue, sales history (shared with credit assessment partners)</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Verification documents:</strong> National ID, business documents (stored encrypted)</li>
                                    <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Location data:</strong> Exact GPS location to verify Uganda residency</li>
                                </ul>

                                <h6 class="text-success mt-4 mb-3">Device Data</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Device info:</strong> Device type, OS version, app version</li>
                                    <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Crash reports:</strong> For debugging (via Firebase)</li>
                                </ul>

                                <div class="alert alert-info border-0 mt-4 mb-0">
                                    <i class="bi bi-info-circle me-2"></i>
                                    <strong>Local Storage:</strong> The app uses secure local storage for offline sales, user preferences, and PIN/biometric settings. All sensitive data is encrypted.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 8. Mobile App Exclusive Features Data -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-gradient text-dark fw-bold py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#section7" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                <div class="d-flex align-items-center w-100">
                                    <div class="me-3 text-success">
                                        <i class="bi bi-app-indicator fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold">7. Mobile App Exclusive Features</div>
                                        <small class="text-muted">Data collected for app-only features</small>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="section7" class="accordion-collapse collapse" data-bs-parent="#privacyAccordion">
                            <div class="accordion-body p-4">
                                <p>The following features are available only in our mobile app. Here's how we handle your data for each:</p>
                                
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body p-3">
                                                <h6 class="text-success mb-2"><i class="bi bi-piggy-bank me-2"></i>Goal Saving</h6>
                                                <p class="small mb-0">We store your savings goals, target amounts, and progress. Data is synced to your account for access across devices.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body p-3">
                                                <h6 class="text-success mb-2"><i class="bi bi-graph-up-arrow me-2"></i>Investment</h6>
                                                <p class="small mb-0">Investment preferences, amounts, and returns are stored securely. Financial data is encrypted at rest.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body p-3">
                                                <h6 class="text-success mb-2"><i class="bi bi-calculator me-2"></i>Business Calculator</h6>
                                                <p class="small mb-0">Calculation history is stored locally on your device. No sensitive financial calculations are sent to our servers.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body p-3">
                                                <h6 class="text-success mb-2"><i class="bi bi-alarm me-2"></i>Business Reminders</h6>
                                                <p class="small mb-0">Reminder titles, dates, and settings are synced to enable notifications. Reminder content is encrypted.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body p-3">
                                                <h6 class="text-success mb-2"><i class="bi bi-credit-card-2-back me-2"></i>Debt Tracker</h6>
                                                <p class="small mb-0">Debt records including names, amounts, and due dates are stored securely and synced to your account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body p-3">
                                                <h6 class="text-success mb-2"><i class="bi bi-trophy me-2"></i>Spin and Win</h6>
                                                <p class="small mb-0">We track spin eligibility (account age, spending) and prize history. See Terms of Use for full Spin and Win terms.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="alert alert-success border-0 mt-4 mb-0">
                                    <i class="bi bi-shield-check me-2"></i>
                                    <strong>Data Security:</strong> All mobile app exclusive feature data is encrypted both in transit (TLS 1.3) and at rest (AES-256). Your data is never sold to third parties.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 8. Contact & Privacy Rights -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-gradient text-dark fw-bold py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#section8" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                <div class="d-flex align-items-center w-100">
                                    <div class="me-3 text-success">
                                        <i class="bi bi-headset fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold">8. Contact Us & Exercise Your Privacy Rights</div>
                                        <small class="text-muted">How to reach us and manage your data</small>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="section8" class="accordion-collapse collapse" data-bs-parent="#privacyAccordion">
                            <div class="accordion-body p-4">
                                <p>We are committed to protecting your privacy and responding to your data-related requests. Here's how to contact us and exercise your rights:</p>
                                
                                <div class="row g-4 mb-4">
                                    <div class="col-md-4">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body p-4 text-center">
                                                <div class="mb-3">
                                                    <i class="bi bi-shield-lock-fill fs-1 text-success"></i>
                                                </div>
                                                <h5 class="mb-2">Privacy Officer</h5>
                                                <p class="mb-2"><a href="mailto:privacy@appnomu.com" class="text-success text-decoration-none fw-bold">privacy@appnomu.com</a></p>
                                                <p class="small text-muted mb-0">For data access requests, deletion requests, corrections, or privacy complaints</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body p-4 text-center">
                                                <div class="mb-3">
                                                    <i class="bi bi-telephone-fill fs-1 text-success"></i>
                                                </div>
                                                <h5 class="mb-2">Phone Support</h5>
                                                <p class="mb-2"><a href="tel:+256200948420" class="text-success text-decoration-none fw-bold">+256 200 948 420</a></p>
                                                <p class="small text-muted mb-0">Monday - Friday, 9:00 AM - 5:00 PM (East Africa Time)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body p-4 text-center">
                                                <div class="mb-3">
                                                    <i class="bi bi-geo-alt-fill fs-1 text-success"></i>
                                                </div>
                                                <h5 class="mb-2">Physical Address</h5>
                                                <p class="small mb-0">
                                                    <strong>AppNomu Technologies</strong><br>
                                                    77 Market Street<br>
                                                    Bugiri Municipality<br>
                                                    Eastern Region, Uganda
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <h6 class="text-success mb-3">How to Exercise Your Privacy Rights</h6>
                                <p>Under Ugandan data protection law and international best practices, you have the following rights regarding your personal data:</p>
                                
                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded-3 h-100">
                                            <h6 class="text-success mb-2"><i class="bi bi-eye me-2"></i>Right to Access</h6>
                                            <p class="small mb-0">Request a copy of all personal data we hold about you. We will provide this within 30 days of your verified request.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded-3 h-100">
                                            <h6 class="text-success mb-2"><i class="bi bi-pencil me-2"></i>Right to Correction</h6>
                                            <p class="small mb-0">Request correction of any inaccurate or incomplete personal data. You can also update most information directly in your account settings.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded-3 h-100">
                                            <h6 class="text-success mb-2"><i class="bi bi-trash me-2"></i>Right to Deletion</h6>
                                            <p class="small mb-0">Request deletion of your personal data. Note that some data may be retained for legal or regulatory compliance (e.g., financial records for 7 years).</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded-3 h-100">
                                            <h6 class="text-success mb-2"><i class="bi bi-download me-2"></i>Right to Data Portability</h6>
                                            <p class="small mb-0">Request your data in a machine-readable format (CSV, JSON) that you can transfer to another service provider.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded-3 h-100">
                                            <h6 class="text-success mb-2"><i class="bi bi-hand-thumbs-down me-2"></i>Right to Object</h6>
                                            <p class="small mb-0">Object to processing of your data for marketing purposes. You can opt-out of marketing communications at any time.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded-3 h-100">
                                            <h6 class="text-success mb-2"><i class="bi bi-exclamation-triangle me-2"></i>Right to Complain</h6>
                                            <p class="small mb-0">If you believe your privacy rights have been violated, you may file a complaint with the National Information Technology Authority - Uganda (NITA-U).</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="alert alert-info border-0 mb-4">
                                    <div class="d-flex align-items-start">
                                        <i class="bi bi-clock fs-4 text-info me-3 mt-1"></i>
                                        <div>
                                            <h6 class="text-info mb-2">Response Times</h6>
                                            <p class="mb-0">We will acknowledge your privacy request within 48 hours and provide a full response within 30 days. For complex requests, we may extend this by an additional 30 days with prior notice to you.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="alert alert-success border-0 mb-0">
                                    <div class="d-flex align-items-start">
                                        <i class="bi bi-bell fs-4 text-success me-3 mt-1"></i>
                                        <div>
                                            <h6 class="text-success mb-2">Privacy Policy Updates</h6>
                                            <p class="mb-0">We may update this Privacy Policy from time to time to reflect changes in our practices, legal requirements, or services. When we make significant changes, we will notify you via email at least 30 days before the changes take effect. Minor updates will be posted on this page with an updated "Last updated" date. We encourage you to review this policy periodically.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="alert alert-light border border-success border-opacity-25 rounded-3 mt-5 shadow-sm" data-aos="fade-up">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-info-circle text-success me-3" style="font-size: 1.5rem;"></i>
                        <div>
                            <p class="mb-0">This Privacy Policy is effective as of <strong>December 11, 2025</strong> and applies to our web platform and mobile application. It complies with the Data Protection and Privacy Act of Uganda and other applicable data protection regulations.</p>
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

<!-- Custom CSS for accordion and animations -->
<style>
.accordion-button:not(.collapsed) {
    background: linear-gradient(135deg, #198754 0%, #20c997 100%) !important;
    color: white !important;
}

.accordion-button:focus {
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.accordion-button::after {
    filter: brightness(0) invert(1);
}

.accordion-button:not(.collapsed)::after {
    filter: brightness(0) invert(1);
}

#backToTop.visible {
    opacity: 1 !important;
    visibility: visible !important;
}

#backToTop:hover {
    transform: translateY(-5px);
    box-shadow: 0 0.75rem 1.5rem rgba(0,0,0,.2)!important;
}

@media (max-width: 767.98px) {
    .accordion-button {
        padding: 1rem !important;
        font-size: 0.9rem;
    }
    
    .accordion-body {
        padding: 1rem !important;
    }
}
</style>

<!-- JavaScript for accordion and back-to-top functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Back to top button functionality
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
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Initialize AOS if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 600,
            once: true,
            offset: 100
        });
    }
});
</script>

<?php
$content = ob_get_clean();
include 'includes/layout.php';
?>
