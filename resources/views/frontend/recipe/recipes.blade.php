@extends('frontend.layout.layout')
@section('content')
         		<!--wrap-->
         		<div class="wrap clearfix">
         			<!--breadcrumbs-->
         			<nav class="breadcrumbs">
         				<ul>
         					<li><a href="index.html" title="Home">Home</a></li>
         					<li>Recipes</li>
         				</ul>
         			</nav>
         			<!--//breadcrumbs-->

         			<!--row-->
         			<div class="row">
         				<header class="s-title wow fadeInLeft">
         					<h1>Recipes</h1>
         				</header>

         				<section class="content three-fourth wow fadeInUp">
                        					<!--entries-->
                                <div class="entries row">
                                    <!--item-->
                                    @foreach($recipes as $recipe)
                                    <div class="entry one-third wow fadeInLeft">
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


         						<div class="quicklinks">
         							<a href="#" class="button">More recipes</a>
         							<a href="javascript:void(0)" class="button scroll-to-top">Back to top</a>
         						</div>
         					</div>
         					<!--//entries-->
         				</section>
         				<aside class="sidebar one-fourth wow fadeInRight">
                            <div class="widget">
                                <ul class="categories right">

                                    <li class="active"><a href="#">All recipes</a></li>
                                    @foreach($categories as $category)
                                    <li><a href="{{URL::to('/recipes')."?category_id=".$category->id}}">{{$category->name}}</a></li>
                                    @endforeach
                                    {{--<li><a href="#">Cocktails</a></li>
                                    <li><a href="#">Deserts</a></li>
                                    <li><a href="#">Eggs</a></li>
                                    <li><a href="#">Equipment</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Fish</a></li>
                                    <li><a href="#">Fitness</a></li>
                                    <li><a href="#">Healthy</a></li>
                                    <li><a href="#">Asian</a></li>
                                    <li><a href="#">Mexican</a></li>
                                    <li><a href="#">Pizza</a></li>
                                    <li><a href="#">Kids</a></li>
                                    <li><a href="#">Meat</a></li>
                                    <li><a href="#">Snacks</a></li>
                                    <li><a href="#">Salads</a></li>
                                    <li><a href="#">Storage</a></li>
                                    <li><a href="#">Vegetarian</a></li>--}}
                                </ul>
                            </div>
                            <div class="widget">
                                <h3>Advertisment</h3>
                                <a href="#"><img src="{{URL::to('/public/frontend')}}/images/advertisement.jpg" alt="" /></a>
                            </div>
                        </aside>
         				<!--//content-->
         			</div>
         			<!--//row-->
         		</div>
         		<!--//wrap-->
         @stop