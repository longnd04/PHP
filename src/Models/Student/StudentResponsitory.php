<?php

namespace phptest\Models\Student;

use phptest\Models\Student\StudentResourceModel;

class StudentResponsitory
{
    private $studentResourceModel;
    public function __construct()
    {
        $this->studentResourceModel = new StudentResourceModel;
    }

    function getAll()
    {
        return $this->studentResourceModel->getall();;
    }
    function get($id)
    {
        return $this->studentResourceModel->get($id);
    }
    function add($model)
    {
        return $this->studentResourceModel->save($model);
    }

    function edit($model)
    {
        return $this->studentResourceModel->save($model);
    }

    function delete($id)
    {
        return $this->studentResourceModel->delete($id);
    }
}
