    <?php
include 'menu.php';

$names = [
    'namaDepan' => 'mohammad',
    'namaTengah' => 'zuz',
    'namaBelakang' => 'ubaidillah',
    'alamat' => [
        'kecamatan' => "jombang",
        'nomor' => 20,
        'kabupaten' => "jombang",
        'negara' =>[
            'indonesia',
            'palestina'
        ],
    ],
];

//echo json_encode($names);
var_dump($names)
?>