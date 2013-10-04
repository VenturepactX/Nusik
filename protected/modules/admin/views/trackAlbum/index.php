<?php
/* @var $this TrackAlbumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Track Albums',
);

$this->menu=array(
	array('label'=>'Create TrackAlbum', 'url'=>array('create')),
	array('label'=>'Manage TrackAlbum', 'url'=>array('admin')),
);
?>

<h1>Track Albums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
