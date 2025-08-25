<?php
include 'menu.php';

$bilangan_a =20;
$bil_b = 1;

//logika if
//and && kedua harus bernilai TRUE
if($bilangan_a == 20 && $bil_b == 1){
    //body bernilai TRUE 
    echo "Nilai Benar";
    echo "<br>";
}else{
    //body bernilai false
    echo "Nilai Salah";
    echo "<br>";
}

//logika if 
if ($bilangan_a == 2 || $bil_b == 2){
    echo "Nilai Benar";
    echo "<br>";
}else{
    echo "Nilai Salah";
    echo "<br>";
}

$bilangan_a = 2 ;
$bil_b = 2;

// karena nilai disalah satu bernilai benar
if ($bilangan_a == 2 || $bil_b == 1){
    echo "Nilai Benar";
    echo "<br>";
}else{
    echo "Nilai Salah";
    echo "<br>";
}

//karna nilai disalah satu bernilai benar 
if ($bilangan_a == 2 || $bil_b == 1){
    echo "Nilai Benar";
    echo "<br>";
}else{
    echo "Nilai Salah";
    echo "<br>";
}

$bilangan_a =2;
$bil_b =2;

//hanya salah satu saja yang benar. jika kedua variable yang benar maka salah
if ($bilangan_a == 2 xor $bil_b == 2){
    echo "Nilai Benar";
    echo "<br>";
}else{
    echo "Nilai Salah";
    echo "<br>";
}

//hanya salah satu saja yang benar. jika kedua variable yang benar maka salah 
if ($bilangan_a == 2 xor $bil_b == 2){
    echo "Nilai Benar";
    echo "<br>";
}else{
    echo "Nilai Salah";
    echo "<br>";
}

$bilangan_b = false;
//hanya salah satu saja yang benar. jika ada 2 yang benar maka salah
if ($bilangan_b){
    echo "Nilai Betul";
    echo "<br>";
}else{
    echo "Nilai Salah";
    echo "<br>";
}


//perbandingan if elseif elseif 

$nilai = 60;
$absen = 60;

if  ($nilai >= 80 && $absen >= 80) {
    $hasil = "Nilai Kamu A";
} else if ($nilai >= 70 && $absen >= 70){
    $hasil = "Nilai Kamu B";
} else if ($nilai >= 60 && $absen >= 60){
    $hasil ="Nilai Kamu C";
} else if ($nilai >= 50 && $absen >= 50){
    $hasil = "Nilai Kamu D";
}
