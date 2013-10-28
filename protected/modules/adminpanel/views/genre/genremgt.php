<script>
function addgenre()
{
var datastring='a='+document.getElementById("genrename").value;
	$.ajax({
			type:'POST',
			url:'<?php echo Yii::app()->createUrl("adminpanel/siteadmin/addgenre"); ?>',
			data:datastring,
			beforeSend:function()
			{
			
			},
			success:function(response)
			{
			alert(response);
			$.fn.yiiGridView.update('genere-grid');
			}
		});
		
}
</script>
<?php
 echo CHtml::link('Country Management',array('siteadmin/country'),array('class'=>'btn btn-primary')); ?>&nbsp;&nbsp;
<?php echo CHtml::link('City Management',array('city/citymgt'),array('class'=>'btn btn-primary')); ?>&nbsp;&nbsp;
<?php echo CHtml::link('Genere Management',array('genre/genremgt'),array('class'=>'btn btn-primary')); ?>&nbsp;&nbsp;<br><br>
<h3>Genre Management</h3>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'genres-addgenere-form',
	'enableAjaxValidation'=>false,
)); ?>
<br>
<?php echo CHtml::textField('Text','', array('id'=>'genrename')); ?>&nbsp;&nbsp;<br>
<?php echo CHtml::link('Add Genere','javascript:void(0);',array('class'=>'btn btn-danger','onclick'=>'addgenre();')); ?>
<?php $this->endWidget(); ?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'genere-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'name',
		'date_time',
		'status',
		array( 
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		        'updateButtonUrl'=>'Yii::app()->createUrl("/adminpanel/siteadmin/userupdate", array("id"=>$data->primaryKey))',
			'deleteButtonUrl'=>'Yii::app()->createUrl("/adminpanel/siteadmin/deletegenre", array("id"=>$data->primaryKey))',
		),
		),
		
)); ?>
