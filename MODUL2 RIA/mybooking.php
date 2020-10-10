<!DOCTYPE html>
<html>
    <head>
        <title>EAD STORE</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">    
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>
    <body>
        
         <header>
            <ul class="nav justify-content-center" style="background-color: blue;">
                <li class="nav-item">
                    <a class="nav-link active" href="Home.php">Home</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Booking</a>
                </li>
            </ul>
        </header>
        <?php
        
        $nama = $_POST['nama'];
        $date = $_POST['date'];
        $service = $_POST['service'];
        $phone = $_POST['phone'];
        $duration = $_POST['duration'];

        $checkout=date('Y-m-d',strtotime('+'.$duration.' days',strtotime($date)));
        
        $room = $_POST['room'];
        switch ($room){
            case "Standard" :
                $totalprice = 90 ;
            break;
            case "Superior" :
                $totalprice = 150 ;
            break;
            case "Luxury" :
                $totalprice = 200 ;
            break;
        }
        switch ($service){
            case "room service" :
                $totalprice= $totalprice + 20;
            break;
            case "breakfast" :
                $totalprice= $totalprice + 20;
            break;
            case "room service" && "breakfast" :
                $totalprice= $totalprice + 40;
            break;
        }
        ?>
    <div class="container-sm">
        <h2 style="text-align:center;">Form Output (POST)</h2>
        
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
                    <td><?=$nama?></td>
                    <td><?=$date?></td>
                    <td><?=$checkout?></td>
                    <td><?=$room?></td>
                    <td><?=$phone?></td>
                    <td><?=$service?></td>
                    <td>$ <?=$totalprice?></td>
                </tr>
                </tbody>
            </table>
    </div>
    </body>
</html>  