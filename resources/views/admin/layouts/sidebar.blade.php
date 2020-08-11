<?php

$currentPath = ('/' . request()->path());

$dashboard = [
    'title' => 'Dashboard',
    'url'   => '/admin',
    'icon'  => 'pli-taj-mahal',
];
$categories = [
    'title'     => 'Categories',
    'url'       => '#',
    'icon'      => 'pli-pie-chart-3',
    'childrens' => [
        [
            'title' => 'List',
            'url'   => '/admin/categories',
            'icon'  => '',
        ],
        [
            'title' => 'Add',
            'url'   => '/admin/categories/create',
            'icon'  => '',
        ],
        [
            'title' => 'Edit',
            'url'   => '/admin/categories/edit',
            'icon'  => '',
        ],
    ],
];
$articles = [
    'title'     => 'Articles',
    'url'       => '#',
    'icon'      => 'pli-notepad',
    'childrens' => [
        [
            'title' => 'List',
            'url'   => '/admin/articles/',
            'icon'  => '',
        ],
        [
            'title' => 'Create New Article',
            'url'   => '/admin/articles/create',
            'icon'  => '',
        ],
        [
            'title' => 'Edit Artilcle',
            'url'   => '/admin/articles/edit',
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
                <li class="list-header">Submenus</li>

                <!--Menu list item-->
                <li class="active-sub">
                    <a href="#">
                        <i class="pli-mouse-3"></i>
                        <span class="menu-title">Active State</span>
                        <i class="arrow"></i>
                    </a>

                    <!--Submenu-->
                    <ul class="collapse in">
                        <li><a href="#">Link</a></li>
                        <li class="active-link"><a href="#">Active link</a></li>
                        <li><a href="#">Another link</a></li>
                        <li><a href="#">Some else here</a></li>
                        <li class="list-divider"></li>
                        <li><a href="#">Separate link</a></li>

                    </ul>
                </li>


                <li class="list-divider"></li>

                @foreach($menus as $index => $menu)

                    @if(isset($menu['childrens']))

                    @php
                        $isActive = false;

                        foreach($menu['childrens'] as $child ) {
                            if($child['url'] == $currentPath) {
                                $isActive = true;
                            }
                        }

                    @endphp

                    <li class="{{ $isActive ? 'active-sub' : '' }}">
                        <a href="{{ $menu['url'] }}">
                            <i class="{{ $menu['icon'] }}"></i>
                            <span class="menu-title">{{ $menu['title'] }}</span>
                            <i class="arrow"></i>
                        </a>

                        <!--Submenu-->
                        @foreach($menu['childrens'] as $child)
                        <ul class="collapse {{ $isActive ? 'in' : '' }}">

                            <li><a href="{{ $child['url'] }}">{{ $child['title'] }}</a></li>

                        </ul>
                        @endforeach
                    </li>

                    @else

                        <li class="">
                            <a href="{{ $menu['url'] }}">
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
