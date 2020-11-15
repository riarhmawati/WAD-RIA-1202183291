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
        <br>
        <div class="col-sm-10">
        <h2 class="text-left" style="color: DodgerBlue;">Buat Event</h2>
        </div>
        
        <div class="container-fluid mt-5">
        <form action="create.php" method="post" enctype="multipart/form-data" >
        <div class="row">
            <div class="col col-6" style="background-color:whitesmoke;height: 600px;">
            <div class="card h-100">
            <div style="height: 24px; border-radius: 4px 4px 0 0" class="bg-danger"></div>
            <div class="card-body">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group md-outline input-with-post-icon datepicker">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                </div>

                <div class="form-group">
                <label for="gambar">Upload Gambar</label>   
                <div class="custom-file">
                    
                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                    <label class="custom-file-label" for="gambar">Choose file</label>
                    </div>
                </div>

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
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="yyyy/mm/dd">  
                </div>

                <div class="form-row align-items-center">
                    <div class="form-group col-md-6"> 
                        <label for="mulai">Jam Mulai</label>
                        <input type="time" id="mulai" class="form-control" name="mulai">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="berakhir">Jam Berakhir</label>
                        <input type="time" id="berakhir" class="form-control" name="berakhir">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="tempat">Tempat</label>
                    <input type="text" class="form-control" id="tempat" name="tempat">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga">
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
                <a href="./Buat_Event.php">
                    <button class="btn btn-danger " style="float: right" name="cancel">cancel</button>
                    </a>
                    <button type="submit" class="btn btn-primary " style="float: right" name="submit">submit</button>
                   
                </div>

            </div>
            </div>
            </div>
            </div>
        </div>
        </form>
        </div>
       
    </body>
</html>    