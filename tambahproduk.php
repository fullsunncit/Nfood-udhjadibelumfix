<?php 
session_start();
$username = $_SESSION['username'];
if(empty($_SESSION['username'])){
  header("location:signin.php?pesan=belum_login");
}
include 'admin.php';
require 'fungsi.php';
if (isset($_POST["tambah"])) {
	if(tambah($_POST) > 0) {
		echo "<script>
			alert('Data berhasil ditambahkan!');
			document.location.href = 'food.php';
			</script>";	
	}
	else {
		echo "<script>
			alert('error!');
			</script>";
		echo mysqli_error($conn);
	}	
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">		
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">	
</head>

<body>
<div id="content" class="p-5 p-md-5 pt-5">
	<div class="row">
		<div class="col-lg-12">
			<h1>TAMBAH DATA PRODUK </h1>
		</div>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>ID Nfood</label>
				<input type="hidden" name="idfood" id="idfood">
			</div>
			<div class="form-group">
				<label>Nama Produk</label>
				<input type="text" name="namafood" id="namafood" class="form-control bg-light" placeholder="Nama Produk" required>
			</div>
			<div class="form-group">
				<label>Jenis</label><br>
				<input type="text" name="jenis" id="jenis" class="form-control bg-light" placeholder="Jenis Produk" required>
			</div>
			<div class="form-group"><br>
				<label>Harga per pcs</label>
				<input type="text" name="harga" id="harga" class="form-control bg-light" placeholder="Harga" required>
			</div>
			<div class="form-group">
				<label>Foto Produk</label>
				<input type="file" name="foto" id="foto" class="form-control bg-light" placeholder="Foto Produk" required>
			</div>
			<div class="form-group">
				<input type="submit" name="tambah" id="tambah" value="Tambah" class="btn btn-primary" >
				<a href="food.php" class="btn btn-danger">Batal</a>
			</div>					
		</form>
	</div>
</div>
</body>
</html>