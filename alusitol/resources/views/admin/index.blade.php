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
            <?php
            use Carbon\Carbon;
            
            $currentHour = Carbon::now('Asia/Jakarta')->hour;
            
            if ($currentHour >= 5 && $currentHour < 12) {
                $greeting = 'Selamat Pagi';
            } elseif ($currentHour >= 12 && $currentHour < 18) {
                $greeting = 'Selamat Siang';
            } else {
                $greeting = 'Selamat Malam';
            }
            ?>


            <div class="cd-timeline-content">
                <h3>{{ $greeting }} Admin</h3>

                <span class="cd-date">{{ Carbon::now()->isoFormat('MMMM D') }}</span>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('all.alualu') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Alu Alu</p>
                                        <h4 class="mb-2">{{ $countAlualu }}</h4>
                                        <p class="text-muted mb-0">
                                            <span class="text-success fw-bold font-size-12 me-2">
                                                <i class="ri-arrow-right-up-line me-1 align-middle"></i>{{ $alualuhariini }}
                                            </span>
                                            alualu dibuat pada hari ini
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="ri-message-3-line font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('all.berita') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Berita</p>
                                        <h4 class="mb-2">{{ $countberita }}</h4>
                                        <p class="text-muted mb-0">
                                            <span class="text-success fw-bold font-size-12 me-2">
                                                <i class="ri-arrow-right-up-line me-1 align-middle"></i>{{ $beritahariini }}
                                            </span>
                                            berita dibuat pada hari ini
                                        </p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="ri-article-line font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('all.galeri') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Galeri</p>
                                        <h4 class="mb-2">{{ $countgaleri }}</h4>
                                        <p class="text-muted mb-0">
                                            <span class="text-success fw-bold font-size-12 me-2">
                                                <i
                                                    class="ri-arrow-right-up-line me-1 align-middle"></i>{{ $galerihariini }}
                                            </span>
                                            galeri dibuat pada hari ini
                                        </p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="mdi mdi-folder-multiple-image font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('all.layanan') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">layanan</p>
                                        <h4 class="mb-2">{{ $countlayanan }}</h4>
                                        <p class="text-muted mb-0">
                                            <span class="text-success fw-bold font-size-12 me-2">
                                                <i
                                                    class="ri-arrow-right-up-line me-1 align-middle"></i>{{ $layananhariini }}
                                            </span>
                                            layanan dibuat pada hari ini
                                        </p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="mdi mdi-folder-multiple-image font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div>
                    </a>
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
