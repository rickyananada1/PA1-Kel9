@extends('admin.admin_master')
@section('admin')
    <div class="container" style="margin-top: 3%;">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <h4>The website program has vulnerabilities and needs urgent fixes!</h4>
                    <p>The current version of the program (V1.22) has serious security issues that can lead to attacks.
                        Please fix it immediately!</p>
                    <p>
                        <button type="button" class="btn btn-danger">Fix Now</button>
                        <button type="button" class="btn btn-default" data-dismiss="alert">Process Later</button>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Server Status</div>
                    <div class="panel-body">
                        <p>Memory usage: 40%</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                        </div>
                        <p>Database usage: 20%</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                        </div>
                        <p>Disk usage: 60%</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                        </div>
                        <p>CPU usage: 80%</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Today's Visitors</div>
                    <div class="panel-body">
                        <canvas id="canvas" class="col-md-12" width="385" height="188"
                            style="width: 385px; height: 188px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Team Message Board</div>
                    <div class="panel-body">
                        <div class="col-md-7">
                            <div class="media well">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object wh64" src="{{ asset('backend/assets/images/a.png') }}"
                                            alt="Zhuo Big Brother">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Tian Yehezkil</h4>
                                    Friends, please upgrade the website program tonight. The current system has
                                    vulnerabilities for safety
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
