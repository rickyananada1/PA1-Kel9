@extends('admin.admin_master')
@section('master')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Galeri Category Page</h4><br><br>
                            <form action="{{ route('store.galeri.category') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Galeri Category
                                        Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control"name="galeri_category" type="text"
                                            id="example-text-input">
                                        @error('galeri_category')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <input
                                    type="submit"class="btn btn-info waves-effect waves-light"value="Insert Galeri Category">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
