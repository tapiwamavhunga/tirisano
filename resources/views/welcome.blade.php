<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        body {
            font-family: 'Arial';
            background: #fff;
        }

        body {
    background: #fff;
}
.page-wrap {
    min-height: 100vh;
}

    </style>
</head>
<body>
  

    <div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="mb-4 lead">Welcome to Tirisano Travel Recquest Portal</div>

                <div class="d-flex justify-content-center">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-muted">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-muted">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>


            </div>
        </div>
    </div>
</div>




</body>
</html>