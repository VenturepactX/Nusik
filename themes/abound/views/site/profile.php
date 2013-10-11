<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>
 <section class="row-fluid player">
        </section>
        <section class="row-fluid">
            <nav class="nav">
                <ul class="nav nav-tabs color-white">
                	<li><a href="">ABOUT</a></li>
                	<li><a href="">BIO-DATA</a></li>
                	<li><a href="">IMAGES</a></li>
                	<li><a href="<?php echo Yii::app()->createUrl('/site/album');?>">Albums</a></li>
                	<li><a href="">CONTACT</a></li>
                </ul>
            </nav>
			<?php 
			/*
			foreach($albums as $alb)
			{
		 	CVarDumper::dump($alb->name,10,1);}
			die;*/?>
        </section>
        <section class="row-fluid">
        	<article class="span8 bgcolor-lightgrey mgtop10">
                <ul  class="thumbnails span11 mgtop10">
			<?php foreach($albums as $album)
			{?>
					<a href="#">
					<li class="thumbnail span3 offset1">
					 	<p class="color-darkestgrey txt-align-center"><?php echo $album->name;?></p>
						<div class="img-polaroid"><?php  echo CHtml::image(ImageFly::Instance()->get($album,'image',250,250));?></div>
						<p class="color-darkestgrey txt-align-justify">
							Although the world at large has continued to make the shift from the Industrial Age to the Data Age
						</p>
					</li></a>
			<?php }?>
					
            </article>
            <aside class="span4 bgcolor-lightgrey mgtop10">
            	<span class="thumbnails">
                	<span class="thumbnail span10 offset1">
                    	<?php  echo CHtml::image(ImageFly::Instance()->get($model,'image',450,350));?>
						<p class="color-darkestgrey txt-align-center"><b><?php echo $model->first_name.' '.$model->last_name;?></b></p>
                        <p class="color-darkestgrey txt-align-justify padding20">
						<?php $models=$model->artDetails;?>
						<?php //CVarDumper::dump($models,10,1);die;?>
						</p>
                    </span>
                </span>
            </aside>
        
        </section>
