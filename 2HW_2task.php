<?php
//Create an array with 10 elements, where each element, is equal to the square of appropriate numbers.
//Example of output:
//array(4) { [0]=> int(0) [1]=> int(1) [2]=> int(4) [3]=> int(9) ... }

$num = 10;
$associate_arr = array();
for($i = 0; $i < 10; $i++) {
    $associate_arr[] = $i*$i;
}
var_dump($associate_arr);