<?php
//Напишите сценарий PHP, чтобы получить вчерашнюю дату.
$dt = new DateTime();
$dt->sub(new DateInterval('P1D'));
echo $dt->format('F j, Y')."\n";
?>