@extends('main_layout')
@section('title',$title)
@section('content')
 <!--/banner-bottom-->
			  
			<!--//banner-bottom-->
		     <!-- Modal1 -->
					
				<!-- //Modal1 -->
				  <!-- Modal1 -->
					
				<!-- //Modal1 -->
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
					<div class="agile_featured_movies">
						<!--/agileinfo_tabs-->
					   <div class="agileinfo_tabs">
						<!--/tab-section-->
					    <div id="horizontalTab">
								<ul class="resp-tabs-list">
									<li>Recent</li>
									<li>Popularity</li>
									<li>Top Rating </li>
									
								</ul>
						<div class="resp-tabs-container">
							<div class="tab1">
								<div class="tab_movies_agileinfo">
										<div class="w3_agile_featured_movies">
											<div class="col-md-5 video_agile_player">
										            <div class="video-grid-single-page-agileits">
														<div data-video="f2Z65fobH2I" id="video"> <img class="img-responsive" src="images/11.jpg" alt="" class="img-responsive" /> </div>
													</div>


										
	        <div class="player-text">
												<p class="fexi_header">Force 2</p>
												<p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Presenting the official trailer of Force 2 starring John Abraham, Sonakshi Sinha and Tahir Raj Bhasin

A film by Abhinay Deo, Produced by Vipul Amrutlal Shah, JA entertainment Pvt. Ltd....</p>
												<p class="fexi_header_para"><span>Release On<label>:</label></span>Sep 29, 2016 </p>
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
										     <div class="col-md-7 wthree_agile-movies_list">
										     	@foreach(\App\Movie::get() as $movie)
														<div class="w3l-movie-gride-agile">
															<a href="single.html" class="hvr-sweep-to-bottom"><img src="{{ url(Storage::url($movie->gambar)) }}" title="Movies Pro" class="img-responsive" alt=" ">
																<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
															</a>
																<div class="mid-1 agileits_w3layouts_mid_1_home">
																	<div class="w3l-movie-text">
																		<h6><a href="single.html"> {{ $movie->judul }}	</a></h6>						
																	</div>
																	<div class="mid-2 agile_mid_2_home">
																		<p > {{ date('Y', strtotime($movie->rilis)) }}  </p>
																		<div class="block-stars">
																			<ul class="w3l-ratings">
																				@for($i=1;$i<=$movie->rating;$i++)
																					<li>
																						<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																					</li>
																				@endfor
																				@for($i=1;$i<=(5-$movie->rating);$i++)
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																				@endfor
																				{{-- <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li> --}}
																			</ul>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</div>
															<div class="ribben">
																<p>NEW</p>
															</div>
														</div>
														@endforeach
														
												
												{{-- <div class="w3l-movie-gride-agile">
													<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m4.jpg" title="Movies Pro" class="img-responsive" alt=" ">
														<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
													</a>
													<div class="mid-1 agileits_w3layouts_mid_1_home">
														<div class="w3l-movie-text">
															<h6><a href="single.html">Rogue One </a></h6>							
														</div>
														<div class="mid-2 agile_mid_2_home">
															<p>2016</p>
															<div class="block-stars">
																<ul class="w3l-ratings">
																	<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																</ul>
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
													<div class="ribben">
														<p>NEW</p>
													</div>
												</div>
												<div class="w3l-movie-gride-agile">
													<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m5.jpg" title="Movies Pro" class="img-responsive" alt=" ">
														<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
													</a>
													<div class="mid-1 agileits_w3layouts_mid_1_home">
														<div class="w3l-movie-text">
															<h6><a href="single.html">Storks	</a></h6>							
														</div>
														<div class="mid-2 agile_mid_2_home">
															<p>2016</p>
															<div class="block-stars">
																<ul class="w3l-ratings">
																	<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																</ul>
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
													<div class="ribben">
														<p>NEW</p>
													</div>
												</div>
												<div class="w3l-movie-gride-agile">
													<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m6.jpg" title="Movies Pro" class="img-responsive" alt=" ">
														<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
													</a>
													<div class="mid-1 agileits_w3layouts_mid_1_home">
														<div class="w3l-movie-text">
															<h6><a href="single.html">Hopeless</a></h6>							
														</div>
														<div class="mid-2 agile_mid_2_home">
															<p>2016</p>
															<div class="block-stars">
																<ul class="w3l-ratings">
																	<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																</ul>
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
													<div class="ribben">
														<p>NEW</p>
													</div>
												</div>
												<div class="w3l-movie-gride-agile">
													<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m7.jpg" title="Movies Pro" class="img-responsive" alt=" ">
														<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
													</a>
													<div class="mid-1 agileits_w3layouts_mid_1_home">
														<div class="w3l-movie-text">
															<h6><a href="single.html">Mechanic</a></h6>							
														</div>
														<div class="mid-2 agile_mid_2_home">
															<p>2016</p>
															<div class="block-stars">
																<ul class="w3l-ratings">
																	<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																</ul>
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
													<div class="ribben">
														<p>NEW</p>
													</div>
												</div>
												<div class="w3l-movie-gride-agile">
													<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m8.jpg" title="Movies Pro" class="img-responsive" alt=" ">
														<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
													</a>
													<div class="mid-1 agileits_w3layouts_mid_1_home">
														<div class="w3l-movie-text">
															<h6><a href="single.html">Timeless</a></h6>							
														</div>
														<div class="mid-2 agile_mid_2_home">
															<p>2016</p>
															<div class="block-stars">
																<ul class="w3l-ratings">
																	<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																	<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																</ul>
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
													<div class="ribben">
														<p>NEW</p>
													</div>
												</div> --}}
											</div>
										<div class="clearfix"> </div>
										</div>
										<div class="cleafix"></div>
									</div>	
								</div>
							<div class="tab2">
								<div class="tab_movies_agileinfo">
										<div class="w3_agile_featured_movies">
											<div class="col-md-5 video_agile_player">
										            <div class="video-grid-single-page-agileits">
														<div data-video="fNKUgX8PhMA" id="video1"> <img src="images/22.jpg" alt="" class="img-responsive" /> </div>
													</div>


										        <div class="player-text">
												<p class="fexi_header">Me Before You </p>
												<p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Me Before You Official Trailer #2 (2016) - Emilia Clarke, Sam Claflin Movie HD

												A girl in a small town forms an unlikely bond with a recently-paralyzed man she's taking care of....</p>
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
										     <div class="col-md-7 wthree_agile-movies_list">
														<div class="w3l-movie-gride-agile">
															<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m9.jpg" title="Movies Pro" class="img-responsive" alt=" ">
																<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
															</a>
																<div class="mid-1 agileits_w3layouts_mid_1_home">
																	<div class="w3l-movie-text">
																		<h6><a href="single.html">Inferno</a></h6>							
																	</div>
																	<div class="mid-2 agile_mid_2_home">
																		<p>2016</p>
																		<div class="block-stars">
																			<ul class="w3l-ratings">
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																			</ul>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</div>
															<div class="ribben">
																<p>NEW</p>
															</div>
													</div>
														<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m10.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Now You See Me 2</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m11.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Warcraft</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m12.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Money Monster</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m13.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Ghostbuster</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m14.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Rambo 4</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m15.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">RoboCop</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m16.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">X-Men</a></h6>					
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
											 </div>
											<div class="clearfix"> </div>
										  </div>
										  <div class="cleafix"></div>
									</div>	
							</div>
						<div class="tab3">
								<div class="tab_movies_agileinfo">
										<div class="w3_agile_featured_movies">
											<div class="col-md-5 video_agile_player">
										            <div class="video-grid-single-page-agileits">
														<div data-video="BXEZFd0RT5Y" id="video2"> <img src="images/44.jpg" alt="" class="img-responsive" /> </div>
													</div>

        <div class="player-text">
												<p class="fexi_header">Storks ddd</p>
												<p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Starring: Andy Samberg, Jennifer Aniston, Ty Burrell Storks Official Trailer 3 (2016) - Andy Samberg Movie the company's top delivery stork, lands in hot water when the Baby Factory produces an adorable....... </p>
												<p class="fexi_header_para"><span>Release On<label>:</label></span>Aug 1, 2016 </p>
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
										     <div class="col-md-7 wthree_agile-movies_list">
														<div class="w3l-movie-gride-agile">
															<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m1.jpg" title="Movies Pro" class="img-responsive" alt=" ">
																<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
															</a>
																<div class="mid-1 agileits_w3layouts_mid_1_home">
																	<div class="w3l-movie-text">
																		<h6><a href="single.html">Swiss Army Man	</a></h6>		
																	</div>
																	<div class="mid-2 agile_mid_2_home">
																		<p>2016</p>
																		<div class="block-stars">
																			<ul class="w3l-ratings">
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																			</ul>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</div>
															<div class="ribben">
																<p>NEW</p>
															</div>
													</div>
														<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m2.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Me Before you</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m3.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Deadpool</a></h6>					
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m4.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Rogue One </a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m5.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Storks hh</a></h6>						
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m6.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Hopeless</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m7.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Mechanic</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m8.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Timeless</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
											 </div>
											<div class="clearfix"> </div>
										  </div>
										  <div class="cleafix"></div>
									</div>	
								</div>
							</div>
						</div>
						
					</div>
				<!--//tab-section-->	
				  <h3 class="agile_w3_title"> Latest <span>Movies</span></h3>
			<!--/movies-->				
			<div class="w3_agile_latest_movies">
			
				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
							<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m5.jpg" title="Movies Pro" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single.html">Storkssss	</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>2016</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben one">
								<p>NEW</p>
							</div>
						</div>
					</div>
					<div class="item">
								<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
								<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m6.jpg" title="Movies Pro" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html">Hopeless</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2016</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben one">
									<p>NEW</p>
								</div>
					</div>
					</div>
					<div class="item">
						@foreach(\App\Movie::get() as $movie)
						<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
							
							<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m7.jpg" title="Movies Pro" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single.html">{{ $movie->judul }}</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>{{ $movie->rilis }}</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben one">
								<p>NEW</p>
							</div>
						</div>
					</div>
					@endforeach
					{{-- <div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
							<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m8.jpg" title="Movies Pro" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single.html">Timeless</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>2016</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben one">
								<p>NEW</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
							<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m3.jpg" title="Movies Pro" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single.html">Deadpool</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>2016</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben one">
								<p>NEW</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
							<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m11.jpg" title="Movies Pro" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single.html">Warcraft</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>2016</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben one">
								<p>NEW</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
							<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m14.jpg" title="Movies Pro" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single.html">Rambo 4</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>2016</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben one">
								<p>NEW</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
							<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m13.jpg" title="Movies Pro" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single.html">Ghostbuster</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>2016</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben one">
								<p>NEW</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
							<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m15.jpg" title="Movies Pro" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single.html">RoboCop</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>2016</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben one">
								<p>NEW</p>
							</div>
							</div>
						</div>
					   </div>
				    </div> --}}
				<!--//movies-->
				 <h3 class="agile_w3_title">Requested <span>Movies</span> </h3>
				<!--/requested-movies-->
				     <div class="wthree_agile-requested-movies">
										<div class="col-md-2 w3l-movie-gride-agile requested-movies">
															<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m1.jpg" title="Movies Pro" class="img-responsive" alt=" ">
																<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
															</a>
																<div class="mid-1 agileits_w3layouts_mid_1_home">
																	<div class="w3l-movie-text">
																		<h6><a href="single.html">Swiss Army Man</a></h6>							
																	</div>
																	<div class="mid-2 agile_mid_2_home">
																		<p>2016</p>
																		<div class="block-stars">
																			<ul class="w3l-ratings">
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																			</ul>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</div>
															<div class="ribben one">
																<p>NEW</p>
															</div>
													</div>
											<div class="col-md-2 w3l-movie-gride-agile requested-movies">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m2.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Me Before you</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											<div class="ribben one">
													<p>NEW</p>
												</div>
											</div>
											<div class="col-md-2 w3l-movie-gride-agile requested-movies">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m3.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Deadpool</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben one">
													<p>NEW</p>
												</div>
											</div>
											<div class="col-md-2 w3l-movie-gride-agile requested-movies">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m4.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Rogue One </a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											<div class="ribben one">
													<p>NEW</p>
												</div>
											</div>
											<div class="col-md-2 w3l-movie-gride-agile requested-movies">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m5.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Storks	</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben one">
													<p>NEW</p>
												</div>
											</div>
											<div class="col-md-2 w3l-movie-gride-agile requested-movies">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m6.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Hopeless</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben one">
													<p>NEW</p>
												</div>
											</div>
											<div class="col-md-2 w3l-movie-gride-agile requested-movies">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m7.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Mechanic</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											<div class="ribben one">
													<p>NEW</p>
												</div>
											</div>
											<div class="col-md-2 w3l-movie-gride-agile requested-movies">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m8.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Timeless</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											<div class="ribben one">
													<p>NEW</p>
												</div>
											</div>
											<div class="col-md-2 w3l-movie-gride-agile requested-movies">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m9.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Inferno</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben one">
													<p>NEW</p>
												</div>
											</div>
											<div class="col-md-2 w3l-movie-gride-agile requested-movies">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m11.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Warcraft</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben one">
													<p>NEW</p>
												</div>
											</div>
												<div class="clearfix"></div>
						</div>
				<!--//requested-movies-->
				<!--/top-movies-->
					<h3 class="agile_w3_title">Top<span>Movies</span> </h3>
							<div class="top_movies">
								<div class="tab_movies_agileinfo">
										<div class="w3_agile_featured_movies two">
										
										     <div class="col-md-7 wthree_agile-movies_list second-top">
														<div class="w3l-movie-gride-agile">
															<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m1.jpg" title="Movies Pro" class="img-responsive" alt=" ">
																<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
															</a>
																<div class="mid-1 agileits_w3layouts_mid_1_home">
																	<div class="w3l-movie-text">
																		<h6><a href="single.html">Swiss Army Man</a></h6>							
																	</div>
																	<div class="mid-2 agile_mid_2_home">
																		<p>2016</p>
																		<div class="block-stars">
																			<ul class="w3l-ratings">
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																			</ul>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</div>
															<div class="ribben">
																<p>NEW</p>
															</div>
													</div>
														<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m2.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Me Before you</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m3.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Deadpool</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m4.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Rogue One </a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m5.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Storks	</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m6.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Hopeless</a></h6>	 						
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m7.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Mechanic</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
												<div class="w3l-movie-gride-agile">
												<a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m8.jpg" title="Movies Pro" class="img-responsive" alt=" ">
													<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
												</a>
												<div class="mid-1 agileits_w3layouts_mid_1_home">
													<div class="w3l-movie-text">
														<h6><a href="single.html">Timeless</a></h6>							
													</div>
													<div class="mid-2 agile_mid_2_home">
														<p>2016</p>
														<div class="block-stars">
															<ul class="w3l-ratings">
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="ribben">
													<p>NEW</p>
												</div>
											</div>
											 </div>
											 	<div class="col-md-5 video_agile_player second-top">
										            <div class="video-grid-single-page-agileits">
														<div data-video="BXEZFd0RT5Y" id="video3"> <img src="images/44.jpg" alt="" class="img-responsive" /> </div>
													</div>

        <div class="player-text two">
												<p class="fexi_header">Storks </p>
												<p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>Starring: Andy Samberg, Jennifer Aniston, Ty Burrell
Storks Official Trailer 3 (2016) - Andy Samberg Movie  the company's top delivery stork, lands in hot water when the Baby Factory produces an adorable....... </p>
									<p class="fexi_header_para"><span>Release On<label>:</label></span>Aug 1, 2016 </p>
												
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
										  </div>
										  <div class="cleafix"></div>
									</div>	
								</div>
					
				<!--//top-movies-->
			</div>
		</div>
			<!--//content-inner-section-->	         

@endsection