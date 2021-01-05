var darkmode = null;

(function ($) {

  "use strict";

    // COLOR MODE
    darkmode  = GetCookie("darkmode");
    darkmode  = (darkmode == "enable"? true: false);
    if (darkmode) {
      darkmode = !darkmode;
      ToggleDarkMode();
    }

    $('.color-mode').click(function(){
        ToggleDarkMode();
    })

    // HEADER
    $(".navbar").headroom();

    // PROJECT CAROUSEL
    $('.owl-carousel').owlCarousel({
    	items: 1,
	    loop:true,
	    margin:10,
	    nav:true
	});

    // SMOOTHSCROLL
    $(function() {
      $('.nav-link, .custom-btn-link').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 49
        }, 1000);
        event.preventDefault();
      });
    });  

    // TOOLTIP
    $('.social-links a').tooltip();

})(jQuery);

function ToggleDarkMode() {
  $('.color-mode-icon').toggleClass('active')
  $('body').toggleClass('dark-mode')
  darkmode = !darkmode;
  setCookie("darkmode", (darkmode? "enable": "disable"));
  return;
}

function GetCookie(name) {
  var cookies = document.cookie;
  var _cookie = null;
  cookies     = cookies.split(";");
  cookies.forEach((cookie) => {
    cookie            = cookie.trim();
    [keyname, value]  = cookie.split("=");
    if (keyname == name) {
      _cookie = value;
      return;
    }
  });
  return _cookie ?? null;
}

function setCookie(cname, cvalue, exdays = 365) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}