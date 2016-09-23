@extends('admin.layout.layout')
@section('content')
{{--<script src="{{URL::to('/public/admin/js/tinymce/tinymce.min.js')}}"></script>
<script>
  tinymce.init({
    selector: '#description'
  });
  </script>--}}
<div class="page-header">
			<h1><span class="text-light-gray">Blog / </span>Full blog</h1>
</div>
<div class="row">
<div class="col-sm-12">

								<!-- Tabs -->

        <form class="panel form-horizontal"  method="POST" action="{{URL::to('admin/recipe/update')}}" enctype="multipart/form-data">

                         <input name="_token" value="{{csrf_token()}}" type="hidden"/>
                         <input name="id" value="{{ $blog->id }}" type="hidden"/>


                              <div class="panel-body">
                                    <div class="form-group">
                                         <label for="name" class="col-sm-2 control-label">itle</label>
                                         <div class="col-sm-10">
                                                <input type="text" class="form-control" name="title" placeholder="title" value="{{$blog->title}}" id="title">
                                         </div>
                                    </div>


                                     <div class="form-group">
                                            <label for="description" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-10">
                                                  <textarea name="description"  class="form-control" name="description" placeholder="Description" id="description">{{$blog->description}}</textarea>
                                            </div>
                                    </div>

                                    <div class="form-group">
                                         <label for="status" class="col-sm-2 control-label">Status</label>
                                         <div class="col-sm-10">
                                                <select class="form-control form-group-margin" name="status" id="status">
                                                       @foreach($status as $status)
                                                           @if($status==$blog->status)
                                                               <option value="{{ $status }}" selected>{{ $status }}</option>

                                                          @endif
                                                      @endforeach
                                                </select>
                                         </div>
                                    </div>










                    <div class="form-group">
                         <label for="image" class="col-sm-2 control-label">Image</label>
                         <div class="col-sm-10">
                               @foreach($blog_image as $blog_img)
                                <img src="{{URL::to('/public/images/blog/')."/".$blog_img->image}}" width="300px" height="300px"/>
                               @endforeach

                         </div>

                    </div>
				</div>



		</form>

</div>

</div>


<script src="{{URL::to('/public/admin/js/recipe.js')}}"></script>
@stop
