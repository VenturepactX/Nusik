<?php
/* @var $this UserlogController */
/* @var $model Userlog */

$this->breadcrumbs=array(
	'Userlogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Userlog', 'url'=>array('index')),
	array('label'=>'Manage Userlog', 'url'=>array('admin')),
);
?>

<h1>Create Userlog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>