<?php 




function load_css_js() {

    wp_deregister_script('jquery');
    
    
    
    
    wp_enqueue_script('color_mulsh-base', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array('jquery_custom'), null, true);
    
    
    
    wp_register_script('color_mulsh-base', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array('jquery_custom'), null, true);
    




    wp_enqueue_script('jquery_custom');
    

   
    
    }
    
    
    add_action( 'wp_footer', 'load_css_js');
    


    
function my_scripts_method() {

    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/jquery.js', array( 'jquery' )  );

}

remove_action('wp_head', 'wp_print_scripts');
remove_action('wp_head', 'wp_print_head_scripts');
add_action('wp_footer', 'wp_print_scripts', 5);
add_action('wp_footer', 'wp_enqueue_scripts', 5);



 

function register_menu() {

	register_nav_menu('header-menu', __('Menu For Header'));

}

add_action('init', 'register_menu');


add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {

    add_theme_support( 'woocommerce' );

}







// FOOTER REGISTERATION - >



add_theme_support( 'widget-customizer' );



   

function search_short_code()



{

	

	

	register_sidebar( array(

'name'          => __( 'Box for Search Shortcode', 'color_mulsh' ),

'id'            => 'search_box',

'description'   => 'BOX for Search - insert shortcode using text_box/widget.',

'before_widget' => '',

'after_widget'  => '',

'before_title'  => '',

'after_title'   => '',



) );

}



add_filter('widget_text','do_shortcode');





add_action ('widgets_init', 'search_short_code');









function slider_short_code()



{

	

	

	register_sidebar( array(

'name'          => __( 'slider shortcode', 'color_mulsh' ),

'id'            => 'slider_holder',

'description'   => 'Image Slider - insert shortcode using text_box.',

'before_widget' => '<div id = "slider">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',



) );

}







add_action ('widgets_init', 'slider_short_code');





function color_mulsh_bar_tables() 



{

	

register_sidebar( array(

'name'          => __( 'Bar Table 1', 'color_mulsh' ),

'id'            => 'bar-1',

'description'   => 'Table 1',

'before_widget' => '<div class="table1">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );

register_sidebar( array(

'name'          => __( 'Bar Table 2', 'color_mulsh' ),

'id'            => 'bar-2',

'description'   => 'Table 2',

'before_widget' => '<div class="table2">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );

register_sidebar( array(

'name'          => __( 'Bar Table 3', 'color_mulsh' ),

'id'            => 'bar-3',

'description'   => 'Table 3',

'before_widget' => '<div class="table3">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );



}



function second_row_tables() 



{



register_sidebar( array(

'name'          => __( 'Bar Table 4', 'color_mulsh' ),

'id'            => 'bar-4',

'description'   => 'Table 4',

'before_widget' => '<div class="table4">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );

register_sidebar( array(

'name'          => __( 'Bar Table 5', 'color_mulsh' ),

'id'            => 'bar-5',

'description'   => 'Table 5',

'before_widget' => '<div class="table5">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );

register_sidebar( array(

'name'          => __( 'Bar Table 6', 'color_mulsh' ),

'id'            => 'bar-6',

'description'   => 'Table 6',

'before_widget' => '<div class="table6">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );





register_sidebar( array(

'name'          => __( 'Circle Image', 'color_mulsh' ),

'id'            => 'middle-image',

'description'   => 'Image Displayed in Middle of Theme - Important',

'before_widget' => '<div id="circle_image">',

'after_widget'  => '</div>',

'before_title'  => '<h3 id="circle_image">',

'after_title'   => '</h3>',

) );





}



function color_mulsh_widgets_boxes() 



{

	

register_sidebar( array(

'name'          => __( 'Widget One', 'color_mulsh' ),

'id'            => 'wid-1',

'description'   => 'Widget One',

'before_widget' => '<div class="widget_one">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );

register_sidebar( array(

'name'          => __( 'Widget Two', 'color_mulsh' ),

'id'            => 'wid-2',

'description'   => 'Widget Two',

'before_widget' => '<div class="widget_two">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );

register_sidebar( array(

'name'          => __( 'Widget Three', 'color_mulsh' ),

'id'            => 'wid-3',

'description'   => 'Widget Three',

'before_widget' => '<div class="widget_three">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );



}



function color_mulsh_testimonials() 



{

	

register_sidebar( array(

'name'          => __( 'First Testimonial', 'color_mulsh' ),

'id'            => 'test-1',

'description'   => 'Enter First Testimonial',

'before_widget' => '<div class="test-1">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );



register_sidebar( array(

'name'          => __( 'Second Testimonial', 'color_mulsh' ),

'id'            => 'test-2',

'description'   => 'Enter Second Testimonial',

'before_widget' => '<div class="test-2">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );



register_sidebar( array(

'name'          => __( 'Third Testimonial', 'color_mulsh' ),

'id'            => 'test-3',

'description'   => 'Enter Third Testimonial',

'before_widget' => '<div class="test-3">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );



register_sidebar( array(

'name'          => __( 'Fourth Testimonial', 'color_mulsh' ),

'id'            => 'test-4',

'description'   => 'Enter Fourth Testimonial',

'before_widget' => '<div class="test-4">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );













}





function color_mulsh_triangle_images()



{

	

	

	register_sidebar( array(

'name'          => __( 'Triangle Image-UP', 'color_mulsh' ),

'id'            => 'triangle-up',

'description'   => 'Image Displayed in middle of TRIANGLE UP',

'before_widget' => '<aside id="arrow-up">',

'after_widget'  => '</aside>',

'before_title'  => '<h3 id="arrow-up">',

'after_title'   => '</h3>',

) );





register_sidebar( array(

'name'          => __( 'Triangle image-down', 'color_mulsh' ),

'id'            => 'triangle-down',

'description'   => 'Image Displayed in TRIANGLE down',

'before_widget' => '<aside id="arrow-down">',

'after_widget'  => '</aside>',

'before_title'  => '<h3 id="arrow-down">',

'after_title'   => '</h3>',

) );







}







function color_mulsh_footer_widgets() 



{

	

register_sidebar( array(

'name' => __( 'Footer 1', 'color_mulsh' ),

'id' => 'footer-sidebar-1',

'description' => 'Appears in the footer area',

'before_widget' => '<div class="footer1">',

'after_widget' => '</div>',

'before_title' => '<h3 class="widget-title">',

'after_title' => '</h3>',

) );

register_sidebar( array(

'name' => __( 'Footer 2', 'color_mulsh' ),

'id' => 'footer-sidebar-2',

'description' => 'Appears in the footer area',

'before_widget' => '<div class="footer2">',

'after_widget' => '</div>',

'before_title' => '<h3 class="widget-title">',

'after_title' => '</h3>',

) );

register_sidebar( array(

'name' => __( 'Footer 3', 'color_mulsh' ),

'id' => 'footer-sidebar-3',

'description' => 'Appears in the footer area',

'before_widget' => '<div class="footer3">',

'after_widget' => '</div>',

'before_title' => '<h3 class="widget-title">',

'after_title' => '</h3>',

) );





register_sidebar( array(

'name' => __( 'Footer 4', 'color_mulsh' ),

'id' => 'footer-sidebar-4',

'description' => 'Appears in the footer area',

'before_widget' => '<div class="footer4">',

'after_widget' => '</div>',

'before_title' => '<h3 class="widget-title">',

'after_title' => '</h3>',

) );



}





add_action ('widgets_init', 'color_mulsh_footer_widgets');









//add_action ('widgets_init', 'color_mulsh_triangle_images'); 



function color_mulsh_bar_images() 



{

	

register_sidebar( array(

'name'          => __( 'Image Bar 1', 'color_mulsh' ),

'id'            => 'image-bar-1',

'description'   => 'Image Bar 1',

'before_widget' => '<div id="bar-images">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );

register_sidebar( array(

'name'          => __( 'Image Bar 2', 'color_mulsh' ),

'id'            => 'image-bar-2',

'description'   => 'Image Bar 2',

'before_widget' => '<div class="bar-images">',

'after_widget'  => '</div>',

'before_title'  => '',

'after_title'   => '',

) );

}



add_action ('widgets_init', 'color_mulsh_bar_images');

add_action ('widgets_init', 'color_mulsh_bar_tables');

add_action ('widgets_init', 'second_row_tables');

add_action ('widgets_init', 'color_mulsh_widgets_boxes');



add_action ('widgets_init', 'color_mulsh_testimonials');



add_action( 'customize_register', 'logo_registration' );



add_action( 'after_setup_theme', 'woocommerce_support' );



add_filter('woocommerce_loop_add_to_cart_link','add_to_cart_link_revised');



function add_to_cart_link_revised() {

    echo '<class="readmore">';

     

}















// Hook into the 'after_setup_theme' action



function logo_registration( $wp_customize ) {

	

    $wp_customize->add_setting( 'the_logo' ); // Add setting for logo uploader

         

    // Add control for logo uploader (actual uploader)

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'the_logo', array(

        'label'    => __( 'Upload Logo (replaces text)', 'logo' ),

        'section'  => 'title_tagline',

        'settings' => 'the_logo',

        'transport' => 'refresh',

    ) ) );

	

}

add_action( 'customize_register', 'logo_registration' );



//  wp_enqueue_script('upload_media_widget', get_template_directory_uri() . '/js/media-upload.js', array( 'jquery' ), '1.0', true );



   ///////////////////////////////////////////////////////////////////////

  



function ms_image_editor_default_to_gd( $editors ) {

	$gd_editor = 'WP_Image_Editor_GD';



	$editors = array_diff( $editors, array( $gd_editor ) );

	array_unshift( $editors, $gd_editor );



	return $editors;

}

add_filter( 'wp_image_editors', 'ms_image_editor_default_to_gd' );









add_action( 'customize_register', 'color_mulsh_register_theme_customizer' );

/*

 * Register Our Customizer Stuff Here

 */

function color_mulsh_register_theme_customizer( $wp_customize ) {

 // Create custom panel.

 $wp_customize->add_panel( 'Custom_colors', array(

 'priority' => 500,

 'theme_supports' => '',

 'title' => __( 'Custom Divider Text', 'color_mulsh' ),

 'description' => __( 'Set editable text for certain content.', 'color_mulsh' ),

 ) );


 
 // Add Footer Text

 // Add section.

 $wp_customize->add_section( 'custom_divider_text' , array(

 'title' => __('Change Divider Text','color_mulsh'),

 'panel' => 'custom_colors',

 'priority' => 10

 ) );



////////////////////////////////////////
 


   
///////////////////////////////////////////////////////////////////////////////
 // Add setting

 $wp_customize->add_setting( 'custom_divider_block', array(

 'default' => __( 'default text', 'color_mulsh' ),

 'sanitize_callback' => 'sanitize_text'

 ) );



 $wp_customize->add_setting(

    'custom_divider_color',

    array(

        'default'   => '#000000',

        'transport' => 'refresh',

    )

);







 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(

	'label'      => __( 'Divider Color', 'mytheme' ),

	'section'    => 'custom_divider_text',

	'settings'   => 'custom_divider_color',

) ) );







 // Add control



 

 $wp_customize->add_control( new WP_Customize_Control(

 $wp_customize,

 'custom_divider_text',

 array(

 'label' => __( 'Divider Text', 'color_mulsh' ),

 'section' => 'custom_divider_text',

 'settings' => 'custom_divider_block',

 'type' => 'text'

 )

 )

 );

 // Sanitize text

 function sanitize_text( $text ) {

 return sanitize_text_field( $text );

 }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



 // Create custom panel.

 $wp_customize->add_panel( 'custom_colors', array(

 'priority' => 500,

 'theme_supports' => '',

 'title' => __( 'Custom Colors', 'color_mulsh' ),

 'description' => __( 'Set editable text for certain content.', 'color_mulsh' ),

 ) );
 


 // Add Footer Text

 // Add section.

 $wp_customize->add_section( 'custom_colors' , array(

 'title' => __('Change Colors - Main Page Settings','color_mulsh'),

 'panel' => 'custom_colors',

 'priority' => 10

 ) );



 // Add setting



 $wp_customize->add_setting(

    'custom_header_color',

    array(

        'default'   => '#000000',

    )

);

///////////////////////////////////////////////////////////////////////////////////////





$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_sticky_color', array(

	'label'      => __( 'Sticky Menu Color', 'color-mulsh' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_sticky_color',

) ) );





 $wp_customize->add_setting(

    'custom_sticky_color',

    array(

        'default'   => 'green',

        'transport' => 'refresh',

    )

);



$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_sticky_color', array(

	'label'      => __( 'Sticky Menu Color', 'color-mulsh' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_sticky_color',

) ) );


///////////////////////////////////////////////////////////////////////////////////////////////////


$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_font_menu_color', array(

	'label'      => __( 'Font Color for Menu', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_font_menu_color',

) ) );





 $wp_customize->add_setting(

    'custom_font_menu_color',

    array(

        'default'   => '#000000',

        'transport' => 'refresh',

    )

);







 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_font_menu_color', array(

	'label'      => __( 'Font Color for Menu', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_font_menu_color',

) ) );



/////////////////////////////////////////////////////////////////////////////////////////////////////





 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_color', array(

	'label'      => __( 'Header Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_header_color',

) ) );



///////////////////////////////////////////







$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_menu_color', array(

	'label'      => __( 'Header Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_menu_color',

) ) );





 $wp_customize->add_setting(

    'custom_menu_color',

    array(

        'default'   => '#000000',

        'transport' => 'refresh',

    )

);







 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_menu_color', array(

	'label'      => __( 'Menu Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_menu_color',

) ) );





///////////////////////// menu color for items  //////////////////////////////////////////////////







$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_item_color', array(

	'label'      => __( 'Menu Item Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_item_color',

) ) );





 $wp_customize->add_setting(

    'custom_item_color',

    array(

        'default'   => '#000000',

        'transport' => 'refresh',

    )

);







 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_item_color', array(

	'label'      => __( 'Menu Item Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_item_color',

) ) );



//////////////// MENU ITEM HOVER COLOR ////////////////////////////////////////////////////////





$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_hover_color', array(

	'label'      => __( 'Menu Hover Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_Hover_color',

) ) );





 $wp_customize->add_setting(

    'custom_hover_color',

    array(

        'default'   => '#000000',

        'transport' => 'refresh',

    )

);







 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_hover_color', array(

	'label'      => __( 'Menu Hover Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_hover_color',

) ) );



//////////////////////////////// custom Boxes color /////////////////////////////////////////



$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_boxes_color', array(

	'label'      => __( 'Boxes Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_boxes_color',

) ) );





 $wp_customize->add_setting(

    'custom_boxes_color',

    array(

        'default'   => '#000000',

        'transport' => 'refresh',

    )

);







 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_Boxes_color', array(

	'label'      => __( 'Boxes Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_boxes_color',

) ) );











///////////////////////////////////// footer color settings ///////////////////////////////////////////



$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_footer_color', array(

	'label'      => __( 'Footer Background Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_footer_color',

) ) );





 $wp_customize->add_setting(

    'custom_footer_color',

    array(

        'default'   => '#000000',

        'transport' => 'refresh',

    )

);







 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_footer_color', array(

	'label'      => __( 'Footer Background Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_footer_color',

) ) );



///////////////////////////////////////// Custom Rectangles Color/////////////////////////////////////////////






$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_wide_color', array(

	'label'      => __( 'Wide Boxes Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_wide_color',

) ) );





 $wp_customize->add_setting(

    'custom_wide_color',

    array(

        'default'   => '#000000',

        'transport' => 'refresh',

    )

);







 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_wide_color', array(

	'label'      => __( 'Wide Boxes Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_wide_color',

) ) );








///////////////////////////////////// Border color settings ///////////////////////////////////////////



$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_border_color', array(

	'label'      => __( 'Border Color', 'mytheme' ),

	'section'    => 'custom_colors',

    'settings'   => 'custom_border_color',
    

) ) );





 $wp_customize->add_setting(

    'custom_border_color',

    array(

        'default'   => '#000000',

        'transport' => 'refresh',

    )

);







 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_border_color', array(

	'label'      => __( 'Border Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_border_color',

) ) );



remove_theme_support('custom_background');









///////////////////////////////// CUSTOM BACKGROUND COLOR SETTING ///////////////////////////////////////////////







$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_back_color', array(

	'label'      => __( 'Background Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_back_color',

) ) );





 $wp_customize->add_setting(

    'custom_back_color',

    array(

        'default'   => '#000000',

        'transport' => 'refresh',

    )

);











 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_back_color', array(

	'label'      => __( 'background Color', 'mytheme' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_back_color',

) ) );





///////////////////////////////////// TESTIMONIALS BOX COLOR /////////////////////////////////////////////////////



$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_testimonials_color', array(

	'label'      => __( 'Testimonials Boxes Color', 'color-mulsh' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_testimonials_color',

) ) );





 $wp_customize->add_setting(

    'custom_testimonials_color',

    array(

        'default'   => '#000000',

        'transport' => 'refresh',

    )

);







 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_testimonials_color', array(

	'label'      => __( 'Testimonials Boxes Color', 'color-mulsh' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_testimonials_color',

) ) );






//////////////////////////////////////////////////





$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_slider_color', array(

	'label'      => __( 'Slider Box Color', 'color-mulsh' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_slider_color',

) ) );





 $wp_customize->add_setting(

    'custom_slider_color',

    array(

        'default'   => 'green',

        'transport' => 'refresh',

    )

);



$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_slider_color', array(

	'label'      => __( 'Slider Box Color', 'color-mulsh' ),

	'section'    => 'custom_colors',

	'settings'   => 'custom_slider_color',

) ) );








//////////////////////////////////////////////////////////////////////////






 $wp_customize->add_section( 'custom_theme_colors' , array(

 'title' => __('Change Colors as Themes','color_mulsh'),

 'panel' => 'custom_colors',

 'priority' => 10

 ) );



$wp_customize->add_setting( 'themeslug_radio_setting_id', array(

  'capability' => 'edit_theme_options',

  'default' => 'blue',

  'sanitize_callback' => 'themeslug_customizer_sanitize_radio',

  'transport' => 'refresh',

) );



$wp_customize->add_control('themeslug_radio_setting_id', array(

  'type' => 'radio',

  'section' => 'custom_theme_colors', // Add a default or your own section

  'label' => __( 'Custom Theme Color Selection' ),

  'description' => __( 'Choose Theme Colors' ),

  'choices' => array(

    'red' => __( 'Red' ),

    'blue' => __( 'Blue' ),

    'green' => __( 'Green' ),

    'none'  => __('Custom Colors'),

  ),





));

////////////////////////////// WOOCOMMERCE STUFF





 $wp_customize->add_section( 'custom_woo_colors' , array(

 'title' => __('Change Woocommerce Colors' ,'color_mulsh'),

 'panel' => 'custom_colors',

 'priority' => 10

 ) );



$wp_customize->add_setting( 'woo_themeslug_radio_setting_id', array(

  'capability' => 'edit_theme_options',

  'default' => 'WOO_blue',

  'sanitize_callback' => 'woo_themeslug_customizer_sanitize_radio',

) );



$wp_customize->add_control('woo_themeslug_radio_setting_id', array(

  'type' => 'radio',

  'section' => 'custom_woo_colors', // Add a default or your own section

  'label' => __( 'Custom Woocommerce Theme Colors' ),

  'description' => __( 'Change Woocommerce Colors as Themes' ),

  'choices' => array(

    'WOO_red' => __( 'woo Red' ),

    'WOO_blue' => __( 'woo Blue' ),

    'WOO_green' => __( 'woo Green' ),

    

  

  ),

));





///////////////////////// FONT customization color and size ///////////////////////////////////////////////



$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_font_color', array(

	'label'      => __( 'Font Color', 'mytheme' ),

	'section'    => 'custom_woo_colors',

	'settings'   => 'custom_font_color',

) ) );





 $wp_customize->add_setting(

    'custom_font_color',

    array(

        'default'   => '#000000',

        'transport' => 'refresh',

    )

);







 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_font_color', array(

	'label'      => __( 'Font Color for WC-Account Page', 'mytheme' ),

	'section'    => 'custom_woo_colors',

	'settings'   => 'custom_font_color',

) ) );

















/////////////////////////////////////////////////







 // Add control



 

 // Sanitize text

 









///////////////////////////////////////////////////////////////////////////////////////















//////////////////////////////////////////////////////////////////////////////







}

















function themeslug_customizer_sanitize_radio( $input, $setting ) {



  // Ensure input is a slug.

  $input = sanitize_key( $input );





  // Get list of choices from the control associated with the setting.

  $choices = $setting->manager->get_control( $setting->id )->choices;



  // If the input is a valid key, return it; otherwise, return the default.

  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

}





function WOO_themeslug_customizer_sanitize_radio( $input, $setting ) {



 $valid = array(

        'WOO_blue' => __('woo_blue', 'color_mulsh'),

        'WOO_green' => __('woo_green', 'color_mulsh'),

        'WOO_red' => __('woo_red', 'color_mulsh'),

    );



    if (array_key_exists($input, $valid)) {

        return $input;

    } else {

        return '';

    }

}



















add_action( 'custom-header', 'color_mulsh_custom_header' );





function color_mulsh_custom_header(){



$arg_header_custom = array(

	'flex-width'    => true,

	'width'         => 980,

	'flex-height'    => true,

	'height'        => 200,

	'default-image' => get_template_directory_uri() . '/img/1.jpg',

);


add_theme_support( 'custom-header', $arg_header_custom );


}







//////////////////////////////////

//////////////////////////////////

//////////////////////////////////

/////////

















