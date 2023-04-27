@extends('frontend.galeri.all_galeri')

@section('galericategory')
    <ul id="filters" class="clearfix">
        @foreach ($category as $item)
            <li><a href="{{ route('category.galeri', $item->id) }}">
                    <span class="filter"
                        data-filter=".{{ strtolower($item->galeri_category) }}">{{ $item->galeri_category }}</span></a>
            </li>
        @endforeach
    </ul>
    @extends('frontend.galeri.galeri')
@endsection

@section('galeri')
    <div id="portfoliolist">
        @foreach ($galeri as $item)
            <div class="portfolio mix {{ strtolower($item->category->galeri_category) }}"
                data-cat="{{ strtolower($item->category->galeri_category) }}" style="display: inline-block; opacity: 1">
                <div class="portfolio-wrapper">
                    <a href="{{ asset($item->galeri_image) }}" title="">
                        <img class="img-responsive" src="{{ asset($item->galeri_image) }}" />
                        <div class="b-wrapper">
                            <h2>
                                <img class="img-responsive" src="{{ asset('images/e.png') }}" class="zoom"
                                    alt="" />
                            </h2>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
