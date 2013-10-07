<?php
/* @var $this CmsNusikController */
/* @var $model CmsNusik */

$this->breadcrumbs=array(
	'Cms Nusiks'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List CmsNusik', 'url'=>array('index')),
	array('label'=>'Create CmsNusik', 'url'=>array('create')),
	array('label'=>'Update CmsNusik', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CmsNusik', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CmsNusik', 'url'=>array('admin')),
);
?>

<h1>View CmsNusik #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'date_time',
		'status',
	),
)); ?>
