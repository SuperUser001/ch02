<?php
    $multiCity=array(
        array('Город', 'Страна', 'Континент'),
        array('Tokyo', 'Japan', 'Asia'),
        array('Mexico City','Mexico', 'North America'),
        array('New York City', 'USA', 'North America'),
        array('Mumbai', 'India', 'Asia'),
        array('Seoul', 'Korea', 'Asia'),
        array('Shanghai', 'China', 'Asia'),
        array('Lagos', 'Nigeria', 'Africa'),
        array('Buenos Aires', 'Argentina', 'South America'),
        array('Cairo', 'Egypt', 'Africa'),
        array('London', 'UK','Europe')
    );
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>Многомерный массив</title>
<style type="text/css">
td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
th {text-align:center;}
table {border-collapse: collapse; border: 1px solid black;}
</style>
</head>
<body>
<h2>Таблица городов<br /></h2>
<table>
<thead>
<tr>
<th>
    <?php
    echo $multiCity[0][0] ."</th>\n<th>";
    echo $multiCity[0][1] ."</th>\n<th>";
    echo $multiCity[0][2] ."</th>\n";
    ?>
</tr>
</thead>

<?php
// Находим количество строк в массиве. Использование этой переменной в цикле for
// вместо точного числа дает вам возможность добавить в массив 
// позже без изменения цикла for. 
$num = count($multiCity); 
//Циклы For начинаются с "0" для перебора всего массива. В этом случае,
// вам нужно начать со второго элемента в массиве и начать с "1".
for ($row=1; $row<$num; $row++){
    echo "<tr>\n";
        foreach ($multiCity[$row] as $value) {
        echo "<td>$value</td>\n";
    }
    echo "</tr>\n";  
}
?>
</table>
</body>
</html>