<?php

//Написати PHP функцію яка повертає масив зі всіма компонентами для url адреси і вивести їх (через вбудовану ф-цію в php):
//Вхідні данні:
//(string) http://php.net/manual-lookup.php?pattern=test&scope=quickref#quickref_functions
//Результат:
//scheme: xxxxx
//host: xxxxx

$url = 'http://php.net/manual-lookup.php?pattern=test&scope=quickref#quickref_functions';
echo '<pre>';
print_r(parse_url($url));
echo '<pre>';