<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('lib/AdminLTE/dist/css/adminlte.css') }}">
    
    <link rel="stylesheet" href="{{ asset('lib/bootstrap-icons/font/bootstrap-icons.css') }}">
    <script src="{{ asset('lib/AdminLTE/docs/assets/plugins/jquery/jquery.min.js') }}">
    </script>
</head>
<body>
    <main class="py-4">
        @component('components.layout.header')@endcomponent
        @component('components.layout.sidebar')@endcomponent
        @component('components.layout.wrapper')        
            @yield('content')
        @endcomponent
    </main>
  <!-- Scripts --> 
    <script src="{{ asset('lib/AdminLTE/dist/js/adminlte.min.js') }}"></script>


    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
</body>     
</html>

   