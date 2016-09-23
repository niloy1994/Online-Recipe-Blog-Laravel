@extends('admin.layout.layout')
@section('content')
<div class="page-header">
			<h1><span class="text-light-gray">Admin / </span>Recipes</h1>
</div>

<div class="table-info">
			<div class="table-header">
			     <div class="table-caption">
				      Recipes

			     </div>


			</div>


			<form class="panel form-horizontal"  method="POST" action="{{URL::to('admin/recipe/recipe_of_the_day')}}">
			<input name="_token" value="{{csrf_token()}}" type="hidden"/>

			<div class="form-group">

                 <label for="recipe" class="col-sm-2 control-label">Recipe</label>
                 <div class="col-sm-10">
                        <select class="form-control form-group-margin" name="recipe">
                               @foreach($recipes as $recipe)
                               @if($recipe->recipe_of_the_day==1)
                                    <option value="{{ $recipe->id }}" selected>{{ $recipe->name }}</option>
                               @else
                                    <option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
                               @endif

                               @endforeach
                        </select>
                 </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-primary" id="btn_submit">Select</button>
            </div>
            </form>
</div>
@stop
