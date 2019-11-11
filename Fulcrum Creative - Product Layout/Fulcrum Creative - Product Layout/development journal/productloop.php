<?php


// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	// unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	//unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	// unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}


add_action('woocommerce_after_shop_loop_item_title','woocommerce_template_single_excerpt', 5);




add_action('wp_enqueue_scripts', 'override_woo_frontend_styles');
function override_woo_frontend_styles(){
    $file_general = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/productfulcrum/css/productimages.css';
    if( file_exists($file_general) ){
        wp_dequeue_style('woocommerce-general');
        wp_enqueue_style('woocommerce_custom', './wp-content/plugins/productfulcrum/css/productimages.css');
    }
}
	
	
	
	

?>


