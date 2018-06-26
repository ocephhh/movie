@extends('main_layout')
@section('title',$title)
@section('content')
	         <!--/banner-bottom-->
			  <div class="w3_agilits_banner_bootm">
			     <div class="w3_agilits_inner_bottom">
			            
				</div>
			</div>		    
				<!-- breadcrumb -->
	<div class="w3_breadcrumb">
		<div class="breadcrumb-inner">	
			<ul>
				<li><a href="{{route('home')}}">Home</a><i>//</i></li>
				<li>Series</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->

			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
					<div class="agile_featured_movies">
						<!--/agileinfo_tabs-->
					   <div class="agileinfo_tabs">
						<!--/tab-section-->
					    <div id="horizontalTab">
								<ul class="resp-tabs-list inner-second">
									<li>Hindi</li>
									<li>English</li>
									<li>Tamil </li>
									<li>Telugu </li>
								</ul>
						<div class="resp-tabs-container">
											<div class="tab1">
								<div class="tab_movies_agileinfo">
										<div class="w3_agile_featured_movies">
										
										   <div class="col-md-7 wthree_agile-movies_list second-top">
										   @foreach(\App\Series::take(8)->get() as $movie)
														<div class="w3l-movie-gride-agile">
															<a href="single.html" class="hvr-sweep-to-bottom"><img src="{{ url(Storage::url($movie->gambar)) }}" title="Movies Pro" class="img-responsive" alt=" " style="min-height: 240px;max-height: 240px">
																<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
															</a>
																<div class="mid-1 agileits_w3layouts_mid_1_home">
																	<div class="w3l-movie-text">
																		<h6><a href="single.html">{{ $movie->judul }}</a></h6>						
																	</div>
																	<div class="mid-2 agile_mid_2_home">
																		<p>{{ date('Y', strtotime($movie->rilis)) }}</p>
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
											@endforeach		

											 </div>
											 	<div class="col-md-5 video_agile_player second-top">
										            <div class="video-grid-single-page-agileits">
														<div data-video="6L6XqWoS8tw" id="video4"> <img src="images/55.jpg" alt="" class="img-responsive" /> </div>
													</div>
													<div class="player-text two">
													<p class="fexi_header">M.s Dhoni</p>
													<p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>"M. S. DHONI "Un told" movie starring Sushant Singh Rajput in the leading role as Dhoni, Kiara Advani, Disha Patani and Anupam Kher. M.S. Dhoni - The Untold Story... </p>
													<p class="fexi_header_para"><span>Release On<label>:</label></span> Aug 27, 2016 </p>
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
											</div>
				<!--//tab-section-->	

			
			<!--/movies-->				
			<div class="w3_agile_latest_movies">
			
				
		</div>
			<!--//content-inner-section-->
@endsection