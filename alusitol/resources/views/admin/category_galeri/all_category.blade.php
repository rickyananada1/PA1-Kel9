@extends('admin.admin_master')
@extends('admin.galeri.navandfooter.galeri_nav')

@section('admin')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="w5p">id</th>
                    <th class="w10p">Category</th>
                    <th class="w15p">Action</th>
                </tr>
            </thead>
            <tbody>
                @php($id = 1)
                @foreach ($category as $item)
                    <tr>
                        <td class="center">{{ $id++ }}</td>
                        <td class="center">{{ $item->galeri_category }}</td>
                        <td class="center">
                            <a href="{{ route('edit.galeri.category', $item->id) }}" name="Edit_Galeri_Category"><i
                                    class="glyphicon glyphicon-pencil"></i>
                                Edit</a>
                            <a href="{{ route('delete.galeri.category', $item->id) }}"><i
                                    class="glyphicon glyphicon-remove"></i>
                                Hapus</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    @include('admin.galeri.navandfooter.galeri_footer')

    </div>
@endsection
