@extends('admin.layout.layout')
@section('content')
<script src="{{URL::to('/public/admin/js/tinymce/tinymce.min.js')}}"></script>
<script>
  tinymce.init({
    selector: '#description'
  });
  </script>
<div class="page-header">
			<h1><span class="text-light-gray">Recipe / </span>Edit</h1>
</div>
<div class="row">
<div class="col-sm-12">

								<!-- Tabs -->
		<ul class="nav nav-tabs bs-tabdrop-example">

				<li class="active"><a href="#bs-tabdrop-tab1" data-toggle="tab">Basic Info</a></li>
				<li class=""><a href="#bs-tabdrop-tab2" data-toggle="tab">Ingredients</a></li>
				<li class=""><a href="#bs-tabdrop-tab3" data-toggle="tab">Process</a></li>
				<li class=""><a href="#bs-tabdrop-tab4" data-toggle="tab">Media</a></li>

        </ul>
        <form class="panel form-horizontal"  method="POST" action="{{URL::to('admin/recipe/update')}}" enctype="multipart/form-data">
		<div class="tab-content tab-content-bordered">
				<div class="tab-pane active" id="bs-tabdrop-tab1">

                         <input name="_token" value="{{csrf_token()}}" type="hidden"/>
                         <input name="id" value="{{ $recipe->id }}" type="hidden"/>

                              <div class="panel-heading">
                                   <span class="panel-title">Edit Recipe</span>
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
                                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{$recipe->name}}" id="name">
                                         </div>
                                    </div>
                                    <div class="form-group">
                                          <label for="category" class="col-sm-2 control-label">Category</label>
                                          <div class="col-sm-10">
                                                <select class="form-control form-group-margin" name="category">
                                                       @foreach($categories as $category)
                                                            @if($recipe->category_id==$category->id)
                                                                 <option value="{{ $category->id }}"selected>{{ $category->name }}</option>
                                                            @else
                                                                 <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                            @endif
                                                       @endforeach
                                                </select>
                                          </div>
                                    </div> <!-- / .form-group -->
                                    <div class="form-group">
                                         <label for="country" class="col-sm-2 control-label">Country</label>
                                         <div class="col-sm-10">
                                                <select class="form-control form-group-margin" name="country">
                                                       @foreach($countries as $country)
                                                            @if($recipe->country_id==$country->id)
                                                                 <option value="{{ $country->id }}"selected>{{ $country->name }}</option>
                                                            @else
                                                                 <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                            @endif
                                                       @endforeach
                                                </select>
                                         </div>
                                    </div>
                                    <div class="form-group">
                                         <label for="type" class="col-sm-2 control-label">Type</label>
                                         <div class="col-sm-10">
                                                <select class="form-control form-group-margin" name="type" id="type">
                                                       @foreach($type as $type)
                                                           @if($type==$recipe->type)
                                                               <option value="{{ $type }}" selected>{{ $type }}</option>
                                                          @else
                                                               <option value="{{ $type }}">{{ $type }}</option>
                                                          @endif
                                                      @endforeach
                                                </select>
                                         </div>
                                    </div>


                                    <div class="form-group">
                                            <label for="preparation_time" class="col-sm-2 control-label">Preparation Time</label>
                                            <div class="col-sm-10">
                                                	<input type="text" class="form-control" name="preparation_time" placeholder="preparation time" value="{{$recipe->preparation_time}}" id="preparation_time">

                                            </div>
                                    </div>
                                    <div class="form-group">
                                             <label for="cooking_time" class="col-sm-2 control-label">Cooking Time</label>
                                             <div class="col-sm-10">
                                                	<input type="text" class="form-control" name="cooking_time" placeholder="cooking_time" value="{{$recipe->cooking_time}}" id="cooking_time">

                                             </div>
                                    </div>

                                    <div>
                                         <label for="difficulty" class="col-sm-2 control-label">Difficulty</label>
                                         <div class="col-sm-10">
                                                <select class="form-control form-group-margin" name="difficulty" id="difficulty">
                                                       @foreach($difficulty as $difficulty)
                                                          @if($difficulty==$recipe->difficulty)
                                                              <option value="{{ $difficulty }}" selected>{{ $difficulty }}</option>
                                                         @else
                                                              <option value="{{ $difficulty }}">{{ $difficulty }}</option>
                                                         @endif
                                                     @endforeach

                                                </select>
                                         </div>
                                    </div>
                                    <div class="form-group">
                                         <label for="serves" class="col-sm-2 control-label">Serves</label>
                                         <div class="col-sm-10">
                                              <input type="text" class="form-control" name="serves" placeholder="How many people can be served" value="{{$recipe->serves}}"id="serves">

                                         </div>
                                    </div>

                                     <div class="form-group">
                                            <label for="description" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-10">
                                                  <textarea name="description"  class="form-control" name="description" placeholder="Description" id="description">{{$recipe->description}}</textarea>
                                            </div>
                                    </div>




                              </div>



				</div>
				<div class="tab-pane row" id="bs-tabdrop-tab2">
				<div class="panel-heading">
                   <span class="panel-title">Edit Recipe</span>
                </div>
                <div class="panel-body">
                        <div class="col-md-8">
				          <div class="form-inline col-md-12"  id="ingredients">
				               @foreach($ingredients as $ingredient)
				               <div class="col-md-3 ingredient-name">
                               <label class="sr-only">Ingredient Name</label>
                                <input type="text" class="form-control " name="ingredient_name[]" id="ingredient_name" placeholder="Enter Name" value="{{$ingredient->name}}">
                               </div>
                               <div class="col-md-3 ingredient-amount">
                                    <label class="sr-only">Amount</label>
                                    <input type="text" class="form-control " name="ingredient_amount[]" id="amount" placeholder="Enter Amount" value="{{$ingredient->amount}}">
                               </div>
                               <div class="col-md-3 ingredient-unit">
                                   <label class="sr-only">Unit</label>
                                   <input type="text" class="form-control " id="unit" name="ingredient_unit[]" placeholder="Enter Unit" value="{{$ingredient->unit}}">
                               </div>
                               <div class="col-md-3 ingredient-delete">
                                   <label class="sr-only">Delete</label>
                                   <input type="button" class="form-control delete-ingredient" id="delete-ingredient" value="Delete">
                               </div>
				               @endforeach

                           </div>
                        </div>
                        <div class="col-md-4">
                                <button  type="button"id="add_more_ingredient"class="btn btn-primary">Add more</button>
                        </div>
                        </div>

                </div>
				<div class="tab-pane row" id="bs-tabdrop-tab3">
				<div class="panel-heading">
                   <span class="panel-title">Edit Recipe</span>
                </div>
                <div class="panel-body">
				    <div class="col-md-8">
				       <div class="form-inline col-md-12"  id="processes">
				       @foreach($procedures as $process)

                           <div class="col-md-6 process">
                             <label class="sr-only">Process</label>
                              <textarea class="form-control" name="process[]" placeholder="Write Process" id="process">{{$process->process}}</textarea>
                            </div>
                            <div class="col-md-6 process-delete">
                               <label class="sr-only">Delete</label>
                               <input type="button" class="form-control delete-process" id="delete-ingredient" value="Delete">
                            </div><br/>


                       @endforeach
                       </div>
                   </div>
                   <div class="col-md-4">
                        <button  type="button"id="add_more_process"class="btn btn-primary">Add more</button>
                   </div>
               </div>
               </div>
				<div class="tab-pane" id="bs-tabdrop-tab4">
				<div class="panel-heading">
                   <span class="panel-title">Edit Recipe</span>
                </div>
                <div class="panel-body">

					<div class="form-group">
                        <label for="video" class="col-sm-2 control-label">Video</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="video" placeholder="video" value="{{$recipe->video}}" id="video">

                        </div>
                    </div>

                    <div class="form-group">
                         <label for="image" class="col-sm-2 control-label">Image</label>
                         <div class="col-sm-10">
                               @foreach($recipe_image as $rec_img)
                                <img src="{{URL::to('/public/images/recipe/')."/".$rec_img->image}}" width="300px" height="300px"/>
                               @endforeach
                                <input type="file" class="form-control" name="image"  id="image">
                         </div>

                    </div>
				</div>
				</div>

		</div>
		<div class="panel-footer text-right">
            <button class="btn btn-primary">Edit</button>
        </div>
		</form>

</div>

</div>


<script src="{{URL::to('/public/admin/js/recipe.js')}}"></script>
@stop
