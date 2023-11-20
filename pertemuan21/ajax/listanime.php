<?php 
sleep(1);
require '../functions.php';
$keyword = $_GET["keyword"];

$query ="SELECT * FROM listanime
WHERE judul LIKE '%$keyword%' OR studio LIKE '%$keyword%' ";

$listanime = query($query);

?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">no.</th>
        <th scope="col">aksi</th>
        <th scope="col">image</th>
        <th scope="col">judul</th>
        <th scope="col">studio</th>
        <th scope="col">status</th>
        <th scope="col">season</th>
        <th scope="col">dirilis</th>
        <th scope="col">durasi</th>
        <th scope="col">tipe</th>
        <th scope="col">genre</th>
    </tr>
    </thead>

<?php $i = 1 ; ?>
<?php foreach($listanime as $row) : ?>

<tr>
    <td><?= $i; ?></td>
    <td>
    <div class="d-flex col-12 mx-auto ">
    <button type="button" class="btn btn-secondary"> <a href="update.php?id=<?= $row["id"]; ?>">ubah</a> </button>
    <div class="vr m-2"></div>
  <button type="button" class="btn btn-outline-danger"><a href="delete.php?id=<?= $row["id"]; ?>" onclick = "return confirm('apakah anda ingin menghapusnya?');">hapus</a></button>
    </div>
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
<?php endforeach ; ?>

</table>