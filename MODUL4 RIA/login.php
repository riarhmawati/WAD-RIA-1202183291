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
    <title>Login</title>
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
    session_start();
    require 'config.php';
    //cek cookie
    if (isset($_SESSION['is_login'])) {
        header('location:index.php');
    }
    if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        //ambil email berdasarkan id
        $result = mysqli_query($conn, "SELECT email FROM user WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        //cek cookie dan email
        if ($key === hash('sha224', $row['email'])) {
            $_SESSION['login'] = true;
        }
        
    }


    if (isset($_SESSION['login'])) {
        header('Location: index.php');
        exit;
    }

    if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

        //cek uemail
        if (mysqli_num_rows($result) === 1) {
            //cek paswrod
            $row = mysqli_fetch_array($result);
            if (password_verify($password, $row['password'])) {


                //cek remember me
                if (isset($_POST['remember'])) {
                    //buat cookie

                    setcookie('id', $row['id'], time() +3600);
                    setcookie('key', hash('sha224', $row['email']), time() +3600);
                   
                }
                //set session
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['email'] = $email;
                $_SESSION['no_hp'] = $row['no_hp'];
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['is_login'] = TRUE;


                echo "<div class='alert alert-warning' role='alert'>
                <strong>Berhasil Login</strong>
              </div>";
                header("refresh:1; url=index.php");


                // header("Location:index.php");
                // exit;

            }
        }
        $error = true;
    }
    ?>

    <?php
    if (count($_COOKIE) > 0) {
        echo "Cookies telah aktif.";
    } else {
        echo "Cookies tidak aktif.";
    }
    ?>
    <div class="container" align="center">
        <div align="center" style="width:400px;margin-top:5%;">

            <form action="" method="POST" class="well well-lg" style="-webkit-box-shadow: 0px 5px 30px #788788;">
                <div class="card">
                    <div class="card-body">
                        <h3 align="center"><span class="glyphicon glyphicon-home"></span> Login</h3>
                        <div class="form-group" align="left">
                            <label for="email">E-mail</label>
                            <input class="form-control" type="email" name="email" id="email" value="<?php if (isset($_COOKIE["id"])) {
                                                                                                        echo $_COOKIE["id"];
                                                                                                    } ?>" required>
                        </div>
                        <div class="form-group" align="left">
                            <label for="password">Kata Sandi</label>
                            <input class="form-control" type="password" name="password" id="password" value="<?php if (isset($_COOKIE["password"])) {
                                                                                                                    echo $_COOKIE["password"];
                                                                                                                } ?>" required>
                        </div>
                        <div class="form-check" align="left">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember" <?php if (isset($_COOKIE["id"])) { ?> checked <?php } ?>>
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="login"> Login</button>
                        <p>Belum punya akun? <a href="register.php">Registrasi</a></p>
                    </div>

                </div>
            </form>

        </div>
    </div>

</body>

</html>