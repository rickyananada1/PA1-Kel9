@php
    $route = Route::current()->getName();
@endphp
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="{{ route('home.admin') }}">Sitoluama</a></h1>


        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="{{ route('home.admin') }}">Home</a></li>
                <li><a href="{{ route('tentang.desa') }}">Tentang Desa</a></li>
                <li><a href="{{ route('berita') }}">Berita</a></li>
                <li><a href="{{ route('layanan') }}">Layanan</a></li>
                <li><a href="{{ route('galeri') }}">Galeri</a></li>
                <li><a href="{{ route('alualu') }}">Alu - Alu</a></li>


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        <a href="{{ route('home.admin') }}" class="get-started-btn">Login</a>
    </div>
</header>
