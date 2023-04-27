@extends('admin.admin_master')
@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @Include('admin.layanan.navandfooter.layanan_nav')

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="w5p">id</th>
                                <th class="w10p">Category</th>
                                <th class="w10p">Image</th>
                                <th class="w10p">Short Desc</th>
                                <th class="w15p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($id = 1)
                            @foreach ($layanan as $item)
                                <tr>
                                    <td class="center">{{ $id++ }}</td>
                                    <td class="center">{{ $item['category']['layanan_category'] }}</td>
                                    <td class="center"><img src="{{ asset($item->layanan_image) }}" alt=""
                                            style="width: 100px; height: 100px;"></td>
                                    <td style="word-wrap: break-word;">{!! $item->layanan_short_description !!}</td>

                                    <td class="center">

                                        <a href="{{ route('edit.layanan', $item->id) }}" name="edit"><i
                                                class="glyphicon glyphicon-pencil"></i> Edit</a>
                                        <a href="{{ route('delete.layanan', $item->id) }}"><i
                                                class="glyphicon glyphicon-remove"></i>
                                            Hapus</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                @include('admin.layanan.navandfooter.layanan_footer')
            </div>
        </div>
    </div>
    </div>
@endsection
