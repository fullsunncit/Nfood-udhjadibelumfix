<?php 
session_start();
$username = $_SESSION['username'];
if(empty($_SESSION['username'])){
  header("location:index.php?pesan=belum_login");
}
include 'header.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<div class="container">
  <center>
    <h2><b>Our Products</b></h2>
    <h6>Sudah dipastikan lezat dan mengenyangkan ^_^</h6>
    <br><br><br>
  </center>
  <?php include "fungsi.php";
    $SQL = mysqli_query($conn, "SELECT * FROM `food`");
    while($data=mysqli_fetch_assoc($SQL)){       
  ?>
    <div class="col-sm-6 wowload fadeInUp"style="padding-right:50px;">
      <div class="rooms">
        <img src="img/upload/<?php echo $data['foto']; ?>" class="img-responsive" style="height:200px; width:200px; margin-left:80px;">
          <div class="info">
            <h3>Nfood ID : <?php echo $data['idfood']; ?> </h3>
            <p> <b><?php echo $data['namafood']; ?></b></p>
            <p><?php echo $data['jenis']; ?> </p>
            <h3><b>Rp. <?php echo $data['harga']; ?></b></h3>
            <div style="display: flex;">            
              <form action="pesanan.php" method="POST">
                <input type="hidden" name="food" value="<?php echo $data['idfood'];?>">
                <input type="number" name="jumlah">
                <button type="submit" name="pesan" class="btn btn-primary" style="margin-left:3px">Pesan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php }?>
  </div>
</body>

