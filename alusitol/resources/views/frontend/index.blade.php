@extends('frontend.body.banner2')
@section('main')
    <div class="page-container">
        @foreach ($alualu as $item)
            <div class="page">
                <div class="to">To: {{ $item->to }}</div>
                <div class="margin"></div>
                <p>{{ $item->isi }}</p>
                <div class="from">From:{{ $item->from }}</div>
            </div>
        @endforeach
    </div>
@endsection
