<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALU Alu Of Sitoluama | RESET PASSWORD</title>

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
        input[type="email"] {
            color: black;
        }

        button {
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
                <span>RESET</span>
            </div>
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="metro double-size green">
                <div class="input-append lock-input">
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>


            <div class="metro single-size terques login"> <br><br><br>
                <button>
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
    </div>

</body>

<!-- END BODY -->

</html>
