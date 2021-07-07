$(document).ready(function () {
  $('.banner_layout_slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true
  });
  AOS.init();
});
