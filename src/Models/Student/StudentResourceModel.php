<?php

namespace phptest\Models\Student;

use phptest\Models\Student\StudentModel;
use phptest\Core\ResourceModel;

class StudentResourceModel extends ResourceModel
{
    public function __construct()
    {
        $this->__init("students", "id", new Student);
    }
}
