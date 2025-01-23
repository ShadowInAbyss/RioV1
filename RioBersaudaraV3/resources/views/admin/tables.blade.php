<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.headtbl')
</head>
<body class="g-sidenav-show bg-gray-100">
    @include('layout.sidenavbar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        @include('layout.navbar')

        <div class="container-fluid py-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h6 class="text-dark">Tabel Produk</h6>
                    <form action="{{ route('admin.tables') }}" method="GET">
                        <div class="row">
                            <div class="col-md-4 custom-dropdown">
                                <select name="category" class="form-control" onchange="this.form.submit()">
                                    <option value="">Pilih Kategori</option>
                                    <option value="barangkeluar" {{ request('category') == 'barangkeluar' ? 'selected' : '' }}>Barang Keluar</option>
                                    <option value="barangmasuk" {{ request('category') == 'barangmasuk' ? 'selected' : '' }}>Barang Masuk</option>
                                    <option value="inventoris" {{ request('category') == 'inventoris' ? 'selected' : '' }}>Inventoris</option>
                                    <option value="penjualan" {{ request('category') == 'penjualan' ? 'selected' : '' }}>Penjualan</option>
                                    <option value="untungrugi" {{ request('category') == 'untungrugi' ? 'selected' : '' }}>Untung Rugi</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body text-white">
                    @if (request('category'))
                        @include('admin.produk.' . request('category'))
                    @else
                        <p class="text-muted">Pilih kategori untuk melihat data.</p>
                    @endif
                </div>
            </div>
        </div>
    </main>
    @include('layout.jscore')
</body>
</html>
