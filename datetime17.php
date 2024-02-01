<?php
/*
Напишите функцию PHP для получения даты начала и окончания недели (по номеру недели) определенного года.

Пример вывода:

Пример недели и года: 12, 2021
Дата начала недели: 2021-3-24
Дата окончания недели: 2021-3-30
*/

function Start_End_Date_of_a_week($week, $year)
{
    $time = strtotime("1 January $year", time());
  $day = date('w', $time);
  $time += ((7*$week)+1-$day)*24*3600;
  $dates[0] = date('Y-n-j', $time);
  $time += 6*24*3600;
  $dates[1] = date('Y-n-j', $time);
  return $dates;
}

$result = Start_End_Date_of_a_week(12,2021);
echo 'Дата начала недели: '. $result[0]."\n";
echo 'Дата окончания недели: '. $result[1];
?>