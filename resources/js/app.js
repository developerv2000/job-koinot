const TABLET_BREAKPOINT = 768;
const MOBILE_BREAKPOINT = 480;

const carouselPrevArrow = '<img src="/img/main/arrow-prev.png">';
const carouselNextArrow = '<img src="/img/main/arrow-next.png">';

const spinner = document.querySelector('.spinner');
const resumeForm = document.querySelector('.upload-resume');
const resumeInputs = document.querySelectorAll('.upload-resume__desc');
const companiesCarousel = $('.companies-carousel');

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
            resumeForm.submit();
        }
    });
});

companiesCarousel.owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    navText: [carouselPrevArrow, carouselNextArrow],
    dots: false,
    responsive: {
        0: {
            items: 2,
        },
        769: {
            items: 5,
        }
    }
});
