// resources/js/app.js

// Import Bootstrap's JS bundle (includes Popper.js)
import 'bootstrap';

// Optional: Run after DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    // === Sidebar Toggle Example ===
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');

    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed'); // you can style .collapsed in SCSS
        });
    }

    // === Initialize Bootstrap Tooltips ===
    const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.forEach(el => {
        new bootstrap.Tooltip(el);
    });

    // === Initialize Bootstrap Popovers ===
    const popoverTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.forEach(el => {
        new bootstrap.Popover(el);
    });

    // === Dismiss alerts automatically after 5s (optional) ===
    setTimeout(() => {
        document.querySelectorAll('.alert-dismissible.fade.show').forEach(alert => {
            alert.classList.remove('show');
            alert.classList.add('hide');
        });
    }, 5000);
});
