<?php
/*
Напишите функцию для сортировки массива.

Исходный массив:

array(33,22,11,55,'wm-school')
Результат сортировки:

Array ( [0] => wm-school [1] => 11 [2] => 22 [3] => 33 [4] => 55 )
*/

function array_sort($a) {
 for($x=0;$x< count($a);++$x) {
    $min = $x;
  for($y=$x+1;$y< count($a);++$y) {
	 if($a[$y] < $a[$min] ) {
	   $temp = $a[$min];
	   $a[$min] = $a[$y];
	   $a[$y] = $temp;
	 }
	}
  }
 return $a;
 }
 
$a = array(33,22,11,55,'wm-school');
print_r(array_sort($a));
?>