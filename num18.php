<?php
/*
Напишите сценарий PHP, 
который отображает все числа от 200 до 250, 
делящиеся на 4.
Примечание. Не используйте управляющие операторы PHP.
Ожидаемый результат:
200,204,208,212,216,220,224,228,232,236,240,244,248
*/

echo implode(",",range(200,250,4))."\n";
?>