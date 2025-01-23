<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head') <!-- Menyisipkan file head -->
</head>
<body>
    @include('layout.navbar') <!-- Menyisipkan file navbar -->

    <div class="container">
        @yield('content') <!-- Tempat untuk konten halaman -->
    </div>

    @include('layout.sidenavbar') <!-- Menyisipkan file sidebar -->
    @include('layout.footer') <!-- Menyisipkan file footer -->
</body>
</html>
