@extends('admin.layouts.app')
@section('title', 'Add New Article')
@section('content')
	<form class="form-horizontal" method="post" action="/admin/articles/store">
		@csrf
	    <div class="panel-body">
	        <div class="form-group">
	            <label class="col-sm-1 control-label text-left" for="demo-hor-inputemail">Creator</label>
	            <div class="col-sm-5">

	            	<select id="demo-select2" class="demo_select2 form-control" name="user_id">

						@foreach($users as $user)
							<option value="{{ $user->id }}">{{ $user->name }}</option>
						@endforeach

	            	</select>

	                <!-- <input type="text" placeholder="Creator" id="demo-hor-inputemail" class="form-control" name="name" value=""> -->
	            </div>
	        </div>
	        <div class="form-group">
	            <label class="col-sm-1 control-label text-left" for="demo-hor-inputemail">Category</label>
	            <div class="col-sm-5">

	            	<select id="demo-select2" class="demo_select2 form-control" name="user_id">

						@foreach($categories as $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach

	            	</select>

	                <!-- <input type="text" placeholder="Creator" id="demo-hor-inputemail" class="form-control" name="name" value=""> -->
	            </div>
	        </div>
	    </div>
	    <div class="panel-footer text-right">
	        <button class="btn btn-success" type="submit">Add Data</button>
	    </div>
	</form>
@endsection
