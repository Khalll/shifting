<?php
include('../config/conn.php');
$user_id = $_POST['user_id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$tahun_masuk = $_POST['tahun_masuk'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$sql = "UPDATE `user_detail` SET nama= '$nama', alamat= '$alamat', no_telp= '$no_telp' WHERE user_id= '$user_id'"; //cuma menulis sql berdasarkan data yang dilempar sebelumnya

$execute = mysqli_query($conn,$sql); //untuk eksekusi query di $sql
if($execute){
	
	$sql2 = "UPDATE `mhs` SET nim= '$nim', nama= '$nama', prodi= '$prodi', tahun_masuk= '$tahun_masuk' WHERE user_id= '$user_id'";
	$excute2 = mysqli_query($conn,$sql2);
	
	if($excute2){
		echo "<script> alert('DATA Edit Sukses'); window.location ='data_mahasiswa.php';</script>";
	}else{
		echo "<script> alert('Maaf, DATA telah tersedia'); history.back();</script>";
		
	}
	//echo "<script> alert('Penambahan Mahasiswa Baru Sukses'); history.back();</script>";
}else{
	echo "<script> alert('Maaf, username telah digunakan !!');  history.back();</script>";
}



?>