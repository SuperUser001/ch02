<?php
/*
Напишите сценарий PHP, удаляющий последнее слово из строки.

Пример строки: Быстрая рыжая лиса
Ожидаемый результат: Быстрая рыжая
*/
    $str1 = 'Быстрая рыжая лиса';
    echo preg_replace('/\W\w+\s*(\W*)$/iu', '$1', $str1)."\n";
?>