<?php
/*
Напишите сценарий PHP для добавления / вычитания количества дней с определенной даты.

Пример вывода:

Исходная дата: 2021-01-01
До 40 дней: 2020-11-22
Через 40 дней: 2021-02-10
*/

$dt='2021-01-01';
echo 'Исходная дата: '.$dt."\n";
$no_days = 40;
$bdate = strtotime("-".$no_days." days", strtotime($dt));
$adate = strtotime("+".$no_days." days", strtotime($dt));
echo 'До 40 дней: '.date("Y-m-d", $bdate)."\n";
echo 'Через 40 дней: '.date("Y-m-d", $adate)."\n";
?>