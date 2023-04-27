@extends('admin.admin_master')
@extends('admin.tentangdesa.navandfooter.tentangdesa_nav')

@section('admin')
    <form method="POST" class="form-horizontal" action="{{ route('updated.tentangdesa') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $tentangdesa->id }}">

        <div class="row">


            <div class="col-md-8">
                <div class="form-group">
                    <label class="col-sm-2 control-label"><span class="text-danger"> * </span>Tentang Desa</label>
                    <div class="col-sm-10">
                        <textarea id="elm1" name="tentangdesa" class="ckeditor">{{ $tentangdesa->tentangdesa }}</textarea>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label"><span class="text-danger"> * </span>Visi Misi</label>
                    <div class="col-sm-10">
                        <textarea id="elm1" name="visimisi" class="ckeditor">{{ $tentangdesa->visimisi }}</textarea>
                    </div>
                </div>




                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" onclick="" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
    </form>
@endsection
