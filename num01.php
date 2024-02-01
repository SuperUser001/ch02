<?php 
/*
Есть массив $color = array ('красный', 'белый', 'зеленый')

Напишите сценарий PHP, который будет отображать цвета следующим образом:

зеленый
красный
белый
*/
$color = array('красный', 'белый', 'зеленый');
foreach ($color as $c)
    {
        echo "$c, ";
    }
sort($color);
echo "<ul>";
foreach ($color as $y)
    {
        echo "<li>$y</li>";
    }
echo "</ul>";
?>