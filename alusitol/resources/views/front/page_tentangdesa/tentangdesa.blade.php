@extends('front.user_master')
@section('user_content')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home.user') }}">Home</a></li>
                <li>Tentang Desa</li>
            </ol>
            <h2>Tentang Desa</h2>
        </div>
    </section>


    <section id="blog" class="blog">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    @foreach ($tentangdesa as $item)
                        <article id="berita-{{ $loop->index }}" class="entry">
                            <div class="section__title">
                                <span class="judultntg">Tentang Desa</span>
                            </div>
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe width="100%" height="300em" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=Sitoluama&t=&z=11&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                        href="https://2yu.co"></a><br>
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 100%;
                                            width: 100%;
                                        }
                                    </style><a href="https://embedgooglemap.2yu.co/"></a>
                                    <style>
                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 100%;
                                            width: 100%;
                                        }
                                    </style>
                                </div>
                            </div>
                            <div class="about__exp">

                                <div class="about__exp__content">
                                    <p><span>Sitoluama</span> Laguboti, Kabupaten Toba Samosir <br> Sumatera Utara,
                                        Indonesia</p>
                                </div>
                            </div>


                            <div class="entry-content">
                                <p>
                                    {!! $item->tentangdesa !!}
                                </p>

                            </div>

                        </article>
                    @endforeach




                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search Berita</h3>
                        <div class="sidebar-item search-form">
                            <form action="{{ route('search.berita') }}" method="GET">
                                <input type="text" name="search" placeholder="Cari Berita">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @foreach ($category as $item)
                                    <?php
                                    $count = DB::table('beritas')
                                        ->where('berita_category_id', $item->id)
                                        ->count();
                                    ?>
                                    <li>
                                        <a href="{{ route('all.category', $item->id) }}">
                                            {{ $item->berita_category }}
                                            <span>({{ $count }})</span>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        @foreach ($beritarecent as $item)
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="{{ asset($item->berita_image) }}" alt="   ">
                                    <h4><a href="{{ route('single.berita', $item->id) }}">{{ $item->berita_title }}</a>
                                    </h4>
                                    <time datetime="2020-01-01">{{ $item->created_at->diffForHumans() }}</time>
                                </div>
                            </div><!-- End sidebar recent posts-->
                        @endforeach



                    </div><!-- End sidebar recent posts-->



                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>

        </div>
    </section>
@endsection
