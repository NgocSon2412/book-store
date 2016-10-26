<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') Book Store</title>
    <!-- Bootstrap -->
    <link href="http://localhost/book_store/resources/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://localhost/book_store/resources/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="http://localhost/book_store/resources/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="http://localhost/book_store/resources/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="http://localhost/book_store//resources/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="http://localhost/book_store/resources/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="http://localhost/book_store/resources/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="http://localhost/book_store/resources/build/css/custom.min.css" rel="stylesheet">
    <link href="http://localhost/book_store/resources/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/book_store/resources/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/book_store/resources/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/book_store/resources/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/book_store/resources/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;"> <a href="{{ url('/') }}" class="site_title"><i class="fa fa-paw"></i> <span>Book Store!</span></a> </div>
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile">
                        <div class="profile_pic"> <img src="http://localhost/book_store/resources/assets/images/img.jpg" alt="..." class="img-circle profile_img"> </div>
                        <div class="profile_info"> <span>Welcome</span>
                            <h2>{{ Auth::user()->name }}</h2> </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('/admin') }}">Dashboard</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('/admin/users') }}">All Users</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa fa-book"></i> Books <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="chartjs.html">All Books</a></li>
                                        <li><a href="chartjs2.html">New Book</a></li>
                                        <li><a href="{{ url('admin/categories') }}">Categories</a></li>
                                        <li><a href="#">Authors</a></li>
                                        <li><a href="fixed_sidebar.html">All Comments</a></li>
                                        <li><a href="fixed_sidebar.html">All Rates</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen"> <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span> </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock"> <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout"> <span class="glyphicon glyphicon-off" aria-hidden="true"></span> </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle"> <a id="menu_toggle"><i class="fa fa-bars"></i></a> </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="http://localhost/book_store/resources/assets/images/img.jpg" alt="">{{ Auth::user()->name }}<span class=" fa fa-angle-down"></span> </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="{{ url('admin/users/'. Auth::user()->id) }}"> Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <span class="badge bg-red pull-right">50%</span> <span>Settings</span> </a>
                                    </li>
                                    <li><a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @if (Session::has('flash_message'))
                            <p class="alert {{ Session::get('alert-class')}}">
                                {{ Session::get('flash_message')}}
                            </p>
                        @endif
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="dashboard_graph">
                            @yield('content')
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <footer>
                <div class="pull-right"> Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a> </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    <!-- jQuery -->
    <script src="http://localhost/book_store/resources/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="http://localhost/book_store/resources/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://localhost/book_store/resources/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="http://localhost/book_store/resources/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="http://localhost/book_store/resources/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="http://localhost/book_store/resources/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="http://localhost/book_store/resources/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="http://localhost/book_store/resources/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="http://localhost/book_store/resources/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="http://localhost/book_store/resources/vendors/Flot/jquery.flot.js"></script>
    <script src="http://localhost/book_store/resources/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="http://localhost/book_store/resources/vendors/Flot/jquery.flot.time.js"></script>
    <script src="http://localhost/book_store/resources/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="http://localhost/book_store/resources/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="http://localhost/book_store/resources/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="http://localhost/book_store/resources/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="http://localhost/book_store/resources/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="http://localhost/book_store/resources/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="http://localhost/book_store/resources/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="http://localhost/book_store/resources/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="http://localhost/book_store/resources/vendors/moment/min/moment.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="http://localhost/book_store/resources/build/js/custom.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="http://localhost/book_store/resources/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/jszip/dist/jszip.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="http://localhost/book_store/resources/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="http://localhost/book_store/resources/assets/js/custom.js"></script>
</body>

</html>