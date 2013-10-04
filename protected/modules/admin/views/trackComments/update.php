<?php
/* @var $this TrackCommentsController */
/* @var $model TrackComments */

$this->breadcrumbs=array(
	'Track Comments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TrackComments', 'url'=>array('index')),
	array('label'=>'Create TrackComments', 'url'=>array('create')),
	array('label'=>'View TrackComments', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TrackComments', 'url'=>array('admin')),
);
?>

<h1>Update TrackComments <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>