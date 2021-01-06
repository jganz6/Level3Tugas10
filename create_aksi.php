<?php
include 'config.php';
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
mysqli_query($conn, "insert into produk values('$nama_produk','$keterangan','$harga','$jumlah')");
header("location:index.php");
?>