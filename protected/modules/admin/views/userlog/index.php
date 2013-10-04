<?php
/* @var $this UserlogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Userlogs',
);

$this->menu=array(
	array('label'=>'Create Userlog', 'url'=>array('create')),
	array('label'=>'Manage Userlog', 'url'=>array('admin')),
);
?>

<h1>Userlogs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
