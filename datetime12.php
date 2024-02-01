<?php
//Напишите сценарий PHP для изменения номера месяца на название месяца.
$month_num = 7;
$month_name = date("F", mktime(0, 0, 0, $month_num, 10));
echo $month_name."\n"; 
?>