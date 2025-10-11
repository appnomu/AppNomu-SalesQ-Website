<?php
/**
 * RSS Feed Generator for AppNomu SalesQ Blog
 * Generates RSS 2.0 compliant feed with country-specific content
 */

// Load configuration
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/country_content.php';

// Set content type to XML
header('Content-Type: application/rss+xml; charset=UTF-8');

// Get user's country for localized content
$country = get_user_country();

// RSS Feed Configuration
$rss_config = [
    'title' => 'AppNomu SalesQ Blog - Business Growth Tips for Africa',
    'description' => 'Latest insights on SMS marketing, CRM, and business automation for African entrepreneurs. Expert tips to grow your business with AppNomu SalesQ.',
    'link' => 'https://appnomu.com/landing/',
    'language' => $country === 'KE' || $country === 'TZ' ? 'sw' : 'en',
    'copyright' => 'Copyright ' . date('Y') . ' AppNomu SalesQ. All rights reserved.',
    'managingEditor' => 'support@appnomu.com (AppNomu SalesQ Team)',
    'webMaster' => 'support@appnomu.com (AppNomu SalesQ Team)',
    'category' => 'Business/Technology',
    'generator' => 'AppNomu SalesQ RSS Generator v1.0',
    'docs' => 'https://www.rssboard.org/rss-specification',
    'ttl' => 60, // Cache for 60 minutes
    'image' => [
        'url' => 'https://appnomu.com/landing/assets/images/AppNomu_SalesQ_Logo_White.svg',
        'title' => 'AppNomu SalesQ',
        'link' => 'https://appnomu.com/landing/',
        'width' => 144,
        'height' => 144,
        'description' => 'AppNomu SalesQ - Business Growth Platform for Africa'
    ]
];

// Blog posts configuration with metadata
$blog_posts = [
    [
        'file' => 'why-timely-stocking-essential-business-festival-season-uganda.php',
        'title' => 'Why Timely Stocking is Essential for Business During Festival Season in Uganda',
        'description' => 'Learn how proper inventory management during Uganda\'s festival seasons can boost your profits by 40%. Essential stocking strategies for Eid, Christmas, and cultural celebrations.',
        'pubDate' => '2024-12-15 10:00:00',
        'category' => 'Inventory Management',
        'keywords' => 'inventory management Uganda, festival season stocking, business planning Uganda, seasonal inventory, AppNomu SalesQ inventory',
        'author' => 'AppNomu SalesQ Team'
    ],
    [
        'file' => 'best-email-sms-whatsapp-marketing-practices-roi-uganda.php',
        'title' => 'Best Email, SMS and WhatsApp Marketing Practices for Maximum ROI in Uganda',
        'description' => 'Discover proven email, SMS, and WhatsApp marketing strategies that deliver exceptional ROI for Ugandan businesses. Multi-channel marketing made simple.',
        'pubDate' => '2024-11-28 14:30:00',
        'category' => 'Digital Marketing',
        'keywords' => 'email marketing Uganda, SMS marketing ROI, WhatsApp marketing, multi-channel marketing Uganda',
        'author' => 'AppNomu SalesQ Team'
    ],
    [
        'file' => 'how-to-build-an-effective-sms-campaign-in-uganda.php',
        'title' => 'How to Build an Effective SMS Campaign in Uganda',
        'description' => 'Step-by-step guide to creating SMS campaigns that convert. Learn targeting, timing, and messaging strategies for the Ugandan market.',
        'pubDate' => '2024-11-20 09:15:00',
        'category' => 'SMS Marketing',
        'keywords' => 'SMS campaign Uganda, bulk SMS marketing, SMS strategy Uganda, mobile marketing Africa',
        'author' => 'AppNomu SalesQ Team'
    ],
    [
        'file' => 'sms-vs-whatsapp-marketing-what-works-best-in-uganda.php',
        'title' => 'SMS vs WhatsApp Marketing: What Works Best in Uganda?',
        'description' => 'Compare SMS and WhatsApp marketing effectiveness in Uganda. Data-driven insights to choose the right channel for your business.',
        'pubDate' => '2024-11-10 16:45:00',
        'category' => 'Mobile Marketing',
        'keywords' => 'SMS vs WhatsApp Uganda, mobile marketing comparison, messaging strategy Uganda',
        'author' => 'AppNomu SalesQ Team'
    ],
    [
        'file' => 'the-role-of-ai-in-african-business-sector.php',
        'title' => 'The Role of AI in African Business Sector',
        'description' => 'Explore how artificial intelligence is transforming African businesses. Real-world AI applications for SMEs and enterprise solutions.',
        'pubDate' => '2024-10-25 11:20:00',
        'category' => 'Technology',
        'keywords' => 'AI in Africa, artificial intelligence business, AI for African SMEs, business automation Africa',
        'author' => 'AppNomu SalesQ Team'
    ],
    [
        'file' => 'why-online-payment-aggregators-need-mobile-payment-processing-africa.php',
        'title' => 'Why Online Payment Aggregators Need Mobile Payment Processing in Africa',
        'description' => 'Understanding the critical role of mobile payments in Africa\'s digital economy. Payment processing solutions for modern African businesses.',
        'pubDate' => '2024-10-15 13:00:00',
        'category' => 'Fintech',
        'keywords' => 'mobile payments Africa, payment processing, fintech Africa, digital payments Uganda',
        'author' => 'AppNomu SalesQ Team'
    ],
    [
        'file' => 'why-sms-marketing-is-not-dead-in-uganda.php',
        'title' => 'Why SMS Marketing is Not Dead in Uganda',
        'description' => 'Debunking myths about SMS marketing effectiveness in Uganda. Why SMS remains the most reliable marketing channel for African businesses.',
        'pubDate' => '2024-09-30 08:30:00',
        'category' => 'SMS Marketing',
        'keywords' => 'SMS marketing Uganda, mobile marketing effectiveness, SMS vs social media Uganda',
        'author' => 'AppNomu SalesQ Team'
    ],
    [
        'file' => '5-effective-sms-templates-for-ugandan-retail-businesses.php',
        'title' => '5 Effective SMS Templates for Ugandan Retail Businesses',
        'description' => 'Ready-to-use SMS templates that boost conversions for Ugandan retail businesses. Proven templates for sales, promotions, and customer retention.',
        'pubDate' => '2024-09-15 12:00:00',
        'category' => 'SMS Templates',
        'keywords' => 'SMS templates Uganda, retail SMS marketing, SMS examples Uganda, customer retention SMS',
        'author' => 'AppNomu SalesQ Team'
    ]
];

// Sort posts by publication date (newest first)
usort($blog_posts, function($a, $b) {
    return strtotime($b['pubDate']) - strtotime($a['pubDate']);
});

// Helper function to escape XML content
function xmlEscape($string) {
    return htmlspecialchars($string, ENT_XML1 | ENT_COMPAT, 'UTF-8');
}

// Helper function to format RFC 2822 date
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
        <atom:link href="https://appnomu.com/landing/rss.php" rel="self" type="application/rss+xml" />
        
        <!-- Channel image -->
        <image>
            <url><?= xmlEscape($rss_config['image']['url']) ?></url>
            <title><?= xmlEscape($rss_config['image']['title']) ?></title>
            <link><?= xmlEscape($rss_config['image']['link']) ?></link>
            <width><?= $rss_config['image']['width'] ?></width>
            <height><?= $rss_config['image']['height'] ?></height>
            <description><?= xmlEscape($rss_config['image']['description']) ?></description>
        </image>
        
        <!-- Syndication information -->
        <sy:updatePeriod>hourly</sy:updatePeriod>
        <sy:updateFrequency>1</sy:updateFrequency>
        
        <?php foreach ($blog_posts as $post): ?>
        <item>
            <title><?= xmlEscape($post['title']) ?></title>
            <link><?= xmlEscape($rss_config['link'] . 'b/' . $post['file']) ?></link>
            <description><?= xmlEscape($post['description']) ?></description>
            <pubDate><?= formatRSSDate($post['pubDate']) ?></pubDate>
            <guid isPermaLink="true"><?= xmlEscape($rss_config['link'] . 'b/' . $post['file']) ?></guid>
            <category><?= xmlEscape($post['category']) ?></category>
            <dc:creator><?= xmlEscape($post['author']) ?></dc:creator>
            
            <!-- Enhanced content with keywords -->
            <content:encoded><![CDATA[
                <p><?= htmlspecialchars($post['description']) ?></p>
                <p><strong>Keywords:</strong> <?= htmlspecialchars($post['keywords']) ?></p>
                <p><a href="<?= htmlspecialchars($rss_config['link'] . 'b/' . $post['file']) ?>" target="_blank">Read the full article on AppNomu SalesQ Blog</a></p>
                <hr>
                <p><em>This article is brought to you by <a href="<?= htmlspecialchars($rss_config['link']) ?>" target="_blank">AppNomu SalesQ</a> - Africa's leading business automation platform. Start your free trial today!</em></p>
            ]]></content:encoded>
            
            <!-- Source attribution -->
            <source url="<?= xmlEscape($rss_config['link'] . 'rss.php') ?>">AppNomu SalesQ Blog</source>
        </item>
        <?php endforeach; ?>
        
    </channel>
</rss>
