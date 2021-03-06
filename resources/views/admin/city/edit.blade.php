@extends('admin.layout.layout')
@section('content')

<div class="page-header">
			<h1><span class="text-light-gray">Admin / </span>City Edit</h1>
</div>
<div class="row">
		<div class="col-sm-12">
		<form class="panel form-horizontal"  method="POST" action="{{URL::to('admin/city/update')}}"  enctype="multipart/form-data">
		<input name="_token" value="{{csrf_token()}}" type="hidden"/>
		<input name="id" value="{{ $city->id }}" type="hidden"/>
        					<div class="panel-heading">
        						<span class="panel-title">Add City</span>
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
        								<input type="text" class="form-control" name="name" placeholder="Name" value="{{$city->name}}" id="name">
        							</div>
        						</div>


        					<div class="form-group">
                                 <label for="name" class="col-sm-2 control-label">Country</label>
                                        <div class="col-sm-10">
                                              <select class="form-control form-group-margin" name="country">
                                                   @foreach($countries as $country)
                                                        @if($city->country_id==$country->id)
                                                             <option value="{{ $country->id }}"selected>{{ $country->name }}</option>
                                                        @else
                                                             <option value="{{ $country->id }}">{{ $country->name }}</option>
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


<script src="{{URL::to('/public/admin/js/city.js')}}"></script>
@stop
