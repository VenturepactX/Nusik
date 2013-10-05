<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'news'); ?>
		<?php echo $form->textArea($model,'news',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'news'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'event_on'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'event_on', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)
                'options'=>array("dateFormat"=>'yy/mm/dd'), // jquery plugin options
                'language' => ''
            ));
        ?>
		<?php echo $form->error($model,'event_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		
	<?php echo $form->checkBox($model,'status', array('value'=>1, 'uncheckValue'=>0)); ?>
	<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?//php echo $form->labelEx($model,'login_id'); ?>
		<?//php echo $form->textField($model,'login_id'); ?>
		<?//php echo $form->error($model,'login_id'); ?>
		
		<div class="row">
		<?php echo $form->labelEx($model,'login_id'); ?>
		<?php $list=CHtml::listData(login::model()->findAll(), 'id','display_name');  
		  echo $form->dropDownList($model,'login_id',$list, array('empty'=>'--Select a Name--'));
		  //echo $form->textField($model,'user_master_user_id'); ?>
		 <?php echo $form->error($model,'login_id'); ?>
			
	</div>

	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->