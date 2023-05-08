<?php

   require_once 'koneksi.php';
   if(isset($_POST['submit'])){
        $nama_user = mysqli_real_escape_string($conn,$_POST['nama_user']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $pass = mysqli_real_escape_string($conn,$_POST['pass']);
        $umur = $_POST['umur'];
        $jenis_kelamin = mysqli_real_escape_string($conn,$_POST['jenis_kelamin']);
        $genre1 = mysqli_real_escape_string($conn,$_POST['genre1']);
        $genre2 = mysqli_real_escape_string($conn,$_POST['genre2']);
        $genre3 = mysqli_real_escape_string($conn,$_POST['genre3']);

            $input = mysqli_query($conn, "INSERT into pengguna (nama_user, email, pass, umur, jenis_kelamin, genre1, genre2, genre3)values('$nama_user','$email','$pass','$umur','$jenis_kelamin','$genre1', '$genre2', '$genre3')");
            if($input){
                echo "<script>window.location.href='tampilan.php';</script>";
            }else{
                echo 'input data gagal';
            }
        }
?>