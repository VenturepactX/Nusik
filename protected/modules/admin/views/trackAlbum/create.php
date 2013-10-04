<?php
/* @var $this TrackAlbumController */
/* @var $model TrackAlbum */

$this->breadcrumbs=array(
	'Track Albums'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TrackAlbum', 'url'=>array('index')),
	array('label'=>'Manage TrackAlbum', 'url'=>array('admin')),
);
?>

<h1>Create TrackAlbum</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>