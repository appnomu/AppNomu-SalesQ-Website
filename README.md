# AppNomu SalesQ Website

![AppNomu SalesQ](https://appnomu.com/landing/assets/images/logo.svg)

## 🚀 Overview

The official marketing website for **AppNomu SalesQ** - Africa's leading affordable CRM software for small businesses. This website showcases our comprehensive business management platform that combines SMS marketing, inventory management, sales automation, and AI-powered insights in one unified solution.

**Live Website:** [https://appnomu.com/landing](https://appnomu.com/landing)

## ✨ Features

### Marketing & Content
- **Dynamic Country-Specific Content** - Automatically adapts content based on user location (Kenya, Nigeria, South Africa, Tanzania, Rwanda)
- **Multi-language Support** - English and Swahili translations
- **SEO Optimized** - Comprehensive meta tags, structured data, and sitemap generation
- **Blog Platform** - Content management for marketing articles and guides
- **RSS Feeds** - Automated RSS feed generation for blog content

### Product Showcases
- **Feature Pages** - Dedicated pages for SMS Marketing, CRM, Inventory Management, AI Insights, and more
- **Interactive Demos** - Demo request forms with automated processing
- **Pricing Calculator** - Dynamic pricing display based on user location
- **Integration Showcase** - Display of third-party integrations (Stripe, PayPal, Flutterwave, etc.)

### User Experience
- **Responsive Design** - Mobile-first approach with Bootstrap 5
- **Modern UI/UX** - Clean, professional design with smooth animations (AOS library)
- **Intercom Chat** - Integrated customer support chat widget
- **Cookie Consent** - GDPR-compliant cookie management
- **Accessibility** - WCAG 2.1 compliant with dedicated accessibility page

### Business Features
- **Contact Forms** - Multiple contact forms with spam protection
- **Partner Application** - Affiliate and partnership program management
- **Discount Application** - Special pricing request system
- **Trust Centre** - Security and compliance information

## 🛠️ Technology Stack

### Frontend
- **HTML5/CSS3** - Modern semantic markup
- **Bootstrap 5.3** - Responsive framework
- **JavaScript (ES6+)** - Modern JavaScript features
- **AOS (Animate On Scroll)** - Smooth scroll animations
- **Bootstrap Icons** - Icon library

### Backend
- **PHP 7.4+** - Server-side scripting
- **Session Management** - Secure session handling with cookie security
- **IP Geolocation** - Cloudflare and IP-API integration
- **Form Processing** - Server-side validation and processing

### Third-Party Integrations
- **Intercom** - Customer support chat (app_id: b1r7v1i9)
- **Google Analytics** - Traffic and conversion tracking
- **Cookie Consent** - Privacy compliance
- **Social Media** - WhatsApp, Facebook, Twitter integration

## 📁 Project Structure

```
appnomu-salesq/
├── assets/
│   ├── css/              # Stylesheets
│   ├── js/               # JavaScript files
│   └── images/           # Images and SVG files
├── b/                    # Blog articles
├── features/             # Feature showcase pages
├── includes/             # PHP includes and templates
│   ├── translations/     # Language files
│   ├── config.php        # Configuration
│   ├── layout.php        # Main layout template
│   ├── header.php        # Header component
│   └── footer.php        # Footer component
├── integrations/         # Integration showcase pages
├── docs/                 # Documentation
├── index.php             # Homepage
├── about.php             # About page
├── contact.php           # Contact page
├── pricing.php           # Pricing page
├── demo.php              # Demo request page
├── features.php          # Features overview
├── partners.php          # Partner program
├── trust-centre.php      # Security & compliance
├── privacy-policy.php    # Privacy policy
├── terms-of-use.php      # Terms of service
├── refund-policy.php     # Refund policy
├── config.php            # Main configuration
├── router.php            # URL routing
├── sitemap.xml           # XML sitemap
├── robots.txt            # Search engine directives
└── .htaccess             # Apache configuration
```

## 🚀 Installation & Setup

### Prerequisites
- PHP 7.4 or higher
- Apache/Nginx web server
- mod_rewrite enabled (for clean URLs)
- SSL certificate (for production)

### Local Development Setup

1. **Clone the repository**
   ```bash
   git clone appnomu-sales@appnomu-sales.ghe.com:4cluw1w7_admin/AppNomu-SalesQ-Website.git
   cd AppNomu-SalesQ-Website
   ```

2. **Configure environment**
   ```bash
   cp appnomu-salesq/.env.example appnomu-salesq/.env
   ```

3. **Update configuration**
   Edit `appnomu-salesq/config.php` and update:
   ```php
   define('BASE_URL', 'http://localhost/appnomu-salesq');
   define('DEBUG_MODE', true);
   ```

4. **Set up virtual host** (Apache example)
   ```apache
   <VirtualHost *:80>
       ServerName appnomu-salesq.local
       DocumentRoot "/path/to/appnomu-salesq"
       <Directory "/path/to/appnomu-salesq">
           AllowOverride All
           Require all granted
       </Directory>
   </VirtualHost>
   ```

5. **Update hosts file**
   ```
   127.0.0.1 appnomu-salesq.local
   ```

6. **Access the site**
   Navigate to `http://appnomu-salesq.local` in your browser

### Production Deployment

1. **Upload files to server**
   ```bash
   # Using rsync
   rsync -avz --exclude '.git' appnomu-salesq/ user@server:/var/www/html/landing/
   ```

2. **Set correct permissions**
   ```bash
   chmod 755 /var/www/html/landing
   chmod 644 /var/www/html/landing/*.php
   chmod 755 /var/www/html/landing/logs
   ```

3. **Update production config**
   Edit `config.php`:
   ```php
   define('BASE_URL', 'https://appnomu.com/landing');
   define('DEBUG_MODE', false);
   ```

4. **Configure SSL**
   Ensure SSL certificate is properly configured for HTTPS

5. **Test deployment**
   - Check all pages load correctly
   - Test form submissions
   - Verify country detection
   - Test Intercom chat widget

## 🔧 Configuration

### Base Configuration (`config.php`)

```php
// Base URL - Update for your environment
define('BASE_URL', 'https://appnomu.com/landing');
define('ASSET_URL', BASE_URL . '/assets');

// Debug mode - Set to false in production
define('DEBUG_MODE', false);

// Session security settings
$secure = true;      // Force HTTPS
$httponly = true;    // Prevent JavaScript access
$samesite = 'Lax';   // CSRF protection
```

### Country Detection

The website automatically detects user location and adapts content:
- Uses Cloudflare `CF-IPCOUNTRY` header (preferred)
- Falls back to IP-API for geolocation
- Supports manual country selection via URL parameter: `?country=KE`
- Supported countries: KE (Kenya), NG (Nigeria), ZA (South Africa), TZ (Tanzania), RW (Rwanda)

### URL Rewriting

Clean URLs are enabled via `.htaccess`:
- `/about` → `/about.php`
- `/features/sms` → `/features/sms.php`
- `/b/article-name` → `/b/article-name.php`

## 📝 Content Management

### Adding Blog Articles

1. Create new PHP file in `/b/` directory
2. Use existing articles as templates
3. Include proper meta tags and structured data
4. Add to sitemap generation script

Example structure:
```php
<?php
$page_title = 'Article Title | AppNomu SalesQ';
$page_description = 'Article description for SEO';
$current_page = 'blog';
require_once __DIR__ . '/../includes/layout.php';
ob_start();
?>

<!-- Article content here -->

<?php
$content = ob_get_clean();
include __DIR__ . '/../includes/layout.php';
?>
```

### Adding Feature Pages

1. Create new PHP file in `/features/` directory
2. Follow existing feature page structure
3. Include hero section, benefits, and CTA
4. Add AOS animations for visual appeal

## 🎨 Styling Guidelines

### Color Palette
- **Primary Green:** `#198754` - Main brand color
- **Success:** `#28a745` - Positive actions
- **Warning:** `#ffc107` - Urgency indicators
- **Dark:** `#212529` - Text and headings
- **Light:** `#f8f9fa` - Backgrounds

### Typography
- **Headings:** System font stack with fallbacks
- **Body:** 16px base font size
- **Line Height:** 1.6 for readability

### Responsive Breakpoints
- **Mobile:** < 576px
- **Tablet:** 576px - 991px
- **Desktop:** 992px - 1199px
- **Large Desktop:** ≥ 1200px

## 🔒 Security Features

- **HTTPS Enforcement** - All traffic redirected to HTTPS
- **Secure Headers** - X-Frame-Options, X-Content-Type-Options, X-XSS-Protection
- **Session Security** - Secure, HttpOnly, SameSite cookies
- **Input Validation** - Server-side form validation
- **CSRF Protection** - Token-based form protection
- **SQL Injection Prevention** - Prepared statements (when applicable)

## 🧪 Testing

### Manual Testing Checklist
- [ ] Homepage loads correctly
- [ ] Country detection works
- [ ] All navigation links functional
- [ ] Forms submit successfully
- [ ] Intercom chat loads
- [ ] Mobile responsive design
- [ ] Page load speed < 3 seconds
- [ ] SEO meta tags present
- [ ] SSL certificate valid

### Browser Compatibility
- Chrome/Edge (latest 2 versions)
- Firefox (latest 2 versions)
- Safari (latest 2 versions)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 📊 Analytics & Tracking

- **Google Analytics** - Traffic and conversion tracking
- **Intercom** - User engagement and support
- **Cookie Consent** - GDPR compliance tracking

## 🤝 Contributing

This is a private repository for AppNomu internal use. For contributions:

1. Create a feature branch from `main`
2. Make your changes
3. Test thoroughly
4. Submit for review
5. Merge after approval

### Commit Message Format
```
type: Brief description

Detailed explanation if needed

Examples:
feat: Add new pricing calculator
fix: Resolve mobile menu issue
docs: Update README installation steps
style: Improve homepage hero section
```

## 📞 Support & Contact

- **Website:** [https://appnomu.com/landing](https://appnomu.com/landing)
- **Support Email:** support@appnomu.com
- **WhatsApp:** +256 709 712 129
- **Phone:** +256 709 712 129

## 📄 License

Copyright © 2024 AppNomu. All rights reserved.

This is proprietary software. Unauthorized copying, modification, distribution, or use of this software, via any medium, is strictly prohibited.

## 👥 Team

**Founder & CEO:** Bahati Asher Faith

**Development Team:** AppNomu Engineering

---

**Built with ❤️ in Uganda for businesses across Africa**
