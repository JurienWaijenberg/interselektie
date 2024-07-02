/******************************************************************/
/* Review Swiper /* /* Review Swiper /* /* Review Swiper /* /* Review Swiper /*
/******************************************************************/
var swiper = new Swiper(".mySwiper", {
  cssMode: true,
  mousewheel: true,
  keyboard: true,
  slidesPerView: 1,
  slidesPerGroup: 1,
  //   spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1000: {
      slidesPerView: 2,
      slidesPerGroup: 2,
    },
  },
});

/******************************************************************/
/* FAQ /* /* FAQ /* /* FAQ /* /* FAQ /* /* FAQ /* /* FAQ /* /* FAQ /* 
/******************************************************************/

document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".FAQwerkgever section button");
  const articles = document.querySelectorAll(".FAQwerkgever section article");

  buttons.forEach((button, index) => {
    button.addEventListener("click", function () {
      articles[index].classList.toggle("active");

      if (articles[index].classList.contains("active")) {
        articles[index].style.maxHeight = articles[index].scrollHeight + "px";
        button.querySelector("i").classList.add("rotate-180"); // voeg klasse toe voor 180 graden rotatie
      } else {
        articles[index].style.maxHeight = "0";
        button.querySelector("i").classList.remove("rotate-180"); // verwijder klasse voor terugdraaien
      }
    });
  });
});
