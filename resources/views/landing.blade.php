<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head') <!-- Menyertakan head.blade.php -->
</head>

<body>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('layout.navbarLP') <!-- Menyertakan navbarLP.blade.php -->
    <!-- Navbar -->

    <!-- Hero Section -->
    <section class="hero bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Selamat Datang di Rio Bersaudara</h1>
            <p>Temukan produk unggulan kami yang akan mempermudah hidup Anda!</p>
            <a href="#produk" class="btn btn-light btn-lg">Lihat Produk</a>
        </div>
    </section>
    <!-- Hero Section -->

    <!-- Produk Section -->
    <section id="produk" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Produk Unggulan Kami</h2>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/produk1.jpg" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <h5 class="card-title">Produk 1</h5>
                            <p class="card-text">Deskripsi singkat produk 1 yang sangat berguna bagi Anda.</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/produk2.jpg" class="card-img-top" alt="Produk 2">
                        <div class="card-body">
                            <h5 class="card-title">Produk 2</h5>
                            <p class="card-text">Deskripsi singkat produk 2 yang sangat berguna bagi Anda.</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/produk3.jpg" class="card-img-top" alt="Produk 3">
                        <div class="card-body">
                            <h5 class="card-title">Produk 3</h5>
                            <p class="card-text">Deskripsi singkat produk 3 yang sangat berguna bagi Anda.</p>
                            <a href="#" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Produk Section -->

    <!-- Tentang Kami Section -->
    <section id="tentang" class="py-5">
        <div class="container text-center">
            <h2>Tentang Kami</h2>
            <p>Rio Bersaudara adalah perusahaan yang menawarkan berbagai produk berkualitas tinggi untuk membantu Anda menjalani aktivitas sehari-hari dengan lebih mudah.</p>
        </div>
    </section>
    <!-- Tentang Kami Section -->

    <!-- Kontak Section -->
    <section id="kontak" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Kontak Kami</h2>
            <p>Jika Anda memiliki pertanyaan, silakan hubungi kami melalui form di bawah ini.</p>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nama" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="4" placeholder="Pesan" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- Kontak Section -->

    <!-- Script Section -->
    @include('layout.jscore')
</main>
</body>

</html>