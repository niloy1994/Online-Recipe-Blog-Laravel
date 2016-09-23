@extends('admin.layout.layout')
@section('content')
<div class="page-header">
			<h1><span class="text-light-gray">Admin / </span>Edit</h1>
</div>
<div class="row">
			<div class="col-sm-12">
		<form class="panel form-horizontal"  method="POST" action="{{URL::to('/admin/admin/update')}}">
		<input name="_token" value="{{csrf_token()}}" type="hidden"/>
		 <input name="id" value="{{ $admin->id }}" type="hidden"/>
        					<div class="panel-heading">
        						<span class="panel-title">Edit Admin</span>
        					</div>
        					<div class="panel-body">
        						<div class="form-group">
        							<label for="name" class="col-sm-2 control-label">Name</label>
        							<div class="col-sm-10">
        								<input type="text" class="form-control" name="name"  value="{{$admin->name}}" id="name"  placeholder="Name">
        							</div>
        						</div>
        						<div class="form-group">
        							<label for="email" class="col-sm-2 control-label" >Email</label>
        							<div class="col-sm-10">
        								<input type="text" class="form-control" name="email"  value="{{$admin->email}}" id="email"  placeholder="Email">
        							</div>
        						</div> <!-- / .form-group -->
        						<div class="form-group">
        							<label for="password" class="col-sm-2 control-label">Password</label>
        							<div class="col-sm-10">
        								<input type="password" class="form-control" name="password"  value="{{$admin->password}}" id="password" placeholder="Password">

        							</div>
        						</div>

        						<div>
        						     <label for="status" class="col-sm-2 control-label">Status</label>
        						     <div class="col-sm-10">
        						          <select class="form-control form-group-margin" name="status" id="status">

                                      		@foreach($status as $status)
                                                            @if ($status==$admin->status)
                                                                <option value="{{ $status }}" selected>{{ $status }}</option>
                                                           @else
                                                                <option value="{{ $status }}">{{ $status }}</option>
                                                           @endif
                                                       @endforeach

                                          </select>
                                      </div>
                                </div>
                                <div class="col-sm-offset-2 col-sm-10">
                                      <button type="submit" class="btn btn-primary" id="btn_submit">Edit</button>
                                </div>

        						</div>

        				</form>
<!-- /5. $CONTROLS -->

			</div>
		</div>


<script src="{{URL::to('/public/admin/js/admin.js')}}"></script>

@stop
