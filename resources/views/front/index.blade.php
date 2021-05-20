@extends('layouts.front_layout')

@section('content')

<?php
   use App\Models\Categories;
   $categories= Categories::all();
   use App\Models\categories_ar;
   $category_ar= categories_ar::all();
   use App\Models\categories_en;
   $category_en= categories_en::all();
  
   use App\Models\Posts;
	use App\Models\posts_ar;
    use App\Models\posts_en;
	$posts= Posts::all();
	$image=[];
	foreach($posts as $po){
   $image[]=$po['image'];
	}
	$posts_ar=posts_ar::select("*")->where("id","<",10)->get();
	$posts_en=posts_en::select("*")->where("id","<",10)->get();
	?>


	@if($url=='en')
		<div id="colorlib-main">
			<aside id="colorlib-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
			
					<ul class="slides">
				   	<li style="background-image: url(front/images/img_bg_1.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
					   						<p class="tag"><span>Style</span></p>
						   					<h1><a href="#">Strategic Design for Brands</a></h1>
						   					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(front/images/img_bg_2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
					   						<p class="tag"><span>Sports</span></p>
						   					<h1><a href="#">Creators of Brands Template</a></h1>
												<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(front/images/img_bg_3.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
					   						<p class="tag"><span>Fashion</span></p>
						   					<h1><a href="#">Design &amp; develop functional sites</a></h1>
												<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
					 
			  	</div>
			</aside>

			<div class="colorlib-blog">
				<div class="container-wrap">
					<div class="row">
                
						<div class="col-md-6">
							<div class="blog-entry animate-box">
								<div class="blog-img" style="background-image: url(front/images/blog-1.jpg);">
									<div class="desc text-center">
										<p class="tag"><span>Nature</span></p>
										<h2 class="head-article"><a href="single.html">Gym Fitness</a></h2>
										<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
							@if($url=='en')
							@foreach($posts_en as $post_en)
								<div class="col-md-6">
									<div class="blog-entry animate-box">
										<div class="blog-img blog-img2" >
										<img src="{{URL::to('/') }}/{{$image[$loop->index]}}
" style="width:100% ;height:100% " alt="">
											<div class="desc text-center">
			
												<h2 class="head-article text-right"><a href="{{route('post.show',$post_en['id'])}}">{{$post_en->title}} </a></h2>
												<p class="text-right">{{Str::limit($post_en->content, 50)  }} </p>
											</div>
										</div>
									</div>
								</div>
								@endforeach
								@endif
							
								@if($url=='en')
							@foreach($posts_en as $post_en)
								<div class="col-md-6">
									<div class="blog-entry animate-box">
										<div class="blog-img blog-img2" >
										<img src="{{URL::to('/') }}/{{$image[$loop->index]}}
" style="width:100% ;height:100% " alt="">
											<div class="desc text-center">
			
												<h2 class="head-article text-right"><a href="{{route('post.show',$post_en['id'])}}">{{$post_en->title}} </a></h2>
												<p class="text-right">{{Str::limit($post_en->content, 50)  }} </p>
											</div>
										</div>
									</div>
								</div>
								@endforeach
								@endif
							</div>
						</div>
					</div>
			</div>
			@else
			<div id="colorlib-main">
			<aside id="colorlib-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
				<ul class="slides">
				   	<li style="background-image: url(front/images/img_bg_1.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner ">
					   					<div class="desc">
					   						<h1 class="text-right"><span>الاستايل</span></h1>
						   					<h1 class="text-right"><a href="#">التصميم الاستراتيجي للعلامات التجارية</a></h1>
						   					<p class="text-right">حتى التأشير القوي لا يتحكم في النصوص العمياء فهي حياة غير تقليدية تقريبًا</p>
											</div>
					   				</div> 
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(front/images/img_bg_2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
					   						<h1 class="text-right"><span>الرياضه</span></h1>
						   					<h1 class="text-right"><a href="#">نموذج مبدعي العلامات التجارية</a></h1>
												<p class="text-right">حتى التأشير القوي لا يتحكم في النصوص العمياء فهي حياة غير تقليدية تقريبًا</p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(front/images/img_bg_3.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
					   						<h1 class="text-right"><span>الموضه</span></h1>
						   					<h1 class="text-right"><a href="#">تصميم &amp; تطوير مواقع وظيفية</a></h1>
												<p class="text-right">حتى التأشير القوي لا يتحكم في النصوص العمياء فهي حياة غير تقليدية تقريبًا</p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
					 
			  	</div>
			</aside>

			<div class="colorlib-blog">
				<div class="container-wrap">
					<div class="row">
                
						<div class="col-md-6">
							<div class="blog-entry animate-box">
								<div class="blog-img" style="background-image: url(front/images/blog-1.jpg);">
									<div class="desc text-center">
										<p class="tag text-right"><span>الطبيعه</span></p>
										<h2 class="head-article text-right"><a href="single.html">لياقة بدنية</a></h2>
										<p class="text-right">حتى التأشير القوي لا يتحكم في النصوص العمياء فهي حياة غير تقليدية تقريبًا</p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="row">
							
							@if($url=='ar')
								@foreach($posts_ar as $post_ar)
								<div class="col-md-6">
									<div class="blog-entry animate-box">
										<div class="blog-img blog-img2">
										<img src="{{URL::to('/') }}/{{$image[$loop->index]}}
                                         " style="width:100% ;height:100% " alt="">
											<div class="desc text-center">
											
												<h2 class="head-article text-right"><a href="{{route('post.show',$post_ar['id'])}}">{{$post_ar->title}} </a></h2>
												<p class="text-right">{{Str::limit($post_ar->content, 50)  }}</p>
											</div>
										</div>
									</div>
								</div>
								@endforeach
								@endif
								<div class="col-md-12">
									<div class="blog-entry animate-box">
										<div class="blog-img blog-img2" style="background-image: url(front/images/blog-4.jpg);">
											<div class="desc text-center">
												<p class="tag text-right"><span>المكان</span></p>
												<h2 class="head-article text-right"><a href="single.html">الطبيعه</a></h2>
												<p class="text-right">حتى التأشير القوي لا يتحكم فيه</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>

			@endif



					@if($url=='en')
					@foreach ($category_en as $item)
						<div class="col-md-6">
							<div class="blog-entry animate-box">
								<div class="blog-img" >
                                <img src="{{URL::to('/') }}/{{$img[$loop->index]}}
" style="width:100% ;height:100% " alt="">
                                </div>
                                <div class="desc text-center">
										<h1 class="head-article"><a href="{{route('categorypost.show',$item['id'])}}">{{$item['name']}}</a></h1>
									</div>
								</div>
							
						</div>
                        @endforeach
@else
@foreach ($category_ar as $item)
						<div class="col-md-6">
							<div class="blog-entry animate-box">
								<div class="blog-img" >
                                <img src="{{URL::to('/') }}/{{$img[$loop->index]}}" style="width:100% ;height:100% " alt="">
                                </div>
                                <div class="desc text-center">
										<h1 class="head-article"><a href="{{route('categorypost.show',$item['id'])}}">{{$item['name']}}</a></h1>
									</div>
								</div>
							
						</div>
                        @endforeach
						
						@endif

					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<ul class="pagination">
								<li class="disabled"><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								
								<li><a href="#">&raquo;</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
    @endsection('content')

