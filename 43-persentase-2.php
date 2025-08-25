<?php
include 'menu.php'
?>


<?php

$total = 200;
$part = 50;
$percentage = 0;

$percentage = ($part / $total ) * 100;


echo "The percentage of $part out of $total is: $percentage%";
?>
