@extends('admin.layouts.app')
@section('title', 'Edit Category')
@section('content')
	<form method="post" action="/admin/categories/update/{{ $category->id }}">
		@csrf
		<table>
			<tr>
				<td>Category Name</td>
				<td>:</td>
				<td>
					<input type="text" name="name" value="{{ $category->name }}">
				</td>
			</tr>
			<tr>
				<td colspan="3"><button>Edit</button></td>
			</tr>
		</table>
	</form>
@endsection
