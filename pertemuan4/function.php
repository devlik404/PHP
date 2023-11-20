<?php

function salam($ucapan,$name){
 $waktu=gmdate("H:i",time()+7*3600);
$t=explode(":",$waktu);
$jam=$t[0];
$menit=$t[1];

if ($jam >= 00 and $jam < 10 ){
if ($menit >00 and $menit<60){
$ucapan="Selamat Pagi";
}
}else if ($jam >= 10 and $jam < 15 ){
if ($menit >00 and $menit<60){
$ucapan="Selamat Siang";
}
}else if ($jam >= 15 and $jam < 18 ){
if ($menit >00 and $menit<60){
$ucapan="Selamat Sore";
}
}else if ($jam >= 18 and $jam <= 24 ){
if ($menit >00 and $menit<60){
$ucapan="Selamat Malam";
}
}else {
$ucapan="Error";

}


    return "$ucapan, $name ";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>
    <h4>selamat datang para tamu undangan</h4>
    <h1><?= salam("","malik"); ?></h1>
</body>
</html>
