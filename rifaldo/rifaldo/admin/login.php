<?php

session_start();


$username = $_POST['username'];
$password = $_POST['password'];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat",'root','');
$query = $koneksi->query("SELECT * FROM `masyarakat` WHERE username='$username' AND password='$password'");
$data = $query->fetchAll();
$_SESSION['nik'] = $data['nik'];

if($query){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
header ("location:home.php"); 
}