<?php
    include 'koneksi.php';
    // require_once "koneksi.php";
    // if(isset($_POST['submit'])){
    //     $nama_user = mysqli_real_escape_string($conn,$_POST['nama_user']);
    //     $email = mysqli_real_escape_string($conn,$_POST['email']);
    //     $pass = mysqli_real_escape_string($conn,$_POST['pass']);
    //     $umur = mysqli_real_escape_string($conn,$_POST['umur']);
    //     $jenis_kelamin = mysqli_real_escape_string($conn,$_POST['jenis_kelamin']);

    //         $input = mysqli_query($conn, "INSERT into pengguna values('','$nama_user','$email','$pass','$umur','$jenis_kelamin')");
    //         if($input){
    //            echo 'input berhasil';
    //         }else{
    //             echo 'input data gagal';
    //         }
    // }
?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="Assets/test.css">
        <title>
            hello brow
        </title>
    </head>
    <body style="background-color: rgb(255, 196, 179);">
    <div class="registrasi">
            <form action="proses_regis.php" method="POST">
                <h2 class="text-center" style="font-weight: bold;"> Registrasi </h2>
                <div class="form-group">
                    <label for="exampleInputName">Nama</label>
                    <input type="text" name="nama_user" class="form-control" id="exampleInputName" placeholder="masukan nama anda" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan email anda" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="masukan password anda" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Umur</label>
                    <input type="number" name="umur"class="form-control" id="exampleInputPassword1" placeholder="ex : 20" required>
                </div>
                <div class="row">
                    <div class="col">
                        <label style=" color: grey;"> Jenis kelamin :</label>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Perempuan" checked>
                            <label class="form-check-label" for="exampleRadios1">
                            Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2" value="Laki-laki">
                            <label class="form-check-label" for="exampleRadios2">
                            Laki-laki
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row ml-0 mt-2">
                        <label for="genre">Genre preference</label>
                    </div>
                    <div class="row mt-1">
                        <select id="genre" name="genre1" required>
                            <option value=""> Genre preference 1</option>
                            <option value="action">Action</option>
                            <option value="comedy">Comedy</option>
                            <option value="drama">Drama</option>
                            <option value="thriller">Thriller</option>
                            <option value="music">Music</option>                        
                            <option value="family">Family</option>
                            <option value="history">History</option>
                            <option value="war">War</option>
                            <option value="adventure">Adventure</option>
                            <option value="romance">Romance</option>
                            <option value="fantasy">Fantasy</option>
                            <option value="science fiction">Science Fiction</option>
                            <option value="crime">Crime</option>
                            <option value="mystery">Mystery</option>
                            <option value="animation">Animation</option>
                            <option value="horror">Horror</option>
                            <option value="documentary">Documentary</option>
                            <option value="tv movie">TV Movie</option>
                            <option value="western">Western</option>
                        </select>  
                    </div>
                    <div class="row mt-3">
                        <select id="genre" name="genre2" required>
                            <option value=""> Genre preference 2</option>
                            <option value="action">Action</option>
                            <option value="comedy">Comedy</option>
                            <option value="drama">Drama</option>
                            <option value="thriller">Thriller</option>
                            <option value="music">Music</option>                        
                            <option value="family">Family</option>
                            <option value="history">History</option>
                            <option value="war">War</option>
                            <option value="adventure">Adventure</option>
                            <option value="romance">Romance</option>
                            <option value="fantasy">Fantasy</option>
                            <option value="science fiction">Science Fiction</option>
                            <option value="crime">Crime</option>
                            <option value="mystery">Mystery</option>
                            <option value="animation">Animation</option>
                            <option value="horror">Horror</option>
                            <option value="documentary">Documentary</option>
                            <option value="tv movie">TV Movie</option>
                            <option value="western">Western</option>
                        </select>  
                    </div>
                    <div class="row mt-3">
                        <select id="genre" name="genre3" required>
                            <option value=""> Genre preference 3</option>
                            <option value="action">Action</option>
                            <option value="comedy">Comedy</option>
                            <option value="drama">Drama</option>
                            <option value="thriller">Thriller</option>
                            <option value="music">Music</option>                        
                            <option value="family">Family</option>
                            <option value="history">History</option>
                            <option value="war">War</option>
                            <option value="adventure">Adventure</option>
                            <option value="romance">Romance</option>
                            <option value="fantasy">Fantasy</option>
                            <option value="science fiction">Science Fiction</option>
                            <option value="crime">Crime</option>
                            <option value="mystery">Mystery</option>
                            <option value="animation">Animation</option>
                            <option value="horror">Horror</option>
                            <option value="documentary">Documentary</option>
                            <option value="tv movie">TV Movie</option>
                            <option value="western">Western</option>
                        </select>  
                    </div>
                </div>
                    <div class="row justify-content-end">
                        <div class="col">
                            <div class="text-center mr-1">
                                <button type="submit" name="submit" class="btn btn-primary" value="Submit">Submit</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </body>
</html>