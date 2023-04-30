<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Menu</li>

        <li>
            <a href="index.html" class="waves-effect">
                <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="calendar.html" class=" waves-effect">
                <i class="fab fa-twitch"></i>
                <span>Alu - Alu</span>
            </a>
        </li>
        <li class="mm-active">
            <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                <i class="ri-layout-3-line"></i>
                <span>Tentang Desa</span>
            </a>
            <ul class="sub-menu mm-collapse mm-show" aria-expanded="true" style="">
                <li>
                    <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">Tentang Desa</a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="{{ route('all.tentang.desa') }}">All Tentang Desa</a></li>
                        <li><a href="{{ route('add.tentang.desa') }}">Add Tentang Desa</a></li>

                    </ul>
                </li>

                <li class="">
                    <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">Perangkat Desa</a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true" style="height: 0px;">
                        <li><a href="{{ route('all.perangkat.desa') }}">ALL Perangkat Desa</a></li>
                        <li><a href="{{ route('add.perangkat.desa') }}">Add Perangkat Desa</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <!--Berita-->
        <li>
            <a href="#" class="has-arrow waves-effect">
                <i class="ri-article-line"></i>
                <span>Berita</span>
            </a>
            <ul class="sub-menu" aria-expanded="true">
                <li><a href="{{ route('all.berita') }}">Semua Berita</a></li>
                <li><a href="{{ route('add.berita') }}">Tambahkan Berita</a></li>
            </ul>
        </li>

        <!--Kategori Berita-->
        <li>
            <a href="#" class="has-arrow waves-effect">
                <i class="ri-list-check"></i>
                <span>Kategori Berita</span>
            </a>
            <ul class="sub-menu" aria-expanded="true">
                <li><a href="{{ route('all.berita.category') }}">Semua Kategori Berita</a></li>
                <li><a href="{{ route('add.berita.category') }}">Tambahkan Kategori Berita</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="has-arrow waves-effect">
                <i class="mdi mdi-folder-multiple-image"></i>
                <span>Galeri</span>
            </a>
            <ul class="sub-menu" aria-expanded="true">
                <li><a href="{{ route('all.galeri') }}">Semua Galeri</a></li>
                <li><a href="{{ route('add.galeri') }}">Tambahkan Galeri</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="has-arrow waves-effect">
                <i class="mdi mdi-folder-multiple-plus"></i>
                <span>Kategori Galeri</span>
            </a>
            <ul class="sub-menu" aria-expanded="true">
                <li><a href="{{ route('all.galeri.category') }}">Semua Kategori Galeri</a></li>
                <li><a href="{{ route('add.galeri.category') }}">Tambahkan Kategori Galeri</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="has-arrow waves-effect">
                <i class="fab fa-stripe-s"></i>
                <span>Layanan</span>
            </a>
            <ul class="sub-menu" aria-expanded="true">
                <li><a href="{{ route('all.layanan') }}">Semua Layanan</a></li>
                <li><a href="{{ route('add.layanan') }}">Tambahkan Layanan</a></li>
            </ul>
        </li>
        <li>
        <li>
            <a href="#" class="has-arrow waves-effect">
                <i class=" fab fa-slack-hash"></i>
                <span>Kategori Layanan</span>
            </a>
            <ul class="sub-menu" aria-expanded="true">
                <li><a href="{{ route('all.layanan.category') }}">Semua Kategori Layanan</a></li>
                <li><a href="{{ route('add.layanan.category') }}">Tambahkan Kategori Layanan</a></li>
            </ul>
        </li>




    </ul>
</div>
