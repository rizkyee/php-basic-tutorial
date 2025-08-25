<?php
include "menu.php";

// ini array Associative
$data_hewan = [
[
"nama" => 'Gajah',
],
[
"nama" => 'harimau',
],
[
"nama" => 'kucing',
"ukuran" => 'besar',
],
[
"nama" => 'sapi',
]
];

// for ($i = 0; $i < count($data_hewan); $i++) {
// if ($data_hewan[$i]['nama'] == "harimau" || $data_hewan[$i]['ukuran'] == "besar") {
// echo $data_hewan[$i]['nama'] . PHP_EOL;
// }
// }

foreach ($data_hewan as $val) {
// null coalising
// echo $val['ukuran'] ?? 'belum diukur';
if (isset($val['ukuran'])) {
echo $val['ukuran'];
} else {
echo "belum diukur";
}
}
