$(document).ready(function () {
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

  var menuButton = $('.menu-s');
  menuButton.on("click", function (event) {
    $(".header-sub").toggleClass("header-sub--mobile-visible");
  });
  
  var modalButton = $('[data-toggle=modal]');
  var closeModalButton = $('.modal-close');
  modalButton.on('click', openModal);
  closeModalButton.on('click', closeModal);
  $(document).on('keydown', closeByButton);

  function openModal() {
    var modalOverlay = $('.modal-overlay');
    var modalWindow = $('.modal-window');
    modalOverlay.addClass('modal-overlay--visible');
    modalWindow.addClass('modal-window--visible');
  }

  function closeModal(event) {
    event.preventDefault();
    var modalOverlay = $('.modal-overlay');
    var modalWindow = $('.modal-window');
    modalOverlay.removeClass('modal-overlay--visible');
    modalWindow.removeClass('modal-window--visible');
  }

  function closeByButton(e) {
    var modalOverlay = $('.modal-overlay');
    var modalWindow = $('.modal-window');
    var key = e.which;

    if (key == 27) {
      modalOverlay.removeClass('modal-overlay--visible');
      modalWindow.removeClass('modal-window--visible');
    } else {
    false;
    }  
  } 

});