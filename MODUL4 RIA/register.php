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
  <title>Register</title>
</head>

<body style="background-color: beige;">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <ul class="navbar-nav ">
        <a class="navbar-brand">WAD Beauty</a>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Registrasi</a>
        </li>
      </ul>
    </nav>
  </header>
  <?php
  require('config.php');
  if (isset($_POST['register'])) {
    if (register($_POST) > 0) {
      echo "<div class='alert alert-warning' role='alert'>
  <strong>Berhasil registrasi</strong>
</div>";
      header("refresh:1; url=login.php");
    } else {
      echo mysqli_error($conn);
    }
  }

  ?>
  <div class="container" align="center">
    <div align="center" style="width:400px;margin-top:5%;">
      <form action="" method="POST" class="well well-lg" style="-webkit-box-shadow: 0px 5px 30px #788788;">
        <div class="card">
          <div class="card-body">
            <h3 align="center"><span class="glyphicon glyphicon-home"></span> Register</h3>
            <div class="form-group" align="left">
              <label for="nama">Nama</label>
              <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" required>
            </div>
            <div class="form-group" align="left">
              <label for="email">E-mail</label>
              <input class="form-control" type="email" name="email" id="email" placeholder="Masukkan Alamat E-mail" required>
            </div>
            <div class="form-group" align="left">
              <label for="nohp">No. Handphone</label>
              <input class="form-control" type="text" name="no_hp" id="no_hp" placeholder="Masukkan Nomor Handphone" required>
            </div>
            <div class="form-group" align="left">
              <label for="password">Kata Sandi</label>
              <input class="form-control" type="password" name="password" id="password" placeholder="Buat Kata Sandi" required>
            </div>
            <div class=form-group align="left">
              <label for="password2">Konfirmasi Kata Sandi</label>
              <input class="form-control" type="password" name="password2" id="password2" placeholder="Konfirmasi Kata Sandi" required>
            </div>
            <button type="submit" class="btn btn-primary" name="register"> Submit</button>
            <p>Sudah punya akun? <a href="login.php">Login</a></p>
            <p class="mt-4 mb-3 text-muted" align-center>&copy; 2020 Copyright: <a href="index.php">WAD Beauty </p>
          </div>

        </div>
      </form>

    </div>
  </div>

</body>

</html>