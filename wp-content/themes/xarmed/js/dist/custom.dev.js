"use strict";

function $(prop) {
  return jQuery(prop);
}

jQuery(document).ready(function () {
  console.log('sds');
  var homeArmsCarousel = $('.xcarousel__inner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '410px'
  });
  homeArmsCarousel.on('wheel', function (e) {
    e.preventDefault();

    if (e.originalEvent.deltaY < 0) {
      $(this).slick('slickNext');
    } else {
      $(this).slick('slickPrev');
    }
  });
});