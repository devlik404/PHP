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



function tambah($data){

    global $db;


        $image = htmlspecialchars($data["image"]);
        $judul =  htmlspecialchars($data["judul"]);
        $studio =  htmlspecialchars($data["studio"]);
        $status = htmlspecialchars( $data["status"]);
        $season =  htmlspecialchars($data["season"]);
        $dirilis = htmlspecialchars( $data["dirilis"]);
        $durasi = htmlspecialchars( $data["durasi"]);
        $tipe =  htmlspecialchars($data["tipe"]);
        $genre =  htmlspecialchars($data["genre"]);

           //query insert data
   $query = "INSERT INTO listanime
             VALUES ('','$image','$judul','$studio','$status','$season',
                         '$dirilis','$durasi','$tipe','$genre')
         ";
   
   mysqli_query($db, $query);

   return mysqli_affected_rows($db);

}


function delete($id){
    global $db;

    $del = "DELETE FROM listanime where id = $id ";

    mysqli_query($db, $del);

    return mysqli_affected_rows($db);



}

function update($data){

    global $db;

        $id = $data["id"];
        $image = htmlspecialchars($data["image"]);
        $judul =  htmlspecialchars($data["judul"]);
        $studio =  htmlspecialchars($data["studio"]);
        $status = htmlspecialchars( $data["status"]);
        $season =  htmlspecialchars($data["season"]);
        $dirilis = htmlspecialchars( $data["dirilis"]);
        $durasi = htmlspecialchars( $data["durasi"]);
        $tipe =  htmlspecialchars($data["tipe"]);
        $genre =  htmlspecialchars($data["genre"]);

           //query insert data
   $query = "UPDATE listanime SET

                image = '$image',
                judul = '$judul',
                studio = '$studio',
                status = '$status',
                season = '$season',
                dirilis = '$dirilis',
                durasi = '$durasi',
                tipe = '$tipe',
                genre = '$genre'
            

            WHERE id ='$id'
             ";
   
   mysqli_query($db, $query);

   return mysqli_affected_rows($db);

}

//search
function src($search){
    $query = "SELECT * FROM listanime
    WHERE
    judul LIKE '%$search%' OR
    studio LIKE '%$search%'

    ";

    return query($query);
}



?>