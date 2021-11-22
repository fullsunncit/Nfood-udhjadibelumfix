<?php 
session_start();
$username = $_SESSION['username'];
if(empty($_SESSION['username'])){
  header("location:index.php?pesan=belum_login");
}
include 'admin.php' ;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div id="content" class="p-4 p-md-5 pt-5" >
  <div class="welcome-message">
    <div class="wrap-info">
      <div class="information">
        <center><h1  class="animated fadeInDown">SELAMAT DATANG DI HALAMAN ADMIN!</h1></center> 
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
