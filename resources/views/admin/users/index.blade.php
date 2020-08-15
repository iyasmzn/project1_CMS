@extends('admin.layouts.app')
@section('title', 'users')
@section('style-css')
    <style type="text/css">
        .button, .form    {
            border: none;background-color: white;
            display: inline-block;
        }
        [class*='action-hover'] {
            transition: all 0.3s;
            font-size: 20px;
        }
        [class*='action-hover']:hover {
            font-weight: bold;
        }
        .action-hover-delete:hover {
            color: red;
        }
        .action-hover-edit:hover {
            color: aqua;
        }
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting:after {
            content: '';
        }
    </style>
@endsection
@section('content')
    @php
        $no = 1;
    @endphp
    <a href="{{ route('admin.users.create') }}">Add Data</a>

    <div class="panel-body">
        <table id="data-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="col-sm-1">No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th class="min-tablet col-sm-1">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $users as $user )

                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="/admin/users/edit/{{ $user->id }}"><i class="pli-recycling-2 action-hover-edit"></i></a>
                        <form method="post" class="form" action="/admin/users/delete/{{ $user->id }}">
                            @csrf @method('DELETE')
                            <button class="button"><i class="pli-trash action-hover-delete"></i></button>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
@endsection
