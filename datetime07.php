<?php
/*
Напишите сценарий PHP для расчета количества дней между двумя датами.
*/
$to_date = time(); // Введите здесь свою дату, например strtotime("2021-01-02")
$from_date = strtotime("2015-01-31");
$day_diff = $to_date - $from_date;
echo floor($day_diff/(60*60*24))."\n";
?>