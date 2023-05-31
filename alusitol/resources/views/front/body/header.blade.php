<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <img src="{{ asset('front/assets/img/logositoluama.png') }}" style="width: 3.5em" alt="">
        <h1 class="logo me-auto"><a href="{{ route('home.user') }}">Sitoluama</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="{{ request()->routeIs('home.user') ? 'active' : '' }}"
                        href="{{ route('home.user') }}">Home</a></li>
                <li class="dropdown">
                    <a href="#"><span>Info Desa</span> <i class="bi bi-chevron-down"></i></a>
                    <ul class="dropdown-active">
                        <li><a href="{{ route('tentangdesa.user') }}">Tentang Desa</a></li>
                        <li><a href="{{ route('sejarahdesa.user') }}">Sejarah Desa</a></li>
                        <li><a href="{{ route('visimisi.user') }}">Visi Misi</a></li>
                        <li><a href="{{ route('geografis.user') }}">Geografis Desa</a></li>
                        <li><a href="{{ route('perangkatdesa.user') }}">Perangkat Desa</a></li>
                    </ul>
                </li>
                <li><a class="{{ request()->routeIs('layanan.user') ? 'active' : '' }}"
                        href="{{ route('layanan.user') }}">Jelajah desa</a></li>
                <li><a class="{{ request()->routeIs('berita.user') ? 'active' : '' }}"
                        href="{{ route('berita.user') }}">Berita Desa</a></li>
                <li><a class="{{ request()->routeIs('galeri.user') ? 'active' : '' }}"
                        href="{{ route('galeri.user') }}">Galeri</a></li>
                <li><a class="{{ request()->routeIs('all.alualu') ? 'active' : '' }}"
                        href="{{ route('alualu.user') }}">Alu - Alu</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        @if (Auth::check())
            <div class="dropdown">
                <a href="#" class="get-started-btn">{{ Auth::user()->username }}</a>
                <div class="dropdown-content">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        @else
            <a href="{{ route('login') }}" class="get-started-btn">Login</a>
        @endif



    </div>
</header>
