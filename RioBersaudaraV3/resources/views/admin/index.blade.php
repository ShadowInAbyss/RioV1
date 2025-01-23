<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.head')
  <link rel="stylesheet" href="../assets/css/LandPage.css">
  <title>Loading...</title>
</head>
<body>
  <div class="loading-container">
    <div class="spinner"></div>
    <p class="loading-text">Loading, please wait...</p>
  </div>

  <script>
    // Script untuk pengalihan otomatis
    setTimeout(() => {
      window.location.href = "{{ url('admin/dashboard') }}"; // Sesuaikan dengan rute yang benar
    }, 3000); // Waktu tunggu dalam milidetik (3 detik)
  </script>
</body>
</html>
