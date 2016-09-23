@extends('frontend.layout.layout')
@section('content')
		<!--wrap-->
		<div class="wrap clearfix">
			<!--row-->
			<div class="row">
				<!--content-->
				<section class="content center full-width wow fadeInUp">
					<div class="modal container">
						<form method="post" action="{{URL::to('/send_message')}}" name="contactform" id="contactform">
							<h3>Contact us</h3>
							<div id="message" class="alert alert-danger"></div>
							<div class="f-row">
								<input type="text" placeholder="Your name" id="name" name="name" />
							</div>
							<div class="f-row">
								<input type="email" placeholder="Your email" id="email" name="email" />
							</div>
							<div class="f-row">
								<input type="number" placeholder="Your phone number" id="phone" name="number" />
							</div>
							<div class="f-row">
                                <input type="text" placeholder="Subject" id="subject" name="subject" />
                            </div>
							<div class="f-row">
								<textarea placeholder="Your message" id="message" name="message"></textarea>
							</div>
							<div class="f-row bwrap">
								<input type="submit" value="Send message" />
							</div>
						</form>
					</div>
				</section>
				<!--//content-->
			</div>
			<!--//row-->
		</div>
		<!--//wrap-->
	@stop


