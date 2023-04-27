    <div class="navigation">
        <span class="menu"><img src="{{ asset('frontend/assets/images/menu.png') }}" alt="" /></span>
        <ul class="nav1">
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="services.html">LAYANAN</a></li>
            <li><a href="{{ route('all.galeri') }}">GALLERY</a></li>
            <li><a href="{{ route('all.berita') }}">BERITA</a></li>
            <li><a href="{{ route('add.alu') }}">ALU -ALU</a></li>
            <li><a href="{{ route('login') }}">LOGIN</a></li>

        </ul>
        <!-- script for menu -->
        <script>
            $("span.menu").click(function() {
                $("ul.nav1").slideToggle(300, function() {
                    // Animation complete.
                });
            });
        </script>
        <!-- //script for menu -->

    </div>
