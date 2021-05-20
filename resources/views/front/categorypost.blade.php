@extends('layouts.front_layout')

@section('content')

	<div id="colorlib-main">
			<div class="colorlib-blog">
				<div class="container-wrap">
					<div class="row">
					@if($url=='en')
					@foreach ($posts_en as $post)
						<div class="col-md-6">
							<div class="blog-entry animate-box">
							    <div class="blog-img" >
                                <img src="{{URL::to('/') }}/{{$img[$loop->index]}}" style="width:100% ;height:100% " alt="">
                                </div>
                                <div class="desc text-center">
										<h2 class="head-article"><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></h2>
										<h4>{{$post->content}}</h4>
									</div>
							</div>
						</div>
                        @endforeach
						@else
						@foreach ($posts_ar as $post)
						<div class="col-md-6">
							<div class="blog-entry animate-box">
							    <div class="blog-img" >
                                <img src="{{URL::to('/') }}/{{$img[$loop->index]}}" style="width:100% ;height:100% " alt="">
                                </div>
                                <div class="desc text-center">
										<h2 class="head-article"><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></h2>
										<h4>{{$post->content}}</h4>
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