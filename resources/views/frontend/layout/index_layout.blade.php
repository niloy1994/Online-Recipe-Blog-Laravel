<!DOCTYPE html>
<html>
     <head>
	      @include('frontend.layout.header')
     </head>
     <body class="home">


         @include('frontend.layout.navigation')


         <main class="main" role="main">
	        @yield('content')
	     </main>

	     <section class="cta">
         		<div class="wrap clearfix">
         			<a href="http://themeforest.net/item/socialchef-social-recipe-html-template/8568727?ref=themeenergy" class="button big white right">Purchase theme</a>
         			<h2>Already convinced? This is a call to action section lorem ipsum dolor sit amet.</h2>
         		</div>
         	</section>
     </body>


	 @include('frontend.layout.footer')

</html>