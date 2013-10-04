<?php
/* @var $this PAlbumCommentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Palbum Comments',
);

$this->menu=array(
	array('label'=>'Create PAlbumComments', 'url'=>array('create')),
	array('label'=>'Manage PAlbumComments', 'url'=>array('admin')),
);
?>

<h1>Palbum Comments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
