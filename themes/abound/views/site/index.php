<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	?> 
    
<section class="container-fluid">
  <section class="row-fluid">
      <section id="artist" class="modal hide fade">
         <header class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
		    <h1>NUSIK</h1>
         </header>
           <div class="modal-body">
             <h4><span id="role"> </span> Sign Up</h4>
             <p>
              
               <div id="login">
    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'Artist-Sign-up',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
 )); ?>
                 <table cellspacing="5" cellpadding="5" style="margin:auto;">
              
                    <tr><td>DISPLAY NAME</td></tr>
                    <tr><td><?php echo $form->textField($model,'display_name',array('size'=>45,'maxlength'=>45));?></td></tr>
                    <tr><td>EMAIL</td></tr>
                    <tr><td><?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45));?></td></tr>
                    <tr><td>PASSWORD</td></tr>
                    <tr><td><?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45));?></td></tr>
                    <tr><td>CONFIRM PASSWORD</td></tr>
                    <tr><td><?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45));?></td></tr>
                    <tr><td><center><input type="submit" value="REGISTER" class="btn btn-info" /></center></td></tr>
                </table>
				<?php echo $form->hiddenField($model,'roles_id',array('id'=>'roles')); ?>
				 
				
               
<?php $this->endWidget(); ?>
               </div>
           </p>  
         </div>
        <footer class="modal-footer">
	       <button class="btn btn-info" data-dismiss="modal">Close</button>
       </footer>
</section>

<!--<section id="listener" class="modal hide fade">
    <header class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		<h1>NUSIK</h1>
    </header>
    <div class="modal-body">
        <h4>Listener Sign Up</h4>
        <p>
            <div id="login">
    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'Artist-Sign-up',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
 )); ?>
                 <table cellspacing="5" cellpadding="5" style="margin:auto;">
              
                    <tr><td>DISPLAY NAME</td></tr>
                    <tr><td><?php echo $form->textField($model,'display_name',array('size'=>45,'maxlength'=>45));?></td></tr>
                    <tr><td>EMAIL</td></tr>
                    <tr><td><?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45));?></td></tr>
                    <tr><td>PASSWORD</td></tr>
                    <tr><td><?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45));?></td></tr>
                    <tr><td>CONFIRM PASSWORD</td></tr>
                    <tr><td><?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?></td></tr>
                    <tr><td><center><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary large','value'=>'SINGUP')); ?></center></td></tr>
                </table>
               
<?php $this->endWidget(); ?>
            </div>
        </p>  
    </div>
    <footer class="modal-footer">
	    <button class="btn btn-info" data-dismiss="modal">Close</button>
    </footer>
   </section> -->
  </section>
</section>
 
 
 <section class="container-fluid span12">
  <section class="row-fluid mgtop-200 offset4 mgleft460"><img src="<?php echo $baseUrl;?>/img/logo.png" /></section>
   <aside  class="span6  mgleft380 pull-left  black">
      <h1>A new way to Discover Music</h1>
      </aside> 
     
      </section>
      
       <aside class="span8  pull-left mgtop80 ">
	           <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
		'action'=>Yii::app()->createUrl('/site/index'),
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>
                <span class="span4"><?php echo $form->textField($model,'email',array('placeholder'=>'Username','autofocus'=>true)); ?> </span>
                <span class="span4">  <?php echo $form->passwordField($model,'password',array('placeholder'=>'Password')); ?>
               <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-info btn-large mgleft10 ')); ?></span>
              <h8> <span class="span4 "> <a href="#" class="black">Forgot Password?</a></span></h8>
                <span class="span4 mgleft30 black"></span>
                     
          
				<?php $this->endWidget(); ?>    
           </aside>
      
  
            <section class="pull-right span7  offset2 mgtop240 ">
          <script type="text/javascript" >
		  $(document).ready(function(){
 			$('#artist').click(function(){
			   document.getElementById('role').innerHTML="Artist";
			   document.getElementById('roles').value='1';
			});
			
			$('#listener').click(function(){
			   document.getElementById('role').innerHTML="Listener";
			   document.getElementById('roles').value='2';
			});
		  
		  });
		  </script>
                   <span class="span2 offset2  "> <a href="#artist" id='artist' class="btn btn-info btn-block btn-large " data-toggle="modal">SIGNUP ARTISTS</a></span>
                   <span class="span2"> <a href="#artist" id='listener' class="btn btn-info btn-block btn-large" data-toggle="modal">SIGNUP LISTENERS</a></span>
            </section>
      
         

           
           
       