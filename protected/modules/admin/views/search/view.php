<?php
/* @var $this SearchController */
/* @var $model Search */

$this->breadcrumbs=array(
	'Searches'=>array('index'),
	$model->date_time,
);

$this->menu=array(
	array('label'=>'List Search', 'url'=>array('index')),
	array('label'=>'Create Search', 'url'=>array('create')),
	array('label'=>'Update Search', 'url'=>array('update', 'id'=>$model->date_time)),
	array('label'=>'Delete Search', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->date_time),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Search', 'url'=>array('admin')),
);
?>

<h1>View Search #<?php echo $model->date_time; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'date_time',
		'search',
	),
)); ?>
