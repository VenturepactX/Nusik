<?php
/* @var $this CmsNusikController */
/* @var $model CmsNusik */

$this->breadcrumbs=array(
	'Cms Nusiks'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CmsNusik', 'url'=>array('index')),
	array('label'=>'Create CmsNusik', 'url'=>array('create')),
	array('label'=>'View CmsNusik', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CmsNusik', 'url'=>array('admin')),
);
?>

<h1>Update CmsNusik <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>