@extends('frontend.user_master')
@section('content')
    <main id="main" data-aos="fade-in" class="aos-init aos-animate">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">
                <h2>{{ $categoryname->berita_category }}</h2>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Courses Section ======= -->
        <section id="courses" class="courses">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="row aos-init aos-animate" d`ata-aos="zoom-in" data-aos-delay="100">

                    <div class="row" data-aos="zoom-in" data-aos-delay="100">
                        @foreach ($beritapost as $item)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch ">
                                <div class="course-item m-1">
                                    <img src="{{ asset($item->berita_image) }}" class="img-fluid" alt="..." />
                                    <div class="course-content">
                                        <div class="d-flex justify-content-start align-items-center mb-3">
                                            @foreach (explode(',', $item->berita_tags) as $tag)
                                                <div class="tag">
                                                    <h4>{{ $tag }}</h4>
                                                </div>
                                            @endforeach
                                        </div>

                                        <h3><a href="{{ route('single.berita') }}">{{ $item->berita_title }}</a></h3>
                                        <p>
                                            {!! Str::limit($item->berita_description, 200) !!}
                                        </p>
                                        <div class="trainer d-flex justify-content-between align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
                {{ $beritapost->onEachSide(1)->links('pagination::bootstrap-4') }}

        </section><!-- End Courses Section -->

    </main><!-- End #main -->
@endsection
