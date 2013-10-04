<?php
/* @var $this MyplaylistController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Myplaylists',
);

$this->menu=array(
	array('label'=>'Create Myplaylist', 'url'=>array('create')),
	array('label'=>'Manage Myplaylist', 'url'=>array('admin')),
);
?>

<h1>Myplaylists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
