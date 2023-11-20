<?php 
session_start();       

if(isset($_SESSION["login"]) ) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

if(isset($_POST["login"]) ) {
    

    $username = $_POST["username"];
    $password = $_POST["password"];

   $result =  mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

    //cek username
if(mysqli_num_rows($result) === 1){

    //cek password
    $row = mysqli_fetch_assoc($result);
   if( password_verify($password, $row["password"])){
    //set session
    $_SESSION["login"] = true;
    header("location: index.php");
    exit;
   }

}

$error = true;

}



?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>halaman login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php if(isset($error)) :?>
    <div class="alert alert-danger" role="alert">
  UserName/Password Error!!
</div>
    <?php endif; ?>

    <div class="container px-4 card m-3 md">
        <div class="judul d-flex justify-content-center">
        <h1>Halam login</h1>
        </div>
    <form action="" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="usernameHelp">
    
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
  <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>
    </div>
   
</body>
</html>