<?php
include('../config/conn.php');
session_start();
$id_pengajuan = $_GET['id'];
$aksi = $_GET['act'];
$user_id = $_SESSION['user_id'];
$name = $_SESSION['nama'];

if ($aksi = '1') {
	//disetujui
  $sql = "UPDATE `pengajuan` SET status= '$aksi' WHERE id_pengajuan= '$id_pengajuan'";
  $execute = mysqli_query($conn,$sql);

		echo "<script> alert('Disetujui Sukses'); window.location ='cekdata.php';</script>";
	}else{
		echo "<script> alert('Maaf, DATA Ditolak'); history.back();</script>";
		
	}
?>