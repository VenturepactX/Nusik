<?php
/* @var $this ArtDetailsController */
/* @var $model ArtDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'art-details-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bio'); ?>
		<?php echo $form->textArea($model,'bio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'bio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motivation'); ?>
		<?php echo $form->textArea($model,'motivation',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'motivation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'achievments'); ?>
		<?php echo $form->textArea($model,'achievments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'achievments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plans'); ?>
		<?php echo $form->textArea($model,'plans',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'plans'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_time'); ?>
		<?php echo $form->textField($model,'date_time'); ?>
		<?php echo $form->error($model,'date_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_details_id'); ?>
		<?php echo $form->textField($model,'user_details_id'); ?>
		<?php echo $form->error($model,'user_details_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->