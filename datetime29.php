<?php
//Напишите сценарий PHP для отображения времени в указанном часовом поясе.
ini_set('date.timezone','Europe/Moscow'); 
echo '<p>'.date("G:i").'</p>'."\n";
?>