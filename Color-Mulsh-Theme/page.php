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





<!-- This is the PAGE LOOP. page.php  --> 





<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet" type="text/css">










<html>



       



<head>





<?php 

 get_header();

 



 ?>



</head> 

 



<body>

<div>

<?php 







if ( is_account_page()  || is_cart()){ // User is NOT on my account pages

?>





<style type="text/css" id="body">

        body { 

                 width:50% !important;

  

          

        }

      



</style>







<style type="text/css" id="footer">

        #footer{

            width:200% !important;

        

        }



    </style>

}

 

  

<?php

}



else{



?>



  



 <style type="text/css" id="footer">

        #footer { 

                 width:100% !important;

  

          

          }

          body{

              width:100% !important;



          }



</style>

 <?php 

}

 



///////////////////////////////////////////////////





//echo get_theme_mod('custom_boxes_color');







$theme_color_setting =  get_theme_mod('themeslug_radio_setting_id');

if ($theme_color_setting == 'none'){
    ?>
    
    


    
    <?php $sticky_color = get_theme_mod('custom_sticky_color'); ?>
    
     <style type="text/css" id="sticky-menu">
     
                #sticky-menu { 
                    
                    background-color:<?php echo $sticky_color ?>!important;
                
                }    
           </style>








    
    <?php $back_color = get_theme_mod('custom_back_color'); ?>
    
     <style type="text/css">
                html { 
                    
                    background-color:<?php echo $back_color ?>!important;
                
                }    
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
         </style>
    
    
    
    <style type="text/css" id="table">
            div.table1, div.table2, div.table3, div.table4, div.table5, div.table6, #footer, #menu-container, #profile-pic, #line-break { 
    
                      border-color: <?php echo get_theme_mod('custom_border_color'); ?> !important;
              
              
              }
             
       </style>
    
    
    <?php
    
    }






//echo $theme_color_setting;





if ($theme_color_setting == 'red'){





?>



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

            -webkit-background-size: cover;

            -moz-background-size: cover;

            -o-background-size: cover;

            background-size: cover;       

        background-image: url('<?php echo header_image() ?>');

          background-color: darkred !important;



     

          

          }



     </style>





<style type="text/css" id="table">

       

        div.table1, div.table2, div.table3, div.table4, div.table5, div.table6 

        

        { 



 

                  background-color: red !important;

                  color:white !important;

          

          

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



 <style type="text/css" id="Menu">

        #menu-container { 

                 background-color: #000039 !important;

          

          

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

            -webkit-background-size: cover;

            -moz-background-size: cover;

            -o-background-size: cover;

            background-size: cover;       

        background-image: url('<?php echo header_image() ?>');

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

            html { background-color:#1a431c !important }    

       </style>









 <style type="text/css" id="header">

        #top_divider { 

            -webkit-background-size: cover;

            -moz-background-size: cover;

            -o-background-size: cover;

            background-size: cover;       

        background-image: url('<?php echo header_image() ?>');

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



                  border-color: darkgreen !important;

          

          

          }

         

   </style>







   <?php































}










if ($theme_color_setting == 'none'){

?>


<?php $back_color = get_theme_mod('custom_back_color'); ?>



 <style type="text/css">

            html { 

                

                background-color:<?php echo $back_color ?>!important;

            

            }    

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

     </style>







<style type="text/css" id="table">

        div.table1, div.table2, div.table3, div.table4, div.table5, div.table6, #footer, #menu-container, #profile-pic, #line-break { 



                  border-color: <?php echo get_theme_mod('custom_border_color'); ?> !important;

          

          

          }

         

   </style>





<?php

        
        }


 $page_bg_image_url = get_background_image();

    



    // And below, spit out the <style> tag... ?>

    <style type="text/css" id="custom-background-css-override">

        html { 

            -webkit-background-size: cover;

            -moz-background-size: cover;

            -o-background-size: cover;

            background-size: cover;       

        background-image: url('<?php echo $page_bg_image_url; ?>');}

    </style>























<?php











//////////////////////////////////////////////////////////







?>

</div>



 





      

    <?php 











   



?>

</td>

</tr>

</table>

</div>

</div>







<div id="body-layer2">

</div>











</div>













 <div id="main-text"> 



<?php

if ( have_posts() ) : while ( have_posts() ) : the_post();

 

 the_content();

 

endwhile;



else:

  _e('Sorry, no posts matched your criteria.'); 

endif;

?>

 



</div>

<?php

 // Include the page content template.



         

 



            // End of the loop. ?>



      



       





  





















 

</div>

</div>





 </div>





<?php 























$theme_color_setting_woo =  get_theme_mod('woo_themeslug_radio_setting_id');



//echo $theme_color_setting_woo;







?>









<style type="text/css" id="container">

        #content { 

               margin-top:300px !important;

                    

          

          }







</style>







<?php





if ($theme_color_setting_woo == 'WOO_red'){









?>











<style type="text/css" class="woocommerce">



    #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--dashboard > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--orders > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--downloads > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--edit-address > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--edit-account > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--customer-logout > a,#main-text > div > p.cart-empty



{



	color:<?php echo get_theme_mod('custom_font_color');?>!important;



  border-top:thick solid red !important;

width:400px;





  line-height:40px;

  height:80px;

  text-decoration:none;

display:block;

  

}

















.products, .woocommerce-MyAccount-content,  form.checkout.woocommerce-checkout, .woocommerce table.shop_table{







	color:<?php echo get_theme_mod('custom_font_color');?>!important;



}





#payment,.woocommerce-error, .woocommerce-info, .woocommerce-message{

    background-color:red !important;

    color:<?php echo get_theme_mod('custom_font_color');?>!important;

    width:40%;

}











</style>





 <?php }



 

?>





<?php 











if ($theme_color_setting_woo == 'WOO_green'){



?>





<style type="text/css">



    #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--dashboard > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--orders > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--downloads > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--edit-address > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--edit-account > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--customer-logout > a, #main-text > div > p.cart-empty



{



		color:<?php echo get_theme_mod('custom_font_color');?>!important;



  border-top:thick solid green !important;

width:400px;





  line-height:40px;

  height:80px;

  text-decoration:none;

display:block;

  

}





.products, .woocommerce-MyAccount-content,  form.checkout.woocommerce-checkout, .woocommerce table.shop_table, {







	color:<?php echo get_theme_mod('custom_font_color');?>!important;



}





#payment,.woocommerce-error, .woocommerce-info, .woocommerce-message{

    background-color:green !important;

    color:<?php echo get_theme_mod('custom_font_color');?>!important;

    width:40%;



}









</style>





 <?php }















if ($theme_color_setting_woo == 'WOO_blue'){



?>





<style type="text/css">



    #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--dashboard > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--orders > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--downloads > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--edit-address > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--edit-account > a, #main-text > div > nav > ul > li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--customer-logout > a, #main-text > div > p.cart-empty



{



		color:<?php echo get_theme_mod('custom_font_color');?>!important;



  border-top:thick solid blue !important;

width:400px;





  line-height:40px;

  height:80px;

  text-decoration:none;

display:block;

  

}







.products, .woocommerce-MyAccount-content,  form.checkout.woocommerce-checkout, .woocommerce table.shop_table{







	color:<?php echo get_theme_mod('custom_font_color');?>!important;



}





#payment,.woocommerce-error, .woocommerce-info, .woocommerce-message{

    background-color:blue !important;

    color:<?php echo get_theme_mod('custom_font_color');?>!important;

    width:40%;

    



}







</style>







<?php 

 }

?>

</div>







</body>















</div>

</div>







 </div>

<footer>

<div id = "footer-page">

 

</div>

<?php wp_footer();
get_footer();


?>


</footer>
    



    

 </html>