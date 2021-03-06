<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Fonts --}}
    {{--
    <link rel="dns-prefetch" href="https://fonts.gstatic.com"> --}}
    {{--
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div id="app" class="wrapper">

        {{-- Sidebar --}}
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3>
                <strong>BS</strong>
            </div>

            <ul class="components">
                <li>
                    <router-link to="/profile" title="Profile"><img src="{{ asset('img/user1-128x128.jpg') }}" class="img-circle" style="width: 30px;"
                            alt="Profile Picture"></router-link>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home red"></i>
                    </a>
                    <ul class="collapse" id="homeSubmenu">
                        <li>
                            <router-link to="/dashboard" title="Dashboard"> <i class="fas fa-tachometer-alt blue"></i></router-link>
                        </li>
                        <li>
                            <router-link to="/developer" title="Developer"> <i class="fas fa-cogs green"></i></router-link>
                        </li>
                        <li>
                            <router-link to="/users" title="Users"> <i class="fas fa-users cyan"></i></router-link>
                        </li>
                        <li>
                            <router-link to="/employees" title="Employees"> <i class="fas fa-user-cog orange"></i></router-link>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-address-card green"></i>
                    </a>
                    <ul class="collapse" id="pageSubmenu">
                        <li>
                            <router-link to="/inbox" title="Inbox"> <i class="fa fa-at red"></i></router-link>
                        </li>
                        <li>
                            <router-link to="/chats" title="Chats"> <i class="fa fa-comment green"></i></router-link>
                        </li>
                        <li>
                            <router-link to="/comments" title="Comments"> <i class="fa fa-comments pink"></i></router-link>
                        </li>
                    </ul>
                </li>
                <li>
                    <router-link to="/setting" title="Settings"> <i class="fa fa-cog fa-spin yellow"></i></router-link>
                </li>
                <li>
                    <router-link to="/faq" title="FAQ"> <i class="fa fa-question-circle teal"></i></router-link>
                </li>
                <li>
                    <router-link to="/contact" title="Contact"> <i class="fa fa-paper-plane facebook"></i></router-link>
                </li>
                <li>
                    <router-link to="/info" title="Info"> <i class="fa fa-info yellow"></i></router-link>
                </li>
            </ul>
        </nav>

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0 40px;">
                <button type="button" id="sidebarCollapse" class="navbar-toggler">
                    <i class="fa fa-grip-horizontal orange"></i>
                </button>
                {{-- <button class="btn d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-align-justify"></i>
                </button> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="fa fa-bars blue"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        {{-- Left Side Of Navbar --}}
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">

                            </li>
                        </ul>

                        {{-- Right Side Of Navbar --}}
                        <ul class="navbar-nav ml-auto">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                            @else
                            <li class="nav-item dropdown" style="margin-right: 40px;">
                                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> --}}

                                <a href="#" id="navbarDropdown" class="nav-link" role="button" data-toggle="dropdown"
                                    aria-expanded="false" v-pre>
                                    <img class="img-circle" style="width: 20px; border: 1px solid teal" src="{{ asset('img/users/profile.png') }}"
                                        alt="">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            {{-- Main Content --}}
            <main class="py-4">
                <router-view></router-view>
                <vue-progress-bar></vue-progress-bar>
            </main>
        </div>
    </div>

    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

    </script>
</body>

</html>
