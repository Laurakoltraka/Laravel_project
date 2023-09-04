<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>
<body>

 @include('layouts.inc.admin_navbar')

 <div id="layoutSidenav">
    @include('layouts.inc.admin_sidebar')

    <div id="layoutSidenav_content">
        <main>
               @yield('content')
        </main>
        @include('layouts.inc.admin_footer')
        
    </div>
 </div>

    
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}" ></script>
    <script src="{{ asset('assets/js/scripts.js')}}" ></script>
    <script src="js/scripts.js"></script>


</body>
</html>