<?php

    $dbhost ="localhost";
    $dbuser ="root";
    $dbname ="wad_modul4";
    $dbpass ="";
    $conn = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);
    if (!$conn){
        echo "<script>alert('Failed Connect Into Database');
        </script>";
    }

    function register($data){
        global $conn;
        // $id = $data['id'];
        $nama = $data['nama'];
        $email = $data['email'];
        $no_hp = $data['no_hp'];
        $password = mysqli_real_escape_string($conn, $data['password']);
        $password2 = mysqli_real_escape_string($conn, $data['password2']);

        //cek apakah email sudah ada blm
        $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>alert('email sudah terdaftar');
            </script>";
            return false;
        }
        //cek konfirmasi password
        if($password !== $password2){
            echo "<script>alert('pasword tidak sesuai');
            </script>";
            return false;
        }
        //enkripsi password
        $password = password_hash($password,PASSWORD_DEFAULT);
       //tambahkan insert ke database

       mysqli_query($conn, "INSERT INTO user VALUES('','$nama','$email','$no_hp','$password')");

       return mysqli_affected_rows($conn);
    }
