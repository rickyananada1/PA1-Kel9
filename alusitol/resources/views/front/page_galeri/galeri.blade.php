@extends('front.user_master')
@section('user_content')

    <body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home.user') }}">Home</a></li>
                    <li>Galeri</li>
                </ol>
                <h2>Galeri</h2>
            </div>
        </section>

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    @foreach ($galeri as $item)
                        <div class="col-md-3 d-flex align-items-stretch">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset($item->galeri_image) }}" alt="...">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $galeri->onEachSide(1)->links('pagination::bootstrap-5') }}

            </div>
        </section><!-- End Events Section -->
    @endsection
