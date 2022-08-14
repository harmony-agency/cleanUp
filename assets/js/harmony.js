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
  // slidesPerView: 1,
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
      slidesPerView: 1,
      spaceBetween: 20,
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
  // centeredSlides: true,
  loop: true,
  // autoplay: {
  //   delay: 6000,
  // },
  navigation: {
    nextEl: ".toiletPaperSwiper .swiper-button-next",
    prevEl: ".toiletPaperSwiper .swiper-button-prev",
  },
  pagination: {
    el: ".toiletPaperSwiper .swiper-pagination",
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
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
  // centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 6000,
  },
  navigation: {
    nextEl: ".paperTowelSwiper .swiper-button-next",
    prevEl: ".paperTowelSwiper .swiper-button-prev",
  },
  pagination: {
    el: ".paperTowelSwiper .swiper-pagination",
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
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
  // centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 6000,
  },
  navigation: {
    nextEl: ".economicalSwiper .swiper-button-next",
    prevEl: ".economicalSwiper .swiper-button-prev",
  },
  pagination: {
    el: ".economicalSwiper .swiper-pagination",
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
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
  // centeredSlides: true,
  // loop: true,
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


// var boxHover = document.getElementById("#boxHover");

// $(".eventBox").hover(function () {
//   document.getElementsByClassName("eventBox").innerHTML = boxHover;
// });
