"use strict";require("./bootstrap"),$(window).scroll(function(){last=$("body").height()-$(window).height(),$(window).scrollTop()>=last-50&&$(".issueSwitchBTN").css("display","block")});