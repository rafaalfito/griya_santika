<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center 
justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Griya Santika</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Looping Menu-->
    <div class="sidebar-heading">
        Dashboard
    </div>
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?=
                                        base_url('admin'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span>Home</span></a>
    </li>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading mt-3">
        Master Data
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?=
                                        base_url('pesan'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span>Pesan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?=
                                        base_url('buku'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span></span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?=
                                        base_url('user/anggota'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span></span></a>
    </li>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -- >