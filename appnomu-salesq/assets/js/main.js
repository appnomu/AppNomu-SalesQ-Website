// Main JavaScript for AppNomu SalesQ

// Global function to open the Infobip live chat widget
window.openLiveChat = function() {
    console.log('Attempting to open live chat widget');
    
    // Method 1: Direct API call if liveChat is available as a function
    if (typeof window.liveChat === 'function') {
        try {
            window.liveChat('maximize');
            console.log('Opened chat via liveChat function');
            return true;
        } catch (e) {
            console.log('Error using liveChat function:', e);
        }
    } else {
        console.log('liveChat function not available');
    }
    
    // Method 2: Find and click the chat button in the DOM
    const chatButtonSelectors = [
        '.ib-chat-button',
        '#ib-livechat-button',
        '#livechat-button',
        '.infobip-chat-button',
        '[data-role="chat-button"]',
        // Add any other possible selectors
        'iframe[src*="livechat.infobip.com"]' // Look for the iframe if it exists
    ];
    
    for (const selector of chatButtonSelectors) {
        const elements = document.querySelectorAll(selector);
        if (elements && elements.length > 0) {
            console.log('Found chat element with selector:', selector);
            
            // If it's an iframe, we need to find the button inside it
            if (selector.includes('iframe')) {
                try {
                    const iframe = elements[0];
                    const iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
                    const chatButton = iframeDocument.querySelector('.chat-button, .chat-icon');
                    if (chatButton) {
                        chatButton.click();
                        console.log('Clicked button inside iframe');
                        return true;
                    }
                } catch (e) {
                    console.log('Could not access iframe content:', e);
                }
            } else {
                // Regular element, just click it
                elements[0].click();
                console.log('Clicked chat button');
                return true;
            }
        }
    }
    
    // Method 3: If liveChat exists as an object but not a function
    if (typeof window.liveChat === 'object') {
        console.log('Found liveChat as object, attempting to open');
        if (window.liveChat.open) {
            window.liveChat.open();
            return true;
        } else if (window.liveChat.show) {
            window.liveChat.show();
            return true;
        } else if (window.liveChat.maximize) {
            window.liveChat.maximize();
            return true;
        }
    }
    
    // Method 4: Last resort - reload the script and try to initialize
    console.log('Attempting to load chat widget directly');
    const script = document.createElement('script');
    script.src = 'https://livechat.infobip.com/widget.js';
    script.onload = function() {
        if (typeof window.liveChat === 'function') {
            window.liveChat('init', '905e4060-7bfa-48fb-a603-dc7cb79c9706');
            setTimeout(function() {
                window.liveChat('maximize');
            }, 1000);
        }
    };
    document.head.appendChild(script);
    
    return false;
};

// Function to handle pricing signup form submissions
window.handlePricingSignup = function(event) {
    event.preventDefault();
    const email = document.getElementById('signupEmail').value;
    const plan = document.getElementById('signupPlan').value;
    
    // Validate inputs
    if (!email || email.trim() === '') {
        alert('Please enter your email address');
        return false;
    }
    
    if (!plan || plan === '') {
        alert('Please select a pricing plan');
        return false;
    }
    
    // Redirect to registration page with email and plan as parameters
    window.location.href = `https://www.appnomu.com/register.php?utm_source=landing_page&utm_medium=cta&utm_campaign=salesq&email=${encodeURIComponent(email)}&plan=${encodeURIComponent(plan)}`;
};

// Function to remove specific 'Scroll Down' elements from the page
function removeScrollDownElements() {
    // Only target specific elements that might contain scroll down text
    // Avoid targeting html, body, main, or other structural elements
    const targetSelectors = [
        'button', 'a', 'span', 'div.scroll-down', '.scroll-indicator', 
        '.scroll-arrow', '[class*="scroll"]', 'p', 'small', '.btn'
    ];
    
    targetSelectors.forEach(selector => {
        try {
            const elements = document.querySelectorAll(selector);
            elements.forEach(element => {
                // Skip critical structural elements
                if (element.tagName === 'HTML' || element.tagName === 'BODY' || 
                    element.id === 'main-content' || element.tagName === 'MAIN' ||
                    element.tagName === 'SCRIPT' || element.tagName === 'STYLE') {
                    return;
                }
                
                // Check if the element's DIRECT text content (not children) contains 'Scroll Down'
                const directText = element.childNodes ? 
                    Array.from(element.childNodes)
                        .filter(node => node.nodeType === Node.TEXT_NODE)
                        .map(node => node.textContent)
                        .join('').trim().toLowerCase() : '';
                
                if (directText.includes('scroll down') && directText.length < 50) {
                    // Only hide if it's a small element with direct scroll down text
                    element.style.display = 'none';
                    console.log('Removed scroll down element:', element.tagName, directText);
                }
            });
        } catch (e) {
            console.warn('Error processing selector:', selector, e);
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    // Call the function to remove scroll down elements (now safe)
    removeScrollDownElements();
    
    // Also call it after a short delay to catch any dynamically added elements
    setTimeout(removeScrollDownElements, 1000);
    // Run it again after page is fully loaded
    window.addEventListener('load', removeScrollDownElements);

    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Initialize popovers
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Skip if href is just "#" or empty, or if it's a modal trigger
            if (href === '#' || href === '#!' || !href || this.hasAttribute('data-bs-toggle')) {
                return;
            }
            
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
});
