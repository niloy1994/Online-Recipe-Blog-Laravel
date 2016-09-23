@extends('frontend.layout.layout')
@section('content')
         		<!--wrap-->
         		<div class="wrap clearfix">
         			<!--breadcrumbs-->
         			<nav class="breadcrumbs">
         				<ul>
         					<li><a href="index.html" title="Home">Home</a></li>
         					<li>Submit a recipe</li>
         				</ul>
         			</nav>
         			<!--//breadcrumbs-->

         			<!--row-->
         			<div class="row">
         				<header class="s-title">
         					<h1>Add a new recipe</h1>
         				</header>

         				<!--content-->
         				<section class="content full-width wow fadeInUp">
         					<div class="submit_recipe container">
         						<form method="POST" action="{{URL::to('recipe/save')}}" enctype="multipart/form-data">
         							<section>
         								<h2>Basics</h2>
         								<p>All fields are required.</p>
         								<input name="_token" value="{{csrf_token()}}" type="hidden"/>
         								<div class="f-row">
         									<div class="full"><input type="text" name="name" placeholder="Recipe title" /></div>
         								</div>
         								<div class="f-row">
         									<div class="third"><input type="text" name="preparation_time" placeholder="Preparation time" /></div>
         									<div class="third"><input type="text" name="cooking_time" placeholder="Cooking time" /></div>
         									<div class="third">
         									<select name="difficulty" id="difficulty">
                                                   <option>easy</option>
                                                   <option>medium</option>
                                                   <option>hard</option>

                                             </select>
                                             </div>
         								</div>
         								<div class="f-row">
         									<div class="third"><input type="text" name="serves" placeholder="Serves how many people?" /></div>
         									<div class="third"><select name="category">
                                                                      @foreach($categories as $category)
                                                                           <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                      @endforeach
                                                               </select>
                                            </div>
         								</div>
         							</section>

         							<section>
         								<h2>Description</h2>
         								<div class="f-row">
         									<div class="full"><textarea name="description" placeholder="Recipe title"></textarea></div>
         								</div>
         							</section>

         							<section>
         								<h2>Ingredients</h2>
         								<div id="ingredients">
         								    <div class="f-row ingredient">
                                                <div class="large"><input type="text" name="ingredient_name[]" id="ingredient-name" placeholder="Ingredient" /></div>
                                                <div class="small"><input type="text" name="ingredient_amount[]" id="amount" placeholder="Amount" /></div>
                                                <div class="small"><input type="text" name="ingredient_unit[]" id="unit" placeholder="Unit" /></div>


                                                <button class="remove" type="button"  id="">-</button>
                                            </div>
         								</div>


         								<div class="f-row full">
         									<button class="add" type="button" id="add_more_ingredient">Add an ingredient</button>
         								</div>
         							</section>

         							<section>
                                        <h2>Nutrition</h2>
                                        <div id="nutrition" >
                                        <div class="f-row ingredient" >
                                            <div class="large"><input type="text" name="nutrition_name[]" id="nutrition-name" placeholder="Nutrition" /></div>
                                            <div class="small"><input type="text" name="nutrition_amount[]" placeholder="Amount" /></div>
                                            <div class="small"><input type="text" name="nutrition_unit[]" placeholder="Unit" /></div>


                                            <button class="remove" type="button" id="delete-nutrition">-</button>
                                        </div>
                                        </div>
                                        <div class="f-row full">
                                            <button class="add" id="add_more_nutrition" type="button">Add an Nutrition</button>
                                        </div>
                                    </section>

         							<section>
         								<h2>Instructions <span>(enter instructions, each step at a time)</span></h2>
         								<div id="processes">
         								<div class="f-row instruction">
         									<div class="full"><input type="text" name="process[]" id="process" placeholder="Instructions" /></div>
         									<button class="remove" type="button" id="delete-process">-</button>
         								</div>
         								</div>
         								<div class="f-row full">
         									<button class="add" id="add_more_process" type="button">Add a step</button>
         								</div>

         							</section>

         							<section>
         								<h2>Photo</h2>
         								<div class="f-row full">
         									<input type="file" name="image[]" id="image" />
         								</div>
         							</section>

         							<section>
         								<h2>Type</h2>
         								<div class="f-row full">
         									<input type="radio" id="r1" name="type"/>
         									<label for="r1">regular</label>
         								</div>
         								<div class="f-row full">
         									<input type="radio" id="r2" name="type"/>
         									<label for="r2">special</label>
         								</div>
         							</section>

         							<div class="f-row full">
         								<input type="submit" class="button" id="submitRecipe" value="Publish this recipe" />
         							</div>
         						</form>
         					</div>
         				</section>
         				<!--//content-->
         			</div>
         			<!--//row-->
         		</div>
         		<!--//wrap-->





     <script src="{{URL::to('/public/frontend/js/recipe.js')}}"></script>
@stop