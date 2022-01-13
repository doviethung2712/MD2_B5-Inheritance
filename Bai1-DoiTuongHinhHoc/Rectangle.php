<?php
include_once 'Shape.php';

class Rectangle extends Shape
{
    protected $width;
    protected $height;

    public function __construct($name,$width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }


}