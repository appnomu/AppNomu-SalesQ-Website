// Immediately make all AOS elements visible to prevent content from being hidden
(function() {
    // Apply visibility immediately before DOM is fully loaded
    const aosElements = document.querySelectorAll('[data-aos]');
    aosElements.forEach(function(element) {
        element.style.opacity = '1';
        element.style.transform = 'none';
        element.style.visibility = 'visible';
    });
})();

document.addEventListener('DOMContentLoaded', function() {
    // Make all AOS elements visible again to ensure nothing was missed
    document.querySelectorAll('[data-aos]').forEach(function(element) {
        element.style.opacity = '1';
        element.style.transform = 'none';
        element.style.visibility = 'visible';
    });
    
    // Initialize AOS (Animate On Scroll) with safe settings
    if (typeof AOS !== 'undefined') {
        try {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false,
                offset: 50,
                disable: 'mobile'
            });
            console.log('AOS initialized successfully');
        } catch (e) {
            console.warn('AOS initialization error:', e);
        }
    } else {
        console.warn('AOS library not available');
    }

    // Counter Animation
    const animateCounters = () => {
        const counters = document.querySelectorAll('.counter-value');
        const speed = 200; // The lower the faster
        
        if (!counters.length) return;

        const isInViewport = (element) => {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        };

        const startCounters = () => {
            counters.forEach(counter => {
                if (counter.getAttribute('data-counted') === 'true') return;
                
                if (isInViewport(counter)) {
                    const target = +counter.getAttribute('data-count');
                    const count = +counter.innerText;
                    const increment = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(startCounters, 1);
                    } else {
                        counter.innerText = target;
                        counter.setAttribute('data-counted', 'true');
                    }
                }
            });
        };

        // Run once on page load
        startCounters();

        // Run on scroll
        window.addEventListener('scroll', startCounters);
    };

    // Smooth scrolling for anchor links
    const smoothScroll = () => {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
    };

    // Initialize functions
    animateCounters();
    smoothScroll();

    // Add animation classes on scroll
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right');
        
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementTop < windowHeight - 100) {
                element.classList.add('fade-in-up');
            }
        });
    };

    // Run on load and scroll
    window.addEventListener('load', animateOnScroll);
    window.addEventListener('scroll', animateOnScroll);

    // Add hover effect to team cards
    const teamCards = document.querySelectorAll('.team-card');
    teamCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
            this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.1)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.05)';
        });
    });

    // Add animation to value cards on scroll
    const valueCards = document.querySelectorAll('.value-card');
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    valueCards.forEach(card => {
        observer.observe(card);
    });
});

// Parallax effect for background elements
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll('.parallax');
    
    parallaxElements.forEach(element => {
        const speed = parseFloat(element.getAttribute('data-speed')) || 0.5;
        const yPos = -(scrolled * speed);
        element.style.transform = `translate3d(0, ${yPos}px, 0)`;
    });
});
