@extends('admin.admin_master')
@extends('admin.tentangdesa.navandfooter.tentangdesa_nav')

@section('admin')
    <form class="form-horizontal" action="{{ route('store.tentangdesa') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-3">
                <div class="card"style="margin-top:61%;">
                    <img class="card-img-top" id="showImage" src="{{ url('upload/no_image.jpg') }}" width="100%">
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <label class="col-sm-2 control-label"><span class="text-danger"> * </span>Tentang Desa</label>
                    <div class="col-sm-10">
                        <textarea id="elm1" name="tentangdesa" class="ckeditor"></textarea>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label"><span class="text-danger"> * </span>Visi Misi</label>
                    <div class="col-sm-10">
                        <textarea id="elm1" name="visimisi" class="ckeditor"></textarea>
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
