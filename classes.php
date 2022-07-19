<?php

//Класс точек
class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

//Класс для представления круга, наследуемый от класса точки
class Circle extends Point
{
    public $radius;

    function __construct($x, $y, $radius)
    {
        parent::__construct($x, $y);
        {
            $this->x = $x;
            $this->y = $y;
            $this->radius = $radius;
        }
    }
}