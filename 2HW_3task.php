<?php
//On Grіdіcs working 5 Developers,  1 Project Manager and 2 QA.
//They need to do following tasks (because Adam, could fire them):
//1) “Resolve Merge Conflict”
//2) “Test Current Build”
//3) “Close door in the kitchen”
//
//Merge Conflicts could be solved only by Developers
//QA’s could test builds, only
//Manager could close doors, only
//
//You should display only one person for each tasks according to the requirements
//
//Example of output:
//array(3) { ["tikolakin"]=> string(10) "test build" ["snap"]=> string(20) "solve merge conflict" ["dmitriko"]=> string(11) "close doors" }
$miami_project = array(
    "Merge Conflicts" => array("Abram", "Snap", "Tarasich", "Gilmord", "Bless"),
    "Test Builds" => array("TikoLakin","Vitos"),
    "Close Doors" => array("Dmitriko"),
);
$results = array();
foreach($miami_project as $key => $value) {
    $results{$key} = $value [array_rand($value)];
    }
var_dump($results);