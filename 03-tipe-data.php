<?php
include "menu.php";
?>
<?php

$message = "Halo ZUZ!";//string
$message2 = "123456789". $message; // string
//message2 outputnya 123456789 Halo Progammer!
$lightspeed = 123456789 ; //integer 
$pi = 3.123456789; //float
$jomblo = TRUE; // boolean 
$goldarah = array('A', 'B' , 'AB' , '0');//array
$kosong;
//var_dump adalah menampilkan data sekaligus memperliahatkan tipe data pada nilai tersebut
echo "<pre>";
var_dump($message);
var_dump($message2);
var_dump($lightspeed);
var_dump($pi);
var_dump($jomblo);
var_dump($goldarah);
var_dump($kosong);