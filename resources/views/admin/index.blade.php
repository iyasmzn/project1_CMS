@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')

	  <div class="row">
	  	<div class="col-md-1"></div>
	    <div class="col-md-3">
	        <div class="panel panel-success panel-colorful media middle pad-all">
	            <div class="media-left">
	                <div class="pad-hor">
	                    <i class="pli-user icon-3x"></i>
	                </div>
	            </div>
	            <div class="media-body">
	                <p class="text-2x mar-no text-semibold">{{ $users->count() }}</p>
	                <p class="mar-no">User</p>
	            </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="panel panel-warning panel-colorful media middle pad-all">
	            <div class="media-left">
	                <div class="pad-hor">
	                    <i class="pli-pie-chart-3 icon-3x"></i>
	                </div>
	            </div>
	            <div class="media-body">
	                <p class="text-2x mar-no text-semibold">{{ $categories->count() }}</p>
	                <p class="mar-no">Category</p>
	            </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="panel panel-info panel-colorful media middle pad-all">
	            <div class="media-left">
	                <div class="pad-hor">
	                    <i class="pli-notepad icon-3x"></i>
	                </div>
	            </div>
	            <div class="media-body">
	                <p class="text-2x mar-no text-semibold">{{ $articles->count() }}</p>
	                <p class="mar-no">Article</p>
	            </div>
	        </div>
	    </div>
	</div>

@endsection
