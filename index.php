<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level3-Tugas10</title>
    <style>
        th{
            background-color:#FCB371;
        }
    </style>
</head>
<body>
    <center>
        <h1>CRUD ARKADEMY TABLE PRODUK</h1>
        <table border=1>
            <tr>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
            <?php
                $i = 0;
                $sql = "SELECT * FROM produk";
                $query = mysqli_query($conn,$sql);
            ?>
                <a href="create.php"><button style="width:37%;padding:10px;background:blue;color:white;">Insert Data</button></a>
            <?php
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?= $data['nama_produk']?></td>
                <td><?= $data['keterangan']?></td>
                <td><?= $data['harga']?></td>
                <td><?= $data['jumlah']?></td>
                <td>
                    <a href="edit.php?nama_produk=<?php echo $data['nama_produk']; ?>"><button>Edit</button></a>
                    <a href="delete.php?nama_produk=<?php echo $data['nama_produk']; ?>"><button>Delete</button></a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </center>
</body>
</html>