<?php if (file_exists($_SERVER['DOCUMENT_ROOT'].'/zblock/zbblock.php')) require($_SERVER['DOCUMENT_ROOT'].'/zblock/zbblock.php'); ?><?php
require_once('include/mainConnect.php');
require_once($config['absolute_path'].'classes/main.php');	
include('includes/header.php') ;?> 
		
        <!--Main Content-->
 <div class="content_area">
  <div class="med_area">
    <div class="meetanthony_area">
        <div class="registered_area">
          <div class="inner_hed"> Payment Options </div>
        </div>
        <div class="service_box payment_content">
          <ol type="A">
            	<li><span class="width-pay">Pay now:  $1,697.</span>
                <span class="paypal"><!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">-->
                <form action="" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="DQ6V4D6THUPWS">
<!--<input type="image" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">-->
<img src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" onClick="openPopup('fadefriend',1,'fade_popup','datafriend',2,'data_on_fade','contect23');" >
<img width="1" height="1" border="0" alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form></span></li>

                <li><span class="width-pay">3 easy payments of $586 each, <br class="hidden-small"> $1,758 in total.</span>
                <span class="paypal"><form target="_top" action="" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="HW7SVDQFDR2RQ">
<!--                        <input type="image" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">-->
                        <img src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif"
                             onClick="openPopup('fadefriend',1,'fade_popup','datafriend',2,'data_on_fade','contect23');">
                        <img width="1" height="1" border="0" alt="" src="https://www.paypal.com/en_US/i/scr/pixel.gif">
                    </form>
</span></li>

                <li class="text-center">After logging into your paypal account, send payment to <a href="mailto:Anthony@WeightLossHappens.com">Anthony@WeightLossHappens.com</a></li>
            </ol>     
         </div>
      </div>
      </div>
     
</div>       
<!--CONTENT AREA END--><script type="text/javascript">
//alert('hi'); 
$('#weight_loss_articles').addClass("current");

</script> 
      <?php include('includes/footer.php') ;?>  