<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url ('admin/dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="/assets/img/FAST-logo.png" width="35px">
          <!--   <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">FAST</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url ('admin/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Shop Approval -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url ('admin/shopapprove') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Shop Approval</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-home"></i>
            <span>Shop Owner</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Vehicle Shops</h6>
                <a class="collapse-item" href="{{ url ('admin/car-shop') }}">Car Shop</a>
                <a class="collapse-item" href="{{ url ('admin/motor-shop') }}">Motor Shop</a>
                <a class="collapse-item" href="{{ url ('admin/bike-shop') }}">Bike Shop</a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url ('admin/municipalitys') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Municipality</span>
        </a>
        
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->