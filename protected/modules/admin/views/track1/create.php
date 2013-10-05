<?php
/* @var $this TrackController */
/* @var $model Track */

$this->breadcrumbs=array(
	'Tracks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Track', 'url'=>array('index')),
	array('label'=>'Manage Track', 'url'=>array('admin')),
);
?>

<h1>Create Track</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>