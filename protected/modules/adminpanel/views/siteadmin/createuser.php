<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-createuser-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

  
	<div class="row" >
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'display_name'); ?>
		<?php echo $form->textField($model,'display_name'); ?>
		<?php echo $form->error($model,'display_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'roles_id'); ?>
		<?php $roleList=Roles::model()->findAll();
		$list = CHtml::listData($roleList, 'id', 'roles_name');
		echo $form->dropDownList($model, 'roles_id', $list,array('empty'=>'Select a Roles'));?>
		<?php echo $form->error($model,'roles_id'); ?>
	</div>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>
      	
	</div><!--/span-->
<?php $this->endWidget(); ?>

</div><!-- form -->