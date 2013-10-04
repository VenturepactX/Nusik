<?php
/* @var $this ArtDetailsController */
/* @var $model ArtDetails */

$this->breadcrumbs=array(
	'Art Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArtDetails', 'url'=>array('index')),
	array('label'=>'Create ArtDetails', 'url'=>array('create')),
	array('label'=>'View ArtDetails', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ArtDetails', 'url'=>array('admin')),
);
?>

<h1>Update ArtDetails <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>