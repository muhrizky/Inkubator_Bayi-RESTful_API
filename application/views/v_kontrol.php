<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kontrol</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>MI</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ADMIN PANEL</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGASI
          <li>
            <a href="<?php echo base_url();?>index.php/beranda">
              <i class="fa fa-home"></i> <span>Beranda</span>
            </a>
          </li>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/monitoring">
            <i class="fa fa-line-chart"></i>
            <span>Monitoring</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/simulasi">
            <i class="fa fa-tachometer"></i> 
            <span>Simulasi</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="active">
          <a href="<?php echo base_url();?>index.php/kontrol">
            <i class="fa fa-wrench"></i>
            <span>Kontrol</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/data">
            <i class="fa fa-table"></i> <span>Data</span>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/login">
            <i class="fa fa-share"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kontrol
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kontrol</li>
      </ol>
    </section>

    <div class="col-md-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="glyphicon glyphicon-fire"></i>

              <h3 class="box-title">Pembakaran</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-danger">
                <center>
                <h4>Suhu Sementara</h4>

                <font size="50"><p>40</p></font>
                </center>
              </div>
              <div class="callout callout-info">
                <center>
                <h4>Suhu Target</h4>

                <font size="50"><p>400</p></font>
                </center>
                <div class="input-group margin">
                <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-warning btn-flat">Set Suhu</button>
                    </span>
              </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-calculator"></i>

              <h3 class="box-title"> Kalkulasi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p> Total Waktu Pembakaran </p>
              <p> Estimasi Waktu Selesai </p>
            </div>
            <!-- /.box-body -->
          </div>


      </div>

    <div class="col-md-6">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-power-off"></i> Kontrol Furnace</h3>
            </div>
            <div class="box-body table-responsive pad">
              <p>
                Manajemen HMI dan Furnace
              </p>

              <table class="table table-bordered">
                <tbody>
                <tr>
                  <th>Status Furnace</th>
                  <th>                    
                    <div class="btn-group">
                      <button type="button" class="btn btn-success"><i class="fa fa-square"></i> ON</button>
                      <button type="button" class="btn btn-danger disable">OFF <i class="fa fa-square-o"></i></button>
                    </div>
                  </th>
                </tr>


                <!-- /.danger -->
                <tr>
                  <th>
                    Alarm
                  </th>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-success"><i class="fa  fa-bell"> ON</i></button>
                      <button type="button" class="btn btn-danger disable">OFF <i class="fa  fa-bell-slash"></i></button>
                    </div>
                  </td>
                </tr>

                <tr>
                  <th>Pembakaran</th>
                  <th>              
                    <div class="btn-group">    
                      <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#modal_pembakaran_baru"><i class="fa fa-fire"></i> Mulai Pembakaran Baru
                      </button>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="modal_pembakaran_baru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Mulai Pembakaran Baru</h4>
                          </div>
                          <div class="modal-body">
                            
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-5 control-label">Nama Aktifitas</label>

                                <div class="col-sm-7">
                                  <input type="text" class="form-control" id="inputNama" placeholder="Nama Aktivitas">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">Suhu Target</label>

                                <div class="col-sm-7">
                                  <input type="number" class="form-control" id="inputSuhuTarget" placeholder="Suhu Target">
                                </div>
                              </div>


                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>


                    </div>
                  </th>
                </tr>
              </tbody></table>
            </div>
          </div>

    </div>
      <!-- /.col -->

  </div>
  <!-- /.content-wrapper -->


  <footer class="main-footer">
    <strong>2018 <a href="https://www.undip.ac.id">Universitas Diponegoro</a></strong>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/template/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url();?>assets/template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets/template/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/template/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/template/dist/js/demo.js"></script>
</body>
</html>
