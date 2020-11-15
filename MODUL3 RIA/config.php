<?php
    $dbhost ="localhost";
    $dbuser ="root";
    $dbname ="wad_modul3_ria";
    $dbpass ="";

    $conn = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);
    if (!$conn){
        echo "<script>alert('Failed Connect Into Database');
        </script>";
    
    }
   ?>