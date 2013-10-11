<section class="container-fluid span12 offset1">
        <header class="row-fluid">
        	<div class="span2">
            	<img src="<?php echo $baseUrl;?>/img/logo.png" />
            </div>
            <audio controls class="span7 mgtop10">
              <source src="99.ogg" type="audio/ogg">
              <source src="99.mp3" type="audio/mpeg">
              Sorry Your browser does not support the audio element.
            </audio>
			<div class="pull-right span3 mgtop10"> 
	 			<?php 
				if(Yii::app()->user->isGuest){
				echo "<a href='#signup' class='btn btn-primary' data-toggle='modal'> SIGN UP</a><a href='#signin' class='btn btn-primary' data-toggle='modal'>SIGN IN</a>";
				}else{
				$model=UserDetails::model()->findByAttributes(array('login_id'=>Yii::app()->user->id));
				
				echo "<span class='mgleft10'><span class='span2'>".CHtml::image(ImageFly::Instance()->get($model, 'image'))."</span>
            	<span class='color-white mgtop10 '>".Yii::app()->user->getState('dname').
                "<a href='".Yii::app()->createUrl('/site/logout')."' class='btn btn-primary mgleft10' data-toggle='modal'>SIGN OUT</a></span></span>"; 
				}
			?> 
			
			</div>     	
        </header>
    	<section class="row-fluid">
        	<article class="span12">
            	<p class="color-white  txt-align-center rgba-black padding-top15 padding20">SEARCH ARTIST BY LOCATION</p>
						<p class="offset3 span6"><input type="text" class="width80 mgauto" /><span class="btn btn-primary pull-right">GO</span></p>
             </article>
        </section>