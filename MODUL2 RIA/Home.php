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
        <br>
        <h2 class="text-center" style="color: DodgerBlue;">EAD HOTEL</h2>
        <h3 class="text-center" style="color: DodgerBlue;">Welcome to 5 Star Hotel</h3>
        <div class="container mt-5" style="margin-top:30px;">
        <div class="card-columns">

          <div class="col-lg-10">
          <div class="card text-center" >
          
          <img class="card-img-top" src="standar.jpg" alt="Card image cap" style="height: 15rem;">
          <div class="card-body">
            <h5 class="card-title">Standard</h5>
            <h5 style="color: DodgerBlue" class="card-text">$ 90/Day</h5>
            <br>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Facilities</li>
              <li class="list-group-item">1 single bed</li>
              <li class="list-group-item">1 bathroom</li>
            </ul>
          </div>
          <div class="card-footer">
          <div class="row justify-content-center">
            <form action="" method="get">
            <button type="submit" name="book" value="standard" class="btn btn-primary">Book now</button>
            </form>

          </div>
          </div>
          </div>
        </div>
        <div class="col-lg-10">
        <div class="card text-center">
        
          <img class="card-img-top" src="luxury.jpg" alt="Card image cap" style="height: 15rem;">
          <div class="card-body">
          <h5 class="card-title">Superior</h5>
          <h5 style="color: DodgerBlue" class="card-text">$ 130/Day</h5>
          <br>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Facilities</li>
            <li class="list-group-item">1 Double Bed</li>
            <li class="list-group-item">1 Television and Wi-Fi</li>
            <li class="list-group-item">1 Bathroom with hot water</li>
          </ul>
          </div>
          <div class="card-footer">
          <div class="row justify-content-center">
            <form action="" method="get">
            <button type="submit" name="book" value="superior" class="btn btn-primary">Book now </button>
            </form>

          </div>
          </div>
        </div>
        </div>
        <div class="col-lg-10">
        <div class="card text-center">
        
          <img class="card-img-top" src="superior.jpg" alt="Card image cap" style="height: 15rem;">
          <div class="card-body">
          <h5 class="card-title">Luxury</h5>
          <h5 style="color: DodgerBlue" class="card-text">$ 90/Day</h5>
          <br>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Facilities</li>
            <li class="list-group-item">2 Double Bed</li>
            <li class="list-group-item">1 Bathroom with hot water</li>
            <li class="list-group-item">1 Kitchen</li>
            <li class="list-group-item">1 Television and Wi-Fi</li>
            <li class="list-group-item">1 Workroom</li>
          </ul>
          </div>
          <div class="card-footer ">
          <div class="row justify-content-center">
            <form action="" method="get">
            <button type="submit" name="book" value="luxury" class="btn btn-primary">Book now</button>
            </form>

          </div>
          </div>
        </div>
        </div>

        </div>
        </div>
    </body>
</html>    