<?php 
$students =["malik fajar","21212246","teknik 
informatika","fajae@gmaill.com"];


$mahasiswa =[
    ["malik fajar","21212246","teknik 
informatika","fajae@gmaill.com"],
["adik soleh","212434","teknik 
informatika","adik@gmail.com"],
["adik soleh","212434","teknik 
informatika","adik@gmail.com"],
["adik soleh","212434","teknik 
informatika","adik@gmail.com"],
["adik soleh","212434","teknik 
informatika","adik@gmail.com"],
["adik soleh","212434","teknik 
informatika","adik@gmail.com"],

] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
<!-- cara pertama -->
    <h1>daftar mahasiswa</h1>
    <ul>
      <?php foreach ($students  as $stdn) : ?>
        <li><?= $stdn; ?></li>
        <?php endforeach ; ?>
    </ul>

    <!-- cara kedua -->
    <h1>daftar mahasiswa</h1>
    <ul>
        <li><?= $students  [0] ; ?></li>
        <li><?= $students   [1] ; ?></li>
        <li><?= $students [2] ; ?></li>
        <li><?= $students [3] ; ?></li>
        
    </ul>
    <!-- cara ke tiga -->
    <h1>daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li><?= $mhs [0] ; ?></li>
        <li><?= $mhs [1] ; ?></li>
        <li><?= $mhs[2] ; ?></li>
        <li><?= $mhs [3] ; ?></li>
        
    </ul>
<?php endforeach; ?>

</body>
</html>