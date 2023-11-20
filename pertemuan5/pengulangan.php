<?php
//pengulangan pada array
//for / foreach

$angka = [7,2,2,66,75,1,8];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perulangan pda php</title>
    <style>
        .kotak {
            width : 30px;
            height :50px;
            background-color : salmon;
            line-height : 50px;
            margin : 3px;
            float :left;
            text-align: center;
        }
        .clear{ clear:both;}
    </style>
</head>
<body>
    <?php for ($i = 0;$i < count($angka);$i++) {    ?>
    <div class="kotak">
        <?php echo $angka[$i];  ?>
    </div>
    <?php } ?>

    <div class="clear"></div>


<?php foreach($angka as $no){ ?>
    <div class="kotak"><?php echo $no ; ?></div>
<?php } ?>

<div class="clear"></div>
<!-- penulisan yang lebih singkat -->
<?php foreach ($angka as $no) : ?>
    <div class="kotak"><?= $no; ?> </div>
    <?php endforeach;?>
</body>
</html>