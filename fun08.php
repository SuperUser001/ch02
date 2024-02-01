<?php
/*
Напишите функцию PHP, которая проверяет, является ли переданная строка палиндромом?
Палиндром — число, буквосочетание, слово или текст, одинаково читающееся в обоих направлениях. Например, число 101; слово «топот».
*/

function check_palindrome($string) {
  if ($string == strrev($string))
      return "Да";
  else
	  return "Нет";
}

echo check_palindrome('madam')."<br>";
echo check_palindrome('robot');
?>