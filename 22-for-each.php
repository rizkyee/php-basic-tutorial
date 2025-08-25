<?php
// include: menyisipkan kode dari file lain.
include 'menu.php';
define("ENTER", "<br>");
echo "<br>";
echo "<br>";
$names = ["Eko", "Kurniawan", "Khannedy"];
// menggunakan teknik for
for ($i = 0; $i < count($names); $i++) {
 echo "Data ke $i = $names[$i]" . ENTER;
}
echo "<br>";
echo "<br>";
// menggunakan teknik foreach
foreach ($names as $name) {
 echo "Hello $name" . ENTER;
}

echo "<br>";
echo "<br>";
foreach ($names as $index => $name) {
 echo "Data ke $index = $name" . ENTER;
}
echo "<br>";
echo "<br>";
$person = [
 "first_name" => "Eko",
 "middle_name" => "Kurniawan",
 "last_name" => "Khannedy"
];
foreach ($person as $key => $value) {
 echo "$key : $value" . ENTER;
}



// ini array Associative
$person = [
[
"first_name" => "Eko",
"middle_name" => "Kurniawan",
"last_name" => "Khannedy"
],
[
"first_name" => "Mohammad",
"middle_name" => "Zuz",
"last_name" => "Ubaidillah",
"alamat" => [
"lokasi" => ["b13", "no 14"],
"kecamatan" => "jombang",
"kabupaten" => "jombang",
"provinsi" => "jawa timur",
]
]
];

$nomor_urut = 1;
foreach ($person as $key => $val) {
echo $nomor_urut . $val['first_name'];


if (isset($val['alamat'])) {
echo "=> kecamatan: " . $val['alamat']['kecamatan'] ;
echo "=> kabupaten: " . $val['alamat']['kabupaten'] ;
echo "=> provinsi: " . $val['alamat']['provinsi'] ;
echo "=> blok: " . $val['alamat']['lokasi'][0] ;
echo "=> nomor: " . $val['alamat']['lokasi'][1] ;
} else {
echo "=> tidak diketahui: ";
}
$nomor_urut++;
}
