<!DOCTYPE html>
<html>
     <head>
	      @include('frontend.layout.header')
     </head>
     <body>


         @include('frontend.layout.navigation')


         <main class="main" role="main">
	        @yield('content')
	     </main>

     </body>


	 @include('frontend.layout.footer')

</html>