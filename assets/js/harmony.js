// hover for copy right
$(".copyright a").hover(
  function () {
    let logo = $(".copyright .hover-company");
    logo.addClass("active");
  },
  function () {
    let logo = $(".copyright .hover-company");
    logo.removeClass("active");
  }
);

// stickyHeader
jQuery(function ($) {
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 100 && $(this).scrollTop() < 4300) {
      $("header").addClass("stickyHeader");
    } else {
      $("header").removeClass("stickyHeader");
    }
  });
});

//  Slide carousels
var slideswiper = new Swiper(".slideSwiper", {
  slidesPerView: 1,
  spaceBetween: 10,

  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
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
  slidesPerView: 1.2,
  spaceBetween: 5,
  centeredSlides: true,

  loop: true,
  autoplay: {
    delay: 6000,
  },
  navigation: {
    nextEl: ".bannerSwiper .swiper-button-next",
    prevEl: ".bannerSwiper .swiper-button-prev",
  },
  pagination: {
    el: ".bannerSwiper .swiper-pagination",
  },
  breakpoints: {
    640: {
      slidesPerView: 1.5,
      spaceBetween: 5,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 1.5,
      spaceBetween: 50,
    },
  },
});

//  boxSwiper
var boxSwiper = new Swiper(".boxSwiper", {
  slidesPerView: 1.5,
  spaceBetween: 20,
  // centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 6000,
  },
  navigation: {
    nextEl: "#next",
    prevEl: "#prev",
  },
  pagination: {
    el: ".boxSwiper .swiper-pagination",
  },
  breakpoints: {
    640: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
});
//  toiletPaperSwiper
var toiletPaperSwiper = new Swiper(".toiletPaperSwiper", {
  slidesPerView: 1.5,
  spaceBetween: 20,
  // centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 6000,
  },
  navigation: {
    nextEl: "#next",
    prevEl: "#prev",
  },
  pagination: {
    el: ".boxSwiper .swiper-pagination",
  },
  breakpoints: {
    640: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
});
//  paperTowelSwiper
var paperTowelSwiper = new Swiper(".paperTowelSwiper", {
  slidesPerView: 1.5,
  spaceBetween: 20,
  // centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 6000,
  },
  navigation: {
    nextEl: "#next",
    prevEl: "#prev",
  },
  pagination: {
    el: ".boxSwiper .swiper-pagination",
  },
  breakpoints: {
    640: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
});
//  economicalSwiper
var economicalSwiper = new Swiper(".economicalSwiper", {
  slidesPerView: 1.5,
  spaceBetween: 20,
  // centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 6000,
  },
  navigation: {
    nextEl: "#next",
    prevEl: "#prev",
  },
  pagination: {
    el: ".boxSwiper .swiper-pagination",
  },
  breakpoints: {
    640: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
});

//  categorySwiper
var categorySwiper = new Swiper(".categorySwiper", {
  slidesPerView: 1.5,
  spaceBetween: 20,
  loop: true,
  // autoplay: {
  //   delay: 6000,
  // },
  navigation: {
    nextEl: "#next",
    prevEl: "#prev",
  },
  pagination: {
    el: ".categorySwiper .swiper-pagination",
  },
  breakpoints: {
    640: {
      slidesPerView: 1.5,
      spaceBetween: 30,
      centeredSlides: true,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});
//  category2Swiper
var category2Swiper = new Swiper(".category2Swiper", {
  slidesPerView: 1.5,
  spaceBetween: 20,
  loop: true,
  // autoplay: {
  //   delay: 6000,
  // },
  navigation: {
    nextEl: "#next",
    prevEl: "#prev",
  },
  pagination: {
    el: ".category2Swiper .swiper-pagination",
  },
  breakpoints: {
    640: {
      slidesPerView: 1.5,
      spaceBetween: 30,
      centeredSlides: true,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});
//  category3Swiper
var category3Swiper = new Swiper(".category3Swiper", {
  slidesPerView: 1.5,
  spaceBetween: 20,
  loop: true,
  // autoplay: {
  //   delay: 6000,
  // },
  navigation: {
    nextEl: "#next",
    prevEl: "#prev",
  },
  pagination: {
    el: ".category3Swiper .swiper-pagination",
  },
  breakpoints: {
    640: {
      slidesPerView: 1.5,
      spaceBetween: 30,
      centeredSlides: true,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});

// image product in songle page
$("#productImg-tab .nav-link").click(function () {
  let productImgName = $(this).data("content");
  $("#productImgPlace").attr("src", "assets/images/" + productImgName + ".jpg");
});

//  testimonialSwiper
var testimonialSwiper = new Swiper(".testimonialSwiper", {
  slidesPerView: 1.5,
  spaceBetween: 20,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 6000,
  },
  navigation: {
    nextEl: ".testimonialSwiper .swiper-button-next",
    prevEl: ".testimonialSwiper .swiper-button-prev",
  },
  pagination: {
    el: ".testimonialSwiper .swiper-pagination",
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 1.5,
      spaceBetween: 20,
    },
  },
});
