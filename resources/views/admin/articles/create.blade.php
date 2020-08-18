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
							@if($user->id == Auth::user()->id)
								<option value="{{ $user->id }}" selected>{{ $user->name }}</option>

							@else

								<option value="{{ $user->id }}">{{ $user->name }}</option>

							@endif
						@endforeach

	            	</select>

	            </div>
	        </div>
	        <div class="form-group">
	            <label class="col-sm-1 control-label text-left" for="demo-hor-inputemail">Category</label>
	            <div class="col-sm-5">

	            	<select id="demo-select2" class="demo_select2 form-control" name="category_id">

						@foreach($categories as $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach

	            	</select>

	            </div>
	        </div>
	        <div class="form-group">
	            <label class="col-sm-1 control-label text-left" for="hor-inputemail">Title</label>
	            <div class="col-sm-5">

	                <input type="text" placeholder="Title" id="hor-inputemail" class="form-control" name="title">

	            </div>
	        </div>
	        <div class="form-group">
	            <label class="col-sm-1 control-label text-left" for="demo-hor-inputemail">Content</label>
	            <div class="col-sm-11">

	            	<!--Summernote-->
	            	<!--===================================================-->
	            	<textarea id="summernote" name="content">
	            	    <h4><span style="color: rgb(0, 0, 0); font-family: inherit; line-height: 1.1;"></span><br></h4><h4><font color="#9c9c94"></font></h4>
	            	</textarea>
	            	<!--===================================================-->
	            	<!-- End Summernote -->

	            </div>
	        </div>
	    	<div class="form-group">
	    	    <label class="col-sm-1 control-label text-left">Image</label>
	    	    <div class="col-sm-5">
	    	       <input class="pull-left btn btn-primary btn-file" type="file" name="photo_file" accept="image/*">
	    	    </div>
	    	</div>
	        <div class="form-group">
	            <label class="col-sm-1 control-label text-left" for="hor-slug">Slug</label>
	            <div class="col-sm-5">

	                <input type="text" placeholder="" id="hor-slug" class="form-control" name="slug">

	            </div>
	        </div>
	    </div>
	    <div class="panel-footer text-right">
	        <button class="btn btn-success" type="submit">Submit Article</button>
	    </div>
	</form>
@endsection
