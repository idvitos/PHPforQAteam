<!--1. Написати скрипт для виведення наступних рядків тексту-->
<!---->
<!--Вхідні данні :-->
<!--a)-->
<!--$search = 'computer';-->
<!--'Assume you wanted to find every file in the current directory and all subdirectories that contained the word computer, regardless of the letter case. To list every file containing the word computer, type the following:-->
<!--findstr /s /i /m "\<$search\>" *.*'-->
<!--b) 'Execute commands on files found by the find command: find -iname "MyCProgram.c" -exec md5sum {} \;'-->
<!--c)-->
<!--$file = 'thegeekstuff.txt';-->
<!--'Add line number for all non-empty-lines in a file: $ sed '/./=' $file | sed 'N; s/\n/ /''-->
<!---->
<!--Результат :-->
<!--a) Assume you wanted to find every file in the current directory and all subdirectories that contained the word computer, regardless of the letter case. To list every file containing the word computer, type the following:-->
<!--findstr /s /i /m "\<computer\>" *.*-->
<!--b) Execute commands on files found by the find command: find -iname "MyCProgram.c" -exec md5sum {} \;-->
<!--c) Add line number for all non-empty-lines in a file: $ sed '/./=' thegeekstuff.txt | sed 'N; s/\n/ /'-->


<pre>
<?php
$search .= htmlspecialchars('<computer>');
$file = 'thegeekstuff.txt';

print <<<END
Assume you wanted to find every file in the current directory and all subdirectories that contained the word computer, regardless of the letter case. To list every file containing the word computer, type the following:
findstr /s /i /m "\ $search \" *.*
Execute commands on files found by the find command: find -iname "MyCProgram.c" -exec md5sum {} \;
Add line number for all non-empty-lines in a file: $ sed '/./=' $file | sed 'N; s/\\n/ /'

END;

