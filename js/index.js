"use strict";

$(window).scroll(function() {
$('nav').toggleClass('scrolled', $(this).scrollTop()>500)
  });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })