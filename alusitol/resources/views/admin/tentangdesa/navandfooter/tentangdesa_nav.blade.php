@php
    $route = Route::current()->getName();
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body" style="padding: 15px 0;">
                <ul class="nav nav-tabs">
                    <li class="{{ $route == 'all.tentang.desa' ? 'active' : '' }} "><a
                            href="{{ route('all.tentang.desa') }}">All Tentang Desa</a></li>
                    <li class="{{ $route == 'add.tentang.desa' ? 'active' : '' }} "><a
                            href="{{ route('add.tentang.desa') }}">Add
                            Tentang Desa</a></li>
                    <li class="{{ $route == 'all.perangkat.desa' ? 'active' : '' }} "><a
                            href="{{ route('all.perangkat.desa') }}">All perangkat Desa</a></li>
                    <li class="{{ $route == 'add.perangkat.desa' ? 'active' : '' }} "><a
                            href="{{ route('add.perangkat.desa') }}">Add
                            perangkat Desa</a></li>
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
