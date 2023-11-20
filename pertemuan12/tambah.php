<?php 

require 'functions.php';

if( isset ($_POST["submit"]) ) {

   //cek apakah data  berhasil di tambahkan atau tidak
   
   if( tambah($_POST) > 0 ){
    echo "
    <script>

    alert('data berhasil ditambahkan!');
    document.location.href = 'index.php';

    </script>
    
    ";
    
   }else{
    echo "
    <script>

    alert('data gagal ditambahkan!');
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
    
    <h1>tambah list</h1>

        <form action="" method="post">
            <ul>
            <li>
                    <label for="image">image :</label>
                    <input type="text" name="image" id="image" required>
                </li>
                <li>
                    <label for="judul">judul :</label>
                    <input type="text" name="judul" id="judul" required>
                </li>
                <li>
                   
                    <label for="studio">studio :</label>
                    <input type="text" name="studio" id="studio" required>
                </li>
                <li>
                    <label for="status">status :</label>
                    <input type="text" name="status" id="status" required>
                </li>
                <li>
                    <label for="season">season :</label>
                    <input type="text" name="season" id="season" required>
                </li>
                <li>
                    <label for="dirilis">dirilis :</label>
                    <input type="text" name="dirilis" id="dirilis" required>
                </li>
                <li>
                    <label for="durasi">durasi :</label>
                    <input type="text" name="durasi" id="durasi" required>
                </li>
                <li>
                    <label for="tipe">tipe :</label>
                    <input type="text" name="tipe" id="tipe" required>
                </li>
                <li>
                    <label for="genre">genre :</label>
                    <input type="text" name="genre" id="genre" required>
                </li>
                <li>
                    <button type="submit" name="submit">tambah data</button>
                </li>

                
            </ul>
        </form>


</body>
</html>