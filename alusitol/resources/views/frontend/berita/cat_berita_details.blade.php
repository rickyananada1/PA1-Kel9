@extends('frontend.body.banner2')
@section('main')
    <!-- blog -->
    <!-- Page Starts Here -->
    <div class="blog-page">
        <div class="container">
            <div class="gallery">
                <h2>OUR <span>Berita</span></h2>
                <p>Each of our projects involve the following stages of creation process.
                    Elit varius est, et ornare ante massa quis tellus. Mauris nec lacinia
                    nisl. Curabitur tempus tellus et vulputate vestibulum.</p>
            </div>
            <div class="blog-grids">
                <div class="blog-content">
                    @foreach ($beritapost as $all)
                        <div class="blog-post">
                            <h4><a href="">{{ $all->berita_title }}</a></h4>
                            <div class="post-details">
                                <p>Posted :
                                    &nbsp;&nbsp;{{ Carbon\Carbon::parse($all->created_at)->diffForHumans() }}
                                    &nbsp;&nbsp; Category <a>{{ $all->berita_tags }}</a>
                                </p>
                            </div>
                            <a href=""><img src="{{ asset($all->berita_image) }}" alt="" /></a>
                            <p>{{ $all->berita_long_description }}</p>
                            <a class="hvr-shutter-in-vertical button more" href="">READ MORE</a>
                        </div>
                    @endforeach


                </div>
                <div class="blog-sidebar">
                    <h4>Categories</h4>
                    <ul class="category">
                        @foreach ($category as $cat)
                            <li><a href="{{ route('category.berita', $cat->id) }}">{{ $cat->berita_category }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="featured">
                    <h4>FEATURE POSTS</h4>
                    <ul>
                        <li><a href="single.html"><img src="{{ asset('frontend/assets/images/s1.jpg') }}"
                                    alt="" /></a>
                        </li>
                        <li><a href="single.html"><img src="{{ asset('frontend/assets/images/s2.jpg') }}"
                                    alt="" /></a>
                        </li>
                        <li><a href="single.html"><img src="{{ asset('frontend/assets/images/s3.jpg') }}"
                                    alt="" /></a>
                        </li>
                        <li><a href="single.html"><img src="{{ asset('frontend/assets/images/s4.jpg') }}"
                                    alt="" /></a>
                        </li>
                        <li><a href="single.html"><img src="{{ asset('frontend/assets/images/s5.jpg') }}"
                                    alt="" /></a>
                        </li>
                        <li><a href="single.html"><img src="{{ asset('frontend/assets/images/s6.jpg') }}"
                                    alt="" /></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>

            </div>
            <div class="pag-nations">
                <ul class="page-list">
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">More</a></li>
                    <li><a href="#">19</a></li>
                    <li><a href="#">20</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Stops Here -->
    <!-- //blog -->
@endsection
