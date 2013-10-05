<?php
/* @var $this FirstfanController */
/* @var $model Firstfan */

$this->breadcrumbs=array(
	'Firstfans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Firstfan', 'url'=>array('index')),
	array('label'=>'Create Firstfan', 'url'=>array('create')),
	array('label'=>'Update Firstfan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Firstfan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Firstfan', 'url'=>array('admin')),
);
?>

<h1>View Firstfan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_of_entry',
		'status',
		'login_id',
	),
)); ?>