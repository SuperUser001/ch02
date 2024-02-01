<?php
/*Напишите сценарий PHP, чтобы вывести текущую дату на русском языке.

Пример вывода:

14 марта 2021
*/
$_months = array(".01." => "января", ".02." => "февраля", 
".03." => "марта", ".04." => "апреля", ".05." => "мая", ".06." => "июня", 
".07." => "июля", ".08." => "августа", ".09." => "сентября",
".10." => "октября", ".11." => "ноября", ".12." => "декабря");

$currentDate = date("d.m.Y");

$_monthD = date(".m."); 
$currentDate = str_replace($_monthD, " ".$_months[$_monthD]." ", $currentDate);
echo $currentDate;
?>