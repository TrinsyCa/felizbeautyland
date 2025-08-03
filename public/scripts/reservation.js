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

    let reservation_url = 'https://kolayrandevu.com/randevu3.php?';
    reservation_url += 'kampanya=&kampanya_musteri=&kampanya_kabul=&referans=&greserve=&website=1&sube=124250';
    if (formattedReservations) {
        reservation_url += '&' + formattedReservations;
    }

    // AJAX isteği ile reservation_url'yi backend'e gönder
    fetch('/process-reservation', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // CSRF token
        },
        body: JSON.stringify({
            reservation_url: reservation_url
        })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        if (data.status === 'success') {
            console.log('Reservation URL sent successfully:', data.message);
            console.log('Redirecting to:', data.redirect_url);
            // Backend'in yönlendirdiği sayfaya git
            window.location.href = data.redirect_url;
        } else {
            console.error('Failed to process reservation:', data.message);
            alert('An error occurred: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error during AJAX request:', error);
        alert('An error occurred while processing the reservation. Please try again.');
    });
}
