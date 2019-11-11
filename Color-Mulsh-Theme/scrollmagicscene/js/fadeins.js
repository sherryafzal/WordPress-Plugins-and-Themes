$( document ).ready(function() {



var controller = new ScrollMagic.Controller();


var fadein_tween_steps = TweenMax






.fromTo('.introduction', 1, {top:0, left:30 , repeat:0, opacity:0}, { top:100, left:30, repeat:0 ,opacity:1,  ease:Power1.easeInOut  })

//TweenMax.to("#stepsto", 1, { ypercent:100, y:-100 , opacity:0 ,  ease:Power1.easeInOut ,repeat:0 });

var scene = new ScrollMagic.Scene({
  triggerElement: "#anim_1",
  trigerHook:"0",
  duration: "20%",
  offset:"400",

})  



.setTween(fadein_tween_steps)
.addTo(controller);

scene.addIndicators();



var fadein_tween_steps_fade = TweenMax


////////////////////// FADE UP

.fromTo('.introduction', 1, { repeat:0}, {left:-200, top:0 , repeat:0 ,opacity:0, ease:Power1.easeInOut  });



var scene = new ScrollMagic.Scene({
  triggerElement: "#anim_1_end",
  trigerHook:"0",
  duration: "30%",
  offset:"440"

  
})  


// set a new offset




.setTween(fadein_tween_steps_fade)
.addTo(controller);


scene.addIndicators();



//////////////////////////////////////////////////////////////////////////// STEP 1




var fadein_tween_box = TweenMax


////////////////////// FADE UP

.fromTo('.box_1', 1, {top:0, left:130 , repeat:0, opacity:0,}, { top:0, left:150, repeat:0 ,opacity:1, ease:Power1.easeInOut  })


var scene = new ScrollMagic.Scene({
  triggerElement: ".box_1",
  trigerHook:"0",
  duration: "50%",
  offset:"440"

  
})  


// set a new offset




.setTween(fadein_tween_box)
.addTo(controller);


scene.addIndicators();












});


