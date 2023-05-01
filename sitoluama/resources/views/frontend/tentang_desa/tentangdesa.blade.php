@extends('frontend.user_master')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
            <div class="container">
                <h2>Tentang Desa</h2>
                <p>Page yang mendeksripsikan terkait Desa Sitoluama</p>
            </div>
        </div><!-- End Breadcrumbs -->

        @foreach ($tentangdesa as $item)
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container aos-init aos-animate" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6 mt-5 order-1 order-lg-2 aos-init aos-animate" data-aos="fade-left"
                            data-aos-delay="100">
                            <img src="{{ asset('frontend/assets/img/hero-bg.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content mt-4">
                            <h3>{!! $item->tentangdesa !!}</h3>
                            <p class="fst-italic">
                                {!! $item->visimisi !!}
                            </p>
                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->
        @endforeach



        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container aos-init" data-aos="fade-up">

                <div class="section-title">
                    <h2>Perangkat Desa</h2>
                    <p>Siapa aja perangkat desa di sitoluama</p>
                </div>
                <div class="testimonials-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden aos-init"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper" id="swiper-wrapper-07575f11b36ab7fe" aria-live="off"
                        style="transform: translate3d(-1713px, 0px, 0px); transition-duration: 0ms;">


                        @foreach ($perangkatdesa as $item)
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group"
                                aria-label="2 / 5" style="width: 551px; margin-right: 20px;">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="{{ asset($item->fotoperangkat) }}" class="testimonial-img" alt="">
                                        <h3>{{ $item->nama }}</h3>
                                        <h4>{{ $item->jabatan }}</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            {!! $item->Deskripsi !!}
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach
                    </div>
                    <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 1"></span><span
                            class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                            aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet"
                            tabindex="0" role="button" aria-label="Go to slide 3"></span><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0"
                            role="button" aria-label="Go to slide 5"></span>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>


            </div>
        </section><!-- End Testimonials Section -->

    </main>
@endsection
