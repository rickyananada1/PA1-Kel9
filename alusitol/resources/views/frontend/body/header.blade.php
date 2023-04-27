<head>
    <title>Home</title>
    <!--start css-->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--end css-->

    <!--start fonts-->
    <link href='http://fonts.useso.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.useso.com/css?family=Lato:100,200,300,400,500,600,700,800,900,100italic,300italic,400italic,700italic,900italic'
        rel='stylesheet' type='text/css'>
    <!--end fonts-->
    <link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Click On Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->


    <!--start js -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <!-- end js -->

    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- end-smooth-scrolling -->

    <!--
        style Card ALU aLU
    -->

    <style>
        .page-container {
            margin-left: 23%;
            margin-right: 19%;
            display: flex;
            flex-wrap: wrap;
            max-height: 100%;
            /* ubah angka sesuai kebutuhan */
            overflow-y: scroll;
        }

        .page {
            position: relative;
            box-sizing: border-box;
            width: 170px;
            /* ubah angka sesuai kebutuhan */
            height: 170px;
            /* ubah angka sesuai kebutuhan */
            font-family: cursive;
            font-size: 12px;
            border-radius: 10px;
            /* setengah dari lebar/tinggi untuk membuatnya persegi */
            background: #fff;
            background-image: linear-gradient(#f5f5f0 1.1rem, #ccc 1.2rem);
            background-size: 100% 1.2rem;
            line-height: 1.2rem;
            padding: 1.4rem 0.5rem 0.3rem 4.5rem;
            margin: 30px;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }



        .page::before,
        .page::after {
            position: absolute;
            content: "";
            bottom: 10px;
            width: 40%;
            height: 10px;
            box-shadow: 0 5px 14px rgba(0, 0, 0, 0.7);
            z-index: -1;
            transition: all 0.3s ease;
        }

        .page::before {
            left: 15px;
            transform: skew(-5deg) rotate(-5deg);
        }

        .page::after {
            right: 15px;
            transform: skew(5deg) rotate(5deg);
        }

        .page:hover::before,
        .page:hover::after {
            box-shadow: 0 2px 14px rgba(0, 0, 0, 0.4);
        }

        .margin {
            position: absolute;
            border-left: 1px solid #d88;
            height: 100%;
            left: 3.3rem;
            top: 0;
        }

        .page p {
            text-indent: 1rem;
            padding-bottom: 1.2rem;
            color: black;
            line-height: 20px;
        }

        .to {
            text-indent: 1rem;
            text-align: left;
            font-weight: bold;
            margin-top: 2rem;
            margin-bottom: 3rem;
        }

        .from {
            position: absolute;
            bottom: 0;
            text-indent: 1rem;
            text-align: left;
            font-weight: bold;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
    </style>

</head>
