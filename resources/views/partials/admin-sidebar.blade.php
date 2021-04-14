<!-- Vertical Nav -->
<nav class="hk-nav hk-nav-light">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">
            <ul class="navbar-nav flex-column">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin.adminHome')}}">
                        <span class="feather-icon"><i data-feather="activity"></i></span>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#auth_drp">
                        <span class="feather-icon"><i data-feather="zap"></i></span>
                        <span class="nav-link-text">Promoter</span>
                    </a>
                    <ul id="auth_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" >
                                        Add Promoter
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.promoters')}}">
                                        Promoters List
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#pages_drp">
                        <i class="ion ion-md-appstore"></i>
                        <span class="nav-link-text">Stores</span>
                    </a>
                    <ul id="pages_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('store.create') }}">Add Stores</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#maps_drp">
                        <span class="feather-icon"><i data-feather="file-text"></i></span>
                        <span class="nav-link-text">Report</span>
                    </a>
                    <ul id="maps_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('report.create')}}">Stock Report</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="vector-map.html">Vector Map</a>
                                </li> --}}
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            {{-- <hr class="nav-separator"> --}}
            {{-- <div class="nav-header">
                <span>Getting Started</span>
                <span>GS</span>
            </div> --}}
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.noitification') }}" >
                        <i class="fa fa-bell"></i>
                        <span class="nav-link-text">Notifications</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('send') }}" >
                        <span class="feather-icon"><i data-feather="eye"></i></span>
                        <span class="nav-link-text">Send</span>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="feather-icon"><i data-feather="headphones"></i></span>
                        <span class="nav-link-text">Support</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->
