/**
 * Modern Legal Pages JavaScript - Enhanced User Experience for AppNomu SalesQ
 * Provides smooth animations, interactive elements, and enhanced UI/UX
 */
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS (Animate On Scroll) for all elements with data-aos attributes
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out',
            once: true,
            offset: 100
        });
    } else {
        // Fallback if AOS is not loaded - show all elements that would be animated
        document.querySelectorAll('[data-aos]').forEach(el => {
            el.style.opacity = '1';
            el.style.transform = 'none';
            el.removeAttribute('data-aos');
        });
    }
    
    // Apply animations to header elements
    const header = document.querySelector('.legal-header');
    if (header) {
        const title = header.querySelector('h1');
        const subtitle = header.querySelector('.lead');
        
        if (title) {
            title.classList.add('animate__animated', 'animate__fadeInDown');
            title.style.animationDuration = '1s';
        }
        
        if (subtitle) {
            subtitle.classList.add('animate__animated', 'animate__fadeIn');
            subtitle.style.animationDelay = '0.5s';
            subtitle.style.animationDuration = '1s';
        }
    }
    
    // Enhanced Back to Top Button with Animation
    const backToTopButton = document.getElementById('backToTop');
    if (backToTopButton) {
        const showBackToTop = () => {
            const scrollPosition = window.scrollY;
            if (scrollPosition > 500) {
                backToTopButton.classList.add('visible');
            } else {
                backToTopButton.classList.remove('visible');
            }
        };
        
        // Initial check and event listener
        showBackToTop();
        window.addEventListener('scroll', showBackToTop);
        
        // Smooth scroll to top with easing
        backToTopButton.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Create a nice eased scroll animation
            const scrollToTop = () => {
                const currentPosition = window.pageYOffset;
                if (currentPosition > 0) {
                    window.requestAnimationFrame(scrollToTop);
                    window.scrollTo(0, currentPosition - currentPosition / 8);
                }
            };
            
            scrollToTop();
        });
        
        // Add hover effect with animation
        backToTopButton.addEventListener('mouseenter', function() {
            this.querySelector('i').classList.add('animate__animated', 'animate__pulse');
        });
        
        backToTopButton.addEventListener('mouseleave', function() {
            const icon = this.querySelector('i');
            icon.classList.remove('animate__animated', 'animate__pulse');
        });
    }
    
    // Staggered Animation for List Items
    const animateLists = () => {
        document.querySelectorAll('ul:not(.animated), ol:not(.animated)').forEach(list => {
            // Use IntersectionObserver to detect when list is in viewport
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        list.classList.add('animated');
                        observer.unobserve(list);
                    }
                });
            }, {
                threshold: 0.2
            });
            
            observer.observe(list);
        });
    };
    
    // Initialize staggered list animations
    animateLists();
    
    // Enhance Card Interactions
    document.querySelectorAll('.legal-card, .feature-card').forEach(card => {
        // Add hover interactions
        card.addEventListener('mouseenter', function() {
            const headers = this.querySelectorAll('h3, h4, h5, .card-title');
            headers.forEach(header => {
                header.style.color = 'var(--primary)';
                header.style.transition = 'color 0.3s ease';
            });
        });
        
        card.addEventListener('mouseleave', function() {
            const headers = this.querySelectorAll('h3, h4, h5, .card-title');
            headers.forEach(header => {
                header.style.color = '';
            });
        });
    });
    
    // Add Copy to Clipboard functionality for Card Headers
    document.querySelectorAll('.legal-card .card-header').forEach(header => {
        // Create copy button
        const copyButton = document.createElement('button');
        copyButton.className = 'copy-button';
        copyButton.setAttribute('title', 'Copy section title');
        copyButton.innerHTML = '<i class="bi bi-clipboard"></i>';
        
        // Add copy button to header
        header.appendChild(copyButton);
        
        // Show button on hover
        header.addEventListener('mouseenter', function() {
            copyButton.style.opacity = '1';
        });
        
        header.addEventListener('mouseleave', function() {
            copyButton.style.opacity = '0';
        });
        
        // Copy functionality
        copyButton.addEventListener('click', function(e) {
            e.stopPropagation();
            const sectionTitle = header.textContent.trim().replace(/\s+/g, ' ');
            
            // Use clipboard API to copy text
            navigator.clipboard.writeText(sectionTitle).then(() => {
                // Visual feedback
                const originalIcon = copyButton.innerHTML;
                copyButton.innerHTML = '<i class="bi bi-check-lg"></i>';
                
                setTimeout(() => {
                    copyButton.innerHTML = originalIcon;
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy text: ', err);
            });
        });
    });
    
    // Enhanced Smooth Scrolling for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            
            // Skip if just "#" or no target
            if (targetId === '#' || !targetId) return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                
                // Remove active class from all links
                document.querySelectorAll('a[href^="#"]').forEach(a => {
                    a.classList.remove('active');
                });
                
                // Add active class to clicked link
                this.classList.add('active');
                
                // Get header height for offset (if exists)
                const headerOffset = document.querySelector('header.fixed-top') 
                    ? document.querySelector('header.fixed-top').offsetHeight 
                    : 80;
                
                // Calculate position with offset
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerOffset;
                
                // Smooth scroll to target
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Add highlight effect to target
                targetElement.classList.add('highlight-target');
                setTimeout(() => {
                    targetElement.classList.remove('highlight-target');
                }, 2000);
                
                // Update URL without page jump
                if (history.pushState) {
                    history.pushState(null, null, targetId);
                }
            }
        });
    });
    
    // Initialize tooltips if Bootstrap is available
    if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl, {
                animation: true,
                delay: { show: 100, hide: 100 }
            });
        });
    }
    
    // Progressive image loading for any lazy-loaded images
    document.querySelectorAll('img[loading="lazy"]').forEach(img => {
        img.style.transition = 'opacity 0.5s ease';
        img.style.opacity = '0';
        
        img.onload = function() {
            img.style.opacity = '1';
        };
        
        // If image is already loaded
        if (img.complete) {
            img.style.opacity = '1';
        }
    });
    
    // Make tables responsive
    document.querySelectorAll('table').forEach(table => {
        // Wrap table in a responsive div if not already wrapped
        if (!table.parentElement.classList.contains('table-responsive')) {
            const wrapper = document.createElement('div');
            wrapper.className = 'table-responsive';
            table.parentNode.insertBefore(wrapper, table);
            wrapper.appendChild(table);
        }
        
        // Add Bootstrap table classes for styling
        if (!table.classList.contains('table')) {
            table.classList.add('table');
        }
    });
    
    // Add live chat button if available
    if (typeof liveChat === 'function') {
        const legalContent = document.querySelector('.legal-content');
        if (legalContent) {
            // Create help button that opens live chat
            const helpButton = document.createElement('button');
            helpButton.className = 'chat-help-button';
            helpButton.innerHTML = '<i class="bi bi-chat-dots-fill"></i> Need help?';
            helpButton.style.cssText = `
                position: fixed;
                bottom: 30px;
                left: 30px;
                z-index: 99;
                padding: 10px 20px;
                background: linear-gradient(135deg, var(--primary-dark), var(--primary));
                color: white;
                border: none;
                border-radius: 30px;
                display: flex;
                align-items: center;
                gap: 10px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.15);
                cursor: pointer;
                transition: all 0.3s ease;
                opacity: 0;
                transform: translateY(20px);
            `;
            
            // Add to document
            document.body.appendChild(helpButton);
            
            // Show button after delay
            setTimeout(() => {
                helpButton.style.opacity = '1';
                helpButton.style.transform = 'translateY(0)';
            }, 3000);
            
            // Add hover effect
            helpButton.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.05)';
                this.style.boxShadow = '0 8px 25px rgba(40, 53, 147, 0.3)';
            });
            
            helpButton.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.15)';
            });
            
            // Open chat when clicked
            helpButton.addEventListener('click', function() {
                liveChat('maximize');
            });
        }
    }
    
    // Add animated icons to feature cards
    document.querySelectorAll('.feature-icon').forEach(icon => {
        // Add subtle animation on hover
        const parentCard = icon.closest('.feature-card') || icon.closest('.p-4');
        if (parentCard) {
            parentCard.addEventListener('mouseenter', function() {
                icon.classList.add('animate__animated', 'animate__heartBeat');
            });
            
            parentCard.addEventListener('mouseleave', function() {
                icon.classList.remove('animate__animated', 'animate__heartBeat');
            });
        }
    });
    
    // Auto highlight table rows on mouse move for enhanced UX
    document.querySelectorAll('table tbody').forEach(tableBody => {
        tableBody.addEventListener('mousemove', function(e) {
            // Get mouse Y position relative to table
            const rect = this.getBoundingClientRect();
            const y = e.clientY - rect.top;
            
            // Calculate which row the mouse is over
            const rows = this.querySelectorAll('tr');
            const rowHeight = rect.height / rows.length;
            const rowIndex = Math.floor(y / rowHeight);
            
            // Highlight that row and remove highlight from others
            rows.forEach((row, index) => {
                if (index === rowIndex) {
                    row.classList.add('highlight');
                } else {
                    row.classList.remove('highlight');
                }
            });
        });
        
        // Remove all highlights when mouse leaves
        tableBody.addEventListener('mouseleave', function() {
            this.querySelectorAll('tr').forEach(row => {
                row.classList.remove('highlight');
            });
        });
    });
});
