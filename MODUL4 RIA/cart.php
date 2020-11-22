<?php

session_start();
include("config.php");
if (!isset($_SESSION["is_login"])) {
    header("location: login.php");
}
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
    <title>Cart</title>
</head>

<body>
    <header>
        <nav class="navbar bg-light">
            <a class="navbar-brand text-dark" href="index.php">WAD Beauty</a>
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
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <?php $user_id = $_SESSION['user_id'];
    if (isset($_POST["submit"])) {
        $id = $_POST["id"];
        mysqli_query($conn, "DELETE FROM cart WHERE id='$id'");
        echo "<div class='alert alert-warning' role='alert'>
                <strong>Berhasil Dihapus</strong>
              </div>";
        header("refresh:1; url=cart.php");
    }
    $daftar_barang = mysqli_query($conn, "SELECT * FROM cart WHERE user_id='$user_id'");
    ?>
    <div class="container p-4">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        $total = 0; ?>
                        <?php while ($barang = mysqli_fetch_assoc($daftar_barang)) : ?>
                            <?php $total += $barang["harga"]; ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $barang["nama_barang"]; ?></td>
                                <td>Rp<?= number_format($barang["harga"]); ?></td>
                                <td>
                                    <form action="" method="POST">
                                        <input type="hidden" name="id" value="<?= $barang["id"] ?>">
                                        <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endwhile; ?>
                        <tr>
                            <td colspan="2" class="font-weight-bold">Total</td>
                            <td colspan="2" class="font-weight-bold">Rp<?= number_format($total); ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="p-4 text-center">
                <p class="mt-4 mb-3 text-muted" align-center>&copy; 2020 Copyright: <a href="index.php">WAD Beauty </p>
                </div>
            </div>
        </div>
    </div>


</body>

</html>