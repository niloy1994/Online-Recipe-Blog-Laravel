@extends('frontend.layout.layout')
@section('content')
		<div class="wrap clearfix">
			<!--breadcrumbs-->
			<nav class="breadcrumbs">
				<ul>
					<li><a href="index.html" title="Home">Home</a></li>
					<li><a href="#" title="Recipes">Recipes</a></li>
					<li>Recipe</li>
				</ul>
			</nav>
			<!--//breadcrumbs-->

			<!--row-->
			<div class="row">
				<header class="s-title wow fadeInLeft">
				    <input type="hidden" id="recipe_id" value="{{ $recipe->id }}" />
				    {{--<input type="hidden" id="recipe_id" value="{{ $favorite->id }}" />--}}
				    <input type="hidden" id="token" value="{{ csrf_token()   }}" />
				    <input type="hidden" id="user_name" value="{{ Session::get('user')['user_name'] }}"/>
					<h1>{{$recipe->name}}</h1>
				</header>
				<!--content-->
				<section class="content three-fourth">
					<!--recipe-->
						<div class="recipe">
							<div class="row">
								<!--two-third-->
								<article class="two-third wow fadeInLeft">

                                    <div class="image"><a href="#"><img src="{{URL::to('/public/images/recipe/')."/".$recipe_image[0]->image}}" /></a></div>


									<div class="intro"><p><strong>{{$recipe->description}} </strong></p></div>
									<div class="f-row">
									    <div class="third bwrap">
									         <input type="submit" value="Add To Favourite"  id="submit_like"/>
									    </div>
									</div>
									<div class="instructions">
										<ol>
										@foreach($procedures as $procedure)
											<li>{{$procedure->process}}</li>
										@endforeach

										</ol>
									</div>
								</article>
								<!--//two-third-->

								<!--one-third-->
								<article class="one-third wow fadeInDown">
									<dl class="basic">
										<dt>Preparation time</dt>
										<dd>{{$recipe->preparation_time}}</dd>
										<dt>Cooking time</dt>
										<dd>{{$recipe->cooking_time}}</dd>
										<dt>Difficulty</dt>
										<dd>{{$recipe->difficulty}}</dd>
										<dt>Serves</dt>
										<dd>{{$recipe->serves}}</dd>
									</dl>

									<dl class="user">
										<dt>Category</dt>

                                        <dd>{{$recipe->category->name}}</dd>


										{{--<dt>Posted by</dt>--}}
										{{--<dd>{{$users->name}}</dd>--}}


                                    </dl>

									<dl class="ingredients">
									@foreach($ingredients as $ingredient)
										<dt>{{$ingredient->amount}}{{$ingredient->unit}}</dt>
										<dd>{{$ingredient->name}}</dd>
									@endforeach
									</dl>
								</article>
								<!--//one-third-->
							</div>
						</div>
						<!--//recipe-->

						<!--comments-->
						<div class="comments wow fadeInUp" id="comments">

							<ol class="comment-list">
							@foreach($comment as $comment)
								<!--comment-->
								<li class="comment depth-1">
									<div class="avatar"><a href="my_profile.html"><img src="{{URL::to('/public/frontend')}}/images/avatar1.jpg" alt="" /></a></div>
									<div class="comment-box">



										<div class="comment-author meta">

											<strong>{{$comment->name}}</strong> said at {{$comment->created_at}} <a href="#" class="comment-reply-link"> Reply</a>
										</div>



										<div class="comment-text">
											<p>{{$comment->comment}}</p>
										</div>
									</div>
								</li>
								@endforeach
								<!--//comment-->

								<!--comment-->

								<!--comment-->
								{{--<li class="comment depth-2">
									<div class="avatar"><a href="my_profile.html"><img src="{{URL::to('/public/frontend')}}/images/avatar1.jpg" alt="" /></a></div>
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
									<div class="avatar"><a href="my_profile.html"><img src="{{URL::to('/public/frontend')}}/images/avatar2.jpg" alt="" /></a></div>
									<div class="comment-box">
										<div class="comment-author meta">
											<strong>Alex J.</strong> said 1 month ago <a href="#" class="comment-reply-link"> Reply</a>
										</div>
										<div class="comment-text">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
										</div>
									</div>
								</li>--}}
								<!--//comment-->

								<!--comment-->

								<!--//comment-->
							</ol>
						</div>
						<!--//comments-->

						<!--respond-->
						<div class="comment-respond wow fadeInUp" id="respond">
							<h2>Leave a reply</h2>
							<div class="container">
								<p><strong>Note:</strong> Comments on the web site reflect the views of their authors, and not necessarily the views of the socialchef internet portal. Requested to refrain from insults, swearing and vulgar expression. We reserve the right to delete any comment without notice explanations.</p>

								<div>
									<div class="f-row">
										<div class="third">


										</div>

										<div class="third">


										</div>

										<div class="third">

										</div>

									</div>
									<div class="f-row">
										<textarea id="comment_txt"></textarea>
									</div>

									<div class="f-row">
										<div class="third bwrap">
											<input type="submit" value="Submit comment"  id="submit_comment"/>
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
								</div>
							</div>
						</div>
						<!--//respond-->
				</section>
				<!--//content-->

				<!--right sidebar-->
				<aside class="sidebar one-fourth wow fadeInRight">
					<div class="widget nutrition">
						<h3>Nutrition facts <span>(per serving)</span></h3>
						<table>
						@foreach($nutrition as $nutrition)
							<tr>
								<td>{{$nutrition->name}} </td>
								<td>{{$nutrition->amount}}{{$nutrition->unit}}</td>
							</tr>
							@endforeach

						</table>
					</div>

					<div class="widget share">
						<ul class="boxed">
							<li class="light"><a href="#" title="Facebook"><i class="ico i-facebook"></i> <span>Share on Facebook</span></a></li>
							<li class="medium"><a href="#" title="Twitter"><i class="ico i-twitter"></i> <span>Share on Twitter</span></a></li>
							<li class="dark"><a href="#" title="Favourites"><i class="ico i-favourites"></i> <span>Add to Favourites</span></a></li>
						</ul>
					</div>

					<div class="widget members">
						<h3>Members who liked this recipe</h3>
						<ul class="boxed">
						@foreach($like_users as $like_user)
							<li><div class="avatar"><a href="my_profile.html"><img src="{{URL::to('/public/frontend')}}/images/avatar1.jpg" alt="" /><span>{{$like_user->name}}</span></a></div></li>
						@endforeach

						</ul>
					</div>
				</aside>
				<!--//right sidebar-->
			</div>
			<!--//row-->
		</div>
		<!--//wrap-->
		<script>

		$(document).ready(

		function(){
         		    $('#submit_comment').click(
         		        function(){

                             var base_url = $('#base_url').val();
                             var  comment =$('#comment_txt').val();
                             var  recipe_id =$('#recipe_id').val();
                             var  token =$('#token').val();
                             var username= $('#user_name').val();

                             if(comment!=""){
                                 $.ajax({
                                   url:base_url+"/recipe/post_comment",
                                   type:"post",
                                   data:{
                                      comment:comment,
                                      recipe_id:recipe_id,
                                      _token:token
                                   },
                                   success:function(response){
                                      console.log(response);
                                   }
                                 });
                             }

                             var html='<li class="comment depth-1">';
                                    html+=' <div class="avatar"><a href="my_profile.html"><img src="http://localhost/recipe/public/frontend/images/avatar1.jpg" alt=""></a></div>';
                                    html+='<div class="comment-box">';
                                    html+='<div class="comment-author meta">';
                                    html+='<strong> '+username+'</strong> said 1 month ago <a href="#" class="comment-reply-link"> Reply</a>';
                                    html+='</div>';
                                    html+='<div class="comment-text">';
                                    html+='<p>'+comment+' </p>';
                                    html+='</div>';
                                    html+='</div>';
                                    html+='</li>';

                             $('.comment-list').append(html);


                     }
         		    );




                    $('#submit_like').click(
                        function(){

                            var base_url = $('#base_url').val();
                            var  recipe_id =$('#recipe_id').val();
                            var  token =$('#token').val();



                                $.ajax({
                                  url:base_url+"/recipe/post_like",
                                  type:"post",
                                  data:{

                                     recipe_id:recipe_id,
                                     _token:token
                                  },
                                  success:function(response){
                                     console.log(response);
                                  }
                                });



                    }
                    );





		});
		</script>

	@stop


