<?php
/*
Напишите сценарий PHP для удаления символов новой строки \n из строки.

Пример строки: Мерцай, мерцай, звездочка,\nКак мне интересно, кто ты. \nВверху над миром, так высоко, \nПодобно алмазу в небе.
Ожидаемый результат: Мерцай, мерцай, маленькая звездочка, Как мне интересно, кто ты. Вверху над миром так высоко, Подобно алмазу в небе.
*/

$str = "Мерцай, мерцай, звездочка,\nКак мне интересно, кто ты. \nВверху над миром, так высоко, \nПодобно алмазу в небе.";
echo preg_replace('/\s+/', ' ', trim($str))."\n";
?>