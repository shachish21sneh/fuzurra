<?php
require_once __DIR__ . '/includes/config.php';

function getPageMeta() {
  return renderPageMeta(
    'PM Surya Ghar: Muft Bijli Yojana - Rooftop Solar Scheme & Subsidy Guide',
    'Learn about PM Surya Ghar Muft Bijli Yojana with Fuzurra Industries. Get up to ₹78,000 direct bank transfer subsidy, 300 units free monthly electricity, eligibility, documents, and installation support.'
  );
}

include __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     HERO BANNER
     ========================================================================== -->
<section class="py-5 text-white position-relative" style="background: linear-gradient(135deg, #064E3B 0%, #0B132B 50%, #0F172A 100%);">
  <div class="container-fluid px-lg-5 py-3 position-relative" style="z-index: 2;">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="index.php" class="text-light-50">Home</a></li>
            <li class="breadcrumb-item active text-warning" aria-current="page">PM Surya Ghar Yojana</li>
          </ol>
        </nav>
        <span class="badge bg-warning text-dark fw-bold px-3 py-2 mb-2">
          <i class="bi bi-star-fill me-1"></i> GOVT. OF INDIA ROOFTOP SOLAR INITIATIVE
        </span>
        <h1 class="display-5 fw-bold text-white mb-3">
          PM Surya Ghar: Muft Bijli Yojana
        </h1>
        <p class="lead text-light-50 mb-4">
          Harness the sun to power your home. Get direct bank transfer (DBT) central financial assistance up to <strong>₹78,000/-</strong> and enjoy up to <strong>300 units of free clean electricity</strong> every month.
        </p>
        <div class="d-flex flex-wrap gap-3">
          <button type="button" class="btn btn-primary-glow" data-bs-toggle="modal" data-bs-target="#quoteModal" data-category="PM Surya Ghar: Muft Bijli Scheme">
            <i class="bi bi-patch-check-fill me-1"></i> Check Your Solar Installation Options
          </button>
          <a href="#subsidyCalcSection" class="btn btn-secondary-glass">
            <i class="bi bi-calculator me-1"></i> Subsidy Calculator
          </a>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="rounded-4 overflow-hidden shadow-lg border border-2 border-white">
          <img src="assets/images/pm-surya-ghar.jpg" alt="PM Surya Ghar Rooftop Solar Installation">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     WHAT IS PM SURYA GHAR & BENEFITS
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container-fluid px-lg-5 py-4">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <span class="section-tag">National Rooftop Scheme</span>
        <h2 class="section-title">What is PM Surya Ghar: Muft Bijli Yojana?</h2>
        <p class="text-muted mb-3">
          <strong>PM Surya Ghar: Muft Bijli Yojana</strong> is a flagship scheme launched by the Government of India aimed at providing free electricity to 1 Crore households across the country through rooftop solar installations.
        </p>
        <p class="text-muted mb-4">
          Under this program, the central government provides a direct subsidy deposited straight into the homeowner’s bank account upon successful commissioning and net-meter installation by approved vendors like <strong>Fuzurra Industries Pvt. Ltd.</strong>
        </p>

        <div class="p-3 bg-light rounded-3 border-start border-4 border-success">
          <h6 class="fw-bold text-dark mb-1">Official Government Subsidy Guarantee:</h6>
          <p class="small text-muted mb-0">
            Subsidies are credited directly to your bank account through DBT (Direct Benefit Transfer) on the National Portal for Rooftop Solar after DISCOM verification.
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="row g-3">
          <!-- Benefit 1 -->
          <div class="col-sm-6">
            <div class="p-4 bg-light rounded-4 border h-100">
              <i class="bi bi-cash-coin text-success fs-1 mb-2 d-inline-block"></i>
              <h5 class="fw-bold mb-1">Up to ₹78,000 Subsidy</h5>
              <p class="text-muted small mb-0">Direct financial assistance from MNRE directly credited to your bank account.</p>
            </div>
          </div>
          <!-- Benefit 2 -->
          <div class="col-sm-6">
            <div class="p-4 bg-light rounded-4 border h-100">
              <i class="bi bi-lightning-charge-fill text-warning fs-1 mb-2 d-inline-block"></i>
              <h5 class="fw-bold mb-1">300 Units Free Power</h5>
              <p class="text-muted small mb-0">A 3kW rooftop system generates ~360 units/month, easily fulfilling average household demand.</p>
            </div>
          </div>
          <!-- Benefit 3 -->
          <div class="col-sm-6">
            <div class="p-4 bg-light rounded-4 border h-100">
              <i class="bi bi-shield-check text-primary fs-1 mb-2 d-inline-block"></i>
              <h5 class="fw-bold mb-1">25-Year Performance</h5>
              <p class="text-muted small mb-0">Long-term solar module linear performance warranty for uninterrupted generation.</p>
            </div>
          </div>
          <!-- Benefit 4 -->
          <div class="col-sm-6">
            <div class="p-4 bg-light rounded-4 border h-100">
              <i class="bi bi-graph-down-arrow text-danger fs-1 mb-2 d-inline-block"></i>
              <h5 class="fw-bold mb-1">Zero Electricity Bills</h5>
              <p class="text-muted small mb-0">Sell excess units to DISCOM via net metering to offset future billing and earn credits.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     OFFICIAL SUBSIDY BREAKDOWN TABLE & CALCULATOR
     ========================================================================== -->
<section class="py-5" id="subsidyCalcSection" style="background: #F1F5F9;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="section-tag justify-content-center">Verified Slabs</span>
      <h2 class="section-title">Official PM Surya Ghar Subsidy Structure</h2>
      <p class="section-lead mx-auto">
        Standard central government subsidy rates as notified under the National Rooftop Solar Mission.
      </p>
    </div>

    <div class="row g-5 align-items-center">
      <!-- Subsidy Table -->
      <div class="col-lg-6">
        <div class="table-responsive bg-white rounded-4 shadow-sm border p-2">
          <table class="table table-hover align-middle mb-0">
            <thead class="table-dark">
              <tr>
                <th class="py-3 px-3">System Capacity</th>
                <th class="py-3 px-3">Govt. Subsidy Amount</th>
                <th class="py-3 px-3">Monthly Generation</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="px-3 fw-bold">1 kW System</td>
                <td class="px-3 text-success fw-bold">₹30,000</td>
                <td class="px-3 text-muted">~120 Units / Month</td>
              </tr>
              <tr>
                <td class="px-3 fw-bold">2 kW System</td>
                <td class="px-3 text-success fw-bold">₹60,000</td>
                <td class="px-3 text-muted">~240 Units / Month</td>
              </tr>
              <tr class="table-success bg-opacity-25">
                <td class="px-3 fw-bold">3 kW to 10 kW</td>
                <td class="px-3 text-success fw-bold">₹78,000 <span class="badge bg-success">Maximum Cap</span></td>
                <td class="px-3 text-muted">~360+ Units / Month</td>
              </tr>
              <tr>
                <td class="px-3 fw-bold">Group Housing / RWA</td>
                <td class="px-3 text-success fw-bold">₹18,000 per kW (up to 500 kW)</td>
                <td class="px-3 text-muted">Common facilities / Lifts</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="small text-muted mt-2">
          <i class="bi bi-info-circle me-1"></i> Subsidy amounts are strictly governed by MNRE guidelines. Actual net system cost varies depending on rooftop structure height and site feasibility.
        </p>
      </div>

      <!-- Interactive PM Surya Calculator -->
      <div class="col-lg-6">
        <div class="calc-card">
          <h4 class="font-heading text-dark fw-bold mb-3 d-flex align-items-center gap-2">
            <i class="bi bi-calculator-fill text-success"></i> PM Surya Ghar Calculator
          </h4>
          <p class="text-muted small mb-4">
            Select your desired rooftop solar plant capacity to view verified central subsidy, approximate system cost, and monthly savings.
          </p>

          <div class="mb-4">
            <label class="form-label-custom">Select System Capacity (kW):</label>
            <select id="pmSuryaCapacitySelect" class="form-select form-select-custom">
              <option value="1">1 kW (Suitable for 1-2 BHK / Low Load)</option>
              <option value="2">2 kW (Suitable for 2-3 BHK / 1 AC)</option>
              <option value="3" selected>3 kW (Recommended for Most Homes - Max Subsidy)</option>
              <option value="4">4 kW (Suitable for 3-4 BHK / 2 ACs)</option>
              <option value="5">5 kW (Large Independent Home / Heavy Load)</option>
            </select>
          </div>

          <div class="p-3 bg-light rounded-3 border mb-4">
            <div class="d-flex justify-content-between py-2 border-bottom">
              <span class="text-muted">Direct Govt. Subsidy (DBT):</span>
              <strong class="text-success fs-5" id="pmSubsidyVal">₹78,000</strong>
            </div>
            <div class="d-flex justify-content-between py-2 border-bottom">
              <span class="text-muted">Approx. Gross System Cost:</span>
              <strong class="text-dark" id="pmEstCostVal">₹1,85,000</strong>
            </div>
            <div class="d-flex justify-content-between py-2 border-bottom">
              <span class="text-muted">Effective Net Cost (Approx):</span>
              <strong class="text-primary fs-5" id="pmNetCostVal">₹1,07,000</strong>
            </div>
            <div class="d-flex justify-content-between py-2 border-bottom">
              <span class="text-muted">Expected Free Monthly Generation:</span>
              <strong class="text-dark" id="pmUnitsVal">~360 Units</strong>
            </div>
            <div class="d-flex justify-content-between py-2">
              <span class="text-muted">Estimated Monthly Electricity Saving:</span>
              <strong class="text-success fw-bold" id="pmSavingsVal">₹3,060/mo</strong>
            </div>
          </div>

          <button type="button" class="btn btn-primary-glow w-100" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="PM Surya Ghar 3kW System" data-category="PM Surya Ghar: Muft Bijli Scheme">
            <i class="bi bi-check2-circle me-1"></i> Apply for Subsidy Assistance
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     ELIGIBILITY & REQUIRED DOCUMENTS
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container-fluid px-lg-5 py-4">
    <div class="row g-5">
      <!-- Eligibility -->
      <div class="col-lg-6">
        <span class="section-tag">Who is Eligible?</span>
        <h3 class="h2 fw-bold mb-4">Eligibility Criteria</h3>
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex align-items-start gap-3 py-3 px-0">
            <i class="bi bi-check-circle-fill text-success fs-5"></i>
            <div>
              <strong class="text-dark">Indian Citizen &amp; Residential Property:</strong>
              <p class="text-muted small mb-0">Must be an individual residential household owner with a valid property title or sanctioned ownership.</p>
            </div>
          </li>
          <li class="list-group-item d-flex align-items-start gap-3 py-3 px-0">
            <i class="bi bi-check-circle-fill text-success fs-5"></i>
            <div>
              <strong class="text-dark">Active Electricity Meter Connection:</strong>
              <p class="text-muted small mb-0">Must have an active domestic/residential electricity connection in the applicant's name with the local state DISCOM.</p>
            </div>
          </li>
          <li class="list-group-item d-flex align-items-start gap-3 py-3 px-0">
            <i class="bi bi-check-circle-fill text-success fs-5"></i>
            <div>
              <strong class="text-dark">Suitable Shadow-Free Rooftop Area:</strong>
              <p class="text-muted small mb-0">Adequate shadow-free terrace or rooftop space (approx. 80–100 sq.ft per kW of solar panels).</p>
            </div>
          </li>
          <li class="list-group-item d-flex align-items-start gap-3 py-3 px-0">
            <i class="bi bi-check-circle-fill text-success fs-5"></i>
            <div>
              <strong class="text-dark">No Prior Central Subsidy for Rooftop:</strong>
              <p class="text-muted small mb-0">The consumer should not have availed central financial assistance for rooftop solar on the same consumer account previously.</p>
            </div>
          </li>
        </ul>
      </div>

      <!-- Required Documents -->
      <div class="col-lg-6">
        <span class="section-tag">Checklist</span>
        <h3 class="h2 fw-bold mb-4">Required Documents</h3>
        <div class="p-4 bg-light rounded-4 border">
          <div class="row g-3">
            <div class="col-sm-6">
              <div class="p-3 bg-white rounded-3 border d-flex align-items-center gap-3">
                <i class="bi bi-file-earmark-text-fill text-danger fs-3"></i>
                <div>
                  <strong class="small d-block text-dark">Latest Electricity Bill</strong>
                  <span class="text-muted" style="font-size: 0.78rem;">Last 2 months bill copy</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="p-3 bg-white rounded-3 border d-flex align-items-center gap-3">
                <i class="bi bi-person-vcard-fill text-primary fs-3"></i>
                <div>
                  <strong class="small d-block text-dark">Aadhaar Card</strong>
                  <span class="text-muted" style="font-size: 0.78rem;">Linked with mobile &amp; bank</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="p-3 bg-white rounded-3 border d-flex align-items-center gap-3">
                <i class="bi bi-bank2 text-success fs-3"></i>
                <div>
                  <strong class="small d-block text-dark">Bank Account Details</strong>
                  <span class="text-muted" style="font-size: 0.78rem;">Cancelled cheque / Passbook</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="p-3 bg-white rounded-3 border d-flex align-items-center gap-3">
                <i class="bi bi-house-check-fill text-warning fs-3"></i>
                <div>
                  <strong class="small d-block text-dark">Property Tax Proof</strong>
                  <span class="text-muted" style="font-size: 0.78rem;">Address &amp; ownership proof</span>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-4 pt-3 border-top text-center">
            <p class="small text-muted mb-2">
              Need assistance with document uploading on the National Solar Portal?
            </p>
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="text-success fw-bold">
              <i class="bi bi-headset me-1"></i> Call Fuzurra Support Team at <?php echo SITE_PHONE; ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     5-STEP INSTALLATION PROCESS
     ========================================================================== -->
<section class="py-5" style="background: #0B132B; color: #FFFFFF;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="section-tag justify-content-center" style="color: #34D399;">Hassle-Free Execution</span>
      <h2 class="section-title text-white">5-Step Solar Installation Process</h2>
      <p class="text-light-50 mx-auto">
        Fuzurra Industries handles the entire lifecycle from portal registration to final subsidy credit.
      </p>
    </div>

    <div class="row g-4">
      <!-- Step 1 -->
      <div class="col-md">
        <div class="flow-step-card h-100">
          <div class="flow-step-number">1</div>
          <h6 class="text-white fw-bold mb-2">Portal Registration</h6>
          <p class="small text-light-50 mb-0">
            Submit your electricity consumer number and contact details on the National Rooftop Solar portal.
          </p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-md">
        <div class="flow-step-card h-100">
          <div class="flow-step-number">2</div>
          <h6 class="text-white fw-bold mb-2">Site Audit &amp; Design</h6>
          <p class="small text-light-50 mb-0">
            Fuzurra engineers conduct a 3D shadow analysis and prepare the technical layout for DISCOM feasibility.
          </p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-md">
        <div class="flow-step-card active-pulse h-100">
          <div class="flow-step-number bg-success">3</div>
          <h6 class="text-white fw-bold mb-2">Quality Installation</h6>
          <p class="small text-light-50 mb-0">
            Certified Fuzurra technicians install high-efficiency panels, inverter, structures, and ACDB/DCDB.
          </p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="col-md">
        <div class="flow-step-card h-100">
          <div class="flow-step-number">4</div>
          <h6 class="text-white fw-bold mb-2">Net Metering Inspection</h6>
          <p class="small text-light-50 mb-0">
            DISCOM officials inspect the installation and replace the old meter with a bidirectional smart net-meter.
          </p>
        </div>
      </div>

      <!-- Step 5 -->
      <div class="col-md">
        <div class="flow-step-card h-100">
          <div class="flow-step-number">5</div>
          <h6 class="text-white fw-bold mb-2">Subsidy Credited (DBT)</h6>
          <p class="small text-light-50 mb-0">
            Commissioning report uploaded; central subsidy (up to ₹78,000) deposited directly into your bank account.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     CUSTOMER ENQUIRY & INSTALLATION SUPPORT FORM
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container-fluid px-lg-5 py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="p-4 p-lg-5 bg-light rounded-4 border shadow-sm">
          <div class="text-center mb-4">
            <span class="section-tag justify-content-center">Start Your Application</span>
            <h3 class="h2 fw-bold text-dark">Get Complete PM Surya Ghar Assistance</h3>
            <p class="text-muted small">
              Submit your inquiry below. Our solar consultant will verify your rooftop feasibility and guide you through documentation.
            </p>
          </div>

          <form class="fuzurra-ajax-form needs-validation" novalidate>
            <input type="hidden" name="form_type" value="pm_surya_ghar">
            <input type="hidden" name="csrf_token" value="<?php echo getCsrfToken(); ?>">
            <input type="text" name="website_url_hp" style="display:none !important;" tabindex="-1" autocomplete="off">

            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label-custom">Full Name <span class="text-danger">*</span></label>
                <input type="text" name="full_name" class="form-control form-control-custom" placeholder="e.g. Suresh Patel" required>
              </div>
              <div class="col-md-6">
                <label class="form-label-custom">Mobile Number <span class="text-danger">*</span></label>
                <input type="tel" name="mobile" pattern="[0-9]{10}" class="form-control form-control-custom" placeholder="10-digit mobile number" required>
              </div>
              <div class="col-md-6">
                <label class="form-label-custom">Email Address <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control form-control-custom" placeholder="suresh@example.com" required>
              </div>
              <div class="col-md-6">
                <label class="form-label-custom">City &amp; State <span class="text-danger">*</span></label>
                <input type="text" name="city" class="form-control form-control-custom" placeholder="e.g. Lucknow, Uttar Pradesh" required>
              </div>
              <div class="col-md-6">
                <label class="form-label-custom">Monthly Electricity Bill (Approx)</label>
                <select name="category" class="form-select form-select-custom">
                  <option value="Below ₹1,500 / month">Below ₹1,500 / month (Recommend 1 kW)</option>
                  <option value="₹1,500 - ₹3,000 / month">₹1,500 - ₹3,000 / month (Recommend 2 kW)</option>
                  <option value="₹3,000 - ₹6,000 / month" selected>₹3,000 - ₹6,000 / month (Recommend 3 kW)</option>
                  <option value="Above ₹6,000 / month">Above ₹6,000 / month (Recommend 4-5 kW+)</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label-custom">Rooftop Type</label>
                <select name="product_name" class="form-select form-select-custom">
                  <option value="RCC Flat Concrete Roof" selected>RCC Flat Concrete Roof</option>
                  <option value="Slanted Tin / Metal Shed">Slanted Tin / Metal Shed</option>
                  <option value="Asbestos / Tiled Roof">Asbestos / Tiled Roof</option>
                  <option value="Open Ground / Yard">Open Ground / Yard</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label-custom">Any Questions or Details</label>
                <textarea name="message" class="form-control form-control-custom" rows="3" placeholder="Tell us if you have already registered on the National Portal or need end-to-end assistance..."></textarea>
              </div>
              <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-primary-glow px-5 py-3">
                  <i class="bi bi-send-check-fill me-2"></i> Submit for Free Feasibility Verification
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
