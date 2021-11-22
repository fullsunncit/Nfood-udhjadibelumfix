<?php
    session_start();
    include "config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query=mysqli_query($konek, "INSERT INTO akun VALUES ('','$username','$password')") or die(mysqli_error($konek));
    if($query){
        header("location:signin.php");
    }
    else{
        echo '<script type="text/javascript">
          window.onload = function () { alert("Proses input gagal!!");
          } </script>';
    }
?>