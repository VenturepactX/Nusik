<?php
/* @var $this PAlbumCommentsController */
/* @var $model PAlbumComments */

$this->breadcrumbs=array(
	'Palbum Comments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PAlbumComments', 'url'=>array('index')),
	array('label'=>'Create PAlbumComments', 'url'=>array('create')),
	array('label'=>'View PAlbumComments', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PAlbumComments', 'url'=>array('admin')),
);
?>

<h1>Update PAlbumComments <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>