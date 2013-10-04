<?php
/* @var $this TrackController */
/* @var $model Track */

$this->breadcrumbs=array(
	'Tracks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Track', 'url'=>array('index')),
	array('label'=>'Create Track', 'url'=>array('create')),
	array('label'=>'Update Track', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Track', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Track', 'url'=>array('admin')),
);
?>

<h1>View Track #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'url',
		'length',
		'count',
		'likes',
		'date_time',
		'status',
		'track_album_id',
		'login_id',
	),
)); ?>
