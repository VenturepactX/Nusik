<?php
/* @var $this PhotosController */
/* @var $data Photos */
?>
<div>
<div style="float:left; margin-left:60%; width:150px; height:150px;  overflow:hidden; position:absolute; margin-top:0.5%;"><?php  echo CHtml::image(ImageFly::Instance()->get($data, 'photo_path', 150, 150));?></div>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_name')); ?>:</b>
	<?php echo CHtml::encode($data->photo_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_path')); ?>:</b>
	<?php echo CHtml::encode($data->photo_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_date')); ?>:</b>
	<?php echo CHtml::encode($data->add_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('albums_id')); ?>:</b>
	<?php echo CHtml::encode($data->albums_id); ?>
	<br />


</div></div>