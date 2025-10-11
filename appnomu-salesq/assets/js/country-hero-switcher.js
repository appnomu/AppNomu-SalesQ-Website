/**
 * Country-based Hero Content Switcher
 * Dynamically updates hero section content based on selected country
 */

// Country-specific hero content configuration
const countryHeroContent = {
    'KE': {
        title: 'Kua Biashara Yako Kenya na SalesQ',
        subtitle: 'Suluhisho kamili la usimamizi wa mauzo na hesabu iliyoundwa kwa wafanyabiashara wa Kenya',
        recent_signup: 'Mary kutoka Nairobi',
        cta_text: 'Anza Jaribio Lako la Bure',
        guarantee_text: 'Dhamana ya kurudisha pesa kwa siku 30',
        urgency_banner: 'Jiunge na biashara 1000+ za Kenya zinazotumia SalesQ'
    },
    'NG': {
        title: 'Kua Azman Ka na Nigeria da SalesQ',
        subtitle: 'Cikakken tsarin sarrafa tallace-tallace da kayayyaki da aka tsara don \'yan kasuwa na Nigeria',
        recent_signup: 'Adebayo daga Lagos',
        cta_text: 'Fara Gwajin Ka na Kyauta',
        guarantee_text: 'Garantin dawo da kudi na kwana 30',
        urgency_banner: 'Shiga cikin kasuwanci 800+ na Nigeria da ke amfani da SalesQ'
    },
    'ZA': {
        title: 'Groei Jou Suid-Afrikaanse Besigheid met SalesQ',
        subtitle: 'Volledige verkope en voorraadbestuur oplossing ontwerp vir Suid-Afrikaanse entrepreneurs',
        recent_signup: 'Thabo van Kaapstad',
        cta_text: 'Begin Jou Gratis Toets',
        guarantee_text: '30-dag geld-terug waarborg',
        urgency_banner: 'Sluit aan by 500+ Suid-Afrikaanse besighede wat reeds SalesQ gebruik'
    },
    'TZ': {
        title: 'Kua Biashara Yako Tanzania na SalesQ',
        subtitle: 'Suluhisho kamili la usimamizi wa mauzo na hesabu iliyoundwa kwa wafanyabiashara wa Tanzania',
        recent_signup: 'Amina kutoka Dar es Salaam',
        cta_text: 'Anza Jaribio Lako la Bure',
        guarantee_text: 'Dhamana ya kurudisha pesa kwa siku 30 • Uwekaji wa Dakika 5',
        urgency_banner: 'Jiunge na biashara 300+ za Tanzania zinazotumia SalesQ'
    },
    'RW': {
        title: 'Kura Ubucuruzi Bwawe mu Rwanda na SalesQ',
        subtitle: 'Sisitemu yuzuye yo gucuruza no kubungabunga ibicuruzwa byakozwe kubacuruzi bo mu Rwanda',
        recent_signup: 'Jean wo i Kigali',
        cta_text: 'Tangira Ikizamini Cyawe Cya Ubuntu',
        guarantee_text: 'Garanti yo gusubiza amafaranga mu minsi 30 • Gushyiraho mu Minota 5',
        urgency_banner: 'Injira mu bucuruzi 200+ bwo mu Rwanda bukoresha SalesQ'
    },
    'GLOBAL': {
        title: 'Grow Your Business Globally with SalesQ',
        subtitle: 'Complete sales and inventory management solution for businesses worldwide',
        recent_signup: 'Alex from New York',
        cta_text: 'Start Your Free Trial',
        guarantee_text: '30-day money-back guarantee',
        urgency_banner: 'Join 2000+ businesses worldwide using SalesQ'
    }
};

/**
 * Update hero content based on selected country
 * @param {string} countryCode - The country code (KE, NG, ZA, TZ, RW, GLOBAL)
 */
function updateHeroContent(countryCode) {
    console.log('updateHeroContent called with:', countryCode);
    const content = countryHeroContent[countryCode] || countryHeroContent['GLOBAL'];
    console.log('Content found:', content);
    
    // Update hero elements with smooth transitions
    const elements = [
        { id: 'hero-title', content: content.title, isHTML: true },
        { id: 'hero-subtitle', content: content.subtitle },
        { id: 'recent-signup-name', content: content.recent_signup },
        { id: 'cta-text', content: content.cta_text },
        { id: 'guarantee-text', content: `<i class="bi bi-shield-check text-success me-1"></i>${content.guarantee_text}`, isHTML: true },
        { id: 'urgency-banner', content: `<i class="bi bi-clock-fill me-2"></i>${content.urgency_banner}`, isHTML: true }
    ];
    
    elements.forEach(element => {
        const el = document.getElementById(element.id);
        console.log(`Updating element ${element.id}:`, el ? 'found' : 'NOT FOUND');
        if (el) {
            // Force immediate update for TZ and RW
            if (countryCode === 'TZ' || countryCode === 'RW') {
                if (element.isHTML) {
                    el.innerHTML = element.content;
                } else {
                    el.textContent = element.content;
                }
                console.log(`Force updated ${element.id} for ${countryCode}`);
            } else {
                // Add fade-out effect for other countries
                el.style.opacity = '0.5';
                el.style.transform = 'translateY(10px)';
                
                setTimeout(() => {
                    if (element.isHTML) {
                        el.innerHTML = element.content;
                    } else {
                        el.textContent = element.content;
                    }
                    
                    // Add fade-in effect
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, 200);
            }
        }
    });
    
    // Store selected country in localStorage for persistence
    localStorage.setItem('selectedCountry', countryCode);
    
    // Update page analytics if available
    if (typeof gtag !== 'undefined') {
        gtag('event', 'country_selection', {
            'country_code': countryCode,
            'event_category': 'user_interaction'
        });
    }
}

/**
 * Initialize country-based hero content switcher
 */
function initCountryHeroSwitcher() {
    console.log('Initializing Country Hero Switcher...');
    
    // Add smooth transition styles to hero elements
    const heroElements = [
        'hero-title', 'hero-subtitle', 'recent-signup-name', 
        'cta-text', 'guarantee-text', 'urgency-banner'
    ];
    
    heroElements.forEach(id => {
        const el = document.getElementById(id);
        if (el) {
            el.style.transition = 'all 0.3s ease-in-out';
            console.log(`Added transition to element: ${id}`);
        } else {
            console.warn(`Element not found: ${id}`);
        }
    });
    
    // Listen for custom country change events from header
    window.addEventListener('countryChanged', function(e) {
        console.log('Country changed event received:', e.detail);
        const countryCode = e.detail.countryCode;
        if (countryCode && countryHeroContent[countryCode]) {
            updateHeroContent(countryCode);
        }
    });
    
    // Enhanced fallback: Listen for direct clicks on country options with immediate update
    document.addEventListener('click', function(e) {
        const countryOption = e.target.closest('.country-option');
        if (countryOption) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Direct country option click detected');
            const countryCode = countryOption.getAttribute('data-country');
            console.log('Country code from click:', countryCode);
            
            if (countryCode && countryHeroContent[countryCode]) {
                // Force page refresh for all countries to ensure pricing and content updates
                const currentUrl = new URL(window.location);
                if (countryCode !== 'GLOBAL') {
                    currentUrl.searchParams.set('country', countryCode);
                } else {
                    currentUrl.searchParams.delete('country');
                }
                window.location.href = currentUrl.toString();
            }
        }
    }, true); // Use capture phase
    
    // Initialize with URL parameter first, then stored preference, then PHP default
    setTimeout(() => {
        // Check URL parameter first
        const urlParams = new URLSearchParams(window.location.search);
        const urlCountry = urlParams.get('country');
        
        if (urlCountry && countryHeroContent[urlCountry.toUpperCase()]) {
            const countryCode = urlCountry.toUpperCase();
            console.log('Loading country from URL:', countryCode);
            updateHeroContent(countryCode);
            updateCountrySelector(countryCode);
            localStorage.setItem('selectedCountry', countryCode);
        } else {
            const storedCountry = localStorage.getItem('selectedCountry');
            if (storedCountry && countryHeroContent[storedCountry]) {
                console.log('Loading stored country preference:', storedCountry);
                updateHeroContent(storedCountry);
                updateCountrySelector(storedCountry);
            } else {
                // Try to detect from PHP or use default
                const currentCountry = window.currentCountry || 'GLOBAL';
                console.log('Using current/default country:', currentCountry);
                updateHeroContent(currentCountry);
            }
        }
    }, 500);
}

/**
 * Update country selector display
 */
function updateCountrySelector(countryCode) {
    const countrySelector = document.querySelector('.country-selector');
    if (countrySelector && countryCode !== 'GLOBAL') {
        const countryNames = {
            'KE': 'KENYA',
            'NG': 'NIGERIA', 
            'ZA': 'SOUTH AFRICA',
            'TZ': 'TANZANIA',
            'RW': 'RWANDA'
        };
        
        countrySelector.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 4px;">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
            </svg>
            <span>${countryNames[countryCode] || 'GLOBAL'}</span>
        `;
    }
}

// Initialize when DOM is loaded
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCountryHeroSwitcher);
} else {
    initCountryHeroSwitcher();
}

// Make functions globally available
window.updateHeroContent = updateHeroContent;
window.countryHeroContent = countryHeroContent;

// Export for potential external use
window.CountryHeroSwitcher = {
    updateHeroContent,
    initCountryHeroSwitcher,
    countryHeroContent
};
