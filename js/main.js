var hotelSwiper = new Swiper('.hotel-slider', {
  // Optional parameters
  loop: true,
  speed: 1000,

  // Navigation arrows
  navigation: {
    nextEl: '.hotel-slider-next',
    prevEl: '.hotel-slider-prev',
  },

  keyboard: {
    enabled: true,
  },
});

var reviewsSwiper = new Swiper('.reviews-slider', {
  // Optional parameters
  loop: true,
  speed: 1000,

  // Navigation arrows
  navigation: {
    nextEl: '.reviews-slide-next',
    prevEl: '.reviews-slide-prev',
  },

  keyboard: {
    enabled: false,
  },
});

ymaps.ready(init);
function init() {
  var myMap = new ymaps.Map("map", {
    center: [18.440072583306193, 110.01730095614566],
    zoom: 10
  },
  ),
    myGeoObject = new ymaps.GeoObject({
      geometry: {
        type: "Point",
        coordinates: [18.45, 110.02]
      },
    });
  myMap.geoObjects.add(myGeoObject);
  
}

// $('.newsletter').parallax({
//   speed: 0.8,
// });

var menuButton = document.querySelector('.menu-s');
menuButton.addEventListener("click", function (event) {
  console.log("Клик по кнопке меню!");
  document.querySelector(".header-sub").classList.toggle("header-sub--mobile-visible");
});