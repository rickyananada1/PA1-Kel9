@extends('admin.admin_master')
@extends('admin.layanan.navandfooter.layanan_nav')

@section('admin')
    <form class="form-horizontal" action="{{ route('store.layanan') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-3">
                <div class="card"style="margin-top:61%;">
                    <img class="card-img-top" id="showImage" src="{{ url('upload/no_image.jpg') }}" width="100%">
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <label class="col-sm-2 control-label"><span class="text-danger"> * </span>layanan Category</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="layanan_category_id">
                            <option selected="">Open this select menu</option>
                            @foreach ($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->layanan_category }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><span class="text-danger"> * </span>Short Desc</label>
                    <div class="col-sm-10">
                        <textarea id="elm1" name="layanan_short" class="ckeditor"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">layanan Image</label>
                    <div class="col-sm-10">
                        <input type="file" id="image" name="layanan_image" class="form-control" alt="Card image cap">
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
