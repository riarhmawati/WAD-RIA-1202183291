<?php
require_once ("config.php");
if (isset($_POST['submit'])) {
// $user_id = $_POST['user_id'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];

$query = "INSERT INTO cart (nama_barang,harga) VALUES( '$nama_barang', '$harga')";
$insert = mysqli_query($conn, $query);
}


?>