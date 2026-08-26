<?php
require_once __DIR__ . '/includes/config.php';

function getPageMeta() {
  return renderPageMeta(
    'About Us - Fuzurra Industries Pvt. Ltd.',
    'Learn about Fuzurra Industries Pvt. Ltd. - our mission, vision, engineering values, and dedication to providing premier solar energy solutions, power backup, and modern appliances.'
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
            <li class="breadcrumb-item active text-warning" aria-current="page">About Us</li>
          </ol>
        </nav>
        <span class="badge bg-warning text-dark fw-bold px-3 py-1 mb-2">CORPORATE PROFILE</span>
        <h1 class="display-5 fw-bold text-white mb-2">About Fuzurra Industries Pvt. Ltd.</h1>
        <p class="lead text-light-50 mb-0">
          A dedicated provider of integrated solar energy solutions, power backup systems, and modern home electrical appliances.
        </p>
      </div>
      <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
        <a href="contact.php" class="btn btn-primary-glow">
          <i class="bi bi-envelope-fill me-1"></i> Connect With Us
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     WHO WE ARE
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container-fluid px-lg-5 py-4">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <span class="section-tag">Who We Are</span>
        <h2 class="section-title">Committed to Powering a Brighter &amp; Smarter Future</h2>
        <p class="text-muted mb-3">
          <strong>Fuzurra Industries Pvt. Ltd.</strong> is an Indian corporate enterprise focused on advancing the renewable energy and power backup landscape. We specialize in delivering high-efficiency Solar Energy Solutions, Hybrid Inverters, Home UPS Systems, Tall Tubular Lead Acid Batteries, Advanced Lithium LiFePO4 Batteries, and Energy-Efficient Home Appliances.
        </p>
        <p class="text-muted mb-4">
          Our core purpose is to bridge clean solar generation with dependable energy storage and smart consumption. We engineer solutions that empower residential homeowners, commercial enterprises, and industrial clients to achieve energy independence and operational resilience.
        </p>
        <div class="d-flex flex-wrap gap-4 pt-2 border-top">
          <div>
            <div class="fw-bold text-dark fs-5">Solar + Storage</div>
            <span class="text-muted small">Integrated Photovoltaic Ecosystem</span>
          </div>
          <div class="border-start ps-4">
            <div class="fw-bold text-dark fs-5">Pan-India Focus</div>
            <span class="text-muted small">Robust Dealer &amp; Customer Network</span>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="rounded-4 overflow-hidden shadow-lg border">
          <img src="assets/images/hero-solar.jpg" alt="Fuzurra Industries Clean Energy Infrastructure">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     VISION & MISSION
     ========================================================================== -->
<section class="py-5" style="background: #F8FAFC;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="row g-4">
      <!-- Vision -->
      <div class="col-lg-6">
        <div class="p-4 p-lg-5 bg-white rounded-4 border h-100 shadow-sm">
          <div class="feature-icon-wrapper feature-icon-gold mb-3">
            <i class="bi bi-eye-fill"></i>
          </div>
          <h3 class="h3 fw-bold mb-3">Our Vision</h3>
          <p class="text-muted mb-0" style="line-height: 1.8;">
            To be a foremost trusted provider of clean energy, smart power backup, and energy-efficient technologies, accelerating India’s transition toward reliable, sustainable, and decentralized electrical solutions for every home and enterprise.
          </p>
        </div>
      </div>

      <!-- Mission -->
      <div class="col-lg-6">
        <div class="p-4 p-lg-5 bg-white rounded-4 border h-100 shadow-sm">
          <div class="feature-icon-wrapper feature-icon-green mb-3">
            <i class="bi bi-compass-fill"></i>
          </div>
          <h3 class="h3 fw-bold mb-3">Our Mission</h3>
          <p class="text-muted mb-0" style="line-height: 1.8;">
            To design and deliver technologically advanced solar panels, inverters, long-lasting batteries, and modern appliances that uphold the highest standards of safety, quality, and performance while providing prompt after-sales support and building empowering partnerships with our dealers.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     OUR VALUES (5 CORE PILLARS)
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container-fluid px-lg-5 py-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="section-tag justify-content-center">Guiding Principles</span>
      <h2 class="section-title">Our Values</h2>
      <p class="section-lead mx-auto">
        Integrity, technical discipline, and customer dedication shape every product and business relationship at Fuzurra Industries.
      </p>
    </div>

    <div class="row g-4">
      <!-- 1. Integrity -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-light rounded-4 border h-100">
          <div class="feature-icon-wrapper feature-icon-green mb-3">
            <i class="bi bi-shield-lock-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Integrity &amp; Transparency</h5>
          <p class="text-muted small mb-0">
            We adhere to honest business practices, transparent technical specifications, and authentic warranty commitments without overpromising.
          </p>
        </div>
      </div>

      <!-- 2. Innovation -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-light rounded-4 border h-100">
          <div class="feature-icon-wrapper feature-icon-gold mb-3">
            <i class="bi bi-lightbulb-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Continuous Innovation</h5>
          <p class="text-muted small mb-0">
            We actively adopt modern advances such as high-efficiency TOPCon solar cells, smart micro-BMS lithium systems, and pure sine wave digital topology.
          </p>
        </div>
      </div>

      <!-- 3. Sustainability -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-light rounded-4 border h-100">
          <div class="feature-icon-wrapper feature-icon-blue mb-3">
            <i class="bi bi-globe-americas"></i>
          </div>
          <h5 class="fw-bold mb-2">Environmental Sustainability</h5>
          <p class="text-muted small mb-0">
            Promoting zero-carbon electricity generation and energy-saving BLDC/5-star appliances to minimize our collective ecological footprint.
          </p>
        </div>
      </div>

      <!-- 4. Customer Commitment -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-light rounded-4 border h-100">
          <div class="feature-icon-wrapper feature-icon-navy mb-3">
            <i class="bi bi-people-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Customer First</h5>
          <p class="text-muted small mb-0">
            Every solution is engineered around real-world customer needs, ensuring seamless installation, dependable backup, and fast support.
          </p>
        </div>
      </div>

      <!-- 5. Reliability -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-light rounded-4 border h-100">
          <div class="feature-icon-wrapper feature-icon-green mb-3">
            <i class="bi bi-patch-check-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Uncompromising Reliability</h5>
          <p class="text-muted small mb-0">
            Built for enduring performance in harsh environmental conditions, heavy electrical surges, and demanding daily usage cycles.
          </p>
        </div>
      </div>

      <!-- 6. Partnership -->
      <div class="col-lg-4 col-md-6">
        <div class="p-4 bg-light rounded-4 border h-100">
          <div class="feature-icon-wrapper feature-icon-gold mb-3">
            <i class="bi bi-handshake-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Mutual Growth</h5>
          <p class="text-muted small mb-0">
            Treating our channel partners and distributors as long-term collaborators by safeguarding territories and supporting retail success.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     OUR PRODUCTS & COMMITMENT TO QUALITY
     ========================================================================== -->
<section class="py-5" style="background: #F8FAFC;">
  <div class="container-fluid px-lg-5 py-4">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <span class="section-tag">Quality Assurance</span>
        <h2 class="section-title">Our Commitment to Quality &amp; Safety</h2>
        <p class="text-muted mb-3">
          At Fuzurra Industries, quality is not an afterthought—it is embedded into our product selection, component engineering, and testing protocols.
        </p>
        <div class="d-flex flex-column gap-3">
          <div class="p-3 bg-white rounded-3 border">
            <strong class="text-dark d-block mb-1"><i class="bi bi-check2-square text-success me-2"></i>Tier-1 Materials &amp; Testing:</strong>
            <span class="text-muted small">We utilize high-purity raw materials, automated soldering, and multi-stage electrical insulation tests.</span>
          </div>
          <div class="p-3 bg-white rounded-3 border">
            <strong class="text-dark d-block mb-1"><i class="bi bi-check2-square text-success me-2"></i>Surge &amp; Thermal Protection:</strong>
            <span class="text-muted small">All inverters and distribution equipment incorporate robust surge arrestors (SPD) and thermal cutoffs.</span>
          </div>
          <div class="p-3 bg-white rounded-3 border">
            <strong class="text-dark d-block mb-1"><i class="bi bi-check2-square text-success me-2"></i>Comprehensive Warranty Support:</strong>
            <span class="text-muted small">Standardized product warranties backed by readily available genuine replacement spares.</span>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="p-4 p-lg-5 rounded-4" style="background: linear-gradient(135deg, #0B132B 0%, #1E293B 100%); color: #FFFFFF;">
          <h3 class="h3 font-heading text-white fw-bold mb-3">Customer Focus &amp; Future Goals</h3>
          <p class="text-light-50 mb-4" style="line-height: 1.8;">
            As India advances towards widespread clean energy adoption, Fuzurra Industries is actively expanding its product portfolio, enhancing technical training for solar installers, and making rooftop solar accessible to millions of households through initiatives like PM Surya Ghar.
          </p>
          <ul class="list-unstyled text-light-50 small mb-4">
            <li class="mb-2"><i class="bi bi-arrow-right-circle-fill text-warning me-2"></i> Expanding smart LiFePO4 battery storage adoption.</li>
            <li class="mb-2"><i class="bi bi-arrow-right-circle-fill text-warning me-2"></i> Accelerating rooftop solar enablement across tier-2 and tier-3 cities.</li>
            <li><i class="bi bi-arrow-right-circle-fill text-warning me-2"></i> Introducing ultra-low wattage smart IoT home appliances.</li>
          </ul>
          <a href="contact.php" class="btn btn-outline-light rounded-pill px-4">
            Get in Touch with Our Leadership
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
