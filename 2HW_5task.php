<?php
//
//Print only:
//"sta" => "value3"
//"bue" => "value4"
//"vas" => "value5"
//from:
$array = array(
    "bla" => array(
        "klo" => "value1",
        "tre" => "value2",
        "din" => array(
            "sta" => "value3",
            "bue" => "value4",
            "vas" => "value5"),
        "dfe" => "value6",
        "qwe" => "value7")
);

foreach($array as $item){
    if (is_array($item)){
        foreach($item as $i){
            if (is_array($i)){
                print_r($i);
            }
        }
    }
}

