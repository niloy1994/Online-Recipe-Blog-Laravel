@extends('frontend.layout.layout')
@section('content')
		<!--wrap-->
		<div class="wrap clearfix">
			<!--breadcrumbs-->
			<nav class="breadcrumbs">
				<ul>
					<li><a href="index.html" title="Home">Home</a></li>
					<li><a href="#" title="Blog">Blog</a></li>
					<li>Post</li>
				</ul>
			</nav>
			<!--//breadcrumbs-->

			<!--row-->
			<div class="row">
				<header class="s-title wow fadeInLeft">
					<h1>{{$blog->title}}</h1>
				</header>


				<!--content-->
				<section class="content three-fourth wow fadeInLeft">
					<!--blog entry-->
					<article class="post single">
						<div class="entry-meta">
							<div class="date">
								<span class="day">29</span>
								<span class="my">June, 2014</span>
							</div>
							<div class="avatar">
								<a href="my_profile.html"><img src="{{URL::to('/public/frontend')}}/images/avatar4.jpg" alt="" /><span>Anabelle Q.</span></a>
							</div>
						</div>
						<div class="container">
							<div class="entry-featured"><a href="#"><img src="{{URL::to('/public/images/blog/')."/".$blog_image[0]->image}}" alt="" /></a></div>
							<div class="entry-content">
								<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
								<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
								<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
							</div>
						</div>
					</article>
					<!--//blog entry-->

					<!--comments-->
					<div class="comments wow fadeInUp" id="comments">
						<h2>5 comments </h2>
						<ol class="comment-list">
							<!--comment-->
							<li class="comment depth-1">
								<div class="avatar"><a href="my_profile.html"><img src="images/avatar1.jpg" alt="" /></a></div>
								<div class="comment-box">
									<div class="comment-author meta">
										<strong>Kimberly C.</strong> said 1 month ago <a href="#" class="comment-reply-link"> Reply</a>
									</div>
									<div class="comment-text">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
									</div>
								</div>
							</li>
							<!--//comment-->

							<!--comment-->
							<li class="comment depth-1">
								<div class="avatar"><a href="my_profile.html"><img src="images/avatar2.jpg" alt="" /></a></div>
								<div class="comment-box">
									<div class="comment-author meta">
										<strong>Alex J.</strong> said 1 month ago <a href="#" class="comment-reply-link"> Reply</a>
									</div>
									<div class="comment-text">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
									</div>
								</div>
							</li>
							<!--//comment-->

							<!--comment-->
							<li class="comment depth-2">
								<div class="avatar"><a href="my_profile.html"><img src="images/avatar1.jpg" alt="" /></a></div>
								<div class="comment-box">
									<div class="comment-author meta">
										<strong>Kimberly C.</strong> said 1 month ago <a href="#" class="comment-reply-link"> Reply</a>
									</div>
									<div class="comment-text">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
									</div>
								</div>
							</li>
							<!--//comment-->

							<!--comment-->
							<li class="comment depth-3">
								<div class="avatar"><a href="my_profile.html"><img src="images/avatar2.jpg" alt="" /></a></div>
								<div class="comment-box">
									<div class="comment-author meta">
										<strong>Alex J.</strong> said 1 month ago <a href="#" class="comment-reply-link"> Reply</a>
									</div>
									<div class="comment-text">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
									</div>
								</div>
							</li>
							<!--//comment-->

							<!--comment-->
							<li class="comment depth-1">
								<div class="avatar"><a href="my_profile.html"><img src="images/avatar3.jpg" alt="" /></a></div>
								<div class="comment-box">
									<div class="comment-author meta">
										<strong>Denise M.</strong> said 1 month ago <a href="#" class="comment-reply-link"> Reply</a>
									</div>
									<div class="comment-text">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
									</div>
								</div>
							</li>
							<!--//comment-->
						</ol>
					</div>
					<!--//comments-->

					<!--respond-->
					<div class="comment-respond wow fadeInUp" id="comment">
						<h2>Leave a reply</h2>
						<div class="container">
							<p><strong>Note:</strong> Comments on the web site reflect the views of their authors, and not necessarily the views of the socialchef internet portal. Requested to refrain from insults, swearing and vulgar expression. We reserve the right to delete any comment without notice explanations.</p>
							<p>Your email address will not be published. Required fields are signed with <span class="req">*</span></p>
							<form>
								<div class="f-row">
									<div class="third">
										<input type="text" placeholder="Your name" />
										<span class="req">*</span>
									</div>

									<div class="third">
										<input type="email" placeholder="Your email" />
										<span class="req">*</span>
									</div>

									<div class="third">
										<input type="text" placeholder="Your website" />
									</div>

								</div>
								<div class="f-row">
									<textarea></textarea>
								</div>

								<div class="f-row">
									<div class="third bwrap">
										<input type="submit" value="Submit comment" />
									</div>
								</div>

								<div class="bottom">
									<div class="f-row checkbox">
										<input type="checkbox" id="ch1" />
										<label for="ch1">Notify me of replies to my comment via e-mail</label>
									</div>
									<div class="f-row checkbox">
										<input type="checkbox" id="ch2" />
										<label for="ch2">Notify me of new articles by email.</label>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!--//respond-->
				</section>
				<!--//content-->

				<!--right sidebar-->
				<aside class="sidebar one-fourth wow fadeInRight">
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


	<!--preloader-->
	<div class="preloader">
		<div class="spinner"></div>
	</div>
	<!--//preloader-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/scripts.js"></script>
	<script>new WOW().init();</script>
@stop

