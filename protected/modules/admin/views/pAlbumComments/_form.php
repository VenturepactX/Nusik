<?php
/* @var $this PAlbumCommentsController */
/* @var $model PAlbumComments */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'palbum-comments-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?//php echo $form->textField($model,'status'); ?>
		<?php echo $form->checkBox($model,'status', array('value'=>1, 'uncheckValue'=>0)); ?>
	
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'albums_id'); ?>
		<?php $listemail=CHtml::listData(Albums::model()->findAll(), 'id','name');  
		  echo $form->dropDownList($model,'albums_id',$listemail, array('empty'=>'--Select an albums--'));
		?>
		<?php echo $form->error($model,'albums_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login_id'); ?>
		<?//php echo $form->textField($model,'login_id'); ?>
		<?php $listemail=CHtml::listData(Login::model()->findAll(), 'id','display_name');  
		  echo $form->dropDownList($model,'login_id',$listemail, array('empty'=>'--Select a User Email--'));
		?>
		
		<?php echo $form->error($model,'login_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->