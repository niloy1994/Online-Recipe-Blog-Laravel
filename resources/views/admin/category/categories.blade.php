@extends('admin.layout.layout')
@section('content')
<div class="page-header">
			<h1><span class="text-light-gray">Admin / </span>Categories</h1>
</div>

<div class="table-info">
			<div class="table-header">
			     <div class="table-caption">
				      Categories
			     </div>
			</div>
			<table class="table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Icon</th>
							<th>Image</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					    @foreach($categories as $category)
						<tr>
							<td>{{$category->name}}</td>
							<td>{{$category->description}}</td>
							<td>{{$category->icon}}</td>
							{{--<td>{{$category->image}}</td>--}}
							<td><img src="{{URL::to('/public/images/category/')."/".$category->image}}" width="100px" height="100px"/> </td>
							<td>
                                <a href="{{URL::to('/admin/category/edit')."/".$category->id}}">EDIT</a> / <a href="{{URL::to('/admin/category/delete')."/".$category->id}}">DELETE</a>
                            </td>
						</tr>
						@endforeach

					</tbody>
			</table>
			<{{--div class="table-footer">
					Footer
			</div>--}}
</div>
@stop
