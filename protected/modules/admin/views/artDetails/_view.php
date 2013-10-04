<?php
/* @var $this ArtDetailsController */
/* @var $data ArtDetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bio')); ?>:</b>
	<?php echo CHtml::encode($data->bio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivation')); ?>:</b>
	<?php echo CHtml::encode($data->motivation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('achievments')); ?>:</b>
	<?php echo CHtml::encode($data->achievments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plans')); ?>:</b>
	<?php echo CHtml::encode($data->plans); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::encode($data->date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_details_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_details_id); ?>
	<br />

	*/ ?>

</div>