function formatDate(inputDate) {
    var dateParts = inputDate.split("-");
    var day = new Date(inputDate).toLocaleDateString('tr-TR', { weekday: 'long' });
    var formattedDate = dateParts[2] + "." + dateParts[1] + "." + dateParts[0] + " - " + day;
    return formattedDate;
}

function wp() {
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
        + "*Randevular*" + br
        + formattedReservations
        + line;

    // EK BİLGİ
    wp_url += "*Not:* " + "Sizi dört gözle salonumuza bekliyoruz..";

    window.open(wp_url, "_blank", "noopener");
}
