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
        <div class="header-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><rect width="14" height="20" x="5" y="2" rx="7"/><path d="M12 6v4"/></g></svg>
        </div>
    </header>
    <div class="container">
        <section class="sidebyside leftMedia">
            <div class="sidebyside-media">
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <picture>
                                <source media="(max-width: 767px)" srcset="{{ asset('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-1.webp') }}" type="image/webp">
                                <source media="(min-width: 768px)" srcset="{{ asset('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-1.webp') }}" type="image/webp">
                                <img src="{{ asset('assets/images/customers/original/feliz-beautyland-güzellik-salonu-1.jpg') }}" alt="Feliz Beautyland Güzellik Salonu">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                            <source media="(max-width: 767px)" srcset="{{ asset('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-2.webp') }}" type="image/webp">
                            <source media="(min-width: 768px)" srcset="{{ asset('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-2.webp') }}" type="image/webp">
                            <img src="{{ asset('assets/images/customers/original/feliz-beautyland-güzellik-salonu-2.jpg') }}" alt="Feliz Beautyland Güzellik Salonu">
                        </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source media="(max-width: 767px)" srcset="{{ asset('assets/images/customers/360p/feliz-beautyland-güzellik-salonu-3.webp') }}" type="image/webp">
                                <source media="(min-width: 768px)" srcset="{{ asset('assets/images/customers/720p/feliz-beautyland-güzellik-salonu-3.webp') }}" type="image/webp">
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
                <h2>Hizmetlerimiz</h2>
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
                    <button>Hizmetlerimizi İnceleyin</button>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/home.js') }}"></script>
    <script src="{{ asset('tools/swiper-bundle.min.js') }}"></script>
@endsection
