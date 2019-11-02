<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href={{asset('vendor/bootstrap/css/bootstrap.min.css')}}>
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href={{asset('vendor/font-awesome/css/font-awesome.min.css')}}>
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href={{asset('css/fontastic.css')}}>
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href={{asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700')}}>
    <!-- jQuery Circle-->
    <link rel="stylesheet" href={{asset('css/grasp_mobile_progress_circle-1.0.0.min.css')}}>
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href={{asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}>
    <!-- theme stylesheet-->
    <link rel="stylesheet" href={{asset('css/style.default.css id=theme-stylesheet')}}>
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href={{asset('css/custom.css')}}
        <!-- Favicon-->
    <link rel="shortcut icon" href={{asset('img/favicon.ico')}}>

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Project_Task_Scheduling_System</title>

    {{-- <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body>
<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img src={{asset('img/man.png')}} alt="person"
                                                               class="img-fluid rounded-circle">
                <h2 class="h5">Admin</h2><span>Web Developer</span>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="" class="brand-small text-center">
                    <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Main</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">
                @if(Auth::guard('student')->guest())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('student.loginForm') }}">{{ __('StudentsLogin') }}</a>
                </li>
                @endif

                @if(Auth::guard('student')->check())
                    <li class="nav-item"><a href="{{ route('student.logout') }}" class="nav-link logout"> <span
                                class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a>
                    </li>

               {{-- @if(Route::has('student/login'))
                        <li class="nav-item"><a href="{{ route('student.logout') }}" class="nav-link logout"> <span
                                    class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a>
                        </li>
@endif--}}



                        <li><a class="nav-link" href="{{ route('student.list') }}"><i class="icon-user"></i>{{ __('Students') }}
                    </a></li>
                <li><a class="nav-link" href="{{ route('role.list') }}"><i class="icon-check"></i>{{ __('Roles') }}</a>
                </li>
                <li><a class="nav-link" href="{{ route('permission.list') }}"><i
                            class="icon-flask"></i>{{ __('Permissions') }}</a></li>
@endif


                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
                            class="icon-page"></i>Team</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="{{ route('team.createForm') }}">Create</a></li>
                        <li><a href="#">Lists</a></li>

                    </ul>
                </li>
                <li><a href=""> <i class="icon-interface-windows"></i>Login page </a></li>
                <li><a href="#"> <i class="icon-mail"></i>Demo
                        <div class="badge badge-warning">6 New</div>
                    </a></li>
            </ul>
        </div>

    </div>
</nav>
<div class="page">
    <!-- navbar-->
    <header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i
                                class="icon-bars"> </i></a><a href="" class="navbar-brand">
                            <div style="color: white" class="brand-text d-none d-md-inline-block"><span>Datatrix </span><strong
                                    style="color: red">Soft</strong></div>

                        </a></div>
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Notifications dropdown-->
                        <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#"
                                                         data-toggle="dropdown" aria-haspopup="true"
                                                         aria-expanded="false" class="nav-link"><i
                                    class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-envelope"></i>You have
                                                6 new
                                                messages
                                            </div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-twitter"></i>You have
                                                2
                                                followers
                                            </div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-upload"></i>Server
                                                Rebooted
                                            </div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-twitter"></i>You have
                                                2
                                                followers
                                            </div>
                                            <div class="notification-time"><small>10 minutes ago</small></div>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                        <strong> <i class="fa fa-bell"></i>view all notifications </strong></a></li>
                            </ul>
                        </li>
                        <!-- Messages dropdown-->
                        <li class="nav-item dropdown"><a id="messages" rel="nofollow" data-target="#" href="#"
                                                         data-toggle="dropdown" aria-haspopup="true"
                                                         aria-expanded="false" class="nav-link"><i
                                    class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"><img src={{asset('img/avatar-1.jpg')}} alt="..."
                                                                      class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Jason Doe</h3>
                                            <span>sent you a direct message</span><small>3 days
                                                ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"><img src={{asset('img/avatar-2.jpg')}} alt="..."
                                                                      class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Frank Williams</h3>
                                            <span>sent you a direct message</span><small>3
                                                days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"><img src={{asset('img/avatar-3.jpg')}} alt="..."
                                                                      class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Ashley Wood</h3>
                                            <span>sent you a direct message</span><small>3
                                                days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                        <strong> <i class="fa fa-envelope"></i>Read all messages </strong></a></li>
                            </ul>
                        </li>
                        <!-- Languages dropdown    -->


                        <!-- Log out-->


                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
    <footer class="main-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <p>Datatrix Soft &copy; 2019</p>
                </div>
            </div>
        </div>
    </footer>
</div>


<script src={{asset('vendor/jquery/jquery.min.js')}}></script>
<script src={{asset('vendor/popper.js/umd/popper.min.js')}}></script>
<script src={{asset('vendor/bootstrap/js/bootstrap.min.js')}}></script>
<script src={{asset('js/grasp_mobile_progress_circle-1.0.0.min.js')}}></script>
<script src={{asset('vendor/jquery.cookie/jquery.cookie.js')}}></script>
<script src={{asset('vendor/chart.js/Chart.min.js')}}></script>
<script src={{asset('vendor/jquery-validation/jquery.validate.min.js')}}></script>
<script src={{asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}></script>
<script src={{asset('js/charts-home.js')}}></script>
<!-- Main File-->
<script src={{asset('js/front.js')}}></script>
<script src="https://kit.fontawesome.com/c218529370.js"></script>

</body>
</html>
