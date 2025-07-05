<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Feliz Beautyland')</title>
    <link rel="shortcut-icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    {{-- Meta Tags --}}

    {{-- Static Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ filemtime(public_path('css/app.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}?v={{ filemtime(public_path('css/navbar.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}?v={{ filemtime(public_path('css/footer.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/anim.css') }}?v={{ filemtime(public_path('css/footer.css')) }}">
    {{-- Static Styles --}}

    {{-- Dynamic Styles --}}
    @yield('styles')
    {{-- Dynamic Styles --}}
</head>
<body>
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')

    {{-- Static Scripts --}}
    <script src="{{ asset('scripts/app.js') }}?v={{ filemtime(public_path('scripts/app.js')) }}"></script>
    {{-- Static Scripts --}}

    {{-- Dynamic Scripts --}}
    @yield('scripts')
    {{-- Dynamic Scripts --}}
</body>
</html>
