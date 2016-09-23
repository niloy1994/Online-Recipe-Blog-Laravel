@extends('admin.layout.layout')
@section('content')
<script src="{{URL::to('/public/admin/js/tinymce/tinymce.min.js')}}"></script>
<script>
  tinymce.init({
    selector: '#description'
  });
  </script>
<div class="page-header">
			<h1><span class="text-light-gray">Recipe / </span>Add</h1>
</div>
<div class="row">
<div class="col-sm-12">

								<!-- Tabs -->
		<ul class="nav nav-tabs bs-tabdrop-example">

				<li class="active"><a href="#bs-tabdrop-tab1" data-toggle="tab">Basic Info</a></li>
				<li class=""><a href="#bs-tabdrop-tab2" data-toggle="tab">Ingredients</a></li>
				<li class=""><a href="#bs-tabdrop-tab3" data-toggle="tab">Process</a></li>
				<li class=""><a href="#bs-tabdrop-tab4" data-toggle="tab">Nutrition</a></li>
				<li class=""><a href="#bs-tabdrop-tab5" data-toggle="tab">Media</a></li>

        </ul>
        <form class="panel form-horizontal"  method="POST" action="{{URL::to('admin/recipe/save')}}" enctype="multipart/form-data">
		<div class="tab-content tab-content-bordered">
				<div class="tab-pane active" id="bs-tabdrop-tab1">

                         <input name="_token" value="{{csrf_token()}}" type="hidden"/>

                              <div class="panel-heading">
                                   <span class="panel-title">Add Recipe</span>
                              </div>
                              @if($errors->first())
                                   <div class="alert alert-block alert-danger fade in">
                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                             <i class="fa fa-times"></i>
                                        </button>
                                        <strong>Opps!</strong> {{ $errors->first() }}
                                   </div>
                              @endif
                              <div class="panel-body">
                                    <div class="form-group">
                                         <label for="name" class="col-sm-2 control-label">Name</label>
                                         <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" placeholder="Name" id="name">
                                         </div>
                                    </div>
                                    <div class="form-group">
                                          <label for="category" class="col-sm-2 control-label">Category</label>
                                          <div class="col-sm-10">
                                                <select class="form-control form-group-margin" name="category">
                                                       @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                       @endforeach
                                                </select>
                                          </div>
                                    </div> <!-- / .form-group -->
                                    <div class="form-group">
                                         <label for="country" class="col-sm-2 control-label">Country</label>
                                         <div class="col-sm-10">
                                                <select class="form-control form-group-margin" name="country">
                                                       @foreach($countries as $country)
                                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                       @endforeach
                                                </select>
                                         </div>
                                    </div>
                                    <div class="form-group">
                                         <label for="type" class="col-sm-2 control-label">Type</label>
                                         <div class="col-sm-10">
                                                <select class="form-control form-group-margin" name="type" id="type">
                                                       <option>regular</option>
                                                       <option>special</option>


                                                </select>
                                         </div>
                                    </div>


                                    <div class="form-group">
                                            <label for="preparation_time" class="col-sm-2 control-label">Preparation Time</label>
                                            <div class="col-sm-10">
                                                	<input type="text" class="form-control" name="preparation_time" placeholder="preparation time" id="preparation_time">

                                            </div>
                                    </div>
                                    <div class="form-group">
                                             <label for="cooking_time" class="col-sm-2 control-label">Cooking Time</label>
                                             <div class="col-sm-10">
                                                	<input type="text" class="form-control" name="cooking_time" placeholder="cooking_time" id="cooking_time">

                                             </div>
                                    </div>

                                    <div>
                                         <label for="difficulty" class="col-sm-2 control-label">Difficulty</label>
                                         <div class="col-sm-10">
                                                <select class="form-control form-group-margin" name="difficulty" id="difficulty">
                                                       <option>easy</option>
                                                       <option>medium</option>
                                                       <option>hard</option>

                                                </select>
                                         </div>
                                    </div>
                                    <div class="form-group">
                                         <label for="serves" class="col-sm-2 control-label">Serves</label>
                                         <div class="col-sm-10">
                                              <input type="text" class="form-control" name="serves" placeholder="How many people can be served" id="serves">

                                         </div>
                                    </div>

                                     <div class="form-group">
                                            <label for="description" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-10">
                                                  <textarea name="description"  class="form-control" name="description" placeholder="Description" id="description"></textarea>
                                            </div>
                                    </div>




                              </div>



				</div>
				<div class="tab-pane row" id="bs-tabdrop-tab2">
				<div class="panel-heading">
                   <span class="panel-title">Add Recipe</span>
                </div>
                <div class="panel-body">
                        <div class="col-md-8">
				          <div class="form-inline col-md-12"  id="ingredients">
				               <div class="col-md-3 ingredient-name">
                                 <label class="sr-only">Ingredient Name</label>
                                 <input type="text" class="form-control " name="ingredient_name[]" id="ingredient-name" placeholder="Enter Name">
                                </div>
                                <div class="col-md-3 ingredient-amount">
                                     <label class="sr-only">Amount</label>
                                     <input type="text" class="form-control " name="ingredient_amount[]" id="amount" placeholder="Enter Amount">
                                </div>
                                <div class="col-md-3 ingredient-unit">
                                    <label class="sr-only">Unit</label>
                                    <input type="text" class="form-control " id="unit" name="ingredient_unit[]" placeholder="Enter Unit">
                                </div>
                                <div class="col-md-3 ingredient-delete">
                                    <label class="sr-only">Delete</label>
                                    <input type="button" class="form-control delete-ingredient" id="delete-ingredient" value="Delete">
                                </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                                <button  type="button" id="add_more_ingredient"class="btn btn-primary">Add more</button>
                        </div>
                        </div>

                </div>
				<div class="tab-pane row" id="bs-tabdrop-tab3">
				<div class="panel-heading">
                   <span class="panel-title">Add Recipe</span>
                </div>
                <div class="panel-body">
				    <div class="col-md-8">
				       <div class="form-inline col-md-12"  id="processes">
                           <div class="col-md-6 process">
                             <label class="sr-only">Process</label>
                              <textarea class="form-control" name="process[]" placeholder="Write Process" id="process"></textarea>
                            </div>
                            <div class="col-md-6 process-delete">
                               <label class="sr-only">Delete</label>
                               <input type="button" class="form-control delete-process" id="delete-process" value="Delete">
                            </div>
                       </div>
                   </div>
                   <div class="col-md-4">
                        <button  type="button" id="add_more_process" class="btn btn-primary">Add more</button>
                   </div>
               </div>
               </div>

               <div class="tab-pane row" id="bs-tabdrop-tab4">
               				<div class="panel-heading">
                                  <span class="panel-title">Add Recipe</span>
                               </div>
                               <div class="panel-body">
                                       <div class="col-md-8">
               				          <div class="form-inline col-md-12"  id="nutrition">
               				               <div class="col-md-3 nutrition-name">
                                                <label class="sr-only">Nutrition Name</label>
                                                <input type="text" class="form-control " name="nutrition_name[]" id="nutrition-name" placeholder="Enter Name">
                                               </div>
                                               <div class="col-md-3 nutrition-amount">
                                                    <label class="sr-only">Amount</label>
                                                    <input type="text" class="form-control " name="nutrition_amount[]" id="amount" placeholder="Enter Amount">
                                               </div>
                                               <div class="col-md-3 nutrition-unit">
                                                   <label class="sr-only">Unit</label>
                                                   <input type="text" class="form-control " id="unit" name="nutrition_unit[]" placeholder="Enter Unit">
                                               </div>
                                               <div class="col-md-3 nutrition-delete">
                                                   <label class="sr-only">Delete</label>
                                                   <input type="button" class="form-control delete-nutrition" id="delete-nutrition" value="Delete">
                                               </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                               <button  type="button"id="add_more_nutrition"class="btn btn-primary">Add more</button>
                                       </div>
                                       </div>

                               </div>
				<div class="tab-pane" id="bs-tabdrop-tab5">
				<div class="panel-heading">
                   <span class="panel-title">Add Recipe</span>
                </div>
                <div class="panel-body">

					<div class="form-group">
                        <label for="video" class="col-sm-2 control-label">Video</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="video" placeholder="video" id="video">

                        </div>
                    </div>

                    <div class="form-group">
                         <label for="image" class="col-sm-2 control-label">Image</label>
                         <div class="col-sm-10">
                                <input type="file" class="form-control" name="image[]" multiple  id="image">
                         </div>

                    </div>
				</div>
				</div>

		</div>
		<div class="panel-footer text-right">
            <button class="btn btn-primary" id="btn_submit">Add</button>
        </div>
		</form>

</div>

</div>


<script src="{{URL::to('/public/admin/js/recipe.js')}}"></script>
@stop
