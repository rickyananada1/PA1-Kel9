@extends('admin.admin_master')
@extends('admin.tentangdesa.navandfooter.tentangdesa_nav')

@section('admin')
    <form method="POST" class="form-horizontal" action="{{ route('updated.perangkatdesa') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $perangkatdesa->id }}">

        <div class="row">


            <div class="form-group">
                <label class="col-sm-2 control-label"><span class="text-danger"> * </span>Profil Perangkat</label>
                <div class="col-sm-10">
                    <textarea id="elm1" name="ProfilPerangkat" class="ckeditor">{{ $perangkatdesa->profilperangkat }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label"> Foto Perangkat</label>
                <div class="col-sm-10">
                    <input type="file" id="image" name="perangkatdesa_image" class="form-control"
                        alt="Card image cap">
                </div>
            </div>
            <div class="col-md-3"style="margin-left:15%;">
                <div class="card"style="margin-top:11%;">
                    <img class="card-img-top" id="showImage" src="{{ asset($perangkatdesa->fotoperangkat) }}"
                        width="100%">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" onclick="" class="btn btn-success" style="margin-top:3%;">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
