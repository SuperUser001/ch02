<?php
/*Напишите сценарий PHP для преобразования секунд в дни, часы, минуты и секунды.

Пример секунд: 200000
Ожидаемый результат: 2 дня, 7 часов, 33 минуты и 20 секунд.
*/
function convert_seconds($seconds) 
 {
  $dt1 = new DateTime("@0");
  $dt2 = new DateTime("@$seconds");
  return $dt1->diff($dt2)->format('%a дней, %h часов, %i минуты и %s секунд');
  }
echo convert_seconds(200000)."\n";
?>