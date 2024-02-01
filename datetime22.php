<?php
//Напишите сценарий PHP, чтобы получить предыдущие 6 месяцев текущего месяца.
$start = new DateTime('first day of this month - 6 months');
$end   = new DateTime('last month');
$interval  = new DateInterval('P1M'); 

$date_period = new DatePeriod($start, $interval, $end);
$months = array();
foreach($date_period as $dates) {
  array_push($months, $dates->format('F').' '.$dates->format('Y'));
}

print_r($months);
?>