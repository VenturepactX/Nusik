<?php
/* @var $this UserDetailsController */
/* @var $model UserDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-details-form',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

 
 
	
	<div class="row">
		<?php echo $form->labelEx($model,'login_id'); ?>
		<?php $listemail=CHtml::listData(Login::model()->findAll(), 'id','email');  
		  echo $form->dropDownList($model,'login_id',$listemail, array('empty'=>'--Select a User Email--'));
		?>
		<?php echo $form->error($model,'login_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php  echo $form->dropDownList($model,'gender', array('1'=>'Male','2'=>'Female'));?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_birth'); ?>
				<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'date_of_birth', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)
                'options'=>array("dateFormat"=>'yy/mm/dd'), // jquery plugin options
                'language' => ''
            ));
        ?>
<?php echo $form->error($model,'date_of_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'country_id'); ?>
		<?php $countryList	= Country::model()->findAll();
  		$list = CHtml::listData($countryList, 'id', 'name');
		echo $form->dropDownList($model, 'country_id', $list,array('empty'=>'Select a Country',
                        'ajax' => array(
                        'type' => 'POST',
                        'url' => CController::createUrl('UserDetails/dynamicCity'),
                        'update' => "#UserDetails_city_id"
                    ) ));
	 ?>
	<?php echo $form->error($model,'country_id'); ?>

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_id'); ?>
			<?php $listcity=CHtml::listData(city::model()->findAll(), 'id','name'); ?>
		<?php 
		  echo $form->dropDownList($model,'city_id',$listcity,array('empty'=>'--Select a City--'));?>
	<?php echo $form->error($model,'city_id'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'zip'); ?>
		<?php echo $form->textField($model,'zip',array('size'=>45,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'zip'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
	<?php echo $form->checkBox($model,'status', array('value'=>1, 'uncheckValue'=>0)); ?>
			
		<?php echo $form->error($model,'status'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->