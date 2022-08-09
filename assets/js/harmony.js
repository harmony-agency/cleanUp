//  Slide carousels
var slideswiper = new Swiper(".slideSwiper", {
  // autoplay: {
  //   delay: 6000,
  //   disableOnInteraction: false,
  // },
  navigation: {
    nextEl: ".slideSwiper .swiper-button-next",
    prevEl: ".slideSwiper .swiper-button-prev",
  },
  pagination: {
    el: ".slideSwiper .swiper-pagination",
  },
});



//  banner carousels
var bannerSwiper = new Swiper(".bannerSwiper", {
  slidesPerView: 1.5,
  centeredSlides: true,
  loop: true,
  // autoplay: {
  //   delay: 6000,
  // },
  navigation: {
    nextEl: ".bannerSwiper .swiper-button-next",
    prevEl: ".bannerSwiper .swiper-button-prev",
  },
  pagination: {
    el: ".bannerSwiper .swiper-pagination",
  },
  // breakpoints: {
  //   640: {
  //     slidesPerView: 1,
  //     spaceBetween: 20,
  //   },
  //   768: {
  //     slidesPerView: 2,
  //     spaceBetween: 40,
  //   },
  //   1024: {
  //     slidesPerView: 3,
  //     spaceBetween: 50,
  //   },
  // },
});