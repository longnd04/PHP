<?php

namespace phptest\Oops;

use phptest\Oops\Person;
use phptest\Oops\Dog;
use phptest\Oops\Cat;
use phptest\Oops\Car;
use phptest\Oops\Circle;
use phptest\Oops\Rectangle;
use phptest\Oops\FullTimeEmployee;
use phptest\Oops\PartTimeEmployee;
use phptest\Oops\Book;

class Main
{
    protected $info1;
    protected $dog;
    protected $cat;
    protected $hyundai;
    protected $toyota;
    protected $bmw;
    protected $cicle;
    protected $rectangle;
    protected $fullTimeEmployee;
    protected $partTimeEmployee;
    protected $book;

    public function __construct() {}

    public function excecute()
    {
        //1
        $info1 = new Person;
        $info1->name = "Long";
        $info1->age = 04;
        $info1->gender = "male";
        $info1->introduce();

        //2
        $dog = new Dog;
        $cat = new Cat;
        echo $dog->makeSound();
        echo $cat->makeSound();

        //3
        $hyundai = new Car;
        $toyota = new Car;
        $bmw = new Car;
        $hyundai->setBrand("Hyundai ");
        $hyundai->setModel("Grand i10 ");
        $hyundai->setSpeed("100km/h <br/>");

        $toyota->setBrand("Toyota ");
        $toyota->setModel("Vios ");
        $toyota->setSpeed("120km/h <br/>");

        $bmw->setBrand("BMW ");
        $bmw->setModel("X5 ");
        $bmw->setSpeed("200km/h <br/>");

        $hyundai->getBrand();
        $hyundai->getModel();
        $hyundai->getSpeed();

        $toyota->getBrand();
        $toyota->getModel();
        $toyota->getSpeed();

        $bmw->getBrand();
        $bmw->getModel();
        $bmw->getSpeed();

        //4
        $circle = new Circle(3);
        $rectangle = new Rectangle(3, 4);
        echo $circle->caculateArea();
        echo $rectangle->caculateArea();

        //5
        $fullTimeEmployee = new FullTimeEmployee(500);
        $partTimeEmployee = new PartTimeEmployee(10, 40);

        $employee = [];
        $employee[] = new FullTimeEmployee(500);
        $employee[] = new PartTimeEmployee(10, 40);

        foreach ($employee as $employee) {
            echo $employee->calculateSalary() . "<br/>";
        }

        //6
        $book1 = new Book("OOP in PHP", "John", 100);
        $book2 = new Book("OOP in Java", "Peter", 200);
        $book3 = new Book("OOP in C#", "David", 300);

        echo $book1->getDetails();
        echo $book2->getDetails();
        echo $book3->getDetails();
    }
}
