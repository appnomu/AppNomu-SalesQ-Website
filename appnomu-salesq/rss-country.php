<?php
/**
 * Country-Specific RSS Feed Generator for AppNomu SalesQ Blog
 * Generates RSS feeds with country-localized content and language
 */

// Load configuration
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/country_content.php';

// Get country parameter from URL or detect automatically
$requested_country = isset($_GET['country']) ? strtoupper($_GET['country']) : get_user_country();
$valid_countries = ['KE', 'NG', 'ZA', 'TZ', 'RW', 'GLOBAL'];

if (!in_array($requested_country, $valid_countries)) {
    $requested_country = 'GLOBAL';
}

// Set content type to XML
header('Content-Type: application/rss+xml; charset=UTF-8');

// Country-specific RSS configuration
$country_configs = [
    'KE' => [
        'title' => 'AppNomu SalesQ Blog Kenya - Mipango ya Kukuza Biashara',
        'description' => 'Maarifa ya hivi karibuni kuhusu SMS marketing, CRM, na otomesheni ya biashara kwa wafanyabiashara wa Kenya. Vidokezo vya kitaalamu vya kukuza biashara yako na AppNomu SalesQ.',
        'language' => 'sw',
        'currency' => 'KES',
        'contact' => '+254 700 000000'
    ],
    'NG' => [
        'title' => 'AppNomu SalesQ Blog Nigeria - Business Growth Tips',
        'description' => 'Latest insights on SMS marketing, CRM, and business automation for Nigerian entrepreneurs. Expert tips to grow your business with AppNomu SalesQ.',
        'language' => 'en',
        'currency' => 'NGN',
        'contact' => '+234 800 000 0000'
    ],
    'ZA' => [
        'title' => 'AppNomu SalesQ Blog South Africa - Business Growth Tips',
        'description' => 'Latest insights on SMS marketing, CRM, and business automation for South African entrepreneurs. Expert tips to grow your business with AppNomu SalesQ.',
        'language' => 'en',
        'currency' => 'ZAR',
        'contact' => '+27 11 000 0000'
    ],
    'TZ' => [
        'title' => 'AppNomu SalesQ Blog Tanzania - Mipango ya Kukuza Biashara',
        'description' => 'Maarifa ya hivi karibuni kuhusu SMS marketing, CRM, na otomesheni ya biashara kwa wafanyabiashara wa Tanzania. Vidokezo vya kitaalamu vya kukuza biashara yako na AppNomu SalesQ.',
        'language' => 'sw',
        'currency' => 'TZS',
        'contact' => '+255 700 000000'
    ],
    'RW' => [
        'title' => 'AppNomu SalesQ Blog Rwanda - Inama zo Guteza Imbere Ubucuruzi',
        'description' => 'Amakuru agezweho yerekeye SMS marketing, CRM, na automation y\'ubucuruzi ku bacuruzi bo mu Rwanda. Inama z\'inzobere zo guteza imbere ubucuruzi bwawe na AppNomu SalesQ.',
        'language' => 'rw',
        'currency' => 'RWF',
        'contact' => '+250 700 000000'
    ],
    'GLOBAL' => [
        'title' => 'AppNomu SalesQ Blog - Business Growth Tips for Africa',
        'description' => 'Latest insights on SMS marketing, CRM, and business automation for African entrepreneurs. Expert tips to grow your business with AppNomu SalesQ.',
        'language' => 'en',
        'currency' => 'USD',
        'contact' => '+1 (555) 123-4567'
    ]
];

$config = $country_configs[$requested_country];

// Base RSS configuration
$rss_config = [
    'title' => $config['title'],
    'description' => $config['description'],
    'link' => 'https://appnomu.com/landing/?country=' . $requested_country,
    'language' => $config['language'],
    'copyright' => 'Copyright ' . date('Y') . ' AppNomu SalesQ. All rights reserved.',
    'managingEditor' => 'support@appnomu.com (AppNomu SalesQ Team)',
    'webMaster' => 'support@appnomu.com (AppNomu SalesQ Team)',
    'category' => 'Business/Technology',
    'generator' => 'AppNomu SalesQ Country RSS Generator v1.0',
    'docs' => 'https://www.rssboard.org/rss-specification',
    'ttl' => 60,
    'image' => [
        'url' => 'https://appnomu.com/landing/assets/images/AppNomu_SalesQ_Logo_White.svg',
        'title' => 'AppNomu SalesQ ' . $requested_country,
        'link' => 'https://appnomu.com/landing/?country=' . $requested_country,
        'width' => 144,
        'height' => 144,
        'description' => 'AppNomu SalesQ - Business Growth Platform for ' . $requested_country
    ]
];

// Country-specific blog posts with localized titles and descriptions
$country_posts = [
    'KE' => [
        [
            'file' => 'why-timely-stocking-essential-business-festival-season-uganda.php',
            'title' => 'Kwa Nini Uhifadhi wa Wakati Unaofaa ni Muhimu kwa Biashara Wakati wa Msimu wa Sherehe Kenya',
            'description' => 'Jifunze jinsi usimamizi sahihi wa hesabu wakati wa misimu ya sherehe ya Kenya unavyoweza kuongeza faida yako kwa asilimia 40. Mikakati muhimu ya uhifadhi kwa Eid, Krismasi, na sherehe za kitamaduni.',
            'pubDate' => '2024-12-15 10:00:00',
            'category' => 'Usimamizi wa Hesabu',
            'keywords' => 'usimamizi wa hesabu Kenya, uhifadhi wa msimu wa sherehe, mipango ya biashara Kenya'
        ],
        [
            'file' => 'best-email-sms-whatsapp-marketing-practices-roi-uganda.php',
            'title' => 'Mbinu Bora za Uuzaji wa Barua Pepe, SMS na WhatsApp kwa Faida Kubwa Kenya',
            'description' => 'Gundua mikakati ya uuzaji wa barua pepe, SMS, na WhatsApp iliyothibitishwa inayotoa faida kubwa kwa biashara za Kenya.',
            'pubDate' => '2024-11-28 14:30:00',
            'category' => 'Uuzaji wa Kidijitali',
            'keywords' => 'uuzaji wa barua pepe Kenya, faida ya SMS marketing, uuzaji wa WhatsApp Kenya'
        ]
    ],
    'NG' => [
        [
            'file' => 'why-timely-stocking-essential-business-festival-season-uganda.php',
            'title' => 'Why Timely Stocking is Essential for Nigerian Businesses During Festival Seasons',
            'description' => 'Learn how proper inventory management during Nigeria\'s festival seasons can boost your profits by 40%. Essential stocking strategies for Eid, Christmas, and cultural celebrations.',
            'pubDate' => '2024-12-15 10:00:00',
            'category' => 'Inventory Management',
            'keywords' => 'inventory management Nigeria, festival season stocking, business planning Nigeria'
        ],
        [
            'file' => 'best-email-sms-whatsapp-marketing-practices-roi-uganda.php',
            'title' => 'Best Email, SMS and WhatsApp Marketing Practices for Maximum ROI in Nigeria',
            'description' => 'Discover proven email, SMS, and WhatsApp marketing strategies that deliver exceptional ROI for Nigerian businesses.',
            'pubDate' => '2024-11-28 14:30:00',
            'category' => 'Digital Marketing',
            'keywords' => 'email marketing Nigeria, SMS marketing ROI Nigeria, WhatsApp marketing Nigeria'
        ]
    ]
];

// Use global posts if country-specific posts don't exist
$blog_posts = isset($country_posts[$requested_country]) ? $country_posts[$requested_country] : [
    [
        'file' => 'why-timely-stocking-essential-business-festival-season-uganda.php',
        'title' => 'Why Timely Stocking is Essential for Business During Festival Season',
        'description' => 'Learn how proper inventory management during festival seasons can boost your profits by 40%. Essential stocking strategies for celebrations.',
        'pubDate' => '2024-12-15 10:00:00',
        'category' => 'Inventory Management',
        'keywords' => 'inventory management, festival season stocking, business planning'
    ],
    [
        'file' => 'best-email-sms-whatsapp-marketing-practices-roi-uganda.php',
        'title' => 'Best Email, SMS and WhatsApp Marketing Practices for Maximum ROI',
        'description' => 'Discover proven email, SMS, and WhatsApp marketing strategies that deliver exceptional ROI for businesses.',
        'pubDate' => '2024-11-28 14:30:00',
        'category' => 'Digital Marketing',
        'keywords' => 'email marketing, SMS marketing ROI, WhatsApp marketing, multi-channel marketing'
    ],
    [
        'file' => 'how-to-build-an-effective-sms-campaign-in-uganda.php',
        'title' => 'How to Build an Effective SMS Campaign',
        'description' => 'Step-by-step guide to creating SMS campaigns that convert. Learn targeting, timing, and messaging strategies.',
        'pubDate' => '2024-11-20 09:15:00',
        'category' => 'SMS Marketing',
        'keywords' => 'SMS campaign, bulk SMS marketing, SMS strategy, mobile marketing'
    ],
    [
        'file' => 'sms-vs-whatsapp-marketing-what-works-best-in-uganda.php',
        'title' => 'SMS vs WhatsApp Marketing: What Works Best?',
        'description' => 'Compare SMS and WhatsApp marketing effectiveness. Data-driven insights to choose the right channel for your business.',
        'pubDate' => '2024-11-10 16:45:00',
        'category' => 'Mobile Marketing',
        'keywords' => 'SMS vs WhatsApp, mobile marketing comparison, messaging strategy'
    ],
    [
        'file' => 'the-role-of-ai-in-african-business-sector.php',
        'title' => 'The Role of AI in African Business Sector',
        'description' => 'Explore how artificial intelligence is transforming African businesses. Real-world AI applications for SMEs.',
        'pubDate' => '2024-10-25 11:20:00',
        'category' => 'Technology',
        'keywords' => 'AI in Africa, artificial intelligence business, AI for SMEs, business automation'
    ],
    [
        'file' => 'why-online-payment-aggregators-need-mobile-payment-processing-africa.php',
        'title' => 'Why Online Payment Aggregators Need Mobile Payment Processing in Africa',
        'description' => 'Understanding the critical role of mobile payments in Africa\'s digital economy.',
        'pubDate' => '2024-10-15 13:00:00',
        'category' => 'Fintech',
        'keywords' => 'mobile payments Africa, payment processing, fintech Africa, digital payments'
    ],
    [
        'file' => 'why-sms-marketing-is-not-dead-in-uganda.php',
        'title' => 'Why SMS Marketing is Not Dead',
        'description' => 'Debunking myths about SMS marketing effectiveness. Why SMS remains reliable for businesses.',
        'pubDate' => '2024-09-30 08:30:00',
        'category' => 'SMS Marketing',
        'keywords' => 'SMS marketing effectiveness, mobile marketing, SMS vs social media'
    ],
    [
        'file' => '5-effective-sms-templates-for-ugandan-retail-businesses.php',
        'title' => '5 Effective SMS Templates for Retail Businesses',
        'description' => 'Ready-to-use SMS templates that boost conversions for retail businesses.',
        'pubDate' => '2024-09-15 12:00:00',
        'category' => 'SMS Templates',
        'keywords' => 'SMS templates, retail SMS marketing, SMS examples, customer retention'
    ]
];

// Sort posts by publication date (newest first)
usort($blog_posts, function($a, $b) {
    return strtotime($b['pubDate']) - strtotime($a['pubDate']);
});

// Helper functions
function xmlEscape($string) {
    return htmlspecialchars($string, ENT_XML1 | ENT_COMPAT, 'UTF-8');
}

function formatRSSDate($dateString) {
    return date('D, d M Y H:i:s O', strtotime($dateString));
}

// Generate RSS XML
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<rss version="2.0" 
     xmlns:content="http://purl.org/rss/1.0/modules/content/"
     xmlns:dc="http://purl.org/dc/elements/1.1/"
     xmlns:atom="http://www.w3.org/2005/Atom"
     xmlns:sy="http://purl.org/rss/1.0/modules/syndication/">
    
    <channel>
        <title><?= xmlEscape($rss_config['title']) ?></title>
        <link><?= xmlEscape($rss_config['link']) ?></link>
        <description><?= xmlEscape($rss_config['description']) ?></description>
        <language><?= xmlEscape($rss_config['language']) ?></language>
        <copyright><?= xmlEscape($rss_config['copyright']) ?></copyright>
        <managingEditor><?= xmlEscape($rss_config['managingEditor']) ?></managingEditor>
        <webMaster><?= xmlEscape($rss_config['webMaster']) ?></webMaster>
        <category><?= xmlEscape($rss_config['category']) ?></category>
        <generator><?= xmlEscape($rss_config['generator']) ?></generator>
        <docs><?= xmlEscape($rss_config['docs']) ?></docs>
        <ttl><?= $rss_config['ttl'] ?></ttl>
        <lastBuildDate><?= formatRSSDate('now') ?></lastBuildDate>
        <pubDate><?= formatRSSDate($blog_posts[0]['pubDate']) ?></pubDate>
        
        <!-- Atom self-reference -->
        <atom:link href="https://appnomu.com/landing/rss-country.php?country=<?= $requested_country ?>" rel="self" type="application/rss+xml" />
        
        <!-- Channel image -->
        <image>
            <url><?= xmlEscape($rss_config['image']['url']) ?></url>
            <title><?= xmlEscape($rss_config['image']['title']) ?></title>
            <link><?= xmlEscape($rss_config['image']['link']) ?></link>
            <width><?= $rss_config['image']['width'] ?></width>
            <height><?= $rss_config['image']['height'] ?></height>
            <description><?= xmlEscape($rss_config['image']['description']) ?></description>
        </image>
        
        <!-- Country-specific information -->
        <sy:updatePeriod>hourly</sy:updatePeriod>
        <sy:updateFrequency>1</sy:updateFrequency>
        
        <?php foreach ($blog_posts as $post): ?>
        <item>
            <title><?= xmlEscape($post['title']) ?></title>
            <link><?= xmlEscape($rss_config['link'] . '&redirect=b/' . $post['file']) ?></link>
            <description><?= xmlEscape($post['description']) ?></description>
            <pubDate><?= formatRSSDate($post['pubDate']) ?></pubDate>
            <guid isPermaLink="true"><?= xmlEscape($rss_config['link'] . '&redirect=b/' . $post['file']) ?></guid>
            <category><?= xmlEscape($post['category']) ?></category>
            <dc:creator>AppNomu SalesQ Team</dc:creator>
            
            <!-- Enhanced content with country context -->
            <content:encoded><![CDATA[
                <p><?= htmlspecialchars($post['description']) ?></p>
                <p><strong>Target Market:</strong> <?= $requested_country === 'GLOBAL' ? 'Global' : $requested_country ?></p>
                <p><strong>Currency:</strong> <?= $config['currency'] ?></p>
                <p><strong>Contact:</strong> <?= $config['contact'] ?></p>
                <p><strong>Keywords:</strong> <?= htmlspecialchars($post['keywords']) ?></p>
                <p><a href="<?= htmlspecialchars('https://appnomu.com/landing/b/' . $post['file'] . '?country=' . $requested_country) ?>" target="_blank">Read the full article</a></p>
                <hr>
                <p><em>This article is brought to you by <a href="<?= htmlspecialchars($rss_config['link']) ?>" target="_blank">AppNomu SalesQ</a> - Your trusted business automation partner in <?= $requested_country === 'GLOBAL' ? 'Africa' : $requested_country ?>. Start your free trial today!</em></p>
            ]]></content:encoded>
            
            <!-- Source attribution -->
            <source url="<?= xmlEscape('https://appnomu.com/landing/rss-country.php?country=' . $requested_country) ?>">AppNomu SalesQ Blog <?= $requested_country ?></source>
        </item>
        <?php endforeach; ?>
        
    </channel>
</rss>
