	  	<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>

		<section class="row-fluid ">
            <nav class="nav">
               	<ul class="nav nav-tabs">
                   	<li><a href="profilemain.html" class="transition color-white">PROFILE PAGE</a></li>
                   	<li><a href="" class="transition color-white">About Us</a></li>
                   	<li><a href="" class="transition color-white">Our Mission</a></li>
                   	<li><a href="" class="transition color-white">Contact Us</a></li>
    	         </ul>
        	     <span class="pull-left span3">
                 	<span class="color-white offset1">&copy; 2013 NUSIK | <a href="#" class="color-white">Terms & Privacy</a></span>	
                 </span>
                    
                 <span class="pull-left offset7 mg-right10 padding-top15 bgcolor-navyblue">
                    	<span class=""><a href="https://facebook.com"><img src="<?php echo $baseUrl;?>/img/facebook-square.png" /></a></span>
                       	<span class=""><a href="https://gmail.com" ><img src="<?php echo $baseUrl;?>/img/google-square.png" /></a></span>
                       	<span class=""><a href="https://twitter.com"><img src="<?php echo $baseUrl;?>/img/twitter-square.png" /></a></span> 
                 </span>
                    <!--<span class="span10 offset1">
                    	<span class="color-white">&copy; 2013 Rate My MP | <a href="#" class="color-white">Terms & Privacy</a></span>
                    </span>-->
			</nav>
        </section>  