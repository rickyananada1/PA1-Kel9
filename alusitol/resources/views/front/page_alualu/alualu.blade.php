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
                            <button type="button" disabled class="swal-button" style="width: 10em" data-toggle="modal"
                                data-target="#exampleModal" data-whatever="@mdo">Next Alu-Alu {{ $cooldown }}</button>
                        @else
                            <button type="button" class="swal-button" style="width: 10em" data-toggle="modal"
                                data-target="#exampleModal" data-whatever="@mdo">Buat Alu - Alu</button>
                        @endif

                        @error('isi')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    @else
                        <button class="logindlu swal-button" style="width: 100%;" onclick="showConfirmation()">Buat Alu
                            Alu</button>

                    @endauth


                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script>
                        function showConfirmation() {
                            swal({
                                title: "Login terlebih dahulu!",
                                text: "Anda harus login sebelum membuat Alu - Alu.",
                                icon: "warning",
                                buttons: ["Cancel", "Login"], // Add an additional button
                            }).then(function(isConfirm) {
                                if (isConfirm) {
                                    openLoginModal(); // Call the openLoginModal function or perform any other action
                                }
                            });
                        }
                    </script>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="form-title custom-title" id="exampleModalLabel">Buat Alu Alu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @auth
                                    <form action="{{ route('store.alualuu') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" class="onlyalu" id="recipient-name" name="to"
                                                    placeholder="Untuk Siapa">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="onlyalu2" id="message-text" name="isi" placeholder="Apa Isinya"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="swal-button swal-button--confirm" style="width: 100%"
                                                type="submit">Buat Alu - Alu
                                            </button>
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
                                max-width: 100%;
                                max-height: 100%;
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
                                width: 30%;
                                height: 30%;
                                max-width: 100%;
                                max-height: 100%;
                                overflow-y: auto;
                                z-index: 9999;
                                background-color: seashell;
                                padding: 20px;
                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                            }
                        </style>
                    </head>

                <body>
                    <style>
                        .card-body {
                            opacity: 0;
                            transform: translateX(-100%);
                            animation: slide-in 0.5s forwards;
                        }

                        @keyframes slide-in {
                            to {
                                opacity: 1;
                                transform: translateX(0);
                            }
                        }
                    </style>
                    <div class="col-12" style="height: 100%; max-height: calc(100vh - 150px); overflow-y: auto;">
                        <br>
                        <div class="row">
                            @foreach ($alualus as $index => $item)
                                <div class="col-md-3 d-flex align-items-stretch">
                                    <div class="card-body" onclick="toggleCardSize(this)"
                                        style="animation-delay: {{ rand(1, 10) / 10 }}s">
                                        <h5 class="card-title">
                                            <a href="">{{ $item->to }}</a>
                                        </h5>
                                        <p class="card-text">{!! $item->isi !!}</p>
                                        <div class="error-message" style="color: red; display: none;"></div>

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

                        // Menambahkan event listener pada area di luar kartu
                        document.addEventListener('click', function(event) {
                            var targetElement = event.target;
                            var isCard = targetElement.closest('.card-body');

                            if (!isCard) {
                                var activeCards = document.querySelectorAll('.card-body.active');

                                activeCards.forEach(function(card) {
                                    card.classList.remove('active');
                                });
                            }
                        });
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

                    $(document).ready(function() {
                        $('form').submit(function(event) {
                            event.preventDefault(); // Menghentikan pengiriman form bawaan browser

                            var form = $(this);
                            var url = form.attr('action');
                            var method = form.attr('method');
                            var formData = new FormData(form[0]);

                            $.ajax({
                                url: url,
                                method: method,
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    // Handle response jika validasi berhasil
                                    window.location.href = response
                                        .redirect; // Mengarahkan ke halaman tujuan setelah berhasil
                                },
                                error: function(xhr, status, error) {
                                    // Handle response jika validasi gagal
                                    var errors = xhr.responseJSON.errors;

                                    // Menampilkan pesan error pada masing-masing input
                                    $.each(errors, function(field, messages) {
                                        var input = $('[name="' + field + '"]');
                                        input.siblings('.error-message').text(messages[0]);
                                    });
                                }
                            });
                        });
                    });
                </script>
            @endsection
