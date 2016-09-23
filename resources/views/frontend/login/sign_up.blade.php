@extends('frontend.layout.layout')
@section('content')
         		<!--wrap-->
         		<div class="wrap clearfix">
         			<!--row-->
         			<div class="row">
         			<!--content-->
         				<section class="content center full-width wow fadeInUp">
         				<form method="POST" action="{{URL::to('/user/save')}}">

                         <input name="_token" value="{{csrf_token()}}" type="hidden"/>
         					<div class="modal container">
         						<h3>Register</h3>

         						@if($errors->first())
                                <div class="f-row">

                                      <strong>Opps!</strong> {{ $errors->first() }}
                                </div>
                                @endif
         						<div class="f-row">
         							<input type="text" name="name" id="name" placeholder="Your name" />
         						</div>
         						<div class="f-row">
         							<input type="email"name="email" id="email" placeholder="Your email" />
         						</div>
         						<div class="f-row">
         							<input type="password" name="password" id="password" placeholder="Your password" />
         						</div>
         						<div class="f-row">
         							<input type="password" name="password_confirmation" id="confirm_password" placeholder="Retype password" />
         						</div>

         						<div class="f-row bwrap">
         							<input type="submit" id="btn_submit1" value="register" />
         						</div>
         						<p>Already have an account yet? <a href="{{URL::to('/login')}}">Log in.</a></p>
         					</div>
         					</form>
         				</section>
         				<!--//content-->
         			</div>
         			<!--//row-->
         		</div>
         		<!--//wrap-->


<script src="{{URL::to('/public/frontend/js/user.js')}}"></script>



@stop