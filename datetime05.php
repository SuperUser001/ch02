<?php
/*
Напишите сценарий PHP для преобразования даты из гггг-мм-дд в дд-мм-гггг.

Начальная дата: 2021-09-12
Ожидаемый результат: 12-09-2021
*/
$startDate = "2021-09-12";
$newDate = date("d-m-Y", strtotime($startDate));
echo $newDate."\n";
?>