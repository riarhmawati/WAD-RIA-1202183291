<?php
    

    $conn = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);
    if (!$conn){
        echo "<script>alert('Failed Connect Into Database');
        </script>";
    
    }
   ?>