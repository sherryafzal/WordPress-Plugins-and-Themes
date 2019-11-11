<?php
/**
*  This is a theme by Fulcrum Creative.com. A lot of work has gone into making this theme happen,
*  so please respect it, and be patient because updates are garaunteed for this theme.
*  if there's something not satisfactory about this theme, do not hesitate to contact us via email.
*  you can email us at 
*                                     support@fulcrum-creative.com
*
 * Learn more about our company at http://www.fulcrum-creative.com
 *
 * @package WordPress
 * @subpackage Color_Mulsh
 * @version 0.9 Beta
 */
 ?>

<html>


<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet" type="text/css">



<body>
   
      
    <?php 



wp_footer();

if ( class_exists( 'WooCommerce' ) ) {
    // some code
 







    if (is_shop())  {
    

        


     ?>    
<?php }
else{

}
?>
    
<?php 

 if (is_product())  {
?>
   <div style = "margin-left:100px; color:white; font-size:25px; font-weight:700;margin-top:-50px;">  
  
  <?php
ECHO "OTHER PRODUCTS YOU MIGHT BE INTERESTED IN";

?>
</div>
    
        <style type="text/css" id="container">
        #content { 
margin-top:100px !important;

     }

</style>
<?php

}

?>



<footer>
<div>
<div id = "footer-page">
<table id = "footer">
    <tr>
        <td class="table_footer_single">
<div class="footer1"><?php if(is_active_sidebar('footer-sidebar-1')){dynamic_sidebar('footer-sidebar-1');}?>
</div>
</td>

<td class="table_footer_single">
<div class="footer2"><?php if(is_active_sidebar('footer-sidebar-2')){dynamic_sidebar('footer-sidebar-2');}?>
</div>
</td>
<td class="table_footer_single">
<div class="footer3"><?php if(is_active_sidebar('footer-sidebar-3')){dynamic_sidebar('footer-sidebar-3');}?>
</div>
</td>
<td class="table_footer_single">
<div class="footer4"><?php if(is_active_sidebar('footer-sidebar-4')){dynamic_sidebar('footer-sidebar-4');}?>

</div>
</td>
</tr>
</table>
</div>




<?php 

} else {
   
  }


  ?>

    
</div>
</div></footer>
</body>
</html>