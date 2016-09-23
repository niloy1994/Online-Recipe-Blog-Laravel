@extends('admin.layout.layout')
@section('content')
<div class="page-header">
			<h1><span class="text-light-gray">Admin / </span>Recipes</h1>
</div>

<div class="table-info">
			<div class="table-header">
			     <div class="table-caption">
				      Recipes
				      <a class="btn btn-primary pull-right" href="{{URL::to('/admin/recipe/add')}}">ADD</a>
			     </div>


			</div>
			<table class="table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Category</th>

							<th>Actions</th>

                        </tr>
					</thead>
					<tbody>
					    @foreach($recipes as $recipe)
						<tr>
							<td>{{$recipe->name}}</td>
							<td>{{$recipe->category->name}}</td>

							<td>
                                <a href="{{URL::to('/admin/recipe/edit')."/".$recipe->id}}">EDIT</a> / <a href="{{URL::to('/admin/recipe/delete')."/".$recipe->id}}">DELETE</a>
                            </td>
						</tr>
						@endforeach

					</tbody>
			</table>
			<div class="table-footer">
					{{ $recipes->links() }}
			</div>
</div>
@stop
