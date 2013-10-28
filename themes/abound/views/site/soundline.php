<?php
$baseUrl= Yii::app()->theme->baseUrl;
?>
<section class="row-fluid">
	
	<section class="soundlne-container bgcolor-white">
	
		<div class="row-fluid">
			<span class="span8 offset1"><p class="heading">My Soundline</p></span>
			<span class="span3">
			<a href="#song"class="btn btn-info btn-block btn-large " data-toggle="modal">Upload a Song</a>
			</span>
			<hr width="100%" class="mgtop50"/>
			
		</div>	
		<div class="row-fluid bgcolor-white">
			<!-- Feed Section-->
			<section class="span8">
				<div class="row-fluid">
				<div class="padding-soundline20">
						
								<!--shared a song-->
								<div class="span4 img-polaroid20">	
											<span class="span12 thumbnail">
												<img src="<?php echo $baseUrl;?>/img/3.jpg" />
												<p align="center">Shreya Ghosal</p>
											</span>
											<span class="span12"><h5 class="span10">has shared</h5></span>
											<span class="span12"><h7><b></b></h7><a href=""><img src="<?php echo $baseUrl; ?>/img/play.png"/>Tumko Bhul Na Payege</a>
											<span class="span12"><img src="<?php echo $baseUrl; ?>/img/genre.png" /><a href=""> Genre Type</a></span>
											</span>
											<span class="span6 offset5">
													<img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
													<img src="<?php echo $baseUrl;?>/img/share.png" title="span2" class="small-icon"/>
													<img src="<?php echo $baseUrl;?>/img/share.png" title="span2" class="small-icon"/>
													<img src="<?php echo $baseUrl;?>/img/down.png" title="span2" class="small-icon"/>
											</span>
											<span class="span12"><small class="offset7 mgtop10">10 mins ago</small></span>
								</div>
								<!--Following-->
								<div class="span4 img-polaroid20">	
											<span class="span12 thumbnail">
												<img src="<?php echo $baseUrl;?>/img/2.jpg" />
												<p align="center">Shaan</p>
											</span>
											<span class="span12 mgtop10"><h5 class="span6">is following</h5><span class="span6 thumbnail">
												<img src="<?php echo $baseUrl;?>/img/3.jpg" class="img-small" />
												<p align="center">Shreya Ghosal</p>
											</span> </span>
											
											<span class="span12"><small class="offset7 mgtop10">40 mins ago</small></span>
								</div>
								<!--Shared a song-->
								<div class="span4 img-polaroid20">	
											<span class="span12 thumbnail">
												<img src="<?php echo $baseUrl;?>/img/5.jpg" />
												<p align="center">Sonu</p>
											</span>
												<span class="span12"><h5 class="span6">Shared</h5></span>
											<span class="span12 mgtop-20"><a href=""><img src="<?php echo $baseUrl; ?>/img/play.png"/>Tum Hi Ho</a>
											<span class="span12"><img src="<?php echo $baseUrl; ?>/img/mic.png" /><a href="" class="mgleft5">Atif Aslam</a></span>
											
											<span class="span12"><img src="<?php echo $baseUrl; ?>/img/genre.png" /><a href=""> Genre Type</a></span>
											</span>
											<span class="span12"><small class="offset7 mgtop10">10 mins ago</small></span>
								</div>
								<!--Liked an artist-->
								<div class="span4 img-polaroid20">	
											<span class="span12 thumbnail">
												<img src="<?php echo $baseUrl;?>/img/2.jpg" />
												<p align="center">Shaan</p>
											</span>
											<span class="span12 mgtop10"><h5 class="span6">has Liked</h5><span class="span6 thumbnail">
												<img src="<?php echo $baseUrl;?>/img/3.jpg" class="img-small" />
												<p align="center">Shreya Ghosal</p>
											</span> </span>
											
											<span class="span12"><small class="offset7 mgtop10">40 mins ago</small></span>
								</div>	
								<!--Made a comment-->	
								<div class="span4 img-polaroid20">	
											<span class="span12 thumbnail">
												<img src="<?php echo $baseUrl;?>/img/4.jpg" />
												<p align="center">Shaan</p>
											</span>
											<span class="span12 mgtop10"><p class="span12">Commented on Shreya's song</p>
												<span class="span12 thumbnail"><p align="center"> Great Share!!</p></span>
											</span>			
											<span class="span6 offset5">
												<span class="span12 offset10">
													<img src="<?php echo $baseUrl;?>/img/share.png" class="small-icon" title="Like" />
												</span>	
											</span>							
											<span class="span12"><small class="offset7">40 mins ago</small></span>
								</div>	
								<!--Liked a song-->
								<div class="span4 img-polaroid20">	
											<span class="span12 thumbnail">
												<img src="<?php echo $baseUrl;?>/img/5.jpg" />
												<p align="center">Sonu</p>
											</span>
												<span class="span12"><h5 class="span6">Liked</h5></span>
											<span class="span12 mgtop-20"><a href=""><img src="<?php echo $baseUrl; ?>/img/play.png"/>Tum Hi Ho</a>
											<span class="span12"><img src="<?php echo $baseUrl; ?>/img/mic.png" /><a href="" class="mgleft5">Atif Aslam</a></span>
											
											<span class="span12"><img src="<?php echo $baseUrl; ?>/img/genre.png" /><a href=""> Genre Type</a></span>
											</span>
											<span class="span12"><small class="offset7 mgtop10">10 mins ago</small></span>
								</div>
								
												
						</div>
				</div>
	  	</section>
			<!--Side Bar-->
			<section class="span4">
				
				<div class="span11 border-radius10 bgcolor-light">
				<span class="span12">
						<ul class="nav nav-tabs span11">
							<li class="active"><a href="#songs" data-toggle="tab"><b>Most Shared</b></a></li>
							<li><a href="#activity"  data-toggle="tab"><b>Most Liked</b></a></li>
						</ul>
					</span>
					<span class="span12 tab-content list-overflow">
					<!-- List of Songs-->
	                    <article class="tab-pane span12 active" id="songs"> 
                    	
							<div class="row-fluid padding-list5">		
															
										<span class="span3  bgcolor-white thumbnail">
											<img src="<?php echo $baseUrl;?>/img/2.jpg" />
											<p align="center">Pritam</p>
										</span>
									<div class="span9  bgcolor-white">
										<span class="span12 thumbnail"><p class="span12 mgtop20"><img src="<?php echo $baseUrl;?>/img/play.png" />Whenever Whenever</p>
										<p class="span5 offset7 mgtop5"><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
										<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
										<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/></p></span>	
										
									</div>
									
							</div>
							<div class="row-fluid padding-list5">		
															
										<span class="span3  bgcolor-white thumbnail">
											<img src="<?php echo $baseUrl;?>/img/2.jpg" />
											<p align="center">Pritam</p>
										</span>
									<div class="span9  bgcolor-white">
										<span class="span12 thumbnail"><p class="span12 mgtop20"><img src="<?php echo $baseUrl;?>/img/play.png" />Whenever Whenever</p>
										<p class="span5 offset7 mgtop5"><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
										<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
										<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/></p></span>	
										
									</div>
									
							</div>
							<div class="row-fluid padding-list5">		
															
										<span class="span3  bgcolor-white thumbnail">
											<img src="<?php echo $baseUrl;?>/img/2.jpg" />
											<p align="center">Pritam</p>
										</span>
									<div class="span9  bgcolor-white">
										<span class="span12 thumbnail"><p class="span12 mgtop20"><img src="<?php echo $baseUrl;?>/img/play.png" />Whenever Whenever</p>
										<p class="span5 offset7 mgtop5"><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
										<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
										<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/></p></span>	
										
									</div>
									
							</div>
							<div class="row-fluid padding-list5">		
															
										<span class="span3  bgcolor-white thumbnail">
											<img src="<?php echo $baseUrl;?>/img/2.jpg" />
											<p align="center">Pritam</p>
										</span>
									<div class="span9  bgcolor-white">
										<span class="span12 thumbnail"><p class="span12 mgtop20"><img src="<?php echo $baseUrl;?>/img/play.png" />Whenever Whenever</p>
										<p class="span5 offset7 mgtop5"><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
										<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
										<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/></p></span>	
										
									</div>
									
							</div>
							<div class="row-fluid padding-list5">		
															
										<span class="span3  bgcolor-white thumbnail">
											<img src="<?php echo $baseUrl;?>/img/2.jpg" />
											<p align="center">Pritam</p>
										</span>
									<div class="span9  bgcolor-white">
										<span class="span12 thumbnail"><p class="span12 mgtop20"><img src="<?php echo $baseUrl;?>/img/play.png" />Whenever Whenever</p>
										<p class="span5 offset7 mgtop5"><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
										<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
										<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/></p></span>	
										
									</div>
									
							</div>
							<div class="row-fluid padding-list5">		
															
										<span class="span3  bgcolor-white thumbnail">
											<img src="<?php echo $baseUrl;?>/img/2.jpg" />
											<p align="center">Pritam</p>
										</span>
									<div class="span9  bgcolor-white">
										<span class="span12 thumbnail"><p class="span12 mgtop20"><img src="<?php echo $baseUrl;?>/img/play.png" />Whenever Whenever</p>
										<p class="span5 offset7 mgtop5"><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
										<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
										<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/></p></span>	
										
									</div>
									
							</div>
							<div class="row-fluid padding-list5">		
															
										<span class="span3  bgcolor-white thumbnail">
											<img src="<?php echo $baseUrl;?>/img/2.jpg" />
											<p align="center">Pritam</p>
										</span>
									<div class="span9  bgcolor-white">
										<span class="span12 thumbnail"><p class="span12 mgtop20"><img src="<?php echo $baseUrl;?>/img/play.png" />Whenever Whenever</p>
										<p class="span5 offset7 mgtop5"><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
										<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
										<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/></p></span>	
										
									</div>
									
							</div>
							<div class="row-fluid padding-list5">		
															
										<span class="span3  bgcolor-white thumbnail">
											<img src="<?php echo $baseUrl;?>/img/2.jpg" />
											<p align="center">Pritam</p>
										</span>
									<div class="span9  bgcolor-white">
										<span class="span12 thumbnail"><p class="span12 mgtop20"><img src="<?php echo $baseUrl;?>/img/play.png" />Whenever Whenever</p>
										<p class="span5 offset7 mgtop5"><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
										<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
										<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/></p></span>	
										
									</div>
									
							</div>
							<div class="row-fluid padding-list5">		
															
										<span class="span3  bgcolor-white thumbnail">
											<img src="<?php echo $baseUrl;?>/img/2.jpg" />
											<p align="center">Pritam</p>
										</span>
									<div class="span9  bgcolor-white">
										<span class="span12 thumbnail"><p class="span12 mgtop20"><img src="<?php echo $baseUrl;?>/img/play.png" />Whenever Whenever</p>
										<p class="span5 offset7 mgtop5"><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
										<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
										<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/></p></span>	
										
									</div>
									
							</div>
							
						</article>
					<!-- List of Recent Updates-->
  					    <article class="tab-pane table-overflow" id="activity"> 
						 		
						</article>
		</span>	
				</div>
			
			</section>
			
			
		</div>
		<!-- Upload Song -->
		<section class="row-fluid">
		  <section id="song" class="modal hide fade">
			 <header class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h1>NUSIK</h1>
			 </header>
			   <div class="modal-body">
			   <?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'Upload-Song',
					'action'=>$this->createUrl('site/registration'),
					'htmlOptions'=>array('enctype'=>'multipart/form-data'),
					// Please note: When you enable ajax validation, make sure the corresponding
					// controller action is handling ajax validation correctly.
					// There is a call to performAjaxValidation() commented in generated controller code.
					// See class documentation of CActiveForm for details on this.
					'enableAjaxValidation'=>false,
				 )); ?>
					 <table cellspacing="5" cellpadding="" style="margin:auto;">
				  
						<tr><td>Song Name</td></tr>
						<tr><td><?php echo $form->textField($model,'song_name',array('size'=>45,'maxlength'=>45));?></td></tr>
						<tr><td>Browse</td></tr>
						<tr><td><?php echo $form->fileField($model,'song_url');?></td></tr>
						<tr><td>Song Description</td></tr>
						<tr><td><?php echo $form->passwordField($model,'song_discription',array('size'=>45,'maxlength'=>45));?></td></tr>
					   
						<tr><td><center><input type="submit" value="Post" class="btn btn-info" /></center></td></tr>
					</table>
					 
					
				   
	<?php $this->endWidget(); ?>
				   
			 </div>
			<footer class="modal-footer">
			   <button class="btn btn-info" data-dismiss="modal">Close</button>
		   </footer>
	</section>
</section>



	</section>
</section>