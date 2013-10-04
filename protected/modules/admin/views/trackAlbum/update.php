<?php
/* @var $this TrackAlbumController */
/* @var $model TrackAlbum */

$this->breadcrumbs=array(
	'Track Albums'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TrackAlbum', 'url'=>array('index')),
	array('label'=>'Create TrackAlbum', 'url'=>array('create')),
	array('label'=>'View TrackAlbum', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TrackAlbum', 'url'=>array('admin')),
);
?>

<h1>Update TrackAlbum <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>