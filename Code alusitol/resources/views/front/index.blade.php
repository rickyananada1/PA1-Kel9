@extends('front.user_master')
@include('front.partials.banner')
@section('user_content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <section id="why-us" class="why-us" data-aos="fade-up">
        <div class="container aos-init aos-animate">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-stretch">
                    <div class="content">
                        <h3> Layanan Desa </h3>
                        <p>
                            Layanan Desa Apa - Apa aja yang melibatkan tempat yang ada dalam
                            Desa Sitoluama. Hal ini memberikan kesempatan
                            untuk menjelajahi dan mengenal lebih dekat desa.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('layanan.user') }}" class="more-btn">Lebih Banyak <i
                                    class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 d-flex align-items-stretch">
                    <section id="values" class="values">
                        <div class="container">
                            <div class="row">
                                @foreach ($categoryJJ as $item)
                                    <div class="col-md-4 d-flex align-items-stretch aos-init aos-animate">
                                        <div class="card"
                                            style="background-image: url({{ asset($item->layanan_category_image) }});">
                                            <div class="card-body">
                                                <h5 class="card-title"><a
                                                        href="{{ route('all.categoryL', $item->id) }}">{{ $item->layanan_category }}</a>
                                                </h5>
                                                <p class="card-text">{!! $item->jelajah_category_description !!}.</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </section>

    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title aos-init aos-animate" data-aos="fade-up">
                <h2>Galeri Terbaru</h2>
            </div>

            <section id="events" class="events">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        @foreach ($galeri as $item)
                            <div class="col-md-3 d-flex align-items-stretch">
                                <div class="card">
                                    <div class="card-img">
                                        <a href="{{ asset($item->galeri_image) }}" class="image-link"
                                            data-mfp-src="{{ asset($item->galeri_image) }}">
                                            <img src="{{ asset($item->galeri_image) }}" alt="...">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </section><!-- End Events Section -->

        </div>
    </section>

    <section id="events" class="events">
        <div class="container" data-aos="fade-up">
            <div class="section-title aos-init aos-animate" data-aos="fade-up">
                <h2>Berita Terbaru</h2>
                <!-- ======= Courses Section ======= -->
                <section id="courses" class="courses">
                    <div class="container aos-init aos-animate" data-aos="fade-up">

                        <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">

                            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                                @foreach ($berita as $item)
                                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                                        <div class="course-item">
                                            <img src="{{ asset($item->berita_image) }}" class="img-fluid" alt="...">
                                            <div class="course-content">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <a class="tt"
                                                        href="{{ route('all.category', $item['category']['id']) }}">{{ $item['category']['berita_category'] }}</a>
                                                    <p class="price"> <i class="bi bi-clock"></i>
                                                        {{ $item->created_at->diffForHumans() }}</p>
                                                </div>

                                                <h3><a
                                                        href="{{ route('single.berita', $item->id) }}">{{ $item->berita_title }}</a>
                                                </h3>
                                                <p> {!! Str::limit($item->berita_description, 150) !!}</p>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>

                </section><!-- End Courses Section -->

            </div>
        </div>
    </section>
@endsection
