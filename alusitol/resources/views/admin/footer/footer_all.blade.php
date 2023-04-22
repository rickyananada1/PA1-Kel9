@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Footer Page</h4>
                            <form action="{{ route('update.about') }}" method="POST"enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $allfooter->id }}">

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control"name="title" type="number"
                                            id="example-text-input"value="{{ $allfooter->number }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short
                                        Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="short_description" class="form-control" rows="5" required="">
                                        {{ $allfooter->short_description }}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input class="form-control"name="address" type="text"
                                            id="example-text-input"value="{{ $allfooter->address }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control"name="email" type="email"
                                            id="example-text-input"value="{{ $allfooter->email }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <input class="form-control"name="facebook" type="text"
                                            id="example-text-input"value="{{ $allfooter->facebook }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Instagram</label>
                                    <div class="col-sm-10">
                                        <input class="form-control"name="instagram" type="text"
                                            id="example-text-input"value="{{ $allfooter->instagram }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Copyright</label>
                                    <div class="col-sm-10">
                                        <input class="form-control"name="copyright" type="text"
                                            id="example-text-input"value="{{ $allfooter->copyright }}">
                                    </div>
                                </div>


                                <input
                                    type="submit"class="btn btn-info waves-effect waves-light"value="Update Footer Page">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
