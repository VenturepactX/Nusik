<?php
/* @var $this UserlogController */
/* @var $model Userlog */

$this->breadcrumbs=array(
	'Userlogs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Userlog', 'url'=>array('index')),
	array('label'=>'Create Userlog', 'url'=>array('create')),
	array('label'=>'Update Userlog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Userlog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Userlog', 'url'=>array('admin')),
);
?>

<h1>View Userlog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_time',
		'browser_type',
		'ip_address',
		'login_id',
	),
)); ?>
