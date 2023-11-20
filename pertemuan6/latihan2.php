<?php 
// $mahasiswa = [
//     ["malik fajar","21212246","teknik 
// informatika","fajar@gmaill.com"],
// ["agung supiryatno","2124434","teknik 
// industri","agus@gmaill.com"],
// ["jaja mulyana","21344443","sistem informasi","jaja@gmaill.com"]

// ];


// array associative
// definisinya sama dengan array numeril,kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa =[
    [
    "nim" => "211224750",
    "nama" => "malik fajar",
    "jurusan" => "teknik informatika",
    "E-mail" => "malikfajar@gmail.com",
    "photo" => "1.gambar.jpg"
    ],
    [
        "nama" => "caca kumala",
        "nim" => "21122550",
        "jurusan" => "teknik biologi",
        "E-mail" => "caca@gmail.com",
        "photo" => "1.gambar.jpg"
    ],
    [
        "jurusan" => "sistem informasi",
        "nama" => "vita nuraini",
        "nim" => "2116666750",
        "E-mail" => "vita@gmail.com",
        "photo" => "1.gambar.jpg"
        ]

] ;
echo $mahasiswa[1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      
            <li><img src="img/<?= $mhs ["photo"]; ?>"></li>
            <li>nama : <?=  $mhs["nama"]; ?></li>
            <li>nim  : <?= $mhs["nim"]; ?></li>
            <li>jurusan; : <?= $mhs["jurusan"]; ?></li>
            <li>E-mail : <?=  $mhs["E-mail"]; ?></li>
           
       
    </ul>
    <?php endforeach ; ?>
</body>
</html>