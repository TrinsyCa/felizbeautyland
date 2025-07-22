<!DOCTYPE html>
<html lang="tr" style="overflow: hidden;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Feliz Beautyland')</title>
    <link rel="shortcut icon" href="{{ asset('/assets/images/logo/feliz-icon.webp') }}?v={{ filemtime(public_path('/assets/images/logo/feliz-icon.webp')) }}" type="image/x-icon">

    {{-- Meta Tags --}}
    <meta name="title" content="Feliz Beautyland - Güzellik Salonu | Cilt Bakımı, Lazer Epilasyon, Manikür">
    <meta name="og:title" content="Feliz Beautyland - Güzellik Salonu | Cilt Bakımı, Lazer Epilasyon, Manikür">
    <meta name="twitter:title" content="Feliz Beautyland - Güzellik Salonu | Cilt Bakımı, Lazer Epilasyon, Manikür">
    <meta name="description" content="Feliz Beautyland, cilt bakımı, lazer epilasyon, manikür, pedikür ve daha birçok güzellik hizmeti sunar. Kleonef Göz Maskesi ile gençleşin! Randevu için ziyaret edin.">
    <meta name="og:description" content="Feliz Beautyland, cilt bakımı, lazer epilasyon, manikür, pedikür ve daha birçok güzellik hizmeti sunar. Kleonef Göz Maskesi ile gençleşin! Randevu için ziyaret edin.">
    <meta name="twitter:description" content="Feliz Beautyland, cilt bakımı, lazer epilasyon, manikür, pedikür ve daha birçok güzellik hizmeti sunar. Kleonef Göz Maskesi ile gençleşin! Randevu için ziyaret edin.">
    <meta name="keywords" content="güzellik salonu, cilt bakımı, lazer epilasyon, manikür, pedikür, kaş laminasyonu, kirpik laminasyonu, protez tırnak, lash botox, green peel, dermapen, kleonef göz maskesi, Filiz Büyüktaş, Feliz Beautyland">
    <meta name="og:keywords" content="güzellik salonu, cilt bakımı, lazer epilasyon, manikür, pedikür, kaş laminasyonu, kirpik laminasyonu, protez tırnak, lash botox, green peel, dermapen, kleonef göz maskesi, Filiz Büyüktaş, Feliz Beautyland">
    <meta name="author" content="Feliz Beautyland">
    <meta name="og:site_name" content="Feliz Beautyland">
    <meta name="twitter:site" content="Feliz Beautyland">
    <meta name="og:url" content="felizbeautyland.com">
    <meta name="twitter:url" content="felizbeautyland.com">
    <meta name="og:type" content="article">
    <meta name="article:section" content="Feliz Beautyland">
    <meta name="og:image" content="{{ asset('/assets/images/logo/feliz-icon.webp') }}?v={{ filemtime(public_path('/assets/images/logo/feliz-icon.webp')) }}">
    <meta name="twitter:image" content="{{ asset('/assets/images/logo/feliz-icon.webp') }}?v={{ filemtime(public_path('/assets/images/logo/feliz-icon.webp')) }}">
    <meta name="theme-color" content="#e09160">
    <meta property="og:card" content="summary_large_image">
    {{-- Meta Tags --}}

    {{-- Static Styles --}}
    <link rel="stylesheet" href="{{ asset('css/preloader.css') }}?v={{ filemtime(public_path('css/preloader.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ filemtime(public_path('css/app.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/fixedscreen.css') }}?v={{ filemtime(public_path('css/fixedscreen.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}?v={{ filemtime(public_path('css/navbar.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}?v={{ filemtime(public_path('css/footer.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}?v={{ filemtime(public_path('css/reservation.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/anim.css') }}?v={{ filemtime(public_path('css/footer.css')) }}">
    {{-- Static Styles --}}

    {{-- Static Responsive Styles --}}
    <link rel="stylesheet" href="{{ asset('css/res/app.css') }}?v={{ filemtime(public_path('css/res/app.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/res/navbar.css') }}?v={{ filemtime(public_path('css/res/navbar.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/res/footer.css') }}?v={{ filemtime(public_path('css/res/footer.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/res/reservation.css') }}?v={{ filemtime(public_path('css/res/reservation.css')) }}">
    {{-- Static Responsive Styles --}}

    {{-- Dynamic Styles --}}
    @yield('styles')
    {{-- Dynamic Styles --}}
</head>
<body>
    @include('layouts.preloader')
    @include('layouts.fixedscreen')
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')

    {{-- Static Scripts --}}
    <script src="{{ asset('scripts/preloader.js') }}?v={{ filemtime(public_path('scripts/preloader.js')) }}"></script>
    <script src="{{ asset('scripts/app.js') }}?v={{ filemtime(public_path('scripts/app.js')) }}"></script>
    <script src="{{ asset('scripts/anim.js') }}?v={{ filemtime(public_path('scripts/anim.js')) }}"></script>
    {{-- Static Scripts --}}

    {{-- Dynamic Scripts --}}
    @yield('scripts')
    {{-- Dynamic Scripts --}}
</body>
</html>
