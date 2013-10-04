<?php
/* @var $this ProfileCommentsController */
/* @var $model ProfileComments */

$this->breadcrumbs=array(
	'Profile Comments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfileComments', 'url'=>array('index')),
	array('label'=>'Manage ProfileComments', 'url'=>array('admin')),
);
?>

<h1>Create ProfileComments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>