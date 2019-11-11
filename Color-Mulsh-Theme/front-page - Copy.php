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





<!-- This is the FRONTPAGE LOOP. frontpage.php  --> 




<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet" type="text/css">







<!DOCTYPE html>

<html>



       



<head>




<?php 


/////// tags to get the Header working/ you need both these tags.
wp_head();

get_header();
//wp_head();





 ?>



</head> 

 



<body>

<div>

<?php 





///////////////////////////////////////////////////










//////////////////////////////////////////////////////////







?>

</div>




 
<div id="circle_2">
</div>


<div class="straight_line">
</div>



<div class="straight_line_2">
</div>


<?php


/////// checks to see if slider is active, in widgets. then deploys the slider........//////
      

 if(is_active_sidebar('slider_holder')){



?>

<div id="slider">

    <?php

	dynamic_sidebar('slider_holder');

  ?>  

    </div>

    <?php

}





?>







   <break>




<!-- Tables and their HTML / CSS code. !-->


    <div id="table">

<table>











        

            <tr class="table_row">

                <td class="table_div">



<?php







if(is_active_sidebar('bar-1')){

dynamic_sidebar('bar-1');

}

?>



</td>



<td class="table_div">



<?php

if(is_active_sidebar('bar-2')){

dynamic_sidebar('bar-2');

}

?>



</td>

<td class="table_div">

<?php

if(is_active_sidebar('bar-3')){

dynamic_sidebar('bar-3');

}



?>

</td>

</tr>





<tr>



    <td class="table_div">

 

<?php







if(is_active_sidebar('bar-4')){

dynamic_sidebar('bar-4');

}

?>



</td>

<td class="table_div">







<?php

if(is_active_sidebar('bar-5')){

dynamic_sidebar('bar-5');

}

?>



</td>

<td class="table_div">

<?php

if(is_active_sidebar('bar-6')){

dynamic_sidebar('bar-6');

}



?>

</td>

</tr>

</table>

</div>

</div>





<!-- Body tag. -->

<div id="body-layer2">

</div>











</div>













 <div id="main-text"> 



<?php
/////// checks if the post setting is active in Wordpress.
/////// if it isn't, it will deploy content from the pages area.
if ( have_posts() ) : while ( have_posts() ) : the_post();

 

 the_content();

 

endwhile;



else:

  _e('Sorry, no posts matched your criteria.'); 

endif;

?>

 



</div>

<?php


    

 



?>



</div>

</div>





 </div>










<!-- Where the Bar images are declared..... Set the Images in the Widgets Section. -->
 

<div id="bar-images">

<?php if(is_active_sidebar('image-bar-1')){

	dynamic_sidebar('image-bar-1');

}?>

</div>



<?php 

if(is_active_sidebar('middle-image')){

?>

<div id="profile-pic-wrap">

 <div id="profile-pic">

        

 <?php 



dynamic_sidebar('middle-image');

}

?>

        

     

    </div>

    </div>







<div id="bar-images">

<?php if(is_active_sidebar('image-bar-2')){

	dynamic_sidebar('image-bar-2');

}?>

</div>

<!-- Bar Widgets Section. this section displays the bar widgets -->





<?php




$theme_color_setting =  get_theme_mod('themeslug_radio_setting_id');




if ($theme_color_setting == 'red'){
    
?>

<style type="text/css">

div.bar-widgets-1, div.bar-widgets-2, div.bar-widgets-3 { 

    
     background-color:yellow !important;



}    

</style>


<?php




}
   





if ($theme_color_setting == 'green'){
    
?>

<style type="text/css">

div.bar-widgets-1, div.bar-widgets-2, div.bar-widgets-3 { 

    

     background-color:orange !important;



}    

</style>


<?php


}





if ($theme_color_setting == 'blue'){
    
?>

<style type="text/css">

div.bar-widgets-1, div.bar-widgets-2, div.bar-widgets-3 { 

    


   

     background-color:black !important;
    color: white;


}    

</style>


<?php




}



if ($theme_color_setting == 'none'){

?>

<style type="text/css">

div.bar-widgets-1, div.bar-widgets-2, div.bar-widgets-3 { 

    


    <?php $wide_color = get_theme_mod('custom_wide_color');?>

     background-color:<?php echo $wide_color?> !important;



}    

</style>


<?php




}

?>



<table>

<?php if(is_active_sidebar('wid-1')){
?>

<div id="bar-widgets">

<tr><div class="bar-widgets-1">









    <?php
	dynamic_sidebar('wid-1');

?>
?> </div>
</div></tr>

<?php
}?>





<?php if(is_active_sidebar('wid-2')){



?>



<tr>

<div class="bar-widgets-2">


<?php

    dynamic_sidebar('wid-2');
    


    ?>

</div></tr>
<?php
}?>




<?php if(is_active_sidebar('wid-3')){

?>

<tr>

<div class="bar-widgets-3">
<?php
	dynamic_sidebar('wid-3');



?>
    </div>

</tr>

</table>
</div>
<?php


}?>








<table>

<tr>

<?php
////// this is where the testimonials section is.....///////////

    if(is_active_sidebar('test-1')){

        

        ?>
        
        
        
        <div id = "test-text">

           <p> TESTIMONIALS;

</p>

</div>

<?php

}



?>

 

</tr>

</table>

















               <?php









/////// the different boxes for testimonials......////////////////////



if(is_active_sidebar('test-1')){

?>



<div id="testimonials">

<table>

        

            <tr class="test-1">

              

              

              

    <?php           





dynamic_sidebar('test-1');

}

?>

</tr>





<tr class="test-2">



<?php

if(is_active_sidebar('test-2')){

dynamic_sidebar('test-2');

}

?>

</tr>



<tr class="test-3">

<?php

if(is_active_sidebar('test-3')){

dynamic_sidebar('test-3');

}

?>

</tr>



<tr class="test-4">

<?php

if(is_active_sidebar('test-4')){

dynamic_sidebar('test-4');

}

?>



</tr>



</div>

<tr>



</table>

</div>

 


<!-- This is where the Divider near the bottom of the page is declared. -->

<?php if( get_theme_mod( 'custom_divider_block') != "" ){ ?>

 <div id="line-break" style="background-color:<?php echo get_theme_mod('custom_divider_color', '#000000'); ?>"; 

         </style>

 <?php 



 echo get_theme_mod( 'custom_divider_block');

 ?> </div><?php

 }

 

  ?>



   







</div>













</body>









</div>

</div>











 </div>

</div>



 <footer>
<!-- Footer -->
<div id="footer-page">

     <?php 
     
     wp_footer();

     get_footer(); ?>    

    </div>
</footer>
 </html>