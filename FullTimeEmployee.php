<?php

namespace phptest;

use phptest\Employee;

class FullTimeEmployee extends Employee
{
    private $monthlySalary;
    public function __construct($monthlySalary)
    {
        $this->monthlySalary = $monthlySalary;
    }


    public function calculateSalary()
    {
        return $this->monthlySalary;
    }
}
