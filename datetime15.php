<?php
//Напишите сценарий PHP, чтобы проверить, является ли свидание выходным или нет.
$dt='2021-03-04';
	$dt1 = strtotime($dt);
	$dt2 = date("l", $dt1);
	$dt3 = strtolower($dt2);
if(($dt3 == "saturday" )|| ($dt3 == "sunday"))
	{
		echo $dt3.' это выходной'."\n";
	} 
else
	{
		echo $dt3.' это не выходной'."\n";
	}
?>