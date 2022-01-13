<?php

class Shape
{
    protected $side1;
    protected $side2;
    protected $side3;

    public function __construct()
    {
        $this->side1 = 1.0;
        $this->side2 = 1.0;
        $this->side3 = 1.0;
    }

    public function getSide1(): float
    {
        return $this->side1;
    }

    public function setSide1(float $side1): void
    {
        $this->side1 = $side1;
    }

    public function getSide2(): float
    {
        return $this->side2;
    }

    public function setSide2(float $side2): void
    {
        $this->side2 = $side2;
    }

    public function getSide3(): float
    {
        return $this->side3;
    }

    public function setSide3(float $side3): void
    {
        $this->side3 = $side3;
    }


    public function getArea()
    {
        $dienTich = ($this->side1*$this->side1)*(sqrt(3)/4);
        return $dienTich;
    }

    public function getPerimeter()
    {
        $chuVi = $this->side1 + $this->side2 + $this->side3;
        return $chuVi;
    }

    public function toString()
    {
            echo "Chu vi là : ". $this->getPerimeter() .", Diện tích là : ". $this->getArea();
    }

}