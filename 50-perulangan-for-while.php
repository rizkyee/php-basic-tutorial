<p>For</p>
<?php
include 'menu.php';

//1 inisialisasi varibale control
//2 kondisi (true) dijalankan; false > berhenti )
//3 perubahan varible control setelah 1x perulangan
for ($i = 1; $i <= 5; $i++) {
    echo "Ini adalah perulangan ke-$i <br>";
}
?>
<p>While</p>
<?php
$i = 1;
do {
    echo "Perulangan ke-$i <br>";
    $i++;
} while ($i <= 5);
?>

