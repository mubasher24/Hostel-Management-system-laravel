<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hostel Management System</title>

    <!-- Styles -->

    <link href="{{url ('css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url ('css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{url ('css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{url ('css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />

    <link href="{{url ('css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{url ('css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url ('css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{url ('css/style.css')}}" rel="stylesheet">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo">
                        @if(auth()->check())
                            @if(auth()->user()->type === 'user')
                                <a href="{{ url('/home') }}">
                                    <span>Hostel Management System</span>
                                </a>
                            @else
                                <a href="{{ url('/admin_dashboard') }}">
                                    <span>Hostel Management System</span>
                                </a>
                            @endif
                        @endif
                    </div>










                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header bg-transparent">

        <div class="container-fluid bg-white">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">

                        <div class="dropdown dib">

                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar text-capitalize">Welcome, {{ Auth::user()->name }}
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">

                                    <div class="dropdown-content-body">
                                        <ul>




                                            <li class="nav-item dropdown">

                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>

                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrap px-4">
            @yield('content')
        </div>


        <footer id="footer" class="bg-white">




            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>Copyright HMS © 2023. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>





    </div>




    <!-- jquery vendor -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- bootstrap -->




    <!-- scripit init-->


</body>

</html>
