<?php
/* @var $this TrackCommentsController */
/* @var $data TrackComments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commnet')); ?>:</b>
	<?php echo CHtml::encode($data->commnet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_time')); ?>:</b>
	<?php echo CHtml::encode($data->d_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_id')); ?>:</b>
	<?php echo CHtml::encode($data->login_id); ?>
	<br />


</div>