<?php
//koneksi ke database


$db = mysqli_connect("localhost","root","" ,"anime");

//ambil data dari table listanime/query data listanime

$result = mysqli_query($db, "SELECT * FROM listanime");

//ambil data (fetch) listanime dari data object result
//ada 4 cara:
//mysqli_fetch_row() //mengembalikan array numerik
//mysqi_fetch_assoc() //mengembalikan array associative
//mysqli_fetch_array() //mengembalikan array numerik dan associative
//mysqli_fetch_object()

// while( $list = mysqli_fetch_assoc($result) ){
// var_dump($list);

// }

?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>
<body>
    <h1>daftar anime</h1>
    <table  border="1" cellpading="15" cellspacing="1">
     
    
    <tr>
            <th>no.</th>
            <th>aksi</th>///////////////////////
            <th>image</th>
            <th>judul</th>
            <th>studio</th>
            <th>status</th>
            <th>season</th>
            <th>dirilis</th>
            <th>durasi</th>
            <th>tipe</th>
            <th>genre</th>
        </tr>
<?php $i = 1 ; ?>
 <?php while($row = mysqli_fetch_assoc($result)) : ?>

    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row["image"]; ?>" width="50"></td>
        <td><?= $row["judul"]; ?></td>
        <td><?= $row["studio"]; ?></td>
        <td><?= $row["status"]; ?></td>
        <td><?= $row["season"]; ?></td>
        <td><?= $row["dirilis"]; ?></td>
        <td><?= $row["durasi"]; ?></td>
        <td><?= $row["tipe"]; ?></td>
        <td><?= $row["genre"]; ?></td>

    </tr>
<?php $i++ ;?>
<?php endwhile ; ?>

    </table>
</body>
</html>