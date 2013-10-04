<?php
/* @var $this FirstfanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Firstfans',
);

$this->menu=array(
	array('label'=>'Create Firstfan', 'url'=>array('create')),
	array('label'=>'Manage Firstfan', 'url'=>array('admin')),
);
?>

<h1>Firstfans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
