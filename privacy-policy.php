<?php
require_once __DIR__ . '/includes/config.php';

function getPageMeta() {
  return renderPageMeta(
    'Privacy Policy - Fuzurra Industries Pvt. Ltd.',
    'Privacy Policy and data protection guidelines of Fuzurra Industries Pvt. Ltd.'
  );
}

include __DIR__ . '/includes/header.php';
?>

<section class="py-5 text-white" style="background: linear-gradient(135deg, #070D1E 0%, #0B132B 100%);">
  <div class="container-fluid px-lg-5 py-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item"><a href="index.php" class="text-light-50">Home</a></li>
        <li class="breadcrumb-item active text-warning" aria-current="page">Privacy Policy</li>
      </ol>
    </nav>
    <h1 class="display-5 fw-bold text-white mb-0">Privacy Policy</h1>
  </div>
</section>

<section class="py-5 bg-white">
  <div class="container-fluid px-lg-5 py-3 max-w-900">
    <h3 class="fw-bold mb-3">1. Information We Collect</h3>
    <p class="text-muted mb-4">
      At <strong>Fuzurra Industries Pvt. Ltd.</strong>, we respect your privacy. When you request a quotation, apply for a dealership, or inquire about solar feasibility on our website, we may collect your name, phone number, email address, city, state, electricity bill details, and message.
    </p>

    <h3 class="fw-bold mb-3">2. How We Use Your Information</h3>
    <p class="text-muted mb-4">
      We use your information exclusively to provide requested product quotations, schedule solar rooftop feasibility visits, process dealer / distributor applications, and deliver after-sales technical support. We never sell, rent, or trade your personal data to third parties.
    </p>

    <h3 class="fw-bold mb-3">3. Data Security &amp; Spam Protection</h3>
    <p class="text-muted mb-4">
      Our forms utilize anti-CSRF token verification, input sanitization, and automated honeypot spam protection. All communications between your browser and our server are secured with industry-standard HTTPS/SSL encryption.
    </p>

    <h3 class="fw-bold mb-3">4. Contacting Us</h3>
    <p class="text-muted mb-0">
      If you have questions regarding this Privacy Policy, you may contact us at <a href="mailto:<?php echo SITE_EMAIL; ?>" class="text-success fw-bold"><?php echo SITE_EMAIL; ?></a> or visit our office at <?php echo SITE_ADDRESS; ?>.
    </p>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
