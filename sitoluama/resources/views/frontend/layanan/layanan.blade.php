@extends('frontend.user_master')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Layanan</h2>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    @foreach ($layanan as $item)
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset($item->layanan_image) }}" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->layanan_title }}</h5>
                                    <div class="category-box ">
                                        <p class="category">{{ $item['category']['layanan_category'] }}</p>
                                    </div>
                                    <p class="card-text"> {!! Str::limit($item->layanan_description, 300) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $layanan->onEachSide(1)->links('pagination::bootstrap-4') }}
            </div>
        </section><!-- End Events Section -->
    </main><!-- End #main -->
@endsection
