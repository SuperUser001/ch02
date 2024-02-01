<?php
/*
Напишите сценарий PHP,который декодирует следующую строку JSON.
Пример кода JSON:
{"Название": "Зов кукушки", "Автор": "Роберт Гэлбрейт", 
    "Деталь": { "Издатель": "Маленький Браун" }}
Ожидаемый результат:
Название: Зов кукушки Автор: Роберт Гэлбрейт Издатель: Маленький Браун
*/
function wmfunction($value,$key) {
    echo "$key : $value"."\n";
}

$a = '{"Заголовок": "Зов кукушки", "Автор": "Роберт Гэлбрейт",
        "Детали": {"Издатель": "Маленький Браун" }}';
$j1 = json_decode($a,true);
array_walk_recursive($j1,"wmfunction");
?>