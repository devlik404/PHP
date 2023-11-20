<?php 
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';

$listanime = query("SELECT * FROM listanime ORDER BY id DESC");

$mpdf = new \Mpdf\Mpdf();

$html ='<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List anime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row align-items-start">
        <h1 class="d-flex justify-content-center">List Anime</h1>
<table class="table">
<thead>
<tr>
    <th scope="col">no.</th>
    <th scope="col">image</th>
    <th scope="col">judul</th>
    <th scope="col">studio</th>
    <th scope="col">status</th>
    <th scope="col">season</th>
    <th scope="col">dirilis</th>
    <th scope="col">durasi</th>
    <th scope="col">tipe</th>
    <th scope="col">genre</th>
</tr>
</thead>';

 $i = 1 ;
foreach($listanime as $row) {
    $html .= '<tr>
    <td>'. $i++ .'</td>
    <td><img src="img/'. $row["image"] .' " width="50"></td>
    <td>'. $row["judul"] .'</td>
    <td>'. $row["studio"] .'</td>
    <td>'. $row["status"].'</td>
    <td>'. $row["season"].'</td>
    <td>'.$row["dirilis"].'</td>
    <td>'. $row["durasi"].'</td>
    <td>'.$row["tipe"].'</td>
    <td>'. $row["genre"].'</td>
    
            </tr>';
}


$html .='</table>
</div>
</div>

</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('list-anime.pdf', 'I');

?>

