<?php
// Load configuration first
require_once __DIR__ . '/../config.php';

// Start session only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Initialize error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start output buffering for layout system
ob_start();

// Set the current page for active navigation highlighting
$current_page = 'features';

// Set page metadata
$page_title = 'SalesQ-AI Assistant | AI-Powered CRM Features | AppNomu SalesQ';
$page_description = 'Experience SalesQ-AI: Advanced artificial intelligence features for African businesses. Get predictive analytics, smart insights, automated forecasting, and AI chat support with AppNomu SalesQ-AI technology.';

// Set page-specific keywords for SEO
$page_keywords = 'SalesQ-AI, AI CRM Africa, Artificial Intelligence Business Tools Uganda, SalesQ AI Assistant, Predictive Sales Analytics, AI Business Insights Africa, Intelligent CRM Features, AI Chat Support Uganda, Automated Sales Forecasting, Smart Business Analytics AI, African AI CRM Solutions';

// Add AOS initialization with fallback to ensure content visibility
$additional_footer_script = <<<EOD
<script>
    // Document is ready
    document.addEventListener('DOMContentLoaded', function() {
        // Function for text typing animation
        function typeTextAnimation(text, element, speed) {
            let i = 0;
            element.innerHTML = '';
            function type() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }
            type();
        }
        
        // Add chat animation for hero section
        setTimeout(function() {
            var typingIndicator = document.getElementById('typingIndicator');
            var aiResponse = document.getElementById('aiResponse');
            if (typingIndicator && aiResponse) {
                typingIndicator.style.display = 'none';
                aiResponse.style.display = 'flex';
                
                // Animate the hero AI response text
                var heroResponseText = document.getElementById('heroAiResponseText');
                if (heroResponseText) {
                    typeTextAnimation('Based on your sales data, I recommend focusing on your top 3 products which account for 64% of your revenue. Also, your weekend sales are 27% lower than weekdays - consider running a weekend-specific promotion to boost this timeframe.', heroResponseText, 20);
                }
            }
        }, 2000); // Show AI response after 2 seconds
        
        // Add interactive elements to the chat demo in the main section
        var demoTypingIndicator = document.getElementById('demoTypingIndicator');
        var demoAiResponse = document.getElementById('demoAiResponse');
        var chatInputField = document.getElementById('chatInputField');
        var sendButton = document.getElementById('sendButton');
        
        if (demoTypingIndicator && demoAiResponse) {
            setTimeout(function() {
                demoTypingIndicator.style.display = 'none';
                demoAiResponse.style.display = 'flex';
                
                // Animate the demo AI response
                var demoResponseText = document.getElementById('demoAiResponseText');
                if (demoResponseText) {
                    typeTextAnimation('Based on your sales data, I recommend bundling your Premium and Basic packages at a 10% discount to drive cross-selling. Also, consider implementing a limited-time loyalty reward for repeat customers, as your data shows a 65% higher lifetime value for customers who make 3+ purchases.', demoResponseText, 15);
                }
            }, 1500);
        }
        
        // Handle chat input
        if (sendButton && chatInputField) {
            sendButton.addEventListener('click', handleChatInput);
            chatInputField.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    handleChatInput();
                }
            });
        }
        
        function handleChatInput() {
            var userInput = chatInputField.value.trim();
            if (userInput) {
                // Create user message - avoiding template literals to prevent PHP variable issues
                var userMessageHtml = '<div class="d-flex mb-3 justify-content-end">'
                    + '<div class="bg-success p-3 rounded-3 shadow-sm text-white" style="max-width: 80%;">'
                    + '<p class="mb-0">' + userInput + '</p>'
                    + '</div>'
                    + '<div class="bg-light rounded-circle ms-2 p-2" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">'
                    + '<i class="fas fa-user text-success small"></i>'
                    + '</div>'
                    + '</div>';
                
                // Add user message to chat
                var chatSample = document.querySelector('.chat-sample');
                if (chatSample) {
                    chatSample.insertAdjacentHTML('beforeend', userMessageHtml);
                    chatInputField.value = '';
                    chatSample.scrollTop = chatSample.scrollHeight;
                    
                    // Show typing indicator
                    var typingHtml = '<div class="d-flex mb-3" id="newTypingIndicator">'
                        + '<div class="bg-success rounded-circle p-2 me-2" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">'
                        + '<i class="fas fa-robot text-white small"></i>'
                        + '</div>'
                        + '<div class="bg-white p-3 rounded-3 shadow-sm d-flex align-items-center" style="max-width: 85%;">'
                        + '<div class="typing-indicator">'
                        + '<span class="dot"></span>'
                        + '<span class="dot"></span>'
                        + '<span class="dot"></span>'
                        + '</div>'
                        + '</div>'
                        + '</div>';
                    chatSample.insertAdjacentHTML('beforeend', typingHtml);
                    chatSample.scrollTop = chatSample.scrollHeight;
                    
                    // After delay, show AI response
                    setTimeout(function() {
                        var typingElement = document.getElementById('newTypingIndicator');
                        if (typingElement) {
                            typingElement.remove();
                        }
                        
                        var responses = [
                            "Based on your question, I can see that you're interested in optimizing your business strategy. Looking at your recent sales data, I recommend focusing on your top-performing products and considering a small price adjustment of 5-7% on premium items.",
                            "I've analyzed your customer engagement patterns and noticed an opportunity to increase repeat purchases. Consider implementing a loyalty program that rewards customers after their third purchase.",
                            "Looking at your data, I can tell that Tuesday and Wednesday mornings show your highest conversion rates. Consider scheduling your promotional campaigns to launch during these peak engagement periods."
                        ];
                        
                        var randomResponse = responses[Math.floor(Math.random() * responses.length)];
                        
                        var aiResponseHtml = '<div class="d-flex mb-3" id="newAiResponse">' +
                            '<div class="bg-success rounded-circle p-2 me-2" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">' +
                            '<i class="fas fa-robot text-white small"></i>' +
                            '</div>' +
                            '<div class="bg-light p-3 rounded-3 shadow-sm" style="border-left: 3px solid #198754;" style="max-width: 85%;">' +
                            '<p class="mb-0" id="aiResponseText"></p>' +
                            '</div>' +
                            '</div>';
                        chatSample.insertAdjacentHTML('beforeend', aiResponseHtml);
                        chatSample.scrollTop = chatSample.scrollHeight;
                        
                        // Animate the typed response
                        var responseTextElement = document.getElementById('aiResponseText');
                        if (responseTextElement) {
                            typeTextAnimation(randomResponse, responseTextElement, 15);
                        }
                    }, 2000);
                }
            }
        }
    });
</script>

<script>
    // Initialize AOS with fallback to ensure content visibility
    document.addEventListener('DOMContentLoaded', function() {
        // Make all AOS elements visible by default in case AOS fails to load
        document.querySelectorAll('[data-aos]').forEach(function(el) {
            el.style.opacity = 1;
        });
        
        // Initialize AOS if it exists
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true
            });
        }
    });
</script>
EOD;
?>

<style>
    /* Custom styles for feature page */
    /* Hover effects */
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1rem rgba(25, 135, 84, 0.15)!important;
    }
    
    /* Add pulse animation */
    .animate-pulse {
        animation: pulse 2s infinite;
        box-shadow: 0 0 0 0 rgba(25, 135, 84, 0.7);
    }
    
    @keyframes pulse {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(25, 135, 84, 0.7);
        }
        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(25, 135, 84, 0);
        }
        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(25, 135, 84, 0);
        }
    }
    
    /* Add typing effect animation */
    @keyframes blink {
        0% { opacity: 0.4; }
        50% { opacity: 1; }
        100% { opacity: 0.4; }
    }
    .hero-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%) !important;
        padding: 60px 0 40px;
        position: relative;
        overflow: hidden;
    }
    
    .section-heading {
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 30px;
    }
    
    .feature-icon {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        color: #198754;
    }
    
    .feature-card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        height: 100%;
    }
    
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    
<!-- Hero Section -->
<style>
    .hero-section h1 {
        color: #212529;
    }
    
    .hero-section p {
        color: #212529;
    }
</style>

<section class="hero-section">
    <!-- SVG Wave Overlay -->
    <div class="position-absolute w-100 h-100" style="top: 0; left: 0; opacity: 0.1; z-index: 1;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; bottom: 0;">
            <path fill="#ffffff" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,202.7C384,192,480,160,576,165.3C672,171,768,213,864,208C960,203,1056,149,1152,133.3C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="mb-2">
                    <span class="badge bg-success text-white px-3 py-1 rounded-pill">
                        <i class="fas fa-sparkles me-1"></i> AI-Powered Features
                    </span>
                </div>
                <h1 class="display-5 fw-bold text-dark mb-3">
                    <i class="fas fa-robot text-success me-2"></i>SalesQ-AI Assistant
                </h1>
                <p class="lead mb-3">Intelligent AI-powered business insights and automated decision-making for African businesses. Get real-time analytics, predictive sales forecasting, and smart inventory recommendations with SalesQ-AI technology.</p>
                
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fas fa-brain text-primary me-2"></i> Smart Analytics
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fas fa-chart-line text-success me-2"></i> Predictive Insights
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fas fa-comments text-info me-2"></i> AI Chat Support
                    </div>
                    <div class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal d-flex align-items-center">
                        <i class="fas fa-dollar-sign text-warning me-2"></i> Free with CRM
                    </div>
                </div>
                
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=salesq_ai_feature&utm_campaign=ai_cta" class="btn btn-success btn-lg rounded-pill animate-pulse">
                        <i class="fas fa-rocket me-2"></i>Try SalesQ-AI Free
                    </a>
                    <a href="#features" class="btn btn-outline-success btn-lg rounded-pill">
                        <i class="fas fa-info-circle me-2"></i>AI Features
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <!-- AI Chat Interface Mockup -->
                    <div class="ai-chat-mockup bg-white rounded-4 shadow-lg p-4" 
                         data-aos="fade-left" 
                         data-aos-delay="200"
                         style="width: 100%; max-width: 500px; height: 400px; margin: 0 auto; border: 1px solid #e9ecef;">
                        
                        <!-- Chat Header -->
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom">
                            <div class="bg-success rounded-circle p-2 me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-robot text-white"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">SalesQ-AI Assistant</h6>
                                <small class="text-success">● Online</small>
                            </div>
                        </div>
                        
                        <!-- Chat Messages -->
                        <div class="chat-messages" style="height: 250px; overflow-y: auto;">
                            <!-- AI Message -->
                            <div class="d-flex mb-3">
                                <div class="bg-success rounded-circle p-1 me-2" style="width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-robot text-white small"></i>
                                </div>
                                <div class="bg-light p-3 rounded-3" style="max-width: 80%; border-left: 3px solid #198754;">
                                    <p class="mb-0 small">Hello! I'm your AI business assistant. How can I help you grow your sales today?</p>
                                </div>
                            </div>
                            
                            <!-- User Message -->
                            <div class="d-flex mb-3 justify-content-end">
                                <div class="bg-primary p-3 rounded-3 text-white" style="max-width: 80%;">
                                    <p class="mb-0 small">Show me my top selling products this month</p>
                                </div>
                                <div class="bg-light rounded-circle ms-2 p-1" style="width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-user text-primary small"></i>
                                </div>
                            </div>
                            
                            <!-- AI Response with Chart -->
                            <div class="d-flex mb-3">
                                <div class="bg-success rounded-circle p-1 me-2" style="width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-robot text-white small"></i>
                                </div>
                                <div class="bg-light p-3 rounded-3" style="max-width: 85%; border-left: 3px solid #198754;">
                                    <p class="mb-2 small">Here are your top 3 products:</p>
                                    <div class="d-flex align-items-end mb-2" style="height: 60px;">
                                        <div class="me-2 text-center" style="width: 40px;">
                                            <div class="bg-primary rounded-top" style="height: 50px;"></div>
                                            <small class="text-muted" style="font-size: 0.7rem;">Premium</small>
                                        </div>
                                        <div class="me-2 text-center" style="width: 40px;">
                                            <div class="bg-success rounded-top" style="height: 35px;"></div>
                                            <small class="text-muted" style="font-size: 0.7rem;">Standard</small>
                                        </div>
                                        <div class="text-center" style="width: 40px;">
                                            <div class="bg-warning rounded-top" style="height: 25px;"></div>
                                            <small class="text-muted" style="font-size: 0.7rem;">Basic</small>
                                        </div>
                                    </div>
                                    <p class="mb-0 small text-success">💡 Consider promoting Standard plan to boost mid-tier sales!</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Chat Input -->
                        <div class="d-flex mt-3 pt-3 border-top">
                            <input type="text" class="form-control form-control-sm me-2" placeholder="Ask me anything about your business..." readonly>
                            <button class="btn btn-success btn-sm">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Floating Badge -->
                    <div class="position-absolute" style="top: 20px; right: 20px;">
                        <div class="bg-success text-white fw-bold px-3 py-2 rounded-pill shadow-sm d-flex align-items-center">
                            <i class="fas fa-robot me-1"></i> AI-Powered
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Additional CSS for typing indicator -->
    <style>
        .typing-indicator {
            display: flex;
            align-items: center;
        }
        
        .typing-indicator .dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #3f51b5;
            animation: typing 1.5s infinite ease-in-out;
            margin: 0 2px;
        }
        
        .typing-indicator .dot:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        .typing-indicator .dot:nth-child(3) {
            animation-delay: 0.4s;
        }
        
        @keyframes typing {
            0%, 60%, 100% { transform: translateY(0); }
            30% { transform: translateY(-6px); }
        }
    </style>
</section>

<!-- Main Content Section -->
<section class="py-5" id="features">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4"><i class="fas fa-star text-success me-2"></i>AI-Powered Features</h2>
                <p class="lead">Intelligent tools to help your business grow</p>
            </div>
        </div>
        
        <!-- Real-time Chat Section -->
        <div class="row mb-5 align-items-center" data-aos="fade-up">
            <div class="col-lg-6">
                <h3 class="mb-4"><i class="fas fa-comments text-success me-2"></i>Real-time Chat with AI</h3>
                <p class="lead mb-4">Get instant business insights and answers to all your questions through our intelligent AI assistant</p>
                
                <div class="mb-4">
                    <div class="d-flex align-items-start">
                        <div class="bg-primary rounded-circle p-3 me-3">
                            <i class="fas fa-brain text-white"></i>
                        </div>
                        <div>
                            <h5>Intelligent Business Analysis</h5>
                            <p>Ask questions about your sales data, customer behavior, or inventory status and receive instant, data-backed answers to make informed decisions.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex align-items-start">
                        <div class="bg-success rounded-circle p-3 me-3">
                            <i class="fas fa-question-circle text-white"></i>
                        </div>
                        <div>
                            <h5>Natural Language Queries</h5>
                            <p>No complex queries needed. Ask questions in plain language like "Which product had the highest growth last month?" or "What's my inventory status?"</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex align-items-start">
                        <div class="bg-info rounded-circle p-3 me-3">
                            <i class="fas fa-clock text-white"></i>
                        </div>
                        <div>
                            <h5>24/7 Availability</h5>
                            <p>Get business insights anytime you need them, day or night. Our AI assistant is always available to help you make data-driven decisions.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <!-- Interactive Chat Sample -->
                    <div class="d-flex align-items-center mb-3 border-bottom pb-3">
                        <div class="bg-success rounded-circle p-2 me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-robot text-white"></i>
                        </div>
                        <h5 class="mb-0">Chat with SalesQ AI</h5>
                        <div class="ms-auto small text-muted">Today</div>
                    </div>
                    
                    <div class="chat-sample bg-light p-3 rounded-3 mb-3" style="height: 300px; overflow-y: auto;">
                        <!-- AI Message -->
                        <div class="d-flex mb-3">
                            <div class="bg-success rounded-circle p-2 me-2" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-robot text-white small"></i>
                            </div>
                            <div class="bg-light p-3 rounded-3 shadow-sm" style="border-left: 3px solid #198754;" style="max-width: 80%;">
                                <p class="mb-0">Hello! How can I help with your business today?</p>
                            </div>
                        </div>
                        
                        <!-- User Message -->
                        <div class="d-flex mb-3 justify-content-end">
                            <div class="bg-primary p-3 rounded-3 shadow-sm text-white" style="max-width: 80%;">
                                <p class="mb-0">What were my top 3 selling products last month?</p>
                            </div>
                            <div class="bg-light rounded-circle ms-2 p-2" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-user text-primary small"></i>
                            </div>
                        </div>
                        
                        <!-- AI Message with Chart -->
                        <div class="d-flex mb-3">
                            <div class="bg-success rounded-circle p-2 me-2" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-robot text-white small"></i>
                            </div>
                            <div class="bg-light p-3 rounded-3 shadow-sm" style="border-left: 3px solid #198754;" style="max-width: 85%;">
                                <p class="mb-2">Based on your June 2025 sales data, your top 3 products were:</p>
                                
                                <!-- Simple Chart Visualization -->
                                <div class="chart-container mb-2" style="height: 120px;">
                                    <div class="d-flex align-items-end h-100">
                                        <div class="me-3 text-center" style="width: 60px;">
                                            <div class="bg-primary rounded-top" style="height: 100px;"></div>
                                            <div class="small text-muted mt-1">Premium</div>
                                            <div class="small fw-bold">UGX 2.5M</div>
                                        </div>
                                        <div class="me-3 text-center" style="width: 60px;">
                                            <div class="bg-success rounded-top" style="height: 65px;"></div>
                                            <div class="small text-muted mt-1">Standard</div>
                                            <div class="small fw-bold">UGX 1.8M</div>
                                        </div>
                                        <div class="text-center" style="width: 60px;">
                                            <div class="bg-info rounded-top" style="height: 40px;"></div>
                                            <div class="small text-muted mt-1">Basic</div>
                                            <div class="small fw-bold">UGX 950K</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="mb-0">Premium Service Pack, Standard Widget Pro, and Basic Support Plan were your best performers. Premium showed a 15% increase from May.</p>
                            </div>
                        </div>
                        
                        <!-- User Message -->
                        <div class="d-flex justify-content-end">
                            <div class="bg-primary p-3 rounded-3 shadow-sm text-white" style="max-width: 80%;">
                                <p class="mb-0">Any recommendations to boost sales further?</p>
                            </div>
                            <div class="bg-light rounded-circle ms-2 p-2" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-user text-primary small"></i>
                            </div>
                        </div>
                        
                        <!-- Typing Indicator for Demo -->
                        <div class="d-flex mb-3" id="demoTypingIndicator">
                            <div class="bg-success rounded-circle p-2 me-2" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-robot text-white small"></i>
                            </div>
                            <div class="bg-light p-3 rounded-3 shadow-sm d-flex align-items-center" style="border-left: 3px solid #198754;" style="max-width: 85%;">
                                <div class="typing-indicator">
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Hidden Demo AI Response that will appear after typing -->
                        <div class="d-flex mb-3" id="demoAiResponse" style="display: none !important;">
                            <div class="bg-success rounded-circle p-2 me-2" style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-robot text-white small"></i>
                            </div>
                            <div class="bg-light p-3 rounded-3 shadow-sm" style="border-left: 3px solid #198754;" style="max-width: 85%;">
                                <p class="mb-0" id="demoAiResponseText"></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <input type="text" id="chatInputField" class="form-control me-2" placeholder="Ask SalesQ AI anything...">
                        <button type="button" id="sendButton" class="btn btn-success">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Business Insights Reports Section -->
        <div class="row py-5 my-5 bg-light rounded-3" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 order-lg-2">
                <div class="p-lg-4">
                    <h3 class="mb-4"><i class="fas fa-chart-bar text-success me-2"></i>Business Insight Reports</h3>
                    <p class="lead mb-4">Get comprehensive AI-generated reports and actionable recommendations to optimize your business</p>
                    
                    <div class="mb-4">
                        <div class="d-flex align-items-start">
                            <div class="bg-primary rounded-circle p-3 me-3">
                                <i class="fas fa-chart-line text-white"></i>
                            </div>
                            <div>
                                <h5>Sales Trend Analysis</h5>
                                <p>Our AI analyzes historical sales data to identify patterns, predict future trends, and highlight potential growth opportunities in your market.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="d-flex align-items-start">
                            <div class="bg-success rounded-circle p-3 me-3">
                                <i class="fas fa-lightbulb text-white"></i>
                            </div>
                            <div>
                                <h5>Actionable Recommendations</h5>
                                <p>Receive specific, data-backed suggestions on pricing optimization, inventory management, and customer engagement strategies tailored to your business.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-0">
                        <div class="d-flex align-items-start">
                            <div class="bg-warning rounded-circle p-3 me-3">
                                <i class="fas fa-bullseye text-white"></i>
                            </div>
                            <div>
                                <h5>Performance Benchmarking</h5>
                                <p>Compare your business performance against industry standards and set realistic goals based on market conditions and your historical data.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 mb-4 mb-lg-0">
                <div class="bg-white p-4 rounded-4 shadow-lg">
                    <!-- Business Insight Report Demo -->
                    <div class="d-flex align-items-center mb-3 border-bottom pb-3">
                        <div class="bg-success rounded-circle p-2 me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                        <h5 class="mb-0">Monthly Business Report</h5>
                        <div class="ms-auto">
                            <span class="badge bg-success">AI Generated</span>
                        </div>
                    </div>
                    
                    <div class="report-content">
                        <!-- Report Header -->
                        <div class="mb-3">
                            <h6 class="text-success">Business Performance Summary - July 2025</h6>
                            <div class="small text-muted mb-2">Generated on July 10, 2025</div>
                            <div class="d-flex mb-2">
                                <div class="bg-success text-white px-2 py-1 rounded-3 me-2 small">EXCELLENT</div>
                                <div class="small text-muted">Overall performance rating</div>
                            </div>
                        </div>
                        
                        <!-- Key Metrics -->
                        <div class="row mb-3 g-2">
                            <div class="col-sm-4">
                                <div class="border rounded p-2 text-center">
                                    <div class="small text-muted">Revenue</div>
                                    <div class="h5 mb-0">UGX 12.5M</div>
                                    <div class="small text-success">↑ 15%</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="border rounded p-2 text-center">
                                    <div class="small text-muted">Transactions</div>
                                    <div class="h5 mb-0">258</div>
                                    <div class="small text-success">↑ 8%</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="border rounded p-2 text-center">
                                    <div class="small text-muted">Avg. Sale</div>
                                    <div class="h5 mb-0">UGX 48K</div>
                                    <div class="small text-success">↑ 6%</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- AI Insights -->
                        <div class="mb-3">
                            <div class="border-top pt-3 border-bottom pb-3">
                                <h6 class="mb-2">AI Insights & Recommendations</h6>
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-start mb-2">
                                        <i class="fas fa-check-circle text-success me-2 mt-1"></i>
                                        <div class="small">Premium Service Pack sales have increased by 15% since your price adjustment last month. Consider maintaining this price point.</div>
                                    </li>
                                    <li class="d-flex align-items-start mb-2">
                                        <i class="fas fa-exclamation-circle text-warning me-2 mt-1"></i>
                                        <div class="small">Basic Widget inventory is projected to run out within 14 days based on current sales velocity. Consider restocking soon.</div>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <i class="fas fa-lightbulb text-primary me-2 mt-1"></i>
                                        <div class="small">Tuesday afternoons show your highest sales volume. Consider running special promotions during this time to maximize revenue.</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-download me-1"></i> Download PDF
                            </button>
                            <button class="btn btn-sm btn-outline-success">
                                <i class="fas fa-envelope me-1"></i> Email Report
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- AI Sales Reports Section -->
        <div class="row my-5" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h3 class="mb-4"><i class="fas fa-file-invoice text-success me-2"></i>AI-Generated Reports</h3>
                <p class="lead mb-4">Get comprehensive reports on all aspects of your business with just a few clicks</p>
                
                <div class="mb-4">
                    <div class="d-flex align-items-start">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #0d3d25, #198754); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-chart-pie text-white"></i>
                        </div>
                        <div>
                            <h5>Sales Reports</h5>
                            <p>Generate detailed sales reports with breakdowns by product, category, time period, and payment method. Identify your best-selling products and peak sales times.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex align-items-start">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-hand-holding-usd text-white"></i>
                        </div>
                        <div>
                            <h5>Profit & Loss Analysis</h5>
                            <p>Understand your financial health with AI-generated P&L reports that highlight revenue streams, cost centers, and opportunities to improve margins.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex align-items-start">
                        <div class="feature-icon-sm rounded p-3 me-3" style="background: linear-gradient(45deg, #198754, #20c997); box-shadow: 0 4px 6px rgba(25, 135, 84, 0.2);">
                            <i class="fas fa-search-dollar text-white"></i>
                        </div>
                        <div>
                            <h5>Sales Trend Forecasting</h5>
                            <p>Predict future sales patterns based on historical data, seasonal trends, and market conditions to help you plan inventory and staffing needs.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <!-- Report Image -->
                <div class="text-center">
                    <img src="https://appnomu.com/landing/assets/images/Generated_Report.png" 
                         alt="AI Generated Business Report" 
                         class="img-fluid rounded-3 shadow"
                         style="max-height: 400px; width: auto; margin: 0 auto;">
                </div>
            </div>
        </div>
        
        <!-- Why Choose Our AI Section -->
        <div class="row mt-5 pt-5 bg-light rounded-3 py-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-12 text-center mb-4">
                <h3><i class="fas fa-medal text-success me-2"></i>Why Choose SalesQ AI</h3>
                <p class="lead">The smarter choice for business intelligence</p>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift" style="transition: all 0.3s; transform: translateY(0);" onmouseover="this.style.transform='translateY(-5px)';this.style.boxShadow='0 .5rem 1rem rgba(25, 135, 84, 0.15)';" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 .125rem .25rem rgba(0, 0, 0, 0.075)';">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-dollar-sign text-white fa-2x"></i>
                        </div>
                        <h5 class="card-title">100% Free to Use</h5>
                        <p class="card-text">Unlike other AI business solutions, SalesQ AI is completely free with your AppNomu account. No hidden costs or premium tiers.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift" style="transition: all 0.3s; transform: translateY(0);" onmouseover="this.style.transform='translateY(-5px)';this.style.boxShadow='0 .5rem 1rem rgba(25, 135, 84, 0.15)';" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 .125rem .25rem rgba(0, 0, 0, 0.075)';">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-bolt text-white fa-2x"></i>
                        </div>
                        <h5 class="card-title">Lightning Fast</h5>
                        <p class="card-text">Our optimized AI model delivers insights in seconds, not minutes, so you can make business decisions without waiting.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift" style="transition: all 0.3s; transform: translateY(0);" onmouseover="this.style.transform='translateY(-5px)';this.style.boxShadow='0 .5rem 1rem rgba(25, 135, 84, 0.15)';" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 .125rem .25rem rgba(0, 0, 0, 0.075)';">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-key text-white fa-2x"></i>
                        </div>
                        <h5 class="card-title">Custom AI Integration</h5>
                        <p class="card-text">Already have your own AI provider? Easily integrate your own license keys and APIs for a seamless, customized experience.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-lift" style="transition: all 0.3s; transform: translateY(0);" onmouseover="this.style.transform='translateY(-5px)';this.style.boxShadow='0 .5rem 1rem rgba(25, 135, 84, 0.15)';" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 .125rem .25rem rgba(0, 0, 0, 0.075)';">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-palette text-white fa-2x"></i>
                        </div>
                        <h5 class="card-title">Professional Interface</h5>
                        <p class="card-text">Enjoy a sleek, intuitive chat interface with product recommendation capabilities and a user-friendly experience.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Call-to-Action -->
        <div class="row my-5" data-aos="fade-up" data-aos-delay="400">
            <div class="col-12">
                <div class="p-5 rounded-3 text-center position-relative overflow-hidden" style="background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(233, 236, 239, 0.9) 100%); color: #212529; border: 1px solid rgba(0,0,0,0.1);">
                    <!-- Fading background effect -->
                    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, rgba(25,135,84,0.05) 0%, rgba(25,135,84,0.02) 100%); z-index: 0;"></div>
                    
                    <div class="position-relative" style="z-index: 1;">
                        <h3 class="mb-3 fw-bold">Ready to transform your business with AI insights?</h3>
                        <p class="lead mb-4">Join thousands of businesses already using SalesQ AI to make smarter decisions</p>
                        <div class="d-flex justify-content-center flex-wrap gap-3">
                            <a href="https://www.appnomu.com/register.php?utm_source=website&utm_medium=ai_feature&utm_campaign=bottom_cta" class="btn btn-success btn-lg rounded-pill px-4 animate-pulse">
                                <i class="fas fa-rocket me-2"></i>Get Started Free
                            </a>
                            <a href="https://api.whatsapp.com/send/?phone=256709712129" target="_blank" class="btn btn-outline-success btn-lg rounded-pill px-4" style="border-width: 2px;">
                                <i class="fab fa-whatsapp text-success me-2"></i>Chat With Sales
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Get content from buffer and clean the buffer
$content = ob_get_clean();

// Include layout with content and additional footer script
include '../includes/layout.php';
?>

<script>
    // Initialize AOS with fallback for content visibility
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-out',
                once: true,
                offset: 100
            });
            // Refresh AOS to recalculate positions if needed
            setTimeout(function() {
                AOS.refresh();
            }, 500);
        } else {
            // Fallback if AOS is not loaded - show all elements that would be animated
            document.querySelectorAll('[data-aos]').forEach(el => {
                el.style.opacity = '1';
                el.style.transform = 'none';
                el.removeAttribute('data-aos');
            });
        }
    });
</script>

<?php
// Get content with error suppression for zlib compatibility
$content = @ob_get_clean() ?: '';

// Include the layout template
require_once __DIR__ . '/../includes/layout.php';
?>
