@php
    $route = Route::current()->getName();
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body" style="padding: 15px 0;">
                <ul class="nav nav-tabs">
                    <li class="{{ $route == 'all.berita.admin' ? 'active' : '' }} "><a
                            href="{{ route('all.berita.admin') }}">All Berita</a></li>
                    <li class="{{ $route == 'add.berita' ? 'active' : '' }} "><a href="{{ route('add.berita') }}">Add
                            Berita</a></li>
                    <li class="{{ $route == 'all.category.berita' ? 'active' : '' }} "><a
                            href="{{ route('all.category.berita') }}">Category Berita</a></li>
                    <li class="{{ $route == 'add.berita.category' ? 'active' : '' }} "><a
                            href="{{ route('add.berita.category') }}">Add Category Berita</a></li>
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
