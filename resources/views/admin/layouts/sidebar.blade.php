<?php

// $currentPath = ('/' . request()->path());
$user_photo = Auth::user()->photo;

$dashboard = [
    'title' => 'Dashboard',
    'route' => 'admin.dashboard',
    'icon'  => 'pli-taj-mahal',
];
$categories = [
    'title'     => 'Categories',
    'route'     => 'admin.categories',
    'icon'      => 'pli-pie-chart-3',
    'childrens' => [
        [
            'title' => 'List',
            'route' => 'admin.categories.index',
            'icon'  => 'pli-numbering-list',
        ],
        [
            'title' => 'Add',
            'route' => 'admin.categories.create',
            'icon'  => 'pli-add',
        ],
    ],
];
$users = [
    'title'     => 'Users',
    'route'     => 'admin.users',
    'icon'      => 'pli-user',
    'childrens' => [
        [
            'title' => 'List',
            'route' => 'admin.users.index',
            'icon'  => 'pli-id-3',
        ],
        [
            'title' => 'Add',
            'route' => 'admin.users.create',
            'icon'  => 'pli-add-user',
        ],
    ],
];
$articles = [
    'title'     => 'Articles',
    'route'     => 'admin.articles',
    'icon'      => 'pli-notepad',
    'childrens' => [
        [
            'title' => 'List',
            'route' => 'admin.articles.index',
            'icon'  => 'pli-newspaper',
        ],
        [
            'title' => 'Create Article',
            'route' => 'admin.articles.create',
            'icon'  => 'pli-file-add',
        ],
    ],
];

$menus = [
    $dashboard, $users, $categories, $articles,
];

?>


<div id="mainnav-menu-wrap">
    <div class="nano">
        <div class="nano-content">

            <!--Profile Widget-->
            <!--================================-->
            <div id="mainnav-profile" class="mainnav-profile">
                <div class="profile-wrap text-center">
                    <div class="pad-btm">
                        <!-- <img class="img-circle img-md" src="/img/{{ Auth::user()->photo }}" alt="Profile Picture" style="width: auto;"> -->
                        <a href="#" class="box-inline"><div alt="Profile Picture" class="img-md img-circle" style="background-image: url('{{ asset("/img/$user_photo") }}');background-size: cover;background-position: center;background-color: none;"></div></a>
                    </div>
                    <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                        <span class="pull-right dropdown-toggle">
                            <i class="dropdown-caret"></i>
                        </span>
                        <p class="mnp-name">{{ auth()->user()->name }}</p>
                        <span class="mnp-desc">{{ Auth::user()->email }}</span>
                    </a>
                </div>
                <div id="profile-nav" class="collapse list-group bg-trans">
                    <a href="/admin/users/edit/{{ Auth::user()->id }}" class="list-group-item">
                        <i class="pli-gear icon-lg icon-fw"></i> Settings
                    </a>

                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button>
                            <i class="pli-unlock icon-lg icon-fw"></i> Logout
                        </button>
                    </form>

                    <a href="" class="list-group-item">
                    </a>
                </div>
            </div>


            <!--Shortcut buttons-->
            <!--================================-->
            @include('admin.layouts.mainnav-shortcut')
            <!--================================-->
            <!--End shortcut buttons-->


            <ul id="mainnav-menu" class="list-group">

                <li class="list-header">CMS</li>

                <li class="list-divider"></li>

                <!--Category name-->

                @foreach($menus as $index => $menu)

                    @if(isset($menu['childrens']))


                    <li class="{{ request()->routeIs("$menu[route]*") ? 'active-sub' : '' }}">
                        <a>
                            <i class="{{ $menu['icon'] }}"></i>
                            <span class="menu-title">{{ $menu['title'] }}</span>
                            <i class="arrow"></i>
                        </a>

                        <!--Submenu-->
                        @foreach($menu['childrens'] as $child)
                        <ul class="collapse {{ request()->routeIs("$menu[route]*") ? 'in' : '' }}">

                            <li class="{{ request()->routeIs("$child[route]") ? 'active-link' : '' }}">
                                <a href="{{ route($child['route']) }}"><i class="{{ $child['icon'] }}"></i> {{ $child['title'] }}</a>
                            </li>

                        </ul>
                        @endforeach
                    </li>

                    @else

                        <li class="{{ Request::routeIs("$menu[route]") ? 'active-link' : '' }}">
                            <a href="{{ route($menu['route']) }}">
                                <i class="{{ $menu['icon'] }}"></i>
                                <span class="menu-title">{{ $menu['title'] }}</span>
                            </a>
                        </li>

                    @endif
                @endforeach

            </ul>


            <!--Widget-->
            <!--================================-->
            @include('admin.layouts.mainnav-widget')
            <!--================================-->
            <!--End widget-->

        </div>
    </div>
</div>
