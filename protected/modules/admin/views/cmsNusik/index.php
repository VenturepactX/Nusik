<?php
/* @var $this CmsNusikController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cms Nusiks',
);

$this->menu=array(
	array('label'=>'Create CmsNusik', 'url'=>array('create')),
	array('label'=>'Manage CmsNusik', 'url'=>array('admin')),
);
?>

<h1>Cms Nusiks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
