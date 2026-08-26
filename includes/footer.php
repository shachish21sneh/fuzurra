<?php
require_once __DIR__ . '/config.php';
?>
  <!-- Main Corporate Footer -->
  <footer class="main-footer">
    <div class="container-fluid px-lg-5">
      <div class="row g-4">
        <!-- Col 1: Brand & Bio -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <a href="index.php" class="d-inline-block mb-3">
            <img src="assets/images/logo.png" alt="Fuzurra - Feel The Excellence" style="height: 48px; width: auto; max-width: 190px; object-fit: contain;">
          </a>
          <p class="text-light-50 small mb-3" style="line-height: 1.7;">
            <strong>Fuzurra Industries Pvt. Ltd.</strong> is a pioneering clean energy and electrical engineering company. We deliver advanced Solar Energy Solutions, Hybrid Inverters, Home UPS, Tall Tubular & Lithium Batteries, and Smart Home Appliances designed for peak efficiency and reliability.
          </p>
          <div class="d-flex align-items-center gap-2 pt-2">
            <a href="https://linkedin.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://twitter.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="X (Twitter)"><i class="bi bi-twitter-x"></i></a>
            <a href="https://facebook.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://youtube.com" target="_blank" rel="noopener" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="YouTube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <!-- Col 2: Products & Solutions -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5 class="footer-heading">Product Solutions</h5>
          <ul class="footer-links">
            <li><a href="products.php?cat=solar"><i class="bi bi-chevron-right text-success"></i> Mono PERC & Bifacial Solar Panels</a></li>
            <li><a href="products.php?cat=solar"><i class="bi bi-chevron-right text-success"></i> Solar Hybrid & On-Grid Inverters</a></li>
            <li><a href="battery-solutions.php"><i class="bi bi-chevron-right text-success"></i> LiFePO4 Lithium Wall Batteries</a></li>
            <li><a href="battery-solutions.php"><i class="bi bi-chevron-right text-success"></i> Heavy Duty Tall Tubular Batteries</a></li>
            <li><a href="products.php?cat=power"><i class="bi bi-chevron-right text-success"></i> Pure Sine Wave Home UPS</a></li>
            <li><a href="products.php?cat=solar"><i class="bi bi-chevron-right text-success"></i> Solar DC/AC Cables & MC4 Connectors</a></li>
            <li><a href="products.php?cat=appliances"><i class="bi bi-chevron-right text-success"></i> Smart Inverter ACs & LED TVs</a></li>
          </ul>
        </div>

        <!-- Col 3: Key Portals & Quick Links -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5 class="footer-heading">Quick Links & Portals</h5>
          <ul class="footer-links">
            <li><a href="solar-solutions.php"><i class="bi bi-chevron-right text-warning"></i> Residential & Commercial Solar</a></li>
            <li><a href="pm-surya-ghar.php"><i class="bi bi-chevron-right text-warning"></i> PM Surya Ghar: Muft Bijli Yojana</a></li>
            <li><a href="services.php"><i class="bi bi-chevron-right text-warning"></i> Solar Installation & Maintenance AMC</a></li>
            <li><a href="dealer.php"><i class="bi bi-chevron-right text-warning"></i> <strong>Become a Dealer / Distributor</strong></a></li>
            <li><a href="about.php"><i class="bi bi-chevron-right text-warning"></i> About Fuzurra Industries</a></li>
            <li><a href="contact.php"><i class="bi bi-chevron-right text-warning"></i> Customer Support & Branch Info</a></li>
            <li><a href="privacy-policy.php"><i class="bi bi-chevron-right text-warning"></i> Privacy Policy</a></li>
            <li><a href="terms.php"><i class="bi bi-chevron-right text-warning"></i> Terms & Conditions</a></li>
          </ul>
        </div>

        <!-- Col 4: Contact Information -->
        <div class="col-lg-3 col-md-6">
          <h5 class="footer-heading">Contact Information</h5>
          <div class="footer-contact-item">
            <i class="bi bi-building-fill text-warning"></i>
            <div>
              <strong class="text-white">Corporate Office:</strong><br>
              <span class="text-light-50 small"><?php echo SITE_CORP_OFFICE; ?></span>
            </div>
          </div>
          <div class="footer-contact-item">
            <i class="bi bi-geo-alt-fill text-warning"></i>
            <div>
              <strong class="text-white">Registered Office:</strong><br>
              <span class="text-light-50 small"><?php echo SITE_REG_OFFICE; ?></span>
            </div>
          </div>
          <div class="footer-contact-item">
            <i class="bi bi-telephone-fill text-warning"></i>
            <div>
              <strong class="text-white">Phone &amp; WhatsApp:</strong><br>
              <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="text-white"><?php echo SITE_PHONE; ?></a>
              <span class="text-secondary mx-1">|</span>
              <a href="<?php echo WA_LINK_DEFAULT; ?>" target="_blank" class="text-success fw-bold">Chat Now</a>
            </div>
          </div>
          <div class="footer-contact-item">
            <i class="bi bi-envelope-fill text-warning"></i>
            <div>
              <strong class="text-white">Email Address:</strong><br>
              <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>
            </div>
          </div>
          <div class="footer-contact-item">
            <i class="bi bi-clock-fill text-warning"></i>
            <div>
              <strong class="text-white">Working Hours:</strong><br>
              <span class="text-light-50 small"><?php echo SITE_HOURS; ?></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Bottom Bar with Copyright -->
      <div class="footer-bottom">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
            <p class="mb-0 text-light-50">
              © Fuzurra Industries Pvt. Ltd. All Rights Reserved.
            </p>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <p class="mb-0 text-light-50 small">
              Solar Energy &bull; Power Backup &bull; Modern Technology &bull; Reliability
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Floating WhatsApp Action Button -->
  <?php include __DIR__ . '/whatsapp-float.php'; ?>

  <!-- Mobile Sticky Quick Action Bar -->
  <?php include __DIR__ . '/mobile-bar.php'; ?>

  <!-- Universal Quote & Enquiry Modal -->
  <?php include __DIR__ . '/quote-modal.php'; ?>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/calculators.js"></script>
</body>
</html>
