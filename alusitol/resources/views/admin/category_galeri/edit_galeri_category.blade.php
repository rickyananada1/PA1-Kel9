@extends('admin.admin_master')
@extends('admin.galeri.navandfooter.galeri_nav')
@section('admin')
    <div class="panel-body">
        <form action="{{ route('update.galeri.category', $category->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="col-sm-1 control-label"><span class="text-danger"> * </span>Category</label>
                <div class="col-sm-4">
                    <input value="{{ $category->galeri_category }}" type="text" name="galeri_category" class="form-control"
                        placeholder="Add Category" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10"><br>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
