<html>
<head>
	<title>CRUD ARKADEMY</title>
</head>
<body>
	<h2>CRUD ARKADEMY</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PRODUK</h3>
    <?php
	include 'config.php';
	$nama_produk=$_GET['nama_produk'];
	$query = mysqli_query($conn,"select * from produk where nama_produk='$nama_produk'");
	while($data = mysqli_fetch_array($query)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama Produk</td>
					<td>
						<input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>">
					</td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</body>	
</html>