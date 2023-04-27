@extends('frontend.galeri.all_galeri')
@section('galericategory')
    <ul id="filters" class="clearfix">
        @foreach ($category as $item)
            <li><a href="{{ route('category.galeri', $item->id) }}">
                    <span class="filter" data-filter="app card icon web">{{ $item->galeri_category }}</span></a>
            </li>
        @endforeach
    </ul>
    @extends('frontend.galeri.galeri')
@endsection
