@php
    $route = Route::current()->getName();
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body" style="padding: 15px 0;">
                <ul class="nav nav-tabs">
                    <li class="{{ $route == 'all.galeri.admin' ? 'active' : '' }} "><a
                            href="{{ route('all.galeri.admin') }}">All Galeri</a></li>
                    <li class="{{ $route == 'add.galeri' ? 'active' : '' }} "><a href="{{ route('add.galeri') }}">Add
                            Galeri</a></li>
                    <li class="{{ $route == 'all.category.galeri' ? 'active' : '' }} "><a
                            href="{{ route('all.category.galeri') }}">Category Galeri</a></li>
                    <li class="{{ $route == 'add.galeri.category' ? 'active' : '' }} "><a
                            href="{{ route('add.galeri.category') }}">Add Category Galeri</a></li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="row">
                    <form>
                        <div class="col-md-2">
                            <div class="form-group text-left">
                                <button type="button" class="btn btn-primary" onclick="location.reload()"><i
                                        class="glyphicon
                                    glyphicon-refresh"></i>
                                    Refresh</button>

                            </div>
                        </div>
                        <div class="col-md-7"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
