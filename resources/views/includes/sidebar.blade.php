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
                            <i class="nav-icon fas fa-tachometer-alt c-blue"></i> Dashboard
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/profile" class="nav-link">
                            <i class="nav-icon fas fa-user c-green"></i> Profile
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-power-off c-red"></i>
                        <p>{{ __('Logout') }}</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                <li class="nav-item">
                    <router-link to="/users" class="nav-link">
                        <i class="nav-icon fas fa-users c-orange"></i>
                        <p> Users <span class="right badge badge-info badge-pill">5</span> </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/students" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate c-indigo"></i>
                        <p> Students <span class="right badge badge-info badge-pill">5</span> </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/employees" class="nav-link">
                        <i class="nav-icon fas fa-user-tie c-blue"></i>
                        <p>Employees</p>
                    </router-link>
                </li>
            </ul>
        </nav>
        {{-- sidebar-menu end --}}
    </div>
    {{-- sidebar end --}}
</aside>