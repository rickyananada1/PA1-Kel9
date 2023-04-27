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

                                <th class="w10p">foto Perangkat</th>
                                <th class="w10p">Profil Perangkat</th>
                                <th class="w15p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($id = 1)
                            @foreach ($perangkatdesa as $item)
                                <tr>
                                    <td class="center">{{ $id++ }}</td>

                                    <td class="center"><img src="{{ asset($item->fotoperangkat) }}" alt=""
                                            style="width: 100px; height: 100px;"></td>
                                    <td style="word-wrap: break-word;">{!! $item->profilperangkat !!}</td>

                                    <td class="center">

                                        <a href="{{ route('edit.perangkatdesa', $item->id) }}" name="edit"><i
                                                class="glyphicon glyphicon-pencil"></i> Edit</a>
                                        <a href="{{ route('delete.perangkatdesa', $item->id) }}"><i
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
