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

 <section class="row-fluid" style="background:#CCCCCC;">
			<table class="offset4">
			
			<tr>
					<td colspan="2" align="center"><h3>Profile Registration</h3></td>
					
			 </tr>
			 <tr>
				<td><h4>First Name:</h4></td>
				<td><?php echo $form->textField($model,'first_name',array('size'=>45,'maxlength'=>45)); ?></td>
			</tr>
			<tr>
				<td><h4>Last Name:</h4></td>
				<td><?php echo $form->textField($model,'last_name',array('size'=>45,'maxlength'=>45)); ?></td>
			</tr>
			<tr>
				<td><h4>Gender:</h4></td>
				<td><?php  echo $form->dropDownList($model,'gender', array('Male'=>'Male','Female'=>'Female'));?></td>
			</tr>
			<tr>
			<td><h4>Date of Birth:</h4> </td>
			<td>						<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'date_of_birth', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)
                'options'=>array("dateFormat"=>'yy/mm/dd'), // jquery plugin options
                'language' => '',
            ));
        ?></td>
			</tr>
			<tr>
				<td><h4>Country:</h4></td>				
				<td><?php $countryList	= Countries::model()->findAll();
						$list = CHtml::listData($countryList, 'id', 'name');
						echo $form->dropDownList($model, 'countries_id', $list,array('empty'=>'Select a Country',
								'ajax' => array(
								'type' => 'POST',
								'url' => CController::createUrl('site/dynamicCity'),
								'update' => "#Profile_city_id"
							) ));
						?>
				</td>
			</tr>
		    <tr>
				<td><h4>Country:</h4></td>
				<td><?php $listcity=CHtml::listData(cities::model()->findAll(), 'id','name'); ?>
					<?php 
					echo $form->dropDownList($model,'cities_id',$listcity,array('empty'=>'--Select a City--'));?>
				</td>
			</tr>
			<tr>
				<td><h4>Zip Code:</h4></td>
				<td><?php echo $form->textField($model,'zip_code',array('size'=>45,'maxlength'=>7)); ?></td>
			</tr>
			<tr>
				<td><h4>Contact:</h4></td>
				<td><?php echo $form->textField($model,'contact_no',array('size'=>45,'maxlength'=>7)); ?></td>
			</tr>
			<tr>
				<td><h4>Image:</h4></td>				
				<td><?php echo $form->fileField($model,'image'); ?></td>
			</tr>
			<tr>
				<td><h4>Background Image:</h4></td>
				<td><?php echo $form->fileField($model,'cover_photo'); ?></td>
			</tr>
			<tr>
 				<td colspan="2" align="right">		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary large')); ?></td>
			</tr>
</table>
	</section>
	
	
		
<?php $this->endWidget(); ?>