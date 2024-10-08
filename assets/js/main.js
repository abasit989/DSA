
new Swiper('.testimonials-slider', {
  speed: 600,
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false
  },
  slidesPerView: 'auto',
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true           
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },

    768: {
      slidesPerView: 2,
      spaceBetween: 20
    },

    992: {
        slidesPerView: 3,
        spaceBetween: 20
      }
  }
});
new Swiper('.updates-slider', {
  speed: 600,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false
  },
  slidesPerView: 'auto',
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true           
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },

    768: {
      slidesPerView: 1,
      spaceBetween: 20
    },

    992: {
        slidesPerView: 1,
        spaceBetween: 20
      }
  }
});


let menuIcon = document.getElementById("menuIcon");
let navMenu = document.getElementById("navMenu");
let closeIcon = document.getElementById("close");

menuIcon.addEventListener('click',  toggleMenu);
closeIcon.addEventListener('click',  closeMenu);

function toggleMenu() {
  navMenu.classList.add("nav-toggle");
}
function closeMenu() {
  navMenu.classList.remove("nav-toggle");
}



