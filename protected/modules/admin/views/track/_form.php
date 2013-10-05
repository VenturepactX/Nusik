<?php
/* @var $this TrackController */
/* @var $model Track */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'track-form',
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
		<?php echo $form->labelEx($model,'track_album_id'); ?>
		<?php $list=CHtml::listData(trackalbum::model()->findAll(), 'id','name'); ?>
		<?php 
		  echo $form->dropDownList($model,'track_album_id',$list,array('empty'=>'--Select Album--'));?>
		<?php echo $form->error($model,'track_album_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'login_id'); ?>
		<?php $list=CHtml::listData(login::model()->findAll(), 'id','display_name'); ?>
		<?php 
		  echo $form->dropDownList($model,'login_id',$list,array('empty'=>'--Artist Name--'));?>
		<?php echo $form->error($model,'login_id'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'genre_id'); ?>
		<?php $list=CHtml::listData(genre::model()->findAll(), 'id','name'); ?>
		<?php 
		  echo $form->dropDownList($model,'genre_id',$list,array('empty'=>'--Choose a Genre--'));?>
		<?php echo $form->error($model,'genre_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->fileField($model,'url'); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'length'); ?>
		<?php echo $form->textField($model,'length'); ?>
		<?php echo $form->error($model,'length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'count'); ?>
		<?php echo $form->textField($model,'count',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'likes'); ?>
		<?php echo $form->textField($model,'likes',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'likes'); ?>
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
	
	 