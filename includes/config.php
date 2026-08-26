<?php
/**
 * Fuzurra Industries Pvt. Ltd.
 * Global Configuration & Helper Functions
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Company Details
define('SITE_NAME', 'Fuzurra Industries Pvt. Ltd.');
define('SITE_SHORT_NAME', 'Fuzurra');
define('SITE_TAGLINE', 'Feel The Excellence');
define('SITE_PHONE', '+91 99585 92900');
define('SITE_PHONE_RAW', '9958592900');
define('SITE_WHATSAPP', '919958592900');
define('SITE_EMAIL', 'info@fuzurra.in');
define('SITE_SALES_EMAIL', 'info@fuzurra.in');

// Corporate & Registered Office Addresses
define('SITE_CORP_OFFICE', 'LGF17 NO.AARZA SQUARE 1, GAUR CITY-1, Sector-4, Greater Noida West, U.P 201318');
define('SITE_REG_OFFICE', 'G-12/163, 1st Floor, Ratiya Marg, Sangam Vihar, Delhi, India, 110080');
define('SITE_ADDRESS', SITE_CORP_OFFICE);
define('SITE_HOURS', 'Mon - Sat: 10:00 AM - 07:00 PM (Sun: Closed)');
define('SITE_MAPS_EMBED', 'https://maps.google.com/maps?q=Aarza+Square+1+Gaur+City+1+Greater+Noida+West+201318&t=&z=15&ie=UTF8&iwloc=&output=embed');

// Default WhatsApp Pre-filled text
define('WA_DEFAULT_MSG', 'Hello Fuzurra Industries, I am interested in your solar solutions and products. Please share more details.');
define('WA_LINK_DEFAULT', 'https://wa.me/' . SITE_WHATSAPP . '?text=' . urlencode(WA_DEFAULT_MSG));

// Load local secret config if exists
if (file_exists(__DIR__ . '/config.local.php')) {
    require_once __DIR__ . '/config.local.php';
}

// Load environment configuration from .env if present
if (!function_exists('load_env_file')) {
    function load_env_file($filePath) {
        if (!file_exists($filePath)) {
            return;
        }
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $line = trim($line);
            if (empty($line) || strpos($line, '#') === 0) {
                continue;
            }
            if (strpos($line, '=') !== false) {
                list($key, $value) = explode('=', $line, 2);
                $key = trim($key);
                $value = trim($value);
                if ((strpos($value, '"') === 0 && strrpos($value, '"') === strlen($value) - 1) ||
                    (strpos($value, "'") === 0 && strrpos($value, "'") === strlen($value) - 1)) {
                    $value = substr($value, 1, -1);
                }
                if (!array_key_exists($key, $_SERVER) && !array_key_exists($key, $_ENV)) {
                    putenv("{$key}={$value}");
                    $_ENV[$key] = $value;
                    $_SERVER[$key] = $value;
                }
            }
        }
    }
}

if (!function_exists('env')) {
    function env($key, $default = null) {
        $val = getenv($key);
        if ($val !== false) return $val;
        if (isset($_ENV[$key])) return $_ENV[$key];
        if (isset($_SERVER[$key])) return $_SERVER[$key];
        return $default;
    }
}

load_env_file(dirname(__DIR__) . '/.env');

// SMTP Outgoing Mail Configuration (Loaded securely from .env or config.local.php)
define('SMTP_HOST', env('SMTP_HOST', 'mail.fuzurra.in'));
define('SMTP_PORT', (int)env('SMTP_PORT', 465));
define('SMTP_SECURE', env('SMTP_SECURE', 'ssl'));
define('SMTP_USER', env('SMTP_USER', 'info@fuzurra.in'));
define('SMTP_PASS', env('SMTP_PASS', defined('LOCAL_SMTP_PASS') ? LOCAL_SMTP_PASS : ''));
define('SMTP_FROM_EMAIL', env('SMTP_FROM_EMAIL', 'info@fuzurra.in'));
define('SMTP_FROM_NAME', env('SMTP_FROM_NAME', 'Fuzurra Industries Pvt. Ltd.'));
define('NOTIFICATION_RECIPIENT_EMAIL', env('NOTIFICATION_RECIPIENT_EMAIL', 'krishnagzp@gmail.com'));

// Helper: Active Menu Item
function isActivePage($pageName) {
    $current = basename($_SERVER['PHP_SELF'], '.php');
    if ($current === $pageName || ($current === 'index' && $pageName === 'home')) {
        return 'active';
    }
    return '';
}

// Helper: Active Dropdown Parent Item
function isDropdownActive($pages = []) {
    $current = basename($_SERVER['PHP_SELF'], '.php');
    if (in_array($current, $pages)) {
        return 'active';
    }
    return '';
}

// Helper: Generate CSRF Token
function getCsrfToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// Helper: Generate Page Title & SEO Meta
function renderPageMeta($title = '', $description = '', $keywords = '') {
    $defaultTitle = 'Fuzurra Industries Pvt. Ltd. | Solar Energy, Inverters, Lithium Batteries & Appliances';
    $defaultDesc = 'Fuzurra Industries Pvt. Ltd. is a premier provider of complete Solar Energy Solutions, Hybrid Inverters, Home UPS, Tall Tubular & Lithium Batteries, and Smart Home Appliances across India.';
    $defaultKeywords = 'Fuzurra Industries, Solar Solutions, Solar Panel, Solar Inverter, Hybrid Inverter, Home UPS, Lithium Battery, Lead Acid Battery, Solar Installation, Rooftop Solar, Solar System, Solar Dealer, Solar Products, PM Surya Ghar, Solar Accessories';

    $pageTitle = $title ? "$title | " . SITE_NAME : $defaultTitle;
    $pageDesc = $description ? $description : $defaultDesc;
    $pageKeywords = $keywords ? $keywords : $defaultKeywords;

    return <<<HTML
    <title>{$pageTitle}</title>
    <meta name="description" content="{$pageDesc}">
    <meta name="keywords" content="{$pageKeywords}">
    <meta name="author" content="Fuzurra Industries Pvt. Ltd.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{$pageTitle}">
    <meta property="og:description" content="{$pageDesc}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Fuzurra Industries">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{$pageTitle}">
    <meta name="twitter:description" content="{$pageDesc}">
HTML;
}

// Helper: Custom WhatsApp Link Generator for specific product
function getProductWaLink($productName) {
    $msg = "Hello Fuzurra Industries, I am interested in {$productName}. Please share technical specifications, pricing, and warranty details.";
    return 'https://wa.me/' . SITE_WHATSAPP . '?text=' . urlencode($msg);
}
