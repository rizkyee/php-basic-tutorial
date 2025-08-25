<?php
// include: menyisipkan kode dari file lain.
include 'menu.php';
echo "<br>";
echo "<br>";
// pembuatan variabel
$counter = 1;
// contoh menggunakan while loop
while ($counter <= 10) {
 echo "Hello while loop : " . $counter . "<br>";
 $counter++;
}


echo "<br>";
echo "<br>";
// data hewan keseluruhan
$data_hewan = ['Gajah', 'harimau', 'Lumba-lumba', 'Zebra', 'Unta'];
// pembuatan variabel
$counter = 0;
// contoh menggunakan while loop
while ($counter < count($data_hewan)) {
 echo "while dan array ke-$counter : " . $data_hewan[$counter] . "<br>";
 $counter++;
}

echo "<br>";
echo "<br>";
// pembuatan variabel
$counter = 1;
// contoh menggunakan while loop
while ($counter <= 10) :
 echo "Hello while loop : " . $counter . "<br>";
 $counter++;
endwhile;


echo "<br>";
echo "<br>";



$data_hewan = ['Gajah', 'harimau', 
'Lumba-lumba', 'Zebra', 'Unta'];
// pembuatan variabel
$counter = 1;
// contoh menggunakan while loop
while ($counter < count($data_hewan)) {
    echo "while dan array ke-$counter : " . $data_hewan[$counter] . "<br>";
    $counter++;}


 echo "<br>";
echo "<br>";
// pembuatan variabel
$counter = 1;
// contoh menggunakan while loop
while ($counter <= 10) :
 echo "Hello while loop : " . $counter . "<br>";
 $counter++;
endwhile;


echo "<br>";
echo "<br>";

$data_hewan = [
    [
    "nama" => 'Gajah',
    "ukuran" => 'besar',
    ],
    [
    "nama" => 'harimau',
    "ukuran" => 'kecil',
    ],
    [
    "nama" => 'kucing',
    "ukuran" => 'kecil',
    ],
    [
    "nama" => 'sapi',
    "ukuran" => 'besar',
    ]
   ];

   for ($counter = 0; $counter < count($data_hewan); $counter++) {
    // percabangan logika if
    if ($data_hewan[$counter]['ukuran'] == 'besar') {
    // jika if nya bernilai true
    // maka perulangan akan dilanjutkan dengan kondisi selanjutnya
    continue;
    }
    echo "Data ke : $counter hewan " . $data_hewan[$counter]['nama'] . "<br>";
   }
