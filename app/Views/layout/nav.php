 <!-- Left side column. contains the sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('foto/'.session()->get('foto_user'))?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= session()->get('full_name')?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php if (session()->get('level') == 1) {
            echo 'Admin';
          }else if (session()->get('level') == 2){
            echo 'Pegawai';
          }
          ?></a>
        </div>
      </div>
      <!-- search form -->
   
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?= base_url('home') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
        <?php if (session()->get('level')== 1) { ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('items') ?>"><i class="fa fa-circle-o"></i> Item</a></li>
            <li><a href="<?= base_url('costumer') ?>"><i class="fa fa-circle-o"></i> Costumer</a></li>
            <li><a href="<?= base_url('order') ?>"><i class="fa fa-circle-o"></i> Order</a></li>
          </ul>
        </li>
        <?php } ?>
        

        <?php if (session()->get('level')== 2) { ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a href="<?= base_url('order_detail') ?>"><i class="fa fa-circle-o"></i> Order</a></li>
           
          </ul>
        </li>
        <?php } ?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <?= $title ?>
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= $title ?></li>
      </ol>
    </section>

     <!-- Main content -->
     <section class="content">
