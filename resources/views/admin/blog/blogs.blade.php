@extends('admin.layout.layout')
@section('content')
<div class="page-header">
			<h1><span class="text-light-gray">Admin / </span>Blogs</h1>
</div>

<div class="table-info">
			<div class="table-header">
			     <div class="table-caption">
				      Blogs

			     </div>


			</div>
			<table class="table table-bordered">
					<thead>
						<tr>
							<th>Title</th>
							<th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Actions</th>

                        </tr>
					</thead>
					<tbody>
					    @foreach($blogs as $blog)
						<tr>
							<td>{{$blog->title}}</td>
							<td>{{$blog->description}}</td>
							<td><img src="{{URL::to('/public/images/blog/')."/".$blog->image}}" width="100px" height="100px" alt="" /></td>
							<td>{{$blog->status}}</td>
							<td><a href="{{URL::to('/admin/blog')."/".$blog->id}}">View Full Blog</a></td>
							<td><a href="{{URL::to('/admin/blogs')."/".$blog->id}}">Change Status</a></td>


						</tr>
						@endforeach

					</tbody>
			</table>
			{{--<div class="table-footer">
					{{ $blogs->links() }}
			</div>--}}
</div>
@stop
