<style>
    /* DEMO-SPECIFIC STYLES */
    .teksjalan {
        color: #fff;
        font-family: monospace;
        overflow: hidden;
        /* Ensures the content is not revealed until the animation */
        border-right: .15em solid orange;
        /* The typwriter cursor */
        white-space: nowrap;
        /* Keeps the content on a single line */
        margin: 0 auto;
        /* Gives that scrolling effect as the typing happens */
        letter-spacing: .15em;
        /* Adjust as needed */
        animation:
            typing 3.5s steps(30, end),
            blink-caret .5s step-end infinite;
    }

    /* The typing effect */
    @keyframes typing {
        from {
            width: 0
        }

        to {
            width: 100%
        }
    }

    /* The typewriter cursor effect */
    @keyframes blink-caret {

        from,
        to {
            border-color: transparent
        }

        50% {
            border-color: orange
        }
    }
</style>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative">
        <h1 class="teksjalan">Horas Selamat Datang di Desa Sitoluama</h1>
        <h2>
            Sitoluama adalah salah satu Desa di Kecamatan Laguboti, Kabupaten Toba, Provinsi Sumatra Utara,
            Indonesia.
        </h2>
        <a href="{{ route('tentangdesa.user') }}" class="btn-get-started">Baca mabiar dohotna</a>
    </div>
</section>
<!-- End Hero -->
