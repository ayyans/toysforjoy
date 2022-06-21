 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Toy4Joy</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('admin.dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Nav Item - Pages Collapse Menu -->


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-user"></i>
        <span>Customers</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">           
            <a class="collapse-item" href="{{route('admin.customer')}}">Customers</a>
           
        </div>
    </div>
</li>



<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryUtility"
        aria-expanded="true" aria-controls="categoryUtility">
        <i class="fas fa-fw fa-list"></i>
        <span>Categories</span>
    </a>
    <div id="categoryUtility" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">           
            <a class="collapse-item" href="{{route('admin.categories')}}">Category</a>
            <a class="collapse-item" href="{{route('admin.subcategories')}}">Subcategory</a>
            
        </div>
    </div>
</li>
<hr class="sidebar-divider">


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brandsUtility"
        aria-expanded="true" aria-controls="brandsUtility">
        <i class="fas fa-fw fa-list"></i>
        <span>Brands</span>
    </a>
    <div id="brandsUtility" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">           
            <a class="collapse-item" href="{{route('admin.brands')}}">Add Brands</a>
            <a class="collapse-item" href="{{route('admin.brands')}}">List Brands</a>
            
        </div>
    </div>
</li>
<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productUtility"
        aria-expanded="true" aria-controls="productUtility">
        <i class="fas fa-fw fa-shopping-cart"></i>
        <span>Products</span>
    </a>
    <div id="productUtility" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">      
          
            <a class="collapse-item" href="{{route('admin.addproducts')}}">Add products</a>
            <a class="collapse-item" href="{{route('admin.products')}}">List of products</a>
            <a class="collapse-item" href="{{route('admin.atribute')}}">Attribute</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ordersUtility"
        aria-expanded="true" aria-controls="ordersUtility">
        <i class="fas fa-fw fa-shopping-bag"></i>
        <span>Orders</span>
    </a>
    <div id="ordersUtility" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">           
            <a class="collapse-item" href="{{route('admin.guestOrders')}}">Guest Orders</a>
            <a class="collapse-item" href="{{route('admin.custOrders')}}">Orders</a>
           
        </div>
    </div>
</li>

<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#couponsUtility"
        aria-expanded="true" aria-controls="couponsUtility">
        <i class="fas fa-fw fa-shopping-bag"></i>
        <span>Coupons</span>
    </a>
    <div id="couponsUtility" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">           
            <a class="collapse-item" href="{{route('admin.coupon')}}">Coupon List</a>
           
        </div>
    </div>
</li>
<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaction"
        aria-expanded="true" aria-controls="transaction">
        <i class="fas fa-fw fa-dollar-sign"></i>
        <span>Transaction</span>
    </a>
    <div id="transaction" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">           
            <a class="collapse-item" href="javascript:void(0)">Category</a>
            <a class="collapse-item" href="javascript:void(0)">Subcategory</a>
            <a class="collapse-item" href="javascript:void(0)">Add products</a>
            <a class="collapse-item" href="javascript:void(0)">List of products</a>
        </div>
    </div>
</li>

<hr class="sidebar-divider">


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>
<!-- End of Sidebar -->