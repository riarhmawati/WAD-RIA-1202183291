<?php
session_start();
require 'config.php';

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
  if (!isset($_SESSION['is_login'])) {
    header('location:login.php');
  }
}
$warnanavbar = isset($_COOKIE['warnanavbar']) ? $_COOKIE['warnanavbar'] : 'light';

$id = $_SESSION['user_id'];
$result = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
$user = mysqli_fetch_assoc($result);
$alert = "";

if (isset($_POST["submit"])) {
  $nama = $_POST["nama"];
  $no_hp = $_POST["no_hp"];
  $password = "";
  $password2 = "";

  if (!empty($_POST["password"]) && !empty($_POST["password2"])) {
    if ($_POST["password"] === $_POST["password2"]) {
      $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    } else {
      $alert = "Gagal: kata sandi dan konfirmasi kata sandi tidak sesuai!";
    }
  } else {
    $password = $user["password"];
  }

  $query = "UPDATE user SET nama='$nama', no_hp='$no_hp', password='$password' WHERE id='$id'";
  $update = mysqli_query($conn, $query);
  if ($update) {
    $_SESSION["nama"] = $nama;
    $alert = "Profil berhasil diperbarui";
  }
}

$result = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
$user = mysqli_fetch_assoc($result);
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
  <title>Profile</title>
</head>


<body>
  <header>

    <nav class="navbar navbar-<?= warnanavbar ?> bg-<?= warnanavbar ?>">
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
            <a class="dropdown-item" href="./profile.php?id=<?= $_SESSION['id']; ?>">Profile</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>

  </header>
  <div class="container" align="center">
    <div align="center" style="width:900px;margin-top:2%;">
      <form method="POST">
        <h3 align="center">Profile</h3>
        <input type="text" name="id" value="<?= $user['id'] ?>" hidden>
        <div class="form-group row" align="left">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user["email"]; ?>">
          </div>
        </div>
        <div class="form-group row" align="left">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama'];  ?>">
          </div>
        </div>
        <div class="form-group row" align="left">
          <label for="no_hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $user['no_hp']; ?>">
          </div>
        </div>
        <div class="form-group row" align="left">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" name="password">
          </div>
        </div>
        <div class="form-group row" align="left">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" name="password2">
          </div>
        </div>
        <div class="form-group row" align="left">
          <label for="warna" class="col-sm-2 col-form-label">Warna Navbar</label>

          <div class="col-sm-10">
            <select id="warnanavbar" name="warnanavbar">

              <option value="light">Light</option>
              <option value="dark">Dark</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-block btn-primary" name="submit">Submit</button>
        <button type="submit" class="btn btn-block btn-light">Cancel</button>
      </form>

    </div>

  </div>
  <div class="p-4 text-center">
    <p class="mt-3 mb-3 text-muted" align-center>&copy; 2020 Copyright: <a href="index.php">WAD Beauty </p>
  </div>
</body>

</html>