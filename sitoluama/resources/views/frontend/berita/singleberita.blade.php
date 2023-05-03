@extends('frontend.user_master')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Details Berita</h2>
            </div>
        </div><!-- End Breadcrumbs -->
        @foreach ($berita as $item)
            <!-- ======= Cource Details Section ======= -->
            <section id="course-details" class="course-details">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-8">
                            <img src="{{ asset($item->berita_image) }}" class="img-fluid" alt="">
                            <h3>{{ $item->berita_title }}</h3>
                            <p>
                                {!! $item->berita_description !!}
                            </p>
                        </div>


                        <div class="col-lg-4">
                            <div class="section-title">
                                <h2>Category</h2>
                                <p>Category Berita</p>
                            </div>
                            @foreach ($category1 as $cat)
                                <div class="course-info d-flex justify-content-between align-items-center">
                                    <a href="{{ route('all.category', $cat->id) }}"<h5>{{ $cat->berita_category }}</h5> </a>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </section><!-- End Cource Details Section -->
        @endforeach


    </main><!-- End #main -->
@endsection
