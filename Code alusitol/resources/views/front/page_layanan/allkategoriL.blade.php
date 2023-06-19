@extends('front.user_master')
@section('user_content')
    <style>
        .card-expanded {
            transform: scale(1.2);
            transition: transform 0.3s ease;
        }

        .lyncrd {
            position: relative;
            width: 400px;
            height: 300px;
            border-radius: 5px;
            overflow: hidden;
            animation: fade-in 0.5s ease-in-out;
            margin: 1.4%;
        }

        .lyncrd-img {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .lyncrd-img img {
            width: 100%;
            height: 100%;
            display: block;
            transition: transform 0.3s ease;
        }

        .lyncrd-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .lyncrd-overlay h3 {
            margin: 0;
            font-size: 18px;
            color: #fff;
            text-align: center;
        }

        .lyncrd:hover .lyncrd-img img {
            transform: scale(1.1);
        }

        .lyncrd:hover .lyncrd-overlay {
            opacity: 1;
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home.user') }}">Home</a></li>
                <li>layanan</li>
            </ol>
            <h2>{{ $categoryname->layanan_category }}</h2>
        </div>
    </section>

    <section id="events" class="events">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                @foreach ($layananpost as $item)
                    <div class="lyncrd">
                        <div class="lyncrd-img">
                            <img class="popup-img" src="{{ asset($item->layanan_image) }}" alt="Gambar Galeri">
                        </div>
                        <div class="lyncrd-overlay">
                            <h3>{{ $item->layanan_title }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cards = document.querySelectorAll('.lyncrd');
            var expandedCard = null;

            cards.forEach(function(card) {
                card.addEventListener('click', function() {
                    if (expandedCard === null) {
                        // Perbesar card yang diklik
                        card.classList.add('card-expanded');
                        expandedCard = card;
                    } else if (expandedCard === card) {
                        // Kecilkan card yang diklik (klik kedua kali)
                        card.classList.remove('card-expanded');
                        expandedCard = null;
                    } else {
                        // Kecilkan card yang sedang diperbesar dan perbesar card baru yang diklik
                        expandedCard.classList.remove('card-expanded');
                        card.classList.add('card-expanded');
                        expandedCard = card;
                    }
                });
            });

            // Menutup card yang diperbesar ketika area di luar card diklik
            document.addEventListener('click', function(event) {
                if (!event.target.closest('.lyncrd') && expandedCard !== null) {
                    expandedCard.classList.remove('card-expanded');
                    expandedCard = null;
                }
            });
        });
    </script>
@endsection
