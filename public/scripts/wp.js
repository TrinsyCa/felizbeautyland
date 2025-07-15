const reservationsInput = document.getElementsByName("reservations")[0];
const reservateBtns = document.querySelectorAll('.reservate-btn');
const submitWp = document.querySelector('#submitWp');
const nameInput = document.getElementsByName("name")[0];
const timeInput = document.getElementsByName("time")[0];
const datetimeInput = document.getElementsByName("datetime")[0];
function checkFormValidity() {
    const isFormValid =
        nameInput.value.trim() !== '' &&
        timeInput.value.trim() !== '' &&
        datetimeInput.value.trim() !== '' &&
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
        const text = p.textContent.trim();
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
[nameInput, timeInput, datetimeInput].forEach(input => {
    input.addEventListener('change', checkFormValidity);
});

function formatDate(inputDate) {
    var dateParts = inputDate.split("-");
    var day = new Date(inputDate).toLocaleDateString('tr-TR', { weekday: 'long' });
    var formattedDate = dateParts[2] + "." + dateParts[1] + "." + dateParts[0] + " - " + day;
    return formattedDate;
}

function bookNowFunc() {
    var name = document.getElementsByName("name")[0].value;
    var time = document.getElementsByName("time")[0].value;
    var datetime = document.getElementsByName("datetime")[0].value;
    var reservations = document.getElementsByName("reservations")[0].value;

    // Format the date time value
    datetime = formatDate(datetime);

    var number = "905354673060";

    const br = "%0a";
    const dbr = "%0a%0a";
    const plus = "%2b";

    const line = br + "----------------------------------------" + dbr;
    const miniLine = br + "------------------------" + br;

    const companyNumber = plus + "90 (535) 467 30 60";

    // Reservations değerini parçala ve formatla
    let formattedReservations = "";
    if (reservations) {
        const reservationItems = reservations.split(',').filter(item => item.trim() !== '');
        formattedReservations = reservationItems.map(item => `*${plus} ${item.trim()}*${br}`).join('');
    }

    var wp_url = "https://wa.me/" + number + "?text="
        + "*Feliz Beautyland*"
        + br + "Sağlık / Güzellik" + br
        + companyNumber + br
        + line
        + "*Rezervasyon Bilgileri*" + dbr
        + "*Tarih: " + datetime + "*" + dbr
        + "*Saat: " + time + "*" + dbr
        + "*Müşteri İsmi: " + name + "*" + br
        + line
        + "*Randevular*" + dbr
        + formattedReservations
        + line;

    window.open(wp_url, "_blank", "noopener");
}
