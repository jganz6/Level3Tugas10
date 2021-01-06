<?php
include 'config.php';
$nama_produk=$_GET['nama_produk'];
mysqli_query($conn,"DELETE FROM produk where nama_produk='$nama_produk'");
header("location:index.php");
?>

