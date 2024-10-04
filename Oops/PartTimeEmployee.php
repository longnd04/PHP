<?php

namespace phptest\Oops;

use phptest\Oops\Employee;

class PartTimeEmployee extends Employee
{
    private $hourlyRate;
    private $hoursWorked;
    public function __construct($hourlyRate, $hoursWorked)
    {
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }


    public function calculateSalary()
    {
        return $this->hourlyRate * $this->hoursWorked;
    }
}
