<?php
//Напишите сценарий PHP, чтобы получить текущий месяц и предыдущие три месяца.
echo date("M - Y")."<br>";
echo date("M - Y",strtotime("-1 Months"))."<br>";
echo date("M - Y",strtotime("-2 Months"))."<br>";
echo date("M - Y",strtotime("-3 Months"))."<br>";
?>