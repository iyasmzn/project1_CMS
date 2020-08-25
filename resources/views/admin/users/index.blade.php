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
@section('users-content')
    <div class="row pad-btm">
        <div class="col-sm-6 toolbar-left">
            <a href="/admin/users/create" id="demo-btn-addrow" class="btn btn-purple">Add New</a>
            <a href="/admin/users/create" class="btn btn-default"><i class="pli-add-user"></i></a>
        </div>
    </div>
    <!---------------------------------->

    <div class="row">
        @if(auth()->user()->role == 'author' || auth()->user()->role == 'editor')


            <div class="col-sm-4 col-md-3">
                <!-- Contact Widget -->
                <!---------------------------------->
                <div class="panel pos-rel">
                    <div class="widget-control text-right">
                        <div class="btn-group dropdown">
                            <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="psi-dot-vertical icon-lg"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right" style="">
                                <li><a href="/admin/users/edit/{{ auth()->user()->id }}"><i class="icon-lg icon-fw psi-pen-5"></i> Edit</a></li>
                                <li>
                                    <form action="/admin/users/delete/{{ auth()->user()->id }}" method="post">
                                       @csrf @method('DELETE')
                                       <button><i class="icon-lg icon-fw pli-recycling"></i> Remove</button>
                                    </form>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/admin/users/profile/{{ auth()->user()->id }}"><i class="icon-lg icon-fw pli-calendar-4"></i> View Details</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="pad-all">
                        <div class="media pad-ver">
                            <div class="media-left">
                                <a href="#" class="box-inline"><div alt="Profile Picture" class="img-md img-circle" style="background-image: url('/img/{{auth()->user()->photo}}');background-size: cover;background-position: center;background-color: none;"></div></a>
                            </div>
                            <div class="media-body pad-top">
                                <a href="#" class="box-inline">
                                    <span class="text-lg text-semibold text-main">{{ auth()->user()->name }}</span>
                                    <p class="text-sm">Freelance</p>
                                </a>
                            </div>
                        </div>
                        <p class="pad-btm bord-bt text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                        <div class="text-center pad-to">
                            <div class="btn-group">
                                <a href="/admin/users/edit/{{ auth()->user()->id }}" class="btn btn-sm btn-default"><i class="pli-pen-5 icon-lg icon-fw"></i> Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------------------->

            </div>

        @else
            @foreach($users as $user)
            <div class="col-sm-4 col-md-3">
                <!-- Contact Widget -->
                <!---------------------------------->
                <div class="panel pos-rel">
                    <div class="widget-control text-right">
                        <div class="btn-group dropdown">
                            <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="psi-dot-vertical icon-lg"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right" style="">
                                <li><a href="/admin/users/edit/{{ $user->id }}"><i class="icon-lg icon-fw psi-pen-5"></i> Edit</a></li>
                                <li>
                                    <form action="/admin/users/delete/{{ $user->id }}" method="post">
                                       @csrf @method('DELETE')
                                       <button><i class="icon-lg icon-fw pli-recycling"></i> Remove</button>
                                    </form>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/admin/users/profile/{{ $user->id }}"><i class="icon-lg icon-fw pli-calendar-4"></i> View Details</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="pad-all">
                        <div class="media pad-ver">
                            <div class="media-left">
                                <a href="#" class="box-inline"><div alt="Profile Picture" class="img-md img-circle" style="background-image: url('/img/{{ $user->photo }}');background-size: cover;background-position: center;background-color: none;"></div></a>
                            </div>
                            <div class="media-body pad-top">
                                <a href="#" class="box-inline">
                                    <span class="text-lg text-semibold text-main">{{ $user->name }}</span>
                                    <p class="text-sm">Freelance</p>
                                </a>
                            </div>
                        </div>
                        <p class="pad-btm bord-bt text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                        <div class="text-center pad-to">
                            <div class="btn-group">
                                <a href="/admin/users/edit/{{ $user->id }}" class="btn btn-sm btn-default"><i class="pli-pen-5 icon-lg icon-fw"></i> Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------------------->

            </div>
            @endforeach
        @endif
    </div>
@endsection
