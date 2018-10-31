<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>AdminPro | Management System</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        
        {{-- Navbar --}}
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom" style="padding: 0px;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{asset('/')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{asset('students')}}" class="nav-link">Students</a>
                </li>
            </ul>
            
            {{-- SEARCH FORM --}}
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            
            {{-- Right navbar links --}}
            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <a href="{{url('www/github/taqivaheed')}}" class="nav-link">
                        <i class="fab fa-github c-indigo fa-lg"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="www/twitter.com/taqi.vaheed" class="nav-link">
                        <i class="fab fa-twitter c-blue fa-lg"></i>
                    </a>
                </li>
                
                {{-- Messages Dropdown Menu --}}
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            {{-- Message Start --}}
                            <div class="media">
                                <img src="{{asset('img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            {{-- Message End --}}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li> {{-- Messages Dropdown Menu --}}
                
                {{-- Notifications Dropdown Menu --}}
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fa fa-th-large"></i></a>
                </li>
            </ul>
        </nav>
        {{-- Navbar End --}}
        
        {{-- Main Sidebar Container --}}
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            {{-- Brand Logo --}}
            <a href="{{asset('/home')}}" class="brand-link">
                <img src="{{asset('img/AdminLTELogo.png')}}" alt="AdminPro Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
                <span class="brand-text font-weight-light">AdminPro</span>
            </a>
            
            {{-- Sidebar --}}
            <div class="sidebar" style="padding: 0px">
                {{-- Sidebar user panel (optional) --}}
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{Auth::user()->name}}</a>
                    </div>
                </div>
                
                {{-- Sidebar Menu --}}
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        {{-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font
                            library --}}
                            <li class="nav-item">
                                <router-link to="/dashboard" class="nav-link">
                                    <i class="nav-icon icon-meter c-blue"></i>
                                    <p> Dashboard <span class="right badge badge-info badge-pill">5</span> </p>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/profile" class="nav-link">
                                    <i class="nav-icon fa fa-user c-green"></i>
                                    <p> Profile <span class="right badge badge-info badge-pill">5</span> </p>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="nav-icon fa fa-power-off c-red"></i>
                                <p>{{ __('Logout') }}</p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cog c-teal"></i>
                                <p> Management <i class="right fa fa-angle-left"></i> </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <router-link to="/users" class="nav-link">
                                        <i class="nav-icon fa fa-users c-orange"></i>
                                        <p> Users Management <span class="right badge badge-info badge-pill">5</span> </p>
                                    </router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link to="/students" class="nav-link">
                                        <i class="nav-icon fa fa-users c-orange"></i>
                                        <p> Students Management <span class="right badge badge-info badge-pill">5</span> </p>
                                    </router-link>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle nav-icon"></i>
                                        <p>Temporary Page</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                {{-- sidebar-menu end --}}
            </div>
            {{-- sidebar end --}}
        </aside>
        
        {{-- Content Wrapper. Contains page content --}}
        <div class="content-wrapper">
            {{-- Content Header (Page header) --}}
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">{{$title}}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div> {{-- col --}}
                    </div> {{-- row --}}
                </div> {{-- container-fluid --}}
            </div> {{-- content-header --}}
            
            {{-- ************************************** --}}
            {{-- Main content --}}
            <div class="content">
                <div class="container-fluid">
                    <router-view></router-view>
                </div>
            </div> {{-- Main content --}}
            {{-- ************************************** --}}
        </div> {{-- content-wrapper --}}
        
        {{-- Control Sidebar --}}
        <aside class="control-sidebar control-sidebar-dark">
            {{-- Control sidebar content goes here --}}
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside> {{-- control-sidebar --}}
        
        {{-- Main Footer --}}
        <footer class="main-footer">
            {{-- To the right --}}
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            {{-- Default to the left --}}
            <strong>Copyright &copy; 2014-2018 <a href="{{asset('/')}}">AdminPro.io</a>.</strong> All rights
            reserved.
        </footer>
    </div> {{-- wrapper end --}}
    
    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/customjs.js') }}"></script>
    
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
            
            case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
            
            case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
            
            case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
        }
        @endif
    </script>
</body>
</html>
