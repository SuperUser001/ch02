<?php
/*
Напишите функцию для вычисления факториала числа (неотрицательного целого числа). Функция принимает число в качестве аргумента.

Пример вывода для n = 5:
120
*/
function factorial_of_a_number($n) {
  if($n ==0) {
	   return 1;
    }
  else {	
	   return $n * factorial_of_a_number($n-1);
    }
	}
print_r(factorial_of_a_number(5)."\n");
?>