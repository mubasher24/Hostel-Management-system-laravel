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

                        <a href="{{ url('/admin_dashboard') }}">
                           <span>Hostel Management
                                System</span></a>
                    </div>




                    <li>
                        <a href="{{ url('/admin_dashboard') }}">
                            <i class="ti-home"></i>
                            <span>Dashboard </span>
                        </a>
                    </li>


                    <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid3-alt"></i> Rooms <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>


                            <li><a href="{{ url('/add-room') }}">Add New Room</a></li>
                            <li><a href="{{ url('/manage-rooms') }}">Show All Room</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-book"></i> Courses <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>


                            <li><a href="{{ url('/add-course') }}">Add Courses</a></li>
                            <li><a href="{{ url('/manage-courses') }}">Manage Courses</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/registration') }}">
                            <i class="ti-clipboard"></i>
                            <span>Student Registration</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/manage') }}">
                            <i class="ti-user"></i>
                            <span>Manage Students</span>
                        </a>
                    </li>





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
                                <span class="user-avatar">Welcome, Admin
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">

                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/manage') }}">
                                                    <i class="ti-user"></i>
                                                    <span>Manage Students</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('/manage-rooms')}}">
                                                    <i class="ti-email"></i>
                                                    <span>Manage Rooms</span>
                                                </a>
                                            </li>

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
    <script src="{{url ('js/lib/jquery.min.js')}}"></script>
    <script src="{{url ('js/lib/jquery.nanoscroller.min.js')}}"></script>
    <!-- nano scroller -->
    <script src="{{url ('js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{url ('js/lib/preloader/pace.min.js')}}"></script>
    <!-- sidebar -->

    <script src="{{url ('js/lib/bootstrap.min.js')}}"></script>
    <script src="{{url ('js/scripts.js')}}"></script>
    <!-- bootstrap -->




    <script>
        function getSeater(val) {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');


            $.ajax({
                type: "POST",
                url: "{{ route('get.seater') }}",
                data: {
                    roomid: val,
                    _token: csrfToken
                }, // Include the CSRF token
                success: function(data) {
                    $('#seater').val(data);
                }
            });

            $.ajax({
                type: "POST",
                url: "{{ route('get.fees') }}",
                data: {
                    rid: val,
                    _token: csrfToken
                },
                success: function(data) {
                    $('#fpm').val(data);
                }
            });
        }
    </script>

    <script>
        function checkAvailability() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "check_availability.php",
                data: 'roomno=' + $("#room").val(),
                type: "POST",
                success: function(data) {
                    $("#room-availability-status").html(data);
                    $("#loaderIcon").hide();
                },
                error: function() {}
            });
        }
    </script>




    <!-- scripit init-->

</body>

</html>
