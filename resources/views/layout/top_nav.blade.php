<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{'/'}}">Home</a></li>
                @yield('breadcrumb')
            </ol>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('image/user-avatar.jpg')}}" class="user-image img-circle elevation-2"
                     alt="User Image">
                <span class="d-none d-md-inline">Yumi Recipes</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <img src="{{asset('image/user-avatar.jpg')}}" class="img-circle elevation-2"
                         alt="User Image">
                    <p>
                        Yumi Recipes
                        <small>yumisumfit@gmail.com</small>
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="{{url('change_password')}}" class="btn btn-default btn-flat">Change Password</a>
                    <a href="{{url('logout')}}" class="btn btn-default btn-flat float-right">Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.navbar -->