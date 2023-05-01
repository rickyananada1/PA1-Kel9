@extends('frontend.user_master')
@section('content')
    <main id="main" data-aos="fade-in" class="aos-init aos-animate">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">
                <h2>Galeri</h2>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Courses Section ======= -->
        <section id="courses" class="courses">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">

                    <div class="row" data-aos="zoom-in" data-aos-delay="100">
                        @foreach ($galeri as $item)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch ">
                                <div class="course-item m-1">
                                    <img src="{{ asset($item->galeri_image) }}" class="img-fluid" alt="..." />
                                    <div class="course-content">
                                        <div class="d-flex justify-content-start align-items-center mb-3">
                                            @foreach (explode(',', $item['category']['galeri_category']) as $tag)
                                                <div class="tag">
                                                    <h4>{{ $tag }}</h4>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
                {{ $galeri->onEachSide(1)->links('pagination::bootstrap-4') }}

        </section><!-- End Courses Section -->

    </main><!-- End #main -->
@endsection
