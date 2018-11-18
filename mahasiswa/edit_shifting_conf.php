<?php
include '../config/conn.php';
session_start();

$nim =  $_SESSION['nim'];
$tgl1_m1 = $_POST['tgl1_m1'];
$tgl2_m1 = $_POST['tgl2_m1'];

$tgl1_m2 = $_POST['tgl1_m2'];
$tgl2_m2 = $_POST['tgl2_m2'];

$tgl1_m3 = $_POST['tgl1_m3'];
$tgl2_m3 = $_POST['tgl2_m3'];

$tgl1_m4 = $_POST['tgl1_m4'];
$tgl2_m4 = $_POST['tgl2_m4'];

$tgl1_m5 = $_POST['tgl1_m5'];
$tgl2_m5 = $_POST['tgl2_m5'];

$jadwal_m1 = $_POST['jadwal_m1'];

$jadwal_m2 = $_POST['jadwal_m2'];

$jadwal_m3 = $_POST['jadwal_m3'];

$jadwal_m4 = $_POST['jadwal_m4'];

$jadwal_m5 = $_POST['jadwal_m5'];

$id_pengajuan = '';

// Adding data to Pengajuan table
$query = "INSERT INTO `pengajuan`(`nim`, `status`) VALUES ('".$nim."',0)";
$execute = mysqli_query($conn,$query);


if($execute){
	$sql = "SELECT id_pengajuan FROM pengajuan WHERE nim = '".$nim."' ORDER BY tanggal DESC LIMIT 1";
	
	$execute = mysqli_query($conn,$sql);
  	$data = mysqli_fetch_array($execute);
  	$id_pengajuan = $data['id_pengajuan'];
}



for ($i=0; $i < count($tgl1_m1); $i++) { 
	$sql1 = "UPDATE `jadwal_shifting`(`id_pengajuan`, `minggu`, `tanggal_1`, `tanggal_2`, `jadwal`) VALUES ('".$id_pengajuan."',1,'".$tgl1_m1[$i]."','".$tgl2_m1[$i]."','".$jadwal_m1[$i]."')";
	$execute = mysqli_query($conn,$sql1);
	
	//$data = mysqli_fetch_array($execute);
}

for ($i=0; $i < count($tgl1_m2); $i++) { 
	$sql1 = "UPDATE `jadwal_shifting`(`id_pengajuan`, `minggu`, `tanggal_1`, `tanggal_2`, `jadwal`) VALUES ('".$id_pengajuan."',2,'".$tgl1_m2[$i]."','".$tgl2_m2[$i]."','".$jadwal_m2[$i]."')";
	$execute = mysqli_query($conn,$sql1);
	

}

for ($i=0; $i < count($tgl1_m3); $i++) { 
	$sql1 = "UPDATE `jadwal_shifting`(`id_pengajuan`, `minggu`, `tanggal_1`, `tanggal_2`, `jadwal`) VALUES ('".$id_pengajuan."',3,'".$tgl1_m3[$i]."','".$tgl2_m3[$i]."','".$jadwal_m3[$i]."')";
	$execute = mysqli_query($conn,$sql1);

	

}

for ($i=0; $i < count($tgl1_m4); $i++) { 
	$sql1 = "UPDATE `jadwal_shifting`(`id_pengajuan`, `minggu`, `tanggal_1`, `tanggal_2`, `jadwal`) VALUES ('".$id_pengajuan."',4,'".$tgl1_m4[$i]."','".$tgl2_m4[$i]."','".$jadwal_m4[$i]."')";
	$execute = mysqli_query($conn,$sql1);
	if ($execute) {
		echo "<script> window.location='datashifting.php'; </script>";


}

}

for ($i=0; $i < count($tgl1_m5); $i++) { 
	$sql1 = "UPDATE `jadwal_shifting`(`id_pengajuan`, `minggu`, `tanggal_1`, `tanggal_2`, `jadwal`) VALUES ('".$id_pengajuan."',5,'".$tgl1_m5[$i]."','".$tgl2_m5[$i]."','".$jadwal_m5[$i]."')";
	$execute = mysqli_query($conn,$sql1);
	if ($execute) {
		echo "<script> window.location='datashifting.php'; </script>";


}

}

?>