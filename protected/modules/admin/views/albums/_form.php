<?php
/* @var $this AlbumsController */
/* @var $model Albums */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'albums-form',
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
		<?php echo $form->error($model,'login_id'); ?></div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
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