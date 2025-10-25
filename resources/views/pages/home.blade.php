@extends('app')
@section('title', 'Feliz Beautyland - Güzellik Salonu | Cilt Bakımı, Lazer Epilasyon, Manikür')
@section('styles')
    <link rel="stylesheet" href="{{ asset('tools/swiper-bundle.min.css') }}?v={{ filemtime(public_path('tools/swiper-bundle.min.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/home.min.css') }}?v={{ filemtime(public_path('css/home.min.css')) }}">

    {{-- Responsive Styles --}}
    <link rel="stylesheet" href="{{ asset('css/res/home.min.css') }}?v={{ filemtime(public_path('css/res/home.min.css')) }}">
    {{-- Responsive Styles --}}
@endsection

@section('content')
    @include('layouts.reservation')
    <header class="home-header">
        <div class="header-content">
            <h1>Feliz Beautyland'e <br> Hoş Geldiniz</h1>
            <p>Güzelliğinizi Keşfedin</p>
            <a href="#randevu-al">
                Randevu Alın
                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="#e09160" fill-rule="evenodd" clip-rule="evenodd"><g opacity="0.2"><path d="M12.206 5.848a1.5 1.5 0 0 1 2.113.192l3.333 4a1.5 1.5 0 1 1-2.304 1.92l-3.334-4a1.5 1.5 0 0 1 .192-2.112"/><path d="M12.206 16.152a1.5 1.5 0 0 1-.192-2.112l3.334-4a1.5 1.5 0 0 1 2.304 1.92l-3.333 4a1.5 1.5 0 0 1-2.113.192"/><path d="M16 11a1.5 1.5 0 0 1-1.5 1.5h-8a1.5 1.5 0 0 1 0-3h8A1.5 1.5 0 0 1 16 11"/></g><path d="M11.347 5.616a.5.5 0 0 1 .704.064l3.333 4a.5.5 0 0 1-.768.64l-3.333-4a.5.5 0 0 1 .064-.704"/><path d="M11.347 14.384a.5.5 0 0 1-.064-.704l3.333-4a.5.5 0 0 1 .768.64l-3.333 4a.5.5 0 0 1-.704.064"/><path d="M15.5 10a.5.5 0 0 1-.5.5H5a.5.5 0 0 1 0-1h10a.5.5 0 0 1 .5.5"/></g></svg>
            </a>
        </div>
        <div class="header-background">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <video muted autoplay loop poster="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-1.webp') }}?v={{ filemtime(public_path('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-1.webp')) }}">
                            <source src="{{ asset('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-1.webm') }}?v={{ filemtime(public_path('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-1.webm')) }}" type="video/webm" media="(max-width: 767px)">
                            <source src="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-1.webm') }}?v={{ filemtime(public_path('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-1.webm')) }}" type="video/webm" media="(min-width: 768px)">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted autoplay loop poster="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-2.webp') }}?v={{ filemtime(public_path('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-2.webp')) }}">
                            <source src="{{ asset('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-2.webm') }}?v={{ filemtime(public_path('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-2.webm')) }}" type="video/webm" media="(max-width: 767px)" loading="layz">
                            <source src="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-2.webm') }}?v={{ filemtime(public_path('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-2.webm')) }}" type="video/webm" media="(min-width: 768px)" loading="layz">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted autoplay loop poster="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-3.webp') }}?v={{ filemtime(public_path('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-3.webp')) }}">
                            <source src="{{ asset('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-3.webm') }}?v={{ filemtime(public_path('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-3.webm')) }}" type="video/webm" media="(max-width: 767px)" loading="layz">
                            <source src="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-3.webm') }}?v={{ filemtime(public_path('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-3.webm')) }}" type="video/webm" media="(min-width: 768px)" loading="layz">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted autoplay loop poster="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-4.webp') }}?v={{ filemtime(public_path('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-4.webp')) }}">
                            <source src="{{ asset('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-4.webm') }}?v={{ filemtime(public_path('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-4.webm')) }}" type="video/webm" media="(max-width: 767px)" loading="layz">
                            <source src="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-4.webm') }}?v={{ filemtime(public_path('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-4.webm')) }}" type="video/webm" media="(min-width: 768px)" loading="layz">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <a class="header-icon" href="{{ url('#hizmetler') }}" aria-label="Hizmetlerimiz hakkında daha fazla bilgi al">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="#333" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m6 13l6 6l6-6M6 5l6 6l6-6"/></svg>
        </a>
    </header>
    <div class="container">
        <section class="sidebyside">
            <div class="sidebyside-container">
            <div class="animation-trigger"></div>
                <div class="sidebyside-media LeftToRightAnim" id="hizmetler">
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{ asset('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-1.webp') }}?v={{ filemtime(public_path('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-1.webp')) }}" type="image/webp" loading="layz">
                                    <source media="(min-width: 768px)" srcset="{{ asset('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-1.webp') }}?v={{ filemtime(public_path('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-1.webp')) }}" type="image/webp" loading="layz">
                                    <img src="{{ asset('assets/images/customers/original/feliz-beautyland-güzellik-salonu-1.jpg') }}" alt="Feliz Beautyland Güzellik Salonu">
                                </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture>
                                <source media="(max-width: 767px)" srcset="{{ asset('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-2.webp') }}?v={{ filemtime(public_path('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-2.webp')) }}" type="image/webp" loading="layz">
                                <source media="(min-width: 768px)" srcset="{{ asset('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-2.webp') }}?v={{ filemtime(public_path('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-2.webp')) }}" type="image/webp" loading="layz">
                                <img src="{{ asset('assets/images/customers/original/feliz-beautyland-güzellik-salonu-2.jpg') }}" alt="Feliz Beautyland Güzellik Salonu">
                            </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{ asset('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-3.webp') }}?v={{ filemtime(public_path('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-3.webp')) }}" type="image/webp" loading="layz">
                                    <source media="(min-width: 768px)" srcset="{{ asset('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-3.webp') }}?v={{ filemtime(public_path('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-3.webp')) }}" type="image/webp" loading="layz">
                                    <img src="{{ asset('assets/images/customers/original/feliz-beautyland-güzellik-salonu-3.jpg') }}" alt="Feliz Beautyland Güzellik Salonu">
                                </picture>
                            </div>
                        </div>
                        <div class="swiper-prev-next-buttons">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
                <div class="sidebyside-content">
                    <h2 class="RightToLeftAnim">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="#f109ff" d="M14.121 10.48a1 1 0 0 0-1.414 0l-.707.706a2 2 0 0 1-2.828-2.828l5.63-5.632a6.5 6.5 0 0 1 6.377 10.568l-2.108 2.135zM3.161 4.468a6.5 6.5 0 0 1 8.009-.938L7.757 6.944a4 4 0 0 0 5.513 5.794l.144-.137l4.243 4.242l-4.243 4.243a2 2 0 0 1-2.828 0L3.16 13.66a6.5 6.5 0 0 1 0-9.192"/></svg>
                        Hizmetlerimiz
                    </h2>
                    <p class="BottomToTopAnim">
                        Feliz Beautyland olarak güzelliğinizin her adımında yanınızdayız. Geniş hizmet yelpazemizle cilt bakımı, manikür-pedikür, kalıcı oje ve protez tırnak uygulamalarından, özel lazer epilasyon seanslarına kadar kapsamlı çözümler sunuyoruz.
                        <br><br>
                        Lazer epilasyon hizmetlerimizle kadın ve erkeklere uzun süreli pürüzsüzlük sağlıyor, kendinizi özgür ve rahat hissetmenizi hedefliyoruz. Kirpiklerinize doğal ve etkili bakım sağlayan Kirpik Laminasyon uygulamalarımız ise bakışlarınızı güçlendiriyor.
                        <br><br>
                        Cilt yenileme ve bakım alanında klasik cilt bakımı, Green Peel ve Dermapen gibi son teknoloji uygulamalarla cildinizin sağlığını ve gençliğini koruyoruz. Manikür ve pedikürde ise hem klasik hem kalıcı oje seçeneklerimizle ellerinizin ve ayaklarınızın güzelliğine önem veriyoruz.
                        <br><br>
                        Rahatlama ve stres atmak için profesyonel kafa masajı, bukal masajı ve İsveç masajı hizmetlerimizle bedeninizi ve zihninizi dinlendiriyoruz. Bölgesel incelme uygulamalarımızla ise formda kalmanıza destek oluyoruz.
                        <br><br>
                        Feliz Beautyland, uzman ekibi ve kaliteli ürünleriyle, güzelliğinizi en iyi şekilde ortaya çıkarmanız için sizi bekliyor.
                    </p>
                    <div class="center-container BottomToTopAnim">
                        <button onclick="reservationSection();" class="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="rgb(245, 245, 245)" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/></svg>
                            Hizmetlerimizi İnceleyin
                        </button>
                    </div>
                </div>
            </div>
            <div class="sub-sidebyside-container">
                <div class="animation-trigger"></div>
                <h2 class="LeftToRightAnim">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 32 32"><rect width="32" height="32" fill="none"/><g fill="none"><g filter="url(#f2372id4)"><path fill="url(#f2372id0)" d="M15.821 11.106c-.17.662-.749 1.156-1.433 1.498c-1.939.67-3.47 1.316-4.738 1.942c-1.122.555-1.11 2.308.015 2.855c1.315.639 2.966 1.252 4.8 1.98c.493.195 1.19.747 1.363 1.426a56 56 0 0 0 2.063 6.35c.621 1.587 2.158 1.585 2.783 0c.81-2.059 1.427-4.282 2.122-6.397a2.02 2.02 0 0 1 1.294-1.395a70 70 0 0 0 4.721-1.889c1.26-.555 1.286-2.356.042-2.946a56 56 0 0 0-4.771-2.009a2.16 2.16 0 0 1-1.339-1.398c-.754-2.31-1.232-4.27-2.034-6.304c-.625-1.586-2.264-1.537-2.89.048c-.798 2.028-1.355 4.045-1.998 6.239"/></g><path fill="url(#f2372id1)" d="M15.821 11.106c-.17.662-.749 1.156-1.433 1.498c-1.939.67-3.47 1.316-4.738 1.942c-1.122.555-1.11 2.308.015 2.855c1.315.639 2.966 1.252 4.8 1.98c.493.195 1.19.747 1.363 1.426a56 56 0 0 0 2.063 6.35c.621 1.587 2.158 1.585 2.783 0c.81-2.059 1.427-4.282 2.122-6.397a2.02 2.02 0 0 1 1.294-1.395a70 70 0 0 0 4.721-1.889c1.26-.555 1.286-2.356.042-2.946a56 56 0 0 0-4.771-2.009a2.16 2.16 0 0 1-1.339-1.398c-.754-2.31-1.232-4.27-2.034-6.304c-.625-1.586-2.264-1.537-2.89.048c-.798 2.028-1.355 4.045-1.998 6.239"/><g filter="url(#f2372id5)"><path fill="url(#f2372id2)" d="M7.768 5.816c-.055.213-.241.372-.461.482c-.624.216-1.117.424-1.525.626c-.361.178-.358.742.005.918c.423.206.954.403 1.544.637c.16.063.383.241.44.46c.171.673.405 1.385.663 2.043c.2.511.695.51.896 0c.26-.662.46-1.378.683-2.059a.65.65 0 0 1 .417-.449a22 22 0 0 0 1.52-.607a.523.523 0 0 0 .013-.949c-.428-.202-.96-.437-1.536-.646a.7.7 0 0 1-.431-.45c-.243-.744-.397-1.374-.655-2.03c-.2-.51-.729-.494-.93.016c-.257.653-.436 1.302-.643 2.008"/></g><path fill="url(#f2372id3)" d="M7.768 5.816c-.055.213-.241.372-.461.482c-.624.216-1.117.424-1.525.626c-.361.178-.358.742.005.918c.423.206.954.403 1.544.637c.16.063.383.241.44.46c.171.673.405 1.385.663 2.043c.2.511.695.51.896 0c.26-.662.46-1.378.683-2.059a.65.65 0 0 1 .417-.449a22 22 0 0 0 1.52-.607a.523.523 0 0 0 .013-.949c-.428-.202-.96-.437-1.536-.646a.7.7 0 0 1-.431-.45c-.243-.744-.397-1.374-.655-2.03c-.2-.51-.729-.494-.93.016c-.257.653-.436 1.302-.643 2.008"/><g filter="url(#f2372id6)"><path fill="url(#f2372id7)" d="M5.226 20.066c-.076.297-.336.518-.643.672c-.87.3-1.558.59-2.127.872c-.503.249-.498 1.035.007 1.28c.59.288 1.331.563 2.154.89c.222.087.534.335.612.64c.24.938.566 1.932.926 2.85c.279.712.969.711 1.249 0c.364-.924.64-1.922.952-2.872a.9.9 0 0 1 .581-.626a31 31 0 0 0 2.12-.847a.73.73 0 0 0 .018-1.323a25 25 0 0 0-2.141-.901a.97.97 0 0 1-.601-.628c-.339-1.037-.553-1.916-.913-2.83c-.28-.71-1.017-.689-1.297.023c-.358.91-.609 1.815-.897 2.8"/></g><defs><linearGradient id="f2372id0" x1="26.129" x2="15.052" y1="11.271" y2="22.931" gradientUnits="userSpaceOnUse"><stop stop-color="#ffcf5a"/><stop offset="1" stop-color="#fea254"/></linearGradient><linearGradient id="f2372id1" x1="14.754" x2="20.792" y1="29.29" y2="16.554" gradientUnits="userSpaceOnUse"><stop stop-color="#ff886d"/><stop offset="1" stop-color="#ff886d" stop-opacity="0"/></linearGradient><linearGradient id="f2372id2" x1="11.086" x2="7.521" y1="5.869" y2="9.622" gradientUnits="userSpaceOnUse"><stop stop-color="#ffda72"/><stop offset="1" stop-color="#f7a967"/></linearGradient><linearGradient id="f2372id3" x1="8.886" x2="8.886" y1="11.98" y2="7.855" gradientUnits="userSpaceOnUse"><stop stop-color="#fda071"/><stop offset="1" stop-color="#fda071" stop-opacity="0"/></linearGradient><filter id="f2372id4" width="21.607" height="25.193" x="8.415" y="3.404" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx=".25" dy="-.25"/><feGaussianBlur stdDeviation=".25"/><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"/><feColorMatrix values="0 0 0 0 0.937255 0 0 0 0 0.482353 0 0 0 0 0.329412 0 0 0 1 0"/><feBlend in2="shape" result="effect1_innerShadow_18_454"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx=".25" dy=".25"/><feGaussianBlur stdDeviation=".5"/><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"/><feColorMatrix values="0 0 0 0 0.737255 0 0 0 0 0.615686 0 0 0 0 0.415686 0 0 0 1 0"/><feBlend in2="effect1_innerShadow_18_454" result="effect2_innerShadow_18_454"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-.4" dy=".25"/><feGaussianBlur stdDeviation=".2"/><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"/><feColorMatrix values="0 0 0 0 1 0 0 0 0 0.901961 0 0 0 0 0.458824 0 0 0 1 0"/><feBlend in2="effect2_innerShadow_18_454" result="effect3_innerShadow_18_454"/></filter><filter id="f2372id5" width="6.945" height="8.048" x="5.413" y="3.418" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx=".1" dy=".1"/><feGaussianBlur stdDeviation=".1"/><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"/><feColorMatrix values="0 0 0 0 0.803922 0 0 0 0 0.6 0 0 0 0 0.262745 0 0 0 1 0"/><feBlend in2="shape" result="effect1_innerShadow_18_454"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx="-.1" dy=".1"/><feGaussianBlur stdDeviation=".1"/><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"/><feColorMatrix values="0 0 0 0 1 0 0 0 0 0.882353 0 0 0 0 0.423529 0 0 0 1 0"/><feBlend in2="effect1_innerShadow_18_454" result="effect2_innerShadow_18_454"/></filter><filter id="f2372id6" width="9.556" height="11.233" x="2.081" y="16.571" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dx=".15" dy="-.15"/><feGaussianBlur stdDeviation=".15"/><feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic"/><feColorMatrix values="0 0 0 0 1 0 0 0 0 0.458824 0 0 0 0 0.462745 0 0 0 1 0"/><feBlend in2="shape" result="effect1_innerShadow_18_454"/></filter><radialGradient id="f2372id7" cx="0" cy="0" r="1" gradientTransform="matrix(-4.2802 5.63466 -5.4871 -4.1681 10.014 18.567)" gradientUnits="userSpaceOnUse"><stop offset=".365" stop-color="#ffbc64"/><stop offset="1" stop-color="#ff8f6b"/></radialGradient></defs></g></svg>
                    Cildiniz İçin En İyisi
                </h2>
                <br>
                <p class="LeftToRightAnim">
                    Kleonef Göz Maskesi – Kırışıklık Azaltıcı Göz Maskesi
                    <br><br>
                    Göz çevresi bakımı, yaşlanma karşıtı cilt rutinlerinin en hassas ve önemli adımıdır.
                    <br>
                    Kleonef Göz Maskesi, güçlü ve özel formülüyle göz çevresindeki kuruluk, ince çizgiler, şişlik ve koyu halkalara karşı etkili bakım sunar.
                </p>
            </div>
            <div>
                <div class="animation-trigger"></div>
                <div class="sidebyside-container reponsive-reserse">
                    <div class="sidebyside-content">
                        <p class="BottomToTopAnim">
                            💧 Hyaluronik Asit: Cildi derinlemesine nemlendirir, dolgunlaştırır ve genç görünüm kazandırır.
                            <br>
                            ☕️ Kafein: Göz altı torbalarını ve koyu halkaları azaltarak daha aydınlık bir bakış sağlar.
                            <br>
                            🧬 Peptitler: İnce çizgilerin görünümünü yumuşatır, cilt elastikiyetini artırır.
                            <br>
                            🌿 Lavanta, At Kestanesi, Ananas ve Çiçek Özleri: Göz çevresine rahatlatıcı, canlandırıcı ve tazelik veren doğal etkiler sunar.
                            <br><br>
                            Monodoz (tek kullanımlık) ambalajı sayesinde her kullanımda maksimum tazelik ve hijyen garantilenir. Dermatolojik olarak test edilmiş, vegan ve çevre dostu içeriğiyle güvenle kullanabilirsiniz.
                            <br><br>
                            Kleonef Göz Maskesi’nin Farkı Nedir?
                            <br>
                            Yaşlanma karşıtı, kırışıklık azaltıcı sıkılaştırıcı formül.
                            <br>
                            Göz çevresindeki şişlik ve morlukları azaltmaya yardımcı.
                            <br>
                            Vegan, geri dönüştürülebilir ambalaj ile çevre dostu.
                            <br>
                            Gözlerinizin ihtiyacı olan bakımı Kleonef ile keşfedin, daha genç, taze ve parlak bir görünüm kazanın.
                        </p>
                        <div class="center-container BottomToTopAnim">
                            <button onclick="reservationSection();" class="primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="rgb(245, 245, 245)" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/></svg>
                                Hizmetlerimizi İnceleyin
                            </button>
                        </div>
                    </div>
                    <div class="sidebyside-media RightToLeftAnim" id="hizmetler">
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{ asset('assets/images/products/kleonef/425p/felizbeautyland-kleonef.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/425p/felizbeautyland-kleonef.webp')) }}" type="image/webp" loading="layz">
                                        <source media="(min-width: 768px)" srcset="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/800p/felizbeautyland-kleonef.webp')) }}" type="image/webp" loading="layz">
                                        <img src="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef.webp') }}" alt="Feliz Beautyland Güzellik Salonu">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{ asset('assets/images/products/kleonef/425p/felizbeautyland-kleonef-1.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/425p/felizbeautyland-kleonef-1.webp')) }}" type="image/webp" loading="layz">
                                        <source media="(min-width: 768px)" srcset="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef-1.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/800p/felizbeautyland-kleonef-1.webp')) }}" type="image/webp" loading="layz">
                                        <img src="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef-1.webp') }}" alt="Feliz Beautyland Güzellik Salonu">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture>
                                    <source media="(max-width: 767px)" srcset="{{ asset('assets/images/products/kleonef/425p/felizbeautyland-kleonef-2.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/425p/felizbeautyland-kleonef-2.webp')) }}" type="image/webp" loading="layz">
                                    <source media="(min-width: 768px)" srcset="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef-2.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/800p/felizbeautyland-kleonef-2.webp')) }}" type="image/webp" loading="layz">
                                    <img src="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef-2.webp') }}" alt="Feliz Beautyland Güzellik Salonu">
                                </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{ asset('assets/images/products/kleonef/425p/felizbeautyland-kleonef-3.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/425p/felizbeautyland-kleonef-3.webp')) }}" type="image/webp" loading="layz">
                                        <source media="(min-width: 768px)" srcset="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef-3.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/800p/felizbeautyland-kleonef-3.webp')) }}" type="image/webp" loading="layz">
                                        <img src="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef-3.webp') }}" alt="Feliz Beautyland Güzellik Salonu">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{ asset('assets/images/products/kleonef/425p/felizbeautyland-kleonef-4.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/425p/felizbeautyland-kleonef-4.webp')) }}" type="image/webp" loading="layz">
                                        <source media="(min-width: 768px)" srcset="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef-4.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/800p/felizbeautyland-kleonef-4.webp')) }}" type="image/webp" loading="layz">
                                        <img src="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef-4.webp') }}" alt="Feliz Beautyland Güzellik Salonu">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{ asset('assets/images/products/kleonef/425p/felizbeautyland-kleonef-5.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/425p/felizbeautyland-kleonef-5.webp')) }}" type="image/webp" loading="layz">
                                        <source media="(min-width: 768px)" srcset="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef-5.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/800p/felizbeautyland-kleonef-5.webp')) }}" type="image/webp" loading="layz">
                                        <img src="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef-5.webp') }}" alt="Feliz Beautyland Güzellik Salonu">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{ asset('assets/images/products/kleonef/425p/felizbeautyland-kleonef-6.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/425p/felizbeautyland-kleonef-6.webp')) }}" type="image/webp" loading="layz">
                                        <source media="(min-width: 768px)" srcset="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef-6.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/800p/felizbeautyland-kleonef-6.webp')) }}" type="image/webp" loading="layz">
                                        <img src="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef-6.webp') }}" alt="Feliz Beautyland Güzellik Salonu">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{ asset('assets/images/products/kleonef/425p/felizbeautyland-kleonef-7.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/425p/felizbeautyland-kleonef-7.webp')) }}" type="image/webp" loading="layz">
                                        <source media="(min-width: 768px)" srcset="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef-7.webp') }}?v={{ filemtime(public_path('assets/images/products/kleonef/800p/felizbeautyland-kleonef-7.webp')) }}" type="image/webp" loading="layz">
                                        <img src="{{ asset('assets/images/products/kleonef/800p/felizbeautyland-kleonef-7.webp') }}" alt="Feliz Beautyland Güzellik Salonu">
                                    </picture>
                                </div>
                            </div>
                            <div class="swiper-prev-next-buttons">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="userStories">
            <div class="animation-trigger"></div>
            <div class="sidebyside">
                <div class="sidebyside-container">
                    <div class="userStories-users" id="userStoriesUsers">
                        <h2 class="LeftToRightAnim">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 512 512"><rect width="512" height="512" fill="none"/><defs><linearGradient id="meteoconsStarFill0" x1="187.9" x2="324.1" y1="138.1" y2="373.9" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fcd966"/><stop offset=".5" stop-color="#fcd966"/><stop offset="1" stop-color="#fccd34"/></linearGradient></defs><path fill="url(#meteoconsStarFill0)" stroke="#fcd34d" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="m105.7 263.5l107.5 29.9a7.9 7.9 0 0 1 5.4 5.4l29.9 107.5a7.8 7.8 0 0 0 15 0l29.9-107.5a7.9 7.9 0 0 1 5.4-5.4l107.5-29.9a7.8 7.8 0 0 0 0-15l-107.5-29.9a7.9 7.9 0 0 1-5.4-5.4l-29.9-107.5a7.8 7.8 0 0 0-15 0l-29.9 107.5a7.9 7.9 0 0 1-5.4 5.4l-107.5 29.9a7.8 7.8 0 0 0 0 15Z"><animateTransform additive="sum" attributeName="transform" calcMode="spline" dur="6s" keySplines=".42, 0, .58, 1; .42, 0, .58, 1" repeatCount="indefinite" type="rotate" values="-15 256 256; 15 256 256; -15 256 256"/><animate attributeName="opacity" dur="6s" values="1; .75; 1; .75; 1; .75; 1"/></path></svg>
                            Bizi Tavsiye Edenler
                        </h2>
                        <div class="space"></div>
                        <div class="userStories-users-container">
                            <div class="swiper mySwiper4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide ScaleToShowAnim" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/betul-cakmak.webp') }}?v={{ filemtime(public_path('assets/images/customers/pp/betul-cakmak.webp')) }}" alt="Betül Çakmak" loading="lazy">
                                        </div>
                                        <p>Betül Çakmak</p>
                                    </div>
                                    <div class="swiper-slide ScaleToShowAnim" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/aleyna-solaker.webp') }}?v={{ filemtime(public_path('assets/images/customers/pp/aleyna-solaker.webp')) }}" alt="Aleyna Solaker" loading="lazy">
                                        </div>
                                        <p>Aleyna Solaker</p>
                                    </div>
                                    <div class="swiper-slide ScaleToShowAnim" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/merve-yildirim.webp') }}?v={{ filemtime(public_path('assets/images/customers/pp/merve-yildirim.webp')) }}" alt="Merve Yıldırım" loading="lazy">
                                        </div>
                                        <p>Merve Yıldırım</p>
                                    </div>
                                    <div class="swiper-slide ScaleToShowAnim" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/buket-sena.webp') }}?v={{ filemtime(public_path('assets/images/customers/pp/buket-sena.webp')) }}" alt="Buket Sena" loading="lazy">
                                        </div>
                                        <p>Buket Sena</p>
                                    </div>
                                    <div class="swiper-slide ScaleToShowAnim" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/melis-fis.webp') }}?v={{ filemtime(public_path('assets/images/customers/pp/melis-fis.webp')) }}" alt="Melis Fis" loading="lazy">
                                        </div>
                                        <p>Melis Fis</p>
                                    </div>
                                    <div class="swiper-slide ScaleToShowAnim" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/merve-kutlu.webp') }}?v={{ filemtime(public_path('assets/images/customers/pp/merve-kutlu.webp')) }}" alt="Merve Kutlu" loading="lazy">
                                        </div>
                                        <p>Merve Kutlu</p>
                                    </div>
                                    <div class="swiper-slide ScaleToShowAnim" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/nilsu-aktas.webp') }}?v={{ filemtime(public_path('assets/images/customers/pp/nilsu-aktas.webp')) }}" alt="Nilsu Aktaş" loading="lazy">
                                        </div>
                                        <p>Nilsu Aktaş</p>
                                    </div>
                                    <div class="swiper-slide ScaleToShowAnim" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/eda-eryurt.webp') }}?v={{ filemtime(public_path('assets/images/customers/pp/eda-eryurt.webp')) }}" alt="Eda Eryurt" loading="lazy">
                                        </div>
                                        <p>Eda Eryurt</p>
                                    </div>
                                    <div class="swiper-slide ScaleToShowAnim" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/cagla-simsek.webp') }}?v={{ filemtime(public_path('assets/images/customers/pp/cagla-simsek.webp')) }}" alt="Çağla Şimşek" loading="lazy">
                                        </div>
                                        <p>Çağla Şimşek</p>
                                    </div>
                                    <div class="swiper-slide ScaleToShowAnim" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/mervan-tepelioglu.webp') }}?v={{ filemtime(public_path('assets/images/customers/pp/mervan-tepelioglu.webp')) }}" alt="Mervan Tepelioğlu" loading="lazy">
                                        </div>
                                        <p>Mervan Tepelioğlu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="userStories-container TopToBottomAnim">
                        <div class="userStories-stories">
                            <div class="swiper mySwiper3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <video poster="{{ asset('assets/images/customers/stories/betul-cakmak/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/betul-cakmak/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/betul-cakmak/betul-cakmak-feliz-beautyland-1.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/betul-cakmak/betul-cakmak-feliz-beautyland-1.webm')) }}" type="video/mp4" title="Betül Çakmak Güzellik Salonu" loading="lazy"></video>
                                                </div>
                                                <div class="swiper-slide">
                                                    <video poster="{{ asset('assets/images/customers/stories/betul-cakmak/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/betul-cakmak/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/betul-cakmak/betul-cakmak-feliz-beautyland-2.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/betul-cakmak/betul-cakmak-feliz-beautyland-2.webm')) }}" type="video/mp4" title="Betül Çakmak Güzellik Salonu" loading="lazy"></video>
                                                </div>
                                                <div class="swiper-slide">
                                                    <video poster="{{ asset('assets/images/customers/stories/betul-cakmak/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/betul-cakmak/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/betul-cakmak/betul-cakmak-feliz-beautyland-3.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/betul-cakmak/betul-cakmak-feliz-beautyland-3.webm')) }}" type="video/mp4" title="Betül Çakmak Güzellik Salonu" loading="lazy"></video>
                                                </div>
                                                <div class="swiper-slide">
                                                    <video poster="{{ asset('assets/images/customers/stories/betul-cakmak/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/betul-cakmak/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/betul-cakmak/betul-cakmak-feliz-beautyland-4.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/betul-cakmak/betul-cakmak-feliz-beautyland-4.webm')) }}" type="video/mp4" title="Betül Çakmak Güzellik Salonu" loading="lazy"></video>
                                                </div>
                                                <div class="swiper-slide">
                                                    <video poster="{{ asset('assets/images/customers/stories/betul-cakmak/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/betul-cakmak/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/betul-cakmak/betul-cakmak-feliz-beautyland-5.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/betul-cakmak/betul-cakmak-feliz-beautyland-5.webm')) }}" type="video/mp4" title="Betül Çakmak Güzellik Salonu" loading="lazy"></video>
                                                </div>
                                                <div class="swiper-slide">
                                                    <video poster="{{ asset('assets/images/customers/stories/betul-cakmak/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/betul-cakmak/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/betul-cakmak/betul-cakmak-feliz-beautyland-6.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/betul-cakmak/betul-cakmak-feliz-beautyland-6.webm')) }}" type="video/mp4" title="Betül Çakmak Güzellik Salonu" loading="lazy"></video>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="userStories-story-button" target="_blank" rel="nofollow" href="https://www.instagram.com/stories/highlights/17924705225278768/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg>
                                            Instagram'da Görüntüle
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <video poster="{{ asset('assets/images/customers/stories/aleyna-solaker/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/aleyna-solaker/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/aleyna-solaker/aleyna-solaker-feliz-beautyland-1.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/aleyna-solaker/aleyna-solaker-feliz-beautyland-1.webm')) }}" type="video/mp4" title="Aleyna Solaker Güzellik Salonu" loading="lazy"></video>
                                                </div>
                                                <div class="swiper-slide">
                                                    <video poster="{{ asset('assets/images/customers/stories/aleyna-solaker/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/aleyna-solaker/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/aleyna-solaker/aleyna-solaker-feliz-beautyland-2.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/aleyna-solaker/aleyna-solaker-feliz-beautyland-2.webm')) }}" type="video/mp4" title="Aleyna Solaker Güzellik Salonu" loading="lazy"></video>
                                                </div>
                                                <div class="swiper-slide">
                                                    <video poster="{{ asset('assets/images/customers/stories/aleyna-solaker/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/aleyna-solaker/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/aleyna-solaker/aleyna-solaker-feliz-beautyland-3.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/aleyna-solaker/aleyna-solaker-feliz-beautyland-3.webm')) }}" type="video/mp4" title="Aleyna Solaker Güzellik Salonu" loading="lazy"></video>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('assets/images/customers/stories/aleyna-solaker/aleyna-solaker-feliz-beautyland.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/aleyna-solaker/aleyna-solaker-feliz-beautyland.webp')) }}" alt="Aleyna Solaker Güzellik Salonu" loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                        <a class="userStories-story-button" target="_blank" rel="nofollow" href="https://www.instagram.com/stories/highlights/18141142012283730/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg>
                                            Instagram'da Görüntüle
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <video poster="{{ asset('assets/images/customers/stories/merve-yildirim/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/merve-yildirim/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/merve-yildirim/merve-yildirim-feliz-beautyland.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/merve-yildirim/merve-yildirim-feliz-beautyland.webm')) }}" type="video/mp4" title="Merve Yıldırım Güzellik Salonu" loading="lazy"></video>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="userStories-story-button" target="_blank" rel="nofollow" href="https://www.instagram.com/p/C6gsRCcMk-2/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg>
                                            Instagram'da Görüntüle
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/buket-sena/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland.webm')) }}" type="video/mp4" title="Buket Sena Güzellik Salonu" loading="lazy"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/buket-sena/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-1.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-1.webm')) }}" type="video/mp4" title="Buket Sena Güzellik Salonu" loading="lazy"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/buket-sena/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-2.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-2.webm')) }}" type="video/mp4" title="Buket Sena Güzellik Salonu" loading="lazy"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/buket-sena/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-3.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-3.webm')) }}" type="video/mp4" title="Buket Sena Güzellik Salonu" loading="lazy"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/buket-sena/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-4.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-4.webm')) }}" type="video/mp4" title="Buket Sena Güzellik Salonu" loading="lazy"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/buket-sena/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-5.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-5.webm')) }}" type="video/mp4" title="Buket Sena Güzellik Salonu" loading="lazy"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/buket-sena/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-6.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-6.webm')) }}" type="video/mp4" title="Buket Sena Güzellik Salonu" loading="lazy"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/buket-sena/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-7.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-7.webm')) }}" type="video/mp4" title="Buket Sena Güzellik Salonu" loading="lazy"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/buket-sena/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-8.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-8.webm')) }}" type="video/mp4" title="Buket Sena Güzellik Salonu" loading="lazy"></video></div>
                                            </div>
                                        </div>
                                        <a class="userStories-story-button" target="_blank" rel="nofollow" href="https://www.instagram.com/stories/highlights/17946376207869882/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg>
                                            Instagram'da Görüntüle
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/melis-fis/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/melis-fis/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/melis-fis/melis-fis-feliz-beautyland-1.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/melis-fis/melis-fis-feliz-beautyland-1.webm')) }}" type="video/mp4"  loading="lazy" title="Melis Fis Güzellik Salonu"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/melis-fis/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/melis-fis/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/melis-fis/melis-fis-feliz-beautyland-2.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/melis-fis/melis-fis-feliz-beautyland-2.webm')) }}" type="video/mp4"  loading="lazy" title="Melis Fis Güzellik Salonu"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/melis-fis/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/melis-fis/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/melis-fis/melis-fis-feliz-beautyland-3.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/melis-fis/melis-fis-feliz-beautyland-3.webm')) }}" type="video/mp4"  loading="lazy" title="Melis Fis Güzellik Salonu"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/melis-fis/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/melis-fis/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/melis-fis/melis-fis-feliz-beautyland-4.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/melis-fis/melis-fis-feliz-beautyland-4.webm')) }}" type="video/mp4"  loading="lazy" title="Melis Fis Güzellik Salonu"></video></div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('assets/images/customers/stories/melis-fis/melis-fis-feliz-beautyland.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/melis-fis/melis-fis-feliz-beautyland.webp')) }}" alt="Melis Fis Güzellik Salonu">
                                                </div>
                                            </div>
                                        </div>
                                        <a class="userStories-story-button" target="_blank" rel="nofollow" href="https://www.instagram.com/stories/highlights/17924330360672286/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg>
                                            Instagram'da Görüntüle
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <video poster="{{ asset('assets/images/customers/stories/merve-kutlu/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/merve-kutlu/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/merve-kutlu/merve-kutlu-feliz-beautyland-1.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/merve-kutlu/merve-kutlu-feliz-beautyland-1.webm')) }}" type="video/mp4"  loading="lazy"></video>
                                                </div>
                                                <div class="swiper-slide">
                                                    <video poster="{{ asset('assets/images/customers/stories/merve-kutlu/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/merve-kutlu/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/merve-kutlu/merve-kutlu-feliz-beautyland-2.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/merve-kutlu/merve-kutlu-feliz-beautyland-2.webm')) }}" type="video/mp4"  loading="lazy"></video>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="userStories-story-button" target="_blank" rel="nofollow" href="https://www.instagram.com/p/DLpzsZctnpd/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg>
                                            Instagram'da Görüntüle
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <video poster="{{ asset('assets/images/customers/stories/nilsu-aktas/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/nilsu-aktas/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/nilsu-aktas/nilsu-aktas-feliz-beautyland.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/nilsu-aktas/nilsu-aktas-feliz-beautyland.webm')) }}" type="video/mp4" loading="lazy"></video>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('assets/images/customers/stories/nilsu-aktas/nilsu-aktas-feliz-beautyland.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/nilsu-aktas/nilsu-aktas-feliz-beautyland.webp')) }}" alt="Nilsu Aktaş Güzellik Salonu">
                                                </div>
                                            </div>
                                        </div>
                                        <a class="userStories-story-button" target="_blank" rel="nofollow" href="https://www.instagram.com/stories/highlights/18503115352043404/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg>
                                            Instagram'da Görüntüle
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/eda-eryurt/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/eda-eryurt/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/eda-eryurt/eda-eryurt-feliz-beautyland-1.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/eda-eryurt/eda-eryurt-feliz-beautyland-1.webm')) }}" type="video/mp4" loading="lazy"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/eda-eryurt/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/eda-eryurt/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/eda-eryurt/eda-eryurt-feliz-beautyland-2.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/eda-eryurt/eda-eryurt-feliz-beautyland-2.webm')) }}" type="video/mp4" loading="lazy"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/eda-eryurt/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/eda-eryurt/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/eda-eryurt/eda-eryurt-feliz-beautyland-3.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/eda-eryurt/eda-eryurt-feliz-beautyland-3.webm')) }}" type="video/mp4" loading="lazy"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/eda-eryurt/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/eda-eryurt/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/eda-eryurt/eda-eryurt-feliz-beautyland-4.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/eda-eryurt/eda-eryurt-feliz-beautyland-4.webm')) }}" type="video/mp4" loading="lazy"></video></div>
                                            </div>
                                        </div>
                                        <a class="userStories-story-button" target="_blank" rel="nofollow" href="https://www.instagram.com/stories/highlights/17878484333640907/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg>
                                            Instagram'da Görüntüle
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('assets/images/customers/stories/cagla-simsek/cagla-simsek-feliz-beautyland.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/cagla-simsek/cagla-simsek-feliz-beautyland.webp')) }}" alt="Çağla Şimşek Güzellik Salonu" loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                        <a class="userStories-story-button" target="_blank" rel="nofollow" href="https://www.instagram.com/stories/highlights/18065876987108984/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg>
                                            Instagram'da Görüntüle
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/mervan-tepelioglu/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/melis-fis/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/mervan-tepelioglu/mervan-tepelioglu-feliz-beautyland-1.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/mervan-tepelioglu/mervan-tepelioglu-feliz-beautyland-1.webm')) }}" type="video/mp4"  loading="lazy" title="Melis Fis Güzellik Salonu"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/mervan-tepelioglu/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/melis-fis/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/mervan-tepelioglu/mervan-tepelioglu-feliz-beautyland-2.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/mervan-tepelioglu/mervan-tepelioglu-feliz-beautyland-2.webm')) }}" type="video/mp4"  loading="lazy" title="Melis Fis Güzellik Salonu"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/mervan-tepelioglu/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/melis-fis/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/mervan-tepelioglu/mervan-tepelioglu-feliz-beautyland-3.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/mervan-tepelioglu/mervan-tepelioglu-feliz-beautyland-3.webm')) }}" type="video/mp4"  loading="lazy" title="Melis Fis Güzellik Salonu"></video></div>
                                                <div class="swiper-slide"><video poster="{{ asset('assets/images/customers/stories/mervan-tepelioglu/cover.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/melis-fis/cover.webp')) }}" muted autoplay loop><source src="{{ asset('assets/images/customers/stories/mervan-tepelioglu/mervan-tepelioglu-feliz-beautyland-4.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/mervan-tepelioglu/mervan-tepelioglu-feliz-beautyland-4.webm')) }}" type="video/mp4"  loading="lazy" title="Melis Fis Güzellik Salonu"></video></div>
                                            </div>
                                        </div>
                                        <a class="userStories-story-button" target="_blank" rel="nofollow" href="https://www.instagram.com/stories/highlights/17926509317034097/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg>
                                            Instagram'da Görüntüle
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact" id="randevu-al">
            <div class="animation-trigger"></div>
            <div class="sidebyside">
                <div class="sidebyside-container">
                    <div class="contactMedia RightToLeftAnim">
                        <img src="{{ asset('assets/images/stock/contact-us.webp') }}" alt="Randevu Al" loading="lazy">
                    </div>
                    <div class="contact-container">
                        <div id="contactForm">
                            <h2 class="LeftToRightAnim">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><g fill="none" fill-rule="evenodd"><path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="#db9f7a" d="M18 14a1 1 0 0 1 1 1v2h2a1 1 0 1 1 0 2h-2v2a1 1 0 1 1-2 0v-2h-2a1 1 0 1 1 0-2h2v-2a1 1 0 0 1 1-1M16 3a1 1 0 0 1 1 1v1h2a2 2 0 0 1 2 2v4a1 1 0 0 1-1 1H5v7h6a1 1 0 1 1 0 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2V4a1 1 0 0 1 2 0v1h6V4a1 1 0 0 1 1-1m3 4H5v3h14z"/></g></svg>
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 256 258"><rect width="256" height="258" fill="none"/><defs><linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1faf38"/><stop offset="100%" stop-color="#60d669"/></linearGradient><linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#f9f9f9"/><stop offset="100%" stop-color="#fff"/></linearGradient></defs><path fill="url(#logosWhatsappIcon0)" d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004"/><path fill="url(#logosWhatsappIcon1)" d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z"/><path fill="#fff" d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64"/></svg> --}}
                                Şimdi Randevu Alın
                            </h2>
                            <div class="minispace"></div>
                            <div class="minispace"></div>
                            {{-- <div class="inputBx BottomToTopAnim">
                                <input type="text" name="name" id="name" required>
                                <i>Ad Soyad</i>
                            </div>
                            <div class="minispace"></div>
                            <div class="flex-inputs">
                                <div class="inputBx LeftToRightAnim" style="margin-right: 10px;">
                                    <label for="datetime">
                                        <input type="date" name="datetime" id="datetime" min="<?= date('Y-m-d'); ?>" max="2099-12-31" required>
                                        <i>📅 Tarih</i>
                                    </label>
                                </div>
                                <div class="inputBx RightToLeftAnim">
                                    <input type="time" name="time" id="time" required>
                                    <i>🕑 Saat</i>
                                </div>
                                <br>
                            </div>
                            <div class="minispace"></div> --}}
                            <div class="services BottomToTopAnim">
                                <h3 class="LeftToRightAnim">Hizmetlerimiz</h3>
                                <div class="reservation-gender-section BottomToTopAnim">
                                    <button class="active" id="reservationGenderWoman">Kadın</button>
                                    <button id="reservationGenderMan">Erkek</button>
                                </div>
                                <div class="reservation-category-section">
                                    <div class="reservation-category-list shutdownAnim" id="genderWomanList">
                                        <input type="hidden" name="reservations" id="reservations">
                                        <div class="reservation-category-box BottomToTopAnim" category="Makyaj">
                                            <button class="reservation-category-btn">
                                                Kaş ve Kirpik Hizmetleri
                                            </button>
                                            <div class="reservation-list">
                                                <div class="reservation-item">
                                                    <div class="reservation-box">
                                                        <p data-value="35-1">Ölçülü Kaş Alımı</p>
                                                        <span class="reservate-price">1.400 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="191858-1">Kaş Vitamini</p>
                                                        <span class="reservate-price">1.500 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="399121-1">Kirpik Laminasyonu</p>
                                                        <span class="reservate-price">2.500 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="191863-1">Kaş Laminasyonu</p>
                                                        <span class="reservate-price">3.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reservation-category-box BottomToTopAnim" category="Estetik ve Güzellik">
                                            <button class="reservation-category-btn">
                                                Estetik ve Güzellik Hizmetleri
                                            </button>
                                            <div class="reservation-list">
                                                <div class="reservation-item">
                                                    <div class="reservation-box">
                                                        <p data-value="446978-1">Cilt Bakımı</p>
                                                        <span class="reservate-price">2.500 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="96-1">İğneli Epilasyon (Vücut)</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="95-1">İğneli Epilasyon (Yüz)</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="253-1">Leke Tedavisi</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="191851-1">Gıdı Toparlama</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reservation-category-box BottomToTopAnim" category="Cilt Bakımı">
                                            <button class="reservation-category-btn">
                                                Cilt Bakımı Hizmetleri
                                            </button>
                                            <div class="reservation-list">
                                                <div class="reservation-item">
                                                    <div class="reservation-box">
                                                        <p data-value="491127-1">Bukkal Masajı</p>
                                                        <span class="reservate-price">1.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="37-1">Cilt Bakımı</p>
                                                        <span class="reservate-price">3.500 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="12372-1">HydraFacial</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="37099-1">Görüşme</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="49-1">Selülit Giderme</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reservation-category-box BottomToTopAnim" category="Lazer Epilasyon">
                                            <button class="reservation-category-btn">
                                                Lazer Epilasyon Hizmetleri
                                            </button>
                                            <div class="reservation-list">
                                                <div class="reservation-item">
                                                    <div class="reservation-box">
                                                        <p data-value="207-1">Lazer Epilasyon (Tüm Vücut)</p>
                                                        <span class="reservate-price">3.500 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="216-1">Lazer Epilasyon (Ense)</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="215-1">Lazer Epilasyon (Çene)</p>
                                                        <span class="reservate-price">400 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="214-1">Lazer Epilasyon (Dudak Üstü)</p>
                                                        <span class="reservate-price">400 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="213-1">Lazer Epilasyon (Göğüs)</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="212-1">Lazer Epilasyon (Sırt)</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="211-1">Lazer Epilasyon (Kol)</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="210-1">Lazer Epilasyon (Yüz)</p>
                                                        <span class="reservate-price">1.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="209-1">Lazer Epilasyon (Bacak)</p>
                                                        <span class="reservate-price">2.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="208-1">Lazer Epilasyon (Bikini Bölgesi)</p>
                                                        <span class="reservate-price">1.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="407990-1">Lazer Epilasyon (Koltuk Altı)</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="407987-1">Lazer Epilasyon (Yarım Kol)</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="371592-1">Lazer Epilasyon (Yarım Bacak)</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="371592-1">Lazer Epilasyon (Popo Üstü)</p>
                                                        <span class="reservate-price">1.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="335726-1">Lazer Epilasyon (Göbek)</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="218-1">Lazer Epilasyon (Boyun)</p>
                                                        <span class="reservate-price">400 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reservation-category-box BottomToTopAnim" category="Zayıflama ve Sıkılaşma">
                                            <button class="reservation-category-btn">
                                                Zayıflama, İncelme ve Sıkılaşma Hizmetleri
                                            </button>
                                            <div class="reservation-list">
                                                <div class="reservation-item">
                                                    <div class="reservation-box">
                                                        <p data-value="292000-1">Pasif Cimnastik</p>
                                                        <span class="reservate-price">700 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="291959-1">Lenf Drenaj / Pressoterapi</p>
                                                        <span class="reservate-price">700 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="292002-1">Magic</p>
                                                        <span class="reservate-price">1.100 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="444665-1">G8 (Selülit Giderme ve Bölgesel İncelme)</p>
                                                        <span class="reservate-price">1.400 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reservation-category-box BottomToTopAnim" category="Saç Bakımı">
                                            <button class="reservation-category-btn">
                                                Saç Bakımı Hizmetleri
                                            </button>
                                            <div class="reservation-list">
                                                <div class="reservation-item">
                                                    <div class="reservation-box">
                                                        <p data-value="288683-1">Saç Vitamini (Bölgesel)</p>
                                                        <span class="reservate-price">2.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="408032-1">Saç Vitamini (Komple)</p>
                                                        <span class="reservate-price">3.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reservation-category-box BottomToTopAnim" category="Masaj">
                                            <button class="reservation-category-btn">
                                                Masaj Hizmetleri
                                            </button>
                                            <div class="reservation-list">
                                                <div class="reservation-item">
                                                    <div class="reservation-box">
                                                        <p data-value="488257-1">Kafa Masajı</p>
                                                        <span class="reservate-price">2.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="533007-1">Sırt Bakımı</p>
                                                        <span class="reservate-price">2.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reservation-category-list shutdownAnim" id="genderManList">
                                        <input type="hidden" name="reservations" id="reservations">
                                        <div class="reservation-category-box BottomToTopAnim" category="Cilt Bakımı">
                                            <button class="reservation-category-btn">
                                                Cilt Bakımı Hizmetleri
                                            </button>
                                            <div class="reservation-list">
                                                <div class="reservation-item">
                                                    <div class="reservation-box">
                                                        <p data-value="491127-2">Bukkal Masajı</p>
                                                        <span class="reservate-price">1.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="37-2">Cilt Bakımı</p>
                                                        <span class="reservate-price">3.500 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="12372-2">HydraFacial</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="37099-2">Görüşme</p>
                                                        <span class="reservate-price empty-reservate">{{-- empty-reservate sil ve bu bölüme fiyatı ekle --}}</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reservation-category-box BottomToTopAnim" category="Lazer Epilasyon">
                                            <button class="reservation-category-btn">
                                                Lazer Epilasyon Hizmetleri
                                            </button>
                                            <div class="reservation-list">
                                                <div class="reservation-item">
                                                    <div class="reservation-box">
                                                        <p data-value="207-2">Lazer Epilasyon (Tüm Vücut)</p>
                                                        <span class="reservate-price">3.500 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="213-2">Lazer Epilasyon (Göğüs)</p>
                                                        <span class="reservate-price">750 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="212-2">Lazer Epilasyon (Sırt)</p>
                                                        <span class="reservate-price">750 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="211-2">Lazer Epilasyon (Kol)</p>
                                                        <span class="reservate-price">1.500 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="210-2">Lazer Epilasyon (Yüz)</p>
                                                        <span class="reservate-price">900 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="209-2">Lazer Epilasyon (Bacak)</p>
                                                        <span class="reservate-price">2.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="208-2">Lazer Epilasyon (Genital Bölgesi)</p>
                                                        <span class="reservate-price">1.350 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="407990-2">Lazer Epilasyon (Koltuk Altı)</p>
                                                        <span class="reservate-price">950 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="407987-2">Lazer Epilasyon (Yarım Kol)</p>
                                                        <span class="reservate-price">1.200 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="371592-2">Lazer Epilasyon (Popo Üstü)</p>
                                                        <span class="reservate-price">1.350 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="335726-2">Lazer Epilasyon (Göbek)</p>
                                                        <span class="reservate-price">750 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="218-1">Lazer Epilasyon (Boyun)</p>
                                                        <span class="reservate-price">480 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="216-2">Lazer Epilasyon (Ense)</p>
                                                        <span class="reservate-price">480 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reservation-category-box BottomToTopAnim" category="Zayıflama ve Sıkılaşma">
                                            <button class="reservation-category-btn">
                                                Zayıflama, İncelme ve Sıkılaşma Hizmetleri
                                            </button>
                                            <div class="reservation-list">
                                                <div class="reservation-item">
                                                    <div class="reservation-box">
                                                        <p data-value="292000-2">Pasif Cimnastik</p>
                                                        <span class="reservate-price">700 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="291959-2">Lenf Drenaj / Pressoterapi</p>
                                                        <span class="reservate-price">700 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="292002-2">Magic</p>
                                                        <span class="reservate-price">1.100 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="444665-2">G8 (Selülit Giderme ve Bölgesel İncelme)</p>
                                                        <span class="reservate-price">1.400 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reservation-category-box BottomToTopAnim" category="Saç Bakımı">
                                            <button class="reservation-category-btn">
                                                Saç Bakımı Hizmetleri
                                            </button>
                                            <div class="reservation-list">
                                                <div class="reservation-item">
                                                    <div class="reservation-box">
                                                        <p data-value="288683-2">Saç Vitamini (Bölgesel)</p>
                                                        <span class="reservate-price">2.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="408032-2">Saç Vitamini (Komple)</p>
                                                        <span class="reservate-price">3.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reservation-category-box BottomToTopAnim" category="Masaj">
                                            <button class="reservation-category-btn">
                                                Masaj Hizmetleri
                                            </button>
                                            <div class="reservation-list">
                                                <div class="reservation-item">
                                                    <div class="reservation-box">
                                                        <p data-value="488257-2">Kafa Masajı</p>
                                                        <span class="reservate-price">2.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                    <div class="reservation-box">
                                                        <p data-value="533007-2">Sırt Bakımı</p>
                                                        <span class="reservate-price">2.000 ₺</span>
                                                        <button class="reservate-btn">+ Randevu Ekle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="minispace"></div>
                            <div class="center-container BottomToTopAnim">
                                <button class="primary fullWidth disable" id="submitWp" onclick="bookNowFunc();">
                                    Şimdi Randevu Al
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="#e09160" fill-rule="evenodd" clip-rule="evenodd"><g opacity="0.2"><path d="M12.206 5.848a1.5 1.5 0 0 1 2.113.192l3.333 4a1.5 1.5 0 1 1-2.304 1.92l-3.334-4a1.5 1.5 0 0 1 .192-2.112"/><path d="M12.206 16.152a1.5 1.5 0 0 1-.192-2.112l3.334-4a1.5 1.5 0 0 1 2.304 1.92l-3.333 4a1.5 1.5 0 0 1-2.113.192"/><path d="M16 11a1.5 1.5 0 0 1-1.5 1.5h-8a1.5 1.5 0 0 1 0-3h8A1.5 1.5 0 0 1 16 11"/></g><path d="M11.347 5.616a.5.5 0 0 1 .704.064l3.333 4a.5.5 0 0 1-.768.64l-3.333-4a.5.5 0 0 1 .064-.704"/><path d="M11.347 14.384a.5.5 0 0 1-.064-.704l3.333-4a.5.5 0 0 1 .768.64l-3.333 4a.5.5 0 0 1-.704.064"/><path d="M15.5 10a.5.5 0 0 1-.5.5H5a.5.5 0 0 1 0-1h10a.5.5 0 0 1 .5.5"/></g></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="galeri">
            <h2 class="ScaleReverseToShowAnim center">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><rect width="48" height="48" fill="none"/><g fill="none" stroke="#333" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"><path d="m9.262 12.92l25.933-3.568a5.5 5.5 0 0 1 6.213 4.708l2.04 14.808a5.5 5.5 0 0 1-4.71 6.211l-25.933 3.569a5.5 5.5 0 0 1-6.213-4.708l-2.04-14.808a5.5 5.5 0 0 1 4.71-6.212"/><path d="M8.807 13.007c.712-.208 1.259-.623 1.736-1.717c.216-.492.6-.914 1.17-.993l2.721-.374c.57-.079 1.055.224 1.395.64c.71.869 1.317 1.143 2.004 1.18"/></g><path fill="none" stroke="#333" stroke-linecap="round" stroke-linejoin="round" d="M34.027 17.746c-.125.017-1.366-1.43-1.467-1.507s-1.83-.88-1.847-1.005c-.018-.125 1.43-1.366 1.507-1.466s.88-1.83 1.005-1.847s1.366 1.43 1.467 1.507s1.83.88 1.847 1.005c.018.125-1.43 1.365-1.507 1.466s-.88 1.83-1.005 1.847" stroke-width="1"/><g fill="none" stroke="#333" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"><path d="M31.982 23.333c.602 4.374-2.457 8.408-6.833 9.01s-8.412-2.456-9.014-6.83h0a7.995 7.995 0 0 1 6.833-9.01h0a7.997 7.997 0 0 1 9.014 6.83m-15.847 2.181l-1.29-9.373"/><path d="M24.68 22.451a2.06 2.06 0 0 1-1.758 2.32h0a2.06 2.06 0 0 1-2.321-1.759h0a2.059 2.059 0 0 1 4.08-.56"/></g></svg>
                Salonumuzdan Kareler
            </h2>
            <div class="animation-trigger"></div>
            <div class="sidebyside">
                <div class="sidebyside-container">
                    <div class="gallery-container LeftToRightAnim">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiperGallery2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-1.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-1.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-2.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-2.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-3.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-3.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-4.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-4.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-5.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-5.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-6.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-6.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-7.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-7.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-8.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-8.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-9.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-9.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiperGallery">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-1.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-1.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-2.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-2.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-3.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-3.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-4.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-4.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-5.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-5.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-6.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-6.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-7.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-7.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-8.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-8.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/salon/feliz-beautyland-9.webp') }}?v={{ filemtime(public_path('assets/images/salon/feliz-beautyland-9.webp')) }}" alt="FELİZ SPA & BEAUTYLAND" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location">
                        <div class="location-link-container RightToLeftAnim">
                            <div class="location-link">
                                <a rel="nofollow" target="_blank" href="https://www.google.com/maps/dir//FEL%C4%B0Z+SPA+%26+BEAUTYLAND,+akatlar,+Levent,+Ebulula+Mardin+Cd.+No:69,+34335+Be%C5%9Fikta%C5%9F%2F%C4%B0stanbul/@41.0828663,29.0185741,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x14cab7fb0d3f440f:0x9fc0c14816c4af9a!2m2!1d29.021149!2d41.0828623!3e0?entry=ttu&g_ep=EgoyMDI1MDYzMC4wIKXMDSoASAFQAw%3D%3D">Şimdi Ziyaret Et</a>
                            </div>
                        </div>
                        <div class="location-map BottomToTopAnim">
                            <iframe title="FELİZ SPA & BEAUTYLAND" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.3653998211325!2d29.021148999999998!3d41.082862299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7fb0d3f440f%3A0x9fc0c14816c4af9a!2sFEL%C4%B0Z%20SPA%20%26%20BEAUTYLAND!5e0!3m2!1str!2str!4v1751737717665!5m2!1str!2str" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('tools/swiper-bundle.min.js') }}?v={{ filemtime(public_path('tools/swiper-bundle.min.js')) }}"></script>
    <script src="{{ asset('scripts/home.min.js') }}?v={{ filemtime(public_path('scripts/home.min.js')) }}"></script>
    {{-- <script src="{{ asset('scripts/wp.min.js') }}?v={{ filemtime(public_path('scripts/wp.min.js')) }}"></script> --}}
    <script src="{{ asset('scripts/reservation.min.js') }}?v={{ filemtime(public_path('scripts/reservation.min.js')) }}"></script>
@endsection
