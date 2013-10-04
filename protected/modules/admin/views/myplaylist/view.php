<?php
/* @var $this MyplaylistController */
/* @var $model Myplaylist */

$this->breadcrumbs=array(
	'Myplaylists'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Myplaylist', 'url'=>array('index')),
	array('label'=>'Create Myplaylist', 'url'=>array('create')),
	array('label'=>'Update Myplaylist', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Myplaylist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Myplaylist', 'url'=>array('admin')),
);
?>

<h1>View Myplaylist #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'date_time',
		'comment',
		'user_details_id',
	),
)); ?>
