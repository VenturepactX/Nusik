<?php echo CHtml::link('Reports on Comments',array('report/commentreports'),array('class'=>'btn btn-success')); ?>&nbsp;&nbsp;
<?php echo CHtml::link('Reports on Track',array('report/trackreports'),array('class'=>'btn btn-info')); ?>&nbsp;&nbsp;
<?php echo CHtml::link('Reports on Profile',array('report/profilereports'),array('class'=>'btn btn-white')); ?>&nbsp;&nbsp;<br><br>
<h3>Reports on Artist Track</h3>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'report_id',
		'artist_track_id',
		),
			
)); ?>
