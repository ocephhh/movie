@extends('main_layout')
@section('title',$title)
@section('content')
	         <!--/banner-bottom-->
			  <div class="w3_agilits_banner_bootm">
			     <div class="w3_agilits_inner_bottom">
			            {{-- <div class="col-md-6 wthree_agile_login">
						     <ul>
									<li><i class="fa fa-phone" aria-hidden="true"></i> (+000) 009 455 4088</li>
									<li><a href="#" class="login"  data-toggle="modal" data-target="#myModal4">Login</a></li>
									<li><a href="#" class="login reg"  data-toggle="modal" data-target="#myModal5">Register</a></li>

								</ul>
						</div> --}}
						 <div class="col-md-6 wthree_share_agile">
									
									<div class="single-agile-shar-buttons">
							{{-- <ul>
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
							</ul> --}}
								</div>
						</div>
				</div>
			</div>
			<!--//banner-bottom-->
		     {{-- <!-- Modal1 -->
					<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >

							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Login</h4>
										<div class="login-form">
											<form action="#" method="post">
												<input type="email" name="email" placeholder="E-mail" required="">
												<input type="password" name="password" placeholder="Password" required="">
												<div class="tp">
													<input type="submit" value="LOGIN NOW">
												</div>
												<div class="forgot-grid">
												       <div class="log-check">
														<label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
														</div>
														<div class="forgot">
															<a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
														</div>
														<div class="clearfix"></div>
													</div>
												
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
				<!-- //Modal1 -->
				  <!-- Modal1 -->
					<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >

							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Register</h4>
										<div class="login-form">
											<form action="#" method="post">
											    <input type="text" name="name" placeholder="Name" required="">
												<input type="email" name="email" placeholder="E-mail" required="">
												<input type="password" name="password" placeholder="Password" required="">
												<input type="password" name="conform password" placeholder="Confirm Password" required="">
												<div class="signin-rit">
														<span class="agree-checkbox">
														<label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a class="w3layouts-t" href="#" target="_blank">Terms of Use</a> and <a class="w3layouts-t" href="#" target="_blank">Privacy Policy</a></label>
													</span>
												</div>
												<div class="tp">
													<input type="submit" value="REGISTER NOW">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
				<!-- //Modal1 --> --}}
						<!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="{{route('home')}}">Home</a><i>//</i></li>
				<li>List</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
						<div class="agile_featured_movies">
						<div class="inner-agile-w3l-part-head">
					            <h3 class="w3l-inner-h-title">Movie List</h3>
								<p class="w3ls_head_para">Add short Description</p>
							</div>
				                   <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">ALL</a></li>
							<li role="presentation"><a href="#a" role="tab" id="a-tab" data-toggle="tab" aria-controls="a">A</a></li>
							<li role="presentation"><a href="#b" role="tab" id="b-tab" data-toggle="tab" aria-controls="b">B</a></li>
							<li role="presentation"><a href="#c" role="tab" id="c-tab" data-toggle="tab" aria-controls="c">C</a></li>
							<li role="presentation"><a href="#d" role="tab" id="d-tab" data-toggle="tab" aria-controls="d">D</a></li>
							<li role="presentation"><a href="#e" role="tab" id="e-tab" data-toggle="tab" aria-controls="e">E</a></li>
							<li role="presentation"><a href="#f" role="tab" id="f-tab" data-toggle="tab" aria-controls="f">F</a></li>
							<li role="presentation"><a href="#g" role="tab" id="g-tab" data-toggle="tab" aria-controls="g">G</a></li>
							<li role="presentation"><a href="#h" role="tab" id="h-tab" data-toggle="tab" aria-controls="h">H</a></li>
							<li role="presentation"><a href="#i" role="tab" id="i-tab" data-toggle="tab" aria-controls="i">I</a></li>
							<li role="presentation"><a href="#j" role="tab" id="j-tab" data-toggle="tab" aria-controls="j">J</a></li>
							<li role="presentation"><a href="#k" role="tab" id="k-tab" data-toggle="tab" aria-controls="k">K</a></li>
							<li role="presentation"><a href="#l" role="tab" id="l-tab" data-toggle="tab" aria-controls="l">L</a></li>
							<li role="presentation"><a href="#m" role="tab" id="m-tab" data-toggle="tab" aria-controls="m">M</a></li>
							<li role="presentation"><a href="#n" role="tab" id="n-tab" data-toggle="tab" aria-controls="n">N</a></li>
							<li role="presentation"><a href="#o" role="tab" id="o-tab" data-toggle="tab" aria-controls="o">O</a></li>
							<li role="presentation"><a href="#p" role="tab" id="p-tab" data-toggle="tab" aria-controls="p">P</a></li>
							<li role="presentation"><a href="#q" role="tab" id="q-tab" data-toggle="tab" aria-controls="q">Q</a></li>
							<li role="presentation"><a href="#r" role="tab" id="r-tab" data-toggle="tab" aria-controls="r">R</a></li>
							<li role="presentation"><a href="#s" role="tab" id="s-tab" data-toggle="tab" aria-controls="s">S</a></li>
							<li role="presentation"><a href="#t" role="tab" id="t-tab" data-toggle="tab" aria-controls="t">T</a></li>
							<li role="presentation"><a href="#u" role="tab" id="u-tab" data-toggle="tab" aria-controls="u">U</a></li>
							<li role="presentation"><a href="#v" role="tab" id="v-tab" data-toggle="tab" aria-controls="v">V</a></li>
							<li role="presentation"><a href="#w" role="tab" id="w-tab" data-toggle="tab" aria-controls="w">W</a></li>
							<li role="presentation"><a href="#x" role="tab" id="x-tab" data-toggle="tab" aria-controls="x">X</a></li>
							<li role="presentation"><a href="#y" role="tab" id="y-tab" data-toggle="tab" aria-controls="y">Y</a></li>
							<li role="presentation"><a href="#z" role="tab" id="z-tab" data-toggle="tab" aria-controls="z">Z</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>25</span></h4>
									</div>
									<table id="table-breakpoint">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html"> Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="horror.html">Horror</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>18</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>19</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>20</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>21</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>22</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>23</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>24</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>25</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="comedy.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="a" aria-labelledby="a-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>17</span></h4>
									</div>
									<table id="table-breakpoint1">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="b" aria-labelledby="b-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>12</span></h4>
									</div>
									<table id="table-breakpoint2">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="c" aria-labelledby="c-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>15</span></h4>
									</div>
									<table id="table-breakpoint3">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="d" aria-labelledby="d-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>16</span></h4>
									</div>
									<table id="table-breakpoint4">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="e" aria-labelledby="e-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>9</span></h4>
									</div>
									<table id="table-breakpoint5">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="f" aria-labelledby="f-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>14</span></h4>
									</div>
									<table id="table-breakpoint6">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="g" aria-labelledby="g-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>25</span></h4>
									</div>
									<table id="table-breakpoint7">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>18</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>19</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>20</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>21</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>22</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>23</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>24</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>25</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="h" aria-labelledby="h-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>17</span></h4>
									</div>
									<table id="table-breakpoint8">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="i" aria-labelledby="i-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>12</span></h4>
									</div>
									<table id="table-breakpoint9">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.htmlgenre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="j" aria-labelledby="j-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>15</span></h4>
									</div>
									<table id="table-breakpoint10">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="k" aria-labelledby="k-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>16</span></h4>
									</div>
									<table id="table-breakpoint11">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="l" aria-labelledby="l-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>14</span></h4>
									</div>
									<table id="table-breakpoint12">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="m" aria-labelledby="m-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>25</span></h4>
									</div>
									<table id="table-breakpoint13">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>18</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>19</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>20</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>21</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>22</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>23</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>24</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>25</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="n" aria-labelledby="n-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>17</span></h4>
									</div>
									<table id="table-breakpoint14">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="o" aria-labelledby="o-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>12</span></h4>
									</div>
									<table id="table-breakpoint15">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="p" aria-labelledby="p-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>16</span></h4>
									</div>
									<table id="table-breakpoint16">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="q" aria-labelledby="q-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>09</span></h4>
									</div>
									<table id="table-breakpoint17">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="r" aria-labelledby="r-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>14</span></h4>
									</div>
									<table id="table-breakpoint18">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="s" aria-labelledby="s-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>17</span></h4>
									</div>
									<table id="table-breakpoint19">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="t" aria-labelledby="t-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>17</span></h4>
									</div>
									<table id="table-breakpoint20">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="u" aria-labelledby="u-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>12</span></h4>
									</div>
									<table id="table-breakpoint21">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="v" aria-labelledby="v-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>16</span></h4>
									</div>
									<table id="table-breakpoint22">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="w" aria-labelledby="w-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>09</span></h4>
									</div>
									<table id="table-breakpoint23">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="x" aria-labelledby="x-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>14</span></h4>
									</div>
									<table id="table-breakpoint24">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="y" aria-labelledby="y-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>17</span></h4>
									</div>
									<table id="table-breakpoint25">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>13</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>14</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>15</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>16</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>17</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="z" aria-labelledby="z-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : <span>12</span></h4>
									</div>
									<table id="table-breakpoint26">
										<thead>
										  <tr>
											<th>No.</th>
											<th>Movie Name</th>
											<th>Year</th>
											<th>Status</th>
											<th>Country</th>
											<th>Genre</th>
											<th>Rating</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>1</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>2</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m2.jpg" alt="" /> <span>Me Before you</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Korea</a></td>
											<td class="w3-list-info"><a href="genre.html">Drama</a></td>
											<td>7.5</td>
										  </tr>
										  <tr>
											<td>3</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m11.jpg" alt="" /> <span>Warcraft</span></a></td>
											<td>2016</td>
											<td>SD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>6.5</td>
										  </tr>
										  <tr>
											<td>4</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m3.jpg" alt="" /> <span>Deadpool</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>5</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m4.jpg" alt="" /> <span>Rogue One</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United States</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>6</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m5.jpg" alt="" /> <span>Storks</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">India</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Drama</a></td>
											<td>9.0</td>
										  </tr>
										  <tr>
											<td>7</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m6.jpg" alt="" /> <span>Hopeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Euro, France</a></td>
											<td class="w3-list-info"><a href="genre.html">Thriller, Crime, Drama</a></td>
											<td>8.2</td>
										  </tr>
										  <tr>
											<td>8</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m7.jpg" alt="" /> <span>Mechanic</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">China</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy</a></td>
											<td>8.9</td>
										  </tr>
										  <tr>
											<td>9</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m8.jpg" alt="" /> <span>Timeless</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>10</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m9.jpg" alt="" /> <span>Inferno</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">Japan</a></td>
											<td class="w3-list-info"><a href="genre.html">Action</a></td>
											<td>7.1</td>
										  </tr>
										  <tr>
											<td>11</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m10.jpg" alt="" /> <span>Now You See Me 2</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										  <tr>
											<td>12</td>
											<td class="w3-list-img"><a href="single.html"><img src="images/m1.jpg" alt="" /> <span>Swiss Army Man</span></a></td>
											<td>2016</td>
											<td>HD</td>
											<td class="w3-list-info"><a href="genre.html">United Kingdom</a></td>
											<td class="w3-list-info"><a href="genre.html">Comedy, Drama</a></td>
											<td>7.0</td>
										  </tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						</div>
				</div>
			</div>
			<!--//content-inner-section-->
@endsection