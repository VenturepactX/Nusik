<?php
/* @var $this ArtDetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Art Details',
);

$this->menu=array(
	array('label'=>'Create ArtDetails', 'url'=>array('create')),
	array('label'=>'Manage ArtDetails', 'url'=>array('admin')),
);
?>

<h1>Art Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
