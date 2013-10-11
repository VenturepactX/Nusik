<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>
<section class="container-fluid">
         <section class="row-fluid player">
        </section>
        <section class="row-fluid">
            <nav class="nav">
               <ul class="nav nav-tabs color-white">
                	<li><a href="">ABOUT</a></li>
                	<li><a href="<?php echo Yii::app()->createUrl('/site/profile');?>">BIO-DATA</a></li>
                	<li><a href="">IMAGES</a></li>
                	<li><a href="<?php echo Yii::app()->createUrl('/site/album');?>">Albums</a></li>
                	<li><a href="">CONTACT</a></li>
                </ul>
            </nav>
        </section>
   
        <section class="row-fluid">
            <article class="span8 bgcolor-lightgrey mgtop10 offset2">
             <img src="<?php echo $baseUrl;?>/img/singer3.jpg" class="img-polaroid"> 
              <div class="span6 pull-right">
            <h3> Singer </h3> 
            <h1> ENRIQUE IGLESIAS </h1>
             <div class="span2">
                        	<a href="file:///C:/Users/DELL/Desktop/bootstrap/nusik/album.html#follow" class="btn bgcolor-darkestgrey">FOLLOW</a>
                        	
            </div> 
            <div class="span12"></div>
             <div class="pull-right  span12 bgcolor-darkestgrey">
                    	<span class=""><a href="https://facebook.com/"><img src="<?php echo $baseUrl;?>/img/facebook-square.png"></a></span>
                       	<span class=""><a href="https://gmail.com/"><img src="<?php echo $baseUrl;?>/img/google-square.png"></a></span>
                       	<span class=""><a href="https://twitter.com/"><img src="<?php echo $baseUrl;?>/img/twitter-square.png"></a></span> 
                 </div>        
              </div>
       
             </article>
         </section>
         
         
         <div class="span12"></div>
       
         <section class="span8">
            <article class="span8 bgcolor-lightgrey mgtop10 offset2">
             <div class="row-fluid">
                <div class="span4 pull-left offset5">
                    <h1>SONGS</h1>
                 </div>
                   <div class="span3 pull-right"><a href="file:///C:/Users/DELL/Desktop/bootstrap/nusik/album.html#" class="btn  mgtop10 bgcolor-darkestgrey">PLAY SELECTED</a></div>
                 </div>
            
            <div class="span11">
               <ul class="span12 nav">
                 <div class="span6 black">
                      <h3><div class="span8"><li><a href="">Track 1</a></li></div></h3>
                      <div class="span2 pull-right"><a href="file:///C:/Users/DELL/Desktop/bootstrap/nusik/album.html#" class="btn ">PLAY</a></div>
                      
                 </div>
                 
                  <div class="span6 black">
                      <h3><div class="span8"><li><a href="">Track 2</a></li></div></h3>
                      <div class="span2 pull-right"><a href="file:///C:/Users/DELL/Desktop/bootstrap/nusik/album.html#" class="btn ">PLAY</a></div>
                      
                 </div>
                 
                  <div class="span6 black">
                      <h3><div class="span8"><li><a href="">Track 3</a></li></div></h3>
                      <div class="span2 pull-right"><a href="file:///C:/Users/DELL/Desktop/bootstrap/nusik/album.html#" class="btn ">PLAY</a></div>
                      
                 </div>
                 
                  <div class="span6 black">
                      <h3><div class="span8"><li><a href="">Track 4</a></li></div></h3>
                      <div class="span2 pull-right"><a href="file:///C:/Users/DELL/Desktop/bootstrap/nusik/album.html#" class="btn ">PLAY</a></div>
                      
                 </div>
                 
                  <div class="span6 black">
                      <h3><div class="span8"><li><a href="">Track 5</a></li></div></h3>
                      <div class="span2 pull-right"><a href="file:///C:/Users/DELL/Desktop/bootstrap/nusik/album.html#" class="btn ">PLAY</a></div>
                      
                 </div>
                 
                  <div class="span6 black">
                      <h3><div class="span8"><li><a href="">Track 6</a></li></div></h3>
                      <div class="span2 pull-right"><a href="file:///C:/Users/DELL/Desktop/bootstrap/nusik/album.html#" class="btn ">PLAY</a></div>
                      
                 </div>
                 
                  <div class="span6 black">
                      <h3><div class="span8"><li><a href="">Track 7</a></li></div></h3>
                      <div class="span2 pull-right"><a href="file:///C:/Users/DELL/Desktop/bootstrap/nusik/album.html#" class="btn ">PLAY</a></div>
                      
                 </div>
                 
                  <div class="span6 black">
                      <h3><div class="span8"><li><a href="">Track 8</a></li></div></h3>
                      <div class="span2 pull-right"><a href="file:///C:/Users/DELL/Desktop/bootstrap/nusik/album.html#" class="btn ">PLAY</a></div>
                      
                 </div>
                 
                   <div class="span6 black">
                      <h3><div class="span8"><li><a href="">Track 9</a></li></div></h3>
                      <div class="span2 pull-right"><a href="file:///C:/Users/DELL/Desktop/bootstrap/nusik/album.html#" class="btn ">PLAY</a></div>
                      
                 </div>
                 
                   <div class="span6 black">
                      <h3><div class="span8"><li><a href="">Track 10</a></li></div></h3>
                      <div class="span2 pull-right"><a href="file:///C:/Users/DELL/Desktop/bootstrap/nusik/album.html#" class="btn ">PLAY</a></div>
                      
                 </div>
                   
                 </ul>
               </div>
             </article>
          </section>
       </section>
       