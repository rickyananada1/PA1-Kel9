<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALU Alu Of Sitoluama | LOGIN</title>

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
        input[type="text"],
        input[type="password"] {
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
                <span>LOGIN</span>
            </div>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="metro double-size green">
                <div class="input-append lock-input">
                    <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"
                        placeholder="Username" />
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>
            </div>

            <div class="metro double-size yellow">
                <div class="input-append lock-input">
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" placeholder="Password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>

            <div class="metro single-size terques login">
                <button type="submit" class="btn login-btn">
                    LOGIN
                    <i class="fa fa-long-arrow-right"></i>
                </button>
            </div>

            <div class="login-footer">
                <div class="pull-left">
                    <div class="box">
                        <a href="{{ route('register') }}" class="register-link">REGISTER</a>
                    </div>
                </div>
                <div class="pull-right">
                    <div class="box">
                        <a href="{{ route('password.request') }}" class="forgot-link">FORGOT PASSWORD?</a>
                    </div>
                </div>
            </div>
    </div>

</body>

<!-- END BODY -->

</html>
