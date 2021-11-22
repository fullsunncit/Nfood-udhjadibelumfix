<?php

$conn = mysqli_connect("localhost", "root", "", "nfood" );

function registrasi($data){
    global $conn;

    $username = ($data["username"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);

    return mysqli_affected_rows($conn);
}

function tambah($data){
    global $conn;

    $idfood = ($data["idfood"]);
    $namafood = ($data["namafood"]);
    $jenis = ($data["jenis"]);
    $harga = ($data["harga"]);

    //upload gambar
    $foto = upload();
    if(!$foto){
        return false;
    }

    //tambah user baru ke database
    mysqli_query($conn, "INSERT INTO food VALUES ('', '$namafood', '$jenis', '$harga', '$foto' )");

    return mysqli_affected_rows($conn);
}

function upload(){
    $namafile = $_FILES ['foto']['name'];
    $ukuranfile = $_FILES ['foto']['size'];
    $error = $_FILES ['foto']['error'];
    $tmpname = $_FILES ['foto']['tmp_name'];

    $ekstensifotovalid = ['jpg', 'jpeg', 'png'];
    $ekstensifoto = explode('.',$namafile);//memecah nama file
    $ekstensifoto = strtolower(end( $ekstensifoto ));
   

    if(!in_array($ekstensifoto, $ekstensifotovalid)){ //cek ekstensi ada atau ga
      echo "<script>
       alert('File yang diinput tidak sesuai!')
       </script>";
       return false;
   }
    if($ukuranfile > 5000000){
        echo "<script>
                alert('Ukuran file terlalu besar!')
            </script>";
        return false;
    }
    //lolos semua
    //generate nama baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensifoto;
    move_uploaded_file($tmpname, 'img/upload/'. $namafilebaru);
    return ($namafilebaru);
}

function ubah($data){
	global $conn;

    $idfood = $_POST['idfood'];
	$namafood = $_POST['namafood'];	
	$jenis = $_POST['jenis'];
	$harga = $_POST['harga'];
    $fotolama = $_POST['fotolama'];
    
    
    if( $_FILES ['foto']['error'] == 4 ) //tidak input gambar baru
    {
        $foto = $fotolama;
    }
    else {
        $foto = upload();
    }
    
	$SQL =mysqli_query($conn, "UPDATE `food` SET 
		
		`namafood` = '$namafood',
		`jenis` = '$jenis',
        `harga` = '$harga',
        `foto` = '$foto' WHERE `food`.`idfood`='$idfood'");
    return $SQL;
}

function pesanan($data){
    global $conn;

    $idpesan = ($data["idpesan"]);
    $nmpembeli = ($data["nmpembeli"]);
    $alamat = ($data["alamat"]);
    $nmpesanan = ($data["nmpesanan"]);
    $jumlah = ($data["jumlah"]);
    $total = ($data["total"]);
    $status = ($data["status"]);

    //tambah user baru ke database
    mysqli_query($conn, "INSERT INTO pesanan VALUES ('', '$nmpembeli', '$alamat', '$nmpesanan', '$jumlah', '$total', '$status')");
    return mysqli_affected_rows($conn);
}

?>