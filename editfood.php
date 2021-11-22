<?php 
session_start();
$username = $_SESSION['username'];
if(empty($_SESSION['username'])){
    header("location:index.php?pesan=belum_login");
}
include 'admin.php';
require 'fungsi.php';
if (isset($_POST["ubah"])) {
	if(ubah($_POST) > 0) {
		echo "<script>
			alert('Data berhasil diubah!');
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
			<h1>EDIT DATA PRODUK </h1>
		</div> 
        <?php
            $idfood = $_GET['idfood'];
            $db = mysqli_query($conn," SELECT * FROM food WHERE idfood='$idfood'");
            while($hasil = mysqli_fetch_array($db))
            {
		?> 
				<form action="" method="post" enctype="multipart/form-data">
					<input type="hidden" name="fotolama" value="<?php echo $hasil['foto'];?>">
					<div class="form-group">
						<label>ID PRODUK</label><br>
						<input type="hidden" name="idfood" value="<?php echo $hasil['idfood'];?>">
					</div>
					<div class="form-group">
						<label>Nama Produk</label><br>
						<input type="text" name="namafood" value="<?php echo $hasil['namafood'];?>">
					</div>
					<div class="form-group">
						<label>Jenis</label><br>
						<input type="text" name="jenis" value="<?php echo $hasil['jenis'];?>">
					</div>
					<div class="form-group">
						<label>Harga per pcs</label><br>
						<input type="text" name="harga" value="<?php echo $hasil['harga'];?>">
					</div>
					<div class="form-group">
                        <label>Foto Produk</label>
                        <img style="width:100px; height:auto;"  src="img/upload/<?php echo $hasil['foto']; ?>">
						<input type="file" name="foto" id="foto" class="form-control bg-light" placeholder="Foto Kamar" >
					</div>
					<div class="form-group">
						<input type="submit" name="ubah" id="ubah" value="Ubah" class="btn btn-primary" >
						<a href="food.php" class="btn btn-danger">Batal</a>
					</div>								
                </form>
        <?php } ?>
	</div>
</div>
</body>
</html>
