@extends('admin.admin_master')
@section('master')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Semua Perangkat Desa </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Semua Perangkat Desa</h4>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Foto Perangkat</th>
                                        <th>Nama </th>
                                        <th>Jabatan </th>
                                        <th>Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($perangkatdesa as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td><img src="{{ asset($item->fotoperangkat) }}"S
                                                    style="width: 60px; height: 50px;"></td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->jabatan }}</td>
                                            <td>
                                                <a href="{{ route('edit.perangkat.desa', $item->id) }}"
                                                    class="btn btn-info sm" title="Edit Data"><i
                                                        class="fas fa-edit"></i></a>

                                                <a href="{{ route('delete.perangkat.desa', $item->id) }}"
                                                    class="btn btn-danger sm" title="Delete Data" id="delete"><i
                                                        class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
            {{ $perangkatdesa->onEachSide(1)->links('pagination::bootstrap-4') }}

        </div> <!-- container-fluid -->
    </div>
@endsection