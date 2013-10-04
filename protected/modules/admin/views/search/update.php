<?php
/* @var $this SearchController */
/* @var $model Search */

$this->breadcrumbs=array(
	'Searches'=>array('index'),
	$model->date_time=>array('view','id'=>$model->date_time),
	'Update',
);

$this->menu=array(
	array('label'=>'List Search', 'url'=>array('index')),
	array('label'=>'Create Search', 'url'=>array('create')),
	array('label'=>'View Search', 'url'=>array('view', 'id'=>$model->date_time)),
	array('label'=>'Manage Search', 'url'=>array('admin')),
);
?>

<h1>Update Search <?php echo $model->date_time; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>