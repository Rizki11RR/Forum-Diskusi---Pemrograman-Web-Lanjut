<?php 
include('./db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "INSERT INTO users (name, username, password) VALUES ('$nama', '$username', '$password')";
    $query = mysqli_query($conn, $sql);
        if($query){
            echo "<script>alert('Registrasi Berhasil!');
            document.location='login.php';
            </script>";
        }else {
          echo "<script>alert('Registrasi Berhasil Gagal !');
          document.location='register.php';
          </script>";
        }
}
