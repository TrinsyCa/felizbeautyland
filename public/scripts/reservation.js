const reservationsInput = document.getElementsByName("reservations")[0];
const reservateBtns = document.querySelectorAll('.reservate-btn');
const submitWp = document.querySelector('#submitWp');
function checkFormValidity() {
    const isFormValid =
        reservationsInput.value.trim() !== '';
    if (isFormValid) {
        submitWp.classList.remove('disable');
    } else {
        submitWp.classList.add('disable');
    }
}
reservateBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
        btn.classList.toggle('checked');
        const p = btn.previousElementSibling;
        if (!p || p.tagName !== 'P') return;
        const text = p.getAttribute('data-value').trim();
        let value = reservationsInput.value || "";
        if (btn.classList.contains('checked')) {
            if (!value.includes(text + ',')) {
                value += text + ',';
            }
            btn.innerText = '✓ Randevu Eklendi';
        } else {
            value = value.replace(text + ',', '');
            btn.innerText = '+ Randevu Ekle';
        }
        reservationsInput.value = value.trim();
        checkFormValidity();
    });
});

function bookNowFunc() {
    var reservations = document.getElementsByName("reservations")[0].value;

    let formattedReservations = "";
    if (reservations) {
        const reservationItems = reservations.split(',').filter(item => item.trim() !== '');
        formattedReservations = reservationItems.map(item => `hizmetler%5B%5D=${item.trim()}`).join('&');
    }

    reservation_url = 'https://kolayrandevu.com/randevu3.php?';
    reservation_url += 'kampanya=&kampanya_musteri=&kampanya_kabul=&referans=&greserve=&website=1&sube=124250';
    if (formattedReservations) {
        reservation_url += '&' + formattedReservations;
    }

    window.open(reservation_url, "_blank", "noopener");
}
