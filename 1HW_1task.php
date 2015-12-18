<?php
//1. Використовуючи один або декілька циклів (for, if/else, while, switch/case), визначити день тижня коли ви народилися вводячи лише дату народження.
//Приклад:
//Вхідні дані - 27 July 1989
//Вихідні дані - Thursday
$timestamp = strtotime('1989-01-12');
$day = date('l', $timestamp);
echo "You were born on $day";
echo "<br />";