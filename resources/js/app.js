const TABLET_BREAKPOINT = 768;
const MOBILE_BREAKPOINT = 480;

const carouselPrevArrow = '<img src="/img/main/arrow-prev.png">';
const carouselNextArrow = '<img src="/img/main/arrow-next.png">';
const carouselPrevDarkArrow = '<img src="/img/main/arrow-prev-dark.png">';
const carouselNextDarkArrow = '<img src="/img/main/arrow-next-dark.png">';

const spinner = document.querySelector('.spinner');
const resumeInputs = document.querySelectorAll('.upload-resume__input');
const companiesCarousel = $('.companies-carousel');
const galleryCarousel = $('.gallery-carousel');

window.addEventListener('load', () => {
    setTimeout(hideToasts, 10000);
});

function showSpinner() {
    spinner.classList.add('spinner--visible');
}

function hideSpinner() {
    spinner.classList.remove('spinner--visible');
}

resumeInputs.forEach((input) => {
    input.addEventListener('change', (evt) => {
        if (evt.target.files.length > 0) {
            showSpinner();
            evt.target.closest('.upload-resume').submit();
        }
    });
});

companiesCarousel.owlCarousel({
    loop: true,
    margin: 32,
    nav: true,
    navText: [carouselPrevArrow, carouselNextArrow],
    dots: false,
    responsive: {
        0: {
            items: 1,
        },
        481: {
            items: 3,
        },
        769: {
            items: 5,
        }
    }
});

galleryCarousel.owlCarousel({
    loop: true,
    margin: 12,
    nav: true,
    navText: [carouselPrevDarkArrow, carouselNextDarkArrow],
    dots: false,
    responsive: {
        0: {
            items: 1,
        },
        769: {
            items: 2,
        }
    }
});

function hideToasts() {
    const toast = document.querySelector('.toast');

    if (toast) {
        toast.classList.remove('show');
        toast.classList.add('fade');
        toast.classList.add('hide');
    }
}

// Scroll Top Button
document.querySelector('.scroll-top').addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
});
