<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- SEO & Social Meta (Generated dynamically per page) -->
  <?php 
    if (function_exists('getPageMeta')) {
      echo getPageMeta(); 
    } else {
      echo renderPageMeta();
    }
  ?>

  <link rel="icon" type="image/svg+xml" href="assets/images/logo.svg">
  
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <!-- Custom Design System & Animations -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/animations.css">
</head>
<body>

  <!-- Top Announcement / Contact Bar -->
  <div class="topbar d-none d-lg-block">
    <div class="container-fluid px-lg-5">
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-4">
          <div class="topbar-badge">
            <span class="dot"></span> PM Surya Ghar Authorized Solutions
          </div>
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-clock-history text-success"></i>
            <span><?php echo SITE_HOURS; ?></span>
          </div>
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-envelope text-success"></i>
            <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>
          </div>
        </div>

        <div class="d-flex align-items-center gap-3">
          <span class="text-light-50">Support:</span>
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="fw-bold text-white">
            <i class="bi bi-telephone-fill text-warning me-1"></i> <?php echo SITE_PHONE; ?>
          </a>
          <span class="text-secondary opacity-50">|</span>
          <a href="dealer.php" class="text-warning fw-semibold">
            <i class="bi bi-person-badge-fill me-1"></i> Dealer / Distributor Portal
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Navigation Header (Sticky Glassmorphism) -->
  <header class="main-header">
    <nav class="navbar navbar-expand-xl py-2">
      <div class="container-fluid px-lg-5">
        <!-- Brand Logo -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img src="assets/images/logo.svg" alt="Fuzurra Industries Pvt. Ltd. Logo" width="230" height="50">
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler border-0 shadow-none p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNavOffcanvas" aria-controls="mobileNavOffcanvas" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Desktop Navigation Links -->
        <div class="collapse navbar-collapse" id="desktopNav">
          <ul class="navbar-nav mx-auto mb-2 mb-xl-0 gap-1 align-items-center">
            <li class="nav-item">
              <a class="nav-link <?php echo isActivePage('index'); ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo isActivePage('about'); ?>" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo isActivePage('products'); ?>" href="products.php">Products</a>
            </li>
            <!-- Solutions Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?php echo isDropdownActive(['solar-solutions', 'pm-surya-ghar', 'battery-solutions']); ?>" href="#" id="solutionsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Solutions
              </a>
              <ul class="dropdown-menu dropdown-menu-custom shadow-lg border-0" aria-labelledby="solutionsDropdown">
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-3 py-2 <?php echo isActivePage('solar-solutions'); ?>" href="solar-solutions.php">
                    <div class="dropdown-icon-box bg-warning bg-opacity-10 text-warning">
                      <i class="bi bi-sun-fill"></i>
                    </div>
                    <div>
                      <strong class="d-block text-dark">Solar Solutions</strong>
                      <span class="text-muted small">Residential, Commercial &amp; Industrial</span>
                    </div>
                  </a>
                </li>
                <li><hr class="dropdown-divider my-1"></li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-3 py-2 <?php echo isActivePage('pm-surya-ghar'); ?>" href="pm-surya-ghar.php">
                    <div class="dropdown-icon-box bg-success bg-opacity-10 text-success">
                      <i class="bi bi-award-fill"></i>
                    </div>
                    <div>
                      <div class="d-flex align-items-center gap-2">
                        <strong class="d-block text-dark">PM Surya Ghar</strong>
                        <span class="badge bg-warning text-dark fw-bold" style="font-size: 0.65rem;">GOVT SUBSIDY</span>
                      </div>
                      <span class="text-muted small">Muft Bijli Scheme &amp; Direct DBT</span>
                    </div>
                  </a>
                </li>
                <li><hr class="dropdown-divider my-1"></li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-3 py-2 <?php echo isActivePage('battery-solutions'); ?>" href="battery-solutions.php">
                    <div class="dropdown-icon-box bg-primary bg-opacity-10 text-primary">
                      <i class="bi bi-battery-charging"></i>
                    </div>
                    <div>
                      <strong class="d-block text-dark">Battery Solutions</strong>
                      <span class="text-muted small">LiFePO4 Lithium &amp; Tall Tubular</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo isActivePage('services'); ?>" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo isActivePage('dealer'); ?>" href="dealer.php">Dealer / Distributor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo isActivePage('contact'); ?>" href="contact.php">Contact Us</a>
            </li>
          </ul>

          <!-- Action Buttons -->
          <div class="d-flex align-items-center gap-2">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn-header-call d-none d-xxl-inline-flex" title="Call Customer Support">
              <i class="bi bi-telephone-fill"></i> Call Now
            </a>
            <a href="<?php echo WA_LINK_DEFAULT; ?>" target="_blank" rel="noopener" class="btn-header-wa" title="Chat on WhatsApp">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
            <button type="button" class="btn-header-quote" data-bs-toggle="modal" data-bs-target="#quoteModal">
              <i class="bi bi-lightning-charge-fill"></i> Get a Quote
            </button>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- Mobile Offcanvas Navigation Drawer -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileNavOffcanvas" aria-labelledby="mobileNavOffcanvasLabel">
    <div class="offcanvas-header border-bottom bg-dark text-white">
      <img src="assets/images/logo-white.svg" alt="Fuzurra Logo" height="40">
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between p-4">
      <ul class="navbar-nav gap-2">
        <li class="nav-item">
          <a class="nav-link <?php echo isActivePage('index'); ?>" href="index.php">
            <i class="bi bi-house-door me-2 text-success"></i> Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo isActivePage('about'); ?>" href="about.php">
            <i class="bi bi-building me-2 text-success"></i> About Us
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo isActivePage('products'); ?>" href="products.php">
            <i class="bi bi-grid-fill me-2 text-success"></i> Products
          </a>
        </li>
        <!-- Mobile Solutions Dropdown Accordion -->
        <li class="nav-item">
          <a class="nav-link d-flex justify-content-between align-items-center <?php echo isDropdownActive(['solar-solutions', 'pm-surya-ghar', 'battery-solutions']); ?>" data-bs-toggle="collapse" href="#mobileSolutionsCollapse" role="button" aria-expanded="<?php echo isDropdownActive(['solar-solutions', 'pm-surya-ghar', 'battery-solutions']) ? 'true' : 'false'; ?>" aria-controls="mobileSolutionsCollapse">
            <span><i class="bi bi-lightning-charge-fill me-2 text-warning"></i> Solutions</span>
            <i class="bi bi-chevron-down small"></i>
          </a>
          <div class="collapse ps-3 mt-1 <?php echo isDropdownActive(['solar-solutions', 'pm-surya-ghar', 'battery-solutions']) ? 'show' : ''; ?>" id="mobileSolutionsCollapse">
            <ul class="navbar-nav gap-1">
              <li class="nav-item">
                <a class="nav-link py-2 <?php echo isActivePage('solar-solutions'); ?>" href="solar-solutions.php">
                  <i class="bi bi-sun-fill me-2 text-warning"></i> Solar Solutions
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-2 <?php echo isActivePage('pm-surya-ghar'); ?>" href="pm-surya-ghar.php">
                  <i class="bi bi-award-fill me-2 text-success"></i> PM Surya Ghar
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-2 <?php echo isActivePage('battery-solutions'); ?>" href="battery-solutions.php">
                  <i class="bi bi-battery-charging me-2 text-primary"></i> Battery Solutions
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo isActivePage('services'); ?>" href="services.php">
            <i class="bi bi-tools me-2 text-success"></i> Services
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo isActivePage('dealer'); ?>" href="dealer.php">
            <i class="bi bi-briefcase-fill me-2 text-primary"></i> Dealer / Distributor
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo isActivePage('contact'); ?>" href="contact.php">
            <i class="bi bi-geo-alt-fill me-2 text-danger"></i> Contact Us
          </a>
        </li>
      </ul>

      <div class="mt-4 pt-3 border-top">
        <div class="d-grid gap-2">
          <a href="<?php echo WA_LINK_DEFAULT; ?>" target="_blank" class="btn btn-success fw-bold py-2">
            <i class="bi bi-whatsapp me-2"></i> WhatsApp Us
          </a>
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-outline-dark fw-bold py-2">
            <i class="bi bi-telephone-fill me-2"></i> Call <?php echo SITE_PHONE; ?>
          </a>
          <button type="button" class="btn btn-primary-glow w-100 mt-1" data-bs-dismiss="offcanvas" data-bs-toggle="modal" data-bs-target="#quoteModal">
            <i class="bi bi-lightning-charge-fill me-1"></i> Get a Free Quote
          </button>
        </div>
      </div>
    </div>
  </div>
