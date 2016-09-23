@extends('admin.layout.layout')
@section('content')
<div class="page-header">
			<h1><span class="text-light-gray">Admin / </span>Countries</h1>
</div>

<div class="table-info">
			<div class="table-header">
			     <div class="table-caption">
				      Countries
				      <a class="btn btn-primary pull-right" href="{{URL::to('/admin/country/add')}}">ADD</a>
			     </div>


			</div>
			<table class="table table-bordered">
					<thead>
						<tr>
							<th>Name</th>

							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					    @foreach($countries as $country)
						<tr>
							<td>{{$country->name}}</td>


							<td>
                                <a href="{{URL::to('/admin/country/edit')."/".$country->id}}">EDIT</a> / <a href="{{URL::to('/admin/country/delete')."/".$country->id}}">DELETE</a>
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
