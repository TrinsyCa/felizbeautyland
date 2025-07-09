<div class="reservation-container">
    <div class="container">
        <h2>Hizmetlerimiz</h2>
        <div class="reservationList">
            @for($i = 0; $i < 21; $i++)
                <button button onclick="window.open('https://www.kolayrandevu.com/randevu3.php?hizmetler%5B%5D=533007-1&kampanya=&kampanya_musteri=&referans=&sube=124250&website=1');" class="reservationBox">
                    <img src="{{ asset('assets/images/stock/sirt-bakimi.webp') }}?v={{ filemtime(public_path('assets/images/stock/sirt-bakimi.webp')) }}" alt="Feliz Beautyland Sırt Bakımı">
                    <article>
                        <h3 data-text="Sırt Bakımı">Sırt Bakımı</h3>
                    </article>
                </button>
            @endfor
        </div>
    </div>
</div>
