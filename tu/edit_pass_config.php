<?php
include('../config/conn.php');
$user_id = $_POST['user_id'];
$password = $_POST['password'];
$encrip = md5($password);

$sql = "UPDATE `user` SET password= '$encrip' WHERE user_id= '$user_id'"; 
echo "$sql";
$execute = mysqli_query($conn,$sql);

//untuk eksekusi query di $sql
	if($execute){
		echo "<script> alert('DATA Edit Sukses'); window.location ='data_mahasiswa.php';</script>";
	}else{
		echo "<script> alert('Maaf, username telah digunakan !!');  history.back();</script>";


}
?>