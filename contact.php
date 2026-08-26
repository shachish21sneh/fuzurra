<?php
require_once __DIR__ . '/includes/config.php';

function getPageMeta() {
  return renderPageMeta(
    'Contact Us - Fuzurra Industries Pvt. Ltd.',
    'Contact Fuzurra Industries Pvt. Ltd. for sales inquiries, solar rooftop consultation, dealership opportunities, customer support, and head office details.'
  );
}

include __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     PAGE BANNER
     ========================================================================== -->
<section class="py-5 text-white position-relative" style="background: linear-gradient(135deg, #070D1E 0%, #0B132B 50%, #064E3B 100%);">
  <div class="container-fluid px-lg-5 py-3 position-relative" style="z-index: 2;">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="index.php" class="text-light-50">Home</a></li>
            <li class="breadcrumb-item active text-warning" aria-current="page">Contact Us</li>
          </ol>
        </nav>
        <span class="badge bg-warning text-dark fw-bold px-3 py-1 mb-2">WE ARE HERE TO HELP</span>
        <h1 class="display-5 fw-bold text-white mb-2">Get in Touch with Fuzurra Industries</h1>
        <p class="lead text-light-50 mb-0">
          Have questions about our solar systems, batteries, inverters, or dealership terms? Reach out to our dedicated team today.
        </p>
      </div>
      <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
        <a href="<?php echo WA_LINK_DEFAULT; ?>" target="_blank" class="btn btn-header-wa py-3 px-4 fs-6">
          <i class="bi bi-whatsapp fs-5"></i> Direct WhatsApp Support
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     CONTACT CARDS & DIRECT FORM
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container-fluid px-lg-5 py-4">
    <div class="row g-5">
      
      <!-- Left Column: Contact Cards & Info -->
      <div class="col-lg-5">
        <span class="section-tag">Reach Us Directly</span>
        <h2 class="section-title">Corporate Headquarters &amp; Support</h2>
        <p class="text-muted mb-4">
          Connect with our customer support, sales advisors, or channel managers through any of the channels below.
        </p>

        <!-- Corporate Office Box -->
        <div class="p-4 bg-light rounded-4 border mb-3 shadow-sm">
          <div class="d-flex align-items-start gap-3">
            <div class="feature-icon-wrapper feature-icon-gold mb-0">
              <i class="bi bi-buildings-fill"></i>
            </div>
            <div>
              <h6 class="fw-bold text-dark mb-1">Corporate Office</h6>
              <p class="text-muted small mb-0 fw-semibold text-dark">
                <?php echo SITE_CORP_OFFICE; ?>
              </p>
            </div>
          </div>
        </div>

        <!-- Registered Office Box -->
        <div class="p-4 bg-light rounded-4 border mb-3 shadow-sm">
          <div class="d-flex align-items-start gap-3">
            <div class="feature-icon-wrapper feature-icon-green mb-0">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <div>
              <h6 class="fw-bold text-dark mb-1">Registered Office (Reg Off)</h6>
              <p class="text-muted small mb-0">
                <?php echo SITE_REG_OFFICE; ?>
              </p>
            </div>
          </div>
        </div>

        <!-- Phone & WhatsApp Box -->
        <div class="p-4 bg-light rounded-4 border mb-3 shadow-sm">
          <div class="d-flex align-items-start gap-3">
            <div class="feature-icon-wrapper feature-icon-green mb-0">
              <i class="bi bi-telephone-inbound-fill"></i>
            </div>
            <div>
              <h6 class="fw-bold text-dark mb-1">Mobile &amp; WhatsApp</h6>
              <p class="text-muted small mb-1">
                Call: <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="text-dark fw-bold"><?php echo SITE_PHONE; ?></a>
              </p>
              <p class="text-muted small mb-0">
                WhatsApp: <a href="<?php echo WA_LINK_DEFAULT; ?>" target="_blank" class="text-success fw-bold"><?php echo SITE_PHONE; ?></a>
              </p>
            </div>
          </div>
        </div>

        <!-- Email & Hours Box -->
        <div class="p-4 bg-light rounded-4 border mb-4 shadow-sm">
          <div class="d-flex align-items-start gap-3">
            <div class="feature-icon-wrapper feature-icon-blue mb-0">
              <i class="bi bi-envelope-open-fill"></i>
            </div>
            <div>
              <h6 class="fw-bold text-dark mb-1">Email &amp; Business Hours</h6>
              <p class="text-muted small mb-1">
                Email: <a href="mailto:<?php echo SITE_EMAIL; ?>" class="text-dark fw-bold"><?php echo SITE_EMAIL; ?></a>
              </p>
              <p class="text-muted small mb-0">
                <i class="bi bi-clock-fill me-1 text-warning"></i> Business Hours: <strong class="text-dark"><?php echo SITE_HOURS; ?></strong>
              </p>
            </div>
          </div>
        </div>

        <!-- Quick Dealer Portal Link -->
        <div class="p-3 bg-dark text-white rounded-3 border d-flex justify-content-between align-items-center">
          <div>
            <span class="text-warning small fw-bold d-block">Channel Partnership</span>
            <span class="small">Interested in Distributorship?</span>
          </div>
          <a href="dealer.php" class="btn btn-sm btn-outline-warning">
            Apply Online &rarr;
          </a>
        </div>
      </div>

      <!-- Right Column: Contact Form -->
      <div class="col-lg-7">
        <div class="p-4 p-lg-5 bg-light rounded-4 border shadow-sm">
          <h3 class="h3 fw-bold text-dark mb-2">Send an Official Message</h3>
          <p class="text-muted small mb-4">
            Fill in your contact info and requirement. A Fuzurra specialist will respond promptly.
          </p>

          <form class="fuzurra-ajax-form needs-validation" novalidate>
            <input type="hidden" name="form_type" value="contact_page">
            <input type="hidden" name="csrf_token" value="<?php echo getCsrfToken(); ?>">
            <input type="text" name="website_url_hp" style="display:none !important;" tabindex="-1" autocomplete="off">

            <div class="row g-3">
              <!-- Name -->
              <div class="col-md-6">
                <label class="form-label-custom">Full Name <span class="text-danger">*</span></label>
                <input type="text" name="full_name" class="form-control form-control-custom" placeholder="e.g. Ramesh Chandra" required>
                <div class="invalid-feedback">Please enter your name.</div>
              </div>

              <!-- Mobile Number -->
              <div class="col-md-6">
                <label class="form-label-custom">Mobile Number <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text bg-light border-end-0 fw-bold text-muted">+91</span>
                  <input type="tel" name="mobile" pattern="[0-9]{10}" class="form-control form-control-custom border-start-0" placeholder="10-digit mobile" required>
                </div>
                <div class="invalid-feedback">Please enter a valid 10-digit mobile number.</div>
              </div>

              <!-- Email -->
              <div class="col-md-6">
                <label class="form-label-custom">Email Address <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control form-control-custom" placeholder="ramesh@example.com" required>
                <div class="invalid-feedback">Please enter a valid email.</div>
              </div>

              <!-- City -->
              <div class="col-md-6">
                <label class="form-label-custom">City / Location <span class="text-danger">*</span></label>
                <input type="text" name="city" class="form-control form-control-custom" placeholder="e.g. New Delhi" required>
                <div class="invalid-feedback">Please provide your city.</div>
              </div>

              <!-- Product Interested In -->
              <div class="col-12">
                <label class="form-label-custom">Product Interested In <span class="text-danger">*</span></label>
                <select name="product_interested" class="form-select form-select-custom" required>
                  <option value="" selected disabled>Select Product or Service...</option>
                  <option value="Solar Panels (Mono PERC / Bifacial)">Solar Panels (Mono PERC / Bifacial)</option>
                  <option value="Solar Hybrid Inverters">Solar Hybrid Inverters</option>
                  <option value="On-Grid String Inverters">On-Grid String Inverters</option>
                  <option value="LiFePO4 Lithium Battery Storage">LiFePO4 Lithium Battery Storage (Wall-Mount)</option>
                  <option value="Tall Tubular Lead Acid Batteries">Tall Tubular Lead Acid Batteries</option>
                  <option value="Home UPS & Power Inverters">Home UPS &amp; Pure Sine Inverters</option>
                  <option value="PM Surya Ghar Rooftop Solar Scheme">PM Surya Ghar Rooftop Solar Scheme</option>
                  <option value="Solar Cables & Accessories (ACDB/DCDB/MC4)">Solar Cables &amp; Accessories (ACDB/DCDB/MC4)</option>
                  <option value="Smart Inverter ACs & 4K TVs">Smart Inverter ACs &amp; 4K TVs</option>
                  <option value="Dealership & Distribution">Dealership &amp; Distribution Inquiries</option>
                  <option value="After-Sales Service / AMC">After-Sales Service &amp; AMC</option>
                </select>
                <div class="invalid-feedback">Please select a product.</div>
              </div>

              <!-- Message -->
              <div class="col-12">
                <label class="form-label-custom">Your Message / Query <span class="text-danger">*</span></label>
                <textarea name="message" class="form-control form-control-custom" rows="4" placeholder="How can our technical or sales team assist you?" required></textarea>
                <div class="invalid-feedback">Please enter your message.</div>
              </div>

              <!-- Submit CTA -->
              <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-primary-glow px-5 py-3 w-100 w-sm-auto">
                  <i class="bi bi-send-fill me-2"></i> Send Enquiry
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     GOOGLE MAPS EMBED SECTION
     ========================================================================== -->
<section class="py-0 border-top bg-light">
  <div class="container-fluid p-0">
    <div class="ratio ratio-21x9" style="min-height: 350px;">
      <iframe src="<?php echo SITE_MAPS_EMBED; ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Fuzurra Industries Location Map"></iframe>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
