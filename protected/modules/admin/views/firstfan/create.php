<?php
/* @var $this FirstfanController */
/* @var $model Firstfan */

$this->breadcrumbs=array(
	'Firstfans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Firstfan', 'url'=>array('index')),
	array('label'=>'Manage Firstfan', 'url'=>array('admin')),
);
?>

<h1>Create Firstfan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>