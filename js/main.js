var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,
  speed: 1000,

  // Navigation arrows
  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },

  keyboard: {
    enabled: true,
  },
})

ymaps.ready(init);
function init() {
  var myMap = new ymaps.Map("map", {
    center: [18.440072583306193, 110.01730095614566],
    zoom: 6
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
