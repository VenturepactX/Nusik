<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>
    <section class="container-fluid">
<section class="row-fluid">
<section id="signin" class="modal hide fade">
    <header class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		<img src="<?php echo $baseUrl;?>/img/logo.png"/>
    </header>
    <div class="modal-body">
        <h4>SIGN IN HERE</h4>
        <p>
            <div id="login">
                <table align="center">
                    <tr>
                        <td>USERNAME</td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>PASSWORD</td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                    	<td><input type="submit" class="btn btn-primary" /></td>
                    	<td><a href="">FORGET YOUR PASSWORD</a></td>
                    </tr>  
                </table>
            </div>
        </p>  
    </div>
    <footer class="modal-footer">
	    <button class="btn btn-primary" data-dismiss="modal">Close</button>
    </footer>
</section>

<section id="signup" class="modal hide fade">
    <header class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		<img src="<?php echo $baseUrl;?>/img/logo.png" />
    </header>
    <div class="modal-body">
        <h4>SIGN UP HERE</h4>
        <p>
            <div id="login">
                <table cellspacing="5" cellpadding="5" style="margin:auto;">
                    <tr><td>EMAIL</td></tr>
                    <tr><td><input type="text"></td></tr>
                    <tr><td>PASSWORD</td></tr>
                    <tr><td><input type="text"></td></tr>
                    <tr><td>CONFIRM PASSWORD</td></tr>
                    <tr><td><input type="text"></td></tr>
                    <tr><td>USER TYPE</td></tr>
                    <tr><td><input type="text"></td></tr>
                    <tr><td><center><input type="submit" value="REGISTER" class="btn btn-primary" /></center></td></tr>
                </table>
            </div>
        </p>  
    </div>
    <footer class="modal-footer">
	    <button class="btn btn-primary" data-dismiss="modal">Close</button>
    </footer>
</section>
</section>
</section>
	<div id="progress-back" class="load-item">
		<div id="progress-bar"></div>
	</div>


<section class="row-fluid">
			
			<span class="thumbnails">
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (1).jpg"  class="img-rounded rotate"/>
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (2).jpg"  class="img-rounded rotate" />
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (3).jpg"  class="img-rounded rotate"/>
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (4).jpg"  class="img-rounded rotate"/>
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (5).jpg"  class="img-rounded rotate"/>
                </span>
            	<span class="thumbnail span2">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (6).jpg"  class="img-rounded rotate"/>
                </span>
            </span>
            <span class="thumbnails">
            	<span class="thumbnail span2 mgtop10">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (7).jpg"  class="img-rounded rotate"/>
                </span>
            	<span class="thumbnail span2 mgtop10">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (8).jpg"  class="img-rounded rotate" />
                </span>
            	<span class="thumbnail span2 mgtop10">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (9).jpg"  class="img-rounded rotate"/>
                </span>
            	<span class="thumbnail span2 mgtop10">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (10).jpg"  class="img-rounded rotate"/>
                </span>
            	<span class="thumbnail span2 mgtop10">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (11).jpg"  class="img-rounded rotate"/>
                </span>
            	<span class="thumbnail span2 mgtop10">
                	<img src="<?php echo $baseUrl;?>/img/thumbs/1 (12).jpg"  class="img-rounded rotate"/>
                </span>
            </span>
            
            
        </section>
