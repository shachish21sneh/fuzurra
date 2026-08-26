<?php
require_once __DIR__ . '/includes/config.php';

function getPageMeta() {
  return renderPageMeta(
    'Battery Solutions - Tall Tubular Lead Acid vs Smart Lithium LiFePO4',
    'Explore Fuzurra Industries advanced energy storage: Heavy Duty Tall Tubular Lead Acid Batteries and next-gen LiFePO4 Wall-Mounted Lithium Batteries with full comparison and sizing calculator.'
  );
}

include __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     HERO BANNER
     ========================================================================== -->
<section class="py-5 text-white position-relative" style="background: linear-gradient(135deg, #070D1E 0%, #1E293B 50%, #065F46 100%);">
  <div class="container-fluid px-lg-5 py-3 position-relative" style="z-index: 2;">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="index.php" class="text-light-50">Home</a></li>
            <li class="breadcrumb-item active text-warning" aria-current="page">Battery Solutions</li>
          </ol>
        </nav>
        <span class="badge bg-warning text-dark fw-bold px-3 py-1 mb-2">NEXT-GEN ENERGY STORAGE</span>
        <h1 class="display-5 fw-bold text-white mb-3">
          Advanced Battery Solutions for Solar &amp; Power Backup
        </h1>
        <p class="lead text-light-50 mb-4">
          Whether you need the time-tested ruggedness of <strong>Heavy-Duty Tall Tubular Lead Acid</strong> or the ultra-fast compact efficiency of <strong>LiFePO4 Lithium</strong>, Fuzurra delivers uncompromised reliability.
        </p>
        <div class="d-flex flex-wrap gap-3">
          <button type="button" class="btn btn-primary-glow" data-bs-toggle="modal" data-bs-target="#quoteModal" data-category="Lithium Battery Storage (LiFePO4)">
            <i class="bi bi-battery-charging me-1"></i> Find the Right Battery for Your System
          </button>
          <a href="#comparisonTableSection" class="btn btn-secondary-glass">
            <i class="bi bi-table me-1"></i> Compare Lead Acid vs Lithium
          </a>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="row g-3">
          <div class="col-6">
            <div class="rounded-4 overflow-hidden shadow-lg border border-white">
              <img src="assets/images/products/wallmount-lithium-battery.png?v=<?php echo file_exists(__DIR__ . '/assets/images/products/wallmount-lithium-battery.png') ? filemtime(__DIR__ . '/assets/images/products/wallmount-lithium-battery.png') : '2.0'; ?>" alt="FUZURRA Wall Mount Lithium Battery">
            </div>
          </div>
          <div class="col-6">
            <div class="rounded-4 overflow-hidden shadow-lg border border-white">
              <img src="assets/images/products/erickshaw-battery.png?v=<?php echo file_exists(__DIR__ . '/assets/images/products/erickshaw-battery.png') ? filemtime(__DIR__ . '/assets/images/products/erickshaw-battery.png') : '2.0'; ?>" alt="FUZURRA E-Rickshaw LiFePO4 Battery">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     DEEP DIVE: LEAD ACID, WALL LITHIUM & E-RICKSHAW BATTERIES
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container-fluid px-lg-5 py-4">
    
    <!-- 1. Lead Acid Section -->
    <div class="row align-items-center g-5 mb-5 pb-5 border-bottom">
      <div class="col-lg-5">
        <div class="rounded-4 overflow-hidden border shadow-sm p-4 bg-light text-center">
          <img src="assets/images/products/tall-tubular-battery.jpg" alt="Tall Tubular Lead Acid Battery" class="mx-auto" style="max-height: 280px;">
          <div class="mt-3 d-flex justify-content-center gap-2">
            <span class="badge bg-danger">Heavy Duty HADI Spine</span>
            <span class="badge bg-dark">150Ah - 250Ah</span>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <span class="section-tag" style="color: #DC2626;">Proven Endurance</span>
        <h2 class="section-title">Heavy-Duty Tall Tubular Lead Acid Batteries</h2>
        <p class="text-muted mb-3">
          Fuzurra’s Tall Tubular Lead Acid batteries are engineered with high-pressure die-cast spine alloy grids (HADI machine) to withstand deep daily cyclic discharges and extreme Indian summer temperatures.
        </p>
        <h5 class="fw-bold text-dark mt-4 mb-2">Key Applications:</h5>
        <div class="row g-3 mb-4">
          <div class="col-sm-6">
            <div class="p-3 bg-light rounded-3 border d-flex align-items-center gap-3">
              <i class="bi bi-house-door-fill text-danger fs-3"></i>
              <div>
                <strong class="d-block text-dark">Home UPS Systems</strong>
                <span class="text-muted small">Silent power during residential cuts</span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 bg-light rounded-3 border d-flex align-items-center gap-3">
              <i class="bi bi-cpu-fill text-danger fs-3"></i>
              <div>
                <strong class="d-block text-dark">Heavy Inverter Setups</strong>
                <span class="text-muted small">Supports refrigerators &amp; motor loads</span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 bg-light rounded-3 border d-flex align-items-center gap-3">
              <i class="bi bi-shield-shaded text-danger fs-3"></i>
              <div>
                <strong class="d-block text-dark">Commercial Backup</strong>
                <span class="text-muted small">Offices, clinics, and shops</span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 bg-light rounded-3 border d-flex align-items-center gap-3">
              <i class="bi bi-sun-fill text-danger fs-3"></i>
              <div>
                <strong class="d-block text-dark">Off-Grid Solar Systems</strong>
                <span class="text-muted small">Deep discharge energy bank</span>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-outline-danger rounded-pill px-4 fw-bold" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Tall Tubular Lead Acid Battery" data-category="Lead Acid Tubular Battery &amp; UPS">
          Enquire for Tall Tubular Battery
        </button>
      </div>
    </div>

    <!-- 2. Wall Mount Lithium Batteries Section -->
    <div class="row align-items-center g-5 mb-5 pb-5 border-bottom">
      <div class="col-lg-7 order-2 order-lg-1">
        <span class="section-tag" style="color: #059669;">Next-Generation Technology</span>
        <h2 class="section-title">Wall Mount Lithium Battery (51.2V 100AH)</h2>
        <p class="text-muted mb-3">
          Fuzurra’s 51.2V 100Ah Lithium Iron Phosphate (LiFePO4) wall-mounted smart batteries represent the pinnacle of modern energy storage. Safe &amp; reliable, high energy density, 6000+ life cycles, and built-in Smart BMS protection.
        </p>
        <h5 class="fw-bold text-dark mt-4 mb-2">Key Benefits:</h5>
        <div class="row g-3 mb-4">
          <div class="col-sm-6">
            <div class="p-3 bg-light rounded-3 border">
              <strong class="d-block text-success mb-1"><i class="bi bi-hourglass-split me-1"></i> Long Life (6000+ Cycles)</strong>
              <span class="text-muted small">Lasts 10+ years without performance degradation or memory effect.</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 bg-light rounded-3 border">
              <strong class="d-block text-success mb-1"><i class="bi bi-shield-check me-1"></i> Smart Active BMS</strong>
              <span class="text-muted small">Overvoltage, temperature cutoff, and smart cell balancing.</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 bg-light rounded-3 border">
              <strong class="d-block text-success mb-1"><i class="bi bi-bounding-box-circles me-1"></i> Compact Wall-Mount Design</strong>
              <span class="text-muted small">70% lighter and occupies 75% less footprint than lead acid banks.</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 bg-light rounded-3 border">
              <strong class="d-block text-success mb-1"><i class="bi bi-lightning-charge-fill me-1"></i> 2-Hour Ultra-Fast Charging</strong>
              <span class="text-muted small">Accepts high charging current; fully charged in just 2 hours.</span>
            </div>
          </div>
        </div>
        <div class="d-flex flex-wrap gap-3">
          <button type="button" class="btn btn-primary-glow" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Wall Mount Lithium Battery 51.2V 100AH" data-category="Lithium Battery Storage (LiFePO4)">
            Get Wall Lithium Pricing
          </button>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2">
        <div class="rounded-4 overflow-hidden border shadow-sm p-4 bg-light text-center">
          <img src="assets/images/products/wallmount-lithium-battery.png?v=<?php echo file_exists(__DIR__ . '/assets/images/products/wallmount-lithium-battery.png') ? filemtime(__DIR__ . '/assets/images/products/wallmount-lithium-battery.png') : '2.0'; ?>" alt="FUZURRA Wall Mount Lithium Battery 51.2V 100AH LiFePO4" class="mx-auto img-fluid" style="max-height: 320px; object-fit: contain;">
          <div class="mt-3 d-flex justify-content-center gap-2">
            <span class="badge bg-success">Smart Active BMS</span>
            <span class="badge bg-dark">51.2V 100Ah (5.12 kWh)</span>
          </div>
        </div>
      </div>
    </div>

    <!-- 3. E-Rickshaw & Heavy Storage LiFePO4 Section -->
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <div class="rounded-4 overflow-hidden border shadow-sm p-4 bg-light text-center">
          <img src="assets/images/products/erickshaw-battery.png?v=<?php echo file_exists(__DIR__ . '/assets/images/products/erickshaw-battery.png') ? filemtime(__DIR__ . '/assets/images/products/erickshaw-battery.png') : '2.0'; ?>" alt="FUZURRA E-Rickshaw LiFePO4 Battery Xtreme Power" class="mx-auto img-fluid" style="max-height: 320px; object-fit: contain;">
          <div class="mt-3 d-flex justify-content-center gap-2">
            <span class="badge bg-primary">Xtreme Power Storage</span>
            <span class="badge bg-dark">3 Years Warranty</span>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <span class="section-tag" style="color: #0284C7;">Drive Power. Drive The Future.</span>
        <h2 class="section-title">E-Rickshaw &amp; Heavy EV LiFePO4 Battery</h2>
        <p class="text-muted mb-3">
          Engineered specifically for Indian road conditions and intensive commercial runs. Fuzurra’s Xtreme Power LiFePO4 batteries deliver ultra-long mileage per charge, fast recharge turnaround, and rugged vibration resistance.
        </p>
        <h5 class="fw-bold text-dark mt-4 mb-2">Key Advantages:</h5>
        <div class="row g-3 mb-4">
          <div class="col-sm-6">
            <div class="p-3 bg-light rounded-3 border">
              <strong class="d-block text-primary mb-1"><i class="bi bi-speedometer me-1"></i> High Mileage &amp; Capacity</strong>
              <span class="text-muted small">Optimized energy density ensures more revenue kilometers per full charge.</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 bg-light rounded-3 border">
              <strong class="d-block text-primary mb-1"><i class="bi bi-battery-charging me-1"></i> Fast Rapid Charging</strong>
              <span class="text-muted small">Significantly reduces daytime charging downtime for commercial drivers.</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 bg-light rounded-3 border">
              <strong class="d-block text-primary mb-1"><i class="bi bi-cpu-fill me-1"></i> Advanced Multi-BMS Safety</strong>
              <span class="text-muted small">Guards against thermal overload, overcurrent, and voltage imbalance.</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 bg-light rounded-3 border">
              <strong class="d-block text-primary mb-1"><i class="bi bi-shield-fill-check me-1"></i> Made for Indian Roads</strong>
              <span class="text-muted small">Reinforced enclosure with superior shock and vibration resistance.</span>
            </div>
          </div>
        </div>
        <div class="d-flex flex-wrap gap-3">
          <button type="button" class="btn btn-primary-glow" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="E-Rickshaw LiFePO4 Battery" data-category="Lithium Battery Storage (LiFePO4)">
            Get E-Rickshaw Battery Quote
          </button>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ==========================================================================
     COMPARISON TABLE: LEAD ACID VS LITHIUM
     ========================================================================== -->
<section class="py-5" id="comparisonTableSection" style="background: #F8FAFC;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="section-tag justify-content-center">Direct Comparison</span>
      <h2 class="section-title">Lead Acid vs. Lithium Battery Comparison</h2>
      <p class="section-lead mx-auto">
        Review technical parameters side-by-side to choose the ideal battery technology for your specific application and budget.
      </p>
    </div>

    <div class="comparison-table-wrapper">
      <div class="table-responsive">
        <table class="comparison-table">
          <thead>
            <tr>
              <th style="width: 25%;">Feature / Parameter</th>
              <th style="width: 37%;">Tall Tubular Lead Acid Battery</th>
              <th class="col-lithium" style="width: 38%;"><i class="bi bi-star-fill text-warning me-1"></i> LiFePO4 Lithium Battery</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="fw-bold text-dark">Cycle Life (@ 80% DoD)</td>
              <td>1,200 – 1,800 Cycles (~3 to 5 Years)</td>
              <td class="cell-lithium fw-bold text-success">6,000+ Cycles (10 to 15 Years)</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark">Usable Capacity (Depth of Discharge)</td>
              <td><span class="badge-lead">Up to 70% Max DoD</span></td>
              <td class="cell-lithium"><span class="badge-lithium">Up to 95% – 100% Usable DoD</span></td>
            </tr>
            <tr>
              <td class="fw-bold text-dark">Round-Trip Efficiency</td>
              <td>75% – 80% (Energy lost as heat)</td>
              <td class="cell-lithium fw-bold text-success">&gt; 95% Ultra High Efficiency</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark">Charging Speed</td>
              <td>8 – 10 Hours (Slow multi-stage)</td>
              <td class="cell-lithium fw-bold text-success">2 – 3 Hours Fast Rapid Charge</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark">Maintenance &amp; Water Top-up</td>
              <td>Requires regular distilled water topping every 3-6 months</td>
              <td class="cell-lithium fw-bold text-success">100% Zero Maintenance (Sealed &amp; Smart)</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark">Physical Size &amp; Weight</td>
              <td>Heavy (~60 kg for 150Ah), occupies floor space</td>
              <td class="cell-lithium fw-bold text-success">Ultra Compact &amp; Lightweight (~42 kg for 5kWh), Wall-Mountable</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark">Safety &amp; BMS Protection</td>
              <td>Basic external fuses &amp; acid safety vents</td>
              <td class="cell-lithium fw-bold text-success">Integrated Smart Micro-BMS (Overvoltage, Short circuit &amp; Thermal Cut-off)</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark">Initial Upfront Cost</td>
              <td><span class="badge bg-secondary">Lower Upfront Investment</span></td>
              <td class="cell-lithium"><span class="badge bg-success">Higher Upfront, Lowest 10-Yr Cost of Ownership</span></td>
            </tr>
            <tr>
              <td class="fw-bold text-dark">Warranty</td>
              <td>36 to 60 Months</td>
              <td class="cell-lithium fw-bold text-success">5 to 10 Years Comprehensive</td>
            </tr>
            <tr>
              <td class="fw-bold text-dark">Recommended Best For</td>
              <td>Budget-conscious homes, standard UPS, basic solar backup</td>
              <td class="cell-lithium fw-bold text-success">Modern Villas, Hybrid Solar Plants, Fast-Charge Demand, Smart Homes</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     INTERACTIVE BATTERY SIZING CALCULATOR
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container-fluid px-lg-5 py-4">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <span class="section-tag">Battery Sizing Helper</span>
        <h2 class="section-title">Calculate Your Required Battery Capacity</h2>
        <p class="text-muted mb-4">
          Select the appliances you plan to run during power outages and desired backup duration to see recommended battery capacity.
        </p>

        <div class="p-4 bg-light rounded-4 border">
          <div class="mb-3">
            <label class="form-label-custom d-flex justify-content-between">
              <span>Ceiling Fans (70W each):</span>
              <span class="badge bg-dark">Qty</span>
            </label>
            <input type="number" id="battFansCount" class="form-control form-control-custom" min="0" max="10" value="3">
          </div>

          <div class="mb-3">
            <label class="form-label-custom d-flex justify-content-between">
              <span>LED Lights / Bulbs (15W each):</span>
              <span class="badge bg-dark">Qty</span>
            </label>
            <input type="number" id="battLightsCount" class="form-control form-control-custom" min="0" max="20" value="6">
          </div>

          <div class="mb-3">
            <label class="form-label-custom d-flex justify-content-between">
              <span>Smart TV / Computers (120W each):</span>
              <span class="badge bg-dark">Qty</span>
            </label>
            <input type="number" id="battTvCount" class="form-control form-control-custom" min="0" max="5" value="1">
          </div>

          <div class="mb-3">
            <label class="form-label-custom d-flex justify-content-between">
              <span>Refrigerator / Cooler (150W avg):</span>
              <span class="badge bg-dark">Qty</span>
            </label>
            <input type="number" id="battFridgeCount" class="form-control form-control-custom" min="0" max="3" value="1">
          </div>

          <div class="mb-2">
            <label class="form-label-custom d-flex justify-content-between align-items-center">
              <span>Desired Backup Duration:</span>
              <span id="battHoursDisplay" class="fw-bold text-success fs-5">4 Hours</span>
            </label>
            <input type="range" class="calc-range-slider" id="battHoursSlider" min="1" max="12" step="0.5" value="4">
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="calc-result-box">
          <h4 class="font-heading text-white mb-4 d-flex align-items-center gap-2">
            <i class="bi bi-battery-charging text-warning"></i> Recommended Battery Sizing
          </h4>

          <div class="p-3 mb-4 rounded-3" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
            <div class="text-light-50 small mb-1">Total Running Load:</div>
            <div class="calc-metric-val" id="battTotalWattage">570 W</div>
          </div>

          <div class="row g-3">
            <div class="col-md-6">
              <div class="p-3 bg-dark bg-opacity-75 rounded-3 border border-secondary h-100">
                <span class="badge bg-danger mb-2">Lead Acid Recommendation</span>
                <h6 class="text-white fw-bold" id="battLeadAcidRec">1x 12V 200Ah / 220Ah Tall Tubular</h6>
                <p class="small text-light-50 mb-0">Robust, economical choice for standard home backup.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="p-3 bg-dark bg-opacity-75 rounded-3 border border-success h-100">
                <span class="badge bg-success mb-2">Lithium Recommendation</span>
                <h6 class="text-white fw-bold" id="battLithiumRec">2.5 kWh Wall-Mounted LiFePO4</h6>
                <p class="small text-light-50 mb-0">Fast 2-hr recharge, 10-year life, and wall-mounted space saving.</p>
              </div>
            </div>
          </div>

          <div class="mt-4 pt-3 border-top border-secondary text-center">
            <button type="button" class="btn btn-primary-glow px-4" data-bs-toggle="modal" data-bs-target="#quoteModal" data-category="Lithium Battery Storage (LiFePO4)">
              <i class="bi bi-bag-check-fill me-1"></i> Order / Enquire for Recommended Battery
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
