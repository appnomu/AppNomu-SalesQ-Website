<?php
// Load configuration
require_once __DIR__ . '/../config.php';

// Set the current page for navigation highlighting
$current_page = 'blog';

// Set page metadata with strong SEO focus for Uganda SMS marketing
$page_title = 'How to Build an Effective SMS Campaign in Uganda - AppNomu SalesQ';
$page_description = 'Learn proven strategies to create high-converting SMS marketing campaigns specifically designed for the Ugandan market with actionable steps to maximize your ROI.';

// Set page-specific keywords for SEO targeting Uganda market
$page_keywords = 'SMS campaign Uganda, SMS marketing strategy Kampala, bulk SMS campaign Uganda, mobile marketing strategy East Africa, SMS ROI Uganda, SMS campaign planning Africa, AppNomu SMS platform, SMS best practices Uganda, SMS automation Uganda, SMS campaign analytics';

// Additional CSS files for blog styling
$additional_css = [
    asset('css/legal-pages-modern.css')
];

// Custom CSS for table fixes
$custom_css = '<!-- Custom Table CSS -->
<style>
    .comparison-table-container .table thead th,
    .tech-options .table thead th {
        background-color: #198754 !important;
        color: white !important;
        border-color: #198754 !important;
    }
</style>';


// Additional JS files
$additional_js = [
    'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js'
];

// Start output buffering
ob_start();
?>

<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding-top: 120px; padding-bottom: 80px;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNMCwxMDBjMzAsMCwyMCwtMzAgNTAsLTMwczIwLDMwLDUwLDMwczIwLC0zMCw1MCwtMzBzMjAsMzAsNTAsMzBzMjAsLTMwLDUwLC0zMHMyMCwzMCw1MCwzMFYwSDBaIiBmaWxsPSJyZ2JhKDI1LDEzNSw4NCwwLjA1KSIvPjwvc3ZnPg=='); background-size: 100% 200px; background-repeat: repeat; opacity: 0.4;"></div>
    
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-success-soft text-success fw-bold px-3 py-2 rounded-pill mb-3 d-inline-block">SMS Strategy</span>
                <h1 class="display-4 fw-bold mb-3 text-dark">How to Build an <span class="text-success">Effective SMS Campaign</span> in Uganda</h1>
                <p class="lead mb-4 text-secondary">A step-by-step guide to creating high-converting SMS marketing campaigns for the Ugandan market.</p>
                <div class="d-flex align-items-center justify-content-center text-secondary small">
                    <span><i class="bi bi-calendar3 me-1 text-success"></i> July 17, 2025</span>
                    <span class="mx-3">|</span>
                    <span><i class="bi bi-clock me-1 text-success"></i> 8 min read</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Content Section -->
<section class="blog-content py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Featured Image -->
                <div class="blog-featured-image rounded-3 overflow-hidden shadow-sm mb-4" data-aos="fade-up">
                    <img src="https://appnomu.com/landing/assets/images/SMS-APIs-Revolutionizing-Communication-1024x538.webp" alt="SMS Campaign Planning in Uganda" class="img-fluid" onerror="this.src='https://placehold.co/1200x600/e9ecef/198754?text=SMS+Campaign+Planning&font=Lexend'">
                    <p class="small text-center text-secondary mt-2">Strategic SMS campaign planning is essential for successful mobile marketing in Uganda</p>
                </div>
                
                <!-- Introduction -->
                <div class="blog-section mb-5" data-aos="fade-up">
                    <p class="lead text-dark">With over 32 million mobile subscribers in Uganda and SMS open rates reaching 98%, text message marketing offers unparalleled reach and engagement—when done right.</p>
                    <p class="text-secondary">Building an effective SMS campaign in Uganda requires understanding the local market dynamics, customer preferences, and regulatory landscape. In this comprehensive guide, we'll walk you through every step of creating SMS campaigns that convert, from initial planning to execution and analysis.</p>
                </div>

                <!-- Section 1: Planning Your Campaign -->
                <div class="blog-section mb-5" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="text-success">1. Planning Your SMS Campaign in the Ugandan Context</h2>
                    <div class="divider mb-3" style="width: 50px; height: 3px; background-color: #198754;"></div>
                    
                    <p class="text-secondary">Effective SMS campaigns begin with thorough planning that considers the unique aspects of the Ugandan market. Before crafting your first message, take time to:</p>
                    
                    <div class="planning-steps bg-light p-4 rounded-3 my-4">
                        <div class="step d-flex mb-3">
                            <div class="step-icon me-3">
                                <span class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">1</span>
                            </div>
                            <div class="step-content">
                                <h5 class="text-success mb-2">Define Clear Campaign Objectives</h5>
                                <p class="text-secondary mb-0">Are you aiming to drive sales for a new product, increase foot traffic to your Kampala store, promote a limited-time offer, or gather customer feedback? Specific goals will shape every aspect of your campaign.</p>
                            </div>
                        </div>
                        
                        <div class="step d-flex mb-3">
                            <div class="step-icon me-3">
                                <span class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">2</span>
                            </div>
                            <div class="step-content">
                                <h5 class="text-success mb-2">Know Your Ugandan Audience</h5>
                                <p class="text-secondary mb-0">Consider demographics, language preferences (English, Luganda, Swahili, etc.), location (urban centers like Kampala vs. rural areas), and purchasing behaviors. SMS campaigns for university students in Kampala will differ greatly from those targeting farmers in northern Uganda.</p>
                            </div>
                        </div>
                        
                        <div class="step d-flex mb-3">
                            <div class="step-icon me-3">
                                <span class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">3</span>
                            </div>
                            <div class="step-content">
                                <h5 class="text-success mb-2">Set a Realistic Budget</h5>
                                <p class="text-secondary mb-0">While SMS marketing in Uganda is cost-effective (typically 25-50 UGX per message), calculate your total costs based on audience size and campaign frequency. Don't forget to factor in any promotional offers or discounts you'll provide.</p>
                            </div>
                        </div>
                        
                        <div class="step d-flex">
                            <div class="step-icon me-3">
                                <span class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">4</span>
                            </div>
                            <div class="step-content">
                                <h5 class="text-success mb-2">Create a Campaign Timeline</h5>
                                <p class="text-secondary mb-0">Determine optimal sending times based on your audience's habits. For instance, retail promotions often perform best Thursday through Saturday, while bill payment reminders work well at month-end when salaries are typically paid in Uganda.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tip-box border-start border-4 border-success p-3 bg-success-soft my-4" style="margin-left: 15px;">
                        <h5 class="text-success">Pro Tip: Understand UCC Regulations</h5>
                        <p class="text-secondary mb-0">The Uganda Communications Commission (UCC) requires businesses to have explicit consent before sending promotional SMS messages. Ensure your contact lists are compliant to avoid penalties and maintain customer trust.</p>
                    </div>
                </div>
                
                <!-- Section 2: Crafting Effective Messages -->
                <div class="blog-section mb-5" data-aos="fade-up" data-aos-delay="150">
                    <h2 class="text-success">2. Crafting Messages That Convert in Uganda</h2>
                    <div class="divider mb-3" style="width: 50px; height: 3px; background-color: #198754;"></div>
                    
                    <p class="text-secondary">The 160-character limit of SMS messages means every word must count. Here's how to craft messages that resonate with Ugandan audiences:</p>
                    
                    <div class="row g-4 my-4">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="bi bi-check-circle-fill text-success me-2" style="font-size: 1.5rem;"></i>
                                        <h5 class="card-title mb-0">What Works</h5>
                                    </div>
                                    <ul class="text-secondary mb-0">
                                        <li class="mb-2">Clear, direct language with a single call-to-action</li>
                                        <li class="mb-2">Personalization (include recipient's name)</li>
                                        <li class="mb-2">Local context (mention nearby landmarks in Kampala, Entebbe, etc.)</li>
                                        <li class="mb-2">Time-bound offers ("Today only" or "Valid until Sunday")</li>
                                        <li>Mobile money payment options ("Pay via MTN MoMo")</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="bi bi-x-circle-fill text-danger me-2" style="font-size: 1.5rem;"></i>
                                        <h5 class="card-title mb-0">What Doesn't Work</h5>
                                    </div>
                                    <ul class="text-secondary mb-0">
                                        <li class="mb-2">Lengthy, complex messages with multiple offers</li>
                                        <li class="mb-2">Generic messages that could apply to any country</li>
                                        <li class="mb-2">All caps or excessive punctuation ("HUGE SALE!!!")</li>
                                        <li class="mb-2">Unclear sender identity (always identify your business)</li>
                                        <li>Abbreviations that may confuse recipients</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h5 class="text-success mt-4 mb-3">Effective SMS Templates for Ugandan Businesses</h5>
                    <div class="message-examples bg-light p-4 rounded-3 mb-4">
                        <div class="message-example mb-3 pb-3 border-bottom">
                            <h6 class="mb-1">Retail Promotion</h6>
                            <p class="mb-0 fst-italic">"Hi [Name], FLASH SALE at ABC Store Kampala! 30% off all shoes this weekend only. Show this SMS at our Nakasero branch to claim. Valid until Sun. Reply STOP to opt out."</p>
                        </div>
                        <div class="message-example mb-3 pb-3 border-bottom">
                            <h6 class="mb-1">Service Reminder</h6>
                            <p class="mb-0 fst-italic">"[Name], your car service at Kampala Motors is due. Book this week for 15% off. Call 0700123456 or pay deposit via MTN MoMo: 123456. Reply BOOK to confirm."</p>
                        </div>
                        <div class="message-example">
                            <h6 class="mb-1">Event Invitation</h6>
                            <p class="mb-0 fst-italic">"You're invited, [Name]! Join us for Kampala Business Expo on 25/08 at Serena Hotel, 10AM-4PM. Free entry with this SMS. Special guest: Hon. Minister of Trade. Details: www.kla-expo.com"</p>
                        </div>
                    </div>
                </div>
                
                <!-- Section 3: Technical Implementation -->
                <div class="blog-section mb-5" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-success">3. Technical Implementation for Your Campaign</h2>
                    <div class="divider mb-3" style="width: 50px; height: 3px; background-color: #198754;"></div>
                    
                    <p class="text-secondary">Once your strategy and messages are ready, it's time to set up the technical aspects of your SMS campaign:</p>
                    
                    <div class="tech-options p-4 bg-light rounded-3 my-4">
                        <h5 class="text-success mb-3">SMS Delivery Options in Uganda</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col" style="color: white !important; font-weight: bold;">Solution Type</th>
                                        <th scope="col" style="color: white !important; font-weight: bold;">Best For</th>
                                        <th scope="col" style="color: white !important; font-weight: bold;">Considerations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Bulk SMS Platform</strong><br>(AppNomu SalesQ, etc.)</td>
                                        <td>Medium to large businesses sending thousands of messages monthly</td>
                                        <td>Full features, analytics, API integration, better pricing at scale</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Telecom Provider Services</strong><br>(MTN Business, Airtel Business)</td>
                                        <td>Established businesses with existing telecom relationships</td>
                                        <td>Reliable delivery, but often more expensive and fewer features</td>
                                    </tr>
                                    <tr>
                                        <td><strong>SMS Gateway API</strong><br>(For custom integration)</td>
                                        <td>Businesses with in-house development teams requiring custom workflows</td>
                                        <td>Requires technical expertise but offers maximum flexibility</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <h5 class="text-success mt-4 mb-3">Setting Up Your First Campaign</h5>
                    <ol class="text-secondary">
                        <li class="mb-2"><strong>Select a platform</strong> that meets your needs and budget. For most Ugandan businesses, a dedicated bulk SMS platform offers the best balance of features and cost.</li>
                        <li class="mb-2"><strong>Clean your contact lists</strong> to ensure you're only messaging consenting customers. Remove duplicates and inactive numbers.</li>
                        <li class="mb-2"><strong>Set up segmentation</strong> to target different customer groups. This might include location-based segments (Kampala vs. Jinja vs. Mbarara) or behavior-based segments (frequent vs. occasional customers).</li>
                        <li class="mb-2"><strong>Create tracking links</strong> if your messages include URLs. This allows you to measure click-through rates and conversions.</li>
                        <li><strong>Test your messages</strong> with a small sample group before sending to your entire list. This helps identify any issues with delivery or message formatting.</li>
                    </ol>
                </div>
                
                <!-- Section 4: Campaign Analysis -->
                <div class="blog-section mb-5" data-aos="fade-up" data-aos-delay="250">
                    <h2 class="text-success">4. Measuring Success: Analytics for SMS Campaigns</h2>
                    <div class="divider mb-3" style="width: 50px; height: 3px; background-color: #198754;"></div>
                    
                    <p class="text-secondary">Without proper analysis, you can't improve your SMS campaigns. Here are the key metrics every Ugandan business should track:</p>
                    
                    <div class="stats-card p-4 bg-light rounded-3 mt-4 mb-4 shadow-sm">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-success-soft mb-3" style="width: 70px; height: 70px;">
                                        <i class="bi bi-send text-success" style="font-size: 1.75rem;"></i>
                                    </div>
                                    <h3 class="text-success mb-1">Delivery Rate</h3>
                                    <p class="mb-0 text-dark">Aim for: 95%+</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-success-soft mb-3" style="width: 70px; height: 70px;">
                                        <i class="bi bi-cursor text-success" style="font-size: 1.75rem;"></i>
                                    </div>
                                    <h3 class="text-success mb-1">CTR</h3>
                                    <p class="mb-0 text-dark">Aim for: 10-25%</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-success-soft mb-3" style="width: 70px; height: 70px;">
                                        <i class="bi bi-cash-coin text-success" style="font-size: 1.75rem;"></i>
                                    </div>
                                    <h3 class="text-success mb-1">ROI</h3>
                                    <p class="mb-0 text-dark">Aim for: 25:1 or better</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <p class="text-secondary">Beyond these basic metrics, track specific goal completions based on your campaign objectives. For a retail promotion, measure in-store redemptions; for an event invitation, track attendance generated by your SMS campaign.</p>
                    
                    <div class="tip-box border-start border-4 border-success p-3 bg-success-soft my-4" style="margin-left: 15px;">
                        <h5 class="text-success">Pro Tip: A/B Testing in the Ugandan Market</h5>
                        <p class="text-secondary mb-0">Test different message variations with small segments of your audience to find what resonates best. For example, test whether offering a percentage discount ("25% off") or an absolute amount ("Save 15,000 UGX") drives more conversions for your Ugandan customers.</p>
                    </div>
                </div>
                
                <!-- Section 5: Integration with Other Channels -->
                <div class="blog-section mb-5" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="text-success">5. Integrating SMS with Your Overall Marketing Strategy</h2>
                    <div class="divider mb-3" style="width: 50px; height: 3px; background-color: #198754;"></div>
                    
                    <p class="text-secondary">SMS marketing works best when integrated with your other marketing channels. Here's how to create a cohesive approach for the Ugandan market:</p>
                    
                    <div class="integration-diagram my-4 p-4 bg-light rounded-3">
                        <h5 class="text-center text-success mb-4">Multichannel Integration Model for Uganda</h5>
                        <div class="row g-3 text-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="p-3 border border-success rounded-3 h-100">
                                    <i class="bi bi-chat-dots text-success mb-2" style="font-size: 2rem;"></i>
                                    <h6>SMS</h6>
                                    <p class="small mb-0 text-secondary">Direct alerts & time-sensitive offers</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="p-3 border rounded-3 h-100">
                                    <i class="bi bi-whatsapp text-success mb-2" style="font-size: 2rem;"></i>
                                    <h6>WhatsApp</h6>
                                    <p class="small mb-0 text-secondary">Rich media & interactive content</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="p-3 border rounded-3 h-100">
                                    <i class="bi bi-facebook text-success mb-2" style="font-size: 2rem;"></i>
                                    <h6>Social Media</h6>
                                    <p class="small mb-0 text-secondary">Brand building & community</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="p-3 border rounded-3 h-100">
                                    <i class="bi bi-radio text-success mb-2" style="font-size: 2rem;"></i>
                                    <h6>Radio</h6>
                                    <p class="small mb-0 text-secondary">Wide reach in rural Uganda</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <p class="small text-secondary mb-0">Each channel supports the others with cross-promotion and consistent messaging.</p>
                        </div>
                    </div>
                    
                    <h5 class="text-success mt-4 mb-3">Integration Examples:</h5>
                    <ul class="text-secondary">
                        <li class="mb-2"><strong>Social Media + SMS:</strong> Promote a social media contest via SMS to boost participation, then collect mobile numbers through the contest for future SMS campaigns.</li>
                        <li class="mb-2"><strong>Radio + SMS:</strong> Include an SMS shortcode in your radio ads for listeners to text for more information or to claim a special offer—particularly effective for reaching customers outside major cities.</li>
                        <li class="mb-2"><strong>Email + SMS:</strong> Send an SMS alert when you've emailed an important announcement or promotion to ensure it's noticed.</li>
                        <li><strong>In-Store + SMS:</strong> Collect mobile numbers at point-of-sale in your physical locations, then send SMS promotions to drive repeat business.</li>
                    </ul>
                </div>
                
                <!-- Conclusion -->
                <div class="blog-section mb-5" data-aos="fade-up" data-aos-delay="350">
                    <h2 class="text-success">Taking Your SMS Marketing to the Next Level in Uganda</h2>
                    <div class="divider mb-3" style="width: 50px; height: 3px; background-color: #198754;"></div>
                    
                    <p class="text-secondary">SMS marketing remains a cornerstone of effective digital communication in Uganda's mobile-first market. By following the strategies outlined in this guide and continually refining your approach based on data, you can create campaigns that drive real business results.</p>
                    <p class="text-secondary">Remember that the Ugandan market has its unique characteristics—from language preferences to payment methods and cultural references. The most successful SMS campaigns acknowledge and embrace these local nuances while maintaining professional standards and regulatory compliance.</p>
                    <p class="text-secondary">Whether you're promoting products in Kampala's bustling markets or reaching farmers across Uganda's rural regions, SMS provides unmatched reach and engagement when implemented strategically.</p>
                </div>
                
                <!-- CTA Section -->
                <div class="cta-section p-4 bg-success-soft rounded-3 text-center mb-5" data-aos="fade-up">
                    <h3 class="mb-3 text-success">Ready to Launch Your SMS Campaign?</h3>
                    <p class="mb-4 text-dark">AppNomu SalesQ offers Uganda's most advanced SMS marketing platform with local support, detailed analytics, and seamless integration with mobile money and other payment systems.</p>
                    <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
                        <a href="https://appnomu.com/landing/features/sms" class="btn btn-outline-success rounded-pill px-4">Explore Our SMS Platform</a>
                        <a href="https://appnomu.com/landing/contact" class="btn btn-success rounded-pill px-4">Get a Free Consultation</a>
                    </div>
                </div>
                
                <!-- Author Section -->
                <div class="author-section d-flex align-items-center p-4 border-top border-bottom my-5" data-aos="fade-up">
                    <div class="author-image me-3">
                        <img src="https://services.appnomu.com/assets/images/Bahati%20Asher%20Faith.jpeg" alt="Bahati Asher Faith" class="rounded-circle" style="width: 60px; height: 60px;" onerror="this.src='https://placehold.co/60x60/198754/fff?text=B&font=Lexend'">
                    </div>
                    <div class="author-bio">
                        <h5 class="mb-1">Bahati Asher Faith</h5>
                        <p class="text-secondary mb-0">CEO at AppNomu with expertise in mobile technologies and digital marketing solutions for the East African market.</p>
                    </div>
                </div>
                
                <!-- Share Section -->
                <div class="share-section text-center mb-5" data-aos="fade-up">
                    <h5 class="mb-3">Share This Article</h5>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-envelope"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Related Posts Section -->
                <div class="related-posts mb-5" data-aos="fade-up">
                    <h3 class="text-center mb-4">Related Articles</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Why SMS Marketing Is Not Dead in Uganda</h5>
                                    <p class="card-text text-secondary">Discover why SMS remains one of the most effective marketing channels in Uganda's mobile-first market.</p>
                                    <a href="./why-sms-marketing-is-not-dead-in-uganda" class="stretched-link text-success">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">5 Effective SMS Templates for Ugandan Retail Businesses</h5>
                                    <p class="card-text text-secondary">Boost your conversions with these proven SMS templates customized for the Ugandan market.</p>
                                    <a href="./5-effective-sms-templates-for-ugandan-retail-businesses" class="stretched-link text-success">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AOS Initialization Script -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Initialize AOS
                        AOS.init({
                            duration: 800,
                            easing: 'ease-in-out',
                            once: true,
                            mirror: false
                        });
                        
                        // Fallback for data-aos elements if AOS fails to initialize
                        setTimeout(function() {
                            if (document.querySelectorAll('[data-aos]:not(.aos-animate)').length > 0) {
                                document.querySelectorAll('[data-aos]').forEach(function(el) {
                                    el.classList.add('aos-animate');
                                });
                            }
                        }, 500);
                    });
                </script>

<?php
// Get page content from output buffer
$content = ob_get_clean();

// Add custom CSS to the page content
$content = $custom_css . $content;

// Load layout with current page content
require_once __DIR__ . '/../includes/layout.php';
?>
