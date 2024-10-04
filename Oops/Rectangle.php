<?php

namespace phptest\Oops;

class Rectangle extends Shape
{
    public $length;
    public $width;
    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function caculateArea()
    {
        $perimeter = ($this->width + $this->length) * 2;
        return "Diện tích hình chữ nhật là: {$perimeter} <br/>";
    }
}
