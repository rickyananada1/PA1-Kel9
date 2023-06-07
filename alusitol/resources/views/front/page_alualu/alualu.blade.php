@extends('front.user_master')

@section('user_content')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home.user') }}">Home</a></li>
                <li>Alu - Alu</li>
            </ol>
            <h2>Alu - Alu</h2>
        </div>
    </section>

    <section id="alualu" class="alualu">
        <div class="container">

            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12">

                    @auth
                        @php
                            $lastUsage = auth()->user()->alualu->last_usage ?? null;
                            $cooldown = null;
                            if ($lastUsage) {
                                $nextUsageTime = Carbon\Carbon::parse($lastUsage)->addDay();
                                $cooldown = $nextUsageTime->diffForHumans();
                            }
                        @endphp

                        @if ($cooldown)
                            <button type="button" disabled class="button1" data-toggle="modal" data-target="#exampleModal"
                                data-whatever="@mdo">Next Alu-Alu {{ $cooldown }}</button>
                        @else
                            <button type="button" class="button1" data-toggle="modal" data-target="#exampleModal"
                                data-whatever="@mdo">Buat Alu - Alu</button>
                        @endif

                        @error('isi')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    @else
                        <form action="{{ route('login') }}">
                            <button type="submit" class="button1">Buat Alu Alu</button>
                        </form>
                    @endauth


                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script>
                        document.querySelector('form').addEventListener('submit', function(event) {
                            event.preventDefault(); // Prevent the form from submitting

                            swal({
                                title: "Login terlebih dahulu!",
                                text: "Anda harus login sebelum membuat Alu - Alu.",
                                icon: "warning",
                                buttons: ["Cancel", "Login"], // Add an additional button
                            }).then(function(isConfirm) {
                                if (isConfirm) {
                                    window.location.href = "{{ route('login') }}" // Redirect to the login route
                                }
                            });
                        });
                    </script>


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Buat Alu Alu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @auth
                                    <form action="{{ route('store.alualuu') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Untuk Siapa:</label>
                                                <input type="text" class="form-control" id="recipient-name" name="to">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Alu -Alu:</label>
                                                <textarea class="form-control" id="message-text" name="isi"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="button1">Send message</button>
                                        </div>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>

                </div>

                <div class="ctn">
                    <style>
                        .filtr {
                            line-height: 35px;
                            margin-right: 2%;
                        }

                        .filtr::before {
                            content: "🗓️";
                        }
                    </style>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <form action="{{ route('alualu.user') }}" method="GET" id="filterForm">
                            <div class="input-daterange input-group" id="datepicker6" data-date-format="dd M, yyyy"
                                data-date-autoclose="true" data-provide="datepicker" data-date-container="#datepicker6">
                                <div class="filtr"></div>

                                <select type="text" class="form-control" name="date_filter" id="dateFilter"
                                    placeholder="Start Date">
                                    <option value="">Semua</option>
                                    <option value="today" {{ Request::get('date_filter') == 'today' ? 'selected' : '' }}>
                                        Hari ini
                                    </option>
                                    <option value="yesterday"
                                        {{ Request::get('date_filter') == 'yesterday' ? 'selected' : '' }}>
                                        Kemarin</option>
                                    <option value="this_week"
                                        {{ Request::get('date_filter') == 'this_week' ? 'selected' : '' }}>
                                        Minggu Ini</option>
                                    <option value="this_month"
                                        {{ Request::get('date_filter') == 'this_month' ? 'selected' : '' }}>
                                        Bulan ini</option>
                                    <option value="this_year"
                                        {{ Request::get('date_filter') == 'this_year' ? 'selected' : '' }}>
                                        Tahun Ini</option>
                                </select>

                            </div>
                        </form>
                    </div>
                    <script>
                        document.getElementById('dateFilter').addEventListener('change', function() {
                            document.getElementById('filterForm').submit();
                        });
                    </script>
                    &ensp;&ensp;
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <form class="form">
                            <label for="search">
                                <input required="" autocomplete="off" placeholder="search" id="search" type="text">
                                <div class="icon">
                                    <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="swap-on">
                                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                    <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="swap-off">
                                        <path d="M10 19l-7-7m0 0l7-7m-7 7h18" stroke-linejoin="round"
                                            stroke-linecap="round">
                                        </path>
                                    </svg>
                                </div>
                                <button type="reset" class="close-btn">
                                    <svg viewBox="0 0 20 20" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </label>
                        </form>
                    </div>

                </div>
                <!DOCTYPE html>
                <html>

                <head>
                    <!DOCTYPE html>
                    <html>

                    <head>
                        <style>
                            .card-body {
                                width: 320px;
                                margin-bottom: 20px;
                                background-color: #f0f0f0;
                                padding: 20px;
                                border-radius: 5px;
                                cursor: pointer;
                                position: relative;
                                z-index: 1;
                                transition: all 0.4s ease-in-out;
                            }

                            .card-body.active {
                                position: fixed;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                width: 70%;
                                max-width: 500px;
                                max-height: 70%;
                                overflow-y: auto;
                                z-index: 9999;
                                background-color: white;
                                padding: 20px;
                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                            }
                        </style>
                    </head>

                <body>
                    <div class="col-12" style="height: 100%; max-height: calc(100vh - 150px); overflow-y: auto;">
                        <br>
                        <div class="row">
                            @foreach ($alualus as $item)
                                <div class="col-md-3 d-flex align-items-stretch">
                                    <div class="card-body" onclick="toggleCardSize(this)">
                                        <h5 class="card-title">
                                            <p href="">{{ $item->to }}</p>
                                        </h5>
                                        <p class="card-text">{!! $item->isi !!}</p>
                                        <div class="read-more"><i
                                                class="bi bi-pencil">&nbsp;</i>{{ $item->from }}&ensp;<i
                                                class="bi bi-clock"></i><time
                                                datetime="2020-01-01">&nbsp;{{ $item->created_at->diffForHumans() }}</time>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <script>
                        function toggleCardSize(card) {
                            if (card.classList.contains('active')) {
                                card.classList.remove('active');
                            } else {
                                var cards = document.querySelectorAll('.card-body');

                                cards.forEach(function(card) {
                                    card.classList.remove('active');
                                });

                                card.classList.add('active');
                            }
                        }
                    </script>
                </body>

                </html>

                </body>

                </html>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

                <script>
                    $(document).ready(function() {
                        $('#search').on('keyup', function() {
                            var query = $(this).val().toLowerCase();

                            if (query.length >= 2) {
                                $.ajax({
                                    url: "{{ route('search.alualu') }}",
                                    method: 'GET',
                                    data: {
                                        query: query
                                    },
                                    success: function(response) {
                                        var results = $('#search-results');
                                        results.empty();

                                        var matchingCards = $('.card-body').filter(function() {
                                            return $(this).find('.card-text').text().toLowerCase()
                                                .includes(query);
                                        });

                                        // Hide non-matching cards with transition
                                        $('.card-body').not(matchingCards).slideUp(300);

                                        // Show matching cards with transition and move them to the top of the respective row
                                        matchingCards.slideDown(300, function() {
                                            $(this).parent().prependTo($(this).closest('.row'));
                                        });
                                    }
                                });
                            } else {
                                // Show all cards with transition and restore their original order
                                $('.card-body').slideDown(200);
                                $('.row .col-md-3').each(function(index) {
                                    $(this).appendTo($(this).closest('.row'));
                                });
                            }
                        });
                    });
                </script>
            @endsection
