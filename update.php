<?php
include 'config.php';
$nama_produk=$_POST['nama_produk'];
$keterangan=$_POST['keterangan'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
mysqli_query($conn,"update produk set nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga',jumlah='$jumlah' where nama_produk='$nama_produk'");
header("location:index.php");
?>