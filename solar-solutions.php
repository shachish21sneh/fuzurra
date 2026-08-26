<?php
require_once __DIR__ . '/includes/config.php';

function getPageMeta() {
  return renderPageMeta(
    'Solar Solutions - Residential, Commercial & Industrial Solar Systems',
    'Comprehensive solar energy solutions by Fuzurra Industries: Rooftop Residential Solar, Commercial Solar for Offices & Hospitals, and Megawatt Industrial Solar installations.'
  );
}

include __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     PAGE BANNER
     ========================================================================== -->
<section class="py-5 text-white position-relative" style="background: linear-gradient(135deg, #070D1E 0%, #064E3B 60%, #0B132B 100%);">
  <div class="container-fluid px-lg-5 py-3 position-relative" style="z-index: 2;">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="index.php" class="text-light-50">Home</a></li>
            <li class="breadcrumb-item active text-warning" aria-current="page">Solar Solutions</li>
          </ol>
        </nav>
        <span class="badge bg-warning text-dark fw-bold px-3 py-1 mb-2">COMPLETE SOLAR EPC &amp; SYSTEMS</span>
        <h1 class="display-5 fw-bold text-white mb-2">Turnkey Solar Solutions for Every Scale</h1>
        <p class="lead text-light-50 mb-0">
          From residential rooftops to high-capacity industrial plants, Fuzurra Industries designs, engineers, and delivers state-of-the-art photovoltaic power plants.
        </p>
      </div>
      <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
        <button type="button" class="btn btn-primary-glow" data-bs-toggle="modal" data-bs-target="#quoteModal" data-category="Solar Solutions (Rooftop / Off-Grid / Hybrid)">
          <i class="bi bi-sun-fill me-1"></i> Get Your Solar System Quote
        </button>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECTORS: RESIDENTIAL, COMMERCIAL, INDUSTRIAL
     ========================================================================== -->
<section class="py-5" style="background: #FFFFFF;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="section-tag justify-content-center">Customized Energy Solutions</span>
      <h2 class="section-title">Engineered for Your Energy Demands</h2>
      <p class="section-lead mx-auto">
        Tailored solar engineering optimized for rooftops, commercial tariffs, and high-demand continuous factory operations.
      </p>
    </div>

    <div class="row g-4">
      <!-- 1. Residential Solar -->
      <div class="col-lg-4">
        <div class="p-4 rounded-4 border h-100 d-flex flex-column" style="background: #F8FAFC; border-color: #E2E8F0; transition: all 0.3s ease;">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="feature-icon-wrapper feature-icon-green mb-0">
              <i class="bi bi-house-heart-fill"></i>
            </div>
            <span class="badge bg-success bg-opacity-10 text-success fw-bold px-3 py-2">1 kW – 10 kW</span>
          </div>
          <h3 class="h4 fw-bold mb-2">Residential Solar</h3>
          <p class="text-muted small mb-3">
            For independent homes, villas, housing societies, and residential apartments. Slash electricity bills by up to 90% and secure 24/7 backup.
          </p>
          <ul class="product-features-checklist mb-4">
            <li><i class="bi bi-check-circle-fill"></i> Eligible for PM Surya Ghar Govt Subsidy (up to ₹78,000)</li>
            <li><i class="bi bi-check-circle-fill"></i> Net-metering connectivity with state DISCOMs</li>
            <li><i class="bi bi-check-circle-fill"></i> Aesthetic shadow-tolerant panel layouts</li>
            <li><i class="bi bi-check-circle-fill"></i> Mobile app for daily solar generation tracking</li>
          </ul>
          <div class="mt-auto pt-3 border-top">
            <button type="button" class="btn btn-outline-success rounded-pill w-100 fw-bold" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Residential Solar Rooftop" data-category="Solar Solutions (Rooftop / Off-Grid / Hybrid)">
              Get Residential Quote
            </button>
          </div>
        </div>
      </div>

      <!-- 2. Commercial Solar -->
      <div class="col-lg-4">
        <div class="p-4 rounded-4 border h-100 d-flex flex-column" style="background: #F8FAFC; border-color: #E2E8F0; transition: all 0.3s ease;">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="feature-icon-wrapper feature-icon-blue mb-0">
              <i class="bi bi-building"></i>
            </div>
            <span class="badge bg-primary bg-opacity-10 text-primary fw-bold px-3 py-2">10 kW – 100 kW</span>
          </div>
          <h3 class="h4 fw-bold mb-2">Commercial Solar</h3>
          <p class="text-muted small mb-3">
            For offices, retail showrooms, schools, colleges, hospitals, and commercial buildings burdened by high peak daytime tariffs.
          </p>
          <ul class="product-features-checklist mb-4">
            <li><i class="bi bi-check-circle-fill"></i> Accelerated Depreciation (AD) tax benefits under IT Act</li>
            <li><i class="bi bi-check-circle-fill"></i> Significant reduction in operational electricity overheads</li>
            <li><i class="bi bi-check-circle-fill"></i> Diesel Generator (DG) synchronization to minimize fuel spend</li>
            <li><i class="bi bi-check-circle-fill"></i> Rapid ROI payback in 3 to 4 years</li>
          </ul>
          <div class="mt-auto pt-3 border-top">
            <button type="button" class="btn btn-outline-primary rounded-pill w-100 fw-bold" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Commercial Solar System" data-category="Solar Solutions (Rooftop / Off-Grid / Hybrid)">
              Get Commercial Quote
            </button>
          </div>
        </div>
      </div>

      <!-- 3. Industrial Solar -->
      <div class="col-lg-4">
        <div class="p-4 rounded-4 border h-100 d-flex flex-column" style="background: #F8FAFC; border-color: #E2E8F0; transition: all 0.3s ease;">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="feature-icon-wrapper feature-icon-gold mb-0">
              <i class="bi bi-factory"></i>
            </div>
            <span class="badge bg-warning bg-opacity-10 text-dark fw-bold px-3 py-2">100 kW – 5+ MW</span>
          </div>
          <h3 class="h4 fw-bold mb-2">Industrial Solar</h3>
          <p class="text-muted small mb-3">
            For manufacturing plants, cold storages, textile mills, warehouses, and heavy industrial facilities requiring continuous multi-megawatt energy.
          </p>
          <ul class="product-features-checklist mb-4">
            <li><i class="bi bi-check-circle-fill"></i> High-voltage HT substation integration &amp; transformer design</li>
            <li><i class="bi bi-check-circle-fill"></i> Tin-shed non-penetrative and elevated high-mast structures</li>
            <li><i class="bi bi-check-circle-fill"></i> SCADA telemetry monitoring &amp; predictive maintenance</li>
            <li><i class="bi bi-check-circle-fill"></i> CAPEX and OPEX / PPA funding models available</li>
          </ul>
          <div class="mt-auto pt-3 border-top">
            <button type="button" class="btn btn-outline-warning text-dark rounded-pill w-100 fw-bold" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Industrial Solar Installation" data-category="Solar Solutions (Rooftop / Off-Grid / Hybrid)">
              Get Industrial Quote
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     VISUAL SYSTEM FLOW SECTION
     Solar Panel ➔ DCDB ➔ Inverter ➔ ACDB ➔ Home/Business
     ========================================================================== -->
<section class="py-5" style="background: #0B132B; color: #FFFFFF;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="section-tag justify-content-center" style="color: #34D399;">Energy Flow Architecture</span>
      <h2 class="section-title text-white">How Electricity Travels in a Fuzurra Solar System</h2>
      <p class="text-light-50 mx-auto">
        A seamless 5-stage chain engineered for zero losses, complete electrical surge immunity, and pure sine wave delivery.
      </p>
    </div>

    <!-- Visual Infographic -->
    <div class="solar-flow-wrapper text-center my-4">
      <img src="assets/images/diagrams/solar-system-flow.svg?v=<?php echo file_exists(__DIR__ . '/assets/images/diagrams/solar-system-flow.svg') ? filemtime(__DIR__ . '/assets/images/diagrams/solar-system-flow.svg') : '2.0'; ?>" alt="Solar Circuit Diagram: Panel to DCDB to Inverter to ACDB to Load" class="mx-auto" style="max-width: 100%; height: auto;">
    </div>

    <!-- Detailed 5-Step Breakdown -->
    <div class="row g-4 mt-2">
      <div class="col-md">
        <div class="flow-step-card h-100">
          <div class="flow-step-number">1</div>
          <h5 class="text-white fw-bold mb-2">Solar PV Panels</h5>
          <p class="small text-light-50 mb-0">
            Photons from sunlight excite silicon wafers in Mono PERC modules, releasing high-voltage Direct Current (DC) electricity.
          </p>
        </div>
      </div>

      <div class="col-md">
        <div class="flow-step-card h-100">
          <div class="flow-step-number">2</div>
          <h5 class="text-white fw-bold mb-2">DCDB Protection</h5>
          <p class="small text-light-50 mb-0">
            Incoming DC passes through Type-II 1000V Surge Protection Devices (SPD) and fast-blow DC fuses, guarding against lightning.
          </p>
        </div>
      </div>

      <div class="col-md">
        <div class="flow-step-card active-pulse h-100">
          <div class="flow-step-number bg-success">3</div>
          <h5 class="text-white fw-bold mb-2">Intelligent Inverter</h5>
          <p class="small text-light-50 mb-0">
            Advanced MPPT tracking optimizes power harvest, converting DC to 230V/415V pure sine wave AC at 98.6% efficiency.
          </p>
        </div>
      </div>

      <div class="col-md">
        <div class="flow-step-card h-100">
          <div class="flow-step-number">4</div>
          <h5 class="text-white fw-bold mb-2">ACDB Safety Box</h5>
          <p class="small text-light-50 mb-0">
            AC energy is conditioned through isolation breakers and class-II AC SPDs, synchronizing cleanly with the main service panel.
          </p>
        </div>
      </div>

      <div class="col-md">
        <div class="flow-step-card h-100">
          <div class="flow-step-number">5</div>
          <h5 class="text-white fw-bold mb-2">Home / Business</h5>
          <p class="small text-light-50 mb-0">
            Powers appliances, air conditioners, and machinery for free, with surplus energy exported to the grid via net metering.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     EXPLANATION OF ALL SYSTEM COMPONENTS
     ========================================================================== -->
<section class="py-5" style="background: #F8FAFC;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="section-tag justify-content-center">Technical Breakdown</span>
      <h2 class="section-title">Core Solar System Components Explained</h2>
      <p class="section-lead mx-auto">
        Every component in a Fuzurra installation is rigorously selected to meet rigorous electrical safety and 25-year endurance standards.
      </p>
    </div>

    <div class="row g-4">
      <!-- 1. Solar Panels -->
      <div class="col-md-6 col-lg-4">
        <div class="p-4 bg-white rounded-4 border h-100 shadow-sm">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="feature-icon-wrapper feature-icon-green mb-0">
              <i class="bi bi-sun-fill"></i>
            </div>
            <h5 class="fw-bold mb-0">Solar Panels</h5>
          </div>
          <p class="text-muted small mb-0">
            High-efficiency Mono PERC &amp; Bifacial PV modules capture sunlight on both front and rear surfaces, generating clean DC electricity even during overcast weather.
          </p>
        </div>
      </div>

      <!-- 2. Hybrid Inverters -->
      <div class="col-md-6 col-lg-4">
        <div class="p-4 bg-white rounded-4 border h-100 shadow-sm">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="feature-icon-wrapper feature-icon-gold mb-0">
              <i class="bi bi-cpu-fill"></i>
            </div>
            <h5 class="fw-bold mb-0">Hybrid Inverters</h5>
          </div>
          <p class="text-muted small mb-0">
            Smart multi-source inverters that intelligently orchestrate power between solar panels, lithium/lead-acid battery banks, and the utility grid.
          </p>
        </div>
      </div>

      <!-- 3. On-Grid Systems -->
      <div class="col-md-6 col-lg-4">
        <div class="p-4 bg-white rounded-4 border h-100 shadow-sm">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="feature-icon-wrapper feature-icon-blue mb-0">
              <i class="bi bi-broadcast-pin"></i>
            </div>
            <h5 class="fw-bold mb-0">On-Grid Systems</h5>
          </div>
          <p class="text-muted small mb-0">
            Grid-connected solar systems that export excess electricity back to the DISCOM via bidirectional net-meters, turning your electricity meter backwards.
          </p>
        </div>
      </div>

      <!-- 4. Off-Grid Systems -->
      <div class="col-md-6 col-lg-4">
        <div class="p-4 bg-white rounded-4 border h-100 shadow-sm">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="feature-icon-wrapper feature-icon-navy mb-0">
              <i class="bi bi-tree-fill"></i>
            </div>
            <h5 class="fw-bold mb-0">Off-Grid Systems</h5>
          </div>
          <p class="text-muted small mb-0">
            Completely self-reliant energy setups engineered for remote locations, farmhouses, and areas with frequent grid outages, powered by dedicated battery banks.
          </p>
        </div>
      </div>

      <!-- 5. Battery Backup -->
      <div class="col-md-6 col-lg-4">
        <div class="p-4 bg-white rounded-4 border h-100 shadow-sm">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="feature-icon-wrapper feature-icon-green mb-0">
              <i class="bi bi-battery-charging"></i>
            </div>
            <h5 class="fw-bold mb-0">Battery Backup</h5>
          </div>
          <p class="text-muted small mb-0">
            Advanced Tall Tubular and Lithium LiFePO4 storage units storing excess daytime solar generation for whisper-quiet nighttime consumption.
          </p>
        </div>
      </div>

      <!-- 6. Solar Structures -->
      <div class="col-md-6 col-lg-4">
        <div class="p-4 bg-white rounded-4 border h-100 shadow-sm">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="feature-icon-wrapper feature-icon-gold mb-0">
              <i class="bi bi-building-fill"></i>
            </div>
            <h5 class="fw-bold mb-0">Solar Structures</h5>
          </div>
          <p class="text-muted small mb-0">
            Hot-dip galvanized (80+ micron) steel and anodized AL6005-T5 aluminum framing designed to withstand extreme cyclonic wind speeds up to 170 km/h.
          </p>
        </div>
      </div>

      <!-- 7. DC/AC Protection (ACDB/DCDB) -->
      <div class="col-md-6 col-lg-4">
        <div class="p-4 bg-white rounded-4 border h-100 shadow-sm">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="feature-icon-wrapper feature-icon-blue mb-0">
              <i class="bi bi-shield-shaded"></i>
            </div>
            <h5 class="fw-bold mb-0">DC/AC Protection</h5>
          </div>
          <p class="text-muted small mb-0">
            IP65 rated DCDB and ACDB distribution boxes with Class-II SPDs and MCBs to protect valuable inverters and home appliances from lightning and surges.
          </p>
        </div>
      </div>

      <!-- 8. Solar Cables -->
      <div class="col-md-6 col-lg-4">
        <div class="p-4 bg-white rounded-4 border h-100 shadow-sm">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="feature-icon-wrapper feature-icon-navy mb-0">
              <i class="bi bi-bezier2"></i>
            </div>
            <h5 class="fw-bold mb-0">Solar Cables</h5>
          </div>
          <p class="text-muted small mb-0">
            1500V DC cross-linked XLPO cables with electrolytic tinned copper conductors ensuring zero oxidation and 25-year UV weathering protection.
          </p>
        </div>
      </div>

      <!-- 9. MC4 Connectors -->
      <div class="col-md-6 col-lg-4">
        <div class="p-4 bg-white rounded-4 border h-100 shadow-sm">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="feature-icon-wrapper feature-icon-green mb-0">
              <i class="bi bi-plug-fill"></i>
            </div>
            <h5 class="fw-bold mb-0">MC4 Connectors</h5>
          </div>
          <p class="text-muted small mb-0">
            Precision snap-lock IP68 waterproof connectors preventing moisture ingress, contact resistance build-up, and arcing.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SOLAR SAVINGS CALCULATOR & CTA
     ========================================================================== -->
<section class="py-5" style="background: #FFFFFF;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="cta-banner-solar">
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark fw-bold px-3 py-2 mb-3">
            <i class="bi bi-calculator me-1"></i> FREE SITE SURVEY &amp; ROI ESTIMATE
          </span>
          <h2 class="h1 text-white fw-bold mb-3">
            Ready to Slash Your Electricity Bills by Up to 90%?
          </h2>
          <p class="text-light-50 lead mb-4">
            Connect with a Fuzurra certified solar engineer today for a free rooftop shadow analysis, customized 3D design, and transparent pricing.
          </p>
          <div class="d-flex flex-wrap gap-3">
            <button type="button" class="btn btn-primary-glow" data-bs-toggle="modal" data-bs-target="#quoteModal" data-category="Solar Solutions (Rooftop / Off-Grid / Hybrid)">
              <i class="bi bi-lightning-charge-fill me-1"></i> Get Your Solar System Quote
            </button>
            <a href="<?php echo WA_LINK_DEFAULT; ?>" target="_blank" class="btn btn-secondary-glass">
              <i class="bi bi-whatsapp me-1"></i> Chat with Solar Expert
            </a>
          </div>
        </div>

        <div class="col-lg-4 text-center">
          <div class="p-4 bg-dark bg-opacity-60 rounded-4 border border-secondary">
            <div class="display-5 text-warning fw-bold mb-1">3–4 Yrs</div>
            <div class="text-white fw-bold mb-2">Average Payback Period</div>
            <p class="text-light-50 small mb-0">
              Enjoy 20+ years of virtually free green electricity following full capital recovery.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
