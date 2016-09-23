@extends('admin.layout.layout')
@section('content')
<script src="{{URL::to('/public/admin/js/tinymce/tinymce.min.js')}}"></script>
<script>
  tinymce.init({
    selector: '#description'
  });
  </script>
<div class="page-header">
			<h1><span class="text-light-gray">Blog / </span>Change status</h1>
</div>
<div class="row">
<div class="col-sm-12">

								<!-- Tabs -->

        <form class="panel form-horizontal"  method="POST" action="{{URL::to('admin/blog/change_status')}}" enctype="multipart/form-data">


                         <input name="_token" value="{{csrf_token()}}" type="hidden"/>
                         <input name="id" value="{{ $blog->id }}" type="hidden"/>


                              <div class="panel-body">


                                    <div class="form-group">
                                         <label for="status" class="col-sm-2 control-label">Status</label>
                                         <div class="col-sm-10">
                                                <select class="form-control form-group-margin" name="status" id="status">
                                                       @foreach($status as $status)
                                                           @if($status==$blog->status)
                                                               <option value="{{ $status }}" selected>{{ $status }}</option>
                                                          @else
                                                               <option value="{{ $status }}">{{ $status }}</option>
                                                          @endif
                                                      @endforeach
                                                </select>
                                         </div>
                                    </div>



				</div>

		<div class="panel-footer text-right">
            <button class="btn btn-primary">Change</button>
        </div>
		</form>

</div>

</div>


<script src="{{URL::to('/public/admin/js/recipe.js')}}"></script>
@stop
