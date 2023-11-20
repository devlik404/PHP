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

        //upload gambar
        $image = upload();
        if(!$image) {
            return false;
        }
        


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


//upload gambar


function upload()
{
    $namefiles = $_FILES['image']['name'];
    $ukuranfiles = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpname = $_FILES['image']['tmp_name'];

    // Cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "
        <script>
             alert('Pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    // Cek apakah yang diupload adalah gambar
    $ekstensivalid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = pathinfo($namefiles, PATHINFO_EXTENSION);
    $ekstensigambar = strtolower($ekstensigambar);
    if (!in_array($ekstensigambar, $ekstensivalid)) {
        echo "
        <script>
             alert('Upload gambar menggunakan format JPG, JPEG, atau PNG!');
        </script>";
        return false;
    }

    // Cek jika ukurannya terlalu besar
    if ($ukuranfiles > 1000000) {
        echo "
        <script>
             alert('Ukuran gambar terlalu besar!');
        </script>";
        return false;
    }

    // Lolos pengecekan, gambar siap diupload

    // Generate nama unik dengan ekstensi yang sama dengan gambar asli
    $uniquename = uniqid() . "." . $ekstensigambar;

    move_uploaded_file($tmpname, 'img/' . $uniquename);

    return $uniquename;
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
        $imagelow = ($data["imagelow"]);
        $image = htmlspecialchars($data["image"]);
        $judul =  htmlspecialchars($data["judul"]);
        $studio =  htmlspecialchars($data["studio"]);
        $status = htmlspecialchars( $data["status"]);
        $season =  htmlspecialchars($data["season"]);
        $dirilis = htmlspecialchars( $data["dirilis"]);
        $durasi = htmlspecialchars( $data["durasi"]);
        $tipe =  htmlspecialchars($data["tipe"]);
        $genre =  htmlspecialchars($data["genre"]);


        //cek apakah user pilih image baru atau tidak

        if($_FILES['image']['error'] === 4 ) {
            $image = $imagelow;
        }else{
            $image = upload();
        };

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