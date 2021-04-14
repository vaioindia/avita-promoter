<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Prometer Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/icons/favicon.png') }}">
    <link rel="icon" href="{{ asset('images/icons/favicon.png') }}" type="image/x-icon">

    <!-- Bootstrap Dropzone CSS -->
	<link href="{{ asset('assets/vendors/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css"/>

	<!-- Bootstrap Dropzone CSS -->
	<link href="{{ asset('assets/vendors/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Toggles CSS -->
    <link href="{{ asset('assets/vendors/jquery-toggles/css/toggles.css' )}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendors/jquery-toggles/css/themes/toggles-light.css') }}" rel="stylesheet" type="text/css">

	<!-- Toastr CSS -->
    <link href="{{ asset('assets/vendors/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    {{-- <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div> --}}
    <!-- /Preloader -->

	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand" href="">
                <img class="brand-img d-inline-block" src="{{ asset('assets/dist/img/trendist-consulting-logo.png') }}" alt="brand" />
            </a>
            <ul class="navbar-nav hk-navbar-content">

                <li class="nav-item dropdown dropdown-notifications">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge-wrap"><span class="badge badge-primary badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <h6 class="dropdown-header">Notifications <a href="{{ route('user.notification')}}" class="">View All</a></h6>
                        <div class="notifications-nicescroll-bar">
                            @forelse ($adminNotification as $notification)
                            <a href="{{ route('user.detailnotification', $notification->id )}}" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="{{ asset('images/icons/favicon.png') }}" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">
                                                <span class="text-dark text-capitalize">
                                                    {{ $notification->title}}
                                                </span><br>
                                                {{ $notification->summery}}
                                            </div>
                                            {{-- <div class="notifications-time">12m</div> --}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @empty
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text"><span class="text-dark text-capitalize"></span> No Record Notification</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforelse
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="{{ asset('images/icons/favicon.png') }}" alt="Promoters" class="avatar-img">
                                </div>
                                {{-- <span class="badge badge-success badge-indicator"></span> --}}
                            </div>
                            <div class="media-body">
                                <span>{{ Auth::user()->name }}<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                            @csrf
                            <button class="dropdown-item" type="submit" href="{{ route('logout') }}"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></button>
                            {{-- <a class="dropdown-item" type="submit" href="{{ route('logout') }}"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a> --}}
                        </form>
                        {{-- <a class="dropdown-item" href="{{ route('logout') }}"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a> --}}
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        @include('partials.user-sidebar')
        <!-- /Vertical Nav -->

        <!-- Setting Panel -->
        <div class="hk-settings-panel">
            <div class="nicescroll-bar position-relative">
                <div class="settings-panel-wrap">
                    <div class="settings-panel-head">
                        <img class="brand-img d-inline-block align-top" src="{{ asset('assets/dist/img/logo-light.png') }}" alt="brand" />
                        <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                    </div>
                    <hr>
                    <h6 class="mb-5">Layout</h6>
                    <p class="font-14">Choose your preferred layout</p>
                    <div class="layout-img-wrap">
                        <div class="row">
                            <a href="dashboard1.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="{{ asset('assets/dist/img/layout1.png') }}" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="dashboard2.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="{{ asset('assets/dist/img/layout2.png' ) }}" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                           <a href="dashboard3.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="{{ asset('assets/dist/img/layout3.png') }}" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
							<a href="javascript:void(0);" class="col-6 mb-30 active">
                                <img class="rounded opacity-70" src="{{ asset('assets/dist/img/layout4.png') }}" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
							<a href="dashboard5.html" class="col-6">
                                <img class="rounded opacity-70" src="{{ asset('assets/dist/img/layout5.png') }}" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <h6 class="mb-5">Navigation</h6>
                    <p class="font-14">Menu comes in two modes: dark & light</p>
                    <div class="button-list hk-nav-select mb-10">
                        <button type="button" id="nav_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="nav_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <h6 class="mb-5">Top Nav</h6>
                    <p class="font-14">Choose your liked color mode</p>
                    <div class="button-list hk-navbar-select mb-10">
                        <button type="button" id="navtop_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="navtop_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>Scrollable Header</h6>
                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                    </div>
                    <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
                </div>
            </div>
            <img class="d-none" src="{{ asset('assets/dist/img/logo-light.png') }}" alt="brand" />
            <img class="d-none" src="{{ asset('assets/dist/img/logo-dark.png') }}" alt="brand" />
        </div>
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            @yield('content')
            <!-- /Container -->

            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="" class="text-dark" target="_blank">Trendist Consulting</a> © 2021</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    {{-- <script  type="text/javascript" defer src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script> --}}

    <script type="text/javascript" defer src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" defer src="{{ asset('assets/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script type="text/javascript" defer src="{{ asset('assets/dist/js/jquery.slimscroll.js') }}"></script>

    <!-- Data Table JavaScript -->
    <script type="text/javascript" defer src="{{ asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/vendors/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/dist/js/dataTables-data.js') }}"></script>

    <!-- Dropzone JavaScript -->
	<script type="text/javascript" defer src="{{ asset('assets/vendors/dropzone/dist/dropzone.js') }}"></script>

	<!-- Dropify JavaScript -->
	<script type="text/javascript" defer src="{{ asset('assets/vendors/dropify/dist/js/dropify.min.js') }}"></script>

	<!-- Form Flie Upload Data JavaScript -->
	<script type="text/javascript" defer src="{{ asset('assets/dist/js/form-file-upload-data.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script type="text/javascript" defer src="{{ asset('assets/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- FeatherIcons JavaScript -->
    <script type="text/javascript" defer src="{{ asset('assets/dist/js/feather.min.js') }}"></script>

    <!-- Toggles JavaScript -->
    <script type="text/javascript" defer src="{{ asset('assets/vendors/jquery-toggles/toggles.min.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/dist/js/toggle-data.js') }}"></script>

	<!-- Counter Animation JavaScript -->
	<script type="text/javascript" defer src="{{ asset('assets/vendors/waypoints/lib/jquery.waypoints.min.js') }}"></script>
	<script type="text/javascript" defer src="{{ asset('assets/vendors/jquery.counterup/jquery.counterup.min.js') }}"></script>

	<!-- EChartJS JavaScript -->
    <script type="text/javascript" defer src="{{ asset('assets/vendors/echarts/dist/echarts-en.min.js') }}"></script>

	<!-- Owl JavaScript -->
    <script type="text/javascript" defer src="{{ asset('assets/vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>

	<!-- Toastr JS -->
    <script type="text/javascript" defer src="{{ asset('assets/vendors/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

    <!-- Peity JavaScript -->
    <script type="text/javascript" defer src="{{ asset('assets/vendors/peity/jquery.peity.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script type="text/javascript" defer src="{{ asset('assets/vendors/raphael/raphael.min.js') }}"></script>
    <script type="text/javascript" defer src="{{ asset('assets/vendors/morris.js/morris.min.js') }}"></script>

    <!-- Easy pie chart JS -->
    <script type="text/javascript" defer src="{{ asset('assets/vendors/easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>

	<!-- Sparkline JavaScript -->
    <script type="text/javascript" defer src="{{ asset('assets/vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

    <!-- Init JavaScript -->
    <script type="text/javascript" defer src="{{ asset('assets/dist/js/init.js') }}"></script>
	<script type="text/javascript" defer src="{{ asset('assets/dist/js/dashboard4-data.js') }}"></script>

    <!--Page JavaScript -->
    @yield('script')

</body>

</html>
