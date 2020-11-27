
<?php
session_start();
if (!isset($_SESSION["is_login"])) {
    header("location: login.php");
}

include("config.php");

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Index</title>
</head>

<body>
    <header>

        <nav class="navbar bg-light">
            <a class="navbar-brand text-dark" href="">WAD Beauty</a>
            <div class="form-inline">
                <a href="cart.php">
                    <img src="gambar/keranjang.png" width="20" height="20" alt="no img" class="mr-3">
                </a>
                <label for="">Selamat Datang, </label>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $_SESSION['nama']; ?>
                    </a>
                    <div class="dropdown-menu ml-auto" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="profile.php ">Profile</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <?php
    
if (isset($_POST["submit"])) {
    $nama_barang = $_POST['nama_barang'];
    $user_id = $_SESSION['user_id'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO cart VALUES ('', '$user_id', '$nama_barang', '$harga')";
    $result = mysqli_query($conn, $query);
   
    echo "<div class='alert alert-warning' role='alert'>
    <strong>Berhasil Ditambahkan</strong>
  </div>";
        header("refresh:1; url=index.php");
     
}
?>
    <div class="container" align="center">
        <div align="center" style="width:900px;margin-top:2%;">
            <div class="card-img-top" style="background: rgb(120,216,255); background: linear-gradient(90deg, rgba(120,216,255,1) 23%, rgba(251,255,103,1) 100%); text-align: center;">
                <h4 class="card-title text-center">WAD Beauty</h4>
                <p class="card-text text-center">Tersedia Skin Care dengan harga murah tapi bukan murahan dan berkualitas </p>
            </div>
           
                <div class="card-group">
                
                    <div class="card">
                    <form  method="post">
                        <img class="card-img-top" src="gambar/gambar1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: left;">YUJA NIACIN 30 DAYS BLEMISH CARE SERUM</h5>
                            <p class="card-text" style="text-align: left;"> Produk terbaru dari somebymi yang memiliki manfaat untuk Whitening + blemish care + Anti-winkle, sangat recommended
                                untuk masalah kulit kusam, kulit kering dan bekas jerawat atau FLEK hitam
                            </p>
                           
                            <p class="card-text" style="text-align: left;">Rp. 169.000</p>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" name="nama_barang" value="Yuja Miacin" hidden>
                            <input type="hidden" name="harga" value="169000">
                            <button type="submit" class="btn btn-primary" name="submit" > Tambahkan ke Keranjang</button>
                        </div>
                        </form>
                    </div>
              
                    
                    <div class="card">
                    <form  method="post">
                        <img class="card-img-top" src="gambar/gambar2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: left;">SOMEBYMI Snail Truecica Miracle Repair Cream</h5>
                            <p class="card-text" style="text-align: left;">Sebagai pelembap, krim ini mampu memberiikan kelempanan yang
                                menyeluruh dan tahan lama bagi kulit sehingga terasa halus, lembab dan kenyal. Mencerahkan, menghambat penuaan seperti keriput dan garis halus,
                                juga menenangkan kulit yang iritasi, dengan kandungan 420.000ppm Snail Truecica</p>
                            
                            <p class="card-text" style="text-align: left;">Rp. 180.000</p>
                        </div>
                        <div class="card-footer">
                            <input name="nama_barang" value="Snail Truuecica" hidden>
                            <input name="harga" value="180000" hidden>
                            <button type="submit" class="btn btn-primary" name="submit" > Tambahkan ke Keranjang</button>
                        </div>
                        </form>
                    </div>
                   
                   
                    <div class="card">
                    <form method="post">
                        <img class="card-img-top" src="gambar/gambar3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: left;">30 DAYS MIRACLE TONER</h5>
                            <p class="card-text" style="text-align: left;">Dengan kandungan AHA, BHA, dan PHA bekerja secara efektif untuk membuat kulit
                                lebih bersih dan lebih bersinar, mengandung 10.000ppm ekstrak pohon teh alami yang secara efektif meningkatkan elastisitas dan
                                menutrisi kulit apache_response_headerstanpa efek iritasi karna tidak mengandung 20 bahan 500 fan pewarna berbahaya.</p>
                            
                            <p class="card-text" style="text-align: left;">Rp. 108.000</p>
                        </div>
                        <div class="card-footer">
                            <input name="nama_barang" value="MIRACLE TONNER" hidden>
                            <input name="harga" value="108000" hidden>
                            <button type="submit" class="btn btn-primary" name="submit" > Tambahkan ke Keranjang</button>
                        </div>
                        </form>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>


</body>

</html>