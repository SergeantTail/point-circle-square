<?php

function getMinX($point)
{
    $minX = $point[0]->x;
    for ($i = 0; $i < count($point); ++$i) {
        if ($minX > $point[$i]->x) {
            $minX = $point[$i]->x;
        }
    }
    return $minX;
}

function getMaxX($point)
{
    $maxX = $point[0]->x;
    for ($i = 0; $i < count($point); ++$i) {
        if ($maxX < $point[$i]->x) {
            $maxX = $point[$i]->x;
        }
    }
    return $maxX;
}

function getMinY($point)
{
    $minY = $point[0]->y;
    for ($i = 0; $i < count($point); ++$i) {
        if ($minY > $point[$i]->y) {
            $minY = $point[$i]->y;
        }
    }
    return $minY;
}

function getMaxY($point)
{
    $maxY = $point[0]->y;
    for ($i = 0; $i < count($point); ++$i) {
        if ($maxY < $point[$i]->y) {
            $maxY = $point[$i]->y;
        }
    }
    return $maxY;
}