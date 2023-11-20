<?php
//koneksi ke database

require 'functions.php';

$listanime = query("SELECT * FROM listanime ORDER BY id DESC");


//jika tombol cari di klik
if (isset($_POST["src"]) ){
    $listanime = src($_POST["search"]);
}

?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>halaman admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Daftar Anime</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Jadwal tayang
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Tambah Data</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form action="" method="post" class="d-flex">
      <input class="form-control me-2" type="search" name="search" placeholder="Search anime.." aria-label="Search">
      <button class="btn btn-outline-success" type="submit" name="src">Search</button>
    </form>
    </div>
  </div>
</nav>

<!-- navbar end -->


    <div class="container">
        <div class="row align-items-start">
        <h1 class="d-flex justify-content-center">List Anime</h1>



<div class="container-fluid">
   
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
  <button type="button" class="btn btn-outline-success m-3"><a href="tambah.php">Tambah Data +</a></button>
</div>

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
        </div>

    </div>
  
</body>
</html>