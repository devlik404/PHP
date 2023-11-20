<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
//ambil data id di url 

$id = $_GET["id"];


//query data listanime berdasrkan id

$list = query ( "SELECT * FROM listanime where id=$id")[0];



if( isset ($_POST["submit"]) ) {

   //cek apakah data  berhasil di ubah atau tidak
   
   if(update($_POST) > 0 ){
    echo "
    <script>

    alert('data berhasil diupdate!');
    document.location.href = 'index.php';

    </script>
    
    ";
    
   }else{
    echo "
    <script>

    alert('data gagal diupdate!');
    document.location.href = 'index.php';
    
    </script>
    
    ";
    
    
    
   
   } 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data anime</title>
</head>
<body>
    
    <h1>updatelist</h1>

        <form action="" method="post" enctype ="multipart/form-data">
            <input type="hidden" name="imagelow"  value="<?= $list["image"]; ?>">
            <input type="hidden" name="id" value="<?= $list["id"]; ?>">
            <ul>
            <li>
                    <label for="image"></label>
                    <img src="img/<?= $list['image']; ?>" alt="profile" width="50">
                    <br>
                    <input type="file" name="image" id="image">
                </li>
                <li>
                    <label for="judul">judul :</label>
                    <input type="text" name="judul" id="judul" required  value="<?= $list["judul"]; ?>">
                </li>
                <li>
                   
                    <label for="studio">studio :</label>
                    <input type="text" name="studio" id="studio" required value="<?= $list["studio"]; ?>">
                </li>
                <li>
                    <label for="status">status :</label>
                    <input type="text" name="status" id="status" required value="<?= $list["status"]; ?>">
                </li>
                <li>
                    <label for="season">season :</label>
                    <input type="text" name="season" id="season" required value="<?= $list["season"]; ?>">
                </li>
                <li>
                    <label for="dirilis">dirilis :</label>
                    <input type="text" name="dirilis" id="dirilis" required value="<?= $list["dirilis"]; ?>">
                </li>
                <li>
                    <label for="durasi">durasi :</label>
                    <input type="text" name="durasi" id="durasi" required value="<?= $list["durasi"]; ?>">
                </li>
                <li>
                    <label for="tipe">tipe :</label>
                    <input type="text" name="tipe" id="tipe" required value="<?= $list["tipe"]; ?>">
                </li>
                <li>
                    <label for="genre">genre :</label>
                    <input type="text" name="genre" id="genre" required value="<?= $list["genre"]; ?>">
                </li>
                <li>
                    <button type="submit" name="submit">update data</button>
                </li>

                
            </ul>
        </form>


</body>
</html>