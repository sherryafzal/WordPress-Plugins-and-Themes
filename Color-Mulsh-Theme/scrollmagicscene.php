<?php 


?>





<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet" type="text/css">


<link href="<?php bloginfo('template_url');?>/css/scrollmagic.css" rel="stylesheet" type="text/css">



<script src="<?php bloginfo('template_url');?>/js/scrollmagic/minified/ScrollMagic.min.js"></script>










<script>
	// init controller
	var controller = new ScrollMagic.Controller();
</script>

<div class="spacer s2"></div>
<div id="trigger1" class="spacer s0"></div>
<div id="reveal1" class="box2 blue">
	<p>I will be revealed when scrolled into view and hidden when scrolled past.</p>
	<a href="#" class="viewsource">view source</a>
</div>
<div class="spacer s2"></div>
<script>
		// build scene
		new ScrollMagic.Scene({
							triggerElement: "#trigger1",
							triggerHook: 0.9, // show, when scrolled 10% into view
							duration: "80%", // hide 10% before exiting view (80% + 10% from bottom)
							offset: 50 // move trigger to center of element
						})
						.setClassToggle("#reveal1", "visible") // add class to reveal
						.addIndicators() // add indicators (requires plugin)
						.addTo(controller);
</script>













