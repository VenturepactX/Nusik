<?php
/* @var $this SiteController */
/* @var $error array */

$baseUrl= Yii::app()->theme->baseUrl;
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-registration',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

 
			<section class="row-fluid">	 
				<div class="offset5"> <h3>Profile Registration</h3></div>
			</section>
 
 			<section class="row-fluid">
				<h5 class="offset4">First Name:<?php echo $form->textField($model,'first_name',array('size'=>45,'maxlength'=>45,'class'=>'offset1')); ?></h5>
			</section>
			<section class="row-fluid">
				<h5 class="offset4">Last Name: 		<?php echo $form->textField($model,'last_name',array('size'=>45,'maxlength'=>45,'class'=>'offset1')); ?></h5>
			</section>
			<section class="row-fluid">
				<h5 class="offset4">Gender:
				<?php  echo $form->dropDownList($model,'gender', array('Male'=>'Male','Female'=>'Female'),array('class'=>'offset1'));?></h5>
			</section>
			<section class="row-fluid">
				<h5 class="offset4">Date of Birth: <span class="offset1">
									<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'date_of_birth', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)
                'options'=>array("dateFormat"=>'yy/mm/dd'), // jquery plugin options
                'language' => '',
            ));
        ?></span>
			</h5>
			</section>
	<section class="row-fluid">
				<h5 class="offset4">Country:				
						<span class="offset1"><?php $countryList	= Countries::model()->findAll();
						$list = CHtml::listData($countryList, 'id', 'name');
						echo $form->dropDownList($model, 'countries_id', $list,array('empty'=>'Select a Country',
								'ajax' => array(
								'type' => 'POST',
								'url' => CController::createUrl('site/dynamicCity'),
								'update' => "#Profile_city_id"
							) ));
						?></span>
			    </h5>
	</section>
			
	<section class="row-fluid">
					<h5 class="offset4">Country:				<span class="offset1">	<?php $listcity=CHtml::listData(cities::model()->findAll(), 'id','name'); ?>
					<?php 
					echo $form->dropDownList($model,'cities_id',$listcity,array('empty'=>'--Select a City--'));?></span>
					</h5>
	</section>
	<section class="row-fluid">
					<h5 class="offset4">Zip Code:				<span class="offset1">	
		<?php echo $form->textField($model,'zip_code',array('size'=>45,'maxlength'=>7)); ?></span>
					</h5>
	</section>
		
<?php $this->endWidget(); ?>