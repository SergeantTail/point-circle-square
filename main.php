<?php
require_once('classes.php');
require_once('get_points.php');
require_once('server.php');
require_once('functions.php');

// Получаем данные для теста с сервера
$arr = getTasks();

//Создаем массив объектов класса круга
$circle = createCircle($arr);

//Массив координат левой нижней и правой верхней точек, описывающей прямоугольник, для каждой из окружностей
$coordinate = getCoordinates($circle);

//Получаем максимальные и минимальные значения координат, которые будут описывать искомый прямоугольник
$result = getMaxMinPoints($coordinate);

//Сверяем результат с ответом от сервера
checkResults($result);