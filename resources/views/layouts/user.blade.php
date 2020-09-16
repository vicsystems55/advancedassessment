<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'FGHLB') }}</title>
        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        
        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
       
    
        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
    </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.user_sidebar')

        @endauth
        
        <div class="main-content">
            @include('layouts.navbars.navbar')
      
            @yield('content')
        </div>

        @guest()
            @include('layouts.footers.guest')
        @endguest

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script src="{{ asset('argon') }}/js/lga.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
        @stack('js')
        
        <!-- Argon JS -->
        <script src="/assets/vendor/nouislider/distribute/nouislider.min.js"></script>
        <script src="{{asset('argon')}}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
        
        
        <script>
    $("#e9").select2({
        placeholder: '--Select Ministry/Department/Agency--',
        theme: "bootstrap4",
        width: "88%"

    });

    $("#e10").select2({
        placeholder: '--Select Ministry/Department/Agency--',
        theme: "bootstrap4",
        width: "88%"

    });

    $("#e11").select2({
        placeholder: '--Select Ministry/Department/Agency--',
        theme: "bootstrap4",
        width: "88%"

    })
    
</script>

        <script src="{{asset('argon')}}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    </body>
</html>