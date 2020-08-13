@extends('admin.layouts.app')
@section('title', 'Add Category')
@section('content')
	<form class="form-horizontal" method="post" action="/admin/categories/store">
		@csrf
	    <div class="panel-body">
	        <div class="form-group">
	            <label class="col-sm-1 control-label" for="demo-hor-inputemail">Name</label>
	            <div class="col-sm-5">
	                <input type="text" placeholder="Category Name" id="demo-hor-inputemail" class="form-control" name="name">
	            </div>
	        </div>
	    </div>
	    <div class="panel-footer text-right">
	        <button class="btn btn-success" type="submit">Add Data</button>
	    </div>
	</form>
@endsection
