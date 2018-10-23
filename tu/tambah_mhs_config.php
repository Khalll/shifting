<?php
include('../config/conn.php');
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$tahun_masuk = $_POST['tahun_masuk'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$username = $_POST['username'];
$password = $_POST['password'];
$encrip = md5($password);

$sql = "INSERT INTO `user` ( `username`, `password`, `hak_akses`) VALUES ('$username','$encrip' ,
'mhs');"; 
$execute = mysqli_query($conn,$sql);
if($execute){
	$user_id = mysqli_insert_id($conn);
	$sql2 = "INSERT INTO `mhs` (`nim`, `nama`, `prodi`, `tahun_masuk`, `user_id`) VALUES ('$nim', '$nama', '$prodi', '$tahun_masuk', '$user_id')";
	$excute2 = mysqli_query($conn,$sql2);

	$sql3 = "INSERT INTO `user_detail` (`user_id`,`nama`,`alamat`,`no_telp`) VALUES ('$user_id','$nama','$alamat','$no_telp')";
	$excute3 = mysqli_query($conn,$sql3);

	if($excute2 and $excute3){
		echo "<script> alert('Penambahan Mahasiswa Baru Sukses'); window.location ='data_mahasiswa.php';</script>";
	}
}else{
	$sql3 = "delete from user where user_id = $user_id";
	$excute3 = mysqli_query($conn,$sql3);
		echo "<script> alert('Maaf, NIM telah tersedia'); history.back();</script>";
}

?>