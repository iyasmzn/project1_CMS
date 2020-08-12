@extends('admin.layouts.app')
@section('title', 'Add Category')
@section('content')
	<form method="post" action="/admin/categories/store">
		@csrf
		<table>
			<tr>
				<td>Category Name</td>
				<td>:</td>
				<td>
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td colspan="3"><button>Add</button></td>
			</tr>
		</table>
	</form>
@endsection
