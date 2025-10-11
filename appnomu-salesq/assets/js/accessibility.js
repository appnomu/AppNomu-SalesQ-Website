/**
 * Accessibility Enhancements for AppNomu SalesQ Website
 * This script handles various accessibility features like:
 * - High contrast mode
 * - Reduced motion preferences
 * - Screen reader announcements
 * - Keyboard navigation improvements
 * - Focus management
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize accessibility features
    initAccessibilityFeatures();
    
    // Add accessibility attributes to interactive elements
    enhanceInteractiveElements();
    
    // Improve form accessibility
    enhanceForms();
    
    // Handle keyboard navigation
    improveKeyboardNavigation();
});

/**
 * Initialize all accessibility features
 */
function initAccessibilityFeatures() {
    // Initialize high contrast mode toggle
    initHighContrastMode();
    
    // Initialize reduced motion preferences
    initReducedMotion();
    
    // Initialize screen reader announcements
    initScreenReaderAnnouncements();
    
    // Make accessibility controls available via keyboard shortcut (Alt+A)
    initAccessibilityShortcuts();
}

/**
 * High contrast mode functionality
 */
function initHighContrastMode() {
    const toggleButton = document.getElementById('toggle-high-contrast');
    if (!toggleButton) return;
    
    // Check for saved preference
    const highContrastEnabled = localStorage.getItem('high-contrast-mode') === 'enabled';
    
    // Apply saved preference
    if (highContrastEnabled) {
        document.body.classList.add('high-contrast');
        toggleButton.setAttribute('aria-pressed', 'true');
    }
    
    // Toggle high contrast mode when button is clicked
    toggleButton.addEventListener('click', function() {
        const isEnabled = document.body.classList.toggle('high-contrast');
        this.setAttribute('aria-pressed', isEnabled ? 'true' : 'false');
        localStorage.setItem('high-contrast-mode', isEnabled ? 'enabled' : 'disabled');
        
        // Announce change to screen readers
        announceToScreenReader(isEnabled ? 'High contrast mode enabled' : 'High contrast mode disabled');
    });
}

/**
 * Reduced motion functionality
 */
function initReducedMotion() {
    const toggleButton = document.getElementById('toggle-reduced-motion');
    if (!toggleButton) return;
    
    // Check for saved preference or system preference
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const savedPreference = localStorage.getItem('reduced-motion');
    const reducedMotionEnabled = savedPreference ? savedPreference === 'enabled' : prefersReducedMotion;
    
    // Apply saved or system preference
    if (reducedMotionEnabled) {
        document.body.classList.add('reduced-motion');
        toggleButton.setAttribute('aria-pressed', 'true');
    }
    
    // Toggle reduced motion when button is clicked
    toggleButton.addEventListener('click', function() {
        const isEnabled = document.body.classList.toggle('reduced-motion');
        this.setAttribute('aria-pressed', isEnabled ? 'true' : 'false');
        localStorage.setItem('reduced-motion', isEnabled ? 'enabled' : 'disabled');
        
        // Announce change to screen readers
        announceToScreenReader(isEnabled ? 'Reduced motion enabled' : 'Reduced motion disabled');
    });
}

/**
 * Screen reader announcements
 */
function initScreenReaderAnnouncements() {
    // Create the announcements element if it doesn't exist
    if (!document.getElementById('sr-announcements')) {
        const srAnnouncer = document.createElement('div');
        srAnnouncer.id = 'sr-announcements';
        srAnnouncer.className = 'sr-announcement';
        srAnnouncer.setAttribute('aria-live', 'polite');
        srAnnouncer.setAttribute('aria-atomic', 'true');
        document.body.appendChild(srAnnouncer);
    }
}

/**
 * Announce message to screen reader
 * @param {string} message Message to announce
 * @param {string} priority Can be 'polite' or 'assertive'
 */
function announceToScreenReader(message, priority = 'polite') {
    const announcer = document.getElementById('sr-announcements');
    if (!announcer) return;
    
    // Set the appropriate aria-live value
    announcer.setAttribute('aria-live', priority);
    
    // Clear and set the message with a small delay to ensure it's announced
    announcer.textContent = '';
    
    setTimeout(() => {
        announcer.textContent = message;
    }, 50);
}

/**
 * Keyboard shortcuts for accessibility features
 */
function initAccessibilityShortcuts() {
    document.addEventListener('keydown', function(e) {
        // Alt+A to toggle accessibility controls visibility
        if (e.altKey && e.key === 'a') {
            e.preventDefault();
            toggleAccessibilityControls();
        }
    });
}

/**
 * Toggle visibility of accessibility controls
 */
function toggleAccessibilityControls() {
    const controls = document.getElementById('accessibility-controls');
    if (!controls) return;
    
    const isHidden = controls.classList.contains('visually-hidden');
    
    if (isHidden) {
        controls.classList.remove('visually-hidden');
        controls.style.position = 'fixed';
        controls.style.top = '10px';
        controls.style.right = '10px';
        controls.style.background = '#fff';
        controls.style.border = '1px solid #ccc';
        controls.style.padding = '10px';
        controls.style.zIndex = '9999';
        controls.style.boxShadow = '0 0 10px rgba(0,0,0,0.2)';
        
        // Focus the first button
        const firstButton = controls.querySelector('button');
        if (firstButton) firstButton.focus();
        
        // Add close button
        const closeButton = document.createElement('button');
        closeButton.textContent = 'Close';
        closeButton.addEventListener('click', toggleAccessibilityControls);
        controls.appendChild(closeButton);
        
        // Announce to screen reader
        announceToScreenReader('Accessibility controls opened');
    } else {
        controls.classList.add('visually-hidden');
        controls.removeAttribute('style');
        
        // Remove close button
        const closeButton = controls.querySelector('button:last-child');
        if (closeButton && closeButton.textContent === 'Close') {
            controls.removeChild(closeButton);
        }
        
        // Announce to screen reader
        announceToScreenReader('Accessibility controls closed');
    }
}

/**
 * Enhance interactive elements with proper ARIA attributes
 */
function enhanceInteractiveElements() {
    // Add appropriate role and aria attributes to dropdown toggles
    document.querySelectorAll('.dropdown-toggle').forEach(function(toggle) {
        if (!toggle.hasAttribute('aria-haspopup')) {
            toggle.setAttribute('aria-haspopup', 'true');
        }
        
        // Ensure dropdown toggle has an id
        if (!toggle.id) {
            toggle.id = 'dropdown-toggle-' + Math.floor(Math.random() * 10000);
        }
        
        // Find the associated menu and link it with aria-controls
        const menu = toggle.nextElementSibling;
        if (menu && menu.classList.contains('dropdown-menu') && !toggle.hasAttribute('aria-controls')) {
            if (!menu.id) {
                menu.id = 'dropdown-menu-' + Math.floor(Math.random() * 10000);
            }
            toggle.setAttribute('aria-controls', menu.id);
        }
    });
    
    // Ensure all interactive elements have accessible names
    document.querySelectorAll('a, button, [role="button"]').forEach(function(element) {
        if (!element.textContent.trim() && !element.getAttribute('aria-label') && !element.title) {
            // Check for icon inside
            const icon = element.querySelector('.bi');
            if (icon) {
                const iconClass = Array.from(icon.classList).find(cls => cls.startsWith('bi-'));
                if (iconClass) {
                    const iconName = iconClass.replace('bi-', '').replace(/-/g, ' ');
                    element.setAttribute('aria-label', iconName);
                    icon.setAttribute('aria-hidden', 'true');
                }
            }
        }
    });
    
    // Hide decorative icons from screen readers
    document.querySelectorAll('.bi').forEach(function(icon) {
        if (!icon.getAttribute('aria-label') && !icon.getAttribute('aria-hidden')) {
            icon.setAttribute('aria-hidden', 'true');
        }
    });
}

/**
 * Enhance form accessibility
 */
function enhanceForms() {
    // Find all forms
    document.querySelectorAll('form').forEach(function(form) {
        // Find all required fields
        const requiredFields = form.querySelectorAll('[required]');
        
        // Add screen reader text to required field labels if not already present
        requiredFields.forEach(function(field) {
            const id = field.id;
            if (!id) return;
            
            // Find the associated label
            const label = form.querySelector(`label[for="${id}"]`);
            if (!label) return;
            
            // If label doesn't already have a "required" indicator for screen readers
            if (!label.querySelector('.sr-only')) {
                // Check if the label already has visual required indicator (like an asterisk)
                const hasVisualIndicator = label.textContent.includes('*');
                
                if (hasVisualIndicator) {
                    // Add screen reader text
                    const srOnly = document.createElement('span');
                    srOnly.className = 'sr-only';
                    srOnly.textContent = ' (required)';
                    label.appendChild(srOnly);
                }
            }
        });
        
        // Improve error message accessibility
        form.addEventListener('submit', function() {
            setTimeout(() => {
                // Find any validation errors
                const invalidFields = form.querySelectorAll(':invalid');
                
                if (invalidFields.length > 0) {
                    // Focus the first invalid field
                    invalidFields[0].focus();
                    
                    // Announce to screen readers
                    const errorCount = invalidFields.length;
                    announceToScreenReader(`Form has ${errorCount} ${errorCount === 1 ? 'error' : 'errors'}. Please correct and try again.`, 'assertive');
                }
            }, 100);
        });
    });
}

/**
 * Improve keyboard navigation
 */
function improveKeyboardNavigation() {
    // Handle escape key for modals and dropdowns
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            // Close any open modal
            const openModal = document.querySelector('.modal.show');
            if (openModal) {
                const bootstrapModal = bootstrap.Modal.getInstance(openModal);
                if (bootstrapModal) bootstrapModal.hide();
            }
            
            // Close any open dropdown
            const openDropdown = document.querySelector('.dropdown-menu.show');
            if (openDropdown) {
                const toggleButton = document.querySelector('[aria-controls="' + openDropdown.id + '"]');
                if (toggleButton) toggleButton.click();
            }
        }
    });
    
    // Improve modal focus management
    document.querySelectorAll('.modal').forEach(function(modal) {
        modal.addEventListener('shown.bs.modal', function() {
            // Find the first focusable element in the modal
            const focusableElements = modal.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
            if (focusableElements.length > 0) {
                focusableElements[0].focus();
            }
            
            // Trap focus within modal
            modal.addEventListener('keydown', trapFocusInModal);
        });
        
        modal.addEventListener('hidden.bs.modal', function() {
            modal.removeEventListener('keydown', trapFocusInModal);
        });
    });
}

/**
 * Trap focus within a modal
 * @param {Event} e Keyboard event
 */
function trapFocusInModal(e) {
    if (e.key !== 'Tab') return;
    
    const modal = this;
    const focusableElements = modal.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
    const firstElement = focusableElements[0];
    const lastElement = focusableElements[focusableElements.length - 1];
    
    // If shift + tab on first element, move to last element
    if (e.shiftKey && document.activeElement === firstElement) {
        e.preventDefault();
        lastElement.focus();
    } 
    // If tab on last element, move to first element
    else if (!e.shiftKey && document.activeElement === lastElement) {
        e.preventDefault();
        firstElement.focus();
    }
}
