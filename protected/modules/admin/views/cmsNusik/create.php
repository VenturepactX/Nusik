<?php
/* @var $this CmsNusikController */
/* @var $model CmsNusik */

$this->breadcrumbs=array(
	'Cms Nusiks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CmsNusik', 'url'=>array('index')),
	array('label'=>'Manage CmsNusik', 'url'=>array('admin')),
);
?>

<h1>Create CmsNusik</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>