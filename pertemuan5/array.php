<?php
//arrray 
//variabel yg memiliki banyak nilai
//elemen pada array memiliki tipe data yg berbeda

//pasagan key dan value
//key-nya adalah index,yang dimulai dari 0

//contoh
$nama =["malik","fajar","soleh"];
$bulan = ["januari","februari","maret"];
$arr = [123 , false ,"ikan"];
//menampilkan array
//versi debugging
//var_dump() / print_()

// var_dump($nama);
// echo "<br>";
// print_r ($bulan);
// echo "<br>";

//menampilkan elemen/isi pada array

// echo $arr[2];
// echo "<br>";
// echo $nama[1];

//menambahakan elemen /isi pada array
$nama[] = "ujang";
var_dump ($nama);


?>