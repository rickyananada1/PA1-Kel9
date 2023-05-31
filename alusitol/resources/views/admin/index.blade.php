@extends('admin.admin_master')
@section('master')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                @if (Session::has('error'))
                    <div class="alert alert-warning" role="alert">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Total Sales</p>
                                    <h4 class="mb-2">1452</h4>
                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from
                                        previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-shopping-cart-2-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">New Orders</p>
                                    <h4 class="mb-2">938</h4>
                                    <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i
                                                class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from
                                        previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="mdi mdi-currency-usd font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">New Users</p>
                                    <h4 class="mb-2">8246</h4>
                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span>from
                                        previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-user-3-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Unique Visitors</p>
                                    <h4 class="mb-2">29670</h4>
                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from
                                        previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="mdi mdi-currency-btc font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-xl-6">

                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="float-end d-none d-md-inline-block">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Export</a>
                                        <a class="dropdown-item" href="#">Import</a>
                                        <a class="dropdown-item" href="#">Download Report</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title mb-4">Email Sent</h4>

                            <div class="text-center pt-3">
                                <div class="row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <div class="d-inline-flex">
                                            <h5 class="me-2">25,117</h5>
                                            <div class="text-success font-size-12">
                                                <i class="mdi mdi-menu-up font-size-14"> </i>2.2 %
                                            </div>
                                        </div>
                                        <p class="text-muted text-truncate mb-0">Marketplace</p>
                                    </div><!-- end col -->
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <div class="d-inline-flex">
                                            <h5 class="me-2">$34,856</h5>
                                            <div class="text-success font-size-12">
                                                <i class="mdi mdi-menu-up font-size-14"> </i>1.2 %
                                            </div>
                                        </div>
                                        <p class="text-muted text-truncate mb-0">Last Week</p>
                                    </div><!-- end col -->
                                    <div class="col-sm-4">
                                        <div class="d-inline-flex">
                                            <h5 class="me-2">$18,225</h5>
                                            <div class="text-success font-size-12">
                                                <i class="mdi mdi-menu-up font-size-14"> </i>1.7 %
                                            </div>
                                        </div>
                                        <p class="text-muted text-truncate mb-0">Last Month</p>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div>
                        </div>

                    </div><!-- end card -->
                </div>
                <!-- end col -->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="float-end d-none d-md-inline-block">
                                <div class="dropdown">
                                    <a class="text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="text-muted">This Years<i
                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">This Year</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title mb-4">Revenue</h4>

                            <div class="text-center pt-3">
                                <div class="row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <div>
                                            <h5>17,493</h5>
                                            <p class="text-muted text-truncate mb-0">Marketplace</p>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <div>
                                            <h5>$44,960</h5>
                                            <p class="text-muted text-truncate mb-0">Last Week</p>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-sm-4">
                                        <div>
                                            <h5>$29,142</h5>
                                            <p class="text-muted text-truncate mb-0">Last Month</p>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div>
                        </div>

                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="card-title mb-4">Latest Transactions</h4>

                            <div class="table-responsive">
                                <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th style="width: 120px;">Salary</th>
                                        </tr>
                                    </thead><!-- end thead -->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">Charles Casey</h6>
                                            </td>
                                            <td>Web Developer</td>
                                            <td>
                                                <div class="font-size-13"><i
                                                        class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                </div>
                                            </td>
                                            <td>
                                                23
                                            </td>
                                            <td>
                                                04 Apr, 2021
                                            </td>
                                            <td>$42,450</td>
                                        </tr>
                                        <!-- end -->
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">Alex Adams</h6>
                                            </td>
                                            <td>Python Developer</td>
                                            <td>
                                                <div class="font-size-13"><i
                                                        class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive
                                                </div>
                                            </td>
                                            <td>
                                                28
                                            </td>
                                            <td>
                                                01 Aug, 2021
                                            </td>
                                            <td>$25,060</td>
                                        </tr>
                                        <!-- end -->
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">Prezy Kelsey</h6>
                                            </td>
                                            <td>Senior Javascript Developer</td>
                                            <td>
                                                <div class="font-size-13"><i
                                                        class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                </div>
                                            </td>
                                            <td>
                                                35
                                            </td>
                                            <td>
                                                15 Jun, 2021
                                            </td>
                                            <td>$59,350</td>
                                        </tr>
                                        <!-- end -->
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">Ruhi Fancher</h6>
                                            </td>
                                            <td>React Developer</td>
                                            <td>
                                                <div class="font-size-13"><i
                                                        class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                </div>
                                            </td>
                                            <td>
                                                25
                                            </td>
                                            <td>
                                                01 March, 2021
                                            </td>
                                            <td>$23,700</td>
                                        </tr>
                                        <!-- end -->
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">Juliet Pineda</h6>
                                            </td>
                                            <td>Senior Web Designer</td>
                                            <td>
                                                <div class="font-size-13"><i
                                                        class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                </div>
                                            </td>
                                            <td>
                                                38
                                            </td>
                                            <td>
                                                01 Jan, 2021
                                            </td>
                                            <td>$69,185</td>
                                        </tr>
                                        <!-- end -->
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">Den Simpson</h6>
                                            </td>
                                            <td>Web Designer</td>
                                            <td>
                                                <div class="font-size-13"><i
                                                        class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive
                                                </div>
                                            </td>
                                            <td>
                                                21
                                            </td>
                                            <td>
                                                01 Sep, 2021
                                            </td>
                                            <td>$37,845</td>
                                        </tr>
                                        <!-- end -->
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">Mahek Torres</h6>
                                            </td>
                                            <td>Senior Laravel Developer</td>
                                            <td>
                                                <div class="font-size-13"><i
                                                        class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                </div>
                                            </td>
                                            <td>
                                                32
                                            </td>
                                            <td>
                                                20 May, 2021
                                            </td>
                                            <td>$55,100</td>
                                        </tr>
                                        <!-- end -->
                                    </tbody><!-- end tbody -->
                                </table> <!-- end table -->
                            </div>
                        </div><!-- end card -->
                    </div><!-- end card -->
                </div>
                <!-- end col -->
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end">
                                <select class="form-select shadow-none form-select-sm">
                                    <option selected="">Apr</option>
                                    <option value="1">Mar</option>
                                    <option value="2">Feb</option>
                                    <option value="3">Jan</option>
                                </select>
                            </div>
                            <h4 class="card-title mb-4">Monthly Earnings</h4>

                            <div class="row">
                                <div class="col-4">
                                    <div class="text-center mt-4">
                                        <h5>3475</h5>
                                        <p class="mb-2 text-truncate">Market Place</p>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-4">
                                    <div class="text-center mt-4">
                                        <h5>458</h5>
                                        <p class="mb-2 text-truncate">Last Week</p>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-4">
                                    <div class="text-center mt-4">
                                        <h5>9062</h5>
                                        <p class="mb-2 text-truncate">Last Month</p>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="mt-4" style="position: relative;">
                                <div id="donut-chart" class="apex-charts" style="min-height: 264.7px;">
                                    <div id="apexchartsrulidqq1"
                                        class="apexcharts-canvas apexchartsrulidqq1 apexcharts-theme-light"
                                        style="width: 350px; height: 264.7px;"><svg id="SvgjsSvg1506" width="350"
                                            height="264.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1508" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(45, 0)">
                                                <defs id="SvgjsDefs1507">
                                                    <clipPath id="gridRectMaskrulidqq1">
                                                        <rect id="SvgjsRect1510" width="268" height="286"
                                                            x="-3" y="-1" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff">
                                                        </rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMaskrulidqq1">
                                                        <rect id="SvgjsRect1511" width="266" height="288"
                                                            x="-2" y="-2" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff">
                                                        </rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG1512" class="apexcharts-pie">
                                                    <g id="SvgjsG1513" transform="translate(0, 0) scale(1)">
                                                        <circle id="SvgjsCircle1514" r="88.91756097560976" cx="131"
                                                            cy="131" fill="transparent">
                                                        </circle>
                                                        <g id="SvgjsG1515" class="apexcharts-slices">
                                                            <g id="SvgjsG1516"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="MarketxPlace" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath1517"
                                                                    d="M 131 9.195121951219505 A 121.8048780487805 121.8048780487805 0 1 1 126.39072354321841 252.71763589153073 L 127.63522818654944 219.85387420081742 A 88.91756097560976 88.91756097560976 0 1 0 131 42.08243902439024 L 131 9.195121951219505 z"
                                                                    fill="rgba(15,156,243,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                    index="0" j="0"
                                                                    data:angle="182.16867469879517" data:startAngle="0"
                                                                    data:strokeWidth="2" data:value="42"
                                                                    data:pathOrig="M 131 9.195121951219505 A 121.8048780487805 121.8048780487805 0 1 1 126.39072354321841 252.71763589153073 L 127.63522818654944 219.85387420081742 A 88.91756097560976 88.91756097560976 0 1 0 131 42.08243902439024 L 131 9.195121951219505 z"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG1518"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="LastxWeek" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath1519"
                                                                    d="M 126.39072354321841 252.71763589153073 A 121.8048780487805 121.8048780487805 0 0 1 20.553228507298755 79.63912984267765 L 50.37385681032809 93.5065647851547 A 88.91756097560976 88.91756097560976 0 0 0 127.63522818654944 219.85387420081742 L 126.39072354321841 252.71763589153073 z"
                                                                    fill="rgba(111,208,136,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                    index="0" j="1"
                                                                    data:angle="112.77108433734938"
                                                                    data:startAngle="182.16867469879517"
                                                                    data:strokeWidth="2" data:value="26"
                                                                    data:pathOrig="M 126.39072354321841 252.71763589153073 A 121.8048780487805 121.8048780487805 0 0 1 20.553228507298755 79.63912984267765 L 50.37385681032809 93.5065647851547 A 88.91756097560976 88.91756097560976 0 0 0 127.63522818654944 219.85387420081742 L 126.39072354321841 252.71763589153073 z"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                            <g id="SvgjsG1520"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="LastxMonth" rel="3"
                                                                data:realIndex="2">
                                                                <path id="SvgjsPath1521"
                                                                    d="M 20.553228507298755 79.63912984267765 A 121.8048780487805 121.8048780487805 0 0 1 130.9787410384385 9.195123806413875 L 130.9844809580601 42.082440378682136 A 88.91756097560976 88.91756097560976 0 0 0 50.37385681032809 93.5065647851547 L 20.553228507298755 79.63912984267765 z"
                                                                    fill="rgba(255,187,68,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                    index="0" j="2"
                                                                    data:angle="65.06024096385545"
                                                                    data:startAngle="294.93975903614455"
                                                                    data:strokeWidth="2" data:value="15"
                                                                    data:pathOrig="M 20.553228507298755 79.63912984267765 A 121.8048780487805 121.8048780487805 0 0 1 130.9787410384385 9.195123806413875 L 130.9844809580601 42.082440378682136 A 88.91756097560976 88.91756097560976 0 0 0 50.37385681032809 93.5065647851547 L 20.553228507298755 79.63912984267765 z"
                                                                    stroke="#ffffff"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1522" class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)"><text id="SvgjsText1523"
                                                            font-family="Helvetica, Arial, sans-serif" x="131"
                                                            y="136" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="17px" font-weight="600" fill="#6c757d"
                                                            class="apexcharts-text apexcharts-datalabel-label"
                                                            style="font-family: Helvetica, Arial, sans-serif;">Ethereum</text>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1524" x1="0" y1="0" x2="262"
                                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                    stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1525" x1="0" y1="0" x2="262"
                                                    y2="0" stroke-dasharray="0" stroke-width="0"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG1509" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-dark">
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(15, 156, 243);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(111, 208, 136);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 187, 68);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 351px; height: 266px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>
            <!-- end row -->
        </div>

    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script>2023 © Upcube.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div>
@endsection
