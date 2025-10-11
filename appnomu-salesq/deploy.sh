#!/bin/bash

# Deployment Script for AppNomu SalesQ Website
# This script will prepare and organize files for deployment to /landing subdirectory

# Configuration
SITE_ROOT="/var/www/html"  # Change this to your server's web root
LANDING_DIR="$SITE_ROOT/landing"
BACKUP_DIR="/var/backups/appnomu-landing-$(date +%Y%m%d%H%M%S)"

# Colors for output
GREEN='\033[0;32m'
RED='\033[0;31m'
NC='\033[0m' # No Color

# Check if running as root
if [ "$(id -u)" -ne 0 ]; then
    echo -e "${RED}Error: This script must be run as root${NC}"
    exit 1
fi

# Create backup of existing deployment
if [ -d "$LANDING_DIR" ]; then
    echo -e "${GREEN}Creating backup of existing deployment...${NC}"
    mkdir -p "$BACKUP_DIR"
    cp -r "$LANDING_DIR"/* "$BACKUP_DIR/"
    echo "Backup created at $BACKUP_DIR"
fi

# Create landing directory structure
echo -e "${GREEN}Creating directory structure...${NC}"
mkdir -p "$LANDING_DIR/assets/{css,js,images,fonts}"
mkdir -p "$LANDING_DIR/includes"
mkdir -p "$LANDING_DIR/features"

# Copy all files to the landing directory
echo -e "${GREEN}Copying files...${NC}"
cp -r ./* "$LANDING_DIR/" 2>/dev/null || :

# Fix file permissions
echo -e "${GREEN}Setting file permissions...${NC}"
chown -R www-data:www-data "$LANDING_DIR"
find "$LANDING_DIR" -type d -exec chmod 755 {} \;
find "$LANDING_DIR" -type f -exec chmod 644 {} \;
chmod 755 "$LANDING_DIR/deploy.sh"

# Update configuration for production
echo -e "${GREEN}Updating configuration for production...${NC}"
sed -i "s|^\$base_url = .*|\$base_url = '/landing';|" "$LANDING_DIR/includes/config.php"

# Update .htaccess for production
cat > "$LANDING_DIR/.htaccess" << 'EOL'
<IfModule mod_rewrite.c>
    RewriteEngine On
    
    # Set the base path
    RewriteBase /landing/
    
    # Allow direct access to files and directories
    RewriteCond %{REQUEST_FILENAME} -f [OR]
    RewriteCond %{REQUEST_FILENAME} -d
    RewriteRule ^ - [L]
    
    # Remove .php extension
    RewriteCond %{REQUEST_FILENAME}.php -f
    RewriteRule ^([^\.]+)$ $1.php [NC,L]
    
    # Handle 404 errors - Redirect to home page
    ErrorDocument 404 /landing/
    
    # Redirect all non-existent pages to home
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule .* /landing/ [L]
    
    # Force HTTPS
    RewriteCond %{HTTPS} off
    RewriteCond %{HTTP_HOST} ^(www\.)?appnomu\.com$ [NC]
    RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
</IfModule>

# Enable PHP processing for files without .php extension
<FilesMatch "^[^.]+">
    SetHandler application/x-httpd-php
</FilesMatch>

# Security Headers
<IfModule mod_headers.c>
    Header always set X-Content-Type-Options "nosniff"
    Header always set X-Frame-Options "SAMEORIGIN"
    Header always set X-XSS-Protection "1; mode=block"
    Header always set Referrer-Policy "strict-origin-when-cross-origin"
    
    # CORS for fonts
    <FilesMatch "\.(ttf|ttc|otf|eot|woff|woff2|font.css|css)$">
        Header set Access-Control-Allow-Origin "*"
    </FilesMatch>
</IfModule>
EOL

# Restart web server if needed
if [ -f /etc/init.d/apache2 ]; then
    echo -e "${GREEN}Restarting Apache...${NC}
    systemctl restart apache2
elif [ -f /etc/init.d/nginx ]; then
    echo -e "${GREEN}Restarting Nginx...${NC}
    systemctl restart nginx
fi

echo -e "${GREEN}Deployment completed successfully!${NC}
echo "Website should now be accessible at: https://appnomu.com/landing/"
echo "If you encounter any issues, check the Apache/Nginx error logs."
