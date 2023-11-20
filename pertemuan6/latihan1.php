<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
    <style>
.diven{
    width:60px;
    background-color :green;
    text-align :center;
    line-height : 50px;
    margin :3px;
    float :left;
    transition :1s;
    

}
.diven:hover{
transform: rotate(360deg);
border-radius:50%;
}
.clear{
    clear:both;
}
    </style>
</head>
<body>
    <!-- array associatve /multidimensi -->
<?php 
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

?>
<?php foreach ($angka as $no) :?>
    <?php foreach($no as $x): ?>
   <div class="diven"><?= $x; ?></div> 
   <?php endforeach ; ?>
   <div class="clear"></div>
   <?php endforeach ;?>

</body>
</html>