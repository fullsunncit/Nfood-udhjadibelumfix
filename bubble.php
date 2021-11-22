<html>
    <head>
        <title>Document</title>
        <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="css2.css"/>
        <!-- bootstrap css -->
        <!-- CSS only -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        <?php
            session_start();
            $username = $_SESSION['username'];
            if(empty($_SESSION['username'])){
                header("location:index.php?pesan=belum_login");
            }
        ?>
        <div class="navbar">
            <h1 class="nfood">Nfood <span style="color:black; font-size: 13px; font-family: 'Dosis', sans-serif;"> Wareg bersama Nur&Nindya Food</span></h1>
            <nav>
                <ul>
                    <li><a href="#hero">HOME</a></li>
                    <li><a href="shop.php">PRODUCT</a></li>
                    <li><a href="#kontak">CONTACT</a></li>
                </ul>
            </nav>
            <i class="bi bi-bag-check-fill" ></i>
        </div>
        <div id="hero">
            <div class="content">
                <small>Hello Somebody!</small>
                <h1>Welcome <br>"<?php echo $username ?>"</h1><br>
                <a href="logout.php"><button type="button" class="tour">Log Out</button></a>
            </div>
            <div class="buble">
                <img src="img/f.png" alt="O">
                <img src="img/f.png" alt="O">
                <img src="img/f.png" alt="O">
                <img src="img/f.png" alt="O">
                <img src="img/f.png" alt="O">
                <img src="img/f.png" alt="O">
                <img src="img/f.png" alt="O">
            </div>
        </div>
        <!-- <div id="produk">
            <div class="sub">
                <h2><b>Our Products</b></h2>
                <h6>Sudah dipastikan lezat dan mengenyangkan ^_^</h6>
            </div>
            <div class="row">
                <div class="col">
                    <div class="kotak">
                        <div class="poto">
                            <img src="img/7.png" alt="poto">
                        </div>
                        <div class="label">
                            <h6>Salad Sayuran</h6>
                            <p>Makanan</p>
                            <h6><b>Rp. 10.000</b></h6>
                            <center><button>Add<i class="bi bi-bag-plus-fill"></i></button></center>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="kotak">
                        <div class="poto">
                            <img src="img/img1.png" alt="poto">
                        </div>
                        <div class="label">
                            <h6>Steak Medium</h6>
                            <p>Makanan</p>
                            <h6><b>Rp. 25.000</b></h6>
                            <center><button>Add<i class="bi bi-bag-plus-fill"></i></button></center>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="kotak">
                        <div class="poto">
                            <img src="img/img2.png" alt="poto">
                        </div>
                        <div class="label">
                            <h6>Cireng Empuk</h6>
                            <p>Makanan</p>
                            <h6><b>Rp. 10.000</b></h6>
                            <center><button>Add<i class="bi bi-bag-plus-fill"></i></button></center>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="kotak">
                        <div class="poto">
                            <img src="img/img3.png" alt="poto">
                        </div>
                        <div class="label">
                            <h6>Fruit Fresh</h6>
                            <p>Makanan</p>
                            <h6><b>Rp. 15.000</b></h6>
                            <center><button>Add<i class="bi bi-bag-plus-fill"></i></button></center>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col">
                    <div class="kotak">
                        <div class="poto">
                            <img src="img/img4.png" alt="poto">
                        </div>
                        <div class="label">
                            <h6>Sayur Brokoli Sehat</h6>
                            <p>Makanan</p>
                            <h6><b>Rp. 20.000</b></h6>
                            <center><button>Add<i class="bi bi-bag-plus-fill"></i></button></center>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="kotak">
                        <div class="poto">
                            <img src="img/img5.png" alt="poto">
                        </div>
                        <div class="label">
                            <h6>Fresh Food</h6>
                            <p>Makanan</p>
                            <h6><b>Rp. 22.000</b></h6>
                            <center><button>Add<i class="bi bi-bag-plus-fill"></i></button></center>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="kotak">
                        <div class="poto">
                            <img src="img/img6.jpg" alt="poto" style="height:90px; margin-bottom:10px;">
                        </div>
                        <div class="label">
                            <h6>Bread Egg</h6>
                            <p>Makanan</p>
                            <h6><b>Rp. 12.000</b></h6>
                            <center><button>Add<i class="bi bi-bag-plus-fill"></i></button></center>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="kotak">
                        <div class="poto">
                            <img src="img/img7.jpg" alt="poto" style="height:80px; margin-bottom:20px; padding-top:5px;">
                        </div>
                        <div class="label">
                            <h6>Burger Beef</h6>
                            <p>Makanan</p>
                            <h6><b>Rp. 18.000</b></h6>
                            <center><button>Add<i class="bi bi-bag-plus-fill"></i></button></center>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col">
                    <div class="kotak">
                        <div class="poto">
                            <img src="img/img8.jpg" alt="poto" style="height:80px; margin-bottom:20px; padding-top:5px;">
                        </div>
                        <div class="label">
                            <h6>Sweet and Fresh Kiwi</h6>
                            <p>Minuman</p>
                            <h6><b>Rp. 17.000</b></h6>
                            <center><button>Add<i class="bi bi-bag-plus-fill"></i></button></center>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="kotak">
                        <div class="poto">
                            <img src="img/img10.jpeg" alt="poto">
                        </div>
                        <div class="label">
                            <h6>Coffe Latte</h6>
                            <p>Minuman</p>
                            <h6><b>Rp. 20.000</b></h6>
                            <center><button>Add<i class="bi bi-bag-plus-fill"></i></button></center>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="kotak">
                        <div class="poto">
                            <img src="img/img11.jpeg" alt="poto">
                        </div>
                        <div class="label">
                            <h6>Sweet Ice Strowberry</h6>
                            <p>Minuman</p>
                            <h6><b>Rp. 10.000</b></h6>
                            <center><button>Add<i class="bi bi-bag-plus-fill"></i></button></center>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="kotak">
                        <div class="poto">
                            <img src="img/img12.jpeg" alt="poto">
                        </div>
                        <div class="label">
                            <h6>Fruit Ice</h6>
                            <p>Minuman</p>
                            <h6><b>Rp. 15.000</b></h6>
                            <center><button>Add<i class="bi bi-bag-plus-fill"></i></button></center>
                        </div>
                    </div>
                </div>

            </div> 
        </div> -->
        <div class="sosmed">
            <div class="sub" style="text align: center;">
                <h2><b>Our Sosmed</b></h2>
            </div>
            <div class="button">
                <div class="icon"><i class="fab fa-facebook"></i></div>
                <a href="https://web.facebook.com/upnvy_official" target="_blank"><span>Facebook</span></a>
            </div>
            <div class="button">
                <div class="icon"><i class="fab fa-twitter"></i></div>
                <a href="https://twitter.com/upnvy_official" target="_blank"><span>Twitter</span></a>
            </div>
            <div class="button">
                <div class="icon"><i class="fab fa-instagram"></i></div>
                <a href="https:/www.instagram.com/upnvy" target="_blank"><span>Instagram</span></a>
            </div>
            <div class="button">
                <div class="icon"><i class="fab fa-youtube"></i></div>
                <a href="https://www.youtube.com/channel/UC1DMc4rT-ZXDttwnRVH-rsw" target="_blank"><span>YouTube</span></a>
            </div>
        </div>
        <footer id="kontak">
            <div class="container py-7">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/logo.png" alt="logo" class="mb-3" height="170px">
                        <ul>
                            <li>
                                <i class="bi bi-geo-alt-fill"></i>Jl. Babarsari 2 Yogyakarta
                            </li>
                            <li>
                                <i class="bi bi-envelope-fill"></i>info@upnyk.ac.id
                            </li>
                            <li>
                                <i class="bi bi-telephone-fill"></i>(0274) 486733
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3" style="margin-left:30px; margin-top:100px; font-family:'Dosis', sans-serif">
                        <h3><b>Contact Person</b></h3>
                        <table cellpadding="10">
                            <tr>
                                <td>Mahen</td>
                                <td>:</td>
                                <td>082312345234</td>
                            </tr>
                            <tr>
                                <td>Rosy</td>
                                <td>:</td>
                                <td>082312345234</td>
                            </tr>
                            <tr>
                                <td>Haikal</td>
                                <td>:</td>
                                <td>082312345234</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-4" style="margin-left:30px; margin-top:100px; font-family:'Dosis', sans-serif">
                        <h3><b>Peta Lokasi</b></h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2599521926973!2d110.40709011331484!3d-7.762232494405614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599a0272fccd%3A0x39e7804d39e1d0a!2sUniversitas%20Pembangunan%20Nasional%20Veteran%20Yogyakarta!5e0!3m2!1sid!2sid!4v1636812477928!5m2!1sid!2sid"  height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="text-center py-3">
                <div class="container">
                    <div class="text-muted">
                        Copyright &copy 2021
                    </div>
                </div>
            </div>
        </footer>   
    </body>
</html>