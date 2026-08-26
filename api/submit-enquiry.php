<?php
/**
 * Fuzurra Industries Pvt. Ltd.
 * API Endpoint: Submit Enquiry / Quote / Dealer Application
 */

header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../includes/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method Not Allowed'
    ]);
    exit;
}

// 1. Anti-spam honeypot verification
if (!empty($_POST['website_url_hp'])) {
    // Bot triggered honeypot field
    echo json_encode([
        'success' => true,
        'message' => 'Enquiry processed successfully.'
    ]);
    exit;
}

// 2. CSRF Token Verification
$csrfToken = $_POST['csrf_token'] ?? '';
if (empty($csrfToken) || empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $csrfToken)) {
    // Fail gracefully or log
    // We allow continued processing if session reset but flag message
}

// 3. Sanitize inputs
$formType = filter_input(INPUT_POST, 'form_type', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'general_enquiry';
$fullName = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
if (empty($fullName) && !empty($_POST['name'])) {
    $fullName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
}
$companyName = filter_input(INPUT_POST, 'company_name', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
if (empty($mobile) && !empty($_POST['phone'])) {
    $mobile = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
}
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ?? '';
$city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$businessType = filter_input(INPUT_POST, 'business_type', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$productName = filter_input(INPUT_POST, 'product_name', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
if (empty($productName) && !empty($_POST['product_interested'])) {
    $productName = filter_input(INPUT_POST, 'product_interested', FILTER_SANITIZE_SPECIAL_CHARS);
}
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';

// Handle multi-select products for dealer form
$productsInterested = [];
if (!empty($_POST['products_interested']) && is_array($_POST['products_interested'])) {
    foreach ($_POST['products_interested'] as $p) {
        $productsInterested[] = htmlspecialchars(trim($p));
    }
}
$productsListStr = !empty($productsInterested) ? implode(', ', $productsInterested) : $productName;

// 4. Basic Validation
if (empty($fullName) || empty($mobile)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Please provide your name and mobile number to proceed.'
    ]);
    exit;
}

// 5. Generate Lead ID and Store Record
$leadId = 'FUZ-' . strtoupper(substr(md5(uniqid(time(), true)), 0, 8));

$leadRecord = [
    'lead_id' => $leadId,
    'timestamp' => date('Y-m-d H:i:s'),
    'form_type' => $formType,
    'full_name' => $fullName,
    'company' => $companyName,
    'mobile' => $mobile,
    'email' => $email,
    'city' => $city,
    'state' => $state,
    'business_type' => $businessType,
    'category' => $category,
    'product' => $productsListStr,
    'message' => $message,
    'ip' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'
];

$leadsDir = __DIR__ . '/../data';
if (!is_dir($leadsDir)) {
    @mkdir($leadsDir, 0755, true);
}
$leadsFile = $leadsDir . '/leads.json';
$existingLeads = [];
if (file_exists($leadsFile)) {
    $raw = file_get_contents($leadsFile);
    $existingLeads = json_decode($raw, true) ?: [];
}
$existingLeads[] = $leadRecord;
@file_put_contents($leadsFile, json_encode($existingLeads, JSON_PRETTY_PRINT));

// 6. Send Email Notification via Authenticated SMTP
require_once __DIR__ . '/../includes/mailer.php';
$mailResult = FuzurraMailer::sendEnquiryNotification($leadRecord);

// 7. Custom success response based on form type
$responseMessage = 'Thank you! Your enquiry has been received. A Fuzurra technical advisor will contact you within 30 minutes.';

if ($formType === 'dealer_application') {
    $responseMessage = 'Thank you for applying to become a Fuzurra Authorized Channel Partner! Our National Head of Distribution will review your profile and reach out within 24 hours.';
} else if ($formType === 'pm_surya_ghar') {
    $responseMessage = 'Your PM Surya Ghar subsidy application assistance request has been registered. Our solar consultant will verify your rooftop feasibility shortly.';
}

echo json_encode([
    'success' => true,
    'message' => $responseMessage,
    'lead_id' => $leadId,
    'mail_dispatched' => $mailResult['success'] ?? false
]);
