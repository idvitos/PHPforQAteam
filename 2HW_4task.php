<?php

//We have an array with random 10 $values from 1 till 100 (for example 1, 45, 23, 56, 78, 99, 2, 9, 77, 13). We need to create 2 new arrays where the sum of $array1, will be the approximate for sum in $array2.
//Note: the numbers in example are only example. It means that your code should be flexible and it should works fine with all random numbers from 1 to 100.
//
//Example:
//<?php
//// We have an array
//$array = array(1, 45, 23, 56, 78, 99, 2, 9, 77, 13);
//var_dump($array);
///*
//*
//* Some code here ...
//*
//*/
//// Output
//$array1 = array(23, 56, 78, 9); // 166
//$array2 = array(45, 99, 2, 13, 1); // 160
//var_dump($array1);
//var_dump($array2);

$full_arr = array(21, 47, 25, 14, 99, 84, 31, 59, 3, 17);
sort($full_arr);
$first_arr = array();
$second_arr = array();
$first_arr = array($full_arr[0], $full_arr[9], $full_arr[2], $full_arr[7], $full_arr[4] );
var_dump($first_arr);//203
echo "<br />";
$second_arr = array($full_arr[1], $full_arr[8], $full_arr[3], $full_arr[6], $full_arr[5]);
var_dump($second_arr);//197