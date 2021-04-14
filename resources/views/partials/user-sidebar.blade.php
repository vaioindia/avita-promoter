<!-- Vertical Nav -->
<nav class="hk-nav hk-nav-dark">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">
            <ul class="navbar-nav flex-column">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home')}}">
                        <span class="feather-icon"><i data-feather="activity"></i></span>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-with-badge" href="{{ route('user.stock-report')}}">
                        <span class="feather-icon"><i data-feather="package"></i></span>
                        <span class="nav-link-text">Stock Report</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.create')}}">
                        <span class="feather-icon"><i data-feather="book"></i></span>
                        <span class="nav-link-text">Document</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link link-with-badge" href="">
                        <span class="feather-icon"><i data-feather="eye"></i></span>
                        <span class="nav-link-text">Document</span>
                    </a>
                </li> --}}
            </ul>
        {{-- </div> --}}
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->
