<?php
/* @var $this PAlbumCommentsController */
/* @var $model PAlbumComments */

$this->breadcrumbs=array(
	'Palbum Comments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PAlbumComments', 'url'=>array('index')),
	array('label'=>'Create PAlbumComments', 'url'=>array('create')),
	array('label'=>'Update PAlbumComments', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PAlbumComments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PAlbumComments', 'url'=>array('admin')),
);
?>

<h1>View PAlbumComments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'comment',
		'date_time',
		'status',
		'albums_id',
		'login_id',
	),
)); ?>
