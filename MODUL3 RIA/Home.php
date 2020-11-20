
<!DOCTYPE html>
<html>
    <head>
        <title>EAD EVENTS</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">    
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    
    
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-dark" style="background-color: blue;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" >EAD EVENTS</a>
                    </div>
                    <ul class="nav navbar-navbar navbar-right navbar-dark" style="background-color: blue;">
                    <li>
                        <a class="nav-link active" href="Home.php">Home</a>
                    </li>
                    <li>
                    <a href="Buat_Event.php" class="btn btn-outline-primary">Buat Event</a>
                    </li>
                    </ul>
                </div>
            </nav>
        </header>

          <div class="container mt-5" style="margin-top:30px;">
        <h2 class="text-center" style="color: DodgerBlue;">WELCOME TO EAD EVENTS!</h2>
        <div class="row">
        <?php

include ('config.php');
$query = "";
$select = mysqli_query($conn, $query);
$empty = true;
while ($selects = mysqli_fetch_assoc($select)) {
$empty = false;

    ?>
            <div class="card-columns cpl col-10">
                <div class="card">
                    <img class="card-img-top" src="gambar/<?= $selects['gambar']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $selects["name"];?></h5>
                        <p><?= $selects["tanggal"];?></p>
                        <p><?= $selects["tempat"];?></p>
                        <p>Kategori: <?= $selects["kategori"];?></p>
                    </div>
                    <div class="card-footer text-right">
                        <a href="./Detail_Event.php?id=<?= $selects['id'];?>">
                        <button class="btn btn-primary">Detail</button>
                    </a>
                    </div>
                </div>
            </div>
            <?php } 
            if ($empty) {
                echo "No event found";
            }
            
            ?>
        </div>
        </div>
    </body>
</html>    