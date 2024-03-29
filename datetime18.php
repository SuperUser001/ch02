<?php
/*
Напишите функцию PHP для получения даты начала и окончания недели (по номеру недели) определенного года.

Пример вывода:

Пример недели и года: 12, 2021
Дата начала недели: 2021-3-24
Дата окончания недели: 2021-3-30
*/
$bday = new DateTime('11.4.1977'); // Ваша дата рождения
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
printf('Ваш возраст: %d лет, %d месяцев, %d дней', $diff->y, $diff->m, $diff->d);
printf("\n");
?>