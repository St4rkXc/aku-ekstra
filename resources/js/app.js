import './bootstrap';


function ChangeColor() {
    const peers = document.querySelectorAll('.peer');
    const texts = document.querySelectorAll('.textpeer');

    peers.forEach((peer, index) => {
        peer.addEventListener('change', function () {
            texts.forEach(text => {
                text.classList.remove('text-white');
                text.classList.add('text-text');
            });
            
            if (peer.checked) {
                texts[index].classList.remove('text-text');
                texts[index].classList.add('text-white');
            }
        });
    });
}


document.addEventListener('DOMContentLoaded', function() {
    ChangeColor();
});

let swiperCards = new Swiper(".swiper", {
    loop: true,
    spaceBetween: 12,
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    // },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
    },

    breakpoints: {
        600: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
        1400: {
            slidesPerView: 4,
        },
    },
});

