$(document).ready(function(){



    $(window).scroll(function() {

        if ($(this).scrollTop() > 150) {
            $('#sticky-menu').css({"opacity": "1", "display": "block"});
                 
        } else {
            $('#sticky-menu').css({"opacity": "0", "display": "none"});
        }
    });
  });