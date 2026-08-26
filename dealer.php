<?php
require_once __DIR__ . '/includes/config.php';

function getPageMeta() {
  return renderPageMeta(
    'Become a Dealer / Distributor - Channel Partner Application',
    'Partner with Fuzurra Industries Pvt. Ltd. as an Authorized Dealer, Distributor, or Solar EPC Channel Partner. Lucrative margins, exclusive territory, and full marketing support.'
  );
}

include __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     PAGE BANNER
     ========================================================================== -->
<section class="py-5 text-white position-relative" style="background: linear-gradient(135deg, #0B132B 0%, #1E293B 50%, #065F46 100%);">
  <div class="container-fluid px-lg-5 py-3 position-relative" style="z-index: 2;">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="index.php" class="text-light-50">Home</a></li>
            <li class="breadcrumb-item active text-warning" aria-current="page">Dealer &amp; Distributor Portal</li>
          </ol>
        </nav>
        <span class="badge bg-warning text-dark fw-bold px-3 py-1 mb-2">BUSINESS PARTNERSHIP OPPORTUNITY</span>
        <h1 class="display-5 fw-bold text-white mb-3">
          Become a Dealer / Distributor / Channel Partner
        </h1>
        <p class="lead text-light-50 mb-4">
          Accelerate your business with <strong>Fuzurra Industries Pvt. Ltd.</strong> Expand your enterprise with our high-demand portfolio of Solar Panels, Hybrid Inverters, Lithium &amp; Lead Acid Batteries, and Smart Appliances.
        </p>
        <div class="d-flex flex-wrap gap-3">
          <a href="#dealerFormSection" class="btn btn-primary-glow">
            <i class="bi bi-file-earmark-person-fill me-1"></i> Apply for Dealership
          </a>
          <a href="<?php echo WA_LINK_DEFAULT; ?>" target="_blank" class="btn btn-secondary-glass">
            <i class="bi bi-whatsapp me-1"></i> Contact Partner Manager
          </a>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="p-4 rounded-4" style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.15);">
          <h4 class="text-white fw-bold mb-3 d-flex align-items-center gap-2">
            <i class="bi bi-award-fill text-warning"></i> Partner Advantages
          </h4>
          <ul class="list-unstyled text-light-50 mb-0">
            <li class="mb-3 d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success fs-5"></i>
              <span><strong>Lucrative Profit Margins</strong> &amp; Performance Incentives</span>
            </li>
            <li class="mb-3 d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success fs-5"></i>
              <span><strong>Territorial Exclusivity</strong> for Qualified Distributors</span>
            </li>
            <li class="mb-3 d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success fs-5"></i>
              <span><strong>Verified Customer Leads</strong> Directed to Local Partners</span>
            </li>
            <li class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success fs-5"></i>
              <span><strong>Priority RMA &amp; Fast Warranty</strong> Spares Dispatch</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     PARTNERSHIP BENEFITS & PILLARS
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container-fluid px-lg-5 py-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="section-tag justify-content-center">Growth Ecosystem</span>
      <h2 class="section-title">Why Partner with Fuzurra Industries?</h2>
      <p class="section-lead mx-auto">
        We empower our channel partners with complete marketing collateral, technical certifications, and direct manufacturer pricing.
      </p>
    </div>

    <div class="row g-4">
      <!-- 1. Product Portfolio -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-light rounded-4 border h-100">
          <div class="feature-icon-wrapper feature-icon-green mb-3">
            <i class="bi bi-box-seam-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Comprehensive Portfolio</h5>
          <p class="text-muted small mb-0">
            One single supplier for solar panels, hybrid &amp; on-grid inverters, tall tubular &amp; lithium batteries, DC cables, ACDB/DCDB, and energy-saving home appliances.
          </p>
        </div>
      </div>

      <!-- 2. Dealer Support -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-light rounded-4 border h-100">
          <div class="feature-icon-wrapper feature-icon-gold mb-3">
            <i class="bi bi-person-workspace"></i>
          </div>
          <h5 class="fw-bold mb-2">Dedicated Dealer Support</h5>
          <p class="text-muted small mb-0">
            Assigned Regional Channel Manager for rapid order processing, customized project quotations, credit terms, and logistics coordination.
          </p>
        </div>
      </div>

      <!-- 3. Marketing Support -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-light rounded-4 border h-100">
          <div class="feature-icon-wrapper feature-icon-blue mb-3">
            <i class="bi bi-megaphone-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Marketing &amp; Branding Collateral</h5>
          <p class="text-muted small mb-0">
            Showroom standees, product sample display racks, digital brochures, local advertising assistance, and trade exhibition support.
          </p>
        </div>
      </div>

      <!-- 4. Technical Support -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-light rounded-4 border h-100">
          <div class="feature-icon-wrapper feature-icon-navy mb-3">
            <i class="bi bi-wrench-adjustable-circle-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Technical Training &amp; Support</h5>
          <p class="text-muted small mb-0">
            Regular product workshops, sizing software tools, technician training certifications, and on-call engineering consultation for complex projects.
          </p>
        </div>
      </div>

      <!-- 5. Territory Protection -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-light rounded-4 border h-100">
          <div class="feature-icon-wrapper feature-icon-green mb-3">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Territorial Protection</h5>
          <p class="text-muted small mb-0">
            Clear demarcation of districts and zones to eliminate channel conflict and protect your sales margins and investments.
          </p>
        </div>
      </div>

      <!-- 6. Fast Warranty & Spares -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-light rounded-4 border h-100">
          <div class="feature-icon-wrapper feature-icon-gold mb-3">
            <i class="bi bi-shield-fill-check"></i>
          </div>
          <h5 class="fw-bold mb-2">Fast Warranty &amp; Spares</h5>
          <p class="text-muted small mb-0">
            Hassle-free warranty claims and expedited spare parts dispatch to keep your customers 100% satisfied and loyal.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     DEALER / DISTRIBUTOR APPLICATION FORM
     ========================================================================== -->
<section class="py-5" id="dealerFormSection" style="background: #F8FAFC;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="p-4 p-lg-5 bg-white rounded-4 border shadow-sm">
          <div class="text-center mb-4">
            <span class="section-tag justify-content-center">Channel Partner Onboarding</span>
            <h3 class="h2 fw-bold text-dark">Dealership / Distributorship Application</h3>
            <p class="text-muted small">
              Please provide complete details regarding your current business and distribution capacity. Our channel leadership will review and connect within 24 hours.
            </p>
          </div>

          <form class="fuzurra-ajax-form needs-validation" novalidate>
            <input type="hidden" name="form_type" value="dealer_application">
            <input type="hidden" name="csrf_token" value="<?php echo getCsrfToken(); ?>">
            <input type="text" name="website_url_hp" style="display:none !important;" tabindex="-1" autocomplete="off">

            <div class="row g-3">
              <!-- Name -->
              <div class="col-md-6">
                <label class="form-label-custom">Full Name <span class="text-danger">*</span></label>
                <input type="text" name="full_name" class="form-control form-control-custom" placeholder="e.g. Rajesh Singhania" required>
                <div class="invalid-feedback">Please enter your full name.</div>
              </div>

              <!-- Company Name -->
              <div class="col-md-6">
                <label class="form-label-custom">Company / Firm Name <span class="text-danger">*</span></label>
                <input type="text" name="company_name" class="form-control form-control-custom" placeholder="e.g. Singhania Electricals &amp; Solar" required>
                <div class="invalid-feedback">Please provide your business or firm name.</div>
              </div>

              <!-- Mobile Number -->
              <div class="col-md-6">
                <label class="form-label-custom">Mobile Number <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text bg-light border-end-0 fw-bold text-muted">+91</span>
                  <input type="tel" name="mobile" pattern="[0-9]{10}" class="form-control form-control-custom border-start-0" placeholder="10-digit mobile number" required>
                </div>
                <div class="invalid-feedback">Please enter a valid 10-digit phone number.</div>
              </div>

              <!-- Email -->
              <div class="col-md-6">
                <label class="form-label-custom">Email Address <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control form-control-custom" placeholder="rajesh@singhania.com" required>
                <div class="invalid-feedback">Please enter your business email.</div>
              </div>

              <!-- City -->
              <div class="col-md-6">
                <label class="form-label-custom">City / District <span class="text-danger">*</span></label>
                <input type="text" name="city" class="form-control form-control-custom" placeholder="e.g. Varanasi" required>
                <div class="invalid-feedback">Please enter your city.</div>
              </div>

              <!-- State -->
              <div class="col-md-6">
                <label class="form-label-custom">State <span class="text-danger">*</span></label>
                <select name="state" class="form-select form-select-custom" required>
                  <option value="" selected disabled>Select State...</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Delhi NCR">Delhi NCR</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Odisha">Odisha</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                  <option value="Other Union Territory">Other State / UT</option>
                </select>
                <div class="invalid-feedback">Please select your state.</div>
              </div>

              <!-- Business Type -->
              <div class="col-md-12">
                <label class="form-label-custom">Business Type <span class="text-danger">*</span></label>
                <select name="business_type" class="form-select form-select-custom" required>
                  <option value="" selected disabled>Select Current Business Profile...</option>
                  <option value="Solar EPC Contractor / Installer">Solar EPC Contractor / Rooftop Installer</option>
                  <option value="Electrical Goods Retailer / Showroom">Electrical Goods Retailer / Showroom Owner</option>
                  <option value="Battery & Inverter Dealer">Battery &amp; Inverter Dealer / Specialist</option>
                  <option value="Regional Distributor / Wholesaler">Regional Distributor / Industrial Wholesaler</option>
                  <option value="Home Appliances Store">Home Appliances Store Owner</option>
                  <option value="New Entrepreneur / Business Venture">New Entrepreneur / Starting Energy Business</option>
                </select>
                <div class="invalid-feedback">Please select your business type.</div>
              </div>

              <!-- Products Interested In (Multi-select checkboxes) -->
              <div class="col-12">
                <label class="form-label-custom">Products Interested In <span class="text-danger">*</span> (Select all that apply):</label>
                <div class="row g-2 p-3 bg-light rounded-3 border">
                  <div class="col-md-4 col-sm-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="products_interested[]" value="Solar Panels (Mono PERC / Bifacial)" id="p_panels" checked>
                      <label class="form-check-label small" for="p_panels">Solar Panels</label>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="products_interested[]" value="Hybrid & On-Grid Inverters" id="p_inverters" checked>
                      <label class="form-check-label small" for="p_inverters">Solar Inverters</label>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="products_interested[]" value="LiFePO4 Lithium Batteries" id="p_lithium" checked>
                      <label class="form-check-label small" for="p_lithium">Lithium Batteries</label>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="products_interested[]" value="Tall Tubular Lead Acid Batteries" id="p_lead">
                      <label class="form-check-label small" for="p_lead">Lead Acid Batteries</label>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="products_interested[]" value="Home UPS & Pure Sine Inverters" id="p_ups">
                      <label class="form-check-label small" for="p_ups">Home UPS Systems</label>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="products_interested[]" value="Solar Cables & Accessories (ACDB/DCDB/MC4)" id="p_cables">
                      <label class="form-check-label small" for="p_cables">Cables &amp; Accessories</label>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="products_interested[]" value="Smart Inverter ACs & 4K TVs" id="p_appliances">
                      <label class="form-check-label small" for="p_appliances">Home Appliances</label>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="products_interested[]" value="PM Surya Ghar Rooftop Kits" id="p_pmsurya">
                      <label class="form-check-label small" for="p_pmsurya">PM Surya Ghar Kits</label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Message -->
              <div class="col-12">
                <label class="form-label-custom">Message / Tell us about your market &amp; existing retail network</label>
                <textarea name="message" class="form-control form-control-custom" rows="3" placeholder="Number of retail outlets, approximate monthly purchasing volume, or specific requirements..."></textarea>
              </div>

              <!-- Submit CTA -->
              <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-primary-glow px-5 py-3">
                  <i class="bi bi-briefcase-fill me-2"></i> Become Our Partner
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
