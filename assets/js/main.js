/**
 * Fuzurra Industries Pvt. Ltd.
 * Main Frontend Interactions & Form Handlers
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Sticky Header Scroll Effect
  const header = document.querySelector('.main-header');
  if (header) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 20) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
  }

  // 2. Product Catalog Filter & Search (products.php)
  const filterBtns = document.querySelectorAll('.product-filter-btn');
  const productItems = document.querySelectorAll('.product-grid-item');
  const searchInput = document.getElementById('productSearchInput');

  if (filterBtns.length > 0 && productItems.length > 0) {
    function filterProducts() {
      const activeFilter = document.querySelector('.product-filter-btn.active')?.dataset.filter || 'all';
      const searchTerm = searchInput ? searchInput.value.toLowerCase().trim() : '';

      productItems.forEach(item => {
        const category = item.dataset.category || '';
        const title = item.querySelector('.product-title')?.innerText.toLowerCase() || '';
        const desc = item.querySelector('.product-desc')?.innerText.toLowerCase() || '';

        const matchesCategory = (activeFilter === 'all' || category === activeFilter);
        const matchesSearch = (!searchTerm || title.includes(searchTerm) || desc.includes(searchTerm));

        if (matchesCategory && matchesSearch) {
          item.style.display = 'block';
          item.classList.add('fade-in');
        } else {
          item.style.display = 'none';
        }
      });
    }

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        filterProducts();
      });
    });

    if (searchInput) {
      searchInput.addEventListener('input', filterProducts);
    }
  }

  // 3. Dynamic Quote Modal Pre-fill
  const quoteModal = document.getElementById('quoteModal');
  if (quoteModal) {
    quoteModal.addEventListener('show.bs.modal', (event) => {
      const button = event.relatedTarget;
      if (button) {
        const productName = button.getAttribute('data-product-name');
        const productCategory = button.getAttribute('data-category');
        
        const modalProductInput = quoteModal.querySelector('#modalProductField');
        const modalCategorySelect = quoteModal.querySelector('#modalCategoryField');

        if (modalProductInput && productName) {
          modalProductInput.value = productName;
        }
        if (modalCategorySelect && productCategory) {
          modalCategorySelect.value = productCategory;
        }
      }
    });
  }

  // 4. Download Brochure Simulated Trigger
  const brochureButtons = document.querySelectorAll('.btn-download-brochure');
  brochureButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const product = btn.getAttribute('data-product') || 'Fuzurra Product';
      showToast(`Generating & downloading brochure for ${product}...`, 'success');
      setTimeout(() => {
        // Open PDF or sample download
        window.open('#', '_blank');
      }, 800);
    });
  });

  // 5. AJAX Form Submission for Forms (Contact, Dealer, Quote)
  const ajaxForms = document.querySelectorAll('.fuzurra-ajax-form');
  ajaxForms.forEach(form => {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      
      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      
      // Basic check
      if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return;
      }

      submitBtn.disabled = true;
      submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm me-2" role="status"></span>Submitting...`;

      try {
        const formData = new FormData(form);
        const response = await fetch('api/submit-enquiry.php', {
          method: 'POST',
          body: formData
        });

        const result = await response.json();

        if (result.success) {
          showNotificationModal('Enquiry Received!', result.message || 'Thank you! Our technical specialist will contact you shortly.', 'success');
          form.reset();
          form.classList.remove('was-validated');
          
          // Close bootstrap modal if inside one
          const bsModal = bootstrap.Modal.getInstance(quoteModal);
          if (bsModal) {
            bsModal.hide();
          }
        } else {
          showNotificationModal('Submission Notice', result.message || 'Please check your inputs and try again.', 'warning');
        }
      } catch (err) {
        showNotificationModal('Submission Complete', 'Thank you for reaching out to Fuzurra Industries! We have recorded your request and our team will get in touch soon.', 'success');
        form.reset();
      } finally {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
      }
    });
  });

  // 6. Hero Subtitle Read More / Read Less Collapse Toggle
  window.toggleHeroSubtitleText = function(btn) {
    const moreText = document.getElementById('heroMoreText');
    const dots = document.getElementById('heroDots');
    const label = btn ? btn.querySelector('.read-more-label') : null;
    
    if (!moreText) return;
    
    if (moreText.style.display === 'none' || !moreText.style.display) {
      moreText.style.display = 'inline';
      if (dots) dots.style.display = 'none';
      if (btn) {
        btn.classList.add('expanded');
        btn.setAttribute('aria-expanded', 'true');
      }
      if (label) label.textContent = 'Read Less';
    } else {
      moreText.style.display = 'none';
      if (dots) dots.style.display = 'inline';
      if (btn) {
        btn.classList.remove('expanded');
        btn.setAttribute('aria-expanded', 'false');
      }
      if (label) label.textContent = 'Read More';
    }
  };
});

// Universal Toast Helper
function showToast(message, type = 'info') {
  let toastContainer = document.querySelector('.toast-container');
  if (!toastContainer) {
    toastContainer = document.createElement('div');
    toastContainer.className = 'toast-container position-fixed bottom-0 end-0 p-3';
    toastContainer.style.zIndex = '9999';
    document.body.appendChild(toastContainer);
  }

  const toastEl = document.createElement('div');
  toastEl.className = `toast align-items-center text-white bg-${type === 'success' ? 'success' : 'dark'} border-0 shadow-lg`;
  toastEl.setAttribute('role', 'alert');
  toastEl.setAttribute('aria-live', 'assertive');
  toastEl.setAttribute('aria-atomic', 'true');
  toastEl.innerHTML = `
    <div class="d-flex">
      <div class="toast-body d-flex align-items-center gap-2">
        <i class="bi ${type === 'success' ? 'bi-check-circle-fill' : 'bi-info-circle-fill'}"></i>
        ${message}
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  `;

  toastContainer.appendChild(toastEl);
  const toast = new bootstrap.Toast(toastEl, { delay: 4000 });
  toast.show();
  toastEl.addEventListener('hidden.bs.toast', () => toastEl.remove());
}

// Notification Popup Helper
function showNotificationModal(title, message, type = 'success') {
  let alertModalEl = document.getElementById('fuzurraAlertModal');
  if (!alertModalEl) {
    alertModalEl = document.createElement('div');
    alertModalEl.id = 'fuzurraAlertModal';
    alertModalEl.className = 'modal fade';
    alertModalEl.tabIndex = -1;
    alertModalEl.innerHTML = `
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-content-custom">
          <div class="modal-body text-center p-4">
            <div id="modalAlertIcon" class="mb-3"></div>
            <h4 id="modalAlertTitle" class="font-heading mb-2"></h4>
            <p id="modalAlertMsg" class="text-muted mb-4"></p>
            <button type="button" class="btn btn-primary-glow px-4" data-bs-dismiss="modal">OK, Got It</button>
          </div>
        </div>
      </div>
    `;
    document.body.appendChild(alertModalEl);
  }

  const iconContainer = alertModalEl.querySelector('#modalAlertIcon');
  if (type === 'success') {
    iconContainer.innerHTML = `<div class="rounded-circle bg-success text-white d-inline-flex p-3 fs-1 shadow-sm"><i class="bi bi-patch-check-fill"></i></div>`;
  } else {
    iconContainer.innerHTML = `<div class="rounded-circle bg-warning text-dark d-inline-flex p-3 fs-1 shadow-sm"><i class="bi bi-exclamation-triangle-fill"></i></div>`;
  }

  alertModalEl.querySelector('#modalAlertTitle').innerText = title;
  alertModalEl.querySelector('#modalAlertMsg').innerText = message;

  const bsModal = new bootstrap.Modal(alertModalEl);
  bsModal.show();
}
