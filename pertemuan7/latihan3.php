<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ):  ?>
<h1>halo,selamat datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

    <form action=" " method="post" >
        <p>masukan nama :</p>
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>