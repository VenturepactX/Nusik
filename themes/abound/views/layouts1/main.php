<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>

		<title>NUSIK</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		
		<link rel="stylesheet" href="<?php echo $baseUrl;?>/css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $baseUrl;?>/css/supersized.shutter.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $baseUrl;?>/css/bootstrap.min.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $baseUrl;?>/css/bootstrap-responsive.min.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $baseUrl;?>/css/layout.css" type="text/css" media="screen" />
		
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/supersized.3.2.7.min.js"></script>
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/supersized.shutter.min.js"></script>
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/slide.js"></script>
		
	</head>
	
	<style type="text/css">
	</style>

<body>
<section class="container-fluid">
<section class="row-fluid">
<section id="signin" class="modal hide fade">
    <header class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		<img src="<?php echo $baseUrl;?>/img/logo.png"/>
    </header>
    <div class="modal-body">
        <h4>SIGN IN HERE</h4>
        <p>
            <div id="login">
                <table align="center">
                    <tr>
                        <td>USERNAME</td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>PASSWORD</td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                    	<td><input type="submit" class="btn btn-primary" /></td>
                    	<td><a href="">FORGET YOUR PASSWORD</a></td>
                    </tr>  
                </table>
            </div>
        </p>  
    </div>
    <footer class="modal-footer">
	    <button class="btn btn-primary" data-dismiss="modal">Close</button>
    </footer>
</section>

<section id="signup" class="modal hide fade">
    <header class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		<img src="<?php echo $baseUrl;?>/img/logo.png" />
    </header>
    <div class="modal-body">
        <h4>SIGN UP HERE</h4>
        <p>
            <div id="login">
                <table cellspacing="5" cellpadding="5" style="margin:auto;">
                    <tr><td>EMAIL</td></tr>
                    <tr><td><input type="text"></td></tr>
                    <tr><td>PASSWORD</td></tr>
                    <tr><td><input type="text"></td></tr>
                    <tr><td>CONFIRM PASSWORD</td></tr>
                    <tr><td><input type="text"></td></tr>
                    <tr><td>USER TYPE</td></tr>
                    <tr><td><input type="text"></td></tr>
                    <tr><td><center><input type="submit" value="REGISTER" class="btn btn-primary" /></center></td></tr>
                </table>
            </div>
        </p>  
    </div>
    <footer class="modal-footer">
	    <button class="btn btn-primary" data-dismiss="modal">Close</button>
    </footer>
</section>
</section>
</section>


	<div id="progress-back" class="load-item">
		<div id="progress-bar"></div>
	</div>
    <section class="container-fluid span12">
        <header class="row-fluid">
        	<div class="span2">
            	<img src="<?php echo $baseUrl;?>/img/logo.png" />
            </div>
            <audio controls class="span8 mgtop10">
              <source src="99.ogg" type="audio/ogg">
              <source src="99.mp3" type="audio/mpeg">
              Sorry Your browser does not support the audio element.
            </audio>
			<div class="pull-right span2 mgtop10">
                        	<a href="#signup" class="btn btn-primary" data-toggle="modal"> SIGN UP</a>
                        	<a href="#signin" class="btn btn-primary" data-toggle="modal">SIGN IN</a>
            </div>     	
        </header>
    	<section class="row-fluid">
        	<article class="span12">
            	<p class="color-white  txt-align-center padding20 rgba-black">SEARCH ARTIST BY LOCATION</p>
						<p class="offset3 span6"><input type="text" class="width80 mgauto" /><span class="btn btn-primary pull-right">GO</span></p>
                <p class="span12"></p>
            </article>
        </section>

        <section class="row-fluid">
			
			<span class="thumbnails">
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (1).jpg"  class="img-polaroid rotate"/>
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (2).jpg"  class="img-polaroid rotate" />
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (3).jpg"  class="img-polaroid rotate"/>
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (4).jpg"  class="img-polaroid rotate"/>
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (5).jpg"  class="img-polaroid rotate"/>
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (6).jpg"  class="img-polaroid rotate"/>
                </span>
            </span>
            <span class="thumbnails">
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (7).jpg"  class="img-polaroid rotate"/>
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (8).jpg"  class="img-polaroid rotate" />
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (9).jpg"  class="img-polaroid rotate"/>
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (10).jpg"  class="img-polaroid rotate"/>
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (11).jpg"  class="img-polaroid rotate"/>
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (12).jpg"  class="img-polaroid rotate"/>
                </span>
            </span>
            
            
        </section>
		<section class="row-fluid">
            <nav class="nav">
               	<ul class="nav nav-tabs">
                   	<li><a href="<?php echo $baseUrl;?>/profilemain.html" class="transition color-white">PROFILE PAGE</a></li>
                   	<li><a href="" class="transition color-white">About Us</a></li>
                   	<li><a href="" class="transition color-white">Our Mission</a></li>
                   	<li><a href="" class="transition color-white">Contact Us</a></li>
    	         </ul>
        	     <span class="pull-left">
                 	<span class="color-white ">&copy; 2013 NUSIK | <a href="#" class="color-white">Terms & Privacy</a></span>	
                 </span>
                    
                 <span class="pull-right mg-right40 padding-top15 bgcolor-navyblue padding-top15  ">
                    	<span class=""><a href="https://facebook.com"><img src="<?php echo $baseUrl;?>/img/facebook-square.png" /></a></span>
                       	<span class=""><a href="https://gmail.com" ><img src="<?php echo $baseUrl;?>/img/google-square.png" /></a></span>
                       	<span class=""><a href="https://twitter.com"><img src="<?php echo $baseUrl;?>/img/twitter-square.png" /></a></span> 
                 </span>
                    <!--<span class="span10 offset1">
                    	<span class="color-white">&copy; 2013 Rate My MP | <a href="#" class="color-white">Terms & Privacy</a></span>
                    </span>-->
			</nav>
        </section>    
    </section>
</body>
</html>
