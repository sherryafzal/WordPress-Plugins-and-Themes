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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet" type="text/css">


<link href="<?php bloginfo('template_url');?>/css/scrollmagic.css" rel="stylesheet" type="text/css">



<script src="<?php bloginfo('template_url');?>/js/scrollmagic/minified/ScrollMagic.min.js"></script>







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





<?php


/////// checks to see if slider is active, in widgets. then deploys the slider........//////
      

 if(is_active_sidebar('slider_holder')){



?>
<div class="slider-background">

<div id="slider">
  </div>
    <?php

	dynamic_sidebar('slider_holder');

  ?>  

  
 </div>

    <?php

}





?>












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



 



<div id="bar-images">

<?php if(is_active_sidebar('image-bar-1')){

	dynamic_sidebar('image-bar-1');

}?>

</div>



<?php 

if(is_active_sidebar('middle-image')){

?>

     

    </div>

    </div>
<?php
}

?>



<div id="bar-images">

<?php if(is_active_sidebar('image-bar-2')){

	dynamic_sidebar('image-bar-2');

}?>

</div>

<!-- Bar Widgets Section. this section displays the bar widgets -->







  




<!-- Body tag. -->


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










</body>











<!-- This is where the Divider near the bottom of the page is declared. -->

<?php if( get_theme_mod( 'custom_divider_block') != "" ){ ?>

 <div id="line-break" style="background-color:<?php echo get_theme_mod('custom_divider_color', '#000000'); ?>"> 


 <?php 



 echo get_theme_mod( 'custom_divider_block');

 }

 


?>



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


<footer>

<div id="footer-page">

     <?php 
     
     wp_footer();

     get_footer();
     
     
     ?>    

    </div>
</footer>
</html>