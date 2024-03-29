<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Sidenav Menu Heading (Core)-->
                <div class="sidenav-menu-heading">Core</div>
                <!-- Sidenav Link (Charts)-->
                <a class="nav-link" href="{{url('/home')}}">
                    <div class="nav-link-icon"><i class="fas fa-fw fa-home"></i></div>
                    Home
                </a>

                <a class="nav-link" href="{{url('/asset')}}">
                    <div class="nav-link-icon"><i class="fas fa-boxes"></i></div>
                    Asset
                </a>


                @if(\Auth::user()->role === 'Super Admin')
                
                <!-- Sidenav Menu Heading (Master)-->
                <div class="sidenav-menu-heading">Master</div>
                <!-- Sidenav Accordion (Master)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsemaster" aria-expanded="false" aria-controls="collapsemaster">
                    <div class="nav-link-icon"><i class="fas fa-database"></i></div>
                    Master Data
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsemaster" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('/asset_category')}}">Asset Category</a>
                        <a class="nav-link" href="{{url('/cost_center')}}">Cost Center</a>
                        <a class="nav-link" href="{{url('/department')}}">Department</a>
                        <a class="nav-link" href="{{url('/location')}}">Location</a>
                    </nav>
                </div>

                <!-- Sidenav Menu Heading (Core)-->
                <div class="sidenav-menu-heading">Configuration</div>
                <!-- Sidenav Accordion (Utilities)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                    <div class="nav-link-icon"><i data-feather="tool"></i></div>
                    Master Configuration
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseUtilities" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('/dropdown')}}">Dropdown</a>
                        <a class="nav-link" href="{{url('/rule')}}">Rules</a>
                        <a class="nav-link" href="{{url('/user')}}">User</a>
                    </nav>
                </div>
                @endif

            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">{{ auth()->user()->name }}</div>
            </div>
        </div>
    </nav>
</div>