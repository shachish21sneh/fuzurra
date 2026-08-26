<?php
require_once __DIR__ . '/includes/config.php';

function getPageMeta() {
  return renderPageMeta(
    'Services - Solar Installation, Engineering Design & Maintenance Support',
    'Fuzurra Industries comprehensive energy services: Solar System Installation, Solar Feasibility Consultation, System Design, Inverter & Battery Setup, AMC Maintenance, and Dealer Support.'
  );
}

include __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     PAGE BANNER
     ========================================================================== -->
<section class="py-5 text-white position-relative" style="background: linear-gradient(135deg, #070D1E 0%, #064E3B 50%, #0B132B 100%);">
  <div class="container-fluid px-lg-5 py-3 position-relative" style="z-index: 2;">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="index.php" class="text-light-50">Home</a></li>
            <li class="breadcrumb-item active text-warning" aria-current="page">Services</li>
          </ol>
        </nav>
        <span class="badge bg-warning text-dark fw-bold px-3 py-1 mb-2">END-TO-END TECHNICAL CAPABILITY</span>
        <h1 class="display-5 fw-bold text-white mb-2">Comprehensive Engineering &amp; After-Sales Services</h1>
        <p class="lead text-light-50 mb-0">
          Professional design, flawless on-site commissioning, preventative maintenance, and lifetime technical support by Fuzurra certified engineers.
        </p>
      </div>
      <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
        <button type="button" class="btn btn-primary-glow" data-bs-toggle="modal" data-bs-target="#quoteModal" data-category="Services &amp; Maintenance">
          <i class="bi bi-calendar-check me-1"></i> Book a Site Consultation
        </button>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     8 CORE SERVICES GRID
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container-fluid px-lg-5 py-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="section-tag justify-content-center">What We Deliver</span>
      <h2 class="section-title">Our Specialized Service Portfolio</h2>
      <p class="section-lead mx-auto">
        Delivering precision engineering, safety compliance, and maximum system uptime across India.
      </p>
    </div>

    <div class="row g-4">
      <!-- 1. Solar System Installation -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-green">
            <i class="bi bi-tools"></i>
          </div>
          <h5 class="fw-bold mb-2">Solar System Installation</h5>
          <p class="text-muted small mb-3">
            Turnkey execution including civil foundation mounting, electrical cabling, inverter commissioning, and statutory safety earthing.
          </p>
          <a href="#" class="text-success fw-bold small" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Solar System Installation" data-category="Services &amp; Maintenance">
            Request Installation &rarr;
          </a>
        </div>
      </div>

      <!-- 2. Solar Consultation -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-gold">
            <i class="bi bi-clipboard2-data-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Solar Consultation</h5>
          <p class="text-muted small mb-3">
            On-site rooftop feasibility audits, shadow path analysis, historical billing assessment, and financial payback calculation.
          </p>
          <a href="#" class="text-warning fw-bold small" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Solar Feasibility Audit" data-category="Services &amp; Maintenance">
            Book Site Audit &rarr;
          </a>
        </div>
      </div>

      <!-- 3. Solar System Design -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-blue">
            <i class="bi bi-pencil-ruler"></i>
          </div>
          <h5 class="fw-bold mb-2">Solar System Design</h5>
          <p class="text-muted small mb-3">
            Custom Single Line Diagrams (SLD), 3D structural simulations, string sizing, cable loss optimization, and DISCOM drawings.
          </p>
          <a href="#" class="text-info fw-bold small" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="System Engineering Design" data-category="Services &amp; Maintenance">
            Get 3D Design &rarr;
          </a>
        </div>
      </div>

      <!-- 4. Inverter Installation -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-navy">
            <i class="bi bi-cpu-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Inverter Installation</h5>
          <p class="text-muted small mb-3">
            Expert mounting and electrical integration of on-grid string inverters, hybrid units, and heavy pure sine wave commercial setups.
          </p>
          <a href="#" class="text-dark fw-bold small" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Inverter Setup Service" data-category="Services &amp; Maintenance">
            Schedule Setup &rarr;
          </a>
        </div>
      </div>

      <!-- 5. Battery Solutions -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-green">
            <i class="bi bi-battery-charging"></i>
          </div>
          <h5 class="fw-bold mb-2">Battery Solutions</h5>
          <p class="text-muted small mb-3">
            Capacity sizing, battery health testing, lithium wall-mount retrofits, tall tubular replacement, and smart BMS programming.
          </p>
          <a href="#" class="text-success fw-bold small" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Battery Retrofitting Service" data-category="Services &amp; Maintenance">
            Upgrade Battery &rarr;
          </a>
        </div>
      </div>

      <!-- 6. After-Sales Support -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-gold">
            <i class="bi bi-headset"></i>
          </div>
          <h5 class="fw-bold mb-2">After-Sales Support</h5>
          <p class="text-muted small mb-3">
            Dedicated customer care desk, rapid ticket resolution, warranty replacements, and genuine spare parts availability.
          </p>
          <a href="contact.php" class="text-warning fw-bold small">
            Contact Support &rarr;
          </a>
        </div>
      </div>

      <!-- 7. Maintenance & Service -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-blue">
            <i class="bi bi-shield-check"></i>
          </div>
          <h5 class="fw-bold mb-2">Maintenance &amp; Service (AMC)</h5>
          <p class="text-muted small mb-3">
            Comprehensive Annual Maintenance Contracts (AMC), thermal imaging hotspot checks, module cleaning, and wire tightening.
          </p>
          <a href="#" class="text-info fw-bold small" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Annual Maintenance Contract (AMC)" data-category="Services &amp; Maintenance">
            Explore AMC Plans &rarr;
          </a>
        </div>
      </div>

      <!-- 8. Dealer/Distributor Support -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-navy">
            <i class="bi bi-people-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Dealer / Distributor Support</h5>
          <p class="text-muted small mb-3">
            Technical training workshops, channel marketing materials, priority dispatch, and dedicated relationship manager support.
          </p>
          <a href="dealer.php" class="text-dark fw-bold small">
            Partner With Us &rarr;
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SERVICE BOOKING / CONSULTATION FORM
     ========================================================================== -->
<section class="py-5" style="background: #F8FAFC;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="p-4 p-lg-5 bg-white rounded-4 border shadow-sm">
          <div class="text-center mb-4">
            <span class="section-tag justify-content-center">Fast Response</span>
            <h3 class="h2 fw-bold text-dark">Schedule a Site Audit or Service Request</h3>
            <p class="text-muted small">
              Our engineering team is stationed across major hubs to deliver prompt on-site inspection and support.
            </p>
          </div>

          <form class="fuzurra-ajax-form needs-validation" novalidate>
            <input type="hidden" name="form_type" value="service_booking">
            <input type="hidden" name="csrf_token" value="<?php echo getCsrfToken(); ?>">
            <input type="text" name="website_url_hp" style="display:none !important;" tabindex="-1" autocomplete="off">

            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label-custom">Contact Name <span class="text-danger">*</span></label>
                <input type="text" name="full_name" class="form-control form-control-custom" placeholder="e.g. Amit Verma" required>
              </div>
              <div class="col-md-6">
                <label class="form-label-custom">Mobile Number <span class="text-danger">*</span></label>
                <input type="tel" name="mobile" pattern="[0-9]{10}" class="form-control form-control-custom" placeholder="10-digit mobile number" required>
              </div>
              <div class="col-md-6">
                <label class="form-label-custom">Email Address <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control form-control-custom" placeholder="amit@example.com" required>
              </div>
              <div class="col-md-6">
                <label class="form-label-custom">City &amp; PIN Code <span class="text-danger">*</span></label>
                <input type="text" name="city" class="form-control form-control-custom" placeholder="e.g. Jaipur - 302001" required>
              </div>
              <div class="col-md-12">
                <label class="form-label-custom">Service Required <span class="text-danger">*</span></label>
                <select name="category" class="form-select form-select-custom" required>
                  <option value="" selected disabled>Select Required Service...</option>
                  <option value="Solar Rooftop Feasibility Audit">Solar Rooftop Feasibility &amp; Shadow Audit</option>
                  <option value="New Solar System Installation">New Solar System Installation &amp; Net Metering</option>
                  <option value="Inverter / UPS Repair & Commissioning">Inverter / UPS Installation &amp; Commissioning</option>
                  <option value="Battery Health Check & Replacement">Battery Health Check / Lithium Retrofit</option>
                  <option value="Annual Maintenance Contract (AMC)">Annual Maintenance Contract (AMC) Inquiry</option>
                  <option value="Commercial / Industrial Solar Design">Commercial / Industrial Solar Plant Engineering</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label-custom">Details of Your Request</label>
                <textarea name="message" class="form-control form-control-custom" rows="3" placeholder="Describe your property type, current power problem, or preferred date/time for visit..."></textarea>
              </div>
              <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-primary-glow px-5 py-3">
                  <i class="bi bi-calendar2-check-fill me-2"></i> Confirm Service Appointment
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
