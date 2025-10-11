<?php
/**
 * Sitemap Generator for AppNomu SalesQ Website
 * 
 * This script generates a sitemap.xml file for the AppNomu SalesQ website.
 * It can be run manually or scheduled with a cron job to keep the sitemap updated.
 */

// Configuration
$base_url = 'https://appnomu.com';
$output_file = __DIR__ . '/sitemap.xml';
$current_date = date('Y-m-d');

// Define pages and their properties
$pages = [
    // Main Pages
    [
        'url' => '/',
        'changefreq' => 'weekly',
        'priority' => '1.0',
    ],
    [
        'url' => '/about',
        'changefreq' => 'monthly',
        'priority' => '0.8',
    ],
    [
        'url' => '/pricing',
        'changefreq' => 'monthly',
        'priority' => '0.9',
    ],
    [
        'url' => '/contact',
        'changefreq' => 'monthly',
        'priority' => '0.7',
    ],
    [
        'url' => '/demo',
        'changefreq' => 'monthly',
        'priority' => '0.8',
    ],
    [
        'url' => '/partners',
        'changefreq' => 'monthly',
        'priority' => '0.7',
    ],
    [
        'url' => '/why-salesq',
        'changefreq' => 'monthly',
        'priority' => '0.8',
    ],
    [
        'url' => '/careers',
        'changefreq' => 'monthly',
        'priority' => '0.6',
    ],
    [
        'url' => '/discount-application',
        'changefreq' => 'monthly',
        'priority' => '0.7',
    ],
    
    // Feature Pages
    [
        'url' => '/features/sms',
        'changefreq' => 'monthly',
        'priority' => '0.8',
    ],
    [
        'url' => '/features/airtime',
        'changefreq' => 'monthly',
        'priority' => '0.8',
    ],
    [
        'url' => '/features/crm',
        'changefreq' => 'monthly',
        'priority' => '0.8',
    ],
    [
        'url' => '/features/product-sales-management',
        'changefreq' => 'monthly',
        'priority' => '0.8',
    ],
    [
        'url' => '/features/salesq-ai',
        'changefreq' => 'monthly',
        'priority' => '0.8',
    ],
    [
        'url' => '/features/low-stock-alert',
        'changefreq' => 'monthly',
        'priority' => '0.8',
    ],
    
    // Legal Pages
    [
        'url' => '/privacy-policy',
        'changefreq' => 'yearly',
        'priority' => '0.5',
    ],
    [
        'url' => '/terms-of-use',
        'changefreq' => 'yearly',
        'priority' => '0.5',
    ],
    [
        'url' => '/refund-policy',
        'changefreq' => 'yearly',
        'priority' => '0.5',
    ],
];

// Optional: Scan the directory to find additional PHP files that might need to be included
function scanDirectoryForPhpFiles($dir, $baseDir = null) {
    if ($baseDir === null) {
        $baseDir = $dir;
    }
    
    $result = [];
    $files = scandir($dir);
    
    foreach ($files as $file) {
        if ($file === '.' || $file === '..' || $file === 'generate_sitemap.php') {
            continue;
        }
        
        $path = $dir . '/' . $file;
        
        if (is_dir($path)) {
            // Skip includes directory and process directories
            if ($file !== 'includes' && $file !== 'assets') {
                $result = array_merge($result, scanDirectoryForPhpFiles($path, $baseDir));
            }
        } elseif (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            // Skip processing files
            if (strpos($file, 'process_') !== 0 && $file !== 'config.php' && $file !== 'router.php') {
                $relativePath = str_replace($baseDir . '/', '', $path);
                $urlPath = str_replace('.php', '', $relativePath);
                
                // Skip 404 and other special pages
                if ($file !== '404.php' && $file !== 'sections.php') {
                    $result[] = $urlPath;
                }
            }
        }
    }
    
    return $result;
}

// Generate XML content
function generateSitemapXML($pages, $base_url, $current_date) {
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    
    foreach ($pages as $page) {
        $xml .= "    <url>\n";
        $xml .= "        <loc>" . $base_url . $page['url'] . "</loc>\n";
        $xml .= "        <lastmod>" . $current_date . "</lastmod>\n";
        $xml .= "        <changefreq>" . $page['changefreq'] . "</changefreq>\n";
        $xml .= "        <priority>" . $page['priority'] . "</priority>\n";
        $xml .= "    </url>\n";
    }
    
    $xml .= '</urlset>';
    return $xml;
}

// Write XML to file
function writeSitemapToFile($xml, $output_file) {
    if (file_put_contents($output_file, $xml)) {
        return true;
    }
    return false;
}

// Execute sitemap generation
try {
    // Optional: Add discovered PHP files to the pages array
    /*
    $discovered_files = scanDirectoryForPhpFiles(__DIR__);
    foreach ($discovered_files as $file) {
        $exists = false;
        foreach ($pages as $page) {
            if ($page['url'] === '/' . $file) {
                $exists = true;
                break;
            }
        }
        
        if (!$exists) {
            $pages[] = [
                'url' => '/' . $file,
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ];
        }
    }
    */
    
    $xml = generateSitemapXML($pages, $base_url, $current_date);
    
    if (writeSitemapToFile($xml, $output_file)) {
        echo "Sitemap generated successfully at: " . $output_file . "\n";
    } else {
        echo "Error: Unable to write sitemap to file.\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
