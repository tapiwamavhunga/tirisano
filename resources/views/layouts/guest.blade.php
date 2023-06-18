<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet"> 
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('tiri/css/style.css') }}" />


        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <script src="{{ asset('tiri/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('tiri/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('tiri/js/dashboard.js') }}"></script>
<script src="{{ asset('tiri/js/scripts.js') }}"></script>

<style type="text/css">
    .header {
  padding: 20px 0px;
  position: fixed;
  top: 0;
  left: 52px !important;
  right: 0;
  z-index: 02;
  background: #fff;
}

.bg-light {
  background-color: #fff !important;
}

</style>

    </head>
    <body class="dashboard" style="font-family: Arial !important;">



        <div id="main-wrapper">

                <div class="container-fluid mb-5 mt-5">



        {{ $slot }}

    </div>

</div>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>