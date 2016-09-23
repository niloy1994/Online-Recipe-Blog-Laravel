<ul class="navigation">
				<li>
					<a href="{{URL::to('/admin/dashboard')}}"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Dashboard</span></a>
				</li>
				<li class="mm-dropdown">
					<a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Admins</span></a>
					<ul>
						<li>
							<a tabindex="-1" href="{{URL::to('/admin/admin/add')}}"><span class="mm-text">Add Admin</span></a>
						</li>
						<li>
							<a tabindex="-1" href="{{URL::to('/admin/admins')}}"><span class="mm-text">Admins</span></a>
						</li>

					</ul>
				</li>
				<li class="mm-dropdown">
                     	<a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Categories</span></a>

                     	<ul>
                     		<li>
                     			<a tabindex="-1" href="{{URL::to('/admin/category/add')}}"><span class="mm-text">Add Category</span></a>
                     		</li>
                     		<li>
                     			<a tabindex="-1" href="{{URL::to('/admin/categories')}}"><span class="mm-text">Categories</span></a>
                     		</li>

                     	</ul>
                </li>

                <li class="mm-dropdown">
                        <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Settings</span></a>
                        <ul>
                            <li>
                                <a tabindex="-1" href="{{URL::to('/admin/countries')}}"><span class="mm-text">Countries</span></a>
                            </li>
                            <li>
                                <a tabindex="-1" href="{{URL::to('/admin/cities')}}"><span class="mm-text">Cities</span></a>
                            </li>

                        </ul>
                </li>

                 <li class="mm-dropdown">
                         <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Recipes</span></a>
                         <ul>
                              <li>
                                  <a tabindex="-1" href="{{URL::to('/admin/recipes')}}"><span class="mm-text">Recipes</span></a>
                              </li>

                              <li>
                                  <a tabindex="-1" href="{{URL::to('/admin/recipe_select')}}"><span class="mm-text">Recipe Of The Day</span></a>
                              </li>

                         </ul>
                 </li>

                 <li class="mm-dropdown">
                          <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Users</span></a>
                          <ul>
                               <li>
                                   <a tabindex="-1" href="{{URL::to('/admin/user_select')}}"><span class="mm-text">User Of The Day</span></a>
                               </li>

                          </ul>
                 </li>

                 <li class="mm-dropdown">
                           <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Blogs</span></a>
                           <ul>
                                <li>
                                    <a tabindex="-1" href="{{URL::to('/admin/blogs')}}"><span class="mm-text">Blogs</span></a>
                                </li>

                           </ul>
                  </li>



			</ul> 