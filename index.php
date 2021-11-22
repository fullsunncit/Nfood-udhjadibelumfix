<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
  <link rel="stylesheet" href="css1.css" />

  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <title>Sign In</title>
</head>

<body>
  <?php 
    if (isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){
        echo '<script type="text/javascript">
          window.onload = function () { alert("Login gagal username dan password salah");
          } </script>';
      }
      else if($_GET['pesan'] == "logout"){
        echo '<script type="text/javascript">
          window.onload = function () { alert("Anda telah berhasil logout");
          } </script>';
      }
      else if($_GET['pesan'] == "belum_login"){
        echo '<script type="text/javascript">
          window.onload = function () { alert("Anda harus login untuk mengakses halaman utama");
          } </script>';
      }
    }
  ?>
  <div class="container">
    <div class="row">
        <div class="col-sm-4">
          <img src="img/logo.png" alt="logo">
        </div>
        <div class="col-sm-8">
          <div class="forms-container">  
            <div class="signin-signup">
              <form action="ceklogin.php" class="sign-in-form" name="form" method="POST">
                <h2 class="title">Sign In</h2>
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input name="username" type="text" placeholder="Username" />
                </div>
                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input id="sandi" name="password" type="text" placeholder="Password" />
                  <span class="eye">
                    <i id="hide1" class="fas fa-eye"></i>
                    <i id="hide2" class="fas fa-eye-slash"></i>
                  </span>
                </div>
                <p style="color:blue">Belum punya akun?</p>
                <div class="row">
                <div class="col-sm-7">
                  <button type="submit" class="btn solid">LOGIN</button>
                </div>
                <div class="col-sm-5">
                  <button type="signin" class="btn solid">
                    <a href="signup.html">SIGN UP</a>
                  </button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
  
</body>

</html>