<?php
/* @var $this PhotosController */
/* @var $model Photos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'photos-form',
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
		<?php echo $form->labelEx($model,'albums_id'); ?>
		<?php $list=CHtml::listData(Albums::model()->findAll(), 'id','name');  
		  echo $form->dropDownList($model,'albums_id',$list, array('empty'=>'--Select a Album--'));
		?>
		<?php echo $form->error($model,'albums_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo_name'); ?>
		<?php echo $form->textField($model,'photo_name',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'photo_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo_path'); ?>
		<?php echo $form->fileField($model,'photo_path'); ?>
		<?php echo $form->error($model,'photo_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->checkBox($model,'active', array('value'=>1, 'uncheckValue'=>0)); ?>
	<?php echo $form->error($model,'active'); ?>
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