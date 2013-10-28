<?php
$baseUrl= Yii::app()->theme->baseUrl;
?>


<script type="text/javascript" > 

	$(function() {
					      
		$(".a").click(function(){
			$("#tab2").show();
			$("#tab3").hide();
		});
		
		$(".b").click(function(){
			$("#tab2").hide();
			$("#tab3").show();
	     });
			
    });
	
</script>
<section class="container-fluid1">
<div class="profile-back">
  	<img src="<?php echo $baseUrl;?>/img/bac.jpg" class="img-polaroids"/>
  </div>
<section class="profile-container">
<!-- User profile started-->


  
	<!-- Profile Name and right-top buttons-->
		<section class="row-fluid">
	<div class="span12">
	<!-- Name of Artist-->
		<div class="span6">	
		<span class="span11 color-black"><h3 class="name-font mgleft padding10">Sonu Nigam</h3>
		<!--	<span class="span12 mgtop-20 "><small class="color-darkblue offset1"><b class="mgleft10">Joined 31-Sept-2013</b></small></span>
		--></span>
	</div>
	<!-- Social Buttons-->
		<div class="span3 offset3 mgtop10">
			
			<div class="thumbnails span3"><a href="#"><img src="<?php echo $baseUrl; ?>/img/shareactive.png" title="Share this Profile"/></a></div>
			<div class="thumbnails span3"><a href="#"><img src="<?php echo $baseUrl; ?>/img/like.png" title="Like Sonu" /></a> </div>
			<div class="thumbnails span3"><a href="#"><img src="<?php echo $baseUrl; ?>/img/twactive.png" title="Follow Sonu" /></a></div>
			<div class="thumbnails span3"><a href="#"><img src="<?php echo $baseUrl; ?>/img/fbactive.png" title="Share this Profile"/></a></div>
	
		</div>
		</div>
	</section>
	<!-- Row Two main-profile section-->
	<section class="row-fluid">
	<!-- Sidebar with biography-->
		<span class="span4 thumbnails">
		<div class="mgleft20">
		<div class="span12 border-radius10 padding20 bgcolor-lightgrey">	
		
			<img src="<?php echo $baseUrl;?>/img/sonu.jpg" class="img-polaroid span12" /> 
		<div class="span12 mgtop10">
		
			<h5 class=""><img src="<?php echo $baseUrl; ?>/img/male.png" class="mgright5"/>Male, 32</h5>
			<h4 class=" mgtop10"><img src="<?php echo $baseUrl; ?>/img/place.png" /> Location, Country</h4>
			<p class="color-darkblue "><img src="<?php echo $baseUrl; ?>/img/email.png"/><b class="mgleft5">sonu.nigam@example.com</b></p>
				<p class=" mgtop10"><img src="<?php echo $baseUrl; ?>/img/genre.png" /><b><span class="color-darkblue mgleft5">GenreName</span></b></p><br />
	</div>
	
				<h4 class="mgleft10">ABOUT ME</h4>
					<hr class="color-white mgtop-5"/>
				 <p  class="mgleft10 mgright5 font-segoe" align="justify" >"Sonu Nigam or Sonu Niigaam born July 30, 1973 in Faridabad, Haryana, India is a highly acclaimed Indian playback singer whose songs have been featured in numerous Bollywood and Kannada movies. He has also released numerous Indi-pop albums and acted in a few Hindi feature films. He has changed acclaimed Indian playback singer whose songs have been featured in numerous Bollywood and Kannada movies. He has also released numerous Indi-pop albums and acted in a few Hindi feature films. He has changed the spelling of his last name from in accordance with numerology."</p>
				<h4 class="mgleft10">ACHIEVMENTS</h4>
					<hr class="color-white mgtop-5"/>
				  <ul class="font-segoe">
				  	<li>Best Singer-National Filmfare Award,2000</li>
					<li>Winner Sa Re Ga Ma Pa,1995</li>
					<li>Gaurd of Honor- Govt. of Australia,2010</li>
				</ul>
		</div>
		</div>
	</span>	 
	
	
		<div class="span8 border-radius10">
	<!-- Colored Boxes-->
		<span class="span12 mgtop20">
		<span class="span2 box-blue"><img src="<?php echo $baseUrl;?>/img/likes.png"/><h4 class="mgtop5">10,243</h4><h6 class="mgtop-10">Likes</h6> </span>
			<span class="span2 box-red"><img src="<?php echo $baseUrl;?>/img/songs.png"/><h4 class="mgtop5">76</h4><h6 class="mgtop-10">Songs</h6> </span>
			<span class="span2 box-grey"><img src="<?php echo $baseUrl;?>/img/comment.png"/><h4 class="mgtop5">1,038</h4><h6 class="mgtop-10">Comments</h6> </span>
			<span class="span2 box-green"><img src="<?php echo $baseUrl;?>/img/shared.png"/><h4 class="mgtop5">88</h4><h6 class="mgtop-10">Shares</h6> </span>
			<span class="span2 box-orange"><img src="<?php echo $baseUrl;?>/img/groups.png"/><h4 class="mgtop5">1,045</h4><h6 class="mgtop-10">Followers </h6> </span>
			</span>
	<!-- List of Followers-->
		<div class="span12">
		<span class="span6"><h3>Followers</h3></span>
				<span class="offset3 span3"><a href="#"><small class="btn btn-success badge mgtop20 ">View All</small></a></span>
	</div>
		<div class="span12">
						<span class="thumbnails">
							<span class="span2 thumbnail">
								<img src="<?php echo $baseUrl;?>/img/3.jpg" />
								<p align="center">Shreya Ghosal</p>
							</span>
							<span class="span2 thumbnail">
								<img src="<?php echo $baseUrl;?>/img/1.jpg" />
								<p align="center">Mohit Suri</p>
							</span>
							<span class="span2 thumbnail">
								<img src="<?php echo $baseUrl;?>/img/5.jpg" />
								<p align="center">Shaan</p>
							</span>
							<span class="span2 thumbnail">
								<img src="<?php echo $baseUrl;?>/img/2.jpg" />
								<p align="center">Pritam</p>
							</span>
							<span class="span2 thumbnail">
								<img src="<?php echo $baseUrl;?>/img/3.jpg" />
								<p>Shreya Ghosal</p>
							</span>
							
					
					</span>	
							
																		
					</div>
	<!-- Tabs for Songs Activity-->		
		<span class="span12 mgtop30">
			<ul class="nav nav-tabs span11">
				<li class="active"><a href="#songs" data-toggle="tab"><b>Songs</b></a></li>
				<li><a href="#activity"  data-toggle="tab"><b>Recent Activity</b></a></li>
				<li><a href="#activity"  data-toggle="tab"><b>Concerts</b></a></li>
				<li><a href="#activity"  data-toggle="tab"><b>Comments</b></a></li>
			</ul>
		</span>
		<!-- Both Tabs-->
		<span class="span11 tab-content table-overflow mgtop-5">
					<!-- List of Songs-->
	                    <article class="tab-pane active" id="songs"> 
                    	<table width="100%" class="mgleft-20">
								<tr>
									<th></th>
									<th>Song Name</th>
									<th>Artist</th>
									<th></th>
								</tr>
								<tr>
									<td><a href="#"><img src="<?php echo $baseUrl;?>/img/note.png"/></a></td>
									<td>Whenever Whenever</td>
									<td><a href="#" class="color-darkblue"><b>Sonu Nigam</b></a></td>
									<td><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
									<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
									<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/>
									
									</td>
									
								</tr>	<tr>
									<td><a href="#"><img src="<?php echo $baseUrl;?>/img/note.png"/></a></td>
									<td>Whenever Whenever</td>
									<td><a href="#" class="color-darkblue"><b>Sonu Nigam</b></a></td>
									<td><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
									<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
									<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/>
									
									</td>
									
								</tr>		<tr>
									<td><a href="#"><img src="<?php echo $baseUrl;?>/img/note.png"/></a></td>
									<td>Whenever Whenever</td>
									<td><a href="#" class="color-darkblue"><b>Sonu Nigam</b></a></td>
									<td><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
									<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
									<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/>
									
									</td>
									
								</tr>		<tr>
									<td><a href="#"><img src="<?php echo $baseUrl;?>/img/note.png"/></a></td>
									<td>Whenever Whenever</td>
									<td><a href="#" class="color-darkblue"><b>Sonu Nigam</b></a></td>
									<td><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
									<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
									<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/>
									
									</td>
									
								</tr>		<tr>
									<td><a href="#"><img src="<?php echo $baseUrl;?>/img/note.png"/></a></td>
									<td>Whenever Whenever</td>
									<td><a href="#" class="color-darkblue"><b>Sonu Nigam</b></a></td>
									<td><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
									<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
									<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/>
									
									</td>
									
								</tr>		<tr>
									<td><a href="#"><img src="<?php echo $baseUrl;?>/img/note.png"/></a></td>
									<td>Whenever Whenever</td>
									<td><a href="#" class="color-darkblue"><b>Sonu Nigam</b></a></td>
									<td><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
									<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
									<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/>
									
									</td>
									
								</tr>		<tr>
									<td><a href="#"><img src="<?php echo $baseUrl;?>/img/note.png"/></a></td>
									<td>Whenever Whenever</td>
									<td><a href="#" class="color-darkblue"><b>Sonu Nigam</b></a></td>
									<td><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
									<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
									<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/>
									
									</td>
									
								</tr>		<tr>
									<td><a href="#"><img src="<?php echo $baseUrl;?>/img/note.png"/></a></td>
									<td>Whenever Whenever</td>
									<td><a href="#" class="color-darkblue"><b>Sonu Nigam</b></a></td>
									<td><img src="<?php echo $baseUrl;?>/img/likes.png" class="small-icon" title="Like" />
									<img src="<?php echo $baseUrl;?>/img/share.png" title="Share" class="small-icon"/>
									<img src="<?php echo $baseUrl;?>/img/down.png" title="Share" class="small-icon"/>
									
									</td>
									
								</tr>	
							</table>
						</article>
					<!-- List of Recent Updates-->
  					    <article class="tab-pane table-overflow" id="activity"> 
						 	<div class="span10">		
								<span class="span2 thumbnail">
									<img src="<?php echo $baseUrl;?>/img/2.jpg" />
									<p align="center">Pritam</p>
								</span>
							 	<span class="span8 thumbnail"><p class="span12 mgtop20">has updated his profile picture.</p>
								<p class="span10 offset9 mgtop5"><small>20 min ago</small></p></span>	
								<hr class="div-border1 mgtop5" width="100%"/>
							</div>
							<div class="span10">		
								<span class="span2 thumbnail">
									<img src="<?php echo $baseUrl;?>/img/2.jpg" />
									<p align="center">Pritam</p>
								</span>
							 	<span class="span8 thumbnail"><p class="span12 mgtop20">has updated his profile picture.</p>
								<p class="span10 offset9 mgtop5"><small>20 min ago</small></p></span>	
								<hr class="div-border1 mgtop5" width="100%"/>
							</div>
							<div class="span10">		
								<span class="span2 thumbnail">
									<img src="<?php echo $baseUrl;?>/img/2.jpg" />
									<p align="center">Pritam</p>
								</span>
							 	<span class="span8 thumbnail"><p class="span12 mgtop20">has updated his profile picture.</p>
								<p class="span10 offset9 mgtop5"><small>20 min ago</small></p></span>	
								<hr class="div-border1 mgtop5" width="100%"/>
							</div>	
							<div class="span10">		
								<span class="span2 thumbnail">
									<img src="<?php echo $baseUrl;?>/img/2.jpg" />
									<p align="center">Pritam</p>
								</span>
							 	<span class="span8 thumbnail"><p class="span12 mgtop20">has updated his profile picture.</p>
								<p class="span10 offset9 mgtop5"><small>20 min ago</small></p></span>	
								<hr class="div-border1 mgtop5" width="100%"/>
							</div>
							<div class="span10">		
								<span class="span2 thumbnail">
									<img src="<?php echo $baseUrl;?>/img/2.jpg" />
									<p align="center">Pritam</p>
								</span>
							 	<span class="span8 thumbnail"><p class="span12 mgtop20">has updated his profile picture.</p>
								<p class="span10 offset9 mgtop5"><small>20 min ago</small></p></span>	
								<hr class="div-border1 mgtop5" width="100%"/>
							</div>
							<div class="span10">		
								<span class="span2 thumbnail">
									<img src="<?php echo $baseUrl;?>/img/2.jpg" />
									<p align="center">Pritam</p>
								</span>
							 	<span class="span8 thumbnail"><p class="span12 mgtop20">has updated his profile picture.</p>
								<p class="span10 offset9 mgtop5"><small>20 min ago</small></p></span>	
								<hr class="div-border1 mgtop5" width="100%"/>
							</div>			
						</article>
		</span>
	<!-- List of Likes-->	
		<span class="span12 thumbnails">
			<!-- Heading -->	

			<span class="span11 mgtop30">
			<div class="span10"><h3 class="mgleft20">Liked By Sonu</h3></div>
			<span class="span1"><a href="#" class="btn btn-success badge mgleft10 mgtop20">View All</a></span>
	</span>					
		
				<span class="span2 thumbnail">
					<img src="<?php echo $baseUrl;?>/img/3.jpg" />
					<p align="center">Shreya Ghosal</p>
				</span>
				<span class="span2 thumbnail">
					<img src="<?php echo $baseUrl;?>/img/1.jpg" />
					<p align="center">Mohit Suri</p>
				</span>
				<span class="span2 thumbnail">
					<img src="<?php echo $baseUrl;?>/img/5.jpg" />
					<p align="center">Shaan</p>
				</span>
				<span class="span2 thumbnail">
					<img src="<?php echo $baseUrl;?>/img/2.jpg" />
					<p align="center">Pritam</p>
				</span>
				<span class="span2 thumbnail">
					<img src="<?php echo $baseUrl;?>/img/3.jpg" />
					<p>Shreya Ghosal</p>
				</span>
				
					
			</span>
		<span class="span12 thumbnails">
			<!-- Heading -->	

			<span class="span11 mgtop20">
			<div class="span10"><h3 class="mgleft20">Followed By Sonu</h3></div>
			<span class="span1"><a href="#" class="btn btn-success badge mgleft10 mgtop20">View All</a></span>
	</span>					
		
				<span class="span2 thumbnail">
					<img src="<?php echo $baseUrl;?>/img/3.jpg" />
					<p align="center">Shreya Ghosal</p>
				</span>
				<span class="span2 thumbnail">
					<img src="<?php echo $baseUrl;?>/img/1.jpg" />
					<p align="center">Mohit Suri</p>
				</span>
				<span class="span2 thumbnail">
					<img src="<?php echo $baseUrl;?>/img/5.jpg" />
					<p align="center">Shaan</p>
				</span>
				<span class="span2 thumbnail">
					<img src="<?php echo $baseUrl;?>/img/2.jpg" />
					<p align="center">Pritam</p>
				</span>
				<span class="span2 thumbnail">
					<img src="<?php echo $baseUrl;?>/img/3.jpg" />
					<p>Shreya Ghosal</p>
				</span>
				
					
			</span>					
	</div>
			
	

	</section>
				
</section>
</section>