<?php
/*
pertemuan 2 -php dasar
sintak php
-echo =print
-print_r
-var_dump

*/

// print_r("malik fajar");
// print_r("malik fajar");
// var_dump("malik fajar");
// echo "malik fajar";
// echo 123;
// echo true;
// echo false;


// variabel dan tipe data:
// variabel
// $name = "malik fajar";
// echo "hallo nama saya $name";

// operator
// aritmatika
// + - / * %

// pengabungan string /concatenation /concat
//  .
// $first_name = "malik";
// $last_name = "fajar";
// echo  $first_name ." ". $last_name;

// assignment
// =, +=, *=, /=, %=, .=

// $x = 1;
// $x += 4;
// echo $x;

// $nama = "malik ";
// $nama .=" ";
// $nama .= "fajar";
// echo $nama;

// perbandingan
// <, >, <=, >=, ==, !=
// var_dump(3 == "3");

// identitas
// ===, !==
// var_dump(3 === "3");

// logika
// && harus menghasilakan true, || salah satunya harus true maka nilai aka true, !
$x =10;
var_dump ($x < 20 || $x % 2 == 1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>perkenlaan nama saya <?php echo "malik fajar"; ?></h5>
</body>
</html>



























<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
</head>
<body>
    <h1>selamat datang para <?php echo $name;?></h1>

</body>
</html> -->