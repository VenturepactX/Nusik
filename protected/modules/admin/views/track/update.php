<?php
/* @var $this TrackController */
/* @var $model Track */

$this->breadcrumbs=array(
	'Tracks'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Track', 'url'=>array('index')),
	array('label'=>'Create Track', 'url'=>array('create')),
	array('label'=>'View Track', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Track', 'url'=>array('admin')),
);
?>

<h1>Update Track <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>