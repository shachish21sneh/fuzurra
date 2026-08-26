<?php
require_once __DIR__ . '/config.php';
?>
<!-- Universal Quote / Product Enquiry Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content modal-content-custom">
      <div class="modal-header modal-header-custom d-flex align-items-center justify-content-between">
        <div>
          <span class="badge bg-warning text-dark fw-bold mb-1">FREE CONSULTATION & QUOTE</span>
          <h4 class="modal-title font-heading text-white mb-0" id="quoteModalLabel">
            Request an Official Quotation
          </h4>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-4 p-lg-5">
        <p class="text-muted small mb-4">
          Fill out the details below to receive a personalized proposal with technical sizing, official pricing, and subsidy benefits from Fuzurra Industries.
        </p>

        <form class="fuzurra-ajax-form needs-validation" novalidate>
          <input type="hidden" name="form_type" value="quote_request">
          <input type="hidden" name="csrf_token" value="<?php echo getCsrfToken(); ?>">
          <!-- Honeypot anti-spam field -->
          <input type="text" name="website_url_hp" style="display:none !important;" tabindex="-1" autocomplete="off">

          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label-custom">Full Name <span class="text-danger">*</span></label>
              <input type="text" name="full_name" class="form-control form-control-custom" placeholder="e.g. Rahul Sharma" required>
              <div class="invalid-feedback">Please enter your name.</div>
            </div>

            <div class="col-md-6">
              <label class="form-label-custom">Mobile Number <span class="text-danger">*</span></label>
              <div class="input-group">
                <span class="input-group-text bg-light border-end-0 fw-bold text-muted">+91</span>
                <input type="tel" name="mobile" pattern="[0-9]{10}" class="form-control form-control-custom border-start-0" placeholder="10-digit mobile number" required>
              </div>
              <div class="invalid-feedback">Please enter a valid 10-digit mobile number.</div>
            </div>

            <div class="col-md-6">
              <label class="form-label-custom">Email Address <span class="text-danger">*</span></label>
              <input type="email" name="email" class="form-control form-control-custom" placeholder="rahul@example.com" required>
              <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>

            <div class="col-md-6">
              <label class="form-label-custom">City / Location <span class="text-danger">*</span></label>
              <input type="text" name="city" class="form-control form-control-custom" placeholder="e.g. New Delhi, Lucknow, Jaipur" required>
              <div class="invalid-feedback">Please provide your city.</div>
            </div>

            <div class="col-md-6">
              <label class="form-label-custom">Solution / Product Category <span class="text-danger">*</span></label>
              <select name="category" id="modalCategoryField" class="form-select form-select-custom" required>
                <option value="" selected disabled>Select Category...</option>
                <option value="Solar Solutions (Rooftop / Off-Grid / Hybrid)">Solar Solutions (Rooftop / Hybrid / Commercial)</option>
                <option value="PM Surya Ghar: Muft Bijli Scheme">PM Surya Ghar: Muft Bijli Scheme (Govt Subsidy)</option>
                <option value="Lithium Battery Storage (LiFePO4)">Lithium Battery Storage (LiFePO4)</option>
                <option value="Lead Acid Tubular Battery & UPS">Lead Acid Tall Tubular Battery & UPS</option>
                <option value="Home Appliances (Inverter AC / Smart LED TV)">Home Appliances (Inverter AC / Smart LED TV)</option>
                <option value="Solar Cables & Accessories (ACDB/DCDB/MC4)">Solar Cables & Accessories (ACDB/DCDB/MC4)</option>
                <option value="Dealership / Distribution Inquiry">Dealership / Distribution Partnership</option>
              </select>
              <div class="invalid-feedback">Please select a category.</div>
            </div>

            <div class="col-md-6">
              <label class="form-label-custom">Product Name or System Capacity</label>
              <input type="text" name="product_name" id="modalProductField" class="form-control form-control-custom" placeholder="e.g. 3kW Solar Hybrid System, 200Ah Battery">
            </div>

            <div class="col-12">
              <label class="form-label-custom">Your Specific Requirement / Message</label>
              <textarea name="message" class="form-control form-control-custom" rows="3" placeholder="Tell us about your rooftop area, monthly power consumption, or specific questions..."></textarea>
            </div>

            <div class="col-12 mt-4">
              <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between gap-3 p-3 bg-light rounded-3 border">
                <div class="d-flex align-items-center gap-2 text-muted small">
                  <i class="bi bi-shield-lock-fill text-success fs-5"></i>
                  <span>100% Confidential. Zero spam. Fast 30-min response.</span>
                </div>
                <button type="submit" class="btn btn-primary-glow px-4 py-2 w-100 w-sm-auto">
                  <i class="bi bi-send-fill me-2"></i> Submit Free Quote Request
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
