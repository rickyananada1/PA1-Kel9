@extends('admin.admin_master')
@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body" style="padding: 15px 0;">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#list" aria-controls="machine" role="tab" data-toggle="tab">ALU -
                                ALU</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="list">
                        <div class="panel-body">
                            <div class="row">
                                <form>
                                    <div class="col-md-3 col-lg-offset-9">
                                        <div class="input-group">
                                            <input class="form-control" type="text" value="" placeholder="Cari"
                                                name="keyword">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="glyphicon glyphicon-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="w8p">id</th>
                                            <th class="w18p">to</th>
                                            <th class="w18p">isi</th>
                                            <th class="w13p">from</th>
                                            <th class="w15p">Created</th>
                                            <th class="w15p">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($id = 1)
                                        @foreach ($alualu as $pesan)
                                            <tr>
                                                <td class="center">{{ $id++ }}</td>
                                                <td>{{ $pesan->to }}</td>
                                                <td>{{ $pesan->isi }}</td>
                                                <td>{{ $pesan->from }}</td>
                                                <td class="center">
                                                    {{ Carbon\Carbon::parse($pesan->created_at)->diffForHumans() }}</td>
                                                <td class="center"><a href="{{ route('delete.alu', $pesan->id) }}"
                                                        name="remove"><i class="glyphicon glyphicon-remove"></i>Hapus</a>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-8 m-pagination" id="paginator">
                                        <ul class="m-pagination-page" style="">
                                            <li><a data-page-index="0">1</a></li>
                                            <li><a data-page-index="1">2</a></li>
                                            <li class="active"><a data-page-index="2">3</a></li>
                                            <li><a data-page-index="3">4</a></li>
                                            <li><a data-page-index="4">5</a></li>
                                            <li><a data-page-index="5">6</a></li>
                                            <li><a data-page-index="6">7</a></li>
                                            <li><a data-page-index="7">8</a></li>
                                            <li><a data-page-index="8">9</a></li>
                                            <li><a data-page-index="3">»</a></li>
                                            <li><a data-page-index="99">Last</a></li>
                                        </ul>
                                        <div class="m-pagination-size" style="display: none;"><select data-page-btn="size">
                                                <option value="5">5</option>
                                                <option value="10" selected="">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                            </select></div>
                                        <div class="m-pagination-jump" style="">
                                            <div class="m-pagination-group"><input data-page-btn="jump"
                                                    type="text"><button data-page-btn="jump" type="button">Jump</button>
                                            </div>
                                        </div>
                                        <div class="m-pagination-info" style="">21 ~ 30 Total 1000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
