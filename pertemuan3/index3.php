<!-- perkondisian  -->
<?php 
// if else
// if else if else
// ternary
// switch

$x = 20;
if($x < 20){
    echo "malik";
}elseif($x == 20){
    echo "mafa";
} else{
    echo "fajar";
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg{
            background-color:yellow;
        }
    </style>
</head>
<body>
<table border="1" cellpadding="15">
    <?php for($i = 0;$i <= 5;$i++) { ?>
        <?php if($i % 2 == 0) : ?>
        <tr class="bg">
            <?php else : ?>
        <tr>
    <?php endif; ?>
        <?php for ($j = 1;$j <= 5;$j++) { ?>
            <td><?= $i,$j; ?></td>
            <?php } ?>
        </tr>
<?php } ?>
</table>
</body>
</html>