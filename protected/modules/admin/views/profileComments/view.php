<?php
/* @var $this ProfileCommentsController */
/* @var $model ProfileComments */

$this->breadcrumbs=array(
	'Profile Comments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProfileComments', 'url'=>array('index')),
	array('label'=>'Create ProfileComments', 'url'=>array('create')),
	array('label'=>'Update ProfileComments', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProfileComments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProfileComments', 'url'=>array('admin')),
);
?>

<h1>View ProfileComments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'commnet',
		'date_time',
		'status',
	),
)); ?>
