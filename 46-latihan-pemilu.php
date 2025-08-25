<?php
include 'menu.php';
//boleh pemilu?

$name = "saya";
$age = 19;

//jika nilai lebih besar
if ($age >= 13) {
    echo $name . ", anda diperboleh mencoblos";
} else {
    echo $name . ", anda belum boleh mencoblos";
}
?>