<!-- active sidebar -->
<?php 
    $active = ['dashboad.php'=>'','product.php'=>'','category.php'=>'','banner.php'=>'','baiviet.php'=>''];
    foreach($active as $key=> $value){
        if(strpos($_SERVER['REQUEST_URI'],$key) > 0){
            $active[$key] = 'active';
        }
    }
?>
<!-- end active -->
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CMS Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?=$active['dashboard.php']; ?>">
        <a class="nav-link" href="http://localhost/kiemtraphp/views/cms/pages/dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    
    <!-- Nav Item - Tables -->
    <li class="nav-item <?=$active['category.php']; ?>">
        <a class="nav-link" href="http://localhost/kiemtraphp/views/cms/pages/category.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Category</span></a>
    </li>
    <!-- Nav Item - Tables -->
    <li class="nav-item <?=$active['product.php']; ?>">
        <a class="nav-link" href="http://localhost/kiemtraphp/views/cms/pages/product.php">
            <i class="fab fa-product-hunt"></i>
            <span>Product</span></a>
    </li>
    <!-- Nav Item - Tables -->
    <li class="nav-item <?=$active['banner.php']; ?>">
        <a class="nav-link" href="http://localhost/kiemtraphp/views/cms/pages/banner.php">
            <i class="fab fa-dashcube"></i>
            <span>Banner</span></a>
    </li>
    <!-- Nav Item - Tables -->
    <li class="nav-item <?=$active['baiviet.php']; ?>">
        <a class="nav-link" href="http://localhost/kiemtraphp/views/cms/pages/baiviet.php">
            <i class="fab fa-dashcube"></i>
            <span>BaiViet</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->