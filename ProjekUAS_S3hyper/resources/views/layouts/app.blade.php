<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Perpustakaan YAPAK') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
    body {
        background-image: url('{{ asset('images/background-perpus.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
      .card-transparent {
        background-color: rgba(255, 255, 255, 0.7) !important;
        backdrop-filter: blur(4px);
    }
     .text-light-custom {
        color: #ffffff !important;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
    }
</style>


    @livewireStyles

</head>
<body>
    <div id="app" style="background-color: rgba(255, 255, 255, 0.15); min-height: 100vh;">
        
        <livewire:peminjam.kategori></livewire:peminjam.kategori>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    @livewireScripts
</body>
</html>
