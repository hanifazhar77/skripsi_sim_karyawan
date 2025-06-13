
document.getElementById('sidebarToggle').addEventListener('click', function() {
    document.querySelector('.sidebar').classList.toggle('mobile-show');
    document.querySelector('.sidebar-overlay').classList.toggle('mobile-show');
});

// Close sidebar when overlay is clicked
document.querySelector('.sidebar-overlay').addEventListener('click', function() {
    this.classList.remove('mobile-show');
    document.querySelector('.sidebar').classList.remove('mobile-show');
});