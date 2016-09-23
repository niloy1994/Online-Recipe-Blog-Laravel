@extends('frontend.layout.layout')
@section('content')
         		<!--wrap-->
         		<div class="wrap clearfix">
         			<!--breadcrumbs-->
         			<nav class="breadcrumbs">
         				<ul>
         					<li><a href="index.html" title="Home">Home</a></li>
         					<li>Submit a blog</li>
         				</ul>
         			</nav>
         			<!--//breadcrumbs-->

         			<!--row-->
         			<div class="row">
         				<header class="s-title">
         					<h1>Add a new blog</h1>
         				</header>

         				<!--content-->
         				<section class="content full-width wow fadeInUp">
         					<div class="submit_recipe container">
         						<form method="POST" action="{{URL::to('blog/save')}}" enctype="multipart/form-data">
         							<section>
         								<h2>Basics</h2>
         								<p>All fields are required.</p>
         								<input name="_token" value="{{csrf_token()}}" type="hidden"/>
         								<div class="f-row">
         									<div class="full"><input type="text" name="title" placeholder="Blog title" /></div>
         								</div>
         							</section>

         							<section>
         								<h2>Description</h2>
         								<div class="f-row">
         									<div class="full"><textarea name="description" placeholder="Blog Description"></textarea></div>
         								</div>
         							</section>



         							<section>
         								<h2>Photo</h2>
         								<div class="f-row full">
         									<input type="file" name="image[]" id="image" />
         								</div>
         							</section>


         							<div class="f-row full">
         								<input type="submit" class="button" id="submitBlog" value="Publish this blog" />
         							</div>
         						</form>
         					</div>
         				</section>
         				<!--//content-->
         			</div>
         			<!--//row-->
         			</div>






     <script src="{{URL::to('/public/frontend/js/recipe.js')}}"></script>
@stop