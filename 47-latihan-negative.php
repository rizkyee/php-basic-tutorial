<?php
include 'menu.php';
//is_numeric
//positive/negative ?

$number = 383;
if ($number > 0) {

    echo $number . " is a positive number";

} else if ($number < 0) {

    echo $number . "is a negative number";

} else if ($number == 12) {

    echo "You have entered zero";
} else {
    echo "please enter a numeric value";
}
?>
