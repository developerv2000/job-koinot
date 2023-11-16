let csrfToken = document.querySelector('meta[name="csrf-token"]').content;
let spinner = document.querySelector('.spinner');

window.onload = function () {
    setupComponents();
    setupAsideToggler();
    setupTableCheckboxes();
    setupModals();
    setupFormSpinner();
    highlightActiveNavbarLink();
    setupLocalImageInputs();
    setupDownloadForms();
};

function showSpinner() {
    spinner.classList.add('spinner--visible');
}

function hideSpinner() {
    spinner.classList.remove('spinner--visible');
}

function setupComponents() {
    // Singular Selectize
    $('.selectize-singular').selectize({});

    // Singular Selectize Linked
    $('.selectize-singular--linked').selectize({
        onChange(value) {
            window.location = value;
        }
    });

    // Miltiple Selectize
    $('.selectize-multiple').selectize({});

    setupSimditor();
}

function setupSimditor() {
    Simditor.locale = 'ru-RU';

    // Simple WYSIWYGS
    document.querySelectorAll('.wysiwyg-textarea').forEach((textarea) => {
        new Simditor({
            textarea: textarea,
            toolbarFloatOffset: '60px',
            imageButton: 'upload',
            toolbar: ['title', 'bold', 'italic', 'underline', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'hr', '|', 'indent', 'outdent', 'alignment'] //image removed
            // cleanPaste: true, //clear all styles after pasting,
        });
    });

    // Imaged WYSIWYGS
    document.querySelectorAll('.simditor-wysiwyg--imaged').forEach((textarea) => {
        new Simditor({
            textarea: textarea,
            toolbarFloatOffset: '60px',
            imageButton: 'upload',
            toolbar: ['title', 'bold', 'italic', 'underline', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'hr', '|', 'indent', 'outdent', 'alignment', 'image'],
            upload: {
                url: '/simditor-image/upload',   // image upload url by server
                params: { // additional parameters for request
                    folder: 'posts'
                },
                fileKey: 'image', // input name
                connectionCount: 10,
                leaveConfirm: 'Пожалуйста дождитесь окончания загрузки изображений на сервер! Вы уверены что хотите закрыть страницу?'
            },
            defaultImage: '/img/dashboard/default-image.png', // default image thumb while uploading
        });
    });
}

function debounce(callback, timeoutDelay = 500) {
    let timeoutId;

    return (...rest) => {
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => callback.apply(this, rest), timeoutDelay);
    };
}

// Auto highlight navbars current route link
function highlightActiveNavbarLink() {
    let navbar = document.querySelector('.navbar');
    let currentUlr = window.location.origin + window.location.pathname;

    // Links
    navbar.querySelectorAll('.menu__link').forEach((link) => {
        if (link.href == currentUlr) {
            link.classList.add('menu__item--active');
        }
    });

    // Accordion links
    navbar.querySelectorAll('.accordion__collapse-link').forEach((link) => {
        if (link.href == currentUlr) {
            link.classList.add('accordion__collapse-link--active');
        }
    });
}

function setupAsideToggler() {
    document.querySelector('.aside-toggler').addEventListener('click', () => {
        document.body.classList.toggle('body--asideless');
    });
}

function setupTableCheckboxes() {
    let selectAllBtn = document.querySelector('.header__action-select-all');

    if (selectAllBtn) {
        selectAllBtn.addEventListener('click', () => {
            let table = document.querySelector('.table')
            let checkboxes = table.querySelectorAll('input[type="checkbox"]');

            // check if all checkboxes selected
            let checkedAll = true;

            for (let chb of checkboxes) {
                if (!chb.checked) {
                    checkedAll = false;
                    break;
                }
            }

            // toggle checkbox statements
            for (let chb of checkboxes) {
                chb.checked = !checkedAll;
            }
        });
    }
}

// ************ MODAL ************
function showModal(modal) {
    modal.classList.add('modal--visible');
}

function hideModal(modal) {
    modal.classList.remove('modal--visible');
}

function hideAllActiveModals() {
    document.querySelectorAll('.modal--visible').forEach((modal) => {
        hideModal(modal);
    });
}

function setupModals() {
    // Show modal
    document.querySelectorAll('[data-action="show-modal"]').forEach((item) => {
        item.addEventListener('click', (evt) => {
            hideAllActiveModals();
            let modal = document.querySelector(evt.target.dataset.modalTarget);
            showModal(modal);
        });
    });

    // Hide modal
    document.querySelectorAll('[data-action="hide-modal"], .modal__overlay').forEach((item) => {
        item.addEventListener('click', () => {
            hideAllActiveModals();
        });
    });

    setupFormModals();
}

function setupFormModals() {
    // Single Item Destroy Modal
    document.querySelectorAll('.table__button--destroy').forEach((item) => {
        item.addEventListener('click', (evt) => {
            let modal = document.querySelector('.modal--single-destroy');
            let input = modal.querySelector('[name="id[]"]');

            // Change input value and show modal
            input.value = evt.target.dataset.itemId;
            showModal(modal);
        });
    });

    // Single Item Restore Modal
    document.querySelectorAll('.table__button--restore').forEach((item) => {
        item.addEventListener('click', (evt) => {
            let modal = document.querySelector('.modal--single-restore');
            let input = modal.querySelector('[name="id"]');

            // Change input value and show modal
            input.value = evt.target.dataset.itemId;
            showModal(modal);
        });
    });
}
// ************ /END MODAL ************

function setupFormSpinner() {
    document.querySelectorAll('[data-on-submit="show-spinner"]').forEach((item) => {
        item.addEventListener('submit', () => {
            showSpinner();
        });
    });
}

function setupLocalImageInputs() {
    document.querySelectorAll('[data-action="display-local-image"]').forEach((input) => {
        input.addEventListener('change', (evt) => {
            let imgTypes = ['image/jpeg', 'image/jpg', 'image/png'];
            let imgTypesRegex = new RegExp('(' + imgTypes.join('|').replace(/\./g, '\\.') + ')$');

            let file = evt.target.files[0];
            let image = evt.target.nextElementSibling;

            if (imgTypesRegex.test(file.type)) {
                image.src = URL.createObjectURL(file);
            } else {
                input.value = '';
                alert('Формат файла не поддерживается!');
            }
        });
    });
}

function setupDownloadForms() {
    document.querySelectorAll('.resume-download').forEach((form) => {
        form.addEventListener('submit', (evt) => {
            showSpinner();

            const targ = evt.target;
            // disable download button
            targ.querySelector('.td__download').disabled = true;
            // remove new status
            const row = targ.closest('tr');
            let newSpan = row.querySelector('.td__new')

            if (newSpan) {
                newSpan.classList.remove('td__new');
                newSpan.innerText = 'Скачано';
            }

            sleep(1000).then(() => {
                hideSpinner();
            });
        });
    });
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
