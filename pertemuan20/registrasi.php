<?php 
require 'functions.php';


if(isset($_POST["register"])){

if(registrasi($_POST) > 0 ){
    echo "<script>
alert ('user baru berhasil di tambahkan');
        </script>";
}else{
    echo mysqli_error($db);
}


}




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    label{
        display: block;
    }
</style>
<body>
    <h1>Halaman Registrasi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username" >username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password" class="col-sm-2 col-form-label">password :</label>
                <input type="password"  name="password" id="password">
            </li>
            <li>
                <label for="password2">password2 :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
            <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="register">Confirm identity</button>
  </div>
            </li>

        </ul>




    </form>


</body>
</html>