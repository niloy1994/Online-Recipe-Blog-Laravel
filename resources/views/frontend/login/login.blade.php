<!DOCTYPE html>
<html>
     <head>
	      @include('frontend.layout.header')
     </head>
     <body>


         @include('frontend.layout.navigation')


         <main class="main" role="main">
         		<!--wrap-->
         		<div class="wrap clearfix">
         			<!--row-->
         			<div class="row">
         			<!--content-->
         				<section class="content center full-width wow fadeInUp">
         				@if($errors->any())
                        <h4>{{$errors->first()}}</h4>
                        @endif
         				<form method="POST" action="{{URL::to('/check_login')}}">

                        	<input name="_token" value="{{csrf_token()}}" type="hidden"/>
         					<div class="modal container">
         						<h3>Login</h3>
         						<div class="f-row">
         							<input type="text" name="email" id="email" placeholder="Your Email" />
         						</div>
         						<div class="f-row">
         							<input type="password" name="password" id="password" placeholder="Your password" />
         						</div>

         						<div class="f-row">
         							<input type="checkbox" />
         							<label>Remember me next time</label>
         						</div>

         						<div class="f-row bwrap">
         							<input type="submit" value="login" />
         						</div>
         						<p><a href="#">Forgotten password?</a></p>
         						<p>Dont have an account yet? <a href="{{URL::to('/sign_up')}}">Sign up.</a></p>
         					</div>
         					</form>
         				</section>
         				<!--//content-->
         			</div>
         			<!--//row-->
         		</div>
         		<!--//wrap-->
         	</main>

         	@include('frontend.layout.footer')


     </body>




</html>