@extends('frontend.layout.layout')
@section('content')
		<!--wrap-->
		<div class="wrap clearfix">
			<!--breadcrumbs-->
			<nav class="breadcrumbs">
				<ul>
					<li><a href="index.html" title="Home">Home</a></li>
					<li>My account</li>
				</ul>
			</nav>
			<!--//breadcrumbs-->


			<!--content-->
			<section class="content">
				<!--row-->
				<div class="row">
					<!--profile left part-->
					<div class="my_account one-fourth wow fadeInLeft">
						<figure>
							<img src="{{URL::to('/public/frontend')}}/images/avatar4.jpg" alt="" />
						</figure>
						<div class="container">
							<h2>{{$user->name}}</h2>
						</div>
					</div>
					<!--//profile left part-->

					<div class="three-fourth wow fadeInRight">
						<nav class="tabs">
							<ul>
								<li class="active"><a href="#about" title="About me">About me</a></li>
								<li><a href="#recipes" title="My recipes">My recipes</a></li>
								<li><a href="#favorites" title="My favorites">My favorites</a></li>
								<li><a href="#posts" title="My posts">My posts</a></li>
							</ul>
						</nav>

						<!--about-->
						<div class="tab-content" id="about">
							<div class="row">
								<dl class="basic two-third">
									<dt>Name</dt>
									<dd>{{$user->name}}</dd>
									<dt>Favorite cusine</dt>
									<dd>Thai, Mexican</dd>
									<dt>Favorite appliances</dt>
									<dd>Blender, sharp knife</dd>
									<dt>Favorite spices</dt>
									<dd>Chilli, Oregano, Basil</dd>
									<dt>Recipes submitted</dt>
									<dd>{{$total_recipes}}</dd>
									<dt>Recipe Liked</dt>
									<dd>{{$total_favorites}}</dd>
								</dl>

								<div class="one-third">
									<ul class="boxed gold">
										<li class="light"><a href="#" title="Best recipe"><i class="ico i-had_best_recipe"></i> <span>Had a best recipe</span></a></li>
										<li class="medium"><a href="#" title="Was featured"><i class="ico i-was_featured"></i> <span>Was featured</span></a></li>
										<li class="dark"><a href="#" title="Added a first recipe"><i class="ico i-added_first_recipe"></i> <span>Added a first recipe</span></a></li>

										<li class="medium"><a href="#" title="Added 10-20 recipes"><i class="ico i-added_several_recipes"></i> <span>Added 10-20 recipes</span></a></li>
										<li class="dark"><a href="recipes.html" title="Events"><i class="ico i-wrote_blog_post"></i> <span>Wrote a blog post</span></a></li>
										<li class="light"><a href="recipes.html" title="Fish"><i class="ico i-wrote_comment"></i> <span>Wrote a comment</span></a></li>

										<li class="dark"><a href="recipes.html" title="Fish"><i class="ico i-won_contest"></i> <span>Won a contest</span></a></li>
										<li class="light"><a href="recipes.html" title="Healthy"><i class="ico i-shared_recipe"></i> <span>Shared a recipe</span></a></li>
										<li class="medium"><a href="#" title="Was featured"><i class="ico i-was_featured"></i> <span>Was featured</span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<!--//about-->

						<!--my recipes-->
						<div class="tab-content" id="recipes">
							<div class="entries row">
							@foreach($recipes as $recipe)
								<!--item-->
								<div class="entry one-third">
									<figure>
                                        <img src="{{URL::to('/public/images/recipe/')."/".$recipe->image}}"/>
                                        <figcaption><a href="{{URL::to('/recipes')."/".$recipe->id}}"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
                                    </figure>
                                    <div class="container">
                                        <h2><a href="recipe.html">{{$recipe->name}}</a></h2>
                                        <div class="actions">
                                            <div>
                                                @if ($recipe->difficulty=='easy')
                                                  <div class="difficulty"><i class="ico i-easy"></i><a href="#">Easy</a></div>
                                                @elseif($recipe->difficulty=='medium')
                                                  <div class="difficulty"><i class="ico i-medium"></i><a href="#">Medium</a></div>
                                                @elseif($recipe->difficulty=='hard')
                                                  <div class="difficulty"><i class="ico i-hard"></i><a href="#">Hard</a></div>
                                                @endif
                                                <div class="likes"><i class="ico i-likes"></i><a href="#">{{$recipe->num_of_likes}}</a></div>
                                                <div class="comments"><i class="ico i-comments"></i><a href="recipe.html#comments">{{$recipe->num_of_comments}}</a></div>
                                            </div>

                                        </div>
                                    </div>
								</div>
							@endforeach
								<!--item-->

								<!--item-->

						</div>
						</div>
						<!--//my recipes-->


						<!--my favorites-->
						<div class="tab-content" id="favorites">
							<div class="entries row">
							@foreach($favorites as $favorite)
								<!--item-->
								<div class="entry one-third">
									<figure>

                                        <img src="{{URL::to('/public/images/recipe/')."/".$favorite->image}}"/>
                                        <figcaption><a href="{{URL::to('/recipes')."/".$favorite->id}}"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
                                    </figure>
                                    <div class="container">
                                        <h2><a href="recipe.html">{{$favorite->name}}</a></h2>
                                        <div class="actions">
                                            <div>
                                                @if ($favorite->difficulty=='easy')
                                                  <div class="difficulty"><i class="ico i-easy"></i><a href="#">Easy</a></div>
                                                @elseif($favorite->difficulty=='medium')
                                                  <div class="difficulty"><i class="ico i-medium"></i><a href="#">Medium</a></div>
                                                @elseif($favorite->difficulty=='hard')
                                                  <div class="difficulty"><i class="ico i-hard"></i><a href="#">Hard</a></div>
                                                @endif
                                                <div class="likes"><i class="ico i-likes"></i><a href="#">{{$favorite->num_of_likes}}</a></div>
                                                <div class="comments"><i class="ico i-comments"></i><a href="recipe.html#comments">{{$favorite->num_of_comments}}</a></div>
                                            </div>

                                        </div>
                                    </div>
								</div>
								@endforeach
								<!--item-->

								<!--item-->

								<!--item-->
							</div>
						</div>
						<!--//my favorites-->

						<!--my posts-->
						<div class="tab-content" id="posts">
							<!--entries-->
							<div class="entries row">
								<!--item-->
								<div class="entry one-third">
									<figure>
										<img src="{{URL::to('/public/frontend')}}/images/img12.jpg" alt="" />
										<figcaption><a href="blog_single.html"><i class="ico i-view"></i> <span>View post</span></a></figcaption>
									</figure>
									<div class="container">
										<h2><a href="blog_single.html">Barbeque party</a></h2>
										<div class="actions">
											<div>
												<div class="date"><i class="ico i-date"></i><a href="#">22 Dec 2014</a></div>
												<div class="comments"><i class="ico i-comments"></i><a href="blog_single.html#comments">27</a></div>
											</div>
										</div>
										<div class="excerpt">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. Lorem ipsum dolor sit amet . . . </p>
										</div>
									</div>
								</div>
								<!--item-->

								<!--item-->
								<div class="entry one-third">
									<figure>
										<img src="{{URL::to('/public/frontend')}}/images/img11.jpg" alt="" />
										<figcaption><a href="blog_single.html"><i class="ico i-view"></i> <span>View post</span></a></figcaption>
									</figure>
									<div class="container">
										<h2><a href="blog_single.html">How to make sushi</a></h2>
										<div class="actions">
											<div>
												<div class="date"><i class="ico i-date"></i><a href="#">22 Dec 2014</a></div>
												<div class="comments"><i class="ico i-comments"></i><a href="blog_single.html#comments">27</a></div>
											</div>
										</div>
										<div class="excerpt">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. Lorem ipsum dolor sit amet . . . </p>
										</div>
									</div>
								</div>
								<!--item-->

								<!--item-->
								<div class="entry one-third">
									<figure>
										<img src="{{URL::to('/public/frontend')}}/images/img10.jpg" alt="" />
										<figcaption><a href="blog_single.html"><i class="ico i-view"></i> <span>View post</span></a></figcaption>
									</figure>
									<div class="container">
										<h2><a href="blog_single.html">Make your own bread</a></h2>
										<div class="actions">
											<div>
												<div class="date"><i class="ico i-date"></i><a href="#">22 Dec 2014</a></div>
												<div class="comments"><i class="ico i-comments"></i><a href="blog_single.html#comments">27</a></div>
											</div>
										</div>
										<div class="excerpt">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. Lorem ipsum dolor sit amet . . . </p>
										</div>
									</div>
								</div>
								<!--item-->
							</div>
							<!--//entries-->
						</div>
						<!--//my posts-->
					</div>
				</div>
				<!--//row-->
			</section>
			<!--//content-->
		</div>
		<!--//wrap-->
	@stop