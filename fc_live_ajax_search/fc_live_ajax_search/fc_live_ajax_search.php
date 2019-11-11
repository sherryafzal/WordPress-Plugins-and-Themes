<?php
/**
 * Plugin Name: Fulcrum Creative - AJAX SEARCH
 * Plugin URI: http://www.fulcrum-creative.com
 * Description: This is from Fulcrum Creative's Suite of Plugins - AJAX SEARCH.
 * All Rights Reserved.
 * Version: 0.8.5
 * Author: Fulcrum Creative
 * Author URI: http://www.fulcrum-creative.com
 * License: Copyright.
 */
// 786
// ///////// This is Where wp-load is loaded into the wordpress register. without this the plugin may malfunction./////////////////
$path = preg_replace ( '/wp-content.*$/', '', __DIR__ );
require ($path . 'wp-load.php');

// Disable caching and take care of Access Control.
header ( 'Cache-Control: no-cache' );
header ( 'Pragma: no-cache' );
header ( 'Access-Control-Allow-Origin: *' );

add_action ( 'admin_footer', 'ajax_enqueue' );

// ///////////////// Begin Adding TABS for the Config Screen ////////////////////////////
function add_livesearch_tabs() {
	
	// ////////// TITLE AREA ///////////////////////
	?>
<html style="height: auto;">

<h2>Fulcrum Creative's AJAX LIVESEARCH OPTIONS</h2>
Set Parameters for the LIVESEARCH Plugin.
<p>
Use the Shortcode <b>[fc_livesearch]</b> on your pages to use the plugin
</p>

<h2 class="nav-tab-wrapper">

<a href="?page=fc-livesearch-settings&tab=search-options" class='nav-tab'<?php  if($_GET["tab"] == "search-options"){echo "nav-tab-active";} ?>">Search	Box Style Options</a> <a href="?page=fc-livesearch-settings&tab=results-options" class='nav-tab'<?php  if($_GET["tab"] == "results-options"){echo "class=nav-tab-active";}?>">Results Box Style Options</a>

</h2>
<?php
	
	$options_page = fc_options_page ();
	$resultbox_page = fc_results_page ();
}
function fc_results_page() {
	if (isset ( $_GET ["tab"] )) {
		if ($_GET ["tab"] == "results-options") {
			
?>
<div id="results_box_id">
<form name="search_options" method="post">
<?php
			
			// ///////// RESULT BOX SETTINGS - Values that POST etc //////////////////////////////////////
			
			$update_results_options = get_option ( 'live_results_values' );
			
			$rs_positionbuttonvalue = $update_results_options ['rs_position'];
			$rs_floatbuttonvalue = $update_results_options ['rs_float_value'];
			
			$rs_paddingTOP_value = $update_results_options ['rs_paddingTOP'];
			
			$rs_color_value = $update_results_options ['rs_colorValue'];
			
			$rs_width_value = $update_results_options ['rs_Width'];
			$rs_height_value = $update_results_options ['rs_Height'];
			
			$rs_boxbackground_value = $update_results_options ['rs_boxbackground'];
			$rs_boxradius_value = $update_results_options ['rs_boxradius'];
			$rs_bordercolor_value = $update_results_options ['rs_bordercolor'];
			
			$rs_fontsize_value = $update_results_options ['rs_fontsize'];
			$rs_fontweight_value = $update_results_options ['rs_fontweight'];
			
			$img_width = $update_results_options ['img_Width'];
			$img_height = $update_results_options ['img_Height'];
			$rs_z_index_value = $update_results_options['rs_z_index'];
			
			if (isset ( $_POST ['img_Width'] ) or ($_POST ['img_Height'])) {
				
				$rs_positionbuttonvalue = $_POST ['rs_position'];
				$rs_floatbuttonvalue = $_POST ['rs_float_value'];
				
				$rs_paddingTOP_value = $_POST ['rs_paddingTOP'];
				
				$rs_color_value = $_POST ['rs_colorValue'];
				
				$rs_width_value = $_POST ['rs_Width'];
				$rs_height_value = $_POST ['rs_Height'];
				
				$rs_boxbackground_value = $_POST ['rs_boxbackground'];
				$rs_boxradius_value = $_POST ['rs_boxradius'];
				$rs_bordercolor_value = $_POST ['rs_bordercolor'];
				
				$rs_fontsize_value = $_POST ['rs_fontsize'];
				$rs_fontweight_value = $_POST ['rs_fontweight'];
				
				$img_width = $_POST ['img_Width'];
				$img_height = $_POST ['img_Height'];
				$rs_z_index_value = $_POST['rs_z_index'];
			}
			
?>
<p>

<?php  ////////////////////// RESULTS TABLE DISPLAY OPTIONS and PARAMETERS /////////////////////////////////////?>

<b>RESULTS Table Display Options</b>
		
		
<p>

<b>Set Image Size :</b>
		
		
<p>
		
		
<div style="float: none; margin-top: 0px; margin-left: 0px;">
Width <input type="number" min="0" max="400" step="1" name="img_Width" value="<?php echo $img_width?>">px.&nbsp&nbsp&nbsp&nbsp&nbsp



Height<input type="number" min="0" max="400" step="1" name="img_Height" value="<?php echo $img_height?>">px.

</div>
<p>
		
		
<p>

<b>Set Results TABLE parameters</b>
		
		
<p>

Width <input type="number" min="0" max="800" step="1" name="rs_Width" value="<?php echo $rs_width_value?>">px. &nbsp&nbsp&nbsp&nbsp&nbsp
Height<input type="number" min="0" max="800" step="1" name="rs_Height" value="<?php  echo $rs_height_value?>">px. <br> <b>Font Options</b>
	
<p>

Font Size &nbsp&nbsp&nbsp :&nbsp&nbsp&nbsp&nbsp<input type="number"	min="4" max="50" step="1" name="rs_fontsize" value="<?php echo $rs_fontsize_value?>">px.
	
<p>

font Weight :&nbsp&nbsp&nbsp<input type="number" min="50" max="900"	step="10" name="rs_fontweight" value="<?php echo $rs_fontweight_value?>">(weight value. in 100s.)
		
		
<p>






<b> Box Display Options</b>
		
		
<p>
<b>Border Radius &nbsp&nbsp :&nbsp&nbsp&nbsp&nbsp </b><input type="number" min="0" max="300" step="1" name="rs_boxradius" value="<?php echo $rs_boxradius_value?>">
		
<p>
		
<p>

<b>Text Color</b>
		
<div style="float: left; margin-top: -35px; margin-left: 150px;"><input type="color" name="rs_colorValue" value="<?php echo $rs_color_value?>">
</div>

<p>

<b>Background Color</b>
		
		
<div style="float: left; margin-top: -35px; margin-left: 150px;">
<input type="color" name="rs_boxbackground"	value="<?php echo $rs_boxbackground_value?>">
</div>

<p>

<b>Border Color</b>
		
<div style="float: left; margin-top: -35px; margin-left: 150px;">
<input type="color" name="rs_bordercolor" value="<?php echo $rs_bordercolor_value?>">
</div>
<p>
<b>Z-Index for Results Box</b>
<input type="number" min="0" max="2000" step="1" name="rs_z_index" value="<?php echo $rs_z_index_value?>">
		
		
		
<p>
  
<?php submit_button(); ?>


</div>

<?php
			
			// ///////////////////////// ARRAY FOR RESULTS TABLE and it's ARGUMENTS //////////////////////////////////////////////
			
			$results_args = array (
					
					'rs_position' => $_POST ['rs_position'],
					'rs_float_value' => $_POST ['rs_float_value'],
					
					'img_Width' => $_POST ['img_Width'],
					'img_Height' => $_POST ['img_Height'],
					
					'rs_marginL' => $_POST ['rs_marginL'],
					'rs_marginR' => $_POST ['rs_marginR'],
					'rs_marginT' => $_POST ['rs_marginT'],
					'rs_marginB' => $_POST ['rs_marginB'],
					
					'rs_paddingTOP' => $_POST ['rs_paddingTOP'],
					'rs_paddingTOPR' => $_POST ['rs_paddingTOPR'],
					'rs_paddingTOPT' => $_POST ['rs_paddingTOPT'],
					'rs_paddingTOPB' => $_POST ['rs_paddingTOPB'],
					
					'rs_colorValue' => $_POST ['rs_colorValue'],
					
					'rs_Width' => $_POST ['rs_Width'],
					'rs_Height' => $_POST ['rs_Height'],
					
					'rs_fontsize' => $_POST ['rs_fontsize'],
					'rs_fontweight' => $_POST ['rs_fontweight'],
					
					'rs_boxbackground' => $_POST ['rs_boxbackground'],
					'rs_bordercolor' => $_POST ['rs_bordercolor'],
					'rs_boxradius' => $_POST ['rs_boxradius'], 
					'rs_z_index' => $_POST ['rs_z_index'] 
			
			);
			
			if (isset ( $_POST ['img_Width'] ) or ($_POST ['img_Height'])) {
				$update_results_options = update_option ( 'live_results_values', $results_args );
			}
		}
	}
}
function fc_options_page() {
	?>
	<div>
<?php
	if (isset ( $_GET ["tab"] )) {
		if ($_GET ["tab"] == "search-options") {
			
?>
 <div id="search_box_id">
		<form name="search_options" method="post">


<?php
////////////////// SET OPTIONS OF THE SEARCH OPTIONS to use in IN-LINE CSS /////////////////////////////////
			$update_search_options = get_option ( 'live_search_values' );
			
			$positionbuttonvalue = $update_search_options ['sb_position'];
			$floatbuttonvalue = $update_search_options ['sb_float_value'];
			
			$sb_margin_left_value = $update_search_options ['sb_marginL'];
			$sb_margin_right_value = $update_search_options ['sb_marginR'];
			$sb_margin_top_value = $update_search_options ['sb_marginT'];
			$sb_margin_bottom_value = $update_search_options ['sb_marginB'];
			
			$rs_margin_left_value = $update_search_options ['sb_marginL'];
			$rs_margin_right_value = $update_search_options ['sb_marginR'];
			$rs_margin_bottom_value_margin_top_value = $update_search_options ['sb_marginT'];
			$rs_margin_bottom_value = $update_search_options ['sb_marginB'];
			
			$sb_padding_left_value = $update_search_options ['sb_paddingL'];
			$sb_padding_right_value = $update_search_options ['sb_paddingR'];
			$sb_padding_top_value = $update_search_options ['sb_paddingT'];
			$sb_padding_bottom_value = $update_search_options ['sb_paddingB'];
			
			$sb_color_value = $update_search_options ['sb_colorValue'];
			
			$sb_width_value = $update_search_options ['sb_Width'];
			$sb_height_value = $update_search_options ['sb_Height'];
			
			$sb_boxbackground_value = $update_search_options ['sb_boxbackground'];
			$sb_boxradius_value = $update_search_options ['sb_boxradius'];
			$sb_bordercolor_value = $update_search_options ['sb_bordercolor'];
			$sb_z_index_value = $update_search_options['sb_z_index'];

			if (isset ( $_POST ['sb_position'] ) or ($_POST ['sb_float_value'])) {
				
				$positionbuttonvalue = $_POST ['sb_position'];
				$floatbuttonvalue = $_POST ['sb_float_value'];
				
				$sb_margin_left_value = $_POST ['sb_marginL'];
				$sb_margin_right_value = $_POST ['sb_marginR'];
				$sb_margin_top_value = $_POST ['sb_marginT'];
				$sb_margin_bottom_value = $_POST ['sb_marginB'];
				
				$rs_margin_left_value = $_POST ['sb_marginL'];
				$rs_margin_right_value = $_POST ['sb_marginR'];
				$rs_margin_top_value = $_POST ['sb_marginT'];
				$rs_margin_bottom_value = $_POST ['sb_marginB'];
				
				$sb_color_value = $_POST ['sb_colorValue'];
				
				$sb_width_value = $_POST ['sb_Width'];
				$sb_height_value = $_POST ['sb_Height'];
				$sb_boxbackground_value = $_POST ['sb_boxbackground'];
				$sb_boxradius_value = $_POST ['sb_boxradius'];
				$sb_bordercolor_value = $_POST ['sb_bordercolor'];
				$sb_z_index_value = $_POST['sb_z_index'];
			}
			
			// //////////////////// SEARCH BOX DISPLAY OPTIONS ///////////////////////////////////// ?>
<p>
<b>SEARCH BOX SETTINGS.</b><br> <b>Set Position to</b>
			
			
<p>
<input type="radio" name="sb_position" value="relative" <?php if($positionbuttonvalue == "relative") { echo 'checked="checked"';} ?>>Relative<br>
<input type="radio" name="sb_position" value="fixed" <?php if($positionbuttonvalue == "fixed") { echo 'checked="checked"';} ?>>Fixed<br>
<input type="radio" name="sb_position" value="Absolute" <?php if($positionbuttonvalue == "Absolute") { echo 'checked="checked"';} ?>>Absolute<br>
<input type="radio" name="sb_position" value="None" <?php if($positionbuttonvalue == "None") { echo 'checked="checked"';} ?>>None<br>
			
			
<p>
<b>Float Value</b>
			
			
<p>
<input type="radio" name="sb_float_value" value="left" <?php if($floatbuttonvalue == "left") { echo 'checked="checked"';} ?>>
Left<br>
			
			
<p>
<input type="radio" name="sb_float_value" value="right"	<?php if($floatbuttonvalue == "right") { echo 'checked="checked"';} ?>>
right<br>
			
			
<p>
<input type="radio" name="sb_float_value" value="none" <?php if($floatbuttonvalue == "none") { echo 'checked="checked"';} ?>>
none<br>
			
			
<p>Margins
			
			
<p>

Top<input type="number" min="-800" max="800" step="1" name="sb_marginT" value="<?php echo $sb_margin_top_value?>"> 
Right<input type="number" min="-800" max="800" step="1" name="sb_marginR" value="<?php echo  $sb_margin_right_value?>">
Left<input type="number" min="-800" max="800" step="1" name="sb_marginL" value="<?php echo $sb_margin_left_value?>"> 
Bottom<input type="number" min="-800" max="800" step="1" name="sb_marginB" value="<?php echo  $sb_margin_bottom_value?>">
			
<p>
			
<p>

Search Box Text Color : <input type="color" name="sb_colorValue" value="<?php echo $sb_color_value?>">
			
			
<p>



Width<input type="number" min="0" max="800" step="1" name="sb_Width" value="<?php echo $sb_width_value?>"> Height<input type="number" min="0" max="200" step="1" name="sb_Height" value="<?php echo $sb_height_value?>">
			
			
<p>

Box Background Color : <input type="color" name="sb_boxbackground" value="<?php echo $sb_boxbackground_value?>">
			
<p>

Border Color : <input type="color" name="sb_bordercolor" value="<?php echo $sb_bordercolor_value?>">
Border Radius : <input type="number" min="0" max="300" step="1" name="sb_boxradius"	value="<?php echo $sb_boxradius_value?>"> <br> <br>
<p>
Z Index for Search Box :  <input type="number" min="0" max="2000" step="1" name="sb_z_index" value="<?php echo $sb_z_index_value?>"> <br> <br>

			
			
<?php submit_button(); ?>

		
</form>
</div>
 <?php 
// //////////////////////// ARRAY OF VALUES FOR THE SEARCH BOX - to be used for INLINE- CSS ////////////////////////////////
			
			$search_args = array (
					'sb_position' => $_POST ['sb_position'],
					'sb_float_value' => $_POST ['sb_float_value'],
					
					'sb_marginL' => $_POST ['sb_marginL'],
					'sb_marginR' => $_POST ['sb_marginR'],
					'sb_marginT' => $_POST ['sb_marginT'],
					'sb_marginB' => $_POST ['sb_marginB'],
					
					'sb_paddingL' => $_POST ['sb_paddingL'],
					'sb_paddingR' => $_POST ['sb_paddingR'],
					'sb_paddingT' => $_POST ['sb_paddingT'],
					'sb_paddingB' => $_POST ['sb_paddingB'],
					
					'sb_colorValue' => $_POST ['sb_colorValue'],
					
					'sb_Width' => $_POST ['sb_Width'],
					'sb_Height' => $_POST ['sb_Height'],
					
					'sb_boxbackground' => $_POST ['sb_boxbackground'],
					'sb_bordercolor' => $_POST ['sb_bordercolor'],
					'sb_boxradius' => $_POST ['sb_boxradius'],
					'sb_z_index' => $_POST['sb_z_index']
			
			);
			
			if (isset ( $_POST ['sb_position'] ) or ($_POST ['sb_float_value'])) {
				$update_search_options = update_option ( 'live_search_values', $search_args );
			}
		}
	}
	
	$update_options_display = get_option ( 'live_search_values' );
	$update_options_display_results = get_option ( 'live_results_values' );
}
function process_Search_options() {
}

add_action ( 'admin_menu', 'plugin_admin_add_page' );
function plugin_admin_add_page() {
	
	// /////////////////// WHERE THE PAGES ARE BEING ADDED for the DASHBOARD in WORDPRESS /////////////////////////////////////
	add_menu_page ( 'fulcrum-creative suite', 'Fulcrum-Creative Suite', 'Fulcrum-Creative Suite', 'fc-top-slug', 'fulcrumcreative' );
	
	add_submenu_page ( 'fc-top-slug', 'Fulcrum Creative', 'Fulcrum Creative', 'manage_options', 'FC-intro', 'fulcrumcreative' );
	
	add_submenu_page ( 'fc-top-slug', 'FC - LiveSearch Settings', 'FC - LiveSearch Settings', 'manage_options', 'fc-livesearch-settings', 'add_livesearch_tabs' );
	function fulcrumcreative() {
		
		// ///////////////////////// THE COMPANY PAGE ///////////////////////////////////////////////////////////
		include ("fulcrumcreative.php");
		
		die ();
	}
}
function searchbox_custom_css() {
	
	// //////////////////// FOR The Search Box INLINE-CSS values ////////////////////////////////////////////////////
	$search_css_values_array = get_option ( 'live_search_values' );	
	$sb_position = $search_css_values_array ['sb_position'];
	$sb_float_value = $search_css_values_array ['sb_float_value'];	
	$sb_margin_left = $search_css_values_array ['sb_marginL'];
	$sb_margin_right = $search_css_values_array ['sb_marginR'];
	$sb_margin_top = $search_css_values_array ['sb_marginT'];
	$sb_margin_bottom = $search_css_values_array ['sb_marginB'];	
	$sb_padding_left = $search_css_values_array ['sb_paddingL'];
	$sb_padding_right = $search_css_values_array ['sb_paddingR'];
	$sb_padding_top = $search_css_values_array ['sb_paddingT'];
	$sb_padding_bottom = $search_css_values_array ['sb_paddingB'];	
	$sb_color = $search_css_values_array ['sb_colorValue'];	
	$sb_width = $search_css_values_array ['sb_Width'];
	$sb_height = $search_css_values_array ['sb_Height'];	
	$sb_boxbackground_value = $search_css_values_array ['sb_boxbackground'];
	$sb_boxradius_value = $search_css_values_array ['sb_boxradius'];
	$sb_bordercolor_value = $search_css_values_array ['sb_bordercolor'];
	$sb_z_index_value = $search_css_values_array['sb_z_index'];
	
	// ///////////////////SEARCH BOX INLINE - CSS ///////////////////////////////////////////
	
	
	 echo "position:" . $sb_position . ";", "float:" . $sb_float_value . ";", "width:" . $sb_width . "px !important;", "height:" . $sb_height . "px !important;", "margin:" . $sb_margin_top . "px " . $sb_margin_right . "px " . $sb_margin_bottom . "px " . $sb_margin_left . "px " . ";" , "border-color:" . $sb_bordercolor_value . ";", "border-radius:" . $sb_boxradius_value . "px;", "background-color:" . $sb_boxbackground_value . ";", "color:" . $sb_color . ";" , "z-index:" . $sb_z_index_value . "!important;";
	
}
function image_custom_css() {
	
	// //////////////////////////// IMAGE SIZE OPTION ////////////////////////////////////////////
	$results_css_values_array = get_option ( 'live_results_values' );
	
	$image_width = $results_css_values_array ['img_Width'];
	$image_height = $results_css_values_array ['img_Height'];
	
	echo "display:block;", "width:" . $image_width . "px;", "height:" . $image_height . "px;";
}
function title_custom_css() {
	
	// /////////////////////////////// SEARCH TITLE OPTIONS /////////////////////////////////////////////////////////
	$results_css_values_array = get_option ( 'live_results_values' );
	$search_css_values_array = get_option ( 'live_results_values' );
	
	$font_size = $results_css_values_array ['rs_fontsize'];
	$font_weight = $results_css_values_array ['rs_fontweight'];
	$rs_color = $results_css_values_array['rs_colorValue'];
	echo "margin-left:20px; margin-top:0px; display:block;", "float:none;", "font-weight:" . $font_weight . ";", "font-size:" . $font_size . "px;", "color:" . $rs_color . "!important;",  "position:absolute;", "text-align:justify !important;";
}
function price_custom_css() 

// //////////////////////////////////// PRICE DISPLAY OPTIONS and INLINE - CSS ///////////////////////////////////////////////
{
	$results_css_values_array = get_option ( 'live_results_values' );
	
	$font_size = $results_css_values_array ['rs_fontsize'];
	$font_weight = $results_css_values_array ['rs_fontweight'];
	$rs_color = $results_css_values_array['rs_colorValue'];
	
	echo "margin-top:" . "0px;", "display:block;", "overflow-y:" . "auto;", "right:" . "7%;", "font-size:" . $font_size . "px;", "font-weight:" . $font_weight . ";", "position:" . "absolute;", "display:table-cell;", "text-align:right;", "color:" . $rs_color . "!important;";
}
function resultsbox_custom_css() {
	
	// ////////////////////////////// RESULTS BOX CUSTOM INLINE - CSS ////////////////////////////////////////////////
	$results_css_values_array = get_option ( 'live_results_values' );
	$search_css_values_array = get_option ( 'live_search_values' );
	
	$rs_position = $results_css_values_array ['rs_position'];
	$rs_float_value = $results_css_values_array ['rs_float_value'];
	
	$rs_margin_left = $search_css_values_array ['sb_marginL'];
	$rs_margin_right = $search_css_values_array ['sb_marginR'];
	$rs_margin_top = $search_css_values_array ['sb_marginT'];
	$rs_margin_bottom = $search_css_values_array ['sb_marginB'];
	
	$rs_paddingTOP = $results_css_values_array ['rs_paddingTOP'];
	$rs_paddingTOP_right = $results_css_values_array ['rs_paddingTOPR'];
	$rs_paddingTOP_top = $results_css_values_array ['rs_paddingTOPT'];
	$rs_paddingTOP_bottom = $results_css_values_array ['rs_paddingTOPB'];
	
	$rs_color = $results_css_values_array ['rs_colorValue'];
	
	$rs_width = $results_css_values_array ['rs_Width'];
	$rs_height = $results_css_values_array ['rs_Height'];
	
	$rs_boxbackground_value = $results_css_values_array ['rs_boxbackground'];
	$rs_boxradius_value = $results_css_values_array ['rs_boxradius'];
	$rs_bordercolor_value = $results_css_values_array ['rs_bordercolor'];
	$rs_z_index_value = $results_css_values_array['rs_z_index'];


	echo "margin-left:" . $rs_margin_left . "px;", "margin-right:" . $rs_margin_right . "px;", "display:" . "block;", "padding-top:" . $rs_paddingTOP . "% !important;", "position:" . "relative" . ";", "float:" . $rs_float_value . ";", "width:" . $rs_width . "px !important;", "border-color:" . $rs_bordercolor_value . ";", "border-radius:" . $rs_boxradius_value . "px;", "background-color:" . $rs_boxbackground_value . ";", "text-align:center !important;", "margin-right:0px;", "color:" . $rs_color . "!important;", "z-index:" . $rs_z_index_value . "!important;";

}

if (! function_exists ( 'ajax_enqueue' )) {
	function ajax_enqueue() {
		
		register_setting ( 'live_search_values', 255 );
		register_setting ( 'live_results_values', 255 );
		
		// ////////////// function that enqueues AJAX and OTHER such files like javascript /////////////////////////////
		
		// $pluginurl = ['WP_PLUGIN_URL . /fc_live_ajax_search/'];
		wp_register_script ( 'ajax_search', WP_PLUGIN_URL . '/fc_live_ajax_search/scripts/fc_live_ajax_search.js', array (
				'jquery' 
		) );
	//	wp_localize_script ( 'ajax_search', WP_PLUGIN_URL . '/fc_live_ajax_search/scripts/fc_live_ajax_search.js', array (
		//		'jquery' 
	//	) );
		
		wp_localize_script ( 'ajax-script', 'ajax_object', array (
				'ajax_url' => admin_url ( 'admin-ajax.php' ) 
		) );
		
		wp_register_style ( 'ajax_css', WP_PLUGIN_URL . '/fc_live_ajax_search/css/fc_live_ajax_search.css' );
		wp_enqueue_script ( 'jquery' );
		wp_enqueue_script ( 'ajax_search' );
		
		wp_enqueue_style ( 'ajax_css' );
	}
}

add_action ( 'wp_enqueue_scripts', 'ajax_enqueue' );

// //////////////////////////// REGISTER THE PLUGIN into the WORDPRESS INFRASTRUCTURE /////////////////////////////////////////


	function register_plugin_AJAX() {
		
				// /// FORM for the SEARCH BOX ///////////////////////////////////////////////
		ob_start();
	
		$update_results_options = get_option ( 'live_results_values' );
		$update_search_options = get_option ( 'live_search_values' );
		$rs_width_value = $update_results_options ['rs_Width'];
		$rs_height_value = $update_results_options ['rs_Height'];
		$loading_height_value = $update_search_options ['sb_Height'];
		
		
		
		
		?>
<div style="position: absolute; float: left;">


<form action="wp-content/plugins/fc_live_ajax_search/fc_live_ajax_search.php">	
<input style = "<?php searchbox_custom_css();?>"  class="searchboxlive"  name = "stringsearch" type="text" placeholder="Type to search..." autocomplete="off" method = "post" onkeyup=null>
<div class="loading_image">
<img src="<?php echo (WP_PLUGIN_URL . '/fc_live_ajax_search/graphics/loading.gif')?>"  style = "width:<?php echo $loading_height_value - 10?>px !important; height:<?php echo $loading_height_value - 10?>px !important; float:right; margin-right: 20px; margin-top:<?php echo - $loading_height_value + 5?>px !important;; position:relative; vertical-align:baseline;z-index:1200;">
</div>
<div id="result_box_height" style = "height:<?php echo $rs_height_value?>px !important; overflow-x:hidden; overflow-y: auto; width: auto; display:none;">
<div id="search_results_box"></div>
</form>
</div>
<input type="hidden" id="base_url" value="<?php echo get_site_url(); ?>">
</div>

<?php 


$sidebar_contents = ob_get_clean();

return $sidebar_contents;







// ///////////////////////////// function that executes to make sure the AJAX value is read from the SEARCHBOX. /////////////////////////////////////
		
		//ajax_search_execute ();
	}
	






add_action ( 'search_ajax', 'register_plugin_AJAX', 5 );
	add_action ( 'search_ajax', 'ajax_search_execute', 5 );
 
add_shortcode ( 'fc_livesearch', 'register_plugin_AJAX' );
	



	// Short code not working multiple instances - mistaken for the SAME instance. over and over. FIX.$_COOKIE



	
	
//	add_shortcode( 'fc_livesearch', array( $this, 'register_plugin_AJAX') );







 
 
	add_shortcode ( 'fc_livesearch_widget', 'register_plugin_AJAX' );



	//add_shortcode( 'fc_livesearch_widget', array( $this, 'register_plugin_AJAX') );
	register_activation_hook ( __FILE__, 'register_plugin_AJAX' );
	


	  //$this->loader->add_action( 'search_ajax', $plugin_public, 'register_plugin_AJAX' );


	
	
	// ///////////////////////////// THE SQL QUERY //////////////////////////////////////////////////////////////
	
	if (! function_exists ( 'ajax_search_execute' )) {
		function ajax_search_execute() {
			if (isset ( $_GET ["stringsearch"] ) && $_GET ["stringsearch"] != "") {
				$stringsearch = $_GET ["stringsearch"];
				global $wpdb;
				$sql = ("


SELECT p1.*, wm2.meta_value FROM wp_posts p1 

LEFT JOIN
wp_postmeta wm1 ON (
wm1.post_id = p1.id
AND wm1.meta_value IS NOT NULL
AND wm1.meta_key = '_thumbnail_id'
  
)

LEFT JOIN wp_postmeta wm2 ON (wm1.meta_value = wm2.post_id AND wm2.meta_key = '_wp_attached_file'
AND wm2.meta_value IS NOT NULL) WHERE p1.post_title LIKE '$stringsearch%'

ORDER BY p1.post_date DESC

");
				
			
				
				$results = $wpdb->get_results ( $sql ) or die ( mysql_error () );
				
				if (count ( $results ) > 0) {
					
					foreach ( $results as $res ) {
						
						// $product = WC_Product($res->ID);
						
						$product = wc_get_product ( $res->ID );
						
						if (isset ( $product ) && ! empty ( $product )) {
							
							$post_title = $product->get_name ();
							
							$image = get_the_post_thumbnail ( $res->ID, 'thumbnail' );
							
							$search_css_values_array = get_option ( 'live_search_values' );
							$results_css_values_array = get_option ( 'live_results_values' );
							
							$image_width = $results_css_values_array ['img_Width'];
							$image_height = $results_css_values_array ['img_Height'];
							
							// $image = preg_replace ( '/(width|height)=\"\d*\"\s/', " " , $image );
							
							$price = $product->get_regular_price ();
							
							$url = get_permalink ( $res->ID );
							
							if (isset ( $url )) {
								
								echo "  ";
								?>							
							
 

<div class="wholetable"	onclick="window.location.href='<?php echo $url;?>'" style = "<?php resultsbox_custom_css();?>">

<table style = "height: <?php echo $image_height + 10?>px; ">
</style>

<tr>
<td><div>
<img  style =<?php  image_custom_css(); ?> src ="<?php echo $image;?> 
					
</style>
				
				
					
</div></td>


<td><div style = "<?php title_custom_css()?>" ><?php echo $post_title; ?></a></style>
</div></td>
<td><div style ="height: <?php echo $image_height + 10?>px; <?php price_custom_css()?>"><?php  echo $price; ?></a></style>
</div></td>
</tr>
</div>
</div>
</table>
</div>
              
<?php
}
} else {
	}
}
				
				
?>
</div>
</div>
</div>
</html>

 <?php				
				die ();
			}
		}
	}
}

add_action ( 'search_ajax', 'ajax_search_execute', 5 );

ajax_search_execute ();

add_filter('widget_text','do_shortcode');

// /////////////////////// CODE FOR THE WIDGET ///////////////////////////////////////////////////////

 

class My_Widget extends WP_Widget {
	
	/**
	 * Sets up the widgets name etc
	 */
	
public function __construct() {
	$widget_ops = array (
				'classname' => 'my_widget',
				'description' => 'The Fulcrum Creative AJAX LIVE SEARCH plugin' 
		);
		parent::__construct ( 'my_widget', 'FC Live Search', $widget_ops );
	}
public function widget($args, $instance) {
		// outputs the content of the widget
	
	
	
		echo do_shortcode ( '[fc_livesearch_widget]' );
		

		add_action ( 'search_ajax', 'register_plugin_AJAX', 10 );
		add_action ( 'search_ajax', 'ajax_search_execute', 10 );
		
		//ajax_search_execute ();
	
		
	
		
	}
public function form($instance) {
		// outputs the options form on admin
	}
public function update($new_instance, $old_instance) {
		// processes widget options to be saved
	}
}

add_action ( 'widgets_init', function () {
	register_widget ( 'My_Widget' );
} );


	add_action( 'activated_plugin', 'save_error_wpse_24278', 10, 2 );
	
	function save_error_wpse_24278( $plugin, $network_wide )
	{
		file_put_contents(
				WP_CONTENT_DIR. '/error_activation.html',
				$plugin . ob_get_contents()
				);
		//update_option( 'plugin_error',  ob_get_contents() );
	}

	
	
	
	
	
	
?>