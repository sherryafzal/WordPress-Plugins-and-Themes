

jQuery(function($) {

	$('.loading_image').hide();
	$('#no_results').hide();
	
	

	
$('.searchboxlive').keydown(function() {
		$('.loading_image').show();

$("#result_box_height").css("cssText", "display:block !important;");
	


		if (event.keyCode == 10 || event.keyCode == 13)
			event.preventDefault();

	});

	var delay = (function() {
		var timer = 0;
		return function(callback, ms) {
			clearTimeout(timer);
			timer = setTimeout(callback, ms);
		};
	
	
	})();






	$('.searchboxlive')
			.keyup(
					function() {
						$('.loading_image').show();

						var stringsearch = $(".searchboxlive").val();
						var base_url = $("#base_url").val();
						var plugin_url = "/wp-content/plugins/fc_live_ajax_search/"
						var xmlhttp;
						if (window.XMLHttpRequest) {
							xmlhttp = new XMLHttpRequest();
						} else {
							xmlhttp = new ActiveXObject("XMLHTTP");
						}
						xmlhttp.onreadystatechange = function() {
							if (xmlhttp.readyState == 4
									&& xmlhttp.status == 200) {

								$('.loading_image').hide();

								
								
								document.getElementById("search_results_box").innerHTML = xmlhttp.responseText;
$('#search_results_box').show();

//								document.querySelector(".search_results_box").innerHTML = xmlhttp.responseText;

							}
						}

						xmlhttp.open("GET", base_url + plugin_url
								+ "fc_live_ajax_search.php?stringsearch="
								+ stringsearch, true);

						delay(function() {
							xmlhttp.send(null);
						}, 1000);

					})
}

);