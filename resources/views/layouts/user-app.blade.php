<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Prometer Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="{{ asset('images/icons/favicon.png') }}" type="image/x-icon">

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
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand" href="">
                <img class="brand-img d-inline-block w-25" src="{{ asset('assets/dist/img/trendist-consulting-logo.png') }}" alt="brand" />
            </a>
            <ul class="navbar-nav hk-navbar-content">
                {{-- <li class="nav-item">
                    <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="search"></i></span></a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="settings"></i></span></a>
                </li> --}}
                {{-- <li class="nav-item dropdown dropdown-notifications">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge-wrap"><span class="badge badge-primary badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">View all</a></h6>
                        <div class="notifications-nicescroll-bar">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="{{ asset('assets/dist/img/avatar1.jpg') }}" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text"><span class="text-dark text-capitalize">Evie Ono</span> accepted your invitation to join the team</div>
                                            <div class="notifications-time">12m</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="{{ asset('assets/dist/img/avatar2.jpg') }}" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">New message received from <span class="text-dark text-capitalize">Misuko Heid</span></div>
                                            <div class="notifications-time">1h</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-primary rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-account font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">You have a follow up with<span class="text-dark text-capitalize"> Mintos head</span> on <span class="text-dark text-capitalize">friday, dec 19</span> at <span class="text-dark">10.00 am</span></div>
                                            <div class="notifications-time">2d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-success rounded-circle">
													<span class="initial-wrap"><span>A</span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Application of <span class="text-dark text-capitalize">Sarah Williams</span> is waiting for your approval</div>
                                            <div class="notifications-time">1w</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-warning rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-notifications font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Last 2 days left for the project</div>
                                            <div class="notifications-time">15d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li> --}}
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="{{ asset('assets/dist/img/avatar12.jpg') }}" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>{{ Auth::user()->name }}<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        {{-- <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a> --}}
                        {{-- <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a> --}}
                        {{-- <a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a> --}}
                        {{-- <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a> --}}
                        {{-- <div class="dropdown-divider"></div> --}}
                        <div class="sub-dropdown-menu show-on-hover">
                            <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                            <div class="dropdown-menu open-left-side">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        {{-- <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a> --}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                            @csrf
                            <button class="dropdown-item" type="submit" href="{{ route('logout') }}"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        {{-- <form role="search" class="navbar-search">
            <div class="position-relative">
                <a href="javascript:void(0);" class="navbar-search-icon"><span class="feather-icon"><i data-feather="search"></i></span></a>
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
                <a id="navbar_search_close" class="navbar-search-close" href="#"><span class="feather-icon"><i data-feather="x"></i></span></a>
            </div>
        </form> --}}
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
            {{-- <div class="container mt-xl-50 mt-sm-30 mt-15">
                <!-- Title -->
                <div class="hk-pg-header align-items-top">
                    <div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Welcome Back!</h2>
						<p>Questions about onboarding lead data? <a href="#">Learn more.</a></p>
					</div>
				</div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
								<div class="col-lg-4">
								<div class="card overflow-hide border-0">
									<div class="card-body pa-0">
										<div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
											<div class="fadeOut item img-background overlay-wrap" style="background-image:url(assets/dist/img/slide1.jpg);">
												<div class="position-relative z-index-2 pa-20">
													<div class="position-relative text-white mnh-225p">
														<p>Very easy to use. Thanks to design, we've just launched our 5th website! Thank you for making it painless, pleasant and most of all hassle free! Just what I was looking for.</p>
														<div class="media position-absolute b-0 l-0 align-items-center">
															<div class="media-img-wrap d-flex mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-pink rounded-circle"><span class="initial-wrap"><span>ZC</span></span></span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block font-14 font-weight-500">Zuck Chan</span>
																<span class="d-block font-12">Design Lead, Hencework</span>
															</div>
														</div>
													</div>
												</div>
												<div class="bg-overlay bg-trans-dark-50"></div>
											</div>
											<div class="fadeOut item img-background overlay-wrap" style="background-image:url(assets/dist/img/slide2.jpg);">
												<div class="position-relative z-index-2 pa-20">
													<div class="position-relative text-white mnh-225p">
														<p>Nice work on your design. Design is worth much more than I paid. We've used design for the last five years. I just can't get enough of design.</p>
														<div class="media position-absolute b-0 l-0 align-items-center">
															<div class="media-img-wrap d-flex mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-primary rounded-circle"><span class="initial-wrap"><span>NT</span></span></span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block font-14 font-weight-500">Normand T.</span>
																<span class="d-block font-12">Sales Executive, Media</span>
															</div>
														</div>
													</div>
												</div>
												<div class="bg-overlay bg-trans-dark-50"></div>
											</div>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header card-header-action">
										<h6>Recent Activity</h6>
										<div class="d-flex align-items-center card-action-wrap">
											<div class="inline-block dropdown">
												<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="user-activity user-activity-sm">
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<img src="{{ asset('assets/dist/img/avatar2.jpg') }}" alt="user" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Laura Thompson</span><span class="pl-5">joined josh groben team.</span></span>
														<span class="d-block font-13">3 hours ago</span>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<img src="{{ asset('assets/dist/img/avatar3.jpg') }}" alt="user" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Meayme Fletcher</span><span class="pl-5">liked photos</span></span>
														<span class="d-block font-13 mb-10">6 hours ago</span>
													</div>
													<div class="d-flex">
														<a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="{{ asset('assets/dist/img/slide1.jpg') }}" alt="Card image cap"></a>
														<a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="{{ asset('assets/dist/img/slide2.jpg') }}" alt="Card image cap"></a>
														<a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="{{ asset('assets/dist/img/slide3.jpg') }}" alt="Card image cap"></a>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<span class="avatar-text avatar-text-info rounded-circle">
																<span class="initial-wrap"><span>B</span></span>
														</span>
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Billy Flowers</span><span class="pl-5">Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text.</span></span>
														<span class="d-block font-13">3 days ago</span>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<img src="{{ asset('assets/dist/img/avatar4.jpg') }}" alt="user" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Morgan Freeman</span><span class="pl-5">joined josh groben team.</span></span>
														<span class="d-block font-13">3 hours ago</span>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<span class="avatar-text avatar-text-success rounded-circle">
																<span class="initial-wrap"><span>M</span></span>
														</span>
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Meayme Fletcher</span><span class="pl-5">liked photos</span></span>
														<span class="d-block font-13 mb-10">6 hours ago</span>
													</div>
													<div class="d-flex">
														<a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="{{ asset('assets/dist/img/slide4.jpg') }}" alt="Card image cap"></a>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<img src="{{ asset('assets/dist/img/avatar6.jpg' ) }}" alt="user" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Evie Ono</span><span class="pl-5">joined josh groben team.</span></span>
														<span class="d-block font-13">3 hours ago</span>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="media-img-wrap">
													<div class="avatar avatar-xs">
														<span class="avatar-text avatar-text-primary rounded-circle">
																<span class="initial-wrap"><span>J</span></span>
														</span>
													</div>
												</div>
												<div class="media-body">
													<div>
														<span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Jonnie Metoyer</span><span class="pl-5">started following you</span></span>
														<span class="d-block font-13 mb-10">2 days ago</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-8">
								<div class="card">
									<div class="card-header card-header-action">
										<h6>Ratings & Reviews</h6>
										<div class="d-flex align-items-center card-action-wrap">
											<button class="btn btn-secondary btn-sm">Rate the template</button>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-5">
												<div class="d-flex align-items-center h-100 justify-content-center text-center">
													<div>
														<div class="d-flex align-items-center  justify-content-center text-dark">
															<span class="counter-anim display-2">4.4</span>
															<span class="review-star starred ml-10">
																<span class="feather-icon"><i data-feather="star"></i></span>
															</span>
														</div>
														<span class="font-18">949 ratings & 18 reviews</span>
													</div>
												</div>
											</div>
											<div class="col-sm-7">
												<div class="progress-wrap lb-side-left mt-5">
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">5.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-primary w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">4.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-brown-light-1 w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">3.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-brown-light-2 w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">2.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-brown-light-3 w-55" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="progress-lb-wrap mb-10">
														<label class="progress-label mnw-50p">1.0<i class="zmdi zmdi-star text-light-20 ml-5"></i></label>
														<div class="progress progress-bar-rounded progress-bar-xs">
															<div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card card-refresh">
									<div class="refresh-container">
										<div class="loader-pendulums"></div>
									</div>
									<div class="card-header card-header-action">
										<h6>Double Click Campaigning Stats</h6>
										<div class="d-flex align-items-center card-action-wrap">
											<a href="#" class="inline-block refresh mr-15">
												<i class="ion ion-md-radio-button-off"></i>
											</a>
											<div class="inline-block dropdown">
												<a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-md-more"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="hk-legend-wrap mb-20">
											<div class="hk-legend">
												<span class="d-10 bg-primary rounded-circle d-inline-block"></span><span>Click Rate</span>
											</div>
											<div class="hk-legend">
												<span class="d-10 bg-neon-light-1 rounded-circle d-inline-block"></span><span>Impression</span>
											</div>
										</div>
										<div id="e_chart_3" class="echart" style="height: 240px;"></div>
									</div>
								</div>

								<div class="card">
									<div class="card-body pa-0">
										<div class="table-wrap">
											<div class="table-responsive">
												<table class="table table-hover mb-0">
													<thead>
														<tr>
															<th>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck4">
																	<label class="custom-control-label" for="customCheck4">Lead Title</label>
																</div>
															</th>
															<th>Sales</th>
															<th>Company</th>
															<th>Date Created</th>
															<th>Lead Status</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck41" checked="">
																	<label class="custom-control-label" for="customCheck41"><span class="w-130p d-block text-truncate">connar_weiked@ae.com</span></label>
																</div>
															</td>
															<td>$2000</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-primary rounded-circle"><span class="initial-wrap"><span>A</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">American Express</span>
																	</div>
																</div>
															</td>
															<td>
																22/10/2018
															</td>
															<td><span class="badge badge-primary">On track</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck42">
																	<label class="custom-control-label" for="customCheck42"><span class="w-130p d-block text-truncate">express_notingham@em.au</span></label>
																</div>
															</td>
															<td>$1600</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-danger rounded-circle"><span class="initial-wrap"><span>M</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Exxon Mobil</span>
																	</div>
																</div>
															</td>
															<td>
																15/09/2018
															</td>
															<td><span class="badge badge-primary">On track</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck43">
																	<label class="custom-control-label" for="customCheck43"><span class="w-130p d-block text-truncate">locast12_host@nova.com</span></label>
																</div>
															</td>
															<td>$1265</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-teal rounded-circle"><span class="initial-wrap"><span>B</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Big Blackship</span>
																	</div>
																</div>
															</td>
															<td>
																30/08/2018
															</td>
															<td><span class="badge badge-danger">Behind</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck44">
																	<label class="custom-control-label" for="customCheck44"><span class="w-130p d-block text-truncate">grillmac@sundance.co.in</span></label>
																</div>
															</td>
															<td>$4562</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-indigo rounded-circle"><span class="initial-wrap"><span>F</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Folkswagan</span>
																	</div>
																</div>
															</td>
															<td>
																14/03/2018
															</td>
															<td><span class="badge badge-purple">Negotiation</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck45">
																	<label class="custom-control-label" for="customCheck45"><span class="w-130p d-block text-truncate">admin@novotel.inc</span></label>
																</div>
															</td>
															<td>$5012</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-purple rounded-circle"><span class="initial-wrap"><span>N</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Novotel</span>
																	</div>
																</div>
															</td>
															<td>
																21/02/2018
															</td>
															<td><span class="badge badge-orange">Offer Made</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck46">
																	<label class="custom-control-label" for="customCheck46"><span class="w-130p d-block text-truncate">displaypic@ho.au</span></label>
																</div>
															</td>
															<td>$1245</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-pink rounded-circle"><span class="initial-wrap"><span>D</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Displaypic</span>
																	</div>
																</div>
															</td>
															<td>
																3/02/2018
															</td>
															<td><span class="badge badge-orange">Offer Made</span></td>
														</tr>
														<tr>
															<td>
																<div class="custom-control custom-checkbox checkbox-primary">
																	<input type="checkbox" class="custom-control-input" id="customCheck47">
																	<label class="custom-control-label" for="customCheck47"><span class="w-130p d-block text-truncate">manager@cobito.com</span></label>
																</div>
															</td>
															<td>$1245</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-img-wrap d-flex mr-10">
																		<div class="avatar avatar-xs">
																			<span class="avatar-text avatar-text-yellow rounded-circle"><span class="initial-wrap"><span>C</span></span></span>
																		</div>
																	</div>
																	<div class="media-body">
																		<span class="d-block">Cobito co.</span>
																	</div>
																</div>
															</td>
															<td>
																18/01/2018
															</td>
															<td><span class="badge badge-danger">Behind</span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
                <!-- /Row -->
            </div> --}}
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
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('assets/dist/js/jquery.slimscroll.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('assets/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('assets/dist/js/feather.min.js') }}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{ asset('assets/vendors/jquery-toggles/toggles.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/toggle-data.js') }}"></script>

	<!-- Counter Animation JavaScript -->
	<script src="vendors/waypoints/lib/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/jquery.counterup/jquery.counterup.min.js') }}"></script>

	<!-- EChartJS JavaScript -->
    <script src="{{ asset('assets/vendors/echarts/dist/echarts-en.min.js') }}"></script>

	<!-- Owl JavaScript -->
    <script src="{{ asset('assets/vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>

	<!-- Toastr JS -->
    <script src="{{ asset('assets/vendors/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('assets/dist/js/init.js') }}"></script>
	<script src="{{ asset('assets/dist/js/dashboard4-data.js') }}"></script>

</body>

</html>