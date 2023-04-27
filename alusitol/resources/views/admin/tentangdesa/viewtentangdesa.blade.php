@extends('admin.admin_master')
@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @Include('admin.tentangdesa.navandfooter.tentangdesa_nav')

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="w5p">id</th>
                                <th class="w10p">Tentang Desa</th>
                                <th class="w10p">Visi Misi</th>
                                <th class="w15p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($id = 1)
                            @foreach ($tentangdesa as $item)
                                <tr>
                                    <td class="center">{{ $id++ }}</td>
                                    <td class="center">{!! $item->tentangdesa !!}</td>
                                    <td class="center">{!! $item->visimisi !!}</td>

                                    <td class="center">

                                        <a href="{{ route('edit.tentangdesa', $item->id) }}" name="edit"><i
                                                class="glyphicon glyphicon-pencil"></i> Edit</a>
                                        <a href="{{ route('delete.tentangdesa', $item->id) }}"><i
                                                class="glyphicon glyphicon-remove"></i>
                                            Hapus</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                @include('admin.tentangdesa.navandfooter.tentangdesa_footer')
            </div>
        </div>
    </div>
    </div>
@endsection
