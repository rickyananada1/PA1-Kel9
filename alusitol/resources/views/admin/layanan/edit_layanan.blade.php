@extends('admin.admin_master')
@extends('admin.layanan.navandfooter.layanan_nav')

@section('admin')
    <form method="POST" class="form-horizontal" action="{{ route('updated.layanan') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $layanan->id }}">

        <div class="row">
            <div class="col-md-3">
                <div class="card"style="margin-top:100%;">
                    <img class="card-img-top" id="showImage" src="{{ asset($layanan->layanan_image) }}" width="100%">
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <label class="col-sm-2 control-label"><span class="text-danger"> * </span>layanan Category</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="layanan_category_id">
                            @foreach ($category as $cat)
                                <option value="{{ $cat->id }}"
                                    {{ $cat->id == $layanan->layanan_category_id ? 'selected' : '' }}>
                                    {{ $cat->layanan_category }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><span class="text-danger"> * </span>Short Desc</label>
                    <div class="col-sm-10">
                        <textarea id="elm1" name="layanan_short" class="ckeditor">{!! $layanan->layanan_short_description !!}</textarea>
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
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection
