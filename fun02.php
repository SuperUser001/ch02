<?php
/*
Перепишите сценарий предыдущего упражнения, чтобы получить возвращаемое значение, площадь прямоугольника с длиной и шириной, указанными в аргументах. Переместите оператор echo из функции за её пределы. Вызовите функцию внутри вывода, чтобы указать значение площади. (Вывод в браузер должен быть идентичен выводу для предыдущего упражнения.)
*/
//Определите функцию.
function recArea($l, $w){
  $area = $l * $w;
  return $area;
}
 
//Вызов функции.
echo  "Прямоугольник длиной 2 и шириной 4 имеет площадь " . recArea(2,4) .".";
?>