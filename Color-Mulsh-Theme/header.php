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



<!-- This is the HEADER PAGE  header.php  -->





<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

<script src="<?php bloginfo('template_url');?>/js/menu-sticky.js"></script>

<link href="<?php bloginfo('template_url');?>/css/header.css" rel="stylesheet" type="text/css">





<head>





<div id="top_divider">









   <?php wp_head(); ?>




   <div id = "sticky-menu">
<?php wp_nav_menu( array( 'container' => '#sticky-menu', 'container_class' => '') ); 
?>

</div>






<?php wp_nav_menu( array( 'container' => '', 'container_class' => 'menu') ); 

?>

</div>


</div>





 

 <?php 






$theme_color_setting =  get_theme_mod('themeslug_radio_setting_id');




if ($theme_color_setting == 'red'){





?>



<style type="text/css" id="slider-background">

div.slider-background { 

         background-color: #471010 !important;

  

  

  }




    

  .menu-item a{
                   
                     
                   <?php $font_color_menu = get_theme_mod('custom_font_menu_color'); ?>

                   
                   
                   color:white !important;



            

             }

</style>


 <style type="text/css" id="Menu">

        #menu-container { 

                 background-color: #471010 !important;

          

          

          }

        

        



    </style>











 <style type="text/css" id="Menu">

        .menu-item { 

                 background-color: red !important;

          

          

          }

        

        



</style>











 <style type="text/css" id="Menu">

        .menu-item:hover { 



 -webkit-transition-duration: 0.4s; /* Safari */

    transition-duration: 0.4s;

                  background-color:white !important;

          

          

          }

        

        



    </style>







       <style type="text/css" id="custom-background">

            html { background-color:#471010; !important }    

       </style>









 <style type="text/css" id="header">

        #top_divider { 

            background-color: darkred !important;



     

          

          }



     </style>





<style type="text/css" id="table">

       

        div.table1, div.table2, div.table3, div.table4, div.table5, div.table6 

        

        { 



 

                  background-color: red !important;

                  color:white !important;

          

          

          }





          #testimonials > div.test-1, #testimonials > div.test-2, #testimonials > div.test-3, #testimonials > div.test-4{

                  background:darkred !important;



          }

         

        </style>





         <style type="text/css" id="footer">

       .table_footer_single{ 



                  background-color: red !important;

          

          

          }

     </style>



     <style type="text/css" id="table">

        div.table1, div.table2, div.table3, div.table4, div.table5, div.table6, #footer, #menu-container, #profile-pic, #line-break { 



                  border-color: darkred !important;

          

          

          }

         

   </style>







<?php















}











if ($theme_color_setting == 'blue'){





?>




<style type="text/css" id="slider-background">

div.slider-background { 

         background-color: #000039 !important;

  

  

  }

  

  .menu-item a{
                   
               

                   
                   
                   color:white!important;



            

             }





</style>


 <style type="text/css" id="Menu">

        #menu-container { 

                 background-color: #000039 !important;

          

          

          }



          #testimonials > div.test-1, #testimonials > div.test-2, #testimonials > div.test-3, #testimonials > div.test-4{

                  background:darkblue !important;

                  

          }

        

        



    </style>











 <style type="text/css" id="Menu">

        .menu-item { 

                 background-color: blue !important;

          

          

          }

        

        



</style>











 <style type="text/css" id="Menu">

        .menu-item:hover { 



 -webkit-transition-duration: 0.4s; /* Safari */

    transition-duration: 0.4s;

                  background-color:darkblue !important;

          

          

          }

        

        



    </style>







       <style type="text/css" id="custom-background">

            html { background-color:#000039 !important; }    

       </style>









 <style type="text/css" id="header">

        #top_divider { 

            

          background-color: darkblue !important;



     

          

          }



     </style>





<style type="text/css" id="table">

       

        div.table1, div.table2, div.table3, div.table4, div.table5, div.table6 

        

        { 



 

                  background-color: blue !important;

                  color:white !important;

          

          

          }

         

        </style>





         <style type="text/css" id="footer">

       .table_footer_single{ 



                  background-color: darkblue !important;

          

          

          }

     </style>



     <style type="text/css" id="table">

        div.table1, div.table2, div.table3, div.table4, div.table5, div.table6, #footer, #menu-container, #profile-pic, #line-break { 



                  border-color: darkblue !important;

          

          

          }

         

   </style>





















<?php















}











if ($theme_color_setting == 'green'){



?>



 <style type="text/css" id="Menu">

        #menu-container { 

                 background-color: #green !important;

          

          

          }


  

          .menu-item a{
                   
          

                   
                   
                   color:white!important;



            

             }
          
<style type="text/css" id="slider-background">

div.slider-background { 

  background-color: green !important;


}



</style>






        

         #testimonials > div.test-1, #testimonials > div.test-2, #testimonials > div.test-3, #testimonials > div.test-4{

                  background:green !important;

                  

          }



    </style>











 <style type="text/css" id="Menu">

        .menu-item { 

                 background-color: green !important;

          

          

          }

        

        



</style>











 <style type="text/css" id="Menu">

        .menu-item:hover { 



 -webkit-transition-duration: 0.4s; /* Safari */

    transition-duration: 0.4s;

                  background-color:darkgreen !important;

          

          

          }

        

        



    </style>







       <style type="text/css" id="custom-background">

            html { background-color:darkgreen !important }    

       </style>









 <style type="text/css" id="header">

        #top_divider { 

           

          background-color: #1a431c !important;



     

          

          }



     </style>





<style type="text/css" id="table">

       

        div.table1, div.table2, div.table3, div.table4, div.table5, div.table6 

        

        { 



 

                  background-color: green !important;

                  color:white !important;

          

          

          }

         

        </style>





         <style type="text/css" id="footer">

       .table_footer_single{ 



                  background-color: green !important;

          

          

          }

     </style>



     <style type="text/css" id="table">

        div.table1, div.table2, div.table3, div.table4, div.table5, div.table6, #footer, #menu-container, #profile-pic, #line-break { 



                  border-color: #1a431c !important;

          

          

          }

         

   </style>







   <?php































}







if ($theme_color_setting == 'none'){

?>




    
<?php $sticky_color = get_theme_mod('custom_sticky_color'); ?>
    
    <style type="text/css" id="sticky-menu">
    
               #sticky-menu { 
                   
                   background-color:<?php echo $sticky_color ?>!important;
               
               }  
               
               

               .menu-item a{
                   
                     
                     <?php $font_color_menu = get_theme_mod('custom_font_menu_color'); ?>

                     
                     
                     color:<?php echo $font_color_menu ?> !important;



              

               }
          </style>






<?php $background_color =  get_theme_mod('custom_back_color'); ?> 



 <style type="text/css">

            html { background-color:<?php echo $background_color; ?> !important; }    

       </style>





       <style type="text/css">

           #top_divider { background-color:<?php echo get_theme_mod('custom_header_color');?> !important; }    

       </style>

  



<style type="text/css" id="table">

       

        div.table1, div.table2, div.table3, div.table4, div.table5, div.table6 

        

        { 



 

                  background-color: <?php echo get_theme_mod('custom_boxes_color'); ?>!important;

          

          

          }

         

        </style>



        <style type="text/css" id="footer">

       .table_footer_single{ 



                  background-color: <?php echo get_theme_mod('custom_footer_color'); ?> !important;

          

          

          }



           #testimonials > div.test-1, #testimonials > div.test-2, #testimonials > div.test-3, #testimonials > div.test-4{

                  background:<?php echo get_theme_mod('custom_testimonials_color')?> !important;

                   border-color: <?php echo get_theme_mod('custom_border_color'); ?> !important;

                  

          }

     </style>







<style type="text/css" id="table">

        div.table1, div.table2, div.table3, div.table4, div.table5, div.table6, #footer, #menu-container, #profile-pic, #line-break { 



                  border-color: <?php echo get_theme_mod('custom_border_color'); ?> !important;

          

          

          }

         

   </style>





<?php





 //$page_bg_image_url = get_background_image();

    

/*

  ?>

    <style type="text/css" id="custom-background-css-override">

        html { 

            -webkit-background-size: cover;

            -moz-background-size: cover;

            -o-background-size: cover;

            background-size: cover;       

       background-image: url('<?php echo $page_bg_image_url; ?>');}

    </style>



*/

?>











 

</div><?php







//echo get_theme_mod('custom_menu_color');

  ?>



 <style type="text/css" id="Menu">

        #menu-container { 

                 background-color: <?php echo get_theme_mod('custom_menu_color'); ?> !important;

          

          

          }

        

        



    </style>











 <style type="text/css" id="Menu">

        .menu-item { 

                 background-color: <?php echo get_theme_mod('custom_item_color'); ?> !important;

          

          

          }

        

        



</style>






<?php $slider_color = get_theme_mod('custom_slider_color'); ?>
    
    <style type="text/css" id="slider-background">
             div.slider-background { 
                   
                   background-color: <?php echo $slider_color; ?> !important;

                   -webkit-filter: contrast(200%); /* Safari */
  filter: contrast(200%);
                
  filter: grayscale(50%);
  -webkit-filter:grayscale(50%);

  -webkit-filter: hue-rotate(90deg); /* Safari */
  filter: hue-rotate(90deg);

            
               
               }    
          </style>
     
   










 <style type="text/css" id="Menu">

        .menu-item:hover { 



 -webkit-transition-duration: 0.4s; /* Safari */

    transition-duration: 0.4s;

                  background-color: <?php echo get_theme_mod('custom_hover_color'); ?> !important;

          

          

          }

        

        



    </style>















 <style type="text/css" id="header">

        #top_divider { 

            -webkit-background-size: cover;

            -moz-background-size: cover;

            -o-background-size: cover;

            background-size: cover;       

        background-image: url('<?php echo header_image() ?>');

          background-color: <?php echo get_theme_mod('custom_header_color'); ?> !important;

          

          

          }

        

        



    </style>



<?php



}





?>



 </head>



 





 <div id="menu-container">
</div>





</div>

</div>



  <div id="site-logo">



<?php if ( get_theme_mod( 'the_logo' ) ) : ?>

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

 

        <img src="<?php echo get_theme_mod( 'the_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

 

    </a>

 

 </div>

 </div>



    <?php else : ?>





               

<?php endif; ?>







  

    </div>

    

  </div> 



   <?php 



if(is_active_sidebar('search_box')){



?>

<div id="search_box">

    <?php

	dynamic_sidebar('search_box');

  ?>  

    </div>

    <?php

}

?>


<div class="site-title-background">

<div class="site-title">



        <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>





        </div>

</div>

        <div class="site-description">

        

        <p><?php bloginfo( 'description' ); ?></p>







 </div>









 <body <?php //body_class(''); ?>>

  

  





 



    

    

    

 

</div>



   </body>

   

   </html>

 

     

     

     

     

 