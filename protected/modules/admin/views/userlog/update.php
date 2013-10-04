<?php
/* @var $this UserlogController */
/* @var $model Userlog */

$this->breadcrumbs=array(
	'Userlogs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Userlog', 'url'=>array('index')),
	array('label'=>'Create Userlog', 'url'=>array('create')),
	array('label'=>'View Userlog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Userlog', 'url'=>array('admin')),
);
?>

<h1>Update Userlog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>