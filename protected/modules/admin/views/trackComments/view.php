<?php
/* @var $this TrackCommentsController */
/* @var $model TrackComments */

$this->breadcrumbs=array(
	'Track Comments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TrackComments', 'url'=>array('index')),
	array('label'=>'Create TrackComments', 'url'=>array('create')),
	array('label'=>'Update TrackComments', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TrackComments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TrackComments', 'url'=>array('admin')),
);
?>

<h1>View TrackComments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'commnet',
		'd_time',
		'active',
		'login_id',
	),
)); ?>
