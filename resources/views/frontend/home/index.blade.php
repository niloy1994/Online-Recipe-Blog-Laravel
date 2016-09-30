@extends('frontend.layout.index_layout')
@section('content')
<!--main-->

		<!--intro-->
		<div class="intro">
			<figure class="bg"><img src="{{URL::to('/public/frontend')}}/images/intro.jpg" alt="" /></figure>

			<!--wrap-->
			<div class="wrap clearfix">
				<!--row-->
				<div class="row">
					<article class="three-fourth text wow zoomIn" data-wow-delay=".2s">
						<h1>Welcome to SocialChef!</h1>
						<p>SocialChef is the ultimate <strong>cooking social community</strong>, where recipes come to life. Wanna know what you will gain by joining us? Lorem ipsum dolor sit amet, this is some teaser text.</p>
						<p>You will win awesome prizes, make new friends and share delicious recipes. </p>
						<a href="{{URL::to('/sign_up')}}" class="button white more medium">Join our community</a>
						<p>Already a member? Click <a href="{{URL::to('/login')}}">here</a> to login.</p>
					</article>

					<!--search recipes widget-->
					<div class="one-fourth wow fadeInDown" data-wow-delay=".5s">
						<div class="widget container">
							<div class="textwrap">
								<h3>Search for recipes</h3>
								<p>All you need to do is enter an igredient, a dish or a keyword. </p>
								<p>You can also select a specific category from the dropdown.</p>
								<p>There’s sure to be something tempting for you to try.</p>
								<p>Enjoy!</p>
							</div>

							<form action="{{URL::to('/recipes')}}" method="get">
								<div class="f-row">
									<input name="name" type="text" placeholder="Enter your search term" />
								</div>
								<div class="f-row">
									<select name="category_id">
									    <option></option>
										@foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
									</select>
								</div>
								<div class="f-row bwrap">
									<input type="submit" value="Start cooking!" />
								</div>
							</form>

						</div>
					</div>
					<!--//search recipes widget-->
				</div>
				<!--//row-->
			</div>
			<!--//wrap-->
		</div>
		<!--//intro-->

		<!--wrap-->
		<div class="wrap clearfix">
			<!--row-->
			<div class="row">
				<!--content-->
				<section class="content full-width">
					<div class="icons dynamic-numbers">
						<header class="s-title wow fadeInDown">
							<h2 class="ribbon large">SocialChef in numbers</h2>
						</header>

						<!--row-->
						<div class="row wow fadeInUp">
							<!--item-->
							<div class="one-sixth">
								<div class="container">
									<i class="ico i-members"></i>
									<span class="title dynamic-number" data-dnumber="{{$total_member[0]->num_of_members}}">0</span>
									<span class="subtitle">members</span>
								</div>
							</div>
							<!--//item-->

							<!--item-->
							<div class="one-sixth">
								<div class="container">
									<i class="ico i-recipes"></i>
									<span class="title dynamic-number" data-dnumber="{{$total_recipe[0]->num_of_recipes}}">0</span>
									<span class="subtitle">recipes</span>
								</div>
							</div>
							<!--//item-->

							<!--item-->
							<div class="one-sixth">
								<div class="container">
									<i class="ico i-photos"></i>
									<span class="title dynamic-number" data-dnumber="{{$total_photo[0]->total_count}}">0</span>
									<span class="subtitle">photos</span>
								</div>
							</div>
							<!--//item-->

							<!--item-->
							<div class="one-sixth">
								<div class="container">
									<i class="ico i-posts"></i>
									<span class="title dynamic-number" data-dnumber="{{$total_blog[0]->num_of_blogs}}">0</span>
									<span class="subtitle">forum posts</span>
								</div>
							</div>
							<!--//item-->

							<!--item-->
							<div class="one-sixth">
								<div class="container">
									<i class="ico i-comment"></i>
									<span class="title dynamic-number" data-dnumber="{{$total_comment[0]->num_of_comments}}">0</span>
									<span class="subtitle">comments</span>
								</div>
							</div>
							<!--//item-->

							<!--item-->
							<div class="one-sixth">
								<div class="container">
									<i class="ico i-articles"></i>
									<span class="title dynamic-number" data-dnumber="{{$total_blog[0]->num_of_blogs}}">0</span>
									<span class="subtitle">articles</span>
								</div>
							</div>
							<!--//item-->

							<div class="cta">
								<a href="{{URL::to('/sign_up')}}" class="button big">Join us!</a>
							</div>
						</div>
						<!--//row-->
					</div>
				</section>
				<!--//content-->

				<!--content-->
				<section class="content three-fourth">
					<!--cwrap-->
					<div class="cwrap">
						<!--entries-->
						<div class="entries row">
							<!--featured recipe-->
							<div class="featured two-third wow fadeInLeft">
								<header class="s-title">
									<h2 class="ribbon">Recipe of the Day</h2>
								</header>
								<article class="entry">
									<figure>
										<img src="{{URL::to('/public/images/recipe/')."/".$recipe_of_the_day[0]->image}}"  />
										<figcaption><a href="{{URL::to('/recipes')."/".$recipe_of_the_day[0]->id}}"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
									</figure>
									<div class="container">
										<h2><a href="recipe.html">{{$recipe_of_the_day[0]->name}}</a></h2>
										<p>{{$recipe_of_the_day[0]->description}}</p>
										<div class="actions">
											<div>
												<a href="{{URL::to('/recipes')."/".$recipe_of_the_day[0]->id}}" class="button">See the full recipe</a>
												{{--<div class="more"><a href="recipes2.html">See past recipes of the day</a></div>--}}
											</div>
										</div>
									</div>
								</article>
							</div>
							<!--//featured recipe-->

							<!--featured member-->
							<div class="featured one-third wow fadeInLeft" data-wow-delay=".2s">
								<header class="s-title">
									<h2 class="ribbon star">Featured member</h2>
								</header>
								<article class="entry">
									<figure>
										<img src="{{URL::to('/public/frontend')}}/images/avatar1.jpg" alt="" />
										<figcaption><a href="my_profile.html"><i class="ico i-view"></i> <span>View member</span></a></figcaption>
									</figure>
									<div class="container">
										<h2><a href="my_profile.html">{{$user_of_the_day[0]->name}}</a></h2>
										<blockquote>Traditional dishes and fine bakery products accompanied by beautiful photographs to bend around and attract the tryout! Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</blockquote>
										<div class="actions">
											<div>
												<a href="#" class="button">Check out Profile</a>
												{{--<div class="more"><a href="#">See past featured members</a></div>--}}
											</div>
										</div>
									</div>
								</article>
							</div>
							<!--//featured member-->
						</div>
						<!--//entries-->
					</div>
					<!--//cwrap-->

					<!--cwrap-->
					<div class="cwrap">
						<header class="s-title">
							<h2 class="ribbon bright">Latest recipes</h2>
						</header>

						<!--entries-->
						<div class="entries row">
							<!--item-->
							@foreach($recipes as $recipe)
							<div class="entry one-third wow fadeInLeft">
								<figure>
									<img src="{{URL::to('/public/images/recipe/')."/".$recipe->image}}"  />
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

							<!--item-->

							<div class="quicklinks">
								<a href="{{URL::to('/recipes')}}" class="button">More recipes</a>
								<a href="javascript:void(0)" class="button scroll-to-top">Back to top</a>
							</div>
						</div>
						<!--//entries-->
					</div>
					<!--//cwrap-->

					<!--cwrap-->
					<div class="cwrap">
						<header class="s-title">
							<h2 class="ribbon bright">Latest articles</h2>
						</header>
						<!--entries-->
						<div class="entries row">
							<!--item-->
							<div class="entry one-third wow fadeInLeft">
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
							<div class="entry one-third wow fadeInLeft" data-wow-delay=".2s">
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
							<div class="entry one-third wow fadeInLeft" data-wow-delay=".4s">
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

							<div class="quicklinks">
								<a href="#" class="button">More posts</a>
								<a href="javascript:void(0)" class="button scroll-to-top">Back to top</a>
							</div>
						</div>
						<!--//entries-->
					</div>
					<!--//cwrap-->
				</section>
				<!--//content-->


				<!--right sidebar-->
				<aside class="sidebar one-fourth">
					<div class="widget wow fadeInRight">
						<h3>Recipe Categories</h3>
						<ul class="boxed">
						    @foreach($categories as $category)
                                <li class="light"><a href="{{URL::to('/recipes')."?category_id=".$category->id}}" ><i class="ico {{$category->icon}}"></i> <span>{{$category->name}}</span></a></li>
						    @endforeach
							{{--<li class="light"><a href="recipes.html" title="Appetizers"><i class="ico i-appetizers"></i> <span>Apetizers</span></a></li>--}}
							{{--<li class="medium"><a href="recipes.html" title="Cocktails"><i class="ico i-cocktails"></i> <span>Cocktails</span></a></li>--}}
							{{--<li class="dark"><a href="recipes.html" title="Deserts"><i class="ico i-deserts"></i> <span>Deserts</span></a></li>--}}

							{{--<li class="medium"><a href="recipes.html" title="Cocktails"><i class="ico i-eggs"></i> <span>Eggs</span></a></li>--}}
							{{--<li class="dark"><a href="recipes.html" title="Equipment"><i class="ico i-equipment"></i> <span>Equipment</span></a></li>--}}
							{{--<li class="light"><a href="recipes.html" title="Events"><i class="ico i-events"></i> <span>Events</span></a></li>--}}

							{{--<li class="dark"><a href="recipes.html" title="Fish"><i class="ico i-fish"></i> <span>Fish</span></a></li>--}}
							{{--<li class="light"><a href="recipes.html" title="Ftness"><i class="ico i-fitness"></i> <span>Fitness</span></a></li>--}}
							{{--<li class="medium"><a href="recipes.html" title="Healthy"><i class="ico i-healthy"></i> <span>Healthy</span></a></li>--}}

							{{--<li class="light"><a href="recipes.html" title="Asian"><i class="ico i-asian"></i> <span>Asian</span></a></li>--}}
							{{--<li class="medium"><a href="recipes.html" title="Mexican"><i class="ico i-mexican"></i> <span>Mexican</span></a></li>--}}
							{{--<li class="dark"><a href="recipes.html" title="Pizza"><i class="ico i-pizza"></i> <span>Pizza</span></a></li>--}}

							{{--<li class="medium"><a href="recipes.html" title="Kids"><i class="ico i-kids"></i> <span>Kids</span></a></li>--}}
							{{--<li class="dark"><a href="recipes.html" title="Meat"><i class="ico i-meat"></i> <span>Meat</span></a></li>--}}
							{{--<li class="light"><a href="recipes.html" title="Snacks"><i class="ico i-snacks"></i> <span>Snacks</span></a></li>--}}

							{{--<li class="dark"><a href="recipes.html" title="Salads"><i class="ico i-salads"></i> <span>Salads</span></a></li>--}}
							{{--<li class="light"><a href="recipes.html" title="Storage"><i class="ico i-storage"></i> <span>Storage</span></a></li>--}}
							{{--<li class="medium"><a href="recipes.html" title="Vegetarian"><i class="ico i-vegetarian"></i> <span>Vegetarian</span></a></li>--}}
						</ul>
					</div>

					<div class="widget wow fadeInRight" data-wow-delay=".2s">
						<h3>Tips and tricks</h3>
						<ul class="articles_latest">
							<li>
								<a href="blog_single.html">
									<img src="{{URL::to('/public/frontend')}}/images/img9.jpg" alt="" />
									<h6>How to decorate cookies</h6>
								</a>
							</li>
							<li>
								<a href="blog_single.html">
									<img src="{{URL::to('/public/frontend')}}/images/img10.jpg" alt="" />
									<h6>Make your own bread</h6>
								</a>
							</li>
							<li>
								<a href="blog_single.html">
									<img src="{{URL::to('/public/frontend')}}/images/img11.jpg" alt="" />
									<h6>How to make sushi</h6>
								</a>
							</li>
							<li>
								<a href="blog_single.html">
									<img src="{{URL::to('/public/frontend')}}/images/img12.jpg" alt="" />
									<h6>Barbeque party</h6>
								</a>
							</li>
							<li>
								<a href="blog_single.html">
									<img src="{{URL::to('/public/frontend')}}/images/img8.jpg" alt="" />
									<h6>How to make a cheesecake</h6>
								</a>
							</li>
						</ul>
					</div>

					<div class="widget members wow fadeInRight" data-wow-delay=".4s">
						<h3>Our members</h3>
						<div id="members-list-options" class="item-options">
						  <a href="#">Newest</a>
						  <a class="selected" href="#">Active</a>
						  <a href="#">Popular</a>
						</div>
						<ul class="boxed">
						@foreach($users as $user)

							<li><div class="avatar"><a href="my_profile.html"><img src="{{URL::to('/public/frontend')}}/images/avatar9.jpg" alt="" /><span>{{$user->name}}</span></a></div></li>
						@endforeach
						</ul>
					</div>

					<div class="widget wow fadeInRight" data-wow-delay=".6s">
						<h3>Advertisment</h3>
						<a href="#"><img src="{{URL::to('/public/frontend')}}/images/advertisement.jpg" alt="" /></a>
					</div>
				</aside>
			</div>
			<!--//right sidebar-->
		</div>
		<!--//wrap-->
	<!--//main-->

	<!--call to action-->



@stop