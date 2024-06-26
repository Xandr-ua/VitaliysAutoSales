

function getUrlVars() {
    const vars = {};
    const parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

const catalogSort = document.querySelector('.catalog__sort');
if (catalogSort) {
    const sorting = getUrlVars()["orderby"];
    let orderText = 'Sort by popularity';

    if (sorting == 'date') {
        orderText = 'Sort by latest';
    } else if (sorting == 'price') {
        orderText = 'Sort by price: low to high';
    } else if (sorting == 'price-desc') {
        orderText = 'Sort by price: high to low';
    }

    const parametr = document.getElementById('parametr');
    if (parametr) {
        parametr.textContent = orderText;
        parametr.dataset.value = sorting;
    }
}

const catalogSortItems = document.querySelectorAll('.catalog__sort li');
for (let i = 0; i < catalogSortItems.length; i++) {
    catalogSortItems[i].addEventListener('click', function() {
        const parametr = document.getElementById('parametr');
        if (parametr) {
            parametr.textContent = this.querySelector('a').textContent;
            window.location = 'http://auto/inventory/?orderby=' + this.querySelector('a').dataset.value;
        }
    });
}


// Header Menu

const menuLists = document.querySelectorAll('.header__bottom-list');
const items = document.querySelectorAll('.header__bottom-list li');

menuLists.forEach(list => {
    const newItem = document.createElement('li');
    newItem.classList.add('indicator');
    list.appendChild(newItem);
});

function indicator(e, marker) {
    marker.style.left = e.offsetLeft + 'px';
    marker.style.width = e.offsetWidth + 'px';
    marker.style.opacity = '1';
    marker.style.transition = 'left 0.3s, width 0.3s';
}

function hideIndicator(marker) {
    marker.style.opacity = '0';
    marker.style.transition = 'left 0.3s, width 0.3s';
}

items.forEach(link => {
    link.addEventListener('mouseover', (e) => {
        const marker = e.target.closest('.header__bottom-list').querySelector('.indicator');
        indicator(e.target, marker);
    });

    link.addEventListener('mouseout', (e) => {
        const marker = e.target.closest('.header__bottom-list').querySelector('.indicator');
        hideIndicator(marker);
    });
});

// Header Logo

function moveLogo() {
    const logo = document.querySelector('.logo');
    const topLogoContainer = document.querySelector('.header__top-logo');
    const bottomLogoContainer = document.querySelector('.header__bottom-logo');
    const logoInnerContainer = document.querySelector('.logo__inner');

    if (window.innerWidth <= 768) {
        bottomLogoContainer.appendChild(logo);
    } else if (window.innerWidth <= 992) {
        topLogoContainer.appendChild(logo);
    } else {
        logoInnerContainer.appendChild(logo);
    }
}

window.addEventListener('load', moveLogo);

window.addEventListener('resize', moveLogo);

// Header Burger Menu

const menu = document.querySelector('.header__bottom-nav');
const menuOpen = document.querySelector('.header__bottom-burger');
const menuClose = document.querySelector('.header__bottom-close');

menuOpen.addEventListener('click', () => {
    menu.classList.add('show');
    menuOpen.classList.add('header__bottom-icon-hidden');
    menuClose.classList.remove('header__bottom-icon-hidden');
    document.querySelector('body').classList.add('header__bottom-dody-hidden');
});

menuClose.addEventListener('click', () => {
    menu.classList.remove('show');
    menuClose.classList.add('header__bottom-icon-hidden');
    menuOpen.classList.remove('header__bottom-icon-hidden');
    document.querySelector('body').classList.remove('header__bottom-dody-hidden');
})

// Slider Vehicles

const banner = document.querySelector('.top-news__box-banner-link');
const newsList = document.querySelector('.top-news__slider-list');
const newsListSlider = document.querySelector('.top-news__slider');

const resizableSwiper = (breakpoint, swiperClass, swiperSettings, callback) => {
    let swiper;

    breakpoint = window.matchMedia(breakpoint);

    const enableSwiper = function (className, settings) {
        swiper = new Swiper(className, settings);

        if (callback) {
            callback(swiper);
        }
    }

    const checker = function () {
        if (breakpoint.matches) {
            return enableSwiper(swiperClass, swiperSettings);
        } else {
            if (swiper !== undefined) swiper.destroy(true, true);
            return;
        }
    };

    breakpoint.addEventListener('change', checker);
    checker();
}

resizableSwiper(
    '(max-width: 768px)',
    '.vehicles__slider',
    {
        loop: true,
        spaceBetween: 32,
        slidesPerView: 1,
        navigation: {
            nextEl: '.vehicles__slider-next',
            prevEl: '.vehicles__slider-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.3,
                spaceBetween: 30
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 1.5,
                spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 2,
                spaceBetween: 30
            }
        }
    },
);


// Move Title in body styles

function moveTitle() {
    const bodyTitle = document.querySelector('.body-styles__title');
    const bodyTitleOldInner = document.querySelector('.body-styles__title-inner');
    const bodyTitleNewInner = document.querySelector('.body-styles__item-title');

    if (window.innerWidth <= 768) {
        bodyTitleOldInner.appendChild(bodyTitle);
    } else if (window.innerWidth <= 992) {
        bodyTitleOldInner.appendChild(bodyTitle);
    } else if (window.innerWidth <= 1360) {
        bodyTitleNewInner.appendChild(bodyTitle);
    }
}

window.addEventListener('load', moveTitle);

window.addEventListener('resize', moveTitle);


// Slider Popular makes

const makesSlider = new Swiper(".makes__slider", {
    slidesPerView: 6,
    spaceBetween: 30,
    loop: false,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    breakpoints: {
        320: {
            slidesPerView: 2.3,
            spaceBetween: 30
        },
        480: {
            slidesPerView: 3.5,
            spaceBetween: 30
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 30
        },
        1360: {
            slidesPerView: 5,
            spaceBetween: 30
        }
    }
});

// Slider Reviews

const reviewsSlider = new Swiper(".reviews__slider", {
    slidesPerView: 2.3,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 1.3,
            spaceBetween: 30
        },
        1360: {
            slidesPerView: 1.5,
            spaceBetween: 30
        },
        1400: {
            slidesPerView: 2.3,
            spaceBetween: 30
        }
    }
});

// Product Cart Buttons

function moveButtons() {
    const buttons = document.querySelector('.catalog__cart-buttons');
    const buttonsOldInner = document.querySelector('.catalog__cart-buttons-inner');
    const buttonsNewInner = document.querySelector('.catalog__cart-buttons-mob');

    if (buttons != null && buttonsOldInner != null && buttonsNewInner != null) {
        if (window.innerWidth <= 992) {
            buttonsNewInner.appendChild(buttons);
        } else {
            buttonsOldInner.appendChild(buttons);
        }
    }
}

window.addEventListener('load', moveButtons);

window.addEventListener('resize', moveButtons);



const woocommerceProduct = new Swiper('.woocommerce-product-slider', {
    pagination: {
        el: ".woocommerce-product-slider-calc",
        type: "fraction",
        formatFractionCurrent: function (number) {
            return ('' + number).slice(-2);
        },
        formatFractionTotal: function (number) {
            return ('' + number).slice(-2);
        },
        renderFraction: function (currentClass, totalClass) {
            return '<span class="' + currentClass + '"></span>' +
                ' / ' +
                '<span class="' + totalClass + '"></span>';
        }
    },
    navigation: {
        nextEl: '.woocommerce-product-slider-button-next',
        prevEl: '.woocommerce-product-slider-button-prev',
    },
});

// Product Cart Contacts

function moveButtonsBox() {
    const buttonsBox = document.querySelector('.product__slider-subbox');
    const buttonsBoxOldInner = document.querySelector('.product__slider-subbox-inner');
    const buttonsBoxNewInner = document.querySelector('.product__slider-subbox-mobile');

    const titleInner = document.querySelector('.product__title-inner-box');
    const titleInnerOldInner = document.querySelector('.product__title-inner');
    const titleInnerNewInner = document.querySelector('.product__title-inner-mobile');

    if (buttonsBox != null && buttonsBoxOldInner != null && buttonsBoxNewInner != null && titleInner != null && titleInnerOldInner != null && titleInnerNewInner != null) {
        if (window.innerWidth <= 992) {
            titleInnerNewInner.appendChild(titleInner);
            buttonsBoxNewInner.appendChild(buttonsBox);
        } else {
            titleInnerOldInner.appendChild(titleInner);
            buttonsBoxOldInner.appendChild(buttonsBox);
        }
    }
}

window.addEventListener('load', moveButtonsBox);

window.addEventListener('resize', moveButtonsBox);




document.addEventListener('DOMContentLoaded', function() {
    const buyButtons = document.querySelectorAll('.catalog__cart-btn-buy');
    const buyButtonsProduct = document.querySelectorAll('.product__cart-btn');
    const hiddenField = document.querySelector('.wpcf7-hidden');

    buyButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const productItem = button.closest('li');
            const productNameElement = productItem.querySelector('.woocommerce-loop-product__title');
            const productName = productNameElement ? productNameElement.textContent : '';
            hiddenField.value = productName;
        });
    });

    buyButtonsProduct.forEach(function(button) {
        button.addEventListener('click', function() {
            // const productItem = button.closest('li');
            const productNameElement = document.querySelector('.product_title');
            const productName = productNameElement ? productNameElement.textContent : '';
            hiddenField.value = productName;
        });
    });
});





