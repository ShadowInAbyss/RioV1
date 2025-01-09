function sidebarColor(element) {
    const color = element.getAttribute('data-color');
    localStorage.setItem('sidebar-color', color); // Simpan warna ke localStorage
    document.querySelector('.sidebar').setAttribute('data-color', color);
  }
  
  function sidebarType(element) {
    const type = element.getAttribute('data-class');
    localStorage.setItem('sidebar-type', type); // Simpan jenis sidebar ke localStorage
    document.querySelector('.sidebar').setAttribute('class', `sidebar ${type}`);
  }
  
  function darkMode(element) {
    const isDarkMode = element.checked;
    localStorage.setItem('dark-mode', isDarkMode ? 'enabled' : 'disabled');
    document.body.classList.toggle('dark-version', isDarkMode);
  }
  