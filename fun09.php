<?php
/*
Создайте пользовательскую форму с сообщением «Введите значения длины и ширины прямоугольника». 
Создайте два текстовых поля, одно для ввода длины и одно для ввода ширины. 
Напишите функцию для обработки значений, введенных пользователем, верните пользователю результат: 
«Прямоугольник длиной $l и шириной $w имеет площадь $area», где $l и $w - аргументы, а $area - результат.
*/
//Если данные не отправлены, показать форму
if(!isset ($_POST['submit'])){
?>
<form method="post" action="yourfile.php">
<p>Введите значения длины и ширины прямоугольника.</p>
<p>Длина:  <input type="text" name="length" size="5" /> 
Ширина:  <input type="text" name="width" size="5" /></p>
<input type="submit" name="submit" value="Выполнить" />
</form>
<?php
//Если данные отправлены, обрабатываем и возвращаем их пользователю
} else {
//Получение пользовательских значений
$l = $_POST['length'];
$w = $_POST['width'];
//Определите функцию.
function recArea($l, $w){
  $area = $l * $w;
  return $area;
}
//Используем функцию с пользовательскими значениями
echo "Площадь прямоугольника длиной $l и шириной $w равна " . recArea($l, $w). "."; 
}
?>