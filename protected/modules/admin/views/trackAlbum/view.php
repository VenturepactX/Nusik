<?php
/* @var $this TrackAlbumController */
/* @var $model TrackAlbum */

$this->breadcrumbs=array(
	'Track Albums'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TrackAlbum', 'url'=>array('index')),
	array('label'=>'Create TrackAlbum', 'url'=>array('create')),
	array('label'=>'Update TrackAlbum', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TrackAlbum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TrackAlbum', 'url'=>array('admin')),
);
?>

<h1>View TrackAlbum #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'album_info',
		'album_art',
		'release_date',
		'status',
		'login_id',
	),
)); ?>
