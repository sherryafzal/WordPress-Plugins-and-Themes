<?php
/**
 * Plugin Name:  Fulcrum Creative - Image Loop
 * Plugin URI: http://www.fulcrum-creative.com
 * Description: This is a customizable Product Loop that handles CSS -Fulcrum Creative.com. All Rights Reserved.
 * Version: 1.0.0
 * Author: Shaheryar Afzal aka Cliff
 * Author URI: http://www.fulcrum-creative.com
 * License: Copyright.
 */
register_activation_hook( __FILE__, 'set_up_options' );





function set_up_options(){
	
	//echo "hi! welcome to the image loop plugin. PLUGIN ACTIVATED. " ;
}

function new_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

if (!function_exists('FC_woocommerce_product_excerpt'))  
{ 
     function FC_woocommerce_product_excerpt()  
     { 
     echo '<span class="excerpt">'; 
     the_excerpt(); 
     echo '</span>'; 
     } 
}

add_action( 'woocommerce_after_shop_loop_item_title', 'FC_woocommerce_product_excerpt', 10, 2); 

///////////////////////////////////////////////////////////////////////////////


//    the following function chooses the option file for the CSS OPTION you      wish to use. 


///////////////////////////////////////////////////////////////////////////////

if (!function_exists('register_plugin_styles')) {
	
	 
function register_plugin_styles($update_ops) {

      $update_ops = get_option ('css_options_value');
                if(isset($_POST['optionselect'])){
	
	
	
      $update_ops = (plugin_dir_url( __FILE__) .'css/'  . $_POST['optionselect'] . '.css');

 }
	  $this_is_a_test = get_option ('css_options_value');
	
	
	// debug echo 'this is the function css options value... value....... ' . $this_is_a_test;
	
	
	
	
 if(isset($update_ops)){


      $css_options_value = get_option('css_options_value');



    wp_register_style('css_opt', $update_ops);
	wp_enqueue_style('css_opt');
	
	update_option('css_options_value', $update_ops);
	
// debug echo 'this is the register_plugins_style function........' . $update_ops;


 }

	}
}
// ADD THE OPTIONS PAGE IN the SETTINGS MENU HEADER.


add_action('admin_menu', 'plugin_admin_add_page');


function plugin_admin_add_page() {
	
	
add_options_page('Custom_Plugin_page', 'Product Image Settings', 'manage_options', 'plugin', 'plugin_options_page');
} 

// REGISTER SETTINGS

function register_mysettings() {
 
register_setting('css_options_value', 255);

register_setting( 'optionselect', 'option1' );
  register_setting( 'optionselect', 'option2' );
  register_setting( 'optionselect', 'option3' );

}

add_action ('register_settings', 'register_mysettings');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

?>

<?php // display the admin options page

function plugin_options_page() {

?>
<div>
<h2>Select a Style - CSS OPTIONS file!</h2>

Select the style of box you would like to apply to your product images

<form name="product_options" method="post">

<body>

<p>
  <input type="radio" name="optionselect" value="option1"  checked="checked" /> Option 1<br>
  <p>
  
  <input type="radio" name="optionselect" value="option1b"> Option 1 - b<br>
  <p>
  <input type="radio" name="optionselect" value="option2"> Option 2<br>
  <p>
  <input type="radio" name="optionselect" value="option2b"> Option 2 - b<br>
  <p>
  <input type="radio" name="optionselect" value="option3"> Option 3<br />
  <p>
  <input type="radio" name="optionselect" value="option3b"> Option 3 - b<br>
  
 
<input name="Submit" type="submit" value="Save Changes" />
</form>

The option you the user, developer selected was: 

<p>
<?php 


 $outputcheck = get_option ('css_options_value');
 
 
 
 	echo $outputcheck;
}
 
add_action( 'init', 'register_plugin_styles' );
?>