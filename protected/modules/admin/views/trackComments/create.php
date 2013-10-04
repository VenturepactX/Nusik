<?php
/* @var $this TrackCommentsController */
/* @var $model TrackComments */

$this->breadcrumbs=array(
	'Track Comments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TrackComments', 'url'=>array('index')),
	array('label'=>'Manage TrackComments', 'url'=>array('admin')),
);
?>

<h1>Create TrackComments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>