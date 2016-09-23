      <footer class="foot" role="contentinfo">
      		<div class="wrap clearfix">
      			<div class="row">
      				<article class="one-half">
      					<h5>About SocialChef Community</h5>
      					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
      				</article>
      				<article class="one-fourth">
      					<h5>Need help?</h5>
      					<p>Contact us via phone or email</p>
      					<p><em>T:</em>  +1 555 555 555<br /><em>E:</em>  <a href="#">socialchef@email.com</a></p>
      				</article>
      				<article class="one-fourth">
      					<h5>Follow us</h5>
      					<ul class="social">
      						<li class="facebook"><a href="#" title="facebook">facebook</a></li>
      						<li class="youtube"><a href="#" title="youtube">youtube</a></li>
      						<li class="rss"><a href="#" title="rss">rss</a></li>
      						<li class="gplus"><a href="#" title="gplus">google plus</a></li>
      						<li class="linkedin"><a href="#" title="linkedin">linkedin</a></li>
      						<li class="twitter"><a href="#" title="twitter">twitter</a></li>
      						<li class="pinterest"><a href="#" title="pinterest">pinterest</a></li>
      						<li class="vimeo"><a href="#" title="vimeo">vimeo</a></li>
      					</ul>
      				</article>

      				<div class="bottom">
      					<p class="copy">Copyright 2014 SocialChef. All rights reserved</p>

      					<nav class="foot-nav">
      						<ul>
      							<li><a href="index.html" title="Home">Home</a></li>
      							<li><a href="recipes.html" title="Recipes">Recipes</a></li>
      							<li><a href="blog.html" title="Blog">Blog</a></li>
      							<li><a href="contact.html" title="Contact">Contact</a></li>
      							<li><a href="find_recipe.html" title="Search for recipes">Search for recipes</a></li>
      							<li><a href="login.html" title="Login">Login</a></li>	<li><a href="register.html" title="Register">Register</a></li>
      						</ul>
      					</nav>
      				</div>
      			</div>
      		</div>
      	</footer>


	<!--preloader-->
    	<div class="preloader">
    		<div class="spinner"></div>
    	</div>
    	<!--//preloader-->


    	<script src="{{URL::to('/public/frontend')}}/js/jquery.uniform.min.js"></script>
    	<script src="{{URL::to('/public/frontend')}}/js/wow.min.js"></script>
    	<script src="{{URL::to('/public/frontend')}}/js/jquery.slicknav.min.js"></script>
    	<script src="{{URL::to('/public/frontend')}}/js/scripts.js"></script>
    	<script>
    		window.dynamicNumbersBound = false;
    		var wow = new WOW();
    		WOW.prototype.show = function(box) {
    			wow.applyStyle(box);
    			if (typeof box.parentNode !== 'undefined' && hasClass(box.parentNode, 'dynamic-numbers') && !window.dynamicNumbersBound) {
    				bindDynamicNumbers();
    				window.dynamicNumbersBound = true;
    			}
    			return box.className = "" + box.className + " " + wow.config.animateClass;
    		};
    		wow.init();

    		function hasClass(element, cls) {
    			return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
    		}

    		function bindDynamicNumbers() {
    			$('.dynamic-number').each(function() {
    				var startNumber = $(this).text();
    				var endNumber = $(this).data('dnumber');
    				var dynamicNumberControl = $(this);

    				$({numberValue: startNumber}).animate({numberValue: endNumber}, {
    					duration: 4000,
    					easing: 'swing',
    					step: function() {
    						$(dynamicNumberControl).text(Math.ceil(this.numberValue));
    					}
    				});
    			});
    		}

    	</script>

