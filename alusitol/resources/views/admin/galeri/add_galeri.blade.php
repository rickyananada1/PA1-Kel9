@extends('admin.admin_master')
@extends('admin.galeri.navandfooter.galeri_nav')

@section('admin')
    <form class="form-horizontal" action="{{ route('store.galeri') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" id="showImage" src="{{ url('upload/no_image.jpg') }}" width="100%">
                </div>
            </div><br><br><br>

            <div class="col-md-8">
                <div class="form-group">
                    <label class="col-sm-2 control-label"><span class="text-danger"> * </span>Category</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="galeri_category_id">
                            <option selected="">Open this select menu</option>
                            @foreach ($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->galeri_category }}</option>
                            @endforeach
                        </select>
                    </div>
                </div><br>
                <div class="form-group">
                    <label class="col-sm-2 control-label"><span class="text-danger"> * </span> galeri Image</label>
                    <div class="col-sm-10">
                        <input type="file" id="image" name="galeri_image" class="form-control" alt="Card image cap">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" onclick="" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection
