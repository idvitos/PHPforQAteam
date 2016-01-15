<?php

// You have an array:
// $hello_world = array("W", "o", " ", "l", "H", "!", "l", "o", "e", "r", "d", "l");
// You should print phrase "Hello World!" without quotes

$hello_world = array("W", "o", " ", "l", "H", "!", "l", "o", "e", "r", "d", "l");
var_dump($hello_world);
$indexes = array(4, 8, 3, 6, 7, 2, 0, 1, 9, 11, 10, 5);
$associate_hello_world = array();
foreach ($indexes as $key){
    $associate_hello_world[] = $hello_world[$key];
}
echo  "<br>" . "<br>" . implode($associate_hello_world);