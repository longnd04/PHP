<?php

namespace phptest;

use phptest\Animal;

class Cat extends Animal
{
    public function makeSound()
    {
        return "Meo meo <br/>";
    }
}
