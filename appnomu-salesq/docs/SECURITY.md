# AppNomu SalesQ Demo Request Security Documentation

This document outlines the security measures implemented to protect the demo request form from bot attacks and spam submissions.

## Security Measures Implemented

### 1. Cloudflare Turnstile CAPTCHA
- Client-side implementation in `demo.php` with Turnstile widget
- Server-side validation in `process_demo_request.php` using Cloudflare's API
- Configuration keys stored in `includes/config.php`

### 2. CSRF Protection
- Token generation on form load
- Token storage in session
- Token validation on form submission

### 3. Honeypot Field
- Hidden field named "website" added to the form
- Bots that fill this field are identified and their submissions are silently discarded
- Legitimate users won't see or fill this field

### 4. Rate Limiting
- Limits submissions to 3 per IP address per hour
- Rate limit data stored in `logs/rate_limits.json`
- Expired entries are automatically cleaned up

### 5. Security Logging
- All security events are logged to `logs/security.log`
- Events include:
  - CSRF validation failures
  - Honeypot triggers
  - CAPTCHA validation failures
  - Rate limit exceeded events
- IP addresses are logged for all security events

## Configuration

### Cloudflare Turnstile
The Turnstile keys are configured in `includes/config.php`:
```php
$turnstile_site_key = getenv('TURNSTILE_SITE_KEY') ?: '1x00000000000000000000AA'; // Replace with actual site key
$turnstile_secret_key = getenv('TURNSTILE_SECRET_KEY') ?: '1x0000000000000000000000000000000AA'; // Replace with actual secret key
```

For production, it's recommended to set these keys as environment variables.

## Monitoring

Security logs are stored in the `logs` directory:
- `logs/security.log` - Contains all security-related events
- `logs/demo_requests.log` - Contains records of all demo request submissions
- `logs/rate_limits.json` - Contains rate limiting data

Regular monitoring of these logs is recommended to detect potential attacks or unusual activity.

## Future Enhancements

Consider implementing:
1. IP blocklist for repeat offenders
2. Additional bot detection mechanisms
3. Integration with a security monitoring service
4. Database storage for logs and rate limits (instead of files) for better scalability
