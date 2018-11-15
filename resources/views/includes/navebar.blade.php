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
            <a href="https://github.com/vaheedxp" target="_blank" class="nav-link">
                <i class="fab fa-github c-github fa-lg"></i>
            </a>
        </li>
        <li class="nav-item">
            <a href="http://twitter.com/TaqiVaheed" target="_blank" class="nav-link">
                <i class="fab fa-twitter c-blue fa-lg"></i>
            </a>
        </li>
        <li class="nav-item">
            <a href="https://github.com/vaheedxp" target="_blank" class="nav-link">
                <i class="fab fa-facebook c-facebook fa-lg"></i>
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