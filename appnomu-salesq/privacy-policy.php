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
                <p class="lead">Last updated: November 30, 2025</p>
                <p class="mb-0">Learn how we collect, use, and protect your personal information across our web platform and mobile application in accordance with Ugandan data protection laws and GDPR.</p>
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
                    
                    <p class="lead">At AppNomu SalesQ Limited, we are committed to protecting your privacy and personal data. This policy explains how we collect, use, and safeguard your information across our web platform and mobile application (Version 1.0.2) in compliance with Ugandan data protection laws and GDPR.</p>
                    
                    <p>We believe in transparency and your right to understand how your data is handled. This policy covers all aspects of data processing within our business management platform, including sales tracking, inventory management, customer relationship management, and funding services.</p>
                    
                    <p>Your trust is essential to our business, and we work hard to earn and maintain it through responsible data practices. This policy applies to users in Uganda and globally.</p>
                    
                    <div class="mt-3 p-3 bg-white rounded border">
                        <strong class="text-success"><i class="bi bi-building me-2"></i>Data Controller:</strong><br>
                        AppNomu SalesQ Limited<br>
                        Kampala, Uganda<br>
                        Website: <a href="https://appnomu.com" class="text-success">https://appnomu.com</a>
                    </div>
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
                                <h6 class="text-success mb-3"><i class="bi bi-person me-2"></i>1.1 Account Registration Data</h6>
                                <p>When you create an account on AppNomu SalesQ, we collect:</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Full Name:</strong> For user identification (stored on server and locally)</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Email Address:</strong> For login and notifications (shared with email service provider)</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Phone Number:</strong> For account verification and support (shared with SMS provider)</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Password:</strong> For authentication (stored hashed on server only)</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Country:</strong> For localization and compliance</li>
                                    <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Currency Preference:</strong> For display formatting</li>
                                </ul>

                                <h6 class="text-success mt-4 mb-3"><i class="bi bi-briefcase me-2"></i>1.2 Business Information</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Business Name:</strong> For business identification</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Business Type:</strong> For analytics and recommendations</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Business Address:</strong> For funding verification</li>
                                    <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Business Registration:</strong> For funding eligibility</li>
                                </ul>

                                <h6 class="text-success mt-4 mb-3"><i class="bi bi-wallet2 me-2"></i>1.3 Financial Information</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Wallet Balance:</strong> For in-app transactions (server only)</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Transaction History:</strong> For record keeping</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Payment Card Details:</strong> For wallet top-up (NOT stored - processed by Flutterwave)</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Mobile Money Number:</strong> For payments (shared with payment providers)</li>
                                    <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Bank Account (optional):</strong> For withdrawals (stored encrypted, shared with banking partners)</li>
                                </ul>

                                <h6 class="text-success mt-4 mb-3"><i class="bi bi-cart me-2"></i>1.4 Business Data</h6>
                                <p>We collect and store the following business operational data:</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="fw-bold text-muted mb-2">Sales Data:</p>
                                        <ul class="list-unstyled small">
                                            <li class="mb-1"><i class="bi bi-dot text-success"></i> Sale amount, date/time</li>
                                            <li class="mb-1"><i class="bi bi-dot text-success"></i> Products sold, payment method</li>
                                            <li class="mb-1"><i class="bi bi-dot text-success"></i> Customer (if linked), sale notes</li>
                                        </ul>
                                        <p class="fw-bold text-muted mb-2 mt-3">Product/Inventory Data:</p>
                                        <ul class="list-unstyled small">
                                            <li class="mb-1"><i class="bi bi-dot text-success"></i> Product name, description, price</li>
                                            <li class="mb-1"><i class="bi bi-dot text-success"></i> Cost price, stock quantity</li>
                                            <li class="mb-1"><i class="bi bi-dot text-success"></i> Product images, SKU/barcode, category</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="fw-bold text-muted mb-2">Customer Data:</p>
                                        <ul class="list-unstyled small">
                                            <li class="mb-1"><i class="bi bi-dot text-success"></i> Customer name, phone, email</li>
                                            <li class="mb-1"><i class="bi bi-dot text-success"></i> Address, purchase history, notes</li>
                                        </ul>
                                        <p class="fw-bold text-muted mb-2 mt-3">Service & Expense Data:</p>
                                        <ul class="list-unstyled small">
                                            <li class="mb-1"><i class="bi bi-dot text-success"></i> Service name, price, description</li>
                                            <li class="mb-1"><i class="bi bi-dot text-success"></i> Expense amount, category, date</li>
                                            <li class="mb-1"><i class="bi bi-dot text-success"></i> Receipt images (cloud storage)</li>
                                        </ul>
                                    </div>
                                </div>

                                <h6 class="text-success mt-4 mb-3"><i class="bi bi-cash-stack me-2"></i>1.5 Funding Application Data</h6>
                                <p>If you apply for funding through our platform:</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Funding Request:</strong> Requested amount, loan purpose, repayment period</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Eligibility Data:</strong> Business revenue, sales history (shared with credit assessment partners)</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Verification Documents:</strong> National ID, business documents (stored encrypted, shared with verification services)</li>
                                    <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Repayment Data:</strong> Repayment amounts, dates, outstanding balance</li>
                                </ul>

                                <h6 class="text-success mt-4 mb-3"><i class="bi bi-phone me-2"></i>1.6 Device & Technical Data</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Device Information:</strong> Device type, operating system, app version</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Usage Data:</strong> Screen views, feature usage, session duration (anonymized)</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Crash Reports & Error Logs:</strong> For bug fixing and debugging</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Location (from IP):</strong> Country-level for localization</li>
                                    <li class="mb-0"><i class="bi bi-x-circle-fill text-danger me-2"></i> <strong>GPS Location:</strong> NOT COLLECTED</li>
                                </ul>

                                <div class="alert alert-info border-0 mt-4 mb-0">
                                    <i class="bi bi-info-circle me-2"></i>
                                    <strong>Mobile App Note:</strong> Our mobile app uses local storage (AsyncStorage) for user preferences and cached data, and secure storage for PIN and biometric settings. All sensitive data is encrypted at rest.
                                </div>
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
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Transactions:</strong> Processing payments and wallet top-ups</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Funding:</strong> Assessing funding eligibility and processing applications</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Communication:</strong> Sending notifications and updates</li>
                                            <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Service management:</strong> Managing invoices, receipts, and records</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Support:</strong> Providing customer assistance via Intercom, WhatsApp, email</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Analytics:</strong> Analyzing and improving app performance</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Security:</strong> Detecting and preventing fraud</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Legal compliance:</strong> Meeting regulatory requirements</li>
                                            <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Credit scoring:</strong> Evaluating funding applications based on sales history</li>
                                        </ul>
                                    </div>
                                </div>

                                <h6 class="text-success mt-4 mb-3">Legal Basis for Processing (GDPR Compliance)</h6>
                                <div class="table-responsive">
                                    <table class="table table-sm table-bordered mb-0">
                                        <thead class="table-success">
                                            <tr>
                                                <th>Processing Activity</th>
                                                <th>Legal Basis</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>Account creation</td><td>Contract performance</td></tr>
                                            <tr><td>Sales tracking</td><td>Contract performance</td></tr>
                                            <tr><td>Payment processing</td><td>Contract performance</td></tr>
                                            <tr><td>Funding applications</td><td>Contract performance</td></tr>
                                            <tr><td>Marketing emails</td><td>Consent</td></tr>
                                            <tr><td>Analytics</td><td>Legitimate interest</td></tr>
                                            <tr><td>Security monitoring</td><td>Legitimate interest</td></tr>
                                            <tr><td>Legal compliance</td><td>Legal obligation</td></tr>
                                        </tbody>
                                    </table>
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

                                <h6 class="text-success mb-3">Payment Processing Partners</h6>
                                <div class="table-responsive mb-4">
                                    <table class="table table-sm table-bordered">
                                        <thead class="table-light">
                                            <tr><th>Service</th><th>Data Shared</th><th>Purpose</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td><strong>Flutterwave</strong></td><td>Payment details, amount, user ID</td><td>Wallet top-up, payments</td></tr>
                                            <tr><td><strong>MTN Mobile Money</strong></td><td>Phone number, amount</td><td>Airtime purchase, payments</td></tr>
                                            <tr><td><strong>Airtel Money</strong></td><td>Phone number, amount</td><td>Airtime purchase, payments</td></tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h6 class="text-success mb-3">Communication Services</h6>
                                <div class="table-responsive mb-4">
                                    <table class="table table-sm table-bordered">
                                        <thead class="table-light">
                                            <tr><th>Service</th><th>Data Shared</th><th>Purpose</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td><strong>Intercom</strong></td><td>Name, email, user ID</td><td>Live chat support</td></tr>
                                            <tr><td><strong>WhatsApp</strong></td><td>Phone number (user-initiated)</td><td>Customer support</td></tr>
                                            <tr><td><strong>Email Provider</strong></td><td>Email address</td><td>Notifications, updates</td></tr>
                                            <tr><td><strong>SMS Provider</strong></td><td>Phone number</td><td>OTP, alerts</td></tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h6 class="text-success mb-3">Analytics Services</h6>
                                <div class="table-responsive mb-4">
                                    <table class="table table-sm table-bordered">
                                        <thead class="table-light">
                                            <tr><th>Service</th><th>Data Shared</th><th>Purpose</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td><strong>Google Analytics</strong></td><td>Anonymized usage data</td><td>App analytics</td></tr>
                                            <tr><td><strong>Firebase</strong></td><td>Crash reports, performance data</td><td>App stability</td></tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h6 class="text-success mb-3">Credit Assessment (for Funding)</h6>
                                <p class="small text-muted mb-3">When you apply for funding, we share relevant data with credit assessment partners:</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Sales history and business revenue</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Business verification documents</li>
                                    <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> Identity verification data</li>
                                </ul>

                                <h6 class="text-success mt-4 mb-3">What We Do NOT Access</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i> <strong>Payment Card Details:</strong> Processed directly by Flutterwave, never stored by us</li>
                                    <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i> <strong>GPS Location:</strong> We do not collect precise location data</li>
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
                                <h6 class="text-success mb-3"><i class="bi bi-shield-lock me-2"></i>Data Storage & Security</h6>
                                
                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body p-3">
                                                <h6 class="text-success mb-2">Local Storage (On Device)</h6>
                                                <ul class="list-unstyled small mb-0">
                                                    <li class="mb-1"><i class="bi bi-dot text-success"></i> AsyncStorage: User preferences, cached data, offline sales</li>
                                                    <li class="mb-1"><i class="bi bi-dot text-success"></i> Secure Storage: PIN, biometric settings</li>
                                                    <li class="mb-0"><i class="bi bi-dot text-success"></i> Encryption: Sensitive data encrypted at rest</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body p-3">
                                                <h6 class="text-success mb-2">Server Storage</h6>
                                                <ul class="list-unstyled small mb-0">
                                                    <li class="mb-1"><i class="bi bi-dot text-success"></i> Database: Secure cloud servers</li>
                                                    <li class="mb-1"><i class="bi bi-dot text-success"></i> Encryption: TLS 1.3 in transit, AES-256 at rest</li>
                                                    <li class="mb-0"><i class="bi bi-dot text-success"></i> Backups: Daily encrypted backups</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <h6 class="text-success mb-3">Security Measures</h6>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Encryption:</strong> TLS 1.3 in transit, AES-256 at rest</li>
                                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Password Security:</strong> Hashed passwords (never stored in plain text)</li>
                                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Access controls:</strong> Role-based permissions</li>
                                            <li class="mb-0"><i class="bi bi-check-circle text-success me-2"></i> <strong>Regular backups:</strong> Daily encrypted backups</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-success mb-3">Your Rights & Controls</h6>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Access:</strong> View all personal data in Profile</li>
                                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Edit:</strong> Correct inaccurate information</li>
                                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Export:</strong> Export sales data and reports</li>
                                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Delete:</strong> Delete individual records or entire account</li>
                                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Opt-out:</strong> Control marketing and notification preferences</li>
                                            <li class="mb-0"><i class="bi bi-check-circle text-success me-2"></i> <strong>Portability:</strong> Request full data export via support</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="alert alert-warning border-0 mt-4 mb-0">
                                    <div class="d-flex align-items-start">
                                        <i class="bi bi-trash me-3 fs-4"></i>
                                        <div>
                                            <h6 class="mb-1">Account Deletion</h6>
                                            <p class="mb-0">You can delete your account via <strong>Profile > Delete Account</strong> in the app, or by contacting <a href="mailto:support@appnomu.com" class="text-dark">support@appnomu.com</a>. Your data will be permanently deleted within 30 days of request.</p>
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

                                <h6 class="text-success mb-3">Data Retention Periods</h6>
                                <div class="table-responsive mb-4">
                                    <table class="table table-sm table-bordered">
                                        <thead class="table-success">
                                            <tr><th>Data Type</th><th>Retention Period</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>Account Data</td><td>Until account deletion + 30 days</td></tr>
                                            <tr><td>Sales Data</td><td>7 years (financial records requirement)</td></tr>
                                            <tr><td>Transaction History</td><td>7 years</td></tr>
                                            <tr><td>Support Communications</td><td>3 years</td></tr>
                                            <tr><td>Analytics Data</td><td>2 years (anonymized)</td></tr>
                                            <tr><td>Deleted Account Data</td><td>30 days then permanently deleted</td></tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h6 class="text-success mb-3">When We Share Data</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Payment processors:</strong> Flutterwave for wallet top-ups and payments</li>
                                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Communication services:</strong> Intercom, SMS, and email providers</li>
                                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Credit assessment partners:</strong> For funding applications only</li>
                                    <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> <strong>Legal authorities:</strong> When required by law</li>
                                    <li class="mb-0"><i class="bi bi-check-circle text-success me-2"></i> <strong>Business transfers:</strong> In case of merger, acquisition, or asset sale</li>
                                </ul>

                                <h6 class="text-success mt-4 mb-3">International Data Transfers</h6>
                                <p>Data may be processed in countries where our third-party services operate. All transfers comply with applicable data protection laws including GDPR requirements for international transfers.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 6. Contact & Updates -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-gradient text-dark fw-bold py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#section6" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                <div class="d-flex align-items-center w-100">
                                    <div class="me-3 text-success">
                                        <i class="bi bi-envelope fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold">6. Contact & Policy Updates</div>
                                        <small class="text-muted">How to reach us and policy changes</small>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="section6" class="accordion-collapse collapse" data-bs-parent="#privacyAccordion">
                            <div class="accordion-body p-4">
                                <div class="row g-3 mb-4">
                                    <div class="col-md-4">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body p-3 text-center">
                                                <i class="bi bi-envelope fs-2 text-success mb-2"></i>
                                                <h6 class="mb-2">Privacy Inquiries</h6>
                                                <p class="mb-1"><a href="mailto:privacy@appnomu.com" class="text-success text-decoration-none">privacy@appnomu.com</a></p>
                                                <small class="text-muted">General privacy questions</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body p-3 text-center">
                                                <i class="bi bi-shield-check fs-2 text-success mb-2"></i>
                                                <h6 class="mb-2">Data Protection Officer</h6>
                                                <p class="mb-1"><a href="mailto:dpo@appnomu.com" class="text-success text-decoration-none">dpo@appnomu.com</a></p>
                                                <small class="text-muted">GDPR & compliance matters</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border-0 bg-light h-100">
                                            <div class="card-body p-3 text-center">
                                                <i class="bi bi-telephone fs-2 text-success mb-2"></i>
                                                <h6 class="mb-2">Phone Support</h6>
                                                <p class="mb-1"><a href="tel:+256200948420" class="text-success text-decoration-none">+256 200 948 420</a></p>
                                                <small class="text-muted">Mon-Fri 9AM-5PM EAT</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card border-0 bg-light mb-4">
                                    <div class="card-body p-3">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <h6 class="text-success mb-2"><i class="bi bi-building me-2"></i>Company Address</h6>
                                                <p class="mb-0">AppNomu SalesQ Limited<br>Kampala, Uganda</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-success mb-2"><i class="bi bi-headset me-2"></i>Support</h6>
                                                <p class="mb-0"><a href="mailto:support@appnomu.com" class="text-success">support@appnomu.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="alert alert-info border-0 mb-0">
                                    <div class="d-flex align-items-start">
                                        <i class="bi bi-bell me-3 fs-4"></i>
                                        <div>
                                            <h6 class="mb-1">Policy Updates</h6>
                                            <p class="mb-0">We may update this Privacy Policy from time to time. You will be notified of material changes via:
                                            <br>• In-app notification
                                            <br>• Email notification
                                            <br>• App update notes
                                            <br>Continued use after notification constitutes acceptance.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 7. Children's Privacy -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-gradient text-dark fw-bold py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#section7" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                <div class="d-flex align-items-center w-100">
                                    <div class="me-3 text-success">
                                        <i class="bi bi-person-x fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold">7. Children's Privacy</div>
                                        <small class="text-muted">Age requirements and restrictions</small>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="section7" class="accordion-collapse collapse" data-bs-parent="#privacyAccordion">
                            <div class="accordion-body p-4">
                                <div class="alert alert-danger border-0 mb-3">
                                    <i class="bi bi-exclamation-octagon me-2"></i>
                                    <strong>Age Requirement:</strong> AppNomu SalesQ is intended for users 18 years and older only.
                                </div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i> We do not knowingly collect data from children under 18</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Business registration requires adult verification</li>
                                    <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> If we discover data from a minor, it will be deleted immediately</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 8. Cookies & Tracking -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-gradient text-dark fw-bold py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#section8" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                <div class="d-flex align-items-center w-100">
                                    <div class="me-3 text-success">
                                        <i class="bi bi-cookie fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="fw-bold">8. Cookies & Tracking</div>
                                        <small class="text-muted">How we use cookies and tracking technologies</small>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="section8" class="accordion-collapse collapse" data-bs-parent="#privacyAccordion">
                            <div class="accordion-body p-4">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <h6 class="text-success mb-3"><i class="bi bi-phone me-2"></i>Mobile App</h6>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i> No browser cookies used</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Local storage for app functionality only</li>
                                            <li class="mb-0"><i class="bi bi-x-circle-fill text-danger me-2"></i> No third-party advertising trackers</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-success mb-3"><i class="bi bi-globe me-2"></i>Web Dashboard</h6>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Session cookies for authentication</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Analytics cookies (with consent)</li>
                                            <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> Preference cookies for user settings</li>
                                        </ul>
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
                            <p class="mb-0">This Privacy Policy is effective as of <strong>November 30, 2025</strong> and applies to AppNomu SalesQ Mobile App (Version 1.0.2) and web platform. It complies with the Data Protection and Privacy Act of Uganda, GDPR, and other applicable data protection regulations.</p>
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
