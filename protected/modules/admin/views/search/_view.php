<?php
/* @var $this SearchController */
/* @var $data Search */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->date_time), array('view', 'id'=>$data->date_time)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('search')); ?>:</b>
	<?php echo CHtml::encode($data->search); ?>
	<br />


</div>