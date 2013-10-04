<?php
/* @var $this FirstfanController */
/* @var $model Firstfan */

$this->breadcrumbs=array(
	'Firstfans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Firstfan', 'url'=>array('index')),
	array('label'=>'Create Firstfan', 'url'=>array('create')),
	array('label'=>'View Firstfan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Firstfan', 'url'=>array('admin')),
);
?>

<h1>Update Firstfan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>