<html>
<head>

</head>

<?php
/**
 * Plugin Name:  Fulcrum Creative - MEdia Library Registration
 * Plugin URI: http://www.fulcrum-creative.com
 * Description: ................................
 * Version: 1.0.0
 * Author: Shaheryar Afzal aka Cliff
 * Author URI: http://www.fulcrum-creative.com
 * License: Copyright.
 */
 //786


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
	
	
$path = preg_replace('/wp-content.*$/','',__DIR__);


register_activation_hook( __FILE__, 'media_library_folder' );






function media_library_folder(){

  register_setting( 'media_folder_custom', 255);
  register_setting('custom_media_counter', 1);

}


function plugin_registration_media(){


}



add_action('admin_menu', 'media_folder_add_page');


function media_folder_add_page() {
	
	
add_options_page('Media_Scanner_Plugin_Page', 'Media Scanner Settings', 'manage_options', 'media-library-folder-reg', 'media_folder_reg_options');
} 








function media_folder_reg_options() {

?>
<div>
<h2>Enter Path of Libary Folder</h2>
<?php
echo $media_path;
echo $current_path;
?>
<form name="media_folder_path" method="post">

<body>

<p>
 
  <p>
  




 <?php
 
 
 $current_path = get_option('media_folder_custom');
 $current_count = get_option('custom_media_counter');

 ?>

  
  
   <input type="text" name="media_path" value = <?php echo $current_path?>><br>
  <?php 
  

	if (isset($_POST['media_path']) && ($_POST['media_path'] != null)) {
    $media_path =  $_POST['media_path'];
    $current_path =  $media_path;
      update_option ('media_folder_custom', $current_path);
      update_option ('custom_media_counter', "1");

  }

 ?> 
  
 
  


  
 <?php 
 
 
 
 

  
 
	   
  
echo "use the short code [media-scanner] in the front end to scan the directory defined here: ";
 
?>
<input name="submit" type="submit" value="Save Directory" />

</form>

The Current Path is currently Set to:

<p>
<?php 


// $outputcheck = get_option ('css_options_value');

$a = 0;
echo $a;

 global $current_path;
 
  $current_path = get_option('media_folder_custom');
  
  

//do_action('admin_init', 'scan_dir');
  
 echo $current_path;
 




}




//$glob_url = glob($dir);

function scanner_front_end(){
  
  



?>



<form name="media_folder_frontend" method="post" action="<?php plugin_dir_path( __FILE__ ) . "/media_library_folder-reg.php"?>">


<?php





echo "Press to Scan Directories"; 

//add_action ('scan_media', 'scan_directories');
?>




<input name="add_files" type="submit" value="Add files" />
</form>

<?php 
 if(isset($_POST['add_files'])){
           
           

$run_value = 1;


scan_directories();

}else{

  $run_value = 0;
}


?>
<?php 


?>

<?php


}

/*
function recursiveGlob($dir, $ext) {
    $globFiles = glob("$dir/*.$ext");
    $globDirs  = glob("$dir/*", GLOB_ONLYDIR);

    foreach ($globDirs as $dir) {
        recursiveGlob($dir, $ext);
    }

    foreach ($globFiles as $file) {
      
    global $videos_list;
    
 
return $file;
 print "$file"; ?><br><?php // Replace '\n' with '<br />' if outputting to browser
  

    } 

  //  $video_list = array($file);
   //  return $video_list;
}


*/







function scan_directories(){



if(!function_exists('wp_get_current_user')) {
  
}


$current_count = get_option('custom_media_counter');

 

  $plugin_url = plugin_dir_url(__FILE__); 

  $base_url = get_theme_root();

$base_url = str_replace('/themes', '', $base_url);

$site_url_name = site_url();
$site_url_array = wp_upload_dir(); 

$site_url = wp_basename($site_url_array['baseurl']);


$dir_of_files = get_option('media_folder_custom');

$dir    = $base_url . "/" . $dir_of_files . "/";

echo $dir;

//echo $site_url;


$vid_list = array();


$it = new RecursiveDirectoryIterator($dir);
$display = Array ( 'mp4', 'jpg');
foreach(new RecursiveIteratorIterator($it) as $file)
{
    if (in_array(strtolower(array_pop(explode('.', $file))), $display))
       
       $vid_list[] = $file;

      //  echo $hey->$file . "<br/> \n";

        
}


//$hey = array($file);

//$videos = recursiveGlob($dir, 'mp4');



//$videos  = glob($dir  . '*.mp4');
//$videos_sub2 = array(recursiveGlob($dir . "/*", 'mp4'));
//$videos_sub = array(recursiveGlob($dir,  'mp4'));
//$videos = array(recursiveGlob($dir . "/*", 'mp4'));
//$result = array_merge($videos, $videos_sub);

//echo recursiveGlob($dir, 'mp4');



//print_r ($video_list);
//$vid_list = array($file);




foreach ( $vid_list as $key=>$video ) {

update_option ('custom_media_counter', null);

//$vid_list = array(recursiveGlob($dir, 'mp4'));

$output_path = $video->getPath();

$subdir =(dirname($video));




//$upload_dir   = wp_upload_dir();
//$upload_directory = basename($upload_directory['dirname']);


$file_name =  basename($video->getPathname());

$string_spl = $video->getpathname();


$base_url_basic = site_url(); 

 $current_path = get_option('media_folder_custom');
$current_path2 = basename($currentpath);



$str = $string_spl;

preg_match("/uploads(.*)/", $str, $goto_url);

foreach ($goto_url as $gotourl){

 $text = $gotourl;
  $rep = "/";
$gotourl = preg_replace( '/\\\\{1}/',$rep,$text);


}

//$output_site = $base_url . $site_url . "/" . $subdir . "/" . $file_name;


$output_url = $base_url_basic . "/wp-content/" . $site_url . $gotourl;
//$output_url = $video;













global $wpdb;
//$image_src = $file_name;
$query ="SELECT COUNT(*) FROM $wpdb->posts WHERE post_title='$file_name'";



//$count = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE 'post_title' LIKE '$file_name'");


$count = intval($wpdb->get_var($query));




echo '<pre>';

         echo "current_path is : ";
         
         echo $current_path;
         echo "\n";
        
         echo "output_url is   : ";
                 print_r($output_url);
             echo "\n"; 
         echo "file_name is :";
         echo $file_name;

             echo "\n"; 

             echo "currentpath2 VARIABLE :    " . $current_path2;

              echo "\n"; 

             echo "goto_url VARIABLE :    ";
             print_r ($gotourl);

 echo "\n";
echo $video_list;
 echo "\n";

echo "COUNT value is " . $count;

print_r ($videos);



        echo  '</pre>';


$key_value = get_option('custom_media_counter');


update_option ('custom_media_counter', $key);






if($count == 0){


    
include_once( ABSPATH . 'wp-admin/includes/image.php' );
include_once( ABSPATH . 'wp-content/plugins/woocommerce/includes/abstracts/abstract-wc-product.php');


require_once( ABSPATH . 'wp-admin/includes/media.php' );


$file_path =$output_url;
$file_url = $output_url;
$wp_filetype = wp_check_filetype($file, null);



$attach_id = wp_insert_attachment( $attachment, $filename, $parent_post_id );


$attachment = array(
    'guid'           => $file_url,
    'post_mime_type' => $wp_filetype['type'],
    'post_title'     => $file_name,
    'post_status'    => 'inherit',
    'post_date'      => date('Y-m-d H:i:s')
);


$attachment_id = wp_insert_attachment($attachment, $file_path);
$attachment_data = wp_generate_attachment_metadata($attachment_id, $file_path);
wp_update_attachment_metadata($attachment_id, $attachment_data);

$post_id = $attachment['guid'];

 //$output = wp_get_attachment_url( $post_id); 

$run_Value = 0;


$my_post = array(
  'post_title'    => $file_name,
  'post_content'  => $output_url,
  'post_status'   => 'publish',
  'post_author'   => 1,
  'post_category' => array( 8,39 )
);
 
// Insert the post into the database



//$wp_filetype = wp_check_filetype( $getImageFile, null );


wp_insert_post( $my_post, $file_name, $post_id );



echo " the out put variable outputs : " . $output;


 

}


}





$count2 = $count2 + 1;

echo "The Current Count is :    " . $count . " and count2 is   :  " . $count2;


}





//add_action ('scanner_media', 'scan_dir_main');


add_shortcode ( 'media_scanner', 'scanner_front_end' );




 


//$file_name = $current_path;















/*
function main_mechanism($current_path){


$file_name = $current_path;
$file_path = $current_path;
$file_url = $current_path;
$wp_filetype = wp_check_filetype($file, null);
$attachment = array(
    'guid'           => $file_url,
    'post_mime_type' => $wp_filetype['type'],
    'post_title'     => $file_name,
    'post_status'    => 'inherit',
    'post_date'      => date('Y-m-d H:i:s')
);
$attachment_id = wp_insert_attachment($attachment, $file_path);
$attachment_data = wp_generate_attachment_metadata($attachment_id, $file_path);
wp_update_attachment_metadata($attachment_id, $attachment_data);

}
*/


