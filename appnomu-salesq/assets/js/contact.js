document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS (Animate On Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    }

    // Form validation
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation');
        
        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    // If form is valid, you can add AJAX submission here
                    // For now, we'll just show a success message
                    event.preventDefault();
                    const submitButton = form.querySelector('button[type="submit"]');
                    const originalText = submitButton.innerHTML;
                    
                    // Show loading state
                    submitButton.disabled = true;
                    submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';
                    
                    // Simulate API call
                    setTimeout(() => {
                        // Show success message
                        const alert = document.createElement('div');
                        alert.className = 'alert alert-success mt-3';
                        alert.role = 'alert';
                        alert.innerHTML = 'Thank you for your message! We will get back to you soon.';
                        form.appendChild(alert);
                        
                        // Reset form
                        form.reset();
                        form.classList.remove('was-validated');
                        
                        // Reset button
                        submitButton.disabled = false;
                        submitButton.innerHTML = originalText;
                        
                        // Remove success message after 5 seconds
                        setTimeout(() => {
                            alert.remove();
                        }, 5000);
                    }, 1500);
                }
                
                form.classList.add('was-validated');
            }, false);
        });
    }

    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add animation to contact cards on scroll
    const contactCards = document.querySelectorAll('.contact-card');
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -50px 0px'
    };

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        contactCards.forEach(card => {
            card.style.opacity = 0;
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
            observer.observe(card);
        });
    } else {
        // Fallback for browsers that don't support IntersectionObserver
        contactCards.forEach(card => {
            card.style.opacity = 1;
            card.style.transform = 'translateY(0)';
        });
    }
});
