 <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/autosuggest.css" type="text/css" media="screen" >
 <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/autosuggest.js"></script>
<div class="main">
	<div id="holder"> 
		 <?php echo CHtml::textField('search', '',array('placeholder'=>'Search','id'=>'keyword')); ?>
		 
		 <?php echo CHtml::dropDownList('filter','',array('1'=>'Search by Location','2'=>'Search by genre'),array('id'=>'sby')); ?>&nbsp;&nbsp;
		 <?php echo CHtml::hiddenField('search', Yii::app()->createUrl("adminpanel/siteadmin/autosuggest"),array('placeholder'=>'Search','id'=>'autosuggesturl')); ?>
	 </div>
	 <div id="ajax_response">
	 
	 </div>
</div>
