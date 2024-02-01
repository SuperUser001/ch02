<?php
/*
Напишите сценарий PHP для удаления всех символов из строки, кроме a-z A-Z 0-9 или " ".

Пример строки: abcde$ddfd @abcd )der]
Ожидаемый результат: abcdeddfd abcd der
*/

    $string = 'abcde$ddfd @abcd )der]';
    echo 'Старая строка : '.$string.'<br>';
    $newstr = preg_replace("/[^A-Za-z0-9 ]/", '', $string);
    echo 'Новая строка : '.$newstr."\n";
?>