<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url ('shop_owner/dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="img/FAST-logo.png" width="35px">
          <!--   <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">FAST</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url ('shop_owner/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Service -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url ('shop_owner/services') }}">
            <i class="fa fa-list"></i>
            <span>Service List</span>
        </a>
    </li>

    <!-- Nav Item - Product -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url ('shop_owner/products') }}">
            <i class="fa fa-list"></i>
            <span>Product List</span>
        </a>
    </li>

    <!-- Nav Item - Feedback -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url ('shop_owner/feedback-ratings') }}">
            <i class="fas fa-fw fa-comments"></i>
            <span>Feedback/Ratings</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->