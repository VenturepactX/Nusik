<?php
/* @var $this MyplaylistController */
/* @var $model Myplaylist */

$this->breadcrumbs=array(
	'Myplaylists'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Myplaylist', 'url'=>array('index')),
	array('label'=>'Create Myplaylist', 'url'=>array('create')),
	array('label'=>'View Myplaylist', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Myplaylist', 'url'=>array('admin')),
);
?>

<h1>Update Myplaylist <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>