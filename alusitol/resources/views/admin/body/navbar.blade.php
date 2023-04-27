@php
    $route = Route::current()->getName();
@endphp
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!--小屏幕导航按钮和logo-->
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand"> pha-Admin</a>
        </div>
        <!--小屏幕导航按钮和logo-->
        <!--导航-->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ $route == 'dashboard' ? 'active' : '' }} "><a href="{{ route('dashboard') }}"><span
                            class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Dashboard</a></li>
                <li class="{{ $route == 'all.alu' ? 'active' : '' }} "><a href="{{ route('all.alu') }}"><span
                            class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Alu -
                        Alu</a></li>
                <li class="{{ $route == 'all.berita.admin' ? 'active' : '' }}"><a
                        href="{{ route('all.berita.admin') }}">
                        <span class="glyphicon glyphicon-expand"></span>&nbsp;&nbsp;Berita</a></li>

                <li class="{{ $route == 'all.galeri.admin' ? 'active' : '' }}"><a
                        href="{{ route('all.galeri.admin') }}"><span
                            class="glyphicon glyphicon-tasks"></span>&nbsp;&nbsp;Galeri</a></li>
                <li><a href="{{ route('all.layanan.admin') }}"><span
                            class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Layanan</a></li>
                <li><a href="{{ route('all.tentang.desa') }}"><span
                            class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Tentang Desa</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        admin
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li><a href="index.html"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Edit
                                Profil</a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('admin.logout') }}"><span
                            class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Logout</a></li>
            </ul>
        </div>
        <!--导航-->
    </div>
</nav>
