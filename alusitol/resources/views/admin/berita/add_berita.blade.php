@extends('admin.admin_master')
@extends('admin.berita.navandfooter.berita_nav')

@section('admin')
    <form class="form-horizontal" action="{{ route('store.berita') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-3">
                <div class="card"style="margin-top:100%;">
                    <img class="card-img-top" id="showImage" src="{{ url('upload/no_image.jpg') }}" width="100%">
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <label class="col-sm-2 control-label"><span class="text-danger"> * </span>Berita Category</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="berita_category_id">
                            <option selected="">Open this select menu</option>
                            @foreach ($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->berita_category }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><span class="text-danger"> * </span>Berita Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="berita_title" class="form-control" placeholder="Masukkan Title"
                            required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><span class="text-danger"> * </span>Berita Tags</label>
                    <div class="col-sm-4">
                        <input type="text" name="berita_tags" class="form-control"data-role="tagsinput">
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-sm-2 control-label"><span class="text-danger"> * </span>Long Desc</label>
                    <div class="col-sm-10">
                        <textarea id="elm1" name="berita_long" class="ckeditor"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Berita Image</label>
                    <div class="col-sm-10">
                        <input type="file" id="image" name="berita_image" class="form-control" alt="Card image cap">
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
