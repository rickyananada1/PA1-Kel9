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


    <section class="about about__style__two">
        <div class="container">
            <div class="row align-items-center">
            </div>

            <div class="col-lg-">
                @foreach ($tentangdesa as $item)
                    <div class="about__content">
                        <div class="section__title">
                            <span class="sub-title">Tentang Desa</span>
                            <h2 class="title">Tentang Desa Mambahas Tu Desa Sitoluama</h2>
                        </div>
                        <div class="about__exp">

                            <div class="about__exp__content">
                                <p><span>Sitoluama</span> Laguboti, Kabupaten Toba Samosir <br> Sumatera Utara,
                                    Indonesia</p>
                            </div>
                        </div>
                        <p class="desc">{!! $item->tentangdesa !!}
                        </p>
                    </div>
                @endforeach

            </div>
        </div>

        </div>
    </section>
@endsection
