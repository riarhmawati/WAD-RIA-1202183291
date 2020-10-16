<!DOCTYPE html>
<html>
    <head>
        <title>EAD HOTEL</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">    
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>
    <body>
        
         <header>
            <ul class="nav justify-content-center" style="background-color: blue;">
                <li class="nav-item">
                    <a class="nav-link active" href="Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Booking.php">Booking</a>
                </li>
            </ul>
        </header>
        <?php

  $date = $_POST['date'];
  $checkout = date('Y-m-d', strtotime($date. ' + ' . $_POST['duration'] . 'days'));

        $totalprice = 0;
        if ($_POST["room"] == "Standard") {
            $totalprice += 90 * $_POST['duration'];
        } else if ($_POST["room"] == "Superior") {
            $totalprice += 150 * $_POST['duration'];
        } else if ($_POST["room"] == "Luxury") {
            $totalprice += 200 * $_POST['duration'];
        }
        ?>
    <div class="container-sm" style="padding-top: 30px;">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service</th>
                    <th scope="col">Total Price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?=(rand(10,100));?></td>
                    <td><?=$_POST['nama'];?></td>
                    <td><?=$_POST['date'];?></td>
                    <td><?=$checkout;?></td>
                    <td><?=$_POST['room'];?></td>
                    <td><?=$_POST['phone'];?></td>
                    <td class="text-left">

                    <?php 
                      if(!empty($_POST['service'])) {
                          foreach($_POST['service'] as $value){
                              echo '<li>' . $value.'</li>';
                              $totalprice += 20;
                          }
                      } else {
                        echo "no service";
                      }
                    ?></td>
                    <td>$ <?=$totalprice?></td>
                </tr>
                </tbody>
            </table>
    </div>
    
    </body>
</html>  