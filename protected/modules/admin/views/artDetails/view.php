<?php
/* @var $this ArtDetailsController */
/* @var $model ArtDetails */

$this->breadcrumbs=array(
	'Art Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ArtDetails', 'url'=>array('index')),
	array('label'=>'Create ArtDetails', 'url'=>array('create')),
	array('label'=>'Update ArtDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ArtDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArtDetails', 'url'=>array('admin')),
);
?>

<h1>View ArtDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'bio',
		'motivation',
		'achievments',
		'plans',
		'date_time',
		'status',
		'user_details_id',
	),
)); ?>
