<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALU Alu Of Sitoluama | Verify Email</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap-responsive.min.css') }}">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/font-awesome/css/font-awesome.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style-default.css') }}" id="style_color">

    <style>
        button[type="submit"] {
            color: black;
        }

        .box {
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
        }

        .box a {
            text-decoration: none;
        }

        .register-link {
            color: blue;
        }

        .register-link:hover {
            color: red;
        }

        .forgot-link {
            color: green;
        }

        .forgot-link:hover {
            color: orange;
        }
    </style>
</head>

<body class="lock">
    <div class="lock-header">
        <!-- Logo -->
        <a class="center" id="logo" href="{{ route('login') }}">
            <img class="center" alt="ALU Alu Of Sitoluama" src="{{ asset('backend/assets/images/logo.png') }}" />
        </a>
    </div>

    <div class="login-wrap text-center">
        <div class="metro single-size red">
            <div class="locked">
                <i class="fa fa-lock"></i>
                <span>Verify Your Email Address</span>
            </div>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="alert alert-success" role="alert">
                A new verification link has been sent to the email address you provided during registration.
            </div>
        @endif

        <p class="mt-2 mb-6">
            Before proceeding, please check your email for a verification link.
            If you did not receive the email, click the button below to request another.
        </p>

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div class="metro single-size terques login">
                <button type="submit" class="btn login-btn">
                    <span> Resend Verification Email
                    </span>
                    <i class="fa fa-long-arrow-right"></i>
                </button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
                class="underline text-sm text-black hover:text-black-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Logout') }}
            </button>


        </form>

        <div class="login-footer">
            <div class="pull-left"></div>
        </div>
    </div>



    <!-- jQuery -->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
</body>

</html>
