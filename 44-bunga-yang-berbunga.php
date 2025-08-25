<?php
include 'menu.php'
?>

<?php
$principal =1000;
$rate = 5;
$time = 2;
$amount = 0 ;

$amount = $principal * (1 + ($rate /100)) ** $time;


echo "The amout after $time yers is: $amount";
?>