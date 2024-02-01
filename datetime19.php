<?php
/*
Напишите сценарий PHP для расчета количества недель между двумя датами.

Пример вывода:

с 01.01.2020 по 31.12.2020 прошло 52 недели.
*/

function week_between_two_dates($date1, $date2)
{
    $first = DateTime::createFromFormat('m/d/Y', $date1);
    $second = DateTime::createFromFormat('m/d/Y', $date2);
    if($date1 > $date2) return week_between_two_dates($date2, $date1);
    return floor($first->diff($second)->days/7);
}

$dt1 = '1/1/2020';
$dt2 = '12/31/2020';
echo 'С '.$dt1.' по '. $dt2. ' прошло '. week_between_two_dates($dt1, $dt2).' недели';
?>