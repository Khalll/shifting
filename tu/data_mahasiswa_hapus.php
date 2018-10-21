<?php
include('../config/conn.php');
$id_user = $_GET['id'];

$sql = "DELETE FROM `user` WHERE `user_id` = $id_user"; //cuma menulis sql berdasarkan data yang dilempar sebelumnya
$execute = mysqli_query($conn,$sql); //untuk eksekusi query di $sql
if($execute){
  echo "<script> alert('Data Berhasil Di Hapus'); history.back();</script>";
  
  }else{
  echo "<script> alert('Data Tidak Berhasil Di Hapus'); history.back();</script>";
  }
?>