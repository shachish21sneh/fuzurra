<?php
require_once __DIR__ . '/config.php';
?>
<!-- Mobile Sticky Quick Action Bar -->
<div class="mobile-bottom-bar shadow-lg">
  <div class="btn-group-mobile">
    <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-sm btn-outline-light d-flex flex-column align-items-center justify-content-center py-1">
      <i class="bi bi-telephone-fill text-warning fs-6"></i>
      <span style="font-size: 0.7rem; font-weight: 700;">Call Now</span>
    </a>
    <a href="<?php echo WA_LINK_DEFAULT; ?>" target="_blank" rel="noopener" class="btn btn-sm btn-success d-flex flex-column align-items-center justify-content-center py-1">
      <i class="bi bi-whatsapp fs-6"></i>
      <span style="font-size: 0.7rem; font-weight: 700;">WhatsApp</span>
    </a>
    <button type="button" class="btn btn-sm btn-primary-glow d-flex flex-column align-items-center justify-content-center py-1 text-white border-0" data-bs-toggle="modal" data-bs-target="#quoteModal">
      <i class="bi bi-lightning-charge-fill text-warning fs-6"></i>
      <span style="font-size: 0.7rem; font-weight: 700;">Get Quote</span>
    </button>
  </div>
</div>
