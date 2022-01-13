<?php
include_once 'Shape.php';
class Triangle extends Shape
{
    public $side1;
    public $side2;
    public $side3;
    public $color;

    public function __construct($side1, $side2, $side3,$color)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
        $this->color = $color;
    }

    public function toString()
    {
        return 'Chu vi: '.$this->getPerimeter().', Diện tích: '.$this->getArea().', Màu: '.$this->color;
    }




}