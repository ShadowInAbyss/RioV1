<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
        <a class="navbar-brand px-4 py-3 m-0" href="{{ url('/') }}">
            <img src="{{ asset('assets/img/logo-ct-dark.png') }}" class="navbar-brand-img" width="26" height="26" alt="main_logo">
            <span class="ms-1 text-sm text-dark">Creative Tim</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link text-dark {{ Request::is('admin/dashboard') ? 'active bg-dark text-white' : '' }}" href="{{ route('admin.dashboard') }}">
                    <i class="material-symbols-rounded">dashboard</i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <!-- Tables -->
            <li class="nav-item">
                <a class="nav-link text-dark {{ Request::is('admin/tables') ? 'active bg-dark text-white' : '' }}" href="{{ route('admin.tables') }}">
                    <i class="material-symbols-rounded">table_view</i>
                    <span class="nav-link-text ms-1">Tables</span>
                </a>
            </li>
            <!-- Laporan -->
            <li class="nav-item">
                <a class="nav-link text-dark {{ Request::is('admin/laporan') ? 'active bg-dark text-white' : '' }}" href="{{ route('admin.laporan') }}">
                    <i class="material-symbols-rounded">receipt_long</i>
                    <span class="nav-link-text ms-1">Laporan</span>
                </a>
            </li>
            {{-- <!-- Notifications -->
            <li class="nav-item">
                <a class="nav-link text-dark {{ Request::is('admin/notifications') ? 'active bg-dark text-white' : '' }}" href="{{ route('admin.notifications') }}">
                    <i class="material-symbols-rounded">notifications</i>
                    <span class="nav-link-text ms-1">Notifications</span>
                </a>
            </li> --}}
            <!-- Profile -->
            <li class="nav-item">
                <a class="nav-link text-dark {{ Request::is('admin/profile') ? 'active bg-dark text-white' : '' }}" href="{{ route('admin.profile') }}">
                    <i class="material-symbols-rounded">person</i>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <!-- Logout -->
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link text-dark {{ Request::is('logout') ? 'active bg-dark text-white' : '' }}">
                        <i class="material-symbols-rounded">logout</i>
                        <span class="nav-link-text ms-1">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>
