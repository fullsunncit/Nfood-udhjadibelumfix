<?php
session_start();
$username = $_SESSION['username'];
if(empty($_SESSION['username'])){
  header("location:index.php?pesan=belum_login");
}
include 'fungsi.php';
//akun
if(isset($_POST['iduser'])){
	$idmember = $_POST['iduser'];
	$SQL = mysqli_query($conn,"DELETE FROM akun WHERE id='$idmember'");
	if($SQL){
		header("location:user.php");
	}
	else{
		echo "Data Gagal Dihapus";
	}
}
//food
else if(isset($_POST['idfood'])){
	$idfood = $_POST['idfood'];
	$SQL = mysqli_query($conn,"DELETE FROM foodpa1 WHERE idfood='$idfood'");
	if($SQL){
		header("location:food.php");
	}
	else{
		echo "Data Gagal Dihapus";
	}
}
else if(isset($_POST['idpesan'])){
	$idpesan = $_POST['idpesan'];
	$SQL = mysqli_query($conn,"DELETE FROM pesanan WHERE idpesan='$idpesan'");
	if($SQL){
		header("location:datapesanan.php");
	}
	else{
		echo "Data Gagal Dihapus";
	}
}	
?>