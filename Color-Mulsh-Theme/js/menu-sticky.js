$(document).ready(function(){



    $(window).scroll(function() {

        if ($(this).scrollTop() > 150) {
            $('#sticky-menu').css({"opacity": "1", "display": "block"}),

            


            $('.menu').css({"top":"-30px"}),

            $('.site-title').css({"position":"fixed", "margin-top": "2%"}),

            $('.site-description').css({"position":"fixed", "margin-top": "5%"}),

            
            $('.site-title-background').css({"position":"fixed", "margin-top": "0px", "background-size" : "80% 80%"});


                 
        } else {
            $('#sticky-menu').css({"opacity": "0", "display": "none"}),


            $('.menu').css({"top":"105px"}),

            $('.site-title').css({"position":"relative", "margin-top": "12%"}),

            $('.site-description').css({"position":"absolute", "margin-top": "6%", "margin-left":"6%"}),

            
            $('.site-title-background').css({"position":"relative", "margin-top": "00px", "background-size" : "100% 100%"});




        }
    });
  });