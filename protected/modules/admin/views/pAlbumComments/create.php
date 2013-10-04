<?php
/* @var $this PAlbumCommentsController */
/* @var $model PAlbumComments */

$this->breadcrumbs=array(
	'Palbum Comments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PAlbumComments', 'url'=>array('index')),
	array('label'=>'Manage PAlbumComments', 'url'=>array('admin')),
);
?>

<h1>Create PAlbumComments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>