$(document).ready(function () {
  var hotelSwiper = new Swiper('.hotel-slider', {
    // Optional parameters
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 2000,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.hotel-slider-next',
      prevEl: '.hotel-slider-prev',
    },

    keyboard: {
      enabled: true,
    },
  });

  $('.hotel-slider').on({
    mouseenter: function () {
      hotelSwiper.autoplay.stop();
    },
    mouseleave: function () {
      hotelSwiper.autoplay.start();
    }
  });
  
  var reviewsSwiper = new Swiper('.reviews-slider', {
    // Optional parameters 
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 2000,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.reviews-slide-next',
      prevEl: '.reviews-slide-prev',
    },

    keyboard: {
      enabled: true,
    },
  });
  $('.reviews-slider').on({
    mouseenter: function () {
      reviewsSwiper.autoplay.stop();
    },
    mouseleave: function () {
      reviewsSwiper.autoplay.start();
    }
  });

  var menuButton = $('.menu-s');
  menuButton.on("click", function (event) {
    $(".header-sub").toggleClass("header-sub--mobile-visible");
  });
  
  var modalButton = $('[data-toggle=modal]');
  var closeModalButton = $('.modal-close');
  modalButton.on('click', openModal);
  closeModalButton.on('click', closeModal);
  $(document).on('keydown', closeByButton);
  $('.modal-overlay').on('click', closeModal);

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

  $(".newsletter-form").validate({
    errorClass: "newsletter-invalid",
    messages: {
      'subscription-input': {
        required: "Please enter your email to contact you",
        email: "Email address format eхample name@domain.com"
      },
    },
  });

  $(".feedback-form").validate({
    errorClass: "feedback-invalid",
    messages: {
      'input-name': {
        required: "Please enter your name",
        minlength: "Your name must contain more than one letter"
      },
      'input-number': {
        required: "Please enter your phone number",
        minlength: "Your phone number must contain at least 11 digits"
      },
    },
  });

  $(".modal-window-form").validate({
    errorClass: "invalid",
    messages: {
      'modal-window-name': {
        required: "Please enter your name",
        minlength: "Your name must contain more than one letter"
      },
      'modal-window-number': {
        onkeyup: false,
        required: "Please enter your phone number",
        minlength: "Your phone number must contain at least 11 digits"
      },
      'modal-window-email': {
        required: "Please enter your email to contact you",
        email: "Your email address must be in the format of name@domain.com"
      },
    },
  });

  $('input[type="tel"]').mask('+7(000) 000-00-00');  
  
  AOS.init();
});