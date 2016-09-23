@extends('admin.layout.layout')
@section('content')
<div class="page-header">
			<h1><span class="text-light-gray">Admin / </span>Cities</h1>
</div>

<div class="table-info">
			<div class="table-header">
			     <div class="table-caption">
				      Cities
				      <a class="btn btn-primary pull-right" href="{{URL::to('/admin/city/add')}}">ADD</a>
			     </div>


			</div>
			<table class="table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Country</th>
                            <th>Action</th>
						</tr>
					</thead>
					<tbody>
					    @foreach($cities as $city)
						<tr>
							<td>{{$city->name}}</td>
							<td>{{$city->country->name}}</td>


						<td>
                            <a href="{{URL::to('/admin/city/edit')."/".$city->id}}">EDIT</a> / <a href="{{URL::to('/admin/city/delete')."/".$city->id}}">DELETE</a>
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
