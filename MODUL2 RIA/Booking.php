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

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 center" style="background-color: whitesmoke;height: 600px;">

            <form action="mybooking.php" method="post">
                
                <div class="form-group">
                    <div class="col-sm-10">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control" id="Nama" name="nama">
                    </div>
                </div>
                <div class="form-group md-outline input-with-post-icon datepicker">
                    <div class="col-sm-10">
                    <label for="date">Check-in</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="yyyy/mm/dd">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" id="duration" name="duration" >
                    <small id="duration" class="form-text text-muted">Day(s).</small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                    <label for="room">Room Type</label>
                    <select class="form-control" id="room" name="room">
                        <option value="Standard">Standard</option>
                        <option value="Superior">Superior</option>
                        <option value="Luxury">Luxury</option>
                    </select>
                    </div>
                </div>
                <div class="col-sm-10">
                    <label>Add Service(s) </label>
                    <small id="duration" class="form-text text-muted">$ 20/service</small>
                </div>   
        
                <div class="form-check">
                <div class="col-sm-10">
                    <input class="form-check-input" type="checkbox" value="Room Service" id="service" name="service[]">
                    <label class="form-check-label" for="defaultCheck1">Room Service</label>
                </div>
                </div>
                <div class="form-check">
                <div class="col-sm-10">
                    <input class="form-check-input" type="checkbox" value="Breakfast" id="service" name="service[]">
                    <label class="form-check-label" for="defaultCheck2">Breakfast</label>
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-10">
                    <label for="exampleFormControlInput1">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                </div>
                <div class="col-sm-10">
                    <button type = "reset" class="btn btn-block btn-primary"> Book </button>
                </div>
            </form>
    </div>
    <div class="col-sm-6 center" style="background-color: whitesmoke; padding-top:160px">
    <?php 
    $book = 'standard';
     if(!empty($_GET['book'])) { 
        $book= $_GET['book']; 
        $img='';
     }
          if($book == 'standard'){
              $img = 'standar.jpg';
            echo "<img src='".$img."'style='width:600px'>";
          }elseif($book == 'superior'){
            $img = 'luxury.jpg';
            echo "<img src='".$img."'style='width:600px'>";
          }elseif($book == 'luxury'){
            $img = 'superior.jpg';
            echo "<img src='".$img."'style='width:600px'>";
          }else{
        }
        ?>

    </div>

    </body>
</html>  