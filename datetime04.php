<?php
/*
Напишите сценарий PHP для вычисления разницы между двумя датами.

Примеры дат: 4 ноября 1980 г., 4 сентября 2021 г.
*/

$sdate = "1980-11-04";
$edate = "2021-04-04";

$date_diff = abs(strtotime($edate) - strtotime($sdate));

$years = floor($date_diff / (365*60*60*24));
$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf("%d лет, %d месяцев, %d дней", $years, $months, $days);
printf("\n");
?>