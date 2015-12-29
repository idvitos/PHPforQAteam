<?php

//Написати функцію для виведення таблиці множення на 9 для кожного з циклів:
//a) for
//b) while
//c) do-while
//d) foreach
//
//    Результат:
//1 * 9 // 9
//2 * 9 // 18
//…...
//9 * 9 // 81


//a) using for loop
echo "<table border='1'>";
for ($i = 1; $i < 10; $i++) {
    echo "<tr>";
    echo "<td>$i*9</td>";
    echo "<td>" . $i*9;  "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</br>";


//b) using while loop
echo "<table border='1'>";
$i=1;
while ($i<10) {
    echo "<tr>";
    echo "<td>$i*9</td>";
    echo "<td>" . $i * 9;"</td>";
    echo "</tr>";
    $i++;
}
echo "</table>";
echo "</br>";


//c) using do-while loop
echo "<table border='1'>";
$i=1;
 do {
    echo "<tr>";
    echo "<td>$i*9</td>";
    echo "<td>" . $i * 9;"</td>";
    echo "</tr>";
    $i++;
    }
while ($i<10);
echo "</table>";
echo "</br>";


//d) using foreach loop - does not work correctly
echo "<table border='1'>";
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $value) {
    echo "<tr>";
    echo "<td>" . $value . '*9' . "</td>";
    echo "<td>" .$value * 9 . "</td>";
    echo "</tr>";
 }
echo "</table>";
echo "</br>";
