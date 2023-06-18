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

.container-fluid-max {
  width: 98%;
  margin: 0 auto;
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels, .form-label {
    font-size: 11px;
    color: #1f2c73;
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}

.form-control {
  border-radius: 5px;
  height: 45px;
  border: 1px solid #eff2f7;
  padding: 0px 22px;
  font-size: 12px;
  color: #1e2e50;
  background: #fff;
}

.form-control {
  border-radius: 5px;
  height: 45px;
  border: 1px solid #eff2f7;
  padding: 0px 22px;
  font-size: 12px;
  color: #1e2e50;
  background: #fff;
  margin-top: 5px;
  margin-bottom: 10px;
}


.form-control {
  border-radius: 5px;
  height: 45px;
  border: 1px solid #1e2e50;
  padding: 0px 22px;
  font-size: 12px;
  color: #1e2e50;
  background: #fff;
  margin-top: 5px;
  margin-bottom: 10px;
}
  @media (min-width: 1400px){
    .container-fluid, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
  max-width: 92% !important;
}

#star {
            margin-left: -5px !important;
            vertical-align: bottom !important;
            opacity: 0.5;
        }


        .more {
            opacity: 0.5 !important;
        }

        .btn:hover {
            color: black !important;
        }

        .vl {
            margin: 8px !important;
            width: 2px;
            border-right: 1px solid #aaaaaa;
            height: 25px;
        }


        #plus {
            opacity: 0.8;
        }


        .card {
            border-radius: 10px !important;
        }

        a:hover {
            background-color: #ccc !important;
        }



        .btn-outlined:active {
            color: #FFF;
            border-color: #fff !important;
        }


        img {

            cursor: pointer;
            overflow: visible;
        }

        .btn:focus,
        .btn:active {
            outline: none !important;
            box-shadow: none !important;
        }

    /*.container{
       margin-top:100px !important;
    }*/

  }

  
.btn.btn-info.btn-sm {
  padding: 11px !important;
  position: relative !important;
  top: 6px !important;
  border-radius: 10px !important;
}

</style>

    </head>
    <body class="dashboard" style="font-family: Arial !important;">



        <div id="main-wrapper">

    @include('templates.header')

        @include('templates.sidebar')




  <div class="content-body">
            @yield('content')




  </div>



        

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
