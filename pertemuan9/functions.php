<?php
//koneksi ke database

$db = mysqli_connect("localhost","root","" ,"anime");
   

function query($newquery) {
    global $db; //global scope

    $result = mysqli_query($db, $newquery); //panggil query
    $rows =[]; //variabel kosong untuk diisi
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[]=$row;
    }
    return $rows;
}

?>