<?php
/* @var $this MyplaylistController */
/* @var $model Myplaylist */

$this->breadcrumbs=array(
	'Myplaylists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Myplaylist', 'url'=>array('index')),
	array('label'=>'Manage Myplaylist', 'url'=>array('admin')),
);
?>

<h1>Create Myplaylist</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>