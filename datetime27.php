<?php
//Напишите сценарий PHP для преобразования числа в название месяца.
$month_num  = 9; // номер месяца для преобразования
$dateObj   = DateTime::createFromFormat('!m', $month_num);
$month_name = $dateObj->format('F');
echo $month_name."\n";
?>