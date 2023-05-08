<?php 
include "koneksi.php";
include 'proses_regis.php';
$query = mysqli_query($conn,"SELECT * from movie limit 5");
 
$date = mysqli_query($conn,"SELECT * FROM movie order by Release_date desc limit 5");
    while($row = mysqli_fetch_assoc($date));

$genre1 = mysqli_query($conn, "SELECT * FROM movie WHERE Genre LIKE '%Action' limit 5");
$genre2 = mysqli_query($conn, "SELECT * FROM movie WHERE Genre LIKE '%Comedy' limit 5");

// $cari = 
// $rekomendasi = file_get_contents('rekomendasi2.json');
// $output = json_decode($rekomendasi, true);
// $output = $output["rekomendasi_film"];
$rekomendasi = mysqli_query($conn,"SELECT * FROM hasil_rekomendasi where id_pengguna in (select max(id_pengguna) From hasil_rekomendasi) limit 5")
?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <title>
            MovieRec
        </title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h1 class="text-center" style="color:dodgerblue; font-weight:bold">MovieRec</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <form class="form-inline">
                        <input class="form-control input-sm mr-2" style="width:60%; margin-left:150px"type="text" placeholder="search title/genre/overview" aria-label="Search" name="keyword">
                        <a button class="btn btn-outline-success my-2 my-sm-0" type="submit" name ="submit" href="search_view.php">Search</a></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container mt-2">
            <div class ="row mb-2">
                <div class="col-4">
                    <h4 style="font-weight:bold">Recomendation</h4>
                </div>
                <div class="col-7"  style="text-align: right;">
                    <a h5 href="see_all.php"> see all </a></h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                        <?php 
                            foreach($rekomendasi as $row) : ?>
                                <div class="card-deck" style="width: 220px; display:inline-block; margin-bottom:10px; margin-right:10px">
                                <div class="card">
                                    <img src="<?= $row['Poster_URL']; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 16;"><?= $row['Title']; ?></h5>
                                        <p class="card-text" style="font-size: 12;"><?= $row['Genre']; ?></p>
                                    </div>
                                </div>
                            </div>
                            
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class ="row mb-2">
                    <div class="col-4">
                        <h4 style="font-weight:bold">Newest</h4>
                    </div>
                    <div class="col-7"  style="text-align: right;">
                        <a h5 href=""> see all </a></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?php $i= 1;
                        foreach($date as $row): ?>
                            <div class="card-deck" style="width: 220px; display:inline-block; margin-bottom:10px; margin-right:10px">
                                <div class="card">
                                    <img src="<?= $row['Poster_URL']?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 16;"><?= $row['Title'] ?></h5>
                                        <p class="card-text" style="font-size: 12;"><?= $row['Genre'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
        </div>
        <div class="container mt-5">
            <div class ="row mb-2">
                    <div class="col-4">
                        <h4 style="font-weight:bold">Action Movie</h4>
                    </div>
                    <div class="col-7"  style="text-align: right;">
                        <a h5 href=""> see all </a></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?php $i= 1;
                        foreach($genre1 as $row): ?>
                            <div class="card-deck" style="width: 220px; display:inline-block; margin-bottom:10px; margin-right:10px">
                                <div class="card">
                                    <img src="<?= $row['Poster_URL']?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 16;"><?= $row['Title'] ?></h5>
                                        <p class="card-text" style="font-size: 12;"><?= $row['Genre'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
        </div>
        <div class="container mt-5">
            <div class ="row mb-2">
                    <div class="col-4">
                        <h4 style="font-weight:bold">Comedy Movie</h4>
                    </div>
                    <div class="col-7"  style="text-align: right;">
                        <a h5 href=""> see all </a></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?php $i= 1;
                        foreach($genre2 as $row): ?>
                            <div class="card-deck" style="width: 220px; display:inline-block; margin-bottom:10px; margin-right:10px">
                                <div class="card">
                                    <img src="<?= $row['Poster_URL']?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 16;"><?= $row['Title'] ?></h5>
                                        <p class="card-text" style="font-size: 12;"><?= $row['Genre'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
        </div>
    </body>
</html>