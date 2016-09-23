@extends('admin.layout.layout')
@section('content')
<div class="page-header">
			<h1><span class="text-light-gray">Admin / </span>Admins</h1>
</div>

<div class="table-info">
			<div class="table-header">
			     <div class="table-caption">
				      Admins
			     </div>
			</div>
			<table class="table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					    @foreach($admins as $admin)
						<tr>
							<td>{{$admin->name}}</td>
							<td>{{$admin->email}}</td>
							<td>{{$admin->password}}</td>
							<td>{{$admin->status}}</td>
							<td>
                                <a href="{{URL::to('/admin/admin/edit')."/".$admin->id}}">EDIT</a> / <a href="{{URL::to('/admin/admin/delete')."/".$admin->id}}">DELETE</a>
                            </td>
						</tr>
						@endforeach

					</tbody>
			</table>
			{{--<div class="table-footer">
					Footer
			</div>--}}
</div>
@stop
