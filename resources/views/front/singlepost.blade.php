@extends('layouts.front_layout')

@section('content')


		<div id="colorlib-main">
			<div class="colorlib-blog">
				<div class="container-wrap">
					<div class="row">
						<div class="col-md-9">
							<div class="content-wrap">
							@if($url=='en')
								<article class="animate-box">
								
									<div class="blog-img" >
									
									<img src="../../{{$post_img}}" style="width:100% ;height:100% " alt="">
							     	
									</div>
								
									<div class="desc">
										<div class="meta">
											<p>
												
											</p>
										</div>
										<h1><a href="{{route('post.show',$posts_en['id'])}}">{{$posts_en['title']}}</a></h1>
										<h4>{{$posts_en['content']}}</h4>
										</div>
								</article>
								@else
								<article class="animate-box">
								
								<div class="blog-img" >
								<img src="../../{{ $post_img }}" style="width:100% ;height:100% " alt="">
								</div>
							
								<div class="desc">
									<div class="meta">
										<p>
											
										</p>
									</div>
									<h1><a href="{{route('post.show',$posts_ar['id'])}}">{{$posts_ar['title']}}</a></h1>
									<h4>{{$posts_ar['content']}}</h4>
									</div>
							</article>
							@endif
												
								<div class="row row-bottom-padded-md">
									<div class="col-md-12 animate-box">
										<h2 class="heading-2">{{__('home.comment')}}</h2>
										<div class="review">
										@foreach ($feedbacks as $feedback)
										   <div class="user-img" style="background-image: url(../../front/images/user.png)"></div>
										   <div class="desc">
								   			<h4>
								   				<span class="text-left">{{$feedback->name}}</span>
								   				<span class="text-right">{{$feedback->created_at}}</span>
								   			</h4>
								   			<p>{{$feedback->comments}}</p>
								   			<p class="star">
							   					<span class="text-left"><a href="#" class="reply"><i class="icon-reply2"></i></a></span>
								   			</p>
								   		</div>
										   @endforeach
								   	</div>
								   	<div class="row">
						<div class="col-md-9">
							<div class="content-wrap">
								<div class="row">
									<div class="col-md-12 animate-box">
										<h2 class="heading-2">{{__('home.say')}}</h2>

                                 @if(session()->has('message'))
                                  <div class="alert alert-success">
                                   {{ session()->get('message') }}
                                 </div>
                                 @endif
										<form method="post" action="{{action('App\Http\Controllers\FeedbackController@contact', $posts_en->id) }}
">
                                    @csrf 
										
											<div class="row form-group">
												<div class="col-md-12">
													<!-- <label for="message">Message</label> -->
													<textarea  id="message" name="comments" cols="30" rows="10" class="form-control" placeholder="{{__('home.msg')}}"></textarea>
												</div>
											</div>
											<div class="form-group">
												<input type="submit" value="{{__('home.btn')}}" class="btn btn-primary">
											</div>
										</form>	
									</div>
								</div>
							</div>
						</div>

					
						
					</div>
								
									</div>
								</div>
								
							</div>
						</div>

						<div class="col-md-3 sticky-parent">
							<div class="sidebar" id="sticky_item">
							<form action="{{url('/search')}}" type="get">
								<div class="side animate-box">
									<div class="form-group">
										<input type="text" class="form-control" id="search" name="query" placeholder="{{__('home.search')}}">
										<button type="submit" class="btn submit btn-primary"><i class="icon-search3"></i></button>
									</div>
								</div>
							</form>
								
								<div class="side animate-box">
									<h2 class="sidebar-heading">{{__('home.inst')}}</h2>
									<div class="instagram-entry">
										<a href="#" class="instagram text-center" style="background-image: url(../../front/images/gallery-1.jpg);">
										</a>
										<a href="#" class="instagram text-center" style="background-image: url(../../front/images/gallery-2.jpg);">
										</a>
										<a href="#" class="instagram text-center" style="background-image: url(../../front/images/gallery-3.jpg);">
										</a>
										<a href="#" class="instagram text-center" style="background-image: url(../../front/images/gallery-4.jpg);">
										</a>
										<a href="#" class="instagram text-center" style="background-image: url(../../front/images/gallery-5.jpg);">
										</a>
										<a href="#" class="instagram text-center" style="background-image: url(../../front/images/gallery-6.jpg);">
										</a>
										<a href="#" class="instagram text-center" style="background-image: url(../../front/images/gallery-7.jpg);">
										</a>
										<a href="#" class="instagram text-center" style="background-image: url(../../front/images/gallery-8.jpg);">
										</a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection('content')