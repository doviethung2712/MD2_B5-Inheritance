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

    public function getArea()
    {
        $nuaChuVi = $this->getPerimeter();
        $dienTich = sqrt($nuaChuVi * ($nuaChuVi - $this->side1) * ($nuaChuVi - $this->side2) * ($nuaChuVi - $this->side3));
        return $dienTich;
    }

    public function getPerimeter()
    {
        $chuVi = $this->side1 + $this->side2 + $this->side3;
        return $chuVi;
    }

    public function toString()
    {

    }

}