new Swiper('#property-carousel', {
  speed: 600,
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false
  },
  slidesPerView: 'auto',
  pagination: {
    el: '.propery-carousel-pagination',
    type: 'bullets',
    clickable: true
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    600: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 20
    }
  }
});


// WHAT OUR CLIENT’S SAY ABOUT US
new Swiper('#testimonial-carousel', {
  speed: 600,
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false
  },
  slidesPerView: 'auto',
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    600: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    1200: {
      slidesPerView: 1,
      spaceBetween: 20
    }
  }
});



// Projects Slider...

new Swiper('#project-carousel', {
  speed: 600,
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false
  },
  slidesPerView: 'auto',
  // Navigation arrows
  // navigation: {
  //   nextEl: '.swiper-button-next',
  //   prevEl: '.swiper-button-prev',
  // },
  pagination: {
    el: '.project-carousel-pagination',
    type: 'bullets',
    clickable: true
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    600: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 20
    }
  }
});

// social icon color change on scroll
// window.onscroll = function(){
//   var top = window.pageYOffset || document.documentElement.scrollTop;
//   var form = document.getElementById('social-icon');
//   if (top > 330) {
//     form.classList.add("social-scroll");
//   } else {
//     form.classList.remove("social-scroll");
//   }
// }


