<?php
include 'menu.php';

//penugasan 
$x = 2;
$y = 20;

//sebelum dijumlahkan

echo $x . "\n";
//$hasil = $x+$y;


$x += $y;
//setelah di jumlahkan
echo $x . "\n";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<li>
    <h3>Matematika (melakukan perhitungan)</h3>
    <ul>
        <li>
            + (penjumlahan)
            <ul><li><?php print(1+11); ?></li></ul>
        </li>
    </ul>
    <ul>
        <li>
            - (pengulangan)
            <ul><li><?php print(3333-278); ?></li></ul>
        </li>
    </ul>
    <ul>
        <li>
            * (perkalian)
            <ul><li><?php $hasil=3333*278;print($hasil); ?></li></ul>
        </li>
    </ul>

    <ul>
        <li>
            / (pembagian)
            <ul><li><?php $hasil=3333/278;print($hasil); ?></li></ul>
        </li>
    </ul>

    <ul>
        <li>
            % (modulus=sise pembagian)
            <ul><li><?php $hasil=3333%278;print($hasil); ?></li></ul>
        </li>
    </ul>

</li>
</body>
</html>
