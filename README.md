# AppNomu SalesQ Website

🚀 **AI-Powered CRM with SMS Marketing & Inventory Management for African Businesses**

AppNomu SalesQ is a comprehensive SaaS business management platform designed for small to medium businesses in Uganda and East Africa. The platform provides integrated solutions for sales management, inventory control, customer relationship management, financial tracking, and multi-channel communication.

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D7.4-blue)](https://php.net)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple)](https://getbootstrap.com)

## ✨ Features

### 🎯 Core Capabilities
- **📊 Customer Relationship Management (CRM)** - Track customer interactions, purchase history, and automate follow-ups
- **📦 Inventory Management** - Real-time stock tracking with low-stock alerts
- **💬 SMS & Voice Marketing** - Bulk SMS and voice campaigns across Africa ($0.02/message)
- **🤖 AI-Powered Automation** - SalesQ-AI for intelligent business insights
- **📈 Sales Analytics & Reports** - Real-time performance insights and trends
- **💳 Payment Processing** - Integrated with Flutterwave, PayPal, and Stripe
- **📧 Digital Receipts** - Automated SMS and email receipts
- **📱 Mobile Top-ups** - Reward customers with instant airtime
- **💰 Profit & Loss Tracking** - Comprehensive financial reports

### 🎨 Modern UI/UX
- **3D Card Effects** - Premium depth and perspective animations
- **Responsive Design** - Mobile-first approach with Bootstrap 5.3
- **Interactive Carousels** - Swipeable feature showcases
- **Smooth Animations** - AOS (Animate On Scroll) library integration
- **Country-Specific Content** - Dynamic content based on user location

## 🚀 Quick Start

### Prerequisites
- PHP 7.4 or higher
- Web server (Apache/Nginx)
- Modern web browser

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/appnomu/AppNomu-SalesQ-Website.git
   cd AppNomu-SalesQ-Website/appnomu-salesq
   ```

2. **Configure the application**
   ```bash
   cp config.example.php config.php
   ```
   Edit `config.php` with your actual credentials and settings.

3. **Set up your web server**
   - Point your document root to the `appnomu-salesq` directory
   - Ensure `.htaccess` is enabled (for Apache)
   - Configure URL rewriting

4. **Access the website**
   ```
   http://localhost/appnomu-salesq
   ```

## 📁 Project Structure

```
appnomu-salesq/
├── index.php                 # Homepage with 3D cards and carousel
├── config.php               # Configuration (not in repo)
├── config.example.php       # Configuration template
├── .htaccess               # Apache URL rewriting
├── features/               # Feature pages
│   ├── crm.php
│   ├── sms.php
│   ├── voice.php
│   ├── product-sales-management.php
│   ├── airtime.php
│   ├── receipt-link.php
│   └── salesq-ai.php
├── integrations/           # Integration pages
│   ├── flutterwave.php
│   ├── stripe.php
│   ├── paypal.php
│   └── ...
├── b/                      # Blog posts
├── includes/               # Shared components
│   ├── layout.php
│   ├── header.php
│   ├── footer.php
│   └── country_content.php
├── css/                    # Stylesheets
├── js/                     # JavaScript files
└── assets/                 # Images and media
```

## 🎨 Key Technologies

- **Backend**: PHP 7.4+
- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Framework**: Bootstrap 5.3
- **Icons**: Bootstrap Icons
- **Animations**: AOS (Animate On Scroll)
- **Version Control**: Git

## 🔒 Security

- Sensitive configuration files are excluded via `.gitignore`
- Never commit `config.php` or files containing credentials
- Use environment variables for production deployments
- Keep dependencies updated

## 📊 SEO Optimization

The website is optimized for search engines with:
- Semantic HTML5 markup
- Meta tags with targeted keywords (2025 focus)
- Structured data for better indexing
- Mobile-responsive design
- Fast loading times
- Country-specific content optimization

## 🌍 Supported Regions

- 🇺🇬 Uganda
- 🇰🇪 Kenya
- 🇹🇿 Tanzania
- 🇳🇬 Nigeria
- 🇷🇼 Rwanda
- 🇬🇭 Ghana
- And more African countries

## 📈 Performance Stats

- ⚡ **40%** Average sales growth with CRM
- ⏱️ **15 hours** Saved weekly with automation
- 📊 **25%** Better customer retention
- 🚀 **3x** Faster order processing
- 👥 **25,000+** Businesses trust AppNomu SalesQ

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Contact & Support

- **Website**: [https://appnomu.com](https://appnomu.com)
- **Email**: support@appnomu.com
- **Documentation**: [https://docs.appnomu.com](https://docs.appnomu.com)

## 🙏 Acknowledgments

- Bootstrap team for the amazing framework
- All contributors and users of AppNomu SalesQ
- The African tech community

---

**Made with ❤️ for African Businesses**
