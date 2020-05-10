"use strict";

require('./bootstrap');

$(window).scroll(function () {
  last = $("body").height() - $(window).height();

  if ($(window).scrollTop() >= last - 50) {
    $(".issueSwitchBTN").css("display", "block");
  }
});