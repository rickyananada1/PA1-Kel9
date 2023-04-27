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
                    @foreach ($berita as $all)
                        <div class="blog-post">
                            <h4><a href="{{ route('berita.details', $all->id) }}">{{ $all->berita_title }}</a></h4>
                            <div class="post-details">
                                <p>Posted :
                                    &nbsp;&nbsp;<span>{{ Carbon\Carbon::parse($all->created_at)->diffForHumans() }}</span>
                                    &nbsp;&nbsp; Category :
                                    <span> {{ $all->berita_tags }}</span>
                                </p>
                            </div>
                            <a href="{{ route('berita.details', $all->id) }}"><img src="{{ asset($all->berita_image) }}"
                                    alt="" /></a>
                            <p>{!! Str::limit($all->berita_long_description, 350) !!}</p>
                            <a class="hvr-shutter-in-vertical button more"
                                href="{{ route('berita.details', $all->id) }}">READ MORE</a>
                        </div>
                    @endforeach


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
                {{ $berita->links() }}
            </div>
        </div>
    </div>
    <!-- Page Stops Here -->
    <!-- //blog -->
@endsection
