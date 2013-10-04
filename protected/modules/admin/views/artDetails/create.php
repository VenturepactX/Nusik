<?php
/* @var $this ArtDetailsController */
/* @var $model ArtDetails */

$this->breadcrumbs=array(
	'Art Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArtDetails', 'url'=>array('index')),
	array('label'=>'Manage ArtDetails', 'url'=>array('admin')),
);
?>

<h1>Create ArtDetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>