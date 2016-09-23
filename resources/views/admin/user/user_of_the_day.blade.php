@extends('admin.layout.layout')
@section('content')
<div class="page-header">
			<h1><span class="text-light-gray">Admin / </span>Recipes</h1>
</div>

<div class="table-info">
			<div class="table-header">
			     <div class="table-caption">
				      Recipes

			     </div>


			</div>


			<form class="panel form-horizontal"  method="POST" action="{{URL::to('admin/user/user_of_the_day')}}">
			<input name="_token" value="{{csrf_token()}}" type="hidden"/>

			<div class="form-group">

                 <label for="recipe" class="col-sm-2 control-label">User</label>
                 <div class="col-sm-10">
                        <select class="form-control form-group-margin" name="user">
                               @foreach($users as $user)
                               @if($user->user_of_the_day==1)
                                    <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                               @else
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                               @endif

                               @endforeach
                        </select>
                 </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-primary" id="btn_submit">Select</button>
            </div>
            </form>
</div>
@stop
