<?php
//Напишите сценарий PHP, чтобы получить текущую дату/время "Europe/Moscow".
date_default_timezone_set('Europe/Moscow');
$date = date('m/d/Y h:i:s a', time());
echo $date;
?>