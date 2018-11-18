<!DOCTYPE html>

<?php

session_start();

?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jadwal Shifting|  Data Shifting</title>
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
  <style type="text/css">
    .container-border{
       border: 2px solid #ccc;
       border-radius: 1px;  
       padding-left: 20px;
       padding-right: 20px;
       padding-top: 10px;
       padding-bottom: 10px;
       }
  </style>
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
      <span class="logo-lg"><b>Jadwal</b> Shifting</span>
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
            <i class="fa fa-angle-double-down"></i> <span>Shifting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ajukanshifting.php"><i class="fa fa-book"></i> Ajukan Shifting</a></li>
            <li><a href="datashifting.php"><i class="fa fa-spinner"></i> Data Shifting</a></li>
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
    
       <h2 align="center"><b>Ajukan Shifting</b>
        <small></small>
      </h2>
      <?php
      include '../config/conn.php';
      $nim =  $_SESSION['nim'];
      $query = "SELECT * FROM mhs, prodi WHERE mhs.prodi = prodi.id AND mhs.nim = '".$nim."'";
      $execute = mysqli_query($conn,$query);
      $data = mysqli_fetch_array($execute);
      $nama = $data['nama'];
      $nama_prodi = $data['nama_prodi'];
      ?>
      <b>NIM</b>
      <input type="" class="form-control" name="nim" value= "<?php echo $nim;?>" readonly>

       <b>NAMA</b>
      <input type="" class="form-control" name="nama" value= "<?php echo $nama;?>" readonly >

       <b>PROGRAM STUDI</b>
      <input type="" class="form-control" name="prodi" value= "<?php echo $nama_prodi;?>" readonly > <br>
    </section>





    <!-- Main content -->
    <section class="content">
       <h2 align="center"><b>Jadwal Shift</b></h2>
       <form action="edit_shifting_conf.php" method="post">
         
       
       <!---------------------------------------- -->

       <b>Minggu 1</b>
      <div class="container-border" id="minggu1">
        <div class="row">
          <div class="col-md-3"> Tanggal Awal <input type="date" class="form-control" name="tgl1_m1[]" placeholder="date"> </div>
          <div class="col-md-3"> Tanggal Akhir <input type="date" class="form-control" name="tgl2_m1[]" placeholder="date"> </div>
          <div class="col-md-3"> Jadwal <select class="form-control" name="jadwal_m1[]" required="">
            <option value=""> </option>
            <option value="pagi"> Shift Pagi</option>
            <option value="malam"> Shift Malam</option>
          </select>
        </div>
        <div class="col-md-3">
          Option
          <br><button type="button" id="btn_row1" onclick="tambahrow1()" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Tanggal  </button>
        </div>
        </div>
      </div>

      <script type="text/javascript">
          var m1=1;
          function tambahrow1(){
              
              $("#minggu1").append('<div id="m1-'+m1+'" class="row"><div class="col-md-3"> Tanggal Awal <input type="date" class="form-control" name="tgl1_m1[]" placeholder="date"></div><div class="col-md-3"> Tanggal Akhir <input type="date" class="form-control" name="tgl2_m1[]" placeholder="date"></div><div class="col-md-3"> Jadwal <select class="form-control" name="jadwal_m1[]"><option value=""></option><option value="pagi"> Shift Pagi</option><option value="malam"> Shift Malam</option></select></div><div class="col-md-1">Option <button class="btn btn-warning" onclick="hapusrow1('+m1+')"  ><i class="fa fa-minus"> </i> Hapus  </button></div></div>');
              m1++;
          }

          function hapusrow1(id){
              var idrow = id;
              var parent = document.getElementById("minggu1");
              var child = document.getElementById("m1-"+idrow);
              parent.removeChild(child);
          }

      </script>

      <!---------------------------------------------- -->

  <b>Minggu 2</b>
      <div class="container-border" id="minggu2">
        <div class="row">
          <div class="col-md-3"> Tanggal Awal <input type="date" class="form-control" name="tgl1_m2[]" placeholder="date"> </div>
          <div class="col-md-3"> Tanggal Akhir <input type="date" class="form-control" name="tgl2_m2[]" placeholder="date"> </div>
          <div class="col-md-3"> Jadwal <select class="form-control" name="jadwal_m2[]" required="">
            <option value=""> </option>
            <option value="pagi"> Shift Pagi</option>
            <option value="malam"> Shift Malam</option>
          </select>
        </div>
        <div class="col-md-3">
          Option
          <br><button type="button" id="btn_row1" onclick="tambahrow2()" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Tanggal  </button>
        </div>
        </div>
      </div>

      <script type="text/javascript">
          var m2=1;
          function tambahrow2(){
              
              $("#minggu2").append('<div id="m2-'+m2+'" class="row"><div class="col-md-3"> Tanggal Awal <input type="date" class="form-control" name="tgl1_m2[]" placeholder="date"></div><div class="col-md-3"> Tanggal Akhir <input type="date" class="form-control" name="tgl2_m2[]" placeholder="date"></div><div class="col-md-3"> Jadwal <select class="form-control" name="jadwal_m2[]"><option value=""></option><option value="pagi"> Shift Pagi</option><option value="malam"> Shift Malam</option></select></div><div class="col-md-1">Option <button class="btn btn-warning" onclick="hapusrow2('+m2+')"  ><i class="fa fa-minus"> </i> Hapus  </button></div></div>');
              m2++;
          }

          function hapusrow2(id){
              var idrow = id;
              var parent = document.getElementById("minggu2");
              var child = document.getElementById("m2-"+idrow);
              parent.removeChild(child);
          }

      </script>

       
       <b>Minggu 3</b>
      <div class="container-border" id="minggu3">
        <div class="row">
          <div class="col-md-3"> Tanggal Awal <input type="date" class="form-control" name="tgl1_m3[]" placeholder="date"> </div>
          <div class="col-md-3"> Tanggal Akhir <input type="date" class="form-control" name="tgl2_m3[]" placeholder="date"> </div>
          <div class="col-md-3"> Jadwal <select class="form-control" name="jadwal_m3[] required">
            <option value=""> </option>
            <option value="pagi"> Shift Pagi</option>
            <option value="malam"> Shift Malam</option>
          </select>
        </div>
        <div class="col-md-3">
          Option
          <br><button type="button" id="btn_row1" onclick="tambahrow3()" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Tanggal  </button>
        </div>
        </div>
      </div>

      <script type="text/javascript">
          var m3=1;
          function tambahrow3(){
              
              $("#minggu3").append('<div id="m3-'+m3+'" class="row"><div class="col-md-3"> Tanggal Awal <input type="date" class="form-control" name="tgl1_m3[]" placeholder="date"></div><div class="col-md-3"> Tanggal Akhir <input type="date" class="form-control" name="tgl2_m3[]" placeholder="date"></div><div class="col-md-3"> Jadwal <select class="form-control" name="jadwal_m3[]"><option value=""></option><option value="pagi"> Shift Pagi</option><option value="malam"> Shift Malam</option></select></div><div class="col-md-1">Option <button class="btn btn-warning" onclick="hapusrow3('+m3+')"  ><i class="fa fa-minus"> </i> Hapus  </button></div></div>');
              m3++;
          }

          function hapusrow3(id){
              var idrow = id;
              var parent = document.getElementById("minggu3");
              var child = document.getElementById("m3-"+idrow);
              parent.removeChild(child);
          }

      </script>

       <b>Minggu 4</b>
     <div class="container-border" id="minggu4">
        <div class="row">
          <div class="col-md-3"> Tanggal Awal <input type="date" class="form-control" name="tgl1_m4[]" placeholder="date"> </div>
          <div class="col-md-3"> Tanggal Akhir <input type="date" class="form-control" name="tgl2_m4[]" placeholder="date"> </div>
          <div class="col-md-3"> Jadwal <select class="form-control" name="jadwal_m4[] required">
            <option value=""> </option>
            <option value="pagi"> Shift Pagi</option>
            <option value="malam"> Shift Malam</option>
          </select>
        </div>
        <div class="col-md-3">
          Option
          <br><button type="button" id="btn_row1" onclick="tambahrow4()" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Tanggal  </button>
        </div>
        </div>
      </div>

      <script type="text/javascript">
          var m4=1;
          function tambahrow4(){
              
              $("#minggu4").append('<div id="m4-'+m4+'" class="row"><div class="col-md-3"> Tanggal Awal <input type="date" class="form-control" name="tgl1_m4[]" placeholder="date"></div><div class="col-md-3"> Tanggal Akhir <input type="date" class="form-control" name="tgl2_m4[]" placeholder="date"></div><div class="col-md-3"> Jadwal <select class="form-control" name="jadwal_m4[]"><option value=""></option><option value="pagi"> Shift Pagi</option><option value="malam"> Shift Malam</option></select></div><div class="col-md-1">Option <button class="btn btn-warning" onclick="hapusrow4('+m4+')"  ><i class="fa fa-minus"> </i> Hapus  </button></div></div>');
              m4++;
          }

          function hapusrow4(id){
              var idrow = id;
              var parent = document.getElementById("minggu4");
              var child = document.getElementById("m4-"+idrow);
              parent.removeChild(child);
          }

      </script>

       <b>Minggu 5</b>
     <div class="container-border" id="minggu5">
        <div class="row">
          <div class="col-md-3"> Tanggal Awal <input type="date" class="form-control" name="tgl1_m5[]" placeholder="date"> </div>
          <div class="col-md-3"> Tanggal Akhir <input type="date" class="form-control" name="tgl2_m5[]" placeholder="date"> </div>
          <div class="col-md-3"> Jadwal <select class="form-control" name="jadwal_m5[] required">
            <option value=""> </option>
            <option value="pagi"> Shift Pagi</option>
            <option value="malam"> Shift Malam</option>
          </select>
        </div>
        <div class="col-md-3">
          Option
          <br><button id="btn_row1" type="button" onclick="tambahrow5()" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Tanggal  </button>
        </div>
        </div>
      </div>

      <script type="text/javascript">
          var m5=1;
          function tambahrow5(){
              
              $("#minggu5").append('<div id="m5-'+m5+'" class="row"><div class="col-md-3"> Tanggal Awal <input type="date" class="form-control" name="tgl1_m5[]" placeholder="date"></div><div class="col-md-3"> Tanggal Akhir <input type="date" class="form-control" name="tgl2_m5[]" placeholder="date"></div><div class="col-md-3"> Jadwal <select class="form-control" name="jadwal_m5[]"><option value=""></option><option value="pagi"> Shift Pagi</option><option value="malam"> Shift Malam</option></select></div><div class="col-md-1">Option <button class="btn btn-warning" onclick="hapusrow5('+m5+')"  ><i class="fa fa-minus"> </i> Hapus  </button></div></div>');
              m5++;
          }

          function hapusrow5(id){
              var idrow = id;
              var parent = document.getElementById("minggu5");
              var child = document.getElementById("m5-"+idrow);
              parent.removeChild(child);
          }

      </script>
      
      <br>
      <button type="submit" class="btn btn-success btn-block">Ajukan Shifting</button>
</form>
     </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Proyek Akhir 1</b>  
    </div>
    <strong>Copyright &copy; 2018-2019 </strong>
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
