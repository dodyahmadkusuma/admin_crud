 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?= base_url('admin/')?>">
            <i class="fa fa-dashboard"></i> <span>DashBoard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <ul class="treeview-menu">
            <li><a href="<?= base_url('/Admin/') ?>"><i class="fa fa-circle-o"></i>Dashboard</a></li>
            <li><a href="<?= base_url('/Admin/profile/') ?>"><i class="fa fa-circle-o"></i>Profile</a></li>
            </a>
            </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Post</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('/Admin/Post/') ?>"><i class="fa fa-circle-o"></i> All Post</a></li>
            <li><a href="<?= base_url('/Admin/Tambah/') ?>"><i class="fa fa-circle-o"></i> Add Post</a></li>
          </ul>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>