document.addEventListener('DOMContentLoaded', function () {
    const savedSidebarColor = localStorage.getItem('sidebar-color');
    const savedSidebarType = localStorage.getItem('sidebar-type');
    const isDarkMode = localStorage.getItem('dark-mode') === 'enabled';
  
    // Terapkan pengaturan jika ada
    if (savedSidebarColor) {
      document.querySelector('.sidebar').setAttribute('data-color', savedSidebarColor);
    }
  
    if (savedSidebarType) {
      document.querySelector('.sidebar').setAttribute('class', `sidebar ${savedSidebarType}`);
    }
  
    if (isDarkMode) {
      document.body.classList.add('dark-version');
      document.getElementById('dark-version').checked = true;
    }
  });
  