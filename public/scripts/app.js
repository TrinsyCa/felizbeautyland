const html = document.querySelector('html');
const hamburgerButton = document.getElementById('hamburgerButton');
const navLinks = document.querySelectorAll('.nav-links li');
hamburgerButton.addEventListener('click', () => {
    if(html) {
        html.classList.toggle('navLinksActivated');
        if(html.classList.contains('navLinksActivated')) {
            hamburgerButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><g fill="none" fill-rule="evenodd"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="#333" d="m12 14.122l5.303 5.303a1.5 1.5 0 0 0 2.122-2.122L14.12 12l5.304-5.303a1.5 1.5 0 1 0-2.122-2.121L12 9.879L6.697 4.576a1.5 1.5 0 1 0-2.122 2.12L9.88 12l-5.304 5.304a1.5 1.5 0 1 0 2.122 2.12z"/></g></svg>';
        }
        else {
            hamburgerButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="#333" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/></svg>';
        }
    }
});
navLinks.forEach((link) => {
    link.addEventListener('click', () => {
        if(html.classList.contains('navLinksActivated')) {
            html.classList.remove('navLinksActivated');
            hamburgerButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="#333" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/></svg>';
        }
    });
});
function reservationSection() {
    if(html) {
        html.classList.toggle('reservationActivated');
        if(html.classList.contains('reservationActivated')) {
            if(hamburgerButton.classList.contains('navLinksActivated')) {
                html.classList.remove('navLinksActivated');
                hamburgerButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="#333" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/></svg>';
            }
        }
    }
}
function openReservationCategory(btn) {
    const category = btn.querySelector('article h3').innerText.trim();

    if(html.classList.contains('reservationActivated')) {
        html.classList.remove('reservationActivated');
    }

    const contactSection = document.querySelector('#contactForm');
    if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'smooth' });
    }

    const selectedCategories = document.querySelectorAll('#contactForm .reservation-category-box');
    selectedCategories.forEach((selectedCategory) => {
        if(selectedCategory != category) {
            selectedCategory.querySelector('.reservation-category-btn').classList.remove('active');
            selectedCategory.querySelector('.reservation-list').classList.remove('active');
        }
        else {
            selectedCategory.querySelector('.reservation-category-btn').classList.add('active');
            selectedCategory.querySelector('.reservation-list').classList.add('active');
        }
    });
}

const reservationGenderMan = document.getElementById('reservationGenderMan');
const reservationGenderWoman = document.getElementById('reservationGenderWoman');
const genderWomanList = document.getElementById('genderWomanList');
const genderManList = document.getElementById('genderManList');
const reservationCategorySection = document.querySelector('.reservation-category-section');
const reservationCategoryBtns = document.querySelectorAll('.reservation-category-btn');

reservationGenderMan.addEventListener('click', () => {
    reservationCategoryBtns.forEach((btn) => {
        btn.classList.remove('active');
        btn.nextElementSibling.classList.remove('active');
        btn.nextElementSibling.style.height = "0px";
    });

    reservationCategorySection.classList.add('activeMan');
    reservationCategorySection.style.height = genderManList.offsetHeight + "px";
    reservationGenderMan.classList.add('active');
    reservationGenderWoman.classList.remove('active');
});
reservationGenderWoman.addEventListener('click', () => {
    reservationCategoryBtns.forEach((btn) => {
        btn.classList.remove('active');
        btn.nextElementSibling.classList.remove('active');
        btn.nextElementSibling.style.height = "0px";
    });

    reservationCategorySection.classList.remove('activeMan');
    reservationCategorySection.style.height = genderWomanList.offsetHeight + "px";
    reservationGenderMan.classList.remove('active');
    reservationGenderWoman.classList.add('active');
});
reservationCategoryBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
        if(reservationCategorySection.classList.contains('activeMan')) {
            setTimeout(() => {
                reservationCategorySection.style.height = genderManList.offsetHeight + "px";
            },500);
        }
        else {
            setTimeout(() => {
                reservationCategorySection.style.height = genderWomanList.offsetHeight + "px";
            },500);
        }
    });
});
