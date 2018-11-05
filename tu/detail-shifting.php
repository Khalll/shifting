<!DOCTYPE html>

<?php

session_start();

?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jadwal Shifting|  Detail Shifting</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>J</b> S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Detail</b> Shifting</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
         
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../assets/image/foto.png" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php
                echo $_SESSION['nama'];

                ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../assets/image/foto.png" class="img-circle" alt="User Image">

                <p> <?php
                echo $_SESSION['nama'];

                ?></p>
                 
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="../config/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../assets/image/foto.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php
                echo $_SESSION['nama'];

                ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
     
   
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

 <li class="">
          <a href="index.php">
            <i class="fa fa-home"></i>
            <span>Beranda</span>
           
          </a>
         
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-angle-double-down"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="cekdata.php"><i class="fa fa-book -text"></i> Check Data</a></li>
            <li><a href="data_mahasiswa.php"><i class="fa fa-spinner"></i>Data Mahasiswa</a></li>
          </ul>
        </li>


       


        
       
       
           
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
        <h2 align="center"><b>Detail Shifting</b>
         
        
      </h2>
      
    </section>

    <!-- Main content -->
    <section class="content">
         <table class="table table-hover table-striped table-bordered">
        <tr>
          <th width="5%"> No </th>
           <th width="20%"> Minggu </th>
          <th width="20%"> Tanggal Awal</th>
          <th width="20%"> Tanggal Akhir</th>
          <th width="20%"> Jadwal Shift</th>
        </tr>

        <?php
        include '../config/conn.php';
        $id = $_GET['id'];
        $queryx = "select * from Pengajuan where id_pengajuan = $id";
        $executex =  mysqli_query($conn, $queryx);
        $datax = mysqli_fetch_array($executex);
        $status = $datax['status'];

        $query = "select * from jadwal_shifting where id_pengajuan = $id";
        $execute =  mysqli_query($conn, $query);
        $no = 1;
        while ( $data = mysqli_fetch_array($execute)) { $id_pengajuan = $data['id_pengajuan']; ?>  
        
        <tr>
          <td><?php echo $no; ?></td>
          
          <td> 
          <?php 
          $minggu  = $data['minggu']; 
          echo(($minggu));
          ?>
          </td>

           <td> 
          <?php 
          $tanggalawal = $data['tanggal_1']; 
          echo(($tanggalawal));
          ?> 
        </td>
        <td>
        <?php 
          $tanggalakhir = $data['tanggal_2']; 
          echo(($tanggalakhir));
          ?> 
       </td>

       <td>
         <?php
         $jadwalshift = $data['jadwal'];
         echo(($jadwalshift));
         ?>
       </td>
       
        </tr>
       <?php $no++; } ?>
       </table>
      </section>

        <!-- <form action="detail_shifting_setuju_config.php" method="post"> -->
         <div align="center">
          <?php 
          if(!empty($_GET['status'])){
            $status = 'edit';
          }
          if($status=='0' || $status=='edit'){ ?>
              <a href="penyetujuan_shifting.php?id=<?php echo $_GET['id'];?>&act=1" type="button" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Disetujui</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="fa fa-close fa-fw" > </i>Ditolak</button>
          <?php }else{ ?>
            <a href="detail-shifting.php?id=<?php echo $_GET['id'];?>&status=edit" type="button" class="btn btn-info"><i class="fa fa-pencil fa-fw"></i>Edit</a>
          <?php } ?>
           
        </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Alasan Ditolak</h4>
          </div>
          <div class="modal-body">
            <form action="penolakan_shifting.php" method="get">
            <input style="display: none;" type="text" name="id" class="form-control" value="<?php echo $_GET['id']; ?>" readonly>
            <input style="display: none;" type="text" name="act" class="form-control" value="2" readonly>
            <textarea name="comment" class="form-control" required=""></textarea>
            <br>
            <br>
            <div align="center">            
           <button type="submit" class="btn btn-danger">Tolak Pengajuan</button>
            </div>
          </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          </div>
        </div>

      </div>
    </div>


     
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Proyek Akhir 1</b>  
    </div>
    <strong>Copyright &copy; 2018-2019</strong>
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
