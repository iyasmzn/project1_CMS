<?php

// $currentPath = ('/' . request()->path());

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
            'icon'  => '',
        ],
        [
            'title' => 'Add',
            'route' => 'admin.categories.create',
            'icon'  => '',
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
            'icon'  => '',
        ],
        [
            'title' => 'Create New Article',
            'route' => 'admin.articles.create',
            'icon'  => '',
        ],
    ],
];

$menus = [
    $dashboard, $categories, $articles,
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
                        <img class="img-circle img-md" src="img/profile-photos/1.png" alt="Profile Picture">
                    </div>
                    <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                        <span class="pull-right dropdown-toggle">
                            <i class="dropdown-caret"></i>
                        </span>
                        <p class="mnp-name">Aaron Chavez</p>
                        <span class="mnp-desc">aaron.cha@themeon.net</span>
                    </a>
                </div>
                <div id="profile-nav" class="collapse list-group bg-trans">
                    <a href="#" class="list-group-item">
                        <i class="pli-male icon-lg icon-fw"></i> View Profile
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="pli-gear icon-lg icon-fw"></i> Settings
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="pli-information icon-lg icon-fw"></i> Help
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="pli-unlock icon-lg icon-fw"></i> Logout
                    </a>
                </div>
            </div>


            <!--Shortcut buttons-->
            <!--================================-->
            @include('admin.layouts.mainnav-shortcut')
            <!--================================-->
            <!--End shortcut buttons-->


            <ul id="mainnav-menu" class="list-group">

                <!--Category name-->
                <li class="list-header">Link List</li>

                <!--Menu list item-->
                <li class="active-link">
                    <a href="#">
                        <i class="pli-quill-2"></i>
                        <span class="menu-title">Active state</span>
                    </a>
                </li>

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
                                <a href="{{ route($child['route']) }}">{{ $child['title'] }}</a>\
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
