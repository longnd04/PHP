<?php

namespace phptest;

class Car
{
    private $brand;
    private $model;
    private $speed;


    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function setModel($model)
    {
        $this->model = $model;
    }
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getBrand()
    {
        echo $this->brand;
    }
    public function getModel()
    {
        echo $this->model;
    }
    public function getSpeed()
    {
        echo $this->speed;
    }
}
