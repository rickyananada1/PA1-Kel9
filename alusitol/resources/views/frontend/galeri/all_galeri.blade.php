@extends('frontend.main_master')
@section('main')
    <div id="portfolio" class="portfolio">
        <!-- Portfolio Starts Here -->
        <div class="portfolios entertain_box wow fadeInUp" data-wow-delay="0.4s" id="project">
            <div class="container">
                <div class="portfolio-info">
                    <h3>GALLERY</h3>
                    <p>
                        Each of our prjects involve the following stages of creation
                        process. Elit varius est, et ornare ante massa quis tellus. Mauris
                        nec lacinia nisl. Curabitur tempus tellus et vulputate vestibulum.
                    </p>
                </div>

                @yield('galericategory')
                @yield('galeri')
            </div>
        </div>
    </div>
@endsection
