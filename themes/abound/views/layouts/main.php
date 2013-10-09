
<!DOCTYPE html>
<html lang="en">
  	<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>
    <!-- Fav and Touch and touch icons -->
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
 
<body>

<section id="navigation-main">   
<!-- Require the navigation -->
<?php require_once('tpl_navigation.php')?>
</section><!-- /#navigation-main -->
     
<section class="main-body">
    <div class="container-fluid">
            <!-- Include content pages -->
            <?php echo $content; ?>
    </div>
</section>

<!-- Require the footer -->
<?php require_once('tpl_footer.php')?>

  </body>
</html>