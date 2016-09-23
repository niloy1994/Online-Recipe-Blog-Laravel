<header class="head" role="banner">
		<!--wrap-->
		<div class="wrap clearfix">
			<a href="{{URL::to('/')}}" title="SocialChef" class="logo"><img src="{{URL::to('/public/frontend')}}/images/ico/logo.png" alt="SocialChef logo" /></a>

			<nav class="main-nav" role="navigation" id="menu">
				<ul>
					<li class="current-menu-item"><a href="{{URL::to('/')}}" title="Home"><span>Home</span></a></li>
					<li><a href="{{URL::to('/recipes')}}" title="Recipes"><span>Recipes</span></a>

					</li>
					<li><a href="{{URL::to('/blogs')}}" title="Blog"><span>Blogs</span></a>
					@if(Session::get('user'))
						<ul>
							{{--<li><a href="{{URL::to('/blogs')}}" title="Blog post">Blogs</a></li>--}}
							<li><a href="{{URL::to('/submit_blog')}}" title="submit_blog">Blog Submit</a></li>
						</ul>
						@endif
					</li>
					<li><a href="#" title="Pages"><span>Pages</span></a>
						<ul>
							<li><a href="left_sidebar.html" title="Left sidebar page">Left sidebar page</a></li>
							<li><a href="right_sidebar.html" title="Right sidebar page">Right sidebar page</a></li>
							<li><a href="two_sidebars.html" title="Both sidebars page">Both sidebars page</a></li>
							<li><a href="full_width.html" title="Full width page">Full width page</a></li>
							<li><a href="login.html" title="Login page">Login page</a></li><li><a href="register.html" title="Register page">Register page</a></li>
							<li><a href="error404.html" title="Error page">Error page</a></li>
						</ul>
					</li>
					<li><a href="#" title="Features"><span>Features</span></a>
						<ul>
							<li><a href="animations.html" title="Animations">Animations</a></li>
							<li><a href="grid.html" title="Grid">Grid</a></li>
							<li><a href="shortcodes.html" title="Shortcodes">Shortcodes</a></li>
							<li><a href="pricing.html" title="Pricing tables">Pricing tables</a></li>
						</ul>
					</li>
					<li><a href="{{URL::to('/contact')}}" title="Contact"><span>Contact</span></a></li><li><a href="http://themeforest.net/item/socialchef-social-recipe-html-template/8568727?ref=themeenergy" title="Buy now"><span>Buy now</span></a></li>
				</ul>
			</nav>

			<nav class="user-nav" role="navigation">
				<ul>

					@if(Session::get('user'))
					   <li class="light"><a href="{{URL::to('/logout')}}" title="logout"><i class="ico i-account"></i> <span>Log out</span></a></li>
                       <li class="medium"><a href="{{URL::to('/home')}}" title="My Account"><i class="ico i-account"></i> <span>My Account</span></a></li>
                       <li class="dark"><a href="{{URL::to('/submit_recipe')}}" title="Submit a recipe"><i class="ico i-submitrecipe"></i> <span>Submit a recipe</span></a></li>
                    @else
                      <li class="medium"><a href="{{URL::to('/login')}}" title="login"><i class="ico i-account"></i> <span>Login</span></a></li>

                    @endif
                    <li class="light"><a href="{{URL::to('/search_recipe')}}" title="Search for recipes"><i class="ico i-search"></i> <span>Search recipe</span></a></li>


				</ul>
			</nav>
		</div>
		<!--//wrap-->
</header>