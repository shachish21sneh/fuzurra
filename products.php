<?php
require_once __DIR__ . '/includes/config.php';

function getPageMeta() {
  return renderPageMeta(
    'Products Catalog - Solar Panels, Inverters, Batteries & Appliances',
    'Explore Fuzurra Industries complete product range: Mono PERC Solar Panels, Hybrid Inverters, Tall Tubular & Lithium LiFePO4 Batteries, Cables, ACDB/DCDB, and Smart Home Appliances.'
  );
}

$activeCategory = $_GET['cat'] ?? 'all';

include __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     PAGE BANNER
     ========================================================================== -->
<section class="py-5 bg-dark text-white position-relative" style="background: linear-gradient(135deg, #070D1E 0%, #0B132B 50%, #064E3B 100%);">
  <div class="container-fluid px-lg-5 py-3 position-relative" style="z-index: 2;">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="index.php" class="text-light-50">Home</a></li>
            <li class="breadcrumb-item active text-warning" aria-current="page">Products Catalog</li>
          </ol>
        </nav>
        <h1 class="display-5 fw-bold text-white mb-2">Comprehensive Product Portfolio</h1>
        <p class="lead text-light-50 mb-0">
          Engineered for excellence. High-efficiency solar solutions, rugged power backup systems, and smart home appliances.
        </p>
      </div>
      <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
        <button type="button" class="btn btn-primary-glow" data-bs-toggle="modal" data-bs-target="#quoteModal">
          <i class="bi bi-file-earmark-text-fill me-1"></i> Request Bulk / Custom RFQ
        </button>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     FILTER BAR & SEARCH SECTION
     ========================================================================== -->
<section class="py-4 bg-white border-bottom sticky-top" style="top: 72px; z-index: 1010; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
  <div class="container-fluid px-lg-5">
    <div class="row align-items-center g-3">
      <!-- Category Filter Tabs -->
      <div class="col-lg-8">
        <div class="d-flex flex-wrap gap-2">
          <button type="button" class="product-filter-btn filter-btn <?php echo ($activeCategory === 'all') ? 'active' : ''; ?>" data-filter="all">
            <i class="bi bi-grid-fill me-1"></i> All Products
          </button>
          <button type="button" class="product-filter-btn filter-btn <?php echo ($activeCategory === 'solar') ? 'active' : ''; ?>" data-filter="solar">
            <i class="bi bi-sun-fill text-warning me-1"></i> Solar Products
          </button>
          <button type="button" class="product-filter-btn filter-btn <?php echo ($activeCategory === 'power') ? 'active' : ''; ?>" data-filter="power">
            <i class="bi bi-battery-charging text-success me-1"></i> Power Backup &amp; Batteries
          </button>
          <button type="button" class="product-filter-btn filter-btn <?php echo ($activeCategory === 'appliances') ? 'active' : ''; ?>" data-filter="appliances">
            <i class="bi bi-tv-fill text-info me-1"></i> Home Appliances
          </button>
        </div>
      </div>

      <!-- Live Search Bar -->
      <div class="col-lg-4">
        <div class="input-group">
          <span class="input-group-text bg-light border-end-0"><i class="bi bi-search text-muted"></i></span>
          <input type="text" id="productSearchInput" class="form-control form-control-custom border-start-0" placeholder="Search by name, spec, or component...">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     PRODUCT GRID SECTION
     ========================================================================== -->
<section class="py-5" style="background: #F8FAFC;">
  <div class="container-fluid px-lg-5">
    <div class="row g-4" id="productCatalogGrid">

      <!-- ==========================================
           1. SOLAR PRODUCTS
           ========================================== -->

      <!-- 1.1 Solar Panels -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="solar">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/solar-panel-module.jpg" alt="Mono PERC &amp; Bifacial Solar Panels - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-sun-fill text-warning me-1"></i> Solar PV</span>
            <span class="warranty-badge">25 Years Warranty</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">Mono PERC &amp; Bifacial Solar Panels</h3>
            <p class="product-desc">
              High-power 550Wp–590Wp half-cut multi-busbar solar modules offering superior low-light generation and high temperature resilience.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> Up to 21.8%+ High Module Conversion Efficiency</li>
              <li><i class="bi bi-check-circle-fill"></i> Half-Cut Cell Architecture for Reduced Shading Loss</li>
              <li><i class="bi bi-check-circle-fill"></i> IP68 Junction Box with Split Bypass Diodes</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Power Output:</span> <span class="val">550Wp – 590Wp</span></li>
              <li><span class="label">Cell Type:</span> <span class="val">Mono PERC / N-Type TOPCon</span></li>
              <li><span class="label">Frame:</span> <span class="val">Anodized Aluminum Alloy (Black/Silver)</span></li>
              <li><span class="label">Applications:</span> <span class="val">Residential, Commercial, Industrial Solar</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Mono PERC &amp; Bifacial Solar Panels" data-category="Solar Solutions (Rooftop / Off-Grid / Hybrid)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('Mono PERC & Bifacial Solar Panels'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="Solar Panels">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 1.2 Solar Hybrid Inverters -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="solar">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/solar-hybrid-inverter.jpg" alt="Solar Hybrid Inverter - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-cpu-fill text-success me-1"></i> Hybrid Inverter</span>
            <span class="warranty-badge">5 Years Warranty</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">Intelligent Solar Hybrid Inverters</h3>
            <p class="product-desc">
              Smart MPPT hybrid inverters seamlessly blending solar energy, battery bank storage, and utility grid power with zero transfer lag.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> High Efficiency MPPT Tracker (98.6% Peak)</li>
              <li><i class="bi bi-check-circle-fill"></i> Lithium &amp; Lead Acid Battery Compatibility</li>
              <li><i class="bi bi-check-circle-fill"></i> Smart LCD Screen &amp; WiFi/GPRS Cloud Monitoring</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Capacity Range:</span> <span class="val">3 kW / 5 kW / 10 kW / 15 kW</span></li>
              <li><span class="label">Output Wave:</span> <span class="val">Pure Sine Wave (THD &lt; 3%)</span></li>
              <li><span class="label">Battery Voltage:</span> <span class="val">24V / 48V / High Voltage</span></li>
              <li><span class="label">Applications:</span> <span class="val">Homes, Villas, Hospitals, Telecom Sites</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Solar Hybrid Inverter" data-category="Solar Solutions (Rooftop / Off-Grid / Hybrid)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('Solar Hybrid Inverter'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="Solar Hybrid Inverter">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 1.3 On-Grid Inverters -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="solar">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/solar-hybrid-inverter.jpg" alt="On-Grid String Inverter - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-broadcast text-primary me-1"></i> On-Grid / Net Meter</span>
            <span class="warranty-badge">5–10 Years Warranty</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">On-Grid String Inverters</h3>
            <p class="product-desc">
              High-yield grid-tie string inverters designed for residential net-metering schemes and high-capacity commercial installations.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> Integrated Anti-Islanding Protection</li>
              <li><i class="bi bi-check-circle-fill"></i> IP65 Rugged Die-Cast Enclosure for Outdoors</li>
              <li><i class="bi bi-check-circle-fill"></i> Zero-Export / DG Sync Compatibility</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Capacity Range:</span> <span class="val">1 kW – 50 kW (Single &amp; Three Phase)</span></li>
              <li><span class="label">Max Efficiency:</span> <span class="val">98.8% European Standard</span></li>
              <li><span class="label">Cooling:</span> <span class="val">Natural Convection / Smart Fan</span></li>
              <li><span class="label">Applications:</span> <span class="val">PM Surya Ghar, Offices, Warehouses</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="On-Grid String Inverter" data-category="Solar Solutions (Rooftop / Off-Grid / Hybrid)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('On-Grid Inverter'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="On-Grid Inverter">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 1.4 Solar DC Cable -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="solar">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/solar-cable.svg" alt="Solar DC Cable - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-bezier2 text-danger me-1"></i> 1500V DC Cable</span>
            <span class="warranty-badge">25 Years Life</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">Solar DC Cable (1500V DC XLPO)</h3>
            <p class="product-desc">
              TUV certified electron-beam cross-linked (XLPO) insulated and sheathed cables engineered for high DC voltages and extreme outdoor UV exposure.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> High Conductivity Electrolytic Tinned Copper (Class 5)</li>
              <li><i class="bi bi-check-circle-fill"></i> Halogen-Free, Flame Retardant &amp; Ozone Resistant</li>
              <li><i class="bi bi-check-circle-fill"></i> Operating Temperature: -40°C to +120°C</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Sizes Available:</span> <span class="val">4 sq.mm / 6 sq.mm / 10 sq.mm</span></li>
              <li><span class="label">Voltage Rating:</span> <span class="val">1.5 kV DC / 1.0 kV AC</span></li>
              <li><span class="label">Colors:</span> <span class="val">UV Black &amp; Red Cores</span></li>
              <li><span class="label">Applications:</span> <span class="val">Solar PV Array Interconnections</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Solar DC Cable" data-category="Solar Cables &amp; Accessories (ACDB/DCDB/MC4)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('Solar DC Cable'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="Solar DC Cable">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 1.5 Solar AC Cable -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="solar">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/solar-cable.svg" alt="Solar AC Cable - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-bezier2 text-primary me-1"></i> AC Heavy Cable</span>
            <span class="warranty-badge">Heavy Duty</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">Solar AC Cable (Multi-Core Armoured)</h3>
            <p class="product-desc">
              Heavy duty Copper and Aluminum multi-core armoured power cables designed for minimal voltage drop between solar inverter, ACDB, and grid panel.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> High Current Capacity with Low Resistance</li>
              <li><i class="bi bi-check-circle-fill"></i> Galvanized Steel Armoured Core for Rodent Protection</li>
              <li><i class="bi bi-check-circle-fill"></i> Heat Resistant PVC / XLPE Insulation</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Cores:</span> <span class="val">2-Core, 3.5-Core &amp; 4-Core</span></li>
              <li><span class="label">Cross Sections:</span> <span class="val">4 sq.mm up to 95 sq.mm</span></li>
              <li><span class="label">Standard:</span> <span class="val">IS:7098 / IS:1554 Compliance</span></li>
              <li><span class="label">Applications:</span> <span class="val">Inverter Output to Main Distribution Board</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Solar AC Cable" data-category="Solar Cables &amp; Accessories (ACDB/DCDB/MC4)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('Solar AC Cable'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="Solar AC Cable">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 1.6 MC4 Connectors -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="solar">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/mc4-connectors.svg" alt="MC4 Solar Connectors - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-plug-fill text-warning me-1"></i> IP68 Connector</span>
            <span class="warranty-badge">TUV Certified</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">MC4 Solar Connectors (Male &amp; Female)</h3>
            <p class="product-desc">
              Industry standard 1500V DC waterproof solar cable connectors featuring secure snap-in locking and precision tinned copper contact pins.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> IP68 Ingress Protection with Dual Sealing Rings</li>
              <li><i class="bi bi-check-circle-fill"></i> High Pull-out Force &amp; Anti-Aging PPO Housing</li>
              <li><i class="bi bi-check-circle-fill"></i> Flame Class UL94-V0 Self-Extinguishing</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Rated Voltage:</span> <span class="val">1500V DC (IEC / UL)</span></li>
              <li><span class="label">Rated Current:</span> <span class="val">30A – 45A</span></li>
              <li><span class="label">Contact Resistance:</span> <span class="val">&lt; 0.5 mΩ</span></li>
              <li><span class="label">Applications:</span> <span class="val">Solar Panel String &amp; Combiner Wiring</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="MC4 Connectors" data-category="Solar Cables &amp; Accessories (ACDB/DCDB/MC4)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('MC4 Connectors'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="MC4 Connectors">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 1.7 ACDB (AC Distribution Box) -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="solar">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/acdb-dcdb.svg" alt="ACDB Distribution Box - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-box-seam-fill text-info me-1"></i> AC Protection</span>
            <span class="warranty-badge">IP65 Enclosure</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">ACDB (AC Distribution Box)</h3>
            <p class="product-desc">
              Pre-wired AC distribution box equipped with Type II AC Surge Protection Devices (SPD) and high-breaking MCBs for complete electrical safety.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> Class II AC SPD (40kA Surge Discharge)</li>
              <li><i class="bi bi-check-circle-fill"></i> High Breaking Capacity MCB / Isolator</li>
              <li><i class="bi bi-check-circle-fill"></i> Dust &amp; Moisture Sealed Polycarbonate Body</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">System Phase:</span> <span class="val">Single Phase (1P) / Three Phase (3P)</span></li>
              <li><span class="label">Current Rating:</span> <span class="val">16A, 32A, 63A, 100A</span></li>
              <li><span class="label">Voltage:</span> <span class="val">230V / 415V AC 50Hz</span></li>
              <li><span class="label">Applications:</span> <span class="val">Solar Inverter Output Protection</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="ACDB Distribution Box" data-category="Solar Cables &amp; Accessories (ACDB/DCDB/MC4)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('ACDB Distribution Box'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="ACDB Box">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 1.8 DCDB (DC Distribution Box) -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="solar">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/acdb-dcdb.svg" alt="DCDB Distribution Box - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-lightning-charge-fill text-danger me-1"></i> DC Protection</span>
            <span class="warranty-badge">1000V DC SPD</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">DCDB (DC Distribution Box)</h3>
            <p class="product-desc">
              Heavy-duty DC combiner and protection box featuring 1000V/1500V DC SPDs, high-voltage cylindrical fuses, and rotary isolators.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> Type II 1000V DC Surge Arrestor (SPD)</li>
              <li><i class="bi bi-check-circle-fill"></i> 1000V DC 10x38mm Solar Fuses (15A/20A/30A)</li>
              <li><i class="bi bi-check-circle-fill"></i> IP65 Polycarbonate Enclosure with Clear Lid</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Inputs / Outputs:</span> <span class="val">1 In / 1 Out up to 4 In / 4 Out</span></li>
              <li><span class="label">Voltage Rating:</span> <span class="val">1000V / 1500V DC</span></li>
              <li><span class="label">Glands:</span> <span class="val">IP68 PG13.5 / PG16 Waterproof</span></li>
              <li><span class="label">Applications:</span> <span class="val">Solar PV Array String Protection</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="DCDB Distribution Box" data-category="Solar Cables &amp; Accessories (ACDB/DCDB/MC4)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('DCDB Distribution Box'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="DCDB Box">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 1.9 Solar Mounting Structures -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="solar">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/solar-structure.svg" alt="Solar Mounting Structures - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-building text-secondary me-1"></i> HDG Structures</span>
            <span class="warranty-badge">170 km/h Wind Load</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">Solar Mounting Structures</h3>
            <p class="product-desc">
              Engineered Hot-Dip Galvanized (HDG) and Anodized Aluminum AL6005-T5 rooftop &amp; ground-mount structures designed for 25+ years stability.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> Hot Dip Galvanized 80+ Micron Coating</li>
              <li><i class="bi bi-check-circle-fill"></i> Optimized Tilt Angle for Maximum Solar Harvest</li>
              <li><i class="bi bi-check-circle-fill"></i> Structural Integrity Certified for High Wind Zones</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Material:</span> <span class="val">HDG Mild Steel / AL6005-T5 Aluminum</span></li>
              <li><span class="label">Mount Types:</span> <span class="val">RCC Roof, Tin Shed, Elevated High-Rise</span></li>
              <li><span class="label">Hardware:</span> <span class="val">Stainless Steel SUS304 / Grade 8.8</span></li>
              <li><span class="label">Applications:</span> <span class="val">Residential, Commercial Rooftops &amp; Ground</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Solar Mounting Structures" data-category="Solar Solutions (Rooftop / Off-Grid / Hybrid)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('Solar Mounting Structures'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="Solar Structures">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 1.10 End Clamps & Mid Clamps -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="solar">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/solar-structure.svg" alt="End Clamps and Mid Clamps - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-tools text-warning me-1"></i> Hardware</span>
            <span class="warranty-badge">SUS304 Hardware</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">Solar End Clamps &amp; Mid Clamps</h3>
            <p class="product-desc">
              Precision-extruded anodized aluminum clamping hardware with integrated grounding teeth and SUS304 stainless steel Allen bolts.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> High Grade Anodized AL6005-T5 (10–15 Micron)</li>
              <li><i class="bi bi-check-circle-fill"></i> Includes SUS304 Allen Bolt &amp; Spring Washer</li>
              <li><i class="bi bi-check-circle-fill"></i> Firm Non-Slip Grip Protecting Module Glass</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Compatibility:</span> <span class="val">30mm, 35mm, 40mm Solar Panels</span></li>
              <li><span class="label">Bolt Spec:</span> <span class="val">M8 x 25/30/35mm Stainless Steel</span></li>
              <li><span class="label">Types:</span> <span class="val">Mid Clamps (Inter-panel) &amp; End Clamps</span></li>
              <li><span class="label">Applications:</span> <span class="val">Securing Solar PV Modules to Rails</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Solar End Clamps &amp; Mid Clamps" data-category="Solar Cables &amp; Accessories (ACDB/DCDB/MC4)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('Solar Clamps'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="Solar Clamps">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- ==========================================
           2. POWER BACKUP PRODUCTS
           ========================================== -->

      <!-- 2.1 Home UPS -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="power">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/home-ups.svg" alt="Home UPS - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-lightning-charge-fill text-warning me-1"></i> Home UPS</span>
            <span class="warranty-badge">24 Months Warranty</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">Eco Pure Sine Wave Home UPS</h3>
            <p class="product-desc">
              Microcontroller-based intelligent pure sine wave home UPS delivering whisper-silent backup with zero appliance humming and fast charging.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> 100% Pure Sine Wave Safe for Sensitive Electronics</li>
              <li><i class="bi bi-check-circle-fill"></i> Multi-Stage Adaptive Battery Charging Algorithm</li>
              <li><i class="bi bi-check-circle-fill"></i> Built-in Short Circuit, Overload &amp; Over-temp Protection</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">VA Rating:</span> <span class="val">700VA / 1100VA / 1600VA / 2200VA</span></li>
              <li><span class="label">System Voltage:</span> <span class="val">12V / 24V DC</span></li>
              <li><span class="label">Efficiency:</span> <span class="val">&gt; 92%</span></li>
              <li><span class="label">Applications:</span> <span class="val">Home Lighting, BLDC Fans, TV, Workstations</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Home UPS" data-category="Lead Acid Tubular Battery &amp; UPS">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('Home UPS'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="Home UPS">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 2.2 Heavy Inverters -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="power">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/solar-hybrid-inverter.jpg" alt="Heavy Duty Pure Sine Wave Inverters - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-cpu-fill text-primary me-1"></i> Commercial Inverter</span>
            <span class="warranty-badge">Heavy Duty Duty</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">Heavy Duty Pure Sine Inverters</h3>
            <p class="product-desc">
              High-capacity commercial power inverters designed to support inductive loads including Inverter Air Conditioners, water pumps, and servers.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> Massive Peak Surge Capability for Motor Loads</li>
              <li><i class="bi bi-check-circle-fill"></i> Dual Mode Operation (UPS Mode / Normal Mode)</li>
              <li><i class="bi bi-check-circle-fill"></i> Heavy-Duty Pure Copper Transformer Inside</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Capacity Range:</span> <span class="val">2.5 kVA up to 10 kVA</span></li>
              <li><span class="label">DC Voltage:</span> <span class="val">24V / 48V / 96V / 120V</span></li>
              <li><span class="label">Transfer Time:</span> <span class="val">&lt; 10ms (Instant UPS switch)</span></li>
              <li><span class="label">Applications:</span> <span class="val">Offices, Petrol Pumps, Clinics, Large Villas</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Heavy Duty Pure Sine Inverter" data-category="Lead Acid Tubular Battery &amp; UPS">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('Heavy Duty Pure Sine Inverter'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="Heavy Inverters">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 2.3 Lead Acid Batteries -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="power">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/tall-tubular-battery.jpg" alt="Tall Tubular Lead Acid Batteries - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-battery-full text-danger me-1"></i> Tall Tubular</span>
            <span class="warranty-badge">Up to 60 Mo Warranty</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">Lead Acid Tall Tubular Batteries</h3>
            <p class="product-desc">
              Heavy-duty deep cycle tall tubular solar and inverter batteries manufactured with high-pressure die-cast spine alloy for maximum backup endurance.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> High Corrosion-Resistant HADI Spine Grid Technology</li>
              <li><i class="bi bi-check-circle-fill"></i> Ceramic Float Level Indicators for Easy Water Top-up</li>
              <li><i class="bi bi-check-circle-fill"></i> Exceptional Deep Discharge Recovery &amp; Thermal Stability</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Capacity:</span> <span class="val">150Ah / 200Ah / 220Ah / 250Ah (C20)</span></li>
              <li><span class="label">Voltage:</span> <span class="val">12V DC Nominal</span></li>
              <li><span class="label">Container:</span> <span class="val">High Impact Polypropylene (PP)</span></li>
              <li><span class="label">Applications:</span> <span class="val">Home UPS, Inverter, Off-Grid Solar Backup</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Lead Acid Tall Tubular Battery" data-category="Lead Acid Tubular Battery &amp; UPS">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('Lead Acid Tall Tubular Battery'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="Tall Tubular Battery">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 2.4 Lithium Batteries (LiFePO4) -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="power">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/wallmount-lithium-battery.png?v=<?php echo file_exists(__DIR__ . '/assets/images/products/wallmount-lithium-battery.png') ? filemtime(__DIR__ . '/assets/images/products/wallmount-lithium-battery.png') : '2.0'; ?>" alt="FUZURRA Wall Mount Lithium Battery 51.2V 100AH LiFePO4">
            <span class="category-badge-pill"><i class="bi bi-battery-charging text-success me-1"></i> Wall Mount LiFePO4</span>
            <span class="warranty-badge">6000+ Cycles / 5+ Yrs</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">Wall Mount Lithium Battery (51.2V 100AH)</h3>
            <p class="product-desc">
              State-of-the-art 51.2V 100Ah Lithium Iron Phosphate (LiFePO4) smart energy storage with high energy density, 6000+ cycles, and integrated Smart BMS. Power your home, power your future.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> Safe &amp; Reliable High Energy Density LiFePO4 Cells</li>
              <li><i class="bi bi-check-circle-fill"></i> Long Life 6000+ Cycles (10+ Years Operational Lifespan)</li>
              <li><i class="bi bi-check-circle-fill"></i> Smart BMS Protection with Fast Rapid Charging</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Voltage &amp; Capacity:</span> <span class="val">51.2V 100Ah (5.12 kWh Storage)</span></li>
              <li><span class="label">BMS Safety:</span> <span class="val">Over-charge, Over-discharge, Temp &amp; Short Circuit</span></li>
              <li><span class="label">Mounting:</span> <span class="val">Sleek Wall-Mount Space-Saving Profile</span></li>
              <li><span class="label">Applications:</span> <span class="val">Home Backup, Solar Systems, Commercial &amp; Industrial</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Wall Mount Lithium Battery 51.2V 100AH" data-category="Lithium Battery Storage (LiFePO4)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('Wall Mount Lithium Battery 51.2V 100AH'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="Wall Mount Lithium Battery">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 2.5 E-Rickshaw & EV Power Battery (Xtreme Power) -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="power">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/erickshaw-battery.png?v=<?php echo file_exists(__DIR__ . '/assets/images/products/erickshaw-battery.png') ? filemtime(__DIR__ . '/assets/images/products/erickshaw-battery.png') : '2.0'; ?>" alt="FUZURRA E-Rickshaw Battery Xtreme Power LiFePO4">
            <span class="category-badge-pill"><i class="bi bi-ev-front-fill text-primary me-1"></i> E-Rickshaw EV</span>
            <span class="warranty-badge">3 Years Warranty</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">E-Rickshaw &amp; Xtreme Power LiFePO4 Battery</h3>
            <p class="product-desc">
              Drive power, drive the future. Heavy-duty next-gen power storage engineered with high-capacity LiFePO4 chemistry for extra mileage, fast charging, and rugged durability on Indian roads.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> High Capacity &amp; High Mileage per Charge</li>
              <li><i class="bi bi-check-circle-fill"></i> Fast Charging with Less Downtime &amp; More Performance</li>
              <li><i class="bi bi-check-circle-fill"></i> Advanced BMS Multi-Protection (Eco-Friendly &amp; Lightweight)</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Model Series:</span> <span class="val">FZLT24250L / 25.6V 5.12kWh 200Ah &amp; 51.2V</span></li>
              <li><span class="label">Technology:</span> <span class="val">Lithium LiFePO4 Heavy Cycle Chemistry</span></li>
              <li><span class="label">Durability:</span> <span class="val">Vibration Resistant - Made for Indian Roads</span></li>
              <li><span class="label">Applications:</span> <span class="val">E-Rickshaws, Commercial EV, Home UPS &amp; Solar</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="E-Rickshaw Xtreme Power Battery" data-category="Lithium Battery Storage (LiFePO4)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('E-Rickshaw Xtreme Power Battery'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="E-Rickshaw Battery">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- ==========================================
           3. HOME APPLIANCES & LIGHTING
           ========================================== -->

      <!-- 3.1 Domestic LED Lighting Solutions -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="appliances">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/domestic-led-lighting.png?v=<?php echo file_exists(__DIR__ . '/assets/images/products/domestic-led-lighting.png') ? filemtime(__DIR__ . '/assets/images/products/domestic-led-lighting.png') : '2.0'; ?>" alt="FUZURRA Premium Domestic LED Lighting Solutions">
            <span class="category-badge-pill"><i class="bi bi-lightbulb-fill text-warning me-1"></i> LED Lighting</span>
            <span class="warranty-badge">2 Years Warranty</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">Premium Domestic LED Lighting Solutions</h3>
            <p class="product-desc">
              Brighten every corner and light up every life. High-brightness energy-saving LED panel lights, bulbs, batten lights, spotlights, and floodlights with flicker-free comfort and surge safety.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> High Brightness with Low Power Consumption</li>
              <li><i class="bi bi-check-circle-fill"></i> Comfort Flicker-Free &amp; Eye-Friendly Illumination</li>
              <li><i class="bi bi-check-circle-fill"></i> Surge Protection &amp; Overheat Safety Built-in</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Product Range:</span> <span class="val">Panel Lights, Bulbs, Battens, Spot &amp; Flood Lights</span></li>
              <li><span class="label">Lifespan:</span> <span class="val">Long Life &amp; High Lumen Maintenance</span></li>
              <li><span class="label">Spaces:</span> <span class="val">Living Room, Bedroom, Kitchen, Balcony, Bathroom</span></li>
              <li><span class="label">Warranty &amp; Make:</span> <span class="val">2 Years Warranty | Made in India</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Premium Domestic LED Lighting" data-category="Home Appliances (Inverter AC / Smart LED TV)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('Premium Domestic LED Lighting'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="LED Lighting">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 3.2 Smart LED TVs -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="appliances">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/smart-led-tv.jpg" alt="Smart 4K LED TV - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-tv-fill text-info me-1"></i> Smart LED TV</span>
            <span class="warranty-badge">3 Years Warranty</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">Ultra-HD Smart 4K Frameless LED TVs</h3>
            <p class="product-desc">
              Cinematic bezel-less 4K Ultra HD Smart LED TVs featuring Quantum Color technology, Dolby Audio, and ultra-low energy consumption.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> 4K UHD 3840 x 2160 Resolution with HDR10+</li>
              <li><i class="bi bi-check-circle-fill"></i> Integrated 24W Stereo Speakers with Dolby Audio</li>
              <li><i class="bi bi-check-circle-fill"></i> Official Android / Google TV OS with Voice Remote</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Screen Sizes:</span> <span class="val">32" / 43" / 55" / 65" / 75"</span></li>
              <li><span class="label">Connectivity:</span> <span class="val">Dual Band Wi-Fi, BT 5.0, 3x HDMI, 2x USB</span></li>
              <li><span class="label">Power Rating:</span> <span class="val">A+ Energy Class (Inverter Friendly)</span></li>
              <li><span class="label">Applications:</span> <span class="val">Living Rooms, Bedrooms, Conference Rooms</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Smart 4K LED TV" data-category="Home Appliances (Inverter AC / Smart LED TV)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('Smart 4K LED TV'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="Smart LED TV">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 3.3 Air Conditioners -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="appliances">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/smart-inverter-ac.jpg" alt="5-Star Inverter Air Conditioner - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-snow text-primary me-1"></i> Inverter AC</span>
            <span class="warranty-badge">10 Yr Compressor</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">5-Star Super Inverter Split AC</h3>
            <p class="product-desc">
              Heavy duty 5-star split air conditioner engineered with 100% grooved copper coils, dual rotary compressor, and high ambient cooling up to 52°C.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> ISEER 5.2+ Energy Rating for Maximum Power Savings</li>
              <li><i class="bi bi-check-circle-fill"></i> 100% Copper Condenser with Anti-Corrosion Blue Fin</li>
              <li><i class="bi bi-check-circle-fill"></i> Stabilizer-Free Operation (135V - 290V) &amp; Solar Compatible</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Capacities:</span> <span class="val">1.0 Ton / 1.5 Ton / 2.0 Ton</span></li>
              <li><span class="label">Refrigerant:</span> <span class="val">Eco-Friendly R32 Zero ODP</span></li>
              <li><span class="label">Filtration:</span> <span class="val">PM 2.5 Anti-Bacterial Filter</span></li>
              <li><span class="label">Applications:</span> <span class="val">Bedrooms, Living Rooms, Offices</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="Inverter Split AC" data-category="Home Appliances (Inverter AC / Smart LED TV)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('5-Star Inverter Split AC'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="Inverter AC">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

      <!-- 3.4 Small Home Appliances (BLDC Fan etc.) -->
      <div class="col-xl-4 col-md-6 product-grid-item" data-category="appliances">
        <div class="product-card">
          <div class="product-thumb">
            <img src="assets/images/products/small-appliances.svg" alt="BLDC Smart Ceiling Fan &amp; Small Appliances - Fuzurra">
            <span class="category-badge-pill"><i class="bi bi-fan text-warning me-1"></i> BLDC Smart Fan</span>
            <span class="warranty-badge">65% Power Saving</span>
          </div>
          <div class="product-body">
            <h3 class="product-title">BLDC Energy-Saving Smart Fans &amp; Appliances</h3>
            <p class="product-desc">
              Brushless DC (BLDC) motor smart ceiling fans consuming just 28W at top speed, featuring intelligent RF remote and timer modes.
            </p>
            <ul class="product-features-checklist">
              <li><i class="bi bi-check-circle-fill"></i> 65% Electricity Savings Compared to Regular Induction Fans</li>
              <li><i class="bi bi-check-circle-fill"></i> 3x Longer Backup on Inverter / Solar Battery</li>
              <li><i class="bi bi-check-circle-fill"></i> Point-Anywhere Smart RF Remote with Boost &amp; Sleep Mode</li>
            </ul>
            <ul class="product-specs-list">
              <li><span class="label">Power Input:</span> <span class="val">28 Watts Max</span></li>
              <li><span class="label">Air Delivery:</span> <span class="val">235 CMM @ 360 RPM</span></li>
              <li><span class="label">Sweep Size:</span> <span class="val">1200 mm (48 Inches)</span></li>
              <li><span class="label">Applications:</span> <span class="val">Homes, Schools, Offices, Solar-Powered Buildings</span></li>
            </ul>
          </div>
          <div class="product-card-footer">
            <button type="button" class="btn-enquire" data-bs-toggle="modal" data-bs-target="#quoteModal" data-product-name="BLDC Smart Fan" data-category="Home Appliances (Inverter AC / Smart LED TV)">
              <i class="bi bi-envelope-fill"></i> Enquire Now
            </button>
            <a href="<?php echo getProductWaLink('BLDC Energy Saving Fan'); ?>" target="_blank" class="btn-wa-product">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="px-3 pb-3 bg-light text-center border-top">
            <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted small btn-download-brochure" data-product="BLDC Fan">
              <i class="bi bi-file-earmark-arrow-down-fill text-danger me-1"></i> Download Technical Datasheet
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     BULK INQUIRY & DEALER BANNER
     ========================================================================== -->
<section class="py-5 bg-white border-top">
  <div class="container-fluid px-lg-5">
    <div class="p-4 p-lg-5 rounded-4" style="background: linear-gradient(135deg, #0B132B 0%, #1E293B 100%); color: #FFFFFF;">
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <h3 class="h2 font-heading text-white fw-bold mb-2">Need Customized Solar Sizing or Bulk Wholesale Pricing?</h3>
          <p class="text-light-50 mb-0">
            Our engineering team prepares comprehensive electrical designs, Bill of Materials (BOM), and wholesale distributor quotations.
          </p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <button type="button" class="btn btn-primary-glow px-4" data-bs-toggle="modal" data-bs-target="#quoteModal">
            <i class="bi bi-chat-square-quote-fill me-2"></i> Request Project Quotation
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
