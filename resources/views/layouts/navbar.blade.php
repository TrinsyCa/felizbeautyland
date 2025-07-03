<nav>
    <div class="nav-container">
        <div class="nav-logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo/feliz-logo.webp') }}" alt="Feliz Beautyland Logo">
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="{{ url('#') }}">Anasayfa</a></li>
            <li><a href="{{ url('#hizmetler') }}">Hizmetler</a></li>
            <li><a href="{{ url('#galeri') }}">Galeri</a></li>
            <li><a href="{{ url('#iletisim') }}">İletişim</a></li>
        </ul>
    </div>
    <div class="nav-hamburger">
        <button class="hamburger-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/></svg>
        </button>
    </div>
</nav>
