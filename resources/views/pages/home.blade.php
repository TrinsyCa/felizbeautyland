@extends('app')
@section('title', 'Anasayfa | Feliz Beautyland')
@section('description', 'Welcome to Feliz Beautyland, your one-stop destination for all beauty needs.')
@section('keywords', 'beauty, cosmetics, skincare, haircare, Feliz Beautyland')
@section('author', 'Feliz Beautyland Team')

@section('styles')
    <link rel="stylesheet" href="{{ asset('tools/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <header class="home-header">
        <div class="header-content">
            <h1>Feliz Beautyland'e Hoş Geldiniz</h1>
            <p>Güzelliğinizi Keşfedin</p>
            <button>Randevu Alın</button>
        </div>
        <div class="header-background">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <video muted autoplay loop>
                            <source src="{{ asset('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-1.webm') }}" type="video/webm" media="(max-width: 767px)">
                            <source src="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-1.webm') }}" type="video/webm" media="(min-width: 768px)">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted autoplay loop>
                            <source src="{{ asset('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-2.webm') }}" type="video/webm" media="(max-width: 767px)">
                            <source src="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-2.webm') }}" type="video/webm" media="(min-width: 768px)">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted autoplay loop>
                            <source src="{{ asset('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-3.webm') }}" type="video/webm" media="(max-width: 767px)">
                            <source src="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-3.webm') }}" type="video/webm" media="(min-width: 768px)">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted autoplay loop>
                            <source src="{{ asset('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-4.webm') }}" type="video/webm" media="(max-width: 767px)">
                            <source src="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-4.webm') }}" type="video/webm" media="(min-width: 768px)">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/home.js') }}"></script>
    <script src="{{ asset('tools/swiper-bundle.min.js') }}"></script>
@endsection
