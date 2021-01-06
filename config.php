<?php
$username ="root";
$password="";
$host="localhost";
$db = "arkademy";

$conn = mysqli_connect($host, $username, $password, $db); 
if (!$conn) {
    die("Koneksi dengan MySQL gagal, Periksa config.php");
}
?>