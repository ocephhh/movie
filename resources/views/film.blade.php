@extends('main_layout')
@section('title',$title)
@section('content')
<div class="player-text">
	
												<p class="fexi_header">{{ $row->judul }}</p>
												<p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>{{ $row->sinopsis }}</p>

												<p class="fexi_header_para"><span>Release On<label>:</label></span>{{ date('d F Y', strtotime($row->rilis)) }}</p>
												<p class="fexi_header_para">
													<span>Genres<label>:</label> </span> {{ $row->genre }}
																				
												</p>
												<p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
													@for($i=1;$i<=$row->rating;$i++)
														<li>
															<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
														</li>
													@endfor
													@for($i=1;$i<=(5-$row->rating);$i++)
														<li>
															<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
														</li>
													@endfor
												</p>
</div>										    
@endsection