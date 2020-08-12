@extends('admin.layouts.app')
@section('title', 'Categories')
@section('style-css')
    <style type="text/css">
        .button, .form    {
            border: none;background-color: white;
            display: inline-block;
        }
    </style>
@endsection
@section('content')
    @php
        $no = 1;
    @endphp
    <a href="{{ route('admin.categories.create') }}"></a>
    <table class="col-md-12">
        <thead>
            <tr>
                <th class="col-md-2">No</th>
                <th class="col-md-7">Name</th>
                <th class="col-md-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $categories as $category )

                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="/admin/categories/edit/{{ $category->id }}"><i class="pli-recycling-2"></i></a>
                        <form method="post" class="form" action="/admin/categories/delete/{{ $category->id }}">
                            @csrf @method('DELETE')
                            <button class="button"><i class="pli-trash"></i></button>
                        </form>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
@endsection
