<!-- Dashboard -->

<!DOCTYPE html>
<html lang="id">
<title>Pengajuan Shifting Log-in</title>
<head>
     <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">   <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- Logo Dashboard -->

<script type="text/javascript">
var uid = '192862';
var wid = '413547';
</script>
<script type="text/javascript" src="//cdn.popcash.net/pop.js"></script>

<meta name="propeller" content="fd29b62dcdf1ab887c02bb0d89181079">

</head>
<style type="text/css">
    body, html {
    height: 100%;
}


.bg { 
    /* The image used */
    background-image: url("assets/image/logo.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<body background="" class="hold-transition  fixed sidebar-mini bg">
<div class="wrapper">
            <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    
<br \>
<br \>
<br \>
<br \>
<br \>


<!-- Form Log-in -->
<div class="login-logo">
    <b>Jadwal Shifting Log-In</b></a>
</div>

<div class="login-box-body">
    <form action="" method="POST">
        <div class="form-group">
        <label >Username</label>
        <input  class="form-control" name="username"  placeholder="Masukan Username">
        </div>
        <div class="form-group">
        <label >Password</label>
        <input type="password" name="password"  class="form-control"  placeholder="Masukan Password">
        </div>
        <div align="center"> <button name="btnlogin" type="submit" class="btn btn-info"> Login </button> </div>
        
    </form>
   
<br \>

<p align="center">Proyek Akhir 1</p>

</div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>



<?php
  session_start();
  include 'config/conn.php';
  if(ISSET($_POST['btnlogin'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];


    // Mulai Fungsi Log-in 
    $query = "select * from user where username='".$username."' AND password ='".md5($password)."'";


    $execute = mysqli_query($conn, $query);
    $num = mysqli_num_rows($execute);

    if($num>0){
      $data = mysqli_fetch_array($execute);
      $user_id = $data['user_id'];
      $hak_akses = $data['hak_akses'];

      if ( $hak_akses == "mhs") {
        $query2 = "select * from mhs where user_id='".$user_id."'";
        // $query3 = "select * from prodi where jurusan='".$user_id."'";
        $execute2 = mysqli_query($conn, $query2);
        $data2 = mysqli_fetch_array($execute2);
        // $execute3 = mysqli_query($conn, $query3);
        // $data3 = mysqli_fetch_array($execute3);
        $_SESSION['nama'] = $data2['nama'];
         $_SESSION['nim'] = $data2['nim'];
         
          //$_SESSION['prodi'] = $data2['prodi'];

        echo "<script> window.location='mahasiswa/'; </script>";


      }elseif ($hak_akses == "TU") {
        $query3 = "select * from user_detail where user_id='".$user_id."'";
        $execute3 = mysqli_query($conn,$query3);
        $data3 = mysqli_fetch_array($execute3);
        $_SESSION['nama'] = $data3['nama'];
        $_SESSION['user_id'] = $data3['user_id'];
        echo"<script> window.location='tu/'; </script>";

        
      } elseif ($hak_akses == "SU") {
        echo "<script> alert ('halaman SU belum dibuat'); </script>";
      }

    }else{
      echo "<script> alert ('Login Gagal'); </script>";
    }

  }




?>

</body>
</html>
