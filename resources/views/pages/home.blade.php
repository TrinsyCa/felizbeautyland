@extends('app')
@section('title', 'Anasayfa | Feliz Beautyland')
@section('description', 'Welcome to Feliz Beautyland, your one-stop destination for all beauty needs.')
@section('keywords', 'beauty, cosmetics, skincare, haircare, Feliz Beautyland')
@section('author', 'Feliz Beautyland Team')

@section('styles')
    <link rel="stylesheet" href="{{ asset('tools/swiper-bundle.min.css') }}?v={{ filemtime(public_path('tools/swiper-bundle.min.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v={{ filemtime(public_path('css/home.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}?v={{ filemtime(public_path('css/reservation.css')) }}">
@endsection

@section('content')
    @include('layouts.reservation')
    <header class="home-header">
        <div class="header-content">
            <h1>Feliz Beautyland'e Hoş Geldiniz</h1>
            <p>Güzelliğinizi Keşfedin</p>
            <button onclick="reservationSection();">
                Randevu Alın
                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="#e09160" fill-rule="evenodd" clip-rule="evenodd"><g opacity="0.2"><path d="M12.206 5.848a1.5 1.5 0 0 1 2.113.192l3.333 4a1.5 1.5 0 1 1-2.304 1.92l-3.334-4a1.5 1.5 0 0 1 .192-2.112"/><path d="M12.206 16.152a1.5 1.5 0 0 1-.192-2.112l3.334-4a1.5 1.5 0 0 1 2.304 1.92l-3.333 4a1.5 1.5 0 0 1-2.113.192"/><path d="M16 11a1.5 1.5 0 0 1-1.5 1.5h-8a1.5 1.5 0 0 1 0-3h8A1.5 1.5 0 0 1 16 11"/></g><path d="M11.347 5.616a.5.5 0 0 1 .704.064l3.333 4a.5.5 0 0 1-.768.64l-3.333-4a.5.5 0 0 1 .064-.704"/><path d="M11.347 14.384a.5.5 0 0 1-.064-.704l3.333-4a.5.5 0 0 1 .768.64l-3.333 4a.5.5 0 0 1-.704.064"/><path d="M15.5 10a.5.5 0 0 1-.5.5H5a.5.5 0 0 1 0-1h10a.5.5 0 0 1 .5.5"/></g></svg>
            </button>
        </div>
        <div class="header-background">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <video muted autoplay loop>
                            <source src="{{ asset('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-1.webm') }}?v={{ filemtime(public_path('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-1.webm')) }}" type="video/webm" media="(max-width: 767px)">
                            <source src="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-1.webm') }}?v={{ filemtime(public_path('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-1.webm')) }}" type="video/webm" media="(min-width: 768px)">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted autoplay loop>
                            <source src="{{ asset('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-2.webm') }}?v={{ filemtime(public_path('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-2.webm')) }}" type="video/webm" media="(max-width: 767px)">
                            <source src="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-2.webm') }}?v={{ filemtime(public_path('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-2.webm')) }}" type="video/webm" media="(min-width: 768px)">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted autoplay loop>
                            <source src="{{ asset('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-3.webm') }}?v={{ filemtime(public_path('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-3.webm')) }}" type="video/webm" media="(max-width: 767px)">
                            <source src="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-3.webm') }}?v={{ filemtime(public_path('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-3.webm')) }}" type="video/webm" media="(min-width: 768px)">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted autoplay loop>
                            <source src="{{ asset('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-4.webm') }}?v={{ filemtime(public_path('assets/videos/stock/360p/feliz-beautyland-güzellik-salonu-4.webm')) }}" type="video/webm" media="(max-width: 767px)">
                            <source src="{{ asset('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-4.webm') }}?v={{ filemtime(public_path('assets/videos/stock/1080p/feliz-beautyland-güzellik-salonu-4.webm')) }}" type="video/webm" media="(min-width: 768px)">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <a class="header-icon" href="{{ url('#services') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><rect width="14" height="20" x="5" y="2" rx="7"/><path d="M12 6v4"/></g></svg>
        </a>
    </header>
    <div class="container">
        <section class="sidebyside">
            <div class="animation-trigger"></div>
            <div class="sidebyside-container">
                <div class="sidebyside-media TopToBottomAnim">
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{ asset('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-1.webp') }}?v={{ filemtime(public_path('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-1.webp')) }}" type="image/webp">
                                    <source media="(min-width: 768px)" srcset="{{ asset('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-1.webp') }}?v={{ filemtime(public_path('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-1.webp')) }}" type="image/webp">
                                    <img src="{{ asset('assets/images/customers/original/feliz-beautyland-güzellik-salonu-1.jpg') }}" alt="Feliz Beautyland Güzellik Salonu">
                                </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture>
                                <source media="(max-width: 767px)" srcset="{{ asset('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-2.webp') }}?v={{ filemtime(public_path('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-2.webp')) }}" type="image/webp">
                                <source media="(min-width: 768px)" srcset="{{ asset('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-2.webp') }}?v={{ filemtime(public_path('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-2.webp')) }}" type="image/webp">
                                <img src="{{ asset('assets/images/customers/original/feliz-beautyland-güzellik-salonu-2.jpg') }}" alt="Feliz Beautyland Güzellik Salonu">
                            </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{ asset('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-3.webp') }}?v={{ filemtime(public_path('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-3.webp')) }}" type="image/webp">
                                    <source media="(min-width: 768px)" srcset="{{ asset('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-3.webp') }}?v={{ filemtime(public_path('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-3.webp')) }}" type="image/webp">
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
                <div class="sidebyside-content BottomToTopAnim">
                    <h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="#f109ff" d="M14.121 10.48a1 1 0 0 0-1.414 0l-.707.706a2 2 0 0 1-2.828-2.828l5.63-5.632a6.5 6.5 0 0 1 6.377 10.568l-2.108 2.135zM3.161 4.468a6.5 6.5 0 0 1 8.009-.938L7.757 6.944a4 4 0 0 0 5.513 5.794l.144-.137l4.243 4.242l-4.243 4.243a2 2 0 0 1-2.828 0L3.16 13.66a6.5 6.5 0 0 1 0-9.192"/></svg>
                        Hizmetlerimiz
                    </h2>
                    <p>
                        Feliz Beautyland, geniş bir hizmet yelpazesi sunar. Cilt bakımı, saç kesimi, manikür ve pedikür gibi birçok hizmetimizle güzelliğinizi ön plana çıkarıyoruz.
                        <br><br>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto quis aut repellat molestias tenetur, voluptates deserunt ipsa amet dolorum! Enim odio explicabo rerum repudiandae sunt dolore quaerat tenetur vitae accusamus!
                        Molestiae, ex repudiandae atque tempore magni unde repellendus doloremque, dolorum sit adipisci tempora commodi, possimus excepturi? Accusamus repudiandae necessitatibus ullam excepturi, provident quidem laudantium maxime cumque voluptatem accusantium laborum magnam?
                        Placeat consequuntur dolore repellendus temporibus iure dolorem vitae exercitationem atque obcaecati explicabo quidem magnam dolor, totam itaque ab quibusdam facere omnis neque harum perferendis reiciendis accusamus animi. Ipsam, pariatur necessitatibus?
                        Expedita, aut doloremque. In voluptatem ratione quaerat, soluta ipsa magnam odit deserunt. Commodi ipsam non a, dicta delectus eius dolore, praesentium nobis suscipit, sit eveniet deserunt earum ab iste magni.
                        Modi, numquam animi facilis aut dicta optio quo et consequuntur, hic veritatis voluptatem architecto neque id doloremque? Voluptatem iste magnam alias accusantium. Dignissimos rem, quae quas molestiae voluptates labore facere.
                    </p>
                    <div class="center-container">
                        <button onclick="reservationSection();" class="primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="rgb(245, 245, 245)" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/></svg>
                            Hizmetlerimizi İnceleyin
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="userStories">
            <div class="animation-trigger"></div>
            <div class="sidebyside">
                <div class="sidebyside-container">
                    <div class="userStories-users BottomToTopAnim" id="userStoriesUsers">
                        <h2>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 512 512"><rect width="512" height="512" fill="none"/><defs><linearGradient id="meteoconsStarFill0" x1="187.9" x2="324.1" y1="138.1" y2="373.9" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fcd966"/><stop offset=".5" stop-color="#fcd966"/><stop offset="1" stop-color="#fccd34"/></linearGradient></defs><path fill="url(#meteoconsStarFill0)" stroke="#fcd34d" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="m105.7 263.5l107.5 29.9a7.9 7.9 0 0 1 5.4 5.4l29.9 107.5a7.8 7.8 0 0 0 15 0l29.9-107.5a7.9 7.9 0 0 1 5.4-5.4l107.5-29.9a7.8 7.8 0 0 0 0-15l-107.5-29.9a7.9 7.9 0 0 1-5.4-5.4l-29.9-107.5a7.8 7.8 0 0 0-15 0l-29.9 107.5a7.9 7.9 0 0 1-5.4 5.4l-107.5 29.9a7.8 7.8 0 0 0 0 15Z"><animateTransform additive="sum" attributeName="transform" calcMode="spline" dur="6s" keySplines=".42, 0, .58, 1; .42, 0, .58, 1" repeatCount="indefinite" type="rotate" values="-15 256 256; 15 256 256; -15 256 256"/><animate attributeName="opacity" dur="6s" values="1; .75; 1; .75; 1; .75; 1"/></path></svg>
                            Bizi Tavsiye Edenler
                        </h2>
                        <div class="space"></div>
                        <div class="userStories-users-container">
                            <div class="swiper mySwiper4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/nilsu-aktas.webp') }}?v={{ filemtime(public_path('assets/images/customers/pp/nilsu-aktas.webp')) }}" alt="Nilsu Aktaş">
                                        </div>
                                        <p>Nilsu Aktaş</p>
                                    </div>
                                    <div class="swiper-slide" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/cagla-simsek.webp') }}?v={{ filemtime(public_path('assets/images/customers/pp/cagla-simsek.webp')) }}" alt="Çağla Şimşek">
                                        </div>
                                        <p>Çağla Şimşek</p>
                                    </div>
                                    <div class="swiper-slide" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/buket-sena.webp') }}?v={{ filemtime(public_path('assets/images/customers/pp/buket-sena.webp')) }}" alt="Buket Sena">
                                        </div>
                                        <p>Buket Sena</p>
                                    </div>
                                    <div class="swiper-slide" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/nilsu-aktas.webp') }}" alt="Nilsu Aktaş">
                                        </div>
                                        <p>Slide 4</p>
                                    </div>
                                    <div class="swiper-slide" onclick="changeStory(this);">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/nilsu-aktas.webp') }}" alt="Nilsu Aktaş">
                                        </div>
                                        <p>Slide 5</p>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/nilsu-aktas.webp') }}" alt="Nilsu Aktaş">
                                        </div>
                                        <p>Slide 5</p>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/nilsu-aktas.webp') }}" alt="Nilsu Aktaş">
                                        </div>
                                        <p>Slide 5</p>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="user-profile-pic">
                                            <img src="{{ asset('assets/images/customers/pp/nilsu-aktas.webp') }}" alt="Nilsu Aktaş">
                                        </div>
                                        <p>Slide 5</p>
                                    </div>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
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
                                                <div class="swiper-slide"><video muted autoplay loop><source src="{{ asset('assets/images/customers/stories/nilsu-aktas/nilsu-aktas-feliz-beautyland.mp4') }}?v={{ filemtime(public_path('assets/images/customers/stories/nilsu-aktas/nilsu-aktas-feliz-beautyland.mp4')) }}" type="video/mp4"></video></div>
                                                <div class="swiper-slide"><img src="{{ asset('assets/images/customers/stories/nilsu-aktas/nilsu-aktas-feliz-beautyland.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/nilsu-aktas/nilsu-aktas-feliz-beautyland.webp')) }}"" alt="Nilsu Aktaş | Feliz Beautyland"></div>
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
                                                <div class="swiper-slide"><img src="{{ asset('assets/images/customers/stories/cagla-simsek/cagla-simsek-feliz-beautyland.webp') }}?v={{ filemtime(public_path('assets/images/customers/stories/cagla-simsek/cagla-simsek-feliz-beautyland.webp')) }}" alt="Nilsu Aktaş | Feliz Beautyland"></div>
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
                                                <div class="swiper-slide"><video muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland.webm')) }}" type="video/mp4"></video></div>
                                                <div class="swiper-slide"><video muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-1.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-1.webm')) }}" type="video/mp4"></video></div>
                                                <div class="swiper-slide"><video muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-2.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-2.webm')) }}" type="video/mp4"></video></div>
                                                <div class="swiper-slide"><video muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-3.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-3.webm')) }}" type="video/mp4"></video></div>
                                                <div class="swiper-slide"><video muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-4.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-4.webm')) }}" type="video/mp4"></video></div>
                                                <div class="swiper-slide"><video muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-5.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-5.webm')) }}" type="video/mp4"></video></div>
                                                <div class="swiper-slide"><video muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-6.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-6.webm')) }}" type="video/mp4"></video></div>
                                                <div class="swiper-slide"><video muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-7.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-7.webm')) }}" type="video/mp4"></video></div>
                                                <div class="swiper-slide"><video muted autoplay loop><source src="{{ asset('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-8.webm') }}?v={{ filemtime(public_path('assets/images/customers/stories/buket-sena/buket-sena-feliz-beautyland-8.webm')) }}" type="video/mp4"></video></div>
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
                                                <div class="swiper-slide">Slide 1</div>
                                                <div class="swiper-slide">Slide 2</div>
                                                <div class="swiper-slide">Slide 3</div>
                                                <div class="swiper-slide">Slide 4</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">Slide 1</div>
                                                <div class="swiper-slide">Slide 2</div>
                                                <div class="swiper-slide">Slide 3</div>
                                                <div class="swiper-slide">Slide 4</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="gallery">
            <h2 class="ScaleReverseToShowAnim">
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
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" loading="lazy">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiperGallery">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location BottomToTopAnim">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.3653998211325!2d29.021148999999998!3d41.082862299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7fb0d3f440f%3A0x9fc0c14816c4af9a!2sFEL%C4%B0Z%20SPA%20%26%20BEAUTYLAND!5e0!3m2!1str!2str!4v1751737717665!5m2!1str!2str" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/home.js') }}?v={{ filemtime(public_path('scripts/home.js')) }}"></script>
    <script src="{{ asset('tools/swiper-bundle.min.js') }}?v={{ filemtime(public_path('tools/swiper-bundle.min.js')) }}"></script>
    <script src="{{ asset('scripts/anim.js') }}?v={{ filemtime(public_path('scripts/home.js')) }}"></script>
@endsection
