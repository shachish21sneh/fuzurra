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
define('SITE_TAGLINE', 'Powering a Brighter & Smarter Future');
define('SITE_PHONE', '+91 98765 43210');
define('SITE_PHONE_RAW', '9876543210');
define('SITE_WHATSAPP', '919876543210');
define('SITE_EMAIL', 'info@fuzurra.com');
define('SITE_SALES_EMAIL', 'sales@fuzurra.com');
define('SITE_ADDRESS', 'Plot No. 42, Industrial Innovation Zone, Phase-II, New Delhi - 110020, India');
define('SITE_HOURS', 'Mon - Sat: 9:00 AM - 7:00 PM IST');
define('SITE_MAPS_EMBED', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224345.83923192776!2d77.0688975472578!3d28.52758200617607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin');

// Default WhatsApp Pre-filled text
define('WA_DEFAULT_MSG', 'Hello Fuzurra Industries, I am interested in your products/solar solutions. Please share more details.');
define('WA_LINK_DEFAULT', 'https://wa.me/' . SITE_WHATSAPP . '?text=' . urlencode(WA_DEFAULT_MSG));

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
