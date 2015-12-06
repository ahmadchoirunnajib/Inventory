<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url();?>assets/images/avatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Selamat Datang, <br/><?php echo $user['nama'];?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">PILIHAN MENU</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('dashboard/barang');?>"><i class="fa fa-circle-o"></i> Tambahkan Barang</a></li>
                <li><a href="<?php echo base_url('dashboard/transaksi');?>"><i class="fa fa-circle-o"></i> Tambahkan Transaksi</a></li>
              </ul>
            </li>
            <!--
            <li class="treeview">
              <a href="<?php echo base_url('dashboard/lihatbarang');?>">
                <i class="fa fa-files-o"></i>
                <span>Lihat Stok Barang</span>
                 <span class="label label-primary pull-right">4</span> 
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url('dashboard/lihattransaksi');?>">
                <i class="fa fa-book"></i>
                <span>Rekapitulasi Transaksi</span>
              </a>
            </li>

            
            <li class="header">Akun</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Pengaturan</span></a></li>
            -->
            <li><a href="<?php echo base_url('dashboard/logout');?>"><i class="fa fa-circle-o text-yellow"></i> <span>Log out</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
</aside>