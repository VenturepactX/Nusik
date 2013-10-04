<?php
/* @var $this ProfileCommentsController */
/* @var $model ProfileComments */

$this->breadcrumbs=array(
	'Profile Comments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProfileComments', 'url'=>array('index')),
	array('label'=>'Create ProfileComments', 'url'=>array('create')),
	array('label'=>'View ProfileComments', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProfileComments', 'url'=>array('admin')),
);
?>

<h1>Update ProfileComments <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>