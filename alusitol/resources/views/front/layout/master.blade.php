<!DOCTYPE html>
<html>

<head>
    @include('front.layout.top');
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
    <div id="main-wrapper">
        <!-- Page Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- preloader -->

        <div class="uc-mobile-menu-pusher">
            <div class="content-wrapper">

                @include('front.layout.header');
                @yield('content');
                @include('front.layout.footer');

            </div>
            <!-- #content-wrapper -->

        </div>
        <!-- .offcanvas-pusher -->

        <a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

        <div class="uc-mobile-menu uc-mobile-menu-effect">
            <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
                id="uc-mobile-menu-close-btn">&times;</button>
            <div>
                <div>
                    <ul id="menu">
                        <li class="active"><a href="blog.html">Home</a></li>
                        <li><a href="category.html">Profil Desa</a></li>
                        <li><a href="blog.html">Berita</a></li>
                        <li><a href="category.html">Alu-Alu</a></li>
                        <li><a href="blog.html">Galeri</a></li>
                        <li><a href="category.html">About</a></li>
                </div>
            </div>
        </div>
        <!-- .uc-mobile-menu -->

    </div>
    <!-- #main-wrapper -->
    @include('front.layout.bottomjs');

</body>

</html>
