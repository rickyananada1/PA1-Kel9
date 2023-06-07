@extends('front.user_master')

@section('user_content')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home.user') }}">Home</a></li>
                <li>Layanan Desa</li>
            </ol>
            <h2>Layanan Desa</h2>
        </div>
    </section>

    <section id="values" class="values">
        <div class="container">
            <div class="row">
                @foreach ($categoryL as $item)
                    <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card" style="background-image: url({{ asset($item->layanan_category_image) }});">
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
@endsection

@section('scripts')
    <script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>
    <script>
        $(window).on('load', function() {
            AOS.init();
        });
    </script>
@endsection
