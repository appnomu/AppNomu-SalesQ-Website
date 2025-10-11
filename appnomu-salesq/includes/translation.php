<?php

class Translation {
    private static $instance = null;
    private $translations = [];
    private $currentLang = 'en';
    private $availableLangs = ['en', 'sw'];
    
    private function __construct() {
        $this->loadTranslations();
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    private function loadTranslations() {
        // Set language from session, cookie, or default to 'en'
        if (isset($_SESSION['user_language']) && in_array($_SESSION['user_language'], $this->availableLangs)) {
            $this->currentLang = $_SESSION['user_language'];
        } elseif (isset($_COOKIE['user_language']) && in_array($_COOKIE['user_language'], $this->availableLangs)) {
            $this->currentLang = $_COOKIE['user_language'];
            $_SESSION['user_language'] = $this->currentLang;
        }
        
        // Load the translation file
        $translationFile = __DIR__ . "/translations/{$this->currentLang}.php";
        if (file_exists($translationFile)) {
            $this->translations = include $translationFile;
        } else {
            // Fallback to English if translation file doesn't exist
            $this->translations = include __DIR__ . "/translations/en.php";
        }
    }
    
    public function setLanguage($lang) {
        if (in_array($lang, $this->availableLangs)) {
            $this->currentLang = $lang;
            $_SESSION['user_language'] = $lang;
            setcookie('user_language', $lang, time() + (86400 * 30), '/'); // 30 days
            $this->loadTranslations();
            return true;
        }
        return false;
    }
    
    public function get($key, $default = null) {
        $keys = explode('.', $key);
        $value = $this->translations;
        
        foreach ($keys as $k) {
            if (!isset($value[$k])) {
                return $default !== null ? $default : $key;
            }
            $value = $value[$k];
        }
        
        return $value;
    }
    
    public function getCurrentLanguage() {
        return $this->currentLang;
    }
    
    public function getAvailableLanguages() {
        return $this->availableLangs;
    }
}

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Handle language change
if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'sw'])) {
    $translation = Translation::getInstance();
    $translation->setLanguage($_GET['lang']);
    
    // Remove lang parameter from URL and redirect
    $url = strtok($_SERVER['REQUEST_URI'], '?');
    $params = [];
    parse_str(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY) ?? '', $params);
    unset($params['lang']);
    
    if (!empty($params)) {
        $url .= '?' . http_build_query($params);
    }
    
    if (headers_sent() === false) {
        header('Location: ' . $url, true, 302);
        exit();
    }
}

// Helper function for templates
function __($key, $default = null) {
    return Translation::getInstance()->get($key, $default);
}
