@extends('admin.admin_master')
@section('master')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Perangkat Desa Page</h4>
                            <form action="{{ route('update.perangkat.desa') }}" method="POST"enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $perangkatdesa->id }}">
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Profil Perangkat</label>
                                    <div class="col-sm-10">
                                        <textarea id="konten" name="profilperangkat">
                                            {!! $perangkatdesa->profilperangkat !!}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Foto Perangkat</label>
                                    <div class="col-sm-10">
                                        <input class="form-control"name="fotoperangkat" type="file" id="image">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>

                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <img class="rounded avatar-lg" id="showImage"
                                                src="{{ asset($perangkatdesa->fotoperangkat) }}" alt="Card image cap">
                                        </div>
                                    </div>
                                </div>
                                <input
                                    type="submit"class="btn btn-info waves-effect waves-light"value="Insert Perangkat desa Data">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
