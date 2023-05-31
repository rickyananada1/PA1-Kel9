@extends('front.user_master')
@section('user_content')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home.user') }}">Home</a></li>
                <li>layanan</li>
            </ol>
            <h2>{{ $categoryname->layanan_category }}</h2>
        </div>
    </section>

    <section id="events" class="events">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                @foreach ($layananpost as $item)
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset($item->layanan_image) }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">{{ $item->layanan_title }}</a></h5>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
