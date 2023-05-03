@extends('frontend.user_master')
<!-- ======= Hero Section ======= -->
@include('frontend.bodyhome.hero')
<!-- End Hero -->
@section('content')
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Layanan Desa</h3>
                        <p>
                            Layanan Desa merupakan kumpulan layanan publik yang disediakan oleh pemerintah desa untuk
                            memenuhi kebutuhan masyarakat di wilayah desa. Layanan ini dapat mencakup berbagai bidang,
                            seperti kesehatan, pendidikan, keamanan, pelayanan administrasi, dan sebagainya.
                        </p>
                        <div class="text-center">
                            <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            @foreach ($layanan as $item2)
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>{{ $item2->layanan_title }}</h4>
                                        <p>
                                            {!! Str::limit($item2->layanan_description, 70) !!}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End .content-->
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Us Section -->



    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Berita</h2>
                <p>Berita Terbaru</p>
            </div>


            <!-- Start Berita Item-->

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($berita as $item)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">
                            <img src="{{ asset($item->berita_image) }}" class="img-fluid" alt="..." />
                            <div class="course-content">
                                <div class="d-flex justify-content-start align-items-center mb-3">
                                    @foreach (explode(',', $item->berita_tags) as $tag)
                                        <div class="tag">
                                            <h4>{{ $tag }}</h4>
                                        </div>
                                    @endforeach
                                </div>

                                <h3><a href="course-details.html">{{ $item->berita_title }}</a></h3>
                                <p>
                                    {!! Str::limit($item->berita_description, 200) !!}
                                </p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                <!-- End Berita Item-->

            </div>
        </div>
    </section>
    <!-- End Popular Courses Section -->


    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Perangkat</h2>
            <p>Perangkat Desa</p>
        </div>
        <!-- ======= Trainers Section ======= -->
        <section id="trainers" class="trainers">
            <div class="container" data-aos="fade-up">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    @foreach ($profilperangkat as $item3)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <img src="{{ asset($item3->fotoperangkat) }}" class="img-fluid" alt="" />
                                <div class="member-content">
                                    <h4>{{ $item3->nama }}</h4>
                                    <span>{{ $item3->jabatan }}</span>
                                    <p>
                                        Masa Jabatan {{ $item3->masajabatan }}
                                    </p>
                                    <div class="social">
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Trainers Section -->
    @endsection
