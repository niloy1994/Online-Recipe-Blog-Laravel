@extends('admin.layout.layout')
@section('content')

<div class="page-header">
			<h1><span class="text-light-gray">Admin / </span>Category Edit</h1>
</div>
<div class="row">
			<div class="col-sm-12">
		<form class="panel form-horizontal"  method="POST" action="{{URL::to('admin/category/update')}}"  enctype="multipart/form-data">
		<input name="_token" value="{{csrf_token()}}" type="hidden"/>
		<input name="id" value="{{ $category->id }}" type="hidden"/>
        					<div class="panel-heading">
        						<span class="panel-title">Edit Category</span>
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
        								<input type="text" class="form-control" name="name" placeholder="Name" value="{{$category->name}}" id="name">
        							</div>
        						</div>
        						<div class="form-group">
        							<label for="description" class="col-sm-2 control-label">Description</label>
        							<div class="col-sm-10">
        								<textarea name="description"  class="form-control" name="description" placeholder="Description"  id="description">{{$category->description}}</textarea>
        							</div>
        						</div> <!-- / .form-group -->
        						<div class="form-group">
                                    <label for="icon" class="col-sm-2 control-label">Icon</label>
                                    <div class="col-sm-10">
                                         <input type="text" class="form-control" name="icon" placeholder="Icon" value="{{$category->icon}}" id="icon">
                                    </div>
                                </div>
        						<div class="form-group">
                                     <label for="image" class="col-sm-2 control-label">Image</label>
                                     <div class="col-sm-10">
                                            <img src="{{URL::to('/public/images/category/')."/".$category->image}}" width="300px" height="300px"/>
                                        	<input type="file" class="form-control" name="image"  id="image">
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
