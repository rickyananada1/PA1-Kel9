@extends('front.user_master')
@section('user_content')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home.user') }}">Home</a></li>
                <li>Perangkat Desa</li>
            </ol>
            <h2>Perangkat Desa</h2>
        </div>
    </section>

    <section id="team" class="team section-bg">
        <div class="container">

            <div class="row">

                @foreach ($perangkatdesa as $item)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset($item->fotoperangkat) }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ $item->nama }}</h4>
                                <span>{{ $item->jabatan }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            {{ $perangkatdesa->onEachSide(1)->links('pagination::bootstrap-5') }}

        </div>
    </section>

    @include('front.body.footer')
@endsection
