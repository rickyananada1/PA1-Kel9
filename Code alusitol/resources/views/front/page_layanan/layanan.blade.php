@extends('front.user_master')

@section('user_content')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home.user') }}">Home</a></li>
                <li>Layanan Desa</li>
            </ol>
            <h2>Layanan Desa</h2>
        </div>
    </section>

    <section id="values" class="values"data-aos="fade-up">
        <div class="container">
            <div class="row">
                @foreach ($categoryL as $item)
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card fade-in" style="display: none;">
                            <a href="{{ route('all.categoryL', $item->id) }}">
                                <div class="card-image"
                                    style="background-image: url({{ asset($item->layanan_category_image) }});"></div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><a
                                        href="{{ route('all.categoryL', $item->id) }}">{{ $item->layanan_category }}</a>
                                </h5>
                                <p class="card-text">{!! $item->jelajah_category_description !!}.</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <style>
                    /* Tambahkan styling untuk gambar kartu */
                    .card-image {
                        width: 100%;
                        height: 300px;
                        background-size: cover;
                        background-position: center;
                        border-radius: 10px;
                        /* Menggunakan radius border 10px */
                        transition: transform 0.3s ease;
                        /* Efek transisi saat hover */
                    }

                    /* Gaya untuk judul kartu */
                    .card-title {
                        margin-top: 10px;
                        font-size: 18px;
                        font-weight: bold;
                    }

                    /* Gaya untuk teks deskripsi kartu */
                    .card-text {
                        margin-top: 5px;
                        font-size: 14px;
                    }

                    /* Gaya untuk tautan pada kartu */
                    .card-link {
                        color: #007bff;
                        text-decoration: none;
                    }

                    .card-link:hover {
                        text-decoration: underline;
                    }

                    /* Efek hover pada kartu */
                    .card:hover .card-image {
                        transform: scale(1.1);
                        /* Perbesar gambar saat hover */
                        opacity: 0.7;
                        /* Ubah keburaman gambar saat hover */
                    }
                </style>


                <style>
                    @keyframes slideIn {
                        0% {
                            transform: translateX(-100%);
                        }

                        100% {
                            transform: translateX(0);
                        }
                    }

                    .card {
                        animation: slideIn 0.5s;
                    }
                </style>

                <script>
                    // Fungsi untuk mengacak elemen dalam sebuah array
                    function shuffleArray(array) {
                        for (let i = array.length - 1; i > 0; i--) {
                            const j = Math.floor(Math.random() * (i + 1));
                            [array[i], array[j]] = [array[j], array[i]];
                        }
                        return array;
                    }

                    // Fungsi untuk mengatur animasi kemunculan kartu saat halaman dimuat
                    function animateCardAppear() {
                        var cards = document.querySelectorAll('.fade-in');
                        var shuffledCards = shuffleArray(Array.from(cards));

                        shuffledCards.forEach(function(card, index) {
                            setTimeout(function() {
                                card.style.display =
                                    'block'; // Mengubah display menjadi "block" untuk menampilkan kartu
                                card.classList.add(
                                    'animated'); // Tambahkan class "animated" untuk mengaktifkan animasi kartu
                            }, index * 200); // Mengatur jeda antara kemunculan setiap kartu (dalam milidetik)
                        });
                    }

                    // Panggil fungsi animateCardAppear saat halaman selesai dimuat
                    window.addEventListener('load', animateCardAppear);
                </script>



            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>
    <script>
        $(window).on('load', function() {
            AOS.init();
        });
    </script>
@endsection
