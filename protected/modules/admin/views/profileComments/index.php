<?php
/* @var $this ProfileCommentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profile Comments',
);

$this->menu=array(
	array('label'=>'Create ProfileComments', 'url'=>array('create')),
	array('label'=>'Manage ProfileComments', 'url'=>array('admin')),
);
?>

<h1>Profile Comments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
