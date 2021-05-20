@extends('layouts.front_layout')

@section('content')


		<div id="colorlib-main">
			
			<div class="colorlib-blog">
				<div class="container-wrap">
					<div class="row">
					<?php
					$serchtxt=$_GET['query'];
					
					?>
                    @if(@isset($serchtxt))
					@foreach ($dataA as $itemm)
						<div class="col-md-6">
							<div class="blog-entry animate-box">
								<div class="blog-img" >
                                <img src="{{URL::to('/') }}/{{$img[$loop->index]}}" style="width:100% ;height:100% " alt="">
                                </div>
                                <div class="desc text-center text-right">
                                  		
										<h2 class="head-article text-right"><a href="#">{{$itemm['title']}}</a></h2>
										<h4 class="text-right">{{$itemm['content']}}</h4>
									</div>
								</div>
							
						</div>
                        @endforeach
                      
		
						@foreach ($dataE as $item)
						<div class="col-md-6">
							<div class="blog-entry animate-box">
								<div class="blog-img" >
                                <img src="{{URL::to('/') }}/{{$img[$loop->index]}}" style="width:100% ;height:100% " alt="">
                                </div>
                                <div class="desc text-center">
                                  		
										<h2 class="head-article"><a href="#">{{$item['title']}}</a></h2>
										<h4 >{{$item['content']}}</h4>
									</div>
								</div>
							
						</div>
                        @endforeach
					
						@endif
						
					
					
					</div>

				
				</div>
			</div>			
		</div>
	</div>
    @endsection('content')

