@extends('frontend.layout.layout')
@section('content')
		<!--wrap-->
		<div class="wrap clearfix">
			<!--breadcrumbs-->
			<nav class="breadcrumbs">
				<ul>
					<li><a href="index.html" title="Home">Home</a></li>
					<li>Search for Recipes</li>
				</ul>
			</nav>
			<!--//breadcrumbs-->
			
			<!--row-->
			<div class="row">
				<header class="s-title wow fadeInLeft">
					<h1>Search for Recipes</h1>
				</header>
				
				<!--content-->
				<section class="content full-width wow fadeInUp">
					<!--recipefinder-->
					<div class="container recipefinder">
					<form action="{{URL::to('/recipes')}}" method="get">
						<div class="left">
							<h3>Search by ingredients</h3>
							<p>Click the ‘-’ to remove an ingredient, or click the ingredient itself to emphasize</p>

							<div class="f-row" id="ingredients">
								<input type="text" name="ingredient[]" placeholder="Add ingredients (one at a time)" />
								{{--<button class="add"  type="button" id="add_more_ingredient">+</button>--}}
								<button class="remove" id="">-</button>

							</div>
							<div class="f-row">
								{{--<input type="text" placeholder="Delete ingredients" />--}}
								<button class="add"  type="button" id="add_more_ingredient">+</button>
								{{--<button class="remove" id="">-</button>--}}
							</div>
							{{--<div class="f-row">
								<input type="submit" value="Search" />
							</div>--}}
						</div>
						<div class="right">
							<div class="ingredients">
								<h3>Do you also have?</h3>
								<a href="#" class="button gold">Olive oil</a><a href="#" class="button gold">Parsley</a><a href="#" class="button gold">Tomato</a><a href="#" class="button gold">Olive oil</a><a href="#" class="button gold">Parsley</a><a href="#" class="button gold">Tomato</a><a href="#" class="button gold">Parsley</a><a href="#" class="button gold">Tomato</a><a href="#" class="button gold">Olive oil</a><a href="#" class="button gold">Parsley</a><a href="#" class="button gold">Tomato</a>
							</div>
							
							<h3>Or you might want to search directly</h3>

							<div class="row">
								<div class="search one-half">
									<input type="search" placeholder="Find recipe by name" name="name" />
									<input type="submit" value="Search" />
								</div>
								
								<div class="one-half">
									<select name="category_id">
                                        <option></option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
								</div>

							</div>
							<div >
                                <input type="submit" class="one-half" value="Search" />
                            </div>
						</div>
						</form>
					</div>
					<!--//recipefinder-->
				
					<!--results-->
					<div class="entries row">
						<!--item-->
						@foreach($recipes as $recipe)
						<div class="entry one-fourth wow fadeInLeft" data-wow-delay=".2s">
							<figure>
								<img src="{{URL::to('/public/images/recipe/')."/".$recipe->image}}"/>
								<figcaption><a href="{{URL::to('/recipes')."/".$recipe->id}}"><i class="ico i-view"></i> <span>View recipe</span></a></figcaption>
							</figure>
							<div class="container">
								<h2><a href="{{URL::to('/recipes')."/".$recipe->id}}">{{$recipe->name}}</a></h2>
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
					<!--//results-->
				</section>
				<!--//content-->
			</div>
			<!--//row-->
		</div>
		<!--//wrap-->
		<script src="{{URL::to('/public/frontend/js/search.js')}}"></script>
	@stop


