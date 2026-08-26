<?php
require_once __DIR__ . '/includes/config.php';

function getPageMeta() {
  return renderPageMeta(
    'Terms & Conditions - Fuzurra Industries Pvt. Ltd.',
    'Terms and Conditions for browsing and utilizing services of Fuzurra Industries Pvt. Ltd.'
  );
}

include __DIR__ . '/includes/header.php';
?>

<section class="py-5 text-white" style="background: linear-gradient(135deg, #070D1E 0%, #0B132B 100%);">
  <div class="container-fluid px-lg-5 py-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item"><a href="index.php" class="text-light-50">Home</a></li>
        <li class="breadcrumb-item active text-warning" aria-current="page">Terms &amp; Conditions</li>
      </ol>
    </nav>
    <h1 class="display-5 fw-bold text-white mb-0">Terms &amp; Conditions</h1>
  </div>
</section>

<section class="py-5 bg-white">
  <div class="container-fluid px-lg-5 py-3 max-w-900">
    <h3 class="fw-bold mb-3">1. Acceptance of Terms</h3>
    <p class="text-muted mb-4">
      By accessing the website of <strong>Fuzurra Industries Pvt. Ltd.</strong>, you agree to comply with and be bound by these terms and conditions. If you disagree with any part, please do not use our website.
    </p>

    <h3 class="fw-bold mb-3">2. Product Specifications &amp; Quotations</h3>
    <p class="text-muted mb-4">
      Product specifications, images, and calculations provided on this website are for informational and estimation purposes. Official commercial proposals, warranties, and system design Single Line Diagrams (SLD) will be provided formally upon site inspection.
    </p>

    <h3 class="fw-bold mb-3">3. PM Surya Ghar Subsidies</h3>
    <p class="text-muted mb-4">
      Government subsidies under PM Surya Ghar Muft Bijli Yojana are governed directly by Ministry of New and Renewable Energy (MNRE) guidelines and DISCOM approval. Fuzurra Industries provides complete technical installation and documentation assistance.
    </p>

    <h3 class="fw-bold mb-3">4. Intellectual Property</h3>
    <p class="text-muted mb-0">
      All logos, text, graphics, and system visualizers on this site are the intellectual property of Fuzurra Industries Pvt. Ltd. Unauthorized reproduction is strictly prohibited.
    </p>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
