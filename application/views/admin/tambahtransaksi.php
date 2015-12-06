<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambahkan Transaksi - SI Indobayi</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    	<header class="main-header">
        <!-- Logo -->
	        <a href="<?php echo base_url('dashboard');?>" class="logo">
	          <!-- mini logo for sidebar mini 50x50 pixels -->
	          <span class="logo-mini"><b>ID</b>BY</span>
	          <!-- logo for regular state and mobile devices -->
	          <span class="logo-lg"><b>SI Indobayi</b></span>
	        </a>
	        <!-- Header Navbar: style can be found in header.less -->
	        <nav class="navbar navbar-static-top" role="navigation">
	          <!-- Sidebar toggle button-->
	          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
	            <span class="sr-only">Toggle navigation</span>
	          </a>
	          <div class="navbar-custom-menu">
	            <ul class="nav navbar-nav">
	              
	              <!-- User Account: style can be found in dropdown.less -->
	              <li class="dropdown user user-menu">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	                  <img src="<?php echo base_url();?>assets/images/avatar160x160.jpg" class="user-image" alt="User Image">
	                  <span class="hidden-xs">Selamat Datang, <?php echo $user['nama'];?></span>
	                </a>
	                <ul class="dropdown-menu" role="menu">
	                  <!-- User image -->
	                  <li class="user-header">
	                    <img src="<?php echo base_url();?>assets/images/avatar.png" class="img-circle" alt="User Image">
	                    <p>
	                      <small><?php echo $user['username'];?> sebagai <?php echo $user['nama'];?></small>
	                    </p>
	                  </li>

	                  <!--
	                  <li class="user-body">
	                    <div class="col-xs-4 text-center">
	                      <a href="#">Followers</a>
	                    </div>
	                    <div class="col-xs-4 text-center">
	                      <a href="#">Sales</a>
	                    </div>
	                    <div class="col-xs-4 text-center">
	                      <a href="#">Friends</a>
	                    </div>
	                  </li>
	                  -->
	                  <!-- Menu Footer-->
	                  <li class="user-footer">
	                    <div class="pull-left">
	                      <a href="#" class="btn btn-default btn-flat">Profile</a>
	                    </div>
	                    <div class="pull-right">
	                      <a href="<?php echo base_url('dashboard/logout');?>" class="btn btn-default btn-flat">Sign out</a>
	                    </div>
	                  </li>
	                </ul>
	               </li>
	            </ul>
	          </div>
	        </nav>
      </header> 

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
                <li><a href="<?php echo base_url('dashboard/tambahbarang');?>"><i class="fa fa-circle-o"></i> Tambahkan Barang</a></li>
                <li class="active"><a href="<?php echo base_url('dashboard/tambahtransaksi');?>"><i class="fa fa-circle-o"></i> Tambahkan Transaksi</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url('dashboard/lihatbarang');?>">
                <i class="fa fa-files-o"></i>
                <span>Lihat Stok Barang</span>
                <!-- <span class="label label-primary pull-right">4</span> -->
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
            <li><a href="<?php echo base_url('dashboard/logout');?>"><i class="fa fa-circle-o text-yellow"></i> <span>Log out</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambahkan Transaksi</li>
          </ol>
        </section>
 
        <!-- Main content -->
        <section class="content">
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambahkan Transaksi</h3>
                </div><!-- /.box-header -->
                <?=$this->session->flashdata('pesan')?>

                <?php echo validation_errors(); ?>

                <!-- form start -->

                <?php echo form_open_multipart('TambahkanData/tambahtransaksi');?>
                  <div class="box-body">
                      <div class="row">
                        <div class="col-xs-3">
                            <label>Tanggal
                            </label>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control" placeholder="<?php echo date("d/m/Y"); ?>" disabled="">
                            </div><!-- /.input group -->
                        </div>
                        <div class="col-xs-4">
                          <label>Nama Pembeli</label>
                          <input type="text" name="namaPembeli" class="form-control" placeholder="Nama Pembeli">
                        </div>
                        <div class="col-xs-5">
                          <label>Nama Penerima</label>
                          <input type="text" name="namaPenerima" class="form-control" placeholder="Nama Penerima">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-7">
                          <label>Alamat</label>
                          <input type="text" name="alamat" class="form-control" placeholder="Alamat Penerima">
                        </div>
                        <div class="col-xs-2">
                          <label>No HP</label>
                          <input type="text" name="no_hp" class="form-control" placeholder="No HP Pemesan">
                        </div>
                        <div class="col-xs-3">
                          <label>Jenis Transaksi</label>
                          <input type="text" name="jenisTransaksi" class="form-control" placeholder="Jenis Transaksi">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-7">
                          <label>Nama Barang</label>
                          <input type="text" id="autocomplete" name="namaBarang" class="form-control" placeholder="Barang yang di Pesan">
                        </div>
                        <div class="col-xs-2">
                          <label>Jumlah</label>
                          <input type="text" name="jumlahBarang" class="form-control" placeholder="Jumlah Barang">
                        </div>
                        <div class="col-xs-3">
                          <label>Total</label>
                          <input type="text" name="total" class="form-control" placeholder="Jumlah Total">
                        </div>
                      </div>
                      <!--
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="form-group">
                            <label for="exampleInputFile">Upload Gambar Barang</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Upload gambar disini..</p>
                          </div>
                        </div>
                      </div>
                      -->
                       
                  </div><!-- /.box-body -->


                  <div class="box-footer">
                    <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
                  
        </section>



    </div>

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>assets/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    

    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>

    <script>
	  var AdminLTEOptions = {
	    //Enable sidebar expand on hover effect for sidebar mini
	    //This option is forced to true if both the fixed layout and sidebar mini
	    //are used together
	    sidebarExpandOnHover: true,
	    //BoxRefresh Plugin
	    enableBoxRefresh: true,
	    //Bootstrap.js tooltip
	    enableBSToppltip: true
	  };

      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }


      }

	</script>

  <script type="text/javascript">
    // <![CDATA[
    $(document).ready(function () {
        $(function () {
            $( '#autocomplete' ).autocomplete({
                source: function(request, response) {
                    $.ajax({ 
                        url: '<?php echo site_url('dashboard/suggestions'); ?>',
                        data: { namaBarang: $('#autocomplete').val()},
                        dataType: 'json',
                        type: 'POST',
                        success: function(data){
                            response(data);
                        }    
                    });
                },
            });
        });
    });
    // ]]>
    </script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url();?>assets/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url();?>assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url();?>assets/admin/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url();?>assets/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url();?>assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/admin/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>assets/admin/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url();?>assets/admin/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>assets/admin/dist/js/demo.js"></script>
  </body>
</html>

