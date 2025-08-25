<?php
include 'menu.php';

$dayNumber = 4;

switch ($dayNumber) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wenesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Sturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day number. please enter a number between 1 and 7.";

}


?>

<h2>hari indonesia</h2>

<?php
$timestamp = strtotime("2024-11-12");
$dayNumber = date('w', $timestamp);

switch ($dayNumber) {
    case 1:
        echo "Senin";
        break;
    case 2:
        echo "Selasa";
        break;
    case 3:
        echo "Rabu";
        break;
    case 4:
        echo "Kamis";
        break;
    case 5:
        echo "Jumaat";
        break;
    case 6:
        echo "Sabtu";
        break;
    case 7:
        echo "Minggu";
        break;
    default:
        echo "Tanggal yang anda masukkan salah. Masukkan tahun-bulan-tanggal";

}


?>
