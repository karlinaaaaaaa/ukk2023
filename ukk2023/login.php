<?php 

session_start();

$nik = $_POST["username"];
$nama = $_POST["password"];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $koneksi->query("SELECT * FROM login WHERE username='$nik' AND password='$nama'");
   {
    $_SESSION["password"] = $_POST['password'];
    $_SESSION["username"] = $_POST['username'];
    header("location:from login.php");}
   {
    header("location:from register.php");
   }