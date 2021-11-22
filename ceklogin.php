<?php
    session_start();
    include "config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($konek, "SELECT * FROM akun WHERE username = '$username' && password ='$password'") or die (mysqli_error($konek));
    $cek = mysqli_num_rows($query);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        if($username == "admin" && $password == "admin"){
            header("location:homeadmin.php");
        }
        else{
            header("location:bubble.php");
        }
    }
    else{
        header("location:index.php?pesan=gagal");
    }
?>