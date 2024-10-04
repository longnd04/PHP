<?php

namespace phptest;

class Circle extends Shape
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function caculateArea()
    {
        $perimeter = $this->radius * 2 * pi();
        return "Diện tích hình tròn là: {$perimeter} <br/>";
    }
}
