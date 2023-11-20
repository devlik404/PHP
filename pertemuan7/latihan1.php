<?php
///varaibel scope
// $x = 10;

// function tampil(){
//     global $x ;
//     echo $x;
// }

// tampil();

//////////////////////////////////////

$anime = [
    [
     "image" => "kny.jpg",
     "judul" => "kimetsu no yaiba",
     "studio" => "ufotable",
     "status" => "ongoing",
     "season" => "summer 2022",
     "dirilis" => "2023",
     "durasi" => "24 min/eps",
     "tipe" => "tv",
     "genre" => "action,fantasy,historial,shounen"
    ],
    [
        "image" => "op.jpg",
        "judul" => "one piece",
        "studio" => "Toei animation",
        "status" => "ongoing",
        "dirilis" => "2023",
        "season" => "Fall 1999",
        "durasi" => "24 min/eps",
        "tipe" => "tv",
        "genre" => "action,fantasy,adventure,shounen,komedi,super power"
       ],
       [
        "image" => "nrt.jpg",
        "judul" => "Naruto Shippuden",
        "studio" => "pierrot",
        "status" => "completed",
        "season" => "winter 2007",
        "dirilis" => "2023",
        "durasi" => "24 min/eps",
        "tipe" => "tv",
        "genre" => "action,Adventure,super power,shounen,martial arts"
       ],
       [
        "image" => "aot.jpg",
        "judul" => "Shingeki No Kyojin",
        "studio" => "Mappa",
        "status" => "completed",
        "season" => "winter 2007",
        "dirilis" => "2013-09-28",
        "durasi" => "24 min/eps",
        "tipe" => "tv",
        "genre" => "action,survival,super power,shounen,shounen,military,gore"
       ],
       [
        "image" => "vsg.jpg",
        "judul" => "Vinland saga",
        "studio" => "Mappa",
        "status" => "completed",
        "season" => "winter 2019",
        "dirilis" => "2023",
        "durasi" => "24 min/eps",
        "tipe" => "tv",
        "genre" => "action,Adventure,super power,shounen,martial arts"
       ],
       [
        "image" => "jutsu.jpg",
        "judul" => "Jujutsu Kaisen",
        "studio" => "Mappa",
        "status" => "completed",
        "season" => "fall 2020",
        "dirilis" => "2023",
        "durasi" => "24 min/eps",
        "tipe" => "tv",
        "genre" => "action,Demons,supernatural,shounen,scholl"
       ],
       [
        "image" => "man.jpg",
        "judul" => "Chainsaw Man",
        "studio" => "Mappa",
        "status" => "completed",
        "season" => "Fall 2022",
        "dirilis" => "2023",
        "durasi" => "24 min/eps",
        "tipe" => "tv",
        "genre" => "action,Adventure,gore,shounen,supernatural"
       ],
       [
        "image" => "mashle.jpg",
        "judul" => "MASHLE",
        "studio" => "A-1 Picture",
        "status" => "Onggoing",
        "season" => "Apring 2023",
        "dirilis" => "2023",
        "durasi" => "24 min/eps",
        "tipe" => "tv",
        "genre" => "action,comedy,super power,fantasy,scholl,shounen,gag humor"
       ],
       [
        "image" => "dr.jpg",
        "judul" => "Dr.Stone",
        "studio" => "Tms Entertaimen",
        "status" => "Onggoing",
        "season" => "spring 2023",
        "dirilis" => "2023",
        "durasi" => "24 min/eps",
        "tipe" => "tv",
        "genre" =>"action,comedy,fantasy,sci-fi,time travel"
       ],
       [
        "image" => "onk.jpg",
        "judul" => "Oshi No KO",
        "studio" => "Doga Kobo",
        "status" => "onggoing",
        "season" => "spring 2023",
        "dirilis" => "2023",
        "durasi" => "24 min/eps",
        "tipe" => "tv",
        "genre" => "Drama,reincarnation,seinen,showbiz,supernatural"
       ]
  

];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list anime</title>
</head>
<body>
    <h1>list anime</h1>
    <ul>
<?php foreach ($anime as  $list) : ?>   
    <li>
       <a href="latihan2.php?image=<?= $list ["image"]; ?>&judul=<?= $list ["judul"]; ?>&studio=<?= $list["studio"]; ?>&status=<?= $list["status"]; ?>&season=<?= $list ["season"];?>&dirilis=<?= $list ["dirilis"];?>&durasi=<?= $list["durasi"];?>&tipe=<?=$list["tipe"]; ?>&genre=<?= $list ["genre"]; ?>"><?= $list["judul"]; ?></a>
    </li>

<?php endforeach ; ?>  
    </ul

</body>
</html>