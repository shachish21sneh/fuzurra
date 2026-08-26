<?php
require_once __DIR__ . '/includes/config.php';

function getPageMeta() {
  return renderPageMeta(
    'Powering a Brighter & Smarter Future',
    'Fuzurra Industries Pvt. Ltd. provides cutting-edge Solar Energy Solutions, Inverters, Home UPS, Tall Tubular Batteries, Lithium Batteries, and Home Appliances.'
  );
}

include __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     HERO SECTION
     ========================================================================== -->
<section class="hero-section position-relative">
  <div class="hero-glow-1"></div>
  <div class="hero-glow-2"></div>

  <div class="container-fluid px-lg-5 position-relative" style="z-index: 2;">
    <div class="row align-items-center g-5">
      <!-- Left Hero Text -->
      <div class="col-lg-6">
        <div class="hero-badge">
          <i class="bi bi-shield-check text-warning"></i> Certified Clean Energy & Power Backup
        </div>
        
        <h1 class="hero-title">
          Powering a <span class="gradient-text">Brighter &amp; Smarter</span> Future
        </h1>
        
        <div class="hero-subtitle-wrapper mb-4">
          <p class="hero-subtitle-desc" id="heroSubtitlePara">
            Complete Power Backup &amp; Home Appliance Solutions from <strong>Fuzurra Industries Pvt. Ltd.</strong> — Empowering homes, businesses, and industrial facilities with reliable, energy-efficient, and future-ready solutions, including solar inverters, lithium and lead-acid batteries, battery trolleys, home UPS systems<span id="heroDots">...</span><span id="heroMoreText" style="display: none;">, domestic and commercial lighting solutions, air coolers, water heater, led tv , mobile , earbuds, and other electrical and electronic products. We are committed to delivering quality products, dependable performance, and complete energy and electrical solutions tailored to residential, commercial, and industrial requirements.</span>
            <button type="button" class="hero-readmore-pill" id="heroReadMoreBtn" onclick="toggleHeroSubtitleText(this)" aria-expanded="false">
              <span class="read-more-label">Read More</span>
              <i class="bi bi-chevron-down ms-1 icon-arrow"></i>
            </button>
          </p>
        </div>

        <!-- CTA Buttons -->
        <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
          <button type="button" class="btn-primary-glow" data-bs-toggle="modal" data-bs-target="#quoteModal">
            <i class="bi bi-file-earmark-text-fill"></i> Get a Free Quote
          </button>
          <a href="products.php" class="btn-secondary-glass">
            <i class="bi bi-grid-fill"></i> Explore Products
          </a>
        </div>

        <!-- Trust Badges Bar -->
        <div class="d-flex flex-wrap align-items-center gap-4 pt-3 border-top border-secondary border-opacity-50">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-patch-check-fill text-success fs-5"></i>
            <span class="small text-light">Tier-1 Solar Efficiency</span>
          </div>
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-lightning-charge-fill text-warning fs-5"></i>
            <span class="small text-light">Smart Hybrid Inverters</span>
          </div>
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-battery-charging text-info fs-5"></i>
            <span class="small text-light">LiFePO4 &amp; Tall Tubular</span>
          </div>
        </div>
      </div>

      <!-- Right Hero Visual Card -->
      <div class="col-lg-6">
        <div class="hero-visual-card">
          <img src="assets/images/hero-solar.jpg" alt="Fuzurra Rooftop Solar and Energy Installation" loading="eager">
          
          <!-- Floating Metrics Overlay -->
          <div class="hero-floating-stat">
            <div class="hero-stat-item">
              <div class="hero-stat-number">25+</div>
              <div class="hero-stat-label">Years Solar Life</div>
            </div>
            <div class="hero-stat-item border-start border-secondary ps-3">
              <div class="hero-stat-number">98.6%</div>
              <div class="hero-stat-label">Peak Efficiency</div>
            </div>
            <div class="hero-stat-item border-start border-secondary ps-3">
              <div class="hero-stat-number">100%</div>
              <div class="hero-stat-label">Clean Energy</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     KEY CATEGORIES SECTION
     ========================================================================== -->
<section class="py-5" style="background: #FFFFFF;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="section-tag justify-content-center">Complete Product Portfolio</span>
      <h2 class="section-title">Engineered for Maximum Power &amp; Reliability</h2>
      <p class="section-lead mx-auto">
        Discover our integrated product portfolio spanning high-efficiency solar systems, uninterrupted power backup, and intelligent home appliances.
      </p>
    </div>

    <div class="row g-4">
      <!-- Category 1: Solar Solutions -->
      <div class="col-lg-4 col-md-6">
        <div class="category-card">
          <div class="category-card-img-wrapper">
            <img src="assets/images/products/solar-panel-module.jpg" alt="Solar Solutions by Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-sun-fill text-warning me-1"></i> Solar Solutions</span>
          </div>
          <div class="category-card-body">
            <h3 class="h4 mb-2">Solar Energy Systems</h3>
            <p class="text-muted small mb-3">
              End-to-end solar generation systems engineered for high performance under all weather conditions.
            </p>
            <div class="category-pill-list">
              <span class="category-subpill">Solar Panels</span>
              <span class="category-subpill">Hybrid Inverters</span>
              <span class="category-subpill">Solar Cables</span>
              <span class="category-subpill">ACDB / DCDB</span>
              <span class="category-subpill">MC4 Connectors</span>
              <span class="category-subpill">Mounting Structures</span>
            </div>
            <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
              <a href="solar-solutions.php" class="text-success fw-bold small">
                Learn Solutions <i class="bi bi-arrow-right"></i>
              </a>
              <a href="products.php?cat=solar" class="btn btn-sm btn-outline-dark rounded-pill px-3">
                View Products
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Category 2: Power Backup -->
      <div class="col-lg-4 col-md-6">
        <div class="category-card">
          <div class="category-card-img-wrapper">
            <img src="assets/images/products/lithium-battery.jpg" alt="Power Backup and Batteries by Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-battery-charging text-success me-1"></i> Power Backup</span>
          </div>
          <div class="category-card-body">
            <h3 class="h4 mb-2">Power Backup &amp; Storage</h3>
            <p class="text-muted small mb-3">
              Heavy-duty energy storage solutions delivering seamless, uninterrupted power during outages.
            </p>
            <div class="category-pill-list">
              <span class="category-subpill">Home UPS</span>
              <span class="category-subpill">Pure Sine Inverters</span>
              <span class="category-subpill">Tall Tubular Batteries</span>
              <span class="category-subpill">Lithium LiFePO4</span>
              <span class="category-subpill">Smart BMS</span>
            </div>
            <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
              <a href="battery-solutions.php" class="text-success fw-bold small">
                Compare Batteries <i class="bi bi-arrow-right"></i>
              </a>
              <a href="products.php?cat=power" class="btn btn-sm btn-outline-dark rounded-pill px-3">
                View Products
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Category 3: Home Appliances -->
      <div class="col-lg-4 col-md-6">
        <div class="category-card">
          <div class="category-card-img-wrapper">
            <img src="assets/images/products/smart-inverter-ac.jpg" alt="Home Appliances by Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-tv-fill text-info me-1"></i> Smart Appliances</span>
          </div>
          <div class="category-card-body">
            <h3 class="h4 mb-2">Energy Efficient Appliances</h3>
            <p class="text-muted small mb-3">
              Next-generation lifestyle electronics built for low power consumption and modern smart homes.
            </p>
            <div class="category-pill-list">
              <span class="category-subpill">Smart LED TVs</span>
              <span class="category-subpill">Inverter Air Conditioners</span>
              <span class="category-subpill">BLDC Smart Fans</span>
              <span class="category-subpill">Small Appliances</span>
            </div>
            <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
              <a href="products.php?cat=appliances" class="text-success fw-bold small">
                Explore Appliances <i class="bi bi-arrow-right"></i>
              </a>
              <a href="products.php?cat=appliances" class="btn btn-sm btn-outline-dark rounded-pill px-3">
                View Products
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     INTERACTIVE SOLAR SYSTEM ARCHITECTURE PREVIEW
     ========================================================================== -->
<section class="py-5" style="background: #0B132B; color: #FFFFFF;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="row align-items-center mb-4">
      <div class="col-lg-7">
        <span class="section-tag" style="color: #34D399;">System Engineering</span>
        <h2 class="section-title text-white mb-2">How a Complete Solar System Operates</h2>
        <p class="text-light-50 mb-0">
          From photon generation on the roof to protected DC conversion and clean 230V AC home power.
        </p>
      </div>
      <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">
        <a href="solar-solutions.php" class="btn btn-outline-light rounded-pill px-4">
          <i class="bi bi-diagram-3-fill text-warning me-2"></i> Explore Solar Architecture
        </a>
      </div>
    </div>

    <!-- Solar Flow Interactive Diagram Box -->
    <div class="solar-flow-wrapper text-center my-4">
      <img src="assets/images/diagrams/solar-system-flow.svg" alt="Complete Solar System Flow Diagram - Fuzurra Industries" class="mx-auto" style="max-width: 100%; height: auto;">
      
      <!-- Quick Stage Explanations -->
      <div class="row g-3 mt-4 text-start" id="solarFlowCards">
        <div class="col-md">
          <div class="flow-step-card" data-step="1">
            <div class="flow-step-number">1</div>
            <h6 class="text-white fw-bold mb-1">Solar PV Panel</h6>
            <p class="small text-light-50 mb-0">Generates clean Direct Current (DC) from sunlight.</p>
          </div>
        </div>
        <div class="col-md">
          <div class="flow-step-card" data-step="2">
            <div class="flow-step-number">2</div>
            <h6 class="text-white fw-bold mb-1">DCDB Box</h6>
            <p class="small text-light-50 mb-0">Surge arrestors &amp; DC fuses protect against voltage spikes.</p>
          </div>
        </div>
        <div class="col-md">
          <div class="flow-step-card active-pulse" data-step="3">
            <div class="flow-step-number">3</div>
            <h6 class="text-white fw-bold mb-1">Hybrid Inverter</h6>
            <p class="small text-light-50 mb-0">Converts DC into clean Alternating Current (AC) with MPPT.</p>
          </div>
        </div>
        <div class="col-md">
          <div class="flow-step-card" data-step="4">
            <div class="flow-step-number">4</div>
            <h6 class="text-white fw-bold mb-1">ACDB Box</h6>
            <p class="small text-light-50 mb-0">Distributes safe AC power and guards grid connection.</p>
          </div>
        </div>
        <div class="col-md">
          <div class="flow-step-card" data-step="5">
            <div class="flow-step-number">5</div>
            <h6 class="text-white fw-bold mb-1">Home &amp; Business</h6>
            <p class="small text-light-50 mb-0">Zero-electricity bill powering lights, ACs, and appliances.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     PM SURYA GHAR SCHEME HIGHLIGHT BANNER
     ========================================================================== -->
<section class="py-5" style="background: linear-gradient(135deg, #ECFDF5 0%, #FFFBEB 100%);">
  <div class="container-fluid px-lg-5 py-3">
    <div class="row align-items-center g-4">
      <div class="col-lg-7">
        <span class="badge bg-warning text-dark px-3 py-2 fw-bold mb-3">
          <i class="bi bi-star-fill me-1"></i> GOVERNMENT SUBSIDY SCHEME
        </span>
        <h2 class="h1 fw-bold mb-3" style="color: #064E3B;">
          PM Surya Ghar: Muft Bijli Yojana
        </h2>
        <p class="lead text-dark mb-4">
          Avail direct bank transfer (DBT) government subsidy up to <strong>₹78,000/-</strong> and get up to <strong>300 units of free electricity every month</strong> for your home.
        </p>
        <div class="row g-3 mb-4">
          <div class="col-sm-4">
            <div class="p-3 bg-white rounded-3 shadow-sm border border-success border-opacity-25">
              <div class="text-muted small">1 kW System</div>
              <div class="fw-bold fs-5 text-success">₹30,000 Subsidy</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="p-3 bg-white rounded-3 shadow-sm border border-success border-opacity-25">
              <div class="text-muted small">2 kW System</div>
              <div class="fw-bold fs-5 text-success">₹60,000 Subsidy</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="p-3 bg-white rounded-3 shadow-sm border border-success border-opacity-25">
              <div class="text-muted small">3 kW &amp; Above</div>
              <div class="fw-bold fs-5 text-success">₹78,000 Subsidy</div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-wrap gap-3">
          <a href="pm-surya-ghar.php" class="btn btn-primary-glow">
            <i class="bi bi-calculator me-1"></i> Calculate Your Subsidy &amp; Savings
          </a>
          <button type="button" class="btn btn-outline-dark rounded-pill px-4 fw-bold" data-bs-toggle="modal" data-bs-target="#quoteModal" data-category="PM Surya Ghar: Muft Bijli Scheme">
            Check Feasibility
          </button>
        </div>
      </div>
      
      <div class="col-lg-5">
        <div class="rounded-4 overflow-hidden shadow-lg border border-2 border-white">
          <img src="assets/images/pm-surya-ghar.jpg" alt="PM Surya Ghar Residential Rooftop Installation">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     WHY CHOOSE US (8 PILLARS FROM SPEC)
     ========================================================================== -->
<section class="py-5 why-us-section">
  <div class="container-fluid px-lg-5 py-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="section-tag justify-content-center">Our Core Strengths</span>
      <h2 class="section-title">Why Choose Fuzurra Industries</h2>
      <p class="section-lead mx-auto">
        Built on a foundation of engineering excellence, customer transparency, and enduring reliability.
      </p>
    </div>

    <div class="row g-4">
      <!-- 1. Quality Products -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-green">
            <i class="bi bi-shield-check"></i>
          </div>
          <h5 class="fw-bold mb-2">Quality Products</h5>
          <p class="text-muted small mb-0">
            Engineered with Tier-1 solar cells, pure copper windings, and high-purity lead/lithium chemistry.
          </p>
        </div>
      </div>

      <!-- 2. Trusted Service -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-gold">
            <i class="bi bi-hand-thumbs-up-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Trusted Service</h5>
          <p class="text-muted small mb-0">
            Dedicated service technicians offering timely on-site audits, rapid installation, and prompt troubleshooting.
          </p>
        </div>
      </div>

      <!-- 3. Reliable Technology -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-blue">
            <i class="bi bi-cpu-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Reliable Technology</h5>
          <p class="text-muted small mb-0">
            Microcontroller-driven MPPT tracking, smart Battery Management Systems (BMS), and surge protection.
          </p>
        </div>
      </div>

      <!-- 4. Competitive Pricing -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-navy">
            <i class="bi bi-tags-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Competitive Pricing</h5>
          <p class="text-muted small mb-0">
            Direct-from-manufacturer economics delivering maximum value and accelerated Return on Investment.
          </p>
        </div>
      </div>

      <!-- 5. Professional Support -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-green">
            <i class="bi bi-headset"></i>
          </div>
          <h5 class="fw-bold mb-2">Professional Support</h5>
          <p class="text-muted small mb-0">
            Trained technical helpline and certified solar engineers available to assist before and after commissioning.
          </p>
        </div>
      </div>

      <!-- 6. Customer Satisfaction -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-gold">
            <i class="bi bi-emoji-smile-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Customer Satisfaction</h5>
          <p class="text-muted small mb-0">
            Transparent warranties, zero hidden costs, and custom solutions tailored precisely to energy demands.
          </p>
        </div>
      </div>

      <!-- 7. Dealer Network -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-blue">
            <i class="bi bi-diagram-3-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Dealer Network</h5>
          <p class="text-muted small mb-0">
            Growing nationwide presence of channel partners, distributors, and authorized service touchpoints.
          </p>
        </div>
      </div>

      <!-- 8. Complete Solar Solutions -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-box">
          <div class="feature-icon-wrapper feature-icon-navy">
            <i class="bi bi-sun-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Complete Solar Solutions</h5>
          <p class="text-muted small mb-0">
            From panels, inverters, cables, and ACDB/DCDB to net metering coordination and final commissioning.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     INTERACTIVE SOLAR SAVINGS CALCULATOR SECTION
     ========================================================================== -->
<section class="py-5" style="background: #F1F5F9;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <span class="section-tag">Instant Financial Estimation</span>
        <h2 class="section-title">Calculate Your Solar Savings</h2>
        <p class="text-muted mb-4">
          Adjust your current monthly electricity bill to see the recommended solar system size, rooftop area needed, annual electricity savings, and 25-year financial benefit.
        </p>
        
        <div class="p-4 bg-white rounded-4 border shadow-sm mb-4">
          <label class="fw-bold text-dark mb-2 d-flex justify-content-between align-items-center">
            <span>Your Monthly Electricity Bill:</span>
            <span id="solarBillDisplay" class="fs-4 fw-extrabold text-success">₹3,500</span>
          </label>
          <input type="range" class="calc-range-slider" id="solarBillSlider" min="1000" max="40000" step="500" value="3500">
          <div class="d-flex justify-content-between text-muted small">
            <span>₹1,000/mo</span>
            <span>₹20,000/mo</span>
            <span>₹40,000+/mo</span>
          </div>
        </div>

        <button type="button" class="btn btn-primary-glow w-100" data-bs-toggle="modal" data-bs-target="#quoteModal" data-category="Solar Solutions (Rooftop / Off-Grid / Hybrid)">
          <i class="bi bi-file-earmark-check me-2"></i> Get Official System Quotation
        </button>
      </div>

      <div class="col-lg-7">
        <div class="calc-result-box">
          <h4 class="font-heading text-white mb-4 d-flex align-items-center gap-2">
            <i class="bi bi-graph-up-arrow text-warning"></i> Estimated System Benefits
          </h4>
          <div class="row g-4">
            <div class="col-sm-6">
              <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                <div class="text-light-50 small mb-1">Recommended Solar Capacity</div>
                <div class="calc-metric-val" id="calcKwOutput">3.9 kW</div>
                <div class="text-light-50 small mt-1">Roof Area: <strong id="calcAreaOutput" class="text-white">312 sq.ft</strong></div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                <div class="text-light-50 small mb-1">Estimated Annual Savings</div>
                <div class="calc-metric-val text-success" id="calcAnnualSavingsOutput">₹38,640</div>
                <div class="text-light-50 small mt-1">Approx ~92% bill reduction</div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                <div class="text-light-50 small mb-1">25-Year Lifetime Savings</div>
                <div class="calc-metric-val text-warning" id="calcLifetimeSavingsOutput">₹11,10,900</div>
                <div class="text-light-50 small mt-1">Adjusted for tariff escalation</div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);">
                <div class="text-light-50 small mb-1">Carbon (CO2) Offset</div>
                <div class="calc-metric-val text-info" id="calcCo2Output">4.9 Tons/yr</div>
                <div class="text-light-50 small mt-1">Equivalent to planting ~85 trees</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     DEALER & CHANNEL PARTNER CALL TO ACTION
     ========================================================================== -->
<section class="py-5" style="background: #FFFFFF;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="cta-banner-solar">
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark fw-bold px-3 py-2 mb-3">
            <i class="bi bi-briefcase-fill me-1"></i> EXPAND YOUR BUSINESS
          </span>
          <h2 class="h1 text-white fw-bold mb-3">
            Become an Authorized Dealer / Distributor / Channel Partner
          </h2>
          <p class="text-light-50 lead mb-4">
            Partner with Fuzurra Industries Pvt. Ltd. Gain access to premium solar, power backup, and appliance products with attractive margins, territorial exclusivity, and end-to-end marketing &amp; technical training.
          </p>
          <div class="d-flex flex-wrap gap-3">
            <a href="dealer.php" class="btn btn-primary-glow">
              <i class="bi bi-person-plus-fill me-1"></i> Apply for Dealership
            </a>
            <a href="<?php echo WA_LINK_DEFAULT; ?>" target="_blank" class="btn btn-secondary-glass">
              <i class="bi bi-whatsapp me-1"></i> Talk to Channel Manager
            </a>
          </div>
        </div>

        <div class="col-lg-4 text-center">
          <div class="p-4 bg-dark bg-opacity-50 rounded-4 border border-secondary border-opacity-50">
            <i class="bi bi-trophy-fill text-warning fs-1 mb-2 d-inline-block"></i>
            <h5 class="text-white fw-bold">Comprehensive Partner Support</h5>
            <p class="small text-light-50 mb-0">
              Sales enablement, demo units, showroom branding, rapid warranty spares, and certified technical training.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
function toggleHeroSubtitleText(btn) {
  const moreText = document.getElementById('heroMoreText');
  const dots = document.getElementById('heroDots');
  const label = btn.querySelector('.read-more-label');
  
  if (moreText.style.display === 'none' || !moreText.style.display) {
    moreText.style.display = 'inline';
    if (dots) dots.style.display = 'none';
    btn.classList.add('expanded');
    btn.setAttribute('aria-expanded', 'true');
    if (label) label.textContent = 'Read Less';
  } else {
    moreText.style.display = 'none';
    if (dots) dots.style.display = 'inline';
    btn.classList.remove('expanded');
    btn.setAttribute('aria-expanded', 'false');
    if (label) label.textContent = 'Read More';
  }
}
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
