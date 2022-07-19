<?php

//Создаем массив объектов класса круга
function createCircle($arr)
{
    $circle = array();
    for ($i = 0; $i < count($arr->result); ++$i) {
        $array = array();
        for ($j = 0; $j < count($arr->result[$i]); ++$j) {
            $array[] = new Circle($arr->result[$i][$j]->x, $arr->result[$i][$j]->y, $arr->result[$i][$j]->radius);
        }
        $circle[] = $array;
    }
    return $circle;
}

//Массив координат левой нижней и правой верхней точек, описывающей прямоугольник, для каждой из окружностей
function getCoordinates($circle)
{
    $coordinate = array();
    for ($i = 0; $i < count($circle); ++$i) {
        $array = array();
        for ($j = 0; $j < count($circle[$i]); ++$j) {
            for ($n = 0; $n < 2; ++$n) {
                $x = $circle[$i][$j]->x + pow(-1, $n) * $circle[$i][$j]->radius;
                $y = $circle[$i][$j]->y + pow(-1, $n) * $circle[$i][$j]->radius;
                $array[] = new Point($x, $y);
            }
        }
        $coordinate[] = $array;
    }
    return $coordinate;
}

//Получаем максимальные и минимальные значения координат, которые будут описывать искомый прямоугольник
function getMaxMinPoints($coordinate)
{
    $result = array();
    for ($i = 0; $i < count($coordinate); ++$i) {
        $array = array();
        $array["left_bottom"] = new Point(getMinX($coordinate[$i]), getMinY($coordinate[$i]));
        $array["right_top"] = new Point(getMaxX($coordinate[$i]), getMaxY($coordinate[$i]));
        $result[] = $array;
    }
    return $result;
}