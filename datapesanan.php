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
                <center><h1>Data Pemesanan Nfood</h1></center>  
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID Pesanan</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>Nama Pesanan</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Status Bayar</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <?php include "fungsi.php";
                        $SQL = mysqli_query($conn, "SELECT * FROM pesanan");
                         while($data=mysqli_fetch_array($SQL)) 
                        {
                    ?>
                            <tr class="warning">
                                <td><?php echo $data['idpesan'];?></td>
                                <td><?php echo $data['nmpembeli'];?></td>
                                <td><?php echo $data['alamat'];?></td>
                                <td><?php echo $data['nmpesanan'];?></td>
                                <td><?php echo $data['jumlah'];?></td>
                                <td><?php echo $data['total'];?></td>
                                <td><?php echo $data['status'];?></td>
                                <td >
                                    <form action="hapus.php" method="post"> 
                                        <input type="hidden" name="idpesan" value="<?= $data['idpesan']; ?>">
                                        <button type="submit" class="btn btn-primary">Konfirmasi</button>
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
