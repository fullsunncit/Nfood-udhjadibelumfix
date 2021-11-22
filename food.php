<?php 
session_start();
$username = $_SESSION['username'];
    if(empty($_SESSION['username'])){
        header("location:index.php?pesan=belum_login");
    }
include 'admin.php';
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
<div id="content" class="p-4 p-md-5 pt-5">
    <div  class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <center><h1>Data Produk Nfood</h1></center>
                <div class="col-md-12 text-right">
                    <a href="tambahproduk.php" class="btn btn-warning" style="margin-top:20px; margin-bottom:20px"><i></i>Tambah Data</a>
                </div>	  
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID Nfood</th>
                            <th>namafood</th>
                            <th>Jenis</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <?php include "fungsi.php";
                        $SQL = mysqli_query($conn, "SELECT * FROM food");
                         while($data=mysqli_fetch_array($SQL)) 
                        {
                    ?>
                            <tr class="warning">
                                <td><?php echo $data['idfood'];?></td>
                                <td><?php echo $data['namafood'];?></td>
                                <td><?php echo $data['jenis'];?></td>
                                <td><?php echo $data['harga'];?></td>
                                <td><img style="width:100px; height:auto;" src="img/upload/<?php echo $data['foto']; ?>"></td>
                                <td >
                                    <a class="btn btn-primary mb-2" href=editfood.php?idfood=<?php echo $data['idfood']; ?>>Edit</a>
                                    <form action="hapus.php" method="post"> 
                                        <input type="hidden" name="idfood" value="<?= $data['idfood']; ?>">
                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                    </form>
                                </td>
                        <?php }?>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
