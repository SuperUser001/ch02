<?php
/*
Напишите сценарий PHP, 
который вставляет новый элемент 
в массив в любую позицию.
Исходный массив:
1 2 3 4 5
После вставки '$' массив будет:
1 2 3 $ 4 5
*/
    $original = array( '1','2','3','4','5' );
    echo 'Оригинальный массив: '."\n";
    foreach ($original as $x) 
    {echo "$x ";}
    $inserted = '$';
    array_splice( $original, 3, 0, $inserted ); 
    echo " \n После вставки '$' массив будет: "."\n";
    foreach ($original as $x) 
    {echo "$x ";}
    echo "\n"
?>