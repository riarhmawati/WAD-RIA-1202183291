<?php
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="wad_modul3_ria";

    $conn = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);
    if (!$conn){
        echo "<script>alert('Failed Connect Into Database');
        </script>";
    
    }
   ?>