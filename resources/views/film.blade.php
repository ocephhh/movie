@extends('main_layout2')
@section('title',$title)
@section('content')
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.html">Home</a><i>//</i></li>
				
				<li>Single</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
						<div class="agile_featured_movies">
				            <div class="inner-agile-w3l-part-head">
					            <h3 class="w3l-inner-h-title">Single Page</h3>
								<p class="w3ls_head_para">Add short Description</p>
							</div>
							   <div class="latest-news-agile-info">
								   <div class="col-md-8 latest-news-agile-left-content">
											<div class="single video_agile_player">
											       
										            <div class="video-grid-single-page-agileits">
														<iframe style="width: 100%; height: 450px" src="https://www.youtube.com/embed/{{$row->film}}" frameborder="0"></iframe>
														
													</div>
													<h4>{{ $row->judul }}</h4>
										    </div>
											<div class="single-agile-shar-buttons">
											    <h5 >Share This :</h5>
													<ul>
														<li>
															<div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
															<script>(function(d, s, id) {
															  var js, fjs = d.getElementsByTagName(s)[0];
															  if (d.getElementById(id)) return;
															  js = d.createElement(s); js.id = id;
															  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
															  fjs.parentNode.insertBefore(js, fjs);
															}(document, 'script', 'facebook-jssdk'));</script>
														</li>
														<li>
															<div class="fb-share-button" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a></div>
														</li>
														<li class="news-twitter">
															<a href="https://twitter.com/w3layouts" class="twitter-follow-button" data-show-count="false">Follow @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
														</li>
														<li>
															<a href="https://twitter.com/intent/tweet?screen_name=w3layouts" class="twitter-mention-button" data-show-count="false">Tweet to @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
														</li>
														<li>
															<!-- Place this tag where you want the +1 button to render. -->
															<div class="g-plusone" data-size="medium"></div>

															<!-- Place this tag after the last +1 button tag. -->
															<script type="text/javascript">
															  (function() {
																var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
																po.src = 'https://apis.google.com/js/platform.js';
																var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
															  })();
															</script>
														</li>
													</ul>
											</div>
										<div class="admin-text">
												<h5>WRITTEN BY ADMIN</h5>
												<div class="admin-text-left">
													<a href="#"><img src="images/admin.jpg" alt=""></a>
												</div>
												<div class="admin-text-right">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
													sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													<span>View all posts by :<a href="#"> Admin </a></span>
												</div>
												<div class="clearfix"> </div>
										</div>
										<div class="response">
							<h4>Responses</h4>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="images/admin.jpg" alt="">
									</a>
									<h5><a href="#">Admin</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.There are many variations of passages of Lorem Ipsum available.</p>
									<ul>
										<li>October 15, 2016</li>
										<li><a href="single.html"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></li>
									</ul>
									<div class="media response-info">
										<div class="media-left response-text-left">
											<a href="#">
												<img class="media-object" src="images/admin.jpg" alt="">
											</a>
											<h5><a href="#">Admin</a></h5>
										</div>
										<div class="media-body response-text-right">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
												sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.There are many variations of passages of Lorem Ipsum available.</p>
											<ul>
												<li>November 02, 2016</li>
												<li><a href="single.html"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></li>
											</ul>		
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="images/admin.jpg" alt="">
									</a>
									<h5><a href="#">Admin</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.There are many variations of passages of Lorem Ipsum available.</p>
									<ul>
										<li>November 03, 2016</li>
										<li><a href="single.html"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></li>
									</ul>		
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
											<div class="all-comments-info">
												 <h5 >LEAVE A COMMENT</h5>
												<div class="agile-info-wthree-box">
													<form>
													   <div class="col-md-6 form-info">
														<input type="text" name="name" placeholder="Your Name" required="">			           					   
														<input type="email" name="email" placeholder="Your Email" required="">
														<input type="text" name="phone" placeholder="Your Phone" required="">	
													  </div>
													   <div class="col-md-6 form-info">
														
														<textarea placeholder="Message" required=""></textarea>
														<input type="submit" value="SEND">
													 </div>
													 <div class="clearfix"> </div>
														
														
													</form>
												</div>
											</div>
								   </div>
								   <div class="col-md-4 latest-news-agile-right-content">
								   <h4 class="side-t-w3l-agile">For Latest <span>Movies</span></h4>
										<div class="side-bar-form">
										 <form action="#" method="post">
											<input type="search" name="email" placeholder="Search here...." required="required">
											<input type="submit" value=" ">
										 </form>
									    </div>
								      <h4 class="side-t-w3l-agile">Hot <span>Topics</span></h3>
									    <ul class="side-bar-agile">
										   <li><a href="single.html">John Abraham, Sonakshi Sinha and Tahir ...</a><p>Sep 29, 2016</p></li>
										   <li><a href="single.html">Romantic drama about two people finding out that love</a><p>Feb 3, 2016</p></li>
										   <li><a href="single.html">Storks have moved on from delivering babies to packages ...</a><p>Aug 1, 2016</p></li>
										   <li><a href="single.html">John Abraham, Sonakshi Sinha and Tahir ...</a><p>Sep 29, 2016</p></li>
										   <li><a href="single.html">John Abraham, Sonakshi Sinha and Tahir ...</a><p>Sep 29, 2016</p></li>
										</ul>
										<h4 class="side-t-w3l-agile">Latest <span>Trailer</span></h3>
										<div class="video_agile_player sidebar-player">
										            <div class="video-grid-single-page-agileits">
														<div data-video="fNKUgX8PhMA" id="video1"> <img src="images/22.jpg" alt="" class="img-responsive"> <div id="play"></div></div>
													</div>


										        <div class="player-text side-bar-info">
												<p class="fexi_header">Me Before You </p>
												<p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Me Before You Official Trailer #2 (2016) - Emilia Clarke, Sam Claflin Movie HD

A girl in a small town forms an unlikely....</p>
												<p class="fexi_header_para"><span>Release On<label>:</label></span>Feb 3, 2016 </p>
												<p class="fexi_header_para">
													<span>Genres<label>:</label> </span>
													<a href="genre.html">Drama</a> | 
													<a href="genre.html">Adventure</a> | 
													<a href="genre.html">Family</a>								
												</p>
												<p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
													<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
													<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
													<a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
													<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
													<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
												</p>
											</div>

										    </div>
											<div class="clearfix"> </div>
											<div class="agile-info-recent">
											<h4 class="side-t-w3l-agile">Latest <span>Trailer</span></h4>
											<div class="w3ls-recent-grids">
												<div class="w3l-recent-grid">
													<div class="wom">
														<a href="single.html"><img src="images/m12.jpg" alt=" " class="img-responsive"></a>
													</div>
													<div class="wom-right">
														<h5><a href="single.html">Lorem Integer rutrum</a></h5>
														<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
															Ut tellus dolor, dapibus eget.</p>
															<ul class="w3l-sider-list">
																<li><i class="fa fa-clock-o" aria-hidden="true"></i>On Jan 12, 2016</li>
																<li><i class="fa fa-eye" aria-hidden="true"></i> 2602</li>
															</ul>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="w3l-recent-grid">
													<div class="wom">
														<a href="single.html"><img src="images/m13.jpg" alt=" " class="img-responsive"></a>
													</div>
													<div class="wom-right">
															<h5><a href="single.html">Lorem Integer rutrum</a></h5>
														<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
															Ut tellus dolor, dapibus eget.</p>
															<ul class="w3l-sider-list">
																<li><i class="fa fa-clock-o" aria-hidden="true"></i>On Mar 3, 2016</li>
																<li><i class="fa fa-eye" aria-hidden="true"></i> 2742</li>
															</ul>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="w3l-recent-grid">
													<div class="wom">
														<a href="single.html"><img src="images/m14.jpg" alt=" " class="img-responsive"></a>
													</div>
													<div class="wom-right">
															<h5><a href="single.html">Lorem Integer rutrum</a></h5>
														    <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
															Ut tellus dolor, dapibus eget.</p>
															<ul class="w3l-sider-list">
																<li><i class="fa fa-clock-o" aria-hidden="true"></i>On Oct 13, 2016</li>
																<li><i class="fa fa-eye" aria-hidden="true"></i> 2802</li>
															</ul>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										
							       </div>
								   <div class="clearfix"></div>
							   </div>
					
						</div>
				</div>
			<!--//content-inner-section-->
@endsection

