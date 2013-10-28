<?php
 echo CHtml::link('Country Management',array('siteadmin/country'),array('class'=>'btn btn-primary')); ?>&nbsp;&nbsp;
<?php echo CHtml::link('City Management',array('city/citymgt'),array('class'=>'btn btn-primary')); ?>&nbsp;&nbsp;
<?php echo CHtml::link('Genere Management',array('genre/genremgt'),array('class'=>'btn btn-primary')); ?>&nbsp;&nbsp;<br><br>
<h3>Country Management</h3>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'country-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'name',
		array( 
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		         'updateButtonUrl'=>'Yii::app()->createUrl("/adminpanel/siteadmin/userupdate", array("id"=>$data->primaryKey))',
			'deleteButtonUrl'=>'Yii::app()->createUrl("/adminpanel/siteadmin/deletegenre", array("id"=>$data->primaryKey))',
		),
		),
		
)); ?>
