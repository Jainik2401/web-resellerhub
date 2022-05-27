<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="<?php echo base_url();?>frontend/vendor/index"><img class="blur-up lazyloaded" src="<?php echo base_url();?>assets/images/dashboard/logo.png" alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle lazyloaded blur-up" src="<?php echo base_url();?>assets/images/dashboard/hv.png" alt="#">
            </div>
            <h6 class="mt-3 f-14">RESELLER-HUB</h6>
            <p>Vendor</p>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="<?php echo base_url();?>vendor/index"><i data-feather="home"></i><span>Dashboard</span></a></li>
            <li><a class="sidebar-header" href="#"><i data-feather="tag"></i><span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo base_url();?>vendor/add_product"><i class="fa fa-circle"></i>Add Product</a></li>
                    <li><a href="<?php echo base_url();?>vendor/list_product"><i class="fa fa-circle"></i>List Product</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="<?php echo base_url();?>vendor/user"><i data-feather="user-plus"></i><span>Customers</span></a></li>
            <li><a class="sidebar-header" href="<?php echo base_url();?>vendor/discount"><i data-feather="percent"></i><span>Discount</span></a></li>
            <li><a class="sidebar-header" href="<?php echo base_url();?>vendor/order"><i data-feather="archive"></i><span>Orders</span></a></li>
            <li><a class="sidebar-header" href="<?php echo base_url();?>vendor/setting"><i data-feather="settings"></i><span>Setting</span></a>
            </li>
        </ul>
    </div>
</div>
   