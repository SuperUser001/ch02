<?php
/*
Напишите сценарий PHP, удаляющий пробелы из строки.

Пример строки: Быстрая " "   рыжая лиса
Ожидаемый результат: Быстрая""рыжаялиса
*/

$str1 = 'Быстрая " "   рыжая лиса';
echo preg_replace('/\s+/', '', $str1)."\n";
?>