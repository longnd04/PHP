<?php

namespace phptest\Oops;

//Tạo class và object
class Person
{
    public $name;
    public $age;
    public $gender;

    public function introduce()
    {
        echo "My name is {$this->name} I am {$this->age} years old. I am {$this->gender}. <br/>";
    }
}
