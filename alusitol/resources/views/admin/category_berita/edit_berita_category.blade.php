@extends('admin.admin_master')
@extends('admin.berita.navandfooter.berita_nav')
@section('admin')
    <div class="panel-body">
        <form action="{{ route('update.berita.category', $category->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="col-sm-1 control-label"><span class="text-danger"> * </span>Category</label>
                <div class="col-sm-4">
                    <input value="{{ $category->berita_category }}" type="text" name="berita_category" class="form-control"
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
