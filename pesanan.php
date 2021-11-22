<?php 
session_start();
require 'fungsi.php';
include 'header.php';
if (isset($_POST["pesanan"])) {
	if(pesanan($_POST) > 0) {
		echo "<script>
			alert('Silahkan Membayar di Norek a.n Rosy 123200001 !!');
            document.location.href = 'shop.php';
		</script>";
	}
    else {
        echo "<script>
            alert('error!');
        </script>";
        echo mysqli_error($conn);
    }
}

$food = $_POST["food"];
$jumlah = $_POST["jumlah"];
$SQL2 = mysqli_query($conn, "SELECT * FROM `food` WHERE `idfood` = $food");
?>

<div class="allcontain">
	<div class="feturedsection">
		<h2 class="text-center">Pemesanan Nfood</h2>
	</div>
</div>
<center>
<?php
    if($SQL2 -> num_rows > 0)
    {
        while($row = mysqli_fetch_assoc($SQL2)) {	
            $harga = $row['harga'];
            $total = $jumlah * $harga;
			$nmpesanan = $row['namafood'];		  
?>
			<form action="" method="POST">
				<table align ="text-center" style="cellpadding: 5px;">
                    <tr>
						<td>Nama Lengkap</td>
						<td> : </td>
						<td><div class="form-group">
							<input type="text" class="form-control" name="nmpembeli">
						</div></td>
					</tr>
					<tr> 
						<td>Alamat</td>
						<td> : </td>
						<td><div class="form-group">
							<textarea name="alamat" class="form-control" id="alamat"></textarea>
						</div></td>
					</tr>
					<tr> 
						<td>Nama Produk</td>
						<td> : </td>
						<td><?php echo $nmpesanan; ?></td>
					</tr>
                    <tr> 
						<td>Jumlah</td>
						<td> : </td>
						<td><?php echo $jumlah; ?></td>
					</tr>
                    <tr> 
						<td>Total</td>
						<td> : </td>
						<td><?php echo $total; ?></td>
					</tr>
                    <tr> 
						<td>Bayar Sekarang ? </td>
						<td> : </td>
						<td><select name="status" id="status">
                            <option>Ya</option>
                        </select></td>
					</tr>
					<tr>
                		<input type="hidden" name="idpesan" value="<?php echo $idpesan; ?>">
                        <input type="hidden" name="nmpesanan" value="<?php echo $nmpesanan; ?>">
                        <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
                        <input type="hidden" name="total" value="<?php echo $total; ?>">
                        <input type="hidden" name="status" value="ya">
                        <input type="hidden" name="food" value="<?php echo $row['idfood']; ?>">
						<td><br>
							<input type="submit" name="pesanan" id="pesanan" value="Bayar" class="btn btn-primary" >
						</td>
					</tr>
				</table>
			</form>
    <?php
        }
    }
    ?>
</center>
