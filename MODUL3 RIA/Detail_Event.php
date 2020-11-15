<!DOCTYPE html>
<html>
    <head>
        <title>EAD EVENTS</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
    
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     
    </head>
    <?php
    include ('config.php');
    $id = $_GET["id"];
    $query = "SELECT * FROM event where id = $id";
    $select = mysqli_query($conn, $query);
    $event = $select->fetch_assoc();

    ?>
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

        <h2 class="text-center" style="color: DodgerBlue;">DETAILS EVENT!</h2>
        <div class="container-card" style="width: 50rem;margin: auto;padding-top: 30px;">
            <div class="card">
                <img src="gambar/<?= $event['gambar'] ?>" class="card-image-top" style="max-height: 400px; max-widht: 400px;">
            <div class="card-body" style="line-height: 70%;">
                <h3><?= $event["name"] ?></h3>
                <p class="font-weight-bold">Deskripsi</p>
                <p><?= $event["deskripsi"] ?></p>
                <div class="row">
                    <div class="col col-6">
                        <p class="font-weight-bold">Informasi Event</p>
                           <p>
                           <i class="fa fa-calendar" style="color: orange"></i>
                            <?= $event["tanggal"] ?>
                        </p>
                        <p>
                            <i class="fa fa-map-marker" style="color: orange"></i>
                            <?= $event["tempat"] ?>
                        </p>            
                        <p>
                            <i class="fa fa-clock-o" style="color: orange"></i>
                            <?= $event["mulai"] ?> - <?= $event["berakhir"] ?>
                        </p>
                        <p>Kategori <?= $event["kategori"] ?></p>
                        <p class="font-weight-bold">HTM Rp. <?= $event["harga"] ?></p>
                    </div>
                    <div class="col col-6">
                        <p class="font-weight-bold">Benefit</p>
                        <ul>
                            <li><?= $event["benefit"] ?></li>   
                        </ul>
                    </div>
                </div>

                <div class="text-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">Edit</button>
                    <a href="delete.php?id=<?= $event["id"] ?>">
                    <button class="btn btn-danger"> delete</button>
                    </a>
                </div>

            </div>
            </div>
        </div>
    <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" aria-hidden="true" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="modal-dialog modal-xl" >
                
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" >Edit sesion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="Update.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="id" value="<?= $event['id'] ?>" hidden>
                        <div class="row">
            <div class="col col-6" style="background-color:whitesmoke;height: 600px;">
            <div class="card h-100">
            <div style="height: 24px; border-radius: 4px 4px 0 0" class="bg-danger"></div>
            <div class="card-body">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $event["name"] ?>">
                </div>

                <div class="form-group md-outline input-with-post-icon datepicker">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"><?= $event["deskripsi"] ?></textarea>
                </div>

                <div class="form-group">
                <label for="gambar">Upload Gambar</label>   
                <div class="custom-file">
                    
                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                    <label class="custom-file-label" for="gambar">Choose file</label>
                    </div>
                </div>
// karena text area, ga ada atribut <textarea> ... </textarea>

                <div class="form-group ">
                <legend class="col-form-label ">Kategori</legend>
                    
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kategori" id="kategori" value="online" checked>
                    <label class="form-check-label" for="kategori"> Online </label>
                </div>
                <div class="form-check form-check-inline">                
                    <input class="form-check-input" type="radio" name="kategori" id="kategori" value="offline">
                    <label class="form-check-label" for="kategori">Offline</label>
                </div>
                
            </div>
            </div>
            </div>
            </div>
            <div class="col col-6" style="background-color:whitesmoke;height: 600px;">
            <div class="card h-100">
            <div style="height: 24px; border-radius: 4px 4px 0 0" class="bg-primary"></div>
            <div class="card-body">    
            
                <div class="form-group md-outline input-with-post-icon datepicker">        
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value=" <?= $event["tanggal"] ?>" >  
                </div>

                <div class="form-row align-items-center">
                    <div class="form-group col-md-6"> 
                        <label for="mulai">Jam Mulai</label>
                        <input type="time" id="mulai" class="form-control" name="mulai" value="<?= $event["mulai"] ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="berakhir">Jam Berakhir</label>
                        <input type="time" id="berakhir" class="form-control" name="berakhir" value="<?= $event["berakhir"] ?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="tempat">Tempat</label>
                    <input type="text" class="form-control" id="tempat" name="tempat" value="<?= $event["tempat"] ?>">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $event["harga"] ?>">
                </div>
                <legend class="col-form-label ">Benefit</legend>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="benefit" name="benefit[]" value="snacks">
                    <label class="form-check-label" for="benefit">Snacks</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="benefit" name="benefit[]" value="sertifikat">
                    <label class="form-check-label" for="benefit">Sertifikat</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="benefit" name="benefit[]" value="souvenir">
                    <label class="form-check-label" for="benefit">Souvenir</label>
                </div>

                <div class="input-left" >
                    <button class="btn btn-danger " data-dismiss="modal" style="float: right" name="cancel">cancel</button>
                    <button type="submit" class="btn btn-primary " style="float: right" name="submit">save changes</button>
                   
                </div>

            </div>
            </div>
            </div>
            </div>
        </div>
                        </form>
                    </div>
      
                   
                </div>
               
            </div>
    </div>
    
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>    