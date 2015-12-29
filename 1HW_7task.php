<?php
$string = 'Google';
$length = 3;
if (strlen($string) > $length) {
    echo "<span style=\"color:red\">" . substr($string, 0, 1) . "</span>";
    echo substr($string, 1, strlen($string));
}