@extends('admin.layouts.app')
@section('title', 'Add User')
@section('content')
	<form class="form-horizontal" method="post" action="/admin/users/update/{{ $user->id }}">
		@csrf @method('PUT')
	    <div class="panel-body">
	        <div class="form-group">
	            <label class="col-sm-1 control-label" for="demo-hor-inputename">Name</label>
	            <div class="col-sm-5">
	                <input type="text" placeholder="User Name" id="demo-hor-inputename" class="form-control" name="name" value="{{ $user->name }}">
	            </div>
	        </div>
	        <div class="form-group">
	            <label class="col-sm-1 control-label" for="demo-hor-inputemail">Email</label>
	            <div class="col-sm-5">
	                <input type="email" placeholder="User Email" id="demo-hor-inputemail" class="form-control" name="email" value="{{ $user->email }}">
	            </div>
	        </div>
	        <div class="form-group">
	            <label class="col-sm-1 control-label" for="demo-hor-inputpassword">Password</label>
	            <div class="col-sm-5">
	                <input type="password" placeholder="User Password" id="demo-hor-inputpassword" class="form-control" name="password">
	            </div>
	        </div>
	    </div>
	    <div class="panel-footer text-right">
	        <button class="btn btn-warning" type="submit">Edit Data</button>
	    </div>
	</form>
@endsection
