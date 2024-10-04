<?php

namespace phptest\Oops;

use phptest\Oops\Animal;

class Cat extends Animal
{
    public function makeSound()
    {
        return "Meo meo <br/>";
    }
}
