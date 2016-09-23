@extends('frontend.layout.layout')
@section('content')
		<!--wrap-->
		<div class="wrap clearfix">
			<!--breadcrumbs-->
			<nav class="breadcrumbs">
				<ul>
					<li><a href="index.html" title="Home">Home</a></li>
					<li>Blog</li>
				</ul>
			</nav>
			<!--//breadcrumbs-->

			<!--row-->
			<div class="row">
				<header class="s-title wow fadeInLeft">
					<h1>Blog</h1>
				</header>

				<!--content-->
				<section class="content three-fourth wow fadeInLeft">
					<!--blog entry-->
					@foreach($blogs as $blog)
					<article class="post">
						<div class="entry-meta">
							<div class="date">
								<span class="day">{{ date('d', strtotime($blog->upload_time)) }}</span>
								<span class="my">{{ date('M, Y', strtotime($blog->upload_time)) }}</span>
								{{--<span class="my">{{ date('F d, Y', strtotime($blog->upload_time)) }}</span>--}}
							</div>
							<div class="avatar">
								<a href="my_profile.html"><img src="{{URL::to('/public/frontend')}}/images/avatar1.jpg" alt="" /><span>Kimberly C.</span></a>
							</div>
						</div>
						<div class="container">
							<div class="entry-featured"><a href="{{URL::to('/blogs')."/".$blog->id}}"><img src="{{URL::to('/public/images/blog/')."/".$blog->image}}" alt="" /></a></div>
							<div class="entry-content">
								<h2><a href="{{URL::to('/blogs')."/".$blog->id}}">{{$blog->title}}</a></h2>
								<p>{{$blog->description}} </p>
							</div>
							<div class="actions">
								<div>
									{{--<div class="category"><i class="ico i-category"></i><a href="#">Tips and tricks</a></div>--}}
									<div class="comments"><i class="ico i-comments"></i><a href="blog_single.html#comments">27</a></div>
									<div class="leave_comment"><a href="{{URL::to('/blogs')."/".$blog->id}}#comment">Leave a comment</a></div>
									<div class="more"><a href="{{URL::to('/blogs')."/".$blog->id}}">Read more</a></div>
								</div>
							</div>
						</div>
					</article>
					@endforeach
					<!--//blog entry-->

					<!--blog entry-->

					<!--//blog entry-->

					<div class="pager wow fadeInUp">
						<a href="#">1</a>
						<a href="#" class="current">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
					</div>
				</section>
				<!--//content-->

				<!--right sidebar-->
				<aside class="sidebar one-fourth">
					<div class="widget">
						<ul class="categories right">
							<li><a href="#">All recipes</a></li>
							<li class="active"><a href="#">Tips and Tricks</a></li>
							<li><a href="#">Events</a></li>
							<li><a href="#">Inspiration</a></li>
							<li><a href="#">Category name</a></li>
							<li><a href="#">Lorem ipsum</a></li>
							<li><a href="#">Dolor</a></li>
							<li><a href="#">Sit amet</a></li>
						</ul>
					</div>
					<div class="widget">
						<h3>Advertisment</h3>
						<a href="#"><img src="{{URL::to('/public/frontend')}}/images/advertisement.jpg" alt="" /></a>
					</div>
				</aside>
				<!--//right sidebar-->
			</div>
			<!--//row-->
		</div>
		<!--//wrap-->
	 @stop


