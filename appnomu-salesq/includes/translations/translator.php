<?php
class Translator {
    private static $instance = null;
    private $translations = [];
    private $currentLang = 'en';
    
    private function __construct() {
        // Private constructor to prevent direct instantiation
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function setLanguage($lang) {
        $this->currentLang = in_array($lang, ['en', 'sw']) ? $lang : 'en';
        $this->loadTranslations();
    }
    
    private function loadTranslations() {
        $translationFile = __DIR__ . "/{$this->currentLang}.php";
        if (file_exists($translationFile)) {
            $this->translations = include $translationFile;
        } else {
            // Fallback to English if translation file doesn't exist
            $this->translations = include __DIR__ . "/en.php";
        }
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
}

// Initialize translator with user's language
function initTranslator() {
    $translator = Translator::getInstance();
    
    // Start session if not already started
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    // Check for language in session
    if (isset($_SESSION['user_language'])) {
        $translator->setLanguage($_SESSION['user_language']);
        return $translator;
    }
    
    // Check for language in cookie
    if (isset($_COOKIE['user_language'])) {
        $translator->setLanguage($_COOKIE['user_language']);
        $_SESSION['user_language'] = $_COOKIE['user_language'];
        return $translator;
    }
    
    // Default to English
    $translator->setLanguage('en');
    return $translator;
}

// Set language from URL parameter
if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'sw'])) {
    $lang = $_GET['lang'];
    setcookie('user_language', $lang, time() + (86400 * 30), '/'); // 30 days
    $_SESSION['user_language'] = $lang;
    
    // Remove lang parameter from URL
    $url = strtok($_SERVER['REQUEST_URI'], '?');
    $params = [];
    parse_str(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY) ?? '', $params);
    unset($params['lang']);
    if (!empty($params)) {
        $url .= '?' . http_build_query($params);
    }
    
    // Redirect to clean URL
    if (headers_sent() === false) {
        header('Location: ' . $url, true, 302);
        exit();
    }
}

// Initialize translator
initTranslator();
